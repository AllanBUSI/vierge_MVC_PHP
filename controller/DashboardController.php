<?php

class DashboardController {
    
    public function HomePage() {
        require './view/header.php';
        require './view/navbar.php';
        require './view/footer.php';
        return;
    }

    public function Data() {

        if ($_POST['type'] == 'register') {

        }

        if ($_POST['type'] == 'login') {
            
        }

        return;
    }

    // hearder('?error=utilisation a un mauvais mot de passe')

    public function Register() {

    }

    public function Login() {

    }

}

?>