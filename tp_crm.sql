-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-07-09 07:13:58
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

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
  `success` int(10) DEFAULT '0' COMMENT '是否成交',
  `gname` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '公司名称',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系人',
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系电话',
  `ca` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '所属公司',
  `location` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '所在地',
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '公司地址',
  `date` int(30) NOT NULL COMMENT '添加时间'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客户信息';



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
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1436337198, '0.0.0.0', '管理员', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='公告';

--
-- 转存表中的数据 `tp_notice`
--

INSERT INTO `tp_notice` (`id`, `username`, `name`, `addtime`, `text`) VALUES
(7, 'admin', '', 1423280839, '妈蛋，终于完成了'),
(8, 'admin', '', 1425363410, '优化了查重功能，公司名称查重和电话查重'),
(9, 'admin', '', 1425363443, '优化了客户查看功能的添加人员显示'),
(10, 'admin', '', 1425363464, '增加了客户转接的功能'),
(14, 'admin', '管理员', 1425368739, '增加了‘客户查看’‘客户备注’‘客户管理’‘伙伴管理’‘公告管理’‘首页公告’的分页功能'),
(15, 'admin', '管理员', 1425540961, '公海完成'),
(16, 'admin', '管理员', 1425619550, '公告的MYSQL储存项目改变为TEXT，应该能应对更长的文本'),
(17, 'admin', '管理员', 1425619601, '长文本测试：\r\n1、什么是宕机迁移，如何避免因为宕机迁移导致的服务不可用\r\n云服务器是部署在物理机上的，底层物理机性能出现异常或者其他原因都会导致物理机宕机，当检测到云服务器所在的物理机机发生故障，系统会启动保护性迁移，将您的服务器迁移到性能正常的宿主机上 ，一旦发生宕机迁移，您的服务器就会被重启，如果您希望您的服务器重启以后应用服务器自动恢复，需要您把应用程序设置成开机自动启动，如果应用服务连接的数据库，需要在程序中设置成自动重连机制。\r\n \r\n2、windows系统中的PV Dirvers 程序是否可以删除\r\nPV Dirvers程序为我方服务器虚拟化驱动，请不要针对该程序进行任何操作，如果删除会导致服务器出现异常。\r\n \r\n3、云服务器是否可以更改网卡的MAC地址\r\n云服务器禁止更改网卡mac地址。\r\n因为我方服务器IP跟MAC地址都是固定的，底层对IP和MAC地址做了绑定，请不要随意更改主机MAC地址，更改以后会导致服务器网络出现异常。\r\n \r\n4、linux系统是否支持开启SELINUX服务\r\n我方linux系统的服务器不支持开启Selinux服务，如果开启了selinux服务，会导致系统异常并无法启动。\r\n \r\n5、linux系统是否可以自己编译内核\r\n我方系统内核都是经过特殊开发的，集成了阿里云的虚拟化驱动，如果自行编译内核会导致系统出现不可预测问题，请不要对内核进行任何的操作。\r\n \r\n6、阿里云服务器是否支持安装虚拟化程序\r\n您好，我方服务器是基于虚拟化平台运行的，如果在服务器上部署虚拟化程序，会导致服务器出现不可预测的问题，请勿在服务器内部部署虚拟化程序。\r\n \r\n7、重置以及更换系统务必要了解的事项\r\n      重置以及更换系统会导致被操作磁盘数据跟快照丢失并不可找回，如有重要数据一定要提前备份，谨慎操作。\r\n \r\n8、linux系统下能否开启NetWorkManager服务\r\n     linux系统请不要开启NetWorkManager服务，该服务会跟系统内部网络服务出现冲突，导致网络异常。\r\n \r\n9、windows系统中的shutdown.exe进程是否可以结束\r\n      shutdown.exe进程是系统重要进程，如果结束该进程会导在控制台上下发的指令不能成功执行。\r\n \r\n10、linux系统下是否可以自定义更改/分区下的目录权限\r\n      请不要随意更改/分区下目录的权限，尤其是/etc/sbin/bin/boot/dev/usr/lib等目录权限，如果权限更改不当会导致出现异常。\r\n \r\n11、windows系统是否可以删除或者重命名administrator账户\r\nadministrator账户为系统默认的管理员账号，通过管理控制台中修改服务器的登入密码是针对administration帐号操作的，如果重命名或删除了该帐号，会导致通过控制台修改密码失效。\r\n \r\n12、windows更改计算机名需要注意的事项\r\nwindows系统修改了计算机名一定要同步注册表中的相关健值，要不然修改不成功的，计算机名修改不成功，会导致有些第三方程序无法安装，注册表中需要修改的健值如下；\r\nHKEY_LOCAL_MACHINE\\SYSTEM\\ControlSet001\\Control\\ComputerName\\ActiveComputerName\r\nHKEY_LOCAL_MACHINE\\SYSTEM\\CurrentControlSet\\Control\\ComputerName\\ComputerName'),
(18, 'admin', '管理员', 1425619734, '修改了伙伴管理中IP地址记录的MYSQL储存方式，现在能正确显示IP地址'),
(38, 'admin', '管理员', 1428549133, '伙伴管理中，增加只有admin账号才能操作的给予和取消管理权限的功能；\r\n版本号更新为1.3。'),
(39, 'admin', '管理员', 1428552613, '添加了4张随机登陆页面背景'),
(40, 'admin', '管理员', 1428566543, '添加了系统设置功能\r\n目前可以修改客户项目的title'),
(41, 'admin', '管理员', 1428566564, '增加了导航条的小图标'),
(35, 'admin', '管理员', 1428472304, '1.更新了搜索功能\r\n2.新增了客户数量统计功能'),
(36, 'admin', '管理员', 1428472780, '光标起始位置更改\r\n公告显示方式改为<code>pre</code>'),
(42, 'admin', '管理员', 1436344786, '版本号更新为1.40\r\n添加了筛选功能（正在测试）'),
(44, 'admin', '管理员', 1436347306, '版本号更新为1.41，修复了在修改客户的时候，把客户默认转交给管理员的BUG'),
(45, 'admin', '管理员', 1436418163, '修复所属人重复的BUG'),
(46, 'admin', '管理员', 1436418178, '新增了客户是否合作的选项，并加入筛选'),
(47, 'admin', '管理员', 1436418207, '修改了增加是否合作筛选后的筛选逻辑错误');

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
(1, 1, '客户名称12', '联系人3', '联系电话', '所属公司', '所在地', '公司地址');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '公司编号',AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tp_login`
--
ALTER TABLE `tp_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tp_notice`
--
ALTER TABLE `tp_notice`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=48;
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
