<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($connection, $_POST['nama']);
    $jenis_kelamin = mysqli_real_escape_string($connection, $_POST['jenis_kelamin']);
    $alamat = mysqli_real_escape_string($connection, $_POST['alamat']);
    $tempat_lahir = mysqli_real_escape_string($connection, $_POST['tempat_lahir']);
    $tgl_lahir = mysqli_real_escape_string($connection, $_POST['tgl_lahir']);
    $tlp = mysqli_real_escape_string($connection, $_POST['tlp']);

    try {
        $query = "INSERT INTO pegawai (nama, jenis_kelamin, alamat, tempat_lahir, tgl_lahir, tlp)
                  VALUES ('$nama', '$jenis_kelamin', '$alamat', '$tempat_lahir', '$tgl_lahir', '$tlp')";
        if (!mysqli_query($connection, $query)) {
            throw new Exception("Error: " . mysqli_error($connection));
        }
        header("Location: index.php");
    } catch (Exception $e) {
        echo "Gagal menyimpan data: " . $e->getMessage();
    }
}
?>