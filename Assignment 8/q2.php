<?php
$color = array('white', 'green', 'red');

// Display colors separated by commas
foreach ($color as $c) {
    echo $c . ", ";
}

echo "<br>";

// Display each color as a bulleted list, starting from the second element,
// then third, then first element (green, red, white)
for ($i = 1; $i < count($color); $i++) {
    echo "• " . $color[$i] . "<br>";
}
echo "• " . $color[0] . "<br>";
?>
