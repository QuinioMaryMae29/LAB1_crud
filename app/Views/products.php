<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Listing</h1>
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
    <br>
    <h3>Product Listing</h3>
    <ul>
        <li>
            <strong>Product Name:  </strong> Milcu deodorant <br>
            <strong>Product Description:  </strong> big <br>
            <strong>Product Category:  </strong> Personal Care/Health <br>
            <strong>Product Quantity: </strong> 2 <br>
            <strong>Product Price: </strong> $60 <br>
            <strong>Action: </strong>
            <a href="/delete">Delete</a> || <a href="/edit">Edit</a>
        </li>
    </ul>
    <ul>
        <li>
            <strong>Product Name:  </strong> french fries <br>
            <strong>Product Description:  </strong> medium-sized <br>
            <strong>Product Category:  </strong> Food/Drinks <br>
            <strong>Product Quantity: </strong> 1 <br>
            <strong>Product Price: </strong> $55 <br>
            <strong>Action: </strong>
            <a href="/delete">Delete</a> || <a href="/edit">Edit</a>
        </li>
    </ul>
</body>
</html>