-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Jul 2025 pada 19.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-gendut@gmail.com|127.0.0.1', 'i:1;', 1752452697),
('laravel-cache-gendut@gmail.com|127.0.0.1:timer', 'i:1752452697;', 1752452697),
('pengelola-beasiswa-cache-gabriel@gmail.com|127.0.0.1', 'i:1;', 1753369024),
('pengelola-beasiswa-cache-gabriel@gmail.com|127.0.0.1:timer', 'i:1753369024;', 1753369024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fuzzy_mamdani`
--

CREATE TABLE `fuzzy_mamdani` (
  `id_fuzzy` bigint(20) UNSIGNED NOT NULL,
  `id_sosial_ekonomi` bigint(20) UNSIGNED NOT NULL,
  `kelayakan` double NOT NULL,
  `status` enum('layak','tidak_layak') NOT NULL,
  `tgl_proses` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fuzzy_mamdani`
--

INSERT INTO `fuzzy_mamdani` (`id_fuzzy`, `id_sosial_ekonomi`, `kelayakan`, `status`, `tgl_proses`) VALUES
(5, 5, 100, 'layak', '2025-07-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(11, '2025_07_13_135131_create_siswa_table', 2),
(12, '2025_07_13_135728_create_sosial_ekonomi_table', 2),
(13, '2025_07_13_233618_create_fuzzy_mamdani_table', 2),
(14, '2025_07_20_123400_add_role_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('gabrielxjonathan.12@gmail.com', '$2y$12$fW1XgTq2RTRBk3GD95MYQe5bPbT1E54I3tsBO1UjSQYzTHPWT3Vau', '2025-07-13 17:28:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2CfQc9Xf56aNDnsywKlRJoYd4O6odfWZnqTs1Jel', 3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWXVESDZBRVhKd3g3RFgyNjZtbXZlMmVPZHppaXJCb2E0c2ZtTzBnNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1753376467),
('39B0SaCOgckROdRTmV1J5ny79rYKqwiTY26DlP0i', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVGFueFNwbWgxMnd3SnRzdWp3N1hoNlcxN1QwTXRMSU53UlFxb0RKQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvd2FsaWtlbGFzL3JlcG9ydCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1753376419);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `kelas`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
('0029258762', 'Oriza', 'X RPL', '2025-07-20', 'Diding', 'Mulyana', 'Garut', '09283423842', '2025-07-20 09:20:31', '2025-07-20 09:20:31'),
('0029258762021', 'Adi Saepuloh', 'X RPL', '2025-07-02', 'Diding', 'Ucup', 'Bandung', '09283423842', '2025-07-20 05:48:04', '2025-07-20 05:48:04'),
('0232343', 'Ilham Sahidan', 'X RPL', '2025-07-01', 'Dadang', 'Gak Tau', 'Cibodas Lembang', '089123342123', '2025-07-13 16:52:36', '2025-07-13 16:52:36'),
('0232343122', 'Monyet Lahiran', 'X RPL', '2025-07-14', 'Dadang', 'Diding', '2', '089123342123', '2025-07-13 20:20:39', '2025-07-13 20:20:39'),
('023234342', 'Dadi Suherman', 'X RPL', '2025-07-14', 'Dheni', 'Jajat', 'Bandung', '089123342123', '2025-07-13 17:03:24', '2025-07-13 17:03:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_ekonomi`
--

CREATE TABLE `sosial_ekonomi` (
  `id_sosial_ekonomi` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jml_penghasilan` varchar(10) NOT NULL,
  `tanggungan` varchar(10) NOT NULL,
  `tempat_tinggal` varchar(225) NOT NULL,
  `aset` varchar(225) NOT NULL,
  `pkh` varchar(225) DEFAULT NULL,
  `dtks` varchar(225) DEFAULT NULL,
  `sktm` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sosial_ekonomi`
--

INSERT INTO `sosial_ekonomi` (`id_sosial_ekonomi`, `nisn`, `jml_penghasilan`, `tanggungan`, `tempat_tinggal`, `aset`, `pkh`, `dtks`, `sktm`) VALUES
(5, '0029258762', '200000', '5', 'uploads/sosial_ekonomi/B0lFIJJv6FeKjas1PRTG0W8Rnxjdw6G9ttwgTujd.png', 'Motor', 'uploads/sosial_ekonomi/mUWaGndCwfENAc6DtMGLOV1QfdM9S9L5J06J6jo9.jpg', 'uploads/sosial_ekonomi/7hyCliLp3NPBweQbYyn7wfaOQ2NDCbPlrGsicZQR.jpg', 'uploads/sosial_ekonomi/lY7rT4xlU4gHEb2vIQOREaWCID8nd67vkB7DdYkT.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'walikelas',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Gabriel Yonathan', 'gabrielxjonathan.12@gmail.com', 'walikelas', NULL, '$2y$12$gyLMbPK.6iEt.TC22Mp5PeIZnUzBgb.iDC5NE5usz3XlB2NPQWStm', NULL, '2025-07-13 17:25:05', '2025-07-13 17:25:05'),
(3, 'Admin', 'admin@gmail.com', 'operator', NULL, '$2y$12$8wf4vnvyKMsBo180ZWRnnepvAq89edBQBtka8la80pgCOoPo9nTaS', NULL, '2025-07-20 04:17:46', '2025-07-20 04:17:46'),
(4, 'Diding', 'diding@gmail.com', 'walikelas', NULL, '$2y$12$VEIp3LJyA9jrEFg3YChM9..gEGoHypA6iq0RrBBYnNOJCRvEHcfiC', NULL, '2025-07-24 10:00:54', '2025-07-24 10:00:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fuzzy_mamdani`
--
ALTER TABLE `fuzzy_mamdani`
  ADD PRIMARY KEY (`id_fuzzy`),
  ADD KEY `fuzzy_mamdani_id_sosial_ekonomi_foreign` (`id_sosial_ekonomi`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `sosial_ekonomi`
--
ALTER TABLE `sosial_ekonomi`
  ADD PRIMARY KEY (`id_sosial_ekonomi`),
  ADD KEY `sosial_ekonomi_nisn_index` (`nisn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fuzzy_mamdani`
--
ALTER TABLE `fuzzy_mamdani`
  MODIFY `id_fuzzy` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `sosial_ekonomi`
--
ALTER TABLE `sosial_ekonomi`
  MODIFY `id_sosial_ekonomi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fuzzy_mamdani`
--
ALTER TABLE `fuzzy_mamdani`
  ADD CONSTRAINT `fuzzy_mamdani_id_sosial_ekonomi_foreign` FOREIGN KEY (`id_sosial_ekonomi`) REFERENCES `sosial_ekonomi` (`id_sosial_ekonomi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sosial_ekonomi`
--
ALTER TABLE `sosial_ekonomi`
  ADD CONSTRAINT `sosial_ekonomi_nisn_foreign` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
