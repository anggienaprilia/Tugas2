<?php
include 'koneksi.php'; //Mengimpor file koneksi.php yang berisi kelas Database untuk menghubungkan dengan database
?>

<?php
$mysqli = new Database(); //Membuat objek $mysqli dari kelas Database untuk menjalankan fungsi-fungsi yang berhubungan dengan database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keseluruhan Perbaikan Nilai</title>
    
    <!-- Mengimpor CSS Bootstrap untuk membuat tampilan yang responsif dan bergaya -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Mengatur CSS agar font yang digunakan pada body adalah Times New Roman -->
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        /* Mengatur teks pada judul kolom tabel (th) agar berada di tengah */
        th {
            text-align: center;
        }
    </style>

</head>

<body>
    <!-- Navbar untuk navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white bold" href="#">Menu</a> 
            <!-- Tombol untuk mengaktifkan/menonaktifkan menu navbar pada perangkat kecil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Daftar navigasi di dalam navbar -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Link untuk halaman Data Mahasiswa -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a>
                    </li>
                    <!-- Dropdown menu untuk Data Nilai -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a>
                        <!-- Pilihan submenu untuk Data Nilai Perbaikan -->
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-white" href="nilai1.php">Data Nilai Perbaikan</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai1_tugas.php">Data Nilai Perbaikan Tugas</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai2_presentasi.php">Data Nilai Perbaikan Presentasi</a></li>
                            <li><a class="dropdown-item text-white" href="turunan_nilai3_ujian.php">Data Nilai Perbaikan Ujian Akhir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tabel untuk menampilkan data keseluruhan nilai perbaikan -->
    <br><h3 class="text-center"><b>Data Keseluruhan Perbaikan Nilai:</h3></b>
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- Header tabel yang akan ditampilkan di atas setiap kolom -->
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
            <!-- Melakukan loop melalui data nilai perbaikan yang diambil dari fungsi tampilNilaiPerbaikan() dalam objek $mysqli -->
            <?php foreach ($mysqli->tampilNilaiPerbaikan() as $show) {?>
                <tr class="text-center">
                    <!-- Menampilkan setiap data dari nilai perbaikan -->
                    <td><?php echo $show['id_perbaikan'] ?></td>
                    <td><?php echo $show['tgl_perbaikan'] ?></td>
                    <td><?php echo $show['keterangan'] ?></td>
                    <td><?php echo $show['id_mahasiswa'] ?></td>
                    <td><?php echo $show['id_matkul'] ?></td>
                    <td><?php echo $show['id_semester'] ?></td>
                    <td><?php echo $show['id_nilai'] ?></td>
                    <td><?php echo $show['id_dosen'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <!-- Bootstrap JS untuk interaksi dinamis, seperti dropdown dan toggle navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
