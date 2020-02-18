<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY NILAI</title>
</head>
<body>
    <?php
    // Pertama
    $arrnilai=array("Ani"=>80,"Otim"=>90,"Ana"=>75,"Budi"=>85);
    echo "Menampilkan isi array dengan foreach : <br>";
    foreach ($arrnilai as $nama=>$nilai){
        echo "Nilai $nama=$nilai<br>";
    }
    reset ($arrnilai);
        echo "<br>Menampilkan isi array dengan while dan list :<br>";
    while (list($nama,$nilai)=each($arrnilai))
        echo "Nilai $nama=$nilai<br>";

    // Kedua
    $arrWarna=array("Blue","Black","Red","Yellow","Green");
    $arrNilai=array("Ani"=>80,"Otim"=>90,"Ana"=>75,"Budi"=>85);
    echo "<pre>";
    print_r ($arrWarna);
    echo "<br>";
    print_r ($arrNilai);
    echo"</pre>";
    
    ?>
    
</body>
</html>