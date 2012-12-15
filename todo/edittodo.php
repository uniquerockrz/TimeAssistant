<!--
Edit TODO
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit TODO</title>
    </head>
    <body>
         <?php
		include("../includes/topbanner.php");
	?>
        <h4>Edit TODO</h4>
        <?php
		include("../includes/dbconnect.php");
                $x = mysql_query("SELECT * FROM mycal.todo WHERE id=".$_GET['id']);
                $row = mysql_fetch_array($x);
                echo "<fieldset>";
                echo "<legend>Edit TODO</legend>";
                echo "<form action='edittodores.php' method='post'>";
                echo "ID : <input type='text' name='id' value='".$row['id']."' />";
                echo "&nbsp;Description : <input type='text' name='desc' value='".$row['desc']."' />";
                echo "<input type='submit' />";
                echo "</fieldset>";
                mysql_close($con);
        ?>
    </body>
</html>
