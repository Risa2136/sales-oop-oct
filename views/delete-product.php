<?php
session_start();

require_once "../classes/Product.php";

$product_obj = new Product;

$product= $product_obj->getProduct($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete-Product</title>

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

    <main class="row justify-content-center">
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2 mx-auto"></i>
            <h2 class="text-danger text-uppercase mb-5">Delete Product</h2>
            <p class="fw-bold">Are you sure want to delete the product?</p>
            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete-product.php?id=<?= $product['id'] ?>" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>