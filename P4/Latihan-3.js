function cekKelulusan () {
    console.clear();
    let nilai = document.getElementById('nilai').value;

    if (nilai === ''){
        console.log('silahkan masukan nilai terlebih dahulu');
        return;
    }

    nilai = parseInt(nilai);

    if (nilai >= 70) {
        console.log('nilai anda: ',nilai,' status lulus')
    }
    else {
        console.log('nilai anda: ',nilai,' status tidak lulus')
    }
}