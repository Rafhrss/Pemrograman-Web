<html>
<head>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $tempatLahir = $_POST['tempat_lahir'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $asalSekolah = $_POST['asal_sekolah'];
        $nilaiUAN = $_POST['nilai_uan'];
        $tanggalLahirLengkap = str_pad($tgl, 2, '0', STR_PAD_LEFT) . "-" . str_pad($bln, 2, '0', STR_PAD_LEFT) . "-" . $thn;
        $namaUntukUcapan = empty($nama) ? "Anda" : $nama;

        echo "<h2>Terimakasih $namaUntukUcapan sudah mengisi form pendaftaran.</h2>";
        echo "<table>";
        
        echo "<tr>";
        echo "<td>Nama Lengkap</td>";
        echo "<td>:</td>";
        echo "<td>$nama</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Tempat Lahir</td>";
        echo "<td>:</td>";
        echo "<td>$tempatLahir</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Tanggal Lahir</td>";
        echo "<td>:</td>";
        echo "<td>$tanggalLahirLengkap</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Alamat Rumah</td>";
        echo "<td>:</td>";
        echo "<td>$alamat</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Jenis Kelamin</td>";
        echo "<td>:</td>";
        echo "<td>$kelamin</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Asal Sekolah</td>";
        echo "<td>:</td>";
        echo "<td>$asalSekolah</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Nilai UAN</td>";
        echo "<td>:</td>";
        echo "<td>$nilaiUAN</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>