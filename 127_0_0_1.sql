-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2017 年 12 月 28 日 03:27
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shopsystem`
--
CREATE DATABASE IF NOT EXISTS `shopsystem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shopsystem`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `auser` varchar(22) NOT NULL COMMENT '管理员用户',
  `apass` varchar(22) NOT NULL COMMENT '管理员密码',
  `aname` varchar(22) NOT NULL COMMENT '真实名字',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `apass`, `aname`) VALUES
(1, '123456', '123456', '陈志荣'),
(2, '陈志荣', '123456', '');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(50) NOT NULL COMMENT '商品名字',
  `gpic` varchar(50) NOT NULL COMMENT '商品图片',
  `gprice` float NOT NULL COMMENT '商品单价',
  `gnum` int(11) NOT NULL COMMENT '库存',
  `ginfo` varchar(300) NOT NULL COMMENT '介绍',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`gid`, `gname`, `gpic`, `gprice`, `gnum`, `ginfo`) VALUES
(17, '商品名称：宏碁V5-471G-53334G50Mass', '001.jpg', 3899, 500, '商品名称：宏碁V5-471G-53334G50Mass\r\n商品毛重：3.62kg\r\n商品产地：中国大陆\r\n显卡：入门级独显\r\n触控：非触控\r\n厚度：普通轻薄（21mm-25mm）\r\n处理器：Intel i5\r\n\r\n外观设计\r\n体态纤薄\r\n全系列机身厚度都小于一英寸\r\n14”: 20mm\r\n	\r\n舒适视觉\r\n整体机身圆滑纤薄，一眼看过去就是舒适、悠闲的轻松感。\r\n	\r\n典雅出彩\r\nA，B，C壳色彩相呼应，展现流行、雅致、及经典。\r\n	\r\n简洁大器\r\nC面设计简单明了，采用黑色磨砂面巧克力键盘及蓝光LED电源指示灯，没有多馀令人眼花的按钮。\r\n\r\n\r\n产品特色\r\n轻薄灵动\r\n厚度:14寸:20mm'),
(18, '索尼SVF1421AYCW', '1514422873_002.jpg', 4499, 100, '商品名称：索尼SVF1421AYCW\r\n商品毛重：2.86kg\r\n商品产地：中国大陆\r\n显卡：性能级独显\r\n触控：非触控\r\n厚度：普通轻薄（21mm-25mm）\r\n处理器：Intel i5尺寸：14英寸\r\n\r\n简约外而\r\n带来完美音质体验的娱乐型笔记本，简约的流线型外观，更加时尚，符合潮流趋势。\r\n\r\n超震撼音质，强韧显卡\r\nVAIO的声音技术拥有多种声音选项，符合个性化的设置和环境适应，清晰动人的灵魂享受，还原最真实的音乐。\r\n\r\n索尼色彩加强技术\r\n索尼色彩加强技术拥有3个色彩模式，以适应不同的屏幕观看需求，让您畅享乐趣生活。\r\n\r\n实用功能，贴心掌控\r\n手势遥控可支持使用VAIO内置摄像'),
(19, '惠普G6-2328TX', '1514422925_003.jpg', 3699, 55, '商品名称：惠普G6-2328TX\r\n商品毛重：3.48kg\r\n商品产地：中国大陆\r\n显卡：性能级独显\r\n触控：非触控\r\n厚度：普通轻薄（21mm-25mm）\r\n处理器：Intel i5尺寸：15英寸\r\n\r\n产品细节\r\n全新晶亮具备底纹设计的IMR工艺，让HP Pavilion g系列更加光彩照人，具备十足内敛的个性魅力。镀铬音乐条让产品更具灵性魅力，碗式细节设计，让美观与易用达到完美的统一。 孤岛式键盘，让产品更具魅力同时拥有更轻松便捷的输入体验。\r\n\r\n产品性能\r\nHP Pavilion g系列的长寿命电池可以充电循环达1500次，电池使用时间能够达到5个小时以上，半天无需插电体验自由移动生'),
(20, '神舟（HASEE）精盾K580S-i7D0 15.6英寸笔记本（i7-3630QM 8G 500G ', '1514422977_004.jpg', 4399, 555, '\r\n最新IvyBridge核心酷睿四核i7处理器\r\n采用了最新的22nm制程，在性能和功耗上面将会有更出色的表现。i7-3630QM处理器为四核八线程，最大功耗45W，主频2.4GHz，对于庞杂冗余的任务特别游刃有余。更值得一提的是搭载的全新核芯显卡HD4000，在图形和游戏性能的表现上特别突出，视频编辑和共享的速度令人惊叹。已经逐步取代了A、N两家中端独立显卡的位置。\r\n\r\n开普勒GT650M 2G DDR3顶级独显\r\n架构及28mm的先进制程，让整个显卡在已有的技术上使图形表现实现了一次大跨越。而最新版本的optimus不仅能够根据计算机当前任务实时在集显独显间切换，还能动态调整显卡频率，');

-- --------------------------------------------------------

--
-- 表的结构 `goodsorder`
--

CREATE TABLE IF NOT EXISTS `goodsorder` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `onum` int(11) NOT NULL,
  `otime` varchar(100) NOT NULL,
  `buyType` varchar(100) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `FK_gid` (`gid`),
  KEY `FK_uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `goodsorder`
--

INSERT INTO `goodsorder` (`oid`, `gid`, `uid`, `onum`, `otime`, `buyType`) VALUES
(6, 17, 1, 5, '2017-12-28 09:51:14', '货到付款'),
(7, 18, 1, 1, '2017-12-28 09:51:28', '网上支付'),
(8, 17, 11, 1, '2017-12-28 10:17:11', '网上支付'),
(9, 19, 1, 1, '2017-12-28 10:24:30', '网上支付');

-- --------------------------------------------------------

--
-- 表的结构 `userform`
--

CREATE TABLE IF NOT EXISTS `userform` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uName` varchar(20) NOT NULL,
  `uPass` varchar(20) NOT NULL,
  `uRealName` varchar(20) NOT NULL,
  `uTel` varchar(20) NOT NULL,
  `uAddr` varchar(60) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `userform`
--

INSERT INTO `userform` (`uid`, `uName`, `uPass`, `uRealName`, `uTel`, `uAddr`) VALUES
(1, '陈志荣', '123', '陈志荣', '123456789', '广东省'),
(11, '123111', '123', '陈志荣', '123456', '广东');

--
-- 限制导出的表
--

--
-- 限制表 `goodsorder`
--
ALTER TABLE `goodsorder`
  ADD CONSTRAINT `FK_gid` FOREIGN KEY (`gid`) REFERENCES `goods` (`gid`),
  ADD CONSTRAINT `FK_uid` FOREIGN KEY (`uid`) REFERENCES `userform` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
