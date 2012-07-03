-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 16 2012 г., 14:11
-- Версия сервера: 5.5.16
-- Версия PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `otbprof`
--
CREATE DATABASE `otbprof` DEFAULT CHARACTER SET cp1251 COLLATE cp1251_general_ci;
USE `otbprof`;

-- --------------------------------------------------------

--
-- Структура таблицы `days`
--

CREATE TABLE IF NOT EXISTS `days` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `day` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31');

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `linkkey` int(10) NOT NULL,
  `titledoc` varchar(50) NOT NULL,
  `typedoc` varchar(50) NOT NULL,
  `datep` varchar(50) NOT NULL,
  `dateo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `linkkey` (`linkkey`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `month` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `months`
--

INSERT INTO `months` (`id`, `month`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10'),
(11, '11'),
(12, '12');

-- --------------------------------------------------------

--
-- Структура таблицы `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titleprof` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `profession`
--

INSERT INTO `profession` (`id`, `titleprof`) VALUES
(15, 'машинист автокрана'),
(16, 'стропальщик'),
(17, 'газорезчик'),
(18, 'по электробезопасности'),
(19, 'рабочий люльки'),
(20, 'оператор'),
(24, 'газмяс'),
(25, 'крановщик');

-- --------------------------------------------------------

--
-- Структура таблицы `rsu`
--

CREATE TABLE IF NOT EXISTS `rsu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `rsu`
--

INSERT INTO `rsu` (`id`, `number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `rsu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=162 ;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `surname`, `name`, `secondname`, `rsu`) VALUES
(125, 'Турубанов', 'Василий', 'Кимович', '1'),
(128, 'Шарыгин', 'Юрий', 'Александрович', 'Директор'),
(156, 'Кузнецов', 'Андрей', 'Вячеславович', '1'),
(158, 'Сопронюк', 'Евгений', 'Владимирович', '1'),
(161, 'Соколова', 'Вера', 'Александровна', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `workers_docs`
--

CREATE TABLE IF NOT EXISTS `workers_docs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkkey` int(10) NOT NULL,
  `titledoc` varchar(50) NOT NULL,
  `typedoc` varchar(50) NOT NULL,
  `datep` varchar(50) NOT NULL,
  `dateo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `linkkey` (`linkkey`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=115 ;

--
-- Дамп данных таблицы `workers_docs`
--

INSERT INTO `workers_docs` (`id`, `linkkey`, `titledoc`, `typedoc`, `datep`, `dateo`) VALUES
(98, 53, '4', '4', '04.04.2004', '04.04.2008'),
(103, 56, 'фф', 'фффф', '01.01.1990', '01.01.1992'),
(104, 56, 'ккк', 'ккк', '01.01.1990', '01.01.1992'),
(105, 59, 'ппп', 'ппп', '01.01.1998', '01.01.2002'),
(106, 58, 'и', 'и', '01.01.1991', '01.01.1993'),
(107, 56, 'ыыы', 'ыыыы', '01.01.1993', '01.01.1998'),
(108, 60, 'io', 'io', '04.01.1990', '04.01.1993'),
(109, 58, 'документ', 'для стропальщиков', '09.01.1990', '09.01.1992'),
(110, 60, 'Приказghbrfp', 'ффффффф', '01.04.1990', '01.04.1992'),
(111, 53, '', '', '01.01.1990', '01.01.1970'),
(112, 53, 'фф', 'ффф', '01.01.1990', '01.01.1991'),
(114, 63, 'фвфывфыв', 'фывфывфыв', '01.01.2011', '01.01.2012');

-- --------------------------------------------------------

--
-- Структура таблицы `workers_prof`
--

CREATE TABLE IF NOT EXISTS `workers_prof` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkkey` int(10) NOT NULL,
  `titleprof` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `linkkey` (`linkkey`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=64 ;

--
-- Дамп данных таблицы `workers_prof`
--

INSERT INTO `workers_prof` (`id`, `linkkey`, `titleprof`) VALUES
(51, 157, 'машинист автокрана'),
(52, 157, 'газорезчик'),
(53, 125, 'машинист автокрана'),
(55, 125, 'по электробезопасности'),
(56, 156, 'машинист автокрана'),
(58, 156, 'стропальщик'),
(59, 158, 'оператор'),
(60, 128, 'стропальщик'),
(61, 159, 'машинист'),
(62, 160, 'машинист'),
(63, 161, 'стропальщик');

-- --------------------------------------------------------

--
-- Структура таблицы `years`
--

CREATE TABLE IF NOT EXISTS `years` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `year` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, 1990),
(2, 1991),
(3, 1992),
(4, 1993),
(5, 1994),
(6, 1995),
(7, 1996),
(8, 1997),
(9, 1998),
(10, 1999),
(11, 2000),
(12, 2001),
(13, 2002),
(14, 2003),
(15, 2004),
(16, 2005),
(17, 2006),
(18, 2007),
(19, 2008),
(20, 2009),
(21, 2010),
(22, 2011),
(23, 2012),
(24, 2013),
(25, 2014),
(26, 2015),
(27, 2016),
(28, 2017),
(29, 2018),
(30, 2019),
(31, 2020);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
