<!--
This page shows the results of a add category, data carried from last page by POST
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Add Category Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <h4>TimeAssistant - Add Category Result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "INSERT INTO categories (`categories`.`name`, `categories`.`desc`) VALUES('".$_POST['name']."','".$_POST['desc']."')";
                $x = mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Category Add sucessfull!</font>";
                    echo "</fieldset>";
                }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Error adding category!</red>";
                    echo "</fieldset>";
                }
                mysql_close($con);
        ?>
    <br><br>
    <a href="index.php">Back</a>
    </body>
</html>
