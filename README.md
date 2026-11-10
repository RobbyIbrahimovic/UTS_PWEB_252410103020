# UTS Pemrograman Web - Prompt Engineering Events Hub

Proyek aplikasi web manajemen event teknologi berbasis **Laravel 11** murni tanpa database dan tanpa starter kit (Breeze/Jetstream), dikembangkan untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Berbasis Web.

---

## Identitas Pengembang

- **Nama Lengkap** : Robby Ibrahimovic Wibowo
- **NIM** : 252410103020
- **Mata Kuliah** : Pemrograman Berbasis Web
- **Tahun Akademik** : 2026/2027

---

## Gambaran Proyek

**Prompt Engineering Events Hub (P.E)** adalah platform informasi dan manajemen agenda workshop/webinar seputar ekosistem Artificial Intelligence dan teknik prompting modern. Aplikasi ini mengusung antarmuka bertema *Galaxy* dengan aksen geometris menggunakan Tailwind CSS.

### Batasan & Ketentuan Teknis yang Dipenuhi:
1. **1 Controller Utama**: Seluruh alur data dan pemanggilan view diatur secara terpusat melalui `app/Http/Controllers/PageController.php`.
2. **Arsitektur Blade MVC**: Memiliki 9 file inti yang saling terintegrasi (`web.php`, `PageController.php`, layout `app.blade.php`, view `login`, `dashboard`, `profile`, `pengelolaan`, serta komponen `navbar` dan `footer`).
3. **Blade Directives**: Mengimplementasikan `@extends`, `@section`, `@yield`, `@include`, serta komponen `<x-footer />`.
4. **Alur Autentikasi Dummy (HTTP GET)**: Parameter `username` dikirim dari form login melalui method `GET` dan dipertahankan antar halaman (`dashboard`, `profile`, dan `pengelolaan`).
5. **Rendering Data Array Dummy**: Menampilkan daftar event teknologi secara dinamis di `pengelolaan.blade.php` menggunakan perulangan `@foreach`, lengkap dengan thumbnail poster dan avatar pemateri via helper `asset()`.

---

## Struktur File Proyek

```text
UTS_PWEB_252410103020/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php          # 1 controller pengendali seluruh halaman & data dummy
├── public/
│   └── images/
│       ├── acara/                          # poster kegiatan event
│       └── pembicara/                      # foto profil pemateri
├── resources/
│   └── views/
│       ├── components/
│           ├── footer.blade.php            # komponen footer identitas mahasiswa (<x-footer />)
│           └── navbar.blade.php            # komponen navigasi (@include)
│       ├── layouts/
│           └── app.blade.php               # master layout (@yield & master styling)
│       ├── dashboard.blade.php             # halaman dashboard ucapan selamat datang
│       ├── login.blade.php                 # form login dengan method GET
│       ├── pengelolaan.blade.php           # tabel event dengan looping @foreach
│       └── profile.blade.php               # ID Card peserta event
└── routes/
    └── web.php                             # pendefinisian 4 rute utama dengan route naming
```

---

## Panduan Menjalankan Aplikasi Secara Lokal

1. **Clone Repository**:
   ```bash
   git clone https://github.com/RobbyIbrahim/UTS_PWEB_252410103020.git
   cd UTS_PWEB_252410103020
   ```

2. **Instal Dependensi**:
   ```bash
   composer install
   ```

3. **Salin File Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan Development Server**:
   ```bash
   php artisan serve
   ```

5. **Akses di Browser**:
   Buka `http://127.0.0.1:8000` pada web anda.

---

## Dokumentasi Tampilan Aplikasi

### 1. Halaman Login
!(public/images/screenshots/halaman_login_ss.png)

*Form login dengan validasi karakter huruf/angka dan pengiriman parameter GET.*

### 2. Halaman Dashboard
!(public/images/screenshots/halaman_dashboard_ss.png)

*Tampilan dashboard menyambut sesi user aktif beserta ringkasan metrik event.*

### 3. Halaman Pengelolaan Event
!(public/images/screenshots/halaman_pengelolaan_ss.png)

*Tabel perulangan `@foreach` menampilkan data event, kuota, badge status, poster, dan foto pemateri.*

### 4. Halaman Profile Peserta
!(public/images/screenshots/halaman_profil_ss.png)

*Kartu identitas peserta event dengan inisial avatar geometris dan data sesi aktif.*

---

## Demo Video YouTube

- **Link Video UTS** : [Tonton Video Demo di YouTube](To Be Added)

## Thank You :]
