<?php
include './conn/conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$find_user = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' OR email = '$username'");

if ($find_user->num_rows == 0) {
    $_SESSION['error'] = "No matching account found!";
    header("location: login.php");

} else {
    $user = $find_user->fetch_assoc();
    //check if password is correct
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("location: index.php");
    } else {
        $_SESSION['error'] = "You entered an incorrect password!";
        header("location: login.php");
    }
}


