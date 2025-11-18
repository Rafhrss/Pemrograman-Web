<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji</title>
</head>
<body>
    <h1>Hasil Perhitungan Upah</h1>
    <?php
    if (isset($_POST['jam_kerja'])) {
        $jam_kerja = (int)$_POST['jam_kerja'];
        $batas_normal = 48;
        $upah_normal = 2000;
        $upah_lembur = 3000;
        
        $jam_normal = 0;
        $jam_lembur = 0;
        $total_upah = 0;

        if ($jam_kerja > $batas_normal) {
            $jam_normal = $batas_normal;
            $jam_lembur = $jam_kerja - $batas_normal;
            
            $upah_gaji_normal = $jam_normal * $upah_normal;
            $upah_gaji_lembur = $jam_lembur * $upah_lembur;
            $total_upah = $upah_gaji_normal + $upah_gaji_lembur;
            
        } else {
            $jam_normal = $jam_kerja;
            $jam_lembur = 0;
            
            $total_upah = $jam_normal * $upah_normal;
            $upah_gaji_normal = $total_upah;
            $upah_gaji_lembur = 0;
        }

        $upah_normal_formatted = number_format($upah_gaji_normal, 0, ',', '.');
        $upah_lembur_formatted = number_format($upah_gaji_lembur, 0, ',', '.');
        $total_upah_formatted = number_format($total_upah, 0, ',', '.');

        echo "<h2>Ringkasan Gaji</h2>";
        echo "<p>Jumlah Jam Kerja Total: $jam_kerja jam</p>";
        echo "<p>Jam Kerja Normal (Rp 2.000jam): $jam_normal jam (Upah: Rp $upah_normal_formatted)</p>";
        echo "<p>Jam Lembur (Rp 3.000jam): $jam_lembur jam (Upah: Rp $upah_lembur_formatted)</p>";
        echo "<h3>Total Upah yang Diterima: Rp $total_upah_formatted</h3>";

    } else {
        echo "<p>Silakan masukkan jumlah jam kerja melalui form pada halaman sebelumnya.</p>";
    }
    ?>
    <p><a href="soal2.php">Kembali ke Form</a></p>
</body>
</html>