<?php
    #DO edit here!
    $con = mysql_connect("localhost", "user", "pass");
    if(!$con) {
          die("Unable to connect to database ".mysql_error());
    }
    mysql_select_db("db", $con);
?>
