<?php 



class Database {
    
    public static function Connect() {
        try {

            $env = Autoloader::loadenv();

            $db=$env['DATABASE'];
            $dbhost="localhost";
            $dbport=$env['DBPORT'];
            $dbuser=$env['DBUSER'];
            $dbpasswd=$env['DBPASSWORD'];

            $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
            $pdo->exec("SET CHARACTER SET utf8");
            return $pdo;
        } catch (PDOException $e) {
            echo $e;
        }
    }

}


?>