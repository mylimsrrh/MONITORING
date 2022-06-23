-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 06.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring1`
--

CREATE TABLE `monitoring1` (
  `NO` int(12) NOT NULL,
  `TMA` int(40) NOT NULL,
  `SUHU` int(35) NOT NULL,
  `TEG_SOLAR` int(50) NOT NULL,
  `ANS_SOLAR` int(50) NOT NULL,
  `TEG_BATTERY` int(60) NOT NULL,
  `ANS_BATTERY` int(40) NOT NULL,
  `perhitungan` float NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `monitoring1`
--

INSERT INTO `monitoring1` (`NO`, `TMA`, `SUHU`, `TEG_SOLAR`, `ANS_SOLAR`, `TEG_BATTERY`, `ANS_BATTERY`, `perhitungan`, `DATE`) VALUES
(1, 18, 21, 43, 55, 30, 17, 0, '2022-01-17 07:50:18'),
(2, 25, 50, 21, 60, 33, 37, 0, '2022-01-17 07:50:18'),
(3, 30, 40, 60, 43, 50, 35, 0, '2022-01-17 07:50:18'),
(4, 34, 21, 44, 57, 33, 50, 0, '2022-01-17 07:50:18'),
(5, 60, 40, 34, 55, 28, 30, 0, '2022-01-17 07:50:18'),
(6, 40, 35, 50, 50, 60, 40, 0, '2022-01-17 07:50:41'),
(7, 12, 33, 40, 60, 44, 20, 0, '2022-01-17 07:54:05'),
(8, 21, 40, 44, 43, 28, 30, 0, '2022-01-17 07:54:05'),
(9, 15, 26, 11, 20, 14, 12, 0, '2022-01-18 02:34:20'),
(10, 20, 11, 18, 15, 12, 16, 0, '2022-01-18 02:34:20'),
(11, 26, 18, 9, 33, 14, 20, 0, '2022-01-20 02:53:25'),
(12, 22, 18, 16, 32, 14, 11, 0, '2022-01-21 03:52:34'),
(13, 23, 44, 18, 8, 16, 4, 0, '2022-01-24 02:56:11'),
(14, 9, 4, 12, 8, 30, 2, 0, '2022-01-25 02:47:20'),
(15, 26, 9, 10, 16, 2, 4, 0, '2022-01-26 03:56:33'),
(16, 3, 21, 10, 32, 18, 6, 0, '2022-01-27 02:33:03'),
(17, 22, 6, 9, 12, 2, 4, 0, '2022-01-28 02:26:15'),
(18, 6, 12, 18, 24, 3, 7, 0, '2022-01-31 02:12:55'),
(19, 26, 8, 12, 4, 22, 5, 0, '2022-01-31 02:14:10'),
(20, 17, 9, 12, 4, 11, 6, 0, '2022-02-02 02:11:16'),
(21, 12, 24, 7, 14, 8, 1, 0, '2022-02-02 02:13:17'),
(22, 3, 12, 11, 24, 20, 16, 0, '2022-02-03 02:08:07'),
(23, 30, 30, 20, 40, 24, 25, 0, '2022-02-03 03:05:41'),
(24, 16, 10, 8, 12, 20, 9, 0, '2022-02-04 02:18:49'),
(25, 19, 27, 32, 16, 40, 9, 0, '2022-02-07 03:44:37'),
(26, 44, 16, 4, 34, 19, 21, 0, '2022-02-07 03:44:37'),
(27, 14, 34, 22, 18, 9, 14, 0, '2022-02-08 02:19:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `monitoring1`
--
ALTER TABLE `monitoring1`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `monitoring1`
--
ALTER TABLE `monitoring1`
  MODIFY `NO` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
