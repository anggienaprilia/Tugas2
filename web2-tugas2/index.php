<?php
//Menyertakan file 'koneksi.php' yang berisi konfigurasi dan class untuk koneksi database
include 'koneksi.php'
?>

<?php
//Membuat instance dari class 'Database' yang didefinisikan dalam 'koneksi.php'
$mysqli = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta charset untuk mendefinisikan encoding karakter, di sini UTF-8 -->
    <meta charset="UTF-8">
    <!-- Meta viewport untuk responsive layout pada berbagai perangkat -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Menggunakan Bootstrap untuk gaya CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Mengatur CSS tambahan, dalam hal ini font 'Times New Roman' -->
    <style>
        body {
            /* Mengatur font halaman menjadi Times New Roman */
            font-family: "Times New Roman", Times, serif;
        }

        /* Menyelaraskan teks dalam judul kolom tabel di tengah */
        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Bagian Navbar (Navigasi) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <!-- Nama brand pada navbar yang mengarah ke beranda -->
            <a class="navbar-brand text-white bold" href="#">Menu</a>
            <!-- Tombol untuk mengaktifkan menu dropdown pada tampilan mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Bagian menu navigasi yang dapat dikembangkan -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Link ke halaman data mahasiswa -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a>
                    </li>
                    <!-- Dropdown menu untuk navigasi ke halaman data nilai -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a>
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                            <!-- Link ke halaman nilai perbaikan -->
                            <li><a class="dropdown-item text-white" href="nilai1.php">Data Nilai Perbaikan</a></li>
                            <!-- Link ke halaman nilai perbaikan tugas -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai1_tugas.php">Data Nilai Perbaikan Tugas</a></li>
                            <!-- Link ke halaman nilai perbaikan presentasi -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai2_presentasi.php">Data Nilai Perbaikan Presentasi</a></li>
                            <!-- Link ke halaman nilai perbaikan ujian akhir -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai3_ujian.php">Data Nilai Perbaikan Ujian Akhir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tabel untuk menampilkan data mahasiswa -->
    <br>
    <h3 class="text-center"><b>Data Mahasiswa:</b></h3>
    <table class="table table-bordered">
        <thead>
            <!-- Header tabel untuk judul kolom -->
            <tr>
                <th>ID Mahasiswa</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping untuk menampilkan data mahasiswa yang diambil dari fungsi tampilMahasiswa() -->
            <?php foreach ($mysqli->tampilMahasiswa() as $show) { ?>
                <tr>
                    <!-- Menampilkan masing-masing kolom dari data mahasiswa -->
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

    <!-- Menyertakan script Bootstrap untuk mendukung interaksi komponen UI seperti dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>