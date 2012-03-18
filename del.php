<?php
include ("config.php");
$id=$_GET["i"];
$p=mysql_query("delete from `indicator` where id=$id");
if ($p) print "Record ".$id." has been deleted!";
?>
<p><a href="index.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="show.php">Show Violations</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="stream_all.php">Show all Cameras</a></p>