# Panduan Menjalankan Projek Ikuzo

Projek Ikuzo adalah sebuah aplikasi berbasis web yang dibangun dengan menggunakan bahasa PHP dan framework [Laravel](https://laravel.com/docs). Berikut adalah langkah-langkah untuk menjalankan projek Ikuzo di lingkungan lokal Anda.

## Persyaratan

Sebelum memulai, pastikan Anda telah menginstall beberapa requirement berikut ini:

- PHP minimal versi 8.0 atau yang lebih baru.
- [Composer](https://getcomposer.org/) terbaru.
- [XAMPP](https://www.apachefriends.org/download.html) atau serupa (untuk menjalankan server Apache dan MySQL).

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

Setelah berhasil menjalankan aplikasi, halaman beranda Ikuzo akan dapat diakses melalui browser dengan url [http://127.0.0.1:8000](http://127.0.0.1:8000), menampilkan tampilan awal seperti gambar di bawah ini:

<img src="https://github.com/IkuzoTemera03/ikuzoteam/blob/main/documentation/images/tampilan-awal.jpg" alt="Hasil running Ikuzo">

### 8. Login

Setelah berhasil mengakses Ikuzo, silahkan login menggunakan akun berikut ini. <br> <br>
Email : <b>ikuzoteam@gmail.com</b> <br>
Password : <b>password</b>

# Aplikasi Ikuzo Online

Ikuzo dapat diakses secara online melalui link berikut ini [ikuzoteam.000webhostapp.com](https://ikuzoteam.000webhostapp.com/). 

Berikut akun untuk login pada Ikuzo yang online (akun sama seperti di localhost). <br> <br>
Email : <b>ikuzoteam@gmail.com</b> <br>
Password : <b>password</b>

<b>Note : </b>Ikuzo online hanya dapat diakses sampai <b>6/16/2025</b>.