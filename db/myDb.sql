DROP TABLE IF EXISTS users, food_items, orders;

CREATE TABLE users
(   user_id         SERIAL          PRIMARY KEY
,   first_name      VARCHAR(20)     NOT NULL
,   last_name       VARCHAR(20)     NOT NULL
,   user_type       VARCHAR(20)     NOT NULL
,   username        VARCHAR(20)     
,   passwrd         VARCHAR(30)     
,   created_date    TIMESTAMP       DEFAULT now()
);

CREATE TABLE food_items
(   food_item_id    SERIAL          PRIMARY KEY
,   item_name       VARCHAR(20)     NOT NULL
,   item_price      VARCHAR(20)     NOT NULL
);

CREATE TABLE orders
(   order_id        SERIAL          PRIMARY KEY
,   user_id         SERIAL          REFERENCES users(user_id)
,   food_item_id    SERIAL          REFERENCES food_items(food_item_id)
,   created_date    TIMESTAMP       DEFAULT now()
);

INSERT INTO users (first_name, last_name, user_type, username, passwrd) 
VALUES ( 'John', 'Doe', 1, 'jdoe', 'shh');