## Kursus
Ini adalah sebuah aplikasi submission untuk sebuah sertifikasi LSP (Lembaga Sertifikasi Profesi) Tikom yang tersertifikasi oleh BNSP.

Aplikasi ini memiliki 2 modul utama, yaitu modul Kursus, dan Peserta.

## Cara Instalasi
Persyaratan utama sebelum menginstal aplikasi ini adalah:
1. Memiliki pengetahuan umum Terminal / CMD.
1. Memiliki PHP versi 8.1 ke atas.
1. Memiliki `composer` terinstal. Bisa cek terminal dan jalankan `composer`. Jika terjadi error, maka `composer` belum terinstal. Untuk menginstal `composer`, ikuti [guide ini](https://getcomposer.org/).
1. Memiliki `npm` terinstal. Bisa cek terminal dan jalankan `npm`. Jika terjadi error, maka `npm` belum terinstal. Untuk menginstal `npm`, instal Node.js melalui [guide ini](https://nodejs.org/en/download).
1. Memiliki MySQL sebagai databasenya.

Instalasi:
1. Clone repository ini
1. Setelah diclone, arahkan terminal ke project ini dan jalankan `composer install`.
1. Copy file `.env.example` dan rename file yang sudah dicopy tersebut menjadi `.env`.
1. Jalankan `php artisan key:generate`.
1. Buat satu database bernama `kursus` pada MySQL.
1. Buka file `.env` dan edit beberapa data berikut:
    1. `DB_USERNAME` sesuaikan dengan username yang digunakan pada database.
    1. `DB_PASSWORD` sesuaikan dengan password yang digunakan pada database.
1. Jalankan `php artisan migrate`.
1. Jalankan `php artisan db:seed SchemaSeeder`.
1. Jalankan `php artisan db:seed ParticipantSeeder`.
1. Jalankan `php artisan db:seed AdminSeeder`.
1. Jalankan `npm run build`.
1. Jalankan `php artisan serve`.

Sekarang Anda bisa masuk ke aplikasi sebagai admin dengan menggunakan email `admin@test.com` dan password `admin123`.
