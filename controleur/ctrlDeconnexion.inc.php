<!DOCTYPE html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
    </head>
<form method='post' action="../index.php">
<?php
session_start();
session_destroy();

echo "Utilisateur Déconnecté"; 

?>

<input type='submit' Value='Accueil' />
</form>