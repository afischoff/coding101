<?php
/**
 * @param int $start
 * @param int $end
 * @param int $step
 * @return array
 */
function getNumberOptions($start = 1, $end = 100, $step = 1)
{
	$output = array();
	for ($i = $start; $i <= $end; $i = $i + $step) {
		$output[] = $i;
	}
	return $output;
}

/**
 * @return array
 */
function getOperators()
{
	return array('+', '-', '*', '/');
}

/**
 * @param array $options
 * @param string|null $selectedValue
 * @return string
 */
function makeSelectOptions($options, $selectedValue = null)
{
	$output = "";
	foreach ($options as $option) {
		$selected = '';
		if ($option == $selectedValue) {
			$selected = " selected=\"selected\"";
		}
		$output = $output . '<option value="'.$option.'"'.$selected.'>'.$option.'</option>';
	}
	return $output;
}

/**
 * @param string|int $num1
 * @param string $operator
 * @param string|int $num2
 * @return float|int|null
 */
function processEquation($num1, $operator, $num2)
{
	$num1 = intval($num1);
	$num2 = intval($num2);

	switch ($operator) {
		case '+':
			return ($num1 + $num2);

		case '-':
			return ($num1 - $num2);

		case '*':
			return ($num1 * $num2);

		case '/':
			return ($num1 / $num2);

		default:
			return null;
	}
}
