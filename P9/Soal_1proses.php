<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <?php
        $saldoAwal = $_POST['saldo_awal'];
        $bunga = $_POST['bunga'];
        $bulan = $_POST['bulan'];
    
        $bungaTotal = $saldoAwal * $bunga * $bulan; 
        $bungaPerBulan = $saldoAwal * ($bunga / 100); 
        $saldoAkhir = $saldoAwal + ($bungaPerBulan * $bulan); 
        echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . number_format($saldoAkhir, 0, ',', '.') . "";
    ?>
</body>
</html>
