<?php

use troiswa\dev23\tools\RandomTools;

require 'RandomTools.class.php';

$oRandomUtils = new RandomTools(1, 15);

// min / max
var_dump($oRandomUtils->getMin());
var_dump($oRandomUtils->getMax());

// generate value
var_dump($oRandomUtils->generate());
var_dump($oRandomUtils->generate());
var_dump($oRandomUtils->generate());

var_dump($oRandomUtils->getLastGenerated());

// better generate
var_dump($oRandomUtils->betterGenerate(20));

var_dump($oRandomUtils->betterGenerate(200));

var_dump($oRandomUtils->betterGenerate(20000));