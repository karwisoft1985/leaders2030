<?php
session_start();
 session_destroy();
$data='ok';
echo '{"deconnexion":'.json_encode($data).'}';
?>