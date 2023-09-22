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
        <label>Product Name: </label>
        <input type= "hidden" name="id" > 
        <input type="text" name='name' >
        <br><br>
        <label>Product Description: </label>
        <input type="text" name='description' >
        <br><br>
        <label for="products">Choose a product category: </label>
        <select name="products" id="products" >
            <option value=""></option>
            <option value="food">Food</option>
            <option value="schoolsupplies">School Supplies</option>
            <option value="personalcare/health">Personal Care/Health</option>
            <option value="grocery">Grocery</option>
            <option value="appliances">Appliances</option>
        </select>
        <br><br>
        <label>Product Quantity: </label>
        <input type="number" name="quantity" id="" >
        <br><br>
        <label>Product Price: </label>
        <input type="number" name="price" id="" >
        <br><br>
        <input type="submit" value="Save">
    </form>
    <br><br>
    <table border="3">
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
</body>
</html>