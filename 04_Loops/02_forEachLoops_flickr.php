<?php
// Flickr API credentials
$key = "3f71e1b9ce0025f5df13ff2d984e419a";
$secret = "b7b6ab874e65eb24";

// build the API request
$yqlQuery = urlencode('select * from flickr.photos.search where api_key="'.$key.'" and sort="relevance" and text="'.$_POST['searchText'].'"');
$url = "https://query.yahooapis.com/v1/public/yql?q={$yqlQuery}&format=json&diagnostics=true&callback=";

// if the form was submitted, make the API request and convert the JSON response to a PHP array
if (isset($_POST['searchText'])) {
	$responseJSON = file_get_contents($url);
	$responseData = json_decode($responseJSON, true);
}
?>
<html>
<head>
	<title>Flickr Search Tool</title>
</head>
<body>
<h1>Flickr Search Tool</h1>
<p>Enter a comma separated list of photo tags to search for:</p>

<form method="post">
	<input type="text" name="searchText" placeholder="Tags Search" value="<?=$_POST['searchText']?>" size="60"> <input type="submit" value="Go!">
</form>

<?php
// if we have an API response, show it here
if (!empty($responseData)) {
	echo "<hr><p>Flickr Search Results for: {$_POST['searchText']}</p>";

	// loop through the results, building the URL for the <img> tags
	foreach ($responseData['query']['results']['photo'] as $picture) {
		echo "<div style='padding:20px;'><img src=\"https://farm{$picture['farm']}.staticflickr.com/{$picture['server']}/{$picture['id']}_{$picture['secret']}.jpg\" border='0'></div>";

		// if the picture has a title, be sure to display it
		if (!empty($picture['title'])) {
			echo "<p><strong>{$picture['title']}</strong></p>";
		}
	}

}
?>

</body>
</html>