<?php

    namespace troiswa\dev23\database;


    class Department extends DBObject
    {

        const TABLE = 'departement';

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
         * Get a department from its number.
         *
         * @param int $iNumber department number
         *
         * @return Department matched department.
         */
        public static function getFromNumber($iNumber)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . self::TABLE . ' where number = ' . $iNumber . ' limit 1';
            $oResult = mysqli_query($oDataBase, $sQuery);

            $oDepartment = null;
            if (false !== $oResult) {
                $aCurrentItem = mysqli_fetch_assoc($oResult);
                if (null !== $aCurrentItem) {
                    $oDepartment = new Department();
                    foreach ($aCurrentItem as $sColumn => $mValue) {
                        $oDepartment->$sColumn = $mValue;
                    }
                    $oDepartment->regionObject = Region::getFromNumber($oDepartment->region_id);
                }
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $oDepartment;
        }

        /**
         * Get all departments from a region.
         *
         * @param Region $oRegion region.
         *
         * @return array(Department) all departments.
         */
        public static function getAllFromRegion(Region $oRegion)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . self::TABLE . ' where region_id = ' . $oRegion->number;
            $oResult = mysqli_query($oDataBase, $sQuery);

            $aDepartments = array();
            if (false !== $oResult) {
                do {
                    $aCurrentItem = mysqli_fetch_assoc($oResult);
                    if (null !== $aCurrentItem) {
                        $oDepartment = new Department();
                        foreach ($aCurrentItem as $sColumn => $mValue) {
                            $oDepartment->$sColumn = $mValue;
                        }
                        $oDepartment->regionObject = Region::getFromNumber($oDepartment->region_id);
                        $aDepartments[] = $oDepartment;
                    }
                } while (null !== $aCurrentItem);
                mysqli_free_result($oResult);
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $aDepartments;
        }
    }