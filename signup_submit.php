<?php
session_start();
include './conn/conn.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = password_hash(trim($_POST['password']),PASSWORD_BCRYPT);
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];

$query = mysqli_prepare($con,"INSERT INTO users(firstname,lastname,username,password,email,gender,age,birthday) VALUES(?,?,?,?,?,?,?,?)");

$query->bind_param(
    "ssssssss",
    $firstname,
    $lastname,
    $username,
    $password,
    $email,
    $gender,
    $age,
    $birthday,
);

if($query->execute()){
    $_SESSION['success'] = "You Successfully created an account!";
}else{
    $_SESSION['error'] = "Error creating your account: " . mysqli_error($con);
}

header("location: login.php");
