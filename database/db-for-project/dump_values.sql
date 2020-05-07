
#ROLES TABLE
INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('admin', 1, 1);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('owner', 1, 1);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('manager', 1, 1);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('cheff-cooker', 1, 0);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('editor', 1, 0);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('accountant', 0, 0);

INSERT INTO roles(role, edit_privilege, is_admin)
	 VALUES ('waiter', 0, 0);



#BOARD_TYPE TABLE 
INSERT INTO board_type(type, description, capacity, price)
	 VALUES ('Big','Banquet table - wide and spacious', 8, 10000);

INSERT INTO board_type(type, description, capacity, price)
	 VALUES ('Medium', 'Wide and spacious table with sofa', 4, 8500);

INSERT INTO board_type(type, description, capacity, price)
	 VALUES ('Small', 'Table for "Rendezvous"', 2, 7000);



#CATEGORY TABLE 
INSERT INTO category(name, description, portion_units)
	 VALUES ('Hot snacks', 'really hot snacks', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Salads', 'tasty', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Cold snacks', 'really cold snacks', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Soups', 'tasty Soups', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Beef', 'Anything from Beef', 'gr');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Lamb', 'Anything from Lamb', 'gr');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Seafood', 'Anything from sea', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Poultry dishes', 'birds)', 'gr');

INSERT INTO category(name, description, portion_units)
	 VALUES ('BBQ', 'Barbeque dishes', 'gr');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Kebabs', 'Shashliklar', 'stick');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Custom dishes', 'Dishes from Cheff', 'portion');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Sauces', 'species', 'pc');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Cold drinks', 'Soda, Cola, Pepsi...', 'lt');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Hot drinks', 'Tea, Coffee, Chocolate...', 'lt');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Alcohol', 'Vine, Vodka, Champane...', 'lt');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Desserts', 'Cakes and cookies', 'pc');

INSERT INTO category(name, description, portion_units)
	 VALUES ('Side dishes', 'Rise and vegetables', 'pc');



