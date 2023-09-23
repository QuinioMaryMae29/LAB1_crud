<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Product Management</h1></center>
    <form action="" method="">
        <label>Product Name: </label>
        <input type="text" name='name' placeholder="name">
        <br><br>
        <label>Product Description: </label>
        <input type="text" name='description' placeholder="description">
        <br><br>
        <label for="products">Choose a product category: </label>
        <select name="products" id="products">
            <option value=""></option>
            <option value="food/drinks">Food/Drinks</option>
            <option value="schoolsupplies">School Supplies</option>
            <option value="personalcare/health">Personal Care/Health</option>
            <option value="grocery">Grocery</option>
            <option value="appliances">Appliances</option>
            <option value="shoes">Shoes</option>
            <option value="apparel">Apparel Clothes</option>
        </select>
        <br><br>
        <label>Product Quantity: </label>
        <input type="number" name="quantity" id="" placeholder="quantity">
        <br><br>
        <label>Product Price: </label>
        <input type="number" name="price" id="" placeholder="price">
    </form>
    <br><br>
    <table border="5">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
        </tr>
        <?php foreach($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>