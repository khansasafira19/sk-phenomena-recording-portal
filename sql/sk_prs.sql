-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2023 at 07:00 AM
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
-- Database: `sk_prs`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
