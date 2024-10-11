<?php
require 'auth.php';
require 'db.php';
requireLogin();

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM lagu WHERE id = $id");

if ($result->num_rows > 0) {
    $lagu = $result->fetch_assoc();
} else {
    echo "Lagu tidak ditemukan";
    exit();
}
?>

<h1>Detail Lagu</h1>
<p><strong>Judul Lagu:</strong> <?= $lagu['judul_lagu'] ?></p>
<p><strong>Artis:</strong> <?= $lagu['artis'] ?></p>
<p><strong>Album:</strong> <?= $lagu['album'] ?></p>

<a href="index.php">Kembali ke Daftar Lagu</a>
<a href="Logout.php">Logout</a>

