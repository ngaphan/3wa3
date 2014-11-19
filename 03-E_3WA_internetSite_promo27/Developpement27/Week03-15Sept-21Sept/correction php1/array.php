<?php
$aNumbers = array();
for ($iNumber = 100; $iNumber <= 200; $iNumber += 10) {
    $aNumbers[] = $iNumber;
}

echo '<pre>';
print_r($aNumbers);
echo '</pre>';

$aNumbers[] = 'test';
$aNumbers[] = 'test';
$aNumbers[] = 'test';

var_dump($aNumbers);