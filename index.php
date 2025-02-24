<?php
include("koneksi.php");

$query = mysqli_query($connection, "SELECT * FROM pegawai");
if (!$query) {
    die("Query error: " . mysqli_error($connection));
}
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>LIST PEGAWAI</title>
    <link rel="stylesheet" href="list.css">

</head>

<body>
    <h1>LIST PEGAWAI</h1>
    <form method="GET" action="search.php">
        <input type="text" name="keyword" placeholder="Ketikkan pencarian..." />
        <button type="submit">Cari</button>
    </form>
    <br>
    <a href="add.php">
    <button style="margin-bottom: 10px; padding: 10px; background-color: blue; color: white; border: none; cursor: pointer;">
        + Tambah Data
    </button>
</a>
<a href="jabatan.php">
        <button style="padding: 10px; background-color: blue; color: white; border: none; cursor: pointer;">
            Jabatan
        </button>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Tlp</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php if (count($result) > 0): ?>
                <?php foreach ($result as $index => $pegawai): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><a href="profile.php?id=<?= $pegawai['id'] ?>"><?= $pegawai['nama'] ?></a></td>
                        <td><?= $pegawai['jenis_kelamin'] ?></td>
                        <td><?= $pegawai['alamat'] ?></td>
                        <td><?= $pegawai['tempat_lahir'] ?></td>
                        <td><?= date("d M Y", strtotime($pegawai['tgl_lahir'])) ?></td>
                        <td><?= $pegawai['tlp'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $pegawai['id'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $pegawai['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>