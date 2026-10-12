<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Font Ausome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div style="height: 100vh;">
        <div class="row h-75 m-0">
            <div class="w-25 mx-auto my-auto">
                <h1 class="text-primary text-center display-5 fw-bold py-3">
                    LOGIN<i class="fa-solid fa-arrow-right-to-bracket"></i>
                </h1>
                <div>
                    <form action="../actions/login.php" method="post">
                        <div class="row mb-3">
                            <div class="col-3">
                                <label for="username" class="form-label">Username</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="col-9">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <div class="text-center">
                                    <a href="register.php" class="btn btn-danger btn-sm w-50">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>