<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI SISWA</title>
</head>
<body>
    <form action="proses/proses_nilai.php" method="POST" >
        Nama Lengkap :
        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
        <br>NIM :
        <input type="number" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa">
        <br>Jurusan :
        <input type="text" name="jurusan" placeholder="Masukkan Jurusan Anda">
        <br>Nilai Harian :
        <input type="number" name="harian" placeholder="Masukkan Nilai Harian">
        <br>Nilai Quiz :
        <input type="number" name="quiz" placeholder="Masukkan Nilai Quiz">
        <br>Nilai UTS :
        <input type="number" name="uts" placeholder="Masukkan Nilai UTS">
        <br>Nilai UAS :
        <input type="number" name="uas" placeholder="Masukkan Nilai UAS">

        <br><br><input type="submit" name="tambah" value="Input">
    </form>
</body>
</html>