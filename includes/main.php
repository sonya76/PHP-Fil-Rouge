<?php
    require_once './includes/nav.php';
?>
<main>
<?php
   $files = glob('./includes/*.inc.php');
   echo "<pre>";
   var_dump($files);
   echo "</pre>"; 
?>
</main>