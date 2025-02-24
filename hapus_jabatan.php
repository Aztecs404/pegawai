<?php
include("koneksi.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    try {
        $query = "DELETE FROM jabatannn WHERE id = $id";
        if (!mysqli_query($connection, $query)) {
            throw new Exception("Error: " . mysqli_error($connection));
        }
        header("Location: jabatan.php");
    } catch (Exception $e) {
        echo "Gagal menghapus data: " . $e->getMessage();
    }
} else {
    echo "ID tidak valid.";
}
?>
