<?php

namespace App\Product;

abstract class Product
{
    /**
     * Props of product
     */
    private $sku;
    private $name;
    private $price;


    /**
     * Method to set the special attribute (weight,size,dimensions)
     */
    abstract public function setAttr();

    /**
     * Method to insert a product into the database
     */
    abstract public function create($conn);

    /**
     * Method to set SKU
     */
    public function setSku()
    {
        $this->sku = $_POST['sku'];
    }

    /**
     * Method to get SKU
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Method to set Name
     */
    public function setName()
    {
        $this->name = $_POST['name'];
    }

    /**
     * Method to get Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Method to set Price
     */
    public function setPrice()
    {
        $this->price = $_POST['price'];
    }

    /**
     * Method to get Price
     */

    public function getPrice()
    {
        return $this->price;
    }
}
