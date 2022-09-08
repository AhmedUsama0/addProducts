<?php

use App\Product\ProductsView;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/productlist.css" />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form action="product/delete" method="POST" id="productlist_form">
      <div class="product-head">
        <h3>Product List</h3>
        <div class="buttons">
          <button type="button" onclick="location.href = 'add-product';">ADD</button>
          <button id="delete-product-btn" type="submit">MASS DELETE</button>

        </div>
      </div>
      <div class="grid">
        <?php
        /**
         * Make an instance from ProductsView
         */
        $productsView = new ProductsView();

        /**
         * Display Products
         */
        $productsView->showProducts();
        ?>
      </div>
    </form>
  </div>



  <script src="js/productlist.js"></script>
</body>

</html>