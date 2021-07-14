<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRODUCT LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="btn btn-info btn-md" href="index.php">Home</a>
    <form class="form-inline"  method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
        <button  class="btn btn-success" type="submit" name="find">Search</button>
    </form>
</nav>
<br>
<div class="container">
    <h2>PRODUCT LIST</h2>
    <a class="btn btn-info btn-lg" href="index.php?page=create-product">ADD PRODUCT</a>
<br>
<br>
    <table class="table">
        <thead class="">
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
<!--            <th scope="col">Price</th>-->
<!--            <th scope="col">Quantity</th>-->
<!--            <th scope="col">Date</th>-->
<!--            <th scope="col">Detail</th>-->
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr class="table-warning">
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getCategory() ?></td>
<!--                    <td>--><?php //echo $product->getPrice() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getQuantity() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getDateCreate() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getDetail() ?><!--</td>-->
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a  href="index.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>