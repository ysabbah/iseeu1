<html>
    <head>
        <meta http-equiv="Content-Language" content="en-us">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
    </head>
    <body>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0"
		width="360" height="340" align="center" valign="middle">
		<param name="movie" value="http://localhost/client/live.swf">
		<param name="quality" value="high">
		<param name="allowFullScreen" value="true" >
		<param name="play" value="true">
		<param name="LOOP" value="false">
		<embed src="http://localhost/client/live.swf" width="360" height="340" align="center" valign="middle" play="true" loop="false" quality="high" 
			pluginspage="http://www.macromedia.com/go/getflashplayer" 
			allowfullscreen="true" type="application/x-shockwave-flash">
		</embed>
	</object>
        <?php
        function accept(){
            include "config.php";
            $sid='';
            $R=mysql_query("SELECT sid from `student_state` where ch_id='1' AND `state` = '00';");
            while($fch=mysql_fetch_array($R))
            {
                $sid=$fch[sid];
            }
            $query="UPDATE `student_state` SET `state` = '01', `state_label` = 'Start' ".
                    "WHERE CONVERT( `student_state`.`sid` USING utf8 ) = '".$sid."' LIMIT 1 ;";
            mysql_query($query);
        }
        ?>
    	<form method="POST" action="">
                <input type="hidden" value="<?php accept(); ?>" name="T" size="20">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Accept" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reject" name="B2"></p>
        </form>
    </body>
</html>
