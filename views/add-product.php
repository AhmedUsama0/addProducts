<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/add-product.css">
  <title>Document</title>
</head>

<style>
</style>

<body>
  <div class="container">
    <form action="product/create" method="POST" id="product_form">
      <div class="product-head">  
        <h3>Product Add</h3>
        <div class="buttons">
          <button type="submit">Save</button>
          <a href="/">Cancel</a>
        </div>
      </div>
      <div class="grid">
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku" />
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
        <label for="price">Price ($)</label>
        <input type="number" id="price" name="price" />

        <!-- TypeSwitcher -->
        <label for="productType">Type Switcher</label>
        <select name="productType" id="productType" onchange="getType()">
          <option value=""></option>
          <option value="DVD" id="DVD">DVD</option>
          <option value="Book" id="Book">Book</option>
          <option value="Furniture" id="Furniture">Furniture</option>
        </select>

        <!-- Size -->
        <label for="size" class="sizeAtrr" hidden>Size (MB)</label>
        <input type="number" id="size" style="display: none" name="size" />

        <!-- Weight -->
        <label for="weight" class="weightAtrr" hidden>Weight (KG)</label>
        <input type="number" id="weight" style="display: none" name="weight" />

        <!-- Height -->
        <label for="height" class="heightAtrr" hidden>Height (CM)</label>
        <input type="number" id="height" style="display: none" name="height" />

        <!-- Width -->
        <label for="width" class="widthAtrr" hidden>Width (CM)</label>
        <input type="number" id="width" style="display: none" name="width" />

        <!-- Length -->
        <label for="length" class="lengthAtrr" hidden>Length (CM)</label>
        <input type="number" id="length" style="display: none" name="length" /> 
      </div>

      <!-- Description -->
      <p id="description"></p>
      <p id='error' style="color:red; font-weight:bold;"></p>
      <p id='typeError' style="color:red; font-weight:bold;"></p>
      <p id='uniqueSKU' style="color:red; font-weight:bold"></p>
    </form>
  </div>

  <script src="js/addproduct.js"></script>
</body>

</html>