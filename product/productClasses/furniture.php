<?php

namespace App\Product;

use App\Product\Product;

class Furniture extends Product
{
    /**
     * Props of furniture
     */
    private $height;
    private $width;
    private $length;

    /**
     * Method to set furniture attributes
     */
    public function setAttr()
    {
        $this->height = $_POST['height'];
        $this->width = $_POST['width'];
        $this->length = $_POST['length'];
    }

    /** 
     * Method to get height attribute
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Method to get width attribute
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Method to get length attribute
     */
    public function getLength()
    {
        return $this->length;
    }

    /** 
     * Method to Insert Furniture product into the database
     */
    public function create($conn)
    {
        $query = "INSERT INTO products (sku,name,price,height,width,length) VALUES (?,?,?,?,?,?)";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            $this->getSku(),
            $this->getName(),
            $this->getPrice(),
            $this->getHeight(),
            $this->getWidth(),
            $this->getLength(),
        ]);
    }
}
