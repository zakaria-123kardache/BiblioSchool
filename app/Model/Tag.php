<?php


class Tag extends Tagcategorie {

    public function __construct()
    {
        parent::__construct();
    }

    public static function instance(string $name){
        $instance = new self ();
        $instance->setName($name) ;  

        return $instance ; 

    }
    public function __toString()
    {
        return parent::__toString();  
    }
    
}