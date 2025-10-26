<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Gaji Bersih Karyawan</title>
</head>
<body>
    <h1>Menghitung Gaji Bersih Karyawan</h1>
    <?php
    // CARA KE - 1
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $pajak = 0.15 * $gajiKotor; // hitung pajak
    
    $gajiBersih = $gajiKotor - $pajak; // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . ".</p>"; // menampilkan gaji bersih

    // CARA KE - 2
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $gajiBersih = $gajiKotor - (0.15 * $gajiKotor); // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . ".</p>"; // menampilkan gaji bersih

    // CARA KE - 3
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan); // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . ".</p>"; // menampilkan gaji bersih
    ?>
</body>
</html>