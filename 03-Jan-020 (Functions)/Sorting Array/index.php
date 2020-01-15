<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sorting Array</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	  //Ascending Order....
	$day=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	sort($day);
	$arrlength=count($day);
	$result1="";
	for ($i=0; $i < $arrlength; $i++) { 
		$result1.=$day[$i]."<br>";
	}
	//descending Order....
	rsort($day);
	$result2="";
	for ($i=0; $i < $arrlength; $i++) { 
		$result2.=$day[$i]. "<br>";
	}
	?>
	<h1>Ascending Order</h1>
	<p><?php echo ($result1);?></p>

	<h1>Descending Order</h1>
	<p><?php echo ($result2);?></p>
</body>
</html>