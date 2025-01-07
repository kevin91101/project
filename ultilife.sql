-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-01-07 17:10:40
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ultilife`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `Pid` int(7) NOT NULL,
  `Pname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`Pid`, `Pname`) VALUES
(1, '2018'),
(2, '2019'),
(3, '2020'),
(4, '2021'),
(5, '2022'),
(6, '2023'),
(7, '2024'),
(8, '2025'),
(9, '2026'),
(10, '2027'),
(11, '2028'),
(12, '2029'),
(14, '2030'),
(15, '2031');

-- --------------------------------------------------------

--
-- 資料表結構 `photos`
--

CREATE TABLE `photos` (
  `Pid` int(7) NOT NULL,
  `Ptitle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `photos`
--

INSERT INTO `photos` (`Pid`, `Ptitle`) VALUES
(1, 'danny'),
(2, 'danny'),
(3, 'connie舉重'),
(4, 'connie舉重');

-- --------------------------------------------------------

--
-- 資料表結構 `stmember`
--

CREATE TABLE `stmember` (
  `ID` int(7) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Passwd` varchar(256) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `stmember`
--

INSERT INTO `stmember` (`ID`, `Name`, `Passwd`, `Email`, `Created_at`) VALUES
(1, 'Kevin', '123', 's9860815@gmail.com', '2025-01-02 05:31:32');

-- --------------------------------------------------------

--
-- 資料表結構 `ulmember`
--

CREATE TABLE `ulmember` (
  `Ulid` int(7) NOT NULL,
  `Ulname` varchar(20) NOT NULL,
  `Ulpasswd` varchar(256) NOT NULL,
  `Ulemail` varchar(50) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `ulmember`
--

INSERT INTO `ulmember` (`Ulid`, `Ulname`, `Ulpasswd`, `Ulemail`, `Created_at`) VALUES
(1, 'Kevin', '123', 's9860815@gmail.com', '2025-01-02 05:31:32'),
(2, 'danny', 'danny123', 'danny@test.com', '2025-01-06 06:39:25');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Pid`);

--
-- 資料表索引 `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Pid`);

--
-- 資料表索引 `stmember`
--
ALTER TABLE `stmember`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `ulmember`
--
ALTER TABLE `ulmember`
  ADD PRIMARY KEY (`Ulid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `Pid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photos`
--
ALTER TABLE `photos`
  MODIFY `Pid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stmember`
--
ALTER TABLE `stmember`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ulmember`
--
ALTER TABLE `ulmember`
  MODIFY `Ulid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
