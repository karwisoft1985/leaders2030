<?php   
include('connect.php');
$reqv="select id_ville, nom from ville order by nom"; 
$queryv=mysql_query($reqv, $cnx);
while($rowv=mysql_fetch_array($queryv))
{
$data[]=array(
'id_ville' => $rowv['id_ville'],
'nom' => $rowv['nom'],
);
}
echo '{"ville":'.json_encode($data).'}';
?>