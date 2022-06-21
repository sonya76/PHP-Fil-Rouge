<header>
    <nav>
        <ul id="menu">
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=mentions">Mentions</a></li>
            <?php
            
            if (isset($_SESSION['loginUser']) && !$_SESSION['loginUser'] === false) { ?>
              
                <li><strong><?php echo strstr( $_SESSION['loginUser'] , "@", true); ?></strong></li>
                <li>
                    <a href="index.php?page=logout" titre="Se déconnecter">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </li>
            <?php } else { ?>
             
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login" titre="Se connecter"><i class='fa fa-user'></i></a></li>
            <?php } ?>
        </ul>
    </nav>
</header>