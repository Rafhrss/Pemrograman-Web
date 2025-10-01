function runExercises() {
    console.clear(); // bersihkan console sebelum jalan

    // soal 1 const
    const universitas = 'Universitas Muhammadiyah Kalimantan Timur';
    console.log('nama universitas: ',universitas);

    // soal 2 let
    let jumlahMahasiswa = 25;
    jumlahMahasiswa = jumlahMahasiswa + 5;
    console.log('jumlah mahasiswa sekarang: ',jumlahMahasiswa);

    // soal 3 string
    let namaLengkap = 'Rafa haris'
    console.log('halo, nama gue '+ namaLengkap)

    // soal 4 number
    let angka1 = 10;
    let angka2 = 5;
    console.log('hasil penjumlahan: ', angka1 + angka2);
    console.log('hasil pengurangan: ', angka1 - angka2);
    console.log('hasil perkalian: ', angka1 * angka2);
    console.log('hasil pembagian: ', angka1 / angka2);

    // soal 5 boolean
    let nilaiUjian = 80;
    let lulus = nilaiUjian >=70;
    console.log('apakah lulus?: ', lulus);
}


