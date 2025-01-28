<?php


namespace app\Models;

use Repository;

class User extends Repository {

    public function __construct()
    {
        parent::__construct('users');
    }

}