<?php
require "../classes/Product.php";

$id = $_GET["id"];
$buy_quantity = $_GET["buy_quantity"];


$product = new Product;
$product->updateQuantity($id, $buy_quantity);

?>