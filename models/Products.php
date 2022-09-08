<?php

namespace App\Models;

use App\Config\Database;
use App\Product\Product;

class Products extends Database
{

    /** 
     * Method to get products from the database
     */
    protected function getProducts()
    {
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    /** 
     * Method to set the product into the database
     */
    protected function setProduct(Product $product)
    {
        $product->setSku();
        $product->setName();
        $product->setPrice();
        $product->setAttr();
        $product->create($this->connect());
    }


    /**
     * Method to delete products from the database
     */
    public function delete($ids)
    {
        foreach ($ids as $id) {
            
            $query = "DELETE FROM products WHERE id=?";

            $stmt = $this->connect()->prepare($query);

            $stmt->execute([$id]);

            header("location: /");
        }
    }
}
