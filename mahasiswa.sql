-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 08:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIDDOSEN` varchar(222) NOT NULL,
  `NAMADOSEN` varchar(222) DEFAULT NULL,
  `JDWLMENGAJAR` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIDDOSEN`, `NAMADOSEN`, `JDWLMENGAJAR`) VALUES
('023454', 'I Wayan Arta Kesuma  S.Kom', '2022-06-29'),
('04766', 'Luh Putu Ayu S.Kom', '2022-06-30'),
('07688', 'I Made Astawa S.Kom', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `KDMATKUL` varchar(777) NOT NULL,
  `NAMAMATKUL` varchar(222) DEFAULT NULL,
  `JDWLMATKUL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`KDMATKUL`, `NAMAMATKUL`, `JDWLMATKUL`) VALUES
('00125', 'WebProgramming', '2022-06-30'),
('00245', 'Pengantar Akuntansi', '2022-06-29'),
('00565', 'Struktur Data', '2022-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `NIM` varchar(555) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `JURUSAN` varchar(100) DEFAULT NULL,
  `JK` varchar(100) DEFAULT NULL,
  `TGLLAHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`NIM`, `NAMA`, `JURUSAN`, `JK`, `TGLLAHIR`) VALUES
('2110155', 'I Made agus', 'MTI', 'L', '2003-06-07'),
('2110333', 'I wayan ferdi', 'MTI', 'L', '2003-06-20'),
('2110666', 'Ni Putu Febrianti', 'KAB', 'P', '2003-06-30'),
('2114449', 'Ni Luh AsriDewi', 'KAB', 'P', '2003-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIDDOSEN`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`KDMATKUL`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
