<?php
session_start();

require './model/User.php';

class DashboardController {
    
    public function HomePage() {
        require './view/header.php';
        require './view/navbar.php';
        require './view/footer.php';
        return;
    }

    public function Data() {

        if (isset($_SESSION['email'])) {
            return;
        }

        if (!isset($_POST['type']) && !isset($_POST['nom'])  &&  !isset($_POST['email'])) {
            return $this->SendError("Veuillez vous connecter");
        }

        if ($_POST['type'] == 'register') {            
            $this->Register();

            $user = new User($_POST['nom'], $_POST['email'], $_POST['password']);

            $result = $user->FindByEmail('email');

            if (count($result) > 0) {
                return $this->SendError("Vous êtes déjà inscrit");
            }

            $user->CreateByOne();

        }
        
        if ($_POST['type'] == 'login') {
            $this->Login();
        }

        $_SESSION['user'] = $_POST['email'];
    }


    public function SendError($msg) {
        return header('Location: http://localhost:8080/login.php?error='.$msg);
    }

    public function VerifVariable($var, $min, $max, $msg) {
        if (strlen($var) <= $min || strlen($var) >= $max) {
            $this->SendError($msg);
            return;
        }
        return;
    }


    public function Register() {
        $nom  = htmlspecialchars($_POST['nom']);
        $email  = htmlspecialchars($_POST['email']);
        $password  = $_POST['password'];
        
        $this->VerifVariable($nom, 2,254, 'Le nom est incorrecte');
        $this->VerifVariable($email, 2,254, "L'email est incorrecte");
        $this->VerifVariable($password, 2,254, "Le passowrd est incorrecte");

        return;
    }

    public function Login() {
        $email  = htmlspecialchars($_POST['email']);
        $password  = $_POST['password'];
        
        $this->VerifVariable($email, 2,254, "L'email est incorrecte");
        $this->VerifVariable($password, 2,254, "Le passowrd est incorrecte");
        return;
    }

}

?>