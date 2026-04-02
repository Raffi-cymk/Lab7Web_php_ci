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
<img width="1191" height="337" alt="Screenshot (117)" src="https://github.com/user-attachments/assets/f9242faa-bd5a-42ee-80de-86cd7f5109ab" />

Penjelasan:
Menampilkan struktur tabel artikel yang terdiri dari id, judul, isi, dan slug.


### 2. Halaman Awal CodeIgniter

"CI4 Default"
<img width="731" height="655" alt="Screenshot-2023-01-14-at-14 11 16" src="https://github.com/user-attachments/assets/4b3bfd09-706a-4b6b-9eb3-782100a887df" />

Penjelasan:
Menunjukkan bahwa instalasi CodeIgniter 4 berhasil dijalankan.


### 3. Halaman Admin Artikel

<img width="1366" height="531" alt="Screenshot (126)" src="https://github.com/user-attachments/assets/d17b28f3-b47a-4ae7-9d58-d7645b8cc979" />

Penjelasan:
Halaman admin digunakan untuk mengelola data artikel (tambah, edit, hapus).


### 4. Halaman Edit Artikel

<img width="378" height="306" alt="Screenshot (127)" src="https://github.com/user-attachments/assets/90f2a714-1011-44cd-8428-a8f31c928d5a" />

Penjelasan:
Form untuk mengubah data artikel yang sudah ada di database.


### 5. Halaman Daftar Artikel

<img width="1366" height="471" alt="Screenshot (128)" src="https://github.com/user-attachments/assets/cbbf52d4-1ced-4382-b3fd-89196ee64b0d" />

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
