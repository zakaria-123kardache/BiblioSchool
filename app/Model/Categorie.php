<?php


class Categorie extends Tagcategorie{

    private string $logo ; 

    public function __construct()
    {
        parent::__construct();
    }

    public function getLogo():string{
        return $this->logo ; 
    }

    public function setLogo(string $logo):void{
        $this->logo = $logo ; 
    }

    public static function instance(string $name , string $logo)
    {
        $instance = new self ();
        $instance->setName($name);
        $instance->logo = $logo ;

        return $instance ;
    } 

    public function __toString()
    {
        return parent::__toString() . " (Categorie) => photo: " . $this->logo;
    }
}