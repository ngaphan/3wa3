<?php

    use troiswa\dev23\database\City;
    use troiswa\dev23\database\Department;
    use troiswa\dev23\database\Region;

    function autoloadItemsClass($sClassName)
    {
        $sFilePath = 'src/' . $sClassName . '.class.php';
        if (is_file($sFilePath)) {
            require_once $sFilePath;
        }
    }

    spl_autoload_register('autoloadItemsClass');

    // get all Regions
    echo '<h2>all regions</h2>';
    var_dump(Region::getAll(3));

    // get region from number
    echo '<h2>region number IDF</h2>';
    $oIDF = Region::getFromNumber(12);
    var_dump($oIDF);
    var_dump($oIDF->number);
    var_dump($oIDF->name);

    // get all departments
    echo '<h2>all departments</h2>';
    var_dump(Department::getAll(2));

    // get department from number
    echo '<h2>department from number Yvelines</h2>';
    $oYvelines = Department::getFromNumber(78);
    var_dump($oYvelines);

    // get all departments from region IDF
    echo '<h2>department from number 78</h2>';
    $aIDFDepartments = Department::getAllFromRegion($oIDF);
    var_dump($aIDFDepartments);

    // get all cities
    echo '<h2>all cities</h2>';
    var_dump(City::getAll(2));

    // get city by id 340
    echo '<h2>city from id 340</h2>';
    $oCity = City::getFromId(340);
    var_dump($oCity);

    // get all cities from department yvelines
    echo '<h2>department from number 78</h2>';
    $aYvelinesCities = City::getAllFromDepartment($oYvelines);
    var_dump($aYvelinesCities);

    // region object in department
    echo '<h2>region of ' . $oYvelines->name . '</h2>';
    var_dump($oYvelines->regionObject);

    // department object in city
    echo '<h2>city of ' . $oCity->name . '</h2>';
    var_dump($oCity->departmentObject);
    var_dump($oCity->departmentObject->regionObject);
