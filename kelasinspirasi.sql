-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 07:02 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelasinspirasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Super Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `judul` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal` date NOT NULL,
  `konten` text NOT NULL,
  `gambar_artikel` text NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_category`, `judul`, `date`, `tanggal`, `konten`, `gambar_artikel`, `penulis`) VALUES
(1, 0, 'judul 1', '2019-12-22 15:42:32', '2019-12-09', 'ddfvnngfgfgfjgfjhjghg', '', 'dani'),
(2, 0, 'judul 2', '2019-12-22 15:42:32', '2019-12-09', 'dfdgdfjgfjhdkgkdghkgh', '', 'dani'),
(3, 0, 'judul 3', '2019-12-22 15:42:32', '2019-12-09', 'fhfghhljhlhjl,hlyufuy', '', 'dani'),
(5, 0, 'judul 4', '2019-12-22 15:42:32', '2019-12-14', 'dgfhantdfuusfjn', 'Penguins.jpg', 'dani'),
(6, 0, 'judul 5', '2019-12-22 15:42:32', '2019-12-14', 'dg tu,yirtu,yti.up.yukrjerytidryeutuygufmdftytututuygut', 'Jellyfish.jpg', 'dani'),
(7, 0, 'judul 6', '2019-12-22 15:42:32', '2019-12-14', 'etbewbwtenryner', '', 'dani'),
(8, 0, 'judul 7', '2019-12-22 15:42:32', '2019-12-14', 'dgnyrberbyterv', '', 'dani'),
(9, 0, 'judul 8', '2019-12-22 15:42:32', '2019-12-14', 'tnwenjntumery', '', 'dani'),
(10, 0, 'judul 9', '2019-12-22 15:42:32', '2019-12-14', 'dtnewm neutqe majryerthre', '', 'dani'),
(11, 5, 'judul 10', '2019-12-27 16:43:22', '2019-12-14', '								\r\n											fymaer7merfnryneryrehetbew										', '', 'dani'),
(13, 1, 'Membuat Scenario Dialog 2', '2019-12-27 16:41:10', '2019-12-27', '								\r\n																			\r\n																			\r\n											kakakakak akakkaka kaka kakakka kakakakka kakakaka akakakak																														', 'Desert.jpg', 'dani'),
(14, 5, 'Membuat Scenario Dialog', '2019-12-27 16:52:24', '2019-12-27', 'hanya teks tulisan', '', 'jajang');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `tanggal`, `nama`, `email`, `telepon`, `subjek`, `pesan`, `status`) VALUES
(1, '2019-12-07', 'arif', 'email@email.com', '000000000', 'subjek', 'pesan', 'Sudah Dibaca');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` text NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `tanggal`, `nama`, `ukuran`, `jenis`, `id_kategori`, `deskripsi`) VALUES
('5e06311bc39e7', '2019-12-27', '5e06311bc39e7.jpg', '826.11', 'image/jpeg', 1, 'gambar gunung');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Kategori 1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_category`, `category`) VALUES
(1, 'Uncategorized'),
(5, 'RPG Maker');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `tanggal`, `nama`, `email`, `isi`) VALUES
(1, 11, '2019-12-21 00:00:00', 'jamal', 'surel@surel.com', 'nitip gan'),
(2, 11, '2019-12-21 00:00:00', 'jamal', 'surel@surel.com', 'nitip gan'),
(3, 11, '2019-12-21 00:00:00', 'jamal', 'surel@surel.com', 'nitip gan'),
(4, 11, '2019-12-21 00:00:00', 'jamal', 'surel@surel.com', 'jejak gan'),
(5, 1, '2019-12-21 00:00:00', 'Juhari', 'surel@surel.com', 'nitip jejak gan'),
(6, 1, '2019-12-21 06:11:03', 'jamal', 'surel@surel.com', 'mantul gan'),
(7, 12, '2019-12-22 04:46:38', 'arif', 'arief.hosting@gmail.com', 'gajelas jing'),
(8, 13, '2019-12-27 05:07:53', 'arif', 'arief.hosting@gmail.com', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `tentang`, `alamat`, `telepon`, `email`, `instagram`, `facebook`, `twitter`, `whatsapp`, `youtube`) VALUES
(1, '																								<p></p><div style="text-align: justify;"><span open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="" style="color: rgb(51, 51, 51);">Indonesia Mengajar merupakan sebuah inisiatif gerakan di bidang pendidikan yang merekrut, melatih, dan mengirimkan lulusan terbaik untuk mengajar sekolah dasar di daerah pelosok Indonesia selama 1 tahun. Kontribusi GIM dalam pendidikan Indonesia dimulai dari tahun 2010. Salah satu misi utama dari gerakan ini adalah mengajak berbagai pihak, termasuk masyarakat umum, untuk turut terlibat aktif dalam usaha peningkatan kualitas pendidikan bangsa. Ajakan ini hadir dalam berbagai bentuk, salah satunya adalah&nbsp;</span><b open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="" style="color: rgb(51, 51, 51);">Kelas Inspirasi.</b></div><div style="text-align: justify;"><span style="color: rgb(51, 51, 51); font-size: 12px;"><br></span></div><span style="color: rgb(51, 51, 51); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"=""><div style="text-align: justify;"><span open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="">Bermula dari teman-teman Indonesia Mengajar dan beberapa teman profesional yang ingin berkontribusi pada pendidikan Indonesia, lahirlah konsep&nbsp;</span><b open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="">Kelas Inspirasi</b><span open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="">. Kelas Inspirasi adalah kegiatan yang mewadahi profesional dari berbagai sektor untuk ikut serta berkontribusi pada misi perbaikan pendidikan di Indonesia. Melalui program ini, para profesional pengajar dari berbagai latar belakang diharuskan untuk cuti satu hari secara serentak untuk mengunjungi dan mengajar SD, yaitu pada Hari Inspirasi.</span></div></span><div style="text-align: justify;"><span style="color: rgb(51, 51, 51); font-size: 12px;"><br></span></div><span style="color: rgb(51, 51, 51); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"=""><div style="text-align: justify;">Selanjutnya para profesional ini disebut relawan pengajar. Relawan pengajar berinteraksi di sekolah untuk berbagi cerita dan pengalaman kerja dan memberi motivasi untuk meraih cita-cita bagi para siswa. Interaksi relawan pengajar dengan warga sekolah dilakukan untuk membuka ruang komunikasi dan kolaborasi antar keduanya melalui pengalaman mengunjungi, dan mengajar, dan berinteraksi selama hari inspirasi termasuk masa persiapannya.</div></span><div style="text-align: justify;"><span style="color: rgb(51, 51, 51); font-size: 12px;"><br></span></div><span style="color: rgb(51, 51, 51); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"=""><div style="text-align: justify;">Kegiatan <span style="font-weight: bold;">Kelas Inspirasi</span> yang pertama diadakan pada 25 April 2012 di 25 lokasi SD di Jakarta. Tujuan awal dari KI adalah menjadi gerbang keterlibatan para profesional dengan realita dunia pendidikan dasar di lingkungannya, serta Indonesia pada umumnya. Para profesional diajak untuk menceritakan mengenai profesinya. Harapannya, para siswa akan memiliki lebih banyak pilihan cita-cita serta menjadi lebih termotivasi untuk memiliki mimpi yang besar. Bagi para profesional pengajar, Kelas Inspirasi dapat memberi pengalaman mengajar di depan kelas sebagai bentuk kontribusi nyata dan aktif terhadap perbaikan masa depan bangsa. Interaksi antara para profesional dengan siswa dan guru SD diharapkan dapat berkembang nantinya menjadi lebih banyak gagasan dan kegiatan yang melibatkan kontribusi kaum profesional.</div></span><p></p><p>                                </p>                                                                                                ', 'Alamat Sekretariat ', '0811998877', 'mail@email.com', '', '', '', '0811998877', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
