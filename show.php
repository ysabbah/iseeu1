<table border="1" width="99%" id="table1">	<tr>		<td width="28"><font face="Arial"><b>ID</b></font></td>		<td width="500"><font face="Arial"><b>Cheating Action (Violation)</b></font></td>		<td width="147"><font face="Arial"><b>Violation Time</b></font></td>		<td width="147"><font face="Arial"><b>Percentage Weight</b></font></td>		<td><font face="Arial"><b>More Options</b></font></td>			</tr><?phpinclude "config.php";$A=mysql_query("SELECT * from `indicator`") or die(mysql_error());while($F=mysql_fetch_array($A)) {print   '<tr>	<td width="28" >&nbsp;'.$F[id].'</td>	<td width="500">&nbsp;'.$F[action].'</td>	<td width="147">&nbsp;'.$F[stp].'</td>	<td width="147">&nbsp;'.$F[weight].'</td>	<td><a href="del.php?i='.$F[id].'">        <img border="0" src="b_drop.png" width="16" height="16"></a>	<a href="up_show.php?i='.$F[id].'">	<img border="0" src="b_edit.png" width="16" height="16"></a><br></td>		   </tr>';}print '</table><br>';$A=mysql_query("SELECT SUM(`weight`) as total from `indicator`") or die(mysql_error());while($F=mysql_fetch_array($A)) {    print '<b>Toatl Cheating /Violation Rate = '.$F[total].'%.</b><br>';    if ($F[total]>50) {    $var = $F[total]-50;    print "The examinee is (".$var."%) exceeding the violation limit. The exam should be terminated immeadiately!<br>";    print "To terminate examination, click the 'Home Page' link, then click the 'Terminate' button.";}}?><p><a href="index.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="stream_all.php">Show All Cams</a></p>