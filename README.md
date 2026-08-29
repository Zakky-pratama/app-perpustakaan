# Sistem Perpustakaan Digital Kampus

Aplikasi web Sistem Perpustakaan Digital Kampus yang dibangun menggunakan framework Laravel 12 untuk mengelola data buku, anggota perpustakaan, dan transaksi peminjaman.

## Cara Menjalankan Proyek Secara Lokal
1. Clone repository ini: `git clone https://github.com/Zakky-pratama/app-perpustakaan.git`
2. Masuk ke folder project: `cd app-perpustakaan`
3. Jalankan `composer install`
4. Salin file `.env.example` ke `.env` dan sesuaikan koneksi database `db_perpustakaan`
5. Jalankan `php artisan key:generate`
6. Jalankan server: `php artisan serve`
7. Akses aplikasi di browser melalui `http://127.0.0.1:8000`

## Pemahaman Konsep Arsitektur MVC
- **Model:** Mengelola data, struktur tabel, serta aturan logika bisnis yang berhubungan dengan database.
- **View:** Menyajikan antarmuka visual (tampilan HTML/Blade) yang dilihat oleh pengguna.
- **Controller:** Bertindak sebagai penghubung alur yang menerima request pengguna, memproses data melalui Model, dan mengirimkannya ke View.