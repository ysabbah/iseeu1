
<?
include("config.php");
mysql_query("UPDATE `indicator` SET action='$T1', weight='$T2' WHERE id='$a';");
print "Record ".$a." has been updated...";
?>