<?php
//Sertakan file 'mahasiswa.php' yang berisi class Mahasiswa.
//Ini penting untuk memuat class yang akan digunakan dalam script ini.
include 'mahasiswa.php';

//Membuat instance dari class MahasiswaData yang mungkin merupakan turunan dari class Mahasiswa.
//Objek ini akan digunakan untuk mengakses method tampilData() yang akan menampilkan data mahasiswa.
$mahasiswa = new MahasiswaData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Pengaturan metadata dasar untuk dokumen HTML -->
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding menjadi UTF-8, standar untuk halaman web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    
    <!-- Mengimpor CSS Bootstrap untuk memberikan tampilan yang responsif dan lebih rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Mengatur CSS kustom untuk font dan elemen tabel -->
    <style>
        body 
        {
            font-family: "Times New Roman", Times, serif; /* Mengatur font body menjadi Times New Roman */
        }

        th {
            text-align: center; /* Menyelaraskan teks header tabel ke tengah */
        }
    </style>
</head>

<body>
    <!-- Membuat navigasi yang responsif menggunakan komponen navbar dari Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white bold" href="#">Menu</a>
            <!-- Tombol untuk menu navigasi yang bisa di-collapse pada tampilan mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Item navigasi -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Menu navigasi untuk halaman data mahasiswa -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a>
                    </li>
                    <!-- Dropdown menu untuk data nilai mahasiswa -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a>
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                            <!-- Sub-menu untuk berbagai kategori nilai mahasiswa -->
                            <li><a class="dropdown-item text-white" href="indexnilai.php">Data Nilai Perbaikan</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai1_tugas.php">Data Nilai Perbaikan Tugas</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai2_presentasi.php">Data Nilai Perbaikan Presentasi</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai3_ujian.php">Data Nilai Perbaikan Ujian Akhir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <!-- Judul halaman Data Mahasiswa -->
    <h3 class="text-center"><b>Data Mahasiswa:</b></h3>

    <!-- Tabel untuk menampilkan data mahasiswa -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- Header kolom tabel -->
                <th>ID Mahasiswa</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping untuk menampilkan data mahasiswa yang diambil dari method tampilData() -->
            <!-- Method tampilData() di sini diasumsikan mengembalikan array data mahasiswa -->
            <?php foreach ($mahasiswa->tampilData() as $show) { ?>
                <tr>
                    <!-- Menampilkan setiap data mahasiswa dalam baris tabel -->
                    <td class="text-center"><?php echo $show['id_mahasiswa'] ?></td>
                    <td class="text-center"><?php echo $show['nim'] ?></td>
                    <td><?php echo $show['nama_mhs'] ?></td>
                    <td><?php echo $show['alamat'] ?></td>
                    <td><?php echo $show['email'] ?></td>
                    <td class="text-center"><?php echo $show['no_telp'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Script Bootstrap untuk interaktivitas seperti dropdown menu -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
