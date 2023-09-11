<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
    include_once './inc/side_bar.php';
    ?>
    <?php
    include_once './inc/nav_bar.php';
    ?>
    <br><br><br>
    <section>
        <div class=" card col-lg-8 mx-auto mt-5">
            <div class="card-header">
                <h3>User Profile</h3>
            </div>
            <div class="card-body">
                <form action="../controller/update.php" method="POST" enctype="multipart/form-data">
                    <label for="profile">
                        <img src="<?= baseUrl() . '/uploads/' . $_SESSION['auth']['image'] ?>" alt="" style="width: 150px; height: 150px; object-fit:cover; object-position:center; cursor:pointer; border-radius:50%">
                    </label>
                    <br> <br>
                    <input type="file" class="form-control w-100" name="user_image">
                    <br> <br>
                    <label for="name"> Full name: </label>
                    <input type="text" class="form-control" name="name" value="<?= $_SESSION['auth']['name'] ?>">
                    <span class="text-danger">
                        <?php
                        if (isset($_SESSION['error_name'])) {
                            echo $_SESSION['error_name'];
                        }
                        ?>
                    </span>
                    <br><br>
                    <label for="name"> Email: </label>
                    <input type="email" class="form-control" name="user_email" value="<?= $_SESSION['auth']['email'] ?>">
                    <span class="text-danger">
                        <?php
                        if (isset($_SESSION['error_email'])) {
                            echo $_SESSION['error_email'];
                        }
                        ?>
                    </span>    
                    <button type="submit" name="update" class="btn btn-primary w-100 mt-3">Update</button>
                </form>
            </div>
        </div>
    </section>
    <?php
    include_once './inc/footer.php';
    ?>
</body>

</html>
<?php
unset($_SESSION['error_name']);
unset($_SESSION['error_email']);