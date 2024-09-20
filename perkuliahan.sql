-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2024 pada 12.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkuliahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mhs`, `alamat`, `email`, `no_telp`) VALUES
(1, '2201001', 'Arlena Marielle Putri\r\n', 'Jl. Merdeka No. 1', 'arlena.marielle@gmail.com', '081234567890'),
(2, '2201002', 'Zevian Alexander Raditya', 'Jl. Sudirman No. 12', 'zevian.alexander@gmail.com', '081234567891'),
(3, '2201003', 'Kyara Isabella Pratama', 'Jl. Gatot Subroto 45', 'kyara.isabella@gmail.com', '081234567892'),
(4, '2201004', 'Levi Jonathan Mahendra', 'Jl. Diponegoro 3', 'levi.jonathan@gmail.com', '081234567893'),
(5, '2201005', 'Elora Catherine Azzahra', 'Jl. Soekarno Hatta 6', 'elora.catherine@gmail.com', '081234567894'),
(6, '2201006', 'Ryu Sebastian Anggara', 'Jl. Ahmad Yani 22', 'ryu.sebastian@gmail.com', '081234567895'),
(7, '2201007', 'Mikaela Evelyn Kartika', 'Jl. Cendana 78', 'mikaela.evelyn@gmail.com', '081234567896'),
(8, '2201008', 'Zayn William Pratama', 'Jl. Kartini 9', 'zayn.william@gmail.com', '081234567897'),
(9, '2201009', 'Liora Anastasia Wijaya', 'Jl. Anggrek 10', 'liora.anastasia@gmail.com', '081234567898'),
(10, '2201010', 'Kaiden Rafael Wijaksana', 'Jl. Kenanga 2', 'kaiden.rafael@gmail.com', '081234567899');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_perbaikan`
--

CREATE TABLE `nilai_perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai_perbaikan`
--

INSERT INTO `nilai_perbaikan` (`id_perbaikan`, `tgl_perbaikan`, `keterangan`, `id_mahasiswa`, `id_matkul`, `id_semester`, `id_nilai`, `id_dosen`) VALUES
(1, '2023-08-12', 'Perbaikan nilai tugas', 1, 101, 1, 501, 301),
(2, '2023-08-15', 'Perbaikan nilai ujian akhir', 2, 102, 1, 502, 302),
(3, '2023-08-20', 'Perbaikan nilai presentasi', 3, 103, 1, 503, 303),
(4, '2023-08-22', 'Perbaikan nilai presentasi', 4, 104, 1, 504, 304),
(5, '2023-08-25', 'Perbaikan nilai ujian akhir', 5, 105, 1, 505, 301),
(6, '2023-08-28', 'Perbaikan nilai ujian akhir', 6, 106, 1, 506, 302),
(7, '2023-09-02', 'Perbaikan nilai tugas', 7, 107, 1, 507, 303),
(8, '2023-09-05', 'Perbaikan nilai ujian akhir', 8, 108, 1, 508, 304),
(9, '2023-09-10', 'Perbaikan nilai tugas', 9, 109, 1, 509, 301),
(10, '2023-09-12', 'Perbaikan nilai ujian akhir', 10, 110, 1, 510, 302);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  ADD CONSTRAINT `nilai_perbaikan_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
