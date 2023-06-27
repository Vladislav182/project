-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 25 апр 2023 в 12:14
-- Версия на сървъра: 10.4.27-MariaDB
-- Версия на PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `barber_shop`
--

-- --------------------------------------------------------

--
-- Структура на таблица `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(90) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `message`) VALUES
(8, 'Владислав', 'vladislavd268@gmail.com', 'Здравейте!'),
(9, 'Владислав Димитров', 'vladislavd268@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Структура на таблица `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `reg_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `reservation`
--

INSERT INTO `reservation` (`Id`, `first_name`, `last_name`, `telephone`, `email`, `reg_date`) VALUES
(15, 'Владислав', 'Димитров', '0897569546', 'vladislavd268@gmail.com', '2023-04-27'),
(22, 'Владислав', 'Димитров', '+359897569', 'vladislavd268@gmail.com', '2023-04-24');

-- --------------------------------------------------------

--
-- Структура на таблица `services`
--

CREATE TABLE `services` (
  `Id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `services`
--

INSERT INTO `services` (`Id`, `subject_name`, `price`, `description`) VALUES
(1, 'Мъжки прически', 25, 'Подстригване, измиване, стилизиране и маска за лице.'),
(2, 'Оформяне на брада', 15, 'Оформяне на брадата с машинка за подстригване, самобръсначка и по избор топла кърпа.'),
(3, 'КОМБО \"ПОДСТРИГВАНЕ И ОФОРМЯНЕ НА БРАДА\"', 35, 'Подстригване, измиване, оформяне на брада с машинка за подстригване и бръснач.'),
(4, 'КРАЛСКО БРЪСНЕНЕ НА ГЛАВАТА', 30, 'Обръснете главата си с топла кърпа и напарване.'),
(5, 'ОФЕРТА ЗА БАЩА И СИН, ИЛИ ПРИЯТЕЛИ', 40, 'Офертата е включена, когато идвате с ваш приятел или член на вашето семейство.');

-- --------------------------------------------------------

--
-- Структура на таблица `team`
--

CREATE TABLE `team` (
  `Id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `person_description` varchar(255) NOT NULL,
  `position` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `team`
--

INSERT INTO `team` (`Id`, `services_id`, `full_name`, `person_description`, `position`) VALUES
(1, 1, 'Владислав Димитров', 'Бръснарските ножици са като четка за рисуване, създавайки шедьовър на всяка глава, която докоснат.', 'Основател'),
(2, 2, 'Калин Тошев', 'Ръцете на бръснаря са инструментите на техния занаят, но сърцето им е истинският инструмент на тяхното изкуство.', 'Съосновател'),
(3, 3, 'Алекс Цветанов', 'Бръснарят не е просто фризьор, а дизайнер на прическа.', 'Барбер'),
(4, 3, 'Момчил Никифоров', 'Добрият бръснар знае как да слуша, а не само да чува.', 'Барбер');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Vladi', '12345678'),
(2, 'dwsgsr', '234324');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id` (`id`);

--
-- Индекси за таблица `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`);

--
-- Индекси за таблица `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Индекси за таблица `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
