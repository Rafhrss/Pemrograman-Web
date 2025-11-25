<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Tabungan</title>
</head>
<body>
    <h2>Input Saldo dan Jangka Waktu</h2>
    <form action="Soal_1Proses.php" method="POST">
        <label for="saldo_awal">Saldo Awal (Rp):</label>
        <input type="number" name="saldo_awal"><br><br>
        
        <label for="n_bulan">Jangka Waktu (N Bulan):</label>
        <input type="number" name="n_bulan"><br><br>
        
        <input type="submit" value="Hitung Saldo Akhir">
    </form>
</body>
</html>