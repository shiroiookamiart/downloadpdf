<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Upload and Download PDF

ejemplo de subida y bajada de archivos pdf


## Pre Requisitos

Laravel 8+

## Instalacion

abre un terminal y Copia

```
git clone https://github.com/shiroiokamiart/downloadpdf.git
```

una ves descargado ejecuta

```
cd downloadpdf
```

una ves dentro de la carpeta del proyecto ejecuta

```
composer update
```

luego ejecuta los siguiente comando dependiendo tu sistema operativo

### Windows

```
copy database\db.sqlite.example database\db.sqlite
```

```
copy .env.example .env
```

### linux

```
cp database/db.sqlite.example database/db.sqlite
```

```
cp .env.example .env
```

Una ves copiado el archivo .env ejecuta

```
php artisan migrate
```

para finalizar

```
php artisan serve
```

y luego 

```
127.0.0.1:8000
```

# Imagenes

![Alt text](/public/imagenes/example.png)