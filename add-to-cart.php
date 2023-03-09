<?php 
    include './conn/conn.php';
    session_start();

    if(!isset($_SESSION['user_id'])){
        $_SESSION['error'] = "You need to login first!";
        header("location: login.php");
        exit();
    }
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $product = mysqli_query($con,"SELECT products.*,categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $product_id")->fetch_assoc();

    $name = $product['product_name'];
    $price = $product['price'];
    $photo = $product['photo'];
    $category_name = $product['category_name'];

    // check if product is in cart already
    $query = mysqli_query($con,"SELECT * FROM cart WHERE product_id = $product_id AND user_id = $user_id");
    if($query->num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO cart(product_id,product_name,price,product_photo,category_name,user_id,quantity) VALUES($product_id,'$name','$price','$photo','$category_name',$user_id,$quantity)");
    }else{
        $cart= $query->fetch_assoc();
        $cart_id = $cart['id'];
        $cart_quantity = $cart['quantity'];

        $new_quantity = $cart_quantity + $quantity;

        $query = mysqli_query($con,"UPDATE cart SET quantity = $new_quantity WHERE id = $cart_id");
    }

    if($query){
        header("location: cart.php");
    }else{
        header("location: products.php");
    }

?>