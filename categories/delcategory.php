<!--
This page deletes a category based on GET variable
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Delete Category Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
	<h4>TimeAssistant - Delete Category Result</h4>
        <?php
			include("../includes/dbconnect.php");
                        $query="DELETE FROM categories WHERE `categories`.`id`=".$_GET['id'];
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
    <a href="index.php">Back</a>
    </body>
</html>
