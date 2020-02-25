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
    <form action="proses/proses_diskon.php" method="POST">
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
include'assets/footer.php';
include'assets/js.php';
?>
</body>
</html>