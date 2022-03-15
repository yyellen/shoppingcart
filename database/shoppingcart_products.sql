-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-15 17:07:04
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
-- 資料表結構 `shoppingcart_products`
--

CREATE TABLE `shoppingcart_products` (
  `ID` int(3) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` text NOT NULL,
  `price` int(5) NOT NULL,
  `desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `qty` int(5) NOT NULL,
  `valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `shoppingcart_products`
--

INSERT INTO `shoppingcart_products` (`ID`, `name`, `image`, `price`, `desc`, `qty`, `valid`) VALUES
(1, '頂級超柔軟都市氛圍圖案床包枕套組', '\"https://i.imgur.com/fAhjNel.jpg\"', 2100, '雙人鋪棉床罩x1+鋪棉兩用被套x1+歐式鋪棉枕套x2+美式薄枕套x2+抱枕套x2，八件╱組', 10, 1),
(2, '十層附輪抽屜收納櫃', '\"https://i.imgur.com/UpoC7V5.jpg\"', 1990, '直取式加寬大容量，附輪子讓您輕鬆移動好方便<br/>\r\n採用高級塑膠原料，堅固軔性高，更耐用<br/>\r\n可收納各類小東西、衣物、玩具、工具、雜物<br/>', 20, 1),
(3, '雜誌架茶几邊桌', '\"https://i.imgur.com/YrpltIq.jpg\"', 1288, '簡約北歐風格邊桌<br/>\r\n附造型雜誌架收納書報最好用<br/>\r\n可作茶几邊桌、床邊桌、電話桌等靈活用途<br/>', 12, 1),
(4, '新鮮空運極品挪威生鮭魚片5片組', '\"https://i.imgur.com/JcecyoA.jpg\"', 1280, '低溫急速冷凍，新鮮空運<br/>\r\n來自深海自然海域，肉質紅嫩<br/>\r\n內含5片，每片重量約200g~230g', 50, 1),
(5, '全自動咖啡機', '\"https://i.imgur.com/aFMsXRF.jpg\"', 12800, '仿手沖-六個方向均勻沖泡，媲美手沖口感<br/>\r\n二種穩定水溫萃取-83度及90度，使口感醇厚平衡<br/>\r\n採用石臼式碾磨方式，低速運轉能減少摩擦生熱影響咖啡粉口感，使磨豆更加均勻，並保持咖啡豆的風味<br/>\r\n細/中/粗三段研磨選擇，適用各式烘焙度咖啡<br/>\r\n咖啡豆、咖啡粉皆可沖煮，也可當磨豆機單獨磨豆用<br/>\r\n研磨機可拆卸、分解，利用毛刷清掃咖啡粉，搭配清潔模式，輕鬆清洗機器<br/>', 15, 1),
(6, '鑽石塗層不沾鍋具6件組', '\"https://i.imgur.com/A45Kmup.jpg\"', 3980, '20cm平底鍋+30cm燉煮鍋+26cm小炒鍋+16cm單柄湯鍋+16cm玻璃蝴蝶鍋蓋+可拆式把手', 30, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `shoppingcart_products`
--
ALTER TABLE `shoppingcart_products`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shoppingcart_products`
--
ALTER TABLE `shoppingcart_products`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
