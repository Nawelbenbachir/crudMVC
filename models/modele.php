<?php
//fonction qui retourne la liste des étudiants 
function getEtudiants(){
    $pdo=getBdd();
    $requete = $pdo->query('SELECT * FROM personnes ORDER BY nom, prenom;');
    return $requete;
}
//fonction de connexion à la bdd
function getBdd(){
    define('DB_HOST','localhost');
    define('DB_NAME','crud');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    return $pdo;
}


?>