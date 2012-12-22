<!--
Categories page, add categories of plans here, or edit, delete them
-->
<html>
<head>
	<title>TimeAssistant - Categories</title>
</head>
<body>
	<?php
		include("../includes/topbanner.php");
	?>
        <center>
            <h4>Current Categories</h4>
		<?php
			include("../includes/dbconnect.php");
			$x = mysql_query("SELECT * FROM categories");
			echo "<table>
					<tr>
							<th>&nbsp;Category ID&nbsp;</th>
							<th>&nbsp;Name&nbsp;</th>
							<th>&nbsp;Description&nbsp;</th>
                                                        <th>&nbsp;Actions&nbsp;</th>
					</tr>";
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no categories to display :-(";
                        }
                        else{
                            while($row=mysql_fetch_array($x)) 
                            {
				echo "<tr>";
				echo "<td>&nbsp;".$row['id']."&nbsp;</td>";
				echo "<td>&nbsp;".$row['name']."&nbsp;</td>";
				echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "<td>&nbsp;<a href='editcategory.php?id=".$row['id']."'>edit</a> | <a href='delcategory.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
                            }
                        echo "</table>";
                        }
			mysql_close($con);
		?>
            <br><br>
            <fieldset>
                <legend>Add New Category</legend>
                <form action="addcategory.php" method="post">
                    Name: <input type="text" name="name"/>
                    Description: <input type="text" name="desc"/>
                    <input type="submit" value ="Go" />
                </form>
            </fieldset>
    </center>
</body>
</html>