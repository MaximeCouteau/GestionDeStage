<?php
session_start();
include_once("../modele/modele.inc.php");

if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    if (verification($login, $mdp)) { // vérifier dans la BDD
        // changer l'identification de session (sécurité)
        session_regenerate_id();

        $_SESSION['login'] = $login; // service minimum
        
        $result=getRole($login);
        $role=$result['LIBELLE_ROLE'];
        
        $message = "Vous êtes bien authentifié en tant que ".$role. "<br/><a href=\"../index.php\">Continuer</a>";
        
    } else {
        $message = "ECHEC d'identification ";

        $message .= "<br/><a href=\"../vue/connexion.php\">retour</a>";
    }
} else {
    $message = "le login ou le mot de passe ne sont pas renseignés". "<br/><a href=\"../vue/connexion.php\">retour</a>";
   
}
?>
<html><head><title>Identification</title></head>
    <body>
<?php
echo $message ;
?>

