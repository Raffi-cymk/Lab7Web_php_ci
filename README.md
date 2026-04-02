# Lab7Web_php_ci

## 📘 Praktikum Web - CodeIgniter 4 (CRUD Artikel)

📌 Deskripsi

Project ini merupakan implementasi CRUD (Create, Read, Update, Delete) menggunakan CodeIgniter 4.
Aplikasi ini digunakan untuk mengelola data artikel yang tersimpan dalam database MySQL.

---

## 🛠️ Tools yang Digunakan

- XAMPP (PHP 8)
- CodeIgniter 4
- Visual Studio Code
- phpMyAdmin
- Web Browser (Chrome)

---

## 🗂️ Struktur Database

Tabel yang digunakan adalah artikel dengan struktur sebagai berikut:

- "id" (INT, Primary Key, Auto Increment)
- "judul" (VARCHAR)
- "isi" (TEXT)
- "slug" (VARCHAR)

---

## ⚙️ Langkah Pengerjaan

1. Install XAMPP dan jalankan Apache & MySQL
2. Install CodeIgniter 4
3. Buat database "lab_ci" di phpMyAdmin
4. Buat tabel "artikel"
5. Konfigurasi database di "Database.php"
6. Buat Model ("ArtikelModel.php")
7. Buat Controller ("Artikel.php")
8. Buat View:
   - index (list artikel)
   - detail
   - admin
   - form tambah & edit
9. Konfigurasi routing di "Routes.php"
10. Jalankan project dengan:

php spark serve

---

## 📸 Screenshot Hasil

### 1. Struktur Database

"Struktur Database"


Penjelasan:
Menampilkan struktur tabel artikel yang terdiri dari id, judul, isi, dan slug.


### 2. Halaman Awal CodeIgniter

"CI4 Default"


Penjelasan:
Menunjukkan bahwa instalasi CodeIgniter 4 berhasil dijalankan.


### 3. Halaman Admin Artikel



Penjelasan:
Halaman admin digunakan untuk mengelola data artikel (tambah, edit, hapus).


### 4. Halaman Edit Artikel



Penjelasan:
Form untuk mengubah data artikel yang sudah ada di database.


### 5. Halaman Daftar Artikel



Penjelasan:
Menampilkan daftar artikel yang tersimpan dalam database.

---

## 💻 Contoh Kode

# Controller (Artikel.php)

public function index()
{
    $model = new ArtikelModel();
    $data['artikel'] = $model->findAll();
    return view('artikel/index', $data);
}

---

### Model (ArtikelModel.php)

protected $table = 'artikel';
protected $primaryKey = 'id';
protected $allowedFields = ['judul', 'isi', 'slug'];

---

### Route

$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/detail/(:segment)', 'Artikel::detail/$1');
$routes->get('artikel/admin', 'Artikel::admin');

---

## ✅ Kesimpulan

Aplikasi berhasil dibuat menggunakan CodeIgniter 4 dengan fitur:

- Menampilkan daftar artikel
- Menampilkan detail artikel
- Mengelola artikel (CRUD)
- Menggunakan database MySQL
