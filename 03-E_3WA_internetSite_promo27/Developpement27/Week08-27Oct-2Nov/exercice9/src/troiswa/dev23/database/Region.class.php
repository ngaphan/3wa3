<?php
    /**
     * Created by PhpStorm.
     * User: Yoann
     * Date: 02/07/14
     * Time: 14:49
     */

    namespace troiswa\dev23\database;


    class Region extends DBObject
    {

        const TABLE = 'region';

        /**
         * @param bool $iLimit
         *
         * @return array
         */
        public static function getAll($iLimit = false)
        {
            return DBObject::getAllFromTable(self::TABLE, $iLimit);
        }

        public static function getFromNumber($iNumber)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . self::TABLE . ' where number = ' . $iNumber . ' limit 1';
            $oResult = mysqli_query($oDataBase, $sQuery);

            $oRegion = null;
            if (false !== $oResult) {
                $aCurrentItem = mysqli_fetch_assoc($oResult);
                if (null !== $aCurrentItem) {
                    $oRegion = new Region();
                    foreach ($aCurrentItem as $sColumn => $mValue) {
                        $oRegion->$sColumn = $mValue;
                    }
                }
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $oRegion;
        }
    }