<!--
Add a new day time event result
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Add Day Result</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <h4>Add day result</h4>
        <?php
		include("../includes/dbconnect.php");
                $query = "INSERT INTO mycal.day (`day`.`day`, `day`.`start_time`, `day`.`end_time`, `day`.`category`) VALUES('".$_POST['day']."','".$_POST['start_time']."','".$_POST['end_time']."','".$_POST['category']."')";
                $x = mysql_query($query);
                if($x==1){
                    echo "<fieldset>";
                    echo "<font color='green'>Day Add sucessfull!</font>";
                    echo "</fieldset>";
                }
                else{
                    echo "<fieldset>";
                    echo "<font color='red'>Error adding category!</font>";
                    echo "</fieldset>";
                }
         ?>
    <br>
    <a href="javascript:history.go(-2)">Back</a>
    </body>
</html>
