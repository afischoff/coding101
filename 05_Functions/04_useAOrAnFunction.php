<?php
/**
 * @param $word
 * @return string
 */
function addAOrAn($word)
{
	$vowels = array('a', 'e', 'i', 'o', 'u');
	$firstLetter = strtolower(substr($word, 0, 1));

	if (in_array($firstLetter, $vowels)) {
		$aOrAn = "an";
	} else {
		$aOrAn = "a";
	}

	return $aOrAn . " " . $word;
}
?>
<html>
<head>
	<title>A or An Example</title>
</head>
<body>
<h1>A or An Example</h1>
<form method="post">
	<p>What would you like? <input type="text" name="item"> <input type="submit" value="submit"> </p>
</form>
<hr>
<?php
if (!empty($_POST['item'])) {
	echo "You would like " . addAOrAn($_POST['item']) . ".";
}
?>
</body>
</html>
