<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRODUCT LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form method="post"  enctype="multipart/form-data">
        <h3>UPDATE PRODUCT</h3>
        <?php if(isset($product)):?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name" value="<?php echo $product->getName()?>">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" required class="form-control" id="category" name="category" value="<?php echo $product->getCategory()?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" required class="form-control" id="price" name="price" value="<?php echo $product->getPrice()?>">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $product->getQuantity()?>">
            </div>
            <div class="mb-3">
                <label for="date_create" class="form-label">Date</label>
                <input type="date" class="form-control" id="date_create" name="date_create" value="<?php echo $product->getDateCreate()?>">
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $product->getDetail()?>">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <button type="submit" class="btn btn-success"><a style="color:white" href="index.php">CANCEL</a> </button>
    </form>
</div>
</body>
</html>