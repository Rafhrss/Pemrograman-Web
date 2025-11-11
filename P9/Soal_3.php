<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Pendaftaran Mahasiswa Baru Universitas X</h1>
    
    <form method="post" action="Soal_3proses.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" size="50"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <?php for ($i = 1; $i <= 31; $i++) {
                        echo "<option value=\"$i\">" . str_pad($i, 2, '0', STR_PAD_LEFT) . "</option>";
                        } ?>
                    </select>
                    
                    <select name="bln">
                        <?php for ($i = 1; $i <= 12; $i++) {
                        echo "<option value=\"$i\">" . str_pad($i, 2, '0', STR_PAD_LEFT) . "</option>";
                        } ?>
                    </select>
                    
                    <select name="thn">
                        <?php for ($i = 2006; $i >= 1980; $i--) {
                        echo "<option value=\"$i\">$i</option>";
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="50" ></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kelamin" value="Pria" checked> Pria
                    <input type="radio" name="kelamin" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" size="50"></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai_uan" size="10"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br>
                    <input type="submit" name="submit" value="Kirim Data">
                    <input type="reset" name="reset" value="Hapus Data">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>