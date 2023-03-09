<?php 
    if(isset($_SESSION['user_id'])){
        include_once './conn/conn.php';
        $user_id = $_SESSION['user_id'];
        $user = mysqli_query($con,"SELECT * FROM users WHERE id = $user_id")->fetch_assoc();
    }
?>