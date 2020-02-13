<?php
echo "<hr>";
for ($i=0; $i<=10; $i++)
    echo "Hallo! ";

echo "<hr>";

for ($i=2; $i<=10; $i+=2){
    echo "$i (Genap)<br>";
}
echo "<br>";
for ($i=1; $i<=10; $i+=2){
    echo "$i (Ganjil)<br>";
}

echo "<hr>";

// contoh 1
for ($i=1; $i<=10; $i++)
    echo "$i";

echo "<br><br>";

// contoh 2
// for ($i=1; ; $i++)
//     echo "$i > 10";

// echo "<br><br>";

// contoh 3
// $i = 1;
// for (; ; )
//     if($i > 10)
// break;
//     echo "$i";
//     $i++;

// echo "<br><br>";

// contoh 4
for ($i=1; $i<=10; print "$i", $i++)
    echo "$i";

echo "<br><br>";
?>