<?php

// do we have a valid zip code?
if (is_numeric($_POST['zip'])) {

	// go get the weather
	$url = "http://api.openweathermap.org/data/2.5/weather?zip=" . $_POST['zip'] . ",us&units=imperial";
	$weatherJSON = file_get_contents($url);
	$weatherData = json_decode($weatherJSON, true);

	// get the specific data we want from the data array
	$city = $weatherData['name'];
	$currentConditions = $weatherData['weather'][0]['description'];
	$theCurrentTemp = $weatherData['main']['temp'];

	// get Andy's commentary
	if ($theCurrentTemp <= 32) {
		$iThink = "It's freezing outside!";

	} else if ($theCurrentTemp <= 70) {
		$iThink = "Perfect! I love it!";

	} else {
		$iThink = "Break out the shorts!";
	}

	$weatherResults = true;

} else {
	$weatherResults = false;
}

?>
<html>
<head>
	<title>Live Weather Example</title>
</head>
<body>

<?php if ($weatherResults == true): ?>
	<h1>Live weather for <?php echo $city; ?></h1>
	<p>
		Current Temp: <?php echo $theCurrentTemp; ?><br>
		Current Conditions: <?php echo $currentConditions; ?><br>
		Andy's Commentary: <strong><?php echo $iThink; ?></strong>
	</p>
<?php endif; ?>

<div>
	<p>Please complete the form below to get the current weather report:</p>
	<form method="post">
		Zip code: <input type="text" name="zip"> <input type="submit" value="Search Again">
	</form>
</div>
</body>
</html>