<?php

class Livres {


    private $id ;
    private $titre ;
    private $photo ;
    private $auteur ;
    private $langue ;
    private $anne ;
    private $copies ;
    private $categore ;
    private $tags ;



    public function _construct ($id,$Titre,$photo,$auteur,$langue,$anne,$copies,$categore,$tags){

    }


    public function getId (){
        return $this -> id ;
    }
    public function getTitre (){
        return $this -> titre ;
    }
    public function getPhoto (){
        return $this -> photo ;
    }
    public function getAuteur (){
        return $this -> auteur ;
    }
    public function getlangue (){
        return $this -> langue ;
    }
    public function getAnne (){
        return $this -> anne ;
    }
    public function getCopies (){
        return $this -> copies ;
    }
    public function getcategore (){
        return $this -> categore ;
    }
    public function getTags (){
        return $this -> tags ;
    }



    public function setId ($id){
        $this -> id = $id ; 
    }
    public function setTitre ($titre){
        $this -> titre = $titre ; 
    }
    public function setPhoto ($photo){
        $this -> photo = $photo ; 
    }
    public function setAuteur ($auteur){
        $this -> auteur = $auteur ; 
    }
    public function setLangue ($langue){
        $this -> langue = $langue ; 
    }
    public function setAnne ($anne){
        $this -> anne = $anne ; 
    }
    public function setCopies ($copies){
        $this -> copies = $copies ; 
    }
    public function setCategore ($categore){
        $this -> categore = $categore ; 
    }
    public function setTags ($tags){
        $this -> tags = $tags ; 
    }



}




?>