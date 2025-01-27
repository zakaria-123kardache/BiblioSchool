<?php

namespace app\Model;

use app\Model\Categorie;
use app\Model\Tag;


class Livre
{

    private int $id;
    private string $titre;
    private string $auteur;
    private string $isbn;
    private string $photo;
    private string $langue;
    private string $contenu;
    private string $description;
    private int $annePublication;
    private int $dureePret;
    private int $copiesDisponibles;
    private Categorie $categorie;
    private array $tags = [];
    private array $reservations = [];

    public function __construct(
        string $titre = '',
        string $auteur = '',
        string $isbn = '',
        string $langue = '',
        string $contenu = '',
        string $description = '',
        int $anneePublication = 0,
        int $dureePret = 0,
        int $copiesDisponibles = 0,
        Categorie $categorie = null
    ) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->contenu = $contenu;
        $this->description = $description;
        $this->setIsbn($isbn);
        $this->langue = $langue;
        $this->setAnneePublication($anneePublication);
        $this->dureePret = $dureePret;
        $this->copiesDisponibles = $copiesDisponibles;
        $this->categorie = $categorie ?? new Categorie();
    }
    

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getAuteur(): string
    {
        return $this->auteur;
    }
    public function getIsbn(): string
    {
        return $this->isbn;
    }
    public function getPhoto(): string
    {
        return $this->photo;
    }
    public function getLangue(): string
    {
        return $this->langue;
    }
    public function getAnnePublication(): int
    {
        return $this->annePublication;
    }
    public function getDureePret(): int
    {
        return $this->dureePret;
    }
    public function getCopiesDisponibles(): int
    {
        return $this->copiesDisponibles;
    }
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }
    public function getReservations(): array
    {
        return $this->reservations;
    }
    public function getContenu(): string
    {
        return $this->contenu;
    }
    public function getDescription(): string
    {
        return $this->description;
    }





    public function setId(int $id): void
    {

        $this->id = $id;
    }
    public function setIsbn(string $isbn): void
    {

        $this->isbn = $isbn;
    }
    public function setTitre(string $titre): void
    {

        $this->titre = $titre;
    }
    public function setPhoto(string $photo): void
    {

        $this->photo = $photo;
    }

    public function setAuteur(string $auteur): void
    {

        $this->auteur = $auteur;
    }

    public function setLangue(string $langue): void
    {

        $this->langue = $langue;
    }
    public function setContenu(string $contenu): void
    {

        $this->contenu = $contenu;
    }
    public function setDescription(string $description): void
    {

        $this->description = $description;
    }


    public function setDureePret(int $dureePret): void
    {

        $this->dureePret = $dureePret;
    }
    public function setCopiesDisponibles(int $copiesDisponibles): void
    {

        $this->copiesDisponibles = $copiesDisponibles;
    }

    public function setCategorie(Categorie $categorie): void
    {

        $this->categorie = $categorie;
    }

    public function setReservation(string $reservations): void
    {

        $this->reservations = $reservations;
    }

    public function setAnneePublication(int $annePublication): void
    {

        $this->annePublication = $annePublication;
    }

    public function addTag(Tag $tag): void
    {
        $this->tags[] = $tag;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function toString(): string
    {
        return sprintf(
            "Livre: [ID: %d, Titre: %s, Auteur: %s, ISBN: %s, Langue: %s, Annee: %d, Duree: %d jours, Copies: %d, Categorie: %s]",
            $this->id,
            $this->titre,
            $this->auteur,
            $this->isbn,
            $this->langue,
            $this->annePublication,
            $this->dureePret,
            $this->copiesDisponibles,
            $this->categorie->getName()
        );
    }
}
