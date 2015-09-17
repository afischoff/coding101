<?php
include('helperFunctions.php');
$answer = processEquation($_POST['num1'], $_POST['operator'], $_POST['num2']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Calculator</title>
	<style>
		body {
			font-family: Arial, Verdana, Helvetica, Geneva, sans-serif;
			font-size: 12px;
		}
	</style>
</head>
<body>
<h3>Web Calculator</h3>
<form action="calculator.php" method="post">
	<select name="num1" size="1">
		<?php echo makeSelectOptions(getNumberOptions(), $_POST['num1']); ?>
	</select>
	<select name="operator" size="1">
		<?php echo makeSelectOptions(getOperators(), $_POST['operator']); ?>
	</select>
	<select name="num2" size="1">
		<?php echo makeSelectOptions(getNumberOptions(200, 500, 10), $_POST['num2']); ?>
	</select>
	=
	<span><?php echo number_format($answer, 3); ?></span>
	<p><input type="submit" value="Process" /></p>
</form>
</body>
</html>
