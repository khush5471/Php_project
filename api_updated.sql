-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 01:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `resturl`
--

CREATE TABLE `resturl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturl`
--

INSERT INTO `resturl` (`id`, `name`) VALUES
(1, 'khushpreet'),
(2, 'Amit'),
(3, 'Harita');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('khush', 'khush@yopmail.com', '11111'),
('gunitass', 'gunit@gmail.com', '22222'),
('gunitass', 'gunit@gmail.com', '22222'),
('khush', 'khush@yopmail.com', '222'),
('khush', 'khush@yopmail.com', ''),
('khush', 'khush@yopmail.com', '222'),
('khush', 'khush@yopmail.com', '22222'),
('khush', 'khush@yopmail.com', '222'),
('khush', 'khush@yopmail.com', '55555'),
('khush', 'khush@yopmail.com', '555'),
('khush', 'khush@yopmail.com', '222'),
('khush', 'khush@yopmail.com', '2222'),
('khush', 'khush@yopmail.com', '2222'),
('khush', 'khush@yopmail.com', '222'),
('khush', 'khush@yopmail.com', '1111'),
('khush', 'khush@yopmail.com', '222'),
('khushpreet', 'k@yopmail.com', '11111'),
('khushpreet', 'k@yopmail.com', '44444'),
('khushpreet', 'k@yopmail.com', '444'),
('sss', 'sss@ddd.ddd', '22222'),
('ssss', 'ssss@ddd.dd', '11111'),
('aaaa', 'aaa@aaa.aaa', 'aaaaa'),
('aaaa', 'aaa@aaa.aaa', 'aaaa'),
('lll', 'lll@lll.ll', '44444'),
('gunitass', 'gunit@gmail.com', '22222'),
('lll', 'lll@lll.ll', '1111'),
('lll', 'lll@lll.ll', '111'),
('gunitass', 'gunit@gmail.com', '22222'),
('lll', 'lll@lll.ll', 'llll'),
('ssss', 'ssss@sss.ss', 'ssssss'),
('ssssaaa', 'ssss@sss.ss', ''),
('kkk', 'kkk@Kkskk', '1111'),
('kkk', 'kkk@Kkskk', '111'),
('kkk', 'kkk@Kkskk', 'qqq'),
('amrit', 'amri@yopmail.com', 'qqqqq'),
('ARSH', 'ARSH2@GMAIL.COM', '444'),
('aa', 'qqq', 'www'),
('aaaaa', 'dddd', 'ddddd'),
('amanaaa', 'aaa@aaa.aaa', 'aaa'),
('mmm', 'mmm', 'mmmm'),
('ARSH', 'ARSH@GMAIL.COM', 'sss'),
('amrit', 'amri@yopmail.com', 'sssss'),
('kkk', 'kkk', 'kkk'),
('Assss', 'ARSG@GMAIL.COM', 'ssss'),
('ARSH4', 'ARSH@GMAIL.COM', 'qqqq'),
('ARSH', 'ARSH3@GMAIL.COM', 'sssss'),
('ARSH2', 'ARSH2@GMAIL.COM', 'wwww'),
('aa', 'ARSH@GMAIL.COM', 'aaa'),
('aa', 'ARSH2@GMAIL.COM', 'aaa'),
('aa', 'amri@yopmail.com', 'aaaa'),
('mm', 'kkk@kkk.cc', '22222'),
('mm', 'kkk@kkk.cc', '222222'),
('kkk', 'k@yopmail.com', 'kkkkkk'),
('mm', 'kkk@kkk.cc', '222222'),
('mm', 'kkk@kkk.cc', '222222'),
('mm', 'kkk@kkk.cc', '222222'),
('mm', 'kkk@kkk.cc', '222222'),
('aa', 'a@a.a', 'qqqqq'),
('aa', 'a@a.a', 'qqqqq'),
('aaaa', 'a@a.a', 'qqqqq'),
('aaaaa', 'a@a.a', 'qqqqq'),
('aa', 'a@a.a', 'qqqqqq'),
('mm', 'kkk@kkkpppp.ccmmm', '222222'),
('mm', 'kkk@kkkpppp.ccmmm', '222222'),
('mm', 'kkk@kkkpppp.ccmmm', '222222'),
('aaaa', 'a@a.addd', 'qqqqqq'),
('aa', 'a@a.aaa', 'aaaaa'),
('aaaaa', 'a@a.aqwqwq', 'aaaaa'),
('aa', 'a@a.aawss', 'sssss'),
('aa', 'a@a.alll', 'nnnnn'),
('aaaaa', 'a@a.asaasas', 'aaaaa'),
('aaaa', 'aaaa@sss.sss', 'aaaaa'),
('aa', 'a@a.aaammm', '11111'),
('hello', 'khush5471@gmail.com', 'qqqqq'),
('mm', 'kkk@kkkpppp.ccmmms', '222222'),
('mmee', 'a@gmail.com', '22222'),
('mmee', 'a@gmail.co', '@@@@k'),
('mmee', 'a@gmail.connnn', '2tgbjjj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
