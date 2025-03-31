<?php
    include 'start.php'; // On démarre la session et on vérifie si on est connecté
    require_once '../models/modele.php'; //on récupère la reqûête avec la liste des étudiants
    $data=getEtudiants();
   
    $titre="Etudiant";
    ob_start(); ?>
    <h2>Liste des etudiants</h2>
    <a href="">Ajouter un étudiant</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Admin</th>
            <th>Etudiant</th>
            <th>Professeur</th> 
            <th></th>   
        </tr>
 <?php  
    //on affiche la liste sous forme de tableau
   
    while ($data = $requete->fetch()) { ?>
        <tr>
        <td><?= $data['id'] ?> </td>;
        <td><?=$data['nom']?> </td>;
        <td><?= $data['prenom']?></td>;
        <td><?= $data['email'] ?></td>;
        <td><?= $data['telephone']?></td>;
        <td><?= $data['admin']?></td>;
        <td><?= $data['etudiant']?></td>;
        <td><?= $data['professeur'] ?></td>;
        <td>
        <a href="">Modifier</a>&nbsp;
        <a href="">Supprimer</a>
        </td>;
        </tr>;
    <?php
    }; ?>
    </table>
<?php
    $contenu= ob_get_clean();
   
    require_once 'gabarit.php';

?>
