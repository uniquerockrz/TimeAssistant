<!--
Delete a day event
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Delete Day Event Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
	<h4>Delete Day</h4>
        <?php
			include("../includes/dbconnect.php");
                        $query="DELETE FROM `day` WHERE `id`=".$_GET['id'];
                        $x = mysql_query($query);
                        if($x==1){
                            echo "<fieldset>";
                            echo "<font color='green'>Delete Sucessfull!</font>";
                            echo "</fieldset>";
                        }
                        else{
                            echo "<fieldset>";
                            echo "<font color='red'>Delete Unsucessful</font>";
                            echo "</fieldset>";
                        }
        ?>
            <br>
    <a href="javascript:history.go(-2)">Back</a>
    </body>
    </body>
</html>
