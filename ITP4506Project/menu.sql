-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.1.40-MariaDB
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ITP4506`
--

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `Dishes` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `Price` int(4) NOT NULL,
  `SpecificDay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`Dishes`, `ID`, `Price`, `SpecificDay`) VALUES
('CRispy Battered Fish & Chips', 1, 212, 'everyday'),
('Fish Of The Day', 2, 167, 'everyday'),
('Pie Of The Day', 3, 167, 'everyday'),
('Slow Roast Pork Belly', 4, 268, 'everyday'),
('Smoked Chicken & Bacon Fettuccine', 5, 196, 'everyday'),
('Smoked Chicken Breast', 6, 215, 'everyday'),
('Smoked Lamb Shank', 7, 252, 'everyday'),
('Smothered Beef Rib Eye', 8, 279, 'everyday'),
('The Great Steak', 9, 207, 'everyday'),
('Veggie \'O Veg', 10, 188, 'everyday'),
('Smothered Chicken', 11, 80, 'monday'),
('Grilled Tenderioin', 12, 70, 'monday'),
('Calabash Shirmp', 13, 93, 'monday'),
('Fish Fillet with Arugula', 14, 72, 'tuesday'),
('Smoked Beef', 15, 93, 'tuesday'),
('Grilled Salmon', 16, 70, 'tuesday'),
('Roasted Pork', 17, 72, 'wednesday'),
('Baked Cheesy Potato', 18, 61, 'wednesday'),
('Big Burger Delight', 19, 45, 'wednesday'),
('Smoked Beef', 20, 72, 'thursday'),
('Calabash Shrimp', 21, 86, 'thursday'),
('Roasted Pork', 22, 93, 'thursday'),
('SeaFfood Platter', 23, 88, 'friday'),
('Baked Cheesy Patate', 24, 86, 'friday'),
('Grilled Tenderloin', 25, 77, 'friday'),
('Fish Fillet with Aruguis', 26, 96, 'saturday'),
('Baked Chessy Salmon', 27, 110, 'saturday'),
('Big Burger Delight', 28, 85, 'saturday');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
