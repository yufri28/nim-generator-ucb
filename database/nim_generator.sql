-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Agu 2023 pada 11.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nim_generator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jalur_masuk`
--

CREATE TABLE `tb_jalur_masuk` (
  `id` int(11) NOT NULL,
  `jalur_masuk` varchar(20) NOT NULL,
  `kode_jalur_masuk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jalur_masuk`
--

INSERT INTO `tb_jalur_masuk` (`id`, `jalur_masuk`, `kode_jalur_masuk`) VALUES
(1, 'Umum/Reguler', 1),
(2, 'AK', 2),
(3, 'Transfer', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(9) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `f_id_prodi` int(11) NOT NULL,
  `f_id_periode` int(11) NOT NULL,
  `f_id_jalur_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nim`, `nama`, `f_id_prodi`, `f_id_periode`, `f_id_jalur_masuk`) VALUES
(1, '231111005', 'daasdasdas', 1, 1, 1),
(2, '231111004', 'Yufridon', 1, 1, 1),
(5, '232122001', 'Yufridon 3', 2, 2, 2),
(6, '231113001', 'Yufridon 4', 1, 1, 3),
(7, '231111003', 'Yufridon 43', 1, 1, 1),
(8, '231111002', 'Yufridon 433', 1, 1, 1),
(9, '231111001', 'Yufridon 4333', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id` int(11) NOT NULL,
  `periode_semester` varchar(15) NOT NULL,
  `kode_periode` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_periode`
--

INSERT INTO `tb_periode` (`id`, `periode_semester`, `kode_periode`) VALUES
(1, 'Semester 1', 1),
(2, 'Semester 2', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `nama_prodi`, `kode_prodi`) VALUES
(1, 'Ners', '11'),
(2, 'Bidan', '21'),
(3, 'Profesi', '31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jalur_masuk`
--
ALTER TABLE `tb_jalur_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id_prodi` (`f_id_prodi`),
  ADD KEY `f_id_semester` (`f_id_periode`),
  ADD KEY `f_id_jalur_masuk` (`f_id_jalur_masuk`);

--
-- Indeks untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jalur_masuk`
--
ALTER TABLE `tb_jalur_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`f_id_prodi`) REFERENCES `tb_prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`f_id_jalur_masuk`) REFERENCES `tb_jalur_masuk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mahasiswa_ibfk_3` FOREIGN KEY (`f_id_periode`) REFERENCES `tb_periode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
