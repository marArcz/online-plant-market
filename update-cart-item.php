<?php 
    include './conn/conn.php';
    session_start();
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($con,"UPDATE cart SET quantity = $quantity WHERE id = $id");
    $cart = mysqli_query($con,"SELECT * FROM cart WHERE id = $id")->fetch_assoc();
    $num_of_items = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user_id = $user_id")->fetch_array()[0];
    $subtotal = mysqli_query($con,"SELECT SUM(quantity) * SUM(price) AS subtotal FROM cart WHERE user_id = $user_id")->fetch_assoc()['subtotal'];

    echo json_encode([
        "cart" => $cart,
        "subtotal" => $subtotal,
        "num_of_items" => $num_of_items,
    ]);
?>