<?php
    session_start();

    if(!isset($_SESSION['user_login'])){
        header('location:index.html');
    }
?>

<h1>Admin Dashboard</h1>