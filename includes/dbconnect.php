<?php
    $con = mysql_connect("localhost", "username", "password");
        if(!con) {
            die("Unable to connect to database ".mysql_error());
            }
        mysql_select_db("mycal", $con);
?>
