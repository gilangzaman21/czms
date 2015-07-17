-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2015 at 01:22 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `posisi`, `nama_menu`, `icon`, `link`, `parent`, `rules`, `aktif`) VALUES
(1, 1, 'Beranda', 'fa fa-home', 'protected', 0, 'super_admin', 'ya'),
(3, 2, 'Menu Management', 'fa fa-external-link-square', 'protected/menu', 0, 'super_admin', 'ya'),
(4, 3, 'Menu Example', 'fa fa-star', '#', 0, 'registered_user', 'ya'),
(5, 4, 'Sub Menu', 'fa', '#', 4, 'registered_user', 'ya'),
(6, 2, 'User', 'fa fa-user', '#', 0, 'super_admin', 'ya'),
(7, 1, 'User Management', 'fa', 'protected/user', 6, 'super_admin', 'ya'),
(8, 2, 'User Detail', 'fa', 'protected/user_detail', 6, 'super_admin', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_token` varchar(100) DEFAULT NULL,
  `user_rules` enum('super_admin','admin','registered_user') NOT NULL DEFAULT 'registered_user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `user_password`, `user_last_login`, `user_token`, `user_rules`) VALUES
(1, 'root', '83353d597cbad458989f2b1a5c1fa1f9f665c858', '2015-07-17 17:17:33', '5736fbff12d332b2a339bab78f572e8b', 'super_admin'),
(3, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '2015-07-17 17:12:42', '8a029a43fd30e5ace368ef5ecadb5a16', 'admin'),
(5, 'user', '60bddb16409a2baf76936619afecf778dabe68de', '2015-07-17 16:12:01', '3ff0557bf5845ed1cf5c5cf285e4583b', 'registered_user');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_detail_fullname` varchar(100) NOT NULL,
  `user_detail_email` varchar(100) NOT NULL,
  `user_detail_picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `user_detail_fullname`, `user_detail_email`, `user_detail_picture`) VALUES
(3, 1, 'Raessa Fathul Alim', 'raessafathulalim@gmail.com', NULL),
(4, 3, 'Administrator', 'admin@localhost', NULL),
(5, 5, 'Guest', 'guest@localhost', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
