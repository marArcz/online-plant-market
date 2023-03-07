<?php include './shared/classes/ProductItem.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include './shared/head.php' ?>
</head>

<body>
   <?php include './shared/header_nav.php' ?>
    <main>
        <section class="hero-main position-relative">
            <div class="h-100 position-relative d-flex justify-content-center align-items-center">
                <div class=" text-center">
                    <h2 class="text-center mb-4 text-light fw-bold">Find your plant</h2>
                    <a href="products.php" class="btn btn-success rounded-0 btn-lg">Shop Now</a>
                </div>
            </div>
        </section>
        <section class="popular-plants">
            <div class="container py-5">
                <div class="text-center">
                    <p class="fs-3 fw-bold text-success">Most Popular Plants</p>
                </div>
                <div class="mt-3 row gy-5">
                    <?php
                    $popular_products = [
                        new ProductItem(
                            'Aloe Vera',
                            '100',
                            'ass'
                        ),
                    ];
                    ?>
                    <div class="col-lg-4">
                        <div class="product-card">
                            <div class="image-container">
                                <img src="./assets/homepage/aloe-vera.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="text-center fw-bold mt-2">Aloe Vera</p>
                            <p class="my-0 description">
                                Succulents are plants that are thickened, fleshly and engorged, allowing the plant to retain water in arid areas. Aloe Vera is a succulent that can be grown indoors as a house plant, or in temperate zones as an outdoor perennial. Favorable growing conditions include plenty of lightm but limited direct sun, The leaves may tend to droop when placed in a low light setting.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-card">
                            <div class="image-container">
                                <img src="./assets/homepage/roses.png" class="img-fluid" alt="">
                            </div>
                            <p class="text-center fw-bold mt-2">Roses</p>
                            <p class="my-0 description">
                                Most rose species are native to Asiam with smaller numbers being native to North America and a few to Europe and northwest Africa. Roses from different regions of the world hyberidize readily, giving rise to types that overlap the parental forms, and making it difficult to determine basic species.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-card">
                            <div class="image-container">
                                <img src="./assets/homepage/papaya-tree.png" class="img-fluid" alt="">
                            </div>
                            <p class="text-center fw-bold mt-2">Papaya Tree</p>
                            <p class="my-0 description">
                                They are grown on plants which look like trees however they are giant herbs. Papaya is high in vitamin C and vitamin A. Papayas are known to help with digestion. The black seeds in the center of papaya are edible and have a spicy, peppery taste.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="mb-5">
        <section class="about" id="about">
            <div class="container">
                <h3 class=" fw-bold mb-4 text-uppercase">About Us</h3>
                <p>
                    We assist customers in finding the ideal plants for their residence or place of business as as online marketplace for plants. We ensure that our products are produced locally since we support regional farmers.
                </p>
                <p>
                    We wish to increase your sense of kinship with the natural world and your surroundings. Our goal is to give you plants of the best caliber at affordable costs so you can concentrate on what really matters enjoying time outside with your loved ones.
                </p>
                <p>Our clients are avid gardeners who enjoy being outside but lack the time to search for the ideal plant for their residence or place of business. They wish to benefit from all the advantages of indoor plants without giving up their outdoor ones.</p>
            </div>
        </section>
    </main>
    <br>
  <?php include './shared/footer.php' ?>
</body>

</html>