-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'guru', 'guru@gmail.com', '77e69c137812518e359196bb2f5e9bb9'),
(2, 'santhosh', 'santhosh@gmail.com', 'f1134a6d1c4fcfee2132c09223dea961'),
(4, 'sale', 'sale@gmail.com', 'e70b59714528d5798b1c8adaf0d0ed15'),
(6, 'akash', 'akash@gmail.com', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(7, 'rohan', 'rohan@gmail.com', 'c916d142f0dc7f9389653a164f1d4e9d'),
(9, 'rahul', 'rahul@gmail.com', '439ed537979d8e831561964dbbbd7413'),
(10, 'bob', 'bob@gmail.com', '9f9d51bc70ef21ca5c14f307980a29d8'),
(11, 'kapil', 'kapil@gmail.com', '3499776ee73013a17c9ce7c3c3b252e5'),
(12, 'raj', 'raj@gmail.com', '65a1223dae83b8092c4edba0823a793c'),
(13, 'admin', 'admin@gururaja.in', '21232f297a57a5a743894a0e4a801fc3'),
(18, 'Dr Vinoth Kumar', 'vinoth@gmail.com', 'fa86a4bc29f9f7626716787e890203b6'),
(19, 'Dr Sudar Manikandan', 'sudar@gmail.com', '15482f2d0c2487a30a73ce1a201f57af'),
(20, 'Dr Bharanidharan', 'bharani@gmail.com', '66c3f8f200de1766353c75182b158b18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
