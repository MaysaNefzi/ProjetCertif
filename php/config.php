<?php 
   function connect()
   {
     $_SERVER='localhost';
     $base='isg';
     $username='root';
     $pass='';
     try
     {
         $con=new PDO("mysql:host=$_SERVER;dbname=$base",$username,$pass);
         return $con;
     }
     catch(PDOException $e)
     {
         die("Erreuuuuuuuuuur: ".$e->getMessage());
     }
    }
?>