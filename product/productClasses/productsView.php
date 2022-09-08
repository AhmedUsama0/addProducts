<?php

namespace App\Product;

use App\Models\Products;

class ProductsView extends Products
{
    /**
     * Method to display the products
     */
    public function showProducts()
    {
        $stmt = $this->getProducts();

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {

            extract($row);

            echo "<div class='test'>";

            echo "<input type='checkbox' style='display:block' value='$id' name=id[] class='delete-checkbox'/>";

            echo "<span class='sku'>" . $sku . '</span>' . '<br>';

            echo $name . '<br>';

            echo $price . ' $' . '<br>';

            if (!empty($size)) {
                echo 'Size: ' . $size . ' MB';
            }
            if (!empty($weight)) {
                echo 'Weight: ' . $weight . ' KG';
            }

            if (!empty($height) && !empty($width) && !empty($length)) {
                echo 'Dimensions: ' . $height . 'x' . $width . 'x' . $length;
            }

            echo '</div>';
        }
    }
}
