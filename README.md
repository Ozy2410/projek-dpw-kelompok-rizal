# Sistem Pemesanan Tiket Lagoa Express

<p align="center">
    <a href="#">
        <img src="public/img/logo.png" width="200" alt="Lagoa Express Logo">
    </a>
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## Tentang Lagoa Express

Lagoa Express adalah aplikasi web untuk pemesanan tiket kereta. Aplikasi ini menyediakan antarmuka yang intuitif bagi pengguna untuk mencari kereta yang tersedia, memesan tiket, dan mengelola pemesanan mereka. Aplikasi ini juga mencakup dashboard admin untuk mengelola pengguna, kereta, dan pemesanan.

## Fitur

- **Autentikasi Pengguna**: Sistem login dan registrasi yang aman.
- **Pencarian Kereta**: Mencari kereta yang tersedia berdasarkan kota asal, kota tujuan, dan tanggal keberangkatan.
- **Pemesanan Tiket**: Memesan tiket untuk beberapa penumpang dengan pemilihan kursi.
- **Manajemen Pemesanan**: Melihat dan mengelola tiket yang sudah dipesan.
- **Dashboard Admin**: Mengelola pengguna, kereta, dan pemesanan.

## Instalasi

1. Clone repositori:
   ```sh
   git clone https://github.com/Ozy2410/projek-dpw-kelompok-rizal.git
   cd projek-dpw-kelompok-rizal
   ```

2. Install dependencies & update dependencies:
   ```sh
   composer install && composer update
   npm install
   ```

3. Salin file `.env.example` menjadi `.env` dan konfigurasikan variabel lingkungan Anda:
   ```sh
   cp .env.example .env
   ```

4. Generate application key:
   ```sh
   php artisan key:generate
   ```

5. Jalankan migrasi dan seed database:
   ```sh
   php artisan migrate --seed
   ```

6. Mulai development server:
   ```sh
   php artisan serve
   npm run dev
   ```

## Penggunaan

### Autentikasi Pengguna

- Daftar akun baru atau login dengan akun yang sudah ada.
- Setelah login, Anda dapat mencari kereta yang tersedia dan memesan tiket.

### Pencarian dan Pemesanan Kereta

- Gunakan form pencarian di halaman utama untuk menemukan kereta yang tersedia.
- Pilih kereta dan pilih kursi untuk setiap penumpang.
- Konfirmasi pemesanan untuk menerima konfirmasi tiket.

### Dashboard Admin

- Login sebagai admin untuk mengakses dashboard.
- Mengelola pengguna, kereta, dan pemesanan dari dashboard admin.

## Kontribusi

Kontribusi sangat diterima! Silakan kirim pull request atau buka issue untuk mendiskusikan ide Anda.

## Lisensi

Proyek ini bersifat open-source dan dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
