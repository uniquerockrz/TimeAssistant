<!--
Edit Category Page
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Time Assistant - Edit Category</title>
    </head>
    <body>
        <?php
		include("../includes/topbanner.php");
	?>
        <?php
		include("../includes/dbconnect.php");
                $x = mysql_query("SELECT * FROM categories WHERE id=".$_GET['id']);
                $row = mysql_fetch_array($x);
                echo "<fieldset>";
                echo "<legend>Edit Category</legend>";
                echo "<form action='editcategoryres.php' method='post'>";
                echo "ID : <input type='text' name='id' value='".$row['id']."' /><br>";
                echo "&nbsp;Name : <input type='text' name='name' value='".$row['name']."' /><br>";
                echo "&nbsp;Description : <input type='text' name='desc' value='".$row['desc']."' /><br>";
                echo "<input type='submit' />";
                mysql_close($con);
        ?>
    </body>
</html>
