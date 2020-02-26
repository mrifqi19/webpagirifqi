<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NILAI MAHASISWA</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    ?>
    <div class="container">
        <h2><center>FORM NILAI MAHASISWA</center></h2><br>
        <form action="proses/proses_nilai.php" method="POST">
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNIM" class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputJurusan" class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNilaiHarian" class="col-sm-3 col-form-label">Nilai Mahasiswa</label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="harian" placeholder="Masukkan Nilai Harian Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNilaiQuiz" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="quiz" placeholder="Masukkan Nilai Quiz Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNilaiUTS" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="uts" placeholder="Masukkan Nilai UTS Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNilaiUAS" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="uas" placeholder="Masukkan Nilai UAS Mahasiswa">
                </div>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary mb-4" name="tambah" value="Input">Submit</button>
            </div>
        </form>
    </div>

    <?php
    include"koneksi/koneksi.php";
    
    $tampil=mysqli_query($koneksi,"SELECT * FROM mahasiswa") or die(mysqli_error($tampil));

    while($data=mysqli_fetch_array($tampil)){
        if ($data['nilai'] <= $d){
            echo "<div class='alert alert-danger' role='alert'>
                Nama : ".$data['nama'].",  NIM : ".$data['nim'].", Jurusan ".$data['jurusan']." Mendapat Nilai ".$data['nilai'].", Memperoleh Grade E
            </div>";
        }
        else if ($data['nilai'] <= $c){
            echo "<div class='alert alert-warning' role='alert'>
                Nama : ".$data['nama'].",  NIM : ".$data['nim'].", Jurusan ".$data['jurusan']." Mendapat Nilai ".$data['nilai'].", Memperoleh Grade D
            </div>";
        }
        else if ($data['nilai'] <= $b){
            echo "<div class='alert alert-primary' role='alert'>
                Nama : ".$data['nama'].",  NIM : ".$data['nim'].", Jurusan ".$data['jurusan']." Mendapat Nilai ".$data['nilai'].", Memperoleh Grade C
            </div>";
        }
        else if ($data['nilai'] <= $a){
            echo "<div class='alert alert-info' role='alert'>
                Nama : ".$data['nama'].",  NIM : ".$data['nim'].", Jurusan ".$data['jurusan']." Mendapat Nilai ".$data['nilai'].", Memperoleh Grade B
            </div>";
        }
        else if ($data['nilai'] > $a){
            echo "<div class='alert alert-success' role='alert'>
                Nama : ".$data['nama'].",  NIM : ".$data['nim'].", Jurusan ".$data['jurusan']." Mendapat Nilai ".$data['nilai'].", Memperoleh Grade A
            </div>";
        }
        else{
            echo "<div class='alert alert-dark' role='alert'>
                Nilai Belum Terisi
            </div>";
        }
    }

    include'assets/footer.php';
    include'assets/js.php';
    ?>

</body>
</html>