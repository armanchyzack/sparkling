<?php 
session_start();
include_once '../inc/env.php';
if(isset($_POST['update'])){
    
    $user_image = $_FILES['user_image'];
    $user_image_name = $user_image['name'];
    $user_email = $_POST['user_email'];
    $user_name = $_POST['name'];
    $user_id =$_SESSION['auth']['id'];
    // valetation
    if(empty($user_name)){
        $_SESSION['error_name'] = "please enter your name";
        header('Location: ../dashboard/profile.php');
    }elseif(empty($user_email)){
        $_SESSION['error_email'] = "please enter your email";
        header('Location: ../dashboard/profile.php');
    }elseif(empty($user_image_name)){
        // update database name and email
    $update_query = "UPDATE users SET name='$user_name',email ='$user_email' WHERE id = $user_id";
    $update = mysqli_query($conn, $update_query);
    if($update){
        
        $_SESSION['auth']['email'] = $user_email;
        $_SESSION['auth']['name'] = $user_name;
        header('Location: ../dashboard/profile.php');
    }
    }else{
        // image process
        $imagearay = explode('.', $user_image_name);
        $extentation = end($imagearay);
        $newimagename = uniqid(('user_')) . '.' . $extentation;
        move_uploaded_file($user_image['tmp_name'], '../uploads/' . $newimagename);
        // image path make 
        // OLD IMAGES DELETE
        $user_image_path = '../uploads/' . $_SESSION['auth']['image'];
        // image ypdate and delete
        if(file_exists($user_image_path)){
        // image delete
        unlink($user_image_path);
        }
        // update database
        $update_query = "UPDATE users SET name='$user_name',email ='$user_email',image='$newimagename' WHERE id = $user_id";
        $update = mysqli_query($conn, $update_query);
        if($update){
            $_SESSION['auth']['image'] = $newimagename;
            $_SESSION['auth']['email'] = $user_email;
            $_SESSION['auth']['name'] = $user_name;
            header('Location: ../dashboard/profile.php');
        }
    }


}
