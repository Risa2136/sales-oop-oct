<?php
require_once "../classes/Product.php";

$product = new Product;

$product->update($_GET['id'], $_POST);

?>