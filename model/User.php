<?php 

require './model/config/Database.php';

class User extends Database {

    protected $name;
    protected $email;
    protected $password;
    protected $pdo;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->pdo = parent::Connect();
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function setPassword($password) {
        return $this->password = $password;
    }

    public function FindByEmail($colums = "*") {

        $sql = "SELECT ".$colums." FROM user WHERE email = ? LIMIT 1";

        $query = $this->pdo->prepare($sql);

        $query->execute([$this->email]);

        $query = $query->fetchAll(PDO::FETCH_ASSOC);

        return $query;
    }

    public function FindBy($colums = "*") {
        $sql = "SELECT ".$colums." FROM user";

        $query = $this->pdo->prepare($sql);

        $query->execute([]);

        $query = $query->fetchAll(PDO::FETCH_ASSOC);

        return $query;
    }

    public function Update() {
        
    }

    public function CreateByOne() {
        $sql = "INSERT INTO user(nom, email, password) VALUES (?,?,?)";

        $query = $this->pdo->prepare($sql);

        $query->execute([$this->name, $this->email, password_hash($password, PASSWORD_ARGON2ID)]);

        $query = $query->fetchAll(PDO::FETCH_ASSOC);

        return $query;
    }
}