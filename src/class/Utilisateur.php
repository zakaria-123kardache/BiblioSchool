<?php

class Utilisateur {

    PRIVATE $id ; 
    PRIVATE $name ; 
    PRIVATE $photo ; 
    PRIVATE $role ; 
    PRIVATE $username ; 
    PRIVATE $password ; 
    

    public function __construct($name,$photo,$role,$username,$password)
    {
      
        $this -> name = $name ; 
        $this -> photo = $photo ; 
        $this -> role = $role ; 
        $this -> username = $username ; 
        $this -> password = $password ; 
    }

    
    public function getName (){

        return $this -> name ;
    }
    public function getPhoto (){

        return $this -> photo ;
    }
    public function getRole (){

        return $this -> role ;
    }

    public function getUsername (){

        return $this -> username ;
    }

    public function getPassword (){

        return $this -> password ;
    }




   
    public function setName ($name){
        $this -> name = $name ;
    }
    public function setPhoto ($photo){
        $this -> photo = $photo ;
    }
    public function setRole ($role){
        $this -> role = $role ;
    }
    public function setUsername ($username){
        $this -> username = $username ;
    }
    public function setPassword ($password){
        $this -> password = $password ;
    }

}



?>