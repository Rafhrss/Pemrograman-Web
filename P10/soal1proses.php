<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pengecekan Tahun Kabisat</title>
</head>
<body>
    <h1>Hasil Pengecekan Tahun Kabisat</h1>
    <?php
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];
        $status_kabisat = "";
        if ($tahun % 400 == 0) {
            $status_kabisat = "Tahun $tahun adalah Tahun Kabisat (Habis dibagi 400).";
        } 
        else if (($tahun % 4 == 0) && ($tahun % 100 != 0)) {
            $status_kabisat = "Tahun $tahun adalah Tahun Kabisat (Habis dibagi 4 dan tidak habis dibagi 100).";
        } 
        else {
            $status_kabisat = "Tahun $tahun bukan Tahun Kabisat.";
        }
        echo "<p>Tahun yang Anda masukkan: $tahun</p>";
        echo "<p>Hasil Pengecekan: $status_kabisat</p>";
    } else {
        echo "<p>Silakan masukkan tahun melalui form pada halaman sebelumnya.</p>";
    }
    ?>
    <p><a href="soal1.php">Kembali ke Form</a></p>
</body>
</html>