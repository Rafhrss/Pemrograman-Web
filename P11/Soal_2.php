<?php
// Inisialisasi variabel penghitung solusi
$jumlah_penyelesaian = 0;

// Output header
echo "<h2>Solusi Persamaan X + Y + Z = 25</h2>";
echo "<p>Mencari pasangan bilangan asli (X, Y, Z) yang memenuhi persamaan.</p>";
echo "<hr>";

// Batas atas iterasi yang mungkin adalah 23 (karena 1 + 1 + 23 = 25)
$MAX_ITERATION = 23;

// Loop 1 (untuk X)
// X dimulai dari 1 dan maksimum 23
for ($x = 1; $x <= $MAX_ITERATION; $x++) {
    
    // Loop 2 (untuk Y)
    // Y dimulai dari 1. Kita bisa optimasi batasnya: y <= 25 - x - 1
    for ($y = 1; $y <= $MAX_ITERATION; $y++) {
        
        // Loop 3 (untuk Z)
        // Z dimulai dari 1. Kita bisa optimasi batasnya: z <= 25 - x - y
        for ($z = 1; $z <= $MAX_ITERATION; $z++) {
            
            // Periksa apakah pasangan (x, y, z) memenuhi persamaan
            if ($x + $y + $z == 25) {
                
                // Jika memenuhi, cetak pasangan tersebut
                echo "x = ".$x.", y = ".$y.", z = ".$z."<br>";
                
                // Tambahkan hitungan solusi
                $jumlah_penyelesaian++;
            }
            
            // *** OPTIMASI PENTING (Break/Lompat Cepat) ***
            // Jika jumlah (x + y + z) sudah melebihi 25, 
            // tidak perlu melanjutkan iterasi Z (karena Z akan terus bertambah)
            if ($x + $y + $z > 25) {
                break;
            }
        }
    }
}

// Output total jumlah penyelesaian
echo "<hr>";
echo "<h3>Jumlah penyelesaian: ". $jumlah_penyelesaian . " pasangan</h3>";
?>