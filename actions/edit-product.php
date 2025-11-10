<?php
require "../classes/Product.php";

$id = $_GET["id"];
$product = new Product;
$product->updateProduct($_POST, $id);

?>