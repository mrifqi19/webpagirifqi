<?php
$hari = "Mon";
switch ($hari){
    case "Mon" : $hari = "Minggu"; break;
    case "Sun" : $hari = "Senin"; break;
    case "Tue" : $hari = "Selasa"; break;
    case "Wed" : $hari = "Rabu"; break;
    case "Thu" : $hari = "Kamis"; break;
    case "Fri" : $hari = "Jumat"; break;
    case "Sat" : $hari = "Sabtu"; break;
    default : $hari = "Libur";
}
echo "Hari ini hari <b>$hari</b>";
?>