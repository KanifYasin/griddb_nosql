<!DOCTYPE html>
<html>
<head>
	<title>Prime Number</title>
</head>
<body>
	<h1>Prime Number</h1>
	<?php
	function primeCheck($number){

			for ($i=2; $i<=$number/2 ; $i++) { 
				if($number % $i ==0){
					return 0;
				}
		}
		return 1;
	}
	$num = primeCheck(19);
	if ($num==1) {
		echo "The number is Prime";
	}
	else{
		echo "The number is not Prime";
	}
	?>
</body>
</html>