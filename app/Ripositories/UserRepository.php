<?php

namespace app\Repository;



use app\Core\Connexion;
use PDO;
use PDOException;
use app\Model\Utilisateur;

class UserRepository {

    public function createUser (Utilisateur $user): Utilisateur
    {
        $query = "INSERT INTO users(firstname, lastname , photo ,email ,  password , role_id)
        VALUES (:firstname, :lastname, :photo, :email, :password, :role_id)";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $firstname =$user->getFirstname();
        $lastname = $user->getLastname();
        $photo = $user->getPhoto();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role_id =$user->getRole()->getId();

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role_id', $role_id);

        $stmt->execute();
        $user->setId(Connexion::getInstance()->getConnexion()->lastInsertId());

        return $user ; 

    }


    public function deletUser(int $id):int 
    {
        $query = "DELETE FROM users WHERE id :id";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function updateUser(Utilisateur $user) {

        $query = "UPDATE users SET firstname = :firstname, lastname = :lastname, photo = :photo, email = :email, password = :password, role_id = :role_id WHERE id = :id";
    
        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
    
        $stmt->bindParam(':firstname', $user->getFirstname());
        $stmt->bindParam(':lastname', $user->getLastname());
        $stmt->bindParam(':photo', $user->getPhoto());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->bindParam(':password', $user->getPassword());
        $stmt->bindParam(':role_id', $user->getRole()->getId());
        $stmt->bindParam(':id', $user->getId());
    
        $stmt->execute();
        
        return $user;
    }


    public function findUserById(int $id) {

        $query = "SELECT * FROM users WHERE id = :id";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetchObject(Utilisateur::class);
    }

    public function getAllUsers(): array {
        try {

            $query = "SELECT * FROM users";

            $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);

        } catch (PDOException $e) {

            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }

    





























}