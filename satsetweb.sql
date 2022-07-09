-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2022 pada 17.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satsetweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `jenis_paket` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id`, `nama`, `email`, `nomor_wa`, `jenis_paket`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Aonipla', 'zeronep960@gmail.com', '0881036370069', 'Blog Pribadi', 'Proses', '2022-07-08 20:54:41', '2022-07-08 22:07:11'),
(5, 'Aonipla', 'aaa@gmail.com', 'a', 'Blog Pribadi', 'Tolak', '2022-07-08 21:24:16', '2022-07-08 22:09:41'),
(6, 'Aonipla', 'zeronep960@gmail.com', '0881036370069', 'Toko Online', 'Done', '2022-07-08 21:24:34', '2022-07-08 22:10:06'),
(7, 'Aonipla', 'zeronep960@gmail.com', '0881036370069', 'Website Donasi', 'Baru', '2022-07-08 22:28:30', '2022-07-08 22:28:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-08-063143', 'App\\Database\\Migrations\\Users', 'default', 'App', 1654670141, 1),
(2, '2022-06-08-063157', 'App\\Database\\Migrations\\UserRole', 'default', 'App', 1654670141, 1),
(3, '2022-06-08-083151', 'App\\Database\\Migrations\\Portfolio', 'default', 'App', 1654677401, 2),
(4, '2022-07-08-130033', 'App\\Database\\Migrations\\Formulir', 'default', 'App', 1657285407, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama`, `deskripsi`, `jenis`, `gambar`, `link`) VALUES
(1, 'App Bakery', 'App Bakery adalah Website Sistem Informasi yang berguna untuk mencatat jual beli roti yang terjadi di toko roti.', 'Sistem Infomasi Website', 'coba', 'https://aplikasibakery.000webhostapp.com/'),
(3, 'AppSampah', 'test', 'Web Perusahaan', '', 'https://www.appsampah.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `foto`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Alvintino', 'zeronep960@gmail.com', '$2y$10$IsKhjxt/yUZJop/wcfn7Z.lr4GEa7er243i2eKyz2lcmaAX.lBMYi', '', 1, 1, '2022-06-08 14:38:32', '2022-07-09 20:40:53'),
(2, 'Fiqri Baihaqi', 'fiqri@gmail.com', '$2y$10$rGhReigCp8tQoXio9BCgMeMD9VLJze/T1n77f6s.L2Oaa8bRUqZHS', '', 2, 1, '2022-06-08 14:52:33', '2022-06-08 14:52:33'),
(3, 'Aqil Mustaqim', 'aqilmustaqim28@gmail.com', '$2y$10$9pFMsrRk9upNEyMMZdJWC.7rsDRWDiyukOJLtXc0rG6hinvlHLjp.', '', 1, 1, '2022-06-08 15:18:27', '2022-06-08 15:18:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
