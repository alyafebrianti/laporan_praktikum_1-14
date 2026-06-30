# laporan_praktikum_1-14
# Nama : Alya Febrianti
# Kelas : I241A
# Nim : 312410692

## Halaman Login
<img width="1891" height="1013" alt="Cuplikan layar 2026-04-05 210334" src="https://github.com/user-attachments/assets/05924438-992c-4925-b501-8559186e3ddc" />

## Halaman Admin
<img width="1919" height="977" alt="Cuplikan layar 2026-04-01 173512" src="https://github.com/user-attachments/assets/d612c926-d7d4-4b81-9fd0-38acf6fa5efe" />

## Tampilan Kelola Artikel ada fitur hapus dan ubah
<img width="2861" height="1093" alt="image" src="https://github.com/user-attachments/assets/c014aa57-1bc4-49dd-bb8f-97ccd5ecb5ba" />
<img width="997" height="1098" alt="image" src="https://github.com/user-attachments/assets/38051484-3d78-40de-bac4-c0ba118802e0" />
<img width="1915" height="1009" alt="Cuplikan layar 2026-04-05 211200" src="https://github.com/user-attachments/assets/ba8f69f1-c3fd-48ff-bac2-e8675c9462f2" />

## Tambah Artikel
<img width="1919" height="1008" alt="Cuplikan layar 2026-04-05 211329" src="https://github.com/user-attachments/assets/202f8c10-4ff6-453c-ae8e-4d1696d242f9" />
<img width="2880" height="1800" alt="image" src="https://github.com/user-attachments/assets/97402e14-cb1a-40cf-9221-a12a878a5831" />

## Tampilan Layout Sederhana
<img width="1909" height="1008" alt="Cuplikan layar 2026-04-05 211504" src="https://github.com/user-attachments/assets/9c43885c-eaed-47c3-961e-2364e0602e5d" />

## Tampilan Artikel
<img width="1911" height="1004" alt="Cuplikan layar 2026-04-05 212152" src="https://github.com/user-attachments/assets/504af4c6-4374-4914-8c56-359c6f63cb7d" />

## Tampilan About
<img width="1917" height="1010" alt="Cuplikan layar 2026-04-05 211917" src="https://github.com/user-attachments/assets/beca69d1-14ba-4004-8750-8f5844ca65b3" />

## Tampilan Kontak
<img width="2880" height="1800" alt="image" src="https://github.com/user-attachments/assets/deb4163a-1a9d-4be0-a0f7-e890890b8339" />

## Logout
<img width="374" height="234" alt="image" src="https://github.com/user-attachments/assets/961e40d8-c8c5-4404-9f18-2c4c5e5b9b41" />

 saya mendokumentasikan langkah demi langkah perjalanan saya membangun platform web secara *End-to-End*, mulai dari konfigurasi dasar framework CodeIgniter 4, perancangan RESTful API, hingga integrasi *Frontend* modern sebagai *Single Page Application* (SPA) menggunakan VueJS.

Berikut adalah detail teknis pengerjaan dari setiap modul praktikum yang telah saya selesaikan:

---

# Laporan Praktikum Pemrograman Web 2

## Implementasi AJAX, REST API, dan VueJS pada Aplikasi Web Berbasis CodeIgniter 4

### Deskripsi

Proyek ini merupakan hasil praktikum Pemrograman Web 2 yang mencakup implementasi AJAX, REST API, VueJS, autentikasi, dan keamanan API menggunakan CodeIgniter 4 sebagai backend dan VueJS sebagai frontend.

---

## Praktikum yang Dikerjakan

### Praktikum 8 - AJAX CRUD

Fitur yang dibuat:

* Menampilkan data artikel
* Menambah artikel
* Mengubah artikel
* Menghapus artikel
* Semua proses menggunakan AJAX tanpa reload halaman

### Praktikum 9 - AJAX Pagination dan Search

Fitur yang dibuat:

* Pagination data artikel
* Pencarian artikel
* Filter kategori
* Sorting data
* Loading indicator

### Praktikum 10 - REST API

Membuat REST API menggunakan CodeIgniter 4 dengan endpoint:

* GET `/post`
* GET `/post/{id}`
* POST `/post`
* PUT `/post/{id}`
* DELETE `/post/{id}`

### Praktikum 11 - VueJS Dasar

Fitur yang dibuat:

* Menampilkan data artikel dari API
* Menambah data
* Mengubah data
* Menghapus data
* Integrasi Axios dengan REST API

### Praktikum 12 - VueJS SPA dan Routing

Fitur yang dibuat:

* Komponen VueJS
* Vue Router
* Navigasi tanpa reload halaman
* Halaman Home, Artikel, dan About

### Praktikum 13 - Autentikasi dan Navigation Guards

Fitur yang dibuat:

* Login
* Logout
* Penyimpanan token pada LocalStorage
* Proteksi halaman menggunakan Navigation Guards

### Praktikum 14 - Keamanan API dan Axios Interceptors

Fitur yang dibuat:

* Token Authentication
* API Filter pada CodeIgniter 4
* Axios Request Interceptor
* Axios Response Interceptor
* Penanganan error 401 secara otomatis

---

## Teknologi yang Digunakan

### Backend

* PHP 8.2
* CodeIgniter 4
* MySQL

### Frontend

* VueJS 3
* Vue Router
* Axios
* jQuery
* Bootstrap 5

### Tools

* XAMPP
* Visual Studio Code
* Postman
* Git

---

## Struktur Proyek

```text
ci4/
├── app/
├── public/
├── writable/
└── .env

lab8_vuejs/
├── index.html
├── assets/
│   ├── css/
│   └── js/
└── README.md
```

---

## Cara Menjalankan Aplikasi

### Backend

```bash
cd ci4
composer install
php spark serve
```

Akses:

```text
http://localhost:8080
```

### Frontend

Buka folder:

```text
lab8_vuejs
```

Kemudian jalankan menggunakan Live Server atau browser.

---

## Dokumentasi API

| Method | Endpoint   | Keterangan                 |
| ------ | ---------- | -------------------------- |
| GET    | /post      | Menampilkan semua artikel  |
| GET    | /post/{id} | Menampilkan detail artikel |
| POST   | /post      | Menambah artikel           |
| PUT    | /post/{id} | Mengubah artikel           |
| DELETE | /post/{id} | Menghapus artikel          |
| POST   | /api/login | Login pengguna             |



Repositori ini berisi kumpulan tugas praktikum mata kuliah **Pemrograman Web 2** di Universitas Pelita Bangsa.

##  Deskripsi Projek
Projek ini dibuat untuk memenuhi tugas praktikum mengenai pengembangan aplikasi web. Aplikasi ini dibangun menggunakan framework **CodeIgniter 4** untuk mengimplementasikan konsep MVC (Model-View-Controller) serta pengelolaan database menggunakan MySQL.

## Teknologi yang Digunakan
- **PHP** 8.x
- **Framework:** CodeIgniter 4
- **Database:** MySQL (via XAMPP)
- **Front-end:** HTML, CSS, Bootstrap

## Struktur Folder
```text
/
├── app/            # Source code utama (Controllers, Models, Views)
├── public/         # File publik (assets, css, js)
├── writable/       # Log dan cache
├── .env            # Konfigurasi environment
└── README.md       # Dokumentasi ini
```

## Code App.js
```js
// Konfigurasi Global URL API (Agar bisa dibaca otomatis oleh komponen Login.js)
window.apiUrl = 'http://localhost:8080';

// ==========================================
// 1. AXIOS INTERCEPTORS (Modul 14: Gembok API)
// ==========================================
// Berfungsi menyuntikkan Token secara otomatis ke setiap request data ke Backend
axios.interceptors.request.use(config => {
    const token = localStorage.getItem('token');
    if (token) {
        config.headers.Authorization = 'Bearer ' + token;
    }
    return config;
}, error => {
    return Promise.reject(error);
});

// ==========================================
// 2. SAFE COMPONENT RESOLVER (Solusi Error "Home is not defined")
// ==========================================
// Mengamankan aplikasi agar tidak crash jika urutan pemanggilan script di index.html keliru
const MyHome = typeof Home !== 'undefined' ? Home : { 
    template: `
        <div class="content">
            <div class="card" style="text-align: center; padding: 3rem 1rem;">
                <h1 style="color: #4f46e5; margin-bottom: 10px;">Selamat Datang di SPA Praktikum</h1>
                <p style="color: #64748b; font-size: 1.1rem;">
                    Aplikasi Single Page Application dengan VueJS & CodeIgniter 4 API.
                </p>
                <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 20px auto; max-width: 200px;">
                <p>Silakan gunakan menu navigasi di atas untuk menjelajahi aplikasi.</p>
            </div>
        </div>
    ` 
};
const MyAbout = typeof About !== 'undefined' ? About : { template: '<div class="content"><div class="card"><h2>Halaman About</h2><p>Komponen About.js belum termuat sempurna.</p></div></div>' };
const MyArtikel = typeof Artikel !== 'undefined' ? Artikel : { template: '<div class="content"><div class="card"><h2>Halaman Artikel</h2><p>Komponen Artikel.js belum termuat sempurna.</p></div></div>' };
const MyLogin = typeof Login !== 'undefined' ? Login : { template: '<div class="content"><div class="card"><h2>Halaman Login</h2><p>Komponen Login.js belum termuat sempurna.</p></div></div>' };


// ==========================================
// 3. VUE ROUTER CONFIGURATION (Modul 12 & 13)
// ==========================================
const { createRouter, createWebHashHistory } = VueRouter;

const routes = [
    { path: '/', component: MyHome },
    { path: '/login', component: MyLogin },
    { path: '/artikel', component: MyArtikel, meta: { requiresAuth: true } }, // Diproteksi Satpam
    { path: '/about', component: MyAbout, meta: { requiresAuth: true } }     // Diproteksi Satpam
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});


// ==========================================
// 4. NAVIGATION GUARDS (Modul 13: Satpam Browser)
// ==========================================
// Memeriksa hak akses rute sebelum halaman dirender di browser klien
router.beforeEach((to, from, next) => {
    const isLoggedIn = localStorage.getItem('isLoggedIn');
    
    // Jika rute membutuhkan login (requiresAuth) tapi user belum login
    if (to.meta.requiresAuth && !isLoggedIn) {
        next('/login'); // Tendang paksa ke halaman login
    } else {
        next(); // Izinkan lewat
    }
});


// ==========================================
// 5. INISIALISASI UTAMA VUE APP INSTANCE
// ==========================================
const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            // Reactive State untuk memantau status login tombol di Navbar index.html
            isLoggedIn: !!localStorage.getItem('isLoggedIn')
        }
    },
    methods: {
        logout() {
            // Hapus seluruh kredensial keamanan di local storage browser
            localStorage.removeItem('token');
            localStorage.removeItem('isLoggedIn');
            this.isLoggedIn = false;
            
            // Kembalikan ke halaman login dan segarkan sistem
            this.$router.push('/login');
            window.location.reload();
        }
    }
});

// Pasang sistem routing ke dalam aplikasi Vue
app.use(router);

// Kaitkan sistem ke elemen HTML ber-ID "app"
app.mount('#app');
```

## Kesimpulan

Melalui praktikum ini berhasil dibuat aplikasi web modern menggunakan CodeIgniter 4 dan VueJS yang menerapkan:

* AJAX untuk komunikasi data tanpa reload halaman
* REST API sebagai layanan backend
* VueJS untuk frontend interaktif
* SPA menggunakan Vue Router
* Autentikasi berbasis token
* Keamanan API menggunakan Filter dan Axios Interceptors



**Pemrograman Web 2**
**Universitas Pelita Bangsa**
**Tahun Akademik 2025/2026**
