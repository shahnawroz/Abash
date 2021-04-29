-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `un` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `rent_price` decimal(10,0) NOT NULL,
  `date_a` date NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `type` varchar(200) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`un`, `name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`, `type`, `image`) VALUES
('mf555', 'maruf', 'md.maruf555@gmail.com', 'dhaka', '25000', '2018-12-21', '01778598669', 'Apartment_For_Sell', 0x696d672f646f776e6c6f61642e6a7067),
('mn', 'man', 'afasdsd@gmail.com', 'kka', '12563', '2018-12-21', '123456', 'Bechalor', 0x696d672f31345f5f313534343138363639335f36333139322e6a7067),
('mn555', 'mamun', 'mn@gmail.com', 'motijil', '25000', '2018-12-29', '01885969887', 'Family', 0x696d672f706978656c2d686f7573652e6a706567),
('naw', 'Nawroz', 'nawroz.mians@gmail.com', 'Dhaka Cantonment', '1000000', '2018-12-14', '01258963585', 'office', 0x696d672f322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `un` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address` longtext NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `pw` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `tag`, `name`, `email`, `un`, `address`, `phone_no`, `pw`) VALUES
(23, 1, 'Mariful Islam', 'abash_admin@gmail.com', 'admin', 'Nikunja,Dhaka\r\n', '01775896995', '4acb4bc224acbbe3c2bfdcaa39a4324e'),
(24, 1, 'Nawroz', 'nawroz_abash@gmail.com', 'nj55', 'Motijil,Dhaka\r\n', '01779696995', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 2, 'mamun', 'mn@gmail.com', 'mn555', 'Dhaka\r\n', '01558969887', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 2, 'Sakib', 'ghgh@gmail.com', 'sk444', 'dhaka', '01775896995', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 2, 'Munni', 'afasdsd@gmail.com', 'mn', 'dhaka', '01775896936', '7bccfde7714a1ebadf06c5f4cea752c1'),
(28, 2, 'Nadim', 'nawroz.mians@gmail.com', 'naw', 'Dhaka Cantonment', '01258963585', '202cb962ac59075b964b07152d234b70'),
(29, 2, 'Maruf', 'md.maruf555@gmail.com', 'mf555', 'Dhaka', '01775896996', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`un`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
