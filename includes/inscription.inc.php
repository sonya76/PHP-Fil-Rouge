
<h1>Inscription</h1>
<?php
    if (isset($_POST['frmInscription'])) {
        $nom = htmlentities(trim($_POST['nom']));
        $prenom = htmlentities(trim($_POST['prenom']));
        $mail = htmlentities(trim($_POST['mail']));
        $password1 = htmlentities(trim($_POST['password1']));
        $password2 = htmlentities(trim($_POST['password2']));

        $erreurs = array();

        if (mb_strlen($nom) === 0)
            array_push($erreurs, "Il manque votre nom");

        if (mb_strlen($prenom) === 0)
            array_push($erreurs, "Il manque votre prénom");

        if (mb_strlen($mail) === 0)
            array_push($erreurs, "Il manque votre e-mail");

        elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
            array_push($erreurs, "Votre adresse mail n'est pas conforme");

        if (mb_strlen($password1) === 0 || mb_strlen($password2) === 0)
            array_push($erreurs, "Veuillez saisir votre mot de passe et sa confirmation");
        
        elseif ($password1 !== $password2)
            array_push($erreurs, "Vos mots de passe ne sont pas identiques");

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
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $database = "filrouge";

            try {
                $connexion = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $password = password_hash($password1, PASSWORD_DEFAULT);

                $requete = "INSERT INTO utilisateurs (id_utilisateur, nom, prenom, mail, password)
                VALUES (NULL, '$nom', '$prenom', '$mail', '$password');";

                $connexion->exec($requete);

                displayMessage("Requête OK");
            }

            catch(PDOException $e) {
                die("Erreur : " . $e->getMessage());
            }
        }
    }
    
    else {
        $nom = $prenom = $mail = "";
        include './includes/frmInscription.php';
    }