<?php session_start() ?>
<?php include './shared/loadUserSession.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <?php include './shared/head.php' ?>
</head>

<body>
    <?php $active_page = "products" ?>
    <?php include './shared/header_nav.php' ?>
    <?php include './shared/classes/ProductItem.php' ?>
    <main>
        <section>
            <div class="container py-4">
                <div class="input-group rounded-0 mb-5">
                    <input type="text" class="form-control rounded-0" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success rounded-0" type="button" id="button-addon2">
                        <i class="bi bi-search"></i>
                    </button>
                </div>

                <div class="row mb-3 gy-3">
                    <div class="col-lg-2">
                        <!-- <p class="px-3 fs-5 mb-3">Categories</p> -->
                        <ul class="nav flex-column">

                            <?php
                            $current_category = isset($_GET['category']) ? $_GET['category'] : 'All Products';
                            $categories = [
                                "All Products",
                                "Air Purifying Plants",
                                "Hanging Plants",
                                "Office Plants",
                                "Table Tops",
                                "Herbs",
                            ];

                            // display categories
                            foreach ($categories as $key => $category) {
                            ?>
                                <li class="nav-item">
                                    <a class="<?php echo $current_category == $category ? 'link-success fw-bold' : 'link-dark' ?> nav-link" href="products.php?category=<?php echo $category ?>">
                                        <?php echo $category ?>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="col-lg">
                        <p class="mb-3 fs-4 fw-bold"><?php echo $current_category ?></p>
                        <div class="row gy-5 gx-lg-5">

                            <?php
                            include_once './conn/conn.php';
                            if ($current_category == "All Products") {
                                $get_products = mysqli_query($con, "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id");
                            } else {
                                $get_products = mysqli_query($con, "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id WHERE categories.category_name = '$current_category'");
                            }
                            while ($row = $get_products->fetch_assoc()) {
                            ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-card">
                                        <div class="image-container">
                                            <img src="<?php echo $row['photo'] ?>" class="img-fluid product-image img-thumbnail" alt="">
                                        </div>
                                        <p class="my-1 fw-bold product-name"><?php echo $row['product_name'] ?></p>
                                        <p class="my-1 product-price">₱<?php echo $row['price'] ?></p>
                                        <div class="badge text-bg-light border text-success"><span class="category"><?php echo $row['category_name'] ?></span></div>
                                        <div class="mt-3 d-grid">
                                            <a class="btn btn-success" data-id="<?php echo $row['id'] ?>" href="#offcanvas-cart" data-bs-toggle="offcanvas">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './shared/footer.php' ?>
    <?php include './shared/offcanvas-cart.php' ?>
    <?php include './shared/scripts.php' ?>

    <script>
        $("#offcanvas-cart").on('show.bs.offcanvas', function(e) {
            let offcanvas = $(this);

            let btn = $(e.relatedTarget);
            let productCard = btn.parent().parent();

            let name = productCard.find(".product-name").html();
            let price = productCard.find(".product-price").html();
            let category = productCard.find(".category").html();
            let img = productCard.find(".product-image").attr('src');

            offcanvas.find(".product-id").val(btn.data('id'))
            offcanvas.find(".name").html(name)
            offcanvas.find(".price").html(price)
            offcanvas.find(".category").html(category)
            offcanvas.find(".product-image").attr('src',img)
        })

     
    </script>
</body>

</html>