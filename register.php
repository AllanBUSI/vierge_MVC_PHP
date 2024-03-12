<?php 

require 'autoloader.php'; 
Autoloader::register(); 

$register = new RegisterController();
$register->RegisterPage();

?>