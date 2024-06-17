# Panduan Menjalankan Projek Ikuzo

Projek Ikuzo adalah sebuah aplikasi berbasis web yang dibangun dengan menggunakan bahasa PHP dan framework [Laravel](https://laravel.com/docs). Berikut adalah langkah-langkah untuk menjalankan projek Ikuzo di lingkungan lokal Anda.

## Persyaratan

Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:

- PHP minimal versi 8.0 atau yang lebih baru.
- Composer terbaru.
- XAMPP atau serupa (untuk menjalankan server Apache dan MySQL).

## Langkah-langkah

### 1. Unduh Source Code

Unduh source code Ikuzo dari repository GitHub:

- [Download source code Ikuzo](https://github.com/IkuzoTemera03/ikuzoteam/archive/refs/heads/main.zip)

### 2. Ekstrak dan Persiapan

Ekstrak file `main.zip` ke direktori yang Anda inginkan. Buka XAMPP dan pastikan Apache dan MySQL diaktifkan.

### 3. Instalasi Dependencies

Buka terminal atau command prompt (CMD), lalu arahkan ke direktori projek Ikuzo yang telah diekstrak, dan jalankan perintah berikut untuk menginstal semua dependensi PHP menggunakan Composer:

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file .env.example menjadi .env. Anda dapat melakukan ini dengan menjalankan perintah:

```bash
cp .env.example .env
```

Buka file .env yang baru dibuat dan sesuaikan pengaturan database berikut sesuai dengan konfigurasi MySQL Anda:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda
DB_PASSWORD=password_anda
```

### 5. Migrasi dan Seeder

Jalankan migrasi database dan seeder untuk membangun struktur database dan mengisi data awal dengan perintah berikut:

```bash
php artisan migrate --seed
```

### 6. Menjalankan Aplikasi

Untuk menjalankan aplikasi Ikuzo, jalankan perintah:

```bash
php artisan serve
```


### 7. Tampilan Awal

Setelah berhasil menjalankan aplikasi, halaman beranda Ikuzo akan dapat diakses melalui browser, menampilkan tampilan awal seperti gambar di bawah ini:

<img src="https://github.com/IkuzoTemera03/ikuzoteam/blob/main/documentation/images/tampilan-awal.jpg" alt="Hasil running Ikuzo">