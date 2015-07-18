-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2015 at 10:35 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_templateproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posisi` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) DEFAULT '0',
  `rules` enum('super_admin','admin','registered_user') NOT NULL DEFAULT 'super_admin',
  `aktif` enum('ya','tidak') NOT NULL DEFAULT 'ya',
  PRIMARY KEY (`id`),
  KEY `menu_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `posisi`, `nama_menu`, `icon`, `link`, `parent`, `rules`, `aktif`) VALUES
(1, 1, 'Beranda', 'fa fa-home', 'protected', 0, 'registered_user', 'ya'),
(3, 2, 'Menu Management', 'fa fa-external-link-square', 'protected/menu', 0, 'super_admin', 'ya'),
(4, 4, 'Menu Example', 'fa fa-star', '#', 0, 'registered_user', 'ya'),
(5, 4, 'Sub Menu', 'fa', '#', 4, 'registered_user', 'ya'),
(7, 3, 'User Management', 'fa fa-user', 'protected/user', 0, 'super_admin', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_picture` varchar(100) DEFAULT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_token` varchar(100) DEFAULT NULL,
  `user_rules` enum('super_admin','admin','registered_user') NOT NULL DEFAULT 'registered_user',
  `status` enum('aktif','blokir','belum aktif') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_fullname`, `user_email`, `user_picture`, `user_username`, `user_password`, `user_last_login`, `user_token`, `user_rules`, `status`) VALUES
(1, 'Raessa Fathul Alim', 'raessafathulalim@gmail.com', 'nopic.png', 'root', '83353d597cbad458989f2b1a5c1fa1f9f665c858', '2015-07-18 02:19:19', 'b36cd2427eac56f6cd4abe9d2b5c89be', 'super_admin', 'aktif'),
(2, 'Administrator', 'admin@localhost', 'nopic.png', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '2015-07-18 02:17:48', 'fefa35dd450426410ba7c89ac73988bf', 'admin', 'aktif'),
(12, 'Ria Hutami Putri', 'riahp@gmail.com', 'nopic.png', 'user', '60bddb16409a2baf76936619afecf778dabe68de', '2015-07-18 02:12:13', '2cc9fe2f5c49c8c122a2be71e20362d8', 'registered_user', 'aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
