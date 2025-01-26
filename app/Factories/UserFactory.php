<?php

namespace app\Factory;

use app\Model\Utilisateur;
use Role;

class UserFactory {

    public static function creatUser(string $firstname, string $lastname, string $email, string $password, Role $role):Utilisateur
    {
        return new Utilisateur($firstname , $lastname, $email , $password , $role);
    } 


}