<?php
$nilai = 88;
if ($nilai > 90){
    $grade = "A";
} elseif($nilai > 80){
    $grade = "B";

} elseif($nilai > 70){
    $grade = "C";

} elseif($nilai > 60){
    $grade = "D";
} elseif($nilai > 50){
    $grade = "Tidak Lulus";
}
echo"Nilai Anda: $nilai<br>";
echo"Grade: $grade";
?>