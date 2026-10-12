<?php
require_once "../classes/Product.php";

$product = new Product;

$product->delete($_GET['id']);

?>

//THIS CODE FROM GITHUB
