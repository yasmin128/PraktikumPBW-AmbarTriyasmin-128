<?php
// data barang dalam array
$arr = array(
    "Keyboard" => 150000,
    "Camera" => 2000000,
);

//pajak dalam konstanta
define("PAJAK", 0.10);

//nilai
$namabarang = "Keyboard";
$jumlahbeli = 2;

echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2>";
echo "<hr/>";
echo "Nama Barang: ".$namabarang."<br/>";
echo "Harga Satuan: Rp. ".$arr[$namabarang]."<br/>";
echo "Harga Beli: ".$jumlahbeli."<br/>";
echo "Total harga (Sebelum Pajak): Rp. ".$jumlahbeli*$arr[$namabarang]."<br/>";
echo "Pajak (10%): Rp. ".PAJAK*$jumlahbeli*$arr[$namabarang]."<br/>";
echo "<b>Total Bayar: Rp. ".$jumlahbeli*$arr[$namabarang] + PAJAK*$jumlahbeli*$arr[$namabarang]."</b>";

?>