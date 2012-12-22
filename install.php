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
            include("includes/dbconnect.php");
            
            echo "<br>Installing categories<br>";
			$query="CREATE TABLE IF NOT EXISTS `categories` (`id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(20) NOT NULL, `desc` varchar(140) NOT NULL, PRIMARY KEY (`id`))";
            $x = mysql_query($query);
            if($x==1){
                    echo "<br>Done Installing Categories";
            }
            else{
                echo mysql_error();
            }
            
            echo "<br>Installing day<br>";
			$query="CREATE TABLE IF NOT EXISTS `day` (`id` int(11) NOT NULL AUTO_INCREMENT, `day` int(11) NOT NULL, `start_time` time NOT NULL, `end_time` time NOT NULL, `category` int(11) NOT NULL, PRIMARY KEY (`id`)) ";
            $x = mysql_query($query);
            if($x==1){
                    echo "<br>Done Installing day";
            }
            else{
                echo mysql_error();
            }
            
            echo "<br>Installing events<br>";
			$query="CREATE TABLE IF NOT EXISTS `events` ( `id` int(11) NOT NULL AUTO_INCREMENT, `date` date NOT NULL, `start_time` time NOT NULL, `end_time` time NOT NULL, `desc` varchar(200) NOT NULL, PRIMARY KEY (`id`))";
            $x = mysql_query($query);
            if($x==1){
                    echo "<br>Done Installing events";
            }
            else{
                echo mysql_error();
            }
            
            echo "<br>Installing plans<br>";
			$query="CREATE TABLE IF NOT EXISTS `plans`( `id` int(11) NOT NULL AUTO_INCREMENT, `category` int(11) NOT NULL, `desc` varchar(200) NOT NULL, `deadline` date NOT NULL, `priority` int(11) NOT NULL, `done` int(11) NOT NULL, PRIMARY KEY (`id`))";
            $x = mysql_query($query);
            if($x==1){
                    echo "<br>Done Installing plans";
            }
            else{
                echo mysql_error();
            }
            
            echo "<br>Installing todo<br>";
			$query="CREATE TABLE IF NOT EXISTS `todo` ( `id` int(11) NOT NULL AUTO_INCREMENT, `desc` varchar(200) NOT NULL, `done` int(11) NOT NULL, PRIMARY KEY (`id`))";
            $x = mysql_query($query);
            if($x==1){
                    echo "<br>Done Installing plans";
            }
            else{
                echo mysql_error();
            }
            
        ?>
    </body>
</html>
