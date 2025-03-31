<?php
//on inclu le fichier de configuration
require_once '../config.php';
//fonction qui retourne la liste des étudiants 
function getEtudiants(){
    $pdo=getBdd();
    $requete = $pdo->query('SELECT * FROM personnes ORDER BY nom, prenom;');
    return $requete;
}
//fonction de connexion à la bdd
function getBdd(){ 
    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
   
    return $pdo;
}

?>