<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$dashboard = new DashboardController();
$dashboard->DashboardPage();

?>