CREATE DATABASE BiblioSchool;

USE BiblioSchool;



CREATE TABLE Utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    -- name VARCHAR(100),
    photo VARCHAR(250),
    username VARCHAR(100), 
    password VARCHAR(100),

    id_role INT ,
    FOREIGN KEY (id_role) REFERENCES Role(id)
);


CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL , 
    role ENUM(
        'apprenant',
        'gerant',
        'admin'
    ) DEFAULT 'apprenant'
)




CREATE TABLE Admin (

    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    photo VARCHAR(250),
    username VARCHAR(100), 
    password VARCHAR(100),

    id_Utilisateurs INT ,
    FOREIGN KEY (id_Utilisateurs) REFERENCES Utilisateurs(id) ,

    id_Livres INT ,
    FOREIGN KEY (id_Livres) REFERENCES Livres(id) ,

    id_Reservation INT ,
    FOREIGN KEY (id_Reservation) REFERENCES Reservation(id) ,

    
);



CREATE TABLE apprenant (

    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    photo VARCHAR(250),
    username VARCHAR(100), 
    password VARCHAR(100),
    id_Utilisateurs INT ,
    FOREIGN KEY (id_Utilisateurs) REFERENCES Utilisateurs(id) 
    -- role ENUM('apprenant') DEFAULT 'apprenant'
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
    finish_time time,

    id_apprenant INT ,
    FOREIGN KEY (id_apprenant) REFERENCES apprenant(id) 

    id_geront INT ,
    FOREIGN KEY (id_geront) REFERENCES geront(id) 
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

id_geront INT ,
FOREIGN KEY (id_geront) REFERENCES geront(id) 


);

CREATE TABLE geront (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(100), 
    password VARCHAR(100),
    photo VARCHAR(250),

    id_Utilisateurs INT ,
    FOREIGN KEY (id_Utilisateurs) REFERENCES Utilisateurs(id) ,
    -- role ENUM('gerant') DEFAULT 'gerant'

);