<?php

namespace app\controller ;

use app\Model\Utilisateur;
use app\Repository\UserRepository;
use Exception;
use app\Model\Role;

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
            $password = $_POST['password']; 
            $roleId = $_POST['role'];

            $user = new Utilisateur();
            $role = new Role();
            $role->setId($roleId);

            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setEmail($email);
            $user->setPhoto($photo);
            $user->setPassword($password); 
            $user->setRole($role);

            if ($this->userRepository->createUser($user)) {
                header("Location: user.php");
                exit();
            } else {
                echo "Error creating user";
            }
        }
    }


    public function deleteUser(int $id)
    {
        if ($this->userRepository->deletUser($id)) {
            header("Location: user.php");
            exit();
        } else {
            echo "Error deleting user";
        }
    }

    public function updateUser(Utilisateur $editUser)
    {
        if (isset($_POST['update_user'])) {

            $editUser->setFirstname($_POST['edit-firstname']);
            $editUser->setLastname($_POST['edit-lastname']);
            $editUser->setEmail($_POST['edit-email']);
            $editUser->setPhoto($_POST['edit-photo']);
            $editUser->setPhoto($_POST['edit-password']);

            $role = new Role();
            $role->setId((int)$_POST['edit-role']);
            $editUser->setRole($role);

            if ($this->userRepository->updateUser($editUser)) {
                header("Location: user.php");
                exit();
            } else {
                echo "Error updating user";
            }
        }
    }

    public function getAllUsers(): array
    {
        return $this->userRepository->getAllUsers();
    }

    public function findUserById($id)
    {
        return $this->userRepository->findUserById($id);
    }
}
