<!--
TODO
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Todo</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <center>
            <br>
            <i>Undone TODO</i>
            <br><br>
            <?php
			include("../includes/dbconnect.php");
			$x = mysql_query("SELECT * FROM mycal.todo WHERE `todo`.`done`=0");
                        echo "<table>
					<tr>
							<th>&nbsp;TODO ID&nbsp;</th>
							<th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no todo to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
                                echo "<tr>";
                                echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td>&nbsp;<a href='donetodo.php?id=".$row['id']."'>done</a> | <a href='edittodo.php?id=".$row['id']."'>edit</a> | <a href='deltodo.php?id=".$row['id']."'>delete</a>&nbsp;";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
			mysql_close($con);
		?>
            <br>
            <fieldset>
                <legend>Add new TODO</legend>
                <form action="addtodo.php" method="post">
                Description: <input type="text" name="desc" />
                <input type="submit" value ="Go" />
            </form>
            </fieldset>
            <br>
            <i>Done Plans</i><br><br>
                <?php
			$con = mysql_connect("localhost", "srvmdk", "DeodimaILU");
			if(!con) {
				die("Unable to connect to database ".mysql_error());
				}
			mysql_select_db("mycal", $con);
			$x = mysql_query("SELECT * FROM mycal.todo WHERE `todo`.`done`=1");
                        echo "<table>
					<tr>
							<th>&nbsp;TODO ID&nbsp;</th>
							<th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no todo to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
                                echo "<tr>";
                                echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td><a href='deltodo.php?id=".$row['id']."'>delete</a>&nbsp;";
                                echo "</tr>";
                            }
			echo "</table>";
                        }
			mysql_close($con);
		?>
    </body>
</html>
