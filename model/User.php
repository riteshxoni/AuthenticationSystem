<?php
class User
{
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $gender;

    public function __construct($id,  $name,  $username,  $email,  $password,  $gender)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setGender($gender): void
    {
        $this->gender = $gender;
    }
}
