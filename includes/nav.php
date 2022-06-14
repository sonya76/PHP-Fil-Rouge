<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=mentions">Mentions</a></li>
            <?php
            if (isset($_SESSION['loginUser'])) { ?>
                <span class="login">
                    <strong><?php echo strstr($_SESSION['loginUser'],"@", true); ?></strong>

                    <li>
                        <a href="index.php?page=logout" titre="Se déconnecter">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>
                    </span> 
            <?php } else { ?>
                <span class="login"> <li><a href="index.php?page=login" titre="Se connecter"><i class='fa fa-user'></i></a></li>
            </span>
                <li><a href="index.php?page=inscription">Inscription</a></li>
            <?php } ?>
            
        </ul>
    </nav>
</header>