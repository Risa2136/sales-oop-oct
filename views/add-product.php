<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Product</title>

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

    <div style="height: 100vh;">
        <div class="row h-50 m-0">
            <div class="w-25 mx-auto my-auto">
                <h1 class="text-center text-info display-5 fw-bold py-3">
                    <i class="fa-solid fa-box"></i>Add Product
                </h1>
            <div>
                <form action="../actions/add-product.php" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control" required autofocus>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" class="form-control" step="any" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info w-100">Add</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>