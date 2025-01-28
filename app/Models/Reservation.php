<?php



namespace app\Models;

use Repository;

class Reservation extends Repository {

    public function __construct()
    {
        parent::__contruct('Reservation');
    }
}