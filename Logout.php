<?php
session_start(); // Mulai session
session_destroy(); // Hapus semua session
header("Location: Login.php"); // Arahkan ke halaman login
exit();
?>