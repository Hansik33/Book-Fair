CREATE DATABASE book_fair CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE book_fair;
CREATE TABLE global_access (global_password varchar(16)) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
INSERT INTO global_access (global_password) VALUES ('kopernikus');
CREATE TABLE books_data (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
first_name varchar(15) NOT NULL,
last_name varchar(30) NOT NULL,
tel varchar(9) NOT NULL, 
price int(3) UNSIGNED NOT NULL,
description_book varchar(200) NOT NULL) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;