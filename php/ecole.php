<?php   
include('connect.php');
$req="select id_ecole, nom from ecole order by nom"; 
$query=mysql_query($req, $cnx);
while($row=mysql_fetch_array($query))
{
$data[]=array(
'id_ecole' => $row['id_ecole'],
'nom' => $row['nom'],
);
}
echo '{"ecole":'.json_encode($data).'}';
?>