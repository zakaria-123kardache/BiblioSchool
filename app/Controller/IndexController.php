<?php

namespace App\Controller;

use App\Controller\Controller;

class IndexController extends Controller {
    

    public function index ()
    {
        return $this->render("pages.home");
    }
    public function login ()
    {
        return $this->render("pages.login");
    }
    public function aboutus ()
    {
        return $this->render("pages.aboutus");
    }
    public function contactus ()
    {
        return $this->render("pages.contactus");
    }
    public function catalogue ()
    {
        return $this->render("pages.catalogue");
    }
    public function reservation ()
    {
        return $this->render("pages.reservation");
    }
    public function signup ()
    {
        return $this->render("pages.signup");
    }
}
