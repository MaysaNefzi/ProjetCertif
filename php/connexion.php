<?php
if(isset($_REQUEST['E-mail']) && isset($_REQUEST['mdp']))
{
include "config.php";
$db=connect();
$email = mysqli_real_escape_string($db,htmlspecialchars($_REQUEST['E-mail'])); 
$mdp = mysqli_real_escape_string($db,htmlspecialchars($_REQUEST['mdp']));
if($email!== "" && $mdp !== "")
{   
    $req="SELECT COUNT (*) FROM users WHERE email= '".$email."' and password = '".$password."' ";
    $exec_req = mysqli_query($db,$req);
    $reponse  = mysqli_fetch_array($exec_req);
    $count = $reponse['count(*)'];
    if ($count!=0)
    {
        header('Location: http://localhost/cv/html/home.html');
    }
    else
    {
       header('Location: login.php?erreur=1'); 
    }
}
else
{
   header('Location: login.php?erreur=2'); 
}
}
else 
{
    header('Location: login.php');
}
?>
