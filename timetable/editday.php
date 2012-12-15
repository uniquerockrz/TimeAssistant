<!--
Edit a day event
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit Day Event</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <?php
		include("../includes/dbconnect.php");
                $x = mysql_query("SELECT * FROM `mycal`.`day` WHERE id=".$_GET['id']);
                $row = mysql_fetch_array($x);
                echo "<fieldset>";
                echo "<legend>Edit Day</legend>";
                echo "<form action='editdayres.php' method='post'>";
                echo "ID : <input type='text' name='id' value='".$row['id']."' />";
                echo "&nbsp;Day : <input type='text' name='day' value='".$row['day']."' />";
                echo "&nbsp;Start Time : <input type='text' name='start_time' value='".$row['start_time']."' />";
                echo "&nbsp;End Time : <input type='text' name='end_time' value='".$row['end_time']."' />";
                echo "&nbsp;Category : <input type='text' name='category' value='".$row['category']."' />";
                echo "<input type='submit' />";
                echo "</fieldset>";
                mysql_close($con);
        ?>
    </body>
</html>
