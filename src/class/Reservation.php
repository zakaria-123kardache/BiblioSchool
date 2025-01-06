<?php

class Reservation {

    private $id ; 
    private $etat ; 
    private $livre_name ; 
    private $time ;
    
    


    public function __construct($etat,$livre_name,$time)
    {
  
        $this -> etat = $etat ;
        $this -> livre_name = $livre_name ;
        $this -> time = $time ;
    }

    public function getPropriety($ProprietyName){
        return $this -> $ProprietyName; 
    }

    public function setPropriety($ProprietyName, $value){
        return $this -> $ProprietyName = $value ; 
    }
}






?>