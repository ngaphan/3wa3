<?php

$ProductManager = new ProductManager($DB);

$products = $ProductManager->getProducts();

$carouselProducts = $ProductManager->getProductsOfCarousel();