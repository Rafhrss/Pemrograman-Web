// 2. Dummy API dengan data cuaca untuk 5 kota di Indonesia
const dummyApiData = {
    "Jakarta": {
        temperature: 30,
        condition: "Cerah",
        icon: "images/panas.png"
    },
    "Bandung": {
        temperature: 25,
        condition: "Gerimis",
        icon: "images/hujan.png"
    },
    "Surabaya": {
        temperature: 33,
        condition: "Panas Terik",
        icon: "images/panas.png"
    },
    "Medan": {
        temperature: 28,
        condition: "Mendung",
        icon: "images/mendung.png"
    },
    "Samarinda": {
        temperature: 29,
        condition: "Mendung",
        icon: "images/mendung.png"
    },
    "Paser": {
        temperature: 20,
        condition: "Hujan deras",
        icon: "images/hujan_petir.png"
    },
    "Tarakan": {
        temperature: 35,
        condition: "Panas Terik",
        icon: "images/panas.png"
    },
    "Sangatta": {
        temperature: 31,
        condition: "Hujan Deras",
        icon: "images/hujan_petir.png"
    },
    "Tenggarong": {
        temperature: 24,
        condition: "Gerimis",
        icon: "images/hujan.png"
    },
    "Balikpapan": {
        temperature: 30,
        condition: "Cerah",
        icon: "images/panas.png"
    },
};

// --- Memilih elemen dari HTML untuk dimanipulasi ---
const searchForm = document.getElementById('search-form');
// PERUBAHAN: cityInput diganti menjadi citySelect
const citySelect = document.getElementById('city-select'); 
const temperatureEl = document.getElementById('temperature');
const conditionEl = document.getElementById('condition');
const locationEl = document.getElementById('location');
const weatherIconEl = document.getElementById('weather-icon');
const dateMonthEl = document.getElementById('month');
const dateDayEl = document.getElementById('day');
const errorMessageEl = document.getElementById('error-message');

// PERUBAHAN: Fungsi capitalizeFirstLetter tidak lagi diperlukan karena dropdown memberikan nama kota yang sudah benar.
// function capitalizeFirstLetter(string) {
//     return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
// }


// Fungsi utama untuk update UI dan console
function updateWeather(cityName) {
    // PERUBAHAN: Tidak perlu memformat nama kota karena berasal dari dropdown
    const formattedCityName = cityName.trim(); 
    const weatherData = dummyApiData[formattedCityName];

    if (weatherData) {
        // Jika kota ditemukan, update tampilan web
        temperatureEl.textContent = `${weatherData.temperature}°`;
        conditionEl.textContent = weatherData.condition;
        locationEl.textContent = `${formattedCityName}, Indonesia`;
        weatherIconEl.src = weatherData.icon;
        
        // Tampilkan kartu cuaca & sembunyikan pesan error
        document.getElementById('weather-card').classList.remove('hidden');
        errorMessageEl.classList.add('hidden');
        
        // 3. Tampilkan data di console.log
        console.log(`Cuaca di ${formattedCityName}:`);
        console.log(`Suhu: ${weatherData.temperature}°C`);
        console.log(`Kondisi: ${weatherData.condition}`);
        console.log('--------------------');

    } else {
        // Jika kota tidak ditemukan, tampilkan pesan error
        document.getElementById('weather-card').classList.add('hidden');
        errorMessageEl.classList.remove('hidden');
        console.log(`Data untuk kota "${formattedCityName}" tidak ditemukan.`);
    }
}

// Fungsi BARU: Mengisi dropdown dengan kota dari dummyApiData
function populateCityDropdown() {
    // Ambil semua kunci (nama kota) dari objek data cuaca
    const cities = Object.keys(dummyApiData);

    cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city; // Nilai yang akan diambil JS
        option.textContent = city; // Teks yang dilihat pengguna
        citySelect.appendChild(option);
    });
}


// Event listener untuk form submission (saat tombol 'Lihat' diklik)
searchForm.addEventListener('submit', function(event) {
    // Mencegah halaman refresh saat form disubmit
    event.preventDefault(); 
    
    // PERUBAHAN: Ambil nilai dari elemen select
    const userCity = citySelect.value;
    if (userCity) {
        updateWeather(userCity);
    }
});

// Event listener TAMBAHAN: Memicu pembaruan saat dropdown diganti (opsional)
// Jika Anda ingin cuaca langsung diperbarui tanpa menekan tombol 'Lihat', gunakan ini:
citySelect.addEventListener('change', function() {
    const userCity = citySelect.value;
    if (userCity) {
        updateWeather(userCity);
    }
});


// Fungsi untuk menampilkan tanggal saat ini
function displayCurrentDate() {
    const now = new Date();
    const months = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"];
    
    dateMonthEl.textContent = months[now.getMonth()];
    dateDayEl.textContent = now.getDate();
}

// --- Inisialisasi halaman ---
// 1. Panggil fungsi untuk mengisi dropdown
populateCityDropdown();
// 2. Panggil fungsi tanggal saat halaman pertama kali dimuat
displayCurrentDate(); 
// 3. Tampilkan data cuaca default (misalnya Samarinda) saat halaman dimuat
// PERUBAHAN: Lebih baik menggunakan nilai default dari dropdown agar konsisten
// updateWeather("Samarinda"); 