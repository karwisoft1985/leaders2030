<?php
include('connect.php');
$login=$_GET['login'];
$password=$_GET['password'];
$req="select id_leader, nom, prenom from leader where login='$login' and password='$password'";
$query=mysql_query($req, $cnx) or die("probleme");
if (mysql_num_rows($query)!=0)
{
$row=mysql_fetch_array($query);
session_start();
$_SESSION['login']=$login;
$_SESSION['password']=$password;
$data[]=array(
'id' => $row['id_leader'],
'nom' => $row['nom'],
'prenom' => $row['prenom'],
);
}
else{
$data[]=array(
'id' => 0,
'nom' => '',
'prenom' => '',
);
}
echo '{"authentification":'.json_encode($data).'}';
?>