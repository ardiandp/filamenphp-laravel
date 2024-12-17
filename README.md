Mulai dari Nol ya 

Install Filament: Tambahkan Filament ke dalam proyek Laravel Anda:
- composer require filament/filament

Publikasikan File dan Konfigurasi Filament: Jalankan perintah untuk menginstal aset dan konfigurasi:
- php artisan filament:install

Buat Admin User (Opsional): Jika Anda memerlukan akses ke admin panel, buat admin user:
- php artisan make:filament-user

Jalankan Server Laravel:
- php artisan serve

Akses admin panel di browser:
-http://localhost:8000/admin


2. Membuat Resource Filament untuk Tabel users
Jalankan Perintah untuk Membuat Resource:
- php artisan make:filament-resource User


