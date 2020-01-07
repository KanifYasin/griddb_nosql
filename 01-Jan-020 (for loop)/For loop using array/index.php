<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
	<style>
		body{
			background:url(pic.jpg) no-repeat;
			background-size: cover;
			text-align: center;
			margin-top: 3%;
		}
		p{
			font-size: 30px;
		}
	</style>
</head>
<body>
	<h1>For Loop By Using Array</h1>
	
<?php  
 $Colors = ["Red", "Yellow", "Brown", "Pink", "Orange", "Purple", "Green"];

        for ($i = 0; $i < count($Colors); $i++)  {
            echo $Colors[$i] ."<br><br>";
        }
?>  
</body>
</html>