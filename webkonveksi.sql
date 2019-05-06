-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 19.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkonveksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `clothes`
--

CREATE TABLE `clothes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clothes`
--

INSERT INTO `clothes` (`id`, `name`, `image`, `size`, `color`, `price`, `stock`, `detail`) VALUES
(1, 'Baju garis garis', 'baju6.jpg', 'All Size', 'Putih', 155000, 42, 'baju ini anti air dan api'),
(2, 'Yellow Hype', 'baju2.jpg', 'all size', 'orange', 165000, 38, 'baju yang sedang trending di eropa'),
(3, 'Geometric Oversize', 'baju3.jpg', 'all size', 'camo', 165000, 35, 'kemeja hype dengan motif geometric'),
(4, 'Viscoce Cut', 'baju4.jpg', 'all size', 'white', 175000, 34, 'kaos hype vans'),
(5, 'Leaf Shirt', 'baju5.jpg', 'all size', 'green', 185000, 50, 'kemeja hype warna ijo'),
(6, 'Red Hat', 'baju8.jpg', 'all size', 'red', 125000, 47, 'topi hype warna merah'),
(7, '', 'a', 'a', '1929', 0, 1, 'as'),
(8, '', 'JEY.jpg', 'efs', 'dee', 356, 3, 'fhet'),
(9, '', 'JEY.jpg', '1qqw', 'fdf', 0, 9, 'kkk'),
(10, 'sfs', 'KIO.jpg', 'dsd', 'dwd', 777, 7, 'gvt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`) VALUES
(12, 'veru', '$2y$10$1rDJWaeAI8VrCRS7GgzGcOQkLtxMbgtX9SaG6zC44iOmvSooyKebW'),
(13, 'al', '$2y$10$tLUM/W7oOvB2etw7HBQBBO3Fe50WVFYnf.O8V.ZvEAzNpPTWQ9GH2'),
(14, 'rio', '$2y$10$EKNlGdzVb.ZPXdaSvLfZT.Micw4mGQfe2QffYZcdRy.abCc8pneBy'),
(15, 'aki', '$2y$10$ad9y6CxSCFOXFPjytg8yzu0m8Z6v/IXANXsghDctpUgl2v.Wt65wa'),
(16, 'admin', '$2y$10$Jzkx8FwlTfkY/anYrVQD3eYdS4FR3xtjqUG.URUIVJ.E46Hg8OD1O'),
(17, 'baihaqy', '$2y$10$/6ZCdfDTkp.gIwCeSTMepupUs9fBvi/Tfc/Y6q9MQN7DcCDbddIa6'),
(18, 'dcd', '$2y$10$2gIkz2tC2RLexX6BHqsXcu.Ls1EJJDKU3FSzO8n/MgYOkeiBWlO9K'),
(19, 'gregwrg', '$2y$10$pLgbrh9n5.s9x1k3FvgrR.gc.p0YQd01jz26o.A9pW6Gy.xSrXVGm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_customers`
--

CREATE TABLE `detail_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `noHp` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_customers`
--

INSERT INTO `detail_customers` (`id`, `customer_id`, `name`, `address`, `noHp`, `email`) VALUES
(8, 12, 'veru', 'Ira-Ara', '084949', 'veru@gmail.com'),
(9, 13, 'alh', 'Sukabirus 2', '0893939', 'ali@hotmail.com'),
(10, 14, 'rio', 'Porto  Remexio', '09393939', 'rio@gmail.com'),
(11, 15, 'akino Markes', 'Sukalama', '09393939', 'akino@gmail.com'),
(12, 16, 'admin', 'admin', 'admin', 'admin'),
(13, 17, 'Muhammad Baihaqy', 'LPG', '082216648485', 'muhammadbaihaqy98@gmail.com'),
(14, 18, 'sewf', 'SEFE', '45', 'sddsc'),
(15, 19, 'gwrg', 'vreer', '8966', 'as@ff.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'bejo', 'bejoee', 'halo', 'hai'),
(2, 'Aon', 'Akon@gmail.com', 'Akau', 'Hello World'),
(3, 'seowp', 'wliewoe', 'powpeow', 'pwlekjroe'),
(4, 'baihaqy', 'muhammadbaihaqy98@gmail.com', 'asfdaf', 'dsaf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `clothe_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `clothe_id`, `quantity`, `total_price`) VALUES
(8, 13, 4, 1, 175000),
(9, 13, 6, 1, 125000),
(10, 13, 4, 1, 175000),
(11, 13, 3, 1, 165000),
(12, 13, 2, 1, 165000),
(17, 15, 1, 1, 155000),
(18, 17, 1, 1, 155000),
(20, 17, 3, 1, 165000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_username_unique` (`username`);

--
-- Indeks untuk tabel `detail_customers`
--
ALTER TABLE `detail_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_foreign_id` (`customer_id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`),
  ADD KEY `transactions_clothe_id_foreign` (`clothe_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `detail_customers`
--
ALTER TABLE `detail_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_customers`
--
ALTER TABLE `detail_customers`
  ADD CONSTRAINT `customer_foreign_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_clothe_id_foreign` FOREIGN KEY (`clothe_id`) REFERENCES `clothes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
