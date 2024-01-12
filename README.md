# Imakom v2.0.0

## About

Ini repositori project website Ikatan Mahasiswa Komputer - Universitas Pembangunan Pancabudi, dibuat sebagai media organisasi untuk kebutuhan internal dan promosi aktivitas kegiatan yang dilaksanakan organisasi. Projek ini dapat digunakan secara berkelanjutan untuk generasi mendatang.

## Feature

Beberapa fitur di project ini :

- Struktur Organisasi
- Divisi Organisasi
- Program Kerja (**COMING SOON**). Program kerja yang dilakukan organisasi.
- Artikel (**COMING SOON**). Berita terbaru seputar teknologi dan kegiatan organisai.
- Dokumentasi. Dokumentasi setiap kegiatan organisasi.

## Technology

- PHP 8.2
  Bahasa pemrograman yang digunakan
- [Laravel v10](https://laravel.com/docs/10.x)
  Base framework yang digunakan untuk membangun projek ini.
- [TailwindCSS v3](https://tailwindcss.com/)
  Framework css yang digunakan untuk mendesain projek ini.
- [FilamentPHP](https://filamentphp.com/)
  Library php yang dipakai untuk membangun CMS atau admin panel yang dapat mengontrol content di project ini.

## How to Run

Step yang perlu dilakukan untuk dapat menjalankan projek ini.

### Docker Installation (Recommend)

Step ini disarankan untuk dilakukan dengan pengetahuan tentang Docker. Kebutuhan sebelum instalasi.

- [Docker include Docker Compose ](https://docs.docker.com/get-docker/) 

Jalankan perintah ini di terminal

```$
cp .env.example .env
compose install
./vendor/bin/sail up -d
./vendor/bin/sail npm install
./vendor/bin/sail artisan migrate:refresh --seed
./vendor/bin/sail artisan shield:generate --all
./vendor/bin/sail artisan shield:super-admin --user=1
./vendor/bin/sail npm run build
```

Saat proses development selalu jalankan perintah ini

```$
./vendor/bin/sail npm run dev
```

### Manual Installation

Jalankan perintah ini di terminal

```$
cp .env.example .env
compose install
php artisan up -d
npm install
php artisan migrate:refresh --seed
php artisan shield:generate --all
php artisan shield:super-admin --user=1
npm run build
```

Saat proses development selalu jalankan perintah ini

```$
npm run dev
```
test
### Access

Home page dapat diakses pada [http://localhost](http://localhost)\
Admin panel dapat diakses pada [http://localhost/admin](http://localhost/admin)\
Untuk dapat akses admin panel gunakan akun ini, email: `admin@gmail.com` and password `admin`.
