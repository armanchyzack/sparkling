<?php
session_start();
if(!isset($_SESSION['auth_user'])){
    header("Location: ../login.php");
}

// base url make 
function baseUrl(){
    return 'http://' . $_SERVER['SERVER_NAME'] . '/sparkling/';
    
}

?>

<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Marketing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/logo.png" type="image/png" />

    <link rel="stylesheet" href="css/bootstrap1.min.css" />
    <link rel="stylesheet" href="css/metisMenu.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS" />

</head>

<body class="crm_body_bg">
   <!-- side nav bar section start -->
<nav class="sidebar vertical-scroll ps-container ps-theme-default">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="<?= baseUrl() . '/uploads/'.$_SESSION['auth']['image'] ?>" alt="" style="width: 150px; height: 150px; object-fit:cover; object-position:center; cursor:pointer; border-radius:50%" /></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu" class="metismenu">
            <li>
                <a class="has-arrow" href="#" aria-expanded="true">
                    <div class="icon_menu">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
                <ul class="mm-collapse">
                    <li><a href="index.html">Marketing</a></li>
                </ul>
            </li>
        </ul>
    </nav>