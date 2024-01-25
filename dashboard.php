<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$home = new DashboardController();
$home->HomePage();

$home->Data();

?>