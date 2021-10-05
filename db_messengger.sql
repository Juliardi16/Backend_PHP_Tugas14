-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 07:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_messengger`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `no_job` varchar(20) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `nama_dokumen` varchar(20) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`no_job`, `pic`, `departement`, `customer`, `keperluan`, `nama_dokumen`, `tujuan`) VALUES
('IDH 101', 'Juliardi', ' Import', ' PT.Lautan Luas', ' Ambil Do', 'Import', ' PT.Shipping Line'),
('IDH 102', 'Juli', ' Export', ' PT.Bumi Laut', ' Ambil BL', 'Export', ' PT.Shipping Line'),
('IDH 103', 'Juli', ' Finance', ' PT.Finance', ' Tarik Jaminan', 'Jaminan', ' PT.Shipping Line');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `nama`, `email`, `username`, `password`) VALUES
(123, 'Ibnu Malik', 'ibnu@gmail.com', 'ibnumalik', 'sukses'),
(1235, 'Juli', 'juliardi71@gmail.com', 'juli', 'Sukses'),
(1236, 'Farid', 'farid@gmail.com', 'farid', 'Sukses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`no_job`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `nik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
