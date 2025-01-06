<?php 
require_once('./Utilisateur.php');
require_once('./Reservation.php');



class Geron extends Utilisateur {



    public function CreatLivre(){

    }

    public function EditLivre(){

    }

    public function ValidationReservation(Reservation $reservation)
    {
        $reservation -> setPropriety("etat","valid");
    }

    public function RejectReservation(Reservation $reservation){
        $reservation -> setPropriety("etat","rejected");
    }

   

};








?> 