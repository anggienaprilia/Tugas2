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

![image](https://github.com/user-attachmunents/assets/b1239765-57ca-4501-b572-44749a04bb95)
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
  Dari sini, prinsip Encapsulation atau menyembunyikan detail implementasi telah digunakan den
</p>

![image](https://github.com/user-attachments/assets/08aa1e80-7278-4390-80e9-16509a0e20e0)
<br>

![image](https://github.com/user-attachments/assets/dee87669-158e-496d-bac6-82951d68c663)
<p>
  Penambahan function dilakukan dalam kelas Database, seperti function tampilMahasiswa() yang dipergunakan untuk mengambil atau menampilkan data mahasiswa dari tabel 'mahasiswa' dalam Database Perkuliahan. Adapula function tampilNilaiPerbaikan() yang dipergunakan untuk mengambil atau menampilkan data nilai perbaikan yang ada dalam tabel 'nilai_perbaikan'. Kedua function menggunakan perintah "SELECT * FROM tabel_name" yang memang berfungsi untuk mengambil data dari tabel tertentu dan kondisi tertentu.
</p>



