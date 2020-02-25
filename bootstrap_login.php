<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    ?>

    <div class="container-fluid">
        <form action="proses/proses_login.php" method="POST">
            <div class="form-group row">
                <label for="inputPrice" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDiscount" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-3">
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda">
                </div>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary mb-2" name="login" value="Login">Submit</button>
            </div>
        </form><br>
    </div>

    <?php
    include'assets/footer.php';
    include'assets/js.php';
    ?>
</body>
</html>