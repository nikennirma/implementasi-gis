-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2020 pada 12.32
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `gisuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sd`
--

CREATE TABLE IF NOT EXISTS `tbl_sd` (
  `id_sd` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sd` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_sd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_sd`
--

INSERT INTO `tbl_sd` (`id_sd`, `nama_sd`, `no_tlp`, `alamat`, `latitude`, `longitud`, `deskripsi`) VALUES
(2, 'SDN Sidanegara 05', '08123456797', 'JL. Raya Sidanegara, Rawapasung, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', '-7.699198060585318', '109.02391114282227', 'Sekolah Dasar'),
(3, 'SDN Sidanegara 10', '08123456797', 'Jl. Kendeng No.2, Rawapasung, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53224', '-7.696391172560215', '109.02511277246094', 'Sekolah Dasar'),
(4, 'SD Sidanegara 14', '0832463452', 'sidanegara gunung simping', '-7.704556613370318', '109.02373948144532', 'Sekolah Dasar'),
(5, 'SD 18 Gunung Simping', '084365643555', 'Gunung Simping', '-7.704386501625259', '109.02622857141114', 'Sekolah Dasar Adiwiyata'),
(6, 'SDn 01 Lomanis', '08364344766', 'Jl. Husni Thamrin, Banyusrep, Lomanis, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53263', '-7.702685380416894', '109.00743165063477', 'Sekolah Adiwiyata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'niken', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
