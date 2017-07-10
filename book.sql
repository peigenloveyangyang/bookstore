-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-05-19 22:35:08
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- 表的结构 `addbook`
--

CREATE TABLE `addbook` (
  `id` int(11) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `bookintro` varchar(100) NOT NULL,
  `bookwriter` varchar(100) NOT NULL,
  `bookpress` varchar(100) NOT NULL,
  `bookdate` varchar(100) NOT NULL,
  `bookprice` int(11) NOT NULL,
  `bookisbn` varchar(100) NOT NULL,
  `bookpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `addbook`
--

INSERT INTO `addbook` (`id`, `bookname`, `bookintro`, `bookwriter`, `bookpress`, `bookdate`, `bookprice`, `bookisbn`, `bookpic`) VALUES
(1, '疯狂HTML5讲义', '由李刚主编，很不错！', '李刚', '人民出版社', '2012.12.7', 60, '234-4546-34-23', 'img/20170517092258.jpg'),
(2, '编译原理', '解析计算机编译的过程！', '张三', '高等教育出版社', '2014-5-7', 57, '243-3543-64-35432', 'img/20170517092451.jpg'),
(3, '计算机网络技术', '完美诠释网络技术！', '危光辉', '中国电信出版社', '2015-4-7', 40, '2324-3432-234-1', 'img/20170517092615.jpg'),
(4, '微型计算机原理与接口技术', '从技术上介绍计算机从产生到现在的发展过程！', '张向东', '人民出版社', '2011-8-5', 70, '32423-23-234-2', 'img/20170517092802.jpg'),
(5, 'C语言应用案例', '介绍C语言的编程过程！', '王五', '电子科技出版社', '2011-5-19', 90, '23-45454-234-645', 'img/20170517092941.jpg'),
(6, '数据结构（C语言版）', '介绍计算机内数据的结构！', '吕飞', '清华大学出版社', '2014-4-23', 69, '232-45-23423-34', 'img/20170517093119.jpg'),
(7, 'Photoshop应用基础', '学习PS的好教程！', '王森', '电子工业出版社', '2010-5-8', 39, '23432-45-1242-13', 'img/20170517093241.jpg'),
(8, '算法导论（原书第3版）/计算机科学丛书 [Introduction to Algorithms, third edition]', '超过50万人阅读的算法圣经！算法标准教材，国内外1000余所高校采用', '[美] Charles E.Leiserson，[美] Ronald L.Rivest，[美] Clifford Stein 著；', ' 机械工业出版社', '2012-12-01', 87, '9787111407010', 'img/20170519221933.jpg'),
(9, '图灵程序设计丛书 HTML5指南', '弗里曼著 网站建设网页设计开发管理计算机畅销书籍', '弗里曼 (Adam Freeman)', '人民邮电出版社', '2014-01', 129, '9787115338365', 'img/20170519222201.jpg'),
(10, 'Spring实战（第4版）', '非常畅销的Spring图书也是国内读者极其熟悉的Spring经典图书之一Java web开发从入门到精通 了解Java Spring技术内幕', '[美] Craig Walls 沃尔斯 著；张卫滨 译', '人民邮电出版社', '2016-04-01', 62, '9787115417305', 'img/20170519222510.jpg'),
(11, 'Java从入门到精通(第4版)(附光盘)', '《Java从入门到精通（第4版）（附光盘)》从初学者角度出发，通过通俗易懂的语言、丰富多彩的实例，详细介绍了使用Java语言进行程序开发需要掌握的知识。', '李四', '清华大学出版社; 第4版 ', '2015-5-6', 54, '7302444544, 9787302444541', 'img/20170519223147.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'han', 123456),
(2, '张三', 123456),
(3, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`,`bookname`,`bookintro`,`bookwriter`,`bookpress`,`bookdate`,`bookprice`,`bookisbn`,`bookpic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`user`,`pass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
