<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP NILAI</title>
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
        <form method="POST">
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
                <button type="submit" class="btn btn-primary mb-3" name="tambah" value="Input">Submit</button>
            </div>
        </form>

        <?php
        if (isset($_POST['tambah'])){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];
            $harian = $_POST['harian'];
            $quiz = $_POST['quiz'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];
            $a = 83;
            $b = 72;
            $c = 65;
            $d = 50;
            $e = 0;
            $nilai = ($harian*0.1) + ($quiz*0.15) + ($uts*0.35) + ($uas*0.4);
            
            echo "$nama<br>";
            echo "$nim<br>";
            echo "Jurusan $jurusan<br>";
            if ($nilai <= $d)
                echo "Jumlah Nilai $nilai, Mahasiswa Memperoleh Grade E";
            else if ($nilai <= $c)
                echo "Jumlah Nilai $nilai, Mahasiswa Memperoleh Grade D";
            else if ($nilai <= $b)
                echo "Jumlah Nilai $nilai, Mahasiswa Memperoleh Grade C";
            else if ($nilai <= $a) 
                echo "Jumlah Nilai $nilai, Mahasiswa Memperoleh Grade B";
            else if ($nilai > $a)
                echo "Jumlah Nilai $nilai, Mahasiswa Memperoleh Grade A";
            else
                echo "Nilai Belum Terisi";
        }

        ?>
    </div>
</body>
</html><br>
<?php
include'assets/footer.php';
include'assets/js.php';
?>