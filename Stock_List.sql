DROP DATABASE Stock_List;

CREATE DATABASE IF NOT EXISTS Stock_List;

USE Stock_List;

CREATE TABLE IF NOT EXISTS Vehicle (
prod_id INT(10) PRIMARY KEY UNIQUE NOT NULL AUTO_INCREMENT,
model CHAR(25) NOT NULL,
make CHAR(25) NOT NULL,
price INT(10) NOT NULL,
features VARCHAR(500) NOT NULL
);

DELIMITER $$
CREATE PROCEDURE addToStock(
model CHAR(25),
make CHAR(25),
price INT(10),
features VARCHAR(500)
)
BEGIN
INSERT INTO Vehicle(model, make, price, features) VALUES (model, make, price, features);
END
$$
DELIMITER $
