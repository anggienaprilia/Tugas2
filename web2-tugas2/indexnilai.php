<?php
//Sertakan class NilaiPerbaikan dari file 'nilaiperbaikan.php'
//Ini penting untuk memuat class yang akan digunakan dalam script ini.
include 'nilaiperbaikan.php';

//Buat instance dari class NilaiPerbaikan untuk digunakan di dalam halaman
//Objek ini akan digunakan untuk mengakses method tampilData() yang akan menampilkan data nilai perbaikan.
$nilaiperbaikan = new NilaiPerbaikan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Pengaturan metadata dasar untuk dokumen HTML -->
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding menjadi UTF-8, standar untuk halaman web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keseluruhan Perbaikan Nilai</title>
    
    <!-- Mengimpor CSS Bootstrap untuk memberikan tampilan yang responsif dan lebih rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Mengatur CSS kustom untuk font dan elemen tabel -->
    <style>
        body 
        {
            font-family: "Times New Roman", Times, serif; /* Mengatur font body menjadi Times New Roman */
        }

        th 
        {
            text-align: center; /* Menyelaraskan teks header tabel ke tengah */
        }
    </style>
</head>

<body>
    <!-- Bagian navbar untuk navigasi di bagian atas halaman -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <!-- Teks logo navbar -->
            <a class="navbar-brand text-white bold" href="#">Menu</a> 
            <!-- Tombol toggle navbar untuk perangkat mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu navigasi yang dapat di-collapse pada tampilan mobile -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Link ke halaman Data Mahasiswa -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a>
                    </li>
                    <!-- Dropdown menu untuk Data Nilai -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a>
                        <!-- Submenu untuk berbagai kategori data nilai -->
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
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

    <!-- Bagian tabel untuk menampilkan data perbaikan nilai -->
    <br><h3 class="text-center"><b>Data Keseluruhan Perbaikan Nilai:</h3></b>
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- Header tabel yang mendefinisikan kolom tabel -->
                <th>ID Perbaikan</th>
                <th>Tanggal Perbaikan</th>
                <th>Keterangan</th>
                <th>ID Mahasiswa</th>
                <th>ID Matkul</th>
                <th>ID Semester</th>
                <th>ID Nilai</th>
                <th>ID Dosen</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop untuk menampilkan setiap data perbaikan nilai menggunakan fungsi tampilData() dari class NilaiPerbaikan -->
            <?php foreach ($nilaiperbaikan->tampilData() as $show) {?>
                <tr class="text-center">
                    <!-- Menampilkan data perbaikan nilai pada kolom yang sesuai -->
                    <td><?php echo $show['id_perbaikan'] ?></td> <!-- Menampilkan ID Perbaikan -->
                    <td><?php echo $show['tgl_perbaikan'] ?></td> <!-- Menampilkan Tanggal Perbaikan -->
                    <td><?php echo $show['keterangan'] ?></td> <!-- Menampilkan Keterangan -->
                    <td><?php echo $show['id_mahasiswa'] ?></td> <!-- Menampilkan ID Mahasiswa -->
                    <td><?php echo $show['id_matkul'] ?></td> <!-- Menampilkan ID Mata Kuliah -->
                    <td><?php echo $show['id_semester'] ?></td> <!-- Menampilkan ID Semester -->
                    <td><?php echo $show['id_nilai'] ?></td> <!-- Menampilkan ID Nilai -->
                    <td><?php echo $show['id_dosen'] ?></td> <!-- Menampilkan ID Dosen -->
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Menyertakan Bootstrap JS untuk interaksi dinamis seperti dropdown dan toggle navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
