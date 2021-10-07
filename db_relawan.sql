-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 07 Okt 2021 pada 05.28
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_relawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jam_masuk` datetime DEFAULT NULL,
  `jam_pulang` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absen`, `username`, `jam_masuk`, `jam_pulang`) VALUES
(34, 'raider124', '2021-09-02 10:50:28', NULL),
(35, 'raider124', NULL, '2021-09-02 10:50:29'),
(36, 'raider124', '2021-09-02 10:50:29', NULL),
(37, 'raider124', NULL, '2021-09-02 10:50:30'),
(38, 'raider124', '2021-09-02 10:50:31', NULL),
(39, 'raider124', NULL, '2021-09-02 10:50:32'),
(40, 'raider109', '2021-09-02 11:13:34', NULL),
(41, 'raider109', NULL, '2021-09-02 11:13:35'),
(42, 'raider109', '2021-09-02 11:13:36', NULL),
(43, 'raider109', NULL, '2021-09-02 11:13:36'),
(44, 'raider124', '2021-09-02 14:08:06', NULL),
(45, 'raider124', NULL, '2021-09-02 14:08:07'),
(46, 'raider145', '2021-09-02 14:23:03', NULL),
(47, 'raider145', NULL, '2021-09-02 14:23:04'),
(48, 'raider145', '2021-09-02 14:46:35', NULL),
(49, 'raider145', NULL, '2021-09-02 14:46:36'),
(50, 'raider130', '2021-09-02 14:59:54', NULL),
(51, 'raider130', NULL, '2021-09-02 14:59:55'),
(52, 'raider125', '2021-09-02 17:08:10', NULL),
(53, 'raider125', NULL, '2021-09-02 17:08:11'),
(54, 'raider125', '2021-09-02 17:08:12', NULL),
(55, 'raider125', NULL, '2021-09-02 17:08:14'),
(56, 'raider120', '2021-09-04 12:32:50', NULL),
(57, 'raider120', NULL, '2021-09-04 12:33:05'),
(58, 'raider111', '2021-09-04 15:40:04', NULL),
(59, 'raider111', NULL, '2021-09-04 15:40:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_surat` int(11) NOT NULL,
  `kode_anggota` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `alasan` text NOT NULL,
  `keterangan` enum('izin','cuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_surat`, `kode_anggota`, `nama`, `jabatan`, `tanggal_mulai`, `tanggal_akhir`, `alasan`, `keterangan`) VALUES
(1, 'raider109', 'Indra Setyo', 'Ketua', '2021-09-02', '2021-09-30', 'Ada pernikahan saudara diluar kota', 'izin'),
(2, 'raider145', 'Meuti Zari Annisa', 'Anggota', '2021-09-03', '2021-09-05', 'Acara keluarga di luar kota', 'cuti'),
(3, 'raider130', 'Rico Ronaldo', 'Anggota', '2021-09-15', '2021-09-30', 'Nyelawat saudara di Jakarta', 'izin'),
(4, 'raider130', 'Rico Ronaldo', 'Anggota', '2021-09-21', '2021-09-30', 'Liburan bersama keluarga ke Bali', 'cuti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari_efektif`
--

CREATE TABLE `hari_efektif` (
  `id_bulan` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `jumlah_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hari_efektif`
--

INSERT INTO `hari_efektif` (`id_bulan`, `bulan`, `tahun`, `jumlah_hari`) VALUES
(1, 'Januari', '2021', 21),
(4, 'Februari', '2021', 20),
(5, 'Maret', '2021', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ambulance` enum('unit1','unit2','unit3','unit4') NOT NULL,
  `giat` enum('rescue','pelayanan','yayasan','pelatihan') NOT NULL,
  `jenis_giat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `waktu` time NOT NULL,
  `personil` text NOT NULL,
  `apd` text NOT NULL,
  `pelapor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tanggal`, `ambulance`, `giat`, `jenis_giat`, `alamat`, `waktu`, `personil`, `apd`, `pelapor`) VALUES
(1, '2021-09-02', 'unit4', 'pelayanan', 'Pelayanan pasien', 'Wajak - RSSA', '16:16:00', '-R109\r\n-R124', '-Tandu Scop\r\n-Tabung Oksigen\r\n-Tas P3K', 'raider109'),
(2, '2021-09-03', 'unit2', 'rescue', 'Penyelamatan kucing', 'Yayasan - Balaiarjosari', '19:47:00', '-R124\r\n-R145', '-Tali Webing\r\n-Headlamp\r\n-Box hewan', 'raider145'),
(4, '2021-09-08', 'unit3', 'pelatihan', 'K9 unit', 'Yayasan - Polresta', '09:53:00', '-145', '-Buku tulis\r\n-P3K', 'raider145'),
(5, '2021-09-06', 'unit4', 'yayasan', 'Pelayanan pasien', 'Yayasan - RSSA', '20:00:00', '-R124\r\n-R130\r\n-R145', '-Tabung Oksigen\r\n-P3K\r\n-Tandu Scop', 'raider130'),
(6, '2021-09-02', 'unit3', 'pelayanan', 'Pelayanan pasien', 'Wajak - RSSA', '22:12:00', '-R125\r\n-R124', '-Tabung Oksigen\r\n-Tas P3K', 'raider125'),
(7, '2021-09-04', 'unit3', 'pelayanan', 'Pelayanan pasien', 'Wajak - RSSA', '17:34:00', '-R119\r\n-R124', '-Tabung Oksigen\r\n-P3K\r\n-Tandu Scop', 'R119'),
(8, '2021-09-04', 'unit4', 'yayasan', 'Pelayanan pasien', 'Wajak - RSSA', '20:42:00', '-R111\r\n-R109\r\n', '-Tabung Oksigen\r\n-P3K\r\n-Tandu Scop', 'raider109');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `goldar` enum('a','b','ab','o') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `agama` enum('islam','kristen','hindu','budha') NOT NULL,
  `status_perkawinan` enum('kawin','belum kawin') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kewarganegaraan` enum('wni','wna') NOT NULL,
  `sebab` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `sebagai` enum('admin','anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `tanggal`, `goldar`, `alamat`, `handphone`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `sebab`, `password`, `sebagai`) VALUES
('raider109', 'Indra Setyo', '1966-08-18', 'b', 'Jln. Betek no.14 Kota Malang', '082265190804', 'islam', 'kawin', 'PNS', 'wni', 'Saya yang mendirikan Rescue020', '12345678', 'admin'),
('raider111', 'Ableh', '2021-09-16', 'b', 'Jln. Betek no.14 Kota Malang', '082259746358', 'hindu', 'kawin', 'WIRAUSAHA', 'wni', 'Ingin mengetahuin dunia kemanusiaan', '12345678', 'anggota'),
('raider120', 'Rizal Pardede', '2021-09-03', 'ab', 'Jl. Pahlawan IV/A4 Malang', '082245974358', 'kristen', 'belum kawin', 'WIRAUSAHA', 'wni', 'Ingin tau dunia kemanusiaan', '12345678', 'anggota'),
('raider124', 'Irsyadha Alfyrdhousi Redhysyahputra', '2000-11-28', 'a', 'Jln. Cerme no.12 Kota Malang', '0881036483137', 'islam', '', 'MAHASISWA', 'wni', 'Karena saya ingin bergerak di dunia kemanusiaan', 'Muhammad364015', 'admin'),
('raider125', 'Lufushi Terimo', '2000-11-30', 'ab', 'Jln. Ungaran no.14 Kota Malang', '082265194849', 'hindu', 'belum kawin', 'MAHASISWA', 'wna', 'Karena saya tergerak mengikuti jalan relawan pada dunia kemanusiaan', '12345678', 'anggota'),
('raider130', 'Rico Ronaldo', '1997-02-12', 'ab', 'Jln. Malabar no.20 Kota Malang', '082259746358', 'budha', 'kawin', 'WIRAUSAHA', 'wna', 'Ingin mengerti dunia kemanusiaan', '12345678', 'anggota'),
('raider145', 'Meuti Zari Annisa', '2001-11-06', 'o', 'Jl. Pahlawan IV/A3 Malang', '082231814712', 'islam', 'kawin', 'MAHASISWA', 'wni', 'SHIROOOOOO', 'meutizari1412', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `hari_efektif`
--
ALTER TABLE `hari_efektif`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hari_efektif`
--
ALTER TABLE `hari_efektif`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
