<?php

use app\Core\Connexion;

class LivreRepository {


    public function createLivre(Livre $livre): Livre
    {
        $query = "INSERT INTO Livres(titre, auteur, isbn, langue, annee_publication, duree_pret, copies_disponibles , categorie_id, photo)
                  VALUES (:titre, :auteur, :isbn, :langue, :annee_publication, :duree_pret), :copies_disponibles, :categorie_id , :photo";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);


        $titre = $livre->getTitre();
        $auteur = $livre->getAuteur();
        $photo = $livre->getPhoto();
        $isbn = $livre->getIsbn();
        $langue = $livre->getLangue();
        $annee_publication = $livre->getAnnePublication();
        $duree_pret = $livre->getDureePret();
        $copies_disponibles = $livre->getCopiesDisponibles();
        $categorie_id = $livre->getCategorie()->getId();

        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':auteur', $auteur);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':langue', $langue);
        $stmt->bindParam(':annee_publication', $annee_publication);
        $stmt->bindParam(':duree_pret', $duree_pret);
        $stmt->bindParam(':copies_disponibles', $copies_disponibles);
        $stmt->bindParam(':categorie_id', $categorie_id);
     

        $stmt->execute();
        $livre->setId(Connexion::getInstance()->getConnexion()->lastInsertId());

        return $livre;
    }


    public function deletLivre(int $id): int
    {
        $query = "DELETE FROM Livres WHERE id =:id";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function updateUser(Livre $livre)
    {
        $query = "UPDATE users 
              SET titre = :titre, auteur = :auteur, photo = :photo, 
                  isbn = :isbn, langue = :langue, 
                  annee_publication = :annee_publication, duree_pret = :duree_pret, 
                  copies_disponibles = :copies_disponibles, categorie_id = :categorie_id, 
              WHERE id = :id";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $titre = $livre->getTitre();
        $auteur = $livre->getAuteur();
        $photo = $livre->getPhoto();
        $isbn = $livre->getIsbn();
        $langue = $livre->getLangue();
        $annee_publication = $livre->getAnnePublication();
        $duree_pret = $livre->getDureePret();
        $copies_disponibles = $livre->getCopiesDisponibles();
        $categorie_id = $livre->getCategorie()->getId();

        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':auteur', $auteur);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':langue', $langue);
        $stmt->bindParam(':annee_publication', $annee_publication);
        $stmt->bindParam(':duree_pret', $duree_pret);
        $stmt->bindParam(':copies_disponibles', $copies_disponibles);
        $stmt->bindParam(':categorie_id', $categorie_id);

        $stmt->execute();

        return $stmt->rowCount();
    }



    public function findLivreById(int $id)
    {

        $query = "SELECT * FROM Livres WHERE id = :id";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetchObject(Livre::class);
    }

    public function getAllLivres(): array
    {
        try {

            $query = "SELECT * FROM Livres";

            $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS, Livre::class);
        } catch (PDOException $e) {

            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }


}