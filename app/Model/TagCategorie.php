<?php

class Tagcategorie {


    protected int $id ; 
    protected string $name ; 

    public function __construct()
    {
        
    }

    public function getId():int 
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function setName($name):void
    {
        $this->name =$name;
    }

    public function __toString()
    {
        return "(Tagcategories)=> id :" . $this->id . "(Tagcategories) => name :" . $this->name 
            ;
    }
}