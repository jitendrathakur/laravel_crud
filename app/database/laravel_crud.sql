-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2014 at 08:04 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.25-1+sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_users_tables`
--

CREATE TABLE IF NOT EXISTS `create_users_tables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hostnames`
--

CREATE TABLE IF NOT EXISTS `hostnames` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hostname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hostnames`
--

INSERT INTO `hostnames` (`id`, `hostname`, `block`, `created_at`, `updated_at`) VALUES
(1, 'ip.unotelly.com', 1, '2014-03-07 09:03:55', '2014-03-07 09:03:55'),
(2, 'nba.com', 0, '2014-03-07 09:03:55', '2014-03-07 09:03:55'),
(3, 'facebook.com', 1, '2014-03-07 09:03:55', '2014-03-07 09:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_03_07_094826_create_networks_table', 1),
('2014_03_07_095639_create_users_table', 2),
('2014_03_07_095928_create_hostnames_table', 3),
('2014_03_07_100630_create_create_users_tables_table', 4),
('2014_03_07_104814_create_services_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE IF NOT EXISTS `networks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `n_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `nid`, `n_name`, `n_ip`, `n_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'home', '1.2.3.4', 1, '2014-03-07 09:03:55', '2014-03-07 09:03:55'),
(2, 3, 'work', '8.8.8.8', 0, '2014-03-07 09:03:55', '2014-03-07 09:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `data`, `created_at`, `updated_at`) VALUES
(1, '{"uid" : 5650, "networks" : [ { "nid" : 1, "n_name" : "home", "n_ip" : "1.2.3.4", "n_status" : 1 }, { "nid" : 3, "n_name" : "work", "n_ip" : "8.8.8.8", "n_status" : 0 } ], "hostnames" : [ { "hostname" : "ip.unotelly.com", "block" : 1 }, { "hostname" : "nba.com", "block" : 0 }, { "hostname" : "facebook.com", "block" : 1 } ] }', '2014-03-07 09:03:55', '2014-03-07 09:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `created_at`, `updated_at`) VALUES
(1, 5650, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
