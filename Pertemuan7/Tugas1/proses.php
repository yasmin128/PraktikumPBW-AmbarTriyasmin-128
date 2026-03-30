<?php
$name = $_POST['nama'];
$nilai = $_POST['nilai'];
$predikat = "";
$status = "";

if ($nilai >= 85){
    $predikat = "A"; $status = "Lulus";
} elseif ($nilai >= 75){
    $predikat = "B"; $status = "Lulus"; 
} elseif ($nilai >= 65){
    $predikat = "C"; $status = "Lulus";
} elseif ($nilai >= 50){
    $predikat = "D"; $status = "Tidak Lulus";
} else {
    $predikat = "E"; $status = "Tidak Lulus";
}

echo "<h2>Hasil Output</h2>";
echo "Nama: $name <br>";
echo "Nilai: $nilai <br>";
echo "Predikat: $predikat <br>";
echo "Status: $status";
?>