// ambil elemen
const tombol = document.getElementById('btn');
const teks = document.getElementById('teks');

// event click tombol
tombol.addEventListener('click', function () {
    teks.textContent = 'teks berhasil diubah dengan javascript!';
    teks.style.color = 'green';
});


