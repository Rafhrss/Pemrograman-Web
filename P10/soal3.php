<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Berdasarkan Golongan</title>
</head>
<body>
    <h1>Hitung Upah Karyawan Berdasarkan Golongan</h1>
    
    <form method="post" action="soal3proses.php">
        
        <label for="golongan">Pilih Golongan Karyawan:</label>
        <select name="golongan" id="golongan" required>
            <option value="">Pilih Golongan</option>
            <option value="A">A (Rp 4.000 /jam)</option>
            <option value="B">B (Rp 5.000 /jam)</option>
            <option value="C">C (Rp 6.000 /jam)</option>
            <option value="D">D (Rp 7.500 /jam)</option>
        </select>
        <br><br>
        
        <label for="jam_kerja">Masukkan Jumlah Jam Kerja Seminggu (jam):</label>
        <input type="number" name="jam_kerja" id="jam_kerja" required min="0">
        <br><br>
        
        <input type="submit" name="submit" value="Hitung Upah">
    </form>
</body>
</html>