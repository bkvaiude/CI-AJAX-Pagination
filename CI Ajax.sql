-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2013 at 01:38 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ibm`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `name`) VALUES
(1, 'Brand 1'),
(2, 'Brand 2'),
(3, 'Brand 3'),
(4, 'Brand 4'),
(5, 'Brand 5');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `amount` float unsigned NOT NULL DEFAULT '100',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `brand_id`, `model_id`, `amount`, `created_at`) VALUES
(1, 'Item1B1M1', 1, 1, 100, '2013-03-07 05:51:28'),
(2, 'Item2B1M1', 1, 1, 100, '2013-03-07 05:51:28'),
(3, 'Item3B1M2', 1, 2, 100, '2013-03-07 06:01:56'),
(4, 'Item4B1M2', 1, 2, 100, '2013-03-07 06:01:56'),
(5, 'Item5B2M3', 2, 3, 100, '2013-03-07 06:01:56'),
(6, 'Item6B2M3', 2, 3, 100, '2013-03-07 06:01:56'),
(7, 'Item7B2M4', 2, 4, 100, '2013-03-07 06:01:56'),
(8, 'Item8B2M4', 2, 4, 100, '2013-03-07 06:01:56'),
(9, 'Item9B3M5', 3, 5, 100, '2013-03-07 06:01:56'),
(10, 'Item10B3M5', 3, 5, 100, '2013-03-07 06:01:56'),
(11, 'Item11B3M6', 3, 6, 100, '2013-03-07 06:01:56'),
(12, 'Item12B3M6', 3, 6, 100, '2013-03-07 06:01:56'),
(13, 'Item13B4M7', 4, 7, 100, '2013-03-07 06:01:56'),
(14, 'Item14B4M7', 4, 7, 100, '2013-03-07 06:01:56'),
(15, 'Item15B4M8', 4, 8, 100, '2013-03-07 06:01:56'),
(16, 'Item16B4M8', 4, 8, 100, '2013-03-07 06:01:56'),
(17, 'Item17B3M5', 5, 9, 100, '2013-03-07 06:01:56'),
(18, 'Item18B3M5', 5, 9, 100, '2013-03-07 06:01:56'),
(19, 'Item19B3M6', 5, 10, 100, '2013-03-07 06:01:56'),
(22, 'Item1B1M1-edited', 1, 1, 100, '2013-03-07 20:33:32'),
(25, 'test2', 1, 1, 100, '2013-03-08 06:59:12'),
(26, 'test3', 1, 1, 100, '2013-03-08 06:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `brand_id`, `name`) VALUES
(1, 1, 'M1B1'),
(2, 1, 'M2B1'),
(3, 2, 'M3B2'),
(4, 2, 'M4B2'),
(5, 3, 'M5B3'),
(6, 3, 'M6B3'),
(7, 4, 'M7B4'),
(8, 4, 'M8B4'),
(9, 5, 'M9B5'),
(10, 5, 'M10B5');
