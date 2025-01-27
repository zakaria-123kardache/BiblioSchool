<?php

namespace app\Model;


class Role
{

    private int $id;
    private string $roleName;
    private string $roleLogo;


    public function __construct()
    {
        $this->roleName = "";
        $this->roleLogo = "";
    }


    public static function instance(string $roleName, string $roleLogo): self
    {
        $instance = new self($roleName, $roleLogo);
        return $instance;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getRoleName()
    {
        return $this->roleName;
    }
    public function getRoleLogo()
    {
        return $this->roleLogo;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }
    public function setRoleLogo($roleLogo)
    {
        $this->roleLogo = $roleLogo;
    }

    public function __toString() {}
}
