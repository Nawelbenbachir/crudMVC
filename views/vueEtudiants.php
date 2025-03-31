<?php
    $titre="Etudiant";
    ob_start();

    $composant='<a href="">Ajouter un étudiant</a>
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
        </tr>';
   
    //on affiche la liste sous forme de tableau
   
    while ($data = $requete->fetch()) {
        $composant.= '<tr>';
        $composant.='<td>' . $data['id'] . '</td>';
        $composant.= '<td>' . $data['nom'] . '</td>';
        $composant.= '<td>' . $data['prenom'] . '</td>';
        $composant.= '<td>' . $data['email'] . '</td>';
        $composant.= '<td>' . $data['telephone'] . '</td>';
        $composant.= '<td>' . $data['admin'] . '</td>';
        $composant.= '<td>' . $data['etudiant'] . '</td>';
        $composant.= '<td>' . $data['professeur'] . '</td>';
        $composant.= '<td>
        <a href="">Modifier</a>&nbsp;
        <a href="">Supprimer</a>
        </td>';
        $composant.= '</tr>';
    
    }
    $composant.=' </table>';
    $composant= ob_get_clean();
    require_once './etudiants.php';
    require_once 'gabarit.php';

?>
