<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Product List</h2>
    <a href="/create" class="btn btn-primary"> Add New Product </a>
    <table class="table" border="5">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
                <tr>
                    <td><?= $product['productname'] ?></td>
                    <td><?= $product['productdescription'] ?></td>
                    <td><?= $product['productcategory'] ?></td>
                    <td><?= $product['productquantity'] ?></td>
                    <td><?= $product['productprice'] ?></td>
                    <td>
                        <a href="/delete/<?= $product['id'] ?>">Delete</a> ||
                        <a href="/edit/<?= $product['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>