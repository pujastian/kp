-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 06:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_27_074425_create_upload_files_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pujastian@gmail.com', '$2y$10$vl2QyBvmLdNJvN6k7.zFlOMrJsCqXYHgfia/5JOcdMPTGiVEzgjwm', '2021-01-01 18:54:24'),
('putra12@gmail.com', '$2y$10$npgBbN46OXYIbyM9gACLN.FqegvS2esmLMX31vT5JFHth3drVH1Fy', '2021-01-01 18:59:04'),
('putra@gmail.com', '$2y$10$b2rYYuzeVuHtGcjKOp0ipex1NvoV9Y18jH.nWVQ2FZsxJbPmW5Coi', '2021-01-01 19:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `visi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`visi_misi`) VALUES
('Visi :\r\n\r\n“Menjadi Lembaga Penelitian dan Pengabdian Masyarakat yang mendukung penerapan ilmu pengetahuan dan teknologi sesuai dengan program studi yang bersinergi dengan entrepreneur.”\r\n\r\nMisi :\r\n\r\nMenyelenggarakan koordinasi aktivitas penelitian dan pengabdian masyarakat berdasarkan hasil-hasil penelitian program studi,\r\nMenyelenggarakan koordinasi aktivitas penelitian dan pengabdian masyarakat yang bertujuan untuk mengimpelemntasikan visi-misi STMIK Sumedang,\r\nMenyelenggarakan aktivitas yang bertujuan untuk meningkatkan keahlian sumber daya peneliti sesuai dengan program studi,\r\nMelakukan monitoring dan evaluasi terhadap setiap aktivitas penelitian dan pengabdian masyarakat,\r\nMendorong dan membantu setiap program studi untuk dapat melakukan kerja sama dengan instansi lain.');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kurikulum`
--

CREATE TABLE `tabel_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `kode_matakuliah` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tahun_angkatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kurikulum`
--

INSERT INTO `tabel_kurikulum` (`id_kurikulum`, `kode_matakuliah`, `semester`, `prodi`, `tahun_angkatan`) VALUES
(6, 'FT3004', '2', 'Sistem Informasi', '2018'),
(8, 'FT3007', '5', 'Manajemen Informatika', '2017'),
(9, 'FT3004', '4', 'Teknik Informatika', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `kode_matakuliah` varchar(50) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `teori` varchar(50) NOT NULL,
  `praktek` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `prasyarat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_matakuliah`
--

INSERT INTO `tabel_matakuliah` (`id_matakuliah`, `kode_matakuliah`, `nama_matkul`, `teori`, `praktek`, `km`, `prasyarat`, `keterangan`) VALUES
(2, 'FT3007', 'Pengantar Sistem Informasi', '2', '1', '-- Pilih Kelompok Matakuliah --', '-', 'MK Wajib'),
(3, 'FT3004', 'Basis Data', '2', '2', '-- Pilih Kelompok Matakuliah --', 'PPA', 'MK Wajib');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_referensi`
--

CREATE TABLE `tabel_referensi` (
  `id_referensi` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_rekomendasi`
--

CREATE TABLE `tabel_rekomendasi` (
  `id_rekomendasita` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_instansi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `saran_masukan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_rekomendasi`
--

INSERT INTO `tabel_rekomendasi` (`id_rekomendasita`, `tanggal`, `nama`, `asal_instansi`, `alamat`, `no_hp`, `email`, `saran_masukan`) VALUES
(7, '2021-01-02', 'Rostika', 'PT. Sejahtera', 'Sumedang', '082240503038', 'rostikanovia@gmail.com', 'Lebih ditingkatkan pembelajaran tentan IOT');

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_referensi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_file`
--

INSERT INTO `upload_file` (`id`, `id_referensi`, `nama_file`, `tanggal`, `file`, `created_at`, `updated_at`) VALUES
(22, '1', 'Kurikulum SI', '2020-01-02', 'KURIKULUM SISTEM INFORMASI-STMIKSMD-2019 (1).pdf', '2021-01-01 19:48:34', '2021-01-01 19:48:34'),
(23, '2', 'Kurikulum TI', '2021-01-02', '@dok_kurikulum-teknik-informatika.pdf', '2021-01-01 19:51:50', '2021-01-01 19:51:50'),
(24, '3', 'Kurikulum MI', '2021-01-02', 'KURIKULUM MANAJEMEN INFORMATIKA-STMIKSMD-2019.pdf', '2021-01-01 19:52:16', '2021-01-01 19:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AKUM', 'putra@gmail.com', NULL, '$2y$10$uz3yy46O9dBq.YgIGIsEiugu2BiX6xgq6cY/lynKuoahcepjXjOOa', 'KXXv6ZVOULPPIz0bfbXF2Z86rdCgZt8sOEyQVloRf0ess90RJu97dOPV7hPG', '2020-12-16 01:09:34', '2020-12-16 01:09:34'),
(2, 'pujastian', 'pujastian@gmail.com', NULL, '$2y$10$SEIVR/OCjlGiY9JW4uBXdu.Y3eDnKzIUOD1gDv/6uArf6LC7JzKEK', NULL, '2020-12-31 22:49:41', '2020-12-31 22:49:41'),
(3, 'putra', 'putra12@gmail.com', NULL, '$2y$10$BmaAUvlT33Q5exOqy78U4OtZsiSpmqWGQmOlLU/43UnuAai5JjH4S', NULL, '2021-01-01 18:56:33', '2021-01-01 18:56:33'),
(4, 'Rostika Novia', 'rostikanovia@gmail.com', NULL, '$2y$10$sCFxoACv9Y2w8suyBzCfR.MqeUMPq9jAMfMYYjlEikVozVCaWeX3a', NULL, '2021-01-01 20:01:18', '2021-01-01 20:01:18'),
(5, 'alan', 'alan33@gmai.com', NULL, '$2y$10$1V5eAjOWDJZBdGQXa0Wpt.LE9Au1rPBOdTvzOijGzQJEZo40tjrcy', NULL, '2021-01-13 20:10:50', '2021-01-13 20:10:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `tabel_kurikulum`
--
ALTER TABLE `tabel_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `tabel_referensi`
--
ALTER TABLE `tabel_referensi`
  ADD PRIMARY KEY (`id_referensi`);

--
-- Indexes for table `tabel_rekomendasi`
--
ALTER TABLE `tabel_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasita`);

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_kurikulum`
--
ALTER TABLE `tabel_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_referensi`
--
ALTER TABLE `tabel_referensi`
  MODIFY `id_referensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_rekomendasi`
--
ALTER TABLE `tabel_rekomendasi`
  MODIFY `id_rekomendasita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
