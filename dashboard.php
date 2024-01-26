<?php 
session_start();
require 'autoloader.php'; 
Autoloader::register(); 

$home = new DashboardController();
$home->HomePage();

$data = null;

if (!isset($_SESSION['user'])) {
    $data = $home->Data();
}



?>