<?php

use App\Controller\Controller;
use App\Models\Auth;

class AuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = new Auth();
    }

    public function signUp()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = $this->auth->signUp($firstname, $lastname, $email, $password);
        
        if ($response) {
            echo json_encode(['successMessage' => "User registered successfully"]);
        } else {
            echo json_encode(['errorMessage' => "User registration failed"]);
        }
        header('Content-Type: application/json');
    }
}
