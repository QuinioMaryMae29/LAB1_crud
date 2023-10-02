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
        <div class="form-group">
            <label for="productdescription">Product Description: </label>
            <input type="text" name="productdescription" id="productdescription" class="form-control">
        </div>
        <div class="form-group">
            <label for="productcategory">Select a product category: </label>
            <select name="productcategory" id="productcategory">
                <option value=""></option>
                <option value="PersonalCare/Health">Personal Care/Health</option>
                <option value="Food/Drinks">Food/Drinks</option>
                <option value="SchoolSupplies">School Supplies</option>
                <option value="Grocery">Grocery</option>
                <option value="Appliances">Appliances</option>
                <option value="Shoes">Shoes</option>
                <option value="Apparel">Apparel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="productquantity">Product Quantity: </label>
            <input type= "number" name="productquantity" id="productquantity" class="form-control">
        </div>
        <div class="form-group">
            <label for="productprice">Product Price: </label>
            <input type="text" name="productprice" id="productprice" class="form-control">
        </div>
        <br>
        <button type="save" class="btn btn-primary">Save</button>
    </form>
</body>
</html>