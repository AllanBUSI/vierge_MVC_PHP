<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$home = new LoginController();
$home->HomePage();

?>