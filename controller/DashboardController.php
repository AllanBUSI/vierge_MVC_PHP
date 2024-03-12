<?php

class DashboardController {
    
    public function DashboardPage() {

        if (isset($_POST)) {
            $this->Register($_POST);
        }

        $arrayCSS = [
            "./style/style.css",
        ];

        $arrayJS = [
        ];

        require './view/header.php';
        require './view/navbar.php';
        require './view/footer.php';

        return;
    }

    public function Register($post) {
        require './middleware/utils.php';

        if (isset($post['firstname'])) {
            if (Utils::Verif($post['firstname'], 1, 155) == true) {
                return Utils::HeaderError('/register.php', "Votre nom est incorrect");
            }
        }

        if (isset($post['lastname'])) {
            if (Utils::Verif($post['lastname'], 1, 155) == true) {
                return Utils::HeaderError('/register.php', "Votre prenom est incorrect");
            }
        }

        if (isset($post['email'])) {
            if (Utils::Verif($post['email'], 1, 155) == true) {
                return Utils::HeaderError('/register.php', "Votre email est incorrect");
            }
        }

        if (isset($post['password'])) {
            if ($post['password'] != $post['confirm_password']) {
                return Utils::HeaderError('/register.php', "Votre password est incorrect");
            }

            if (Utils::Verif($post['password'], 1, 155) == true) {
                return Utils::HeaderError('/register.php', "Votre password est incorrect");
            }
        }

        if (isset($post['password']) && isset($post['email']) && isset($post['lastname']) && isset($post['firstname'])) {
            require './model/User.php';
            $user = new User();
            $user->setFirstname($post['firstname']);
            $user->setLastname($post['lastname']);
            $user->setEmail($post['email']);
            $user->setPassword($post['password']);
            $result = $user->FindByEmail('email');

            if (count($result[0]) > 0) {
                return Utils::HeaderError('/register.php', "Vous êtes déjà inscrit");
            }
            
            try {
                $user->CreateByOne();
                return;
            } catch (\Exception $e) {
                return Utils::HeaderError('/register.php', "Vous êtes déjà inscrit");
            }
        }
    }

}

?>