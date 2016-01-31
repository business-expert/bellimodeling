-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2014 at 11:41 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bellinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `title`, `description`, `status`) VALUES
(1, 'interest1', '', 'ACTIVE'),
(2, 'interest2', '', 'ACTIVE'),
(3, 'interest3', '', 'ACTIVE'),
(4, 'interest4', '', 'ACTIVE'),
(5, 'interes51', '', 'ACTIVE'),
(6, 'interest6', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `profession_credits`
--

CREATE TABLE IF NOT EXISTS `profession_credits` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `profession_credit_type_id` bigint(20) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profession_credits`
--

INSERT INTO `profession_credits` (`id`, `user_id`, `profession_credit_type_id`, `title`, `description`, `created_at`, `updated_at`, `status`) VALUES
(1, 0, 1, 'k', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(2, 5, 1, 'ruby programmer', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(3, 6, 1, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(4, 7, 1, 'Actor', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(5, 8, 1, 'Actor', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(6, 9, 1, 'Actor', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `profession_credit_types`
--

CREATE TABLE IF NOT EXISTS `profession_credit_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profession_credit_types`
--

INSERT INTO `profession_credit_types` (`id`, `title`, `description`, `created_at`, `updated_at`, `status`) VALUES
(1, 'profession1', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(2, 'profession2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(3, 'profession1', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(4, 'profession2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(5, 'profession1', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(6, 'profession2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `permission` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `permission`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRATOR', '', 'ACTIVE', '2014-10-15 00:00:00', '2014-10-30 00:00:00'),
(2, 'PROFESSIONAL', '', 'ACTIVE', '2014-10-01 00:00:00', '0000-00-00 00:00:00'),
(3, 'NON_PROFESSIONAL', '', 'ACTIVE', '2014-10-15 00:00:00', '2014-10-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `expired_at` datetime NOT NULL,
  `confirmation` varchar(255) NOT NULL,
  `confirmation_at` datetime NOT NULL,
  `confirmed_at` datetime NOT NULL,
  `confirmation_status` varchar(256) NOT NULL DEFAULT 'DEACTIVE',
  `last_signin_at` datetime NOT NULL,
  `last_signout_at` datetime NOT NULL,
  `signin_counter` int(11) NOT NULL,
  `total_signin` float NOT NULL,
  `terms` varchar(20) NOT NULL DEFAULT 'ACCEPTED',
  `status` varchar(256) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `email`, `password`, `description`, `created_at`, `updated_at`, `expired_at`, `confirmation`, `confirmation_at`, `confirmed_at`, `confirmation_status`, `last_signin_at`, `last_signout_at`, `signin_counter`, `total_signin`, `terms`, `status`) VALUES
(1, 2, '', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(2, 2, '', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(3, 2, '', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(4, 2, '', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(5, 3, '', 'snmmplanet@gmail.com', 'snm', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(6, 2, '', 'dsf', 'asdf', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(7, 3, '', 'snmmplanet@gmail.com', 'snmmplanet', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(8, 3, '', 'snmmplanet@gmail.com', 'snmmplanet', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE'),
(9, 2, '', 'snmmplanet@gmail.com', 'snmmplanet', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DEACTIVE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'ACCEPTED', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user_informations`
--

CREATE TABLE IF NOT EXISTS `user_informations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `dob` datetime NOT NULL,
  `description` text NOT NULL,
  `sabout` text NOT NULL,
  `mabout` text NOT NULL,
  `labout` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `landscape_image` text NOT NULL,
  `interests` longtext NOT NULL,
  `talents` longtext NOT NULL,
  `start_counter` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_informations`
--

INSERT INTO `user_informations` (`id`, `user_id`, `fname`, `lname`, `dob`, `description`, `sabout`, `mabout`, `labout`, `address1`, `address2`, `city`, `state`, `country`, `image`, `landscape_image`, `interests`, `talents`, `start_counter`, `created_at`, `updated_at`) VALUES
(1, 0, 'a', 'a', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 'i', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 5, 'sandeep', 'maurya', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 'ruby', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 6, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', 'interest1#interest3#interest6', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 7, 'sandeep', 'maurya', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', 'interest1#interest2#interest3#interes51#interest6', 'welcome', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 8, 'sandeep', 'maurya', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', 'interest1#interest2#interes51#interest6', 'welcome', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 9, 'sandeep kumar', 'maurya', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', 'interest1#interest2#interest3#interest4#interes51#interest6', 'welcome', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `web_links`
--

CREATE TABLE IF NOT EXISTS `web_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `web_link_type_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `web_links`
--

INSERT INTO `web_links` (`id`, `user_id`, `web_link_type_id`, `title`, `description`, `created_at`, `updated_at`, `status`) VALUES
(1, 0, 1, 'h', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(2, 5, 1, 'snm-maurya.in', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(3, 6, 1, 'zxcvzxcv', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(4, 7, 1, 'http://www.google.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(5, 8, 1, 'http://www.google.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE'),
(6, 9, 1, 'http://www.google.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `web_link_types`
--

CREATE TABLE IF NOT EXISTS `web_link_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
