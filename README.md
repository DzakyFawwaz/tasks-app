<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup Proyek Tasks

Ikuti langkah-langkah berikut untuk memulai proyek ini:

### 1. Clone Repository

```bash
git clone https://github.com/DzakyFawwaz/tasks-app.git
cd task_app
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Copy dan Konfigurasi File Environment

```bash
cp .env.example .env
```

Edit file `.env` sesuai kebutuhan, terutama konfigurasi database.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Migrasi dan Seed Database

```bash
php artisan migrate --seed
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Akses aplikasi di [http://localhost:8000](http://localhost:8000).

---

Untuk dokumentasi lebih lanjut, kunjungi [Laravel Documentation](https://laravel.com/docs).
