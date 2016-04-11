-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 11:06 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hmjti`
--

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
`nomor` int(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggapan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`nomor`, `nama`, `status`, `tanggapan`) VALUES
(3, 'I Kadek Yoga Utama', 'Mahasiswa', 'Keren ada web nya'),
(5, 'Wahid Cah Ganteng', 'Mahasiswa', 'Wapik pokoe sing acarane diadake karo pak wahid :D'),
(7, 'M Azwar Auzan', 'Mahasiswa', 'Di Tingkatkan, dan terus berkarya #  HMJTI'),
(8, 'M Azwar Auzan', 'Mahasiswa', 'Di Tingkatkan, dan terus berkarya #  HMJTI'),
(9, 'M Azwar Auzan', 'Mahasiswa', 'Di Tingkatkan, dan terus berkarya #  HMJTI'),
(10, 'Ester Marsetya', 'Mahasiswa', 'Sangat bagus.. mungkin di kegiatan selanjutnya bisa di tambah buku-buku mengenai jaringan ya..'),
(12, 'ADI Setyadi', 'Mahasiswa', 'Bagus, update buku" baru nya,, :)\ntetep semngat,, :)'),
(13, 'Mathius Geraldi Eka Makondhang', 'Mahasiswa', 'Jenis-jenis buku yang ditawarkan cukup variatif. Buku-buku yang ditawarkan juga cukup menarik. Dengan adanya stand buku, mahasiswa bisa memperoleh buku dengan tidak perlu pergi ke toko buku. Harga yang ditawarkan juga pas untuk kalangan mahasiswa. Ditambah sudah adanya katalog buku yang tersedia jadi sangat mudah untuk mencari buku yang di inginkan. Stand buku yang diselenggarakan oleh HMJ TI STMIK AKAKOM cukup menarik dan membantu mahasiswa untuk mencari buku-buku yang diinginkan atau yang digunakan untuk perkuliahan. '),
(14, 'Muhamad abdulah muwahid', 'Mahasiswa', 'Buku -  buku kurang lengkap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`nomor`), ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `nomor` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
