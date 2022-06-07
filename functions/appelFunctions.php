<?php

$files = glob('./functions/*.php');

foreach($files as $file){
   
    require_once $file;

}
?>