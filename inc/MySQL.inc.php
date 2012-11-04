<?php
//MySQL Database Connection
mysql_connect("MYSQL_HOST", "MYSQL_USER", "MYSQL_PASS") or die(mysql_error());
mysql_select_db("MYSQL_DB") or die(mysql_error());

//MySQL Query
$result = mysql_query("SELECT * FROM info") 
or die(mysql_error());  

$row = mysql_fetch_array( $result );
?>