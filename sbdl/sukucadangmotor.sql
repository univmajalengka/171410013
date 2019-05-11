-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 09.22
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukucadangmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `spesifikasi` varchar(20) NOT NULL,
  `tgl_barang_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `harga`, `jumlah_barang`, `nama_barang`, `spesifikasi`, `tgl_barang_masuk`) VALUES
(29, 50000, 1, 'Torak', 'baru', '2019-05-02'),
(111, 50000, 1, 'rantai', 'baru', '2019-03-01'),
(222, 60000, 1, 'oli', 'baru', '2019-03-02'),
(233, 50000, 2, 'pelk', 'baru', '2019-05-18'),
(333, 20000, 1, 'lampu', 'baru', '2019-03-03'),
(444, 30000, 1, 'pelk', 'baru', '2019-03-04'),
(555, 145000, 1, 'torak', 'baru', '2019-03-05'),
(666, 45000, 1, 'coil torak', 'baru', '2019-03-06'),
(777, 20000, 1, 'pegas rem', 'baru', '2019-03-07'),
(888, 30000, 1, 'rantai keteng', 'baru', '2019-03-08'),
(999, 300000, 1, 'pelk', 'baru', '2019-03-09'),
(1010, 70000, 1, 'tromol rem', 'baru', '2019-03-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `tgl_laporan` date NOT NULL,
  `jenis_laporan` varchar(20) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`tgl_laporan`, `jenis_laporan`, `id_barang`, `id_user`, `nama_barang`, `jumlah`) VALUES
('2019-05-22', 'terjual', 9, '11', 'oli', 1),
('2019-05-15', 'terjual', 19, '11', 'sigitsu', 7),
('2019-05-04', 'terjual', 43, '221', 'pegas rem', 0),
('2019-05-01', 'terjual', 77, '31', 'oli', 3),
('2019-03-01', 'terjual', 111, '1', 'rantai', 1),
('2019-03-02', 'terjual', 222, '9', 'oli', 1),
('2019-03-03', 'terjual', 333, '8', 'lampu', 1),
('2019-05-04', 'terjual', 422, '2123', 'pegas rem', 2),
('2019-03-04', 'terjual', 444, '7', 'pelk', 1),
('2019-03-05', 'terjual', 555, '6', 'torak', 1),
('2019-03-06', 'terjual', 666, '5', 'coil torak', 1),
('2019-03-07', 'terjual', 777, '4', 'pegas rem', 1),
('2019-03-08', 'terjual', 888, '3', 'rantai keteng', 1),
('2019-05-25', 'terjual', 988, '11', 'rante', 4),
('2019-03-09', 'terjual', 999, '2', 'pelk', 1),
('2019-03-10', 'terjual', 1010, '10', 'tromol rem', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpenjualan`
--

CREATE TABLE `laporanpenjualan` (
  `tgl_laporan_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporanpenjualan`
--

INSERT INTO `laporanpenjualan` (`tgl_laporan_penjualan`) VALUES
('2019-03-03'),
('2019-03-04'),
('2019-03-05'),
('2019-03-06'),
('2019-03-07'),
('2019-03-08'),
('2019-03-09'),
('2019-03-10'),
('2019-05-01'),
('2019-05-03'),
('2019-05-14'),
('2019-05-18'),
('2019-05-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanstokbarang`
--

CREATE TABLE `laporanstokbarang` (
  `tgl_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporanstokbarang`
--

INSERT INTO `laporanstokbarang` (`tgl_laporan`) VALUES
('2019-03-01'),
('2019-03-02'),
('2019-03-03'),
('2019-03-04'),
('2019-03-05'),
('2019-03-06'),
('2019-05-07'),
('2019-05-08'),
('2019-05-10'),
('2019-05-22'),
('2019-05-27'),
('2019-05-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('user', 'user'),
('admin', 'admin'),
('user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_penjualan`
--

CREATE TABLE `nota_penjualan` (
  `id_user` int(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota_penjualan`
--

INSERT INTO `nota_penjualan` (`id_user`, `harga`, `tgl_beli`) VALUES
(21, '2000', '2019-05-18'),
(221, '50000', '2019-05-02'),
(433, '4000', '2019-05-18'),
(21344, '50000', '2019-05-19'),
(98884, '50000', '2019-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` int(12) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tgl_penjualan`, `id_barang`, `jumlah`, `harga`, `total_harga`, `id_user`) VALUES
(23, '2019-05-22', '233', 3, 2000, '3', '333'),
(98, '2019-05-17', '12213', 1, 50000, '50000', '223'),
(122, '0000-00-00', '12', 3, 2000, '3', '22'),
(522, '2019-05-04', '443', 3, 50000, '50000', '9984'),
(599, '2019-05-16', '0995', 0, 50000, '50000', '9886');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `hak_akses`, `password`, `username`) VALUES
(21, 'admin', '31231', 'nurfalah'),
(100, 'kasir', '11', '11'),
(312, 'kasir', '345', 'dina');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_barang`) USING BTREE,
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `laporanpenjualan`
--
ALTER TABLE `laporanpenjualan`
  ADD PRIMARY KEY (`tgl_laporan_penjualan`);

--
-- Indeks untuk tabel `laporanstokbarang`
--
ALTER TABLE `laporanstokbarang`
  ADD PRIMARY KEY (`tgl_laporan`);

--
-- Indeks untuk tabel `nota_penjualan`
--
ALTER TABLE `nota_penjualan`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3132;

--
-- AUTO_INCREMENT untuk tabel `nota_penjualan`
--
ALTER TABLE `nota_penjualan`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98885;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123443;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
