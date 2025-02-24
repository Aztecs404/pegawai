<?php
include "koneksi.php";

// Periksa apakah parameter `id` ada dan valid
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitasi input ID untuk memastikan hanya angka

    // Query untuk mendapatkan data pegawai berdasarkan ID
    $query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");

    // Periksa apakah data ditemukan
    if ($query && mysqli_num_rows($query) > 0) {
        $pegawai = mysqli_fetch_assoc($query);
    } else {
        echo "Data tidak ditemukan untuk ID: $id";
        exit;
    }
} else {
    echo "ID tidak valid. Pastikan parameter 'id' ada di URL dan berupa angka.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai</title>
</head>
<body>
    <h3>Profil Pegawai: <?= htmlspecialchars($pegawai["nama"]) ?></h3>

    <label>Jenis Kelamin:</label>
    <label><?= htmlspecialchars($pegawai["jenis_kelamin"]) ?></label>
    <br>

    <label>Alamat:</label>
    <label><?= htmlspecialchars($pegawai["alamat"]) ?></label>
    <br>

    <label>Tempat Lahir:</label>
    <label><?= htmlspecialchars($pegawai["tempat_lahir"]) ?></label>
    <br>

    <label>Tanggal Lahir:</label>
    <label><?= date("d M Y", strtotime($pegawai["tgl_lahir"])) ?></label>
    <br>

    <label>Telepon:</label>
    <label><?= htmlspecialchars($pegawai["tlp"]) ?></label>
    <br>

    <br>
    <a href="list.php">Kembali</a>
</body>
</html>
