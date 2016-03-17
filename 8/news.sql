-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-01-14 08:14:02
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- 表的结构 `news_carousel`
--

CREATE TABLE IF NOT EXISTS `news_carousel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `pic_address` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `news_carousel`
--

INSERT INTO `news_carousel` (`id`, `pic_address`) VALUES
(1, 'slide-1.jpeg'),
(2, 'slide-2.jpeg'),
(5, '1452570952.png'),
(6, '1452571062.jpeg'),
(7, '1452571252.jpeg');

-- --------------------------------------------------------

--
-- 表的结构 `news_hotlist`
--

CREATE TABLE IF NOT EXISTS `news_hotlist` (
  `id` int(10) unsigned NOT NULL COMMENT '自增id',
  `hot_title` varchar(32) NOT NULL COMMENT '热点新闻标题',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news_hotlist`
--

INSERT INTO `news_hotlist` (`id`, `hot_title`) VALUES
(1, '乐视购国安股份');

-- --------------------------------------------------------

--
-- 表的结构 `news_list`
--

CREATE TABLE IF NOT EXISTS `news_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `news_title` varchar(64) NOT NULL COMMENT '新闻标题',
  `news_content` text NOT NULL COMMENT '新闻内容',
  `news_time` int(11) NOT NULL COMMENT '添加时间（时间戳）',
  `news_source` varchar(32) NOT NULL COMMENT '新闻来源',
  `news_pic` varchar(64) NOT NULL COMMENT '新闻图片地址',
  `news_pic_2` varchar(32) NOT NULL COMMENT '第二张图',
  `news_pic_3` varchar(32) NOT NULL COMMENT '第三张图',
  `show_mode` tinyint(1) NOT NULL COMMENT '显示模式，1：单图，2：无图，3：多图',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `news_list`
--

INSERT INTO `news_list` (`id`, `news_title`, `news_content`, `news_time`, `news_source`, `news_pic`, `news_pic_2`, `news_pic_3`, `show_mode`) VALUES
(2, '日媒：张成哲遭肃清钱曾持假护照2次前往日本', '', 1452647722, '搜狐要闻', '145212839906843616_720_1000.jpeg', '', '', 1),
(3, '成功熔断背后的原因是什么', '2016年开盘第一天即触发了熔断机制，股市提前收市，有人对该机制是否适合我国表示怀疑。', 1452647726, '', '', '', '', 2),
(4, '起底半成品生鲜行业之殇，下一步如何破局？', '', 1452647726, '', '20160107093597979797.jpg', '20160107092728412841.jpeg', '20160107092835003500.jpg', 3),
(5, '火车票票面广告首次公开招商', '目前车票正面只发布文字广告，如果招商全部成', 1452647726, '网易头条', 'DBB51607A45BF0E584010DD6A91547E5.jpg', '', '', 1),
(6, '沈建光：人民币大幅贬值的代价', '当月人民币大幅贬值，加剧市场恐慌情绪，进而导致企业、个人竞相换汇，资本大幅流出是主要原因。', 1452647726, '为您优选', '', '', '', 2),
(9, '胜似MVP!无格林勇士攻防暴跌', '当勇士有格林在场上时，他们平均100回合进攻得分是118.8分，而没有格林在场上时，勇士的平均...', 1452755583, '精选', '1452755581.jpg', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
