<?php
//Sertakan class Mahasiswa yang berada di file 'perbaikan-tugas.php'
include 'perbaikan-tugas.php';

//Buat instance dari class NilaiPerbaikanTugas yang digunakan untuk mengambil data perbaikan tugas
$tugas = new NilaiPerbaikanTugas();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Pengaturan metadata dasar untuk dokumen HTML -->
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding menjadi UTF-8, standar untuk halaman web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perbaikan Nilai Tugas</title> <!-- Judul halaman yang akan muncul di tab browser -->
    
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

    <!-- Tabel Data Nilai Perbaikan Tugas -->
    <br><h3 class="text-center"><b>Data Perbaikan Nilai Tugas:</h3></b> <!-- Menampilkan judul tabel di tengah halaman -->
    <table class="table table-bordered"> <!-- Membuat tabel dengan border untuk Data Perbaikan Nilai Tugas -->
        <thead>
            <tr>
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
            <!-- Perulangan untuk menampilkan data dari method tampilData() class NilaiPerbaikanTugas -->
            <?php foreach ($tugas->tampilData() as $show) {?> 
                <tr class="text-center"> <!-- Membuat baris untuk setiap data -->
                    <td><?php echo $show['id_perbaikan'] ?></td> <!-- Menampilkan ID Perbaikan -->
                    <td><?php echo $show['tgl_perbaikan'] ?></td> <!-- Menampilkan Tanggal Perbaikan -->
                    <td><?php echo $show['keterangan'] ?></td> <!-- Menampilkan Keterangan Perbaikan -->
                    <td><?php echo $show['id_mahasiswa'] ?></td> <!-- Menampilkan ID Mahasiswa -->
                    <td><?php echo $show['id_matkul'] ?></td> <!-- Menampilkan ID Mata Kuliah -->
                    <td><?php echo $show['id_semester'] ?></td> <!-- Menampilkan ID Semester -->
                    <td><?php echo $show['id_nilai'] ?></td> <!-- Menampilkan ID Nilai -->
                    <td><?php echo $show['id_dosen'] ?></td> <!-- Menampilkan ID Dosen -->
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Sertakan Bootstrap JS dari CDN untuk mendukung interaksi seperti dropdown dan menu navigasi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
