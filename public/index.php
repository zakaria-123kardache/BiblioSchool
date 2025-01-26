<?php

use app\Core\Connexion;

require_once __DIR__ . '/../vendor/autoload.php';


echo  "hello biblio";

echo "hello";

try {
    $db = Connexion::getInstance()->getConnexion();
    echo "Connection success";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
