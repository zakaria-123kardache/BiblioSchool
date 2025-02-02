<?php

namespace app\Models;

use Repository;

class Role extends Repository {

    public function __contruct()
    {
        parent::__construct('roles');
    }

}