# D3 - Dekorasi Dalam Desain

Dekorasi Dalam Desain adalah sebuah aplikasi toko furniture

## Daftar Isi

- [Tentang Proyek](#tentang-proyek)
- [Fitur](#fitur)
- [Instalasi](#instalasi)
- [Penggunaan](#penggunaan)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)
- [Kontak](#kontak)

## Tentang Proyek

Dekorasi Dalam Desain adalah sebuah aplikasi toko furniture yang dirancang untuk memberikan pengalaman berbelanja yang
mudah dan menyenangkan bagi pengguna. Dengan berbagai pilihan furniture berkualitas tinggi, aplikasi ini membantu
pengguna menemukan dan membeli produk yang sesuai dengan gaya dan kebutuhan dekorasi interior mereka.

## Fitur

- Integrasi Midtrans
- Autentikasi Pengguna
- Katalog Produk yang Luas
- Keranjang Belanja dan Wishlist

## Teknologi yang Digunakan

- Frontend & Backend: Laravel
- Database: SQLite
- Payment Gateway: Midtrans
- Autentikasi: Laravel Jetstream

## Instalasi

### Prasyarat

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [Laravel](https://laravel.com/)

### Langkah-langkah Instalasi

1. Clone repositori
    ```sh
    git clone https://github.com/arlanariandi/furniture-shop
    ```

2. Masuk ke direktori proyek
    ```sh
    cd furniture-shop
    ```

3. Instal dependensi Laravel
    ```sh
    composer install
    ```

4. Instal dependensi Node.js
    ```sh
    npm install
    ```

5. Salin file `.env.example` menjadi `.env`
    ```sh
    cp .env.example .env
    ```

6. Generate kunci aplikasi
    ```sh
    php artisan key:generate
    ```

7. Konfigurasi file `.env` sesuai dengan kebutuhan, terutama bagian database.

8. Migrasi dan seeding database
    ```sh
    php artisan migrate --seed
    ```

9. Jalankan server Laravel
    ```sh
    php artisan serve
    ```

## Penggunaan

Berikan panduan singkat tentang cara menggunakan aplikasi ini setelah diinstalasi. Contohnya bisa mencakup
langkah-langkah untuk masuk, menambah data, atau menggunakan fitur-fitur tertentu.

## Kontribusi

Kontribusi sangat kami hargai! Harap ikuti langkah-langkah berikut untuk berkontribusi:

1. Fork repositori
2. Buat branch fitur (`git checkout -b fitur/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur AmazingFeature'`)
4. Push ke branch (`git push origin fitur/AmazingFeature`)
5. Buka Pull Request

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

arlanariandi - [@arlanariandi](https://www.linkedin.com/in/arlanariandi/) - arlanariandi@gmail.com

Link Proyek: [https://github.com/arlanariandi/furniture-shop](https://github.com/arlanariandi/furniture-shop)
