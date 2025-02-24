<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);
?>

<h1>Ubah Data</h1>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $pegawai['id'] ?>" />

    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $pegawai['nama'] ?>" />
    <br><br>


    <label>Jenis Kelamin</label><br>
    <select name="jenis_kelamin">
        <option value="laki-laki" <?php if ($pegawai['jenis_kelamin'] == "laki-laki")
            echo "selected"; ?>>laki-laki
        </option>
        <option value="perempuan" <?php if ($pegawai['jenis_kelamin'] == "perempuan")
            echo "selected"; ?>>perempuan
        </option>
    </select>
    <br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"><?= $pegawai['alamat'] ?></textarea>
    <br><br>

    <label>Tempat Lahir</label><br>
    <input type="text" name="tempat_lahir" value="<?= $pegawai['tempat_lahir'] ?>" />
    <br><br>

    <label>Tanggal Lahir</label><br>
    <input type="date" name="tgl_lahir" value="<?= $pegawai['tgl_lahir'] ?>" />
    <br><br>

    <label>Telepon</label><br>
    <input type="text" name="tlp" value="<?= $pegawai['tlp'] ?>" />
    <br><br>

    <button type="submit">Ubah</button>
    <br><br>
    <a href="list.php">Kembali</a>
</form>