<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Edit Plan Result</title>
    </head>
    <body>
         <?php
		include("../includes/topbanner.php");
	?>
        <h4>Edit Plan Result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "UPDATE mycal.plans SET `plans`.`category`='".$_POST['category']."', `plans`.`desc`='".$_POST['desc']."', `plans`.`deadline`='".$_POST['deadline']."', `plans`.`priority`='".$_POST['priority']."' WHERE `plans`.`id`=".$_POST['id'];
                $x=mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Update Sucessfull!</font>";
                    echo "</fieldset>";
                    }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Update Unsucessful</font>";
                    echo "</fieldset>";
                }
         ?>
    <br>
    <a href="plans.php">Back</a>
    </body>
</html>
