<?php
require 'auth.php';
requireLogin();
require 'db.php';

$result = $conn->query("SELECT * FROM lagu");

?>

<h1>Daftar Lagu</h1>
<ul>
<?php while ($row = $result->fetch_assoc()): ?>
    <li>
        <a href="detail_lagu.php?id=<?= $row['id'] ?>">
            <?= $row['judul_lagu'] ?> oleh <?= $row['artis'] ?>
        </a>
    </li>
<?php endwhile; ?>
</ul>

<a href="Logout.php">Logout</a>
