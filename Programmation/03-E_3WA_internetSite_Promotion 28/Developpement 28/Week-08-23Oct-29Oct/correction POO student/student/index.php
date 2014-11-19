<?php

    require 'Student.class.php';

    $oJohn = new Student('John', '1980-06-13', '15 rue de Londres, 92800 Puteaux');
    $oPaul = new Student('Paul', '1984-09-12', '5 rue de Versailles, 75001 Paris');

    echo $oJohn . '<br />';
    echo $oPaul . '<br />';


    $oJohn->addNote(12.4);
    $oJohn->addNote(6.8);
    $oJohn->addNote(13.0);

    echo 'John notes : ';
    var_dump($oJohn->getNotes());

    $oPaul->addNote(17.5);
    $oPaul->addNote(16.0);
    $oPaul->addNote(19.25);

    echo 'Paul notes : ';
    var_dump($oPaul->getNotes());

    // average
    var_dump($oJohn->getAverage());
    var_dump($oPaul->getAverage());

    // compare
    var_dump($oJohn->compareTo($oPaul));
    var_dump($oPaul->compareTo($oJohn));

    // min
    var_dump($oJohn->getMin());
    var_dump($oPaul->getMin());

    // max
    var_dump($oJohn->getMax());
    var_dump($oPaul->getMax());
