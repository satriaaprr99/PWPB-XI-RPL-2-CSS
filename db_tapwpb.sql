-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 01:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tapwpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `gambar`, `harga`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Hand Sanitizer', 'hand.jfif', 60000, '10', 'alkohol 70%', NULL, '2020-06-07 21:51:40'),
(2, 'Masker Kain', 'maskerkain.png', 10000, '977', 'Kain lembut', NULL, '2020-05-31 09:03:21'),
(3, 'Obat Vitamin', 'obatv.jpg', 20000, '998', 'penambah daya tahan tubuh', NULL, '2020-06-07 21:50:04'),
(4, 'Masker (isi 12)', 'masker12.jpg', 60000, '999', 'terbuat dari bahan berkualitas', NULL, NULL),
(9, 'Pakaian Khusus Covid-19', 'hh.jfif', 1000000, '40', 'terbuat dari bahan alami', NULL, '2020-06-07 12:51:26'),
(16, 'Botol 12ml', '57535148aac59687d7e40b6b1e772944.jpg', 5000, '90', 'botol plastik', '2020-06-07 21:52:44', '2020-06-07 21:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'Lagi, Jenazah PDP Corona Dibawa Kabur Keluarga dari RS di Makassar', 'Makassar - Pengambilan paksa jenazah pasien dalam pemantauan (PDP) COVID-19 oleh keluarganya kembali terjadi di kota Makassar, Sulsel. Kali ini jenazah seorang IRT berumur 53 tahun diambil paksa oleh keluarganya dari RS Stella Maris.\r\n\"Pasien yang meninggal perempuan berumur 53 tahun, ibu rumah tangga meninggal di rumah sakit Stella Maris dengan status PDP,\" ujar Kapolsek Ujung Pandang, Kompol Wahyu Basuki, pada Minggu (7/6/2020) malam.\r\n\r\nPasien diketahui dibawa ke RS Stella Maris dan dinyatakan statusnya sebagai pasien PDP COVID-19 pada Minggu (7/6). Kemudian sekitar pukul 19.45 WITA, pasien tersebut meninggal dunia.\r\n\r\nKeluarga korban lalu tiba dengan jumlah besar ke RS, untuk mengambil jenazah korban. Polisi dan TNI yang berjaga di lokasi pun tidak bisa berbuat banyak menghalau keluarga pasien lantaran kekurangan jumlah personil.\r\n\r\n\"Keluarga almahrum sekitar 150 orang dan mengambil paksa jenazah almahrum di RS Stella Maris untuk di bawa pulang namun dihalau oleh anggota TNI dan Polri yang berjaga di RS Stella Maris sampai di jalan Lamadukelleng. Karena kekuatan tidak imbang sehingga jenazah almahrum berhasil dibawa pulang dengan menggunakan mobil ambulance yang sudah dipersiapkan oleh keluarga almarhum,\" jelas Wahyu.\r\n\r\nUntuk mencegah terjadinya aksi serupa, beberapa anggota TNI dan polisi berjaga di sekitar lokasi.', 'pandemi2.jpeg', '2020-06-06 02:30:17', '2020-06-07 11:50:22'),
(4, '\'Indonesia Terserah\' Viral di Tengah Pandemi Corona, Ini Respons Pemerintah', 'Jakarta - Tagar dan video \'Indonesia Terserah\' muncul di tengah pandemi Corona. Tagar #indonesiaterserah menggaung dengan narasi kekecewaan penanganan Corona yang dilakukan RI. Lantas bagaimana respons pemerintah?\r\n\"Kemudian untuk video Indonesia Terserah, kami jelaskan bahwa kita sangat tidak berharap kalangan dokter menjadi kecewa, sejak awal kami selalu mengedepankan bahwa ujung tombak kita adalah masyarakat,\" ujar Ketua Gugus Tugas Percepatan Penanganan COVID-19 Doni Monardo dalam konferensi pers yang disiarkan akun YouTube BNPB, Senin (18/5/2020).\r\n\r\n\"Kalau seandainya masyarakat ada yang terpapar lantas sakit dirawat di rumah sakit, apalagi dengan jumlah yang banyak dan tempat perawatannya penuh, maka yang sangat repot adalah tenaga dokter, termasuk perawat,\" katanya.', 'pandemi.jpeg', '2020-06-07 11:25:48', '2020-06-07 11:25:48'),
(5, 'BIN Perpanjang Rapid Test Massal di Surabaya Sampai 15 Juni', 'Surabaya - Badan Intelijen Negara (BIN) memutuskan memperpanjang rapid test dan swab massal di Surabaya. BIN menilai Surabaya merupakan zona epicentrum.\r\n\r\n\"Kami khususkan (tes massal) di Surabaya karena merupakan epicentrum COVID-19 terbesar di Jatim dan secara nasional. Selain itu, Surabaya angka kasus positifnya juga sangat tinggi,\" kata Kabinda Jatim, Brigjen TNI Mochamad Syafei Kasno di Surabaya, Minggu (7/6/2020).\r\n\r\nSyafei menegaskan, pihaknya memperpanjang kegiatan rapid test massal COVID-19 di Surabaya. Rapid test massal yang digelar BIN di Surabaya awalnya berakhir pada 5 Juni, tetapi akan diperpanjang hingga 15 Juni. BIN sudah menggelar rapid test di Surabaya sejak 29 Mei 2020.\r\n\r\n\"Sebenarnya kami hanya 8 hari, sampai tanggal 5 Juni kemarin. Namun karena pimpinan Kepala BIN Jenderal Pol (Purn) Budi Gunawan melihat bahwa masih tinggi angka yang terpapar dan tingginya kurva kasus positif COVID-19 di Surabaya, maka diperpanjang sampai 15 Juni,\" tegasnya.\r\n\r\nSyafei menjelaskan, BIN berkomitmen penuh membantu Pemkot Surabaya untuk menekan angka penyebaran COVID-19. Setiap hari, BIN menerjunkan 2 unit mobil lab PCR dan ribuan alat Rapid Test untuk melakukan tes massal COVID-19 di Surabaya.\r\n\r\n\"Untuk hari ini BIN menggelar tes massal yang ke-16 kalinya di wilayah Jatim. Di Surabaya 15 titik dan Sidoarjo 1 titik. Ini merupakan program kemanusiaan dari BIN untuk memutus rantai penularan di Jatim,\" tandasnya.\r\n\r\n\"Kami harapkan, dengan kegiatan rapid test massal ini bisa memperkecil penyebaran COVID-19 di Surabaya, karena tren kasus penyebaran di Jatim saat ini terus naik. Mereka yang hasil rapid test-nya reaktif akan dilanjutkan dengan tes swab. Kalau positif tes swab akan diisolasi di Asrama Haji Sukolilo Surabaya. Bagi mereka yang positif tes swab dan bergejala akan dibawa ke RS Rujukan,\" lanjutnya.', 'pandemi3.jpeg', '2020-06-07 11:52:57', '2020-06-07 11:52:57'),
(6, 'Pasien COVID-19 di Jatim Hari Ini Tambah 105, Sidoarjo Geser Surabaya', 'Surabaya - Kasus positif COVID-19 di Jatim bertambah 105 menjadi 5.940 orang. Tambahan terbanyak dari Sidoarjo yakni 38 orang.\r\n\r\nKemudian ada 27 pasien dari Surabaya, 10 dari Kabupaten Malang, 9 dari Gresik, 7 dari Pamekasan, 4 dari Bangkalan dan 2 dari Kabupaten Pasuruan. Lalu 2 dari Lamongan, 1 dari Kabupaten Kediri, 1 dari Trenggalek, 1 dari Kota Malang, 1 dari Kediri, 1 dari Nganjuk dan 1 dari Sampang.\r\n\r\n\"Hari ini ada tambahan positif baru 105. Sehingga total yang terkonfirmasi positif 5.940 orang,\" kata Gubernur Jatim Khofifah Indar Parawansa di Gedung Negara Grahadi Surabaya, Minggu (7/6/2020).\r\nSelain itu, ada kabar baik dalam penanganan COVID-19 di Jatim. Tercatat ada tambahan 90 pasien yang dinyatakan sembuh.\r\n\r\nRinciannya yakni 46 dari Surabaya, 20 dari Sidoarjo, 6 dari Kabupaten Probolinggo, 5 dari Gresik, 2 dari Trenggalek, 2 dari Malang, 2 dari Nganjuk, 2 dari Ponorogo, 1 dari Lumajang, 1 dari Magetan, 1 dari Tulungagung, 1 dari Jember dan 1 dari Bangkalan.\r\n\r\nKini, total pasien Corona di Jatim yang telah dinyatakan sembuh ada 1.499 orang. Atau tingkat kesembuhannya mencapai 25,24 persen.', 'pandemi4.jpeg', '2020-06-07 11:55:10', '2020-06-07 11:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `total_nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `email`, `nohp`, `pembayaran`, `tanggal`, `nominal`, `total_nominal`, `created_at`, `updated_at`) VALUES
(1, 'Satria Putra', 'satriapr90@gmail.com', '0895631992837', 'GOPAY', '2020-06-07', 20000, 0, '2020-06-07 12:34:23', '2020-06-07 12:34:23'),
(2, 'Satria Putra', 'satriaaprr99@gmail.com', '0895631992837', 'OVO', '2020-06-07', 1000000, 0, '2020-06-07 12:45:41', '2020-06-07 12:45:41'),
(3, 'Chandra Mukti', 'chandra@gmail.com', '0895631992837', 'DANA', '2020-06-07', 10000, 0, '2020-06-07 13:49:54', '2020-06-07 13:49:54');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_07_101203_create_barangs_table', 2),
(5, '2020_05_07_102211_create_pesanandetails_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 3),
(7, '2020_05_08_053647_add_gambar_barangs', 4),
(10, '2020_05_07_102006_create_pesanans_table', 6),
(21, '2014_10_12_000000_create_users_table', 7),
(22, '2020_05_19_092632_addfield_username_level', 7),
(23, '2020_05_22_052746_add_gambarprofile', 7),
(24, '2020_05_21_075236_create__berita', 8),
(25, '2020_06_06_083930_add_foto_user', 9),
(28, '2020_06_07_074248_create_donasi', 10);

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
-- Table structure for table `pesanandetails`
--

CREATE TABLE `pesanandetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanandetails`
--

INSERT INTO `pesanandetails` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(9, 1, 7, 12, 600000, '2020-05-17 00:48:18', '2020-05-17 00:48:18'),
(12, 2, 9, 12, 120000, '2020-05-31 09:03:11', '2020-05-31 09:03:11'),
(16, 1, 11, 2, 120000, '2020-06-07 13:53:44', '2020-06-07 13:53:44'),
(20, 3, 10, 1, 20000, '2020-06-07 21:48:54', '2020-06-07 21:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(7, 1, '2020-05-17', '1', 144126, 600000, '2020-05-17 00:48:18', '2020-05-17 00:48:24'),
(8, 1, '2020-05-17', '0', 328032, 0, '2020-05-17 04:58:17', '2020-05-19 03:09:44'),
(9, 2, '2020-05-21', '1', 541753, 120000, '2020-05-21 01:18:01', '2020-05-31 09:03:21'),
(10, 2, '2020-06-01', '1', 386343, 20000, '2020-05-31 20:26:33', '2020-06-07 21:50:04'),
(11, 4, '2020-06-07', '1', 336332, 120000, '2020-06-07 13:52:57', '2020-06-07 13:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `nohp`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Satria Putra Ramadhan', 'satriapr90@gmail.com', NULL, '$2y$10$P0jD3OQyCZwbJyg973WRt.QcVXMZLo65AfYvxV5c0CRaiL1IjW89y', 'bandung', '0895631992837', 'Hindia-01-min.jpg', NULL, '2020-05-21 22:45:44', '2020-06-07 21:49:49'),
(3, 'user', 'Ramadhan Putra Satria', 'user@example.com', NULL, '$2y$10$VSaapHs/Ygxu0UmIqpMra.1TlnoSBj77motxB9pCZEx7cMiYSEd2e', NULL, NULL, NULL, NULL, '2020-05-21 23:52:38', '2020-05-21 23:52:38'),
(4, 'user', 'Satria Putra Ramadhan', 'satriaaprr99@gmail.com', NULL, '$2y$10$xfpugsa6w2MEHb03.xdAQu/GdBQHo5BTh9Rl5wowh1cYb72gW3C72', 'bandung', '0895631992837', 'D18XJvyU8AE1VP6.jpg', NULL, '2020-06-07 13:48:44', '2020-06-07 13:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
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
-- Indexes for table `pesanandetails`
--
ALTER TABLE `pesanandetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pesanandetails`
--
ALTER TABLE `pesanandetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
