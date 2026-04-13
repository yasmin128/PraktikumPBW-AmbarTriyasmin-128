<?php
include 'header.php';
?>

<h2>Cek Angka Ganjil atau Genap</h2>

<form method="post">
    <label for="angka">Masukkan Angka: </label>
    <input type="number" name="angka" required>
    <input type="submit" value="Proses">
</form>

<?php
if (isset($_POST['angka'])){
    $angka = (int) $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "<b>Hasil:</b> Angka $angka adalah $hasil";
}
?>