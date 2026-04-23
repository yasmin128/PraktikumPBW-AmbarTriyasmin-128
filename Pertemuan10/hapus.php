<?php
include 'koneksi_db.php';
include 'nav.php';

// ambil data buku
$result = $conn->query("SELECT * FROM Buku");

if (!$result) {
    die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hapus Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h2>Hapus Buku</h2>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['ID'] ?></td>
            <td><?= htmlspecialchars($row['Judul']) ?></td>
            <td><?= htmlspecialchars($row['Penulis']) ?></td>
            <td><?= $row['Tahun_Terbit'] ?></td>
            <td>Rp<?= number_format($row['Harga'], 0, ',', '.') ?></td>
            <td>
              <a href="proses_hapus.php?id=<?= $row['ID'] ?>"
                 class="btn btn-danger btn-sm"
                 onclick="return confirm('Yakin ingin menghapus buku ini?')">
                 Hapus
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="6" class="text-center">Tidak ada data</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

</div>

</body>
</html>