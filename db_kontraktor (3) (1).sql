-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 04:18 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kontraktor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `ID` int(11) NOT NULL,
  `nilai1` float NOT NULL,
  `nilai2` float NOT NULL,
  `nilai3` float NOT NULL,
  `nilai4` float NOT NULL,
  `nilai5` float NOT NULL,
  `nilai6` float NOT NULL,
  `nilai7` float NOT NULL,
  `nilai8` float NOT NULL,
  `nilai9` float NOT NULL,
  `nilai10` float NOT NULL,
  `nilai11` float NOT NULL,
  `nilai12` float NOT NULL,
  `nilai13` float NOT NULL,
  `nilai14` float NOT NULL,
  `nilai15` float NOT NULL,
  `nilai16` float NOT NULL,
  `nilai17` float NOT NULL,
  `nilai18` float NOT NULL,
  `nilai19` float NOT NULL,
  `nilai20` float NOT NULL,
  `nilai21` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`ID`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `nilai20`, `nilai21`) VALUES
(1, 0.02, 0.06, 0.05, 0.09, 0.06, 0.06, 0.06, 0.06, 0.04, 0.04, 0.04, 0.04, 0.04, 0.03, 0.03, 0.03, 0.05, 0.07, 0.04, 0.04, 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id_content` int(11) NOT NULL,
  `head_title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id_content`, `head_title`, `description`) VALUES
(1, 'Visi', 'Menjadi salah satu pengembang dan manajemen properti terbaik di Indonesia. ( www.jayaproperty.com)'),
(2, 'Misi', '1.  Mencapai pertumbuhan pendapatan di atas rata-rata industri real estat dan properti di Indonesia.\r\n</br>\r\n2.  Menyediakan produk dan layanan berkualitas yang memuaskan konsumen.\r\n</br>\r\n3.  Mengembangkan sumber daya manusia yang berkualitas dan iklim kerja yang baik untuk mencapai kinerja tinggi.\r\n</br>\r\n4.  Mengoptimalkan produktivitas semua sumber dayanya untuk kepentingan konsumen, pemegang saham dan karyawan.\r\n</br>\r\n5.  Merawat aspek sosial dan lingkungan di setiap unit bisnis.\r\n( www.jayaproperty.com)\r\n'),
(3, 'Sejarah', '&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Perusahaan berdiri pada tahun 1979 dengan nama PT. Bintaro Raya berdasarkan Undang-Undang Penanaman Modal Dalam Negeri pada tanggal 25 Mei 1979, Akta No. 36 disusun oleh Hobropoerwanto, SH, dan diubah berdasarkan Akta No. 14 yang dibuat oleh notaris yang sama pada tanggal 6 Desember 1979. akta penggabungan tersebut diimbangi oleh Menteri Kehakiman Republik Indonesia sebagaimana tercantum dalam Surat Keputusan No. YA 5/498/24 tanggal 22 Desember 1979 dan diumumkan dalam Berita Resmi No. 23 tanggal 18 Maret 1980, Tambahan Tidak 148. Nama perusahaan selanjutnya berubah menjadi PT. Jaya Real Property berdasarkan Akta No. 133 pada tanggal 14 Mei 1992 dibuat dihadapan Sutjipto, notaris di Jakarta. Anggaran Dasar Perusahaan telah beberapa kali mengalami perubahan, terutama berdasarkan Akta No. 52 tanggal 4 Juni 2009 yang dibuat dihadapan Aulia Taufani, SH. sebagai pengganti Sutjipto, SH., maka notaris di Jakarta yang telah mendapat persetujuan Menteri Hukum dan Hak Asasi Manusia sebagaimana tercantum dalam Surat Keputusannya Nomor AHU-50606.AH.01.02 tahun 2009 tanggal 20 Oktober 2009 dan baru-baru ini berdasarkan Akta No. 3 tanggal 1 Juni 2010 oleh Aulia Taufani, SH., Sebagai pengganti Sutjipto, SH, notaris di Jakarta, mengenai perubahan domisili Perusahaan. Perubahan anggaran dasar Perusahaan tersebut telah mendapat persetujuan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia sebagaimana tercantum dalam Surat Keputusan No. AHU-40349.AH.01.02 Tahun 2010 Tanggal 16 Agustus 2010. Perusahaan mulai beroperasi secara komersial. sejak tahun 1980 dan tercatat di Bursa Efek Indonesia (dahulu Bursa Efek Jakarta) sejak tahun 1994. ( www.jayaproperty.com)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `type_kriteria` varchar(20) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `type_kriteria`, `bobot`) VALUES
(0, 'PEKERJAAN PERSIAPAN', 'Benefit', 0.02),
(1, 'PEKERJAAN TANAH DAN STRUKTUR', 'Benefit', 0.06),
(2, 'PEKERJAAN PONDASI', 'Benefit', 0.05),
(3, 'PEKERJAAN UPER STRUKTUR', 'Benefit', 0.09),
(4, 'PEKERJAAN ATAP', 'Benefit', 0.06),
(5, 'PEKERJAAN DINDING', 'Benefit', 0.06),
(6, 'PEKERJAAN LANTAI', 'Benefit', 0.06),
(7, 'PEKERJAAN TOILET DAN DAPUR', 'Benefit', 0.06),
(8, 'PEKERJAAN PLAFOND', 'Benefit', 0.04),
(9, 'PEKERJAAN KUSEN DAN PINTU', 'Benefit', 0.04),
(10, 'PEKERJAAN PENGECATAN', 'Benefit', 0.04),
(11, 'SANITARY HARDWARE', 'Benefit', 0.04),
(12, 'PEKERJAAN TANGGA', 'Benefit', 0.04),
(13, 'PEKERJAAN EXTERIORR WORKA', 'Benefit', 0.03),
(14, 'PEKERJAAN MEKANIKAL DAN PLUMBING', 'Benefit', 0.03),
(15, 'PEKERJAAN ELEKTRIKAL', 'Benefit', 0.03),
(16, 'TANGGUNG JAWAB', 'Benefit', 0.05),
(17, 'TEAM WORK', 'Benefit', 0.07),
(18, 'KERAPIHAN KERJA', 'Benefit', 0.04),
(19, 'PROFESIONALISME', 'Benefit', 0.04),
(20, 'DISIPLIN', 'Benefit', 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_kontraktor` varchar(250) NOT NULL,
  `nilai1` double NOT NULL,
  `nilai2` double NOT NULL,
  `nilai3` double NOT NULL,
  `nilai4` double NOT NULL,
  `nilai5` double NOT NULL,
  `nilai6` double NOT NULL,
  `nilai7` double NOT NULL,
  `nilai8` double NOT NULL,
  `nilai9` double NOT NULL,
  `nilai10` double NOT NULL,
  `nilai11` double NOT NULL,
  `nilai12` double NOT NULL,
  `nilai13` double NOT NULL,
  `nilai14` double NOT NULL,
  `nilai15` double NOT NULL,
  `nilai16` double NOT NULL,
  `nilai17` double NOT NULL,
  `nilai18` double NOT NULL,
  `nilai19` double NOT NULL,
  `nilai20` double NOT NULL,
  `nilai21` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_kontraktor`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `nilai20`, `nilai21`) VALUES
(6, 'DA14045', 70, 25, 90, 56, 100, 89, 67, 45, 34, 77, 89, 56, 34, 99, 67, 45, 33, 56, 31, 78, 89),
(8, 'D101231', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
(9, '089912', 80, 50, 60, 30, 80, 70, 80, 90, 60, 40, 50, 50, 60, 60, 50, 50, 90, 60, 60, 50, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_id` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`userid`, `password`, `nama_id`, `level`) VALUES
('admin', 'admin', 'Administrator', 'admin'),
('komandan', '123', 'Kepala komandan', 'komandan'),
('satpam', '1234', 'satpam', 'satpam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontraktor`
--

CREATE TABLE `tbl_kontraktor` (
  `id_kontraktor` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontraktor`
--

INSERT INTO `tbl_kontraktor` (`id_kontraktor`, `nik`, `nama`, `jabatan`, `tanggal`) VALUES
(2, 'DA14045', 'David Kurniawan', 'Kontraktor', '2017-02-09'),
(4, 'D101231', 'David', 'Kontrak', '0000-00-00'),
(5, '089912', 'Rama', 'Kontraktor', '2018-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satpam`
--

CREATE TABLE `tbl_satpam` (
  `nik` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_satpam`
--

INSERT INTO `tbl_satpam` (`nik`, `nama`, `jabatan`, `tgl`) VALUES
('202908', 'ALVAN', 'SECURITY', '2015-08-25'),
('ada12312', 'david', 'presiden', '2017-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`,`id_kontraktor`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_kontraktor`
--
ALTER TABLE `tbl_kontraktor`
  ADD PRIMARY KEY (`id_kontraktor`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tbl_satpam`
--
ALTER TABLE `tbl_satpam`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kontraktor`
--
ALTER TABLE `tbl_kontraktor`
  MODIFY `id_kontraktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
