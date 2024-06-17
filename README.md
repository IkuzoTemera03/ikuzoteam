## Cara Menjalankan Projek Ikuzo

Kelompok kami menggunakan bahasa PHP dengan framework [Laravel](https://https://laravel.com/docs). Sebelum masuk cara menjalakan projek ini, silahkan install PHP minimal versi 8.0, install composer terbaru dan XAMPP terlebih dahulu.

Berikut cara untuk menjalankan projek Ikuzo:
- Install [source code](https://github.com/IkuzoTemera03/ikuzoteam/archive/refs/heads/main.zip).
- Ekstrak ikuzoteam-main.zip di direktori yang anda inginkan.
- Buka XAMPP dan aktifkan/mulai Apache dan MySQL pada aplikasi XAMPP.
- Buka terminal/CMD pada folder projek Ikuzo.
- Masukkan perintah <b>composer install</b> pada terminal.
- Copy file <b>"ikuzoteam-main\.env.example"</b>.
- Rename file hasil duplikat <b>".env.example"</b>, menjadi <b>".env"</b>.
- Kemudian ganti nilai <b>DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME dan DB_PASSWORD</b> sesuai phpmyadmin/MySQL anda. Jika anda menggunakan <b>XAMPP pada Windows</b>, anda hanya perlu mengganti <b>DB_DATABASE</b> saja. Environment default seperti ini.
<img src="https://github.com/IkuzoTemera03/ikuzoteam/blob/main/documentation/images/env-default.jpg" alt="Hasil running Ikuzo">
- Kembali ke terminal/CMD dan masukkan perintah <b>php artisan migrate --seed</b> pada terminal/CMD.
- Kemudian masukkan perintah <b>php artisan serve</b> pada terminal/CMD.
<img src="https://github.com/IkuzoTemera03/ikuzoteam/blob/main/documentation/images/hasil-php-artisan-serve.jpg" alt="Hasil running Ikuzo">
- Setelah berhasil, buka browser dan masukkan <b>[http://127.0.0.1:8000](http://127.0.0.1:8000)</b>. Browser akan menampilkan halaman berikut
<img src="https://github.com/IkuzoTemera03/ikuzoteam/blob/main/documentation/images/tampilan-awal.jpg" alt="Hasil running Ikuzo">
