<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISKON</title>
</head>
<body>
    <form action="proses/proses_diskon.php" method="POST">
        Harga Sepatu :
        <input type="number" name="harga" placeholder="Harga Sepatu">
        <br>Potongan Diskon :
        <input type="number" name="diskon" placeholder="Potongan Diskon">

        <br><br><input type="submit" name="tambah" value="Input">
    </form>
</body>
</html>