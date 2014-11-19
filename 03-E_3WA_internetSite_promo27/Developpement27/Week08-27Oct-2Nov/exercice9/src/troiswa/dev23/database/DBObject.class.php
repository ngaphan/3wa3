<?php

    namespace troiswa\dev23\database;


    class DBObject
    {

        const HOST = 'localhost';
        const USER = 'root';
        const PASSWORD = '';
        const NAME = 'classroom';

        /**
         * @var array data.
         */
        private $aData;

        /**
         * Magic setter.
         *
         * @param string $sColumn column name.
         * @param mixed  $mValue  value.
         */
        public function __set($sColumn, $mValue)
        {
            $this->aData[$sColumn] = $mValue;
        }

        /**
         * Magic getter.
         *
         * @param $sColumn column.
         *
         * @return mixed value.
         */
        public function __get($sColumn)
        {
            if (array_key_exists($sColumn, $this->aData)) {
                return $this->aData[$sColumn];
            }
        }


        /**
         * Get all objects from the table $sTableName.
         *
         * @param string $sTableName table name.
         * @param        boolean     /int $iLimit limit.
         *
         * @return array all objects from table.
         */
        protected static function getAllFromTable($sTableName, $iLimit = false)
        {
            $oDataBase = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::NAME);
            mysqli_set_charset($oDataBase, 'utf8');

            $sQuery = 'select * from ' . $sTableName;
            if (false !== $iLimit) {
                $sQuery .= ' limit ' . $iLimit;
            }
            $oResult = mysqli_query($oDataBase, $sQuery);
            $aAllObjects = array();
            if (false !== $oResult) {
                do {
                    $aCurrentItem = mysqli_fetch_assoc($oResult);
                    if (null !== $aCurrentItem) {
                        $oObject = new DBObject();
                        foreach ($aCurrentItem as $sColumn => $mValue) {
                            $oObject->$sColumn = $mValue;
                        }
                        $aAllObjects[] = $oObject;
                    }
                } while (null !== $aCurrentItem);
                mysqli_free_result($oResult);
            } else {
                echo 'Query error : ' . mysqli_error($oDataBase);
                echo '<br />' . $sQuery;
            }

            mysqli_close($oDataBase);

            return $aAllObjects;
        }

    }