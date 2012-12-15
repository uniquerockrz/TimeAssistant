<!--
This will install TimeAssistant in your LAMP server
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant Installer</title>
    </head>
    <body>
        Beginning installation... Done!<br>
        <?php
            echo "Connecting Database<br>";
            include("../includes/dbconnect.php");
            echo "Installing categories<br>";
            mysql_select_db("time_assistant", $con);
            $query="CREATE TABLE `categories` (`id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(20) NOT NULL, `desc` varchar(140) NOT NULL, PRIMARY KEY (`id`))";
            $x = mysql_query($query);
            if($x==1){
                    echo "Done Installing Categories";
            }
            else{
                echo mysql_error();
            }
        ?>
    </body>
</html>
