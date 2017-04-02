-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2017 г., 19:10
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `Model` varchar(15) NOT NULL,
  `Mileage` varchar(11) NOT NULL,
  `Engine_number` varchar(11) NOT NULL,
  `Color` varchar(11) NOT NULL,
  `Year` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`car_id`, `Model`, `Mileage`, `Engine_number`, `Color`, `Year`) VALUES
(1, 'Subaru', '25300', 'TR452667', 'White', '1986'),
(2, 'Nissan', '365000', 'TR452667', 'Black', '2007'),
(3, 'Kamaz', '752400', 'TH452667', 'Green', '2011'),
(4, 'Peageot', '268755', 'TR988667', 'White', '2016'),
(5, 'Volvo', '12000', 'TR452687', 'White', '1952'),
(7, 'Opel', '36000', 'TO568910', 'Green', '2007'),
(8, 'Kraz', '750000', 'YU454389', 'Grey', '1985'),
(9, 'Nissan', '26890', 'TR34565', 'White', '2014'),
(10, 'Volvo', '12000', 'TR452687', 'White', '1952'),
(11, 'Renault', '12000', 'RT45673', 'Blue', '2012');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD UNIQUE KEY `car_id` (`car_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
