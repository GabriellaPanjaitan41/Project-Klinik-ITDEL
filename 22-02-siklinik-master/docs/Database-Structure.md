# Database Structure

On this page we provide the lists of tables used to store the application data.

## Physical Data Model


## Data Description
- Bpmn 
  Pada Sistem Informasi  ini  Pegawai Klinik harus memiliki akun, lalu pada akun tersebut memiliki atribut  Nama, username dan email. Dimulai ketika pasien datang ke klinik dan ingin melakukan konsultasi/berobat, setiap pasien  di cek apakah sudah pernah datang berobat atau belum, bila belum maka didaftarkan dahulu, bila sudah maka akan dilakukan pemeriksaan awal pasien. Hasilnya di input dalam menu Data Pasien oleh Pegawai Klinik dimana nantinya data pasien ini terintegrasi ke setiap login pegawai klinik yang melakukan pemeriksaan. Pegawai klinik melakukan login ke sistem dengan menggunakan email dan password yang telah dibuat saat registrasi, lalu setelah login berhasil maka daftar pasien akan tampil sesuai pilihan yang diinput oleh bagian pendaftaran.
  Pegawai Klinik melakukan input hasil pemeriksaan, menginput diagnosa, menginput tindakan dan obat-obat untuk tindakan, menginput resep untuk pasien. Semua dapat dilakukan pegawai klinik menggunakan HP ataupun PC yang sudah disediakan oleh klinik. Data obat-obatan resep akan terintegrasi ke bagian data obat untuk disiapkan, sedang data biaya-biaya baik tindakan, biaya obat resep, obat tindakan dan tarif dokter terintegrasi ke bagian data pasien. Data laporan tersebut dapat dilihat atau diunduh oleh petugas klinik IT Del.


## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
