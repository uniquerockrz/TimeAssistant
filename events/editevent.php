<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit Event</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <?php
		include("../includes/dbconnect.php");
                $x = mysql_query("SELECT * FROM `events` WHERE id=".$_GET['id']);
                $row = mysql_fetch_array($x);
                echo "<fieldset>";
                echo "<legend>Edit Event</legend>";
                echo "<form action='editeventres.php' method='post'>";
                echo "ID : <input type='text' name='id' value='".$row['id']."' />";
                echo "&nbsp;Date : <input type='text' name='date' value='".$row['date']."' /><br>";
                echo "&nbsp;Start Time : <input type='text' name='start_time' value='".$row['start_time']."' /><br>";
                echo "&nbsp;End Time : <input type='text' name='end_time' value='".$row['end_time']."' /><br>";
                echo "&nbsp;Description : <input type='text' name='desc' value='".$row['desc']."' /><br>";
                echo "<input type='submit' />";
                echo "</fieldset>";
                mysql_close($con);
        ?>
    </body>
</html>
