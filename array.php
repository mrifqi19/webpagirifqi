<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="buah">
        <input type="submit" name="tambah" value="Tambah">
    </form>

    <?php
    if(isset($_POST['tambah'])){
        $buah=$_POST['buah'];
        $arrbuah=array("Merah","Jingga","Kuning","Hijau");
    }
    if($buah==$arrbuah[0])
        echo "<p style='color:red'>$buah<br></p>";
    else if($buah==$arrbuah[1])
        echo "<p style='color:purple'>$buah<br></p>";
    else if($buah==$arrbuah[2])
        echo "<p style='color:yellow'>$buah<br></p>";
    else if($buah==$arrbuah[3])
        echo "<p style='color:green'>$buah<br></p>";
    else
        echo "Error<br>";

    // Metode ke-1
    $warna1=array("Merah","Jingga","Kuning","Hijau");
    echo "$warna1[0]<br>";

    // Metode ke-2
    $warna2=array();
    $warna2[]="Merah";
    $warna2[]="Jingga";
    $warna2[]="Kuning";
    $warna2[]="Hijau";
    echo "$warna2[1]<br>";

    // Metode ke-3
    $warna3=[
            "Merah",
            "Jingga",
            "Kuning",
            "Hijau"
    ];
    echo "$warna3[3]<br>";
    ?>
</body>
</html>