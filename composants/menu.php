<?php


    if (isset($_SESSION['utilisateur'])) {  // Si on est connecté
        $button="Deconnexion";
        $link="./composants/deconnexion.php";
    }
    else {  // Si on n'est pas connecté
        $button="Connexion";
        $link="./composants/login.php";
    }
?>
<ul class="menu">
    
    <li><a href="./index.php">Accueil</a></li>
    <li><a href="./composants/etudiants.php">Etudiants</a></li>
    <li><a href="views/VueCours.php">Cours</a></li>
    <li><a href=<?=$link?>><?=$button ?></a></li>
    
    
    </ul>