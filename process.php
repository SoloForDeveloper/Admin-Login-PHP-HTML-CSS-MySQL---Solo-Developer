<?php
    session_start();
    //include database connection
    include('./dbcon.php');

    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pw = $_POST['password'];

        $query = "SELECT * FROM user WHERE email='$email' AND password='$pw'";
        $res = mysqli_query($con, $query);
        if(mysqli_num_rows($res)>0){
            //echo "Correct password";
            $_SESSION['user_login']=$email;
            header('location:home.php');
        }else{
            echo "Wrong password";
        }

    }