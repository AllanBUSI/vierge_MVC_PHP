<?php 


class Database {


    public function Connect() {
        try {
            $db="base";
            $dbhost="localhost";
            $dbport=3306;
            $dbuser="user";
            $dbpasswd="pass";
            
            $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
            $pdo->exec("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            echo $e;
        }

    }

}


?>