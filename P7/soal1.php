<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <?php
    $saldoAwal = 1000000; // Saldo awal: Rp. 1.000.000,-
    $bunga = 0.0025; // Bunga per bulan: 0,25% (0.25 / 100)
    $bulan = 11; // Jangka waktu: 11 bulan

    $bungaTotal = $saldoAwal * $bunga * $bulan;
    $saldoAkhir = $saldoAwal + $bungaTotal;
    echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ",-";
    ?>
</body>
</html>
