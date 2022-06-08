<h1>Login</h1>


<?php
if (isset($_POST["frmLogin"])) {
    $message = "je viens du formulaire";
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));
    $erreurs = array();
   

    if (mb_strlen($email) === 0) {
        array_push($erreurs, "Il manque votre email");
    }
    if (mb_strlen($password) === 0) {
        array_push($erreurs, "Il manque votre mot de passe");
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

        include './includes/frmLogin.php';
    }

    else {
        echo "Pas d'erreurs";
    }
}

else {
     $email = $password = "";
    include './includes/frmLogin.php';
}
?>