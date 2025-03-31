 <?php
    $titre="Cours";
    ob_start(); ?>
    <h2>Liste des cours </h2>
   <?php
    $contenu=ob_get_clean();
    include 'gabarit.php';
    //autre version $contenu='<h2>Liste des cours</h2>'
    //plus pratique avec ob_start et get_clean si page longue
?>
