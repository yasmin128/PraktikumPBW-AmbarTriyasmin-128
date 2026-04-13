<?php
include 'header.php';
?>

<h2>Mencetak bilangan genap 2 - 10</h2>

<?php
for ($i = 2; $i <= 10; $i++) {
    if($i % 2 === 0){
        echo "Bilangan genap dari 2 sampai 10: $i<br>";
    }
}
?>