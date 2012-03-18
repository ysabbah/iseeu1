<?
include("config.php");
$id=$i;
$R=mysql_query("SELECT * from `indicator` where id=$id;");
while($fch=mysql_fetch_array($R))
{
echo '<form method="POST" action="update.php?a='.$id.'">
	<p>Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="T1" size="20" value="'.$fch[action].'"></p>
	<p>Weight&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="T2" size="20" value="'.$fch[weight].'" ></p>
	<p><input type="submit" value="Update" name="B1"></p>
</form>
<p><a href="index.php">Home Page</a></p>';
}
?>

