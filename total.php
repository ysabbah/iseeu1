<?php
include "config.php";
$T=mysql_query("SELECT SUM(`weight`) as Total FROM `indicator`");
while($F=mysql_fetch_array($T)) 
{
$rate=$F[Total];
}
print '<script type="text/javascript"> 
		rate='.$rate.';
		if (rate<50 && rate>0) alert ("Violation! Cheating Rate is "+rate+"%.  If, this rate exceeds 50%,"+
									  "the exam will be terminated permanently with ZERO grade!");
		else if (rate>=50) alert("Sorry! Your Cheating Rate now is "+rate+"%. Your exam has been terminated permanently"+
								 " with 0 (ZERO) grade, since this rate has exceeded 50%! Hard Luck..");
		else document.write("Cheating Rate is "+rate+" now. This is to measure your Cheating Rate, Pay attention!!! If it exceeds 50%,"+
						    " your exam will be terminated permanently with ZERO grade!");
	   </script>';

?>