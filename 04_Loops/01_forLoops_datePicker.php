<html>
<head>
	<title>Date Picker</title>
</head>
<body>
<h1>Select the date you'd like:</h1>
<form method="post">

	<select name="month" size="1">
		<?php
		// loop 12 times, show each month
		for ($i = 1; $i <= 12; $i++) { // $i++; $i += 1; $i = $i + 1;
			$theDate = mktime(0, 0, 0, $i);
			echo '<option value="' . $i . '">' . date('F', $theDate) . '</option>';
		}
		?>
	</select> /

	<select name="day" size="1">
		<?php
		// loop from 1-31
		for ($i = 1; $i <= 31; $i++) {
			echo '<option value="' . $i . '">' . $i . '</option>';
		}
		?>
	</select> /

	<select name="year" size="1">
		<?php
		$startYear = date('Y') - 10;
		$endYear = date('Y') + 10;
		for ($i = $startYear; $i <= $endYear; $i++) {
			echo '<option value="' . $i . '">' . $i . '</option>';
		}
		?>
	</select>
	<input type="submit" value="Go!">
</form>

<?php
if (isset($_POST['month'])) {
	echo "<hr><p>You chose {$_POST['month']}/{$_POST['day']}/{$_POST['year']}</p>";
}
?>
</body>
</html>