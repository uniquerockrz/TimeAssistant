<!--
Edit day event result
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Time Assistant - Edit Day Event Result</title>
    </head>
    <body>
       <?php
		include("../includes/topbanner.php");
	?>
        <h4>Edit Day Result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "UPDATE day SET `day`='".$_POST['day']."', `start_time`='".$_POST['start_time']."', `end_time`='".$_POST['end_time']."' ,`category`='".$_POST['category']."' WHERE `id`=".$_POST['id'];
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
    <a href="javascript:history.go(-3)">Back</a>
    </body>
</html>
