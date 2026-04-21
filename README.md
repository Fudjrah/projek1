# Projek 1 - Sistem Manajemen Lagu (Laravel 12)

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Aplikasi web sederhana untuk mengelola daftar lagu (CRUD) yang dibangun menggunakan framework **Laravel 12**. Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemograman Web 2.

## Fitur Utama
- **Create**: Menambah data lagu baru ke dalam database.
- **Read**: Menampilkan daftar lagu secara rapi.
- **Update**: Memperbarui informasi lagu yang sudah ada.
- **Delete**: Menghapus data lagu dari sistem.

## Tech Stack
- **Framework:** Laravel 12
- **Language:** PHP 8.3+
- **Database:** MariaDB / MySQL
- **Frontend:** Blade Templating
- **Tooling:** Composer, NPM

## Panduan Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di lingkungan lokal:

### 1. Clone & Install
```bash
# Clone repositori
git clone [https://github.com/Fudjrah/projek1.git](https://github.com/Fudjrah/projek1.git)
cd projek1

# Install dependensi backend
composer install

# Install & compile aset frontend
npm install
npm run build

# Setup File Environment
cp .env.example .env
php artisan key:generate

# Jalankan Migrasi & Server
php artisan migrate
php artisan serve