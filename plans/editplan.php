<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit Plan</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <?php
		include("../includes/dbconnect.php");
                $x = mysql_query("SELECT * FROM mycal.plans WHERE id=".$_GET['id']);
                $row = mysql_fetch_array($x);
                echo "<fieldset>";
                echo "<legend>Edit Plan</legend>";
                echo "<form action='editplanres.php' method='post'>";
                echo "ID : <input type='text' name='id' value='".$row['id']."' />";
                echo "&nbsp;Category : <input type='text' name='category' value='".$row['category']."' />";
                echo "&nbsp;Description : <input type='text' name='desc' value='".$row['desc']."' />";
                echo "&nbsp;Deadline : <input type='text' name='deadline' value='".$row['deadline']."' />";
                echo "&nbsp;Priority : <input type='text' name='priority' value='".$row['priority']."' />";
                echo "<input type='submit' />";
                echo "</fieldset>";
                mysql_close($con);
        ?>
         <?php
                        $con = mysql_connect("localhost", "srvmdk", "DeodimaILU");
			if(!con) {
				die("Unable to connect to database ".mysql_error());
				}
			mysql_select_db("mycal", $con);
			$x = mysql_query("SELECT * FROM `mycal`.`categories`");
			while($row=mysql_fetch_array($x)) 
			{
				echo $row['id']."&nbsp;:&nbsp;";
				echo $row['name']."&nbsp;<br>";
			}
			mysql_close($con);
         ?>
    </body>
</html>
