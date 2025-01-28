<?php

namespace app\Models;

use Repository;

class Categorie extends Repository {

    public function __contruct()
    {
        parent::__construct('categories');
    }

}