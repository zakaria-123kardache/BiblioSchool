<?php


class Reservation {

    private int $id ; 
    private string $etat ;
    private Utilisateur $apprenant ;
    private Livre $livre ;
    private int $duree ; 


public function __construct(){}

    public function setId(int $id): void 
    {
        $this->id = $id;
    }
    public function setDuree(int $duree): void 
    {
        $this->duree = $duree;
    }
    public function setEtat(string $etat): void 
    {
        $this->etat = $etat;
    }
    public function setApprenant(Utilisateur $apprenant): void 
    {
        $this->apprenant = $apprenant;
    }
    public function setLivre(Livre $livre): void 
    {
        $this->livre = $livre;
    }

    public function getId(): int 
    {
        return $this->id;
    }
    public function getDuree(): int 
    {
        return $this->duree;
    }
    public function getEtat(): string 
    {
        return $this->etat;
    }
    public function getApprenant(): Utilisateur 
    {
        return $this->apprenant;
    }
    public function getLivre(): Livre 
    {
        return $this->livre;
    }

    public function __toString(): string 
    {
        return "id: " .$this->id. " , duree: " .$this->duree . " , etat: "
        .$this->etat . " , apprenant: " .$this->apprenant . " , livre: " .$this->livre;

    }

}