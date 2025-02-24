<?php
include("koneksi.php"); // Pastikan file koneksi sudah di-include

// Validasi dan sanitasi input
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = intval($_GET["id"]); // Mengubah id menjadi integer untuk keamanan

    try {
        // Eksekusi query
        $query = "DELETE FROM pegawai WHERE id = $id";
        if (!mysqli_query($connection, $query)) {
            throw new Exception("Error: " . mysqli_error($connection));
        }
        
        // Redirect ke list.php setelah berhasil
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Gagal menghapus data: " . $e->getMessage();
    }
} else {
    echo "ID tidak valid.";
}
?>
