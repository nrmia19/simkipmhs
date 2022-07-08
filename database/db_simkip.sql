-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 05:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simkip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nidn` bigint(20) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `gambar`, `nidn`, `nama_dosen`, `no_hp`, `email`, `alamat`) VALUES
(1, 'dosen2.png', 22015051, 'Alfin Nurdin, ST., MT', '083901883672', 'alfin20@gmail.com', 'Jl. Riung Bandung'),
(2, 'dosen2.png', 22015052, 'M Arkan, ST., MT', '089227819365', 'arkann123@gmail.com', 'Jl. Mawar No.12'),
(3, 'dosen.png', 22015053, 'Aisah Siti, ST., MT', '088222761523', 's_aisah@gmail.com', 'Jl. Sumedang'),
(4, 'dosen.png', 22015054, 'Rika Santi, ST., MKom', '088673882193', 'rika_santii@gmail.com', 'Jl. Riung Bandung No.2'),
(5, 'dosen.png', 22035055, 'Sabrina, ST., MT', '089123763881', 'sabrina154@gamil.com', 'Jl. Nyalindung'),
(6, 'dosen2.png', 22055056, 'Didin Subagja, ST', '085678451331', 'didin120@gmail.com', 'Jl. Nengkor No.09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kd_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `jenjang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `kd_jurusan`, `nama_jurusan`, `jenjang`) VALUES
(5, 'TIF', 'Teknik Informatika', 'S1'),
(6, 'TE', 'Teknik Elektro', 'S1'),
(7, 'TI', 'Teknik Industri', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'TIF A1'),
(2, 'TIF A2'),
(3, 'TIF A3'),
(4, 'TE A1'),
(5, 'TE  A2'),
(6, 'TE A3'),
(7, 'TI A1'),
(8, 'TI A2'),
(9, 'TI A3'),
(10, 'TIF Karyaw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nim` bigint(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `foto`, `nim`, `nama_mahasiswa`, `id_jurusan`, `semester`, `no_hp`, `email`, `id_kelas`) VALUES
(1, 'mhs.png', 41037006191026, 'Mia Nur E', 5, '5', '088222641726', 'miaa201@gmail.com', '2'),
(2, 'mhs2.png', 41037006191027, 'Yayu Anggraeni', 5, '5', '089776189554', 'yayuanggraeni@gmail.com', '2'),
(3, 'mhs.png', 41037006191028, 'Aldi Maldini H', 6, '5', '081778179101', 'maldinialdi@gmail.com', '4'),
(4, 'mhs.png', 41037006191020, 'Rifqi Muhammad', 5, '3', '089223569302', 'rifqim@gmail.com', '1'),
(7, 'mhs.png', 41037006191002, 'Andi Rahman Surya', 7, '5', '085672819770', 'andii@gmail.com', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `kd_matkul`, `nama_matkul`, `sks`, `id_dosen`) VALUES
(17, 'UIN002', 'PPKN', 2, 3),
(18, 'UIN003', 'Bahasa Indonesia', 3, 4),
(19, 'UIN004', 'Kimia', 2, 2),
(20, 'UIN005', 'Fisika Dasar 1', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `quis` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `nilai_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transkrip`
--

CREATE TABLE `tb_transkrip` (
  `id_transkrip` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `ipk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipe_user` enum('administrator','dosen','mahasiswa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `username`, `password`, `tipe_user`) VALUES
(1, 'Mia Nur Ertina', 'miaa190@gmail.com', 'admin', '12345', 'administrator'),
(2, 'Winda', 'windaa20@gmail.com', 'windaa', 'winda20', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_transkrip`
--
ALTER TABLE `tb_transkrip`
  ADD PRIMARY KEY (`id_transkrip`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transkrip`
--
ALTER TABLE `tb_transkrip`
  MODIFY `id_transkrip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
