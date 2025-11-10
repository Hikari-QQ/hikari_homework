<?php
require "../classes/Product.php";

$product = new Product;
$product->addProduct($_POST);
?>