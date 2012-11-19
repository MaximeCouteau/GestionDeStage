<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script language="Javascript" type="text/javascript" src="./js/javascript.js"></script>
        <title>Ajouter Organisation</title>
    </head>
    <body> 

        <form id="form1" action="./index.php?action=validerAjouterEtudiant" method="post" > 

            <TABLE>
                <TR>
                    <TH>    <label > Nom de l'organisation : </label><input type="text" name="nomOrganisation" id="nomOrganisation" value=""/><br/><br/>  </TH>
                    
                </TR><TR>    
                    <TH>    <label > Adresse : </label><input type="text" name="adresseOrganisation" id="adresseOrganisation" value=""/><br/><br/>    </TH>
                    
                </TR><TR>    
                    <TH>    <label > Ville : </label><input type="text" name="villeOrganisation" id="villeOrganisation" value=""/><br/><br/>    </TH>
                    
                </TR><TR>    
                    <TH>    <label > Code Postal : </label><input type="text" name="cpOrganisation" id="cpOrganisation" value=""/><br/><br/>   </TH>
                    
                </TR><TR>    
                    <TH>    <label > Forme Juridique : </label><input type="text" name="FormeJuridique" id="FormeJuridique" value=""/><br/><br/>    </TH>
                    
                </TR><TR>    
                    <TH>    <label > Téléphone : </label><input type="text" name="Téléphone" id="Telephone" value=""/><br/><br/>   </TH>
                
                </TR><TR>
                    <TH>    <label > Courriel : </label><input type="text" name="Courriel" id="Courriel" value=""/><br/><br/></TH>
                    
                </TR><TR>    
                    <TH>    <label > Fax : </label><input type="text" name="Fax" id="Fax" value=""/><br/><br/> </TH>          
                </TR>           
                   
            </TABLE>               
                    <input type="button" name="Ajouter" value="Ajouter"  onclick="javascript:actionFormulaire('./index.php?action=validerAjouterOrganisation')"/>
                    <input type="button" name="accueil" value="Retour à l'accueil" onclick="self.location.href='./index.php'" />

            </form>
    </body>
</html>