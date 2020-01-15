<!DOCTYPE html>
<html>
<head>
	<title>Fictorial</title>
</head>
<body>
	<h1>Factorial</h1>
	<?php 
	function Factorial_Function($number){
		$input = $number;
		$fact = 1;
		for ($i=$input; $i>=1; $i--) {
			$fact = $fact * $i;
		}
		return $fact;
	}
		$result = Factorial_Function(12);
		echo "Factorial of the number 12 is ".$result;
	?>

</body>
</html>