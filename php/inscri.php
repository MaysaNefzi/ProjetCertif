<?php
include "config.php";//naayet lel fichier li fih l connexion aal base
$db=connect();//appel lel fonction w bech ykoun fiha l objet con
//recuperation des données
$email=$_REQUEST['email'];
$mdp=$_REQUEST['mdp'];
$req="INSERT INTO users (id,email,password) VALUES(null,'$email','$mdp')";//ki tebda haja auto increment nhotelha null w howa hyotou wahdou
//exec taamel l execution aal insert w update w delete 
//son type de retour int|bool
//ki tebda req s'hiha trajaa int fih nbre des lignes inserées 
// ki tebda ghalta trajaa bool fiha false 
$res=$db->exec($req);// je vais executer la requet req w type de retour bech nhotou fi res
if ($res==1)
{
    echo "données inserées";
}
else
{
    echo "verifier la requete sinon verifier le fichier config";
}

?>
