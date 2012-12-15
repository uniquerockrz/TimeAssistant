<!--
Add Event Result
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Add Event Result</title>
    </head>
    <body>
         <?php
		include("../includes/topbanner.php");
	?>
        <h4>Add event result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "INSERT INTO mycal.events (`events`.`date`, `events`.`start_time`, `events`.`end_time`, `events`.`desc`) VALUES('".$_POST['date']."','".$_POST['start_time']."','".$_POST['end_time']."','".$_POST['desc']."')";
                $x = mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Event Add Sucessfull!</font>";
                    echo "</fieldset>";
                }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Error Adding Event!</font>";
                    echo "<fieldset>";
                }
                mysql_close($con);
        ?>
    <br><br>
    <a href="events.php">Back</a>
    </body>
</html>
