<?php


class  admin extends Utilisateur {
    private $role ;

    public function __construct($role)
    {
        $this -> role = $role;
    }

    public function getRole (){
        return $this -> role ;
    }
    public function setRole ($role){
        $this -> role = $role ;
    }
}



?>