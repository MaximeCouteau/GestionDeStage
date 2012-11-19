<?php

/*
 * Ajout d'une Organisation dans la base
 * 
 * Lecture des données renseignées par l'utilisateur dans le formulaire de saisie
 * 
 * appel à la procédure 
 * 
 * @author groupe1 2SIOSLAM
 * @package controleur 
 */ 



include_once("./modele/modele.inc.php");


$nom=$_POST['nomOrganisation'];
$adresse=$_POST['adresseOrganisation'];
$ville=$_POST['villeOrganisation'];
$cp=$_POST['cpOrganisation'];
$formejuridique=$_POST['FormeJuridique'];
$tel=$_POST['Téléphone'];
$fax=$_POST['Fax'];
$courriel=$_POST['Courriel'];

$procedure=AjouterUneOrganisation($nom,$ville,$adresse,$cp,$formejuridique,$tel,$fax,$courriel );

if($procedure!=0){    
    include("./vue/v_validationAction.php");
}else{
    include("./vue/v_ActionEchouée.php");
}
?>
