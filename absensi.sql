-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 05:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambalan`
--

CREATE TABLE `ambalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ambalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambalan`
--

INSERT INTO `ambalan` (`id`, `nama_ambalan`, `created_at`, `updated_at`) VALUES
(1, 'KIANSANTANG', NULL, NULL),
(2, 'PURBASARI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `id_kelas`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Akuntansi dan Keuangan Lembaga 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(2, 1, 'Akuntansi dan Keuangan Lembaga 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(3, 1, 'Akuntansi dan Keuangan Lembaga 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(4, 1, 'Bisnis Daring dan Pemasaran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(5, 1, 'Bisnis Daring dan Pemasaran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(6, 1, 'Bisnis Daring dan Pemasaran 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(7, 1, 'Otomatisasi dan Tata Kelola Perkantoran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(8, 1, 'Otomatisasi dan Tata Kelola Perkantoran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(9, 1, 'Rekayasa Perangkat Lunak 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(10, 1, 'Rekayasa Perangkat Lunak 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(11, 1, 'Teknik Komputer dan Jaringan 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(12, 1, 'Teknik Komputer dan Jaringan 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(13, 2, 'Akuntansi dan Keuangan Lembaga 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(14, 2, 'Akuntansi dan Keuangan Lembaga 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(15, 2, 'Akuntansi dan Keuangan Lembaga 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(16, 2, 'Bisnis Daring dan Pemasaran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(17, 2, 'Bisnis Daring dan Pemasaran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(18, 2, 'Bisnis Daring dan Pemasaran 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(19, 2, 'Otomatisasi dan Tata Kelola Perkantoran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(20, 2, 'Otomatisasi dan Tata Kelola Perkantoran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(21, 2, 'Rekayasa Perangkat Lunak 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(22, 2, 'Rekayasa Perangkat Lunak 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(23, 2, 'Teknik Komputer dan Jaringan 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(24, 2, 'Teknik Komputer dan Jaringan 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(25, 3, 'Akuntansi dan Keuangan Lembaga 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(26, 3, 'Akuntansi dan Keuangan Lembaga 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(27, 3, 'Akuntansi dan Keuangan Lembaga 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(28, 3, 'Bisnis Daring dan Pemasaran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(29, 3, 'Bisnis Daring dan Pemasaran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(30, 3, 'Bisnis Daring dan Pemasaran 3', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(31, 3, 'Otomatisasi dan Tata Kelola Perkantoran 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(32, 3, 'Otomatisasi dan Tata Kelola Perkantoran 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(33, 3, 'Rekayasa Perangkat Lunak 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(34, 3, 'Rekayasa Perangkat Lunak 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(35, 3, 'Teknik Komputer dan Jaringan 1', '2019-09-03 01:17:11', '2019-09-03 01:17:11'),
(36, 3, 'Teknik Komputer dan Jaringan 2', '2019-09-03 01:17:11', '2019-09-03 01:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `tanggal_hadir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `id_siswa`, `tanggal_hadir`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '22-09-2019', 'Sakit', '2019-09-22 06:29:34', '2019-09-22 06:50:39'),
(2, 2, '22-09-2019', 'Sakit', '2019-09-22 06:35:57', '2019-09-22 06:35:57'),
(4, 3, '22-09-2019', 'Hadir', '2019-09-22 06:50:15', '2019-09-22 06:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'X', '2019-09-03 01:18:12', '2019-09-03 01:18:12'),
(2, 'XI', '2019-09-12 06:27:33', '2019-09-12 06:27:33'),
(3, 'XII', '2019-09-12 06:28:04', '2019-09-12 06:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_03_043243_create_siswas_table', 1),
(4, '2019_09_03_060614_create_kehadirans_table', 1),
(5, '2019_09_03_061525_create_kelas_table', 1),
(6, '2019_09_03_061533_create_jurusans_table', 1),
(7, '2019_09_03_061541_create_sanggas_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 2),
(9, '2019_09_16_234040_create_table_ambalan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sangga`
--

CREATE TABLE `sangga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ambalan` bigint(20) UNSIGNED NOT NULL,
  `nama_sangga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sangga`
--

INSERT INTO `sangga` (`id`, `id_ambalan`, `nama_sangga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pelaksana 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(2, 2, 'Pelaksana 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(3, 2, 'Pelaksana 2', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(4, 1, 'Pencoba 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(5, 2, 'Pencoba 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(6, 2, 'Pencoba 2', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(7, 1, 'Pendobrak 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(8, 2, 'Pendobrak 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(9, 2, 'Pendobrak 2', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(10, 1, 'Penegas 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(11, 2, 'Penegas 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(12, 2, 'Penegas 2', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(13, 1, 'Perintis 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(14, 2, 'Perintis 1', '2019-09-03 01:19:25', '2019-09-03 01:19:25'),
(15, 2, 'Perintis 2', '2019-09-03 01:19:25', '2019-09-03 01:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `id_ambalan` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_sangga` bigint(20) UNSIGNED NOT NULL,
  `ruangan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `id_ambalan`, `nama_siswa`, `id_kelas`, `id_jurusan`, `id_sangga`, `ruangan`, `created_at`, `updated_at`) VALUES
(1, 11707125, 1, 'Muhammad Faris Adi Prabowo', 3, 34, 10, 1, NULL, NULL),
(2, 213123, 1, 'asdasdasdsad', 1, 4, 1, 1, NULL, NULL),
(3, 12321, 1, 'asdasd', 1, 3, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` enum('Admin','Koordinator','Sekretaris') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roles`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$NR7FphWnB6Pni0KQyZSpEeLBoEi8JI9zVp8rMapb4XZqbri9MoVIW', NULL, 'Admin', NULL, '2019-09-12 06:45:01', '2019-09-12 06:45:01'),
(2, 'koordinator', 'koordinator1', 'koordinator@gmail.com', NULL, '$2y$10$NR7FphWnB6Pni0KQyZSpEeLBoEi8JI9zVp8rMapb4XZqbri9MoVIW', NULL, 'Koordinator', 1, '2019-09-12 06:45:01', '2019-09-12 06:45:01'),
(3, 'koordinator', 'koordinator2', 'koordinator2@gmail.com', NULL, '$2y$10$NR7FphWnB6Pni0KQyZSpEeLBoEi8JI9zVp8rMapb4XZqbri9MoVIW', NULL, 'Koordinator', 2, '2019-09-12 06:45:01', '2019-09-12 06:45:01'),
(4, 'koordinator', 'koordinator3', 'koordinator3@gmail.com', NULL, '$2y$10$NR7FphWnB6Pni0KQyZSpEeLBoEi8JI9zVp8rMapb4XZqbri9MoVIW', NULL, 'Koordinator', 3, '2019-09-12 06:45:01', '2019-09-12 06:45:01'),
(5, 'sekretaris', 'sekretaris', 'sekretaris@gmail.com', NULL, '$2y$10$NR7FphWnB6Pni0KQyZSpEeLBoEi8JI9zVp8rMapb4XZqbri9MoVIW', NULL, 'Sekretaris', NULL, '2019-09-12 06:45:01', '2019-09-12 06:45:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambalan`
--
ALTER TABLE `ambalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kehadiran_id_siswa_foreign` (`id_siswa`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sangga`
--
ALTER TABLE `sangga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ambalan` (`id_ambalan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_ibfk_1` (`id_kelas`),
  ADD KEY `siswa_ibfk_2` (`id_jurusan`),
  ADD KEY `siswa_ibfk_3` (`id_sangga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambalan`
--
ALTER TABLE `ambalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sangga`
--
ALTER TABLE `sangga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `sangga`
--
ALTER TABLE `sangga`
  ADD CONSTRAINT `sangga_ibfk_1` FOREIGN KEY (`id_ambalan`) REFERENCES `ambalan` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_sangga`) REFERENCES `sangga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
