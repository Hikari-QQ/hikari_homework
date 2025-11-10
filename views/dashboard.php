<?php
session_start();
require "../classes/User.php";

$product_obj = new User;
$all_products = $product_obj->getAllProducts();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

    <main class="container">
        <div class="row justify-content-center gx-0">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <h2 class="mb-3">Product List</h2>
                    </div>
                    <div class="col text-end">
                        <a href="#addproduct" class="btn btn-info fw-bold text-white" data-bs-toggle="modal"
                            data-bs-target="#addproduct"><i class="fa-solid fa-plus"></i>
                            Add product</a>
                    </div>
                </div>
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($product = $all_products->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['product_name'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td>
                                    <a href="../views/edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <a href="#deleteProduct" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteProduct"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                                <td>
                                    <?php
                                    if ($product['quantity'] > 0) {
                                        ?>
                                        <a href="../views/buy-product.php?id=<?= $product['id'] ?>" class="btn btn-success"><i
                                                class="fa-solid fa-cash-register"></i></a>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Add Product -->
    <div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="addproductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <div class="container">
                        <div class="justify-content-center mt-2">
                            <h1 class="text-center text-info fw-bold display-4">Add Product</h1>
                            <form action="../actions/add-product.php" method="post">
                                <div class="mb-3">
                                    <label for="produst-name" class="form-label">Product Name</label>
                                    <input type="text" name="product_name" id="product-name" class="form-control"
                                        required autofocus>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-text">$</div>
                                            <input type="number" name="price" id="price" step="any" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" name="quantity" id="quantity" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-info text-white w-100 mb-4">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Product -->
    <div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <main class="container">
                        <div class="justify-content-center">
                            <div class="text-center mb-4">
                                <i class="fa-solid fa-triangle-exclamation text-warning display-4"></i>
                                <h2 class="fw-bold mb-3 text-danger">Delete Product</h2>
                                <p class="fw-bold mb-0">Are you sure you want to delete the following?</p>
                                <p>Product Name: <?= $product['product_name'] ?></p>
                                <p>Price: <?= $product['price'] ?></p>
                                <p>Quantity: <?= $product['quantity'] ?></p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="products.php" class="btn btn-secondary w-100">Cancel</a>
                                </div>
                                <div class="col">
                                    <form method="post">
                                        <a href="../actions/delete-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger w-100"
                                        data-bs-toggle="modal" data-bs-target="#deleteProduct">Delete</a>
                                        <!-- <button class="btn btn-outline-danger w-100" name="btn_delete">Delete</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>