<?php

use App\Models\User;

class UserController {


    protected $user ; 

    public function __construct()
    {
        $this->user = new User();
    }

    public function create($data)
    {
        $result =$this->user->create($data);

        if ($result){
            $response = ['ssuccessMessage' => 'User Creted Seccessfl'];
        } else {
            $response = ['errorMessage' => 'User Not Created'];
        }

        header('Content-Type: application/json');
        echo json_encode($response);

    }

    public function update ($id,$data)
    {
        $result = $this->user->update($id, $data);

        if ($result){
            $response = ['ssuccessMessage' => 'User Creted Seccessfl'];
        } else {
            $response = ['errorMessage' => 'User Not Created'];
        }

        header('Content-Type: application/json');
        echo json_encode($response);

    }

    public function delete($id)
    {
        $this->user->delete($id);
        header('Location: ');
    }

    public function find($id)
    {
        $user = $this->user->find($id);
        return $user ; 

    
    }

    
}


