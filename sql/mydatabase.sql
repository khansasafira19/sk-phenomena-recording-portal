-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2023 at 03:51 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

DROP TABLE IF EXISTS `bulan`;
CREATE TABLE IF NOT EXISTS `bulan` (
  `id_bulan` int NOT NULL,
  `nama_bulan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenagabung`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenagabung`;
CREATE TABLE IF NOT EXISTS `daftarfenomenagabung` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` mediumtext
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat01`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat01`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat01` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat02`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat02`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat02` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat03`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat03`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat03` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat04`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat04`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat04` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat05`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat05`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat05` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat06`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat06`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat06` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat07`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat07`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat07` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat08`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat08`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat08` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat09`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat09`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat09` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat10`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat10`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat10` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat11`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat11`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat11` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat12`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat12`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat12` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat13`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat13`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat13` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat14`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat14`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat14` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat15`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat15`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat15` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat16`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat16`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat16` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakat17`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakat17`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakat17` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(23)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(5)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp01`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp01`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp01` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp02`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp02`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp02` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp03`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp03`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp03` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp04`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp04`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp04` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp05`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp05`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp05` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp06`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp06`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp06` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftarfenomenakomp07`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `daftarfenomenakomp07`;
CREATE TABLE IF NOT EXISTS `daftarfenomenakomp07` (
`bulan` int
,`deleted` tinyint
,`fenomena` longtext
,`id` bigint
,`idkat` varchar(24)
,`judul` varchar(255)
,`kat01` tinyint
,`kat02` tinyint
,`kat03` tinyint
,`kat04` tinyint
,`kat05` tinyint
,`kat06` tinyint
,`kat07` tinyint
,`kat08` tinyint
,`kat09` tinyint
,`kat10` tinyint
,`kat11` tinyint
,`kat12` tinyint
,`kat13` tinyint
,`kat14` tinyint
,`kat15` tinyint
,`kat16` tinyint
,`kat17` tinyint
,`kategori` varchar(6)
,`komp01` tinyint
,`komp02` tinyint
,`komp03` tinyint
,`komp04` tinyint
,`komp05` tinyint
,`komp06` tinyint
,`komp07` tinyint
,`komp08` tinyint
,`pengaruh` tinyint
,`perekam` varchar(20)
,`sumber` tinyint
,`sumberket` text
,`tahun` year
,`tgl_rekam` timestamp
,`wilayah` int
);

-- --------------------------------------------------------

--
-- Table structure for table `fenomena`
--

DROP TABLE IF EXISTS `fenomena`;
CREATE TABLE IF NOT EXISTS `fenomena` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `wilayah` int NOT NULL,
  `bulan` int NOT NULL,
  `tahun` year NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `fenomena` longtext NOT NULL,
  `sumber` tinyint NOT NULL DEFAULT '0',
  `sumberket` text NOT NULL,
  `pengaruh` tinyint DEFAULT NULL,
  `kat01` tinyint NOT NULL DEFAULT '0',
  `kat02` tinyint NOT NULL DEFAULT '0',
  `kat03` tinyint NOT NULL DEFAULT '0',
  `kat04` tinyint NOT NULL DEFAULT '0',
  `kat05` tinyint NOT NULL DEFAULT '0',
  `kat06` tinyint NOT NULL DEFAULT '0',
  `kat07` tinyint NOT NULL DEFAULT '0',
  `kat08` tinyint NOT NULL DEFAULT '0',
  `kat09` tinyint NOT NULL DEFAULT '0',
  `kat10` tinyint NOT NULL DEFAULT '0',
  `kat11` tinyint NOT NULL DEFAULT '0',
  `kat12` tinyint NOT NULL DEFAULT '0',
  `kat13` tinyint NOT NULL DEFAULT '0',
  `kat14` tinyint NOT NULL DEFAULT '0',
  `kat15` tinyint NOT NULL DEFAULT '0',
  `kat16` tinyint NOT NULL DEFAULT '0',
  `kat17` tinyint NOT NULL DEFAULT '0',
  `komp01` tinyint NOT NULL DEFAULT '0',
  `komp02` tinyint NOT NULL DEFAULT '0',
  `komp03` tinyint NOT NULL DEFAULT '0',
  `komp04` tinyint NOT NULL DEFAULT '0',
  `komp05` tinyint NOT NULL DEFAULT '0',
  `komp06` tinyint NOT NULL DEFAULT '0',
  `komp07` tinyint NOT NULL DEFAULT '0',
  `komp08` tinyint DEFAULT NULL,
  `tgl_rekam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `perekam` varchar(20) NOT NULL,
  `deleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `fenomena`
--

INSERT INTO `fenomena` (`id`, `wilayah`, `bulan`, `tahun`, `judul`, `fenomena`, `sumber`, `sumberket`, `pengaruh`, `kat01`, `kat02`, `kat03`, `kat04`, `kat05`, `kat06`, `kat07`, `kat08`, `kat09`, `kat10`, `kat11`, `kat12`, `kat13`, `kat14`, `kat15`, `kat16`, `kat17`, `komp01`, `komp02`, `komp03`, `komp04`, `komp05`, `komp06`, `komp07`, `komp08`, `tgl_rekam`, `perekam`, `deleted`) VALUES
(1, 1700, 9, 2023, 'VAR Gratis 1 Ribu Vial', 'Antisipasi Gigitan Hewan Penular Rabies (GHPR), Dinas Pertanian bidang Peternakan dan Kesehatan Hewan, menyiapkan seribu vial Vaksin Anti Rabies (VAR) secara gratis tahun ini bertepatan dengan Hari Rabies Internasional 28 September mendatang. Pemerintah berharap. masyarakat yang memiliki hewan peliharaan dengan potensi penular rabies agar bisa mengikuti kegiatan tersebut. ', 0, 'Rakyat Bengkulu, Halaman 6. Jumat, 15 September 2023', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, NULL, '2023-09-17 21:06:57', 'admin', 0),
(2, 1800, 9, 2023, 'Dampak El Nino Makin Meluas, Tercatat 55 Hektar Sawah di Rejang Lebong Alami Kekeringan', 'Dinas Pertanian dan Perikanan (Distankan) Rejang Lebong mencatat, sedikitnya ada 55 hektare lahan sawah terdampak kekeringan yang disebabkan El Nino. Musim kemarau yang melanda sejak Agustus lalu membuat tanaman padi yang ditanam tak tumbuh seperti biasanya lantaran kekurangan sumber air. Kabid Tanaman Pangan dan Hortikultura (TPH) Distankan Rejang Lebong, Achmad Syafriansyah mengatakan 55 hektar sawah yang terdampak ini berada di 4 kecamatan yakni Curup, Curup Utara, Curup Selatan dan Padang Ulak Tanding (PUT). ', 1, 'Https://rakyatbengkulu.disway.id/read/663311/dampak-el-nino-makin-meluas-tercatat-55-hektar-sawah-di-rejang-lebong-alami-kekeringan. Selasa, 19 September 2023', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2023-09-19 21:37:03', 'user1', 0),
(3, 1900, 9, 2023, 'Rakerda Golkar Provinsi Bengkulu: Target Menang Semua Dapil Pemilu 2024', 'DPD Golkar Provinsi Bengkulu menargetkan kemenangan dalam Pilpres, Pileg, dan Pilkada pada tahun 2024 mendatang. Hal itu dikatakan Ketua DPD Partai Golkar Provinsi Bengkulu, Dr. H. Rohidin Mersyah dalam Rapat Kerja Daerah (Rakerda), Rabu 20 September 2023.', 1, 'Https://betv.disway.id/read/23757/rakerda-golkar-provinsi-bengkulu-target-menang-semua-dapil-pemilu-2024. Kamis 21-09-2023', 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, NULL, '2023-09-20 19:26:42', 'user2', 0),
(4, 3100, 9, 2023, 'DPRD dorong Pemkot Bengkulu cari solusi atasi lahan petani kekeringa', '\"Pemerintah Kota Bengkulu harus mengupayakan cara agar ada pasokan air ke sawah-sawah yang sudah kering saat ini,\" kata Anggota DPRD Kota Bengkulu Nuzuludin di Kota Bengkulu, Rabu.', 1, 'Https://bengkulu.antaranews.com/berita/309903/dprd-dorong-pemkot-bengkulu-cari-solusi-atasi-lahan-petani-kekeringan Kamis, 21 September 2023', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2023-09-20 19:30:51', 'admin', 0),
(5, 3100, 9, 2023, 'Realisasi DAK fisik di Kabupaten Kepahiang capai 193,74 persen', ' Kementerian Keuangan melalui Direktorat Jenderal Perbendaharaan (DJPb) Provinsi Bengkulu mencatat, realisasi serapan Dana Alokasi Khusus (DAK) fisik tertinggi berada di Kabupaten Kepahiang yaitu 193,74 persen atau Rp74,17 miliar dari pagu Rp38,28 miliar.', 1, 'Https://bengkulu.antaranews.com/berita/309912/realisasi-dak-fisik-di-kabupaten-kepahiang-capai-19374-persen Kamis, 21 September 2023', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, NULL, '2023-09-20 19:33:35', 'admin', 0),
(6, 3100, 9, 2023, 'Pemkab Rejang Lebong gelar operasi pasar beras di 15 kecamatan', 'Pemerintah Kabupaten (Pemkab) Rejang Lebong, Provinsi Bengkulu, menggelar operasi pasar di 15 kecamatan di wilayah itu untuk menstabilkan harga beras.', 1, 'Https://bengkulu.antaranews.com/berita/309921/pemkab-rejang-lebong-gelar-operasi-pasar-beras-di-15-kecamatan Kamis, 21 September 2023', 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '2023-09-20 19:35:27', 'admin', 0),
(7, 1500, 9, 2023, 'Panas Bedengkang! Sawah Kekeringan, Air Bersih Sulit', 'Musim kemarau yang terjadi di Bengkulu Selatan beberapa akhir ini menyebabkan kekeringan di hamparan sawah di daerah Lubuk Sirih Ulu, Manna. Padi yang berumur satu bulan mulai layu dan mati. Tidak hanya itu, banyak sumur warga juga mengalami kekeringan', 0, 'Radar Selatan, Halaman 7. Senin, 11 September 2023', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '2023-09-21 00:12:47', 'admin', 0),
(8, 1700, 10, 2023, 'Ff', 'Ff', 0, '[Nama/URL Sumber]. Rabu, 11 Oktober 2023', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2023-10-11 00:55:53', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `satker` varchar(108) DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `active` tinyint NOT NULL DEFAULT '1',
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `theme` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `nama`, `satker`, `admin`, `active`, `tgl_daftar`, `theme`) VALUES
('admin', '2aefc34200a294a3cc7db81b43a81873', 'Admin', '1000', 1, 1, '2023-03-09 04:19:51', 0),
('user1', '2aefc34200a294a3cc7db81b43a81873', 'User1', '1800', 0, 1, '2023-03-09 04:19:51', 0),
('user2', '2aefc34200a294a3cc7db81b43a81873', 'User2', '1900', 0, 1, '2023-03-09 04:19:51', 0),
('user3', '2aefc34200a294a3cc7db81b43a81873', 'User3', '3100', 0, 0, '2023-03-09 04:19:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `satker`
--

DROP TABLE IF EXISTS `satker`;
CREATE TABLE IF NOT EXISTS `satker` (
  `id_satker` int NOT NULL,
  `nama_satker` varchar(100) NOT NULL,
  PRIMARY KEY (`id_satker`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `satker`
--

INSERT INTO `satker` (`id_satker`, `nama_satker`) VALUES
(1000, 'Indonesia'),
(1100, 'Provinsi Aceh'),
(1200, 'Provinsi Sumatra Utara'),
(1300, 'Provinsi Sumatra Barat'),
(1400, 'Provinsi Riau'),
(1500, 'Provinsi Jambi'),
(1600, 'Provinsi Sumatra Selatan'),
(1700, 'Provinsi Bengkulu'),
(1800, 'Provinsi Lampung'),
(1900, 'Provinsi Bangka Belitung'),
(3100, 'Provinsi DKI Jakarta');

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenagabung`
--
DROP TABLE IF EXISTS `daftarfenomenagabung`;

DROP VIEW IF EXISTS `daftarfenomenagabung`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenagabung`  AS SELECT `daftarfenomenakat01`.`id` AS `id`, `daftarfenomenakat01`.`wilayah` AS `wilayah`, `daftarfenomenakat01`.`bulan` AS `bulan`, `daftarfenomenakat01`.`tahun` AS `tahun`, `daftarfenomenakat01`.`judul` AS `judul`, `daftarfenomenakat01`.`fenomena` AS `fenomena`, `daftarfenomenakat01`.`sumber` AS `sumber`, `daftarfenomenakat01`.`sumberket` AS `sumberket`, `daftarfenomenakat01`.`pengaruh` AS `pengaruh`, `daftarfenomenakat01`.`kat01` AS `kat01`, `daftarfenomenakat01`.`kat02` AS `kat02`, `daftarfenomenakat01`.`kat03` AS `kat03`, `daftarfenomenakat01`.`kat04` AS `kat04`, `daftarfenomenakat01`.`kat05` AS `kat05`, `daftarfenomenakat01`.`kat06` AS `kat06`, `daftarfenomenakat01`.`kat07` AS `kat07`, `daftarfenomenakat01`.`kat08` AS `kat08`, `daftarfenomenakat01`.`kat09` AS `kat09`, `daftarfenomenakat01`.`kat10` AS `kat10`, `daftarfenomenakat01`.`kat11` AS `kat11`, `daftarfenomenakat01`.`kat12` AS `kat12`, `daftarfenomenakat01`.`kat13` AS `kat13`, `daftarfenomenakat01`.`kat14` AS `kat14`, `daftarfenomenakat01`.`kat15` AS `kat15`, `daftarfenomenakat01`.`kat16` AS `kat16`, `daftarfenomenakat01`.`kat17` AS `kat17`, `daftarfenomenakat01`.`komp01` AS `komp01`, `daftarfenomenakat01`.`komp02` AS `komp02`, `daftarfenomenakat01`.`komp03` AS `komp03`, `daftarfenomenakat01`.`komp04` AS `komp04`, `daftarfenomenakat01`.`komp05` AS `komp05`, `daftarfenomenakat01`.`komp06` AS `komp06`, `daftarfenomenakat01`.`komp07` AS `komp07`, `daftarfenomenakat01`.`komp08` AS `komp08`, `daftarfenomenakat01`.`tgl_rekam` AS `tgl_rekam`, `daftarfenomenakat01`.`perekam` AS `perekam`, `daftarfenomenakat01`.`deleted` AS `deleted`, `daftarfenomenakat01`.`kategori` AS `kategori`, `daftarfenomenakat01`.`idkat` AS `idkat` FROM `daftarfenomenakat01` union select `daftarfenomenakat02`.`id` AS `id`,`daftarfenomenakat02`.`wilayah` AS `wilayah`,`daftarfenomenakat02`.`bulan` AS `bulan`,`daftarfenomenakat02`.`tahun` AS `tahun`,`daftarfenomenakat02`.`judul` AS `judul`,`daftarfenomenakat02`.`fenomena` AS `fenomena`,`daftarfenomenakat02`.`sumber` AS `sumber`,`daftarfenomenakat02`.`sumberket` AS `sumberket`,`daftarfenomenakat02`.`pengaruh` AS `pengaruh`,`daftarfenomenakat02`.`kat01` AS `kat01`,`daftarfenomenakat02`.`kat02` AS `kat02`,`daftarfenomenakat02`.`kat03` AS `kat03`,`daftarfenomenakat02`.`kat04` AS `kat04`,`daftarfenomenakat02`.`kat05` AS `kat05`,`daftarfenomenakat02`.`kat06` AS `kat06`,`daftarfenomenakat02`.`kat07` AS `kat07`,`daftarfenomenakat02`.`kat08` AS `kat08`,`daftarfenomenakat02`.`kat09` AS `kat09`,`daftarfenomenakat02`.`kat10` AS `kat10`,`daftarfenomenakat02`.`kat11` AS `kat11`,`daftarfenomenakat02`.`kat12` AS `kat12`,`daftarfenomenakat02`.`kat13` AS `kat13`,`daftarfenomenakat02`.`kat14` AS `kat14`,`daftarfenomenakat02`.`kat15` AS `kat15`,`daftarfenomenakat02`.`kat16` AS `kat16`,`daftarfenomenakat02`.`kat17` AS `kat17`,`daftarfenomenakat02`.`komp01` AS `komp01`,`daftarfenomenakat02`.`komp02` AS `komp02`,`daftarfenomenakat02`.`komp03` AS `komp03`,`daftarfenomenakat02`.`komp04` AS `komp04`,`daftarfenomenakat02`.`komp05` AS `komp05`,`daftarfenomenakat02`.`komp06` AS `komp06`,`daftarfenomenakat02`.`komp07` AS `komp07`,`daftarfenomenakat02`.`komp08` AS `komp08`,`daftarfenomenakat02`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat02`.`perekam` AS `perekam`,`daftarfenomenakat02`.`deleted` AS `deleted`,`daftarfenomenakat02`.`kategori` AS `kategori`,`daftarfenomenakat02`.`idkat` AS `idkat` from `daftarfenomenakat02` union select `daftarfenomenakat03`.`id` AS `id`,`daftarfenomenakat03`.`wilayah` AS `wilayah`,`daftarfenomenakat03`.`bulan` AS `bulan`,`daftarfenomenakat03`.`tahun` AS `tahun`,`daftarfenomenakat03`.`judul` AS `judul`,`daftarfenomenakat03`.`fenomena` AS `fenomena`,`daftarfenomenakat03`.`sumber` AS `sumber`,`daftarfenomenakat03`.`sumberket` AS `sumberket`,`daftarfenomenakat03`.`pengaruh` AS `pengaruh`,`daftarfenomenakat03`.`kat01` AS `kat01`,`daftarfenomenakat03`.`kat02` AS `kat02`,`daftarfenomenakat03`.`kat03` AS `kat03`,`daftarfenomenakat03`.`kat04` AS `kat04`,`daftarfenomenakat03`.`kat05` AS `kat05`,`daftarfenomenakat03`.`kat06` AS `kat06`,`daftarfenomenakat03`.`kat07` AS `kat07`,`daftarfenomenakat03`.`kat08` AS `kat08`,`daftarfenomenakat03`.`kat09` AS `kat09`,`daftarfenomenakat03`.`kat10` AS `kat10`,`daftarfenomenakat03`.`kat11` AS `kat11`,`daftarfenomenakat03`.`kat12` AS `kat12`,`daftarfenomenakat03`.`kat13` AS `kat13`,`daftarfenomenakat03`.`kat14` AS `kat14`,`daftarfenomenakat03`.`kat15` AS `kat15`,`daftarfenomenakat03`.`kat16` AS `kat16`,`daftarfenomenakat03`.`kat17` AS `kat17`,`daftarfenomenakat03`.`komp01` AS `komp01`,`daftarfenomenakat03`.`komp02` AS `komp02`,`daftarfenomenakat03`.`komp03` AS `komp03`,`daftarfenomenakat03`.`komp04` AS `komp04`,`daftarfenomenakat03`.`komp05` AS `komp05`,`daftarfenomenakat03`.`komp06` AS `komp06`,`daftarfenomenakat03`.`komp07` AS `komp07`,`daftarfenomenakat03`.`komp08` AS `komp08`,`daftarfenomenakat03`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat03`.`perekam` AS `perekam`,`daftarfenomenakat03`.`deleted` AS `deleted`,`daftarfenomenakat03`.`kategori` AS `kategori`,`daftarfenomenakat03`.`idkat` AS `idkat` from `daftarfenomenakat03` union select `daftarfenomenakat04`.`id` AS `id`,`daftarfenomenakat04`.`wilayah` AS `wilayah`,`daftarfenomenakat04`.`bulan` AS `bulan`,`daftarfenomenakat04`.`tahun` AS `tahun`,`daftarfenomenakat04`.`judul` AS `judul`,`daftarfenomenakat04`.`fenomena` AS `fenomena`,`daftarfenomenakat04`.`sumber` AS `sumber`,`daftarfenomenakat04`.`sumberket` AS `sumberket`,`daftarfenomenakat04`.`pengaruh` AS `pengaruh`,`daftarfenomenakat04`.`kat01` AS `kat01`,`daftarfenomenakat04`.`kat02` AS `kat02`,`daftarfenomenakat04`.`kat03` AS `kat03`,`daftarfenomenakat04`.`kat04` AS `kat04`,`daftarfenomenakat04`.`kat05` AS `kat05`,`daftarfenomenakat04`.`kat06` AS `kat06`,`daftarfenomenakat04`.`kat07` AS `kat07`,`daftarfenomenakat04`.`kat08` AS `kat08`,`daftarfenomenakat04`.`kat09` AS `kat09`,`daftarfenomenakat04`.`kat10` AS `kat10`,`daftarfenomenakat04`.`kat11` AS `kat11`,`daftarfenomenakat04`.`kat12` AS `kat12`,`daftarfenomenakat04`.`kat13` AS `kat13`,`daftarfenomenakat04`.`kat14` AS `kat14`,`daftarfenomenakat04`.`kat15` AS `kat15`,`daftarfenomenakat04`.`kat16` AS `kat16`,`daftarfenomenakat04`.`kat17` AS `kat17`,`daftarfenomenakat04`.`komp01` AS `komp01`,`daftarfenomenakat04`.`komp02` AS `komp02`,`daftarfenomenakat04`.`komp03` AS `komp03`,`daftarfenomenakat04`.`komp04` AS `komp04`,`daftarfenomenakat04`.`komp05` AS `komp05`,`daftarfenomenakat04`.`komp06` AS `komp06`,`daftarfenomenakat04`.`komp07` AS `komp07`,`daftarfenomenakat04`.`komp08` AS `komp08`,`daftarfenomenakat04`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat04`.`perekam` AS `perekam`,`daftarfenomenakat04`.`deleted` AS `deleted`,`daftarfenomenakat04`.`kategori` AS `kategori`,`daftarfenomenakat04`.`idkat` AS `idkat` from `daftarfenomenakat04` union select `daftarfenomenakat05`.`id` AS `id`,`daftarfenomenakat05`.`wilayah` AS `wilayah`,`daftarfenomenakat05`.`bulan` AS `bulan`,`daftarfenomenakat05`.`tahun` AS `tahun`,`daftarfenomenakat05`.`judul` AS `judul`,`daftarfenomenakat05`.`fenomena` AS `fenomena`,`daftarfenomenakat05`.`sumber` AS `sumber`,`daftarfenomenakat05`.`sumberket` AS `sumberket`,`daftarfenomenakat05`.`pengaruh` AS `pengaruh`,`daftarfenomenakat05`.`kat01` AS `kat01`,`daftarfenomenakat05`.`kat02` AS `kat02`,`daftarfenomenakat05`.`kat03` AS `kat03`,`daftarfenomenakat05`.`kat04` AS `kat04`,`daftarfenomenakat05`.`kat05` AS `kat05`,`daftarfenomenakat05`.`kat06` AS `kat06`,`daftarfenomenakat05`.`kat07` AS `kat07`,`daftarfenomenakat05`.`kat08` AS `kat08`,`daftarfenomenakat05`.`kat09` AS `kat09`,`daftarfenomenakat05`.`kat10` AS `kat10`,`daftarfenomenakat05`.`kat11` AS `kat11`,`daftarfenomenakat05`.`kat12` AS `kat12`,`daftarfenomenakat05`.`kat13` AS `kat13`,`daftarfenomenakat05`.`kat14` AS `kat14`,`daftarfenomenakat05`.`kat15` AS `kat15`,`daftarfenomenakat05`.`kat16` AS `kat16`,`daftarfenomenakat05`.`kat17` AS `kat17`,`daftarfenomenakat05`.`komp01` AS `komp01`,`daftarfenomenakat05`.`komp02` AS `komp02`,`daftarfenomenakat05`.`komp03` AS `komp03`,`daftarfenomenakat05`.`komp04` AS `komp04`,`daftarfenomenakat05`.`komp05` AS `komp05`,`daftarfenomenakat05`.`komp06` AS `komp06`,`daftarfenomenakat05`.`komp07` AS `komp07`,`daftarfenomenakat05`.`komp08` AS `komp08`,`daftarfenomenakat05`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat05`.`perekam` AS `perekam`,`daftarfenomenakat05`.`deleted` AS `deleted`,`daftarfenomenakat05`.`kategori` AS `kategori`,`daftarfenomenakat05`.`idkat` AS `idkat` from `daftarfenomenakat05` union select `daftarfenomenakat06`.`id` AS `id`,`daftarfenomenakat06`.`wilayah` AS `wilayah`,`daftarfenomenakat06`.`bulan` AS `bulan`,`daftarfenomenakat06`.`tahun` AS `tahun`,`daftarfenomenakat06`.`judul` AS `judul`,`daftarfenomenakat06`.`fenomena` AS `fenomena`,`daftarfenomenakat06`.`sumber` AS `sumber`,`daftarfenomenakat06`.`sumberket` AS `sumberket`,`daftarfenomenakat06`.`pengaruh` AS `pengaruh`,`daftarfenomenakat06`.`kat01` AS `kat01`,`daftarfenomenakat06`.`kat02` AS `kat02`,`daftarfenomenakat06`.`kat03` AS `kat03`,`daftarfenomenakat06`.`kat04` AS `kat04`,`daftarfenomenakat06`.`kat05` AS `kat05`,`daftarfenomenakat06`.`kat06` AS `kat06`,`daftarfenomenakat06`.`kat07` AS `kat07`,`daftarfenomenakat06`.`kat08` AS `kat08`,`daftarfenomenakat06`.`kat09` AS `kat09`,`daftarfenomenakat06`.`kat10` AS `kat10`,`daftarfenomenakat06`.`kat11` AS `kat11`,`daftarfenomenakat06`.`kat12` AS `kat12`,`daftarfenomenakat06`.`kat13` AS `kat13`,`daftarfenomenakat06`.`kat14` AS `kat14`,`daftarfenomenakat06`.`kat15` AS `kat15`,`daftarfenomenakat06`.`kat16` AS `kat16`,`daftarfenomenakat06`.`kat17` AS `kat17`,`daftarfenomenakat06`.`komp01` AS `komp01`,`daftarfenomenakat06`.`komp02` AS `komp02`,`daftarfenomenakat06`.`komp03` AS `komp03`,`daftarfenomenakat06`.`komp04` AS `komp04`,`daftarfenomenakat06`.`komp05` AS `komp05`,`daftarfenomenakat06`.`komp06` AS `komp06`,`daftarfenomenakat06`.`komp07` AS `komp07`,`daftarfenomenakat06`.`komp08` AS `komp08`,`daftarfenomenakat06`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat06`.`perekam` AS `perekam`,`daftarfenomenakat06`.`deleted` AS `deleted`,`daftarfenomenakat06`.`kategori` AS `kategori`,`daftarfenomenakat06`.`idkat` AS `idkat` from `daftarfenomenakat06` union select `daftarfenomenakat07`.`id` AS `id`,`daftarfenomenakat07`.`wilayah` AS `wilayah`,`daftarfenomenakat07`.`bulan` AS `bulan`,`daftarfenomenakat07`.`tahun` AS `tahun`,`daftarfenomenakat07`.`judul` AS `judul`,`daftarfenomenakat07`.`fenomena` AS `fenomena`,`daftarfenomenakat07`.`sumber` AS `sumber`,`daftarfenomenakat07`.`sumberket` AS `sumberket`,`daftarfenomenakat07`.`pengaruh` AS `pengaruh`,`daftarfenomenakat07`.`kat01` AS `kat01`,`daftarfenomenakat07`.`kat02` AS `kat02`,`daftarfenomenakat07`.`kat03` AS `kat03`,`daftarfenomenakat07`.`kat04` AS `kat04`,`daftarfenomenakat07`.`kat05` AS `kat05`,`daftarfenomenakat07`.`kat06` AS `kat06`,`daftarfenomenakat07`.`kat07` AS `kat07`,`daftarfenomenakat07`.`kat08` AS `kat08`,`daftarfenomenakat07`.`kat09` AS `kat09`,`daftarfenomenakat07`.`kat10` AS `kat10`,`daftarfenomenakat07`.`kat11` AS `kat11`,`daftarfenomenakat07`.`kat12` AS `kat12`,`daftarfenomenakat07`.`kat13` AS `kat13`,`daftarfenomenakat07`.`kat14` AS `kat14`,`daftarfenomenakat07`.`kat15` AS `kat15`,`daftarfenomenakat07`.`kat16` AS `kat16`,`daftarfenomenakat07`.`kat17` AS `kat17`,`daftarfenomenakat07`.`komp01` AS `komp01`,`daftarfenomenakat07`.`komp02` AS `komp02`,`daftarfenomenakat07`.`komp03` AS `komp03`,`daftarfenomenakat07`.`komp04` AS `komp04`,`daftarfenomenakat07`.`komp05` AS `komp05`,`daftarfenomenakat07`.`komp06` AS `komp06`,`daftarfenomenakat07`.`komp07` AS `komp07`,`daftarfenomenakat07`.`komp08` AS `komp08`,`daftarfenomenakat07`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat07`.`perekam` AS `perekam`,`daftarfenomenakat07`.`deleted` AS `deleted`,`daftarfenomenakat07`.`kategori` AS `kategori`,`daftarfenomenakat07`.`idkat` AS `idkat` from `daftarfenomenakat07` union select `daftarfenomenakat08`.`id` AS `id`,`daftarfenomenakat08`.`wilayah` AS `wilayah`,`daftarfenomenakat08`.`bulan` AS `bulan`,`daftarfenomenakat08`.`tahun` AS `tahun`,`daftarfenomenakat08`.`judul` AS `judul`,`daftarfenomenakat08`.`fenomena` AS `fenomena`,`daftarfenomenakat08`.`sumber` AS `sumber`,`daftarfenomenakat08`.`sumberket` AS `sumberket`,`daftarfenomenakat08`.`pengaruh` AS `pengaruh`,`daftarfenomenakat08`.`kat01` AS `kat01`,`daftarfenomenakat08`.`kat02` AS `kat02`,`daftarfenomenakat08`.`kat03` AS `kat03`,`daftarfenomenakat08`.`kat04` AS `kat04`,`daftarfenomenakat08`.`kat05` AS `kat05`,`daftarfenomenakat08`.`kat06` AS `kat06`,`daftarfenomenakat08`.`kat07` AS `kat07`,`daftarfenomenakat08`.`kat08` AS `kat08`,`daftarfenomenakat08`.`kat09` AS `kat09`,`daftarfenomenakat08`.`kat10` AS `kat10`,`daftarfenomenakat08`.`kat11` AS `kat11`,`daftarfenomenakat08`.`kat12` AS `kat12`,`daftarfenomenakat08`.`kat13` AS `kat13`,`daftarfenomenakat08`.`kat14` AS `kat14`,`daftarfenomenakat08`.`kat15` AS `kat15`,`daftarfenomenakat08`.`kat16` AS `kat16`,`daftarfenomenakat08`.`kat17` AS `kat17`,`daftarfenomenakat08`.`komp01` AS `komp01`,`daftarfenomenakat08`.`komp02` AS `komp02`,`daftarfenomenakat08`.`komp03` AS `komp03`,`daftarfenomenakat08`.`komp04` AS `komp04`,`daftarfenomenakat08`.`komp05` AS `komp05`,`daftarfenomenakat08`.`komp06` AS `komp06`,`daftarfenomenakat08`.`komp07` AS `komp07`,`daftarfenomenakat08`.`komp08` AS `komp08`,`daftarfenomenakat08`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat08`.`perekam` AS `perekam`,`daftarfenomenakat08`.`deleted` AS `deleted`,`daftarfenomenakat08`.`kategori` AS `kategori`,`daftarfenomenakat08`.`idkat` AS `idkat` from `daftarfenomenakat08` union select `daftarfenomenakat09`.`id` AS `id`,`daftarfenomenakat09`.`wilayah` AS `wilayah`,`daftarfenomenakat09`.`bulan` AS `bulan`,`daftarfenomenakat09`.`tahun` AS `tahun`,`daftarfenomenakat09`.`judul` AS `judul`,`daftarfenomenakat09`.`fenomena` AS `fenomena`,`daftarfenomenakat09`.`sumber` AS `sumber`,`daftarfenomenakat09`.`sumberket` AS `sumberket`,`daftarfenomenakat09`.`pengaruh` AS `pengaruh`,`daftarfenomenakat09`.`kat01` AS `kat01`,`daftarfenomenakat09`.`kat02` AS `kat02`,`daftarfenomenakat09`.`kat03` AS `kat03`,`daftarfenomenakat09`.`kat04` AS `kat04`,`daftarfenomenakat09`.`kat05` AS `kat05`,`daftarfenomenakat09`.`kat06` AS `kat06`,`daftarfenomenakat09`.`kat07` AS `kat07`,`daftarfenomenakat09`.`kat08` AS `kat08`,`daftarfenomenakat09`.`kat09` AS `kat09`,`daftarfenomenakat09`.`kat10` AS `kat10`,`daftarfenomenakat09`.`kat11` AS `kat11`,`daftarfenomenakat09`.`kat12` AS `kat12`,`daftarfenomenakat09`.`kat13` AS `kat13`,`daftarfenomenakat09`.`kat14` AS `kat14`,`daftarfenomenakat09`.`kat15` AS `kat15`,`daftarfenomenakat09`.`kat16` AS `kat16`,`daftarfenomenakat09`.`kat17` AS `kat17`,`daftarfenomenakat09`.`komp01` AS `komp01`,`daftarfenomenakat09`.`komp02` AS `komp02`,`daftarfenomenakat09`.`komp03` AS `komp03`,`daftarfenomenakat09`.`komp04` AS `komp04`,`daftarfenomenakat09`.`komp05` AS `komp05`,`daftarfenomenakat09`.`komp06` AS `komp06`,`daftarfenomenakat09`.`komp07` AS `komp07`,`daftarfenomenakat09`.`komp08` AS `komp08`,`daftarfenomenakat09`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat09`.`perekam` AS `perekam`,`daftarfenomenakat09`.`deleted` AS `deleted`,`daftarfenomenakat09`.`kategori` AS `kategori`,`daftarfenomenakat09`.`idkat` AS `idkat` from `daftarfenomenakat09` union select `daftarfenomenakat10`.`id` AS `id`,`daftarfenomenakat10`.`wilayah` AS `wilayah`,`daftarfenomenakat10`.`bulan` AS `bulan`,`daftarfenomenakat10`.`tahun` AS `tahun`,`daftarfenomenakat10`.`judul` AS `judul`,`daftarfenomenakat10`.`fenomena` AS `fenomena`,`daftarfenomenakat10`.`sumber` AS `sumber`,`daftarfenomenakat10`.`sumberket` AS `sumberket`,`daftarfenomenakat10`.`pengaruh` AS `pengaruh`,`daftarfenomenakat10`.`kat01` AS `kat01`,`daftarfenomenakat10`.`kat02` AS `kat02`,`daftarfenomenakat10`.`kat03` AS `kat03`,`daftarfenomenakat10`.`kat04` AS `kat04`,`daftarfenomenakat10`.`kat05` AS `kat05`,`daftarfenomenakat10`.`kat06` AS `kat06`,`daftarfenomenakat10`.`kat07` AS `kat07`,`daftarfenomenakat10`.`kat08` AS `kat08`,`daftarfenomenakat10`.`kat09` AS `kat09`,`daftarfenomenakat10`.`kat10` AS `kat10`,`daftarfenomenakat10`.`kat11` AS `kat11`,`daftarfenomenakat10`.`kat12` AS `kat12`,`daftarfenomenakat10`.`kat13` AS `kat13`,`daftarfenomenakat10`.`kat14` AS `kat14`,`daftarfenomenakat10`.`kat15` AS `kat15`,`daftarfenomenakat10`.`kat16` AS `kat16`,`daftarfenomenakat10`.`kat17` AS `kat17`,`daftarfenomenakat10`.`komp01` AS `komp01`,`daftarfenomenakat10`.`komp02` AS `komp02`,`daftarfenomenakat10`.`komp03` AS `komp03`,`daftarfenomenakat10`.`komp04` AS `komp04`,`daftarfenomenakat10`.`komp05` AS `komp05`,`daftarfenomenakat10`.`komp06` AS `komp06`,`daftarfenomenakat10`.`komp07` AS `komp07`,`daftarfenomenakat10`.`komp08` AS `komp08`,`daftarfenomenakat10`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat10`.`perekam` AS `perekam`,`daftarfenomenakat10`.`deleted` AS `deleted`,`daftarfenomenakat10`.`kategori` AS `kategori`,`daftarfenomenakat10`.`idkat` AS `idkat` from `daftarfenomenakat10` union select `daftarfenomenakat11`.`id` AS `id`,`daftarfenomenakat11`.`wilayah` AS `wilayah`,`daftarfenomenakat11`.`bulan` AS `bulan`,`daftarfenomenakat11`.`tahun` AS `tahun`,`daftarfenomenakat11`.`judul` AS `judul`,`daftarfenomenakat11`.`fenomena` AS `fenomena`,`daftarfenomenakat11`.`sumber` AS `sumber`,`daftarfenomenakat11`.`sumberket` AS `sumberket`,`daftarfenomenakat11`.`pengaruh` AS `pengaruh`,`daftarfenomenakat11`.`kat01` AS `kat01`,`daftarfenomenakat11`.`kat02` AS `kat02`,`daftarfenomenakat11`.`kat03` AS `kat03`,`daftarfenomenakat11`.`kat04` AS `kat04`,`daftarfenomenakat11`.`kat05` AS `kat05`,`daftarfenomenakat11`.`kat06` AS `kat06`,`daftarfenomenakat11`.`kat07` AS `kat07`,`daftarfenomenakat11`.`kat08` AS `kat08`,`daftarfenomenakat11`.`kat09` AS `kat09`,`daftarfenomenakat11`.`kat10` AS `kat10`,`daftarfenomenakat11`.`kat11` AS `kat11`,`daftarfenomenakat11`.`kat12` AS `kat12`,`daftarfenomenakat11`.`kat13` AS `kat13`,`daftarfenomenakat11`.`kat14` AS `kat14`,`daftarfenomenakat11`.`kat15` AS `kat15`,`daftarfenomenakat11`.`kat16` AS `kat16`,`daftarfenomenakat11`.`kat17` AS `kat17`,`daftarfenomenakat11`.`komp01` AS `komp01`,`daftarfenomenakat11`.`komp02` AS `komp02`,`daftarfenomenakat11`.`komp03` AS `komp03`,`daftarfenomenakat11`.`komp04` AS `komp04`,`daftarfenomenakat11`.`komp05` AS `komp05`,`daftarfenomenakat11`.`komp06` AS `komp06`,`daftarfenomenakat11`.`komp07` AS `komp07`,`daftarfenomenakat11`.`komp08` AS `komp08`,`daftarfenomenakat11`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat11`.`perekam` AS `perekam`,`daftarfenomenakat11`.`deleted` AS `deleted`,`daftarfenomenakat11`.`kategori` AS `kategori`,`daftarfenomenakat11`.`idkat` AS `idkat` from `daftarfenomenakat11` union select `daftarfenomenakat12`.`id` AS `id`,`daftarfenomenakat12`.`wilayah` AS `wilayah`,`daftarfenomenakat12`.`bulan` AS `bulan`,`daftarfenomenakat12`.`tahun` AS `tahun`,`daftarfenomenakat12`.`judul` AS `judul`,`daftarfenomenakat12`.`fenomena` AS `fenomena`,`daftarfenomenakat12`.`sumber` AS `sumber`,`daftarfenomenakat12`.`sumberket` AS `sumberket`,`daftarfenomenakat12`.`pengaruh` AS `pengaruh`,`daftarfenomenakat12`.`kat01` AS `kat01`,`daftarfenomenakat12`.`kat02` AS `kat02`,`daftarfenomenakat12`.`kat03` AS `kat03`,`daftarfenomenakat12`.`kat04` AS `kat04`,`daftarfenomenakat12`.`kat05` AS `kat05`,`daftarfenomenakat12`.`kat06` AS `kat06`,`daftarfenomenakat12`.`kat07` AS `kat07`,`daftarfenomenakat12`.`kat08` AS `kat08`,`daftarfenomenakat12`.`kat09` AS `kat09`,`daftarfenomenakat12`.`kat10` AS `kat10`,`daftarfenomenakat12`.`kat11` AS `kat11`,`daftarfenomenakat12`.`kat12` AS `kat12`,`daftarfenomenakat12`.`kat13` AS `kat13`,`daftarfenomenakat12`.`kat14` AS `kat14`,`daftarfenomenakat12`.`kat15` AS `kat15`,`daftarfenomenakat12`.`kat16` AS `kat16`,`daftarfenomenakat12`.`kat17` AS `kat17`,`daftarfenomenakat12`.`komp01` AS `komp01`,`daftarfenomenakat12`.`komp02` AS `komp02`,`daftarfenomenakat12`.`komp03` AS `komp03`,`daftarfenomenakat12`.`komp04` AS `komp04`,`daftarfenomenakat12`.`komp05` AS `komp05`,`daftarfenomenakat12`.`komp06` AS `komp06`,`daftarfenomenakat12`.`komp07` AS `komp07`,`daftarfenomenakat12`.`komp08` AS `komp08`,`daftarfenomenakat12`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat12`.`perekam` AS `perekam`,`daftarfenomenakat12`.`deleted` AS `deleted`,`daftarfenomenakat12`.`kategori` AS `kategori`,`daftarfenomenakat12`.`idkat` AS `idkat` from `daftarfenomenakat12` union select `daftarfenomenakat13`.`id` AS `id`,`daftarfenomenakat13`.`wilayah` AS `wilayah`,`daftarfenomenakat13`.`bulan` AS `bulan`,`daftarfenomenakat13`.`tahun` AS `tahun`,`daftarfenomenakat13`.`judul` AS `judul`,`daftarfenomenakat13`.`fenomena` AS `fenomena`,`daftarfenomenakat13`.`sumber` AS `sumber`,`daftarfenomenakat13`.`sumberket` AS `sumberket`,`daftarfenomenakat13`.`pengaruh` AS `pengaruh`,`daftarfenomenakat13`.`kat01` AS `kat01`,`daftarfenomenakat13`.`kat02` AS `kat02`,`daftarfenomenakat13`.`kat03` AS `kat03`,`daftarfenomenakat13`.`kat04` AS `kat04`,`daftarfenomenakat13`.`kat05` AS `kat05`,`daftarfenomenakat13`.`kat06` AS `kat06`,`daftarfenomenakat13`.`kat07` AS `kat07`,`daftarfenomenakat13`.`kat08` AS `kat08`,`daftarfenomenakat13`.`kat09` AS `kat09`,`daftarfenomenakat13`.`kat10` AS `kat10`,`daftarfenomenakat13`.`kat11` AS `kat11`,`daftarfenomenakat13`.`kat12` AS `kat12`,`daftarfenomenakat13`.`kat13` AS `kat13`,`daftarfenomenakat13`.`kat14` AS `kat14`,`daftarfenomenakat13`.`kat15` AS `kat15`,`daftarfenomenakat13`.`kat16` AS `kat16`,`daftarfenomenakat13`.`kat17` AS `kat17`,`daftarfenomenakat13`.`komp01` AS `komp01`,`daftarfenomenakat13`.`komp02` AS `komp02`,`daftarfenomenakat13`.`komp03` AS `komp03`,`daftarfenomenakat13`.`komp04` AS `komp04`,`daftarfenomenakat13`.`komp05` AS `komp05`,`daftarfenomenakat13`.`komp06` AS `komp06`,`daftarfenomenakat13`.`komp07` AS `komp07`,`daftarfenomenakat13`.`komp08` AS `komp08`,`daftarfenomenakat13`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat13`.`perekam` AS `perekam`,`daftarfenomenakat13`.`deleted` AS `deleted`,`daftarfenomenakat13`.`kategori` AS `kategori`,`daftarfenomenakat13`.`idkat` AS `idkat` from `daftarfenomenakat13` union select `daftarfenomenakat14`.`id` AS `id`,`daftarfenomenakat14`.`wilayah` AS `wilayah`,`daftarfenomenakat14`.`bulan` AS `bulan`,`daftarfenomenakat14`.`tahun` AS `tahun`,`daftarfenomenakat14`.`judul` AS `judul`,`daftarfenomenakat14`.`fenomena` AS `fenomena`,`daftarfenomenakat14`.`sumber` AS `sumber`,`daftarfenomenakat14`.`sumberket` AS `sumberket`,`daftarfenomenakat14`.`pengaruh` AS `pengaruh`,`daftarfenomenakat14`.`kat01` AS `kat01`,`daftarfenomenakat14`.`kat02` AS `kat02`,`daftarfenomenakat14`.`kat03` AS `kat03`,`daftarfenomenakat14`.`kat04` AS `kat04`,`daftarfenomenakat14`.`kat05` AS `kat05`,`daftarfenomenakat14`.`kat06` AS `kat06`,`daftarfenomenakat14`.`kat07` AS `kat07`,`daftarfenomenakat14`.`kat08` AS `kat08`,`daftarfenomenakat14`.`kat09` AS `kat09`,`daftarfenomenakat14`.`kat10` AS `kat10`,`daftarfenomenakat14`.`kat11` AS `kat11`,`daftarfenomenakat14`.`kat12` AS `kat12`,`daftarfenomenakat14`.`kat13` AS `kat13`,`daftarfenomenakat14`.`kat14` AS `kat14`,`daftarfenomenakat14`.`kat15` AS `kat15`,`daftarfenomenakat14`.`kat16` AS `kat16`,`daftarfenomenakat14`.`kat17` AS `kat17`,`daftarfenomenakat14`.`komp01` AS `komp01`,`daftarfenomenakat14`.`komp02` AS `komp02`,`daftarfenomenakat14`.`komp03` AS `komp03`,`daftarfenomenakat14`.`komp04` AS `komp04`,`daftarfenomenakat14`.`komp05` AS `komp05`,`daftarfenomenakat14`.`komp06` AS `komp06`,`daftarfenomenakat14`.`komp07` AS `komp07`,`daftarfenomenakat14`.`komp08` AS `komp08`,`daftarfenomenakat14`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat14`.`perekam` AS `perekam`,`daftarfenomenakat14`.`deleted` AS `deleted`,`daftarfenomenakat14`.`kategori` AS `kategori`,`daftarfenomenakat14`.`idkat` AS `idkat` from `daftarfenomenakat14` union select `daftarfenomenakat15`.`id` AS `id`,`daftarfenomenakat15`.`wilayah` AS `wilayah`,`daftarfenomenakat15`.`bulan` AS `bulan`,`daftarfenomenakat15`.`tahun` AS `tahun`,`daftarfenomenakat15`.`judul` AS `judul`,`daftarfenomenakat15`.`fenomena` AS `fenomena`,`daftarfenomenakat15`.`sumber` AS `sumber`,`daftarfenomenakat15`.`sumberket` AS `sumberket`,`daftarfenomenakat15`.`pengaruh` AS `pengaruh`,`daftarfenomenakat15`.`kat01` AS `kat01`,`daftarfenomenakat15`.`kat02` AS `kat02`,`daftarfenomenakat15`.`kat03` AS `kat03`,`daftarfenomenakat15`.`kat04` AS `kat04`,`daftarfenomenakat15`.`kat05` AS `kat05`,`daftarfenomenakat15`.`kat06` AS `kat06`,`daftarfenomenakat15`.`kat07` AS `kat07`,`daftarfenomenakat15`.`kat08` AS `kat08`,`daftarfenomenakat15`.`kat09` AS `kat09`,`daftarfenomenakat15`.`kat10` AS `kat10`,`daftarfenomenakat15`.`kat11` AS `kat11`,`daftarfenomenakat15`.`kat12` AS `kat12`,`daftarfenomenakat15`.`kat13` AS `kat13`,`daftarfenomenakat15`.`kat14` AS `kat14`,`daftarfenomenakat15`.`kat15` AS `kat15`,`daftarfenomenakat15`.`kat16` AS `kat16`,`daftarfenomenakat15`.`kat17` AS `kat17`,`daftarfenomenakat15`.`komp01` AS `komp01`,`daftarfenomenakat15`.`komp02` AS `komp02`,`daftarfenomenakat15`.`komp03` AS `komp03`,`daftarfenomenakat15`.`komp04` AS `komp04`,`daftarfenomenakat15`.`komp05` AS `komp05`,`daftarfenomenakat15`.`komp06` AS `komp06`,`daftarfenomenakat15`.`komp07` AS `komp07`,`daftarfenomenakat15`.`komp08` AS `komp08`,`daftarfenomenakat15`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat15`.`perekam` AS `perekam`,`daftarfenomenakat15`.`deleted` AS `deleted`,`daftarfenomenakat15`.`kategori` AS `kategori`,`daftarfenomenakat15`.`idkat` AS `idkat` from `daftarfenomenakat15` union select `daftarfenomenakat16`.`id` AS `id`,`daftarfenomenakat16`.`wilayah` AS `wilayah`,`daftarfenomenakat16`.`bulan` AS `bulan`,`daftarfenomenakat16`.`tahun` AS `tahun`,`daftarfenomenakat16`.`judul` AS `judul`,`daftarfenomenakat16`.`fenomena` AS `fenomena`,`daftarfenomenakat16`.`sumber` AS `sumber`,`daftarfenomenakat16`.`sumberket` AS `sumberket`,`daftarfenomenakat16`.`pengaruh` AS `pengaruh`,`daftarfenomenakat16`.`kat01` AS `kat01`,`daftarfenomenakat16`.`kat02` AS `kat02`,`daftarfenomenakat16`.`kat03` AS `kat03`,`daftarfenomenakat16`.`kat04` AS `kat04`,`daftarfenomenakat16`.`kat05` AS `kat05`,`daftarfenomenakat16`.`kat06` AS `kat06`,`daftarfenomenakat16`.`kat07` AS `kat07`,`daftarfenomenakat16`.`kat08` AS `kat08`,`daftarfenomenakat16`.`kat09` AS `kat09`,`daftarfenomenakat16`.`kat10` AS `kat10`,`daftarfenomenakat16`.`kat11` AS `kat11`,`daftarfenomenakat16`.`kat12` AS `kat12`,`daftarfenomenakat16`.`kat13` AS `kat13`,`daftarfenomenakat16`.`kat14` AS `kat14`,`daftarfenomenakat16`.`kat15` AS `kat15`,`daftarfenomenakat16`.`kat16` AS `kat16`,`daftarfenomenakat16`.`kat17` AS `kat17`,`daftarfenomenakat16`.`komp01` AS `komp01`,`daftarfenomenakat16`.`komp02` AS `komp02`,`daftarfenomenakat16`.`komp03` AS `komp03`,`daftarfenomenakat16`.`komp04` AS `komp04`,`daftarfenomenakat16`.`komp05` AS `komp05`,`daftarfenomenakat16`.`komp06` AS `komp06`,`daftarfenomenakat16`.`komp07` AS `komp07`,`daftarfenomenakat16`.`komp08` AS `komp08`,`daftarfenomenakat16`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat16`.`perekam` AS `perekam`,`daftarfenomenakat16`.`deleted` AS `deleted`,`daftarfenomenakat16`.`kategori` AS `kategori`,`daftarfenomenakat16`.`idkat` AS `idkat` from `daftarfenomenakat16` union select `daftarfenomenakat17`.`id` AS `id`,`daftarfenomenakat17`.`wilayah` AS `wilayah`,`daftarfenomenakat17`.`bulan` AS `bulan`,`daftarfenomenakat17`.`tahun` AS `tahun`,`daftarfenomenakat17`.`judul` AS `judul`,`daftarfenomenakat17`.`fenomena` AS `fenomena`,`daftarfenomenakat17`.`sumber` AS `sumber`,`daftarfenomenakat17`.`sumberket` AS `sumberket`,`daftarfenomenakat17`.`pengaruh` AS `pengaruh`,`daftarfenomenakat17`.`kat01` AS `kat01`,`daftarfenomenakat17`.`kat02` AS `kat02`,`daftarfenomenakat17`.`kat03` AS `kat03`,`daftarfenomenakat17`.`kat04` AS `kat04`,`daftarfenomenakat17`.`kat05` AS `kat05`,`daftarfenomenakat17`.`kat06` AS `kat06`,`daftarfenomenakat17`.`kat07` AS `kat07`,`daftarfenomenakat17`.`kat08` AS `kat08`,`daftarfenomenakat17`.`kat09` AS `kat09`,`daftarfenomenakat17`.`kat10` AS `kat10`,`daftarfenomenakat17`.`kat11` AS `kat11`,`daftarfenomenakat17`.`kat12` AS `kat12`,`daftarfenomenakat17`.`kat13` AS `kat13`,`daftarfenomenakat17`.`kat14` AS `kat14`,`daftarfenomenakat17`.`kat15` AS `kat15`,`daftarfenomenakat17`.`kat16` AS `kat16`,`daftarfenomenakat17`.`kat17` AS `kat17`,`daftarfenomenakat17`.`komp01` AS `komp01`,`daftarfenomenakat17`.`komp02` AS `komp02`,`daftarfenomenakat17`.`komp03` AS `komp03`,`daftarfenomenakat17`.`komp04` AS `komp04`,`daftarfenomenakat17`.`komp05` AS `komp05`,`daftarfenomenakat17`.`komp06` AS `komp06`,`daftarfenomenakat17`.`komp07` AS `komp07`,`daftarfenomenakat17`.`komp08` AS `komp08`,`daftarfenomenakat17`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakat17`.`perekam` AS `perekam`,`daftarfenomenakat17`.`deleted` AS `deleted`,`daftarfenomenakat17`.`kategori` AS `kategori`,`daftarfenomenakat17`.`idkat` AS `idkat` from `daftarfenomenakat17` union select `daftarfenomenakomp01`.`id` AS `id`,`daftarfenomenakomp01`.`wilayah` AS `wilayah`,`daftarfenomenakomp01`.`bulan` AS `bulan`,`daftarfenomenakomp01`.`tahun` AS `tahun`,`daftarfenomenakomp01`.`judul` AS `judul`,`daftarfenomenakomp01`.`fenomena` AS `fenomena`,`daftarfenomenakomp01`.`sumber` AS `sumber`,`daftarfenomenakomp01`.`sumberket` AS `sumberket`,`daftarfenomenakomp01`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp01`.`kat01` AS `kat01`,`daftarfenomenakomp01`.`kat02` AS `kat02`,`daftarfenomenakomp01`.`kat03` AS `kat03`,`daftarfenomenakomp01`.`kat04` AS `kat04`,`daftarfenomenakomp01`.`kat05` AS `kat05`,`daftarfenomenakomp01`.`kat06` AS `kat06`,`daftarfenomenakomp01`.`kat07` AS `kat07`,`daftarfenomenakomp01`.`kat08` AS `kat08`,`daftarfenomenakomp01`.`kat09` AS `kat09`,`daftarfenomenakomp01`.`kat10` AS `kat10`,`daftarfenomenakomp01`.`kat11` AS `kat11`,`daftarfenomenakomp01`.`kat12` AS `kat12`,`daftarfenomenakomp01`.`kat13` AS `kat13`,`daftarfenomenakomp01`.`kat14` AS `kat14`,`daftarfenomenakomp01`.`kat15` AS `kat15`,`daftarfenomenakomp01`.`kat16` AS `kat16`,`daftarfenomenakomp01`.`kat17` AS `kat17`,`daftarfenomenakomp01`.`komp01` AS `komp01`,`daftarfenomenakomp01`.`komp02` AS `komp02`,`daftarfenomenakomp01`.`komp03` AS `komp03`,`daftarfenomenakomp01`.`komp04` AS `komp04`,`daftarfenomenakomp01`.`komp05` AS `komp05`,`daftarfenomenakomp01`.`komp06` AS `komp06`,`daftarfenomenakomp01`.`komp07` AS `komp07`,`daftarfenomenakomp01`.`komp08` AS `komp08`,`daftarfenomenakomp01`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp01`.`perekam` AS `perekam`,`daftarfenomenakomp01`.`deleted` AS `deleted`,`daftarfenomenakomp01`.`kategori` AS `kategori`,`daftarfenomenakomp01`.`idkat` AS `idkat` from `daftarfenomenakomp01` union select `daftarfenomenakomp02`.`id` AS `id`,`daftarfenomenakomp02`.`wilayah` AS `wilayah`,`daftarfenomenakomp02`.`bulan` AS `bulan`,`daftarfenomenakomp02`.`tahun` AS `tahun`,`daftarfenomenakomp02`.`judul` AS `judul`,`daftarfenomenakomp02`.`fenomena` AS `fenomena`,`daftarfenomenakomp02`.`sumber` AS `sumber`,`daftarfenomenakomp02`.`sumberket` AS `sumberket`,`daftarfenomenakomp02`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp02`.`kat01` AS `kat01`,`daftarfenomenakomp02`.`kat02` AS `kat02`,`daftarfenomenakomp02`.`kat03` AS `kat03`,`daftarfenomenakomp02`.`kat04` AS `kat04`,`daftarfenomenakomp02`.`kat05` AS `kat05`,`daftarfenomenakomp02`.`kat06` AS `kat06`,`daftarfenomenakomp02`.`kat07` AS `kat07`,`daftarfenomenakomp02`.`kat08` AS `kat08`,`daftarfenomenakomp02`.`kat09` AS `kat09`,`daftarfenomenakomp02`.`kat10` AS `kat10`,`daftarfenomenakomp02`.`kat11` AS `kat11`,`daftarfenomenakomp02`.`kat12` AS `kat12`,`daftarfenomenakomp02`.`kat13` AS `kat13`,`daftarfenomenakomp02`.`kat14` AS `kat14`,`daftarfenomenakomp02`.`kat15` AS `kat15`,`daftarfenomenakomp02`.`kat16` AS `kat16`,`daftarfenomenakomp02`.`kat17` AS `kat17`,`daftarfenomenakomp02`.`komp01` AS `komp01`,`daftarfenomenakomp02`.`komp02` AS `komp02`,`daftarfenomenakomp02`.`komp03` AS `komp03`,`daftarfenomenakomp02`.`komp04` AS `komp04`,`daftarfenomenakomp02`.`komp05` AS `komp05`,`daftarfenomenakomp02`.`komp06` AS `komp06`,`daftarfenomenakomp02`.`komp07` AS `komp07`,`daftarfenomenakomp02`.`komp08` AS `komp08`,`daftarfenomenakomp02`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp02`.`perekam` AS `perekam`,`daftarfenomenakomp02`.`deleted` AS `deleted`,`daftarfenomenakomp02`.`kategori` AS `kategori`,`daftarfenomenakomp02`.`idkat` AS `idkat` from `daftarfenomenakomp02` union select `daftarfenomenakomp03`.`id` AS `id`,`daftarfenomenakomp03`.`wilayah` AS `wilayah`,`daftarfenomenakomp03`.`bulan` AS `bulan`,`daftarfenomenakomp03`.`tahun` AS `tahun`,`daftarfenomenakomp03`.`judul` AS `judul`,`daftarfenomenakomp03`.`fenomena` AS `fenomena`,`daftarfenomenakomp03`.`sumber` AS `sumber`,`daftarfenomenakomp03`.`sumberket` AS `sumberket`,`daftarfenomenakomp03`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp03`.`kat01` AS `kat01`,`daftarfenomenakomp03`.`kat02` AS `kat02`,`daftarfenomenakomp03`.`kat03` AS `kat03`,`daftarfenomenakomp03`.`kat04` AS `kat04`,`daftarfenomenakomp03`.`kat05` AS `kat05`,`daftarfenomenakomp03`.`kat06` AS `kat06`,`daftarfenomenakomp03`.`kat07` AS `kat07`,`daftarfenomenakomp03`.`kat08` AS `kat08`,`daftarfenomenakomp03`.`kat09` AS `kat09`,`daftarfenomenakomp03`.`kat10` AS `kat10`,`daftarfenomenakomp03`.`kat11` AS `kat11`,`daftarfenomenakomp03`.`kat12` AS `kat12`,`daftarfenomenakomp03`.`kat13` AS `kat13`,`daftarfenomenakomp03`.`kat14` AS `kat14`,`daftarfenomenakomp03`.`kat15` AS `kat15`,`daftarfenomenakomp03`.`kat16` AS `kat16`,`daftarfenomenakomp03`.`kat17` AS `kat17`,`daftarfenomenakomp03`.`komp01` AS `komp01`,`daftarfenomenakomp03`.`komp02` AS `komp02`,`daftarfenomenakomp03`.`komp03` AS `komp03`,`daftarfenomenakomp03`.`komp04` AS `komp04`,`daftarfenomenakomp03`.`komp05` AS `komp05`,`daftarfenomenakomp03`.`komp06` AS `komp06`,`daftarfenomenakomp03`.`komp07` AS `komp07`,`daftarfenomenakomp03`.`komp08` AS `komp08`,`daftarfenomenakomp03`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp03`.`perekam` AS `perekam`,`daftarfenomenakomp03`.`deleted` AS `deleted`,`daftarfenomenakomp03`.`kategori` AS `kategori`,`daftarfenomenakomp03`.`idkat` AS `idkat` from `daftarfenomenakomp03` union select `daftarfenomenakomp04`.`id` AS `id`,`daftarfenomenakomp04`.`wilayah` AS `wilayah`,`daftarfenomenakomp04`.`bulan` AS `bulan`,`daftarfenomenakomp04`.`tahun` AS `tahun`,`daftarfenomenakomp04`.`judul` AS `judul`,`daftarfenomenakomp04`.`fenomena` AS `fenomena`,`daftarfenomenakomp04`.`sumber` AS `sumber`,`daftarfenomenakomp04`.`sumberket` AS `sumberket`,`daftarfenomenakomp04`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp04`.`kat01` AS `kat01`,`daftarfenomenakomp04`.`kat02` AS `kat02`,`daftarfenomenakomp04`.`kat03` AS `kat03`,`daftarfenomenakomp04`.`kat04` AS `kat04`,`daftarfenomenakomp04`.`kat05` AS `kat05`,`daftarfenomenakomp04`.`kat06` AS `kat06`,`daftarfenomenakomp04`.`kat07` AS `kat07`,`daftarfenomenakomp04`.`kat08` AS `kat08`,`daftarfenomenakomp04`.`kat09` AS `kat09`,`daftarfenomenakomp04`.`kat10` AS `kat10`,`daftarfenomenakomp04`.`kat11` AS `kat11`,`daftarfenomenakomp04`.`kat12` AS `kat12`,`daftarfenomenakomp04`.`kat13` AS `kat13`,`daftarfenomenakomp04`.`kat14` AS `kat14`,`daftarfenomenakomp04`.`kat15` AS `kat15`,`daftarfenomenakomp04`.`kat16` AS `kat16`,`daftarfenomenakomp04`.`kat17` AS `kat17`,`daftarfenomenakomp04`.`komp01` AS `komp01`,`daftarfenomenakomp04`.`komp02` AS `komp02`,`daftarfenomenakomp04`.`komp03` AS `komp03`,`daftarfenomenakomp04`.`komp04` AS `komp04`,`daftarfenomenakomp04`.`komp05` AS `komp05`,`daftarfenomenakomp04`.`komp06` AS `komp06`,`daftarfenomenakomp04`.`komp07` AS `komp07`,`daftarfenomenakomp04`.`komp08` AS `komp08`,`daftarfenomenakomp04`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp04`.`perekam` AS `perekam`,`daftarfenomenakomp04`.`deleted` AS `deleted`,`daftarfenomenakomp04`.`kategori` AS `kategori`,`daftarfenomenakomp04`.`idkat` AS `idkat` from `daftarfenomenakomp04` union select `daftarfenomenakomp05`.`id` AS `id`,`daftarfenomenakomp05`.`wilayah` AS `wilayah`,`daftarfenomenakomp05`.`bulan` AS `bulan`,`daftarfenomenakomp05`.`tahun` AS `tahun`,`daftarfenomenakomp05`.`judul` AS `judul`,`daftarfenomenakomp05`.`fenomena` AS `fenomena`,`daftarfenomenakomp05`.`sumber` AS `sumber`,`daftarfenomenakomp05`.`sumberket` AS `sumberket`,`daftarfenomenakomp05`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp05`.`kat01` AS `kat01`,`daftarfenomenakomp05`.`kat02` AS `kat02`,`daftarfenomenakomp05`.`kat03` AS `kat03`,`daftarfenomenakomp05`.`kat04` AS `kat04`,`daftarfenomenakomp05`.`kat05` AS `kat05`,`daftarfenomenakomp05`.`kat06` AS `kat06`,`daftarfenomenakomp05`.`kat07` AS `kat07`,`daftarfenomenakomp05`.`kat08` AS `kat08`,`daftarfenomenakomp05`.`kat09` AS `kat09`,`daftarfenomenakomp05`.`kat10` AS `kat10`,`daftarfenomenakomp05`.`kat11` AS `kat11`,`daftarfenomenakomp05`.`kat12` AS `kat12`,`daftarfenomenakomp05`.`kat13` AS `kat13`,`daftarfenomenakomp05`.`kat14` AS `kat14`,`daftarfenomenakomp05`.`kat15` AS `kat15`,`daftarfenomenakomp05`.`kat16` AS `kat16`,`daftarfenomenakomp05`.`kat17` AS `kat17`,`daftarfenomenakomp05`.`komp01` AS `komp01`,`daftarfenomenakomp05`.`komp02` AS `komp02`,`daftarfenomenakomp05`.`komp03` AS `komp03`,`daftarfenomenakomp05`.`komp04` AS `komp04`,`daftarfenomenakomp05`.`komp05` AS `komp05`,`daftarfenomenakomp05`.`komp06` AS `komp06`,`daftarfenomenakomp05`.`komp07` AS `komp07`,`daftarfenomenakomp05`.`komp08` AS `komp08`,`daftarfenomenakomp05`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp05`.`perekam` AS `perekam`,`daftarfenomenakomp05`.`deleted` AS `deleted`,`daftarfenomenakomp05`.`kategori` AS `kategori`,`daftarfenomenakomp05`.`idkat` AS `idkat` from `daftarfenomenakomp05` union select `daftarfenomenakomp06`.`id` AS `id`,`daftarfenomenakomp06`.`wilayah` AS `wilayah`,`daftarfenomenakomp06`.`bulan` AS `bulan`,`daftarfenomenakomp06`.`tahun` AS `tahun`,`daftarfenomenakomp06`.`judul` AS `judul`,`daftarfenomenakomp06`.`fenomena` AS `fenomena`,`daftarfenomenakomp06`.`sumber` AS `sumber`,`daftarfenomenakomp06`.`sumberket` AS `sumberket`,`daftarfenomenakomp06`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp06`.`kat01` AS `kat01`,`daftarfenomenakomp06`.`kat02` AS `kat02`,`daftarfenomenakomp06`.`kat03` AS `kat03`,`daftarfenomenakomp06`.`kat04` AS `kat04`,`daftarfenomenakomp06`.`kat05` AS `kat05`,`daftarfenomenakomp06`.`kat06` AS `kat06`,`daftarfenomenakomp06`.`kat07` AS `kat07`,`daftarfenomenakomp06`.`kat08` AS `kat08`,`daftarfenomenakomp06`.`kat09` AS `kat09`,`daftarfenomenakomp06`.`kat10` AS `kat10`,`daftarfenomenakomp06`.`kat11` AS `kat11`,`daftarfenomenakomp06`.`kat12` AS `kat12`,`daftarfenomenakomp06`.`kat13` AS `kat13`,`daftarfenomenakomp06`.`kat14` AS `kat14`,`daftarfenomenakomp06`.`kat15` AS `kat15`,`daftarfenomenakomp06`.`kat16` AS `kat16`,`daftarfenomenakomp06`.`kat17` AS `kat17`,`daftarfenomenakomp06`.`komp01` AS `komp01`,`daftarfenomenakomp06`.`komp02` AS `komp02`,`daftarfenomenakomp06`.`komp03` AS `komp03`,`daftarfenomenakomp06`.`komp04` AS `komp04`,`daftarfenomenakomp06`.`komp05` AS `komp05`,`daftarfenomenakomp06`.`komp06` AS `komp06`,`daftarfenomenakomp06`.`komp07` AS `komp07`,`daftarfenomenakomp06`.`komp08` AS `komp08`,`daftarfenomenakomp06`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp06`.`perekam` AS `perekam`,`daftarfenomenakomp06`.`deleted` AS `deleted`,`daftarfenomenakomp06`.`kategori` AS `kategori`,`daftarfenomenakomp06`.`idkat` AS `idkat` from `daftarfenomenakomp06` union select `daftarfenomenakomp07`.`id` AS `id`,`daftarfenomenakomp07`.`wilayah` AS `wilayah`,`daftarfenomenakomp07`.`bulan` AS `bulan`,`daftarfenomenakomp07`.`tahun` AS `tahun`,`daftarfenomenakomp07`.`judul` AS `judul`,`daftarfenomenakomp07`.`fenomena` AS `fenomena`,`daftarfenomenakomp07`.`sumber` AS `sumber`,`daftarfenomenakomp07`.`sumberket` AS `sumberket`,`daftarfenomenakomp07`.`pengaruh` AS `pengaruh`,`daftarfenomenakomp07`.`kat01` AS `kat01`,`daftarfenomenakomp07`.`kat02` AS `kat02`,`daftarfenomenakomp07`.`kat03` AS `kat03`,`daftarfenomenakomp07`.`kat04` AS `kat04`,`daftarfenomenakomp07`.`kat05` AS `kat05`,`daftarfenomenakomp07`.`kat06` AS `kat06`,`daftarfenomenakomp07`.`kat07` AS `kat07`,`daftarfenomenakomp07`.`kat08` AS `kat08`,`daftarfenomenakomp07`.`kat09` AS `kat09`,`daftarfenomenakomp07`.`kat10` AS `kat10`,`daftarfenomenakomp07`.`kat11` AS `kat11`,`daftarfenomenakomp07`.`kat12` AS `kat12`,`daftarfenomenakomp07`.`kat13` AS `kat13`,`daftarfenomenakomp07`.`kat14` AS `kat14`,`daftarfenomenakomp07`.`kat15` AS `kat15`,`daftarfenomenakomp07`.`kat16` AS `kat16`,`daftarfenomenakomp07`.`kat17` AS `kat17`,`daftarfenomenakomp07`.`komp01` AS `komp01`,`daftarfenomenakomp07`.`komp02` AS `komp02`,`daftarfenomenakomp07`.`komp03` AS `komp03`,`daftarfenomenakomp07`.`komp04` AS `komp04`,`daftarfenomenakomp07`.`komp05` AS `komp05`,`daftarfenomenakomp07`.`komp06` AS `komp06`,`daftarfenomenakomp07`.`komp07` AS `komp07`,`daftarfenomenakomp07`.`komp08` AS `komp08`,`daftarfenomenakomp07`.`tgl_rekam` AS `tgl_rekam`,`daftarfenomenakomp07`.`perekam` AS `perekam`,`daftarfenomenakomp07`.`deleted` AS `deleted`,`daftarfenomenakomp07`.`kategori` AS `kategori`,`daftarfenomenakomp07`.`idkat` AS `idkat` from `daftarfenomenakomp07`  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat01`
--
DROP TABLE IF EXISTS `daftarfenomenakat01`;

DROP VIEW IF EXISTS `daftarfenomenakat01`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat01`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat01' AS `kategori`, concat(`fenomena`.`id`,'_01') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat01` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat02`
--
DROP TABLE IF EXISTS `daftarfenomenakat02`;

DROP VIEW IF EXISTS `daftarfenomenakat02`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat02`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat02' AS `kategori`, concat(`fenomena`.`id`,'_02') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat02` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat03`
--
DROP TABLE IF EXISTS `daftarfenomenakat03`;

DROP VIEW IF EXISTS `daftarfenomenakat03`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat03`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat03' AS `kategori`, concat(`fenomena`.`id`,'_03') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat03` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat04`
--
DROP TABLE IF EXISTS `daftarfenomenakat04`;

DROP VIEW IF EXISTS `daftarfenomenakat04`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat04`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat04' AS `kategori`, concat(`fenomena`.`id`,'_04') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat04` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat05`
--
DROP TABLE IF EXISTS `daftarfenomenakat05`;

DROP VIEW IF EXISTS `daftarfenomenakat05`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat05`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat05' AS `kategori`, concat(`fenomena`.`id`,'_05') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat05` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat06`
--
DROP TABLE IF EXISTS `daftarfenomenakat06`;

DROP VIEW IF EXISTS `daftarfenomenakat06`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat06`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat06' AS `kategori`, concat(`fenomena`.`id`,'_06') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat06` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat07`
--
DROP TABLE IF EXISTS `daftarfenomenakat07`;

DROP VIEW IF EXISTS `daftarfenomenakat07`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat07`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat07' AS `kategori`, concat(`fenomena`.`id`,'_07') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat07` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat08`
--
DROP TABLE IF EXISTS `daftarfenomenakat08`;

DROP VIEW IF EXISTS `daftarfenomenakat08`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat08`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat08' AS `kategori`, concat(`fenomena`.`id`,'_08') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat08` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat09`
--
DROP TABLE IF EXISTS `daftarfenomenakat09`;

DROP VIEW IF EXISTS `daftarfenomenakat09`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat09`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat09' AS `kategori`, concat(`fenomena`.`id`,'_09') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat09` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat10`
--
DROP TABLE IF EXISTS `daftarfenomenakat10`;

DROP VIEW IF EXISTS `daftarfenomenakat10`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat10`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat10' AS `kategori`, concat(`fenomena`.`id`,'_10') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat10` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat11`
--
DROP TABLE IF EXISTS `daftarfenomenakat11`;

DROP VIEW IF EXISTS `daftarfenomenakat11`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat11`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat11' AS `kategori`, concat(`fenomena`.`id`,'_11') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat11` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat12`
--
DROP TABLE IF EXISTS `daftarfenomenakat12`;

DROP VIEW IF EXISTS `daftarfenomenakat12`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat12`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat12' AS `kategori`, concat(`fenomena`.`id`,'_12') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat12` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat13`
--
DROP TABLE IF EXISTS `daftarfenomenakat13`;

DROP VIEW IF EXISTS `daftarfenomenakat13`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat13`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat13' AS `kategori`, concat(`fenomena`.`id`,'_13') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat13` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat14`
--
DROP TABLE IF EXISTS `daftarfenomenakat14`;

DROP VIEW IF EXISTS `daftarfenomenakat14`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat14`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat14' AS `kategori`, concat(`fenomena`.`id`,'_14') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat14` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat15`
--
DROP TABLE IF EXISTS `daftarfenomenakat15`;

DROP VIEW IF EXISTS `daftarfenomenakat15`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat15`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat15' AS `kategori`, concat(`fenomena`.`id`,'_15') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat15` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat16`
--
DROP TABLE IF EXISTS `daftarfenomenakat16`;

DROP VIEW IF EXISTS `daftarfenomenakat16`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat16`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat16' AS `kategori`, concat(`fenomena`.`id`,'_16') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat16` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakat17`
--
DROP TABLE IF EXISTS `daftarfenomenakat17`;

DROP VIEW IF EXISTS `daftarfenomenakat17`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakat17`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'kat17' AS `kategori`, concat(`fenomena`.`id`,'_17') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`kat17` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp01`
--
DROP TABLE IF EXISTS `daftarfenomenakomp01`;

DROP VIEW IF EXISTS `daftarfenomenakomp01`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp01`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp01' AS `kategori`, concat(`fenomena`.`id`,'_k01') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp01` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp02`
--
DROP TABLE IF EXISTS `daftarfenomenakomp02`;

DROP VIEW IF EXISTS `daftarfenomenakomp02`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp02`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp02' AS `kategori`, concat(`fenomena`.`id`,'_k02') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp02` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp03`
--
DROP TABLE IF EXISTS `daftarfenomenakomp03`;

DROP VIEW IF EXISTS `daftarfenomenakomp03`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp03`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp03' AS `kategori`, concat(`fenomena`.`id`,'_k03') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp03` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp04`
--
DROP TABLE IF EXISTS `daftarfenomenakomp04`;

DROP VIEW IF EXISTS `daftarfenomenakomp04`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp04`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp04' AS `kategori`, concat(`fenomena`.`id`,'_k04') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp04` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp05`
--
DROP TABLE IF EXISTS `daftarfenomenakomp05`;

DROP VIEW IF EXISTS `daftarfenomenakomp05`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp05`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp05' AS `kategori`, concat(`fenomena`.`id`,'_k05') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp05` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp06`
--
DROP TABLE IF EXISTS `daftarfenomenakomp06`;

DROP VIEW IF EXISTS `daftarfenomenakomp06`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp06`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp06' AS `kategori`, concat(`fenomena`.`id`,'_k06') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp06` = 1)  ;

-- --------------------------------------------------------

--
-- Structure for view `daftarfenomenakomp07`
--
DROP TABLE IF EXISTS `daftarfenomenakomp07`;

DROP VIEW IF EXISTS `daftarfenomenakomp07`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftarfenomenakomp07`  AS SELECT `fenomena`.`id` AS `id`, `fenomena`.`wilayah` AS `wilayah`, `fenomena`.`bulan` AS `bulan`, `fenomena`.`tahun` AS `tahun`, `fenomena`.`judul` AS `judul`, `fenomena`.`fenomena` AS `fenomena`, `fenomena`.`sumber` AS `sumber`, `fenomena`.`sumberket` AS `sumberket`, `fenomena`.`pengaruh` AS `pengaruh`, `fenomena`.`kat01` AS `kat01`, `fenomena`.`kat02` AS `kat02`, `fenomena`.`kat03` AS `kat03`, `fenomena`.`kat04` AS `kat04`, `fenomena`.`kat05` AS `kat05`, `fenomena`.`kat06` AS `kat06`, `fenomena`.`kat07` AS `kat07`, `fenomena`.`kat08` AS `kat08`, `fenomena`.`kat09` AS `kat09`, `fenomena`.`kat10` AS `kat10`, `fenomena`.`kat11` AS `kat11`, `fenomena`.`kat12` AS `kat12`, `fenomena`.`kat13` AS `kat13`, `fenomena`.`kat14` AS `kat14`, `fenomena`.`kat15` AS `kat15`, `fenomena`.`kat16` AS `kat16`, `fenomena`.`kat17` AS `kat17`, `fenomena`.`komp01` AS `komp01`, `fenomena`.`komp02` AS `komp02`, `fenomena`.`komp03` AS `komp03`, `fenomena`.`komp04` AS `komp04`, `fenomena`.`komp05` AS `komp05`, `fenomena`.`komp06` AS `komp06`, `fenomena`.`komp07` AS `komp07`, `fenomena`.`komp08` AS `komp08`, `fenomena`.`tgl_rekam` AS `tgl_rekam`, `fenomena`.`perekam` AS `perekam`, `fenomena`.`deleted` AS `deleted`, 'komp07' AS `kategori`, concat(`fenomena`.`id`,'_k07') AS `idkat` FROM `fenomena` WHERE (`fenomena`.`komp07` = 1)  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
