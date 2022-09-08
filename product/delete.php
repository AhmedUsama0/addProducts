<?php

use App\Controllers\ProductsController;

/**
 * Make an instance from ProductsController
 */
$productsController = new ProductsController();

/**
 * Delete the product using its id
 */
$productsController->delete($_POST['id']);
