-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 11:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` text DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `penulis`, `judul`, `kategori`, `foto`, `isi`) VALUES
(1, '1', 'Cinta Segitiga11', 'aaassx', '', 'testaaa'),
(2, 'admin', 'Cinta Segitiga', 'aa', '', '<p>aaa</p>'),
(6, 'admin', 'Indonesia muda', 'berita', '0e775f8908ebb953b63a68c5f971ece4-700.jpg', '<p>Coba artikel</p>');

-- --------------------------------------------------------

--
-- Table structure for table `drivecloud`
--

CREATE TABLE `drivecloud` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(12) NOT NULL,
  `namafile` text NOT NULL,
  `file` text DEFAULT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivecloud`
--

INSERT INTO `drivecloud` (`id`, `pemilik`, `namafile`, `file`, `tgl`) VALUES
(3, 'masyarakat', 'KTP', '', '0000-00-00 00:00:00'),
(4, 'admin', 'KTP', '', '2019-12-16 16:00:38'),
(5, 'alfin', 'KTP', '', '2019-12-16 18:21:00'),
(7, 'alfin', 'Gambar', 'Cuplikan Layar_2019-01-25_22-51-36.png', '2019-12-16 18:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `elapor`
--

CREATE TABLE `elapor` (
  `id` int(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `isi` text NOT NULL,
  `pelapor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elapor`
--

INSERT INTO `elapor` (`id`, `judul`, `foto`, `isi`, `pelapor`) VALUES
(7, 'Galau', '', '<p>Aku Galalu pak</p>', 'alfin');

-- --------------------------------------------------------

--
-- Table structure for table `elapor_info`
--

CREATE TABLE `elapor_info` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elapor_info`
--

INSERT INTO `elapor_info` (`id`, `judul`, `foto`, `isi`) VALUES
(1, 'elapor', 'Screenshot_20191125_105915.png', '<div align=\"center\"><b> coba ya<br></b></div>   ');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `keterangan` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `jenis`, `keterangan`, `link`) VALUES
(1, 'SURAT KTP SEMENTARA', '', 'ktp'),
(2, 'SURAT PINDAH PENDUDUK', '', 'pindah'),
(3, 'SURAT KETERANGAN KURANG MAMPU', '', 'kurangmampu');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_msy` int(11) NOT NULL,
  `nama_msy` varchar(50) NOT NULL,
  `nik_msy` int(20) NOT NULL,
  `alamat_msy` text NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `no_hp_msy` int(13) NOT NULL,
  `username_msy` varchar(20) NOT NULL,
  `password_msy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id_msy`, `nama_msy`, `nik_msy`, `alamat_msy`, `rt_rw`, `no_hp_msy`, `username_msy`, `password_msy`) VALUES
(3, 'masyarakat', 18330046, 'janabadra', '12', 88888, 'username', 'masyarakat'),
(4, 'akbar', 124, 'akbar', '12', 111, 'username', 'akbar'),
(5, 'Alfin', 123457, 'Badran', '47/11', 77771122, 'username', 'alfin');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_surat`
--

CREATE TABLE `p_surat` (
  `id` int(11) NOT NULL,
  `nik` text NOT NULL,
  `nama` text NOT NULL,
  `tgl` text NOT NULL,
  `jk` text NOT NULL,
  `alamat` text NOT NULL,
  `rtrw` text NOT NULL,
  `kel` text NOT NULL,
  `kec` text NOT NULL,
  `kota` text NOT NULL,
  `prov` text NOT NULL,
  `username` text NOT NULL,
  `foto` text NOT NULL,
  `izin` text NOT NULL,
  `jenis` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_surat`
--

INSERT INTO `p_surat` (`id`, `nik`, `nama`, `tgl`, `jk`, `alamat`, `rtrw`, `kel`, `kec`, `kota`, `prov`, `username`, `foto`, `izin`, `jenis`, `link`) VALUES
(1, '11111', 'Fadilah Riczky', '31-07-1999', 'L', 'Desa Air Asam', '02/01', 'Air Asam', 'Lubai', 'Muara Enim', 'Sumsel', 'admin1', 'nezuko.png', '1', 'SKTPS', 'ktp'),
(6, '123457', 'Alex', 'Bawang 33333', 'L', 'Bengkulu', '11/12', 'Badran', 'Jetis', 'Yogyakarta', 'DIY', 'alfin', '', '1', 'SURAT KTP SEMENTARA', 'kurangmampu'),
(8, '123457', 'Syahrul', 'Jamban , 31-07-1111', 'P', 'Badran', '11/11', 'Badran', 'Jetis', 'Yogyakarta', 'DIY', 'alfin', '', '1', 'SURAT KETERANGAN KURANG MAMPU', 'kurangmampu'),
(9, '11111', 'Ino', 'Pekalongan , 1111111', 'L', 'Aku', '11/12', 'Badran', 'Jetis', 'Yogyakarta', 'DIY', 'admin', 'Screenshot_20191125_105542.png', '1', 'SURAT PINDAH PENDUDUK', 'pindah'),
(10, '123457', 'Fadilah Riczky123', 'AAA', 'P', 'aaaaa', '11/12', 'Badran', 'Lubai', 'Jogja', 'Sumsel', 'admin', 'Screenshot_20191125_105304.png', '1', 'SURAT PINDAH PENDUDUK', 'pindah'),
(12, '123478', 'Dina Islamia Sakinah Agnia', '2000-07-16', 'Perempuan', 'Prabumuilih', '02/01', 'Tanjung Raman', 'Prabumulih Selatan', 'Prabumulih', 'Sumatera Selatan', ',admin', '', '1', 'SURAT PINDAH PENDUDUK', 'pindah'),
(13, '123457', 'Rini', '1998-01-03', 'Laki-Laki', 'Kauman', '4/11', 'Kauman', 'Kauman', 'Yog', 'Diy', ',alfin', '', '1', 'SURAT PINDAH PENDUDUK', 'pindah'),
(14, '11111', 'Dina Islamia Sakinah Agnia', '2019-12-06', 'Perempuan', 'Prabumuilih', '11/12', 'Tanjung Raman', 'Prabumulih Selatan', 'Prabumulih', 'Sumatera Selatan', 'alfin', '', '1', 'SURAT PINDAH PENDUDUK', 'pindah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `harga_barang`) VALUES
(1, 'topi', '50.000'),
(2, 'sepatu', '400.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` text DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `foto`, `username`, `password`, `level`, `status`) VALUES
(4, 'Fadilah Riczky', '', 'admin', 'admin', 'admin', 0),
(5, 'admin1', '', 'admin1', 'admin1', 'masyarakat', 0),
(9, 'masyarakat', '', 'masyarakat', 'masyarakat', 'masyarakat', 0),
(11, 'Alfin', NULL, 'alfin', 'alfin', 'masyarakat', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivecloud`
--
ALTER TABLE `drivecloud`
  ADD PRIMARY KEY (`id`,`pemilik`);

--
-- Indexes for table `elapor`
--
ALTER TABLE `elapor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elapor_info`
--
ALTER TABLE `elapor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_msy`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_surat`
--
ALTER TABLE `p_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drivecloud`
--
ALTER TABLE `drivecloud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `elapor`
--
ALTER TABLE `elapor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `elapor_info`
--
ALTER TABLE `elapor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_msy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_surat`
--
ALTER TABLE `p_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
