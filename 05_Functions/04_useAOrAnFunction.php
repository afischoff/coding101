<?php
// make a function which uses a or an before a word

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

echo "I would like " . addAOrAn("apple") . ". I would also like " . addAOrAn("banana") . ".";
