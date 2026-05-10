<?php
session_start();
include 'koneksi.php';

// proses jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek user di database
    $stmt = $conn->prepare("
        SELECT id, username, password
        FROM users
        WHERE username = ? AND password = ?
    ");

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    // validasi login
    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;

    } else {

        header("Location: login.php?message=" . urlencode("Email atau Password salah!"));
        exit;

    }

    $stmt->close();

}
?>