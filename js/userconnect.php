<?php 
session_start();
$log=$_SESSION['login'];
$pass=$_SESSION['password'];
include('connect.php');
$req="select nom, prenom from leader where login='$log' AND password='$pass'";
$query=mysql_query($req, $cnx);
$row=mysql_fetch_array($query);
$nom=$row['nom'].' '.$row['prenom']; 
echo $nom;
exit();
?>