<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <?php include './shared/head.php' ?>
</head>

<body class="bg-light">
    <?php include './shared/header_nav.php' ?>
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold mt-1 mb-3">Signup</p>
                        <?php
                        session_start();
                        if (isset($_SESSION['error'])) {
                        ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['error'] ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="card rounded-0 border-0 border-top border-dark shadow">
                            <div class="card-body p-5">
                                <form data-validated="false" action="signup_submit.php" id="signup-form" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Firstname: <span class="text-danger">*</span></label>
                                        <input required type="text" class="form-control" name="firstname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Lastname: <span class="text-danger">*</span></label>
                                        <input required type="text" class="form-control" name="lastname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Age: <span class="text-danger">*</span></label>
                                        <input required type="number" class="form-control" name="age">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gender: <span class="text-danger">*</span></label>
                                        <select required name="gender" class="form-control" id="">
                                            <option value="">Select One</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Gay">Gay</option>
                                            <option value="Lesbian">Lesbian</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Birthday: <span class="text-danger">*</span></label>
                                        <input required type="date" class="form-control" name="birthday">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Phone Number: <span class="text-danger">*</span></label>
                                        <input required type="number" class="form-control" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email: <span class="text-danger">*</span></label>
                                        <input required type="email" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username: <span class="text-danger">*</span></label>
                                        <input required type="text" class="form-control" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password: <span class="text-danger">*</span></label>
                                        <input required type="password" class="form-control" id="password">
                                        <div class="invalid-feedback">
                                            Password does not match.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Confirm Password: <span class="text-danger">*</span></label>
                                        <input required type="password" class="form-control" id="confirm-password" name="password">
                                        <div class="invalid-feedback">
                                            Password does not match.
                                        </div>
                                    </div>
                                    <p class="form-text">
                                        By selecting Sign up, you agree to Open Market's <a href="#" class="link-success">Terms</a> and that you have read our <a href="#" class="link-success">Privacy Policy</a>
                                    </p>
                                    <button type="submit" class="btn btn btn-success col-12 rounded-0">Signup</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './shared/footer.php' ?>
    <?php include './shared/scripts.php' ?>
    <script>
        $("#signup-form").on("submit", function(e) {
            let form = $(this);
            let is_validated = $(this).data("validated")

            if (is_validated) {
                return true;
            } else {
                e.preventDefault();

                if ($("#password").val() != $("#confirm-password").val()) {
                    $("#password").siblings(".invalid-feedback").addClass("d-block");
                    $("#confirm-password").siblings(".invalid-feedback").addClass("d-block");
                }
                else{
                    form.data("validated",true);
                    form.submit()
                }
            }
        })
    </script>
</body>

</html>