<?php
//Menyertakan file turunan_nilai.php yang berisi kelas NilaiTugas.
//File ini diperlukan untuk memanggil objek NilaiTugas di bagian selanjutnya.
include 'turunan_nilai.php';
?>

<?php
//Membuat objek dari kelas NilaiTugas untuk memanggil data nilai ujian.
$nilaiujian = new NilaiTugas();

//Memanggil method tampilNilaiUjian untuk mengambil data nilai ujian akhir dari database.
$ujianakhir = $nilaiujian->tampilNilaiUjian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perbaikan Nilai Ujian Akhir</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS untuk mengatur font Times New Roman -->
    <style>
        body 
        {
            font-family: "Times New Roman", Times, serif;
        }

        /* Mengatur teks di judul kolom tabel agar berada di tengah */
        th 
        {
            text-align: center;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white bold" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Nilai
                        </a>
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

        <!-- Tabel Data Nilai Perbaikan Tugas -->
        <br><h3 class="text-center"><b>Data Perbaikan Nilai Ujian Akhir:</h3></b>
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
                <?php foreach ($ujianakhir as $show) {?>
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
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
