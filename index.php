<?php

require_once './functions/appelFunctions.php';
spl_autoload_register(function($className) {
    require './classes/' .$className . '.php';
});
date_default_timezone_set('Europe/Paris');
//include meme erreur il continue alors au require s'arrete

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
