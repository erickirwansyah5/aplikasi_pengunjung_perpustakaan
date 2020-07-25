-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 03:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `namalengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(6, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'erick irwansyah');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(5) NOT NULL,
  `noanggota` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `noanggota`, `nama`, `instansi`, `alamat`, `foto`) VALUES
(6, '1809290002', 'ERICK IRWANSYAH', 'UNIVERSITAS DEHASEN', 'SUKARAJA', '5bafa15f063a9.jpg'),
(7, '1809290003', 'meyki ardiansyah', 'umb', 'lubuk sahung', '5bafa5ecce58a.jpg'),
(8, '1809300001', 'japriansyah', 'unib', 'merawan 12', '5bb047f504a9f.jpg'),
(9, '1809300002', 'reza ardiansyah', 'sd it rabani', 'bengkulu', '5bb07a54d2e49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `idtamu` int(5) NOT NULL,
  `namatamu` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tglkunjung` varchar(10) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`idtamu`, `namatamu`, `alamat`, `instansi`, `tglkunjung`, `tujuan`) VALUES
(4, 'japriansyah', 'sukaraja', 'universitas dehasen', '2018-09-30', 'refleshing'),
(5, 'reza', 'sukaraja', 'universitas dehasen', '2018-09-30', 'kunjungan biasa membaca');

-- --------------------------------------------------------

--
-- Table structure for table `tamu2`
--

CREATE TABLE `tamu2` (
  `idtamu` int(5) NOT NULL,
  `noanggota` varchar(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tglkunjung` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu2`
--

INSERT INTO `tamu2` (`idtamu`, `noanggota`, `nama`, `tglkunjung`, `tujuan`) VALUES
(6, '1809290002', 'erick irwansyah', '2030-09-18', 'refleshing'),
(7, '1809290002', 'erick irwansyah', '2018-09-30', 'reflesing'),
(8, '1809290002', 'erick irwansyah', '2018-09-30', 'pencarian literatur'),
(9, '1809290002', 'erick irwansyah', '2018-09-30', 'pengembalian buku'),
(10, '1809290002', 'erick irwansyah', '2018-10-16', 'pengembalian buku'),
(11, '1809290002', 'erick irwansyah', '2020-07-24', 'tugas kuliah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- Indexes for table `tamu2`
--
ALTER TABLE `tamu2`
  ADD PRIMARY KEY (`idtamu`),
  ADD KEY `noanggota` (`noanggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idtamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tamu2`
--
ALTER TABLE `tamu2`
  MODIFY `idtamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
