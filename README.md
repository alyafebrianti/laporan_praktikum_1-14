# laporan_praktikum_1-4

# Identitas Mahasiswa
## Nama : Alya Febrianti
## NIM : 312410692
## Kelas : I241D
## Mata Kuliah : Pemrograman Web 2

# Hasil Praktikum :

## Halama Login
<img width="946" height="506" alt="image" src="https://github.com/user-attachments/assets/cca03ea8-8cb7-45f5-b51a-028e942852e7" />

## Tampilan Halaman Admin
<img width="959" height="504" alt="image" src="https://github.com/user-attachments/assets/bedd0a04-9297-42fd-a615-7ed1422269df" />

## Tampilan Ubah dan Hapus Artikel

<img width="959" height="502" alt="image" src="https://github.com/user-attachments/assets/e60aed4e-d47d-4de5-9d49-661a7d723ed5" />

<img width="958" height="505" alt="image" src="https://github.com/user-attachments/assets/11d1f06d-f62c-4fac-b5dd-4f541b9d2a7c" />

## Tampilan Tambah Artikel

<img width="959" height="504" alt="image" src="https://github.com/user-attachments/assets/33586f9c-90e5-4723-9ccc-a5f62b149266" />

## Tampilan Dasboard dan Halaman Home

<img width="955" height="504" alt="image" src="https://github.com/user-attachments/assets/5cf83c3a-1aa1-4183-8c72-791c8f1f952e" />

## Halaman Artikel

<img width="956" height="502" alt="image" src="https://github.com/user-attachments/assets/1bac0b9b-35e9-4205-9857-fe6185824d75" />

## Tampilan Isi Artikel Pertama & Kedua

<img width="959" height="502" alt="image" src="https://github.com/user-attachments/assets/a3c7fe08-4899-47dc-90de-c047ad5029ff" />

<img width="959" height="502" alt="image" src="https://github.com/user-attachments/assets/9253aac9-773f-4191-b7d7-81ddcd6efe14" />

## Tampilan About

<img width="959" height="505" alt="image" src="https://github.com/user-attachments/assets/087085a5-89fe-42f4-9d2a-410c6f755ce0" />

## Tampilan Kontak

<img width="953" height="500" alt="image" src="https://github.com/user-attachments/assets/7a84a259-6731-4499-8dc5-f360a4709be0" />

## Tampilan Logout

<img width="958" height="152" alt="image" src="https://github.com/user-attachments/assets/bca47bce-f1fc-4976-ac8f-01959273a709" />

# Hasil Praktikum 5
## Tampilan Pencarian data

<img width="957" height="851" alt="image" src="https://github.com/user-attachments/assets/e2ecb0dd-3672-4bdf-9952-d2ea1c5561ba" />


# Penjelasan Praktikum 1-5
# Lab7Web - Pemrograman Web 2 (CodeIgniter 4)

**Mata Kuliah:** Pemrograman Web 2  
**Universitas Pelita Bangsa**

---

## Daftar Praktikum

- [Praktikum 1 - PHP Framework (CodeIgniter 4)](#praktikum-1---php-framework-codeigniter-4)
- [Praktikum 2 - Framework Lanjutan (CRUD)](#praktikum-2---framework-lanjutan-crud)
- [Praktikum 3 - View Layout dan View Cell](#praktikum-3---view-layout-dan-view-cell)
- [Praktikum 4 - Modul Login](#praktikum-4---modul-login)
- [Praktikum 5 - Pagination dan Pencarian](#praktikum-5---pagination-dan-pencarian)

---

# Praktikum 1 - PHP Framework (CodeIgniter 4)

**Tujuan:** Memahami konsep dasar Framework, MVC, dan membuat aplikasi sederhana dengan CodeIgniter 4.

## Langkah-langkah

### 1. Persiapan
Aktifkan ekstensi PHP melalui **XAMPP → Apache → Config → PHP.ini**, hapus tanda `;` pada:
- `php-json`, `php-mysqlnd`, `php-xml`, `php-intl`, `libcurl`

Restart Apache setelah disimpan.

### 2. Instalasi CodeIgniter 4 (Manual)
1. Unduh CI4 dari [https://codeigniter.com/download](https://codeigniter.com/download)
2. Ekstrak ke `htdocs/lab11_ci/`, ubah nama folder menjadi `ci4`
3. Akses: `http://localhost/lab11_ci/ci4/public/`

### 3. Menjalankan CLI
```bash
cd xampp/htdocs/lab11_ci/ci4
php spark
```

### 4. Mengaktifkan Mode Debugging
Ubah nama file `env` → `.env`, lalu edit:
```
CI_ENVIRONMENT = development
```

### 5. Struktur Direktori CI4

| Folder/File | Fungsi |
|---|---|
| `app/` | Kode aplikasi |
| `public/` | File publik (index.php, css, js) |
| `writable/` | Logs, session, upload |
| `vendor/` | Library & core CI |
| `.env` | Konfigurasi environment |
| `spark` | Script CLI |

### 6. Konsep MVC

| Komponen | Lokasi | Fungsi |
|---|---|---|
| **Model** | `app/Models/` | Pemodelan data |
| **View** | `app/Views/` | Tampilan UI |
| **Controller** | `app/Controllers/` | Logic & penghubung M-V |

### 7. Membuat Route Baru
Tambahkan di `app/Config/Routes.php`:
```php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
Cek route via CLI: `php spark routes`

### 8. Membuat Controller
Buat `app/Controllers/Page.php`:
```php
<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about() { echo "Ini halaman About"; }
    public function contact() { echo "Ini halaman Contact"; }
    public function faqs() { echo "Ini halaman FAQ"; }
}
```

### 9. Membuat View
Buat `app/Views/about.php`:
```php
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

Update method `about()` di Controller:
```php
public function about()
{
    return view('about', [
        'title'   => 'Halaman About',
        'content' => 'Ini adalah halaman about.'
    ]);
}
```

### 10. Membuat Layout dengan CSS
1. Taruh `style.css` di folder `public/`
2. Buat `app/Views/template/header.php` dan `footer.php` sebagai template
3. Gunakan `$this->include('template/header')` di setiap view

> **Tugas:** Lengkapi semua halaman (Home, Artikel, About, Kontak) agar tampil dengan layout yang sama.

> *(Screenshot hasil praktikum di sini)*

---

# Praktikum 2 - Framework Lanjutan (CRUD)

**Tujuan:** Memahami konsep Model dan CRUD menggunakan CodeIgniter 4.

## Langkah-langkah

### 1. Membuat Database
```sql
CREATE DATABASE lab_ci4;

CREATE TABLE artikel (
    id INT(11) auto_increment,
    judul VARCHAR(200) NOT NULL,
    isi TEXT,
    gambar VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200),
    PRIMARY KEY(id)
);
```

### 2. Konfigurasi Database
Edit file `.env`:
```
database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

### 3. Membuat Model
Buat `app/Models/ArtikelModel.php`:
```php
<?php
namespace App\Models;
use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}
```

### 4. Membuat Controller
Buat `app/Controllers/Artikel.php`:
```php
<?php
namespace App\Controllers;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
}
```

### 5. Membuat View Index
Buat `app/Views/artikel/index.php` — menampilkan daftar artikel dengan loop foreach.

Tambahkan data dummy:
```sql
INSERT INTO artikel (judul, isi, slug) VALUES
('Artikel pertama', 'Lorem Ipsum...', 'artikel-pertama'),
('Artikel kedua', 'Tidak seperti...', 'artikel-kedua');
```

### 6. Tampilan Detail Artikel
Tambahkan method `view($slug)` di Controller Artikel, buat `app/Views/artikel/detail.php`, dan tambahkan route:
```php
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
```

### 7. Menu Admin (CRUD)
Tambahkan routing group admin:
```php
$routes->group('admin', function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
```

Buat method di Controller: `admin_index()`, `add()`, `edit($id)`, `delete($id)` beserta view masing-masing.

**Method Delete:**
```php
public function delete($id)
{
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
}
```

> *(Screenshot hasil praktikum di sini)*

---

# Praktikum 3 - View Layout dan View Cell

**Tujuan:** Memahami dan mengimplementasikan View Layout dan View Cell di CodeIgniter 4.

## Langkah-langkah

### 1. Membuat Layout Utama
Buat `app/Views/layout/main.php`:
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
<div id="container">
    <header><h1>Layout Sederhana</h1></header>
    <nav>
        <a href="<?= base_url('/');?>">Home</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main">
            <?= $this->renderSection('content') ?>
        </section>
        <aside id="sidebar">
            <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
        </aside>
    </section>
    <footer><p>&copy; 2021 - Universitas Pelita Bangsa</p></footer>
</div>
</body>
</html>
```

### 2. Modifikasi File View
Ubah view agar menggunakan layout baru, contoh `app/Views/home.php`:
```php
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<h1><?= $title; ?></h1>
<p><?= $content; ?></p>
<?= $this->endSection() ?>
```

### 3. Membuat View Cell
Buat `app/Cells/ArtikelTerkini.php`:
```php
<?php
namespace App\Cells;
use CodeIgniter\View\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini extends Cell
{
    public function render()
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();
        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
```

### 4. Membuat View untuk View Cell
Buat `app/Views/components/artikel_terkini.php`:
```php
<h3>Artikel Terkini</h3>
<ul>
<?php foreach ($artikel as $row): ?>
    <li><a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?= $row['judul'] ?></a></li>
<?php endforeach; ?>
</ul>
```

**Perbedaan View biasa vs View Cell:**

| | View Biasa | View Cell |
|---|---|---|
| Dipanggil dari | Controller | Mana saja (layout, view lain) |
| Cara pemanggilan | `return view(...)` | `view_cell(...)` |
| Cocok untuk | Halaman utama | Widget/sidebar/komponen berulang |

> *(Screenshot hasil praktikum di sini)*

---

# Praktikum 4 - Modul Login

**Tujuan:** Memahami konsep Auth Filter dan membuat sistem login dengan CodeIgniter 4.

## Langkah-langkah

### 1. Membuat Tabel User
```sql
CREATE TABLE user (
    id INT(11) auto_increment,
    username VARCHAR(200) NOT NULL,
    useremail VARCHAR(200),
    userpassword VARCHAR(200),
    PRIMARY KEY(id)
);
```

### 2. Membuat Model User
Buat `app/Models/UserModel.php`:
```php
<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'useremail', 'userpassword'];
}
```

### 3. Membuat Controller User
Buat `app/Controllers/User.php`:
```php
public function login()
{
    helper(['form']);
    $email    = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    if (!$email) return view('user/login');

    $model = new UserModel();
    $login = $model->where('useremail', $email)->first();
    if ($login && password_verify($password, $login['userpassword'])) {
        session()->set(['user_id' => $login['id'], 'logged_in' => TRUE]);
        return redirect('admin/artikel');
    }
    session()->setFlashdata("flash_msg", "Email atau password salah.");
    return redirect()->to('/user/login');
}

public function logout()
{
    session()->destroy();
    return redirect()->to('/user/login');
}
```

### 4. Membuat View Login
Buat `app/Views/user/login.php` berisi form dengan field email dan password.

### 5. Membuat Database Seeder
```bash
php spark make:seeder UserSeeder
```
Isi `app/Database/Seeds/UserSeeder.php` lalu jalankan:
```php
$model->insert([
    'username'     => 'admin',
    'useremail'    => 'admin@email.com',
    'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
]);
```
```bash
php spark db:seed UserSeeder
```

### 6. Membuat Auth Filter
Buat `app/Filters/Auth.php`:
```php
<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/user/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
```

### 7. Mendaftarkan Filter & Update Routes
Tambahkan di `app/Config/Filters.php`:
```php
'auth' => App\Filters\Auth::class
```

Update `app/Config/Routes.php`:
```php
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    // ... route lainnya
});
```

> Akses `http://localhost:8080/admin/artikel` akan otomatis redirect ke halaman login jika belum terautentikasi.

> *(Screenshot hasil praktikum di sini)*

---

# Praktikum 5 - Pagination dan Pencarian

**Tujuan:** Memahami dan mengimplementasikan Pagination dan Pencarian data di CodeIgniter 4.

## Langkah-langkah

### 1. Membuat Pagination
Modifikasi method `admin_index()` di Controller Artikel:
```php
public function admin_index()
{
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $data  = [
        'title'   => $title,
        'artikel' => $model->paginate(10), // 10 data per halaman
        'pager'   => $model->pager,
    ];
    return view('artikel/admin_index', $data);
}
```

Tambahkan link pager di `app/Views/artikel/admin_index.php` (di bawah tabel):
```php
<?= $pager->links(); ?>
```

### 2. Membuat Pencarian
Update method `admin_index()`:
```php
public function admin_index()
{
    $title = 'Daftar Artikel';
    $q     = $this->request->getVar('q') ?? '';
    $model = new ArtikelModel();
    $data  = [
        'title'   => $title,
        'q'       => $q,
        'artikel' => $model->like('judul', $q)->paginate(10),
        'pager'   => $model->pager,
    ];
    return view('artikel/admin_index', $data);
}
```

Tambahkan form pencarian di view (sebelum tabel):
```html
<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>
```

Update link pager agar query pencarian tetap terbawa saat pindah halaman:
```php
<?= $pager->only(['q'])->links(); ?>
```

> *(Screenshot hasil praktikum di sini)*

---

## Referensi
- [Dokumentasi CodeIgniter 4](https://codeigniter.com/user_guide/)
- Modul Praktikum Pemrograman Web 2 — Agung Nugroho, Universitas Pelita Bangsa














