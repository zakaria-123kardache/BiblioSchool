<?php

use app\Model\Utilisateur;
use app\Repository\UserRepository;

class UserController
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addUser()
    {
        if (isset($_POST['submit'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $photo = $_POST['photo'];


            $user = new Utilisateur();
            $role = new Role();
            $role->setRoleName("apprenant");

            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setEmail($email);
            $user->setPhoto($photo);
            $user->setRole($role);

            if ($this->userRepository->createUser($user)) {
                header("Location: ");
                exit();

            } else {
                echo "Error creating user";
            }
        }
    }


    public function deleteUser(int $id)
    {
        if ($this->userRepository->deletUser($id)) {
            header("Location: ");
            exit();
        } else {
            echo "Error deleting user";
        }
    }

    public function updateUser(Utilisateur $editUser)
    {
        if (isset($_POST['submit'])) {

            $editUser->setFirstname($_POST['editfirstname']);
            $editUser->setLastname($_POST['editlastname']);
            $editUser->setEmail($_POST['editemail']);
            $editUser->setPhoto($_POST['editphoto']);

            $role = new Role();
            $role->setRoleName($_POST['editrole']);
            $editUser->setRole($role);

            if ($this->userRepository->updateUser($editUser)) {
                header("Location: ");
                exit();
            } else {
                echo "Error updating user";
            }
        }
    }

    public function getAllUsers(): array
    {
        try {
            return $this->userRepository->getAllUsers();
        } catch (Exception $e) {
            error_log("Error fetching users: " . $e->getMessage());
            return [];
        }
    }
}
