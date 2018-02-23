-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-02-23 22:56:18
-- 服务器版本： 5.7.17-log
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minsu`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL COMMENT '主键，自增',
  `accout` varchar(20) NOT NULL COMMENT '登录账号，非空',
  `password` varchar(20) NOT NULL COMMENT '登录密码，非空',
  `name` varchar(20) NOT NULL COMMENT '管理员名字，非空',
  `mail` varchar(50) DEFAULT NULL COMMENT '联系邮箱',
  `address` varchar(50) DEFAULT NULL COMMENT '联系地址',
  `grade` int(11) NOT NULL DEFAULT '1' COMMENT '操作等级，0为最高，默认1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员信息表';

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`id`, `accout`, `password`, `name`, `mail`, `address`, `grade`) VALUES
(1, 'admin', 'admin2018', '最高权限管理账户', 'admin@minsu.com', '中国四川省绵阳市西南科技大学东6B404', 0);

-- --------------------------------------------------------

--
-- 表的结构 `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL COMMENT '标题',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间（默认保存时间）',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态，0表示有效，其他为失效',
  `content` varchar(10000) NOT NULL COMMENT '内容（HTML形式）',
  `author` varchar(20) NOT NULL DEFAULT '佚名' COMMENT '发布者昵称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公告信息表';

--
-- 转存表中的数据 `brand`
--

INSERT INTO `brand` (`id`, `title`, `time`, `state`, `content`, `author`) VALUES
(1, '欢迎使用“途途”民宿订住', '2018-02-23 22:51:16', 0, '&nbsp;这个系统建立于2018年2月23日，用户可以提交租房信息，经过审查后可通过平台发布。用户可以自由的选择适合的房间，并且就租赁细节进行双方协商沟通，由平台提供第三方保证。\r\n祝使用愉快——', '网站建设者');

-- --------------------------------------------------------

--
-- 表的结构 `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL COMMENT '主键，自增',
  `filemd5` varchar(32) NOT NULL COMMENT '图片md5',
  `url` varchar(100) NOT NULL COMMENT '图片路径',
  `user_id` int(11) DEFAULT '0' COMMENT '所属用户，默认0',
  `name` varchar(20) NOT NULL COMMENT '图片名字，不能为空',
  `room_id` int(11) DEFAULT '0' COMMENT '所属用户，默认0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片信息表';

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL COMMENT '主键，自增',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `room_id` int(11) NOT NULL COMMENT '房间id',
  `begin` date NOT NULL COMMENT '开始时间',
  `end` date NOT NULL COMMENT '结束时间',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '出租状态（0表示已出租）'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单信息表';

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL COMMENT '主键，自增',
  `owner_id` int(11) NOT NULL COMMENT '出租人id',
  `price` float NOT NULL DEFAULT '100' COMMENT '出租价格（以天为单位）',
  `introduce` varchar(300) NOT NULL DEFAULT '暂无详细描述' COMMENT '房间介绍',
  `grade` float NOT NULL DEFAULT '80' COMMENT '评分（0-100）',
  `address` varchar(50) NOT NULL COMMENT '房间具体地址',
  `city` varchar(10) NOT NULL COMMENT '城市',
  `block` varchar(30) DEFAULT NULL COMMENT '街区'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='房间信息表';

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT '主键，自增',
  `account` varchar(20) NOT NULL COMMENT '登录账号，非空',
  `password` varchar(20) NOT NULL COMMENT '登录密码，非空',
  `name` varchar(20) NOT NULL COMMENT '昵称',
  `mail` varchar(50) DEFAULT NULL COMMENT '联系邮箱，默认空',
  `address` varchar(50) DEFAULT NULL COMMENT '联系地址，默认空',
  `limited` int(11) NOT NULL DEFAULT '10' COMMENT '0为普通用户，1为出租者，其他字段视作游客',
  `tel` varchar(30) NOT NULL COMMENT '联系电话',
  `bill` float NOT NULL DEFAULT '0' COMMENT '钱包余额'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户信息表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增';
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增';
--
-- 使用表AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增';
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
