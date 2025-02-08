<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements

-   Laravel 8.x (PHP >= 7.4)
-   Composer
-   MySQL 8.0

# How to install ?

Berikut adalah langkah-langkahnya:

1. Pertama, buka direktori tempat kumpulan project anda, lalu buka terminal.
2. Ketik perintah
   `git clone https://github.com/dwirobbin/roblogs.git` atau bisa download manual dengan meng-klik tautan https://github.com/dwirobbin/roblogs/archive/refs/heads/main.zip.
3. Jika sudah selesai meng-clone atau mendownload, akses folder hasil clone/download (nama project: roblogs) dengan cara mengetikkan `cd roblogs` pada terminal.
4. Lalu ketikkan perintah `composer install` juga di terminal.
5. Lanjut meng-copy file .env.example menjadi .env menggunakan perintah `cp .env.example .env` (asumsi menggunakan OS turunan UNIX) atau lakukanlah copy secara manual.
6. Terus jalankan perintah `php artisan key:generate` pada terminal.
7. Lanjut buat database menggunakan DBMS kesukaan kalian (ex: phpMyAdmin).
8. Buka file .env, lalu edit pada bagian berikut :
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    Sesuaikan settingan database dengan punya kalian.
9. Ngapain lagi ? ya.. di terminal jalankan perintah ini `php artisan migrate --seed`
10. Ketik `php artisan storage:link` pada terminal.
11. Eitss.. jangan lupa untuk menjalankan project app laravel dengan mengetikkan perintah `php artisan serve` pada terminal.
12. Dan untuk melihat hasilnya.. buka link http://127.0.0.1:8000 pada browser kesayangan anda.
13. Jangan lupa, jika ingin mendeploy project laravel, jangan lupa untuk mengubah bagian `APP_DEBUG=false` dan `APP_ENV=production` pada file .env, biar kalau error ga muncul (mengamankan codingan).

<hr>

# Direktori Laravel

## Env

Env disini berguna sebagai tempat untuk melakukan pengaturan bagi project kita

<hr>

# Data Akun

| **Role** | **Username** | **Email**       | **Password** |
| -------- | ------------ | --------------- | ------------ |
| Admin    | admin        | admin@gmail.com | password     |
| Writer   | fulan        | fulan@gmail.com | password     |

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
