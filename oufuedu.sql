-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-03-15 01:41:00
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oufuedu`
--

-- --------------------------------------------------------

--
-- 表的结构 `o_apply`
--

CREATE TABLE IF NOT EXISTS `o_apply` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o_applytip`
--

CREATE TABLE IF NOT EXISTS `o_applytip` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `desc` text,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_applytip`
--

INSERT INTO `o_applytip` (`id`, `title`, `author`, `ctime`, `type`, `position`, `source`, `status`, `desc`, `content`) VALUES
(1, '英国留学签证最新动态：要把外国学生踢出去?23', '丫坏孩子', 3, 0, 1, '欧孚留学', 0, '111111', '<p>2222233333333</p>'),
(2, '英国留学签证最新动态', '丫坏孩子', 21, 2, 2, '欧孚留学', 0, '1', '2'),
(3, '香港留学签证最新动态', 'ZMO联盟', 123, 0, 2, '1', 0, '1', '2'),
(4, '英国留学签证最新动态：要把外国学生踢出去?', '宋朝瑞', 123, 2, 3, '欧孚留学', 0, '3', '4'),
(5, '英国留学签证最新动态：要把外国学生踢出去?', '丫坏孩子', 123, 2, 4, '欧孚留学111', 0, '4', '4'),
(6, '英国留学签证最新动态：要把外国学生踢出去?', '12', 12, 1, 12, '21', 0, '12', '12'),
(9, '英国留学签证最新动态：要把外国学生踢出去?', '丫坏孩子', 1425737099, 0, 1, '欧孚留学', 0, '2222222', '<p ><strong><span >333333333333333333333</span></strong></p>'),
(10, '233333333333333333333', '33', 1425739040, 0, 33, '333333', 0, '333', '<p><strong>22222222222222222222222222222222</strong></p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_aus`
--

CREATE TABLE IF NOT EXISTS `o_aus` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_aus`
--

INSERT INTO `o_aus` (`id`, `title`, `author`, `ctime`, `content`) VALUES
(2, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 1426350858, '<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_carousel`
--

CREATE TABLE IF NOT EXISTS `o_carousel` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o_country`
--

CREATE TABLE IF NOT EXISTS `o_country` (
`id` int(11) NOT NULL,
  `usa` text,
  `uk` text,
  `hk` text,
  `aus` text,
  `singapore` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o_eassy`
--

CREATE TABLE IF NOT EXISTS `o_eassy` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_eassy`
--

INSERT INTO `o_eassy` (`id`, `title`, `author`, `type`, `thumb`, `ctime`, `position`, `content`) VALUES
(1, 'test222', '333', 0, '14260707276504.png', 1426070727, 22, '<p>222122222</p>'),
(2, 'wewewe', 'wewewe', 0, '14260707527201.png', 1426070752, 23, '<p>dddddddddddddd</p>'),
(3, '2323323', '232', 0, '14257847275707.jpg', 1425784728, 33, '<p>232323<br/></p>'),
(4, '12121212', '12', 0, '14257860301462.jpg', 1425786031, 21, '<p>21212<br/></p>'),
(5, '454545', '45', 0, '14257860628872.png', 1425786063, 54, '<p>5454</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_eassytip`
--

CREATE TABLE IF NOT EXISTS `o_eassytip` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `desc` text,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_eassytip`
--

INSERT INTO `o_eassytip` (`id`, `title`, `author`, `ctime`, `type`, `source`, `position`, `status`, `desc`, `content`) VALUES
(1, '文书技巧111224', '丫坏孩子', 123, 0, '欧孚留学', 1, 0, '111', '<p>11</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_evaluation`
--

CREATE TABLE IF NOT EXISTS `o_evaluation` (
`id` int(11) NOT NULL,
  `fcountry` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `scountry` varchar(255) DEFAULT NULL,
  `ltime` int(11) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `nschool` varchar(255) DEFAULT NULL,
  `nmajor` varchar(255) DEFAULT NULL,
  `stype` int(11) DEFAULT NULL,
  `gpa` float(2,1) DEFAULT '0.0',
  `egpa` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ssex` int(11) DEFAULT NULL,
  `ndgree` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o_feedback`
--

CREATE TABLE IF NOT EXISTS `o_feedback` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o_hk`
--

CREATE TABLE IF NOT EXISTS `o_hk` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_hk`
--

INSERT INTO `o_hk` (`id`, `title`, `author`, `ctime`, `content`) VALUES
(2, 'xxxxxxxx11', 'xxxxxxxxxxxxxxxx', 1426350869, '<p>xxxxxxxxxxxxxxxxxxxxxx</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_singapore`
--

CREATE TABLE IF NOT EXISTS `o_singapore` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_singapore`
--

INSERT INTO `o_singapore` (`id`, `title`, `author`, `ctime`, `content`) VALUES
(1, 'aaaaa111122', 'a111111111', 0, '<p>aaddddddddddd11111111</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_uk`
--

CREATE TABLE IF NOT EXISTS `o_uk` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_uk`
--

INSERT INTO `o_uk` (`id`, `title`, `author`, `ctime`, `content`) VALUES
(2, 'qqqqqq11122', '', 0, '&lt;p&gt;qqqqqqqqqqqqqqqqqqqqqqq1112&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `o_usa`
--

CREATE TABLE IF NOT EXISTS `o_usa` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_usa`
--

INSERT INTO `o_usa` (`id`, `title`, `author`, `ctime`, `content`) VALUES
(14, '8888888888888', '8888888888888888888', 1426351017, '<p>vvvvvvvvvvvvvvvvvvvvvvvv1111</p>');

-- --------------------------------------------------------

--
-- 表的结构 `o_user`
--

CREATE TABLE IF NOT EXISTS `o_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o_user`
--

INSERT INTO `o_user` (`id`, `username`, `password`, `email`, `mobile`, `status`, `type`) VALUES
(1, 'yzm', 'yzmyzm', NULL, NULL, NULL, NULL),
(2, 'hallo', 'hellooo', NULL, NULL, NULL, NULL),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `o_apply`
--
ALTER TABLE `o_apply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_applytip`
--
ALTER TABLE `o_applytip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_aus`
--
ALTER TABLE `o_aus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_carousel`
--
ALTER TABLE `o_carousel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_country`
--
ALTER TABLE `o_country`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_eassy`
--
ALTER TABLE `o_eassy`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_eassytip`
--
ALTER TABLE `o_eassytip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_evaluation`
--
ALTER TABLE `o_evaluation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_feedback`
--
ALTER TABLE `o_feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_hk`
--
ALTER TABLE `o_hk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_singapore`
--
ALTER TABLE `o_singapore`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_uk`
--
ALTER TABLE `o_uk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_usa`
--
ALTER TABLE `o_usa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_user`
--
ALTER TABLE `o_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `o_apply`
--
ALTER TABLE `o_apply`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_applytip`
--
ALTER TABLE `o_applytip`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `o_aus`
--
ALTER TABLE `o_aus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `o_carousel`
--
ALTER TABLE `o_carousel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_country`
--
ALTER TABLE `o_country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_eassy`
--
ALTER TABLE `o_eassy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `o_eassytip`
--
ALTER TABLE `o_eassytip`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `o_evaluation`
--
ALTER TABLE `o_evaluation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_feedback`
--
ALTER TABLE `o_feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_hk`
--
ALTER TABLE `o_hk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `o_singapore`
--
ALTER TABLE `o_singapore`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `o_uk`
--
ALTER TABLE `o_uk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `o_usa`
--
ALTER TABLE `o_usa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `o_user`
--
ALTER TABLE `o_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
