<?php

header( 'Location: http://localhost/cv/html/home.html' ) ;


include "config.php";
$db=connect();
$nom=$_REQUEST['Nom'];
$prenom=$_REQUEST['Prenom'];
$tel=$_REQUEST['Tel'];
$bday=$_REQUEST['bday'];
$email=$_REQUEST['E-mail'];
$mdp=$_REQUEST['mdp'];
$req="INSERT INTO users (id,email,password,nom,prenom,tel,bday) VALUES(null,'$email','$mdp','$nom','$prenom','$tel','$bday')";
$res=$db->exec($req);
if ($res==1)
{
    echo "données inserées";
}
else
{
    echo "verifier la requete sinon verifier le fichier config";
}


?>