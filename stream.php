<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br>
        Welcome to ISEEU monitoring system. Please, click the play button (>),
        <br>
        then calibrate your Web-cam. When you see your head at the top-center of
        <br>
        the video screen, enter your full name, press Submit button, and continue
        <br>
        to your examination.
        <br> <br>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0"
		width="360" height="340" align="center" valign="middle">
		<param name="movie" value="http://streaming.qou.edu/qouLive.swf">
		<param name="quality" value="high">
		<param name="allowFullScreen" value="true" >
		<param name="play" value="true">
		<param name="LOOP" value="false">
		<embed src="http://streaming.qou.edu/qouLive.swf" width="360" height="340" align="center" valign="middle" play="true" loop="false" quality="high" 
			pluginspage="http://www.macromedia.com/go/getflashplayer" 
			allowfullscreen="true" type="application/x-shockwave-flash">
		</embed>
	</object>     
        
        <form action= "attempt.php?q=3&page=0" method="post">
            Password: <input type="password" name="passwd"/>
            <input type="submit" value="submit" onClick=""/>
        </form>

<!--        <br>
        <form action="test_db.php" method="post">
            Firstname: <input type="text" name="firstname" />
            Lastname: <input type="text" name="lastname" /> <br>
            Age: <input type="text" name="age" />
            Birth: <input type="text" name="birth" />
        <input type="submit" />
        </form>-->

        <?php
            require_once(dirname(__FILE__) . '/../../config.php');
            require_once($CFG->dirroot . '/mod/quiz/locallib.php');
            function go() {
                $pw=$_POST["passwd"];
                if($pw==""){
                    wait();
                }
                else
                    if ($pw=="pass") {
                        echo "Please wait, your exam will start soon!";
//                    wait();
//                        $CFG -> load->helper('url');
                        redirect($CFG -> dirroot . '/mod/quiz/startattempt.php?cmid=' .$cm -> id. '&sesskey=' . sesskey());
                        break;
                }
            }
            go();       
//            include_once($CFG->dirroot . '/mod/quiz/test_db.php');
        ?>
    </body>
</html>
