<?php
include 'turunan_nilai.php'; //Mengimpor atau menyertakan file 'turunan_nilai.php' yang berisi kelas turunan, misalnya kelas NilaiTugas.
?>

<?php
$nilaitugas = new NilaiTugas(); //Membuat objek baru dari kelas NilaiTugas.
$tugas = $nilaitugas->tampilNilaiTugas(); //Memanggil fungsi tampilNilaiTugas() dari objek $nilaitugas untuk mengambil data nilai tugas dan menyimpannya ke variabel $tugas.
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur charset atau pengkodean karakter menjadi UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur agar tampilan halaman sesuai dengan lebar perangkat (responsif) -->
    <title>Data Perbaikan Nilai Tugas</title> <!-- Judul halaman -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menyertakan Bootstrap CSS untuk styling -->

    <!-- CSS untuk mengatur font Times New Roman -->
    <style>
        body {
            font-family: "Times New Roman", Times, serif; /* Mengatur font pada seluruh halaman menjadi Times New Roman */
        }

        /* Mengatur teks di judul kolom tabel agar berada di tengah */
        th {
            text-align: center; /* Mengatur agar teks di dalam elemen <th> berada di tengah */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white bold" href="#">Menu</a> <!-- Membuat elemen brand pada navbar dengan teks "Menu" -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Tombol untuk membuka/menutup navbar pada perangkat kecil -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a> <!-- Link ke halaman Data Mahasiswa -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a> <!-- Dropdown menu dengan pilihan Data Nilai -->
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-white" href="nilai1.php">Data Nilai Perbaikan</a></li> <!-- Link ke halaman Data Nilai Perbaikan -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai1_tugas.php">Data Nilai Perbaikan Tugas</a></li> <!-- Link ke halaman Data Nilai Perbaikan Tugas -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai2_presentasi.php">Data Nilai Perbaikan Presentasi</a></li> <!-- Link ke halaman Data Nilai Perbaikan Presentasi -->
                            <li><a class="dropdown-item text-white" href="turunan_nilai3_ujian.php">Data Nilai Perbaikan Ujian Akhir</a></li> <!-- Link ke halaman Data Nilai Perbaikan Ujian Akhir -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tabel Data Nilai Perbaikan Tugas -->
    <br><h3 class="text-center"><b>Data Perbaikan Nilai Tugas:</h3></b> <!-- Judul tabel ditampilkan di tengah halaman -->
    <table class="table table-bordered">
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
            <!-- Memulai perulangan untuk menampilkan data yang didapat dari $tugas -->
            <?php foreach ($tugas as $show) {?> 
                <tr class="text-center">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> <!-- Menyertakan Bootstrap JS untuk mendukung interaktivitas seperti dropdown dan responsive navbar -->
</body>
</html>
