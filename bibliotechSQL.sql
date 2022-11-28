CREATE DATABASE bibliotech;
USE bibliotech;

CREATE TABLE user (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(45) NOT NULL,
    password VARCHAR(45) NOT NULL,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE emprestimos (
	id INT AUTO_INCREMENT PRIMARY KEY,
	idUser INT NOT NULL,
    livro VARCHAR(45) NOT NULL,
    data_emp DATE,
    data_dev DATE,
    FOREIGN KEY(idUser) REFERENCES user(id)
);

