# Database Structure

On this page we provide the lists of both functional and non functional requirements.

## Functional Requirements

### FR01 Spreadsheet exporter
 Petugas klinik (Dokter atau perawat) dapat meng-export data dari sistem ke
dalam bentuk spreadsheet. Silakan mengindentifikasi data apa saja yang
sebaiknya dapat di-export

Write the description, BPMN, etc.
1. Analisis Kebutuhan 
Kebutuhan keluaran yang nantinya akan dihasilkan oleh sistem informasi klinik Del adalah:
-Informasi data user/admin 
-Informasi data registrasi 
-Informasi data pasien 
-Informasi manajemen data obat
-Informasi manajemen administrasi 
-Informasi proses lihat rekam medis 
-Informasi proses lihat data apotek 
-Informasi proses lihat data pasien 
-Informasi proses lihat data dokter

3. BPMN
  Pada Sistem Informasi  ini  Pegawai Klinik harus memiliki akun, lalu pada akun tersebut memiliki atribut  Nama, username dan email. 
Dimulai ketika pasien datang ke klinik dan ingin melakukan konsultasi/berobat, setiap pasien  di cek apakah sudah pernah datang berobat
atau belum, bila belum maka didaftarkan dahulu, bila sudah maka akan dilakukan pemeriksaan awal pasien. Hasilnya di input dalam menu Data 
Pasien oleh Pegawai Klinik dimana nantinya data pasien ini terintegrasi ke setiap login pegawai klinik yang melakukan pemeriksaan. 
Pegawai klinik melakukan login ke sistem dengan menggunakan email dan password yang telah dibuat saat registrasi, lalu setelah login berhasil 
maka daftar pasien akan tampil sesuai pilihan yang diinput oleh bagian pendaftaran. 
  Pegawai Klinik melakukan input hasil pemeriksaan, menginput diagnosa, menginput tindakan dan obat-obat untuk tindakan,
  menginput resep untuk pasien. Semua dapat dilakukan pegawai klinik menggunakan HP ataupun PC yang sudah disediakan oleh klinik.
Data obat-obatan resep akan terintegrasi ke bagian data obat untuk disiapkan, sedang data biaya-biaya baik tindakan, \
biaya obat resep, obat tindakan dan tarif dokter terintegrasi ke bagian data pasien. Data laporan tersebut dapat dilihat atau diunduh 
oleh petugas klinik IT Del.
 


### FR Maintainability
Berbagai framework kontemporer sudah dilengkapi dengan berbagai fitur
yang mengarah pada aspek maintainability. Pada konteks struktur basis
data, misalnya, tersedia fitur manajemen perubahan (migration) dan
manajemen initial data (seeder).


## Non Functional Requirements

### NFR01 ...

Write the description and how would you make it.

### NFR ...

## Mockup

Put and describe your mockup. Pin point into which FR or NFR it your mockup adheres.

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
