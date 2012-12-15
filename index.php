<html>
<head>
	<title>TimeAssistant - Home</title>
</head>
<body>
	<?php
		include("includes/topbanner.php");
	?>
    <p align="center"><i>Your Schedule For Today:</i></p>
            <table align="center">
                <tr>
                    <th>&nbsp;Start Time&nbsp;</th>
                    <th>&nbsp;End Time&nbsp;</th>
                    <th>&nbsp;Category&nbsp;</th>
                    <th>&nbsp;Description&nbsp;</th>
                    <th>&nbsp;Actions&nbsp;</th>
                </tr>
                <?php
                        $d=date('w');
                        $d++;
                        include("includes/dbconnect.php");
                        $query = "SELECT * FROM mycal.day WHERE `day`.`day`=".$d;
                        $x=mysql_query($query) or die (mysql_error());
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no plans to display :-( Please add then by switching to plans tab from above.</p>";
                        }
                        else{
                              while($row=mysql_fetch_array($x)){
                                    $query2 = "SELECT * FROM `mycal`.`categories` WHERE `categories`.`id`=".$row['category'];
                                    $query3 = "SELECT * FROM `mycal`.`plans` WHERE `plans`.`category`='".$row['category']."' AND `plans`.`done`=0 ORDER BY `plans`.`priority` DESC";
                                    $y=mysql_query($query2);
                                    $z=mysql_query($query3);
                                    $r=mysql_fetch_array($y);
                                    $rs=mysql_fetch_array($z);
                                    echo "<tr>";
                                    echo "<td>&nbsp;".$row['start_time']."&nbsp;</td>";
                                    echo "<td>&nbsp;".$row['end_time']."&nbsp;</td>";
                                    echo "<td>&nbsp;".$r['name']."&nbsp;</td>";
                                    echo "<td>&nbsp;".$rs['desc']."&nbsp;</td>";
                                    echo "<td>&nbsp;<a href='plans/doneplan.php?id=".$rs['id']."'>done</a>&nbsp;</td>";
                                    echo "</tr>";
                            }
                            echo "</table>";
                        }
                        mysql_close($con);
                ?>
        <br><br>
        <p align="center"><i>Today's Events</i></p>
        <table align="center">
                <tr>
                    <th>&nbsp;Start Time&nbsp;</th>
                    <th>&nbsp;End Time&nbsp;</th>
                    <th>&nbsp;Description&nbsp;</th>
                </tr>
                <?php
                        $con = mysql_connect("localhost", "srvmdk", "DeodimaILU");
                        if(!con) {
                            die("Unable to connect to database ".mysql_error());
                        }
                        mysql_select_db("mycal", $con);
                        $query="SELECT * FROM events WHERE date='".date("Y-m-d")."'";
                        $x=mysql_query($query);
                        if(mysql_num_rows($x)==0){
                            echo "</table>";
                            echo "<p align='center'>Sorry no events to display :-(</p>";
                        }
                        else{
                            while($row=mysql_fetch_array($x)){
                                echo "<tr>";
                                echo "<td>&nbsp;".$row['start_time']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['end_time']."&nbsp;</td>";
                                echo "<td>&nbsp;".$row['desc']."&nbsp;</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        mysql_close($query);
                ?>
    </body>
</html>