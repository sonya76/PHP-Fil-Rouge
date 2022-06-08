
<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?=$nom?>" />
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom"  value="<?=$prenom?>" />
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?=$email?>" />
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="frmInscription">
</form>