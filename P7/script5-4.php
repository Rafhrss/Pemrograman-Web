<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi jumlah detik ke satuan jam-menit-detik</title>
</head>
<body>
    <h1>Konversi jumlah detik ke satuan jam-menit-detik</h1>
    <?php
    $totalDetik = 15789;

    // mencari waktu dalam jam
    $sisa = $totalDetik % 3600;
    $dalamJam = ($totalDetik - $sisa) / 3600;

    // sisa dari perhitungan jam digunakan untuk menghitung menitnya
    $totalDetik = $sisa;
    $sisa = $totalDetik % 60;
    $dalamMenit = ($totalDetik - $sisa) / 60;

    // sisa dalam perhitungan menit digunakan untuk menghitung detiknya
    $totalDetik = $sisa;
    $sisa = $totalDetik % 1;
    $dalamDetik = ($totalDetik - $sisa) / 1;

    echo "<p>Hasil konversinya adalah : " . $dalamJam . " jam : " . $dalamMenit . " menit : " . $dalamDetik . " detik</p>";
    ?>
</body>
</html>