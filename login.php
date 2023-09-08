<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if(isset($_SESSION['auth_user'])){
        header("Location: ./dashboard/index.php");
    }
    // ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
    <style>
            form.w-25.mx-auto {
                margin-top: 18rem;
            }
    </style>

</head>

<body>
   
    <form class="w-25 mx-auto " action="./controller/login_user.php" method="POST">
    <h1>Login Form</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['error_email'])){
                    echo $_SESSION['error_email'];
                }
                ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['error_pass'])){
                    echo $_SESSION['error_pass'];
                }
                ?>
            </span>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">remember me</label>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        <a href="./register.php" class=" my-2 btn btn-success w-100"> Resgistation</a>
        
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
    session_unset();
?>