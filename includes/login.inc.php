<h1>Login</h1>
<?php
if (isset($_POST["frmLogin"])) {
    $message = "je viens du formulaire";
    $mail = htmlentities(trim($_POST['mail']));
    $password = htmlentities(trim($_POST['password']));
    $erreurs = array();

    if (mb_strlen($mail) === 0) {
        array_push($erreurs, "Il manque votre email");
    }
    if (mb_strlen($password) === 0) {
        array_push($erreurs, "Il manque votre mot de passe");
    }

    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;
        $_SESSION['loginUser'] = $mail;
        include './includes/frmLogin.php';
    } else {

        echo "Pas d'erreurs";
       echo $_SESSION['loginUser'];
    }
} else {

    $mail = $password = "";
    include './includes/frmLogin.php';
}
?>