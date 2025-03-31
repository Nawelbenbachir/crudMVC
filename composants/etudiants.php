<?php
    include 'start.php'; // On démarre la session et on vérifie si on est connecté
    require_once './models/modele.php'; //on récupère la reqûête avec la liste des étudiants
    $requete=getEtudiants();
    
?>

