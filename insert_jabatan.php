<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($connection, $_POST['nama']);
    $posisi = mysqli_real_escape_string($connection, $_POST['posisi']);
    $kontrak_kerja = mysqli_real_escape_string($connection, $_POST['kontrak_kerja']);

    try {
        $query = "INSERT INTO jabatannn (nama, posisi, kontrak_kerja) VALUES ('$nama', '$posisi', '$kontrak_kerja')";
        if (!mysqli_query($connection, $query)) {
            throw new Exception("Error: " . mysqli_error($connection));
        }
        header("Location: jabatan.php");
    } catch (Exception $e) {
        echo "Gagal menyimpan data: " . $e->getMessage();
    }
}
?>
