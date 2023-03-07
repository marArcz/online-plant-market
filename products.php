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
    <?php include './shared/header_nav.php' ?>
    <?php include './shared/classes/ProductItem.php' ?>
    <main>
        <section>
            <div class="container py-4">
                <div class="input-group rounded-0 mb-5">
                    <input type="text" class="form-control rounded-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success rounded-0" type="button" id="button-addon2">
                        <i class="bi bi-search"></i>
                    </button>
                </div>

                <div class="row mb-3">
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
                            $products = [
                                new ProductItem('Bambino', '599.00', 'assets/air-purifying-plants/bambino.PNG', category: $categories[1]),
                                new ProductItem('Black Prince Rubber Tree', '999.00', 'assets/air-purifying-plants/black-prince.PNG', category: $categories[1]),
                                new ProductItem('Cypress Tree', '899.00', 'assets/air-purifying-plants/cypress-tree.PNG', category: $categories[1]),
                                new ProductItem('Fiddle Leaf Fig', '1999.00-3999.00', 'assets/air-purifying-plants/fiddle-leaf.PNG', category: $categories[1]),
                                new ProductItem('Licuala Grandis', '1199.00', 'assets/air-purifying-plants/licuala-grandis.PNG', category: $categories[1]),
                                new ProductItem('Palm Tree', '299.00-1799.00', 'assets/air-purifying-plants/palm-tree.PNG', category: $categories[1]),
                                new ProductItem('Robusta', '299.00-699.00', 'assets/air-purifying-plants/robusta.PNG', category: $categories[1]),
                                new ProductItem('Rubber Tree', '1999.00-3999.00', 'assets/air-purifying-plants/rubber-tree.PNG', category: $categories[1]),
                                new ProductItem('Snake Plant', '299.00-699.00', 'assets/air-purifying-plants/snake-plant.PNG', category: $categories[1]),
                                new ProductItem('Tineke Rubber Tree', '999.00', 'assets/air-purifying-plants/tineke-rubber-tree.PNG', category: $categories[1]),
                                // hanging plants
                                new ProductItem('Anthuriumn Hookeri', '699.00', 'assets/hanging-plants/1.PNG', category: $categories[2]),
                                new ProductItem('Black Prince Rubber Tree', '999.00', 'assets/hanging-plants/2.PNG', category: $categories[2]),
                                new ProductItem('Cobra Fern', '999.00', 'assets/hanging-plants/3.PNG', category: $categories[2]),
                                new ProductItem('Cypress Tree', '899.00', 'assets/hanging-plants/4.PNG', category: $categories[2]),
                                new ProductItem('Golden Selfoum', '999.00', 'assets/hanging-plants/5.PNG', category: $categories[2]),
                                new ProductItem('Monstera Deliciosa', '1599.00', 'assets/hanging-plants/6.PNG', category: $categories[2]),
                                new ProductItem('Tineke Rubber Tree', '599.00', 'assets/hanging-plants/7.PNG', category: $categories[2]),
                                new ProductItem('Variegated Money Tree', '999.00', 'assets/hanging-plants/8.PNG', category: $categories[2]),
                                new ProductItem('Multistalk Fortune Plant', '499.00-999.00', 'assets/hanging-plants/9.PNG', category: $categories[2]),
                                new ProductItem('Palm Tree', '299.00-1799.00', 'assets/hanging-plants/10.PNG', category: $categories[2]),
                                // office plants
                                new ProductItem('Anthuriumn Hookeri', '699.00', 'assets/office-plants/1.PNG', category: $categories[3]),
                                new ProductItem('Bambino', '999.00', 'assets/office-plants/2.PNG', category: $categories[3]),
                                new ProductItem('Black Prince Rubber Tree', '999.00', 'assets/office-plants/3.PNG', category: $categories[3]),
                                new ProductItem('Cactus', '899.00', 'assets/office-plants/4.PNG', category: $categories[3]),
                                new ProductItem('Dieffenbachia Oerstedi', '999.00', 'assets/office-plants/5.PNG', category: $categories[3]),
                                new ProductItem('Licuala Grandis', '1599.00', 'assets/office-plants/6.PNG', category: $categories[3]),
                                new ProductItem('Mostera Decliosa', '599.00', 'assets/office-plants/7.PNG', category: $categories[3]),
                                new ProductItem('Philodendron Black Cardinal', '999.00', 'assets/office-plants/8.PNG', category: $categories[3]),
                                new ProductItem('Philodendron Burle Marx', '499.00-999.00', 'assets/office-plants/9.PNG', category: $categories[3]),
                                new ProductItem('Philodendron Prince of Orange', '299.00-1799.00', 'assets/office-plants/10.PNG', category: $categories[3]),
                                // table tops
                                new ProductItem('Alocasia Bambino', '699.00', 'assets/table-tops/1.PNG', category: $categories[4]),
                                new ProductItem('Aloe Vera', '999.00', 'assets/table-tops/2.PNG', category: $categories[4]),
                                new ProductItem('Anthurium Laceleaf', '999.00', 'assets/table-tops/3.PNG', category: $categories[4]),
                                new ProductItem('Boston Fern', '899.00', 'assets/table-tops/4.PNG', category: $categories[4]),
                                new ProductItem('Cactus', '999.00', 'assets/office-plants/5.PNG', category: $categories[4]),
                                new ProductItem('Cobra Fern', '1599.00', 'assets/table-tops/6.PNG', category: $categories[4]),
                                new ProductItem('Crptanthus', '599.00', 'assets/table-tops/7.PNG', category: $categories[4]),
                                new ProductItem('Dieffenbachia Oerstedi', '999.00', 'assets/table-tops/8.PNG', category: $categories[4]),
                                new ProductItem('Dwarf Croton San Francisco', '499.00-999.00', 'assets/table-tops/9.PNG', category: $categories[4]),
                                new ProductItem('Green Fittonia', '299.00-1799.00', 'assets/table-tops/10.PNG', category: $categories[4]),
                                // Herbs
                                new ProductItem('Chocolate Mint', '699.00', 'assets/herbs/1.PNG', category: $categories[5]),
                                new ProductItem('Citronella', '999.00', 'assets/herbs/2.PNG', category: $categories[5]),
                                new ProductItem('Citronella Malvarosa', '999.00', 'assets/herbs/3.PNG', category: $categories[5]),
                                new ProductItem('Dill', '899.00', 'assets/herbs/4.PNG', category: $categories[5]),
                                new ProductItem('Cactus', '999.00', 'assets/herbs/5.PNG', category: $categories[5]),
                                new ProductItem('Gotu Kola', '1599.00', 'assets/herbs/6.PNG', category: $categories[5]),
                                new ProductItem('Green Tea', '599.00', 'assets/herbs/7.PNG', category: $categories[5]),
                                new ProductItem('Lavender', '999.00', 'assets/herbs/8.PNG', category: $categories[5]),
                                new ProductItem('Lemon Balm', '499.00-999.00', 'assets/herbs/9.PNG', category: $categories[5]),
                                new ProductItem('Lemon Mint', '299.00-1799.00', 'assets/herbs/10.PNG', category: $categories[5]),

                            ];
                            ?>
                            <?php
                            foreach ($products as $key => $product) {
                                if ($current_category == "All Products" || $product->category == $current_category) :
                            ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-card">
                                            <div class="image-container">
                                                <img src="<?php echo $product->image ?>" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <p class="my-1 fw-bold"><?php echo $product->name ?></p>
                                            <p class="my-1">₱<?php echo $product->price ?></p>
                                            <div class="badge text-bg-light border text-success"><?php echo $product->category ?></div>
                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-success" type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './shared/footer.php' ?>

</body>

</html>