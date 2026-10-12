<?php
require_once "Database.php";

class Product extends Database{
    public function getAllProducts(){
        $sql = "SELECT * FROM Products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrirving all products: ' . $this->conn->error);
        }
    }

    public function addProduct($request){
        $name = $request['name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO Products (`product_name`, `price`, `quantity`)
                VALUES ('$name', $price, $quantity)";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error adding a new product: ' . $this->conn->error);
        }
    }

    public function getProduct($id){
        $sql = "SELECT * FROM Products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrirving the product: ' . $this->conn->error);
        }
    }

    public function update($id, $request){
        $name = $request['name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE Products
                SET product_name = '$name',
                    price = $price,
                    quantity = $quantity
                WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error updating the product: ' . $this->conn->error);
        }
    }

    public function delete($id){
        $sql = "DELETE FROM Products WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error deleting the product: ' . $this->conn->error);
        }
    }

}

?>