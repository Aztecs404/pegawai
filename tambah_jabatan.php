<html>
<body>
    <h1>Tambah Jabatan</h1>
    <form method="post" action="insert_jabatan.php">
        <label>Nama</label><br>
        <input type="text" name="nama" required /><br><br>

        <label>Posisi</label><br>
        <input type="text" name="posisi" required /><br><br>

        <label>Kontrak Kerja</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Tetap</option>
            <option value="Perempuan">Kontrak</option>
            <option value="Perempuan">Magang</option>

        </select><br><br>

        <button type="submit">Tambah</button><br><br>
        <a href="jabatan.php">Kembali</a>
    </form>
</body>
</html>
