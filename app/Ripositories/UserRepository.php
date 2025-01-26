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

    public function updateUser (Utilisateur $user)
    {
        $query = "UPDATE users SET firstname ='"
        .$user->getFirstname()."',lastname='"
        .$user->getLastname()."',photo='"
        .$user->getPhoto()."',Email='"
        .$user->getEmail()."',password='"
        .$user->getpassword()."',role_id='"
        .$user->getRole()->getId() . ";";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->execute();

        return $user;
    }


    public function findUserById (int $id)
    {
        $query = "SELECT * FORM users WHERE id = ".$id;

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $stmt->execute();
        return $stmt->fetchAll(Utilisateur::class);

    }

    public function getAllUsers(): array
    {
        try {

            $query = "SELECT * FROM users";

            $stmt = Connexion::getInstance()->getConnexion()->query($query);
            return $stmt->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);

        } catch (PDOException $e) {

            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }

    





























}