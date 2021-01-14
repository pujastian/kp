-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 12:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(2, 'IF2004', '1', 'Teknik Informatika', '2017'),
(3, 'FT3009', '4', 'Manajemen Informatika', '2018'),
(4, 'IF200422', '3', 'Sistem Informasi', '2017'),
(5, 'IF2006', '1', 'Manajemen Informatika', '2020');

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
(1, 'IF2004', 'fsdfsd', '2as', '2as', 'MKK', '1', '11'),
(2, 'FT3009', 'a', '2', '2as', 'MKB', 'sdafxs', 'dasda'),
(3, 'IF200422', 'a', '2as', '2as', 'MKK', '1', 'fsdfs'),
(4, 'IF2006', 'fsdfsd', 'fdsfsdfs', '2as', 'MKB', '1', '11'),
(5, 'FT3009', 'a', '2', '1', 'MKK', 'sdafxs', 'fsegvdcx'),
(6, 'IF2005', 'hujan', '2', '1', 'MKK', 'gabut', 'gabut');

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
(6, '2020-12-17', 'putra', 'pelangi', 'dsadas', '02532155', 'dsadasdada@gmail.com', 'tunduh');

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
(1, 'AKUM', 'putra@gmail.com', NULL, '$2y$10$uz3yy46O9dBq.YgIGIsEiugu2BiX6xgq6cY/lynKuoahcepjXjOOa', 'jD3Vy65k7MMxATZE5DiV0jW2nrtYIdFqOET8oSgk0NCuByHxlpjPJAqRofhM', '2020-12-16 01:09:34', '2020-12-16 01:09:34');

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
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_rekomendasita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
