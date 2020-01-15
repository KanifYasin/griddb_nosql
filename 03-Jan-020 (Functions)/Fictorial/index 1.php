<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Factorial</h1>
		<form action="" method="post">
			<input type="number" name="number" placeholder="Enter any number...">
			<br>
			<br>
			<input type="submit" name="submit">
		</form>
	<?php 
		if (isset($_POST['submit'])) {
			$fact = 1;
			$number = $_POST['number'];

			echo "<p>Factorial of $number:</p>";
				for ($i=1; $i<=$number ;$i++) { 
						$fact = $fact *$i;
					}
			echo $fact . "<br>";
		}
	?>
</body>
</html>