<b>
Nama   : Anggie Nurul Aprilia <br>
Kelas  : TI 2D <br>
NPM    : 230202074
</b>

# OOP Database Perkuliahan

<p> 1. Pembuatan Database pada phpMyAdmin dengan dua tabel, yaitu: <br>
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

<p> 2. Membuat koneksi MYSQL dan PHP dalam bentuk OOP dengan penggunaan __construct <br>

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



<p> 3. Membuat kelas turunan dengan konsep Inheritance <br>

![image](https://github.com/user-attachments/assets/39ac55af-8e64-49d2-a942-5dbe9542c941)
<p>
    Sebelum membuat kelas turunan dari kelas Database, perlu dijalankan lebih dahulu perintah atau fungsi yang dapat mengimpor atau menyisipkan file berisi kelas Database. Perintah atau fungsi tersebut adalah Include. 
</p>
<p>
    Untuk membuat kelas turunan dari kelas Database, digunakan kata kunci extends. Extends sendiri memang digunakan untuk memperoleh kelas dari kelas lain, dan ini disebut pewarisan (Inheritance).
</p>
<p>
    Pembuatan constructor dan 'parent::__constructor' dalam kelas turunan perlu dibuat karena digunakan untuk memanggil constructor dari kelas induknya (Database).
</p>

![image](https://github.com/user-attachments/assets/55f9ec2e-d5d3-4a7f-917d-b01365c59964)
<br><i> Function dalam kelas Turunan untuk menampilkan data 'Perbaikan nilai tugas' dalam tabel nilai_perbaikan </i>

![image](https://github.com/user-attachments/assets/cc68dc23-4e43-486d-a845-9deb65bfd142)
<br><i> Function dalam kelas Turunan untuk menampilkan data 'Perbaikan nilai presentasi' dalam tabel nilai_perbaikan </i>

![image](https://github.com/user-attachments/assets/e68fd016-d116-4848-82f1-4b1f8822b4c9)
<br><i> Function dalam kelas Turunan untuk menampilkan data 'Perbaikan nilai ujian akhir' dalam tabel nilai_perbaikan </i>



    





