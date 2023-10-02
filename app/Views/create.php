<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form action="/save" method="post">
        <div class="form-group">
            <label for="productname">Product Name: </label>
            <input type="text" name="productname" id="productname" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="productdescription">Product Description: </label>
            <input type="text" name="productdescription" id="productdescription" class="form-control">
        </div>
        <br>
        <div class="form-group">
            
        </div>
        <br>
        <div class="form-group">
            <label for="productquantity">Product Quantity: </label>
            <input type="text" name="productquantity" id="productquantity" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="productprice">Product Price: </label>
            <input type="text" name="productprice" id="productprice" class="form-control">
        </div>
        <br>
        <button type="save">Save</button>
    </form>
</body>
</html>