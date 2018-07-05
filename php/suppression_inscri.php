<?php
$id=$_GET['id'];
include('connect.php');
$query1 ="DELETE FROM leader WHERE id_leader='".$id."'";
mysql_query($query1,$cnx) or die('Errant query:  '.$query1);
$res="ok";
echo '{"leader":'.json_encode($res).'}';
?>