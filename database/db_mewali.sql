-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 02.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

create database db_mewali;

use db_mewali;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `db_mewali`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `comments`
--
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `comments`
--
INSERT INTO
  `comments` (
    `id`,
    `post_id`,
    `nama_user`,
    `email_user`,
    `pesan`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    14,
    19,
    'Eka Putra',
    'eka@gmail.com',
    'Artikel yang sangat menarik',
    '2023-12-25 15:43:24',
    '2023-12-25 15:43:24'
  ),
  (
    15,
    21,
    'Eka',
    'eka@gmail.com',
    'Artikel yang keren',
    '2023-12-25 17:29:45',
    '2023-12-25 17:29:45'
  ),
  (
    16,
    28,
    'Budi Setiawan',
    'budi.setiawan@gmail.com',
    'Artikelnya sangat bermanfaat, terima kasih!',
    '2023-12-26 01:44:22',
    '2023-12-26 01:44:22'
  ),
  (
    17,
    29,
    'Rini Susanto',
    'rini.susanto@gmail.com',
    'Saya suka dengan tulisan ini, sangat jelas.',
    '2023-12-26 01:48:01',
    '2023-12-26 01:48:01'
  ),
  (
    18,
    28,
    'Faisal Rahman',
    'faisal.rahman@gmail.com',
    'Penjelasannya bagus, mudah dipahami.',
    '2023-12-26 01:48:40',
    '2023-12-26 01:48:40'
  ),
  (
    19,
    26,
    'Maya Pratiwi',
    'maya.pratiwi@email.com',
    'Terimakasih banyak, pengetahuan saya bertambah.',
    '2023-12-26 01:49:12',
    '2023-12-26 01:49:12'
  ),
  (
    20,
    12,
    'Agus Nugroho',
    'agus.nugroho@gmail.com',
    'Artikel yang bagus, saya sangat setuju.',
    '2023-12-26 01:50:01',
    '2023-12-26 01:50:01'
  ),
  (
    21,
    18,
    'Adi Wijaya',
    'adi.wijaya@gmail.com',
    'Saya ingin tahu lebih banyak tentang topik ini.',
    '2023-12-26 01:50:41',
    '2023-12-26 01:50:41'
  ),
  (
    22,
    24,
    'Andi Saputra',
    'andi.saputra@gmail.com',
    'Bagus sekali, membantu saya untuk memahami hal ini.',
    '2023-12-26 01:52:19',
    '2023-12-26 01:52:19'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `contacts`
--
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `migrations`
--
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `pakets`
--
CREATE TABLE `pakets` (
  `id` int(11) NOT NULL,
  `usaha_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `nama_paket` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `includes` text NOT NULL,
  `notes` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pakets`
--
INSERT INTO
  `pakets` (
    `id`,
    `usaha_id`,
    `category_id`,
    `nama_paket`,
    `slug`,
    `harga`,
    `deskripsi`,
    `includes`,
    `notes`,
    `image`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    4,
    2,
    'Pawiwahan | Silver Excecutive',
    'pawiwahan-silver-excecutive',
    47000000,
    'Nikmati moment penting di hidup anda hanya bersama orang-orang terdekat dan terkasih. Dengan TPB Signature Platinum Buffet, Bilingual MC & Entertainment Included, serta dekorasi bunga segar standar TPB, Paket Pernikahan Silver Executive memberikan fasilitas terlengkap untuk pesta yang mewah yang tak terlupakan bersama keluarga dan sahabat yang benar-benar anda sayangi. Paket nikah 40juta ini hanya bisa dapatkan di sini.',
    'Banten Lengkap Mebayuh Lima*;\r\n Banten Mepekoleman/Pregembal Dipuput Ratu Peranda*;\r\n Pengenter Acara Pawiwahan & Tukang Banten;\r\n Penggunaan Preparation Room untuk make up/istirahat pengantin;\r\n Kursi, Meja & Alat Prasmanan Standar Hotel Bintang;\r\n Dekorasi Gedung, Prasmanan, Kursi & Meja;\r\n Dekorasi Bunga Segar Standar;\r\n Sound System;\r\n Gratis Penggunaan LCD Projector khusus pilihan pesta indoor;\r\n Prasmanan dan Snack Natural untuk 100 tamu;\r\n 10 Hidangan Utama Prasmanan;\r\n Salad Bar, Soup Bar & Ice Sweet Corner;\r\n Free Flow Juice;\r\n Welcome Snack, Kopi, Teh, Jajan Bali untuk 100 tamu;\r\n Wedding Organizer;\r\n Bilingual MC Performance;\r\n Live Music Performance Akustik/Electone/Rindik Bali (pilih salah satu);\r\n Pelaminan full decor & Spot Foto Wedding;\r\n Welcome Table, Buku Tamu & Kotak Amplop;\r\n Areal Parkir luas & Nyaman;\r\n Ballroom Reception;\r\n Acara lepas burung merpati;\r\n Sparkle photo session (night reception only);\r\n Toilet;',
    '*Tidak termasuk sesari;\r\n*Apabila ingin membawa pemuput sendiri, dikenakan biaya tambahan;\r\n*Tambahan tamu 150rb/org;\r\n*Menyetorkan formulir syarat perkawinan dari kabupaten/kota masing-masing;\r\n*Belum termasuk Banten dirumah/Ngunya;',
    'paket-images/ORwOpo2PRlpNJzX2crDB4M2IlgEBTI3qXAmd19k2.jpg',
    '2023-12-25 12:51:03',
    '2023-12-25 16:07:28'
  ),
  (
    2,
    4,
    2,
    'Pawiwahan | Silver',
    'pawiwahan-silver',
    25000000,
    'Kini melangsungkan pernikahan dengan resepsi yang indah bukan lagi sekedar angan-angan. Untuk wujudkan impian anda dengan Paket Pernikahan Silver dari Taman Prakerti Bhuana yang sangat ekonomis namun tetap nyaman dan berkelas. Paket Nikah 20juta dibali hadir untuk anda yang mencari paket nikah dengan harga terjangkau. Silahkan hubungi kontak kami untuk segala macam pertanyaan maupun pemesanan. Tersedia juga paket ulang tahun, meeting & gathering, paket metatah serta beragam paket lainya. Segera wujudkan pernikahan anda tanpa ragu, dan tanpa takut masalah biaya bersama kami di Taman Prakerti Bhuana.',
    'Banten Lengkap Mebayuh Lima*;\r\nBanten Mepekoleman/Pregembal Dipuput Ratu Peranda*;\r\nPengenter Acara Pawiwahan & Tukang Banten;\r\nPenggunaan Preparation Room untuk make up/istirahat pengantin;\r\nKursi, Meja & Alat Prasmanan Standar Hotel Bintang;\r\nDekorasi Gedung, Prasmanan, Kursi & Meja;\r\nSound System;\r\nPrasmanan dan Snack Natural untuk 100 tamu;\r\n7 Hidangan Utama Prasmanan;\r\nAir Minum Dingin;\r\nWelcome Snack, Kopi, Teh, Jajan Bali untuk 100 tamu;\r\nWedding Organizer Saat Resepsi;\r\nPelaminan full decor & Spot Foto Wedding;\r\nWelcome Table, Buku Tamu & Kotak Amplop;\r\nAreal Parkir luas & Nyaman;\r\nAcara Resepsi di Gedung Ballroom & Aula;\r\nToilet;',
    'Tidak termasuk sesari;\r\n*Apabila ingin membawa pemuput sendiri, dikenakan biaya tambahan;\r\n*Tambahan tamu 135rb/pax;\r\n*Menyetor formulir syarat perkawinan dari Kabupaten/ Kota masing-masing;\r\n*Belum termasuk Banten dirumah/Ngunya;',
    'paket-images/VNhU167C22Mky0V0sfDMwpH9o4sJzky358qUroi7.jpg',
    '2023-12-25 13:09:27',
    '2023-12-25 16:07:15'
  ),
  (
    4,
    4,
    2,
    'Pawiwahan | Gold',
    'pawiwahan-gold',
    42000000,
    'Kini melangsungkan pernikahan adat Bali dengan resepsi di tengah taman yang indah bukan lagi sekedar impian. Wujudkan keinginan anda dengan Paket Pernikahan Gold dari Taman Prakerti Bhuana dengan biaya yang terjangkau namun menawarkan kenyamanan pesta kebun dengan hidangan yang berkelas. Hanya dengan 35juta saja anda sudah bisa mendapat paket nikah 200pax dibali ini\r\n\r\nSilahkan hubungi kontak kami untuk segala macam pertanyaan maupun pemesanan. Tersedia juga paket ulang tahun, meeting & gathering, paket metatah serta beragam paket lainya. Segera wujudkan pernikahan anda tanpa ragu, dan tanpa takut masalah biaya bersama kami di Taman Prakerti Bhuana.',
    'Banten Lengkap Mebayuh Lima*;\r\n Banten Mepekoleman/Pregembal Dipuput Ratu Peranda*;\r\n Pengenter Acara Pawiwahan & Tukang Banten;\r\n Penggunaan Preparation Room untuk make up/istirahat pengantin;\r\n Kursi, Meja & Alat Prasmanan Standar Hotel Bintang;\r\n Dekorasi Gedung, Prasmanan, Kursi & Meja;\r\n Sound System;\r\n Gratis Penggunaan LCD Projector kusus pilihan pesta indoor;\r\n Prasmanan dan Snack Natural untuk 200 tamu;\r\n 8 Hidangan Utama Prasmanan;\r\n Air Minum Dingin;\r\n Welcome Snack, Kopi, Teh, Jajan Bali untuk 200 tamu;\r\n Ice Sweet Corner;\r\n Wedding Organizer;\r\n Pelaminan full decor & Spot Foto Wedding;\r\n Welcome Table, Buku Tamu & Kotak Amplop;\r\n Areal Parkir luas & Nyaman;\r\n Acara Resepsi di Gedung Ballroom & Aula;\r\n Toilet;',
    '*Tidak termasuk sesari;\r\n*Apabila ingin membawa pemuput sendiri, dikenakan biaya tambahan;\r\n*Menyetor formulir syarat perkawinan dari kabupaten/kota masing-masing;\r\n*Tambahan tamu 135rb/pax;\r\n*Belum termasuk Banten dirumah/Ngunya;',
    'paket-images/IO8qEyWCRsqHS8ykYmGBcRf4f0XRUZelGcXQVvGH.jpg',
    '2023-12-25 15:58:35',
    '2023-12-25 15:58:35'
  ),
  (
    5,
    4,
    2,
    'Pawiwahan | Gold Excecutive',
    'pawiwahan-gold-excecutive',
    63000000,
    'Rayakan hari bahagia anda dengan orang-orang terdekat, manjakan mereka yang anda sayangi dengan hidangan mewah dan fasilitas lengkap dari paket pernikahan dan resepsi Gold Eksekutif Taman Prakerti Bhuana. Pesta resepsi dengan hidangan Prasmanan 10 menu, Salad Bar dan Orange Juice yang disukai semua orang serta dihibur oleh penampilan langsung band akustik pilihan menjamin kemeriahan pesta resepsi anda. Itu semua bisa anda dapatkan hanya di paket nikah 50jutaan dibali tepatnya di Taman Prakerti Bhuana.\r\n\r\nSilahkan hubungi kontak kami untuk segala macam pertanyaan maupun pemesanan. Tersedia juga paket ulang tahun, meeting & gathering, paket metatah serta beragam paket lainya. Segera wujudkan pernikahan anda tanpa ragu, dan tanpa takut masalah biaya bersama kami di Taman Prakerti Bhuana.',
    'Banten Lengkap Mebayuh Lima*;\r\n Banten Mepekoleman/Pregembal Dipuput Ratu Peranda*;\r\n Pengenter Acara Pawiwahan & Tukang Banten;\r\n Penggunaan Preparation Room untuk make up/istirahat pengantin;\r\n Kursi, Meja & Alat Prasmanan Standar Hotel Bintang;\r\n Dekorasi Gedung, Prasmanan, Kursi & Meja;\r\n Dekorasi Bunga Segar Standar;\r\n Sound System;\r\n Gratis Penggunaan LCD Projector kusus pilihan pesta indoor;\r\n Prasmanan dan Snack Natural untuk 300 tamu;\r\n 10 Hidangan Utama Prasmanan;\r\n Salad Bar, Soup Bar & Ice Sweet Corner;\r\n Free Flow Juice;\r\n Welcome Snack, Kopi, Teh, Jajan Bali untuk 300 tamu;\r\n Wedding Organizer;\r\n Bilingual MC Performance;\r\n Live Music Performance Akustik/Electone/Rindik Bali (pilih salah satu);\r\n Pelaminan full decor & Spot Foto Wedding;\r\n Welcome Table, Buku Tamu & Kotak Amplop;\r\n Areal Parkir luas & Nyaman;\r\n Ballroom reception;\r\n Acara Lepas Burung Merpati;\r\n Sparkle Photo Session (Night Reception Only);\r\n Toilet;',
    '*Tidak termasuk sesari;\r\n*Apabila ingin membawa pemuput sendiri, dikenakan biaya tambahan;\r\n*Tambahan tamu 150rb/pax;\r\n*Menyetor formulir syarat perkawinan dari Kabupaten/ Kota masing-masing;\r\n*Belum termasuk Banten dirumah/Ngunya;',
    'paket-images/iQ6zl2uOBA7LOip7csDPIbTYQ3dYEjd6s62Vfr44.jpg',
    '2023-12-25 16:01:29',
    '2023-12-25 16:01:29'
  ),
  (
    6,
    4,
    2,
    'Pawiwahan | Platinum',
    'pawiwahan-platinum',
    79000000,
    'Paket pernikahan dan resepsi terlengkap Taman Prakerti Bhuana. Dengan dekorasi bunga yang khas, hidangan prasmanan 10 menu utama, salad bar dan soup bar, orange juice dan free penampilan live akustik oleh penampilan langsung band akustik pilihan menjamin kemeriahan pesta resepsi anda menjadi jaminan kemeriahan pesta pernikahan dan resepsi anda. Cukup dengan budget terjangkau, paket nikah 70jutaan dibali ini bisa anda pilih untuk melengkapi momen sakral anda bersama pasangan.\r\n\r\nSilahkan hubungi kontak kami untuk segala macam pertanyaan maupun pemesanan. Tersedia juga paket ulang tahun, meeting & gathering, paket metatah serta beragam paket lainya. Segera wujudkan pernikahan anda tanpa ragu, dan tanpa takut masalah biaya bersama kami di Taman Prakerti Bhuana.',
    'Banten Lengkap Mebayuh Lima*;\r\n Banten Mepekoleman/Pregembal Dipuput Ratu Peranda*;\r\n Pengenter Acara Pawiwahan & Tukang Banten;\r\n Ballroom Reception;\r\n Kursi, Meja & Alat Prasmanan Standar Hotel Bintang;\r\n Dekorasi Gedung, Prasmanan, Kursi & Meja;\r\n Dekorasi Bunga Segar Standar;\r\n Sound System;\r\n Gratis Penggunaan LCD Projector khusus pilihan pesta indoor;\r\n Prasmanan dan Snack Natural untuk 300 tamu;\r\n 10 Hidangan Utama Prasmanan;\r\n Salad Bar, Soup Bar & Ice Sweet Corner;\r\n Free Flow Juice;\r\n Welcome Snack, Kopi, Teh, Jajan Bali untuk 300 tamu;\r\n Wedding Organizer;\r\n Bilingual MC Performance;\r\n Live Music Performance Akustik/Electone/Rindik Bali (pilih salah satu);\r\n Pelaminan full decor & Spot Foto Wedding;\r\n Welcome Table, Buku Tamu & Kotak Amplop;\r\n Areal Parkir luas & Nyaman;\r\n Toilet;\r\n Penggunaan Preparation Room Untuk Make Up / Istirahat Pengantin;',
    '*Tidak termasuk sesari;\r\n*Apabila ingin membawa pemuput sendiri, dikenakan biaya tambahan;\r\n*Tambahan tamu 150rb/org;\r\n*Menyetor formulir syarat perkawinan dari kabupaten/kota masing-masing;\r\n*Belum termasuk Banten dirumah/Ngunya;',
    'paket-images/quVjC9KMwQGeoc0yW7oQTbFcDrm8myZwi9t8W6PY.jpg',
    '2023-12-25 16:03:35',
    '2023-12-25 16:03:35'
  ),
  (
    7,
    4,
    1,
    'Mepandes',
    'mepandes',
    20000000,
    'Paket upacara metatah (potong gigi) mulai dari 20 juta rupiah, sudah termasuk banten, tempat, acara, dan resepsi prasmanan dengan 7 hidangan utama lengkap dengan welcome snack kopi teh dan jajan Bali.',
    ';',
    ';',
    'paket-images/LK3YzzS2o3laMrFVthlKZCMuLnLznD7DtlARTIUl.jpg',
    '2023-12-25 16:08:54',
    '2023-12-25 16:08:54'
  ),
  (
    8,
    4,
    4,
    'Mebayuh Oton',
    'mebayuh-oton',
    1500000,
    'Taman Prakerti Bhuana menyediakan berbagai macam pebayuhan yang disesuaikan dengan berbagai kebutuhan umat, mulai dari bayuh oton pribadi start dari 1,5jt rupiah, sampai program bayuh massal (bayuh melik, bayuh sapuhleger, dll) yang diadakan 6 bulan sekali untuk membantu masyarakat yang membutuhkan',
    ';',
    ';',
    'paket-images/U9F4jP8dmqF1Sv0hgvKrZAXCMO5tzisfAu88hMrl.jpg',
    '2023-12-25 16:10:08',
    '2023-12-25 16:10:08'
  ),
  (
    9,
    4,
    8,
    'Magedong-gedongan',
    'magedong-gedongan',
    1700000,
    'Upacara Megedong-Gedongan adalah Upacara Kehamilan. Menurut Kanda Pat Rare mengatakan dalam proses kehamilan karena \"Kama Jaya\" (Sperma dari Ayah) bertemu dengan \"Kama Ratih\" (Ovum dari ibu) terjadilah pembuahan. Semakin besar terwujudlah Jabang Bayi. Upacara Megedong-gedongan adalah Upacara yang ditujukan kepada Bayi yang masih berada di dalam Kandungan dan merupakan Upacara pertama dilaksanakan pada saat Bayi berumur 5 bulan Bali ( kurang lebih 6 Bulan kalender), karena wujud Bayi sudah dianggap sempurna. Pelaksanaan upacara Magedong-gedongan berfungsi sebagai penyucian terhadap Bayi. Disisi lain juga berarti agar kedudukan Bayi dalam Kandungan agar baik kuat tidak abortus. Secara bathiniah agar Sang Bayi kuat mulai setelah lahir menjadi orang yang berbudi luhur, berguna bagi Keluarga dan Masyarakat Demikian juga dimohonkan keselamatan atas diri si Ibu agar sehat, selamat waktu melahirkan.',
    ';Abyakala\r\n;Pagedongan\r\n;Sesayut Pengambean.\r\n;Canang\r\n;Daksina\r\n;Dapetan Tumpeng Pitu\r\n;Pejati munggah ring Dewa Hyang Guru\r\n;Pejati Pemangku\r\n;Soroan\r\n;Tebasan Prayascita\r\n;Sodaan sesuai dengan Kondisi Merajan\r\n;Abyakala\r\n;Prayascita\r\n;Alas kulit Sayut di bawah memakai sidi di atas kulit peras pandan.\r\n;Nasi dibungkus daun.\r\n;Penek merah ditusukkan di atasnya bawang Tabia dialasi kau.\r\n;Telur Ayam\r\n;Base Tulak (Base 5 lembar) digulung bolak-balik, satu lembar dililit berfungsi sebagai kamben/Kain\r\n;Kala Sepet = Tiing disepak kurang lebih 6 cm didalamnya diisi Sambuk.\r\n;Buu Tangga Menek, Tangga Tuun, Jan Lilit linting, Lilit Lengkung dibuat dari Janur.\r\n;Padma (berupa Sampihan)\r\n;Sidi, tempat sebagai alas metanding. Sidi dibuat berlubang-lubang.\r\n;Kekeb (tutup Nasi tradisional), di atas diisi takep api dari serabut kelapa yang disilang seperti simbol Swastika. Simbol Dewa Brahma yang mengandung makna, semoga yang reged/kotor, tidak baik secara niskala dapat dimusnahkan oleh api sebagai simbol Brahma.\r\n;Pebersihan\r\n;Satu Ceper berisi isuh-isuh, diisi Bawang Merah, Uang Bolong (uang Kepeng).\r\n;Coblong berisi air\r\n;Penyeneng.',
    ';',
    'paket-images/4VqrizafVbRyTBcFGKwtzYCA5yQoSW0McKepzhRm.jpg',
    '2023-12-25 16:15:15',
    '2023-12-25 16:15:15'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `paket_categories`
--
CREATE TABLE `paket_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_categories`
--
INSERT INTO
  `paket_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
  (
    1,
    'Metatah',
    'metatah',
    '2023-12-25 10:04:25',
    '2023-12-25 10:04:25'
  ),
  (
    2,
    'Pawiwahan',
    'pawiwahan',
    '2023-12-25 10:06:03',
    '2023-12-25 10:06:03'
  ),
  (
    3,
    'Menek Kelih',
    'menek-kelih',
    '2023-12-25 10:06:13',
    '2023-12-25 10:06:13'
  ),
  (
    4,
    'Mebayuh Oton',
    'mebayuh-oton',
    '2023-12-25 10:07:08',
    '2023-12-25 10:07:08'
  ),
  (
    5,
    'Kremasi',
    'kremasi',
    '2023-12-25 10:07:36',
    '2023-12-25 10:07:36'
  ),
  (
    6,
    'Ngulapin Kendaraan',
    'ngulapin-kendaraan',
    '2023-12-25 10:08:01',
    '2023-12-25 10:08:01'
  ),
  (
    8,
    'Magedong-gedongan',
    'magedonggedongan',
    '2023-12-25 16:11:34',
    '2023-12-25 16:11:34'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `posts`
--
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `excerpt` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `posts`
--
INSERT INTO
  `posts` (
    `id`,
    `category_id`,
    `user_id`,
    `title`,
    `slug`,
    `image`,
    `excerpt`,
    `body`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    2,
    2,
    1,
    'Tinjauan Umum Acara Agama Hindu',
    'tinjauan-umum-acara-agama-hindu',
    'post-images/DgEUPK4MquvEpOg3AMRFT3Vu6x6aQ9DYXQ7kL3wz.jpg',
    'Pelaksanaan suatu agama adalah bertitik tolak dari kepercayaan manusia kepada Tuhan. Oleh karena itu...',
    '<div><strong>Pelaksanaan suatu agama adalah bertitik tolak dari kepercayaan manusia kepada Tuhan. </strong>Oleh karena itu maka pelaksanaan suatu agama tak bisa lepas daripada kepercayaan agama yang bersangkutan kepada ajaran ke-Tuhan-annya. Sekalipun setiap agama itu percaya terhadap adanya Tuhan, namun isi kepercayaannya itu tidaklah sama untuk semua agama.</div><div>Jelasnya yang dimaksud dengan isi kepercayaan kepada Tuhan itu adalah ajaran ke-Tuhan-an suatu agama itu sendiri yaitu bagaimana agama itu mempercayai atau memandang keberadaan Tuhan-Nya. Ajaran ke Tuhan-an atau pandangan suatu agama kepada Tuhan dalam kenyataannya tidak semua sama, sekalipun sama-sama percaya pada adanya Tuhan. Karena adanya perbedaan ajaran ke-Tuhanan-an itulah yang menyebabkan adanya perbedaan karakteristik dari masing-masing agama.<br><br></div><div><strong>Agama Hindu sesuai dengan ajaran ke-Tuhanannya dalam pustaka suci Weda </strong>menganut paham ke-Tuhan-an yang dapat dinamakan “paham Theisme Atwaita” yaitu kepercayaan kepada Tuhan yang tunggal dengan nama dan wujud yang banyak. Tuhan yang tunggal menampakkan diri dalam berbagai perwujudan. Ia Yang Esa berada dimana-mana memenuhi segala, tapi juga mengatasi segala. Agama Hindu percaya tidak saja kepada perwujudan Tuhan Yang Tunggal, tapi juga percaya bahwa Tuhan sebagai hakikat yang tak berwujud (Nirguna Brahman). Tuhan tidak saja berada di Surga tapi juga di dunia ini dan di mana- mana memenuhi segala dan sekaligus mengatasi segala. Tuhan tidak saja sebagai ayah, tapi juga sebagai ibu, teman atau sahabat, sebagai raja, sebagai tamu, sebagai adik dan sebagainya. Tuhan dalam agama Hindu tidak punya lawan dan kawan karena semua ini adalah penampilan Beliau sendiri di luar.</div><div>Ajaran atau konsepsi ke-Tuhan-an yang demikian itulah melahirkan adanya pelaksanaan atau penampilan agama Hindu yang beraneka ragam dan bervariasi. Sehingga dengan demikian kita lihat bahwa umat Hindu dalam hidup keberagamannya sangat beragam, antara satu daerah dengan daerah lainnya. Dewa yang&nbsp; dipuja&nbsp; bermacam-macam,&nbsp; caranya&nbsp; memuja&nbsp; juga&nbsp; beragam,&nbsp; tempat pemujaannya juga bervariasi. Meskipun tata pelaksanaan upacaranya sangat beragam dan bervariasi dalam penampilannya, namun tetap sama dan satu dalam prinsip kepercayaannya.</div><div>Di samping karena menganut konsepsi ke-Tuhan-an yang berbeda, munculnya keberagaman dalam hidup umat Hindu juga disebabkan karena sifat agama Hindu yang senantiasa memberi tempat yang layak pada adat istiadat dan budaya setempat dimana umat Hindu itu berada. Dengan demikian maka adanya keberagaman atau bermacam-macam dalam tata kehidupan beragama itu merupakan ciri khas yang sekaligus menjadi identitas agama Hindu itu sendiri, dimana agama menyatu dengan adat-istiadat budaya setempat.</div><div>Bagian yang nampak secara riil dan beragam itu adalah apa yang disebut dengan “Acara Agama Hindu” yang merupakan penerapan atau peleksanaan hidup beragama.</div>',
    '2023-12-15 10:20:59',
    '2023-12-25 08:50:39'
  ),
  (
    6,
    4,
    1,
    'Upacara Ngaben Dalam Agama Hindu',
    'upacara-ngaben-dalam-agama-hindu',
    'post-images/pESgymP1ogVdMp5aD82wLXdCvor33JOVCzYeVL6D.jpg',
    'Ngaben adalah upacara pembakaran jenazah umat HIndu di Bali. Upacara ngaben merupakan suatu ritual yang dilaksanakan untuk mengembalikan roh leluhur k...',
    '<div><strong>Ngaben adalah upacara pembakaran jenazah umat HIndu di Bali. </strong>Upacara ngaben merupakan suatu ritual yang dilaksanakan untuk mengembalikan roh leluhur ke tempat asalnya. Ngaben dalam bahasaBali berkonotasi halus yang sering disebut palebon.Palebon berasal dari kata lebu yang artinya prathiwi atau tanah.Palebon artinya menjadikan prathiwi (abu). Untuk menjadikan tanah itu ada dua cara yaitu dengan cara membakar (ngaben) dan menanam ke dalam tanah (metanem).<br><br>Tujuan dari upacara ngaben adalah mempercepat ragha sarira agar dapat kembali ke asalnya, yaitu panca maha buthadi alam ini dan bagi atma dapat cepat menuju alam pitra. landasan filosofis ngaben secara umum adalah panca sradha yaitu lima kerangka dasar Agama Hindu yaitu Brahman, Atman, Karmaphala, Samsara dan Moksa. Sedangkan secara khusus ngaben dilaksanakan karena wujud cinta kepada para leluhur dan bhakti anak kepada orang tuanya.Upacara ngaben merupakan proses pengembalian unsur panca maha butha kepada Sang pencipta. Ngaben juga disebut sebagai pitra yadnya ( lontar yama purwana tattwa). Pitra yang artinya leluhur atau orang yang mati sedangkan yadnya adalah persembahan suci yang tulus ikhlas.<br><br>Atiwa-tiwa memiliki asal kata yang terdiri dari \"<strong>Ati</strong>\" yang berarti berkeinginan, dan \"<strong>Awa</strong>\" yang berarti terang, bening, atau bersih. Secara harfiah, <strong>Atiwa-tiwa </strong>mengandung arti keinginan untuk melakukan pembersihan dan penyucian jenasah serta kekuatan <strong>Panca Maha Buta</strong>. Upacara ini juga dikenal sebagai melelet atau pengeringkesan, yang merupakan ritual pembersihan dan penyucian awal terhadap jenasah dari pengaruh Panca Maha Buta. Terdapat <strong>Puja Pitara </strong>yang dikenal untuk meningkatkan kesucian Petra menjadi Pitara.<br><br></div><div><strong>Ngeringkes</strong> atau <strong>Ngelelet </strong>mengacu pada pengembalian atau penyucian asal mula manusia, yang terwujud dalam huruf-huruf suci dan harus dikembalikan lagi. Manusia lahir dengan kekuatan <strong>Ongkara Mula </strong>dari <strong>Sang Hyang Widhi</strong>, yang dalam jasadnya bermanifestasi menjadi <strong>Sastra Mudra</strong>, <strong>Sastra Wrestra </strong>(<strong>Nuriastra</strong>), dan <strong>Sastra Swalalita</strong>. Ketiga kekuatan sastra ini memberikan makna <strong>Utpti</strong>, <strong>Stiti</strong>, <strong>Pralina </strong>(kelahiran, kehidupan, kematian) dan kemudian memberi jiwa kepada setiap sel tubuh manusia.<br><br></div><div>Contoh <strong>Sastra Wrestra </strong>(<strong>Nuriastra</strong>) melibatkan 18 huruf yang mewakili kekuatan pada berbagai bagian tubuh manusia. Proses <strong>Ngeringkes </strong>melibatkan 108 <strong>Sastra Dirga </strong>(huruf-huruf suci) dalam tubuh manusia yang, pada saat kematian, dikembalikan ke Sastra <strong>Ongkara Mula </strong>atau <strong>Ongkara Pranawa</strong>. Atiwa-tiwa merupakan tahap permulaan dari pensucian, memungkinkan jenasah untuk digotong dan dinaikkan ke paga atau wadah. Tanpa <strong>Atiwa-tiwa</strong>, jenasah seharusnya tidak digotong, tetapi dijinjing karena masih berstatus Petra jika dikubur tanpa proses tersebut.<br><br></div>',
    '2023-12-20 11:44:49',
    '2023-12-20 17:11:31'
  ),
  (
    7,
    2,
    1,
    'Asal Usul dan Makna Upacara Melasti',
    'asal-usul-dan-makna-upacara-melasti',
    'post-images/0rVWVZjpHcLj5e8GR2PUEwKl3Z5DiM2TqolcfTja.jpg',
    'Upacara Melasti, sebagai bagian integral dari rangkaian perayaan Nyepi, diselenggarakan tiga atau em...',
    '<div><strong>Upacara Melasti</strong>, sebagai bagian integral dari rangkaian perayaan <strong>Nyepi</strong>, diselenggarakan tiga atau empat hari sebelum hari raya Nyepi. Ritual ini memiliki makna sebagai upacara menghanyutkan kotoran alam dengan menggunakan air kehidupan. Dalam konteks kepercayaan Hindu, tirta amerta, atau air kehidupan, merujuk pada sumber air seperti laut dan danau. Mata air dianggap sebagai anugerah yang memberikan manfaat besar bagi kehidupan semua makhluk, termasuk manusia. <br><br>Kepercayaan ini menyatakan bahwa air memiliki kekuatan penyucian untuk lahir dan batin, baik bagi individu maupun lingkungan alam yang membawanya. Oleh karena itu, upacara Melasti seringkali dilakukan di lokasi dekat sumber air, seperti tepian laut atau danau. Dalam pelaksanaannya, umat Hindu berkumpul dalam kelompok, seringkali berasal dari wilayah yang sama, seperti desa atau banjar, dengan tujuan utama untuk <strong>menyucikan diri dari perbuatan buruk di masa lalu</strong>. Harapannya adalah agar perbuatan buruk tersebut hanyut dan terbuang bersama arus air, menciptakan kesucian lahir dan batin bagi para peserta upacara.<br><br><strong>Upacara Melasti </strong>menjadi bagian yang penting dalam <strong>rangkaian perayaan Tahun Baru Saka</strong>, yang menandai perayaan hari raya Nyepi, sebuah tradisi yang berasal dari India. Di masa lalu, India sering dilanda peperangan antarsuku, namun, di bawah kepemimpinan Dinasti Kushana, perdamaian berhasil diperoleh di antara suku-suku tersebut. Raja Kanishka, yang memimpin dinasti pada tahun 78 Masehi, menciptakan sistem <strong>kalender Caka </strong>(<strong>Saka</strong>) sebagai kalender kerajaan, yang kemudian menjadi dasar bagi perayaan tahun baru.<br><br>Melalui sejarah ini, Nyepi tidak hanya menjadi perayaan tahun baru, melainkan juga sebuah momen peringatan akan pentingnya perdamaian. Upacara Melasti, dalam konteks ini, mencerminkan kesamaan dengan upacara Nagan Sankritan di India, yang bertujuan untuk penyucian desa. Dengan mengadopsi tradisi ini, Nyepi tidak hanya merayakan pergantian tahun, tetapi juga menjadi sebuah perayaan yang memuliakan perdamaian sebagai bagian tak terpisahkan dari warisan budaya dan sejarah yang melandasi keberlangsungan tradisi ini.<br><br>Upacara Melasti memiliki signifikansi sebagai ritual pembersihan jagat raya, mencakup penyucian diri (Bhuana Alit) dan alam semesta (Bhuana Agung). Secara esensial, upacara ini menjadi platform untuk membersihkan alam semesta, termasuk bumi dan seisinya. Selama pelaksanaannya, umat Hindu juga membersihkan peralatan, sarana, dan prasana upacara yang nantinya akan digunakan dalam rangkaian kegiatan Nyepi, khususnya <strong>Tawur Agung</strong>.<br><br>Melalui upacara Melasti, umat Hindu memperoleh angemet tirta amerta, atau air suci dan sari kehidupan. Selain itu, upacara ini memiliki tujuan untuk melebur segala \"noda\" pada pikiran, perkataan, dan perbuatan. Dalam konteks filosofisnya, Melasti berasal dari kata \"<strong>mala</strong>\" (kotoran) dan \"<strong>asti</strong>\" atau \"<strong>astiti</strong>\" (mendoakan atau memuja). Oleh karena itu, Melasti dapat diartikan sebagai pembersihan kotoran melalui doa dan penghormatan terhadap keagungan <strong>Ida Sang Hyang Widhi Wasa </strong>(Tuhan Maha Esa) dan manifestasinya.<br><br>Upacara Melasti juga mencakup pembersihan peralatan upacara, seperti arca, pralingga, atau pratima Ida Bahatara, serta pelinggih, yang digunakan untuk memusatkan pikiran dalam upacara persembahyangan. Setelah dibersihkan, benda-benda tersebut diusung kembali menuju pura.<br><br>Upacara ini juga berfungsi sebagai permohonan kepada Ida Sang Hyang Widhi Wasa agar umat Hindu memperoleh kekuatan dalam menjalani Hari Raya Nyepi. Selain itu, Melasti diartikan sebagai upaya menghanyutkan penderitaan masyarakat, baik secara ritual maupun spiritual. Upacara ini menjadi motivasi untuk mengatasi berbagai penyakit sosial, seperti wabah penyakit, permusuhan, dan keserakahan.<br><br>Lebih dari sekadar pembersihan, Melasti juga menjadi pengingat akan pentingnya menjaga kelestarian lingkungan. Umat Hindu diingatkan untuk menghilangkan keserakahan yang dapat merusak lingkungan, sehingga keharmonisan dan kelestarian alam semesta dapat terjaga dengan baik.<br><br></div>',
    '2023-12-20 11:52:27',
    '2023-12-25 08:50:31'
  ),
  (
    8,
    2,
    1,
    'Tumpek Landep Sebagai Ketajaman Pikiran Dengan Pergeseran Maknanya',
    'tumpek-landep-sebagai-ketajaman-pikiran-dengan-pergeseran-maknanya',
    'post-images/7AVygSFO7XpmSQxoHL5be6Y96O06S59Kair4IVNV.jpg',
    'Tumpek landep berasal dari kata tumpek dan landep. Tumpek berarti tampek atau dekat dan landep yang...',
    '<div>Tumpek landep berasal dari kata <strong>tumpek </strong>dan <strong>landep</strong>. Tumpek berarti tampek atau <strong>dekat</strong> dan landep yang berarti <strong>tajam</strong>. Tumpek landep merupakan hari raya pemujaan kepada <strong>Sang Hyang Siwa Pasupati </strong>sebagai <strong>Dewanya Taksu</strong>. Berperilaku berdasarkan kejernihan pikiran dengan landasan nilai - nilai agama. Dengan pikiran suci, umat mampu memilah dan memilih mana baik dan mana buruk. Bertepatan dengan <strong>Saniscara Kliwon Wuku Landep </strong>umat Hindu merayakan hari tumpek landep yang dirayakan&nbsp; setiap enam bulan sekali. Pada hari tersebut umat hindu melakukan upacara penyucian barang-barang yang terbuat dari besi, seperti keris, senjata, mobil atau barang lainnya yang terbuat dari logam besi. <br><br>Upacara tumpek landep ini biasanya dipimpin oleh <strong>pemangku</strong> dan diawali dengan persembahyangan bersama. Selain itu juga dilakukan&nbsp; di kantor-kantor upacara hari tumpek landep biasanya juga dilakukan di masing-masing rumah warga. Kebanyakan warga melakukan persembahyangan pada sepeda motor dan mobil karna sebagian besar warga memiliki sarana itu. Namun seiring perkembangan jaman, makna tumpek landep menjadi bias dan semakin menyimpang dari makna sesungguhnya. Sekarang ini masyarakat justru memaknai Tumpek Landep lebih sebagai upacara untuk motor, mobil serta peralatan kerja dari besi. Sesungguhnya ini sangat jauh menyimpang.<br><br>Boleh saja pada rerainan Tumpek Landep melakukan upacara terhadap motor, mobil dan peralatan kerja namun jangan melupakan inti dari pelaksanaan Tumpek Landep itu sendiri yang lebih menitik beratkan agar umat selalu ingat untuk mengasah pikiran (manah), budhi dan citta. Dengan manah, budhi dan citta yang tajam diharapkan umat dapat memerangi kebodohan, kegelapan dan kesengsaraan.<br><br>Jika menilik pada makna rerainan, sesungguhnya upacara terhadap motor, mobil ataupun peralatan kerja lebih tepat dilaksanakan pada <strong>Hari Raya Kuningan</strong>, yaitu sebagai ucapan syukur atas anugerah Ida Sang Hyang Widhi Wasa atas sarana dan prasara sehingga memudahkan aktivitas umat, serta memohon agar perabotan tersebut dapat berfungsi dengan baik dan tidak mencelakakan.<br><br>Makna Perayaan Tumpek Landep yaitu berasal dari kata landep yang artinya lancip, runcing, tajam atau ketajaman. Secara harfiah diartikan senjata tajam seperti tombak dan keris. Benda-benda tersebut berfungsi sebagai senjata untuk menegakkan kebenaran. Oleh karena itu benda-benda tersebut diupacarai. Namun dalam konteks kekinian dan kedisinian, senjata lancip itu telah meluas, tak hanya keris dan tombak, juga benda-benda hasil cipta karsa manusia yang dapat mempermudah hidup seperti sepeda motor, mobil, mesin, computer, laptop dan sebagainya. Benda-benda itulah yang diupacarai, namun umat Hindu bukanlah menyembah benda-benda teknologi tersebut, tetapi memohon kepada Sanghyang Pasupati yang telah menganugerahkan kekuatan pada benda tersebut sehingga dapat bermanfaat dan mempermudah hidup.<br><br></div>',
    '2023-12-20 12:04:56',
    '2023-12-25 08:50:23'
  ),
  (
    9,
    5,
    1,
    'Mengenal Metatah atau Mepandes Upacara Potong Gigi di Bali',
    'mengenal-metatah-atau-mepandes-upacara-potong-gigi-di-bali',
    'post-images/XmWg62aDGzm98OwWU0s5qWvQiZhURfCUCFrqXcZ1.jpg',
    'Dalam ajaran Hindu, kehidupan manusia dirayakan dan dihormati melalui serangkaian upacara peringatan...',
    '<div>Dalam ajaran Hindu, kehidupan manusia dirayakan dan dihormati melalui serangkaian upacara peringatan yang mencerminkan peralihan antar tahapan hidup. Mulai dari kelahiran hingga kematian, setiap fase memiliki ritual khusus dalam tradisi <strong>Manusa Yadnya</strong>. Upacara ini mencakup serangkaian peristiwa, seperti ritual menanam ari-ari untuk bayi baru lahir, upacara nelu bulanin pada usia 3 bulan, dan upacara otonan ketika mencapai usia 6 bulan. Pada tahap dewasa, umat Hindu menjalani upacara menek kelih, dan akhirnya, ketika kematian menjemput, diadakan upacara ngaben.<br><br>Salah satu bagian esensial dari Manusa Yadnya adalah upacara <strong>Metatah </strong>atau <strong>Mepandes</strong>, yang sering dikenal sebagai upacara potong gigi. Lebih dari sekadar tindakan fisik, Metatah mencerminkan filosofi mendalam yang meresapi kehidupan spiritual dan moral umat Hindu. Dilaksanakan dengan mengikir gigi taring dan gigi seri, peserta juga mencicipi <strong>enam rasa </strong>yang memiliki makna filosofis tersendiri. Rasa pahit dan asam melambangkan ketabahan menghadapi kehidupan yang keras, rasa pedas mengekspresikan pengendalian kemarahan, rasa sepat mencerminkan ketaatan pada norma, rasa asin melambangkan kebijaksanaan, dan rasa manis melambangkan kebahagiaan.<br><br>Metatah bukan sekadar upacara tradisional; ini adalah simbol penyucian dan transformasi. Selain menandai peralihan ke tahapan hidup yang lebih berbahaya, upacara ini juga bertujuan menghilangkan unsur-unsur jahat dalam diri manusia. Keenam gigi yang dikikir dalam upacara ini melambangkan keenam musuh dalam diri manusia, dikenal sebagai Sad Ripu, yang terdiri dari <strong>kama</strong> (nafsu), <strong>loba </strong>(tamak), <strong>mada </strong>(kemabukan), <strong>moha </strong>(kebingungan), <strong>krodha </strong>(kemarahan), dan <strong>matsarya </strong>(iri hati). Pengendalian musuh-musuh ini dianggap kunci untuk menghindari kehancuran dan terjerumus ke dalam kegelapan.<br><br>Metatah bukan hanya berfokus pada proses fisik, tetapi juga melibatkan prosesi magumi padangan, ngekeb, mabyakala, sembahyang ke merajan, nrgajah/ngendag, mandi di sungai, dan mejaya-jaya. Keseluruhan upacara ini membentuk suatu rangkaian yang kaya akan simbolisme dan makna spiritual. Dalam ngekeb, peserta berjanji untuk mengendalikan sad ripu dalam dirinya, sementara dalam mabyakala, diri dibersihkan dari roh-roh jahat. Prosesi sembahyang ke merajan menjadi momen spiritual untuk memohon restu kepada <strong>Sang Hyang Uma </strong>dan menghapus sifat-sifat buruk.<br><br>Upacara Metatah, pada intinya, adalah perjalanan spiritual yang mencerminkan upaya umat Hindu untuk mencapai kesucian dan mengendalikan diri. Setiap elemen upacara ini, mulai dari potongan gigi hingga mandi di sungai, memiliki makna yang mendalam dalam memandu peserta melalui perjalanan pembersihan diri. Meleburkan sifat-sifat buruk, mengendalikan nafsu, dan memohon restu kepada Sang Hyang Widhi menjadi inti dari upacara ini.<br><br>Sejalan dengan ajaran Hindu, Metatah mempromosikan pemahaman akan keberlanjutan kehidupan dan mempersiapkan umatnya untuk kembali ke alam suci setelah kematian. Dalam perjalanan ini, upacara Metatah menjadi wahana untuk mencapai transformasi spiritual, menjadikan manusia lebih dekat dengan nilai-nilai luhur dan kebijaksanaan ilahi. Dengan begitu, upacara ini melampaui sekadar tradisi fisik, menjadi ungkapan tulus ikhlas umat Hindu dalam menyucikan dan memahami hakikat kehidupan manusia.</div>',
    '2023-12-20 12:17:50',
    '2023-12-25 08:50:14'
  ),
  (
    10,
    5,
    1,
    'Mengenal Pawiwahan, Tradisi Pernikahan Adat Hindu di Bali',
    'mengenal-pawiwahan,-tradisi-pernikahan-adat-hindu-di-bali',
    'post-images/3vXirihVj7jinh5hbz3ezcJZafm0voCInxP90U9T.jpg',
    'Dalam umat Hindu Bali, dikenal istilah pawiwahan. Berdasarkan jurnal Upacara Pawiwahan Dalam Agama H...',
    '<div>Dalam umat Hindu Bali, dikenal istilah pawiwahan. Berdasarkan jurnal Upacara Pawiwahan Dalam Agama Hindu karya Luh Sukma Ningsih, upacara pawiwahan ini termasuk ke dalam upacara manusia yadnya,<br>Pawiwahan sejatinya merupakan ikatan suci dan komitmen sepanjang hidup menjadi suami dan istri, serta merupakan ikatan sosial yang paling kuat yang ada antara laki-laki dan perempuan. Wiwaha ini memiliki kedudukan penting dan dipandang mulia dalam kehidupan umat Hindu.<br><br>Dalam hal ini, sepasang laki-laki dan perempuan saling mengikatkan diri secara lahir dan batin. Mereka akan menjadi pasangan suami istri untuk membangun rumah tangga, serta melaksanakan tanggung jawab bersama-sama di dalamnya.<br><br>Menurut kitab Manusmrti, wiwaha bersifat wajib sekaligus religius karena berkaitan erat dengan kewajiban orang tua untuk melahirkan seorang anak laki-laki guna menebus dosa mereka sendiri.<br><br>Upacara pawiwahan ini bertujuan untuk menghasilkan keturunan yang kemudian akan dapat melanjutkan amanat, serta tanggung jawab kepada leluhur melalui upacara penyucian (<strong>mabyakala</strong>).<br><br>Mau mengenal upacara pawiwahan ini lebih lanjut? Simak pengertian mendalam dan rangkaian upacara pawiwahan berikut.<br><br>Mengenal Apa Itu Pawiwahan?<br>Kata pawiwahan berasal dari kata wiwaha, yang merupakan bahasa sansekerta dengan arti pesta pernikahan. Padanan katanya saja sudah cukup menggambarkan pengertian dari pawiwahan ini.<br>Upacara pawiwahan adalah upacara saksi, baik di hadapan Ida Sang Hyang Widhi Wasa dan pada seluruh masyarakat bahwa dua orang anak manusia telah mengikatkan diri bersama sebagai suami dan istri. Segala perbuatan akan menjadi tanggung jawab bersama.<br><br>Upacara pawiwahan biasa dibarengi dengan upacara pembersihan terhadap sukla swanita (bibit) dari kedua mempelai, dengan tujuan agar bibit mereka terbebas dari pengaruh buruk dan gangguan Bhuta Kala.<br><br>Dengan demikian, apabila terjadi pembuahan, maka manik (anak) yang terbentuk merupakan anak yang bersih, baik, dan suci, dan akan tumbuh menjadi pribadi yang berguna di masyarakat nantinya.<br><br>Tugas pokok pawiwahan ini adalah untuk membangun kehidupan yang Yatha Sakti Kayika Dharma, yang artinya dengan kemampuan sendiri melaksanakan Dharma. Upacara ini merupakan sebuah kewajiban suci (yajna) karena diharap mampu menghasilkan anak suputra.<br><br>Menurut <strong>I Made Titib </strong>dalam makalah <strong>Menumbuhkembangkan Pendidikan Agama pada Keluarga</strong>, yang dilansir jurnal Upacara Pawiwahan Dalam Agama Hindu, <strong>tujuan pawiwahan </strong>adalah sebagai berikut.<br><br></div><ul><li><strong>Dharma Sampati</strong>, di mana kedua mempelai bersama-sama melaksanakan Dharma yang terdiri atas seluruh kewajiban agama.</li><li><strong>Praja</strong>, di mana kedua mempelai harus mampu melahirkan keturunan yang dapat melanjutkan amanat luhur dan melahirkan putra yang dapat melunasi hutang jasa pada dewa (Dewa rna) dan para guru (Rsi rna).</li><li>Rati, di mana kedua mempelai diperbolehkan menikmati kepuasan secara seksual dan kepuasan lain (artha serta kama) selama berlandaskan Dharma dan tidak bertentangan dengannya.</li></ul><div><strong>Rangkaian Upacara Pawiwahan</strong><br>Upacara pawiwahan melibatkan tiga kesaksian, yakni dari bhuta saksi (upacara mabyakala), dewa saksi (upacara natab banten pawiwahan), dan manusia saksi (dari kehadiran prajuru adat, keluarga, dan undangan lain). Berikut merupakan rangkaian upacara pawiwahan.<br><br></div><ul><li>Menentukan Hari Baik</li></ul><div>Upacara pawiwahan diawali dengan menentukan hari baik sesuai dengan kalender Hindu Bali. Tanggal ini biasanya dipilih mulai dari hari calon mempelai pria datang untuk nyedek dan hari berlangsungnya pernikahan. Pemilihan hari dilakukan atas kesepakatan kedua pihak keluarga. Pemilihan hari ini cukup penting karena dapat mempengaruhi kelancaran berjalannya upacara dan kehidupan mereka ketika sudah bersuami istri nantinya.<br><br></div><ul><li>Ngekeb</li></ul><div><strong>Ngekeb</strong> merupakan proses mempersiapkan calon mempelai wanita agar dapat dengan siap menyambut datangnya mempelai pria. Upacara Ngekeb ini bertujuan untuk mempersiapkan mental calon pengantin serta memanjatkan doa di hadapan Ida Sang Hyang Widhi supaya dianugerahi pernikahan yang kebahagiaan.<br><br></div><ul><li>Menjemput Calon Pengantin Perempuan</li></ul><div>Mempelai wanita kemudian dijemput oleh pihak keluarga laki-laki ke kediaman mempelai laki-laki. Ketika dijemput, mempelai perempuan harus menggunakan pakaian tradisional khas Bali dengan selimut kuning tipis yang menutupi dari ujung rambut hingga ujung kaki. Hal ini menjadi simbol bahwa, calon pengantin perempuan sudah siap meninggalkan masa lajangnya dan menikah.<br><br></div><ul><li>Mungkah Lawang</li></ul><div>Penjemputannya juga tidak bisa asal. Calon pengantin wanita akan menunggu di kamarnya, lalu perwakilan dari calon mempelai laki-laki akan datang mengetuk pintu kamarnya. Saat tersebut juga diiringi dengan lagu khasi Bali yang meminta agar dibukakan pintu. Setelah itulah baru mempelai wanita dibawa ke tempat tinggal mempelai laki-laki.<br><br></div><ul><li>Mesegeh Agung</li></ul><div>Sebelum bisa masuk ke dalam halaman rumah, maka kedua mempelai akan melakukan upacara mesegeh agung. Prosesi ini menjadi simbol ucapan selamat datang dari mempelai pria terhadap mempelai perempuan. Selimut kuning yang semula dikenakan oleh calon mempelai perempuan kemudian diangkat oleh calon ibu mertuanya kemudian ditukar dengan uang satakan. Hal ini menjadi simbol dunia baru dan mengubur semua masa lalu.<br><br></div><ul><li>Mekala-kalaan atau Mabyakala</li></ul><div>Upacara Mabyakala merupakan upacara membersihkan kedua mempelai secara lahir batin, terutama sukla swanita, yang merupakan sel benih pria dan sel benih wanita agar dapat membentuk janin yang suputra.<br><br>Urutan proses <strong>upacara Mabyakala</strong> adalah sebagai berikut.<br><br></div><ol><li>Dilakukan upacara puja yang dipimpin oleh seorang pemimpin upacara.</li><li>Membakar tetimpug sampai keluar bunyi sebagai simbol pemberitahuan terhadap bhuta kala yang akan menerima pakala-kalaan.</li><li>Kedua mempelai melangkahi tetimpug 3 kali dan menghadap ke banten pabyakalaan.</li><li>Tangan kedua mempelai dibersihkan menggunakan segau/tepung tawar.</li><li>Ibu jari kaki kedua mempelai menyentuh telur ayam mentah sebanyak 3 kali.</li><li>Kedua mempelai melakukan pengelukatan.</li><li>Kedua mempelai berjalan mengelilingi banten pesaksian dan kala sepetan. Mempelai wanita harus berjalan di depan sambil menggendong sok dagangan (simbol anak) dan mempelai pria memukul tegen-tegenan (simbol mencari nafkah). Ketika melewati kala sepetan, ibu jari kanan harus menyentuh bakul lambang kala sepetan. Mempelai wanita dipukul dengan 3 buah lidi oleh mempelai pria selama berjalan sebagai simbol kesepakatan sehidup semati.</li><li>Kedua mempelai memutuskan benang pepegatan, tanda telah memasuki masa Grahasta.<br><br></li></ol><ul><li>Mewidhi Widana</li></ul><div>Kedua mempelai kemudian bersembahyang di sanggah keluarga laki-laki dan dipimpin oleh pemangku sanggah. Upacara ini bertujuan untuk memberitahu para luluhur keluarga laki-laki bahwa ada pendatang baru dalam anggota keluarganya yang akan melanjutkan keturunannya. Dengan demikian, pernikahan akan sah di depan adat juga masyarakat.<br><br></div><ul><li>Mejauman</li></ul><div>Upacara Mejauman merupakan upacara berpamitan dengan leluhur keluarga mempelai wanita karena kini telah dinikahkan dan menjadi tanggung jawab keluarga mempelai pria. Kedua mempelai akan datang ke keluarga wanita sambil membawa banten yang berisi alem, sumping, ketipat bantal, kuskus, apem, sumping, kekupa, wajik, buah, dan lauk khas Bali.</div>',
    '2023-12-20 12:26:20',
    '2023-12-25 08:50:02'
  ),
  (
    11,
    2,
    1,
    'Mengenal Hari Raya Saraswati',
    'mengenal-hari-raya-saraswati',
    'post-images/czceUdxXDq9pmSUtyMcgcEFNeujRAo5hVEemikgK.png',
    'Hari raya Saraswati adalah hari yang penting bagi umat hindu, khususnya bagi siswa sekolah dan pengg...',
    '<div>Hari raya Saraswati adalah hari yang penting bagi umat hindu, khususnya bagi siswa sekolah dan penggelut dunia pendidikan karena Umat Hindu mempercayai hari Saraswati adalah turunnya ilmu pengetahuan yang suci kepada umat manusia untuk kemakmuran, kemajuan, perdamaian, dan meningkatkan keberadaban umat manusia. Hari raya Saraswati diperingati setiap enam bulan sekali, tepatnya pada hari <strong>Saniscara Umanis wuku Watugunung</strong>.<br><br>Di hari Saraswati biasanya pagi2 para siswa sekolah sudah sibuk mempersiapkan upacara sembahyang di sekolah masing2, sehabis itu biasanya para siswa melanjutkan sembahyang ke pura-pura lainnya. Dan pura yang menjadi paforit adalah pura <strong>Jagatnatha</strong> yang ada dipusatkota. Di sekolah, di pura, di rumah maupun di perkantoran semua buku, <a href=\"http://en.wikipedia.org/wiki/Palm-leaf_manuscript\">l</a>ontar, pustaka-pustaka dan alat-alat tulis di taruh pada suatu tempat untuk diupacarai.Adamitos pada hari Saraswati tidak diperbolehkan untuk menulis dan membaca.<br><br>Hari Raya Saraswati yaitu hari <strong>Pawedalan Sang Hyang Aji Saraswati</strong>, jatuh pada tiap-tiap hari Saniscara Umanis wuku Watugunung. Pada hari itu kita umat Hindu merayakan hari yang penting itu. Terutama para pamong dan siswa-siswa khususnya, serta pengabdi-pengabdi ilmu pengetahuan pada umumnya.<br><br></div><div>Dalam legenda digambarkan bahwa Saraswati adalah Dewi/ lstri Dewa Brahma. Saraswati adalah Dewi pelindung/ pelimpah pengetahuan, kesadaran (widya), dan sastra. Berkat anugerah dewi Saraswati, kita menjadi manusia yang beradab dan berkebudayaan.<br><br>Beliau disimbolkan sebagai <strong>seorang dewi </strong>yang duduk diatas teratai dengan berwahanakan se-ekor <strong>angsa </strong>(Hamsa) atau seekor merak, berlengan empat dengan membawa sitar/veena dan ganatri di kedua tangan kanan, tangan kiri membawa pustaka/kitab dan tangan kiri satunya ikut memainkan gitar membawa sitar/veena dan ganatri di kedua tangan kanan, tangan kin membawa pustaka/kitab dan tangan kiri satunya ikut memainkan veena atau bermudra memberkahi.<br><br></div><div>Makna dan simbol-simbol ini adalah:</div><ol><li><strong>Berkulit putih</strong>, bermakna: sebagai dasar ilmu pengetahuan (vidya) yang putih, bersih dan suci.</li><li><strong>Kitab/pustaka ditangan kiri</strong>, bermakna: Semua bentuk ilmu dan sains yang bersifat se-kular. Tetapi walaupun vidya (ilmu pengetahuan spiritual) dapat mengarahkan kita ke moksha, namun avidya (ilmu pengetahuan sekular jangan diabaikan dulu). Seperti yang dijelaskan Isavasya-Upanisad: “Kita melampaui kelaparan dan da-haga melalui avidya, kemudian baru melalui vidya meniti dan mencapai moksha.”</li><li><strong>Veena</strong>, bermakna : seni, musik, budaya dan suara AUM. Juga merupakan simbol keharmonisan pikiran, budhi, kehidupan dengan alam lingkungan.</li><li><strong>Akshamala/ganatri/tasbih di tangan kanan</strong>, bermakna: Ilmu pengetahuan spiritual itu lebih berarti daripada berbagai sains yang bersifat secular (ditangan kiri). Akan tetapi bagaimanapun pentingnya kitab-kitab dan ajaran berbagai ilmu pengetahuan, namun tanpa penghayatan dan bakti yang tulus, maka semua ajaran ini akan mubazir atau sia-sia.</li><li><strong>Wajah cantik jelita dan kemerah-merahan</strong>, bermakna: Simbol kebodohan dan kemewahan duniawi yang sangat memukau namun menye-satkan (avidya).</li><li><strong>Angsa (Hamsa)</strong>, melambangkan: Bisa me-nyaring air dan memisahkan mana kotoran dan mana yang bisa dimakan, mana yang baik mana yang buruk, walaupun berada di dalam air yang kotor dan keruh maupun Lumpur, (simbol vidya).</li><li><strong>Merak </strong>, bermakna: berbulu indah, cantik dan cemerlang biarpun habitatnya di hutan. Dan ber-sama dengan angsa bermakna sebagai wahana (alat, perangkat, penyampai pesan-pesan-Nya).</li><li>Bunga Teratai/Lotus, bermakna: bisa tumbuh dengan subur dan menghasilkan bunga yang in-dah walaupun hidupnya di atas air yang kotor.</li></ol><div>Upacara pada hari Saraswati, pustaka-pustaka, lontar-lontar, buku-buku dan alat-alat tulis menulis yang mengandung ajaran atau berguna untuk ajaran-ajaran agama, kesusilaan dan sebagainya, dibersihkan, dikumpulkan dan diatur pada suatu tempat, di pura, di pemerajan atau di dalam bilik untuk diupacarai.<br><br></div><div>Widhi widhana (bebanten = sesajen) terdiri dari peras daksina, bebanten dan sesayut Saraswati, rayunan putih kuning serta canang-canang, pasepan, tepung tawar, bunga, sesangku (samba = gelas), air suci bersih dan bija (beras) kuning.<br><br></div><div>Pemujaan / permohonan Tirtha Saraswati dilakukan mempergunakan bahan-bahan: air, bija, menyan astanggi dan bunga.</div><ul><li>Ambil setangkai bunga, pujakan mantra: Om, puspa danta ya namah.</li><li>Sesudahnya dimasukkan kedalam sangku. Ambil menyan astanggi, dengan mantram “<strong><em>Om, agnir, jyotir, Om, dupam samar payami</em></strong>“.</li><li>Kemudian masukkan ke dalam pedupaan (pasepan).</li><li>Ambil beras kuning dengan mantram : “Om, kung kumara wijaya Om phat“.</li><li>Masukkan kedalam sesangku.</li><li>Setangkai bunga dipegang, memusti dengan anggaranasika, dengan mantram:</li></ul><div><strong><em>Om, Saraswati namostu bhyam Warade kama rupini Siddha rastu karaksami Siddhi bhawantu sadam.</em></strong><strong><br>Artinya:<br></strong>Om, Dewi Saraswati yang mulia dan maha indah,cantik dan maha mulia. Semoga kami dilindungi dengan sesempurna-sempurnanya. Semoga kami selalu dilimpahi kekuatan.<br><br><strong><em>Om, Pranamya sarwa dewanca<br>para matma nama wanca.<br>rupa siddhi myaham.</em></strong><strong><br>Artinya:<br></strong>Om, kami selalu bersedia menerima restuMu ya para Dewa dan Hyang Widhi, yang mempunyai tangan kuat. Saraswati yang berbadan suci mulia.<br><br><strong><em>Om Padma patra wimalaksi<br>padma kesala warni<br>nityam nama Saraswat.</em></strong><strong><br>Artinya:<br></strong>Om, teratai yang tak ternoda, Padma yang indah bercahaya. Dewi yang selalu indah bercahaya, kami selalu menjungjungMu Saraswati.<br><br></div><ul><li>Sesudahnya bunga itu dimasukkan kedalam <strong>sangku</strong>. Sekian mantram permohonan tirta Saraswati. Kalau dengan mantram itu belum mungkin, maka dengan bahasa sendiripun tirta itu dapat dimohon, terutama dengan tujuan mohon kekuatan dan kebijaksanaan, kemampuan intelek, intuisi dan lain-lainnya.</li><li>Setangkai bunga diambil untuk memercikkan tirtha ke pustaka-pustaka dan banten-banten sebanyak 5 kali masing-masing dengan mantram:<ul><li><strong>Om, Saraswati sweta warna ya namah.</strong></li><li><strong>Om, Saraswati nila warna ya namah.</strong></li><li><strong>Om, Saraswati pita warna ya namah.</strong></li><li><strong>Om, Saraswati rakta warna ya namah.</strong></li><li><strong>Om, Saraswati wisma warna ya namah.</strong></li></ul></li><li>Kemudian dilakukan penghaturan (<strong>ngayaban</strong>) banten-banten kehadapan <strong>Sang Hyang Aji Saraswati</strong></li><li>Selanjutnya melakukan persembahyangan 3 kali ditujukan ke hadapan :<ul><li>Sang Hyang Widhi (dalam maniftestasinya sebagai <strong>Çiwa Raditya</strong>).</li><li>Sang Hyang Widhi (dalam manifestasinya sebagai <strong>Tri Purusa</strong>)</li><li>Dewi Saraswati.</li></ul></li><li>Ucapkan mantra berikut:</li></ul><div><strong><em>Om, adityo sya parajyote rakte tejo namastute sweta pangkaja madyaste Baskara ya namo namah.<br>Om, rang ring sah Parama Çiwa Dityo ya nama swaha.</em></strong><strong><br>Artinya:<br></strong>Om, Tuhan Hyang Surya maha bersinar-sinar merah yang utama. Putih Iaksana tunjung di tengah air, Çiwa Raditya yang mulia.<br>Om, Tuhan yang pada awal, tengah dan akhir selalu dipuja.<br><br><strong><em>Om, Pancaksaram maha tirtham, Papakoti saha sranam Agadam bhawa sagare. Om, nama Çiwaya.</em></strong><strong><br>Artinya:<br></strong>Om, Pancaksara Iaksana tirtha yang suci. Jernih pelebur mala, beribu mala manusia olehnya. Hanyut olehnya ke laut lepas.<br><br><strong><em>Om, Saraswati namostu bhyam,<br>Warade kama rupini,<br>Siddha rastu karaksami,<br>Siddhi bhawantume sadam.</em></strong><strong><br>Artinya:<br></strong>Om Saraswati yang mulia indah, cantik dan maha mulia, semoga kami dilindungi sesempurna-sempurnanya, semoga selalu kami dilimpahi kekuatan.<br><br>Sesudah sembahyang dilakukan metirtha dengan cara-cara dan mantram-mantram sebagai berikut :</div><ul><li>Meketis3 kali dengan mantram:<ul><li>Om, Budha maha pawitra ya namah.</li><li>Om, Dharma maha tirtha ya namah.</li><li>Om, Sanghyang maha toya ya namah.</li></ul></li><li>Minum 3 kali dengan mantram:<ul><li>Om, Brahma pawaka.</li><li>Om, Wisnu mrtta.</li><li>Om, Içwara Jnana.</li></ul></li><li>Meraup 3 kali dengan mantram :<ul><li>Om, Çiwa sampurna ya namah.</li><li>Om, Çiwa paripurna ya namah.</li><li>Om, Parama Çiwa suksma ya namah.</li></ul></li><li>Terakhir melabahan Saraswati yaitu makan surudan Saraswati sekedarnya, dengan tujuan memohan agar diresapi oleh wiguna Saraswati</li></ul>',
    '2023-12-20 12:51:51',
    '2023-12-25 08:49:49'
  ),
  (
    12,
    2,
    1,
    'Makna Pemujaan Kepada Dewi Saraswati dalam Ajaran Hindu',
    'makna-pemujaan-kepada-dewi-saraswati-dalam-ajaran-hindu',
    'post-images/RJ71NSpFTSQgSABkR6fumI4dIMBQhbfCowrSnhOz.jpg',
    'Pada masyarakat awam bertanya apa maksud menyembah dewa-dewa atau dewi-dewi melalui simbol-simbol at...',
    '<div>Pada masyarakat awam bertanya apa maksud menyembah dewa-dewa atau dewi-dewi melalui simbol-simbol atau patung, gambar dan sebagai-nya? Padahal Tuhan hanya satu, kenapa ada ba-nyak dewa atau dewi?<br><br>Dewa berasal dari kata ”<strong>div</strong>” yaitu <strong>sinar/pancaran</strong>. Pengertiannya adalah bahwa Tuhan itu adalah satu, tapi mempunyai aspek-aspek de-ngan pancaran sinar-Nya (Nur Illahi) yang bermacam-macam sesuai dengan fungsinya. ang bermacam-macam sesuai dengan fungsinya. Pada saat menciptakan disebut <strong>Brahma</strong>, saat memelihara disebut <strong>Wishnu</strong>, dan saat pendaurulang disebut <strong>Shiwa</strong>, dan sebagainya. Tapi sebenarnya Brahma, Wishnu, Shiva adalah satu (<strong>Trimurti</strong>).<br><br>Paradewa ini mempunyai pendamping (<strong>Shak-ti</strong>), yaitu: Brahma shakti-Nya <strong>Saraswati</strong>, Wishnu shakti-Nya <strong>Lakshmi </strong>dan Shiwa shakti-Nya <strong>Parvati </strong>(<strong>Durga</strong>). Disini Dewi Saraswati sebagai aspek Tuhan Yang Maha Esa pada saat menganugrah-kan/munurunkan ilmu pengetahuan (<strong>vidya</strong>), ke-cerdasan, ucapan, musik, budaya dan seba-gainya. Demikian pula dijabarkan dalam konsep <strong>Gayatri</strong> yang terdiri dari tiga aspek, yaitu: <strong>Saras-wati </strong>menguasai ucapan/tutur kata, <strong>Gayatri</strong> me-nguasai intelek/budhi dan <strong>Savitri </strong>yang menguasai prana/nafas.<br><br></div><div>Jadi makna pemujaan Dewi Saraswati adalah memuja dan bersyukur kepada Tuhan Yang Maha Esa dengan memfokuskan pada aspek Dewi Sa-raswati (simbol vidya) atas karunia ilmu penge-tahuan yang di karuniakan kepada kita semua, sehingga akan <strong>terbebas dan avidyam </strong>(kebodoh-an), agar dibimbing menuju ke kedamaian yang abadi dan pencerahan sempurna.<br><br></div><div>Setelah Saraswati puja selesai, biasanya dilakukan mesarnbang semadhi, yaitu semadhi ditempat yang suci di malam hari atau melakukan pembacaan lontar-lontar semalam suntuk dengan tujuan menernukan pencerahan Ida Hyang Saraswati<br><br></div><div>Puja astawa yang disiapkan ialah : Sesayut yoga sidhi beralas taledan dan alasnya daun sokasi berupa nasi putih daging guling, itik, raka-raka sampian kernbang payasan. Sesayut ini dihaturkan di atas tempat tidur, dipersembahkan ke hadapan Ida Sang Hyang Aji Saraswati.<br><br></div><div>Keesokan harinya dilaksanakan Banyu Pinaruh, yakni asuci laksana dipagi buta berkeramas dengan air kumkuman. Ke hadapan Hyang Saraswati dihaturkan ajuman kuning dan tamba inum. Tamba inum ini terdiri dari air cendana, beras putih dan bawang lalu diminum, sesudahnya bersantap nasi kuning garam, telur, disertai dengan puja mantram:<br><br></div><ul><li><strong><em>Om, Ang Çarira sampurna ya namah swaha.</em></strong></li></ul><div>Semua ini mengandung maksud, mengambil air yang berkhasiat pengetahuan.<br><br></div><div><strong>MAKNA DARI PERAYAAN DEWI SARASWATI.<br></strong><br></div><div>Dari perayaan ini kita dapat mengambil hik-mahnya, antara lain:</div><ol><li>Kita harus bersyukur kepada Hyang Widhi atas kemurahan-Nya yang telah menganugrahkan vidya (ilmu pengetahuan) dan kecerdasan kepada kita semua.</li><li>Dengan vidya kita harus terbebas dari avidya (kebodohan) dan menuju ke pencerahan, kebe-naran sejati (sat) dan kebahagiaan abadi.</li><li>Selama ini secara spiritual kita masih tertidur lelap dan diselimuti oleh sang maya (ketidak-benaran) dan avidyam (kebodohan). Dengan vidya ini mari kita berusaha untuk melek/eling/bangun dan tidur kita, hilangkan selimut maya, sadarilah bahwa kita adalah atma, dan akhirnya tercapailah nirwana.</li><li>Kita belajar dan angsa untuk menjadi orang yang lebih bijaksana. Angsa bisa menyaring air, memisahkan makanan dan kotoran walaupun di air yang keruh/kotor atau lumpur. Juga jadilah orang baik, seperti buruk merak yang berbulu cantik, indah dan cemerlang walaupun hidupnya di hutan.</li><li>Kita masih memerlukan/mempelajari ilmu pengetahuan dan sains yang sekuler, tetapi harus diimbangi dengan ilmu spiritual dengan peng-hayatan dan bakti yang tulus.</li><li>Laksanakan Puja/sembahyang sesuai de-ngan kepercayaannya masing-masing secara sederhana dengan bakti yang tulus/ihlas, bisa dirumah, kuil, atau pura dan lain-lain.</li></ol>',
    '2023-12-20 12:57:17',
    '2023-12-25 08:49:41'
  ),
  (
    16,
    6,
    20,
    'Ngerupuk, Upacara Mengusir Bhuta Kala Sebelum Nyepi',
    'ngerupuk,-upacara-mengusir-bhuta-kala-sebelum-nyepi',
    'post-images/hK8oxnhiyIeNCEPjyf7r5Y5qjwAczseCPVZzbyQZ.jpg',
    'Umat Hindu akan merayakan Nyepi pada Kamis, 3 Maret 2022. Nyepi adalah hari suci umat Hindu yang dirayakan setiap Tahun Baru Saka sejak 78 tahun Maseh...',
    '<div>Umat Hindu akan merayakan <strong>Nyepi</strong> pada Kamis, 3 Maret 2022. Nyepi adalah hari suci umat Hindu yang dirayakan setiap <strong>Tahun Baru Saka </strong>sejak <strong>78 tahun Masehi</strong>. Dalam perayaannya, umat Hindu melakukan serangkaian upacara sebelum Nyepi. Salah satunya adalah upacara pengerupukan yang dilakukan sehari sebelum Nyepi tepatnya pada saat tilem atau malam bulan mati pada <strong>Sasih Kesanga</strong>.<br><br></div><div>Melansir situs resmi Pemerintah Kota Denpasar, ngerupuk merupakan upacara yang dilakukan untuk mengusir Bhuta Kala atau kejahatan yang dilakukan sore hari (<strong>sandhyakala</strong>) setelah dilakukan upacara mecaru.Upacara pengerupukan dilakukan dengan cara menyebar nasi tawur di pekarangan rumah, mengobori rumah, serta memukul benda-benda apa saja untuk menciptakan suara ramai.<br><br></div><div>Hal ini dilakukan untuk mengusir <strong>Bhuta Kala </strong>dari lingkungan rumah, pekarangan, dan lingkungan sekitar Khusus di Bali, upacara pengerupukan biasanya dimeriahkan dengan pawai ogoh-ogoh. Persiapan pawai biasanya telah dimulai sejak sore dan pawai akan berlangsung hingga menjelang tengah malam.<br><br></div><div><strong>Ogoh-ogoh </strong>diarak dengan membawa obor berkeliling desa dan kota, kemudian dibakar. Ini bertujuan untuk mengalahkan atau mengusir Bhuta Kala dari pulau. Ogoh-ogoh adalah karya seni patung sebagai perwujudan Bhuta Kala atau roh jahat yang suka mengganggu manusia. Dalam ajaran Hindu Dharma, Bhuta Kala merepresentasikan kekuatan (<strong>Bhu</strong>) alam semesta dan waktu (<strong>Kala</strong>) yang tak terukur dan tak terbantahkan. Biasanya, Bhuta Kala digambarkan sebagai raksasa dengan wajah dan tubuh menyeramkan.&nbsp;<br><br></div><div>Lama proses pembuatan ogoh-ogoh tergantung kerumitan desain, ukuran, jenis bahan serta banyaknya orang yang mengerjakannya, bisa hanya beberapa hari hingga berminggu-minggu. Adapun Nyepi berasal dari kata sunyi atau senyap menurut bahasa penduduk setempat. Sesuai namanya, seluruh umat Hindu&nbsp; melaksanakan catur brata penyepian dan menyepi.<br><br></div>',
    '2023-12-25 08:08:24',
    '2023-12-25 08:08:24'
  ),
  (
    17,
    6,
    20,
    'Makna Hari Suci Sugihan Jawa Dan Sugihan Bali',
    'makna-hari-suci-sugihan-jawa-dan-sugihan-bali',
    'post-images/PTWkn7VxPdYRT8fycCtsc3C5N8KmBc9IUKIeO4Ea.jpg',
    'Enam hari menjelang hari Raya Suci Galungan dikenal sebagai hari suci Sugihan Jawa, yang berasal dari bahasa Sanskerta, yaitu Sugi dan Jaba. Kata \"Sug...',
    '<div>Enam hari menjelang hari Raya Suci Galungan dikenal sebagai hari suci <strong>Sugihan Jawa</strong>, yang berasal dari bahasa Sanskerta, yaitu Sugi dan Jaba. Kata \"<strong>Sugi</strong>\" berarti membersihkan, dan \"<strong>Jaba</strong>\" berarti luar. Sehingga, Sugihan Jawa memiliki arti sebagai pembersihan untuk alam semesta (makro kosmos) atau <strong>Bhuana Agung</strong>.<br><br></div><div>Pada Hari Sugihan Jawa, umat umumnya melakukan kegiatan pembersihan terhadap pelinggih di merajan, pura, paibon, lingkungan sekitar rumah, dan juga alat-alat yang akan digunakan untuk melaksanakan upacara. Dalam kutipan <strong><em>lontar Sundarigama</em></strong>, <strong>Kamis Wage Sungsang </strong>disebut juga pererebon atau yang lebih dikenal dengan <strong>Sugihan Jawa</strong>.<br><br></div><div>Sugihan Jawa dinamakan demikian karena merupakan hari suci bagi para Bhatara untuk melakukan pererebon disanggah dan <strong>Parahyangan</strong> dengan pengraratan dan pembersihan untuk Bhatara dengan kembang wangi. Orang yang memiliki kemampuan tattwa akan melakukan yoga samadhi, sementara pendeta akan melakukan pemujaan tertinggi. Pada hari ini, Bhatara akan turun ke dunia diiringi oleh para <strong>Dewa Pitara </strong>untuk persembahan hingga Galungan.<br><br></div><div>Rerebu atau marerebon ini memiliki tujuan untuk menetralisir kekuatan negatif pada alam semesta atau Bhuwana Agung, dengan sesajen berupa sesayut tutuan atau pengarad kasukan. Setelah Hari Sugihan Jawa, satu hari kemudian adalah Sugihan Bali. Dalam bahasa Sanskerta, Sugihan berarti membersihkan dan Bali berarti kekuatan dalam diri. Sugihan Bali diartikan sebagai hari penyucian diri, baik secara sekala maupun niskala, atau Bhuana Alit. Pada hari Jumat Wuku Sungsang, disebutkan dalam Sundarigama bahwa Sugihan Bali merupakan hari suci bagi umat manusia.<br><br></div><div>Maknanya adalah penyucian diri manusia lahir batin dengan cara mengheningkan pikiran, memohon air suci peruwatan (penglukatan), dan pembersihan diri kepada sang pandita. Semua itu bertujuan untuk menenangkan pikiran dan mempersiapkan diri menyambut Hari Raya Galungan sebagai hari kemenangan dharma melawan adharma.<br><br></div><div>Hari suci <strong>Kajeng Kliwon Enyitan</strong>, setelah perayaan Hari Tilem, merupakan pertemuan unsur tri wara terakhir Kajeng dengan panca wara terakhir Kliwon. Pada hari itu, Sang Hyang Siwa sebagai kekuatan dharma yang merupakan manifestasi dari kekuatan Dewa. Pada Kajeng Kliwon, umat Hindu melakukan persembahan segehan lima warna dan dua buah segehan kepel di halaman merajan, rumah, dan di depan pintu pekarangan.<br><br></div><div>Segehan ini dipersembahkan kepada <strong>Sang Bhuta Bucari</strong>, <strong>Sang Kala Bucari</strong>, dan <strong>Sang Durga Bucari </strong>di halaman merajan, rumah, dan depan pintu pekarangan. Di atas pintu sebelah atas, dipersembahkan kepada Sang Durga Dewi berupa canang wangi-wangi, burat wangi, dan canang yasa untuk menjaga keselamatan dan perlindungan pekarangan serta keluarga.<br><br></div><div>Semua persembahan ini bertujuan untuk menyucikan dan membersihkan diri, memohon keselamatan kepada Ida Sang Hyang Widhi Wasa agar terjadi keserasian di antara sesama manusia, Tuhan, dan dunia. Tujuan pemujaan selanjutnya adalah keselamatan pada <strong>Tri Mandala</strong>, yakni untuk pribadi, keluarga dan keturunannya, serta Nusa dan Bangsa. Semua pelaksanaan upacara ini disesuaikan dengan kemampuan dan keadaan masing-masing umat, serta dengan konteks desa, kala, patra, dan lokasi umat tersebut.<br><br></div>',
    '2023-12-25 08:11:16',
    '2023-12-25 08:11:16'
  ),
  (
    18,
    2,
    20,
    'Makna Ngurek Atau Ngunying Di Bali',
    'makna-ngurek-atau-ngunying-di-bali',
    'post-images/35F1qlDpP8d1rNLSe9zczZ2Fbq9zSj2B4zGn9hxT.jpg',
    'Ngurek, berasal dari kata \'urek\' yang berarti melobangi atau menusuk, merujuk pada tindakan berusaha menusuk tubuh sendiri dengan menggunakan keris, t...',
    '<div><strong>Ngurek</strong>, berasal dari kata \'<strong>urek</strong>\' yang berarti melobangi atau menusuk, merujuk pada tindakan berusaha menusuk tubuh sendiri dengan menggunakan keris, tombak, atau alat lainnya ketika seseorang berada dalam kondisi kerasukan atau kerauhan (<em>trance</em>).<br><br></div><div>Tarian Ngurek atau Tari Ngunying muncul sebagai representasi keberanian prajurit pada zaman kerajaan. Selain itu, tarian ini juga memiliki tujuan untuk menyampaikan rasa syukur kepada Sang Hyang Wenang yang dikatakan memberikan anugerah.<br><br></div><div>Prosesi Ngurek atau Ngunying dapat dikelompokkan menjadi tiga tahap utama. <strong>Pertama</strong>, Nusdus, merangsang para pelaku Ngurek dengan asap beraroma harum menyengat untuk memicu keadaan kerasukan. <strong>Kedua</strong>, Masolah, tahap di mana pelaku menari dengan diiringi lagu-lagu, koor kecak, atau bunyi-bunyian gamelan. Dan <strong>ketiga</strong>, Ngaluwur, mengembalikan pelaku Ngurek pada jati dirinya setelah pengalaman kerasukan.<br><br></div><div>Ketika roh masuk ke dalam tubuh para pengurek, gejala yang muncul melibatkan tubuh yang menggigil, gemetar, mengerang, dan memekik. Diiringi oleh suara gending gamelan, para pengurek yang kerasukan langsung menancapkan senjata, biasanya berupa keris, pada bagian tubuh seperti dada, dahi, bahu, leher, alis, dan mata. Meskipun keris tersebut ditancapkan dan ditekan kuat berulang kali, kulit para pengurek tidak berdarah atau tergores. Diyakini bahwa roh yang hadir dalam tubuh mereka menjaga agar tubuh tetap kebal dan tidak terluka oleh senjata.<br><br></div><div>Tradisi Ngurek merupakan bagian dari kebiasaan masyarakat Bali saat melaksanakan upacara undangan roh leluhur. Para roh diminta untuk masuk ke dalam tubuh individu yang telah ditunjuk sebagai tanda kehadiran mereka di sekitar. Selain itu, tradisi Ngurek juga dipercaya dapat mengundang Ida Bhatara dan para <strong>Rerencangan</strong> (prajurit beliau) untuk menerima persembahan ritual saat upacara, menciptakan keserasian di antara sesama manusia, Tuhan, dan dunia.</div>',
    '2023-12-25 08:12:33',
    '2023-12-25 08:12:33'
  );

INSERT INTO
  `posts` (
    `id`,
    `category_id`,
    `user_id`,
    `title`,
    `slug`,
    `image`,
    `excerpt`,
    `body`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    19,
    6,
    20,
    'Hari Raya Nyepi: Perayaan Kebersihan Spiritual dan Ketenangan di Pulau Dewata',
    'hari-raya-nyepi:-perayaan-kebersihan-spiritual-dan-ketenangan-di-pulau-dewata',
    'post-images/EYJoXf3bPiGobHt27QfIEWm35LTEUNI02s6guPAG.jpg',
    'Hari Raya Nyepi, yang juga dikenal sebagai Tahun Baru Saka, menjadi momen yang sangat istimewa di Pulau Bali. Merupakan hari keagamaan Hindu yang dira...',
    '<div><strong>Hari Raya Nyepi</strong>, yang juga dikenal sebagai <strong>Tahun Baru Saka</strong>, menjadi momen yang sangat istimewa di Pulau Bali. Merupakan hari keagamaan Hindu yang dirayakan setiap tahunnya, Nyepi di Bali menonjolkan nilai-nilai kebersihan spiritual, introspeksi diri, dan ketenangan yang mendalam. Dalam tradisi Hindu, Nyepi melambangkan kekuatan Sang Hyang Widhi Wasa dalam menciptakan keseimbangan dan harmoni di alam semesta.<br><br></div><div>Prosesi awal perayaan Nyepi dimulai dengan upacara <strong>Melasti</strong>. Pada hari ini, umat Hindu berkumpul di pantai untuk membersihkan patung-patung dewa dan membawa persembahan sebagai tanda penghormatan. Melasti bertujuan untuk membersihkan diri secara spiritual, memurnikan jiwa, dan memohon berkah dari Tuhan.<br><br></div><div>Hari Raya Nyepi sendiri diawali dengan upacara Tawur Kesanga, di mana masyarakat berkumpul untuk melakukan persembahan dan mengadakan ritual pembersihan sebagai tanda mengusir kejahatan dan kegelapan dari bumi. Sementara itu, ogoh-ogoh, patung raksasa yang melambangkan roh jahat, diparadedkan sebelum akhirnya dibakar sebagai simbol pemusnahan keburukan.<br><br></div><div>Tepat setelah <strong>Tawur Kesanga</strong>, Nyepi dimulai. Bali pun mengalami satu hari penuh ketenangan total. Seluruh kegiatan masyarakat dihentikan, termasuk transportasi, hiburan, dan aktivitas sehari-hari. Cahaya lampu di rumah-rumah dimatikan, dan suara-suara yang berasal dari alat-alat elektronik seperti radio dan televisi dihindari. Hal ini bertujuan untuk menciptakan suasana ketenangan dan introspeksi.<br><br></div><div>Bagi masyarakat Hindu Bali, Nyepi bukan hanya sekadar hari raya yang dihabiskan dalam keheningan, tetapi juga merupakan momen penting untuk merenung dan mengevaluasi diri. Mereka diminta untuk memperdalam hubungan dengan Tuhan, memikirkan perbuatan baik, dan menetapkan niat untuk menjadi pribadi yang lebih baik di masa depan.<br><br></div><div>Uniknya, Nyepi juga melibatkan tradisi Ngurah Rai, yaitu patroli keamanan yang dilakukan oleh para Pecalang (penjaga tradisional) untuk memastikan bahwa larangan aktivitas telah dijunjung tinggi. Pada malam sebelumnya, Bali dipenuhi dengan kegelapan, dan bintang-bintang bersinar lebih cerah karena minimnya polusi cahaya.<br><br></div><div>Hari Raya Nyepi bukan hanya merayakan kesucian dan kebersihan spiritual, tetapi juga menjadi peluang bagi masyarakat Bali untuk menjaga keseimbangan alam semesta, merenungkan nilai-nilai kehidupan, dan bersatu dalam upaya mencapai ketenangan batin. Sehingga, Nyepi tidak hanya menjadi perayaan keagamaan, tetapi juga menjadi contoh nyata tentang bagaimana sebuah masyarakat dapat mempertahankan kearifan lokal dan nilai-nilai spiritual dalam era modern.</div>',
    '2023-12-25 08:13:53',
    '2023-12-25 08:13:53'
  ),
  (
    20,
    6,
    21,
    'Banyu Pinaruh: Hari Raya Kebijaksanaan dan Keberlanjutan di Pulau Bali',
    'banyu-pinaruh:-hari-raya-kebijaksanaan-dan-keberlanjutan-di-pulau-bali',
    'post-images/mrumj3EaKIecje1Fu3GzyABfu0peOfkuuFZMKWDh.jpg',
    'Di tengah kaya akan tradisi dan kearifan lokal, Pulau Bali memperingati Banyu Pinaruh sebagai salah...',
    '<div>Di tengah kaya akan tradisi dan kearifan lokal, <strong>Pulau Bali </strong>memperingati <strong>Banyu Pinaruh </strong>sebagai salah satu hari raya yang sarat makna. Banyu Pinaruh, yang juga dikenal sebagai Hari Raya Cinta Kasih, menandai momen penting dalam kalender agama Hindu di Bali. Lebih dari sekadar perayaan, Banyu Pinaruh mengajarkan nilai-nilai kebijaksanaan, keberlanjutan, dan kasih sayang.<br><br></div><div>Banyu Pinaruh jatuh pada hari yang sama dengan hari purnama, saat energi positif dan penuh cahaya alami. Perayaan ini dimulai dengan upacara di pura atau tempat ibadah Hindu, di mana umat Hindu berkumpul untuk berdoa dan merayakan keberkahan hidup. Selain itu, pelaksanaan Banyu Pinaruh melibatkan berbagai kegiatan yang bertujuan untuk meningkatkan kebijaksanaan dan kasih sayang di antara masyarakat.<br><br></div><div>Salah satu tradisi yang khas pada Banyu Pinaruh adalah mandi bersama di <strong>sungai</strong>, <strong>laut</strong>, atau <strong>sumber air suci</strong>. Mandi ini diyakini dapat membersihkan diri dari dosa dan membawa keberkahan. Umat Hindu percaya bahwa air yang digunakan untuk mandi pada hari ini memiliki kekuatan spiritual yang luar biasa. Selain membersihkan tubuh secara fisik, mandi bersama ini juga menjadi simbol membersihkan pikiran dan jiwa.<br><br></div><div>Banyu Pinaruh juga dikenal sebagai hari untuk meningkatkan pengetahuan dan kebijaksanaan. Oleh karena itu, banyak yang menghabiskan waktu dengan membaca kitab suci, bermeditasi, atau mendengarkan ceramah keagamaan. Pendidikan spiritual dan intelektual dianggap sebagai bagian integral dari perayaan ini, mencerminkan pentingnya pertumbuhan holistik dalam hidup manusia.<br><br></div><div>Selain kegiatan rohaniah, Banyu Pinaruh juga menekankan keberlanjutan dan keseimbangan dengan alam. Masyarakat Bali berpartisipasi dalam kegiatan ramah lingkungan, seperti penanaman pohon, membersihkan lingkungan, dan mengedukasi tentang pentingnya melestarikan alam. Inisiatif ini bertujuan untuk menciptakan kesadaran akan tanggung jawab bersama terhadap lingkungan dan menjaga keberlanjutan alam Bali yang indah.<br><br></div><div>Banyu Pinaruh juga menjadi kesempatan untuk mempererat hubungan keluarga dan masyarakat. Masyarakat Bali bersatu untuk merayakan kebijaksanaan, cinta kasih, dan keberlanjutan bersama-sama. Berbagai jenis makanan khas Bali disiapkan dan dibagikan sebagai tanda kasih sayang dan kebersamaan.<br><br></div><div>Banyu Pinaruh, dengan kebijaksanaannya, mengingatkan kita untuk selalu mencari keseimbangan dalam hidup, merawat lingkungan sekitar, dan menjaga hubungan baik dengan sesama. Di samping itu, perayaan ini memancarkan keindahan budaya dan kearifan lokal, menciptakan momen berharga bagi masyarakat Bali untuk merayakan kehidupan dan bersyukur atas anugerah yang diberikan Sang Hyang Widhi Wasa.</div>',
    '2023-12-25 08:20:37',
    '2023-12-25 08:39:01'
  ),
  (
    21,
    5,
    21,
    'Ngembak Geni: Merayakan Keharmonisan dan Persatuan Pasca Hari Raya Nyepi di Bali',
    'ngembak-geni:-merayakan-keharmonisan-dan-persatuan-pasca-hari-raya-nyepi-di-bali',
    'post-images/X1DcgI0hc9dch3jkFKMF2FZKQj9pnWcwvc7UCLOe.jpg',
    'Setelah sehari mengheningkan Bali dalam keterpencilan Nyepi, muncul sinar baru di hari berikutnya de...',
    '<div>Setelah sehari mengheningkan Bali dalam keterpencilan Nyepi, muncul sinar baru di hari berikutnya dengan perayaan <strong>Ngembak Geni</strong>. Ngembak Geni merupakan momen yang sangat dinanti-nantikan di Pulau Dewata, karena menandai kembalinya kehidupan sehari-hari setelah periode refleksi dan ketenangan yang dihadirkan oleh Nyepi.<br><br></div><div>Ngembak Geni, yang diterjemahkan sebagai \"<strong>menyalakan api</strong>\" tidak hanya mengisyaratkan kembalinya aktivitas sehari-hari, tetapi juga merujuk pada semangat kebersamaan, persatuan, dan harmoni di antara masyarakat Bali. Pada hari ini, pulau ini pulih dari keterbatasan dan larangan yang diberlakukan selama Nyepi, menciptakan suasana yang penuh keceriaan dan semangat kebersamaan.<br><br></div><div>Salah satu tradisi khas Ngembak Geni adalah berkumpulnya keluarga dan teman-teman untuk saling memaafkan dan merayakan kebersamaan. Masyarakat saling bertukar tawa, cerita, dan kebahagiaan, menciptakan ikatan keluarga dan komunitas yang lebih kuat. Tradisi ini mengajarkan pentingnya memaafkan, melupakan kesalahan, dan membangun kembali hubungan yang harmonis.<br><br></div><div>Di sepanjang pantai dan area publik, masyarakat sering mengadakan kegiatan sosial dan seni. Pesta desa, tarian, dan musik tradisional memeriahkan suasana. Ngembak Geni juga menjadi waktu yang ideal untuk menjalani berbagai upacara keagamaan di pura-pura atau tempat ibadah Hindu. Pemujaan dan doa bersama diadakan untuk mengekspresikan rasa syukur atas kehidupan yang diberikan oleh <strong>Ida Sang Hyang Widhi Wasa</strong>.<br><br></div><div>Kuliner Bali juga ikut menjadi pusat perhatian pada Ngembak Geni. Berbagai hidangan lezat dan spesial disajikan, menciptakan pengalaman kuliner yang memuaskan bagi masyarakat. Ini juga menjadi kesempatan bagi para pedagang untuk membuka kembali usaha mereka setelah penutupan selama Nyepi. Ngembak Geni bukan hanya hari untuk bersenang-senang, tetapi juga sebagai kesempatan untuk memulai kembali kegiatan ekonomi dan produktivitas. Banyak bisnis dan toko yang kembali beroperasi, menghidupkan kembali roda perekonomian setelah satu hari libur Nyepi.<br><br></div><div>Dengan begitu, Ngembak Geni bukan hanya merayakan kehidupan yang aktif kembali, tetapi juga menekankan pada pentingnya kebersamaan, toleransi, dan membangun kembali hubungan yang kuat. Tradisi ini menggambarkan bahwa setelah momen refleksi yang dihadirkan oleh Nyepi, masyarakat Bali kembali dengan semangat baru, siap untuk menghadapi tantangan dan membangun kehidupan yang lebih baik bersama-sama.</div>',
    '2023-12-25 08:23:03',
    '2023-12-25 08:38:55'
  ),
  (
    22,
    4,
    21,
    'Ngaskara Pasca Ngaben: Menghormati Leluhur dan Memulai Babak Baru',
    'ngaskara-pasca-ngaben:-menghormati-leluhur-dan-memulai-babak-baru',
    'post-images/RFahUCOLHRTJYVMalsZ0RcS1CCvfzg6uQZbw8ui7.jpg',
    'Ngaben, atau kremasi dalam tradisi Hindu Bali, adalah upacara pemakaman yang sarat dengan makna spir...',
    '<div>Ngaben, atau kremasi dalam tradisi Hindu Bali, adalah upacara pemakaman yang sarat dengan makna spiritual dan budaya. Setelah selesainya upacara ngaben, masyarakat Bali melanjutkan tradisi dengan merayakan <strong>Ngaskara</strong>, sebuah momen yang penuh dengan simbolisme dan harapan untuk kehidupan baru.<br><br></div><div>Ngaben sendiri adalah upacara sakral di mana jasad orang yang meninggal diarak dan kemudian dimakamkan. Ini dianggap sebagai pembebasan jiwa dari siklus kehidupan dan kematian. Ngaben dilaksanakan dengan penuh keramahtamahan dan kehormatan terhadap leluhur, menciptakan hubungan erat antara dunia hidup dan alam roh.<br><br></div><div>Ngaskara, yang terjadi setelah Ngaben, adalah tahap penting dalam proses berduka dan kesediaan untuk memasuki babak baru. Ini mencerminkan pandangan masyarakat Bali yang menganggap kematian sebagai awal dari perjalanan roh menuju kehidupan yang lebih baik.<br><br></div><div>Tradisi ini juga menyoroti pentingnya kebersamaan dan dukungan sosial setelah berduka. Keluarga dan teman-teman berkumpul untuk merayakan kehidupan yang pernah ada dan untuk menghormati perjalanan roh yang baru saja meninggalkan dunia. Acara ini seringkali diisi dengan kegiatan keagamaan, seperti persembahan dan doa bersama, untuk memohon keselamatan dan ketentraman bagi roh yang telah berpulang.<br><br></div><div>Ngaskara juga mencakup prosesi atau ritual tertentu, tergantung pada adat dan kepercayaan masing-masing komunitas. Misalnya, ada yang melakukan pemujaan di pura atau tempat ibadah, sementara yang lain mungkin mengadakan pesta tradisional sebagai ungkapan sukacita dan dukungan.<br><br></div><div>Selain itu, Ngaskara memegang harapan untuk memulai babak baru dalam kehidupan. Masyarakat Bali percaya bahwa roh yang telah meninggalkan dunia akan kembali untuk memberikan berkah dan melanjutkan peran spiritualnya. Ini menciptakan siklus yang terus berlanjut antara dunia roh dan dunia fisik.<br><br></div><div>Ngaskara, dengan semua simbolisme dan maknanya, menjadi cermin kekuatan dan ketahanan masyarakat Bali dalam menghadapi kematian sebagai bagian tak terpisahkan dari siklus kehidupan. Ini adalah waktu untuk bersama-sama merayakan kenangan, memberikan dukungan kepada yang berduka, dan menghadapi masa depan dengan harapan dan kebijaksanaan.</div>',
    '2023-12-25 08:24:13',
    '2023-12-25 08:38:46'
  ),
  (
    23,
    3,
    21,
    'Rsi Gana: Upacara Harmoni dalam Keseimbangan Spiritual di Bali',
    'rsi-gana:-upacara-harmoni-dalam-keseimbangan-spiritual-di-bali',
    'post-images/YbHR24aAKqqhwpzUXDjHLacC4sadGDCQtAqzWuHt.jpg',
    'Di tengah kekayaan tradisi agama Hindu di Bali, terdapat sebuah upacara yang dianggap sebagai usaha...',
    '<div>Di tengah kekayaan tradisi agama Hindu di Bali, terdapat sebuah upacara yang dianggap sebagai usaha manusia untuk menciptakan keseimbangan dan keharmonisan yang mendalam antara manusia, Tuhan, sesama manusia, dan alam semesta. Upacara ini dikenal sebagai <strong>Rsi Gana</strong>, sebuah persembahan spiritual yang menandai komitmen untuk hidup selaras dengan nilai-nilai kehidupan.<br><br></div><div><strong>Rsi Gana </strong>bukan hanya sekadar seremoni keagamaan, melainkan ekspresi tulus hati manusia untuk meresapi esensi kehidupan yang penuh makna. Tujuan utama dari upacara ini adalah mencapai keseimbangan spiritual yang membawa kedamaian dan keharmonisan bagi seluruh alam semesta.<br><br></div><div>Salah satu aspek penting dari Rsi Gana adalah usaha manusia untuk membangun hubungan yang mendalam dengan Tuhan. Melalui doa, meditasi, dan ritus keagamaan, umat Hindu di Bali berusaha untuk merapatkan diri dengan Sang Hyang Widhi Wasa, menciptakan ikatan spiritual yang kuat.<br><br></div><div>Namun, Rsi Gana tidak hanya berkaitan dengan dimensi vertikal hubungan manusia dengan Tuhan. Upacara ini juga menekankan pentingnya hubungan horizontal, yakni keseimbangan antara sesama manusia. Masyarakat berkumpul untuk merayakan persaudaraan, berbagi kasih sayang, dan mempererat ikatan sosial yang membentuk landasan kehidupan bersama.<br><br></div><div>Selain itu, Rsi Gana mencerminkan kebijaksanaan Hindu Bali dalam menjaga harmoni dengan alam semesta. Ritual-ritual khusus dilakukan untuk menghormati dan merawat lingkungan sekitar. Ini termasuk persembahan kepada dewa-dewa alam dan upaya konservasi untuk menjaga keberlanjutan sumber daya alam.<br><br></div><div>Pada intinya, Rsi Gana menciptakan kesadaran bahwa manusia adalah bagian tak terpisahkan dari satu kesatuan yang lebih besar, yang melibatkan Tuhan, sesama manusia, dan alam semesta. Upacara ini menjadi momentum penting untuk merefleksikan dan memperbaiki keseimbangan yang mungkin terganggu, sehingga hidup dalam keharmonisan menjadi tujuan bersama.<br><br></div><div>Rsi Gana bukan hanya sebuah upacara, melainkan manifestasi perjalanan rohaniah yang menjadikan hidup sebagai sebuah usaha terus-menerus untuk menjaga keharmonisan dalam segala aspek kehidupan. Dengan penuh rasa syukur dan ketulusan, umat Hindu di Bali meyakini bahwa melalui Rsi Gana, manusia dapat merajut kembali keseimbangan yang selalu dicari-cari dalam perjalanan spiritual mereka.</div>',
    '2023-12-25 08:25:21',
    '2023-12-25 08:38:38'
  ),
  (
    24,
    5,
    2,
    'Abhiseka Ratu: Puncak Kesucian dan Kehormatan Spiritual dalam Tradisi Hindu Bali',
    'abhiseka-ratu:-puncak-kesucian-dan-kehormatan-spiritual-dalam-tradisi-hindu-bali',
    'post-images/IpWbCpS1dmZhCWKVq7bh6LRp0CXOIQd51m0T23XI.jpg',
    'Dalam tradisi Hindu Bali yang kaya, upacara Abhiseka Ratu dianggap sebagai momen yang sangat dihorma...',
    '<div>Dalam tradisi Hindu Bali yang kaya, upacara Abhiseka Ratu dianggap sebagai momen yang sangat dihormati dan sakral. Upacara ini, yang dikenal sebagai puncak kesucian spiritual, sering kali terkait dengan pemberian gelar keagamaan atau spiritual kepada seorang ratu atau wanita yang memiliki kedudukan tinggi dalam masyarakat Hindu Bali.<br><br></div><div>Persiapan dan pembersihan menjadi tahapan awal sebelum upacara dimulai. Ruang suci atau pura dipersiapkan dengan cermat, melibatkan pembersihan fisik dan spiritual untuk memastikan kesucian lingkungan.<br><br></div><div>Sebelum upacara utama dimulai, penerima Abhiseka dan para pendeta melakukan pemujaan dan doa, memohon berkah dan petunjuk spiritual. Prosesi Abhiseka, tahapan utama dalam upacara, melibatkan pemberian air suci atau bahan pemujaan lainnya oleh para pendeta kepada penerima upacara. Ini dilakukan dengan doa-doa khusus dan mantra-mantra yang memohon berkah dan kesucian.<br><br></div><div>Setelah melalui serangkaian ritual dan Abhiseka, penerima upacara mungkin diberikan gelar keagamaan atau spiritual yang menandakan status dan peran baru dalam masyarakat Hindu Bali. Upacara ini sering diakhiri dengan perayaan, pertunjukan seni, dan penghormatan dari masyarakat atau umat Hindu sekitar, menciptakan momen kebersamaan dan kegembiraan dalam menyambut peran baru penerima upacara.<br><br></div><div>Abhiseka Ratu bukan sekadar sebuah upacara; ini adalah manifestasi dari perjalanan spiritual di mana individu mencapai puncak koneksi dengan yang Ilahi. Melalui Abhiseka Ratu, masyarakat Hindu Bali merayakan kesucian hidup dan menghormati mereka yang mewujudkan esensi spiritual yang menyatukan komunitas dalam ikatan yang mendalam dan harmonis.</div>',
    '2023-12-25 08:28:35',
    '2023-12-25 08:37:27'
  ),
  (
    25,
    4,
    2,
    'Meajar-Ajar Pasca Ngaben: Memahami Makna Mendalam dalam Tradisi Hindu Bali',
    'meajar-ajar-pasca-ngaben:-memahami-makna-mendalam-dalam-tradisi-hindu-bali',
    'post-images/00NddgY445ByjkcarlRYxzsj6D63N3XyvLVWgMnx.jpg',
    'Dalam tradisi agama Hindu Bali, Meajar-Ajar menjadi perenungan mendalam yang membawa kita memahami m...',
    '<div>Dalam tradisi agama Hindu Bali, <strong>Meajar-Ajar </strong>menjadi perenungan mendalam yang membawa kita memahami makna dan hikmah dalam prosesi pasca Ngaben. Meajar-Ajar tidak sekadar pengetahuan, melainkan perjalanan spiritual yang membimbing kita untuk menjelajahi setiap tindakan dan simbolisme yang terkandung dalam tradisi ini.<br><br></div><div>Meajar-Ajar dimulai dengan mendalami filosofi di balik <strong>Ngaben</strong>, memahami konsep pembebasan roh dan siklus reinkarnasi. Filosofi ini menjadi landasan untuk memaknai setiap tahap prosesi pasca Ngaben.<br><br></div><div>Selanjutnya, Meajar-Ajar membimbing kita memahami simbolisme yang terkandung dalam setiap tindakan. Mulai dari pembakaran mayat hingga penyebaran abu ke laut, setiap langkah menjadi ekspresi simbolis yang menyimpan makna mendalam tentang keseimbangan antara kehidupan dan kematian. Mantra dan doa di prosesi pasca Ngaben menjadi penghubung spiritual. Melalui getaran suara dan kata-kata yang diucapkan, umat Hindu Bali menciptakan koneksi batin dengan roh yang telah berpulang.<br><br></div><div>Peran penting pedanda dalam prosesi menjadi sorotan Meajar-Ajar. Kebijaksanaan dan pengetahuan mereka menjadi kunci untuk membuka jalan antara dunia roh dan dunia fisik.<br><br></div><div>Meajar-Ajar juga menekankan keseimbangan antara duka dan persiapan <strong>reinkarnasi</strong>. Prosesi pasca Ngaben bukan hanya tentang perpisahan, tetapi juga persiapan roh untuk melanjutkan perjalanan spiritualnya.<br><br></div><div>Terakhir, Meajar-Ajar menyoroti pentingnya melibatkan keluarga dan komunitas dalam prosesi pasca Ngaben. Setiap individu memiliki peran dan tanggung jawabnya sendiri dalam menjaga keharmonisan setelah kepergian seorang yang dicintai.<br><br></div><div>Dengan mendalaminya setiap aspek dan makna dalam prosesi pasca Ngaben melalui Meajar-Ajar, masyarakat Hindu Bali tidak hanya menjalani tradisi, tetapi juga meresapi dan memahami hikmah spiritual yang terkandung di dalamnya.</div>',
    '2023-12-25 08:29:45',
    '2023-12-25 08:37:21'
  ),
  (
    26,
    2,
    2,
    'Mengenal Tradisi Mekare-Kare Sebagai Penghormatan Dewa Perang',
    'mengenal-tradisi-mekare-kare-sebagai-penghormatan-dewa-perang',
    'post-images/1eNe85BA1lcsqrq2e2WLMBOReA1gZ5jOJZkGQldm.jpg',
    'Mekare-kare (Upacara Perang Pandan) adalah upacara persembahan yang dilakukan untuk menghormati Dewa...',
    '<div><strong>Mekare-kare (Upacara Perang Pandan)</strong> adalah upacara persembahan yang dilakukan untuk menghormati <strong>Dewa Indra </strong>(dewa perang) juga para leluhur. Perang Pandan atau mekare-kare diadakan tiap tahun bulan Juni di Desa Tenganan, desa ini masuk salah satu desa tua di Bali dan desa ini disebut Bali Aga.<br><br></div><div>Upacara Perang Pandan/Mekare-kare ini diadakan 2 hari dan merupakan bagian dari upacara Sasih Sembah, yaitu upacara keagamaan terbesar di <strong>Desa Tenganan</strong>. Pelaksanaan upacara Mekare-kare ini adalah didepan balai pertemuan yang ada di halaman desa. Waktu pelaksanaan biasanya dimulai jam 2 sore dimana semua warga menggunakan pakaian adat Tenganan (kain tenun Pegringsingan), untuk para pria hanya menggunakan sarung (kamen), selendang (saput), dan ikat kepala (udeng) tanpa baju, bertelanjang dada.<br><br></div><div>Perang ini adalah pandan berduri diikat menjadi satu berbentuk sebuah gada, sementara untuk perisai yang terbuat dari rotan. Setiap pria (mulai naik remaja) didesa ini wajib ikut dalam pelaksanaan Perang Pandan, panggung berukuran sekitar 5 x 5 meter persegi itu. Dengan tinggi sekitar 1 meter, tanpa tali pengaman mengelilingi. Diawali dengan ritual upacara mengelilingi desa untuk memohon keselamatan, lalu diadakan ritual minum tuak, tuak di dalam bambu dituangkan ke daun pisang yang berfungsi seperti gelas. Peserta perang saling menuangkan tuak itu ke daun pisang peserta lain. Kemudian tuak tersebut dikumpulkan menjadi satu dan dibuang kesamping panggung.<br><br></div><div>Saat upacara Perang Pandan akan dimulai seorang pemimpin adat di Desa Tenganan memberi aba-aba dengan suaranya, lalu dua pemuda bersiap-siap. Mereka berhadap-hadapan dengan seikat daun pandan di tangan kanan dan perisai terbuat dari anyaman rotan di tangan kiri. Penengah layaknya wasit berdiri di antara dua pemuda ini.<br><br></div><div>Setelah penengah mengangkat tangan tinggi-tinggi, dua pemuda itu saling menyerang. Mereka memukul punggung lawan dengan cara merangkulnya terlebih dulu. Mereka berpelukan. Saling memukul punggung lawan dengan daun pandan itu lalu menggeretnya. Karena itu ritual ini disebut pula megeret pandan. Peserta perang yang lain bersorak memberi semangat. Gamelan ditabuh dengan tempo cepat. Dua pemuda itu saling berangkulan dan memukul hingga jatuh. Penengah memisahkan keduanya dibantu pemedek yang lain. Pertandingan ini tidak berlangsung lama. Kurang dari satu menit. Selesai satu pertandingan langsung disambung pertandingan yang lain, Ini dilakukan bergilir (lebih kurang selama 3 jam).<br><br></div><div>Semua luka gores diobati dengan ramuan tradisional berbahan <strong>kunyit</strong> yang konon sangat ampuh untuk menyembuhkan luka. Pada saat itu karena mereka semua melakukannya dengan iklas dan gembira tidak ada yang kesakitan, menangis, menyesal bahkan marah. Tradisi ini adalah bagian dari ritual pemujaan masyarakat Tenganan kepada Dewa Indra, dewa perang yang dihormati dengan darah lewat upacara perang pandan, dilakukan tanpa rasa dendam, atau bahkan dengan senyum ceria, meski harus saling melukai dengan duri pandan. Perang Pandan ditutup dengan bersembahyangan di Pura setempat dilengkapi dengan mempersembahkan/menghaturkan tari Rejang.</div>',
    '2023-12-25 08:31:49',
    '2023-12-25 08:37:14'
  ),
  (
    27,
    6,
    2,
    'Omed-Omedan: Merayakan Keberanian dan Tradisi Bersatu di Bali',
    'omed-omedan:-merayakan-keberanian-dan-tradisi-bersatu-di-bali',
    'post-images/u79suEmVXzEm2uyNwre8xJNGR9uj0GBuZpENfNCO.jpg',
    'Bali, pulau dewata yang terkenal dengan keindahan alamnya, tidak hanya kaya akan pantai indah dan bu...',
    '<div>Bali, pulau dewata yang terkenal dengan keindahan alamnya, tidak hanya kaya akan pantai indah dan budaya yang mendalam, tetapi juga menyimpan tradisi unik yang menggambarkan keberanian dan semangat kebersamaan masyarakatnya. Salah satu tradisi yang menonjol di antara banyaknya upacara adat adalah Omed-Omedan, sebuah ritual yang merayakan persatuan dan keberanian di tengah-tengah masyarakat.<br><br></div><div><strong>Omed-Omedan</strong> sendiri berasal dari dua kata dalam bahasa Bali, yaitu \"<strong>Omed</strong>\" yang berarti \"mengambil\" dan \"<strong>Omedan</strong>\" yang bermakna \"bercinta\". Tradisi ini digelar setahun sekali pada hari raya Nyepi, hari suci umat Hindu di Bali. Meskipun Nyepi dikenal sebagai hari yang dihormati dengan diam dan ketenangan, Omed-Omedan memberikan warna tersendiri dengan kegembiraan dan keceriaan.<br><br></div><div>Upacara ini diadakan di desa <strong>Banjar Kaja, Sesetan, Denpasar</strong>, dan melibatkan pemuda dan pemudi yang belum menikah. Sebelum ritual dimulai, para pemuda dan pemudi berkumpul di Pura Taman Sari untuk mempersiapkan diri secara spiritual. Setelah itu, mereka membentuk barisan dan bergerak menuju titik pusat acara.<br><br></div><div>Ritual Omed-Omedan dimulai dengan adanya seorang pemuda dan pemudi yang dipilih sebagai \"kate-kanan\" dan \"kate-kiri\". Keduanya berdiri di depan barisan dan memberikan isyarat untuk memulai permainan. Pemuda dan pemudi lainnya kemudian berhadapan dan saling berdekatan. Musik gamelan mengiringi prosesi ini, menciptakan suasana yang penuh semangat.<br><br></div><div>Puncak dari Omed-Omedan terletak pada momen ketika pemuda dan pemudi berdua tersebut saling mencium. Ciuman ini tidak hanya sebagai ungkapan keberanian, tetapi juga sebagai simbol persatuan dan keharmonisan dalam masyarakat. Setelah itu, mereka disiram dengan air oleh teman-teman mereka sebagai bentuk penghormatan dan kebahagiaan.<br><br></div><div>Omed-Omedan bukan hanya sekadar perayaan fisik, tetapi juga sarat makna budaya. Ritual ini mencerminkan nilai-nilai kebersamaan, persatuan, dan keberanian dalam menghadapi kehidupan. Meskipun terdengar unik, Omed-Omedan adalah bentuk ekspresi kearifan lokal yang dijaga dan diwariskan dari generasi ke generasi.<br><br></div><div>Seiring dengan perkembangan zaman, Omed-Omedan tidak hanya menjadi daya tarik lokal tetapi juga menarik perhatian wisatawan dari berbagai penjuru dunia. Mereka datang bukan hanya untuk menyaksikan acara ini, tetapi juga merasakan kehangatan dan keceriaan masyarakat Bali. Dengan begitu, Omed-Omedan menjadi bukti nyata bahwa tradisi lokal yang kuat dapat menjadi jembatan untuk membangun pemahaman dan persaudaraan lintas budaya.<br><br></div><div>Dalam keseluruhan, Omed-Omedan tidak hanya menjadi ritual unik di Bali, tetapi juga lambang kebersamaan dan keberanian dalam menjalani kehidupan. Melalui tradisi ini, Bali mempertahankan kearifan lokalnya sambil tetap terbuka terhadap perubahan dan interaksi dengan dunia luar. Omed-Omedan, sebuah perayaan yang memadukan keunikan budaya dan kehangatan manusia, tetap menjadi bagian tak terpisahkan dari keindahan dan kekayaan pulau Bali.</div>',
    '2023-12-25 08:33:21',
    '2023-12-25 08:37:07'
  ),
  (
    28,
    2,
    2,
    'Ngerebong: Merayakan Kekuatan Rohani dan Keseimbangan Budaya di Bali',
    'ngerebong:-merayakan-kekuatan-rohani-dan-keseimbangan-budaya-di-bali',
    'post-images/061VFfDJdTpH4p06y9ipCZ8cT6XdO0pMXhzgM60T.jpg',
    'Bali, pulau yang dikenal dengan keindahan alam dan kekayaan budayanya, terus menjaga warisan leluhur...',
    '<div>Bali, pulau yang dikenal dengan keindahan alam dan kekayaan budayanya, terus menjaga warisan leluhurnya melalui berbagai upacara adat. Salah satu perayaan yang menonjol di antara tradisi-tradisi Hindu adalah <strong>Ngerebong</strong>, sebuah upacara yang menggambarkan kekuatan rohani dan keseimbangan budaya masyarakat Denpasar, Bali.<br><br></div><div>Ngerebong berasal dari kata \"<strong>Ngrebong</strong>\" yang berarti \"<strong>bersatu</strong>\" atau \"<strong>berkumpul</strong>\" Upacara ini dilaksanakan setahun sekali dan menjadi momen penting dalam kalender ritual Hindu di Bali. Pelaksanaan Ngerebong biasanya diawali dengan persiapan spiritual di Pura, tempat suci umat Hindu, di mana pemimpin upacara dan peserta bersama-sama memohon restu dari Tuhan.<br><br></div><div>Perayaan Ngerebong memiliki ciri khas dengan parade berbagai simbol keagamaan dan kebudayaan yang diarak keliling Desa Denpasar. Puluhan bahkan ratusan peserta mengenakan pakaian adat dan membawa berbagai jenis benda suci, seperti payung warna-warni, bendera, dan patung dewa-dewi Hindu. Musik gamelan dan tarian-tradisional Bali turut mengiringi langkah mereka, menciptakan suasana sakral dan meriah.<br><br></div><div>Salah satu elemen utama dalam Ngerebong adalah \"<strong>Baleganjur</strong>,\" yaitu kelompok musik gamelan yang memainkan alat musik tradisional Bali. Mereka menjadi penggerak utama dalam parade, menciptakan irama yang menggetarkan dan merayakan keberagaman seni musik Bali. Selain itu, para peserta juga membawa \"<strong>Gebogan</strong>\" yaitu rangkaian buah dan bunga yang dihias indah sebagai simbol kesuburan dan keberlimpahan.<br><br></div><div>Ngerebong tidak hanya menjadi perayaan keagamaan tetapi juga menjadi momen bagi masyarakat Denpasar untuk mempererat tali persaudaraan. Peserta yang berasal dari berbagai komunitas bergabung bersama-sama dalam semangat gotong-royong, menciptakan harmoni yang mencerminkan kehidupan masyarakat Hindu yang berlandaskan toleransi dan persatuan.<br><br></div><div>Melalui Ngerebong, Bali tidak hanya merayakan kekuatan rohani dan kebudayaan, tetapi juga menunjukkan tekad untuk melestarikan nilai-nilai luhur yang diteruskan dari generasi ke generasi. Pada saat yang sama, perayaan ini menarik perhatian wisatawan yang mencari pengalaman budaya yang mendalam dan otentik.<br><br></div><div>Upacara Ngerebong tidak hanya menjadi bagian dari identitas budaya Bali tetapi juga menjadi cerminan dari kekuatan spiritual dan semangat gotong-royong. Dalam menghadapi arus globalisasi, Bali terus menunjukkan bahwa keberagaman dan tradisi lokal dapat hidup berdampingan, menciptakan keindahan budaya yang tak ternilai. Ngerebong, sebuah persembahan dari masyarakat Denpasar, Bali, untuk dunia, merayakan kebesaran spiritual dan kearifan lokal yang tetap mengakar kuat.</div>',
    '2023-12-25 08:35:07',
    '2023-12-25 08:36:58'
  ),
  (
    29,
    2,
    1,
    'Yadnya Eka Dasa Rudra di Pura Besakih: Perayaan Agung Keseimbangan dan Kesucian',
    'yadnya-eka-dasa-rudra-di-pura-besakih:-perayaan-agung-keseimbangan-dan-kesucian',
    'post-images/wG6mv0h6rbX12ncFeGittC4RPkO3DBwYQREv2f6N.jpg',
    'Pura Besakih, yang megah berdiri di lereng Gunung Agung, merupakan kompleks pura terbesar dan paling...',
    '<div>Pura Besakih, yang megah berdiri di <strong>lereng Gunung Agung</strong>, merupakan kompleks pura terbesar dan paling suci di Bali. Di tempat suci ini, sebuah perayaan terbesar, <strong>Yadnya Eka Dasa Rudra</strong>, terjadi, menandai perayaan besar dengan makna spiritual dan kemegahan budaya.<br><br></div><div>Istilah \"<strong>Yadnya Eka Dasa Rudra</strong>\" berarti \"pengorbanan besar yang melibatkan sebelas bentuk Rudra,\" melambangkan sebuah ritual mendalam yang didedikasikan untuk Dewa Shiva dalam manifestasinya sebagai Rudra. Upacara monumental ini terjadi sekali setiap seratus tahun, menjadikannya sebuah peristiwa langka dan luar biasa yang menarik para peziarah, warga setempat, dan wisatawan.<br><br></div><div>Persiapan untuk Yadnya Eka Dasa Rudra dimulai bertahun-tahun sebelumnya, melibatkan perencanaan dan koordinasi yang cermat antara para pendeta, pemimpin masyarakat, dan para pemuja. Tujuan utama dari upacara ini adalah untuk mencari penyucian, keseimbangan, dan harmoni dalam alam semesta, sejalan dengan prinsip-prinsip dasar Hindu.<br><br></div><div>Upacara ini terdiri dari serangkaian ritual, prosesi, dan persembahan yang rumit. Para pendeta yang mengenakan pakaian adat memimpin doa-doa, memohon berkah dan penyucian untuk seluruh pulau dan penduduknya. Ritual ini dilakukan sesuai dengan kitab-kitab kuno, menekankan pentingnya pelestarian tradisi dan pengalihan kebijaksanaan spiritual.<br><br></div><div>Elemen kunci dari Yadnya Eka Dasa Rudra adalah pembangunan struktur besar berbentuk piramida kayu yang dikenal sebagai \"Bhatara Turun Kabeh.\" Struktur ini melambangkan kosmos, dan setiap lapisannya mewakili ranah eksistensi yang berbeda. Pembangunan Bhatara Turun Kabeh melibatkan upaya bersama, melibatkan keterampilan dan dedikasi komunitas.<br><br></div><div>Kemegahan upacara semakin diperkuat dengan prosesi berwarna-warni, tarian tradisional, dan pertunjukan musik. Seluruh kompleks Pura Besakih menjadi hidup dengan semangat pengabdian, menciptakan atmosfer yang menakjubkan yang mencerminkan warisan budaya Bali yang kaya.<br><br></div><div>Yadnya Eka Dasa Rudra bukan sekadar peristiwa keagamaan; ini adalah ekspresi budaya yang mendalam yang melampaui generasi. Ini menjadi pengingat akan pentingnya melestarikan identitas budaya dan nilai-nilai spiritual di tengah modernisasi. Upacara ini tidak hanya menarik kaum beriman, tetapi juga para sarjana, sejarawan, dan mereka yang mencari pemahaman yang lebih dalam tentang spiritualitas Bali.<br><br></div><div>Sebagai puncak dari siklus seratus tahun, Yadnya Eka Dasa Rudra adalah bukti komitmen Bali terhadap warisan budaya dan spiritualnya. Upacara ini menyatukan orang dalam pengalaman pengabdian bersama, mengingatkan dunia akan perpaduan unik pulau ini antara tradisi, spiritualitas, dan harmoni komunal. Pura Besakih tetap menjadi saksi hidup dari kehidupan budaya yang berkelanjutan di Bali, dan Yadnya Eka Dasa Rudra adalah ekspresi paling besar dari semuanya.</div>',
    '2023-12-25 08:42:00',
    '2023-12-25 08:45:57'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `post_categories`
--
CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `post_categories`
--
INSERT INTO
  `post_categories` (
    `id`,
    `name`,
    `slug`,
    `deskripsi`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    2,
    'Dewa Yadnya',
    'dewa-yadnya',
    'Dewa yadnya adalah suatu bentuk persembahan atau korban suci dengan tulus iklas yang di tujukan kepada sang pencipta (Ida Sang Hyang Widhi Wasa) beserta dengan manifestasinya dalam bentuk Tri Murti. Dewa Brahma sebagai pencipta alam semesta, Dewa Wisnu sebagai pemelihara isi dari alam semesta, dan Dewa Siwa sendiri sebagai pelebur atau praline dari alam semesta.',
    '0000-00-00 00:00:00',
    '0000-00-00 00:00:00'
  ),
  (
    3,
    'Rsi Yadnya',
    'rsi-yadnya',
    'Rsi Yadnya adalah suatu bentuk persembahan karya suci yang di tujukan kepada para rsi, orang suci, pinandita, pandita, sulinggih, guru, dan orang suci yang berhubungan dengan agama hindu. Rsi adalah orang-orang yang bijaksana dan berjiwa suci. Sulinggih maupun guru juga termasuk orang suci karena beliau orang bijaksana yang memberikan arahan kepada siswa-siswi nya. ',
    '0000-00-00 00:00:00',
    '0000-00-00 00:00:00'
  ),
  (
    4,
    'Pitra Yadnya',
    'pitra-yadnya',
    'Pitra Yadnya adalah suatu bentuk persembahan atau korban suci yang di tujukan kepada roh-roh para leluhur dan bhatara-bhatara karena mereka lah yang membuat kita ada di dunia hingga kita dewasa. Pitra yadnya ini bertujuan menyucikan roh-roh para leluhur agar mendapatkan tempat yang layak di kahyangan.',
    '0000-00-00 00:00:00',
    '0000-00-00 00:00:00'
  ),
  (
    5,
    'Manusa Yadnya',
    'manusa-yadnya',
    'Manusa Yadnya adalah suatu upacara suci yang bertujuan untuk memelihara hidup, mencapai kesempurnaan dalam kehidupan dan kesejahteraan manusia selama hidupnya.',
    '0000-00-00 00:00:00',
    '0000-00-00 00:00:00'
  ),
  (
    6,
    'Bhuta Yadnya',
    'bhuta-yadnya',
    'Bhuta yadnya adalah suatu upakara/upacara suci yang ditujukan kepada bhuta kala atau makluk bawah. Bhuta kala adalah kekuatan yang ada di alam yang bersifat negative yang perlu dilebur agar kembali kesifat positif agar tidak mengganggu kedamaian hidup umat manusia yang berada di bumi dalam menjalankan aktifitasnya.',
    '0000-00-00 00:00:00',
    '0000-00-00 00:00:00'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `saranas`
--
CREATE TABLE `saranas` (
  `id` int(11) NOT NULL,
  `usaha_id` int(11) NOT NULL,
  `nama_sarana` varchar(64) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `saranas`
--
INSERT INTO
  `saranas` (
    `id`,
    `usaha_id`,
    `nama_sarana`,
    `slug`,
    `harga`,
    `deskripsi`,
    `image`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    3,
    3,
    'Banten Saraswati',
    'banten-saraswati',
    '400000',
    'Banten Saraswati, ajuman, aturan, banten labaan',
    'sarana-images/Q2ke4xuhiKSTieawg03GWtY1tqVcBKFOgikRre8h.jpg',
    '2023-12-22 04:21:00',
    '2023-12-25 17:51:33'
  ),
  (
    4,
    1,
    'Banten Tumpek Landep',
    'banten-tumpek-landep',
    '700000',
    'Tumpeng pitu, prasita, bayuan, pejati, ajuman, pras ajuman',
    'sarana-images/XvMKcdIYuheUtcXOMw0LW0hYo80GsYhfSIOzFw7I.jpg',
    '2023-12-22 06:17:28',
    '2023-12-22 08:18:06'
  ),
  (
    5,
    1,
    'Banten Galungan',
    'banten-galungan',
    '1000000',
    'Atur-aturan ke pura, ajuman, tumpeng, gebogan, canang, gantung-gantungan, cenigaan',
    'sarana-images/UVrtM7R2GyBPtV92NzlcflPbKh3Of6Qb45x5Cgco.jpg',
    '2023-12-22 06:38:52',
    '2023-12-25 17:52:31'
  ),
  (
    6,
    1,
    'Banten Kuningan',
    'banten-kuningan',
    '1000000',
    'Ajuman, atur-aturan ke pura, tamiang kolem',
    'sarana-images/GA7xwJsrVLN5In3uWPTbh1ckleI3DreVb304O2ci.jpg',
    '2023-12-22 06:39:28',
    '2023-12-25 17:53:07'
  ),
  (
    8,
    2,
    'Banten Purnama',
    'banten-purnama',
    '150000',
    'Ajuman 30 biji, canang 130 biji',
    'sarana-images/PmGsOlkOAeHZEZB6y4b48gl05pTeFnCpB1NQPqz9.jpg',
    '2023-12-22 08:21:08',
    '2023-12-25 17:53:20'
  ),
  (
    9,
    2,
    'Banten Tilem',
    'banten-tilem',
    '150000',
    'Ajuman 30 biji, canang 130 biji',
    'sarana-images/U1FDeZFBYiU2vMg9WxoOedD7YKxbBq63Enxi0llO.jpg',
    '2023-12-22 08:21:52',
    '2023-12-25 17:53:38'
  ),
  (
    11,
    2,
    'Banten Otonan',
    'banten-otonan',
    '120000',
    'Banten otonan',
    'sarana-images/7oSsukq0boQ7ohSQwAqucHbVnMm5hhiryOlM6utp.jpg',
    '2023-12-25 11:58:53',
    '2023-12-25 17:54:10'
  ),
  (
    13,
    2,
    'Banten ajuman',
    'banten-ajuman',
    '7000',
    'Banten pelengkap pejati',
    'sarana-images/aPouL4NE00cA2JCOw7T5HUOZqqsyyb1v2JFkBLuw.jpg',
    '2023-12-25 17:45:58',
    '2023-12-25 17:45:58'
  ),
  (
    14,
    3,
    'Banten biyakaon',
    'banten-biyakaon',
    '100000',
    'Banten byakala atau byakaon menjadi salah satu sarana persembahan yang sering digunakan dalam berbagai upacara yadnya umat Hindu di Bali. Banten ini diyakini berfungsi menetralkan kekuatan negatif karena erat kaitannya dengan waktu (kala) agar tercipta keharmonisan lingkungan.',
    'sarana-images/sDDcpg7CSfvJ4H6eEe6MrAgw9KKAxgpz6xp1s6lo.jpg',
    '2023-12-25 17:47:37',
    '2023-12-25 17:47:37'
  ),
  (
    15,
    7,
    'Banten pengambean',
    'banten-pengambean',
    '150000',
    'Banten Pengambean sering menjadi satu rangkai dengan banten lainnya seperti pada Ayaban.',
    'sarana-images/ceiu6Z9QAWjfaugsgRWhuB1y4PEKg9huQNeFwfrG.jpg',
    '2023-12-25 17:55:29',
    '2023-12-25 17:55:29'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `sarana_categories`
--
CREATE TABLE `sarana_categories` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `post_category` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `usahas`
--
CREATE TABLE `usahas` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `usahas`
--
INSERT INTO
  `usahas` (
    `id`,
    `name`,
    `slug`,
    `email`,
    `no_telepon`,
    `alamat`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'UD. Rahayu',
    'ud-rahayu',
    'ud.rahayu@gmail.com',
    '081246504468',
    'Jalan Melati, Lingkungan Pasdalem, Gianyar',
    '2023-12-25 11:12:06',
    '2023-12-25 11:28:54'
  ),
  (
    2,
    'UD. Mesari',
    'ud.mesari',
    'ud.mesari@gmail.com',
    '081992738293',
    'Desa Tedung, Gianyar',
    '2023-12-25 11:30:15',
    '2023-12-25 11:30:15'
  ),
  (
    3,
    'Yadnya Grosir',
    'yadnya-grosir',
    'yadnya.grosir@gmail.com',
    '081774637283',
    'Jalan Raya Beng, Gianyar',
    '2023-12-25 12:10:29',
    '2023-12-25 12:10:29'
  ),
  (
    4,
    'Taman Prakerti Bhuana',
    'taman-prakerti-bhuana',
    'prakerti.bhuana@gmail.com',
    '08174703353',
    'Jalan Raya Beng, Gianyar',
    '2023-12-25 12:12:00',
    '2023-12-25 12:12:00'
  ),
  (
    6,
    'Sari Lontar',
    'sari-lontar',
    'lontar.mesari@gmail.com',
    '081726663728',
    'Jalan Raya Bona, Gianyar',
    '2023-12-25 17:48:48',
    '2023-12-25 17:48:48'
  ),
  (
    7,
    'Gianyar Upakara',
    'gianyar-upakara',
    'upakara.gianyar@gmail.com',
    '087283392849',
    'Jalan Raya Astina Selatan, Gianyar',
    '2023-12-25 17:49:31',
    '2023-12-25 17:49:31'
  ),
  (
    8,
    'Griya Anyar',
    'griya-anyar',
    'griya.anyar@gmail.com',
    '081728372836',
    'Gianyar, Bali',
    '2023-12-26 01:36:28',
    '2023-12-26 01:36:28'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `users`
--
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--
INSERT INTO
  `users` (
    `id`,
    `name`,
    `username`,
    `email`,
    `password`,
    `is_admin`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'Eka Putra Juniawan',
    'EkaPutraJuniawan',
    'eka@gmail.com',
    '$2y$12$QzDeIKW9U8p3SDJzzfxGH.zRXgbEyCs1YQn2zOj3lkdsnEgEcOs2a',
    1,
    '2023-12-15 08:56:49',
    '2023-12-24 16:23:57'
  ),
  (
    2,
    'Resandy Prisadana',
    'resandy',
    'resandy@gmail.com',
    '$2y$12$hN2lcqUXml4Kd6QfVesMJOjXTXhEwWwlXeUiLAnNPv5UwTU29Jenm',
    0,
    '2023-12-15 11:35:48',
    '2023-12-15 11:35:48'
  ),
  (
    3,
    'Dudul Gamink',
    'dudul',
    'dudul@gmail.com',
    '$2y$12$cGYn2ioWntkbMw1OcH6mcer6x64FM1bL8ZSXHfcHP/WAgVuu2/mYS',
    0,
    '2023-12-15 16:58:27',
    '2023-12-15 16:58:27'
  ),
  (
    4,
    'Dwi Putri',
    'dwiptrar',
    'dwi@gmail.com',
    '$2y$12$.4KcBWfpK2OymVTGNJ8N1.1svOfRN86WwQwpSdwDWIW5L3XFZfkfi',
    0,
    '2023-12-20 18:43:58',
    '2023-12-20 18:43:58'
  ),
  (
    5,
    'Eka Putra',
    'ekaPutra',
    'juniawan@gmail.com',
    '$2y$12$QzDeIKW9U8p3SDJzzfxGH.zRXgbEyCs1YQn2zOj3lkdsnEgEcOs2a',
    0,
    '2023-12-22 04:08:19',
    '2023-12-22 04:08:19'
  ),
  (
    6,
    'Deva',
    'deva',
    'deva@gmail.com',
    '$2y$12$L8UV6CBQ.D2WpKwD0.v3hOgAsWLkuY57OfrXCt8Ewrpbc9bxpdXtK',
    0,
    '2023-12-22 11:23:17',
    '2023-12-24 14:02:34'
  ),
  (
    20,
    'Abdy Arysada',
    'AbdyArysada',
    'abdy@gmail.com',
    '$2y$12$FMSOLG6rbI78SVXSdQSoL.z7Me8gkId6qPoxMsbXV.KSvVov1VQgu',
    0,
    '2023-12-25 07:58:02',
    '2023-12-25 15:47:21'
  ),
  (
    21,
    'Arya Darma',
    'AryaDarma',
    'arya@gmail.com',
    '$2y$12$ELa6N6KK87svM968DwpoM.L/YaK3hPr2brgh9cylJHIVyQfVZmeTi',
    0,
    '2023-12-25 08:18:22',
    '2023-12-25 08:18:22'
  ),
  (
    22,
    'Dilan Pros',
    'dilan',
    'dilan@gmail.com',
    '$2y$12$/.7pRxE3tyQqIp97a26CYuDWHBdR.YPFjJiRJl2K4YpKrTPXqJO26',
    0,
    '2023-12-25 17:25:37',
    '2023-12-25 17:26:26'
  ),
  (
    23,
    'Rangga Wijaya',
    'ranggawijaya',
    'rangga@gmail.com',
    '$2y$12$I72Cn5TZo1RARP.nWyDq9erD2Z/hEPXXBrd/m7jpbPfPCqItDrEE6',
    0,
    '2023-12-26 01:34:38',
    '2023-12-26 01:34:52'
  );

--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `comments`
--
ALTER TABLE
  `comments`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE
  `contacts`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE
  `migrations`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakets`
--
ALTER TABLE
  `pakets`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_categories`
--
ALTER TABLE
  `paket_categories`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE
  `posts`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_categories`
--
ALTER TABLE
  `post_categories`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saranas`
--
ALTER TABLE
  `saranas`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sarana_categories`
--
ALTER TABLE
  `sarana_categories`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usahas`
--
ALTER TABLE
  `usahas`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE
  `comments`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 23;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE
  `contacts`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE
  `migrations`
MODIFY
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pakets`
--
ALTER TABLE
  `pakets`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT untuk tabel `paket_categories`
--
ALTER TABLE
  `paket_categories`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE
  `posts`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 30;

--
-- AUTO_INCREMENT untuk tabel `post_categories`
--
ALTER TABLE
  `post_categories`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT untuk tabel `saranas`
--
ALTER TABLE
  `saranas`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 16;

--
-- AUTO_INCREMENT untuk tabel `sarana_categories`
--
ALTER TABLE
  `sarana_categories`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usahas`
--
ALTER TABLE
  `usahas`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE
  `users`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 24;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;