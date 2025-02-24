<html>

<body>
    <h1>Tambah Data</h1>
    <form method="post" action="insert.php">
        <label>Nama</label><br>
        <input type="text" name="nama" required /><br><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Tempat Lahir</label><br>
        <input type="text" name="tempat_lahir" required /><br><br>

        <label>Tanggal Lahir</label><br>
        <input type="date" name="tgl_lahir" required /><br><br>

        <label>Telepon</label><br>
        <input type="text" name="tlp" required /><br><br>

        <button type="submit">Tambah</button><br><br>
        <a href="index.php">Kembali</a>
    </form>
</body>

</html>