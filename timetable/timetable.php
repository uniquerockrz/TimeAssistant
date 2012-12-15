<!--
Select day to display
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TimeAssistant - Time Table</title>
    </head>
    <body>
        <?php
            include("../includes/topbanner.php");
        ?>
    <br>
    <center>
       <fieldset>
           <legend>Enter day number to view, sunday = 1</legend>
            <form action="viewday.php" method="post">
                <input type="text" name="day" />
                <input type="submit" value="Go!" />
        </form>
        </fieldset>
        </center>
    </body>
</html>
