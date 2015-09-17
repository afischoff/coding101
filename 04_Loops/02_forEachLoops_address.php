<?php
// include the states array
include("states.php");

// setup credentials for SmartyStreets web service:
$authId = "af81cd03-0bc5-5fb9-c2d6-c5e74f63d334";
$authToken = "ib8RhS1qc3Pyv4Iv5fUC";
$queryString = http_build_query($_POST);
$url = "https://api.smartystreets.com/street-address?auth-id={$authId}&auth-token={$authToken}&{$queryString}";

if (isset($_POST['street'])) {
	// get the address suggestions
	$responseJSON = file_get_contents($url);
	$responseData = json_decode($responseJSON, true);
}

?>
<html>
<head>
	<title>Address Standardization Tool</title>
</head>
<body>
<h1>Address Standardization Tool</h1>
<p>Enter your address:</p>

<form method="post">
	<input type="text" name="street" placeholder="Street Address" size="60"><br>
	<input type="text" name="city" placeholder="City">,
	<select name="state" size="1">
		<?php
		foreach ($states as $abbr => $name) {
			echo "<option value=\"{$abbr}\">{$name}</option>";
		}
		?>
	</select> <input type="text" name="zipcode" placeholder="Zip Code"> <input type="submit" value="Go!">
</form>

<?php
if (!empty($responseData)) {
	echo "<hr><p>What you actually meant was:<br><strong>{$responseData[0]['delivery_line_1']}<br>{$responseData[0]['last_line']}</strong></p>";
}
?>

</body>
</html>