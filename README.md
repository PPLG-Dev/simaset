# Log Pengembangan Proyek SIMASET

Dokumen ini adalah catatan langkah-demi-langkah dari proses development yang telah dilakukan untuk membangun fondasi proyek SIMASET. Gunakan ini sebagai panduan untuk memahami alur kerja dari awal hingga progres saat ini.

---

## Langkah 1: Inisialisasi Proyek & Konfigurasi Awal

1. **Membuat Proyek Laravel**
    Proyek ini diinisialisasi menggunakan Composer dengan perintah:

    ```bash
    composer create-project laravel/laravel laravel12
    ```

2. **Menyiapkan File Environment**
    File konfigurasi environment disiapkan dengan menyalin file contoh dari Laravel.

    ```bash
    cp .env.example .env
    ```

3. **Generate Application Key**
    Kunci enkripsi unik untuk aplikasi dibuat menggunakan Artisan.

    ```bash
    php artisan key:generate
    ```

4. **Konfigurasi Koneksi Database**
    Koneksi ke database diatur di dalam file `.env`.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=simaset
    DB_USERNAME=root
    DB_PASSWORD=
    ```

### Langkah 2: Membangun Struktur Database

1. **Membuat Kumpulan File (Model, Migrasi, Controller)**
    Untuk setiap entitas data (Tanah, Bangunan, dll.), file Model, Migrasi, dan Controller dibuat sekaligus menggunakan perintah `make:model` dengan flag `-mc`.

    ```bash
    php artisan make:model Kategori -mc
    php artisan make:model Tanah -mc
    php artisan make:model Bangunan -mc
    php artisan make:model Ruangan -mc
    php artisan make:model Barang -mc
    ```

2. **Mendefinisikan Kolom & Relasi Tabel**
    File-file migrasi yang telah dibuat pada langkah sebelumnya (terletak di `database/migrations/`) kemudian diedit untuk menambahkan definisi kolom dan relasi (foreign key) sesuai dengan [ERD Proyek](CATATAN_PROYEK.md).

3. **Menjalankan Migrasi ke Database**
    Setelah semua skema tabel didefinisikan dalam file migrasi, perintah `migrate` dijalankan untuk membuat tabel-tabel tersebut secara fisik di dalam database.

    ```bash
    php artisan migrate
    ```

---

### Progres Saat Ini

Pada titik ini, **fondasi proyek telah selesai**. Seluruh tabel yang dibutuhkan sudah ada di dalam database, dan file-file `Model` serta `Controller` sudah siap untuk diisi dengan logika bisnis.

### Langkah Selanjutnya

Fokus pengembangan selanjutnya adalah **mengimplementasikan fungsionalitas CRUD (Create, Read, Update, Delete) untuk data Kategori**, sesuai dengan tugas pertama pada **Milestone 1** yang dijelaskan di [CATATAN_PROYEK.md](CATATAN_PROYEK.md).
