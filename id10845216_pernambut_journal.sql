-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2020 at 07:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10845216_pernambut_journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`name`, `email`, `contact`, `comment`) VALUES
('ashkhan', 'ashkhanahmed1998@gmail.com', '9969666666', 'alhamdulillah'),
('Ashkhan Ahmed', 'ashpbt123@gmail.com', '8667546963', 'Alhamdulillah Mashaallah by the grace of Allah completed...'),
('Ashkhan Ahmed', 'tmdhussain96@gmail.com', '8546321994', 'Mashaallah very great.'),
('Dream racer', 'mdshuaib1998@gmail.com', '8807916613', 'Well done'),
('Kafeel Ahmed ', 'maazkafeel784@gmail.com', '8121101417', 'Good '),
('uvais', 'mohammeduvais104@gmail.com', '2589631478', 'bismillah.'),
('A', 'abc@gmail.com', '122', '1668÷9'),
('Ashkhan ', 'mohammedsultancs005@gmail.com', '9969666666', 'Assalamualikum'),
('Yasar', 'nmy3061@gmail.com', '366499494', 'Welcome'),
('Ashkhan Ahmed', 'mohammedsultancs005@gmail.com', '8667546963', 'Mashaallah Barakallah Alhamdulillah...');

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `S.No` int(200) NOT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`S.No`, `Name`, `Address`) VALUES
(1, 'Masjid-e-Aamina', 'Niyamath Street'),
(2, 'Masjid-e-Abdullah', 'Tahir Street'),
(3, 'Masjid-e-Abrar', 'Abrar Aabad'),
(4, 'Masjid-e-Abu Bakar Siddique', 'Bazar Street(Near Aamina street)'),
(5, 'Masjid-e-Ali(R.A)', 'Tharaikadu (khatib Nagar)'),
(6, 'Masjid-e-Ameen', 'Bazar Street'),
(7, 'Masjid-e-Ashraf', 'Ashraf Masjid Street'),
(8, 'Masjid-e-Ayesha (R.A)', 'Tharaikadu (Khatib Nagar)'),
(9, 'Masjid-e-Bagh', 'Small Mosque street'),
(10, 'Masjid-e-Bilal(R.A)', 'Tharaikadu (Khatib Nagar)'),
(11, 'Masjid-e-Charminar', 'Charminar Street'),
(13, 'Masjid-E-Diwan', 'Kalainjar Nagar'),
(14, 'Masjid-E-Fazal', 'High Road(Near Star Conventional hall)'),
(15, 'Masjid-E-Furqan', 'Habeeb Nagar(Mslimpur)'),
(16, 'Masjid-E-Huda (Dawatur Quran)', 'Bangla Medu'),
(17, 'Masjid-E-Ibrahim Khalilullah', 'Visharam Mana(Telephone Street Down)'),
(18, 'Masjid-E-Isthiqamath', 'Mahboob Nagar(Kolipannai)'),
(19, 'Masjid-E-Rasheedaabad', 'H.A.K street Rasheedabad'),
(20, 'Masjid-E-Jamia Ahle Hadees', 'Near wisdom girls school'),
(21, 'Masjid-E-Jamia', 'High Road'),
(22, 'Masjid-E-Jamia', 'Sathgar'),
(23, 'Masjid-E-Jumma', 'Sathgar'),
(24, 'Masjid-E-Khateeja(R.A)', 'Azeez Aabad'),
(25, 'Masjid-E-Lal', 'Lal Masjid Street'),
(26, 'Masjid-e-Lalapet', 'bangla Medu'),
(27, 'Masjid-e-Latifiah', 'Sapota Bagh'),
(28, 'Masjid-e-Madina', 'Aadam sahib street'),
(29, 'Masjid-e-mahmoud', 'Quaid-e-Millat Nagar'),
(30, 'Masjid-e-masood', 'Abrar Aabad'),
(31, 'Masjid-e-Mecca', 'Muslimpur'),
(32, 'Masjid-e-Mothi', 'Tippusa Street Down'),
(33, 'Masjid-e-Muhammadia', 'Rahmadabad Street'),
(34, 'Masjid-e-Musleemin', 'I.H.S school'),
(35, 'Masjid-e-Nawab', 'Big Mosque Street'),
(36, 'Masjid-e-New (Mokane Masjid)', 'Big Mosque Street'),
(37, 'Masjid-e-Nouman', 'Tharikadu'),
(38, 'Masjid-e-Park', 'I.H.S.S Street'),
(39, 'Masjid-e-Zakir Raheemi', 'H.A.K Street Rasheedabad'),
(40, 'Masjid-e-Rahmania', 'H.A.K Street Rasheedabad'),
(41, 'Masjid-e-Road (Near Raja Medical)', 'High Road'),
(42, 'Masjid-e-sathgar', 'Sathgar'),
(43, 'Masjid-e-Sheikul Hadees', 'Patel street'),
(44, 'Masjid-e-Small', 'Small Mosque street'),
(45, 'Masjid-e-Taqwa', 'Othawadi '),
(46, 'Masjid-e-Thouheed', 'High Road'),
(47, 'Masjid-e-Umar(R.A)', 'Telephone street'),
(48, 'Masjid-e-Umar bin Khattab(R.A)', 'Umar Street'),
(49, 'Masjid-e-usman (R.A)', 'Kolipannai down'),
(50, 'Masjid-e-Wasiyatul Uloom', 'Iqbal Street'),
(51, 'Masjid-e-Hasaniya', 'safdar Street'),
(52, 'Masjid-e-Zakriya', 'Rahmadabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
  MODIFY `S.No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
