<?php
include "koneksi.php";


$keyword = $_GET["keyword"];

$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($result);
?>

<html>
    <body>
        <h1>SEARCH PEGAWAI</h1>
        <form method="GET" action="search.php">
            <input type="text" name="keyword" placeholder="ketikkan pencarian..." />
            <button type="submit">Cari</button>
        </form>
        <br>
        <a href="add.php">Tambah Data</a> / <a href="list.php">Kembali</a>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $index => $pegawai): ?>
                <tr>
                    <td><?= $index+1 ?></td>
                    <td><a href="profile.php?id=<?= $pegawai['id'] ?>"><?= $pegawai["nama"] ?></a></td>
                    <td><?= $pegawai["jenis_kelamin"] ?></td>
                    <td><?= $pegawai["alamat"] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $pegawai['id'] ?>">Edit</a> / 
                        <a href="delete.php?id=<?= $pegawai['id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
