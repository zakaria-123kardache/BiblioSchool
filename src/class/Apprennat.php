<?php


require_once('./Reservation.php');


class Apprennat extends Utilisateur {

    private $reservation = [];

    public function addReservation (Reservation $reservation)
    {
        $this -> reservation [] = $reservation;
    }


    public function annulReservation (Reservation $reservation)
    {
        $this -> reservation [] = $reservation;
    }


}








?>