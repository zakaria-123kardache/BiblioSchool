CREATE DATABASE biblioschool; 

USE biblioschool ;



CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) ,
    logo VARCHAR(500) 

);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) ,
    lastname VARCHAR(50) ,
    email VARCHAR(100)  UNIQUE,
    password VARCHAR(255) ,
    role_id INT ,
    FOREIGN KEY (role_id) REFERENCES roles(id)  
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)  UNIQUE,
    logo VARCHAR(500) ,
);

CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)  UNIQUE
);

CREATE TABLE Livres (

    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) ,
    auteur VARCHAR(100) ,
    isbn VARCHAR(13)  UNIQUE, 
    photo VARCHAR(500)  , 
    contenu TEXT  , 
    description TEXT  , 
    langue VARCHAR(50) ,
    annee_publication INT ,
    duree_pret INT , 
    copies_disponibles INT ,

    categorie_id INT ,
    FOREIGN KEY (categorie_id) REFERENCES categories(id) 
);

CREATE TABLE Livres_tags (
    Livres_id INT ,
    tag_id INT ,
    PRIMARY KEY (Livres_id, tag_id),
    FOREIGN KEY (Livres_id) REFERENCES Livres(id) ,
    FOREIGN KEY (tag_id) REFERENCES tags(id) 
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT ,
    Livres_id INT ,
    status ENUM('pending', 'confirmed', 'terminated') DEFAULT 'pending',
    start_date DATE ,
    end_date DATE ,
    FOREIGN KEY (user_id) REFERENCES users(id) ,
    FOREIGN KEY (Livres_id) REFERENCES Livres(id) 
);