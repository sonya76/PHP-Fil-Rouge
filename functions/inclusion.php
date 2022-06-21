<?php
// :void la fonction ne retourne rien
function inclusion(string $page) : void {
// glob * parcourt tout les fichiers du tableau
    $files = glob('./includes/*.inc.php');
    $page = isset($_GET['page']) ? $_GET['page'] : "profil";
    $page = "./includes/" . $page . ".inc.php";
    
    if(in_array($page, $files))
    require $page;
    else
    require './includes/accueil.inc.php';
}
?>