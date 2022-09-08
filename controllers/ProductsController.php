<?php

namespace App\Controllers;

use App\Models\Products;

class ProductsController extends Products
{

    /**
     * Method to create a new product
     */
    public function create()
    {
        $product = 'App\Product\\' . $_POST['productType'];

        $this->setProduct(new $product);

        header("location:/");
    }
}
