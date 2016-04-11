-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 11:05 PM
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
-- Table structure for table `lapharian`
--

CREATE TABLE IF NOT EXISTS `lapharian` (
`id` int(11) NOT NULL,
  `tanggal` int(3) NOT NULL DEFAULT '0',
  `judul` varchar(300) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `pengarang` varchar(70) NOT NULL,
  `harga` int(7) NOT NULL DEFAULT '0',
  `status` varchar(15) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '0',
  `diskon` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapharian`
--

INSERT INTO `lapharian` (`id`, `tanggal`, `judul`, `penerbit`, `pengarang`, `harga`, `status`, `jumlah`, `diskon`) VALUES
(1, 9, 'Belajar Trik Tersembunyi dari Coreldraw X6', 'Andi Publisher', 'Galih Pranowo', 44000, 'Umum', 1, 10),
(2, 9, 'Cara Mudah DESAIN ANIMASI Menggunakan 3Ds Max Untuk Pemula dan Tingkat Lanjut', 'Gava Media', 'Drs.H.Widada HR', 42500, 'Umum', 1, 12),
(3, 9, 'Menguasai Desain Grafis dengan Kolaborasi Corel Draw dan Photoshop', 'Gava Media', 'A.Taufiq H.', 37500, 'Umum', 1, 12),
(4, 9, '5 Hari Menguasai dan Lancar Kolaborasi CorelDRAW X3,  Photoshop CS3 & Nero Cover Designer', 'Gava Media', 'A.Taufiq H.', 29500, 'Umum', 1, 12),
(5, 9, 'Mudah Membuat Game Android Berbasis Adobe AIR', 'Andi Publisher', 'Lukas Lukmana', 39500, 'Umum', 1, 10),
(6, 9, 'Jaringan Komputer Teori & Implementasi Berbasis Linux', 'Gava Media', 'Wagito', 44900, 'Umum', 1, 12),
(7, 10, 'From Zero to Pro : Pemrograman C++, Membahas Pemrograman Berorientasi Objek + cd', 'Andi Publisher', 'Abdul Kadir, Ir', 199000, 'Umum', 1, 10),
(8, 10, 'Cara Mudah Dan Cepat Belajar Pemrograman C#.Net', 'Andi Publisher', 'Adi Nugroho, ST., MM', 59000, 'Umum', 1, 10),
(9, 10, 'Bikin Aplikasi ANDROID dgn Angular Mobile & MongoDB', 'Lokomedia', 'Agung Julisman', 59000, 'Umum', 1, 15),
(10, 10, 'Jaringan Komputer Teori & Implementasi Berbasis Linux', 'Gava Media', 'Wagito', 44900, 'Umum', 1, 12),
(11, 10, 'SERBA GRATIS E-mail, Messenger, Blogging, Domain, Hosting, CMS for Blog & E-Comerce ', 'Gava Media', 'Riyanto', 45000, 'Umum', 1, 12),
(12, 11, 'Proyek Membuat Website Berbasis PHP dengan Codeigniter', 'Lokomedia', 'Awan Pribadi Basuki', 58000, 'Umum', 1, 15),
(13, 11, 'Belajar Sendiri Pasti Bisa Program C++ (cd)', 'Andi Publisher', 'Abdul Kadir, Ir', 110000, 'Umum', 2, 10),
(14, 11, 'Adobe Audition CS6, Cara Mudah Buat Produksi Rekaman', 'Andi Publisher', 'Lukas Lukmana', 47000, 'Umum', 1, 10),
(15, 11, 'Visual Basic Membuat Animasi & Tampilan Cantik', 'Gava Media', 'Bunafit N', 33500, 'Umum', 1, 12),
(16, 11, 'Kolaborasi Dahsyat ANDROID dengan PHP dan MySQL ', 'Lokomedia', 'Akhmad Dharma', 67000, 'Anggota Inti', 1, 30),
(17, 12, 'Bikin Aplikasi ANDROID dgn Angular Mobile & MongoDB', 'Lokomedia', 'Agung Julisman', 59000, 'Anggota Inti', 1, 25),
(18, 12, 'Proyek Membuat Website Berbasis PHP dengan Codeigniter', 'Lokomedia', 'Awan Pribadi Basuki', 58000, 'Anggota Inti', 1, 25),
(19, 12, 'Mobile App Development With PhoneGap', 'Andi Publisher', 'Lukas Lukmana', 42000, 'Umum', 1, 10),
(20, 12, 'Membuat Virus & Anti Virus + CD', 'Gava Media', 'Ahlul Faradish R', 24500, 'Umum', 1, 12),
(21, 12, 'Panduan Mudah Simulasi dan Praktek Mikrokontroller Arduino +cd', 'Andi Publisher', 'Muhammad Syahwii', 55000, 'Umum', 1, 10),
(22, 12, 'Sistem Operasi Cloud Computing dengan Windows Azure', 'Andi Publisher', 'Tutang, SE., MM.', 29000, 'Umum', 1, 10),
(23, 12, 'Pengembangan Aplikasi Sistem Informasi Geografis Berbasis Dekstop dan Web', 'Gava Media', 'Riyanto,dkk', 61000, 'Umum', 1, 12),
(24, 12, 'Membongkar Source Code berbagai Aplikasi ANDROID', 'Gava Media', 'Ivan Michael Siregar', 68000, 'Umum', 1, 12),
(25, 12, 'Soal dan Penyelesaian Struktur Data dengan Java + cd', 'Andi Publisher', 'R.H. Sianipar', 79000, 'Umum', 1, 10),
(26, 12, 'Akademik Sekolah dengan PHP-MySQL & Dreamweaver : Pemrograman Web Membuat Sistem Informasi', 'Gava Media', 'Bunafit Nugroho', 105000, 'Umum', 1, 12),
(27, 12, 'Cara Cepat Belajar Jaringan Infrastruktur Jaringan Wireless', 'Gava Media', 'Syamsudin', 34500, 'Umum', 1, 12),
(28, 12, 'jaringan komputer', 'Graha Ilmu', 'Jonathan Lukas', 119800, 'Umum', 1, 15),
(29, 12, 'Neuro-Fuzzy Integrasi Sistem Fuzzy dan Jaringan Syaraf', 'Graha Ilmu', 'Sri Kusuma dewi Dr.', 196800, 'Umum', 1, 15),
(30, 12, 'Latihan Membuat Aplikasi Web PHP&MySQL dg Dreamweaver', 'Gava Media', 'Bunafit.N', 64500, 'Umum', 1, 12),
(31, 12, 'Pembuatan Software Rekam Medis dengan Java Netbeans+MySQL', 'Gava Media', 'Fita Puspita Sari dkk', 44500, 'Umum', 1, 12),
(32, 12, 'Pemrograman Java Tingkat Lanjut + CD', 'Andi Publisher', 'Agus Kurniawan', 69500, 'Umum', 1, 10),
(33, 13, 'Membuat Virus & Anti Virus Lanjutan (Be Expert) + CD', 'Gava Media', 'Ahlul Faradish R', 35000, 'Umum', 1, 12),
(34, 13, 'Bikin Aplikasi ANDROID dgn Angular Mobile & MongoDB', 'Lokomedia', 'Agung Julisman', 59000, 'Anggota Inti', 1, 25),
(35, 13, 'Kolaborasi Dahsyat ANDROID dengan PHP dan MySQL ', 'Lokomedia', 'Akhmad Dharma', 67000, 'Anggota Inti', 1, 30),
(36, 13, 'Cascading Style Sheet , Solusi Mempercantik Halaman Web', 'Gava Media', 'Bunafit Nugroho', 42000, 'Umum', 1, 12),
(37, 13, 'Desain Rancangan Bangunan 3D dan Interior dengan AutoCad + (cd)', 'Andi Publisher', 'Suparno Sastra N', 79000, 'Umum', 1, 10),
(38, 13, 'Panduan Aplikatif dan Solusi : Bikin Kartun Anime dengan CorelDRAW X', 'Andi Publisher', 'Lukas Lukmana', 65000, 'Umum', 1, 10),
(39, 13, 'The Secret Of Coreldraw', 'Andi Publisher', 'Handoko Budisetyo', 59000, 'Umum', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapharian`
--
ALTER TABLE `lapharian`
 ADD PRIMARY KEY (`id`), ADD KEY `judul` (`judul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapharian`
--
ALTER TABLE `lapharian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
