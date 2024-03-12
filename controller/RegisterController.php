<?php

class RegisterController {
    
    public function RegisterPage() {

        // load css link
        $arrayCSS = [
            "./style/style.css",
        ];

        $arrayJS = [];

        require './view/header.php';
        require './view/navbar.php';
        require './view/Register.php';
        require './view/footer.php';

        return;
    }
}

?>