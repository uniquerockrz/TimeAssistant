<!--
Result Of Edit Category
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit Category Result</title>
    </head>
    <body>
         <?php
		include("../includes/topbanner.php");
	?>
        <h4>TimeAssistant - Edit Category Result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "UPDATE categories SET `categories`.`name`='".$_POST['name']."', `categories`.`desc`='".$_POST['desc']."' WHERE `categories`.`id`=".$_POST['id'];
                $x=mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Update Sucessfull!</font>";
                    echo "</fieldset>";
                    }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Update Unsucessful</font>";
                    echo "</fieldset>";
                }
         ?>
    <br>
    <a href="index.php">Back</a>
    </body>
</html>
