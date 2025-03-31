
 <?php
        if (isset($_SESSION['utilisateur'])) {  // Si on est connecté
            $button="Deconnexion";
            $link="./composants/deconnexion.php";
        }
        else {  // Si on n'est pas connecté
            $button="Connexion";
            $link="./composants/login.php";
        }
        require_once './views/vueMenu.php';
    ?>