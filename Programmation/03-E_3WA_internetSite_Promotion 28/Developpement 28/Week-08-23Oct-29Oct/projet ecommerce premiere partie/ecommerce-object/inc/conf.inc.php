<?php
session_start();

function loadclass($class) {
    include 'model/' . $class . '.class.php';
}

spl_autoload_register('loadclass');

define ('ROOT', realpath(dirname(__FILE__) . '/../') . '/');

define('ROOT_WEB', substr(ROOT, strlen($_SERVER['DOCUMENT_ROOT'])));

define ('DIR_CSS', ROOT_WEB."view/css/");

define ('DIR_JS', ROOT_WEB."view/js/");

define ('VIEW_IMG_ARTICLE', ROOT_WEB."view/images_article/");

define ('DIR_IMG_ARTICLE', ROOT."view/images_article/");