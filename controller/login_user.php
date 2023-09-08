<?php
session_start();

if(isset($_POST['login'])){
    
    include '../inc/env.php';
    
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];
    $enc_pass = sha1($user_pass);

    $query=  "SELECT  email FROM users WHERE email= '$user_email'";
    $search_email = mysqli_query($conn, $query);

    if(empty($user_email)){
        $_SESSION['error_email'] = "enter your email";
        header("Location: ../login.php");
    }elseif(empty($user_pass)){
        $_SESSION['error_pass'] = "enter your password";
        header("Location: ../login.php");
    }elseif($search_email->num_rows){
        $pass_query=  "SELECT  * FROM users WHERE password= '$enc_pass' && email='$user_email'";
        $user = mysqli_query($conn, $pass_query);
        if($user->num_rows > 0){
            $auth = mysqli_fetch_assoc($user);
            $_SESSION['auth'] = $auth;
            $_SESSION['auth_user'] = true;
            header("Location: ../dashboard/index.php");
        }else{
            $_SESSION['error_pass'] = "your password in incorrect";
            header("Location: ../login.php");
        }
    }else{
        $_SESSION['error_email']= 'your email in incorrect';
        header("Location: ../login.php");
    }



}