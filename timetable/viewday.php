<!--
View a day's time table
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Viewing Day</title>
    </head>
    <body>
        <?php
            include("../includes/topbanner.php");
        ?>
        <h4>Viewing Day</h4>
        <center>
        <?php
            include("../includes/dbconnect.php");
            $result=mysql_query("SELECT * FROM `day` WHERE `day`=".$_POST['day']);
            echo "<table border='2'>
                        <tr>
                            <th>Event ID</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Category</th>
                            <th>Actions</th>
			</tr>";
                        while($row=  mysql_fetch_array($result)){
                            $query="SELECT * FROM categories WHERE `id`=".$row['category'];
                            $y=mysql_query($query);
                            $r=mysql_fetch_array($y);
                            echo "<tr>";
                            echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
                            echo "<td>&nbsp;".$row['day']."&nbsp;</td>";
                            echo "<td>&nbsp;".$row['start_time']."&nbsp;</td>";
                            echo "<td>&nbsp;".$row['end_time']."&nbsp;</td>";
                            echo "<td>&nbsp;".$r['name']."&nbsp;</td>";
                            echo "<td>&nbsp;<a href='editday.php?id=".$row['id']."'>edit</a> | <a href='delday.php?id=".$row['id']."'>delete</a>&nbsp;";
                            echo "</tr>";
                        }
                        echo "</table>";
			mysql_close($con);
        ?>
            <br>
            <fieldset>
                <legend>Add New Day</legend>
        <form action="addday.php" method="post">
            <?php
                echo "Day: <input type='text' name='day' value='".$_POST['day']."' />";
            ?>
            Start Time: <input type="text" name="start_time" value="00:00:00" />
            End Time: <input type="text" name="end_time" value="00:00:00" />
            Category: <input type="text" name="category" />
            <input type="submit" value ="Go" />
        </form></fieldset>
        <br>
        <?php
                        include("../includes/dbconnect.php");
			$x = mysql_query("SELECT * FROM `categories`");
			while($row=mysql_fetch_array($x)) 
			{
				echo $row['id']."&nbsp;:&nbsp;";
				echo $row['name']."&nbsp;<br>";
			}
			mysql_close($con);
            ?>
        </center>
    </body>
</html>
