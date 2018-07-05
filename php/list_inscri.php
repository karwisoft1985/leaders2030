<?php   
include('connect.php');
$req="select * from leader order by id_leader desc"; 
$query=mysql_query($req, $cnx);
while($row=mysql_fetch_array($query))
{
$data[]=array(
'id_leader' => $row['id_leader'],
'nom' => $row['nom'],
'prenom' => $row['prenom'],
'date_naissance' => $row['date_naissance'],
'tel' => $row['tel'],
'login' => $row['login'],
'password' => $row['password'],
'ville' => ville($row['id_ville']),
'id_ville' => $row['id_ville'],
'ecole' => ecole($row['id_ecole']),
);
}
echo '{"leaders":'.json_encode($data).'}';
function ville($id){
$req ="SELECT nom from ville where id_ville= '$id'";
$query=mysql_query($req) or die("probleme ville ");
$data='';
while($row=mysql_fetch_array($query)){
$data .= $row['nom'];
}
return $data;
}
function ecole($id){
$req ="SELECT nom from ecole where id_ecole= '$id'";
$query=mysql_query($req) or die("probleme ville ");
$data='';
while($row=mysql_fetch_array($query)){
$data .= $row['nom'];
}
return $data;
}
?>