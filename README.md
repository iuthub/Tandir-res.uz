<p align="center"><img src="./assets/Techieland3.svg" width="400"></p>
<p align="center">
	<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## About Techieland

Techieland is a software solution for cafe and restourant businesses.
- Simple
- Powerfli
- User-friendly
- Free

## Migrations

<p align="center"><img src="./database/db-for-project/ip-project-restourant.png" width="400"></p>


<h3>Tool used</h3>
<ol>
	<li>dbdiagram.io - web-site for drawing EER Diagrams</li>
	<li>phpMyAdmin</li>
	<li>MariaDB</li>
	<li>Mockgaroo - generator of dump information</li>
</ol>


<h3>Tables</h3>

<h4>roles</h4>
<ul>
	<li>id</li>
	<li>role</li>
	<li>edit_privilege</li>
	<li>is_admin</li>
</ul>

<h4>staff</h4>
<ul>
	<li>id</li>
	<li>role_id</li>
	<li>username</li>
	<li>password</li>
	<li>first_name</li>
	<li>last_name</li>
	<li>phone_number</li>
	<li>email</li>
</ul>

<h4>clients</h4>
<ul>
	<li>id</li>
	<li>first_name</li>
	<li>last_name</li>
	<li>phone_number</li>
	<li>email</li>
</ul>

<h4>board_type</h4>
<ul>
	<li>id</li>
	<li>type</li>
	<li>description</li>
	<li>capacity</li>
	<li>price</li>
</ul>

<h4>boards</h4>
<ul>
	<li>id</li>
	<li>type_id</li>
	<li>is_available</li>
	<li>added_by</li>
	<li>added_time</li>
	<li>edited_by</li>
	<li>edited_time</li>
</ul>

<h4>category</h4>
<ul>
	<li>id</li>
	<li>name</li>
	<li>description</li>
	<li>portion_units</li>
</ul>

<h4>meals</h4>
<ul>
	<li>id</li>
	<li>name</li>
	<li>category_id</li>
	<li>price</li>
	<li>portion</li>
	<li>is_available</li>
	<li>ingredients</li>
	<li>ready_time</li>
	<li>added_by</li>
	<li>added_time</li>
	<li>edited_by</li>
	<li>edited_time</li>
</ul>

<h4>orders</h4>
<ul>
	<li>id</li>
	<li>client_id</li>
	<li>is_approved</li>
	<li>approved_by</li>
	<li>date</li>
	<li>total_price</li>
</ul>

<h4>board_orders</h4>
<ul>
	<li>id</li>
	<li>order_id</li>
	<li>board_id</li>
	<li>order_time</li>
</ul>

<h4>meal_orders</h4>
<ul>
	<li>id</li>
	<li>order_id</li>
	<li>board_order_id</li>
	<li>meal_id</li>
	<li>quantity</li>
	<li>total_price</li>
	<li>order_time</li>
	<li>ready_time</li>
</ul>