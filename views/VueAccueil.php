<?php
    $titre = "Bienvenue sur le Crud";
    ob_start(); ?>

    <h2>Bienvenue sur ce Crud</h2>
<?php
    $contenu= ob_get_clean();
    require_once "gabarit.php";
?>