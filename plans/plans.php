<!--
Shows all the plans you have and allows you to edit, delete them
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Plans</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <center>
            <p align="center"><i>Undone Plans</i></p>
		<?php
			include("../includes/dbconnect.php");
			$x = mysql_query("SELECT * FROM mycal.plans WHERE `plans`.`done`=0 ORDER BY `plans`.`category`");
                        echo "<table>
					<tr>
							<th>&nbsp;Plan ID&nbsp;</th>
							<th>&nbsp;Category&nbsp;</th>
							<th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Deadline&nbsp;</th>
                                                        <th>&nbsp;Priority&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no plans to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
                                $query="SELECT * FROM mycal.categories WHERE `categories`.`id`=".$row['category'];
                                $y=mysql_query($query);
                                $r=mysql_fetch_array($y);
                                echo "<tr>";
                                echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
                                echo "<td>&nbsp;".$r['name']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['deadline']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['priority']."&nbsp;</td>";
                                echo "<td>&nbsp;<a href='doneplan.php?id=".$row['id']."'>done</a> | <a href='editplan.php?id=".$row['id']."'>edit</a> | <a href='delplan.php?id=".$row['id']."'>delete</a>&nbsp;";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
			mysql_close($con);
		?>
            <br>
            <fieldset>
                <legend>Add new plan</legend>
                <form action="addplan.php" method="post">
                Category ID: <input type="text" name="catid" />
                Description: <input type="text" name="desc" />
                Deadline: <input type="text" name="dl" />
                Priority: <input type="text" name="priority" />
                <input type="submit" value ="Go" />
            </form>
            </fieldset>
            <br>
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
            <p align="center"><i>Done Plans</i></p>
                <?php
			$con = mysql_connect("localhost", "srvmdk", "DeodimaILU");
			if(!con) {
				die("Unable to connect to database ".mysql_error());
				}
			mysql_select_db("mycal", $con);
			$x = mysql_query("SELECT * FROM mycal.plans WHERE `plans`.`done`=1");
                        echo "<table>
					<tr>
							<th>&nbsp;Plan ID&nbsp;</th>
							<th>&nbsp;Category&nbsp;</th>
							<th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no plans to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
                                $query="SELECT * FROM mycal.categories WHERE `categories`.`id`=".$row['category'];
                                $y=mysql_query($query);
                                $r=mysql_fetch_array($y);
                                echo "<tr>";
                                echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
                                echo "<td>&nbsp;".$r['name']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td><a href='delplan.php?id=".$row['id']."'>delete</a>&nbsp;";
                                echo "</tr>";
                            }
			echo "</table>";
                        }
			mysql_close($con);
		?>
    </body>
</html>
