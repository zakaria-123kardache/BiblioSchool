<?php

namespace app\Controller;

use app\Model\Livre;
use app\Model\Categorie;
use app\Repository\LivreRepository;

class LivreController
{


    private $livreRepository;

    public function __construct(LivreRepository $livreRepository)
    {
        $this->livreRepository = $livreRepository;
    }

    public function addLivre()
    {
        if (isset($_POST['submit'])) {

            $categorie_id = $_POST['categorie_id'];
        if ($categorie_id == 0) {
            echo "Please select a valid category.";
            return;
        }

            $titre = $_POST['titre'];
            $auteur = $_POST['auteur'];
            $isbn = $_POST['isbn'];
            $langue = $_POST['langue'];
            $photo = $_POST['photo'];
            $description = $_POST['description'];
            $contenu = $_POST['contenu'];
            $duree_pret = $_POST['duree_pret'];
            $annePublication = $_POST['annePublication'];
            $copiesDisponibles = $_POST['copiesDisponibles'];
            // $categorie_id = $_POST['categorie_id'];

            $livre = new Livre();
            $categorie = new Categorie();
            $categorie->setId($categorie_id);
            $livre->setCategorie($categorie);

    

            $livre->setTitre($titre);
            $livre->setAuteur($auteur);
            $livre->setIsbn($isbn);
            $livre->setLangue($langue);
            $livre->setContenu($contenu);
            $livre->setDescription($description);
            $livre->setPhoto($photo);
            $livre->setDureePret($duree_pret);
            $livre->setAnneePublication($annePublication);
            $livre->setCopiesDisponibles($copiesDisponibles);


            if ($this->livreRepository->createLivre($livre)) {
                header("Location: livre.php");
            } else {
                echo "Error creating livre";
            }
        }
    }

    public function deletLivre(int $id)
    {
        if ($this->livreRepository->deletLivre($id)) {
            header("Location: livre.php");
            exit();
        } else {
            echo "Error deleting livre";
        }
    }


    public function getAllLivres()
    {
        return $this->livreRepository->getAllLivres();
    }

    public function findLivreById($id)
    {
        return $this->livreRepository->findLivreById($id);
    }
}
