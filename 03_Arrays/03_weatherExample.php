<?php

// go get the weather
$appId = "0451a16299ae4810d6cd03f96390a7d0";
$url = "http://api.openweathermap.org/data/2.5/weather?zip=" . $_GET['zip'] . ",us&units=imperial&APPID={$appId}";
$weatherJSON = file_get_contents($url);
$weatherData = json_decode($weatherJSON, true);

// get the specific data we want from the data array
$city = $weatherData['name'];
$currentConditions = $weatherData['weather'][0]['description'];
$theCurrentTemp = $weatherData['main']['temp'];

?>
<html>
<head>
	<title>Weather API output</title>
</head>
<h1>Weather API Example</h1>
<p>Url: <?php echo $url;?></p>

<p>
JSON Response:<br>
<code>
	<?php echo $weatherJSON?>
</code>
</p>

<p>
Convert to PHP Arrays:<br>
<pre>
<?php print_r($weatherData)?>
</pre>
</p>

<p>Name: <?php echo $city; ?></p>
<p>Current Temp: <?php echo $theCurrentTemp; ?></p>
<p>Current Conditions: <?php echo $currentConditions; ?></p>

</html>
