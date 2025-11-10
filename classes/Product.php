<?php
require_once "Database.php";

class Product extends Database {
    public function addProduct($request) {
        $product_name = $request["product_name"];
        $price = $request["price"];
        $quantity = $request["quantity"];

        $sql = "INSERT INTO products (`product_name`, `price`, `quantity`) VALUES ('$product_name', '$price', '$quantity')";

        if($this->conn->query($sql)) {
            header("location: ../views/dashboard.php");
            exit;
        } else {
            die("Error" . $this->conn->error);
        }
    }

    public function getProduct($id) {
        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die("Error retriving the product: ". $this->conn->error);
        }
    }

    public function updateProduct($request, $id) {
        $product_name = $request["product_name"];
        $price = $request["price"];
        $quantity = $request["quantity"];

        $sql = "UPDATE products SET product_name = '$product_name', price = $price, quantity = $quantity WHERE id = $id";

        if($this->conn->query($sql)) {
            header("location: ../views/dashboard.php");
            exit;
        } else {
            die("Error updating the product: ". $this->conn->error);
        }
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)) {
            header("location: ../views/dashboard.php");
            exit;
        } else {
            die("Error deleting the product". $this->conn->error);
        }
    }

    public function calcTotal($price, $buy_quantity) {
        $total = $price * $buy_quantity;
        return $total;
    }

    public function updateQuantity($id, $buy_quantity) {
        $product = $this->getProduct($id);
        $update_quantity = $product["quantity"] - $buy_quantity;

        $sql = "UPDATE products SET quantity = $update_quantity WHERE id = $id";

        if($this->conn->query($sql)) {
            header("location: ../views/dashboard.php");
            exit;
        } else {
            die("Error updating the product: ". $this->conn->error);
        }
    }
}
?>