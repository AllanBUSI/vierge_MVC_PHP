<?php

class HomeController {
    
    public function HomePage() {

        // load css link
        $arrayCSS = [
            "./style/map.css",
            "./style/style.css",
        ];

        $arrayJS = [
            "./js/map.js",
        ];

        require './view/header.php';
        require './view/navbar.php';
        require './view/Container.php';
        require './view/Map.php';
        require './view/footer.php';
        return;
    }

}

?>