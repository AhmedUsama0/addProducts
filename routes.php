<?php
include __DIR__ . '/vendor/autoload.php';

use App\Router;

/**
 * Define the main route
 */
Router::get('/', function () {
    include_once __DIR__ . '/views/productlist.php';
});

/**
 * Define add-product route
 */
Router::get('/add-product', function () {
    include_once __DIR__ . '/views/add-product.php';
});

/**
 * Define create route
 */
Router::post('/product/create', function () {
    include_once __DIR__ . '/product/create.php';
});

/**
 * Define delete route
 */
Router::delete('/product/delete', function () {
    include_once __DIR__ . '/product/delete.php';
});