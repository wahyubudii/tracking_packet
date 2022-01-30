-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 02:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking_packet`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `comment`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Januar Fajar', 'Software Engineer', '<p>Website ini membantu banget bagi saya melakukan tracking paket saya</p>', NULL, '2022-01-30 06:07:31', 'storage/testimonials/957c70aa456cf2b6d28cd81d2c60966d.jpg'),
(2, 'Mutiasari Andani', 'UI/UX Designer', '<p>Membantu banget terutama bagi saya yang suka shopping</p>', NULL, NULL, 'storage/testimonials/d3dbe14c23d5cad12eed3ef681ef999f.jpg'),
(3, 'Kintara Wulandari', 'Youtuber', '<p>Usefull deh pokoknya, selain itu juga gratis ga perlu bayar bayar</p>', NULL, NULL, 'storage/testimonials/409da2928b59cb50c0e4280ae2dc7c19.jpg'),
(4, 'Lina Hapsari', 'Dokter', '<p>No comment sama website ini, interfacenya bagus banget</p>', NULL, NULL, 'storage/testimonials/9be00a8b504e95755d1ce3d7578640e7.jpg'),
(5, 'Krisna Mauludan', 'Pilot', '<p>Sangat membantu banget kalau misal urusan tracking paket</p>', NULL, NULL, 'storage/testimonials/916315aeaa657b7e32c08ba8657573d3.jpg'),
(6, 'Habibie Gustiawan', 'Mobile Developer', '<p>The best sih ini websitenya, bagus, ga ribet dan pastinya gratis</p>', NULL, NULL, 'storage/testimonials/48aca62d297fd58514650c7ea8b1702b.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
