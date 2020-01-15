<!DOCTYPE html>
 
<head>
	<title>PHP - Calculate Electricity Bill</title>
	<style>
		body{
			text-align: center;
			background: url(pic.jpg) no-repeat;
			background-size: cover;
		}
		input[type='number']{
			width: 30%;
			height: 30px;
		}
		input[type='submit']{
			width: 10%;
			height: 30px;
		}
		input[type='submit']:hover{
			background-color: #df80ff;
			cursor: pointer;
		}
		h1{
			color: #4d4dff
		}
		#main{
			margin-top: 3%;
		}
		p{
			font-size: 30px;
			color: #4d4dff;
		}
	</style>
</head>
 
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;
 
    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
 
?>
 
<body>
	<div id="main">
		<h1>Php - Calculate Electricity Bill</h1>
		
		<form action="" method="post" id="quiz-form">            
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units">
            	<br>
            	<br>
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit">
		</form>
 
		<div>
		    <p><?php echo '<br>' . $result_str; ?></p>
		</div>	
	</div>
</body>
</html>