<?php 
    include './conn/conn.php';
    session_start();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];

    $target_dir = "assets/products/";
    $image = $target_dir . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$image);

    $query = mysqli_query($con,"INSERT INTO products(product_name,price,category_id,description,photo) VALUES('$name','$price',$category_id,'$description','$image')");

    if($query){
        $_SESSION['success'] = "Added";
    }else{
        $_SESSION['error'] = "Error: " . mysqli_error($con);
    }
    header("location: add.php");
?>