<!DOCTYPE html>
<html lang="en">
    <?php
    session_start()
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register</title>
    <style>
            form.w-25.mx-auto {
                margin-top: 14rem;
            }
    </style>

</head>

<body>
    <form action="./controller/user.php" method="POST" enctype="multipart/form-data" class="w-25 mx-auto">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['name_error'])){
                    echo $_SESSION['name_error'];
                }
                ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['email_error'])){
                    echo $_SESSION['email_error'];
                }
                ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['pass_error'])){
                    echo $_SESSION['pass_error'];
                }
                ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="con_pass">
        </div>
        <span class="text-danger">
                <?php
                if(isset($_SESSION['con_pass_error'])){
                    echo $_SESSION['con_pass_error'];
                }
                ?>
            </span>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="profile_img">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['img_error'])){
                    echo $_SESSION['img_error'];
                }
                ?>
            </span>
        </div>
        <button type="submit" name="register" class="btn-primary btn">Submit</button>
        <a href="./login.php" class="btn btn-success w-100 my-3">Back to Log-in</a> 
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

session_unset()
?>