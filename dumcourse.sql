-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 04:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Haris A'),
(2, 'joker'),
(3, 'batman'),
(4, 'anto'),
(5, 'trentan'),
(6, 'cho'),
(7, 'rahma'),
(8, 'prof'),
(9, 'prof'),
(10, 'prof');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vidio_link` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `vidio_link`, `type`, `id_course`) VALUES
(5, 'asd', 'as', 'as', 1),
(6, 'rgrgs', 'sgsgsdgs', 'dghdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `id_author` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `deskription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `thumbnail`, `id_author`, `duration`, `deskription`) VALUES
(1, 'Sass', 'https://sass-lang.com/assets/img/logos/logo-b6e1ef6e.svg', 1, '100', 'berisikan tutorial sass khusus dasar'),
(2, 'PHP', 'https://www.php.net/images/logos/new-php-logo.svg', 2, '100', 'berisikan tutorial php khusus dasar'),
(3, 'html', 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_1280.png', 3, '100', 'berisikan tutorial html khusus dasar'),
(4, 'css', 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_1280.png', 3, '100', 'berisikan tutorial css khusus dasar'),
(5, 'React native', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1280px-React-icon.svg.png', 4, '100', 'berisikan tutorial React native khusus dasar'),
(6, 'Javascript', 'https://seeklogo.com/images/N/nodejs-logo-FBE122E377-seeklogo.com.png', 5, '100', 'berisikan tutorial javascript khusus dasar'),
(7, 'Node Js', 'https://cdn.pixabay.com/photo/2015/04/23/17/41/node-js-736399_960_720.png', 6, '100', 'berisikan tutorial node js khusus dasar'),
(8, 'Laravel', 'https://seeklogo.com/images/L/laravel-framework-logo-C10176EC8C-seeklogo.com.png', 7, '100', 'berisikan tutorial laravel khusus dasar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
