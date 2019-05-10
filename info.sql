-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-05-10 05:32:25
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cse442`
--

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE `info` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `office` text NOT NULL,
  `hours` text NOT NULL,
  `course` text NOT NULL,
  `rate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`id`, `name`, `office`, `hours`, `course`, `rate`) VALUES
(0, 'Bina Ramamurthy', '345 Davis Hall', 'T/TR:2:00pm-3:20pm', 'CSE426/ CSE487', 'ProfessorRating_Bina_Ramamurthy.html'),
(1, 'Carl Alphonce', '343 Davis Hall', 'M/W 11:00a.m - 11:40a.m', 'CSE306/CSE443', 'ProfessorRating_Carl_Alphonce.html'),
(2, 'Jennifer Winikus', '351 Davis Hall', 'T/TR: 11:00a.m - 12:00p.m', 'CSE101/ CSE115/ CSE241', 'ProfessorRating_Jennifer_Winikus.html'),
(3, 'Matthew Hertz', '352 Davis Hall', 'M: 3:00p.m - 5:00p.m, TR: 9:00a.m - 11:00a.m', 'CSE 115/ CSE 542 ', 'ProfessorRating_Matthew_Hertz.html'),
(4, 'Matthew Knepley', '211A Capen Hall', 'M: 10:00a.m - 11:00a.m', 'CSE 410/ CSE191', 'ProfessorRating_Matthew_Knepley.html'),
(5, 'Zhanpeng Jin', '336 Davis Hall', 'TR: 3:00p.m - 4:00p.m', 'CSE341', 'ProfessorRating_Zhanpeng_Jin.html');

--
-- 转储表的索引
--

--
-- 表的索引 `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
