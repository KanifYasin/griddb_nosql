<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reverse String</title>
</head>
<body>
	<?php
	if (isset($_POST['reverse'])) {
		$str=$_POST['string'];
		$new=strrev($str);
	}

	if (isset($_POST['reverse2'])) {
		$stri=$_POST['string2'];
		$length=strlen($stri);
		$rev="";

		for ($i=($length-1); $i>=0; $i--) { 
			$rev.=$stri[$i];
		}
		$neww=$rev;
	}
	?>
	<form action="" method="POST">
		<h1>With IN-Built Function.</h1>
		<input type="text" name="string" placeholder="Enter a Stirng...">
		<input type="text" value="<?php echo @$new; ?>">
		<input type="submit" name="reverse" value="reverse">
	</form>

	<form action="" method="POST">
		<h1>WithOut IN-Built Function.</h1>
		<input type="text" name="string2" placeholder="Enter a Stirng...">
		<input type="text" value="<?php echo @$neww; ?>">
		<input type="submit" name="reverse2" value="reverse">
	</form>
</body>
</html>