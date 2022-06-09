<h1>Inscription</h1>
<?php
if (isset($_POST['frmInscription'])) {
    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $mail = htmlentities(trim($_POST['mail']));

    $erreurs = array();

    if (mb_strlen($nom) === 0)
        array_push($erreurs, "Il manque votre nom");

    if (mb_strlen($prenom) === 0)
        array_push($erreurs, "Il manque votre prénom");

    if (mb_strlen($mail) === 0)
        array_push($erreurs, "Il manque votre e-mail");

    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Votre adresse mail n'est pas conforme");

    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmInscription.php';
    } else {
        displayMessage("Insertion BDD");
    }
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $database = "filrouge";

    try {
        $connexion = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
        var_dump($connexion);

    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
} else {
    $nom = $prenom = $mail = "";
    include './includes/frmInscription.php';
}
// <!-- il faut échapper ses caractères qui sont des fais de sécurité : 
// &' '' <>  htmlentities() traite le probleme-->