<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGOLAHAN FORM</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
    <?php
    include'assets/navbar.php';
    ?><br>
    <div class="container-fluid">
        <form action="proses/proses_biodata.php" method="POST">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPlace" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat" placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                <input type="date" class="form-control" name="tanggal" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                <input type="radio" name="jk" value="Laki-Laki">Laki-laki<br>
                <input type="radio" name="jk" value="Perempuan">Perempuan
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="email" placeholder="Masukkan Alamat Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNumber" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-3">
                <input type="number" class="form-control" name="hp" placeholder="Masukkan Nomor Handphone">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHobby" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-3">
                <input type="checkbox" name="hobi1" value="Sepak Bola">Sepak Bola<br>
                <input type="checkbox" name="hobi2" value="Badminton">Badminton<br>
                <input type="checkbox" name="hobi3" value="Voli">Voli<br>
                <input type="checkbox" name="hobi4" value="Catur">Catur<br>
                <input type="checkbox" name="hobi5" value="Memancing">Memancing
                </div>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary mb-4" name="tambah" value="Submit">Submit</button>
            </div>
        </form>
    </div>

    <?php
    include'assets/footer.php';
    include'assets/js.php';
    ?>
</body>
</html>