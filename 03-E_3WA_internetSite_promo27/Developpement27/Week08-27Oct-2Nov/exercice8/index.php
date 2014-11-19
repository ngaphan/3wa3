<?php

    use troiswa\dev23\silam\Chief;
    use troiswa\dev23\silam\Employee;


    require 'src/troiswa/dev23/silam/Employee.class.php';
    require 'src/troiswa/dev23/silam/Chief.class.php';

    $aEmployees = array();

    // ceo
    $oCeo = new Chief('CEO', 'Joe');
    $aEmployees[] = $oCeo;

    // chief 1
    $oChief1 = new Chief('Boulanger', 'Arthur', $oCeo);
    $aEmployees[] = $oChief1;

    // chief 2
    $oChief2 = new Chief('Bouygues', 'Martin', $oCeo);
    $aEmployees[] = $oChief2;


    // employees
    $aEmployees[] = new Employee('Employee1', 'Paul', $oChief1);
    $aEmployees[] = new Employee('Employee2', 'John', $oChief1);
    $aEmployees[] = new Employee('Employee3', 'Louisa', $oChief2);
    $aEmployees[] = new Employee('Employee4', 'Marina', $oChief2);

    foreach ($aEmployees as $oEmployee) {
        /* @var $oEmployee Employee */
        echo $oEmployee;
    }


    // display all chiefs
    foreach ($aEmployees as $oEmployee) {
        /* @var $oEmployee Employee */
        $oEmployee->displayAllChiefs();
    }
