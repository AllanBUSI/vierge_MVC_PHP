<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$home = new DashboardController();
$home->HomePage();

if (!isset($_SESSION['email'])) {
    return $home->Data();
}


?>