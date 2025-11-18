<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji Golongan</title>
</head>
<body>
    <h1>Hasil Perhitungan Upah Karyawan</h1>
    <?php
    if (isset($_POST['jam_kerja']) && isset($_POST['golongan'])) {
        $jam_kerja = (int)$_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        $batas_normal = 48;
        $upah_lembur = 3000;
        
        $upah_normal_per_jam = 0;
        switch ($golongan) {
            case 'A':
                $upah_normal_per_jam = 4000;
                break;
            case 'B':
                $upah_normal_per_jam = 5000;
                break;
            case 'C':
                $upah_normal_per_jam = 6000;
                break;
            case 'D':
                $upah_normal_per_jam = 7500;
                break;
            default:
                echo "<p>Golongan yang dipilih tidak valid.</p>";
                exit; 
        }
        if ($jam_kerja > $batas_normal) {
            $jam_normal = $batas_normal;
            $jam_lembur = $jam_kerja - $batas_normal;
        } else {
            $jam_normal = $jam_kerja;
            $jam_lembur = 0;
        }

        $upah_gaji_normal = $jam_normal * $upah_normal_per_jam;
        $upah_gaji_lembur = $jam_lembur * $upah_lembur;
        $total_upah = $upah_gaji_normal + $upah_gaji_lembur;

        $upah_normal_formatted = number_format($upah_gaji_normal, 0, ',', '.');
        $upah_lembur_formatted = number_format($upah_gaji_lembur, 0, ',', '.');
        $total_upah_formatted = number_format($total_upah, 0, ',', '.');
        $upah_per_jam_formatted = number_format($upah_normal_per_jam, 0, ',', '.');

        echo "<h2>Ringkasan Gaji Karyawan Golongan $golongan</h2>";
        echo "<p>Upah Normal/Jam: Rp $upah_per_jam_formatted</p>";
        echo "<p>Upah Lembur/Jam: Rp 3.000</p>";
        echo "<p>Jam Kerja Normal (total $jam_normal jam): Rp $upah_normal_formatted</p>";
        echo "<p>Jam Lembur (total $jam_lembur jam): Rp $upah_lembur_formatted</p>";
        echo "<h3>Total Upah yang Diterima: Rp $total_upah_formatted</h3>";

    } else {
        echo "<p>Silakan lengkapi form input jam kerja dan golongan.</p>";
    }
    ?>
    <p><a href="soal3.php">Kembali ke Form</a></p>
</body>
</html>