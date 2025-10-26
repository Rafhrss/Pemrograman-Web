<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung selisih dua buah waktu</title>
</head>
<body>
    <h1>Menghitung selisih dua buah waktu</h1>
    <?php
    $jam1 = 12;
    $menit1 = 25;
    $detik1 = 31;
    $jam2 = 10;
    $menit2 = 34;
    $detik2 = 45;
    $totalDetik1 = $jam1 * 3600 + $menit1 * 60 + $detik1; // menghitung total detik untuk waktu pertama
    $totalDetik2 = $jam2 * 3600 + $menit2 * 60 + $detik2; // menghitung total detik untuk waktu kedua
    $selisih = $totalDetik1 - $totalDetik2; // hitung selisih total detik dari kedua waktu
    echo "<p>Selisih dari kedua waktu adalah " . $selisih . " detik</p>";
    ?>
</body>
</html>