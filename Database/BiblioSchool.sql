CREATE DATABASE BiblioSchool;

USE BiblioSchool;



CREATE TABLE Utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),
    lastname (100),
    photo (250),
    UserName varchar(100), 
    password varchar(100),
    role ENUM(
        'apprenant',
        'gerant',
        'admin'
    ) DEFAULT 'apprenant'
);

CREATE TABLE Admin (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),
    lastname (100),
    photo (250),
    role ENUM('admin') DEFAULT 'admin'
);



CREATE TABLE apprenant (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),
    lastname (100),
    photo (250),
    role ENUM('apprenant') DEFAULT 'apprenant'
);
    
CREATE TABLE Reservation (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    etat ENUM(
        'Pending ',
        'Confirmé ',
        'Terminé '
    ) DEFAULT 'Pending',
    livre_name VARCHAR(200),
    start_time time,
    finish_time time
);
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100)
   
);
CREATE TABLE tags (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100)
   
);

CREATE TABLE Livres (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL ;
name VARCHAR (100), 
anne INT, 
photo VARCHAR (100), 
auteur VARCHAR (100), 
langue VARCHAR (100),
tag VARCHAR(100), 
category VARCHAR(100), 
copies INT  

id_categorie INT ,
id_tags INT ,
FOREIGN KEY (id_categorie) REFERENCES categories(id) ,
FOREIGN KEY (id_tags) REFERENCES tags(id) 

);

CREATE TABLE gerant (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),
    lastname (100),
    photo (250),
    role ENUM('gerant') DEFAULT 'gerant',
    id_reservation INT ,
    id_Livres INT ,
    FOREIGN KEY (id_reservation) REFERENCES Reservation(id) ,
    FOREIGN KEY (id_Livres) REFERENCES Reservation(id) 
);