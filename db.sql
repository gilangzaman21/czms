-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2015 at 11:52 AM
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

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('000d0d323580599ffddd5f043564d4ff9fee4040', '127.0.0.1', 1437053766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035333437323b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('0a27649980d67d57b8ec3676162a9e2833a690bc', '127.0.0.1', 1437040403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034303430333b),
('0ae95c10390fa2174ba3fffc7b149004ca324baf', '127.0.0.1', 1437035917, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033353930323b),
('0b4e665a6896a2dd00ce6a6f0a8099c7112f25d3', '127.0.0.1', 1437059635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035393633303b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('0fec05263153b946ff5173424ec3bf05d468456d', '127.0.0.1', 1437050200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034393937343b),
('13a73a147a33083966ac49a61328bdd7cfb73d83', '127.0.0.1', 1437029236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032383935313b),
('1c5c4665a4d489f6be2f89c833fabf37ec3c46c5', '127.0.0.1', 1437101512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130313438383b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('1c9d6a0d359ce185abe41c6a988f6673df47e6cb', '127.0.0.1', 1437049908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034393634343b),
('2aa5c4409d0371fecd9b2a223b05168fee62c66c', '127.0.0.1', 1437040951, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034303933323b),
('2e524dfcd65b96a848b0bf7cc2195ba6563dd9da', '127.0.0.1', 1437059456, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035393330383b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('35a6e203c8f16eacfd27f23b8db5243366fc5aab', '127.0.0.1', 1437039285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033393030303b),
('372698cdea3fe34a8c1db40e59aebbf19fea29fa', '127.0.0.1', 1437058769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035383537303b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('4d5c41249441b4cb7493e45b00c513013f0d4011', '127.0.0.1', 1437059074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035383935383b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('506a4af7f6cdb23e83d4873b25d92636f4a3f14c', '127.0.0.1', 1437060858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036303732383b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('507d81a020b49a24e6b9e4a08368f4745c1ea49d', '127.0.0.1', 1437027574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032373337303b),
('50d727c663b0ab1a568bacee906c214a03bb6cd2', '127.0.0.1', 1437046493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034363334333b),
('5bfd779edf5ffa4c45164239677a2d637a458f3a', '127.0.0.1', 1437056168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035363135373b6d6573736167655f746578747c733a34353a22416e6461204861727573204c6f67696e20556e74756b20416b7365732048616c616d616e205465727365627574223b5f5f63695f766172737c613a313a7b733a31323a226d6573736167655f74657874223b733a333a226f6c64223b7d),
('5d0fcdad3a925a708097b27087c08c2522286d8b', '127.0.0.1', 1437043287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034333039313b),
('5e000fda987cb90ab9ef78a978f8a8b97554a029', '127.0.0.1', 1437062446, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036323139363b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('6886a2f3e3717dd76e38a37ac64dbd420cb10c4b', '127.0.0.1', 1437031118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033313130353b6d6573736167655f746578747c733a35333a22557365726e616d652064616e2050617373776f72642059616e6720416e6461204d6173756b616e20546964616b2053657375616921223b5f5f63695f766172737c613a313a7b733a31323a226d6573736167655f74657874223b733a333a226e6577223b7d),
('697799c14967a09ed604e81c6f9cb259d96b76aa', '127.0.0.1', 1437042152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034313937363b),
('6ac360c55a56b2005d676ff480c77c588aa4af9e', '127.0.0.1', 1437047333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034373238303b),
('6b55aeacf41020e9ec4b2e80fee5354528f0e635', '127.0.0.1', 1437052423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035323134323b),
('6c0049593a3b2ad48c0007fb5a2bf414a7907618', '127.0.0.1', 1437036275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033363237353b),
('6c1e4cef82cc1148b55f51b8cb0e48000b286ddc', '127.0.0.1', 1437028901, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032383631383b),
('6c5bf09acc5598dcd4ceac3667a934fad1873db6', '127.0.0.1', 1437051006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035303737383b),
('6e3560be5af029d0539239ac483d4ba0fe607e10', '127.0.0.1', 1437046071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034353738393b),
('7300c76a6ef919f950dbd1532e39a1eac45ff577', '127.0.0.1', 1437056534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035363531323b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('738a0dd25ec90dfc9fb612dfceb063baecd93b99', '127.0.0.1', 1437036491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033363236393b),
('7783219c322887c9cd0dcf8d926f2975b3611839', '127.0.0.1', 1437032081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033313738363b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('780f56afc9ef4bf9de7e06e121bdbbf27efd5d5e', '127.0.0.1', 1437060706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036303432373b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('7aa80354d8e186913eee8c73460e63e46df4290a', '127.0.0.1', 1437038329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033383233303b),
('7c24690cb0bc3d927aeb12f09d9e9b8449ede721', '127.0.0.1', 1437032125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033323132353b),
('7d47af85c4c72f6d1e7c887230943ba0d1474be7', '127.0.0.1', 1437048945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034383637323b),
('80f33483acf46ca7863d2b43b32b4cad895f6aaa', '127.0.0.1', 1437102643, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130323434393b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('84bb263e63e8c16bfeef218086c474b549591c2a', '127.0.0.1', 1437044327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034343137343b),
('8cc15413222c55687169127cb283981cb46a8d7a', '127.0.0.1', 1437039609, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033393331363b),
('8cdce462be825e9c3a60a05ff6dd34c3728ad3ea', '127.0.0.1', 1437043441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034333433313b),
('8d807e7df82bca64574167e99576d1cb7958e85b', '127.0.0.1', 1437030279, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033303237393b),
('8df22f1da0d80f9630683aca5a83196da390ee2c', '127.0.0.1', 1437049156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034383939363b),
('9122da7cd4375a623b2e1760665b4968d6999635', '127.0.0.1', 1437105110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130353036313b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('918d62ddf823800ddf47b05f176462ba3d875c3e', '127.0.0.1', 1437042833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034323637343b),
('95bbe144399836d083cc766aee282e2da78fed56', '127.0.0.1', 1437100340, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130303231353b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('9870a0976c45f82a92be8f15e0f3bfff0a3fcae1', '127.0.0.1', 1437048019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034373839363b),
('99dfd1ff9edec7582e8d7972308c341421de0883', '127.0.0.1', 1437029495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032393235333b),
('a28f6699081fa7e2134b9c89be91d3570e52b09a', '127.0.0.1', 1437061559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036313335353b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('a5171831099de6695a96709f9ce615ac776b8d5e', '127.0.0.1', 1437058064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035373831333b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('a6d95c90d7a3fa88750c7959e755b8a6584bb877', '127.0.0.1', 1437062506, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036323530363b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b6d6573736167655f746578747c733a35343a22416e646120546964616b20446920506572626f6c65686b616e20556e74756b20416b7365732048616c616d616e205465727365627574223b5f5f63695f766172737c613a313a7b733a31323a226d6573736167655f74657874223b733a333a226e6577223b7d),
('a85ec3616af8cc7f8083698cbcbb1edad5373811', '127.0.0.1', 1437051617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035313334303b),
('aae08e0f8c2f3a36e8d5e4bddb1aca8e28106f33', '127.0.0.1', 1437029853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032393539363b),
('ab5cf4dea84ec7de0ea0b325e2aede4998800b80', '127.0.0.1', 1437049180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034393138303b),
('aba0315f91d3af6978d18b9390ebc29fa37d71e8', '127.0.0.1', 1437058556, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035383236373b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('ae69d99cfa787c8c8db30dcb3d29aa9d6c1bdbb0', '127.0.0.1', 1437061337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036313034323b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('b3cf3d91cdcbd74b8c59556f7d10f8ebe412eb6b', '127.0.0.1', 1437040065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033393736363b),
('b976587c1a85a0165601f6e46caff5d60fa8ca47', '127.0.0.1', 1437100794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130303532323b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('bc09ec9aa7770f8a215b2003677591f065c484c9', '127.0.0.1', 1437044114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034333832333b),
('bc3e591c2dcfc47ebb12a260f93b4ae64e78e249', '127.0.0.1', 1437038609, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033383536373b),
('c0057f734de537ec700e1aa33efd499de2a04528', '127.0.0.1', 1437057256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035373235363b6d6573736167655f746578747c733a34353a22416e6461204861727573204c6f67696e20556e74756b20416b7365732048616c616d616e205465727365627574223b5f5f63695f766172737c613a313a7b733a31323a226d6573736167655f74657874223b733a333a226e6577223b7d),
('c1cf7c9154732b7d07d4eec239f679a91e925152', '127.0.0.1', 1437048637, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034383334323b),
('c51e8962ce19ba525948426ebf71de36d2822a05', '127.0.0.1', 1437061920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036313835383b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('cdbcca9e28a12dd5dc7b024dad678c808b9bbfba', '127.0.0.1', 1437060329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373036303035373b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('ceeb0399f9bc49c0a8980ea913907b357689580d', '127.0.0.1', 1437036275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373033363237353b),
('cf13e2d8af3e69c7d867dc8a8dae7c9c5d6b5ebc', '127.0.0.1', 1437103773, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130333634303b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('d2f5da084306a88638b111af52418e990e1516a1', '127.0.0.1', 1437103401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373130333235333b757365725f69735f6c6f67696e7c623a313b757365725f69647c733a313a2231223b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('d43b4eeffd9be66171c060b3422098da08bfb78c', '127.0.0.1', 1437057256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035373235363b),
('d533da52264a1afb621674ef58c0194ff93f9c20', '127.0.0.1', 1437047825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034373538353b),
('d90df298507ce181d4882aed8c69de668e9e9e5f', '127.0.0.1', 1437050625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035303432363b),
('dd8561406a0318732aabc0f1d62def80e0dc5e2e', '127.0.0.1', 1437051981, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035313639323b),
('e0e558d03a6e5087ec0b87d3011a610b7e3503d6', '127.0.0.1', 1437052759, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035323438323b),
('e134e4272738c23310a69092a80ac275fe43ee52', '127.0.0.1', 1437040120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034303037373b),
('ed07e076f1b9626857beb34ed7b6b04f59f25e39', '127.0.0.1', 1437046826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373034363832353b),
('ed24e099e5a3951e91b82d4ca61de6f376cb458d', '127.0.0.1', 1437052949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035323933363b),
('ed5d41337f7013552f3acd064ea94103ac04e0d3', '127.0.0.1', 1437057540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035373234373b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b),
('f217d8f8208edb10b34e691187dcad44b8d00bf6', '127.0.0.1', 1437029939, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373032393931363b),
('fc61e4c6a864d1144ea6c3c3edba2736d7154baa', '127.0.0.1', 1437053962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433373035333830383b757365725f69735f6c6f67696e7c623a313b757365725f69647c4e3b757365725f757365726e616d657c733a343a22726f6f74223b757365725f72756c65737c733a31313a2273757065725f61646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posisi` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `aktif` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `posisi`, `nama_menu`, `icon`, `link`, `parent`, `aktif`) VALUES
(1, 1, 'Beranda', 'fa-home', 'administrator/dashboard', 0, 'ya'),
(3, 2, 'Menu Management', 'menu', 'protected/menu', 0, 'ya');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `user_password`, `user_last_login`, `user_token`, `user_rules`) VALUES
(1, 'root', '83353d597cbad458989f2b1a5c1fa1f9f665c858', '2015-07-17 03:27:26', '739976ba453a69a9a344ffef9d8e7187', 'super_admin'),
(3, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '2015-07-17 03:20:03', '5a11d46315a6d1f029d248ee1212f753', 'admin'),
(5, 'user', '60bddb16409a2baf76936619afecf778dabe68de', '2015-07-17 03:16:44', '0298605c3b2ab992a1b8cda196ff9ac0', 'registered_user'),
(6, 'fathulalim', '60bddb16409a2baf76936619afecf778dabe68de', '2015-07-17 02:44:54', NULL, 'registered_user');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_detail_fullname` varchar(100) NOT NULL,
  `user_detail_email` varchar(100) NOT NULL,
  `user_detail_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `user_detail_fullname`, `user_detail_email`, `user_detail_picture`) VALUES
(3, 1, 'Raessa Fathul Alim', 'raessafathulalim@gmail.com', 'test.png');

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