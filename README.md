<b>
Nama   : Anggie Nurul Aprilia <br>
Kelas  : TI 2D <br>
NPM    : 230202074
</b>

# OOP Database Perkuliahan

<p><b> 1. Pembuatan Database pada phpMyAdmin dengan dua tabel, yaitu: <br></b>
A) Tabel mahasiswa dengan struktur tabel:
    <li>id_mahasiswa INT NOT NULL</li>
    <li>nim VARCHAR(20) NOT NULL</li>
    <li>nama_mhs VARCHAR(255) NOT NULL</li>
    <li>alamat VARCHAR(255) NOT NULLL</li>
    <li>email VARCHAR(255) NOT NULL</li>
    <li>no_telp VARCHAR(20) NOT NULL</li>
<br>
B) Tabel nilai_perbaikan dengan struktur tabel:
    <li>id_perbaikan INT NOT NULL</li>
    <li>tgl_perbaikan DATE NOT NULL</li>
    <li>keterangan VARCHAR(255) NOT NULL</li>
    <li>id_mahasiswa INT NOT NULL</li>
    <li>id_matkul INT NOT NULL</li>
    <li>id_semester INT NOT NULL</li>
    <li>id_nilai INT NOT NULL</li>
    <li>id_dosen INT NOT NULL</li>
<br>

![image](https://github.com/user-attachments/assets/fe213bc1-3b8c-40db-92d5-363c3c0c0db7)
<br><i> Relasi antara Tabel Mahasiswa dan Tabel Nilai Perbaikan </i>

<p><b> 2. Membuat koneksi MYSQL dan PHP dalam bentuk OOP dengan penggunaan __construct </b><br>

![image](https://github.com/user-attachments/assets/0495f9ca-efdf-4a82-a13e-1f158f8e779e)
<p>
  Dalam pembuatan kelas Database, properti seperti $host, $db_name, $username, $password dibuat dengan visibility private dikarenakan agar kelas Database tidak dapat diakses dari luar kelas, atau dengan kata lain, hanya bisa diakses dalam kelas itu sendiri. 
</p>
<p>
  Berbeda untuk properti $conn yang berfungsi untuk menampung koneksi. Properti $conn dibuat publik agar koneksi dalam kelas Database dapat diakses diluar kelas Database.
</p>
<p>
  Dari sini, prinsip Encapsulation atau menyembunyikan detail implementasi telah digunakan dengan penggunaan tingkat akses yaitu Private dan Public.
</p>

<p><b> 3. Membuat kelas turunan dengan konsep Inheritance </b><br>

![image](https://github.com/user-attachments/assets/966d32ee-3048-4073-893e-e70f9dbd8ce2)
<br><i> Kelas turunan MahasiswaData dari kelas Database </i>

![image](https://github.com/user-attachments/assets/ff05ef19-fc18-4f6a-a185-b1a643cecd25)
<br><i> Kelas turunan NilaiPerbaikan dari kelas Database </i>

![image](https://github.com/user-attachments/assets/9dc2056e-8ae9-4a5b-85b1-8a3082bafb4a)
<br><i> Kelas turunan NilaiPerbaikanPresentasi dari kelas Database </i>

![image](https://github.com/user-attachments/assets/7efcd039-99b1-4860-b7c6-b634a185231a)
<br><i> Kelas turunan NilaiPerbaikanTugas dari kelas Database </i>

![image](https://github.com/user-attachments/assets/2add0879-82cf-4b1c-bcbc-93ab3e446939)
<br><i> Kelas turunan NilaiPerbaikanUjian dari kelas Database </i>

<p>
    Sebelum membuat kelas turunan dari kelas Database, perlu dijalankan lebih dahulu perintah atau fungsi yang dapat mengimpor atau menyisipkan file berisi kelas Database. Perintah atau fungsi tersebut adalah Include. 
</p>
<p>
    Untuk membuat kelas turunan dari kelas Database, digunakan kata kunci extends. Extends sendiri memang digunakan untuk memperoleh kelas dari kelas lain, dan ini disebut pewarisan (Inheritance).
</p>
<p>
    Pada kelas keturunan menggunakan override (menimpa) sehingga bisa menerapkan prinsip Polymorphism.
</p>

<p><b> 4. Membuat Index <br></b>

![image](https://github.com/user-attachments/assets/6871f1eb-62e0-4cc0-a44b-d77107184a8e)
<p>
    Index yang muncul atau dijalankan pertama kali akan menampilkan data keseluruhan mahasiswa, sehingga perlu menyisipkan file 'mahasiswa.php' dengan penggunaan include.
</p>
<p>
    Pembuatan instansiasi dari kelas MahasiswaData pada file mahasiswa.php dibuat karena kelas turunan, dan objek akan digunakan untuk mengakses metode tampilData() yang disesuaikan untuk menampilkan data Mahasiswa.
</p>
<p>
    Menggunakan dokumen HTML diperlukan untuk membuat tampilan halaman, seperti nama halaman, jenis huruf yang dipakai maupun penggunaan navbar/button, serta penyajian data yang dimunculkan.
</p>

![image](https://github.com/user-attachments/assets/844f0a68-10ba-405d-94cd-6c1d470bf252)
<p>
    Penggunaan internal css dalam HTML yaitu mengatur font body menjadi Times New Roman dan mengatur teks header agar berada ditengah. Penggunaan css itu berada dalam tag '<style>' yang berada didalam bagian <head>.
</p>

![image](https://github.com/user-attachments/assets/2b396fdb-8592-4813-92de-c4f6f1a6d2f0)
<p>
    Gambar diatas menunjukkan pembuatan dropdown pada navbar yang akan berisikan navbar untuk Data Nilai Perbaikan, Data Nilai Perbaikan Tugas, Data Nilai Perbaikan Presentasi dan Data Nilai Perbaikan Ujian Akhir. Setiap navbar akan mengarah ke halaman yang berbeda sesuai dengan halaman yang dituju. Untuk dapat berpindah halaman, pembuatan navbar tentu disertai dengan penggunaan 'a href' yang memang digunakan untuk membuat hyperlink dan memungkinkan untuk beralih halaman ketika diklik.
</p>

![image](https://github.com/user-attachments/assets/6d14ad31-e1d0-4fb6-91ba-723adb82717c)
<br><i> Judul halaman 'Data Mahasiswa' dengan ukuran header 3 </i>

![image](https://github.com/user-attachments/assets/0e90b8e1-3242-49a1-baa4-ebecdb8e30a2)
<br><i> Membuat tabel untuk data mahasiswa </i>

![image](https://github.com/user-attachments/assets/0bcfabee-b650-42c5-abda-f1fc9645a623)
<p>
    Foreach digunakan untuk mengiterasi atau melakukan looping melalui setiap elemen dari array atau objek yang bisa diiterasi, dalam hal ini adalah hasil dari metode $mahasiswa->tampilData(). Foreach mempermudah akses ke setiap elemen array tanpa perlu menggunakan indeks.
</p>
<p>
    $show mendefinisikan variabel $show yang akan menyimpan nilai dari tiap elemen yang diiterasi pada setiap langkah foreach.
</p>

<p><b> 5. Membuat Tabel lainnya pada halaman yang berbeda </b><br>

<p>
    Pembuatan tabel dan halaman yang lain hampir sama dengan pembuatan index. Hanya nama file dan penyisipan serta pemanggilannya saja yang berbeda, menyesuaikan data dan kelas yang dipanggil. Contohnya beberapa halaman dibawah ini =>
</p>

![image](https://github.com/user-attachments/assets/bac07303-8d36-4c49-a473-2c4d03d22993)
<br><i> include dan instansiasi untuk halaman Data Nilai Perbaikan </i>

![image](https://github.com/user-attachments/assets/a0393f28-af32-4398-8195-bd753fb6d4d0)
<br><i> foreach dan objek $nilaiperbaikan untuk menampilkan Data Nilai Perbaikan </i>

![image](https://github.com/user-attachments/assets/95d4924e-f8e0-4e73-9eb4-d7728fd69ef5)
<br><i> include dan instansiasi untuk halaman Data Nilai Perbaikan Tugas </i>

![image](https://github.com/user-attachments/assets/db5c06dd-6e23-4498-bbc1-ec07323a9fde)
<br><i> foreach dan objek $tugas untuk menampilkan Data Nilai Perbaikan Tugas </i>

![image](https://github.com/user-attachments/assets/ba7d64bb-cda2-4142-a168-29322f24e736)
<br><i> include dan instansiasi untuk halaman Data Nilai Perbaikan Presentasi </i>

![image](https://github.com/user-attachments/assets/65903694-8ce8-4d11-bad2-0ea19a0c3500)
<br><i> foreach dan objek $presentsi untuk menampilkan Data Nilai Perbaikan Presentasi </i>

![image](https://github.com/user-attachments/assets/6ede4659-7647-46b5-8457-8ec8f4710b87)
<br><i> include dan instansiasi untuk halaman Data Nilai Perbaikan Ujian Akhir </i>

![image](https://github.com/user-attachments/assets/7fa0afa8-8e07-46db-806f-cea515a4c214)
<br><i> foreach dan objek $ujian untuk menampilkan Data Nilai Perbaikan ujian Akhir </i>

<p>
    Pada gambar diatas, perbedaan antara satu dan lainnya hanya nama dari file yang dilakukan include (penyisipan), pembuatan instansiasi dan objek yang akan ditampilkan pada penggunaan foreach, sehingga hampir keseluruhan untuk struktur tabel bisa dikatakan memiliki tampilan yang sama.
</p>
<hr>







    





