<?php
session_start();
include("./controleur/ctrlSecure.inc.php");
include("./modele/modele.inc.php");

    if (isset($_GET['action']) && $_GET['action'] != null) {
        $action = $_GET['action'];
        switch ($action) {
        case 'enregistrerOrganisation' :
            $page = 'ctrlAjouterOrganisation.inc.php';
            break;
        case 'validerAjouterOrganisation' :
            $page = 'ctrlValiderAjouterOrganisation.inc.php';
            break;
        case '...' :
            $page = '....inc.php';
            break;
              
        }
        
        include("./controleur/" . $page);
        
    } else {
        $result=getRole($_SESSION['login']);
        $numRole= $result['NUM_ROLE'];
        
        if($numRole==1){
            include("./vue/menuAdmin.php");
        }elseif($numRole==2){
            include("./vue/menuProf.php");
        }else{
            include("./vue/menuEtudiant.php");
        }
    }
    
?>
