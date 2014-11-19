<?php

require 'Point.class.php';

$oPoint = new Point();
$oPoint->x = 5;
$oPoint->y = 10;

echo $oPoint->calc();