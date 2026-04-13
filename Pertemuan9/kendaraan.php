<?php
include 'header.php';
?>

<h2>Menentukan Jenis Kendaraan</h2>
<form method="post">
    <label for="roda">Jumlah Roda: </label>
    <input type="number" name="roda" required>
    <input type="submit" value="proses">
</form>

<?php
if (isset($_POST['roda'])){
    $roda = (int) $_POST['roda'];

    switch ($roda){
        case 2:
            echo "Sepeda Motor.";
            break;
        case 3:
            echo "Becak atau Bajaj.";
            break;
        case 4:
            echo "Mobil.";
            break;
        case 6:
            echo "Truk.";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui.";
            break;
    }
}
?>