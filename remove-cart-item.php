<?php
include './conn/conn.php';

$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM cart WHERE id = $id");

header("location: cart.php");
