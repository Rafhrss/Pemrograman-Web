<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari Dalam Bulan</title>
</head>
<body>
    <h1>Menghitung Jumlah Hari Bulan Saat Ini</h1>
    
    <?php
    $bulan_saat_ini = date('n'); 
    $nama_bulan_saat_ini = date('F');
    $tahun_saat_ini = date('Y');
    $jumlah_hari = 0;
    
    switch ($bulan_saat_ini) {
        // Bulan yang memiliki 31 hari: 1, 3, 5, 7, 8, 10, 12
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $jumlah_hari = 31;
            break;

        // Bulan yang memiliki 30 hari: 4, 6, 9, 11
        case 4:
        case 6:
        case 9:
        case 11:
            $jumlah_hari = 30;
            break;

        // Bulan Februari (Kasus Khusus: 28 atau 29 hari)
        case 2:
            // Cek apakah tahun saat ini adalah tahun kabisat
            if (($tahun_saat_ini % 400 == 0) || (($tahun_saat_ini % 4 == 0) && ($tahun_saat_ini % 100 != 0))) {
                $jumlah_hari = 29;
            } else {
                $jumlah_hari = 28;
            }
            break;

        default:
            $jumlah_hari = "Bulan tidak valid";
            break;
    }

    echo "<p>Bulan saat ini adalah $nama_bulan_saat_ini ($bulan_saat_ini) tahun $tahun_saat_ini.</p>";
    
    if ($jumlah_hari == 29 || $jumlah_hari == 28) {
        echo "<p>Jumlah hari di bulan $nama_bulan_saat_ini adalah $jumlah_hari hari.</p>";
        if ($jumlah_hari == 29) {
            echo "<p>(Tahun ini, $tahun_saat_ini, adalah Tahun Kabisat.)</p>";
        } else {
            echo "<p>(Tahun ini, $tahun_saat_ini, bukan Tahun Kabisat.)</p>";
        }
    } elseif (is_numeric($jumlah_hari)) {
        echo "<p>Jumlah hari di bulan $nama_bulan_saat_ini adalah $jumlah_hari hari.</p>";
    } else {
        echo "<p>$jumlah_hari</p>";
    }
    ?>
</body>
</html>