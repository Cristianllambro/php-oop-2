<?php

class User
{
    protected $name;
    protected $surname;
    protected $street;
    protected $numberStreet;

    public function __construct($name, $surname, $street) {
        $this->name = $name;
        $this->surname = $surname;
        $this->street = $street;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getStreet() {
        return $this->street;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function getNumberStreet() {
        return $this->numberStreet;
    }

    public function setNumberStreet($numberStreet) {
        $this->numberStreet = $numberStreet;
    }
}

class Login extends User
{
    protected $username;
    protected $email;
    protected $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

$user = new User('Antonio', 'Vasco', 'Via Veneto', 1);
$login = new Login('Anto1', 'antonio@gmail.com', '1234');