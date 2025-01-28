<?php

namespace app\Models;

use Repository;

class TAg extends Repository {

    public function __construct()
    {
        parent::__construct('tags');
    }
    
}