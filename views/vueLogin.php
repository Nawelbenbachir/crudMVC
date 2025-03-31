<?php
    require_once '../models/modele.php'; // On inclut la connexion à la base de données
    $pdo=getBdd(); //connexion à la bdd
    session_start(); // On démarre la session

    
    if (isset($_POST['submit'])) { // Si le formulaire a été soumis
        
        //Récupère les données du formulaire
        $utilisateur = $_POST['utilisateur'];
        $mot_de_passe = $_POST['mot_de_passe'];
        
        // On retrouve (ou pas) l'enregistrement correspondant dans la base de données
        //$query = $pdo->query('SELECT * FROM utilisateurs WHERE email = ' . $utilisateur); // Excessivement dangereux
        $requete = $pdo->prepare('SELECT * FROM personnes WHERE email = :utilisateur');
        $requete->execute(array(':utilisateur' => $utilisateur));
        $data = $requete->fetch();

        // On vérifie si la personne existe et si le mot de passe est correct
        if ($data) {    // La personne existe
            if (password_verify($mot_de_passe, $data['mot_de_passe'])) {
                $_SESSION['utilisateur'] = $utilisateur; // On enregistre le nom d'utilisateur dans la session
                header('Location: index.php'); // Redirection vers la page index.php
                exit; // Optimisation : on arrête le script PHP
            }
            else {
                echo "Username ou password invalide";
            }
        }
        else {
            echo "Username ou password invalide";
        }

    }

?>

    <?php
    $titre="Connectez-vous !";
    //transformer avec un ob start et get clean 
    $contenu='<form action="login.php" method="post">

    <label for="utilisateur">Nom d utilisateur :</label>
    <input type="text" name="utilisateur" id="utilisateur" required>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe" required>
    
    <button name="submit" type="submit">Se connecter</button>

    </form>';

        require_once 'menu.php'; // On inclut le menu
        require_once '../views/gabarit.php';
    ?>
