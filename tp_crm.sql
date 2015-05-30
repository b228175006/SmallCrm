-- phpMyAdmin SQL Dump
-- version 4.4.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-05-08 09:23:58
-- 服务器版本： 5.6.24
-- PHP Version: 5.5.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp_crm`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_customer`
--

CREATE TABLE IF NOT EXISTS `tp_customer` (
  `id` int(30) NOT NULL COMMENT '公司编号',
  `uid` int(30) NOT NULL COMMENT '所属用户',
  `gname` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '公司名称',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系人',
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系电话',
  `ca` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '所属公司',
  `location` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '所在地',
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '公司地址',
  `date` int(30) NOT NULL COMMENT '添加时间'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客户信息';



-- --------------------------------------------------------

--
-- 表的结构 `tp_login`
--

CREATE TABLE IF NOT EXISTS `tp_login` (
  `id` int(20) NOT NULL COMMENT 'ID',
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `logintime` int(30) NOT NULL COMMENT '登录时间',
  `loginip` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '登录IP',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '昵称',
  `jd` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '权限'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tp_login`
--

INSERT INTO `tp_login` (`id`, `username`, `password`, `logintime`, `loginip`, `name`, `jd`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1430182561, '0.0.0.0', '管理员', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_notice`
--

CREATE TABLE IF NOT EXISTS `tp_notice` (
  `id` int(30) NOT NULL COMMENT 'ID',
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '发布人',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '昵称',
  `addtime` int(60) NOT NULL COMMENT '发布时间',
  `text` text COLLATE utf8_unicode_ci NOT NULL COMMENT '发布内容'
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='公告';



-- --------------------------------------------------------

--
-- 表的结构 `tp_remarks`
--

CREATE TABLE IF NOT EXISTS `tp_remarks` (
  `id` int(20) NOT NULL COMMENT 'id',
  `uid` int(20) NOT NULL COMMENT '客户id',
  `value` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '备注项目',
  `remarks` text COLLATE utf8_unicode_ci NOT NULL COMMENT '备注内容',
  `time` int(30) NOT NULL COMMENT 'time'
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='备注';

--
-- 转存表中的数据 `tp_remarks`
--



-- --------------------------------------------------------

--
-- 表的结构 `tp_system`
--

CREATE TABLE IF NOT EXISTS `tp_system` (
  `id` int(50) NOT NULL COMMENT 'id',
  `pid` int(50) NOT NULL COMMENT 'pid',
  `value1` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `value2` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `value3` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `value4` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `value5` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `value6` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='系统选项表';

--
-- 转存表中的数据 `tp_system`
--

INSERT INTO `tp_system` (`id`, `pid`, `value1`, `value2`, `value3`, `value4`, `value5`, `value6`) VALUES
(1, 1, '客户名称', '联系人', '联系电话', '所属公司', '所在地', '公司地址');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_customer`
--
ALTER TABLE `tp_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gname` (`gname`);

--
-- Indexes for table `tp_login`
--
ALTER TABLE `tp_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_notice`
--
ALTER TABLE `tp_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_remarks`
--
ALTER TABLE `tp_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_system`
--
ALTER TABLE `tp_system`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_customer`
--
ALTER TABLE `tp_customer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '公司编号',AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tp_login`
--
ALTER TABLE `tp_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tp_notice`
--
ALTER TABLE `tp_notice`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tp_remarks`
--
ALTER TABLE `tp_remarks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tp_system`
--
ALTER TABLE `tp_system`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
