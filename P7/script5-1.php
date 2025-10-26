<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
    $nilaiJual = 1500000; // nilai penjualan yang didapat salesman
    $komisi = 0.05 * $nilaiJual; // menghitung komisi yaitu 5% dari nilai penjualan
    echo "<p>Nilai penjualan salesman : Rp. " . $nilaiJual . ".</p>"; // menampilkan nilai penjualan salesman
    echo "<p>Komisi yang didapat salesman adalah Rp. " . $komisi . ".</p>";
    // menampilkan hasil perhitungan komisi
    ?>
</body>
</html>