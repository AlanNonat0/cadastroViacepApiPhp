# Using Api viaCep with php

The project uses a free API made available by https://viacep.com.br/
The system is responsible for registering addresses through a form developed in html and css (Bootstrap framework), php  in the back-end and mySql database.
MVC architecture was used to separate responsibilities and validations in front and backend.

## *Database*
The development uses the MySQL database, which can be changed at any time according to the need for use. The database should be configured in config/config.php

### Script SQL

CREATE TABLE <your db_name>

CREATE TABLE `address` (
    `id`            BIGINT(20)  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name`          VARCHAR(50) NOT NULL,
    `cep`           VARCHAR(8)  NOT NULL,
    `public_place`  VARCHAR(80) NOT NULL,
    `numb`          VARCHAR(10) NOT NULL,
    `district`      VARCHAR(50) NOT NULL,
    `city`          VARCHAR(50) NOT NULL,
    `state`         VARCHAR(2)  NOT NULL
);
