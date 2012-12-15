<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Add Plan Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <h4>Add plan result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "INSERT INTO mycal.plans (`plans`.`category`, `plans`.`desc`, `plans`.`deadline`, `plans`.`priority`, `plans`.`done`) VALUES('".$_POST['catid']."','".$_POST['desc']."','".$_POST['dl']."','".$_POST['priority']."', 0)";
                $x = mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Plan Add sucessfull!</font>";
                    echo "</fieldset>";
                }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Error adding plan!</font>";
                    echo "</fieldset>";
                }
                mysql_close($con);
        ?>
    <br><br>
    <a href="plans.php">Back</a>
    </body>
</html>
