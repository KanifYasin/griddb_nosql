<!DOCTYPE html>
<html>
<head>
	<title>Meal Day</title>
	<style>
		body{
			background:url(pic.jpg);
		}
		h1{
			text-align: center;
			color:  #cc0000;
		}
		p
		{
			font-size: 30px;
			color: #cc0000;
		}
		#day{
			text-align: center;
		}
		input[type="text"]
		{
			width: 40%;
			height:40px;
		}
		input[type='submit']
		{
			width: 10%;
			height: 40px;
			border-radius: 20%;
			font-size: 25px;
			border:1px solid #b3e6ff;
		}
		input[type='submit']:hover{
			background-color: lightgrey;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Food Menu</h1>
	<form id="day" action="" method="post">
		<h2>
			Enter Day:
		</h2>
		<br>
		<input type="text" placeholder="Enter the Day for Today's Meal" name="day">
		<br><br>
		<input type="submit" name="submit">
	</form>
	<p>
		Menu IS :
	</p>
	<?php
	if (isset($_POST['submit'])) {
	 	$day=$_POST['day'];
	 if ($day=="monday") {
	 	echo "Today's Meal Is Pasta";
	 }
	 elseif ($day=="tuesday") {
	 	echo "Today's Meal Is Egg Fried Rice";
	 }
	 elseif ($day=="wednesday") {
	 	echo "Today's Meal Is Soup and Chow mein";
	 }
	 elseif ($day=="thursday") {
	 	echo "Today's Meal IS Spring Roll and Fried Rice";
	 }
	 elseif ($day=="friday") {
	 	echo "Today's Meal IS Dumplings";
	 }
	 elseif ($day=="saturday") {
	 	echo "Today's Meal IS Fried Shrimps and Cashew";
	 }
	 elseif ($day=="sunday") {
	 	echo "Today's Meal ISSpicy Tofu";
	 }
	 else{
	 	echo "Please Enter day Carefully";
	 }
	}
	?>
</body>
</html>