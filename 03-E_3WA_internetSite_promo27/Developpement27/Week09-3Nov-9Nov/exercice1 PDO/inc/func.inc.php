<?php

    require 'DBOperation.class.php';

    /**
     * Get all categories.
     *
     * @return array all categories.
     */
    function getCategories()
    {
        $sQuery = 'select * from category';
        return DBOperation::getAll($sQuery);
    }

    /**
     * Get a category from its id.
     *
     * @param integer $iCategoryId category id.
     *
     * @return array matched category.
     */
    function getCategoryFromId($iCategoryId)
    {
        $sQuery = "select * from category where id = '$iCategoryId' limit 1";
        return DBOperation::getOne($sQuery);
    }

    /**
     * Get a topic from its id.
     *
     * @param integer $iTopicId topic id.
     *
     * @return array matched topic.
     */
    function getTopicFromId($iTopicId)
    {
        $sQuery = "select t.*, c.name as category from topic t, category c where t.id = '$iTopicId' and t.category = c.id limit 1";
        return DBOperation::getOne($sQuery);
    }


    /**
     * Get all topics inside the given category.
     *
     * @param integer $iCategoryId category id.
     *
     * @return array topics from the category.
     */
    function getTopicsFromCategory($iCategoryId)
    {
        $sQuery = "select t.*, count(r.id) as total";
        $sQuery .= " from topic t left outer join reply r on t.id = r.topic";
        $sQuery .= " where t.category = '$iCategoryId'";
        $sQuery .= " group by t.id";
        $sQuery .= " order by t.date desc";
        return DBOperation::getAll($sQuery);
    }


    /**
     * Get all replies from the given topic.
     *
     * @param integer $iTopicId topic id.
     *
     * @return array replies from the topic.
     */
    function getRepliesFromTopic($iTopicId)
    {
        $sQuery = "select * from reply where topic = '$iTopicId' order by date asc";
        return DBOperation::getAll($sQuery);
    }

    /**
     * Create a new topic.
     *
     * @param string  $sSubject    subject.
     * @param integer $iCategoryId category id.
     * @param string  $sUser       user name.
     *
     * @return bool true if success, false otherwise.
     */
    function createTopic($sSubject, $iCategoryId, $sUser)
    {
        $dDate = date('Y-m-d H:m:s');
        $sSubject = addslashes($sSubject);
        $sUser = addslashes($sUser);

        $sQuery = "insert into topic (subject, date, category, user) values('$sSubject','$dDate', '$iCategoryId', '$sUser')";
        return DBOperation::exec($sQuery);
    }


    /**
     * Create a reply.
     *
     * @param string  $sContent content.
     * @param integer $iTopicId topic id.
     * @param string  $sUser    user name.
     *
     * @return bool true if success, false otherwise.
     */
    function createReply($sContent, $iTopicId, $sUser)
    {
        $dDate = date('Y-m-d H:m:s');
        $sContent = addslashes($sContent);
        $sUser = addslashes($sUser);

        $sQuery = "insert into reply (content, date, topic, user) values('$sContent','$dDate', '$iTopicId', '$sUser')";
        return DBOperation::exec($sQuery);
    }

    /**
     * Format a date.
     *
     * @param date $dDate date
     *
     * @return string formatted date.
     */
    function formatDate($dDate)
    {
        return date_format(date_create($dDate), 'd F Y');
    }

    /**
     * Format a datetime.
     *
     * @param date $dDateTime datetime.
     *
     * @return string formatted datetime.
     */
    function formatDateTime($dDateTime)
    {
        return date_format(date_create($dDateTime), 'd F Y - H:i:s');
    }