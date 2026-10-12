<?php
session_start();

require_once "../classes/Product.php";

$product_obj = new Product;

$all_products = $product_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Font Ausome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h2"><i class="fa-solid fa-house"></i></h1>
            </a>
            <span class="navbar-text text-secondary fw-bold h5 mx-auto">Welcome, <?= $_SESSION['username'] ?></span>
            <div class="navbar-nav">
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0 h2">
                        <i class="fa-solid fa-user-xmark"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <div class="row mb-3">
                <div class="col">
                    <h2 class="fw-bold h1">Product List</h2>
                </div>
                <div class="col">
                    <a href="add-product.php" class="text-info h1  float-end"><i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <?php 
                if($all_products->num_rows > 0){
            ?>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
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
                                while($product = $all_products->fetch_assoc()){
                            ?>
                                    <tr>
                                        <td><?= $product['id'] ?></td>
                                        <td><?= $product['product_name'] ?></td>
                                        <td><?= $product['price'] ?></td>
                                        <td><?= $product['quantity'] ?></td>
                                        <td>
                                            <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning" title="Edit">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <?php
                                            if($product['quantity']>0){
                                            ?>
                                                <a href="buy-product.php" class="btn btn-success" title="Buy">
                                                    <i class="fa-solid fa-cash-register"></i>
                                                </a>
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
                <?php
                }else{
                ?>
                    <div style="height: 300px;" class="bg-dark text-danger text-center p-5">
                        <h3 class="h2">No Records Found</h3>
                        <h3 class="display-1"><i class="fa-regular fa-circle-xmark"></i></h3>
                    </div>
                <?php    
                }
                ?>
        </div>
    </main>
    
</body>
</html>