<?php

    /**
     * Get the youngest students in an array.
     *
     * @param integer $iSize size of students to get.
     *
     * @return array youngest students.
     */
    function getYoungestStudents($iSize)
    {
        $oDataBase = mysqli_connect('localhost', 'root', '', 'classroom');
        mysqli_set_charset($oDataBase, 'utf8');

        $sQuery = 'select * from student order by birthday desc limit ' . $iSize;
        $oResult = mysqli_query($oDataBase, $sQuery);

        $aStudents = array();
        do {
            $aStudent = mysqli_fetch_assoc($oResult);
            if (null !== $aStudent) {
                $aStudents[] = $aStudent;
            }
        } while (null !== $aStudent);
        mysqli_free_result($oResult);

        mysqli_close($oDataBase);

        return $aStudents;
    }

