# Sistem Perpustakaan Digital Kampus

Aplikasi berbasis web untuk mengelola data buku, anggota, dan transaksi peminjaman perpustakaan.

## Cara Menjalankan Proyek Secara Lokal
1. Clone repository ini
2. Buka terminal pada direktori proyek dan jalankan `composer install`
3. Sesuaikan konfigurasi database pada file `.env`
4. Jalankan server dengan perintah `php artisan serve`
5. Akses `http://127.0.0.1:8000` di browser

## Konsep Arsitektur MVC
- **Model:** Bertanggung jawab atas pengelolaan data, relasi tabel, dan aturan bisnis database.
- **View:** Bertanggung jawab murni untuk antarmuka pengguna (tampilan HTML/Blade).
- **Controller:** Bertindak sebagai penghubung yang memproses request dari pengguna, memanggil Model untuk manipulasi data, dan mengirimkannya ke View.