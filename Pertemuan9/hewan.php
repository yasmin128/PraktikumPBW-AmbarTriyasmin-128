<?php
include 'header.php';
?>

<h2>Menampilkan nama Hewan</h2>

<?php
$hewan = ["Ayam", "Kucing", "Burung", "Capybara", "Ikan"];

foreach($hewan as $nama){
    echo "- $nama<br>";
}
?>