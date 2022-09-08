<?php

namespace App\Product;

use App\Product\Product;

class DVD extends Product
{
    /**
     * Size attribute 
     */
    private $size;

    /**
     * Method to set size attribute
     */
    public function setAttr()
    {
        $this->size = $_POST['size'];
    }

    /**  
     * Method to get size attribute
     */
    public function getSize()
    {
        return $this->size;
    }

    /** 
     * Method to Insert DVD product into the database
     */
    public function create($conn)
    {
        $query = "INSERT INTO products (sku,name,price,size) VALUES (?,?,?,?)";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            $this->getSku(),
            $this->getName(),
            $this->getPrice(),
            $this->getSize(),
        ]);
    }
}
