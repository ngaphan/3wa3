<?php
include ('functions.inc.php');

$aColors = [
    'red',
    'orange',
    'yellow',
    'green',
    'brown'
];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/arrays.css" />
</head>
<body>
<?php
displayTitle(1, 'Array & function manipulations...');

// test the arrayPrint function
displayTitle(2, 'arrayPrint');
arrayPrint($aColors);

// test the text to Print
displayTitle(2, 'textPrint');
textPrint('text to print!');

// test implode2
displayTitle(2, 'Implode 2');
textPrint(implode2(' - ', $aColors));

// test implode3
displayTitle(2, 'Implode 3');
// without start nor end
displayTitle(3, 'without start nor end');
textPrint(implode3(' - ', $aColors));
// only with start
displayTitle(3, 'only with start');
textPrint(implode3(' - ', $aColors, '!!'));
// with both start and end
displayTitle(3, 'with both start and end');
textPrint(implode3(' - ', $aColors, '!!', '!!'));


arrayPrint(array_count_values($aColors));

// explode
?>
</body>
</html>