-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 06:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registeration`
--
CREATE DATABASE IF NOT EXISTS `registeration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registeration`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `registeration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `registeration_date`) VALUES
(1, 'test@test.com', 'testusername', 'testpassword', '2014-03-11 01:11:15'),
(2, 'gimy@gmail.com', 'gamal', 'gimmygimmy', '2019-10-09 21:44:02'),
(3, 'kimo@gmail.com', 'karim', 'ps', '2019-10-09 21:44:02'),
(4, '.abdo@mail.com.', '.Abdelkarim.', '.what.', '2019-10-10 07:59:22'),
(5, '.abdo@mail.com.', '.Abdelkarim.', '.what.', '2019-10-10 07:59:46'),
(6, '.abdo@mail.com.', '.Abdelkarim.', '.what.', '2019-10-10 08:00:03'),
(7, 'abdo@mail.com', 'Abdelkarim', 'what', '2019-10-10 08:02:15'),
(8, 'a7mo@mail.com', 'Abdelkarim', 'hhh', '2019-10-10 08:05:46'),
(9, 'est@test.com', 'Abdelkar', 'hhh', '2019-10-10 08:08:04'),
(10, 'fun@fun.com', 'galabo', 'gogo', '2019-10-10 08:25:30'),
(11, 'bmgaberah@gmail.com', 'Basem Gaber', 'nonono', '2019-10-10 08:27:39'),
(12, 'mynameis@emial.com', 'Ahmed Mohamed', 'e511e2a4a4b88e45e210c770b932afb7', '2019-10-10 08:31:15'),
(13, 'bmgaberah@hotmail.com', 'Basem', '5bc8b3c903b946f2a5931f4fcdf84f34', '2019-10-10 09:59:35'),
(14, 'e@test.com', 'OhNO', '37f525e2b6fc3cb4abd882f708ab80eb', '2019-10-10 10:03:37'),
(15, 'nee@tt.com', 'hhh', '3691308f2a4c2f6983f2880d32e29c84', '2019-10-10 10:09:09'),
(16, 'ss@hh.cc', 'ss', '560a457e56a3d7c3de6879a163c8ecbb', '2019-10-10 10:27:31'),
(17, 'ff@Hh.jj', 'ff', '1aabac6d068eef6a7bad3fdf50a05cc8', '2019-10-10 10:31:05'),
(18, 'bakeonmw@gmail.com', 'Ahmed Bake', 'c41efc6a27e4dc601ef9f1df937bcdff', '2019-10-13 08:44:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
