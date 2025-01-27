<?php


namespace app\Model;

use app\Model\Role;

class Utilisateur {

    private int $id; 
    private string $firstname ; 
    private string $lastname ; 
    private string $photo ; 
    private string $email ; 
    private string $password ; 
    private array $reservation = [];
    private Role $role ; 
    private int $role_id ;

    public function __construct()
    {
        return $this->role = new Role();
    }

    // public function getPropriety($ProprietyName)
    // {
    //     return $this->ProprietyName ; 
    // }

    // public function setPropriety($ProprietyName , $value)
    // {
    //     return $this->ProprietyName = $value ;
    // }

    public function getId():int 
    {
        return $this->id;
    }
    public function getFirstname():string
    {
        return $this->firstname;
    }
    public function getLastname():string 
    {
        return $this->lastname;
    }
    public function getEmail():string 
    {
        return $this->email;
    }
    public function getPassword():string 
    {
        return $this->password;
    }
    public function getPhoto():string 
    {
        return $this->photo;
    }
    public function getReservation():array 
    {
        return $this->reservation;
    }
    public function getRole():Role
    {
        return $this->role;
    }

    public function setRole($role):void
    {
         $this->role = $role;
    }
    public function setId($id):void
    {
         $this->id = $id;
    }
    public function setFirstname($firstname):void
    {
         $this->firstname = $firstname;
    }
    public function setLastname($lastname):void
    {
         $this->lastname = $lastname;
    }
    public function setPhoto($photo):void
    {
         $this->photo = $photo;
    }
    public function setEmail($email):void
    {
         $this->email = $email;
    }
    public function setPassword($password):void
    {
         $this->password = $password;
    }
    public function setReservation($reservation):void
    {
         $this->reservation = $reservation;
    }


    public function __toString()

    {
        
    }
   
    




    
}