<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style>
		body{
			background: url(pic.png);
			background-size: cover;
			text-align: right;
			margin-right: 25%;
			margin-top: 12%;
		}
		h1{
			margin-right: -4%;
			color: brown;
		}
	</style>
</head>
<body>
	<h1>Table of 2</h1>
<?php
$x=2;
	for ($y=1; $y<=10 ; $y++) { 
		echo $x." x ".$y." = ".$x*$y."<br><br>";
	}

?>
</body>
</html>