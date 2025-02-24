<?php
// koneksi.php
try {
    $connection = mysqli_connect("localhost", "root", "", "Db_aryasky");
    if (!$connection) {
        throw new Exception("Koneksi gagal: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
