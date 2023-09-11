<?php
session_start();

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $con_password = $_POST['con_pass'];
    $image = $_FILES['profile_img'];
    $enc_pass = sha1($password);

    // validation form
    if (empty($name)) {
        $_SESSION['name_error'] = 'enter your name';
        header("Location: ../register.php");
    } elseif (empty($email)) {
        $_SESSION['email_error'] = 'enter your email';
        header("Location: ../register.php");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email_error'] = 'enter a valid email';
        header("Location: ../register.php");
    } elseif (empty($password)) {
        $_SESSION['pass_error'] = 'enter your Password';
        header("Location: ../register.php");
    } elseif (strlen($password) < 8) {
        $_SESSION['pass_error'] = 'your password must be 8 character';
        header("Location: ../register.php");
    } elseif ($password !== $con_password) {
        $_SESSION['con_pass_error'] = 'your password dose not match';
        header("Location: ../register.php");
    }
    // image validation and uniq name genarate and save on uploads folder

    elseif (!$image['name']) {
        $_SESSION['img_error'] = 'Select a Profile Image';
        header("Location: ../register.php");
    } elseif (($image['name'])) {
        // image name create and validation
        $imagename = $image['name'];
        $imagearray = explode('.', $imagename);
        $extention = end($imagearray);

        if ($extention != 'png' && $extention != 'jpg') {
            $_SESSION['img_error'] = 'Select jpg,png Image';
            header("Location: ../register.php");
        } else {
            include '../inc/env.php';
            // uniqe name genarate
            $newimgname = uniqid('user_') . '.' . $extention;
            move_uploaded_file($image['tmp_name'], '../uploads/' . $newimgname);
            // registation data insert on data base 
            $query = "INSERT INTO users( name, email, password, image) VALUES ('$name','$email','$enc_pass','$newimgname')";
            $insert = mysqli_query($conn, $query);
        }
    }
}
