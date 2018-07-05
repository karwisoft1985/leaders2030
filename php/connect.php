  <?php
  $cnx = @mysql_connect( "localhost", "root", "" ) ;
  $db = mysql_select_db( "user1461_ls2030", $cnx) or die(mysql_error());
  mysql_query("SET NAMES 'utf8'"); 
  ?>