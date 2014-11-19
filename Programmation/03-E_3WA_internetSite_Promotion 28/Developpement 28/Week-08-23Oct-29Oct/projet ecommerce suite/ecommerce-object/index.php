<?php

require 'inc/conf.inc.php';

$page = 'home';

if (isset($_GET['page']))
{
    $page = $_GET['page'];
}

// Chargement du controller
$controller = ROOT.'controller/'.strtolower($page).'Controller.php';

if (file_exists($controller))
{
    include $controller;
}
else
{
    include ROOT.'view/404.php';
    die();
}



// Chargement de la vue
$view = ROOT.'view/'.strtolower($page).'View.php';

if (!file_exists($view))
{
    include ROOT.'view/404.php';
    die();
}

include ROOT.'view/layoutView.php';