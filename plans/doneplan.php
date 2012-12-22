<!--
Mark a plan as done
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Plan Done Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
	<h4>Plan Done</h4>
        <?php
			include("../includes/dbconnect.php");
                        $query="UPDATE plans SET `done`=1 WHERE `id`=".$_GET['id'];
                        $x = mysql_query($query);
                        if($x==1){
                            echo "<fieldset>";
                            echo "<font color='green'>Done Sucessfull!</font>";
                            echo "</fieldset>";
                        }
                        else{
                            echo "<fieldset>";
                            echo "<font color='red'>Done Unsucessfull!</font>";
                            echo "</fieldset>";
                        }
        ?>
    <br>
    <a href="index.php">Back</a>
    </body>
</html>
