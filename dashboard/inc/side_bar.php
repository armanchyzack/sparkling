<?php
session_start();
if(!isset($_SESSION['auth_user'])){
    header("Location: ../login.php");
}

// base url make 
function baseUrl(){
    return 'http://' . $_SERVER['SERVER_NAME'] . '/sparkling/';
    
}
echo baseUrl();
?>

<nav class="sidebar vertical-scroll ps-container ps-theme-default">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="<?= baseUrl() . '/uploads/'.$_SESSION['auth']['image'] ?>" alt="" /></a>
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