<?php

require 'config/Database.php';

class User extends Database {

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $password;

    public function getId() {
        return $this->id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($d) {
        return $this->id = $d;
    }

    public function setFirstname($d) {
        return $this->firstname = $d;
    }

    public function setLastname($d) {
        return $this->lastname = $d;
    }

    public function setEmail($d) {
        return $this->email = $d;
    }

    public function setPassword($d) {
        return $this->password = password_hash($d, PASSWORD_ARGON2ID);
    }

    public function FindByEmail($colums = "*") {
        $sql = "SELECT ". $colums. " FROM user WHERE email = ?";
        $query = $this->Connect()->prepare($sql);
        $query->execute([$this->email]);
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function CreateByOne() {
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES (?,?,?,?)";
        $query = $this->Connect()->prepare($sql);
        $result = $query->execute([$this->firstname, $this->lastname, $this->email, $this->password]);
        return $result;
    }
}