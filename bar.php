<?php

$chRt=51;
cheatBar($chRt);
$color="green";
function cheatBar($rate){

if ($rate>50) 
   $color="red";

echo '
<script type="text/javascript">
	var b="";
	var c=0;
	var t;
	var timer_is_on=0;
	var rate='.$rate.';
	
	function timedCount()
	{
		c=c+1;
		document.getElementById("txt").value=b;
		if (c<=rate) { b=b+"|";}
		t=setTimeout("timedCount()",100);
	}
	
	function doTimer()
	{
		if (!timer_is_on)
		  {
		  timer_is_on=1;
		  timedCount();
		  }
	}
	
	function stopCount()
	{
		clearTimeout(t);
		timer_is_on=0;
	}
	if (rate>=40)
		alert("Warning: if your cheating rate exceeds 50%, your exam will be terminated with 0 grade!");

</script>';
}

echo '
<body onload="doTimer()">
<table border="1" width="329" style="border-collapse: collapse">
	<tr>
		<td align="center" style="border-left-style: solid; border-left-width: 1px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; border-bottom-style: none; border-bottom-width: medium">
			<font face="Arial"><b>Cheating Indicator</b></font>
		</td>
	</tr>
	<tr>
		<td align="center" style="border-left-style: solid; border-left-width: 1px; border-right-style: solid; border-right-width: 1px; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium">
			<input type="text" id="txt" name="T1" size="45" style="border-style:outset; border-width:1px; color: '.$color.'; font-weight: bold"/>
		</td>
	</tr>
	<tr>
		<td align="center" style="border-left-style: solid; border-left-width: 1px; border-right-style: solid; border-right-width: 1px; border-top-style: none; border-top-width: medium; border-bottom-style: solid; border-bottom-width: 1px">
		<input border="0" src="../pix/scale1.png" name="I1" width="328" height="49" type="image">
		</td>
	</tr>
</table>';

?>