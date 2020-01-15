<!DOCTYPE html>
<html>
<head>
	<title>Prime Number</title>
	<style>
		body{
			text-align: center;
		}
		p{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>Number is Prime or Not</h1>
	<form action="" method="POST" id="prime">
		<input type="number" name="number" placeholder="Enter any Number">
		<br>
		<br>
		<input type="submit" name="submit">
		<h2>Output:</h2>
	</form>
	<?php
	if (isset($_POST['submit'])) {
	 	check($number=$_POST['number']);
	 } 
	 function check($number){
		 for ($i=2; $i<=$number; $i++) { 
		 	if ($number%$i==0) {
		 		break;
		 	}
		 }
		 if ($number==$i) {
		 	echo "<p>Number Is Prime.</p>";
		 }
		 else{
		 	echo "<p>Number Is Not Prime.</p>";
		 }
	 }
	?>
</body>
</html>