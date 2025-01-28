<?php

namespace app\Models;

use Repository;

class Livres extends Repository {


    public function __construct()
    {
        parent::__contruct('Livres');
    }
}