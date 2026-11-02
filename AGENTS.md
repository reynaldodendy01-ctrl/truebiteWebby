## TrueBite: Brief Styling (WAJIB DIBACA SETIAP SESI)

Proyek: website portfolio statis TrueBite (snack protein, komunitas gym dan padel). Laravel + Blade. Tanpa keranjang, login, form. Tombol beli = link WhatsApp.

### Aturan
- Ubah HANYA resources/views/ dan CSS (public/css/). Jangan sentuh controller, model, route, migration, config.
- Jangan hapus sintaks Blade (@extends, @section, @yield, @foreach, @if, @isset, {{ }}, number_format, config()).
- Jangan jalankan perintah git. Pengguna yang mengurus git.
- Tanpa build step (cPanel tanpa npm): Tailwind CDN + Google Fonts.
- Jangan mengarang data nyata. Placeholder di moodboard bukan isi final.
- Jangan menyalin logo/maskot/teks dari gambar referensi.

### Desain
Warna: Gorilla Orange #E8461E, Cocoa #2A0F07, Burnt Orange #C73A12 (tombol, teks putih), Amber #FF8C3A (hanya di atas coklat gelap), Cream #FBE8C8, Caramel #7A3B1F. Proporsi: krem 40%, coklat gelap 25%, oranye 25%. Tanpa merah, biru, gradasi, neon, bayangan tebal.
Font: Bricolage Grotesque 800 (judul, angka), DM Sans 400/700 (isi, tombol).
Gaya: flat, sudut sangat bulat, kartu bento, tombol pill, headline besar, chip harga/protein/kalori.
Kontras: teks kecil jangan di atas oranye pekat. Teks isi coklat gelap di atas krem.

### Variabel per halaman
- home: $products, $locations, $testimonials, $faqs ($statistics hanya jika ada, pakai @isset)
- menu: $products | menu-detail: $product | faqs: $faqs
- locations: $locations (google_maps_link) | testimonials: $testimonials

### Progress (update tiap selesai satu halaman)
- [x] layouts/app.blade.php (navbar + footer)
- [x] Home
- [x] Menu
- [x] Detail varian
- [x] Lokasi
- [x] Testimoni
- [x] FAQ

### TODO / catatan
- Route lokasi: cek `php artisan route:list` (/location atau /locations) dan samakan link navbar.
- Cek nama view Home: home.blade.php atau welcome.blade.php, samakan dengan HomeController.
- Tabel statistics belum ada.
