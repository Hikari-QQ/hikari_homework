<?php
session_start();
require "../classes/Product.php";

$id = $_GET["id"];
$buy_quantity = $_POST["buy_quantity"];
$product_obj = new Product;
$product = $product_obj->getProduct($id);

$total =$product_obj->calcTotal($product['price'], $buy_quantity);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
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
            <div class="col-5">
                <h1 class="text-center text-success fw-bold display-4">Payment</h1>
                <form action="../actions/payment.php?id=<?= $id ?>&buy_quantity=<?= $buy_quantity ?> ?>" method="post">
                    <div class="mb-3">
                        <label for="produst-name" class="form-label">Product Name</label>
                        <h1 class="ms-4"><?= $product['product_name'] ?></h1>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <label for="price" class="form-label">Total Price</label>
                            <h1 class="ms-4">$ <?= $total ?></h1>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Buy Quantity</label>
                            <h1 class="ms-4"><?= $buy_quantity ?></h1>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4 text-end fw-bold">
                            <label for="payment" class="form-label">Payment:</label>
                        </div>
                        <div class="col-6">
                            <input type="number" name="payment" id="payment" class="form-control" min="<?= $total ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success text-white w-100 ">Pay</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
