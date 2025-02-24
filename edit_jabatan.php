<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM jabatannn WHERE id = $id");
$jabatan = mysqli_fetch_assoc($query);
?>

<h1>Ubah Jabatan</h1>

<form method="POST" action="update_jabatan.php">
    <input type="hidden" name="id" value="<?= $jabatan['id'] ?>" />

    <label>Nama Jabatan</label><br>
    <input type="text" name="nama" value="<?= $jabatan['nama'] ?>" />
    <br><br>

    <label>Posisi</label><br>
    <input type="text" name="posisi" value="<?= $jabatan['posisi'] ?>" />
    <br><br>

    <label>Kontrak Kerja</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Tetap</option>
            <option value="Perempuan">Kontrak</option>
            <option value="Perempuan">Magang</option>

        </select><br><br>


    <button type="submit">Ubah</button>
    <br><br>
    <a href="list_jabatan.php">Kembali</a>
</form>
