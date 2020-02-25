<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGOLAHAN FORM</title>
</head>
<body>
    <form action="proses/proses_biodata.php" method="POST" target="blank">
        Nama Anda :
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>Email :
        <input type="email" name="email" placeholder="Masukkan Email">
        <br>Jenis Kelamin :
        <input type="radio" name="jk" value="Laki-Laki">Laki-laki
        <input type="radio" name="jk" value="Perempuan">Perempuan
        <br>Alamat :
        <textarea name="alamat" placeholder="Alamat" cols="50" rows="1"></textarea>
        <br>Tempat Lahir :
        <input type="text" name="tempat" placeholder="Tempat Lahir">
        <br>Tanggal Lahir :
        <input type="date" name="tl" placeholder="">
        <br>Nomor HP :
        <input type="number" name="hp" placeholder="Masukkan No.HP Anda">
        <br>Hobi :
        <input type="checkbox" name="hobi1" value="Sepak Bola">Sepak Bola
        <input type="checkbox" name="hobi2" value="Badminton">Badminton
        <input type="checkbox" name="hobi3" value="Voli">Voli
        <input type="checkbox" name="hobi4" value="Catur">Catur
        <input type="checkbox" name="hobi5" value="Memancing">Memancing


        <br><br><input type="submit" name="tambah" value="Input">
    </form>
</body>
</html>