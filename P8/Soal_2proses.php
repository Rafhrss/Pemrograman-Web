<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <?php
    $jumlahUang = $_POST['jumlah_uang'];
    $sa = floor($jumlahUang / 100000);
    $sisaUang = $jumlahUang % 100000;
    
    $sb = floor($sisaUang / 50000);
    $sisaUang = $sisaUang % 50000;
    
    $sc = floor($sisaUang / 20000);
    $sisaUang = $sisaUang % 20000;
    
    $sd = floor($sisaUang / 5000);
    $sisaUang = $sisaUang % 5000;
    
    $se = floor($sisaUang / 100);
    $sisaUang = $sisaUang % 100;
    
    $sf = floor($sisaUang / 50);

    echo "<h1>Hasil Pemecahan Uang untuk Rp. ".number_format($jumlahUang, 0, ',', '.')."</h1>"; // Tambahan: Menampilkan judul
    echo "Jumlah Rp 100.000 : " . $sa . " lembar<br />";
    echo "Jumlah Rp 50.000 : " . $sb . " lembar<br />";
    echo "Jumlah Rp 20.000 : " . $sc . " lembar<br />";
    echo "Jumlah Rp 5.000 : " . $sd . " lembar<br />";
    echo "Jumlah Rp 100 : " . $se . " lembar<br />";
    echo "Jumlah Rp 50 : " . $sf . " lembar<br />";
    ?>
</body>
</html>