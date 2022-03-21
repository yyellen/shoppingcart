-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-21 10:35:36
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `shop_order`
--

CREATE TABLE `shop_order` (
  `id` int(5) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `price` int(5) NOT NULL,
  `amount` int(3) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `order_time` datetime NOT NULL,
  `valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `shop_order`
--

INSERT INTO `shop_order` (`id`, `user_id`, `product_id`, `product_name`, `price`, `amount`, `delivery`, `order_time`, `valid`) VALUES
(1, 1, 1, '頂級柔軟都市氛圍圖案床包枕套組', 2880, 2, '', '2022-03-21 10:29:43', 1),
(2, 1, 4, '新鮮空運極品挪威生鮭魚片5片組', 1265, 3, '', '2022-03-21 10:29:43', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop_order`
--
ALTER TABLE `shop_order`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
