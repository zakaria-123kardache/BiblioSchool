<?php

namespace App\Models;

use Repository;

class Auth extends Repository {

    public function  __construct()
    {
        parent::__construct('users');

    }

    public function signUp($firstname, $lastname, $email, $password)
    {
        $db = $this->db;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
        $stmt->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $hashedPassword
        ]);
    
        return $db->lastInsertId();
    }


}