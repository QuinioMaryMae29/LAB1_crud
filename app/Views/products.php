<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Product Management</h1></center>
    <form action="/save" method="post">
        <label for="product_name">Product Name: </label>
        <input type="text" name='product_name' placeholder="name">
        <br>
        <br>
        <label for="product_description">Product Description: </label>
        <input type="text" name='product_description' placeholder="description">
        <br>
        <br>
        <label for="product_category">Choose a product category: </label>
        <select name="product_category" id="products">
            <option value=""></option>
            <option value="food/drinks">FOOD/DRINKS</option>
            <option value="schoolsupplies">SCHOOL SUPPLIES</option>
            <option value="personalcare/health">PERSONAL CARE/HEALTH</option>
            <option value="grocery">GROCERY</option>
            <option value="appliances">APPLIANCES</option>
            <option value="shoes">SHOES</option>
            <option value="apparel">APPAREL</option>
        </select>
        <br>
        <br>
        <label for="product_quantity">Product Quantity: </label>
        <input type="number" name="product_quantity" id="" placeholder="quantity">
        <br>
        <br>
        <label for="product_price">Product Price: </label>
        <input type="number" name="product_price" id="" placeholder="price">
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
    <br><br>
    <table border="5">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
        </tr>
        <?php foreach($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="/productlist">Product Listing</a>
</body>
</html>