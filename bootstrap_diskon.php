<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP DISKON</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    ?>
    <form method="POST">
        <div class="form-group row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Harga Sepatu</label>
            <div class="col-sm-2">
            <input type="number" class="form-control" name="harga" placeholder="Harga Sepatu">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDiscount" class="col-sm-2 col-form-label">Potongan Diskon</label>
            <div class="col-sm-2">
            <input type="number" class="form-control" name="diskon" placeholder="Potongan Diskon">
            </div>
        </div><br>
        <div>
            <button type="submit" class="btn btn-primary mb-2" name="tambah" value="Input">Submit</button>
        </div>
    </form>

<?php
if (isset($_POST['tambah'])){
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];
    $syarat=400000;
    $total=$harga-$harga*$diskon/100;
}

if ($harga>=$syarat)
    echo "Anda mendapat diskon $diskon%, harga setelah diskon $total";
else
    echo "Anda tidak mendapat diskon";
?>
</body>
</html>

<?php
include'assets/footer.php';
include'assets/js.php';
?>

