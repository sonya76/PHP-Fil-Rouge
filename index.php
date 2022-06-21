<?php
session_start();

require_once './functions/appelFunctions.php';
spl_autoload_register(function($className) {
    require './classes/' .$className . '.php';
});
date_default_timezone_set('Europe/Paris');

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';



