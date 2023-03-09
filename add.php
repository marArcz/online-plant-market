<?php 
include './conn/conn.php';
include './shared/classes/ProductItem.php';
$categories = [0,1,2,3,4,5];
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

$add_query = mysqli_prepare($con,"INSERT INTO products(product_name,price,description,category_id,photo) VALUES(?,?,?,?,?)");

foreach ($products as $key => $product) {
    $add_query->bind_param(
        "sssis",
        $product->name,
        $product->price,
        $product->description,
        $product->category,
        $product->image,
    );

    if(!$add_query->execute()){
        echo "Error adding: " . mysqli_error($con);
    }else{
        ?>
        <p>Successfully Added.</p>
        <?php
    }
}
