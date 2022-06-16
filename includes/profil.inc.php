<h2>Espace administrateur</h2>
<hr>
<p>
<h3>Nom : <strong><?php echo strstr($_SESSION['loginUser'], "@", true); ?></strong></h3>
</p>
<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$database = "filrouge";
try {

    $connexion = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $connexion->prepare("SELECT id_utilisateur, nom, prenom, mail FROM utilisateurs");
    $sql->execute();

    // affichage du résultat de la requete dans un tableau
    $result = $sql->setFetchMode(pdo::FETCH_ASSOC);

    echo "<table>";
    echo "<tr><th>Id</th><th>Nom</th><th>Prénom</th><th>Mail</th><th>Actions</th></tr>";
    // output data of each row
    foreach($sql->fetchAll() as $k=>$v) {
          echo "<tr><td>" . $v["id_utilisateur"] . "</td><td>" . $v["nom"] . "</td><td>" . $v["prenom"] . "</td><td>" . $v["mail"] . "</td><td></tr>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$connexion = null;
echo "</table>";
?>
