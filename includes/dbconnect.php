<?php
    $con = mysql_connect("localhost", "user69", "password");
        if(!con) {
            die("Unable to connect to database ".mysql_error());
            }
        mysql_select_db("time_assistant", $con);
?>
