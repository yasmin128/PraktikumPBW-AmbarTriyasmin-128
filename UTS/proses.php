<?php
$npm = $_POST['nim'] ?? '';
$name = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$layanan = $_POST['layanan'] ?? 'Reguler';

$hargaBarang = [
    "Pulpen" => 5000,
    "Pensil" => 2000,
    "Penghapus" => 1000,
    "Buku" => 5000,
];

$barangdipilih = $_POST['barang'] ?? [];
$jumlah = $_POST['jumlah'] ?? [];

$subtotal = 0;
$dataBelanja = [];

foreach ($barangdipilih as $item) {
    $qty = $jumlah[$item] ?? 0;
    $harga = $hargaBarang[$item] ?? 0;
    $totalItem = $harga * $qty;

    $subtotal += $totalItem;

    $dataBelanja[] = [
        'nama' => $item,
        'harga' => $harga,
        'qty' => $qty,
        'total' => $totalItem
    ];
}

define("PAJAK", 0.15);
$pajak = $subtotal * PAJAK;

// Biaya layanan
if ($layanan == "Prioritas") {
    $biayaLayanan = 10000;
} else {
    $biayaLayanan = 0;
}

$total = $subtotal + $pajak + $biayaLayanan;

echo "Nama: ".$username."<br/>";
echo "NIM: ".$npm."<br/>";
echo "Email: ".$email."<br/>";
echo "Total harga: ".$subtotal."<br/>";
?>