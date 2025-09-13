👟 ONYX – Sneaker & Lifestyle Store

ONYX adalah aplikasi web untuk membeli berbagai jenis sneakers, running shoes, sport shoes, dan streetwear edition.
Website ini dibuat untuk memberikan pengalaman belanja online yang mudah, stylish, responsif, dan aman dengan tampilan modern.

✨ Fitur Utama

📱 Mobile Friendly – 100% responsif dengan Tailwind CSS.

🗂️ Kategori Produk – Sneakers, Running, Casual, Sport, Limited Edition.

🛒 Cart & Checkout – Proses belanja yang cepat dan praktis.

🎟️ Promo & Voucher – Dapatkan diskon menarik saat checkout.

❤️ Wishlist – Simpan produk favorit untuk dibeli nanti.

🔎 Pencarian Produk Cepat – Cari sepatu sesuai ukuran, warna, atau model.

🛠️ Teknologi yang Digunakan

Laravel – Framework backend dan routing.

Tailwind CSS – Styling modern & responsif.

MySQL – Database produk & user.

GitHub – Version control & kolaborasi tim.

🚀 Instalasi
1. Clone Repository
git clone https://github.com/FaustianOF/onyx.git
cd ONYX

2. Install Dependencies
composer install
npm install

3. Setup Environment
cp .env.example .env
php artisan key:generate

4. Konfigurasi Database

Edit file .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=onyx_store
DB_USERNAME=your_username
DB_PASSWORD=your_password

5. Migrasi Database
php artisan migrate --seed

6. Jalankan Server
php artisan serve

📂 Struktur Proyek
├── app/                # Logic utama Laravel
├── public/             # Aset publik (gambar, css, js, foto sepatu)
├── resources/          # Blade templates & Tailwind CSS
├── routes/             # Routing aplikasi
├── database/           # Migrasi & seeder
├── .env.example        # File konfigurasi environment
└── README.md           # Dokumentasi proyek

🛒 Checkout Flow
sequenceDiagram
    User->>ONYX: Pilih produk sepatu
    User->>ONYX: Tambahkan ke Cart
    ONYX->>Database: Simpan data cart
    User->>ONYX: Lanjutkan ke Checkout
    ONYX->>Payment Gateway: Proses pembayaran
    Payment Gateway-->>ONYX: Status pembayaran (berhasil/gagal)
    ONYX-->>User: Konfirmasi pesanan & detail pengiriman

👥 Contributors

This is my Team Project to make ONYX Sneaker Website:

Jonathan Alyn – UI/UX Designer

Owen Faustian – Backend & Frontend Developer

Villia – UI/UX Designer

📌 Contact & Support

Email: onyx.sneakershop@gmail.com

Website: ONYX (not hosted yet)
