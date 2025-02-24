<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tlp = $_POST['tlp'];

    $query = "UPDATE pegawai SET 
        nama = '$nama', 
        jenis_kelamin = '$jenis_kelamin', 
        alamat = '$alamat', 
        tempat_lahir = '$tempat_lahir', 
        tgl_lahir = '$tgl_lahir', 
        tlp = '$tlp' 
        WHERE id = '$id'";

    if (mysqli_query($connection, $query)) {
        echo "Data berhasil diperbarui";
        header("Location: index.php");
    } else {
        echo "Gagal update database: " . mysqli_error($connection);
    }
}
?>
