<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$home = new HomeController();
$home->HomePage();

?>