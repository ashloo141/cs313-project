-- heroku psql
-- \i db/food_menu.sql
DROP TABLE IF EXISTS food_items;

------------------------------------------------
-- Insert Food Items
------------------------------------------------
INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Press-To Panini', 4.50, 
'Ciabatta bread, Mozzarella, Turkey, Pesto, Tomato, Mayo');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Jack Hammer Panini', 4.50, 
'Ciabatta bread, Pepper Jack, Ham, Pesto, Tomato, Mayo');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Chicken BBQ Panini', 4.50, 
'Ciabatta bread, Pepper Jack, Rotisserie Chicken, BBQ Sauce, Pickles, Mayo');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Grilled Cheezy Panini', 3.00, 
'Ciabatta bread, Mozzarella, Mayo');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Tomato Basil', 2.50, 
'Tomato Basil Soup.');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Chocolate Thunder', 2.50, 
'Cinnamon Swirl Bread, Jet-puffed, Nutella.');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Combo 1', 1.50, 
'Add Chips and a Drink to your selected meal.');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Combo 2', 2.50, 
'Add Soup and Drink to your selected meal.');

INSERT INTO food_items (item_name, item_price, item_info)
VALUES ('Combo 3', 2.50, 
'Add Dessert and Drink to your selected meal.');

SELECT * FROM food_items;