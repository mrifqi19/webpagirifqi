<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT BARANG</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    ?><br>
    <div class="container-fluid">
        <form action="proses/proses_diskon.php" method="POST">
            <div class="form-group row">
                <label for="inputPrice" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="barang" placeholder="Masukkan Nama Barang">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDiscount" class="col-sm-2 col-form-label">Harga Barang</label>
                <div class="col-sm-3">
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Barang">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDiscount" class="col-sm-2 col-form-label">Stok Barang</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="stok" placeholder="Masukkan Stok Barang">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDiscount" class="col-sm-2 col-form-label">Kategori Barang</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori Barang">
                </div>
            </div><br>
            <!-- <div class="form-group row">
                <label for="inputDiscount" class="col-sm-2 col-form-label">Potongan Diskon</label>
                <div class="col-sm-3">
                <input type="number" class="form-control" name="diskon" placeholder="Masukkan Nilai Diskon">
                </div>
            </div><br> -->
            <div>
                <button type="submit" class="btn btn-primary mb-4" name="tambah" value="Input">Input</button>
            </div>
        </form>
    </div>
<?php
include'assets/footer.php';
include'assets/js.php';
?>
</body>
</html>

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