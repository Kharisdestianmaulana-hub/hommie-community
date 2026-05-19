# Hommie Community - Custom WordPress Theme 🚀

**Hommie Community** adalah sebuah tema WordPress kustom yang dibangun dari nol (*scratch*) tanpa *page builder* atau tema bawaan, dirancang khusus untuk kompetisi Web Design dengan tema besar **"Designing the Future"**.

Tema ini dirancang sebagai perapian digital (*digital hearth*) yang mewadahi talenta muda kreatif untuk berkolaborasi, membangun portofolio, dan meninggalkan warisan (*legacy*) di dunia digital.

---

## ✨ Fitur Unggulan

Untuk memenuhi dan melampaui kriteria "Desain Masa Depan", tema ini dilengkapi dengan berbagai fitur modern tingkat lanjut:

- 🌐 **Sistem Dwibahasa (Bilingual ID/EN)**: Implementasi translasi tanpa memuat ulang halaman (*No Page Reload*) menggunakan manipulasi Vanilla JavaScript dan CSS Variables.
- 🌙 **Dynamic Dark Mode**: Peralihan warna seketika ke Mode Gelap yang elegan, mengingat preferensi pengguna (*State Preservation*) melalui `localStorage`.
- ⏳ **Smart Preloader**: Animasi pemuatan minimalis yang hanya muncul satu kali selama sesi kunjungan (berbasis `sessionStorage`), membuat navigasi antar halaman terasa sangat cepat.
- 📦 **Modal Details (Pop-up)**: Memaksimalkan batasan 5 halaman dari kompetisi dengan mengimplementasikan detail program/postingan ke dalam jendela *Modal* interaktif.
- 📍 **Active Navigation State**: Penanda visual dinamis untuk halaman yang sedang aktif.
- ❓ **Interactive FAQ**: Menggunakan sistem *Accordion* yang bersih dan responsif.

Semua fitur di atas murni dibangun menggunakan **Vanilla CSS** dan **Vanilla JavaScript**, menjaga ukuran tema tetap ringan, teroptimasi untuk kecepatan (*Fast Rendering*), dan bersahabat dengan SEO.

---

## 📂 Struktur Tema Utama

- `header.php` - Kepala halaman (Navigasi, Transisi Mode Gelap, Toggle Bahasa)
- `footer.php` - Kaki halaman dan logika JavaScript utama (`main.js` terintegrasi)
- `front-page.php` - Halaman Beranda (Hero Section, Stats)
- `template-about.php` - Halaman Tentang Kami (Visi, Tim)
- `template-legacy.php` - Halaman Portofolio/Warisan (Hall of Fame)
- `template-programs.php` - Halaman Program & Mentorship (Sistem *Modal*)
- `template-join.php` - Halaman Pendaftaran Anggota & FAQ
- `style.css` - Lembar gaya utama (CSS Variables, Desain Neobrutalism/Minimalis)

---

## 🛠️ Panduan Instalasi Lokal

Jika kamu ingin menjalankan situs ini di komputer lokal, ikuti langkah-langkah berikut:

1. Unduh dan pasang [LocalWP](https://localwp.com/).
2. Buat situs baru (pilih opsi *Custom* jika *Preferred* bermasalah: PHP 8+, Nginx/Apache, MySQL 8+).
3. Unduh repositori ini (berupa file `.zip` atau *clone*).
4. Masuk ke direktori situs LocalWP kamu: `app/public/wp-content/themes/`.
5. Letakkan folder `hommie-theme` ini di dalamnya.
6. Masuk ke *Dashboard* WordPress kamu (`/wp-admin`).
7. Buka **Appearance > Themes** dan aktifkan **Hommie Community**.
8. Buat 5 Halaman (Beranda, Tentang, Jejak Kami, Program, Gabung) dari tab **Pages**, lalu *assign* masing-masing ke *Template* yang sesuai.
9. Masuk ke **Settings > Reading**, setel *Homepage* ke halaman "Beranda".
10. Masuk ke **Settings > Permalinks**, pilih struktur "Post name".

*Website siap dijalankan!* 🚀

---
*Didesain dan dikembangkan dengan ❤️ untuk kompetisi Web Design.*
