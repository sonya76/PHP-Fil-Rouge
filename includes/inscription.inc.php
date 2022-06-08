<h1>Inscription</h1>

<?php
if (isset($_POST["frmInscription"])) {
    $message = "je viens du formulaire";
    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $email = htmlentities(trim($_POST['email']));
    $erreurs = array();
    // dump($nom);
    // dump($prenom);
    // dump($email);

    if (mb_strlen($nom) === 0) {
        array_push($erreurs, "Il manque votre nom");
    }
    if (mb_strlen($prenom) === 0) {
        array_push($erreurs, "Il manque votre prenom");
    }
    if (mb_strlen($email) === 0) {
        array_push($erreurs, "Il manque votre e-mail");
    }
    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for($i = 0 ; $i < count($erreurs) ; $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmInscription.php';
    }

    else {
        echo "Pas d'erreurs";
    }
}

else {
    $nom = $prenom = $email = "";
    include './includes/frmInscription.php';
}
?>
<!-- il faut échapper ses caractères qui sont des fais de sécurité : 
&' '' <>  htmlentities() traite le probleme-->