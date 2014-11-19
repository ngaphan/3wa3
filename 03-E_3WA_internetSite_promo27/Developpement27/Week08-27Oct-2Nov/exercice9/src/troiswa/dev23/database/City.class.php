<?php

    namespace troiswa\dev23\database;


    class City extends DBObject
    {

        const TABLE = 'city';

        /**
         * @param bool $iLimit
         *
         * @return array
         */
        public static function getAll($iLimit = false)
        {
            return DBObject::getAllFromTable(self::TABLE, $iLimit);
        }

        /**
         * Get a city from its id.
         *
         * @param int $iCityId city number
         *
         * @return City matched department.
         */
        public static function getFromId($iCityId)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . self::TABLE . ' where id = ' . $iCityId . ' limit 1';
            $oResult = mysqli_query($oDataBase, $sQuery);

            $oCity = null;
            if (false !== $oResult) {
                $aCurrentItem = mysqli_fetch_assoc($oResult);
                if (null !== $aCurrentItem) {
                    $oCity = new City();
                    foreach ($aCurrentItem as $sColumn => $mValue) {
                        $oCity->$sColumn = $mValue;
                    }
                    $oCity->departmentObject = Department::getFromNumber($oCity->department);
                }
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $oCity;
        }

        /**
         * Get all cities from a department.
         *
         * @param Department $oCity department.
         *
         * @return array(City) all cities from the department.
         */
        public static function getAllFromDepartment(Department $oCity)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . self::TABLE . ' where department = ' . $oCity->number;
            $oResult = mysqli_query($oDataBase, $sQuery);

            $aCities = array();
            if (false !== $oResult) {
                do {
                    $aCurrentItem = mysqli_fetch_assoc($oResult);
                    if (null !== $aCurrentItem) {
                        $oCity = new City();
                        foreach ($aCurrentItem as $sColumn => $mValue) {
                            $oCity->$sColumn = $mValue;
                        }
                        $oCity->departmentObject = Department::getFromNumber($oCity->department);
                        $aCities[] = $oCity;
                    }
                } while (null !== $aCurrentItem);
                mysqli_free_result($oResult);
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $aCities;
        }
    }