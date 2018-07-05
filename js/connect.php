  <?php
  $cnx = @mysql_connect( "localhost", "user1461_ls2030", "0A2q0C4a" ) ;
  $db = mysql_select_db( "user1461_ls2030", $cnx) or die(mysql_error());
  mysql_query("SET NAMES 'utf8'"); 
  ?>