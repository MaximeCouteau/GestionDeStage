<?php
define('USER','root');
define('MDP', '');
define('DSN', 'mysql:host=localhost;dbname=GESTION_DE_STAGE');
//    define('DSN', 'oci:dbname=amnesix.sup.stp.lycee-joliverie.fr:1521/info.sup');
//    define('DSN', 'oci:dbname=localhost:1521/XE');



// connexion à la base
function connecter() {
    try {
        $connexion = new PDO(DSN, USER, MDP);
//        $sql ="SET NAMES latin1_german1_ci";
        $sql ="SET NAMES utf8";
        $stmt = $connexion->query($sql);
        //echo "connexion réussie";
    } catch (PDOException $e) {
        echo "Erreur ! : " . $e->getMessage() . "<br />";
        $connexion = null;
    }
    return $connexion;
}

function verification($login, $mdp){
    $connexion = connecter();             
     // préparation de la requête
    $loginSql= $connexion->quote($login);
    $mdpSql= $connexion->quote($mdp); // le mot de passe est chiffré dans la BDD
    $sql = "SELECT COUNT(*) IDPERSONNE FROM PERSONNE WHERE LOGIN=$loginSql AND MOTDEPASSE=$mdpSql";
    $result= $connexion->query($sql);
    $row= $result->fetch();
    $connexion= "";
    return ($row['IDPERSONNE'] == 1);
}

function deconnecter($connexion) {
    $connexion="";
}

function getRole($login){
    $cnx = connecter();
    $sql = "SELECT * FROM `ROLE` R INNER JOIN PERSONNE P ON R.NUM_ROLE=P.NUM_ROLE WHERE P.LOGIN='$login'";
    $stmt = $cnx->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

 /**
     *Ajout d'une organisation dans la base de données
     * 
     * @param PDO $conn
     * @param string $raisonsociale
     * @param string $ville
     * @param string $adresse 
     * @param int $cp 
     * @param string $forme_juridique
     * @param int $tel
     * @param int $fax
     * @param string $courriel
     * @return int 
     * 
     */
    function ajouterUneOrganisation($nom, $ville, $adresse ,$cp ,$formejuridique ,$tel,$fax, $courriel) {
        $conn = connecter();
        $sql = "INSERT INTO `ORGANISATION`(`IDORGANISATION`, `NOM_ORGANISATION`, `VILLE_ORGANISATION`, `ADRESSE_ORGANISATION`, `CP_ORGANISATION`,  `TEL_ORGANISATION`, `FAX_ORGANISATION` , `FORMEJURIDIQUE`, `COURRIEL`) ";
        $sql .= " VALUES('', '$nom', '$ville' , '$adresse' , $cp , $tel , $fax , '$formejuridique' , '$courriel' );";           
        return $conn->exec($sql);        
    }