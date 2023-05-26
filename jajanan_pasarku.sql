-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 02:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jajanan_pasarku`
--

-- --------------------------------------------------------

--
-- Table structure for table `jajan_pasar`
--

CREATE TABLE `jajan_pasar` (
  `id_produk` int(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `id_kategori` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jajan_pasar`
--

INSERT INTO `jajan_pasar` (`id_produk`, `gambar`, `nama_produk`, `harga`, `stok`, `jenis_produk`, `id_kategori`) VALUES
(1, 'menu-2.jpg', 'Rendang', 25000, 30, 'Kering', 1),
(2, 'menu-3.jpg', 'soto Lamongan', 20000, 12, 'kuah', 2),
(3, 'catalog-1.jpg', 'Nasi Goreng sapi', 30000, 5, 'Kering', 1),
(4, 'img-3.jpg', 'Kue Pukis', 10000, 12, 'Kering', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(30) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, ' kering'),
(2, 'kuah');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(30) NOT NULL,
  `id_pegawai` int(30) NOT NULL,
  `id_pelanggan` int(30) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `bayar` int(100) NOT NULL,
  `id_pemesanan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(30) NOT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` int(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `alamat`, `no_telepon`, `password`) VALUES
(1, 'ana oktavia', 'perempuan', 'madura', 82726336, 'ana123'),
(2, 'yuyun eka', 'perempuan', 'solo', 872653528, 'yuyun123'),
(3, 'caca mahardika', 'perempuan', 'semarang', 826526272, 'caca123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(30) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` int(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `no_telepon`, `password`) VALUES
(1, 'fidhina fina dalila', 'perempuan', 'yogyakarta', 89652526, 'fidhina123'),
(2, 'nina oktaviani', 'perempuan', 'surakarta', 892263637, 'nina123'),
(3, 'ferdi irkham', 'laki laki', 'sumatera', 82937363, 'ferdi123');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(30) NOT NULL,
  `id_pelanggan` int(30) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_produk` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `nama_pelanggan`, `no_telepon`, `nama_produk`, `jumlah_produk`, `alamat`) VALUES
(1, 1, 'Ula Marlina', '089263537', 'Udang tepung', '2', 'Bantul'),
(2, 1, 'Aca Septi', '089501078015', 'Mie Goreng Special', '2', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pemesanan` int(30) NOT NULL,
  `id_pelanggan` int(30) NOT NULL,
  `id_pegawai` int(30) NOT NULL,
  `id_produk` int(30) NOT NULL,
  `sub_total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pemesanan`, `id_pelanggan`, `id_pegawai`, `id_produk`, `sub_total`) VALUES
(1, 1, 1, 3, 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jajan_pasar`
--
ALTER TABLE `jajan_pasar`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jajan_pasar`
--
ALTER TABLE `jajan_pasar`
  ADD CONSTRAINT `jajan_pasar_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `konfirmasi_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `jajan_pasar` (`id_produk`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
