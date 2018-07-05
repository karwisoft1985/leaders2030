<?php
include('connect.php');
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$date_naiss=$_GET['date_naiss'];
$ville=$_GET['ville'];
$tel=$_GET['tel'];
$autre_ecole=$_GET['autre_ecole'];
if($autre_ecole==''){
$ecole=$_GET['ecole'];
}
else {
$reqe="INSERT INTO ecole(nom, id_ville) values('$autre_ecole', '$ville')";
$querye=mysql_query($reqe, $cnx) or die('Errant query:'.$reqe);
$ecole=mysql_insert_id();
}
function chaine_aleatoire($nb_car, $chaine = '12345679879876451245976534215')
{
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';
    for($i=0; $i < $nb_car; $i++)
    {
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }
    return $generation;
}
$password=chaine_aleatoire(8);
	$log1=substr( $prenom, 0 , 2 );
	$log2=substr( $nom, 0 , 3 );
	$reqs="select id_leader from leader where nom='$nom' and prenom='$prenom'"; 
$querys=mysql_query($reqs, $cnx);
$nb=mysql_num_rows($querys);
$nb++;
$login=$log1.$log2.$nb;
$req="INSERT INTO leader(nom, prenom, date_naissance,tel,id_ville,id_ecole,login,password) values('$nom', '$prenom', '$date_naiss', '$tel', '$ville', '$ecole', '$login', '$password')";
$query=mysql_query($req, $cnx) or die('Errant query:'.$req);
$data[]=array(
'nom' => $nom,
'prenom' => $prenom,
'login' => $login,
'password' => $password,
);
session_start();
$_SESSION['login']=$login;
$_SESSION['password']=$password;
echo '{"leader":'.json_encode($data).'}';	
?>