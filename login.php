<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include './shared/head.php' ?>
</head>

<body class="bg-light">
    <?php include './shared/header_nav.php' ?>
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold mt-1 mb-0">Login</p>
                        <?php
                        session_start();
                        if (isset($_SESSION['error'])) {
                        ?>
                            <div class="alert alert-danger mt-2 py-2">
                                <small><?php echo $_SESSION['error'] ?></small>
                            </div>
                        <?php
                            unset($_SESSION['error']);
                        } else if (isset($_SESSION['success'])) {
                        ?>
                            <div class="alert alert-success  mt-2 py-2">
                                <small><?php echo $_SESSION['success'] ?></small>
                            </div>
                        <?php
                            unset($_SESSION['success']);
                        }
                        ?>
                        <div class="card rounded-0 border-0 border-top border-dark shadow mt-3">
                            <div class="card-body p-5">
                                <form action="login_submit.php" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username or Email:</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password:</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col text-end">
                                            <a href="#" class="link-dark text-decoration-none">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button class="btn btn btn-success col-md-3 rounded-0" type="submit">Login</button>
                                    <a href="signup.php" class="btn btn btn-dark col-md-3 rounded-0">Signup</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './shared/footer.php' ?>
</body>

</html>