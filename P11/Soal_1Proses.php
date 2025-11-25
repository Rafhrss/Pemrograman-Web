<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil input dari form
    $saldo_saat_ini = (int)$_POST['saldo_awal'];
    $n_bulan        = (int)$_POST['n_bulan'];
    
    // Konstanta berdasarkan soal
    $BATAS_BUNGA    = 1100000; // Batas saldo untuk penentuan bunga
    $BIAYA_ADMIN    = 9000;    // Biaya admin bulanan
    
    // Header Sederhana
    echo "<h2>Hasil Perhitungan Saldo Tabungan</h2>";
    echo "<p>Saldo Awal: Rp ".number_format($saldo_saat_ini, 0, ',', '.').",-</p>";
    echo "<p>Jangka Waktu: ".$n_bulan." bulan</p>";
    echo "<hr>";
    
    // Loop Perhitungan
    for ($i = 1; $i <= $n_bulan; $i++) {
        
        // 1. Tentukan Bunga Tahunan berdasarkan saldo saat ini
        if ($saldo_saat_ini < $BATAS_BUNGA) {
            $bunga_tahunan = 0.03; // 3% p.a
        } else {
            $bunga_tahunan = 0.04; // 4% p.a
        }
        
        // 2. Hitung Bunga Bulanan
        $bunga_bulanan = $saldo_saat_ini * ($bunga_tahunan / 12);
        
        // 3. Hitung Perubahan Bersih (Net Change)
        // Perhitungan bunga dihitung dari saldo terakhir, dan dikenai biaya administrasi
        $net_change = $bunga_bulanan - $BIAYA_ADMIN;
        
        // 4. Update Saldo
        $saldo_saat_ini += $net_change;
        
    }
    
    // Tampilkan Saldo Akhir
    echo "<h3>Saldo Akhir setelah ".$n_bulan." bulan adalah:</h3>";
    echo "<h1>Rp ".number_format(round($saldo_saat_ini), 0, ',', '.').",-</h1>";
    echo "<p><a href='Soal_1.php'>&laquo; Hitung Ulang</a></p>";

} else {
    // Redirect jika diakses langsung tanpa form
    header("Location: Soal_1.php");
    exit;
}
?>