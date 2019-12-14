-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 14 2019 р., 22:06
-- Версія сервера: 10.4.10-MariaDB
-- Версія PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `td-shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(5, '::1', 1),
(3, '::1', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `customer_categories`
--

CREATE TABLE `customer_categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `customer_categories`
--

INSERT INTO `customer_categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Strong part of humanity.'),
(2, 'Women', 'Beautiful part of humanity.');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 1, 1, '2019-12-14 19:09:17', 'Barbarian Sword', 'product-1.jpg', 280, 'Sword', '<p>Nice sword for collecting. But it can easily be used for duels)</p>'),
(2, 1, 1, '2019-12-14 19:09:25', 'Goblin Sword', 'product-2.jpg', 250, 'Sword', '<p>Nice masterwork piece.</p>'),
(3, 1, 1, '2019-12-14 19:09:33', 'Viking Sword', 'viking-crop-1.jpg', 300, 'Sword', '<p>One of the best replicas)</p>'),
(4, 1, 2, '2019-12-14 19:09:44', 'Longclaw Sword', 'longclaw-sword.jpg', 290, 'Sword', '<p>Film copy.</p>'),
(5, 4, 1, '2019-12-14 19:09:55', 'Medieval Shield', 'Medieval-shield.jpg', 250, 'Shield', '<p>Nice adding for sword)</p>'),
(6, 3, 1, '2019-12-14 19:10:06', 'Medieval Armor', 'Medieval-armor.jpg', 500, 'Armor', '<p>Classic medieval armor replica.</p>'),
(7, 3, 2, '2019-12-14 19:10:16', 'Medieval Women Armor', 'Medieval-girl-armor.jpg', 450, 'Armor', '<p>Egyptian medieval female armor.</p>');

-- --------------------------------------------------------

--
-- Структура таблиці `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Swords', 'A weapon with a long blade for cutting or thrusting that is often used as a symbol of honor or authority.'),
(2, 'Daggers', 'A sharp pointed knife for stabbing.'),
(3, 'Armor', 'Defensive covering for the body.'),
(4, 'Shields', 'A broad piece of defensive armor carried on the arm.');

-- --------------------------------------------------------

--
-- Структура таблиці `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'slide 1', 'slide-1.jpg'),
(2, 'slide 2', 'slide-2.jpg'),
(3, 'slide 3', 'slide-1.jpg'),
(4, 'slide 4', 'slide-2.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `customer_categories`
--
ALTER TABLE `customer_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Індекси таблиці `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Індекси таблиці `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `customer_categories`
--
ALTER TABLE `customer_categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
