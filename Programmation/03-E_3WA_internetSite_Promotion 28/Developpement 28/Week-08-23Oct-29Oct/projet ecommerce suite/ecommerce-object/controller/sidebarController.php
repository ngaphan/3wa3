<?php

$categorieManager = new CategorieManager($DB);
$sidebarCategorie = $categorieManager->getCategories();