<!--
Shows the events and allows one to add, edit or delete them
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Events</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <center>
            <h4>Current Events</h4>
		<?php
			include("../includes/dbconnect.php");
			$x = mysql_query("SELECT * FROM `mycal`.`events`");
			echo "<table>
					<tr>
							<th>&nbsp;Event ID&nbsp;</th>
							<th>&nbsp;Date&nbsp;</th>
							<th>&nbsp;Start Time&nbsp;</th>
                                                        <th>&nbsp;End Time&nbsp;</th>
                                                        <th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no events to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
				echo "<tr>";
				echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
				echo "<td>&nbsp;".$row['date']."&nbsp;</td>";
				echo "<td>&nbsp;".$row['start_time']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['end_time']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td>&nbsp;<a href='editevent.php?id=".$row['id']."'>edit</a> | <a href='delevent.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
                            }
                            echo "</table>";
                        }
			mysql_close($con);
		?>
            <br><br>
    <br><br>
    <fieldset>
        <legend>Add New Event</legend>
        <form action="addevent.php" method="post">
            Date: <input type="text" name="date" value="2012-12-31" />
            Start Time: <input type="text" name="start_time" value="00:00:00" />
            End Time: <input type="text" name="end_time" value="00:00:00" />
            Description: <input type="text" name="desc" />
            <input type="submit" value ="Go" />
        </form>
    </fieldset>
    </center>
    </body>
</html>
