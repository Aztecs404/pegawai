<?php
include("koneksi.php");

$query = mysqli_query($connection, "SELECT * FROM jabatannn");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>LIST JABATAN</title>
</head>
<body>
    <h1>LIST JABATAN</h1>
    <a href="tambah_jabatan.php">Tambah Jabatan</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Kontrak Kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($result) > 0): ?>
                <?php foreach ($result as $index => $jabatan): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $jabatan['nama'] ?></td>
                    <td><?= $jabatan['posisi'] ?></td>
                    <td><?= $jabatan['kontrak_kerja'] ?></td>
                    <td>
                        <a href="edit_jabatan.php?id=<?= $jabatan['id'] ?>">Edit</a> |
                        <a href="hapus_jabatan.php?id=<?= $jabatan['id'] ?>" onclick="return confirm('Hapus jabatan ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
