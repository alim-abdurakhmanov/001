-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2016 г., 14:49
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Buildex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `firstid` int(11) NOT NULL,
  `secid` int(11) NOT NULL,
  `thirdid` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `adtext` text NOT NULL,
  `workload` varchar(256) NOT NULL,
  `term` varchar(256) NOT NULL,
  `applications` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `regionid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `ads`
--

INSERT INTO `ads` (`id`, `userid`, `type`, `firstid`, `secid`, `thirdid`, `title`, `adtext`, `workload`, `term`, `applications`, `date`, `regionid`) VALUES
(6, 2, 0, 2, 2, 2, 'TEST', 'Интереесно девки пляшуьт', '123', '123', 0, '2016-01-27 19:53:59', 15),
(7, 2, 0, 2, 3, 3, 'заказ3', 'adtext', '', '', 0, '2016-01-27 19:54:05', 2),
(8, 2, 0, 2, 3, 5, 'заказ3', 'adtext', '', '', 0, '2016-01-27 19:54:12', 3),
(9, 2, 0, 2, 0, 0, 'заказ3', 'adtext', '', '', 0, '2016-01-27 19:54:19', 4),
(10, 2, 0, 3, 0, 0, 'заказ3', 'adtext', '', '', 0, '2016-01-27 19:54:26', 4),
(11, 2, 0, 2, 0, 0, '2стр', 'adtext', '', '', 0, '2016-01-27 19:54:48', 5),
(12, 2, 0, 2, 0, 0, 'заказ3', 'adtext', '', '', 0, '2016-01-27 19:54:53', 6),
(13, 2, 0, 2, 0, 0, 'asdw', 'adtext', '', '', 0, '2016-01-28 08:02:28', 7),
(14, 2, 0, 2, 0, 0, 'qweqwe', 'adtext', '', '', 0, '2016-01-28 08:02:33', 8),
(15, 2, 0, 2, 0, 0, '123', 'adtext', '', '', 0, '2016-01-28 08:08:04', 9),
(16, 2, 0, 2, 0, 0, '4cnh', 'adtext', '', '', 0, '2016-01-28 08:08:10', 10),
(17, 2, 0, 2, 0, 0, '123', 'adtext', '', '', 0, '2016-01-28 08:22:22', 11),
(18, 2, 0, 0, 0, 0, '123', 'adtext', '', '', 0, '2016-01-28 08:22:28', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adid` int(11) NOT NULL,
  `clid` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `adid`, `clid`, `text`, `date`) VALUES
(1, 6, 8, 'Авизо, архитектара, и джокирав', '2016-02-11 12:55:13'),
(2, 6, 2, '1231342', '2016-02-11 12:55:15');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(256) NOT NULL,
  `sec` varchar(256) NOT NULL,
  `third` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `first`, `sec`, `third`) VALUES
(1, 'Комплексные работы', '', ''),
(2, 'Строительно-монтажные работы', '', ''),
(3, 'Отделочные работы', '', ''),
(4, 'Инженерные сети', '', ''),
(5, 'Благоустройство территорий', '', ''),
(6, 'Обслуживание объектов', '', ''),
(7, 'Проектно-сметные работы', '', ''),
(8, 'Дизайнерские работы', '', ''),
(9, 'Бытовые услуги', '', ''),
(10, 'Прочие работы', '', ''),
(11, 'Свайные работы', '', ''),
(12, 'Стеновые панели', '', ''),
(13, 'Металлические конструкции', '', ''),
(14, 'Деревянные конструкции', '', ''),
(15, 'Другое', '', ''),
(16, 'Внутренняя отделка', '', ''),
(17, 'Наружная отделка', '', ''),
(18, 'Другое', '', ''),
(19, 'Водоснабжение и водоотведение', '', ''),
(20, 'Электрика', '', ''),
(21, 'Отопление', '', ''),
(22, 'Вентиляция', '', ''),
(23, 'Кондиционирование', '', ''),
(24, 'Окна и двери', '', ''),
(25, 'Дорожные работы', '', ''),
(26, 'Озеленение', '', ''),
(27, 'Освещение территорий', '', ''),
(28, 'Обустройство площадок', '', ''),
(29, 'Искусственные водоемы', '', ''),
(30, 'Аренда оборудования и техники', '', ''),
(31, 'Пусконаладочные работы', '', ''),
(32, 'Вывоз мусора', '', ''),
(33, 'Грузоперевозки', '', ''),
(34, '', '', ''),
(35, 'Инженерное проектирование', '', ''),
(36, 'Сметные работы', '', ''),
(37, 'Исполнительная документация', '', ''),
(38, 'Геолого-геодезические работы', '', ''),
(39, 'Кадастр', '', ''),
(40, '', '', ''),
(41, 'Ландшафтный дизайн', '', ''),
(42, 'Фито дизайн', '', ''),
(43, 'Интерьер', '', ''),
(44, 'Дизайн-проект', '', ''),
(45, 'Другое', '', ''),
(46, 'Сборка мебели', '', ''),
(47, 'Услуги грузчиков', '', ''),
(48, 'Уборка', '', ''),
(49, 'Другое', '', ''),
(50, 'Напольные покрытия', '', ''),
(51, 'Ремонт квартир и домов ', '', ''),
(52, 'Канадский дом', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `performers`
--

CREATE TABLE IF NOT EXISTS `performers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `actlink` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `region`) VALUES
(1, 'Алупка'),
(2, 'Алушта'),
(3, 'Армянск'),
(4, 'Бахчисарай'),
(5, 'Белогорск'),
(6, 'Джанкой'),
(7, 'Евпатория'),
(8, 'Инкерман'),
(9, 'Керчь'),
(10, 'Красноперекопск'),
(11, 'Саки'),
(12, 'Симферополь'),
(13, 'Севастополь'),
(14, 'Старый Крым'),
(15, 'Судак'),
(16, 'Феодосия'),
(17, 'Щелкино'),
(18, 'Ялта');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `firstid` int(11) NOT NULL,
  `secid` int(11) NOT NULL,
  `thirdid` int(11) NOT NULL,
  `price` varchar(256) NOT NULL,
  `regionid` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(256) NOT NULL,
  `actid` varchar(256) NOT NULL,
  `busy` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `whois` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `phone`, `name`, `firstid`, `secid`, `thirdid`, `price`, `regionid`, `type`, `status`, `role`, `actid`, `busy`, `description`, `whois`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@mail.ru', 0, 'Админ админов', 1, 0, 0, '', 2, 'admin', 100, 'admin', '', '', '', ''),
(2, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'er@mail.ru', 0, 'Василий Теркин', 2, 0, 0, '', 1, 'cust', 100, '', '', '', '', 'FL'),
(8, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sav-1990@yandex.ru', 2147483647, 'Алексей Ивановwqeq', 3, 0, 0, '', 1, 'perf', 100, 'user', 'bf8cdedeff3ee9810d05c6b5973b18c709db14fc', '12344545', 'описание1231', 'UL'),
(14, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'era@mail.ru', 124314, 'Алексей Валерьев', 5, 0, 0, '', 3, 'perf', 100, 'user', '482ca8824489f1c076a5124cf85732ed7c4adef5', '', 'Описание мое.', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
