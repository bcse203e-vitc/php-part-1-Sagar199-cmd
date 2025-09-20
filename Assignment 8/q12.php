<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function change_case($array, $case = 'lower') {
    if ($case === 'lower') {
        return array_map('strtolower', $array);
    } else {
        return array_map('strtoupper', $array);
    }
}
$lower = change_case($Color, 'lower');
echo "Values are in lower case.<br>";
echo "<pre>";
print_r($lower);
echo "</pre>";
$upper = change_case($Color, 'upper');
echo "Values are in upper case.<br>";
echo "<pre>";
print_r($upper);
echo "</pre>";
?>
