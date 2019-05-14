-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 03:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudd`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` varchar(2000) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `waktu`) VALUES
(2, 'Be The New You ', 'Buku Wirda Mansur, Be The New You berisi motivasi-motivasi yang cocok untuk anak muda. Dengan bahasa ringan yang dibawa melalui tulisan, Wirda menggiring opini setiap pembaca agar mau berubah menjadi lebih baik seperti apapun kesalahan di masa lalu. Kesalahan kita sebagai manusia tentu banyak mulai dari perihal percintaan, diri yang jatuh ke dalam maksiat, melupakan Allah, dan lain-lain. Namun, kita jangan sampai melupakan bahwa kasih sayang Allah itu luas. Allah Maha Mengampuni setiap hambaNya yang mau bertobat. Selain itu, Wirda juga mengajak pembaca untuk menata masa depan dengan penuh semangat dan percaya diri. ', '2019-05-12 08:16:05'),
(3, 'Refrain', 'Novel Refrain di buat oleh seorang penulis yang bernama Winna Efendi, Refrain bercerita tentang persahabatan Niki dan Nata sedari kecil. Setelah mereka SMU, masuk lagi satu orang dalam lingkaran persahabatan mereka yaitu Annalise. Sosok gadis bule yang ibunya adalah model terkenal yang dikagumi Niki. Setelah itu, muncul lagi seorang cowok, kapten tim basket sekolah lain yang tertarik kepada Niki dan membuat Niki jatuh cinta dengan sikap gentlementnya, Oliver. Tetapi semuanya berubah ketika sesuatu terjadi. Intinya, novel ini menceritakan saat cinta selalu pulang. Cinta selalu pulang kemana seharusnya cinta itu berada.', '2019-05-12 02:45:54'),
(4, 'Dear Tomorrow', 'Buku ini di tulis oleh Maudy Ayunda dimana ia merupakan salah seorang pegiat hiburan tanah air yang lekat dengan label cerdas dan multitalenta. Selain cemerlang di dunia hiburan Indonesia, kiprahnya dibidang pendidikan pun terbilang cukup luar biasa, buku yang bertajuk Dear Tomorrow ini, berisi tentang idenya mengenai hidup, cinta dan cita-citanya.', '2019-05-12 02:46:07'),
(5, 'Laskar Pelangi', 'Novel pertama karya Andrea Hirata ini memang jempolan. Bercerita mengenai mirisnya pendidikan  di Indonesia, kita disuguhkan bagaimana sepuluh anak kecil yang hidup di daerah terpencil dan serba kekurangan berjuang untuk bisa sekolah. Saking larisnya, novel ini diterjemahkan ke dua puluh bahasa, dijadikan film, dibuatkan lagu, dan meraih berbagai penghargaan nasional serta internasional.', '2019-05-12 03:57:07'),
(6, 'Pulang', 'Pulang\" novel karya TERE LIYE ini bertemakan tentang perjuangan perjalanan pulang seorang Bujang, tokoh utama dalam novel ini memegang kendali yang berperan besar dalam bidang shadow economy (ekonomi bayangan atau biasa disebut usaha gelap/ilegal). Disaat yang sama pula, Ia melewati banyak rintangan dengan apa yang Dia hadapi tetapi juga bukan karena tercermin oleh lingkungan yang membesarkannya. Selama 3000 hari lamanya belajar memahami bagaimana menjadi seorang yang taat akan agama yang bisa mengalahkan ego sendiri. Selama itu pula, terjadilah pertarungan panjang untuk melepaskan pelukan erat antara kebencian dan rasa sakit. Disaat itulah Bujang kembali pulang pada Mamaknya, pada kampung halamannya, dan dari mana ia berasal.', '2019-05-12 06:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'aisyah', 'aisyah@gmail.com', '123'),
(2, 'aliya', 'aliya@gmail.com', 'aliya'),
(3, 'karla', 'karla@gmail.com', 'karla'),
(4, 'nabila', 'nabila@gmail.com', 'nabila'),
(5, 'risya', 'ris@gmail.com', 'risya'),
(6, 'bisa', 'bisa@gmail.com', 'bisa'),
(7, 'nanda', 'nanda@gmail.com', '123'),
(8, 'yati', 'yati@gmail.com', 'yati'),
(9, 'tasyi', 'tasyi@gmail.com', '123'),
(10, 'key', 'ke@gmail.com', 'ke'),
(11, 'Miniso', 'miniso@gmail.com', 'miniso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
