<?php
$host="localhost";
$dbUser="root";
$dbPass="root";
$db="mydatabase";
mysql_connect($host,$dbUser,$dbPass);
mysql_select_db($db) or die (mysql_error());
?>
