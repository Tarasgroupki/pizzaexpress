-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 17 2016 г., 05:51
-- Версия сервера: 5.5.25
-- Версия PHP: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `express_pizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `hash`) VALUES
(1, '7488e331b8b64e5794da3fa4eb10ad5d');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`) VALUES
(1, 'Товар'),
(2, 'Замовлення');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `category`, `link`) VALUES
(1, 'Піца', 'pizza'),
(2, 'Напої', 'drinks'),
(3, 'Додатки', 'bonus'),
(4, 'Акція', 'action');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(34) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `things` varchar(500) NOT NULL,
  `made_someone` text NOT NULL,
  `price_of_order` int(34) NOT NULL,
  `count` varchar(255) NOT NULL,
  `plus` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `E-mail`, `address`, `things`, `made_someone`, `price_of_order`, `count`, `plus`) VALUES
(5, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(6, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 80, '', ''),
(7, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 160, '', ''),
(8, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(9, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(10, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(11, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(12, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(13, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(14, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(15, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 390, '', ''),
(16, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(17, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(18, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(19, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(20, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(21, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(22, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(23, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '', ''),
(24, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 340, '1,,1', ''),
(25, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита', '', 340, '1,1,1', ''),
(26, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 240, '', ''),
(27, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', ''),
(28, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 150, '', ''),
(29, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', ''),
(30, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 210, '', ''),
(31, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 210, '', ''),
(32, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 210, '', ''),
(33, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 210, '', ''),
(34, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 210, '', ''),
(35, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(36, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(37, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(38, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(39, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(40, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 0, '', ''),
(41, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 70, '', ''),
(42, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '', ''),
(43, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '', ''),
(44, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '', ''),
(45, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '', ''),
(46, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '', 'Value2'),
(47, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита,Маргарита', '', 420, '', 'Value2'),
(48, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита,Маргарита,Маргарита', '', 420, '', 'Value2'),
(49, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', ''),
(50, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 220, '1,2', 'Value1'),
(51, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 220, '1,2', 'Value1'),
(52, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', ''),
(53, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 130, '1,1', 'Value'),
(54, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value'),
(55, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 150, '1,1', 'Value1'),
(56, 'Taras', 'taras2andry@mail.ru', 'Kalush', ',,', '', 210, '1,1,1', 'Value1'),
(57, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value1'),
(58, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value1'),
(59, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 160, '1,1', 'Value'),
(60, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 70, '1', ''),
(61, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '1', 'Value'),
(62, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value'),
(63, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 70, '1', 'Value1'),
(64, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value1'),
(65, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', '', 0, '', 'Value1'),
(66, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 80, '1', 'Value'),
(67, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Маргарита', '', 230, '1,2', 'Value2'),
(68, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Шинка,Салямі,Шпроти,Тунець', 140, '2,1', 'Value1'),
(69, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Шинка,Салямі,Шпроти,Тунець', 80, '1,2', 'Value1'),
(70, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 50, '1,2', ''),
(71, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 80, '1,2', 'Value'),
(72, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти', 80, '1,2', 'Value'),
(73, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Салямі,Шпроти,Тунець', 320, '1,2', 'Value'),
(74, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Моцарелла,Шинка,Салямі,Шпроти', 380, '1,2', 'Value2'),
(75, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 280, '', 'Value2'),
(76, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти', 405, '', 'Value1'),
(77, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 420, '', 'Value2'),
(78, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 420, '', 'Value2'),
(79, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 420, '', 'Value2'),
(80, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 360, '', 'Value'),
(81, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 420, '', 'Value1'),
(82, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Шинка,Салямі,Шпроти,Тунець', 360, '', 'Value1'),
(83, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 460, '', 'Value1'),
(84, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Шинка,Салямі,Шпроти,Тунець', 430, '', 'Value1'),
(85, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита,Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 470, '1,2', 'Value'),
(86, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 480, '', 'Value1'),
(87, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 390, '', 'Value1'),
(88, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти,Тунець', 390, '', 'Value1'),
(89, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 'Моцарелла,Шинка,Салямі,Шпроти,Тунець', 280, '', 'Value2'),
(90, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Піца-зроби сам', 'Цибуля,Моцарелла,Шинка,Салямі,Шпроти', 270, '2', 'Value1'),
(91, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Маргарита', '', 240, '3', 'Value1');

-- --------------------------------------------------------

--
-- Структура таблицы `things`
--

CREATE TABLE IF NOT EXISTS `things` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title_ua` varchar(255) NOT NULL,
  `title_ru` varchar(225) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_cart` varchar(255) NOT NULL,
  `description_ua` text NOT NULL,
  `description_ru` text NOT NULL,
  `description_en` text NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `size_ua` varchar(255) NOT NULL,
  `size_ru` varchar(255) NOT NULL,
  `size_en` varchar(255) NOT NULL,
  `price` int(34) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `things`
--

INSERT INTO `things` (`id`, `title_ua`, `title_ru`, `title_en`, `image`, `image_cart`, `description_ua`, `description_ru`, `description_en`, `category_name`, `size_ua`, `size_ru`, `size_en`, `price`) VALUES
(1, 'Маргарита', 'Маргарита', 'Margarita', 'image/products/pitsa_mobile.png', 'image/products/pitsa_cart.png', 'Шинка, помідори, оливки, морква, салямі, моцарелла, гриби', 'Ветчина, помидоры, оливки, морковь, салями, моцарелла, грибы', 'Ham, tomatoes, olives, carrots, salami, mozzarella, mushrooms', 'pizza', 'Піца - 32см', 'Пицца-32см', 'Pizza-32sm', 80),
(2, 'Маргарита', 'Маргарита', 'Margarita', 'image/products/pitsa_mobile.png', 'image/products/pitsa_cart.png', 'Шинка, помідори, оливки, морква, салямі, моцарелла, гриби', 'Ветчина, помидоры, оливки, морковь, салями, моцарелла, грибы', 'Ham, tomatoes, olives, carrots, salami, mozzarella, mushrooms', 'pizza', 'Піца - 32см', 'Пицца-32см', 'Pizza-32sm', 70),
(3, 'Маргарита', 'Маргарита', 'Margarita', 'image/products/pitsa_mobile.png', 'image/products/pitsa_cart.png', 'Шинка, помідори, оливки, морква, салямі, моцарелла, гриби', 'Ветчина, помидоры, оливки, морковь, салями, моцарелла, грибы', 'Ham, tomatoes, olives, carrots, salami, mozzarella, mushrooms', 'pizza', 'Піца - 32см', 'Пицца-32см', 'Pizza-32sm', 80),
(4, 'Маргарита', 'Маргарита', 'Margarita', 'image/products/pitsa_mobile.png', 'image/products/pitsa_cart.png', 'Шинка, помідори, оливки, морква, салямі, моцарелла, гриби', 'Ветчина, помидоры, оливки, морковь, салями, моцарелла, грибы', 'Ham, tomatoes, olives, carrots, salami, mozzarella, mushrooms', 'pizza', 'Піца - 32см', 'Пицца-32см', 'Pizza-32sm', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
