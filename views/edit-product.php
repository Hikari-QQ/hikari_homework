<?php
session_start();
require "../classes/Product.php";

$id = $_GET["id"];
$product_obj = new Product;
$product = $product_obj->getProduct($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Content Here -->

    <?php
    include "navbar.php";
    ?>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-6">
                <h1 class="text-center text-warning fw-bold display-4">Edit Product</h1>
                <form action="../actions/edit-product.php?id=<?= $id ?>" method="post">
                    <div class="mb-3">
                        <label for="produst-name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product-name" class="form-control"
                            value="<?= $product["product_name"] ?>" required autofocus>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" step="any" class="form-control"
                                    value="<?= $product["price"] ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control"
                                value="<?= $product["quantity"] ?>" required>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="dashboard.php" class="btn btn-light px-5">Cancel</a>
                        <button type="submit" class="btn btn-warning text-white w-50 ms-3">Save</button>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>