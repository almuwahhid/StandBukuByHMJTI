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
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
`id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `pengarang` varchar(70) NOT NULL,
  `harga` int(7) NOT NULL DEFAULT '0',
  `diskon` int(3) NOT NULL DEFAULT '0',
  `jumlah` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `judul`, `penerbit`, `pengarang`, `harga`, `diskon`, `jumlah`) VALUES
(1, 'Belajar Trik Tersembunyi dari Coreldraw X6', 'Andi Publisher', 'Galih Pranowo', 44000, 20, 1),
(2, 'Cara Mudah DESAIN ANIMASI Menggunakan 3Ds Max Untuk Pemula dan Tingkat Lanjut', 'Gava Media', 'Drs.H.Widada HR', 42500, 30, 1),
(3, 'Menguasai Desain Grafis dengan Kolaborasi Corel Draw dan Photoshop', 'Gava Media', 'A.Taufiq H.', 37500, 30, 1),
(4, '5 Hari Menguasai dan Lancar Kolaborasi CorelDRAW X3, Photoshop CS3 & Nero Cover Designer', 'Gava Media', 'A.Taufiq H.', 29500, 30, 1),
(5, 'Mudah Membuat Game Android Berbasis Adobe AIR', 'Andi Publisher', 'Lukas Lukmana', 39500, 20, 1),
(6, 'Jaringan Komputer Teori & Implementasi Berbasis Linux', 'Gava Media', 'Wagito', 44900, 30, 2),
(7, 'From Zero to Pro : Pemrograman C++, Membahas Pemrograman Berorientasi Objek + cd', 'Andi Publisher', 'Abdul Kadir, Ir', 199000, 20, 1),
(8, 'Cara Mudah Dan Cepat Belajar Pemrograman C#.Net', 'Andi Publisher', 'Adi Nugroho, ST., MM', 59000, 20, 1),
(9, 'Bikin Aplikasi ANDROID dgn Angular Mobile & MongoDB', 'Lokomedia', 'Agung Julisman', 59000, 45, 3),
(10, 'SERBA GRATIS E-mail, Messenger, Blogging, Domain, Hosting, CMS for Blog & E-Comerce ', 'Gava Media', 'Riyanto', 45000, 30, 1),
(11, 'Proyek Membuat Website Berbasis PHP dengan Codeigniter', 'Lokomedia', 'Awan Pribadi Basuki', 58000, 45, 2),
(12, 'Belajar Sendiri Pasti Bisa Program C++ (cd)', 'Andi Publisher', 'Abdul Kadir, Ir', 110000, 20, 2),
(13, 'Adobe Audition CS6, Cara Mudah Buat Produksi Rekaman', 'Andi Publisher', 'Lukas Lukmana', 47000, 20, 1),
(14, 'Visual Basic Membuat Animasi & Tampilan Cantik', 'Gava Media', 'Bunafit N', 33500, 30, 1),
(15, 'Kolaborasi Dahsyat ANDROID dengan PHP dan MySQL ', 'Lokomedia', 'Akhmad Dharma', 67000, 45, 2),
(16, 'Mobile App Development With PhoneGap', 'Andi Publisher', 'Lukas Lukmana', 42000, 20, 1),
(17, 'Membuat Virus & Anti Virus + CD', 'Gava Media', 'Ahlul Faradish R', 24500, 30, 1),
(18, 'Panduan Mudah Simulasi dan Praktek Mikrokontroller Arduino +cd', 'Andi Publisher', 'Muhammad Syahwii', 55000, 20, 1),
(19, 'Sistem Operasi Cloud Computing dengan Windows Azure', 'Andi Publisher', 'Tutang, SE., MM.', 29000, 20, 1),
(20, 'Pengembangan Aplikasi Sistem Informasi Geografis Berbasis Dekstop dan Web', 'Gava Media', 'Riyanto,dkk', 61000, 30, 1),
(21, 'Membongkar Source Code berbagai Aplikasi ANDROID', 'Gava Media', 'Ivan Michael Siregar', 68000, 30, 1),
(22, 'Soal dan Penyelesaian Struktur Data dengan Java + cd', 'Andi Publisher', 'R.H. Sianipar', 79000, 20, 1),
(23, 'Akademik Sekolah dengan PHP-MySQL & Dreamweaver : Pemrograman Web Membuat Sistem Informasi', 'Gava Media', 'Bunafit Nugroho', 105000, 30, 1),
(24, 'Cara Cepat Belajar Jaringan Infrastruktur Jaringan Wireless', 'Gava Media', 'Syamsudin', 34500, 30, 1),
(25, 'jaringan komputer', 'Graha Ilmu', 'Jonathan Lukas', 119800, 35, 1),
(26, 'Neuro-Fuzzy Integrasi Sistem Fuzzy dan Jaringan Syaraf', 'Graha Ilmu', 'Sri Kusuma dewi Dr.', 196800, 35, 1),
(27, 'Latihan Membuat Aplikasi Web PHP&MySQL dg Dreamweaver', 'Gava Media', 'Bunafit.N', 64500, 30, 1),
(28, 'Pembuatan Software Rekam Medis dengan Java Netbeans+MySQL', 'Gava Media', 'Fita Puspita Sari dkk', 44500, 30, 1),
(29, 'Pemrograman Java Tingkat Lanjut + CD', 'Andi Publisher', 'Agus Kurniawan', 69500, 20, 1),
(30, 'Membuat Virus & Anti Virus Lanjutan (Be Expert) + CD', 'Gava Media', 'Ahlul Faradish R', 35000, 30, 1),
(31, 'Cascading Style Sheet , Solusi Mempercantik Halaman Web', 'Gava Media', 'Bunafit Nugroho', 42000, 30, 1),
(32, 'Desain Rancangan Bangunan 3D dan Interior dengan AutoCad + (cd)', 'Andi Publisher', 'Suparno Sastra N', 79000, 20, 1),
(33, 'Panduan Aplikatif dan Solusi : Bikin Kartun Anime dengan CorelDRAW X', 'Andi Publisher', 'Lukas Lukmana', 65000, 20, 1),
(34, 'The Secret Of Coreldraw', 'Andi Publisher', 'Handoko Budisetyo', 59000, 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`id`), ADD KEY `penerbit` (`penerbit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
