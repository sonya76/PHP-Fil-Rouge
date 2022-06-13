<form action="index.php?page=login" method="post">

    <div>
        <label for="mail">Identifiant</label>
        <input type="email" name="mail" id="mail" value="<?=$mail?>" required />
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required />
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="frmLogin">
</form>