<?php

namespace App\Product;

use App\Product\Product;

class Book extends Product
{
    /**
     * Weight attribute
     */
    private $weight;

    /**
     * Method to set weight attribute
     */
    public function setAttr()
    {
        $this->weight = $_POST['weight'];
    }

    /** 
     * Method to get weight attribute
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /** 
     * Method to Insert Book product into the database
     */
    public function create($conn)
    {
        $query = "INSERT INTO products (sku,name,price,weight) VALUES (?,?,?,?)";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            $this->getSku(),
            $this->getName(),
            $this->getPrice(),
            $this->getWeight(),
        ]);
    }
}
