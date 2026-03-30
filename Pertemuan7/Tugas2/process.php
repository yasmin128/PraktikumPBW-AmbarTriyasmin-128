<?php
$npm = $_POST['npm'];
$name = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$biaya = $_POST['biaya'];

$diskon = 0;

if ($biaya >= 5000000 && $semester > 8){
    $diskon = 15;
} elseif ($biaya >= 5000000){
    $diskon = 10;
} else{
    $diskon = 0;
}

$potongan = $biaya * $diskon / 100;
$bayar = $biaya - $potongan;

echo "<h2>Hasil Output</h2>";
echo "NPM: $npm <br>";
echo "Nama: $name <br>";
echo "Prodi: $prodi <br>";
echo "Semester: $semester <br>";
echo "Biaya UKT: Rp. " .number_format($biaya, 0, ',', '.'). "<br>";
echo "Diskon: $diskon% <br>";
echo "Jumlah yang harus dibayarkan: Rp. " .number_format($bayar, 0, ',', '.'). "<br>";
?>