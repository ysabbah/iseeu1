
<font color="#0000FF"><b><font size="5">ISEEU</font><font size="5">
		Proctor Management</font></b></font><br>
        <p>Welcome to ISEEU proctor management. Please, click the play button
        <img border="0" src="../pix/play.png" width="=23" height="19">
        and wait until you see the examinee&#39;s head at the top-center of the
        video screen. If the examinee is identified, click Accept button to
        start the examination.
        <br></p>

<table border="0" width="100%" id="table1">
	<tr>
		<td align="center"> <?php vioForm() ?></td>
		<td align="center"> <?php include ("../stream1.php")?> </td>
	</tr>
	<tr>
		<td align="center">
                <p><a href="index.php">Main Monitor</a>&nbsp;&nbsp;&nbsp;
		<a href="show.php">Show Violations</a></p></td>
	</tr>
</table>
                
<?php

function vioForm(){
include "config.php";
$op=array(
            array('Select the cheating action from the list',0.0), array('Looking arround',0.1), array('Talking with someone',0.1),
            array('Looking at the textbook or a cheating sheet',0.15), array('Using mobile devices',0.1), array('Redirect the Webcam or disabling it',0.1),
            array('Someone else setting besides him to assest',0.15), array('Someone else replaced him',0.2), array('Incoming/ Outgoing call (Mobile or Telephone)',0.1),
            array('Send/ Receive messages (SMS, MMS, ..etc)',0.1)
          );

print '<form method="POST" action="">
           <p><select size="1" name="S">
           <option value="'.$op[0][0].'">'.$op[0][0].'</option>';
for ($i=1;$i<10;$i++)
    print ' <option value="'.$op[$i][0].'">'.$op[$i][0].'</option>';
    print ' </select></p>
            <p><input type="submit" value="Submit" name="B1">
            <input type="reset" value="Reset" name="B2"></p>
       </form>';

$sel=$_POST["S"];
if ($sel==$op[0][0])

    print '<script type="text/javascript">
                    alert ("Not allowed option! You should select from the list.");
           </script>';
    else
    {
        for ($i=1;$i<10;$i++)
            if ($sel==$op[$i][0]) {
                $w=$op[$i][1];
                $pw=$w*100;               
                $qs=mysql_query("insert into `indicator` (`id`, `action`, `stp`, `weight`)
                VALUES (NULL , '$sel', CURRENT_TIMESTAMP, '$pw');");
                if ($qs)
                    print "<p align='left'>One record has been successfully inserted.</p>".
                          "<p align='left'><b>Violation:</b> ".$sel.". <br><b>Corresponding Cheating Rate:</b> ".$pw."%</p>";
            }
    }
}

?>