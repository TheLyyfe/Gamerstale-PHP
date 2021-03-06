-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2021 at 06:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamerstale`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `pic`) VALUES
(18, 'a', 'b', 'images/553.jpg'),
(19, 'b', 'c', 'images/424.jpg'),
(20, 'Yolo', 'afpa\r\n', 'images/650.png'),
(22, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, dui nec suscipit condimentum, turpis erat tempor ante, id posuere nisl ipsum id risus. Maecenas laoreet vestibulum sodales.', 'images/466.'),
(25, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, dui nec suscipit condimentum, turpis erat tempor ante, id posuere nisl ipsum id risus. Maecenas laoreet vestibulum sodales.', 'images/126.png'),
(26, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, dui nec suscipit condimentum, turpis erat tempor ante, ', 'images/255.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usermail` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `prenom`, `username`, `password`, `usermail`, `role`) VALUES
(1, '', 'admin', 'admin', 'a@a', 'admin'),
(2, 'Samy', 'Samsool', 'bb', 'b@b', 'user'),
(3, 'Nicolas', 'Lyyfe', 'gamerstale', 'lyyfe@gamerstale.fr', 'modo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `usermail` (`usermail`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
