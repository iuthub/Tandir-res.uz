let pick=document.querySelector('.pseudo');
let pickForm=document.querySelector('.pickForm');
let grayCover=document.querySelector('.grayCover');
let cancelPickForm=document.querySelector('.cancelPickForm');
let quantityInput=document.querySelector('.quantityInput');

let allPickedItemsHolder=[];

let currentProductPrice=0;
let currrentProductName="";
let currentProductDefinition="";
let currentProductPortion=0;
let currentProductId;
let totalPrice=document.querySelector('.totalPrice');
let totalSalePrice=document.querySelector('.totalSalePrice');

let selectList=document.querySelector('.selectList');
let selectedProductDataTable=document.querySelector('.selectedProductData');
let submitPickForm=document.querySelector('.submitPickForm');

let reserveErrors=document.querySelector('.reserveErrors');

document.querySelector('.finalSubmit').addEventListener('click',function(event){
	if(!(document.getElementById('name').validity.valid &&
	 document.getElementById('email').validity.valid &&
	 document.getElementById('phone').validity.valid))
	{
		reserveErrors.innerHTML='';
		reserveErrors.appendChild(
			document.createTextNode('*Please all fields fill correctly  in reservation form!'));
	}
	else
	{
		let allSales='';
		document.querySelector('.hiddenTotalPrice').value=totalSalePrice.innerText;
		for(item of allPickedItemsHolder)
		{
			allSales+=item.id + ':' + item.quantity + '|';
		}
		document.querySelector('.hiddenAllSales').value=allSales;
		document.querySelector('.reserveForm').submit();
	}                          
});



submitPickForm.addEventListener('click',function(event){
	if(!quantityInput.validity.valid)
	{
		return;
	}

	let row=document.createElement('tr');
	
	let p_name=document.createElement('td');
	p_name.innerText=currentProductName;

	let p_definition=document.createElement('td');
	p_definition.innerText=currentProductDefinition;

	let p_price=document.createElement('td');
	p_price.innerText=(currentProductPrice * quantityInput.value) + '$';
	totalSalePrice.innerText=Number(totalSalePrice.innerText)+(currentProductPrice * quantityInput.value);

	let p_picked=document.createElement('td');
	p_picked.innerText=quantityInput.value;

	let excludeButton=document.createElement('button');
	excludeButton.innerText='Exclude';
	excludeButton.className='excludeButton btn btn-custom mt-3';
	excludeButton.addEventListener('click',function(event){
		// console.log(event.target.parentNode.childNodes[2].innerText.match(/\d+/)[0]);
		totalSalePrice.innerText=Number(totalSalePrice.innerText) -
		Number(event.target.parentNode.childNodes[2].innerText.match(/\d+/)[0]);
		event.target.parentNode.remove();
	});

	row.append(p_name,p_definition,p_price,p_picked,excludeButton);
	
	allPickedItemsHolder.push({'id':currentProductId,'quantity':quantityInput.value});

	selectedProductDataTable.appendChild(row);
	selectList.style.display='table';
	pickForm.style.display='none';
	grayCover.style.display='none';
	event.preventDefault();
});

quantityInput.addEventListener('input',function(event){
	if(currentProductPrice==0)
	{
		totalPrice.innerText='Error Occured';
		return;
	}
	if(quantityInput.value>=0 && quantityInput.value<=50)
	{
		totalPrice.innerText=(currentProductPrice * quantityInput.value) + '$';
	}
});

function onClickPick(event)
{
	if(event.button==0)
	{
		let meal=event.target.parentNode.parentNode;
		currentProductPrice= meal.getAttribute('data-price');
		currentProductName=meal.getAttribute('data-name');
		currentProductDefinition=meal.getAttribute('data-definition');
		currentProductPortion=meal.getAttribute('data-portion');
		currentProductId=meal.getAttribute('data-id');
		document.querySelector('.p_name').innerText=currentProductName;
		document.querySelector('.p_definition').innerText=currentProductDefinition;
		document.querySelector('.p_price').innerText=currentProductPrice;
		document.querySelector('.p_portion').innerText=currentProductPortion;
		console.log(quantityInput);
		quantityInput.max=currentProductPortion;
		totalPrice.innerText=currentProductPrice + '$';
		pickForm.style.display='block';
		grayCover.style.display='block';

	}
}

cancelPickForm.addEventListener('click',function(event){
		pickForm.style.display='none';
		grayCover.style.display='none';
});

for(let p of document.querySelectorAll('.pseudo'))
{
	p.addEventListener('click',onClickPick);
}

//meal type selectors
document.querySelector('.meals').addEventListener('click',function(event){
	document.querySelector('.mealContainer').style.display='grid';
	document.querySelector('.saladContainer').style.display='none';
	document.querySelector('.drinkContainer').style.display='none';
});

document.querySelector('.salads').addEventListener('click',function(event){
	document.querySelector('.mealContainer').style.display='none';
	document.querySelector('.saladContainer').style.display='grid';
	document.querySelector('.drinkContainer').style.display='none';
});

document.querySelector('.drinks').addEventListener('click',function(event){
	document.querySelector('.mealContainer').style.display='none';
	document.querySelector('.saladContainer').style.display='none';
	document.querySelector('.drinkContainer').style.display='grid';
});