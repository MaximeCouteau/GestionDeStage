<?php

if (!isset($_SESSION['login'])){
    // la variable de session n'est pas définie
    echo "<h1>Vous devez vous identifier pour accèder au contenu</h1>";
    echo "<br/><a href=\"./vue/connexion.php\">S'authentifier</a>";
    exit();
}
?>

