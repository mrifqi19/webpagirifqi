<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT NILAI MAHASISWA</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    include'koneksi/koneksi.php';

    $id=$_GET['id_mahasiswa'];
    $show=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");
    if(mysqli_num_rows($show)==0){
        echo"
        <script>
            window.history.back()
        </script>
        ";
    }
    else{
        $data=mysqli_fetch_array($show);
    }
    ?>

    <div class="container">
        <h2><center>FORM EDIT NILAI MAHASISWA</center></h2><br>
        <form action="proses/proses_nilai_edit.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $data['id_mahasiswa']?>">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Mahasiswa" value="<?php echo $data['nama']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNIM" class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa" value="<?php echo $data['nim']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputJurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan Mahasiswa" value="<?php echo $data['jurusan']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNilaiHarian" class="col-sm-3 col-form-label">Nilai Mahasiswa</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="harian" placeholder="Masukkan Nilai Harian Mahasiswa" value="<?php echo $data['harian']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNilaiQuiz" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="quiz" placeholder="Masukkan Nilai Quiz Mahasiswa" value="<?php echo $data['quiz']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNilaiUTS" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="uts" placeholder="Masukkan Nilai UTS Mahasiswa" value="<?php echo $data['uts']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNilaiUAS" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="uas" placeholder="Masukkan Nilai UAS Mahasiswa" value="<?php echo $data['uas']?>">
                    </div>
                </div><br>
                <div>
                    <button type="submit" class="btn btn-primary mb-4" name="update" value="Update">Update</button>
                </div>
        </form>
    </div>

    <?php
    include'assets/footer.php';
    include'assets/js.php';
    ?>

</body>
</html>