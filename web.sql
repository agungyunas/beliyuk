-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2015 pada 17.33
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_user`
--

CREATE TABLE IF NOT EXISTS `akun_user` (
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `tgl_lahir` varchar(8) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_user`
--

INSERT INTO `akun_user` (`nama`, `username`, `Password`, `no_id`, `tgl_lahir`, `jenis_kelamin`, `kontak`, `email`, `alamat`) VALUES
('agung', 'agung', '12345', '15284013000', '27091995', 'pria', '082280053003', 'agungyunass@gmail.co', 'jambi indonesia'),
('kori', 'kori', '123456', '10293937', '11081995', 'pria', '0821312434', 'andisaja@gmail.com', 'palembang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_nomorpesanan` varchar(50) NOT NULL,
  `namapengirim` varchar(30) NOT NULL,
  `nomorrek` varchar(20) NOT NULL,
  `jumlahtf` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_nomorpesanan`, `namapengirim`, `nomorrek`, `jumlahtf`, `kontak`, `email`, `bank`) VALUES
('35796440', 'agung yunas setiawan', '1012367844', '1000000', '082280053003', 'agungyunass@gmail.com', 'bni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE IF NOT EXISTS `orderan` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `Harga` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id`, `nama`, `ket`, `Harga`) VALUES
('Mbl', 'aventador copy.png', 'Aventador', 100),
('Mbl', 'huracan copy.png', 'Huracan', 700000),
('Mbl', 'Gallardo copy.png', 'Gallardo', 500000),
('Mbl', 'McLaren 540C Coupe c', 'McLaren 540C', 162000),
('Mbl', 'McLaren 570S Coupe copy.png', 'McLaren 570S', 207000),
('Mbl', 'McLaren 650S copy.png', 'McLaren 650S', 100000),
('Mbl', 'Ferrari 458 copy.png', 'Ferrari 458', 250000),
('Mbl', 'Ferrari 488GTB copy.png', 'Ferrari 488GTB', 500000),
('Mbl', 'Ferrari California T copy.png', 'Ferrari California T', 600000),
('Mbl', 'Porsche Cayman copy.png', 'Porsche Cayman', 1000000),
('Mbl', 'Porsche Boxster copy.png', 'Porsche Boxster', 200000),
('Mbl', 'Porsche 911 copy.png', 'Porsche 911', 100000),
('Mtr', 'Yamaha R6 copy.png', 'Yamaha R6', 220000000),
('Mtr', 'Yamaha TMAX copy.png', 'Yamaha TMAX', 185000000),
('Mtr', 'Yamaha YZF-R1 copy.png', 'Yamaha YZF-R1', 335000000),
('Mtr', 'Ducati Diavel Carbon copy.png', 'Ducati Diavel Carbon', 470000000),
('Mtr', 'Ducati Multistrada 1200 Pikes Pike copy.png', 'Ducati Multistrada 1200', 560000000),
('Mtr', 'Ducati Superbike 1199 Panigle R copy.png', 'Ducati Superbike 1199', 700000000),
('Mtr', 'Honda CBR 250R ABS copy.png', 'Honda CBR 250R ABS', 56200000),
('Mtr', 'Honda CBR 250R ABS Repsol copy.png', 'Honda CBR 250R ABS Repsol', 58000000),
('Mtr', 'Honda CBR 250R STD Repsol copy.png', 'Honda CBR 250R STD', 41000000),
('Mtr', 'Kawasaki Ninja ZX-14R copy.png', 'Kawasaki Ninja ZX-14R', 336000000),
('Mtr', 'Kawasaki Ninja ZX-14R Ohlins copy.png', 'Kawasaki Ninja ZX-14R SE', 340000000),
('Mtr', 'Kawasaki Ninja ZX-14R SE copy.png', 'Kawasaki Ninja ZX-14R', 330000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `jenis`, `tipe`, `username`, `no_id`, `kontak`, `alamat`, `status`) VALUES
(35796440, 'mobil', 'Aventador', 'agung', '15284013000', '082280053003', 'jambi indonesia', 'done'),
(84320746, 'Motor', 'Yamaha R6', 'agung', '15284013000', '082280053003', 'jambi indonesia', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id_slide` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `img_slide` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'enable'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slide`, `judul`, `img_slide`, `status`) VALUES
(25, 'baru', 'aventador copy.png', 'enable'),
(26, 'One', 'Ferrari 458 copy.png', 'enable'),
(27, 'fera', 'Ferrari 488GTB copy.png', 'enable'),
(28, 'One', 'Ferrari California T copy.png', 'enable'),
(29, 'baru', 'Ferrari F12berlinetta copy.png', 'enable'),
(30, 'One', 'Ferrari FF copy.png', 'enable'),
(12, 'baru', 'Gallardo copy.png', 'enable'),
(1, 'One', 'McLaren 540C Coupe copy.png', 'enable'),
(2, 'One', 'McLaren 570S Coupe copy.png', 'enable'),
(3, 'One', 'Porsche 911 copy.png', 'enable'),
(4, 'One', 'McLaren 650S copy.png', 'enable'),
(5, 'One', 'Porsche Boxster copy.png', 'enable'),
(6, 'One', 'Porsche Cayenne Turbo copy.png', 'enable');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `status`) VALUES
('admin', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
