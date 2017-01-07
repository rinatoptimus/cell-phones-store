-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:8889
-- Время создания: Янв 07 2017 г., 11:37
-- Версия сервера: 5.5.42
-- Версия PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cell-phones-store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cell_phones`
--

CREATE TABLE `cell_phones` (
  `cell_phone_id` int(11) NOT NULL,
  `cell_phone_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cell_phones`
--

INSERT INTO `cell_phones` (`cell_phone_id`, `cell_phone_name`) VALUES
(1, 'iPhone SE 16 Gb'),
(2, 'iPhone SE 32 Gb'),
(3, 'iPhone SE 64 Gb'),
(4, 'iPhone 6 32 Gb'),
(5, 'iPhone 6 64 Gb'),
(6, 'iPhone 6 128 Gb'),
(7, 'iPhone 4s 8 Gb'),
(8, 'iPhone 4s 16 Gb'),
(9, 'iPhone 4s 32 Gb'),
(10, 'iPhone 7 32 Gb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cell_phones`
--
ALTER TABLE `cell_phones`
  ADD PRIMARY KEY (`cell_phone_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cell_phones`
--
ALTER TABLE `cell_phones`
  MODIFY `cell_phone_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
