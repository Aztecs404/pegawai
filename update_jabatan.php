<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $kontrak_kerja = $_POST['kontrak_kerja'];

    try {
        $query = "UPDATE jabatannn SET nama = '$nama', posisi = '$posisi', kontrak_kerja = '$kontrak_kerja' WHERE id = '$id'";
        if (!mysqli_query($connection, $query)) {
            throw new Exception("Error: " . mysqli_error($connection));
        }
        header("Location: jabatan.php");
    } catch (Exception $e) {
        echo "Gagal update database: " . $e->getMessage();
    }
}
?>
