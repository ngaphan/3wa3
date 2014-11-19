<?php

    require 'StringUtils.class.php';


    $oStringUtils = new StringUtils('test');

    // get value
    var_dump($oStringUtils->getValue());

    // get length
    var_dump($oStringUtils->getLength());

    // concat
    $oStringUtils->concat('hihihi');
    var_dump($oStringUtils->getValue());

    // starts with
    var_dump($oStringUtils->startsWith('fake'));
    var_dump($oStringUtils->startsWith('hi'));
    var_dump($oStringUtils->startsWith('te'));

    // ends with
    var_dump($oStringUtils->endsWith('fake'));
    var_dump($oStringUtils->endsWith('iih'));
    var_dump($oStringUtils->endsWith('hihi'));

    // is inside
    var_dump($oStringUtils->isInside('fake'));
    var_dump($oStringUtils->isInside('hi'));

    // remove last character
    $oStringUtils->removeLastChar();
    var_dump($oStringUtils->getValue());

    // remove nth character
    $oStringUtils->removeNChar(3);
    var_dump($oStringUtils->getValue());