<?php
error_reporting(0);
?>
<center>
<?php if($index == true) 
	echo '<img src="includes/logo.jpg" align="center"/></br>';
else 
	echo '<img src="../includes/logo.jpg" align="center"/></br>';
?>
version 0.3-unstable
<p align="center"><font face="comic sans ms">I am your boss, I tell you what to do :-P</font></p>
<fieldset>
<font face="georgia"> 
<?php if($index==false) 
	$tmp="../";
else 
	$tmp="./";
?>
<a href="<?php echo $tmp; ?>index.php" >&nbsp;Home&nbsp;</a> |
<a href="<?php echo $tmp; ?>plans/" >&nbsp;Plans&nbsp;</a> |
<a href="<?php echo $tmp; ?>events/" >&nbsp;Events&nbsp;</a> |
<a href="<?php echo $tmp; ?>todo/" >&nbsp;TODO&nbsp;</a> |
<a href="<?php echo $tmp; ?>categories/" >&nbsp;Categories&nbsp;</a> |
<a href="<?php echo $tmp; ?>timetable/" >&nbsp;Time Table&nbsp;</a>
</font>
</fieldset>
</center>
