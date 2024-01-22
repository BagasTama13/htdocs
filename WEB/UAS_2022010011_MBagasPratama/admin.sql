-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 02:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `stadium` int(11) DEFAULT NULL,
  `lfg` varchar(255) DEFAULT NULL,
  `anjuran_nutrisi` varchar(255) DEFAULT NULL,
  `makanan_dianjurkan` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `stadium`, `lfg`, `anjuran_nutrisi`, `makanan_dianjurkan`) VALUES
(44, 'Fajar Zidhan Alhakim', 19, 2, 'Nilai LFG rata-rata 116 mL/menit/1,73 m2 ', 'Mengurangi penumpukan sampah uremi\r\nMengurangi penumpukan cairan dan elektrolit di luar waktu dialisis\r\nMemperbaiki status gizi\r\nMencegah defisiensi protein, asam amino, dan vitamin', 'Makanan sumber energi, seperti: nasi, roti, mie, makaroni, spageti, lontong, bihun, madu, permen. Makanan sumber energi berguna menjaga atau memperbaiki status gizi pasien.\r\nMakanan sumber protein, seperti: telur, ayam, daging, ikan, kacang-kacangan termasuk tahu dan tempe dalam jumlah yang terbatas disesuaikan dengan perhitungan kebutuhan gizi. Pada pasien dengan hemodialisis, protein berfungsi untuk mejaga kekuatan otot dan daya tahan tubuh pasien.'),
(45, 'muhammad agung rizky', 20, 2, 'Nilai LFG rata-rata 116 mL/menit/1,73 m2 ', 'Mengurangi penumpukan sampah uremi\r\nMengurangi penumpukan cairan dan elektrolit di luar waktu dialisis\r\nMemperbaiki status gizi\r\nMencegah defisiensi protein, asam amino, dan vitamin\r\n', 'Makanan sumber energi, seperti: nasi, roti, mie, makaroni, spageti, lontong, bihun, madu, permen.\r\nMakanan sumber energi berguna menjaga atau memperbaiki status gizi pasien.\r\nMakanan sumber protein, seperti: telur, ayam, daging, ikan, kacang-kacangan termasuk tahu dan tempe\r\ndalam jumlah yang terbatas disesuaikan dengan perhitungan kebutuhan gizi. Pada pasien dengan\r\nhemodialisis, protein berfungsi untuk mejaga kekuatan otot dan daya tahan tubuh pasien.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(18, 'Wamilo', '1547a9e9fd1eb0548ebc8211e0e35964bc16642d312f07aca1cb6f83f830388c', '2024-01-18 22:49:26'),
(20, 'anam', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2024-01-21 11:45:16'),
(22, 'Tama', 'c57951c369c0ffcb736392fcced9b3e770be63d273f26447f89f8a88cb65c1fc', '2024-01-22 08:21:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
