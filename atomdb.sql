-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 06:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user_id`, `label`, `title`, `header`, `body`) VALUES
(1, 1, 'Home', 'Home Page', 'Welcome to my page!', 'Компания ARISTO основана в 2003 году. С этого времени ARISTO работает над созданием качественных решений для организации пространства и хранения вещей, несет уют и комфорт в каждый дом. Сегодня компания осваивает новые сферы, готовит новые проекты, расширяет ассортимент и совершенствует прежние начинания.'),
(2, 1, 'About', 'About Us', 'About my page', '<img style=\"float:right; width:500px; height:300px; margin-left:10px;\" src=\"images/comp.jpg\">\r\n2017\r\nГОД <br>\r\n• Начало продаж раздвижной системы NOVA. <br>\r\n• Создание  коллекции мебельных фасадов Avignon (Авиньон). \r\n<br><br>\r\n2016\r\nГОД <br>\r\n• Вывод на рынок французской коллекции раздвижных дверей ARISTO. <br>\r\n• Запуск массового производства гардеробной системы в России. <br>\r\n• Открытие представительств в городах: Брянск, Саратов и Казань. \r\n\r\n'),
(49, 1, 'Label', 'Title', 'Header', 'Body'),
(50, 1, 'Test', 'Test 55', 'TEST', 'Test<br>\r\nTest2');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`) VALUES
(1, 'Max', 'Skult', 'max@gmail.com', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 1),
(2, 'Richard', 'Hunt', 'richard@hunt.lv', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 1),
(3, 'Julija', 'Skult', 'julja@gmail.com', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
