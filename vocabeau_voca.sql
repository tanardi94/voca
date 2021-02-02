-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2021 at 08:23 PM
-- Server version: 5.7.33
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
-- Database: `vocabeau_voca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `role` int(11) DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`, `created_by`, `updated_by`, `photo`) VALUES
(1, 'jenny', 'HQrJx4AGGyjCFOxc67OsznuwtfyLOkRy', '$2y$13$K.eeO.jjCO6S3mO405TtKe0EwXN6.jc812kCmaROUxTcsV3rla712', NULL, 'jennifer_jps@hotmail.com', 10, '2020-07-08 11:00:00', '2020-07-08 11:00:00', 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `image`) VALUES
(1, 'banner pertama', 'ini cuma percobaan banner 1', 0, 1, '2020-09-06 21:33:06', 1, '2020-09-06 21:45:17', 'banner pertama-744-103721202495f54f416150a93.40416921.jpg'),
(2, 'aaa', 'sssss', 0, 1, '2020-09-06 21:41:59', 1, '2020-09-06 21:45:35', 'aaa-500-594121202495f54f5379255a1.79900135.png'),
(3, 'coba lagi', 'weleh byk bgt percobaannya', 0, 1, '2020-09-06 21:45:52', 1, '2020-09-06 21:49:47', 'coba lagi-428-524521202495f54f6206ba490.63338571.png'),
(4, 'why cannot i', 'whaaaii', 1, 1, '2020-09-06 21:50:02', 1, '2020-09-06 21:54:26', 'why cannot i-733-265421202495f54f82206ce79.00440700.jpg'),
(5, 'coba ajah', 'coba ajah ke dua', 1, 1, '2020-09-06 22:00:46', 1, '2020-09-06 22:00:46', 'coba ajah-979-460022202495f54f99e1d8706.86299796.png'),
(6, 'banner ketiga', 'ini adalah banner ketiga', 1, 1, '2020-09-06 22:01:05', 1, '2020-09-12 21:11:52', 'banner ketiga-287-050122202495f54f9b123ab92.70837999.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'konten pertama voca', '<p><strong>this is just a new beginnings</strong></p>', 1, 1, '2020-09-06 17:45:17', 1, '2020-09-06 17:46:53'),
(2, 'apakah itu voca beauty', '<p>voca adalah produk kecantikan berupa serum yang dibuat dari <em>gliserol </em>alami</p>', 1, 1, '2020-09-06 17:59:03', 1, '2020-09-06 17:59:03'),
(3, 'konten ketiga voca', '<div style=\"text-align: justify;\">voca kayaknya loh ya bakalan keluarin produk baru nih guys, nantikan kejutannya yah...</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Semoga kalian semua suka tuh</div>', 1, 1, '2020-09-08 21:22:10', 1, '2020-09-17 19:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `question`, `answer`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `description`) VALUES
(1, 'Sejak kapan Voca Beauty Store berdiiri?', 'kira- kira yang jelas sejak indonesia merdeka jadinya biar kita ga susah sih kalo emang mau buka usaha di bidang kaya gini\r\n\r\nditambah dengan adanya teknologi jaman sekarang yang makin canggih, sehingga website ini diharapkan memudahkan customer untuk melakukan pembelian produk kita', 1, 1, '2020-09-12 21:08:38', 1, '2020-09-12 21:08:38', NULL),
(2, 'Siapakah aku?', 'Mana ak tahu kan kita belum kenalan', 1, 1, '2020-09-12 21:29:05', 1, '2020-09-12 21:29:05', NULL),
(3, 'Kenapa yah customer itu kebanyakan menyebalkan?', 'Karena biasanya mereka semua merasa seperti raja..', 1, 1, '2020-09-12 21:29:36', 1, '2020-09-12 21:29:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `photo_2` varchar(100) DEFAULT NULL,
  `photo_3` varchar(100) DEFAULT NULL,
  `description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `unique_id`, `name`, `price`, `photo`, `photo_2`, `photo_3`, `description`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '105418202795f7c5ae2bd4445.59445028', 'vocas', 12000, 'vocas-351-563912202395f47472c06aa10.00671102.jpg', 'vocas-465-105418202795f7c5ae2bd4445.59445028-2.jpg', NULL, 'percobaan produk vocas', 0, 1, '2020-08-27 12:39:56', 1, '2021-01-27 15:01:02'),
(2, '155919202395f47ae23efa026.39864077', 'voca ginseng', 150000, 'voca ginseng-468-155919202395f47ae23efa026.39864077.jpg', NULL, NULL, 'ini adalah voca ginseng produk terbaru', 0, 1, '2020-08-27 19:59:16', 1, '2021-01-27 15:01:07'),
(3, '400419202565f5e0ad80fb251.78890939', 'Voca Percobaan', 250000, 'Voca Percobaan-188-400419202565f5e0ad80fb251.78890939.png', NULL, NULL, 'Ini percobaan dengan tempat upload baru', 0, 1, '2020-09-13 19:04:40', 1, '2021-01-27 15:01:12'),
(4, '080719202565f5e0b6c3c70a7.22905281', 'Voca Percobaan', 250000, 'Voca Percobaan-447-080719202565f5e0b6c3c70a7.22905281.png', NULL, NULL, 'Ini percobaan dengan tempat upload baru', 0, 1, '2020-09-13 19:07:08', 1, '2021-01-27 15:01:15'),
(5, '500821202575f5f7972225591.13820915', 'cobak 3 foto', 123000, 'cobak 3 foto-722-500821202575f5f7972225591.13820915.jpg', NULL, NULL, 'semoga langsung bisa dapat 3 foto dong', 0, 1, '2020-09-14 21:08:50', 1, '2021-01-27 15:01:20'),
(6, '541021202575f5f79eede4d34.56244806', 'cobak 3 foto', 123000, 'cobak 3 foto-245-541021202575f5f79eede4d34.56244806.jpg', NULL, NULL, 'semoga langsung bisa dapat 3 foto dong', 0, 1, '2020-09-14 21:10:54', 1, '2021-01-27 15:01:23'),
(7, '361421202575f5f7acc545b16.47778973', 'cobak 3 foto', 123000, 'cobak 3 foto-619-361421202575f5f7acc545b16.47778973.jpg', NULL, NULL, 'semoga langsung bisa dapat 3 foto dong', 0, 1, '2020-09-14 21:14:36', 1, '2021-01-27 15:34:14'),
(8, '342321202575f5f7ce6b7d6f0.21790026', 'cobak 4 foto', 124000, 'cobak 4 foto-406-302321202575f5f7ce2a1a690.34309565.jpg', 'cobak 4 foto-298-582221202575f5f7cc2d1e1f9.07044714-2.jpg', 'cobak 4 foto-298-582221202575f5f7cc2d1e1f9.07044714-3.jpg', 'huahahahaha', 0, 1, '2020-09-14 21:22:58', 1, '2021-01-27 15:34:19'),
(9, '502917202625f65dd9e2f2946.38307272', 'weley', 12600, 'weley-439-502917202625f65dd9e2f2946.38307272.png', NULL, 'weley-439-502917202625f65dd9e2f2946.38307272-3.png', '', 0, 1, '2020-09-19 17:29:50', 1, '2021-01-27 15:34:21'),
(10, '4802192124600eb3683897d6.10162422', 'ginseng', 100000, 'ginseng-989-4802192124600eb3683897d6.10162422.jpeg', 'ginseng-989-4802192124600eb3683897d6.10162422-2.png', 'ginseng-989-4802192124600eb3683897d6.10162422-3.jpg', 'ini produk baru loh', 0, 1, '2021-01-25 19:02:48', 1, '2021-01-27 15:34:10'),
(11, '25331521266011255553a769.79388771', 'Voca Galactomyces Glow Serum', 250000, 'Voca Galactomyces Glow Serum-528-25331521266011255553a769.79388771.jpeg', 'Voca Galactomyces Glow Serum-528-25331521266011255553a769.79388771-2.jpg', 'Voca Galactomyces Glow Serum-528-25331521266011255553a769.79388771-3.jpg', 'Serum ini mengandung 95% bahan aktif yang terkenal sebagai \"holygrail\" di Korea yaitu Galactomyces Ferment Filtrate. Bukan tanpa alasan Galactomyces ini disebut \"holygrail\", bahan aktif satu ini memiliki manfaat yang sangat beragam, cocok untuk digunakan untuk segala usia, dan cocok untuk tipe wajah apapun (normal, berminyak, dan kering). Kulit sensitif? Aman banget, karena bahan yang kita gunakan adalah alami/natural. Tidak menggunakan alkohol denaturasi, paraben, silikon, dan parfum. Adapun manfaat yang dimiliki adalah:\r\n1) Mampu melembabkan (moisturize) kulit wajah dengan menghidrasi secara maksimal. Seperti yang kita ketahui, kulit kering merupakan sumber dari bertambahnya kerutan dan jerawat pada wajah.\r\n2)', 1, 1, '2021-01-27 15:33:25', 1, '2021-01-27 15:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` text,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `product_id`, `user_id`, `review`, `rating`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 10001, 'ini emg produk terbaik dah wkwkwk', 3, 1, 1, '2020-09-03 19:12:52', 1, '2020-09-03 19:12:52'),
(2, 2, 10005, 'wah mantap dah harga terjangkau tapi bikin kulit glowing kayak perawatan ratusan juta', 4, 1, 1, '2020-09-08 21:14:17', 1, '2020-09-08 21:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `segment`
--

CREATE TABLE `segment` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `attr1` text,
  `content` text,
  `seq` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `segment_id` int(11) NOT NULL DEFAULT '-1',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `segment`
--

INSERT INTO `segment` (`id`, `title`, `attr1`, `content`, `seq`, `image`, `segment_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 'Kenapa Voca', NULL, '', 0, NULL, -1, 1, 1, '2020-09-08 20:47:25', 1, '2020-09-09 15:50:32'),
(3, 'Cara Berbelanja', NULL, 'Untuk kemudahan dan kemnyamanan pelanggan, kami menawarkan tiga opsi cara berbelanja yaitu melalui aplikasi Tokopedia dan Shopee di mana kami berpartisipasi dalam program bebas ongkir. Anda dapat juga menghubungi kami melalui WhatsApp dan bertransaksi dengan transfer manual. Silakan klik tombol di bawah dan selamat berbelanja !!!', 0, NULL, -1, 1, 1, '2020-09-08 20:57:25', 1, '2020-09-08 20:57:25'),
(4, 'AMAN DAN TERPERCAYA', NULL, 'Terdaftar dan teregistrasi di BPOM Indonesia dengan nomor registrasi NA2134567. HSA Singapura, dan tersertifikasi dari Daebong Korea', 1, 'AMAN DAN TERPERCAYA-574-005915202525f589954bc1fa1.61692292.jpg', 1, 0, 1, '2020-09-09 15:59:00', 1, '2020-09-09 16:00:03'),
(5, 'AMAN DAN TERPERCAYA', '', 'Terdaftar dan teregistrasi di BPOM Indonesia dengan nomor registrasi NA2134567. HSA Singapura, dan tersertifikasi dari Daebong Korea', 1, 'AMAN DAN TERPERCAYA-392-385915202525f58997ae716c9.83527435.jpg', 2, 1, 1, '2020-09-09 15:59:38', 1, '2021-01-25 19:17:24'),
(6, 'SERUM KONSENTRAT', NULL, 'Setiap mililieter serum VOCA sama sekali tidak mengandung air/aqua. Serum VOCA mengandung konsentrat bahan aktif yang dapat merawat kulit secara maksimal', 1, 'SERUM KONSENTRAT-914-100316202525f589a4e80de63.65575905.jpeg', 2, 1, 1, '2020-09-09 16:03:10', 1, '2020-09-09 16:03:10'),
(7, 'COCOK UNTUK SEMUA JENIS KULIT, TERMASUK KULIT SENSITIF', NULL, 'Serum VOCA dapat digunakan untuk segala macam tipe kulit karena tidak mengandung alkohol, silikon, paraben, parfum, mineral oil dan juga tidak melakukan animal -test', 1, 'COCOK UNTUK SEMUA JENIS KULIT, TERMASUK KULIT SENSITIF-108-430416202525f589aab95b916.34699558.jpg', 2, 1, 1, '2020-09-09 16:04:43', 1, '2020-09-09 16:14:09'),
(8, 'TEKSTUR YANG TIDAK LENGKET DAN CEPAT MENYERAP', NULL, '', 1, 'TEKSTUR YANG TIDAK LENGKET DAN CEPAT MENYERAP-674-030616202525f589afb4bc110.96425076.jpg', 2, 1, 1, '2020-09-09 16:06:03', 1, '2020-09-09 16:06:03'),
(9, 'PROMO SPESIAL', '2021-10-01', 'Dapatkan promo diskon 10% untuk setiap pembelian serum Voca 1 botol dan diskon 20% untuk setiap pembelian serum Voca 2 botol.\r\nHanya berlaku selama 1 - 30 September 2020', 0, NULL, -1, 1, 1, '2020-09-09 16:21:04', 1, '2021-01-25 19:23:22'),
(10, 'Tentang Voca', '', 'Silakan diisi apapun yang mau kamu kasi tau tentang Voca Beauty Store.\r\nTolong jangan diganti untuk title nya ya karena bisa buat error template nya\r\n\r\n\r\nCukup konten aja yang km ubah', NULL, NULL, -1, 1, 1, '2020-09-19 21:41:33', 1, '2020-09-19 21:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `unique_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encrypted_password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_password` int(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '-1',
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '-1',
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `token` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT '1970-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `unique_id`, `username`, `name`, `email`, `photo`, `encrypted_password`, `salt`, `auth_key`, `updated_password`, `created_at`, `created_by`, `updated_at`, `updated_by`, `gender`, `token`, `password_reset_token`, `phone`, `address`, `birth_date`) VALUES
(10001, 0, '291008191845d1db475e58c86.31984671', 'tanardi', 'ardi tan', 'valouriee22@yopmail.com', NULL, 'mb6NE7G9Wzk4ghwhRQDB4V5J1EkzNjU4YjkzNmNk', '3658b936cd', NULL, 0, '2019-07-04 15:10:30', -1, '2020-08-27 13:14:09', 1, 'Male', NULL, NULL, NULL, NULL, '1970-01-01'),
(10002, 0, '320413202395f474cf07ea063.42341573', 'tanardi', 'ardi tan', 'tanardi@yopmail.com', 'ardi tan-332-320413202395f474cf07ea063.42341573.jpg', 'pKPtsFEOQcowr1/lZsA/pcHZg+xiMjQ4YzQwNjJm', 'b248c4062f', NULL, 0, '2020-08-27 13:04:32', 1, '2020-08-27 13:09:48', 1, 'Male', NULL, NULL, '082237567095', 'darmo permai utara', '1995-02-15'),
(10003, 0, '590413202395f474d0b9dde20.49371186', 'tanardi', 'ardi tan', 'tanardi@yopmail.com', 'ardi tan-472-590413202395f474d0b9dde20.49371186.jpg', 'dSuyXPqxd2IDOwPUUiRw3q1FtbJjYjZhMTI1ODk2', 'cb6a125896', NULL, 0, '2020-08-27 13:04:59', 1, '2020-08-27 13:09:52', 1, 'Male', NULL, NULL, '082237567095', 'darmo permai utara', '1995-02-15'),
(10004, 0, '451013202395f474e6595e792.50560915', 'stevens', 'steven wijaya', 'stevens@yomail.com', 'steven wijaya-736-451013202395f474e6595e792.50560915.jpg', '0U+w0lIwuX2FFj6T/Zfo8//rDfs4YjFiMDdjNmI1', '8b1b07c6b5', NULL, 0, '2020-08-27 13:10:45', 1, '2020-08-27 13:14:12', 1, 'Male', NULL, NULL, '08123456789', 'dps', '2008-06-03'),
(10005, 1, '481413202395f474f58f21dd4.52361709', 'steven', 'steven wij', 'stevens@abc.com', 'steven wij-240-481413202395f474f58f21dd4.52361709.jpg', 'h1+IIvVOtBifHxUtl2ejaxV7fRhmNDYwNGI2Mjgw', 'f4604b6280', NULL, 0, '2020-08-27 13:14:48', 1, '2021-01-25 19:04:24', 1, 'Female', NULL, NULL, '08221325468', 'dpu', '2009-02-17'),
(10006, 0, '481413202395f474f58f21dd4.52361702', 'sieger', 'sieger pu', 'sieger@example.com', 'sieger puols-787-.png', 'r2Xdq/V4OoZxlDTw4V5D+8wUfIIyMzdjZjUyNzNi', '237cf5273b', 'R4ifCttjeyqcLYl4riUZaopSSS16Zxf8', 0, '2020-08-27 20:23:41', -1, '2021-01-27 15:51:55', 1, 'Male', NULL, NULL, '0811234567', '', '1980-08-13'),
(10007, 1, '40511521266011299c7e5617.03301102', 'jenniferps', 'Jennifer Pieter', '-', 'Jennifer Pieter-245-40511521266011299c7e5617.03301102.jpg', '56j5pCXFBX38Sa58TI71kpYoqAdhOTRlOGRhODE3', 'a94e8da817', NULL, 0, '2021-01-27 15:51:40', 1, '2021-01-27 19:14:44', 1, 'Female', NULL, NULL, '08123456789', '-', '2021-01-05'),
(10008, 1, '425715212660112b06824252.51881879', 'chyntiaiswantoro', 'Chyntia Iswantoro', '', 'Chyntia Iswantoro-251-425715212660112b06824252.51881879.jpg', '3r6pU89Rua2ffW1MuxUhgOBs/9oyMmY1YTkyZGZj', '22f5a92dfc', NULL, 0, '2021-01-27 15:57:42', 1, '2021-01-27 16:01:43', 1, 'Female', NULL, NULL, '081330572477', '', NULL),
(10009, 1, '120716212660112d4032dbd6.24409687', 'stefunnywongso', 'Ribka Stefanie Wongso', '', 'Ribka Stefanie Wongso-295-120716212660112d4032dbd6.24409687.jpg', 'BGvOMmG51alD1AG7TLvv3t6qBzE5OTZmYjNhNTQ1', '996fb3a545', NULL, 0, '2021-01-27 16:07:10', 1, '2021-01-27 16:07:12', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10010, 1, '370916212660112dd1f13e02.56662303', 'feliciachristine', 'Felicia Christine', '', 'Felicia Christine-582-370916212660112dd1f13e02.56662303.jpg', 'o05Gm2RHtaC5fC9HwoBJZsUQgso3OWJmNTk2MTY2', '79bf596166', NULL, 0, '2021-01-27 16:09:36', 1, '2021-01-27 16:09:38', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10011, 1, '1031172126601140eee09cd2.74961549', 'olyviaeven', 'Olyvia Even', '', 'Olyvia Even-867-1031172126601140eee09cd2.74961549.jpg', 'rhUJMfm/N1zGxPLfcfaGe0gFtV81MGU1ZjdkODVh', '50e5f7d85a', NULL, 0, '2021-01-27 17:31:09', 1, '2021-01-27 17:31:43', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10012, 1, '203317212660114170ddf081.32876121', 'christineanggraeni', 'Christine Anggraeni', '', 'Christine Anggraeni-771-203317212660114170ddf081.32876121.jpg', 'TXIUvVnlGc/qU0mzW9T2hnLfef03NzA1OTk0NzFj', '770599471c', NULL, 0, '2021-01-27 17:33:19', 1, '2021-01-27 17:33:48', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10013, 1, '073617212660114217e060a7.75509041', 'febby', 'Febby', '', 'Febby-725-073617212660114217e060a7.75509041.jpg', '0t1UW24pHxGAQbGlgsUP/sRVQOs0YzgyZDZlMWQx', '4c82d6e1d1', NULL, 0, '2021-01-27 17:36:07', 1, '2021-01-27 17:36:07', 1, 'Female', NULL, NULL, '085733220322', '', '2021-01-01'),
(10014, 1, '2137172126601142618a97b6.84251057', 'lily', 'Lily', '', 'Lily-873-2137172126601142618a97b6.84251057.jpg', 'MPMypjqHlJN4JfsEondqcW6kxwI3N2E3YjlmZWE2', '77a7b9fea6', NULL, 0, '2021-01-27 17:37:21', 1, '2021-01-27 17:37:21', 1, 'Female', NULL, NULL, '083849963780', '', '2021-01-01'),
(10015, 1, '3938172126601142afed7035.95504134', 'Prita', 'Prita', '', 'Prita-662-3938172126601142afed7035.95504134.jpg', 'esQ60jX84RKgPcrHfLz1QPt+t/c2NDVhYWJhYjk2', '645aabab96', NULL, 0, '2021-01-27 17:38:38', 1, '2021-01-27 17:38:40', 1, 'Female', NULL, NULL, '081327062331', '', '2021-01-01'),
(10016, 1, '274117212660114357f23f80.28559624', 'danulagi', 'Zakarias Danujatmiko', '', 'Zakarias Danujatmiko-145-274117212660114357f23f80.28559624.jpg', 'EKB80XTwMELHDfpehpdJeKq/wZg0ZTc3NjU4MWYy', '4e776581f2', NULL, 0, '2021-01-27 17:41:27', 1, '2021-01-27 17:41:28', 1, 'Male', NULL, NULL, '082233206892', '', '2021-01-01'),
(10017, 1, '1643172126601143c4331303.31270745', 'faradhitaw', 'Faradhita Widiastri', '', 'Faradhita Widiastri-393-1643172126601143c4331303.31270745.jpg', '+v8rFEC6dfLV+iHMaH4bwxw1y/tlMjZhMjY2YzIz', 'e26a266c23', NULL, 0, '2021-01-27 17:43:16', 1, '2021-01-27 17:43:16', 1, 'Female', NULL, NULL, '08179342599', '', '2021-01-01'),
(10018, 1, '3651172126601145b8c8c0d9.46965710', 'jeniferyoan', 'Jenifer Yoan', '', 'Jenifer Yoan-108-3651172126601145b8c8c0d9.46965710.jpg', 'jIG44SwFjqYE3zgS9Oxc7Y0LvHo5ZTRjNjNjY2Ni', '9e4c63cccb', NULL, 0, '2021-01-27 17:51:35', 1, '2021-01-27 17:51:37', 1, 'Female', NULL, NULL, '081903025755', 'Kantor PP Properti Suramadu, Jl. Tambak Wedi Kav. 2 no. 27-28, Kenjeran, Surabaya 60126', '2021-01-01'),
(10019, 1, '3953172126601146335fa5e8.47680453', 'amelinda93', 'Amelinda Tanumihardja', '', 'Amelinda Tanumihardja-240-3953172126601146335fa5e8.47680453.jpg', 'd+dy2ZYJDeY+BMfloTDDqnoqaDg1ZDdmMDdhNjQ0', '5d7f07a644', NULL, 0, '2021-01-27 17:53:39', 1, '2021-01-27 18:41:29', 1, 'Female', NULL, NULL, '', 'Jl. Kedungdoro 7 no. 16, Surabaya 60251', '2021-01-01'),
(10020, 1, '375717212660114721c09445.97228816', 'zulfaaziz', 'Zulfa Aziz', '', 'Zulfa Aziz-337-375717212660114721c09445.97228816.jpg', 'HsghW9bipuuCy6kv004dDrYAitRlMmIxNThlNjY2', 'e2b158e666', NULL, 0, '2021-01-27 17:57:37', 1, '2021-01-27 18:46:10', 1, 'Female', NULL, NULL, '082247044040', 'Jl. Pattimura 3, Lombok Timur, Nusa Tenggara Barat 83611', '2021-01-01'),
(10021, 1, '07031821266011486b25aa04.89727674', 'evanatalia', 'Eva Natalia', '', 'Eva Natalia-864-07031821266011486b25aa04.89727674.jpg', 'K0xw4bcwiNAGZSpq5dUKNaSRMKswZWVmODhiMmMz', '0eef88b2c3', NULL, 0, '2021-01-27 18:03:07', 1, '2021-01-27 18:15:03', 1, 'Female', NULL, NULL, '085646792889', 'Jl. Panglima Sudirman no. 6, Magetan 63318', '2021-01-01'),
(10022, 1, '571018212660114a41c48c76.87407452', 'euclynel', 'Eunike Lawrence', '', 'Eunike Lawrence-106-571018212660114a41c48c76.87407452.jpg', 'FEzZ3sdZslSHw9r8QWyuikDs6qdlYWM0YzNmZGNl', 'eac4c3fdce', NULL, 0, '2021-01-27 18:10:57', 1, '2021-01-27 18:10:57', 1, 'Female', NULL, NULL, '08112659600', '', '1994-11-05'),
(10023, 1, '281318212660114ad8da6d75.49500173', 'ongleeing', 'Ong Lee Ing', '', 'Ong Lee Ing-582-281318212660114ad8da6d75.49500173.jpg', 'hjV+F/Ht6IDUQR5VCUc/iZLKsJM1NTlhYjliNzVl', '559ab9b75e', NULL, 0, '2021-01-27 18:13:28', 1, '2021-01-27 18:13:28', 1, 'Female', NULL, NULL, '081342632220', 'Jl. Dharmahusada Indah Timur vii no.11 blok L97, Mulyorejo, Surabaya 60115', NULL),
(10024, 1, '071818212660114befa7fdf3.74279822', 'erikamag0682', 'Erika', '', 'Erika-709-071818212660114befa7fdf3.74279822.jpg', 'J/CPigXBsEjOj7FUUtdsvXaE+dRlZTJlM2M3MzMx', 'ee2e3c7331', NULL, 0, '2021-01-27 18:18:07', 1, '2021-01-27 18:47:35', 1, 'Female', NULL, NULL, '08113423073', 'Jl. Raya Sukomanunggal Jaya 33A (sekolah Kristen Elyon), Surabaya 60178', '2021-01-01'),
(10025, 1, '362118212660114cc0a035e6.05326512', 'abaya_salma', 'Zaenab', '', 'Zaenab-711-362118212660114cc0a035e6.05326512.jpg', 'T7TDc0IZR62gGyX+d60WTl6xTQgyZDI1YjA4MjEy', '2d25b08212', NULL, 0, '2021-01-27 18:21:36', 1, '2021-01-27 18:48:38', 1, 'Female', NULL, NULL, '085881473494', 'Jl. KH Mas Mansyur no. 64 (Gowwe Parfume), Surabaya', '2021-01-01'),
(10026, 1, '232418212660114d67a312b2.50590843', 'theresialendy', 'Theresia Lendy', '', 'Theresia Lendy-557-232418212660114d67a312b2.50590843.jpg', 'olGIy72L+nPImaH2bRxX0OmLVakzYjI3YTI1MDA1', '3b27a25005', NULL, 0, '2021-01-27 18:24:23', 1, '2021-01-27 18:50:07', 1, 'Female', NULL, NULL, '082230076688', 'Jl. Karangrejo Sawah 5 no. 10, Surabaya 60243', '2021-01-01'),
(10027, 1, '252518212660114da51e4345.89248967', 'mellyanita', 'Amell', '', 'Amell-792-252518212660114da51e4345.89248967.jpg', 'JyBIhj/YLnIjLykdm8FCzpeJvL1jNTJmOWMwM2Ix', 'c52f9c03b1', NULL, 0, '2021-01-27 18:25:24', 1, '2021-01-27 18:51:00', 1, 'Female', NULL, NULL, '08111091295', 'Jl. Olahraga 1 gg hj liman no.61, Jakarta 13640', '2021-01-01'),
(10028, 1, '582618212660114e02a9f422.43972247', 'koojeri', 'Yonathan Jericko Wicaksana', '', 'Yonathan Jericko Wicaksana-316-582618212660114e02a9f422.43972247.jpg', 'X4XS8o55/5GEHEhxeSxEV/eyxv85ZjcyYWJlYjVl', '9f72abeb5e', NULL, 0, '2021-01-27 18:26:56', 1, '2021-01-27 18:26:59', 1, 'Male', NULL, NULL, '083854900717', '', '2021-01-01'),
(10029, 1, '332818212660114e61ab2839.05584630', 'ymwijaya', 'Yolanda', '', 'Yolanda-930-332818212660114e61ab2839.05584630.jpg', 'YIkLjWhPUE1ujFppU9OoFS3p5YZiZmU0Mjk0MDY0', 'bfe4294064', NULL, 0, '2021-01-27 18:28:33', 1, '2021-01-27 18:28:33', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10030, 1, '583118212660114f2e3c6555.05158423', 'kimhiuu', 'Sharon', '', 'Sharon-825-583118212660114f2e3c6555.05158423.jpg', 'ZHRbQga4QcJBNg0dG3Q4D1h2+rtmZjljNWRkN2Q5', 'ff9c5dd7d9', NULL, 0, '2021-01-27 18:31:57', 1, '2021-01-27 18:32:09', 1, 'Female', NULL, NULL, '081333001932', '', '2021-01-01'),
(10031, 1, '323318212660114f8cdab9b8.76663342', 'ekkypuspita', 'Ekky Puspita Sari', '', 'Ekky Puspita Sari-962-323318212660114f8cdab9b8.76663342.jpg', 'i7l62nCA2dbL3IA7rz2Lz+3nzRplNzAwMjM2MzAz', 'e700236303', NULL, 0, '2021-01-27 18:33:31', 1, '2021-01-27 18:51:51', 1, 'Female', NULL, NULL, '081249909019', 'Jl. Darmo Permai Utara I no. 42, Surabaya 60810', '2021-01-01'),
(10032, 1, '55351821266011501b1c07b2.80907862', 'meryhoni', 'Mery Honi', '', 'Mery Honi-339-55351821266011501b1c07b2.80907862.jpg', 'fRANbUxmQU2WSZ9w0IM2sxY2G91hMTliYjk4OGI1', 'a19bb988b5', NULL, 0, '2021-01-27 18:35:54', 1, '2021-01-27 18:35:56', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10033, 1, '093718212660115065605d33.98402664', 'janggercokro', 'Jangger Cokro', '', 'Jangger Cokro-958-093718212660115065605d33.98402664.jpg', '2gYKwdii0f6PJx3tpN2KnvU89F0yZjI5YTJkZWQ2', '2f29a2ded6', NULL, 0, '2021-01-27 18:37:09', 1, '2021-01-27 18:37:16', 1, 'Male', NULL, NULL, '088801757877', '', '2021-01-01'),
(10034, 1, '3839182126601150faac5a78.37849399', 'lusianam07', 'Lusiana', '', 'Lusiana-215-3839182126601150faac5a78.37849399.jpg', 'A5rQUSJ6skVDi53oeFEZjSpBymc2OGVhZjBjMjIw', '68eaf0c220', NULL, 0, '2021-01-27 18:39:38', 1, '2021-01-27 18:44:54', 1, 'Female', NULL, NULL, '08114490787', 'Jl. Sulawesi no. 145/155, Toko Tunas Harapan tukang gigi, Makassar 90169', '2021-01-01'),
(10035, 1, '145418212660115466d4a3a4.31340913', 'shindysva', 'Shindy Virgin Aprillia', '', 'Shindy Virgin Aprillia-379-145418212660115466d4a3a4.31340913.jpg', 'B2OExxCi+yYXY/yoMJ1Ofz0Iz40wMDUzOWY1Njlk', '00539f569d', NULL, 0, '2021-01-27 18:54:14', 1, '2021-01-27 18:54:14', 1, 'Female', NULL, NULL, '082136624434', 'Jl. Letda Sucipto 211, Tuban 62319', '2021-01-01'),
(10036, 1, '1756182126601154e13d98a9.84556898', 'melindanoviantii', 'Melinda Novianti', '', 'Melinda Novianti-663-1756182126601154e13d98a9.84556898.jpg', 'OarOosLLRW4beASTYcVZO5yvH0c1MjVhMjY1ZWQ0', '525a265ed4', NULL, 0, '2021-01-27 18:56:17', 1, '2021-01-27 18:56:17', 1, 'Female', NULL, NULL, '082142835837', 'Jl. Embong Malang no. 30a, Surabaya 60275', '2021-01-01'),
(10037, 1, '3359182126601155a53bfb60.21350321', 'fanny', 'Fanny', '', 'Fanny-827-3359182126601155a53bfb60.21350321.jpg', 'MBMOF9tjYy2pFGPtQw3jzyqfxEE5NjdlZDcyOWNl', '967ed729ce', NULL, 0, '2021-01-27 18:59:33', 1, '2021-01-27 18:59:33', 1, 'Female', NULL, NULL, '081331787899', 'Jl. Pandegiling no.181, Surabaya', '2021-01-01'),
(10038, 1, '290119212660115619275ab4.44004820', 'claudialvina', 'Claudia Alvina', '', 'Claudia Alvina-493-290119212660115619275ab4.44004820.jpg', 'P+xTRBZZvJDNCbqonBdotFKueEoyMTc4NmY5NDU1', '21786f9455', NULL, 0, '2021-01-27 19:01:28', 1, '2021-01-27 19:01:29', 1, 'Female', NULL, NULL, '0818335251', 'Jl. Bukit Pakis Timur I blok M-17, Surabaya 60225', '2021-01-01'),
(10039, 1, '400219212660115660a24073.80602832', 'fernaldileksono', 'Fernaldi Leksono', '', 'Fernaldi Leksono-512-400219212660115660a24073.80602832.jpg', 'Dk0UKfKmy8UoIdWFlXVdg9QrHkwzNjliOGM2MmFj', '369b8c62ac', NULL, 0, '2021-01-27 19:02:39', 1, '2021-01-27 19:02:40', 1, 'Male', NULL, NULL, '', '', '2021-01-01'),
(10040, 1, '290319212660115691812ac4.74538403', 'bernadettemalita', 'Malita Setyawan', '', 'Malita Setyawan-800-290319212660115691812ac4.74538403.jpg', 'sqDlhyjr1aaUp8xbl3tuNIkXvyw0NmRiZTY5OGVj', '46dbe698ec', NULL, 0, '2021-01-27 19:03:25', 1, '2021-01-27 19:03:49', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10041, 1, '56051921266011572499a920.28627456', 'shreyacouture', 'Rahayu Florensia', '', 'Rahayu Florensia-198-56051921266011572499a920.28627456.jpg', 'S4Vmk4tiEHIK3gGvJYdHWtUI3CphNjI2MDZhZTVm', 'a62606ae5f', NULL, 0, '2021-01-27 19:05:56', 1, '2021-01-27 19:05:56', 1, 'Female', NULL, NULL, '082173667979', 'Jl. Halmahera 78, Malang 65117', '2021-01-01'),
(10042, 1, '2608192126601157ba8f71b5.05874028', 'salma', 'Salma', '', 'Salma-840-2608192126601157ba8f71b5.05874028.jpg', 'sV/QSYKCzjpANeZDW5B4btsRDSk2MmY2ZTYzNTQ2', '62f6e63546', NULL, 0, '2021-01-27 19:08:26', 1, '2021-01-27 19:08:26', 1, 'Female', NULL, NULL, '082218888841', 'Jl. Selamet Riyadi, Perum Pesona Regency blok A-3, Jember', '2021-01-01'),
(10043, 1, '5313192126601159016b9c98.71298774', 'chintyanoo', 'Cintya', '', 'Cintya-216-5313192126601159016b9c98.71298774.jpg', '2cXj6jL88NYaqR1aY8v6Jbp5ppQ5ODQ4MjBhYzMz', '984820ac33', NULL, 0, '2021-01-27 19:13:53', 1, '2021-01-27 19:13:53', 1, 'Female', NULL, NULL, '083872624381', 'Gd. Cementaid lt. 3, Jl. Raya Bekasi KM17, Jakarta 13930', '2021-01-01'),
(10044, 1, '36331821276012a110c76913.52553293', 'riyaningrum', 'Riyaningrum Wahyunissa', '', 'Riyaningrum Wahyunissa-251-36331821276012a110c76913.52553293.jpg', 'B7k7Tc8pkavm84C3Auzt1vOMq+JhMDU3MTFlMTU5', 'a05711e159', NULL, 0, '2021-01-28 18:33:36', 1, '2021-01-28 19:25:24', 1, 'Female', NULL, NULL, '081332825062', 'Goldenwood D50, Citrgrand Tembalang, 50272', '2021-01-01'),
(10045, 1, '05351821276012a169174290.77842227', 'rosayuditta', 'Rosa Yuditta', '', 'Rosa Yuditta-339-05351821276012a169174290.77842227.jpg', 'YP/+E7bXe/FWq5eHp/wYuEoT74hlZDFhMzRmOTA3', 'ed1a34f907', NULL, 0, '2021-01-28 18:35:03', 1, '2021-01-28 18:35:05', 1, 'Female', NULL, NULL, '081331881835', '', '2021-01-01'),
(10046, 1, '20361821276012a1b46350f5.55860890', 'lollaleopatria', 'Lolla Leopatria', '', 'Lolla Leopatria-992-20361821276012a1b46350f5.55860890.jpg', 'C4xTQ0fN4Sc+/2ZRd2lI/masTPdiMTgxMzc4MjAz', 'b181378203', NULL, 0, '2021-01-28 18:36:19', 1, '2021-01-28 19:34:05', 1, 'Female', NULL, NULL, '081330366388', 'Jl. Darmo Harapan Utara V Blok EN19, Surabaya 60187', '2021-01-01'),
(10047, 1, '50371821276012a20e72bbc1.91949332', 'melmay_17', 'Meliza Maya', '', 'Meliza Maya-310-50371821276012a20e72bbc1.91949332.jpg', 'zJ/+3SpgbHxf6CcBjw+YRX6GxRo4YzRlNTIyZWU4', '8c4e522ee8', NULL, 0, '2021-01-28 18:37:50', 1, '2021-01-28 18:37:50', 1, 'Female', NULL, NULL, '081233408011', 'Royal Residence B1/81, Surabaya 60227', '1994-05-17'),
(10048, 1, '22391821276012a26ad0d936.77293398', 'nnensiadc', 'Nandesha Nensia', '', 'Nandesha Nensia-880-22391821276012a26ad0d936.77293398.jpg', 'VIVeWqZPBiRJw9RLz6XprBxJSCBjNjhmNmM0NWIy', 'c68f6c45b2', NULL, 0, '2021-01-28 18:39:22', 1, '2021-01-28 18:39:22', 1, 'Female', NULL, NULL, '082225552770', '', '2021-01-01'),
(10049, 1, '04411821276012a2d0be5bd2.75668499', 'noviani.cahyadi', 'Noviani Cahyadi', '', 'Noviani Cahyadi-759-04411821276012a2d0be5bd2.75668499.jpg', 'X6E3xOlPl45rwDXxSwHIQaGfB04wMDYzMzgzMmZj', '00633832fc', NULL, 0, '2021-01-28 18:41:04', 1, '2021-01-28 19:26:16', 1, 'Female', NULL, NULL, '081330681158', 'Jl. Kaliwaron no. 118, Surabaya 60285', '2021-01-01'),
(10050, 1, '11431821276012a34f980a14.48039985', 'stephanienovina', 'Stephanie Novina', '', 'Stephanie Novina-322-11431821276012a34f980a14.48039985.jpg', 'eIOl8CuCy5bo6CiG9dDfUQJrujViYjM0MDM0YTNj', 'bb34034a3c', NULL, 0, '2021-01-28 18:43:11', 1, '2021-01-28 18:43:11', 1, 'Female', NULL, NULL, '081390282334', 'Jl. Mulyosari Tengah I no. 14 (Kamar B8), Surabaya 60112', '2021-01-01'),
(10051, 1, '49431821276012a3758bdea0.11636902', 'joanlvr', 'Joan Olivier', '', 'Joan Olivier-236-49431821276012a3758bdea0.11636902.jpg', 'dhkOT4Worv9Gm44+asehHd+J6TI3NTVhZDIxOTA5', '755ad21909', NULL, 0, '2021-01-28 18:43:49', 1, '2021-01-28 18:43:49', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10052, 1, '25451821276012a3d563fef7.30627896', 'indiceleb', 'Resa', '', 'Resa-569-25451821276012a3d563fef7.30627896.jpg', 'TjqDA6FxLQ8yrj8rSaC0f/gjvGZiZjc5Y2YwZjAw', 'bf79cf0f00', NULL, 0, '2021-01-28 18:45:25', 1, '2021-01-28 18:45:25', 1, 'Female', NULL, NULL, '0811969797', 'Jl. AW Syahrani gg 1 blok D-16, Samarinda 75131', '2021-01-01'),
(10053, 1, '49461821276012a4299b6148.20568768', 'irmaprisa', 'Irma Prima Sari', '', 'Irma Prima Sari-274-49461821276012a4299b6148.20568768.jpg', 'QrAa9tg9vUHu5wXrC0wYzFqsHFYwZTI4MjRhOWMz', '0e2824a9c3', NULL, 0, '2021-01-28 18:46:49', 1, '2021-01-28 18:46:49', 1, 'Female', NULL, NULL, '081368999474', 'Jl. Sentot Alibasya no. 29, Bandar Lampung 35131', '2021-01-01'),
(10054, 1, '24491821276012a4c440c872.86654533', 'umma1989', 'Lilisumara Harianti', '', 'Lilisumara Harianti-960-24491821276012a4c440c872.86654533.jpg', 'j0P3GkHvbhAQoC285sOUMkFiSIcyMDBiMTA2NTQ2', '200b106546', NULL, 0, '2021-01-28 18:49:22', 1, '2021-01-28 18:49:25', 1, 'Female', NULL, NULL, '0895613264540', 'Jl. Karya Jaya Ujung, Komplek Griya Delta Indah no. 2B, Medan 20142', '2021-01-01'),
(10055, 1, '02511821276012a526e07245.08785094', 'innodini', 'AB Dini', '', 'AB Dini-624-02511821276012a526e07245.08785094.jpg', '+wQLyEzyOGkuxMUqq5h5dsjgT9M5MTgzZGI2MDhj', '9183db608c', NULL, 0, '2021-01-28 18:51:02', 1, '2021-01-28 18:51:02', 1, 'Female', NULL, NULL, '08112715250', 'Gd. Kompas Gramedia, Jl. Menteri Supeno no. 30, Semarang 50241', '2021-01-01'),
(10056, 1, '31521821276012a57faa9ba7.51271672', 'jeslyntheo', 'Jeslyn Lim', '', 'Jeslyn Lim-969-31521821276012a57faa9ba7.51271672.jpg', 'UffoNY9imEtejWFkcXVq/Dw7zxgwNjcwZjc5ZGY2', '0670f79df6', NULL, 0, '2021-01-28 18:52:31', 1, '2021-01-28 18:52:45', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10057, 1, '52541821276012a60cd485a7.66267701', 'reyvalinameylani', 'Reyvalina Meylani', '', 'Reyvalina Meylani-702-52541821276012a60cd485a7.66267701.jpg', 'iYx9dIZt3rwEJo/mfzkLpq3x7J02YTVhMzIxMWQx', '6a5a3211d1', NULL, 0, '2021-01-28 18:54:52', 1, '2021-01-28 18:54:52', 1, 'Female', NULL, NULL, '08119236336', 'Harvest Town House, Jl. Gandul Raya B1, Depok 16512', '2021-01-01'),
(10058, 1, '21561821276012a66514ec84.13072804', 'majujayaplastik', 'Maju Jaya Plastik', '', 'Maju Jaya Plastik-721-21561821276012a66514ec84.13072804.jpg', '+YtcsYDsefU9KnefvOqfclIOGgZmMGU5MzBkMWUy', 'f0e930d1e2', NULL, 0, '2021-01-28 18:56:20', 1, '2021-01-28 19:32:21', 1, 'Female', NULL, NULL, '081927788817', 'Jl. Manyar Kartika III no. 30, Surabaya 60118', '2021-01-01'),
(10059, 1, '36581821276012a6ec2a7242.59314487', 'meliawati', 'Meliawati', '', 'Meliawati-685-36581821276012a6ec2a7242.59314487.jpg', '+JhEZhxOiqTbySPV0X+wNyp2dks4MDczMjE3MDkw', '8073217090', NULL, 0, '2021-01-28 18:58:36', 1, '2021-01-28 19:31:30', 1, 'Female', NULL, NULL, '081231394911', 'Jl. Soekarno Hatta no. 17, Pasuruan 67134', '2021-01-01'),
(10060, 1, '44591821276012a7305ea7a5.28362828', 'lannytan', 'Lanny Tan', '', 'Lanny Tan-424-44591821276012a7305ea7a5.28362828.jpg', 'ECUtzMcjiSL5bxJHQ3JBZQ3ToOAwYmMxYzY4YzVk', '0bc1c68c5d', NULL, 0, '2021-01-28 18:59:44', 1, '2021-01-28 18:59:44', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10061, 1, '15031921276012a803d8dc89.17120369', 'ataquick', 'Felacoste', '', 'Felacoste-924-15031921276012a803d8dc89.17120369.jpg', 'T2W2z8UYK+jfSH33Py2thtwj7pVjYmZhNzI4MWNh', 'cbfa7281ca', NULL, 0, '2021-01-28 19:03:15', 1, '2021-01-28 19:03:15', 1, 'Female', NULL, NULL, '081212317888', 'Perumahan Citra Permai C10, Surabaya 60188', '2021-01-01'),
(10062, 1, '48031921276012a8240a6275.01427465', 'bintangmas', 'Bintang Mas', '', 'Bintang Mas-282-48031921276012a8240a6275.01427465.jpg', '8/SP4+CndrS7zBXVLH5Q1M+E9f05ODNjNjFmNTVl', '983c61f55e', NULL, 0, '2021-01-28 19:03:47', 1, '2021-01-28 19:03:48', 1, 'Female', NULL, NULL, '', '', '2021-01-01'),
(10063, 1, '40041921276012a85823c716.86259487', 'vonizuliana', 'Voni Zuliana', '', 'Voni Zuliana-257-40041921276012a85823c716.86259487.jpg', 'VddsvgYjLUv6Ky9j7kUXfG+s5y45ZDU5NTZkYzY4', '9d5956dc68', NULL, 0, '2021-01-28 19:04:38', 1, '2021-01-28 19:27:10', 1, 'Female', NULL, NULL, '082112207379', 'Jl. Tupai no. 4, Pandau Hulu II, Medan 20211', '2021-01-01'),
(10064, 1, '22061921276012a8beeaa799.43820607', 'anggrenigunawan', 'Anggreni Gunawan', '', 'Anggreni Gunawan-912-22061921276012a8beeaa799.43820607.jpg', 'ytSCtlqugPezcp/aSoy6oC7YNWA5MWY0MDViOTA2', '91f405b906', NULL, 0, '2021-01-28 19:06:22', 1, '2021-01-28 19:24:50', 1, 'Female', NULL, NULL, '08123519186', 'Royal Residence B1/29, Surabaya 60227', '2021-01-01'),
(10065, 1, '09081921276012a9299740b3.11843722', 'nanaalwan', 'Nana Alwan', '', 'Nana Alwan-957-09081921276012a9299740b3.11843722.jpg', 'QkCcuWVZfXb7iz1OsbdMLULy5mY3OTg2ZDk4NjM3', '7986d98637', NULL, 0, '2021-01-28 19:08:09', 1, '2021-01-28 19:08:09', 1, 'Female', NULL, NULL, '081318919480', 'Komp Silah Hills, Jl. Warung Silah Kav 12 blok B2, Jakarta Selatan 12630', '2021-01-01'),
(10066, 1, '41081921276012a9491e3d27.15698747', 'shintakusumasari', 'Shinta Kusumasari', '', 'Shinta Kusumasari-1000-41081921276012a9491e3d27.15698747.jpg', '7OJbnkKk5FcnpyR9yi4yvLe+XVoyZGU3NTJkMWQ5', '2de752d1d9', NULL, 0, '2021-01-28 19:08:40', 1, '2021-01-28 19:23:58', 1, 'Female', NULL, NULL, '085743702465', 'PT. Ajinomoto Indonesia - IT Dept., Jl. Laksda Yos Sudarso Kav 77-78, 14350', '2021-01-01'),
(10067, 1, '55111921276012aa0b5b03c5.49437697', 'elsyelissan', 'Elsye Lissan', '', 'Elsye Lissan-273-55111921276012aa0b5b03c5.49437697.jpg', 'wSxoUah62M/8/eWtTEFNI0Kf+TFhZWZjZmJjNjRk', 'aefcfbc64d', NULL, 0, '2021-01-28 19:11:55', 1, '2021-01-28 19:11:55', 1, 'Female', NULL, NULL, '087888999068', '', '2021-01-01'),
(10068, 1, '34141921276012aaaaa9a875.20028015', 'ica.aisyah1', 'Ica Aisyah', '', 'Ica Aisyah-431-34141921276012aaaaa9a875.20028015.jpg', 'C2/xRaBTBUyf2RLy8ZmZuZDhjp9kOThmODExY2Fi', 'd98f811cab', NULL, 0, '2021-01-28 19:14:34', 1, '2021-01-28 19:14:34', 1, 'Female', NULL, NULL, '081223633004', 'Pondok Pandansari 2, Jl. Pandansari II no. 109, Cirebon 45153', '2021-01-01'),
(10069, 1, '57181921276012abb1bca807.14726767', 'metty01', 'Metty', '', 'Metty-337-57181921276012abb1bca807.14726767.jpg', 'IhpdwHg6HbEm+K0PNfeJWjBcAaBiZDk5MWRhNzJm', 'bd991da72f', NULL, 0, '2021-01-28 19:18:57', 1, '2021-01-28 19:18:59', 1, 'Female', NULL, NULL, '08176449013', 'Rawabambu Jl. Buntu RT08/16, lantai 2 no.8, Bekasi 17124', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users_points`
--

CREATE TABLE `users_points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `source` int(11) DEFAULT '0',
  `amount` int(11) NOT NULL,
  `transaction_date` date NOT NULL DEFAULT '2020-09-24',
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_points`
--

INSERT INTO `users_points` (`id`, `user_id`, `points`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `source`, `amount`, `transaction_date`, `notes`) VALUES
(1, 10005, 12, 1, 1, '2020-09-03 19:17:31', 1, '2020-09-24 21:22:47', 0, 6000, '2020-09-24', ''),
(2, 10006, 32, 0, 1, '2020-09-03 19:17:55', 1, '2021-01-27 19:15:39', 0, 0, '2020-07-13', ''),
(3, 10005, 22, 1, 1, '2020-09-03 19:18:02', 1, '2020-09-03 19:19:05', 0, 0, '2020-09-24', NULL),
(4, 10006, 10, 0, 1, '2020-09-03 19:18:07', 1, '2021-01-27 19:15:44', 1, 0, '2020-09-24', ''),
(5, 10006, 16, 0, 1, '2021-01-25 19:08:56', 1, '2021-01-27 19:15:48', 1, 250000, '2021-01-25', 'beli ginseng'),
(6, 10006, -20, 0, 1, '2021-01-25 19:10:40', 1, '2021-01-27 19:15:52', 0, 0, '2021-01-25', 'tukar poin apalah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Product_un` (`unique_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_review_FK` (`user_id`),
  ADD KEY `product_review_FK_1` (`product_id`);

--
-- Indexes for table `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `segment_FK` (`segment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users_points`
--
ALTER TABLE `users_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_points_FK` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `segment`
--
ALTER TABLE `segment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10070;

--
-- AUTO_INCREMENT for table `users_points`
--
ALTER TABLE `users_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_review_FK_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `users_points`
--
ALTER TABLE `users_points`
  ADD CONSTRAINT `users_points_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
