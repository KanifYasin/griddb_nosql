<!DOCTYPE html>
<html>
<head>
	<title>Kitchen Food</title>
	<style>
		body{
			background:url(pic.jpg);
			background-size: cover;
		}
		#day{
			text-align: center;
		}
		h1{
			text-align: center;
			color: green;
			font-family: sans-serif;
		}
		h2{
			margin-right: 32%;
			color: #cc6666
		}
		p{
			font-size: 25px;
			color: #00cc66;
			margin-left: 80px;
		}
		input[type='text']{
			width: 40%;
			height: 30px;
			text-align: center;
		}
		input[type='submit']{
			width: 10%;
			height: 30px;
		}
		input[type='submit']:hover{
			background: linear-gradient(to bottom, #ffffff 0%, #99ffcc 100%);
			cursor: pointer;
		}

	</style>
</head>
<body>
	<h1>Kitchen Food</h1>
	<form id="day" action="" method="post">
		<h2>Enter Day: </h2>
		<br>
		<input type="text" name="day" placeholder="Enter the Day...">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
	<h2>
		Menu IS:
	</h2>
	<?php
	if(isset($_POST['submit'])){
	switch ($_POST['day']){
		
		case 'monday':
			echo "<p> Monday's meal is Pasta...<p>";
			break;
		case 'tuesday':
			echo "<p> Tuesday meal is Egg Fried Rice...<p>";
			break;
		case 'wednesday':
			echo "<p> Wednesday meal is Soup and Chow mein...<p>";
			break;
		case 'thursday':
			echo "<p> Thursday meal is Spring Roll and Fried Rice...<p>";
			break;
		case 'friday':
			echo "<p> Friday meal is Dumplings...<p>";
			break;
		case 'saturday':
			echo "<p> Saturday meal is Fried Shrimps and Cashew...<p>";
			break;
		case 'sunday':
			echo "<p> Sunday meal is ISSpicy Tofu...<p>";
			break;
		default:
			echo "<p> Please Enter Day Carefully...<p>";
			break;
		}
	}
	?>

</body>
</html>