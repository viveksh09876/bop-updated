-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2017 at 11:51 AM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pedigree_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE IF NOT EXISTS `aboutuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `desc` text,
  `url` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `desc`, `url`, `filename`, `type`, `created`, `modified`) VALUES
(1, 'sd', 'adsf', NULL, 'dcb9e47d993602c3980a0a8e7052e6d1.jpg', 'team', '2014-05-01 10:39:36', '2014-05-01 10:39:36'),
(2, 'adsf', 'asdfsdf', NULL, '69ceba92f3a8f5ee3fe45014f6a28ddb.jpg', 'team', '2014-05-01 10:53:09', '2014-05-01 10:53:09'),
(3, 'ds', 'asdsadf', NULL, '29e6577d18719cac269597a83983323e.jpg', 'team', '2014-05-01 10:55:40', '2014-05-01 10:55:40'),
(4, 'Crossfit1', NULL, 'http://www.google.com', 'ebcd49abd835841c30487a901d506d91.jpg', 'sponsor', '2014-05-01 11:15:23', '2014-05-01 11:15:23'),
(5, 'San Francisco CrossFit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor convallis odio, in ultrices quam ultrices vitae. Ut pulvinar diam a dapibus vulp', NULL, 'c4d43a391200e312e06d26151cc62bc0.jpg', 'block', '2014-05-01 11:45:59', '2014-05-01 11:45:59'),
(6, 'San Francisco CrossFit', '<p>\r\n	Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n<p>\r\n	A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n<p>\r\n	Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</p>\r\n', NULL, 'f858a683ee72cb3ea01acb8e5b12e336.jpg', 'block_big', '2014-05-01 12:37:49', '2014-05-01 12:37:49'),
(7, 'San Francisco CrossFit', '<p>\r\n	Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n<p>\r\n	A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n<p>\r\n	Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</p>\r\n', NULL, 'b29c2ef5a181d0b75ff51428ba012c04.jpg', 'block_big', '2014-05-01 12:43:06', '2014-05-01 12:43:06'),
(8, '', '<iframe width="960" height="540" src="//www.youtube.com/embed/yeF_b8EQcK0" frameborder="0" allowfullscreen></iframe>', NULL, NULL, 'top_video', '0000-00-00 00:00:00', '2014-05-02 09:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_type` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `reward` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `award_type`, `condition`, `reward`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OD', '10', 200, 'Buy 10 Origin dogs = 200 XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(2, 'OD', '50', 400, 'Buy 50 Origin dogs = 400xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(3, 'OD', '100', 600, 'Buy 100 Origin dogs = 600 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(4, 'OD', '500', 1000, 'Buy 500 Origin dogs = 1000xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(5, 'DT', 'CH1', 250, 'First CH dog , Bitch = 250 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(6, 'DT', 'GCH1', 500, 'First GCH dog, Bitch = 500xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(7, 'DT', 'NA1', 100, 'First NA dog , Bitch = 100 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(8, 'DT', 'OA1', 150, 'First OA dog, Bitch = 150xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(9, 'DT', 'AX1', 200, 'First AX  Dog, bitch = 200XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(10, 'DT', 'MACH1', 500, 'First MACH dog , Bitch = 500xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(11, 'DT', 'CD1', 100, 'First CD Dog, Bitch = 100 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(12, 'DT', 'CDX1', 150, 'First CDX dog , Bitch = 150XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(13, 'DT', 'UD1', 200, 'First UD dog, Bitch = 200 XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(14, 'DT', 'OTCH1', 500, 'First OTCH dog, Bitch = 500 XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(15, 'PBD', 'CH1', 250, 'First CH dog , Bitch = 250 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(16, 'PBD', 'GCH1', 500, 'First GCH dog, Bitch = 500xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(17, 'PBD', 'NA1', 100, 'First NA dog , Bitch = 100 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(18, 'PBD', 'OA1', 150, 'First OA dog, Bitch = 150xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(19, 'PBD', 'AX1', 200, 'First AX  Dog, bitch = 200XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(20, 'PBD', 'MACH1', 500, 'First MACH dog , Bitch = 500xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(21, 'PBD', 'CD1', 100, 'First CD Dog, Bitch = 100 xp', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(22, 'PBD', 'CDX1', 150, 'First CDX dog , Bitch = 150XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(23, 'PBD', 'UD1', 200, 'First UD dog, Bitch = 200 XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(24, 'PBD', 'OTCH1', 500, 'First OTCH dog, Bitch = 500 XP', '2016-08-06 14:59:56', '2016-08-06 14:59:56'),
(25, 'WD', '5', 300, 'Winning dog 5 time = 300xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(26, 'WD', '10', 600, 'Winning dog 10 time = 600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(27, 'WD', '20', 1200, 'Winning dog 20 times= 1200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(28, 'WD', '50', 3500, 'Winning dog 50 times=3500xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(29, 'WB', '5', 300, 'Winning Bitch 5 time = 300xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(30, 'WB', '10', 600, 'Winning Bitch 10 time = 600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(31, 'WB', '20', 1200, 'Winning Bitch 20 times= 1200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(32, 'WB', '50', 3500, 'Winning Bitch 50 times=3500xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(33, 'BOB', '5', 300, 'Best of breed 5 time = 300xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(34, 'BOB', '10', 600, 'Best of breed 10 time = 600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(35, 'BOB', '20', 1200, 'Best of breed 20 times= 1200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(36, 'BOB', '50', 3500, 'Best of breed 50 times=3500xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(37, 'BW', '5', 500, 'Best of winner 5 times=500xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(38, 'BW', '10', 700, 'Best of Winner 10 times=700xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(39, 'BW', '20', 1400, 'Best of Winner 20 times=1400xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(40, 'BW', '50', 2800, 'Best of Winner 50 times= 2800xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(41, 'BOOS', '5', 300, 'Get BOOS 5 times=300xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(42, 'BOOS', '10', 600, 'Get BOOS 10 times=600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(43, 'BOOS', '20', 1200, 'Get BOOS 20 times=1200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(44, 'BOOS', '50', 2400, 'Get BOOS 50 times=2400xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(45, 'BIS', '5', 200, 'Get BIS 5 times=200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(46, 'BIS', '10', 400, 'Get BIS 10 times=400xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(47, 'BIS', '20', 800, 'Get BIS 20 times=800xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(48, 'BIS', '50', 1600, 'Get BIS 50 times=1600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(49, 'BIS', '100', 3600, 'Get BIS 100 times=3600xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(50, 'TA', 'FTDC1', 100, 'First Fully trained dog in conformation = 100 xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(51, 'TA', 'FTDA1', 200, 'First fully trained dog in agility = 200xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(52, 'TA', 'FTDO1', 150, 'First fully trained dog in obedience= 150xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(53, 'TA', 'FTDR1', 250, 'First fully trained dog in Rally = 250xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(54, 'TA', 'FTDAll', 800, 'First fully trained in all 4 areas =800 xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(55, 'JA', '1', 50, 'First Job complete 100% = 50xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(56, 'JA', '50', 500, '50 jobs completed 100% =500xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(57, 'JA', '100', 1000, '100 jobs completed 100% =1000XP', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(58, 'JA', '200', 2000, '200 jobs completed 100%=2000xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(59, 'JA', '500', 5000, '500 jobs completed 100%= 5000 xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(60, 'SPA', '1', 100, 'Buy first employers licence = 100xp', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(61, 'SPA', '5', 600, 'Buy 5 employers licence=600 XP', '2016-08-06 15:07:13', '2016-08-06 15:07:13'),
(62, 'SPA', '10', 1200, 'Buy 10 employer licence=1200xp', '2016-08-07 22:21:05', '2016-08-08 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_messages`
--

CREATE TABLE IF NOT EXISTS `admin_messages` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `email_msg` text NOT NULL,
  `message_msg` text NOT NULL,
  `date_msg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE IF NOT EXISTS `applied_jobs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) DEFAULT NULL,
  `applied_by` bigint(20) DEFAULT NULL,
  `status` enum('Accepted','Rejected','Pending') DEFAULT 'Pending',
  `applied_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `job_id`, `applied_by`, `status`, `applied_date`) VALUES
(1, 1, 109, 'Accepted', '2016-12-27 17:57:22'),
(2, 2, 109, 'Accepted', '2017-01-14 06:59:56'),
(3, 3, 109, 'Accepted', '2017-03-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`, `short_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Champion', 'CH', 'Must have a total of 15 points plus 2 major wins', '2016-08-04 21:19:44', '2016-08-04 21:19:44'),
(2, 'Grand Champion', 'GCH', 'Must have a total of 25 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(3, 'Novice Agility', 'NA', '15 points 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(4, 'Preferred Agility Champion', 'PACH', '75 points plus two major wins	', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(5, 'Master Agility Champion', 'MACH', '60 points plus two major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(6, 'Agility Excellence', 'AX', '45 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(7, 'Open Agility', 'OA', '30 points 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(8, 'Obedience Trial Champion', 'OTCH', '70 points plus two major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(9, 'Utility Dog Excellent', 'UDX', '55 plus two major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(10, 'Utility Dog', 'UD', '40 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(11, 'Companion Dog Excellent', 'CDX', '25 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(12, 'Companion Dog', 'CD', '15 points plus two major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(13, 'Rally National Champion', 'RNC', '100 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(14, 'Rally advanced Excellent', 'RAE', '60 points plus two major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(15, 'Ralley Excellence', 'RE', '45 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(16, 'Rally Advanced', 'RA', '30 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(17, 'Rally Novice', 'RN', '15 points plus 2 major wins', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(18, 'Dual Champion', 'DC', 'Must have CH and GCH or OTCH or RNC or MACH', '2016-08-04 22:58:45', '2016-08-04 22:58:45'),
(19, 'Triple Champion', 'TC', 'MUST have CH,GCH and OTCH or RNC or MATCH', '2016-08-04 22:58:45', '2016-08-04 22:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE IF NOT EXISTS `breeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `litter_size` smallint(6) NOT NULL,
  `description` text,
  `b_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `d_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `e_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `s_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(2) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `litter_size`, `description`, `b_locus_gene`, `d_locus_gene`, `e_locus_gene`, `s_locus_gene`, `status`, `created`, `modified`) VALUES
(64, 'Doberman Pinscher', 9, '', 0, 0, 0, 0, 1, '2016-06-24 07:02:21', '2016-06-24 07:02:21'),
(66, 'German Shepard', 8, '', 0, 0, 0, 0, 1, '2016-06-24 08:34:59', '2016-06-24 08:34:59'),
(68, 'Japanese Chin', 5, '', 0, 0, 0, 0, 1, '2016-06-24 08:40:46', '2016-06-24 08:40:46'),
(69, 'Rottweilers', 5, '', 0, 0, 0, 0, 1, '2016-06-24 08:45:29', '2016-06-24 08:45:29'),
(70, 'Boxer', 4, '', 0, 0, 0, 0, 1, '2016-06-24 08:50:00', '2016-06-24 08:50:00'),
(71, 'Airedale', 3, '', 0, 0, 0, 0, 1, '2016-06-24 08:53:05', '2016-06-24 08:53:05'),
(72, 'Bauceron', 2, '', 0, 0, 0, 0, 1, '2016-06-27 06:16:12', '2016-06-27 06:16:12'),
(73, 'Afghan Hound', 5, '', 0, 0, 0, 0, 1, '2016-06-27 06:22:23', '2016-06-27 06:22:23'),
(74, 'Austrailian Cattle Dog', 3, '', 0, 0, 0, 0, 1, '2016-06-27 06:33:36', '2016-06-27 06:33:36'),
(75, 'Akita', 7, '', 0, 0, 0, 0, 1, '2016-06-27 06:50:14', '2016-06-27 06:50:14'),
(76, 'Borozi', 4, '', 0, 0, 0, 0, 1, '2016-06-27 07:07:19', '2016-06-27 07:07:19'),
(77, 'Bulldog', 7, '', 0, 0, 0, 0, 1, '2016-06-27 07:16:40', '2016-06-27 07:16:40'),
(78, 'Dalmatian', 5, '', 0, 0, 0, 0, 1, '2016-06-27 20:25:01', '2016-06-27 20:25:01'),
(79, 'Cocker Spaniel ', 4, '', 0, 0, 0, 0, 1, '2016-06-27 20:42:16', '2016-06-27 20:42:16'),
(80, 'Collie', 7, '', 0, 0, 0, 0, 1, '2016-06-27 21:02:38', '2016-06-27 21:02:38'),
(81, 'Great Dane', 9, '', 0, 0, 0, 0, 1, '2016-06-27 21:11:02', '2016-06-27 21:11:02'),
(82, 'St Bernard', 2, '', 0, 0, 0, 0, 1, '2016-06-27 21:14:43', '2016-06-27 21:14:43'),
(83, 'Ridgeback', 6, '', 0, 0, 0, 0, 1, '2016-06-27 21:17:04', '2016-06-27 21:17:04'),
(84, 'Czechoslovakian Vlcak', 3, '', 0, 0, 0, 0, 1, '2016-06-28 00:29:09', '2016-06-28 00:29:09'),
(85, 'Staffordshire', 7, '', 0, 0, 0, 0, 1, '2016-06-28 00:37:28', '2016-06-28 00:37:28'),
(86, 'Bull Terrier', 6, '', 0, 0, 0, 0, 1, '2016-06-28 00:59:47', '2016-06-28 00:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `breed_images`
--

CREATE TABLE IF NOT EXISTS `breed_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breed_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `marking` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filename_adult` varchar(255) NOT NULL,
  `b_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `d_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `e_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `s_locus_gene` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=382 ;

--
-- Dumping data for table `breed_images`
--

INSERT INTO `breed_images` (`id`, `breed_id`, `color`, `marking`, `filename`, `filename_adult`, `b_locus_gene`, `d_locus_gene`, `e_locus_gene`, `s_locus_gene`, `created`) VALUES
(1, 2, 'asd', 'zxczxc', '1434749103_Lighthouse.jpg', '', 0, 0, 0, 0, '2015-06-19 21:25:03'),
(2, 3, 'test', 'asd', '1434749122_Lighthouse.jpg', '', 0, 0, 0, 0, '2015-06-19 21:25:22'),
(3, 3, 'asd', 'zxczxc', '1434749122_Penguins.jpg', '', 0, 0, 0, 0, '2015-06-19 21:25:22'),
(4, 4, 'Black and Tan', '', '1434752669_Blackdoberman.jpg', '', 0, 0, 0, 0, '2015-06-19 22:24:29'),
(5, 6, 'test', 'asd', '1434753164_Koala.jpg', '', 0, 0, 0, 0, '2015-06-19 22:32:44'),
(6, 6, 'asd', 'zxc', '1434753164_Penguins.jpg', '', 0, 0, 0, 0, '2015-06-19 22:32:44'),
(7, 9, 'Black and Tan', '', '1434753819_Blackdoberman.jpg', '', 0, 0, 0, 0, '2015-06-19 22:43:39'),
(8, 10, 'Black and Tan', '', '1434754168_Blackdoberman.jpg', '', 0, 0, 0, 0, '2015-06-19 22:49:28'),
(9, 10, 'Fawn and Tan', '', '1434754168_fawndoberman.jpg', '', 0, 0, 0, 0, '2015-06-19 22:49:28'),
(10, 10, 'Blue and Tan', '', '1434754168_Doberman3.jpg', '', 0, 0, 0, 0, '2015-06-19 22:49:28'),
(11, 10, 'Red and Tan', '', '1434754168_reddoberman.jpg', '', 0, 0, 0, 0, '2015-06-19 22:49:28'),
(12, 11, 'Black and Tan', '', '1435165764_balckpup.jpg', 'adult_1435165764_balckpup.jpg', 0, 0, 0, 0, '2015-06-24 17:09:25'),
(13, 11, 'Fawn and Tan', '', '1435165765_fawnpup.jpg', 'adult_1435165765_fawnpup.jpg', 0, 0, 0, 0, '2015-06-24 17:09:25'),
(14, 11, 'Blue and Tan', '', '1435165765_bluepup.jpg', 'adult_1435165765_bluepup.jpg', 0, 0, 0, 0, '2015-06-24 17:09:25'),
(15, 11, 'Red and Tan', '', '1435165765_redpup.jpg', 'adult_1435165765_redpup.jpg', 0, 0, 0, 0, '2015-06-24 17:09:25'),
(16, 17, 'white', 'black and white', '1436471251_lunapic_129503422330043_.gif', 'adult_1436471251_lunapic_129503422330043_.gif', 0, 0, 0, 0, '2015-07-09 19:47:31'),
(17, 19, 'brown', 'brown and black', '1436472881_GermanShepherd1LiverandTan.gif', 'adult_1436472881_GermanShepherd1LiverandTan.gif', 0, 0, 0, 0, '2015-07-09 20:14:41'),
(18, 21, 'Black n white', 'Harlyquin', '1436475124_GreatDane8Mantle.gif', 'adult_1436475124_GreatDane8Mantle.gif', 0, 0, 0, 0, '2015-07-09 20:52:05'),
(19, 20, 'Red and White', 'White markings', '1438880913_BullTerrier10pup.png', '', 0, 0, 0, 0, '2015-08-06 17:08:33'),
(20, 21, 'Red and White', 'White Markings', '1438881238_BullTerrier10pup.png', 'adult_1438881238_BullTerrier10pup.png', 0, 0, 0, 0, '2015-08-06 17:13:58'),
(21, 22, 'Red and White', 'White Markings', '1438881366_BullTerrier10pup.png', 'adult_1438881366_BullTerrier10pup.png', 0, 0, 0, 0, '2015-08-06 17:16:09'),
(22, 23, 'Grizzly and Tan', 'None', '1438882152_AiredaleTerrier2pup.png', 'adult_1438882152_AiredaleTerrier2pup.png', 0, 0, 0, 0, '2015-08-06 17:29:14'),
(23, 24, 'White', 'None', '1439570471_shepwhite_pup_by_ky_kai-d95ll8e.png', 'adult_1439570471_shepwhite_pup_by_ky_kai-d95ll8e.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(24, 24, 'Silver and Tan', 'None', '1439570472_shepsilvertan_pup_by_ky_kai-d95ll7c.png', 'adult_1439570472_shepsilvertan_pup_by_ky_kai-d95ll7c.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(25, 24, 'Red and Black', 'None', '1439570472_shepredblack_pup_by_ky_kai-d95ll6j.png', 'adult_1439570472_shepredblack_pup_by_ky_kai-d95ll6j.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(26, 24, 'Blue and Tan', 'None', '1439570472_shepbluetan_pup_by_ky_kai-d95ll5k.png', 'adult_1439570472_shepbluetan_pup_by_ky_kai-d95ll5k.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(27, 24, 'Liver and Tan', 'None', '1439570472_shep3livertan_pup_by_ky_kai-d95ll4o.png', 'adult_1439570472_shep3livertan_pup_by_ky_kai-d95ll4o.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(28, 24, 'Black and Tan', 'None', '1439570472_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 'adult_1439570472_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(29, 24, 'Panda', 'None', '1439570472_gspanda_puppy_by_ky_kai-d95ll2y.png', 'adult_1439570472_gspanda_puppy_by_ky_kai-d95ll2y.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(30, 24, 'Black', 'None', '1439570472_germansheblack_pup_by_ky_kai-d95ll22.png', 'adult_1439570472_germansheblack_pup_by_ky_kai-d95ll22.png', 0, 0, 0, 0, '2015-08-14 16:41:12'),
(31, 25, 'Black and Rust', 'None', '1439572214_dob_pup_by_ky_kai-d95lkvi.png', 'adult_1439572214_dob_pup_by_ky_kai-d95lkvi.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(32, 25, 'DarkBlue and Rust', 'None', '1439572214_dob_blue_rustpup.png', 'adult_1439572214_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(33, 25, 'SIlverBlue and Rust', 'None', '1439572214_dob_blue_rustpup.png', 'adult_1439572214_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(34, 25, 'Fawn and Rust', 'None', '1439572214_dob_fawnrustpup.png', 'adult_1439572214_dob_fawnrustpup.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(35, 25, 'Red and Rust', 'None', '1439572214_dob_redrust_pup_by_ky_kai-d95lkvo.png', 'adult_1439572214_dob_redrust_pup_by_ky_kai-d95lkvo.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(36, 25, 'White ', 'None', '1439572214_dogs_white_pup_by_ky_kai-d95lkw1.png', 'adult_1439572214_dogs_white_pup_by_ky_kai-d95lkw1.png', 0, 0, 0, 0, '2015-08-14 17:10:14'),
(37, 26, 'white', 't', '55d36592-e314-4244-bd1d-3e686bb40056.jpg', '55d3659b-efb4-478f-a79f-3e686bb40056.jpg', 0, 0, 0, 0, '2015-08-18 17:04:27'),
(38, 27, 'white', 't', '55d365d8-13d8-470a-879c-3e686bb40056.jpg', '55d365d8-3f00-4b5c-ba6c-3e686bb40056.jpg', 0, 0, 0, 0, '2015-08-18 17:05:28'),
(39, 28, 'White', 'None', '55ddefcd-80bc-4588-aace-4de06bb40056.png', '55ddefce-0d08-4594-94c0-48fa6bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:47'),
(40, 28, 'Red n White', 'white Makings', '55ddefcf-f2c0-4715-93c2-4a8d6bb40056.png', '55ddefd0-7acc-4f84-89b1-48cc6bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:49'),
(41, 28, 'Red', 'None', '55ddefd1-7da4-4e2c-a221-48956bb40056.png', '55ddefd1-f458-4b89-9e9d-4e7a6bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:50'),
(42, 28, 'Red n white Brindle', 'Brindle', '55ddefd2-86bc-4fc0-96f2-47c46bb40056.png', '55ddefd3-8378-4b55-9cfd-40256bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:52'),
(43, 28, 'Fawn n White', 'White Markings', '55ddefd4-fb98-420b-89ff-451e6bb40056.png', '55ddefd5-a508-479c-a17c-41b06bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:54'),
(44, 28, 'Fawn', 'None', '55ddefd6-ff98-4783-afab-467c6bb40056.png', '55ddefd6-eac0-4f2f-b84d-4bfa6bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:55'),
(45, 28, 'White n Brindle', 'Brindle', '55ddefd7-a244-4468-91d8-40a36bb40056.png', '55ddefd8-9aa8-4a64-86bf-42426bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:57'),
(46, 28, 'Brindle', 'Brindle', '55ddefd9-3cd4-4ac9-ba12-4fe06bb40056.png', '55ddefda-73ac-450e-a30d-4b326bb40056.png', 0, 0, 0, 0, '2015-08-26 16:56:58'),
(47, 28, 'White n Grey Brindle', 'Brindle', '55ddefda-3a28-4cea-bff2-44406bb40056.png', '55ddefdb-9dcc-4a11-93cc-4f756bb40056.png', 0, 0, 0, 0, '2015-08-26 16:57:00'),
(48, 28, 'Blue n White', 'White Markings', '55ddefdc-ebe4-48fe-98c2-45776bb40056.png', '55ddefdc-fda8-4179-9546-4fa36bb40056.png', 0, 0, 0, 0, '2015-08-26 16:57:01'),
(49, 29, 'Black', 'None', '55ddf2ff-b040-4657-976e-44486bb40056.png', '55ddf300-f2a0-4787-8e2b-482a6bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:25'),
(50, 29, 'Black Rust n White', 'None', '55ddf301-85cc-4879-b2be-4ca66bb40056.png', '55ddf301-e854-46e2-9157-42276bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:26'),
(51, 29, 'Black n White', 'None', '55ddf302-3d94-441b-bb7c-4c116bb40056.png', '55ddf303-2a38-4217-b434-4bb26bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:28'),
(52, 29, 'Blue n White', 'None', '55ddf304-9bfc-4681-93e8-41dc6bb40056.png', '55ddf305-cfd8-4cbc-ad80-44d96bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:30'),
(53, 29, 'Brindle', 'None', '55ddf306-5e94-413d-8853-42ef6bb40056.png', '55ddf306-0ae8-44dd-b269-42296bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:31'),
(54, 29, 'Grey Brindle n White', 'Brindle', '55ddf307-1b90-4871-80ae-48066bb40056.png', '55ddf308-a0cc-4018-ab1a-423e6bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:33'),
(55, 29, 'Brindle n White', 'Brindle', '55ddf309-fee8-4720-9b23-4cde6bb40056.png', '55ddf309-4d00-4fc1-8a15-49186bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:34'),
(56, 29, 'Fawn', 'None', '55ddf30a-96f4-4833-a0ea-4d606bb40056.png', '55ddf30b-9e04-4f1d-9991-49866bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:36'),
(57, 29, 'Fawn n White', 'None', '55ddf30c-a2b0-492a-8d03-42476bb40056.png', '55ddf30d-0c24-4b6c-a4b0-46546bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:38'),
(58, 29, 'Red Brindle n White', 'Brindle', '55ddf30e-d140-4ad6-8b5f-46796bb40056.png', '55ddf30e-c74c-4367-9049-44876bb40056.png', 0, 0, 0, 0, '2015-08-26 17:10:40'),
(59, 30, 'Black n Rust', 'None', '55e09f60-83e8-405b-8faa-4d6b6bb40056.png', '55e09f61-ceb8-4733-9527-41ef6bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:26'),
(60, 30, 'Dark Blue N Rust', 'None', '55e09f62-87a8-44e7-8e60-4c326bb40056.png', '55e09f63-7af0-4e1f-bcf6-4c176bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:27'),
(61, 31, 'Blue n Rust', 'None', '55e09f63-d10c-4ba4-a709-488e6bb40056.png', '55e09f64-8f98-46eb-8db9-432f6bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:29'),
(62, 30, 'Fawn n Rust', 'None', '55e09f65-e884-47eb-8a7a-41d86bb40056.png', '55e09f66-cc98-45fc-a0f4-44106bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:31'),
(63, 30, 'Red n Rust', 'None', '55e09f67-d240-4d49-9892-4a7e6bb40056.png', '55e09f67-3158-4c2a-b959-46ad6bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:32'),
(64, 30, 'White', 'None', '55e09f68-0f8c-4289-93cc-4d5e6bb40056.png', '55e09f69-149c-42b1-a5ff-4cc46bb40056.png', 0, 0, 0, 0, '2015-08-28 17:50:34'),
(65, 32, '#333', '#aaa', '1441039533_1439570471_shepwhite_pup_by_ky_kai-d95ll8e.png', 'adult_1441039533_1439570471_shepwhite_pup_by_ky_kai-d95ll8e.png', 0, 0, 0, 0, '2015-08-31 16:45:33'),
(66, 33, 'Black', 'None', '1441041133_bulldog_black_pup_by_ky_kai-d976hd1.png', 'adult_1441041133_bulldog_black_pup_by_ky_kai-d976hd1.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(67, 33, 'Black White n Rust', 'None', '1441041133_bulldog_black_red_white_pup_by_ky_kai-d976he2.png', 'adult_1441041133_bulldog_black_red_white_pup_by_ky_kai-d976he2.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(68, 33, 'Black n White', 'None', '1441041133_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 'adult_1441041133_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(69, 33, 'Blue n White', 'None', '1441041133_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 'adult_1441041133_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(70, 33, 'Brindle', 'Brindle', '1441041133_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 'adult_1441041133_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(71, 33, 'White n Grey Brindle', 'Brindle', '1441041133_bulldog_brindle_gray_pup_by_ky_kai-d976hhb.png', 'adult_1441041133_bulldog_brindle_gray_pup_by_ky_kai-d976hhb.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(72, 33, 'Brindle n white', 'Brindle', '1441041133_bulldog_brindle_white_pup_by_ky_kai-d976hj9.png', 'adult_1441041133_bulldog_brindle_white_pup_by_ky_kai-d976hj9.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(73, 33, 'Fawn', 'None', '1441041133_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 'adult_1441041133_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(74, 33, 'Fawn n White', 'None', '1441041133_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 'adult_1441041133_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(75, 33, 'White n Red Brindle', 'Brindle', '1441041133_bulldog_red_brindle_white_pup_by_ky_kai-d976i0d.png', 'adult_1441041133_bulldog_red_brindle_white_pup_by_ky_kai-d976i0d.png', 0, 0, 0, 0, '2015-08-31 17:12:13'),
(76, 34, 'Black n Rust', 'None', '1441042048_dob_pup_by_ky_kai-d95lkvi.png', 'adult_1441042048_dob_pup_by_ky_kai-d95lkvi.png', 0, 0, 0, 0, '2015-08-31 17:27:28'),
(77, 34, 'D.Blue n Rust', 'None', '1441042048_dob_blue_rustpup.png', 'adult_1441042048_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-08-31 17:27:28'),
(78, 34, 'Blue n Rust', 'None', '1441042048_dob_blue_rustpup.png', 'adult_1441042048_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-08-31 17:27:28'),
(79, 34, 'Fawn n Rust', 'None', '1441042050_dob_fawnrustpup.png', 'adult_1441042050_dob_fawnrustpup.png', 0, 0, 0, 0, '2015-08-31 17:27:30'),
(80, 34, 'Red n Rust', 'None', '1441042050_dob_redrust_pup_by_ky_kai-d95lkvo.png', 'adult_1441042050_dob_redrust_pup_by_ky_kai-d95lkvo.png', 0, 0, 0, 0, '2015-08-31 17:27:30'),
(81, 35, 'White', 'None', '1441045469_white_akita_pup_by_ky_kai-d97vmsj.png', 'adult_1441045469_white_akita_pup_by_ky_kai-d97vmsj.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(82, 35, 'Black', 'None', '1441045469_black_akita_pup_by_ky_kai-d97vml9.png', 'adult_1441045469_black_akita_pup_by_ky_kai-d97vml9.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(83, 35, 'Fawn', 'None', '1441045469_fawn_akita_pup_by_ky_kai-d97vmnc.png', 'adult_1441045469_fawn_akita_pup_by_ky_kai-d97vmnc.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(84, 35, 'Red', 'None', '1441045469_red_akita_pup_by_ky_kai-d97vmoh.png', 'adult_1441045469_red_akita_pup_by_ky_kai-d97vmoh.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(85, 35, 'Silver', 'None', '1441045469_silver_akita_pup_by_ky_kai-d97vmqn.png', 'adult_1441045469_silver_akita_pup_by_ky_kai-d97vmqn.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(86, 35, 'White and Grey ', 'Piebald', '1441045469_white_gray_akita_pup_by_ky_kai-d97vmsy.png', 'adult_1441045469_white_gray_akita_pup_by_ky_kai-d97vmsy.png', 0, 0, 0, 0, '2015-08-31 18:24:29'),
(87, 36, 'White n Grey ', 'Piebald', '1441045842_white_gray_akita_pup_.png', 'adult_1441045842_white_gray_akita_pup_.png', 0, 0, 0, 0, '2015-08-31 18:30:42'),
(88, 37, 'Black', 'None', '1441139102_black_akita_pup_by_ky_kai-d97vml9.png', 'adult_1441139102_black_akita_pup_by_ky_kai-d97vml9.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(89, 37, 'Black n Brown', 'None', '1441139102_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 'adult_1441139102_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(90, 37, 'Brown', 'None', '1441139102_brown_akita_pup_by_ky_kai-d97vmm6.png', 'adult_1441139102_brown_akita_pup_by_ky_kai-d97vmm6.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(91, 37, 'Fawn', 'None', '1441139102_fawn_akita_pup_by_ky_kai-d97vmnc.png', 'adult_1441139102_fawn_akita_pup_by_ky_kai-d97vmnc.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(92, 37, 'Red', 'None', '1441139102_red_akita_pup_by_ky_kai-d97vmoh.png', 'adult_1441139102_red_akita_pup_by_ky_kai-d97vmoh.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(93, 37, 'Silver', 'None', '1441139102_silver_akita_pup_by_ky_kai-d97vmqn.png', 'adult_1441139102_silver_akita_pup_by_ky_kai-d97vmqn.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(94, 37, 'White', 'None', '1441139102_white_akita_pup_by_ky_kai-d97vmsj.png', 'adult_1441139102_white_akita_pup_by_ky_kai-d97vmsj.png', 0, 0, 0, 0, '2015-09-01 20:25:02'),
(95, 38, 'Brown', 'None', '1441827455_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 'adult_1441827455_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 0, 0, 0, 0, '2015-09-09 19:37:36'),
(96, 38, 'Dark Brown', 'None', '1441827456_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 'adult_1441827456_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 0, 0, 0, 0, '2015-09-09 19:37:36'),
(97, 38, 'Wolf Grey', 'None', '1441827456_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 'adult_1441827456_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 0, 0, 0, 0, '2015-09-09 19:37:36'),
(98, 38, 'Light Brown', 'None', '1441827456_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 'adult_1441827456_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 0, 0, 0, 0, '2015-09-09 19:37:36'),
(99, 39, 'Black', 'None', '1441827868_afghanpuppy_black_by_ky_kai-d98z010.png', 'adult_1441827868_afghanpuppy_black_by_ky_kai-d98z010.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(100, 39, 'Black n Silver', 'None', '1441827868_afghanpuppy_black_silver_by_ky_kai-d98z023.png', 'adult_1441827868_afghanpuppy_black_silver_by_ky_kai-d98z023.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(101, 39, 'Black n Tan', 'None', '1441827868_afghanpuppy_black_tan_by_ky_kai-d98z02y.png', 'adult_1441827868_afghanpuppy_black_tan_by_ky_kai-d98z02y.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(102, 39, 'Blue', 'None', '1441827868_afghanpuppy_blue_by_ky_kai-d98z03r.png', 'adult_1441827868_afghanpuppy_blue_by_ky_kai-d98z03r.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(103, 39, 'Blue n Cream', 'None', '1441827868_afghanpuppy_blue_cream_by_ky_kai-d98z04s.png', 'adult_1441827868_afghanpuppy_blue_cream_by_ky_kai-d98z04s.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(104, 39, 'Cream', 'None', '1441827868_afghanpuppy_cream_by_ky_kai-d98z05j.png', 'adult_1441827868_afghanpuppy_cream_by_ky_kai-d98z05j.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(105, 39, 'Red', 'None', '1441827868_afghanpuppy_red_by_ky_kai-d98z06g.png', 'adult_1441827868_afghanpuppy_red_by_ky_kai-d98z06g.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(106, 39, 'Silver', 'None', '1441827868_afghanpuppy_silver_by_ky_kai-d98z07g.png', 'adult_1441827868_afghanpuppy_silver_by_ky_kai-d98z07g.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(107, 39, 'White', 'None', '1441827868_afghanpuppy_white_by_ky_kai-d98z08g.png', 'adult_1441827868_afghanpuppy_white_by_ky_kai-d98z08g.png', 0, 0, 0, 0, '2015-09-09 19:44:28'),
(108, 40, 'Apricot', 'None', '1444061942_poodle_apricot_pup_by_ky_kai-d9bejhu.png', 'adult_1444061942_poodle_apricot_pup_by_ky_kai-d9bejhu.png', 0, 0, 0, 0, '2015-10-05 16:19:02'),
(109, 41, 'Black and White', 'None', '1444062018_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 'adult_1444062018_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 0, 0, 0, 0, '2015-10-05 16:20:18'),
(110, 42, 'Blue Mottled', 'None', '1444062090_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 'adult_1444062090_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 0, 0, 0, 0, '2015-10-05 16:21:31'),
(111, 43, 'Black n Rust', 'None', '1444856914_dob_pup_by_ky_kai-d95lkvi.png', 'adult_1444856914_dob_pup_by_ky_kai-d95lkvi.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(112, 43, 'Dark Blue n Rust', 'None', '1444856914_dob_blue_rustpup.png', 'adult_1444856914_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(113, 43, 'Fawn n Rust', 'None', '1444856914_dob_fawnrustpup.png', 'adult_1444856914_dob_fawnrustpup.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(114, 43, 'Blue n Rust', 'None', '1444856914_dob_blue_rustpup.png', 'adult_1444856914_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(115, 43, 'White', 'None', '1444856914_dogs_white_pup_by_ky_kai-d95lkw1.png', 'adult_1444856914_dogs_white_pup_by_ky_kai-d95lkw1.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(116, 43, 'Red n Rust', 'None', '1444856914_dob_redrust_pup_by_ky_kai-d95lkvo.png', 'adult_1444856914_dob_redrust_pup_by_ky_kai-d95lkvo.png', 0, 0, 0, 0, '2015-10-14 21:08:34'),
(117, 44, 'Black', 'None', '1444857192_afghanpuppy_black_by_ky_kai-d98z010.png', 'adult_1444857192_afghanpuppy_black_by_ky_kai-d98z010.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(118, 44, 'White', 'None', '1444857192_afghanpuppy_white_by_ky_kai-d98z08g.png', 'adult_1444857192_afghanpuppy_white_by_ky_kai-d98z08g.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(119, 44, 'Silver', 'None', '1444857192_afghanpuppy_silver_by_ky_kai-d98z07g.png', 'adult_1444857192_afghanpuppy_silver_by_ky_kai-d98z07g.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(120, 44, 'Red', 'None', '1444857192_afghanpuppy_red_by_ky_kai-d98z06g.png', 'adult_1444857192_afghanpuppy_red_by_ky_kai-d98z06g.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(121, 44, 'Cream', 'None', '1444857192_afghanpuppy_cream_by_ky_kai-d98z05j.png', 'adult_1444857192_afghanpuppy_cream_by_ky_kai-d98z05j.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(122, 44, 'Blue', 'None', '1444857192_afghanpuppy_blue_by_ky_kai-d98z03r.png', 'adult_1444857192_afghanpuppy_blue_by_ky_kai-d98z03r.png', 0, 0, 0, 0, '2015-10-14 21:13:12'),
(123, 45, 'Black n Tan', 'None', '1444857422_bauceron_black__tan_pup2_by_ky_kai-d9a1em8.png', 'adult_1444857422_bauceron_black__tan_pup2_by_ky_kai-d9a1em8.png', 0, 0, 0, 0, '2015-10-14 21:17:03'),
(124, 45, 'Black n Rust', 'None', '1444857423_bauceron_black_rust_pup2_by_ky_kai-d9a1eme.png', 'adult_1444857423_bauceron_black_rust_pup2_by_ky_kai-d9a1eme.png', 0, 0, 0, 0, '2015-10-14 21:17:03'),
(125, 45, 'Grey Black n Tan', 'None', '1444857423_bauceron_gray_black__tan_pup2_by_ky_kai-d9a1emo.png', 'adult_1444857423_bauceron_gray_black__tan_pup2_by_ky_kai-d9a1emo.png', 0, 0, 0, 0, '2015-10-14 21:17:03'),
(126, 45, 'Harlequin', 'None', '1444857423_bauceron_harlequin_pup2_by_ky_kai-d9a1enb.png', 'adult_1444857423_bauceron_harlequin_pup2_by_ky_kai-d9a1enb.png', 0, 0, 0, 0, '2015-10-14 21:17:03'),
(127, 46, 'Red', 'None', '1444858558_white_red_shading_akita_pup_by_ky_kai-d97vmt8.png', 'adult_1444858558_white_red_shading_akita_pup_by_ky_kai-d97vmt8.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(128, 46, 'Black', 'None', '1444858558_black_akita_pup_by_ky_kai-d97vml9.png', 'adult_1444858558_black_akita_pup_by_ky_kai-d97vml9.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(129, 46, 'White', 'None', '1444858558_white_akita_pup_by_ky_kai-d97vmsj.png', 'adult_1444858558_white_akita_pup_by_ky_kai-d97vmsj.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(130, 46, 'Fawn', 'None', '1444858558_fawn_akita_pup_by_ky_kai-d97vmnc.png', 'adult_1444858558_fawn_akita_pup_by_ky_kai-d97vmnc.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(131, 46, 'Silver Black Overlay', 'None', '1444858558_silver_black_overlay_akita_pup_by_ky_kai-d97vmrg.png', 'adult_1444858558_silver_black_overlay_akita_pup_by_ky_kai-d97vmrg.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(132, 46, 'Silver', 'None', '1444858558_silver_akita_pup_by_ky_kai-d97vmqn.png', 'adult_1444858558_silver_akita_pup_by_ky_kai-d97vmqn.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(133, 46, 'Red Black Overlay', 'None', '1444858558_red_black_overlay_akita_pup2_by_ky_kai-d97vmpk.png', 'adult_1444858558_red_black_overlay_akita_pup2_by_ky_kai-d97vmpk.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(134, 46, 'Brown Black Overlay', 'None', '1444858558_brown_black_overlay_akita_pup_by_ky_kai-d97vmmf.png', 'adult_1444858558_brown_black_overlay_akita_pup_by_ky_kai-d97vmmf.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(135, 46, 'Brown', 'None', '1444858558_brown_akita_pup_by_ky_kai-d97vmm6.png', 'adult_1444858558_brown_akita_pup_by_ky_kai-d97vmm6.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(136, 46, 'Black Brown UnderCoat', 'None', '1444858558_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 'adult_1444858558_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 0, 0, 0, 0, '2015-10-14 21:35:58'),
(137, 47, 'Black', 'None', '1444858952_germansheblack_pup_by_ky_kai-d95ll22.png', 'adult_1444858952_germansheblack_pup_by_ky_kai-d95ll22.png', 0, 0, 0, 0, '2015-10-14 21:42:32'),
(138, 47, 'Black n Tan', 'None', '1444858952_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 'adult_1444858952_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 0, 0, 0, 0, '2015-10-14 21:42:32'),
(139, 47, 'Black n Red', 'None', '1444858952_shepredblack_pup_by_ky_kai-d95ll6j.png', 'adult_1444858952_shepredblack_pup_by_ky_kai-d95ll6j.png', 0, 0, 0, 0, '2015-10-14 21:42:32'),
(140, 47, 'White', 'None', '1444858952_shepwhite_pup_by_ky_kai-d95ll8e.png', 'adult_1444858952_shepwhite_pup_by_ky_kai-d95ll8e.png', 0, 0, 0, 0, '2015-10-14 21:42:32'),
(141, 47, 'Blue n Tan', 'None', '1444858952_shepbluetan_pup_by_ky_kai-d95ll5k.png', 'adult_1444858952_shepbluetan_pup_by_ky_kai-d95ll5k.png', 0, 0, 0, 0, '2015-10-14 21:42:32'),
(142, 48, 'Blue Mottled ', 'None', '1444859296_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 'adult_1444859296_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(143, 48, 'Blue', 'None', '1444859296_australian_cattle_dog_blue_pup3_by_ky_kai-d9a1dr1.png', 'adult_1444859296_australian_cattle_dog_blue_pup3_by_ky_kai-d9a1dr1.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(144, 48, 'Blue Speckled', 'None', '1444859296_australian_cattle_dog_blue_speckled3_by_ky_kai-d9a1dyq.png', 'adult_1444859296_australian_cattle_dog_blue_speckled3_by_ky_kai-d9a1dyq.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(145, 48, 'Red Mottled', 'None', '1444859296_australian_cattle_dog_red_mottled3_by_ky_kai-d9a1dxp.png', 'adult_1444859296_australian_cattle_dog_red_mottled3_by_ky_kai-d9a1dxp.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(146, 48, 'Red', 'None', '1444859296_australian_cattle_dog_red_pup3_by_ky_kai-d9a1dtw.png', 'adult_1444859296_australian_cattle_dog_red_pup3_by_ky_kai-d9a1dtw.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(147, 48, 'Red Speckled', 'None', '1444859296_australian_cattle_dog_red_speckled3_by_ky_kai-d9a1dzu.png', 'adult_1444859296_australian_cattle_dog_red_speckled3_by_ky_kai-d9a1dzu.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(148, 48, 'Red n Tan', 'None', '1444859296_australian_cattle_dog_red_tan_pup3_by_ky_kai-d9a1dvm.png', 'adult_1444859296_australian_cattle_dog_red_tan_pup3_by_ky_kai-d9a1dvm.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(149, 48, 'Blue white n Tan', 'None', '1444859296_australian_cattle_dog__blue_white_tan_pup3_by_ky_kai-d9a1dpj.png', 'adult_1444859296_australian_cattle_dog__blue_white_tan_pup3_by_ky_kai-d9a1dpj.png', 0, 0, 0, 0, '2015-10-14 21:48:16'),
(150, 49, 'Fawn', 'None', '1444859876_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 'adult_1444859876_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 0, 0, 0, 0, '2015-10-14 21:57:56'),
(151, 49, 'Black', 'None', '1444859876_bulldog_black_pup_by_ky_kai-d976hd1.png', 'adult_1444859876_bulldog_black_pup_by_ky_kai-d976hd1.png', 0, 0, 0, 0, '2015-10-14 21:57:56'),
(152, 49, 'Black n White', 'None', '1444859876_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 'adult_1444859876_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 0, 0, 0, 0, '2015-10-14 21:57:56'),
(153, 49, 'Blue n White', 'None', '1444859876_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 'adult_1444859876_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(154, 49, 'Brindle', 'None', '1444859877_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 'adult_1444859877_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(155, 49, 'Fawn n White', 'None', '1444859877_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 'adult_1444859877_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(156, 49, 'Red', 'None', '1444859877_bulldog_red_pup_by_ky_kai-d976i1c.png', 'adult_1444859877_bulldog_red_pup_by_ky_kai-d976i1c.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(157, 49, 'Red n White', 'None', '1444859877_bulldog_red_white_pup_by_ky_kai-d976i2f.png', 'adult_1444859877_bulldog_red_white_pup_by_ky_kai-d976i2f.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(158, 49, 'White', 'None', '1444859877_bulldog_white_pup_by_ky_kai-d976i3a.png', 'adult_1444859877_bulldog_white_pup_by_ky_kai-d976i3a.png', 0, 0, 0, 0, '2015-10-14 21:57:57'),
(159, 50, 'Black n Tan', 'None', '1444860637_cocker_spaniel_black_tan_pup_by_ky_kai-d9behvo.png', 'adult_1444860637_cocker_spaniel_black_tan_pup_by_ky_kai-d9behvo.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(160, 50, 'Black', 'None', '1444860638_cocker_spaniel_black_pup_by_ky_kai-d9behui.png', 'adult_1444860638_cocker_spaniel_black_pup_by_ky_kai-d9behui.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(161, 50, 'Black n White', 'None', '1444860638_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 'adult_1444860638_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(162, 50, 'Brown n White', 'None', '1444860638_cocker_spaniel_brown_white_pup_by_ky_kai-d9bei31.png', 'adult_1444860638_cocker_spaniel_brown_white_pup_by_ky_kai-d9bei31.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(163, 50, 'Buff', 'None', '1444860638_cocker_spaniel_buff_pup_by_ky_kai-d9bei62.png', 'adult_1444860638_cocker_spaniel_buff_pup_by_ky_kai-d9bei62.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(164, 50, 'Buff n White', 'None', '1444860638_cocker_spaniel_buff_white_pup_by_ky_kai-d9bej88.png', 'adult_1444860638_cocker_spaniel_buff_white_pup_by_ky_kai-d9bej88.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(165, 50, 'Red', 'None', '1444860638_cocker_spaniel_red_pup_by_ky_kai-d9bejb2.png', 'adult_1444860638_cocker_spaniel_red_pup_by_ky_kai-d9bejb2.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(166, 50, 'Read Roan', 'None', '1444860638_cocker_spaniel_red_roan_pup_by_ky_kai-d9bejbx.png', 'adult_1444860638_cocker_spaniel_red_roan_pup_by_ky_kai-d9bejbx.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(167, 50, 'Red n White', 'None', '1444860638_cocker_spaniel_red_white_pup_by_ky_kai-d9bejcn.png', 'adult_1444860638_cocker_spaniel_red_white_pup_by_ky_kai-d9bejcn.png', 0, 0, 0, 0, '2015-10-14 22:10:38'),
(168, 51, 'Black White n Tan', 'None', '1444860987_collie_black_white_tan_by_ky_kai-d9czmtn.png', 'adult_1444860987_collie_black_white_tan_by_ky_kai-d9czmtn.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(169, 51, 'Blue Merle', 'None', '1444860987_collie_blue_merle_by_ky_kai-d9czmuj.png', 'adult_1444860987_collie_blue_merle_by_ky_kai-d9czmuj.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(170, 51, 'Sable', 'None', '1444860987_collie_sable_by_ky_kai-d9czmw4.png', 'adult_1444860987_collie_sable_by_ky_kai-d9czmw4.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(171, 51, 'Sable Merle', 'None', '1444860987_collie_sable_merle_by_ky_kai-d9czmxp.png', 'adult_1444860987_collie_sable_merle_by_ky_kai-d9czmxp.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(172, 51, 'Sable Merle n White', 'None', '1444860987_sable_merle_white_by_ky_kai-d9czn14.png', 'adult_1444860987_sable_merle_white_by_ky_kai-d9czn14.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(173, 51, 'White', 'None', '1444860987_collie_white_by_ky_kai-d9czmzh.png', 'adult_1444860987_collie_white_by_ky_kai-d9czmzh.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(174, 51, 'White Merle', 'None', '1444860987_collie_white_merle_by_ky_kai-d9czn0l.png', 'adult_1444860987_collie_white_merle_by_ky_kai-d9czn0l.png', 0, 0, 0, 0, '2015-10-14 22:16:27'),
(175, 52, 'Harlequin', 'None', '1444861300_great_dane_harlequin_pup_by_ky_kai-d9czp6n.png', 'adult_1444861300_great_dane_harlequin_pup_by_ky_kai-d9czp6n.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(176, 52, 'Black', 'None', '1444861300_great_dane_black_pup_by_ky_kai-d9czp3p.png', 'adult_1444861300_great_dane_black_pup_by_ky_kai-d9czp3p.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(177, 52, 'Blue', 'None', '1444861300_great_dane_blue_pup_by_ky_kai-d9czp4x.png', 'adult_1444861300_great_dane_blue_pup_by_ky_kai-d9czp4x.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(178, 52, 'Brindle', 'None', '1444861300_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 'adult_1444861300_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(179, 52, 'Mantle', 'None', '1444861300_great_dane_mantle_pup_by_ky_kai-d9czp78.png', 'adult_1444861300_great_dane_mantle_pup_by_ky_kai-d9czp78.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(180, 52, 'White', 'None', '1444861300_great_dane_white_pup_by_ky_kai-d9czp8u.png', 'adult_1444861300_great_dane_white_pup_by_ky_kai-d9czp8u.png', 0, 0, 0, 0, '2015-10-14 22:21:40'),
(181, 53, 'Brown', 'None', '1444861584_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 'adult_1444861584_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 0, 0, 0, 0, '2015-10-14 22:26:24'),
(182, 53, 'Medium Brown', 'None', '1444861584_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 'adult_1444861584_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 0, 0, 0, 0, '2015-10-14 22:26:24'),
(183, 53, 'Dark Brown', 'None', '1444861584_wolfdog_dark2_puppy_by_ky_kai-d991p4n.png', 'adult_1444861584_wolfdog_dark2_puppy_by_ky_kai-d991p4n.png', 0, 0, 0, 0, '2015-10-14 22:26:24'),
(184, 53, 'Soft Brown', 'None', '1444861584_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 'adult_1444861584_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 0, 0, 0, 0, '2015-10-14 22:26:24'),
(185, 53, 'Grey', 'None', '1444861584_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 'adult_1444861584_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 0, 0, 0, 0, '2015-10-14 22:26:24'),
(186, 54, 'Blue Fawn', 'None', '1444861985_staffordshire_blue_fawn_pup_by_ky_kai-d9a3c4r.png', 'adult_1444861985_staffordshire_blue_fawn_pup_by_ky_kai-d9a3c4r.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(187, 54, 'Black', 'None', '1444861985_staffordshire_black_pup2_by_ky_kai-d9a3c3w.png', 'adult_1444861985_staffordshire_black_pup2_by_ky_kai-d9a3c3w.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(188, 54, 'Blue', 'None', '1444861985_staffordshire_blue_pup2_by_ky_kai-d9a3c6v.png', 'adult_1444861985_staffordshire_blue_pup2_by_ky_kai-d9a3c6v.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(189, 54, 'Bronze', 'None', '1444861985_staffordshire_bronze_pup_by_ky_kai-d9a3c7f.png', 'adult_1444861985_staffordshire_bronze_pup_by_ky_kai-d9a3c7f.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(190, 54, 'Brown Seal', 'None', '1444861985_staffordshire_brown_seal_pup_by_ky_kai-d9a3c8d.png', 'adult_1444861985_staffordshire_brown_seal_pup_by_ky_kai-d9a3c8d.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(191, 54, 'Fawn', 'None', '1444861985_staffordshire_fawn_pup_by_ky_kai-d9a3ca8.png', 'adult_1444861985_staffordshire_fawn_pup_by_ky_kai-d9a3ca8.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(192, 54, 'Fawn Sable', 'None', '1444861985_staffordshire_fawn_sable_pup_by_ky_kai-d9a3caq.png', 'adult_1444861985_staffordshire_fawn_sable_pup_by_ky_kai-d9a3caq.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(193, 54, 'Liver', 'None', '1444861985_staffordshire_liver_pup_by_ky_kai-d9a3cbj.png', 'adult_1444861985_staffordshire_liver_pup_by_ky_kai-d9a3cbj.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(194, 54, 'Red', 'None', '1444861985_staffordshire_red_pup2_by_ky_kai-d9a3cc9.png', 'adult_1444861985_staffordshire_red_pup2_by_ky_kai-d9a3cc9.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(195, 54, 'White', 'None', '1444861985_staffordshire_white_pup_by_ky_kai-d9a3ccq.png', 'adult_1444861985_staffordshire_white_pup_by_ky_kai-d9a3ccq.png', 0, 0, 0, 0, '2015-10-14 22:33:05'),
(196, 55, 'Apricot', 'None', '1444862563_poodle_apricot_pup_by_ky_kai-d9bejhu.png', 'adult_1444862563_poodle_apricot_pup_by_ky_kai-d9bejhu.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(197, 55, 'Black n Apricot', 'None', '1444862563_poodle_black_apricot_pup_by_ky_kai-d9bo1pz.png', 'adult_1444862563_poodle_black_apricot_pup_by_ky_kai-d9bo1pz.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(198, 55, 'Black', 'None', '1444862563_poodle_black_pup_by_ky_kai-d9bo1uf.png', 'adult_1444862563_poodle_black_pup_by_ky_kai-d9bo1uf.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(199, 55, 'Blue', 'None', '1444862563_poodle_blue_pup3_by_ky_kai-d9bo3oo.png', 'adult_1444862563_poodle_blue_pup3_by_ky_kai-d9bo3oo.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(200, 55, 'Brown', 'None', '1444862563_poodle_brown_pup_by_ky_kai-d9bo43l.png', 'adult_1444862563_poodle_brown_pup_by_ky_kai-d9bo43l.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(201, 55, 'Cream', 'None', '1444862563_poodle_cream_pup_by_ky_kai-d9bo5ys.png', 'adult_1444862563_poodle_cream_pup_by_ky_kai-d9bo5ys.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(202, 55, 'Grey', 'None', '1444862563_poodle_gray_pup_by_ky_kai-d9bo4f3.png', 'adult_1444862563_poodle_gray_pup_by_ky_kai-d9bo4f3.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(203, 55, 'Red', 'None', '1444862563_poodle_red_pup_by_ky_kai-d9bo4v7.png', 'adult_1444862563_poodle_red_pup_by_ky_kai-d9bo4v7.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(204, 55, 'Silver', 'None', '1444862563_poodle_silver_pup_by_ky_kai-d9bo4yq.png', 'adult_1444862563_poodle_silver_pup_by_ky_kai-d9bo4yq.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(205, 55, 'White', 'None', '1444862563_poodle_white_pup_by_ky_kai-d9bo52y.png', 'adult_1444862563_poodle_white_pup_by_ky_kai-d9bo52y.png', 0, 0, 0, 0, '2015-10-14 22:42:43'),
(206, 56, 'black', 'none', '1445374403_Blackdobi590x460.png', 'adult_1445374403_Blackdobi590x460.png', 0, 0, 0, 0, '2015-10-20 20:53:23'),
(207, 57, 'brindle', 'None', '1445374439_greatbrindle590x590.png', 'adult_1445374439_greatbrindle590x590.png', 0, 0, 0, 0, '2015-10-20 20:53:59'),
(208, 58, 'Black n tan', 'None', '1445374485_Blacktansheperd590x460.png', 'adult_1445374485_Blacktansheperd590x460.png', 0, 0, 0, 0, '2015-10-20 20:54:45'),
(209, 59, 'Black n Tan', 'None', '1446495673_doberpup600x507.png', 'adult_1446495673_doberpup600x507.png', 0, 0, 0, 0, '2015-11-02 20:21:13'),
(210, 60, 'Black n White', 'Harlequin', '1446759950_550x544.png', 'adult_1446759950_550x544.png', 0, 0, 0, 0, '2015-11-05 21:45:50'),
(211, 61, 'Dark Blue n Rust', 'None', '1446760312_dob_blue_rustpup.png', 'adult_1446760312_dob_blue_rustpup.png', 0, 0, 0, 0, '2015-11-05 21:51:52'),
(212, 62, 'Brindle', 'None', '1446761509_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 'adult_1446761509_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 0, 0, 0, 0, '2015-11-05 22:11:49'),
(213, 63, 'Panda', 'None', '1446761558_gspanda_puppy_by_ky_kai-d95ll2y.png', 'adult_1446761558_gspanda_puppy_by_ky_kai-d95ll2y.png', 0, 0, 0, 0, '2015-11-05 22:12:38'),
(214, 64, 'Black and Rust', 'NA', '1466751741_dob_pup_by_ky_kai-d95lkvi.png', 'adult_1466751741_dob_pup_by_ky_kai-d95lkvi.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(215, 64, 'Blue and Rust', 'NA', '1466751741_dob_blue_rustpup.png', 'adult_1466751741_dob_blue_rustpup.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(216, 64, 'Light Blue and Rust', 'NA', '1466751741_dob_blue_rustpup.png', 'adult_1466751741_dob_blue_rustpup.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(217, 64, 'Fawn and Rust', 'NA', '1466751741_dob_fawnrustpup.png', 'adult_1466751741_dob_fawnrustpup.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(218, 64, 'Red and Rust', 'NA', '1466751741_dob_redrust_pup_by_ky_kai-d95lkvo.png', 'adult_1466751741_dob_redrust_pup_by_ky_kai-d95lkvo.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(219, 64, 'White', 'NA', '1466751741_dogs_white_pup_by_ky_kai-d95lkw1.png', 'adult_1466751741_dogs_white_pup_by_ky_kai-d95lkw1.png', 0, 0, 0, 0, '2016-06-24 07:02:21'),
(220, 65, 'White', 'NA', '1466752466_poodle_white_pup_by_ky_kai-d9bo52y.png', 'adult_1466752466_poodle_white_pup_by_ky_kai-d9bo52y.png', 0, 0, 0, 0, '2016-06-24 07:14:26'),
(221, 66, 'Black', 'NA', '1466757299_germansheblack_pup_by_ky_kai-d95ll22.png', 'adult_1466757299_germansheblack_pup_by_ky_kai-d95ll22.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(222, 66, 'Black and Tan', 'NA', '1466757299_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 'adult_1466757299_shep2blacktan_pup_by_ky_kai-d95ll3v.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(223, 66, 'Blue and Tan', 'NA', '1466757299_shepbluetan_pup_by_ky_kai-d95ll5k.png', 'adult_1466757299_shepbluetan_pup_by_ky_kai-d95ll5k.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(224, 66, 'Black and Red', 'NA', '1466757299_shepredblack_pup_by_ky_kai-d95ll6j.png', 'adult_1466757299_shepredblack_pup_by_ky_kai-d95ll6j.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(225, 66, 'White', 'NA', '1466757299_shepwhite_pup_by_ky_kai-d95ll8e.png', 'adult_1466757299_shepwhite_pup_by_ky_kai-d95ll8e.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(226, 66, 'Panda', 'NA', '1466757299_gspanda_puppy_by_ky_kai-d95ll2y.png', 'adult_1466757299_gspanda_puppy_by_ky_kai-d95ll2y.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(227, 66, 'Liver and Tan', 'NA', '1466757299_shep3livertan_pup_by_ky_kai-d95ll4o.png', 'adult_1466757299_shep3livertan_pup_by_ky_kai-d95ll4o.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(228, 66, 'Silver and Tan', 'NA', '1466757299_shepsilvertan_pup_by_ky_kai-d95ll7c.png', 'adult_1466757299_shepsilvertan_pup_by_ky_kai-d95ll7c.png', 0, 0, 0, 0, '2016-06-24 08:34:59'),
(229, 67, 'Sable White', 'NA', '1466757491_japanese_chin_sable_white_pup_by_ky_kai-d9hlbpt.png', 'adult_1466757491_japanese_chin_sable_white_pup_by_ky_kai-d9hlbpt.png', 0, 0, 0, 0, '2016-06-24 08:38:11'),
(230, 67, 'White Black', 'NA', '1466757491_japanese_chin_black_white_pup_by_ky_kai-d9hlboq.png', 'adult_1466757491_japanese_chin_black_white_pup_by_ky_kai-d9hlboq.png', 0, 0, 0, 0, '2016-06-24 08:38:11'),
(231, 68, 'Black White', 'NA', '1466757646_japanese_chin_black_white_pup_by_ky_kai-d9hlboq.png', 'adult_1466757646_japanese_chin_black_white_pup_by_ky_kai-d9hlboq.png', 0, 0, 0, 0, '2016-06-24 08:40:46'),
(232, 68, 'Sable White', 'NA', '1466757646_japanese_chin_sable_white_pup_by_ky_kai-d9hlbpt.png', 'adult_1466757646_japanese_chin_sable_white_pup_by_ky_kai-d9hlbpt.png', 0, 0, 0, 0, '2016-06-24 08:40:46'),
(233, 69, 'Black and Tan', 'NA', '1466757929_rottweiler_black_tan_pup_by_ky_kai-d9hlbqc.png', 'adult_1466757929_rottweiler_black_tan_pup_by_ky_kai-d9hlbqc.png', 0, 0, 0, 0, '2016-06-24 08:45:29'),
(234, 70, 'Brindle', 'NA', '1466758200_brindle_boxer_pup_by_ky_kai-d9hlbmd.png', 'adult_1466758200_brindle_boxer_pup_by_ky_kai-d9hlbmd.png', 0, 0, 0, 0, '2016-06-24 08:50:00'),
(235, 70, 'Fawn', 'NA', '1466758200_fawn_nw_boxer_pup_by_ky_kai-d9hlbn2.png', 'adult_1466758200_fawn_nw_boxer_pup_by_ky_kai-d9hlbn2.png', 0, 0, 0, 0, '2016-06-24 08:50:00'),
(236, 70, 'Fawn White', 'Black Mask', '1466758200_fawn_white_boxer_pup_by_ky_kai-d9hlbns.png', 'adult_1466758200_fawn_white_boxer_pup_by_ky_kai-d9hlbns.png', 0, 0, 0, 0, '2016-06-24 08:50:00'),
(237, 70, 'White', 'NA', '1466758200_white_boxer_pup_by_ky_kai-d9hlbr1.png', 'adult_1466758200_white_boxer_pup_by_ky_kai-d9hlbr1.png', 0, 0, 0, 0, '2016-06-24 08:50:00'),
(238, 70, 'Brindle White', 'Black Mask', '1466758200_white_brindle_boxer_pup_by_ky_kai-d9hlbs7.png', 'adult_1466758200_white_brindle_boxer_pup_by_ky_kai-d9hlbs7.png', 0, 0, 0, 0, '2016-06-24 08:50:00'),
(239, 71, 'Grizzly Tan', 'NA', '1466758385_airedale_grizzle_tan_pup_by_ky_kai-d9hlbkv.png', 'adult_1466758385_airedale_grizzle_tan_pup_by_ky_kai-d9hlbkv.png', 0, 0, 0, 0, '2016-06-24 08:53:05'),
(240, 71, 'Black Tan', 'NA', '1466758385_airedale_black_tan_pup_by_ky_kai-d9hlbkf.png', 'adult_1466758385_airedale_black_tan_pup_by_ky_kai-d9hlbkf.png', 0, 0, 0, 0, '2016-06-24 08:53:05'),
(241, 72, 'Black and Tan', 'NA', '1467008172_bauceron_black__tan_pup2_by_ky_kai-d9a1em8.png', 'adult_1467008172_bauceron_black__tan_pup2_by_ky_kai-d9a1em8.png', 0, 0, 0, 0, '2016-06-27 06:16:16'),
(242, 72, 'Black and Rust', 'NA', '1467008176_bauceron_black_rust_pup2_by_ky_kai-d9a1eme.png', 'adult_1467008176_bauceron_black_rust_pup2_by_ky_kai-d9a1eme.png', 0, 0, 0, 0, '2016-06-27 06:16:16'),
(243, 72, 'Grey Black and Yan', 'NA', '1467008176_bauceron_gray_black__tan_pup2_by_ky_kai-d9a1emo.png', 'adult_1467008176_bauceron_gray_black__tan_pup2_by_ky_kai-d9a1emo.png', 0, 0, 0, 0, '2016-06-27 06:16:16'),
(244, 72, 'Harlequin', 'NA', '1467008176_bauceron_harlequin_pup2_by_ky_kai-d9a1enb.png', 'adult_1467008176_bauceron_harlequin_pup2_by_ky_kai-d9a1enb.png', 0, 0, 0, 0, '2016-06-27 06:16:16'),
(245, 73, 'White', 'NA', '1467008543_afghanpuppy_white_by_ky_kai-d98z08g.png', 'adult_1467008543_afghanpuppy_white_by_ky_kai-d98z08g.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(246, 73, 'SIlver', 'NA', '1467008543_afghanpuppy_silver_by_ky_kai-d98z07g.png', 'adult_1467008543_afghanpuppy_silver_by_ky_kai-d98z07g.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(247, 73, 'Red', 'NA', '1467008543_afghanpuppy_red_by_ky_kai-d98z06g.png', 'adult_1467008543_afghanpuppy_red_by_ky_kai-d98z06g.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(248, 73, 'Cream', 'NA', '1467008543_afghanpuppy_cream_by_ky_kai-d98z05j.png', 'adult_1467008543_afghanpuppy_cream_by_ky_kai-d98z05j.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(249, 73, 'Blue Cream', 'NA', '1467008543_afghanpuppy_blue_cream_by_ky_kai-d98z04s.png', 'adult_1467008543_afghanpuppy_blue_cream_by_ky_kai-d98z04s.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(250, 73, 'Blue', 'NA', '1467008543_afghanpuppy_blue_by_ky_kai-d98z03r.png', 'adult_1467008543_afghanpuppy_blue_by_ky_kai-d98z03r.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(251, 73, 'Black and Tan', 'NA', '1467008543_afghanpuppy_black_tan_by_ky_kai-d98z02y.png', 'adult_1467008543_afghanpuppy_black_tan_by_ky_kai-d98z02y.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(252, 73, 'Black Silver', 'NA', '1467008543_afghanpuppy_black_silver_by_ky_kai-d98z023.png', 'adult_1467008543_afghanpuppy_black_silver_by_ky_kai-d98z023.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(253, 73, 'Black', 'NA', '1467008543_afghanpuppy_black_by_ky_kai-d98z010.png', 'adult_1467008543_afghanpuppy_black_by_ky_kai-d98z010.png', 0, 0, 0, 0, '2016-06-27 06:22:23'),
(254, 74, 'Red Tan', 'NA', '1467009216_australian_cattle_dog_red_tan_pup3_by_ky_kai-d9a1dvm.png', 'adult_1467009216_australian_cattle_dog_red_tan_pup3_by_ky_kai-d9a1dvm.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(255, 74, 'Red Speckled', 'Speckled', '1467009217_australian_cattle_dog_red_speckled3_by_ky_kai-d9a1dzu.png', 'adult_1467009217_australian_cattle_dog_red_speckled3_by_ky_kai-d9a1dzu.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(256, 74, 'Red', 'NA', '1467009217_australian_cattle_dog_red_pup3_by_ky_kai-d9a1dtw.png', 'adult_1467009217_australian_cattle_dog_red_pup3_by_ky_kai-d9a1dtw.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(257, 74, 'Red Mottled', 'Mottled', '1467009217_australian_cattle_dog_red_mottled3_by_ky_kai-d9a1dxp.png', 'adult_1467009217_australian_cattle_dog_red_mottled3_by_ky_kai-d9a1dxp.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(258, 74, 'Blue Speckled', 'Speckled', '1467009217_australian_cattle_dog_blue_speckled3_by_ky_kai-d9a1dyq.png', 'adult_1467009217_australian_cattle_dog_blue_speckled3_by_ky_kai-d9a1dyq.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(259, 74, 'Blue', 'NA', '1467009217_australian_cattle_dog_blue_pup3_by_ky_kai-d9a1dr1.png', 'adult_1467009217_australian_cattle_dog_blue_pup3_by_ky_kai-d9a1dr1.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(260, 74, 'Blue Mottled', 'Mottled', '1467009217_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 'adult_1467009217_australian_cattle_dog_blue_mottled3_by_ky_kai-d9a1dro.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(261, 74, 'Blue White Tan', 'NA', '1467009217_australian_cattle_dog__blue_white_tan_pup3_by_ky_kai-d9a1dpj.png', 'adult_1467009217_australian_cattle_dog__blue_white_tan_pup3_by_ky_kai-d9a1dpj.png', 0, 0, 0, 0, '2016-06-27 06:33:37'),
(262, 75, 'Grey White', 'Piebald', '1467010214_white_gray_akita_pup_by_ky_kai-d97vmsy.png', 'adult_1467010214_white_gray_akita_pup_by_ky_kai-d97vmsy.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(263, 75, 'Black', 'NA', '1467010214_black_akita_pup_by_ky_kai-d97vml9.png', 'adult_1467010214_black_akita_pup_by_ky_kai-d97vml9.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(264, 75, 'Black ', 'Brindle', '1467010214_black_brindle_akita_pup2_by_ky_kai-d97vmlm.png', 'adult_1467010214_black_brindle_akita_pup2_by_ky_kai-d97vmlm.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(265, 75, 'Black', 'Brown under coat', '1467010214_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 'adult_1467010214_black_brown_undercoat_akita_pup2_by_ky_kai-d97vmly.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(266, 75, 'Brown', 'NA', '1467010214_brown_akita_pup_by_ky_kai-d97vmm6.png', 'adult_1467010214_brown_akita_pup_by_ky_kai-d97vmm6.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(267, 75, 'Brown ', 'Black Overlay', '1467010214_brown_black_overlay_akita_pup_by_ky_kai-d97vmmf.png', 'adult_1467010214_brown_black_overlay_akita_pup_by_ky_kai-d97vmmf.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(268, 75, 'Fawn', 'NA', '1467010214_fawn_akita_pup_by_ky_kai-d97vmnc.png', 'adult_1467010214_fawn_akita_pup_by_ky_kai-d97vmnc.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(269, 75, 'Fawn', 'Brindle', '1467010214_fawn_brindle_akita_pup2_by_ky_kai-d97vmnw.png', 'adult_1467010214_fawn_brindle_akita_pup2_by_ky_kai-d97vmnw.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(270, 75, 'Red', 'NA', '1467010214_red_akita_pup_by_ky_kai-d97vmoh.png', 'adult_1467010214_red_akita_pup_by_ky_kai-d97vmoh.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(271, 75, 'Red', 'Black Overlay', '1467010214_red_black_overlay_akita_pup2_by_ky_kai-d97vmpk.png', 'adult_1467010214_red_black_overlay_akita_pup2_by_ky_kai-d97vmpk.png', 0, 0, 0, 0, '2016-06-27 06:50:14'),
(272, 76, 'Apricot', 'NA', '1467011239_borzoi_apricot_pup_by_ky_kai-d9hrahq.png', 'adult_1467011239_borzoi_apricot_pup_by_ky_kai-d9hrahq.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(273, 76, 'Black', 'Brindle', '1467011239_borzoi_black_brindle_pup_by_ky_kai-d9hrajg.png', 'adult_1467011239_borzoi_black_brindle_pup_by_ky_kai-d9hrajg.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(274, 76, 'Black Cream', 'NA', '1467011239_borzoi_black_cream_pup_by_ky_kai-d9hramg.png', 'adult_1467011239_borzoi_black_cream_pup_by_ky_kai-d9hramg.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(275, 76, 'Black', 'NA', '1467011239_borzoi_black_pup_by_ky_kai-d9hramx.png', 'adult_1467011239_borzoi_black_pup_by_ky_kai-d9hramx.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(276, 76, 'Black Tan', 'NA', '1467011239_borzoi_black_tan_pup_by_ky_kai-d9hrao0.png', 'adult_1467011239_borzoi_black_tan_pup_by_ky_kai-d9hrao0.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(277, 76, 'Blue', 'Brindle', '1467011239_borzoi_blue_brindle_pup_by_ky_kai-d9hraok.png', 'adult_1467011239_borzoi_blue_brindle_pup_by_ky_kai-d9hraok.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(278, 76, 'Blue', 'NA', '1467011239_borzoi_borzoi_pup_by_ky_kai-d9hrarv.png', 'adult_1467011239_borzoi_borzoi_pup_by_ky_kai-d9hrarv.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(279, 76, 'Blue Cream', 'NA', '1467011239_borzoi_blue_cream_pup2_by_ky_kai-d9hratf.png', 'adult_1467011239_borzoi_blue_cream_pup2_by_ky_kai-d9hratf.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(280, 76, 'Brindle', 'NA', '1467011239_borzoi_brindle_pup_by_ky_kai-d9hrave.png', 'adult_1467011239_borzoi_brindle_pup_by_ky_kai-d9hrave.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(281, 76, 'Sable', 'Brindle', '1467011239_borzoi_brindle_sable_pup_by_ky_kai-d9hrawn.png', 'adult_1467011239_borzoi_brindle_sable_pup_by_ky_kai-d9hrawn.png', 0, 0, 0, 0, '2016-06-27 07:07:19'),
(282, 77, 'Black', 'NA', '1467011800_bulldog_black_pup_by_ky_kai-d976hd1.png', 'adult_1467011800_bulldog_black_pup_by_ky_kai-d976hd1.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(283, 77, 'Black Red and White', 'NA', '1467011800_bulldog_black_red_white_pup_by_ky_kai-d976he2.png', 'adult_1467011800_bulldog_black_red_white_pup_by_ky_kai-d976he2.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(284, 77, 'Black white', 'NA', '1467011800_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 'adult_1467011800_bulldog_black_white_pup_by_ky_kai-d976hf0.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(285, 77, 'Blue White', 'NA', '1467011800_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 'adult_1467011800_bulldog_blue_white_pup_by_ky_kai-d976hft.png', 0, 0, 0, 0, '2016-06-27 07:16:40');
INSERT INTO `breed_images` (`id`, `breed_id`, `color`, `marking`, `filename`, `filename_adult`, `b_locus_gene`, `d_locus_gene`, `e_locus_gene`, `s_locus_gene`, `created`) VALUES
(286, 77, 'Brindle', 'NA', '1467011800_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 'adult_1467011800_bulldog_brindle_pup_by_ky_kai-d976hhv.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(287, 77, 'Grey ', 'Brindle', '1467011800_bulldog_brindle_gray_pup_by_ky_kai-d976hhb.png', 'adult_1467011800_bulldog_brindle_gray_pup_by_ky_kai-d976hhb.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(288, 77, 'White', 'Brindle', '1467011800_bulldog_brindle_white_pup_by_ky_kai-d976hj9.png', 'adult_1467011800_bulldog_brindle_white_pup_by_ky_kai-d976hj9.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(289, 77, 'Fawn', 'NA', '1467011800_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 'adult_1467011800_bulldog_fawn_pup_by_ky_kai-d976hk0.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(290, 77, 'Fawn Whte', 'NA', '1467011800_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 'adult_1467011800_bulldog_fawn_white_pup_by_ky_kai-d976hyt.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(291, 77, 'Red White ', 'Brindle', '1467011800_bulldog_red_brindle_white_pup_by_ky_kai-d976i0d.png', 'adult_1467011800_bulldog_red_brindle_white_pup_by_ky_kai-d976i0d.png', 0, 0, 0, 0, '2016-06-27 07:16:40'),
(292, 78, 'Black', 'NA', '1467059101_dalmatian_pup_by_ky_kai-d9hlbix.png', 'adult_1467059101_dalmatian_pup_by_ky_kai-d9hlbix.png', 0, 0, 0, 0, '2016-06-27 20:25:01'),
(293, 78, 'Liver', 'NA', '1467059101_dalmatian_liver_pup_by_ky_kai-d9hlbj3.png', 'adult_1467059101_dalmatian_liver_pup_by_ky_kai-d9hlbj3.png', 0, 0, 0, 0, '2016-06-27 20:25:01'),
(294, 79, 'Black', 'NA', '1467060136_cocker_spaniel_black_pup_by_ky_kai-d9behui.png', 'adult_1467060136_cocker_spaniel_black_pup_by_ky_kai-d9behui.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(295, 79, 'Black and Tan', 'NA', '1467060136_cocker_spaniel_black_tan_pup_by_ky_kai-d9behvo.png', 'adult_1467060136_cocker_spaniel_black_tan_pup_by_ky_kai-d9behvo.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(296, 79, 'Black and White', 'NA', '1467060136_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 'adult_1467060136_cocker_spaniel_black_white_pup_by_ky_kai-d9behw4.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(297, 79, 'Black White and Tan', 'NA', '1467060136_cocker_spaniel_black_white_tan_pup_by_ky_kai-d9behwv.png', 'adult_1467060136_cocker_spaniel_black_white_tan_pup_by_ky_kai-d9behwv.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(298, 79, 'Blue Roan', 'NA', '1467060136_cocker_spaniel_blue_roan_pup_by_ky_kai-d9behxm.png', 'adult_1467060136_cocker_spaniel_blue_roan_pup_by_ky_kai-d9behxm.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(299, 79, 'Blue Roan', 'Tan', '1467060136_cocker_spaniel_blue_roan_tan_pup_by_ky_kai-d9behyh.png', 'adult_1467060136_cocker_spaniel_blue_roan_tan_pup_by_ky_kai-d9behyh.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(300, 79, 'Brown and Tan', 'NA', '1467060136_cocker_spaniel_brown_tan_pup_by_ky_kai-d9bei23.png', 'adult_1467060136_cocker_spaniel_brown_tan_pup_by_ky_kai-d9bei23.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(301, 79, 'Buff', 'NA', '1467060136_cocker_spaniel_buff__by_ky_kai-d9bei5t.png', 'adult_1467060136_cocker_spaniel_buff__by_ky_kai-d9bei5t.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(302, 79, 'Sable', 'NA', '1467060136_cocker_spaniel_sable_pup_by_ky_kai-d9bejdd.png', 'adult_1467060136_cocker_spaniel_sable_pup_by_ky_kai-d9bejdd.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(303, 79, 'Golden', 'NA', '1467060136_cocker_spaniel_golden_pup_by_ky_kai-d9beja0.png', 'adult_1467060136_cocker_spaniel_golden_pup_by_ky_kai-d9beja0.png', 0, 0, 0, 0, '2016-06-27 20:42:16'),
(304, 80, 'Black White and Tan', 'NA', '1467061358_collie_black_white_tan_by_ky_kai-d9czmtn.png', 'adult_1467061358_collie_black_white_tan_by_ky_kai-d9czmtn.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(305, 80, 'Blue Merle', 'NA', '1467061358_collie_blue_merle_by_ky_kai-d9czmuj.png', 'adult_1467061358_collie_blue_merle_by_ky_kai-d9czmuj.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(306, 80, 'Sable', 'NA', '1467061358_collie_sable_by_ky_kai-d9czmw4.png', 'adult_1467061358_collie_sable_by_ky_kai-d9czmw4.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(307, 80, 'Sable Merle', 'NA', '1467061358_collie_sable_merle_by_ky_kai-d9czmxp.png', 'adult_1467061358_collie_sable_merle_by_ky_kai-d9czmxp.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(308, 80, 'White', 'NA', '1467061358_collie_white_by_ky_kai-d9czmzh.png', 'adult_1467061358_collie_white_by_ky_kai-d9czmzh.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(309, 80, 'White Merle', 'NA', '1467061358_collie_white_merle_by_ky_kai-d9czn0l.png', 'adult_1467061358_collie_white_merle_by_ky_kai-d9czn0l.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(310, 80, 'Sable Merle White', 'NA', '1467061358_sable_merle_white_by_ky_kai-d9czn14.png', 'adult_1467061358_sable_merle_white_by_ky_kai-d9czn14.png', 0, 0, 0, 0, '2016-06-27 21:02:38'),
(311, 81, 'Black', 'NA', '1467061862_greatdaneBlackpuppy.png', 'adult_1467061862_greatdaneBlackpuppy.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(312, 81, 'Blue', 'Brindle', '1467061862_great_dane_blue_brindle_pup_by_ky_kai-d9czp4r.png', 'adult_1467061862_great_dane_blue_brindle_pup_by_ky_kai-d9czp4r.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(313, 81, 'Blue', 'NA', '1467061862_great_dane_blue_pup_by_ky_kai-d9czp4x.png', 'adult_1467061862_great_dane_blue_pup_by_ky_kai-d9czp4x.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(314, 81, 'Brindle', 'NA', '1467061862_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 'adult_1467061862_great_dane_brindle_pup_by_ky_kai-d9czp5p.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(315, 81, 'Harlequin', 'NA', '1467061862_great_dane_harlequin_pup_by_ky_kai-d9czp6n.png', 'adult_1467061862_great_dane_harlequin_pup_by_ky_kai-d9czp6n.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(316, 81, 'Mantle', 'NA', '1467061862_great_dane_mantle_pup_by_ky_kai-d9czp78.png', 'adult_1467061862_great_dane_mantle_pup_by_ky_kai-d9czp78.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(317, 81, 'Merle', 'NA', '1467061862_great_dane_merle_pup_by_ky_kai-d9czp8a.png', 'adult_1467061862_great_dane_merle_pup_by_ky_kai-d9czp8a.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(318, 81, 'White', 'NA', '1467061862_great_dane_white_pup_by_ky_kai-d9czp8u.png', 'adult_1467061862_great_dane_white_pup_by_ky_kai-d9czp8u.png', 0, 0, 0, 0, '2016-06-27 21:11:02'),
(319, 82, 'Mahogany', 'NA', '1467062083_st_bernard_mahogany_white_pup_by_ky_kai-d9hlbjk.png', 'adult_1467062083_st_bernard_mahogany_white_pup_by_ky_kai-d9hlbjk.png', 0, 0, 0, 0, '2016-06-27 21:14:43'),
(320, 82, 'Dark Brown', 'NA', '1467062083_st_bernard_dark_brown_white_pup_by_ky_kai-d9hlbjp.png', 'adult_1467062083_st_bernard_dark_brown_white_pup_by_ky_kai-d9hlbjp.png', 0, 0, 0, 0, '2016-06-27 21:14:43'),
(321, 83, 'Red Wheaten', 'NA', '1467062224_ridgeback_red_wheaten_by_ky_kai-d9hlbjh.png', 'adult_1467062224_ridgeback_red_wheaten_by_ky_kai-d9hlbjh.png', 0, 0, 0, 0, '2016-06-27 21:17:04'),
(322, 83, 'Light Wheaten', 'NA', '1467062224_ridgeback_light_wheaten_by_ky_kai-d9hlbjc.png', 'adult_1467062224_ridgeback_light_wheaten_by_ky_kai-d9hlbjc.png', 0, 0, 0, 0, '2016-06-27 21:17:04'),
(323, 84, 'Brown', 'NA', '1467073749_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 'adult_1467073749_wolfdog_brown_puppy_by_ky_kai-d98z2mi.png', 0, 0, 0, 0, '2016-06-28 00:29:09'),
(324, 84, 'Dark Brown', 'NA', '1467073749_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 'adult_1467073749_wolfdog_dark_puppy_by_ky_kai-d98z2n7.png', 0, 0, 0, 0, '2016-06-28 00:29:09'),
(325, 84, 'Dark Brown and Grey', 'NA', '1467073749_wolfdog_dark2_puppy_by_ky_kai-d991p4n.png', 'adult_1467073749_wolfdog_dark2_puppy_by_ky_kai-d991p4n.png', 0, 0, 0, 0, '2016-06-28 00:29:09'),
(326, 84, 'Light Brown', 'NA', '1467073749_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 'adult_1467073749_wolfdog_soft_puppy_by_ky_kai-d98z2pq.png', 0, 0, 0, 0, '2016-06-28 00:29:09'),
(327, 84, 'Grey', 'NA', '1467073749_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 'adult_1467073749_wolfdog_gray_puppy_by_ky_kai-d98z2oh.png', 0, 0, 0, 0, '2016-06-28 00:29:09'),
(328, 85, 'Black', 'NA', '1467074248_staffordshire_black_pup2_by_ky_kai-d9a3c3w.png', 'adult_1467074248_staffordshire_black_pup2_by_ky_kai-d9a3c3w.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(329, 85, 'Blue Fawn', 'NA', '1467074248_staffordshire_blue_fawn_pup_by_ky_kai-d9a3c4r.png', 'adult_1467074248_staffordshire_blue_fawn_pup_by_ky_kai-d9a3c4r.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(330, 85, 'Blue', 'NA', '1467074248_staffordshire_blue_pup2_by_ky_kai-d9a3c6v.png', 'adult_1467074248_staffordshire_blue_pup2_by_ky_kai-d9a3c6v.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(331, 85, 'Bronze', 'NA', '1467074248_staffordshire_bronze_pup_by_ky_kai-d9a3c7f.png', 'adult_1467074248_staffordshire_bronze_pup_by_ky_kai-d9a3c7f.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(332, 85, 'Seal Brown', 'NA', '1467074248_staffordshire_brown_seal_pup_by_ky_kai-d9a3c8d.png', 'adult_1467074248_staffordshire_brown_seal_pup_by_ky_kai-d9a3c8d.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(333, 85, 'Fawn', 'NA', '1467074248_staffordshire_fawn_pup_by_ky_kai-d9a3ca8.png', 'adult_1467074248_staffordshire_fawn_pup_by_ky_kai-d9a3ca8.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(334, 85, 'Red', 'NA', '1467074248_staffordshire_red_pup2_by_ky_kai-d9a3cc9.png', 'adult_1467074248_staffordshire_red_pup2_by_ky_kai-d9a3cc9.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(335, 85, 'White', 'NA', '1467074248_staffordshire_white_pup_by_ky_kai-d9a3ccq.png', 'adult_1467074248_staffordshire_white_pup_by_ky_kai-d9a3ccq.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(336, 85, 'Liver', 'NA', '1467074248_staffordshire_liver_pup_by_ky_kai-d9a3cbj.png', 'adult_1467074248_staffordshire_liver_pup_by_ky_kai-d9a3cbj.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(337, 85, 'Red', 'Brindle', '1467074248_staffordshire_red_brindle_pup_by_ky_kai-d9a3cc1.png', 'adult_1467074248_staffordshire_red_brindle_pup_by_ky_kai-d9a3cc1.png', 0, 0, 0, 0, '2016-06-28 00:37:28'),
(338, 86, 'White', 'NA', '1467075587_whitepuppy.png', 'adult_1467075587_whitepuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(339, 86, 'Red', 'NA', '1467075588_Redpuppy.png', 'adult_1467075588_Redpuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(340, 86, 'Black ', 'Brindle', '1467075588_Blackbrindlepuppy.png', 'adult_1467075588_Blackbrindlepuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(341, 86, 'Black Tan', 'NA', '1467075588_Blackntanpuppy.png', 'adult_1467075588_Blackntanpuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(342, 86, 'Red White', 'NA', '1467075588_redwhitepuppy.png', 'adult_1467075588_redwhitepuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(343, 86, 'Fawn', 'NA', '1467075588_Fawnpuppy.png', 'adult_1467075588_Fawnpuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(344, 86, 'Brindle ', 'Smut', '1467075588_Brindlesmugpuppy.png', 'adult_1467075588_Brindlesmugpuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(345, 86, 'Black Tan and White', 'NA', '1467075588_bullterrier_black_tan_white_pup_by_ky_kai-d9ej0y4.png', 'adult_1467075588_bullterrier_black_tan_white_pup_by_ky_kai-d9ej0y4.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(346, 86, 'Brindle and White', 'NA', '1467075588_bullterrier_brindle_white_pup_by_ky_kai-d9ej1lo.png', 'adult_1467075588_bullterrier_brindle_white_pup_by_ky_kai-d9ej1lo.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(347, 86, 'Fawn White', 'Smut', '1467075588_fawnsmugwhitepuppy.png', 'adult_1467075588_fawnsmugwhitepuppy.png', 0, 0, 0, 0, '2016-06-28 00:59:48'),
(348, 87, '1', '1', '1469553651_Hydrangeas-Copy.jpg', 'adult_1469553651_Hydrangeas-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:51'),
(349, 87, '2', '2', '1469553651_Hydrangeas-Copy.jpg', 'adult_1469553651_Hydrangeas-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:51'),
(350, 87, '3', '3', '1469553651_Chrysanthemum.jpg', 'adult_1469553651_Chrysanthemum.jpg', 0, 0, 0, 0, '2016-07-26 17:20:51'),
(351, 87, '4', '4', '1469553652_Desert-Copy.jpg', 'adult_1469553652_Desert-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(352, 87, '5', '5', '1469553652_Chrysanthemum-Copy.jpg', 'adult_1469553652_Chrysanthemum-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(353, 87, '6', '6', '1469553652_Desert-Copy.jpg', 'adult_1469553652_Desert-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(354, 87, '7', '7', '1469553652_Desert-Copy.jpg', 'adult_1469553652_Desert-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(355, 87, '8', '8', '1469553652_Tulips-Copy.jpg', 'adult_1469553652_Tulips-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(356, 87, '9', '9', '1469553652_Chrysanthemum.jpg', 'adult_1469553652_Chrysanthemum.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(357, 87, '10', '10', '1469553652_Desert-Copy.jpg', 'adult_1469553652_Desert-Copy.jpg', 0, 0, 0, 0, '2016-07-26 17:20:52'),
(358, 88, '1', '1', '1469557286_1.jpg', 'adult_1469557286_1.jpg', 0, 0, 0, 0, '2016-07-26 18:21:26'),
(359, 89, '1', '1', '1469557632_1.jpg', 'adult_1469557632_1.jpg', 0, 0, 0, 0, '2016-07-26 18:27:12'),
(360, 89, '2', '2', '1469557632_2.jpg', 'adult_1469557632_2.jpg', 0, 0, 0, 0, '2016-07-26 18:27:12'),
(361, 89, '3', '3', '1469557632_3.jpg', 'adult_1469557632_3.jpg', 0, 0, 0, 0, '2016-07-26 18:27:12'),
(362, 90, '1', '1', '1469617671_1.jpg', 'adult_1469617671_1.jpg', 0, 0, 0, 0, '2016-07-27 11:07:51'),
(363, 90, '2', '2', '1469617672_2.jpg', 'adult_1469617672_2.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(364, 90, '3', '3', '1469617672_3.jpg', 'adult_1469617672_3.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(365, 90, '4', '4', '1469617672_4.jpg', 'adult_1469617672_4.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(366, 90, '5', '5', '1469617672_5.jpg', 'adult_1469617672_5.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(367, 90, '7', '7', '1469617672_6.jpg', 'adult_1469617672_6.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(368, 90, '8', '8', '1469617672_7.jpg', 'adult_1469617672_7.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(369, 90, '9', '9', '1469617672_8.jpg', 'adult_1469617672_8.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(370, 90, '9', '9', '1469617672_9.jpg', 'adult_1469617672_9.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(371, 90, '10', '10', '1469617672_10.jpg', 'adult_1469617672_10.jpg', 0, 0, 0, 0, '2016-07-27 11:07:52'),
(372, 91, '1', '1', '1469770469_1.jpg', 'adult_1469770469_1.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(373, 91, '2', '2', '1469770469_2.jpg', 'adult_1469770469_2.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(374, 91, '3', '3', '1469770469_3.jpg', 'adult_1469770469_3.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(375, 91, '4', '4', '1469770469_4.jpg', 'adult_1469770469_4.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(376, 91, '5', '5', '1469770469_5.jpg', 'adult_1469770469_5.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(377, 91, '6', '6', '1469770469_6.jpg', 'adult_1469770469_6.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(378, 91, '7', '7', '1469770469_7.jpg', 'adult_1469770469_7.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(379, 91, '8', '8', '1469770469_8.jpg', 'adult_1469770469_8.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(380, 91, '9', '9', '1469770469_9.jpg', 'adult_1469770469_9.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29'),
(381, 91, '10', '10', '1469770469_10.jpg', 'adult_1469770469_10.jpg', 0, 0, 0, 0, '2016-07-29 05:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `subject`, `message`, `created`, `modified`) VALUES
(1, 'hello', 'asdsadasdasd', '2016-03-10 15:02:43', '2016-03-10 09:32:43'),
(2, 'hello', 'asdsadasdasd', '2016-03-10 15:10:39', '2016-03-10 09:40:39'),
(3, 'hi', 'asdasda', '2016-03-10 16:21:03', '2016-03-10 10:51:03'),
(4, 'ok', 'asdasdasda', '2016-03-10 16:21:30', '2016-03-10 10:51:30'),
(5, 'okl', 'gfhgfghf', '2016-03-10 16:31:18', '2016-03-10 23:31:18'),
(6, 'Test', 'Test', '2016-03-10 16:35:19', '2016-03-10 23:35:19'),
(7, 'hi', 'hi', '2016-03-11 02:46:27', '2016-03-11 09:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `dog_skills`
--

CREATE TABLE IF NOT EXISTS `dog_skills` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `trainer_id` bigint(20) DEFAULT NULL,
  `game_breed_id` bigint(20) NOT NULL,
  `category` enum('confirmation','agility','obedience','rally') NOT NULL,
  `stacking` int(11) NOT NULL,
  `gait` int(11) NOT NULL,
  `table_exam` int(11) NOT NULL,
  `free_stacking` int(11) NOT NULL,
  `hand_stacking` int(11) NOT NULL,
  `handling` int(11) NOT NULL,
  `heal_on_lease` int(11) NOT NULL,
  `figure_eight` int(11) NOT NULL,
  `stand_for_exam` int(11) NOT NULL,
  `recall` int(11) NOT NULL,
  `long_sit` int(11) NOT NULL,
  `drop_on_recall` int(11) NOT NULL,
  `retrieve_over_high_jump` int(11) NOT NULL,
  `broad_jump` int(11) NOT NULL,
  `single_exercise` int(11) NOT NULL,
  `scene_descrimination_1` int(11) NOT NULL,
  `scene_descrimination_2` int(11) NOT NULL,
  `direct_retrieve` int(11) NOT NULL,
  `moving_stand_and_exam` int(11) NOT NULL,
  `direct_jump` int(11) NOT NULL,
  `dog_walk` int(11) NOT NULL,
  `a_frame` int(11) NOT NULL,
  `seesaw` int(11) NOT NULL,
  `pause_table` int(11) NOT NULL,
  `weave_poles` int(11) NOT NULL,
  `open_tunnel` int(11) NOT NULL,
  `closed_tunnel` int(11) NOT NULL,
  `bar_jump` int(11) NOT NULL,
  `panel_jump` int(11) NOT NULL,
  `broad_jump_agility` int(11) NOT NULL,
  `sit` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  `right_turn` int(11) NOT NULL,
  `left_turn` int(11) NOT NULL,
  `about_u_turn` int(11) NOT NULL,
  `270_right` int(11) NOT NULL,
  `270_left` int(11) NOT NULL,
  `360_right` int(11) NOT NULL,
  `360_left` int(11) NOT NULL,
  `call_front_finish_right_forward` int(11) NOT NULL,
  `call_front_finish_left_forward` int(11) NOT NULL,
  `call_front_finish_right_halt` int(11) NOT NULL,
  `call_front_finish_left_halt` int(11) NOT NULL,
  `slow_pace` int(11) NOT NULL,
  `fast_pace` int(11) NOT NULL,
  `normal_pace` int(11) NOT NULL,
  `moving_side_step_right` int(11) NOT NULL,
  `spiral_right_dog_outside` int(11) NOT NULL,
  `spiral_left_dog_inside` int(11) NOT NULL,
  `straight_figure_eight_weave` int(11) NOT NULL,
  `serpentine_weave` int(11) NOT NULL,
  `1_step_front` int(11) NOT NULL,
  `2_step_front` int(11) NOT NULL,
  `3_step_front` int(11) NOT NULL,
  `1_step_back` int(11) NOT NULL,
  `2_step_back` int(11) NOT NULL,
  `3_step_back` int(11) NOT NULL,
  `halt` int(11) NOT NULL,
  `down_and_stop` int(11) NOT NULL,
  `walk_around_dog` int(11) NOT NULL,
  `pivat_right` int(11) NOT NULL,
  `heal` int(11) NOT NULL,
  `stand` int(11) NOT NULL,
  `stand_sit` int(11) NOT NULL,
  `stand_down` int(11) NOT NULL,
  `call_rally` int(11) NOT NULL,
  `jump` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=485 ;

--
-- Dumping data for table `dog_skills`
--

INSERT INTO `dog_skills` (`id`, `trainer_id`, `game_breed_id`, `category`, `stacking`, `gait`, `table_exam`, `free_stacking`, `hand_stacking`, `handling`, `heal_on_lease`, `figure_eight`, `stand_for_exam`, `recall`, `long_sit`, `drop_on_recall`, `retrieve_over_high_jump`, `broad_jump`, `single_exercise`, `scene_descrimination_1`, `scene_descrimination_2`, `direct_retrieve`, `moving_stand_and_exam`, `direct_jump`, `dog_walk`, `a_frame`, `seesaw`, `pause_table`, `weave_poles`, `open_tunnel`, `closed_tunnel`, `bar_jump`, `panel_jump`, `broad_jump_agility`, `sit`, `down`, `right_turn`, `left_turn`, `about_u_turn`, `270_right`, `270_left`, `360_right`, `360_left`, `call_front_finish_right_forward`, `call_front_finish_left_forward`, `call_front_finish_right_halt`, `call_front_finish_left_halt`, `slow_pace`, `fast_pace`, `normal_pace`, `moving_side_step_right`, `spiral_right_dog_outside`, `spiral_left_dog_inside`, `straight_figure_eight_weave`, `serpentine_weave`, `1_step_front`, `2_step_front`, `3_step_front`, `1_step_back`, `2_step_back`, `3_step_back`, `halt`, `down_and_stop`, `walk_around_dog`, `pivat_right`, `heal`, `stand`, `stand_sit`, `stand_down`, `call_rally`, `jump`) VALUES
(1, 107, 1, 'confirmation', 19, 11, 10, 8, 2, 75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 68, 1, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 68, 1, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(4, 68, 1, 'obedience', 0, 0, 0, 0, 0, 0, 2, 1, 5, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 61, 2, 'confirmation', 17, 8, 9, 5, 7, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 61, 2, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 10, 7, 1, 5, 0, 5, 0, 5, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, NULL, 2, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 61, 2, 'obedience', 0, 0, 0, 0, 0, 0, 24, 92, 18, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, NULL, 3, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 61, 3, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 7, 2, 5, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, NULL, 3, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, NULL, 3, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 61, 4, 'confirmation', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, NULL, 4, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, NULL, 4, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, NULL, 4, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 61, 5, 'confirmation', 22, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, NULL, 5, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, NULL, 5, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, NULL, 5, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 61, 6, 'confirmation', 31, 7, 7, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, NULL, 6, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, NULL, 6, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, NULL, 6, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 61, 7, 'confirmation', 6, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 61, 7, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, NULL, 7, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, NULL, 7, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 61, 8, 'confirmation', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, NULL, 8, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, NULL, 8, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, NULL, 8, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 61, 9, 'confirmation', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, NULL, 9, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, NULL, 9, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, NULL, 9, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 61, 10, 'confirmation', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, NULL, 10, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, NULL, 10, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, NULL, 10, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 69, 11, 'confirmation', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, NULL, 11, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, NULL, 11, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, NULL, 11, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 61, 12, 'confirmation', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, NULL, 12, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, NULL, 12, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, NULL, 12, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, NULL, 13, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, NULL, 13, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, NULL, 13, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, NULL, 13, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, NULL, 14, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, NULL, 14, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, NULL, 14, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, NULL, 14, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, NULL, 15, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, NULL, 15, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, NULL, 15, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, NULL, 15, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, NULL, 16, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, NULL, 16, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, NULL, 16, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, NULL, 16, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, NULL, 17, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, NULL, 17, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, NULL, 17, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, NULL, 17, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, NULL, 18, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, NULL, 18, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, NULL, 18, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, NULL, 18, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 61, 19, 'confirmation', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, NULL, 19, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, NULL, 19, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, NULL, 19, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 61, 20, 'confirmation', 5, 8, 1, 5, 3, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, NULL, 20, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, NULL, 20, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, NULL, 20, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 61, 21, 'confirmation', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, NULL, 21, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, NULL, 21, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, NULL, 21, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 61, 22, 'confirmation', 13, 0, 3, 0, 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, NULL, 22, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, NULL, 22, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, NULL, 22, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 61, 23, 'confirmation', 30, 1, 5, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, NULL, 23, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, NULL, 23, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, NULL, 23, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 61, 24, 'confirmation', 0, 0, 0, 0, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, NULL, 24, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, NULL, 24, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, NULL, 24, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 61, 25, 'confirmation', 56, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(98, NULL, 25, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(99, NULL, 25, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100, NULL, 25, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(101, 61, 26, 'confirmation', 34, 2, 10, 0, 6, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(102, NULL, 26, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(103, NULL, 26, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, NULL, 26, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, NULL, 27, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, NULL, 27, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, NULL, 27, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, NULL, 27, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(109, NULL, 28, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(110, NULL, 28, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(111, NULL, 28, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, NULL, 28, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, NULL, 29, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(114, NULL, 29, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, NULL, 29, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(116, NULL, 29, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(117, NULL, 4, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(118, NULL, 4, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(119, NULL, 4, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(120, NULL, 4, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(121, NULL, 5, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(122, NULL, 5, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123, NULL, 5, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(124, NULL, 5, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(125, NULL, 6, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(126, NULL, 6, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(127, NULL, 6, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(128, NULL, 6, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(129, NULL, 7, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(130, NULL, 7, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(131, NULL, 7, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, NULL, 7, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(133, NULL, 8, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(134, NULL, 8, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(135, NULL, 8, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(136, NULL, 8, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(137, NULL, 9, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(138, NULL, 9, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(139, NULL, 9, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(140, NULL, 9, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(141, NULL, 10, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(142, NULL, 10, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(143, NULL, 10, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(144, NULL, 10, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(145, NULL, 11, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(146, NULL, 11, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(147, NULL, 11, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(148, NULL, 11, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(149, NULL, 14, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(150, NULL, 14, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(151, NULL, 14, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(152, NULL, 14, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, NULL, 15, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, NULL, 15, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(155, NULL, 15, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, NULL, 15, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(157, NULL, 19, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(158, NULL, 19, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(159, NULL, 19, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(160, NULL, 19, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(161, NULL, 20, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(162, NULL, 20, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(163, NULL, 20, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(164, NULL, 20, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(165, NULL, 22, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(166, NULL, 22, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(167, NULL, 22, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(168, NULL, 22, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(169, NULL, 23, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(170, NULL, 23, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(171, NULL, 23, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(172, NULL, 23, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(173, NULL, 24, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(174, NULL, 24, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(175, NULL, 24, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(176, NULL, 24, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(177, NULL, 25, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(178, NULL, 25, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(179, NULL, 25, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(180, NULL, 25, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(181, NULL, 26, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(182, NULL, 26, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(183, NULL, 26, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(184, NULL, 26, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(185, NULL, 27, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(186, NULL, 27, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(187, NULL, 27, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(188, NULL, 27, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(189, NULL, 28, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(190, NULL, 28, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(191, NULL, 28, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(192, NULL, 28, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(193, NULL, 29, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(194, NULL, 29, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(195, NULL, 29, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(196, NULL, 29, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(197, NULL, 30, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(198, NULL, 30, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(199, NULL, 30, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(200, NULL, 30, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(201, NULL, 31, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(202, NULL, 31, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(203, NULL, 31, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(204, NULL, 31, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(205, NULL, 32, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(206, NULL, 32, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(207, NULL, 32, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(208, NULL, 32, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(209, NULL, 33, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(210, NULL, 33, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(211, NULL, 33, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(212, NULL, 33, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(213, NULL, 34, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(214, NULL, 34, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `dog_skills` (`id`, `trainer_id`, `game_breed_id`, `category`, `stacking`, `gait`, `table_exam`, `free_stacking`, `hand_stacking`, `handling`, `heal_on_lease`, `figure_eight`, `stand_for_exam`, `recall`, `long_sit`, `drop_on_recall`, `retrieve_over_high_jump`, `broad_jump`, `single_exercise`, `scene_descrimination_1`, `scene_descrimination_2`, `direct_retrieve`, `moving_stand_and_exam`, `direct_jump`, `dog_walk`, `a_frame`, `seesaw`, `pause_table`, `weave_poles`, `open_tunnel`, `closed_tunnel`, `bar_jump`, `panel_jump`, `broad_jump_agility`, `sit`, `down`, `right_turn`, `left_turn`, `about_u_turn`, `270_right`, `270_left`, `360_right`, `360_left`, `call_front_finish_right_forward`, `call_front_finish_left_forward`, `call_front_finish_right_halt`, `call_front_finish_left_halt`, `slow_pace`, `fast_pace`, `normal_pace`, `moving_side_step_right`, `spiral_right_dog_outside`, `spiral_left_dog_inside`, `straight_figure_eight_weave`, `serpentine_weave`, `1_step_front`, `2_step_front`, `3_step_front`, `1_step_back`, `2_step_back`, `3_step_back`, `halt`, `down_and_stop`, `walk_around_dog`, `pivat_right`, `heal`, `stand`, `stand_sit`, `stand_down`, `call_rally`, `jump`) VALUES
(215, NULL, 34, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(216, NULL, 34, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(217, NULL, 36, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(218, NULL, 36, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(219, NULL, 36, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(220, NULL, 36, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(221, NULL, 42, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(222, NULL, 42, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(223, NULL, 42, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(224, NULL, 42, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(225, NULL, 43, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(226, NULL, 43, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(227, NULL, 43, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(228, NULL, 43, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(229, NULL, 44, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(230, NULL, 44, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(231, NULL, 44, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(232, NULL, 44, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(233, NULL, 45, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(234, NULL, 45, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(235, NULL, 45, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(236, NULL, 45, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(237, NULL, 46, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(238, NULL, 46, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(239, NULL, 46, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(240, NULL, 46, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(241, NULL, 47, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(242, NULL, 47, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(243, NULL, 47, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(244, NULL, 47, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(245, NULL, 48, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(246, NULL, 48, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(247, NULL, 48, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(248, NULL, 48, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(249, NULL, 49, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(250, NULL, 49, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(251, NULL, 49, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(252, NULL, 49, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(253, NULL, 50, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(254, NULL, 50, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(255, NULL, 50, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(256, NULL, 50, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(257, NULL, 51, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(258, NULL, 51, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(259, NULL, 51, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(260, NULL, 51, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(261, 79, 52, 'confirmation', 17, 41, 23, 16, 9, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(262, 79, 52, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(263, NULL, 52, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(264, NULL, 52, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(265, NULL, 53, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(266, NULL, 53, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(267, NULL, 53, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(268, NULL, 53, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(269, 79, 54, 'confirmation', 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(270, 79, 54, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(271, NULL, 54, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(272, NULL, 54, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(273, 79, 55, 'confirmation', 11, 4, 5, 3, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(274, NULL, 55, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(275, NULL, 55, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(276, NULL, 55, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(277, 79, 56, 'confirmation', 1, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(278, NULL, 56, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(279, NULL, 56, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(280, NULL, 56, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(281, NULL, 57, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(282, NULL, 57, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(283, NULL, 57, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(284, NULL, 57, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(285, NULL, 58, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(286, NULL, 58, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(287, NULL, 58, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(288, NULL, 58, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(289, NULL, 59, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(290, NULL, 59, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(291, NULL, 59, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(292, NULL, 59, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(293, NULL, 60, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(294, NULL, 60, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(295, NULL, 60, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(296, NULL, 60, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(297, NULL, 62, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(298, NULL, 62, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(299, NULL, 62, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(300, NULL, 62, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(301, NULL, 63, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(302, NULL, 63, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(303, NULL, 63, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(304, NULL, 63, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(305, NULL, 64, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(306, NULL, 64, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(307, NULL, 64, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(308, NULL, 64, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(309, NULL, 66, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(310, NULL, 66, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(311, NULL, 66, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(312, NULL, 66, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(313, NULL, 70, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(314, NULL, 70, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(315, NULL, 70, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(316, NULL, 70, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(317, NULL, 71, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(318, NULL, 71, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(319, NULL, 71, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(320, NULL, 71, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(321, NULL, 73, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(322, NULL, 73, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(323, NULL, 73, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(324, NULL, 73, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(325, 79, 74, 'confirmation', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(326, NULL, 74, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(327, NULL, 74, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(328, NULL, 74, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(329, NULL, 75, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(330, NULL, 75, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(331, NULL, 75, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(332, NULL, 75, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(333, 79, 76, 'confirmation', 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(334, NULL, 76, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(335, NULL, 76, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(336, NULL, 76, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(337, NULL, 77, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(338, NULL, 77, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(339, NULL, 77, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(340, NULL, 77, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(341, NULL, 78, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(342, NULL, 78, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(343, NULL, 78, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(344, NULL, 78, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(345, NULL, 79, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(346, NULL, 79, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(347, NULL, 79, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(348, NULL, 79, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(349, NULL, 80, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(350, NULL, 80, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(351, NULL, 80, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(352, NULL, 80, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(353, 79, 81, 'confirmation', 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(354, NULL, 81, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(355, NULL, 81, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(356, NULL, 81, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(357, 79, 82, 'confirmation', 3, 13, 5, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(358, 79, 82, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(359, NULL, 82, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(360, NULL, 82, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(361, 79, 83, 'confirmation', 49, 22, 17, 4, 9, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(362, NULL, 83, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(363, NULL, 83, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(364, NULL, 83, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(365, NULL, 84, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(366, NULL, 84, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(367, NULL, 84, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(368, NULL, 84, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(369, NULL, 85, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(370, NULL, 85, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(371, NULL, 85, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(372, NULL, 85, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(373, 79, 86, 'confirmation', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(374, NULL, 86, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(375, NULL, 86, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(376, NULL, 86, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(377, 79, 87, 'confirmation', 25, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(378, 79, 87, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 22, 8, 7, 7, 3, 3, 7, 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(379, 79, 87, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(380, NULL, 87, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(381, 79, 88, 'confirmation', 13, 19, 6, 10, 3, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(382, NULL, 88, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(383, 79, 88, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(384, NULL, 88, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(385, NULL, 93, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(386, NULL, 93, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(387, NULL, 93, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(388, NULL, 93, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(389, NULL, 94, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(390, NULL, 94, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(391, NULL, 94, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(392, NULL, 94, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(393, NULL, 95, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(394, NULL, 95, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(395, NULL, 95, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(396, NULL, 95, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(397, NULL, 96, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(398, NULL, 96, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(399, NULL, 96, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(400, NULL, 96, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(401, NULL, 321349, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(402, NULL, 321349, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(403, NULL, 321349, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(404, NULL, 321349, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(405, NULL, 321350, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(406, NULL, 321350, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(407, NULL, 321350, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(408, NULL, 321350, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(409, 79, 321351, 'confirmation', 8, 10, 4, 2, 4, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(410, NULL, 321351, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(411, NULL, 321351, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(412, NULL, 321351, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(413, NULL, 321352, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(414, NULL, 321352, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(415, NULL, 321352, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(416, NULL, 321352, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(417, NULL, 321353, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(418, NULL, 321353, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(419, NULL, 321353, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(420, NULL, 321353, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(421, NULL, 321354, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(422, NULL, 321354, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(423, NULL, 321354, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(424, NULL, 321354, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(425, NULL, 321355, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(426, NULL, 321355, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(427, NULL, 321355, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `dog_skills` (`id`, `trainer_id`, `game_breed_id`, `category`, `stacking`, `gait`, `table_exam`, `free_stacking`, `hand_stacking`, `handling`, `heal_on_lease`, `figure_eight`, `stand_for_exam`, `recall`, `long_sit`, `drop_on_recall`, `retrieve_over_high_jump`, `broad_jump`, `single_exercise`, `scene_descrimination_1`, `scene_descrimination_2`, `direct_retrieve`, `moving_stand_and_exam`, `direct_jump`, `dog_walk`, `a_frame`, `seesaw`, `pause_table`, `weave_poles`, `open_tunnel`, `closed_tunnel`, `bar_jump`, `panel_jump`, `broad_jump_agility`, `sit`, `down`, `right_turn`, `left_turn`, `about_u_turn`, `270_right`, `270_left`, `360_right`, `360_left`, `call_front_finish_right_forward`, `call_front_finish_left_forward`, `call_front_finish_right_halt`, `call_front_finish_left_halt`, `slow_pace`, `fast_pace`, `normal_pace`, `moving_side_step_right`, `spiral_right_dog_outside`, `spiral_left_dog_inside`, `straight_figure_eight_weave`, `serpentine_weave`, `1_step_front`, `2_step_front`, `3_step_front`, `1_step_back`, `2_step_back`, `3_step_back`, `halt`, `down_and_stop`, `walk_around_dog`, `pivat_right`, `heal`, `stand`, `stand_sit`, `stand_down`, `call_rally`, `jump`) VALUES
(428, NULL, 321355, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(429, NULL, 321383, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(430, NULL, 321383, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(431, NULL, 321383, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(432, NULL, 321383, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(433, NULL, 321384, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(434, NULL, 321384, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(435, NULL, 321384, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(436, NULL, 321384, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(437, 79, 321428, 'confirmation', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(438, NULL, 321428, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(439, NULL, 321428, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(440, NULL, 321428, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(441, NULL, 321429, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(442, NULL, 321429, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(443, NULL, 321429, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(444, NULL, 321429, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(445, 90, 321446, 'confirmation', 9, 6, 17, 4, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(446, NULL, 321446, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(447, NULL, 321446, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(448, NULL, 321446, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(449, NULL, 321447, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(450, NULL, 321447, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(451, NULL, 321447, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(452, NULL, 321447, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(453, NULL, 321448, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(454, NULL, 321448, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(455, NULL, 321448, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(456, NULL, 321448, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(457, 79, 321461, 'confirmation', 19, 10, 10, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(458, 79, 321461, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(459, NULL, 321461, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(460, NULL, 321461, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(461, NULL, 321472, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(462, NULL, 321472, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(463, NULL, 321472, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(464, NULL, 321472, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(465, NULL, 321473, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(466, NULL, 321473, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(467, NULL, 321473, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(468, NULL, 321473, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(469, NULL, 321487, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(470, NULL, 321487, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(471, NULL, 321487, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(472, NULL, 321487, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(473, NULL, 321488, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(474, NULL, 321488, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(475, NULL, 321488, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(476, NULL, 321488, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(477, NULL, 1, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(478, NULL, 1, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(479, NULL, 1, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(480, NULL, 1, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(481, NULL, 2, 'confirmation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(482, NULL, 2, 'agility', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(483, NULL, 2, 'rally', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(484, NULL, 2, 'obedience', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `emailtemplates`
--

CREATE TABLE IF NOT EXISTS `emailtemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_for` varchar(100) NOT NULL,
  `from_name` varchar(100) NOT NULL,
  `from_email` varchar(100) NOT NULL,
  `reply_to` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `emailtemplates`
--

INSERT INTO `emailtemplates` (`id`, `email_for`, `from_name`, `from_email`, `reply_to`, `subject`, `content`, `created`, `modified`) VALUES
(1, 'Registration', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Crossfit email verification', '<p>\n	Hi {USERNAME},</p>\n<p>\n	You&#39;re almost there, click on the link below to<br />\n	verify your account and get started.</p>\n<p>\n	{ACTIVATE_LINK}</p>\n<p>\n	Crossfit&nbsp;</p>\n', '0000-00-00 00:00:00', '2013-08-20 08:02:01'),
(2, 'Forgot_password', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Password Reset', '<p>\n	Dear {USERNAME},<br />\n	<br />\n	You requested for password reset for your account on {DOMAIN}. Please click the link below to reset your password.<br />\n	<br />\n	{PWD_RESET_LINK}</p>\n<p>\n	Regrards,</p>\n<p>\n	Team Best of Pedigree</p>\n', '2013-08-20 07:06:25', '2013-08-20 13:12:28'),
(3, 'Account_confirmation', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Account confirmation', '<p>\n	Hi {USERNAME},</p>\n<p>\n	Congratulations on Crossfit!</p>\n<p>\n	Crossfit&nbsp;</p>\n', '2013-08-20 08:38:41', '2013-08-20 08:38:41'),
(4, 'Social_registration', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Account Information', '<p>\r\n	Hi {USERNAME},</p>\r\n<p>\r\n	Please check your crossfit account detail below:</p>\r\n<p>\r\n	Username : &nbsp;{EMAIL}</p>\r\n<p>\r\n	Password : {PASSWORD}</p>\r\n<p>\r\n	Crossfit&nbsp;</p>\r\n', '2013-08-20 08:58:02', '2013-08-20 13:24:20'),
(12, 'contact_us', 'Crossfit.com', 'xicom.test@gmail.com', '', 'Request to contact us', '<p>\n	Hi Admin,<br />\n	<br />\n	Following are the details:<br />\n	Name: {{name}}<br />\n	Email id: {{email_id}}<br />\n	Subject: {{subject}}<br />\n	Message: {{message}}<br />\n	<br />\n	Regards,<br />\n	{{sitename}}\n</p>\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'sponsorship_inquiry', 'Crossfit.com', 'xicom.test@gmail.com', '', 'Request for sponsorship inquiry', '<p>\r\n	Hi Admin,<br />\r\n	<br />\r\n	Following are the details:<br />\r\n	Name: {{name}}<br />\r\n	Email id: {{email_id}}<br />\r\n	Sponsorship for: {{sponsorship_type}}<br />\r\n	Date of the event: {{event_date}}<br />\r\n	Message: {{message}}<br />\r\n	<br />\r\n	Regards,<br />\r\n	{{sitename}}\r\n</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Event_registration', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Registration for Event Successful', '<p>\n	Hi {USERNAME},</p>\n<p>\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your registration for {EVENT} is successful. Your login details are as follows:</p>\n<p>\n	Username: {EMAIL}</p>\n<p>\n	Password: {PASSWORD}</p>\n<p>\n	&nbsp;</p>\n<p>\n       Please proceed to the payment for participating in event. Ignore if already paid.\n</p>\n<p>\n	Thanks &amp; Regards</p>\n<p>\n	Crossfit Team</p>\n<p>\n	&nbsp;</p>\n', '2014-05-28 00:00:00', '2014-05-28 00:00:00'),
(15, 'Invite_gameon_coach', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Invitation to connect as coach', '<p>\n	Hi {USERNAME}</p>\n\n<p>\n	You have been invited to connect as coach by {AFFILIATE} on crossfit.</p>\n\n<p>Details as provided by {AFFILIATE} :</p>\n<p>Name: <span>{USERNAME}</span> <span>{IMAGE}</span></p>\n<p></p>\n{PROFILE_LINK}\n\n<p>\n	{ACCEPT_LINK} {DECLINE_LINK} </p>\n<p>\n	&nbsp;</p>\n<p>\n	Thanks</p>\n<p>\n	Crossfit Team</p>\n', '2014-06-04 17:46:01', '2014-06-04 17:46:01'),
(16, 'response_coach_invitation', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Coach invitation response', '<p>\r\n	Hi {USERNAME}</p>\r\n<p>\r\n	{COACH} has {RESPONSE} your invitation to connect as coach.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Thanks</p>\r\n<p>\r\n	Crossfit Team</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2014-06-04 18:23:51', '2014-06-04 18:23:51'),
(17, 'Invite_gameon_athlete', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Invitation to connect as athlete', '<p>\n	Hi {USERNAME}</p>\n\n<p>\n	You have been invited to connect as athlete by {AFFILIATE} on crossfit.</p>\n\n<p>Details as provided by {AFFILIATE} :</p>\n<p>Name: <span>{USERNAME}</span> <span>{IMAGE}</span></p>\n<p></p>\n{PROFILE_LINK}\n\n<p>\n	{ACCEPT_LINK} {DECLINE_LINK} </p>\n<p>\n	&nbsp;</p>\n<p>\n	Thanks</p>\n<p>\n	Crossfit Team</p>', '2014-06-09 00:00:00', '2014-06-09 00:00:00'),
(18, 'response_athlete_invitation', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Athlete invitation response', '<p>\r\n	Hi {USERNAME}</p>\r\n<p>\r\n	{ATHLETE} has {RESPONSE} your invitation to connect as athlete.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Thanks</p>\r\n<p>\r\n	Crossfit Team</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2014-06-09 00:00:00', '2014-06-09 00:00:00'),
(19, 'Registration_details', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Crossfit account created', '<p>\n	Hi {USERNAME},</p>\n<p>\n	You&#39;re crossfit account has been created<br />\n	Following are your login credentials:\n<p>\n	Email: {EMAIL}</p><br>\n<p> Password: {PASSWORD}</p>\n<p>\n	Crossfit&nbsp;</p>\n', '2014-06-09 00:00:00', '2014-06-09 00:00:00'),
(20, 'Message', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'New Message received', '<p>\n	Hi {USERNAME},</p>\n<p>\n	A new message is received from {FROM}. Following are details:</p>\n<p>\n	Subject: {SUBJECT}</p>\n<p>\n	Message: {CONTENT}</p>\n<p>\n	&nbsp;</p>\n<p>\n	Thanks</p>\n<p>\n	Crossfit</p>\n<p>\n	&nbsp;</p>\n', '2014-07-01 17:35:28', '2014-07-01 17:35:28'),
(21, 'Event_message', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'A new event message posted', '<p>\n	Hi {USERNAME},</p>\n<p>\n	A new message is posted for {EVENT}</p>\n<p>Message: <br/>{MESSAGE}\n	</p>\n\nThanks\nCrossfit\n', '2014-07-04 00:00:00', '2014-07-04 00:00:00'),
(22, 'challenge_request', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'You have got a challenge request', '<p>\n	Hi {USERNAME},</p>\n<p>\n	You''ve received a challenge from {CHALLENGER}. Following are details:</p>\n<p>\n	WOD: {WOD}</p>\n<p>\n	Date: {DATE}</p>\n<p>\n	Time: {TIME}</p>\n<p>\n	Login to accept or decline challenge.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Thanks</p>\n<p>\n	Crossfit</p>\n<p>\n	&nbsp;</p>', '2014-07-16 00:00:00', '2014-07-16 00:00:00'),
(23, 'challenge_accepted', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Your challenge was accepted by athlete', '<p>\n	Hi {CHALLENGER},</p>\n<p>\n	{USERNAME} has accepted your challenge. Following are challenge details:</p>\n<p>\n	WOD: {WOD}</p>\n<p>\n	Date: {DATE}</p>\n<p>\n	Time: {TIME}</p>\n<p>    \n      {VIDEO_LINK}</p>\n<p>\n	&nbsp;</p>\n<p>\n	Thanks</p>\n<p>\n	Crossfit</p>\n<p>\n	&nbsp;</p>', '2014-07-16 00:00:00', '2014-07-16 00:00:00'),
(24, 'challenge_declined', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Your challenge was declined by athlete', '<p>\r\n	Hi {CHALLENGER},</p>\r\n<p>\r\n	{USERNAME} has declined your challenge. Following are challenge details:</p>\r\n<p>\r\n	WOD: {WOD}</p>\r\n<p>\r\n	Date: {DATE}</p>\r\n<p>\r\n	Time: {TIME}</p>\r\n\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Thanks</p>\r\n<p>\r\n	Crossfit</p>\r\n<p>\r\n	&nbsp;</p>', '2014-07-16 00:00:00', '2014-07-16 00:00:00'),
(25, 'challenge_result_mail', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Challenge result', '<p>\r\n	Hi {USERNAME},</p>\r\n<p>\r\n	The Challenge event hosted on {DATE} {TIME} in which you have participated has come to an end.</p>\r\n<p>Your position: {POSITION}</p>\r\n\r\n<p>\r\n	Login to view further details.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Thanks</p>\r\n<p>\r\n	Crossfit</p>\r\n<p>\r\n	&nbsp;</p>', '2014-08-04 00:00:00', '2014-08-04 00:00:00'),
(26, 'Event_payment_received', 'Admin', 'admin@crossfit.com', 'admin@crossfit.com', 'Payment received for event ', '<p>\r\n	Hi {USERNAME},</p>\r\n<p>\r\n	Congratulations! you have successfully registered for {EVENT}. </p>\r\n<p>Following are details: </p>\r\n<p>Name: {USERNAME}</p>\r\n<p>Amount: {AMOUNT}</p>\r\n<p>Date: {DATE}</p>\r\n<p>Event: {EVENT}</p>\r\n<p>Event Date: {EVENT_DATE}</p>\r\n<p>Event Location: {LOCATION}</p>\r\n<br>\r\n<p>Crossfit&nbsp;</p>', '2014-08-25 00:00:00', '2014-08-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(512) NOT NULL,
  `answer` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created`, `modified`) VALUES
(1, 'Vestibulum est lacus, dignissim ut dignissim', '<p>\r\n	<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet neque nulla.</strong> Cras ut magna elit. Sed posuere, eros eget elementum venenatis, arcu leo tincidunt justo, ut blandit arcu nunc eu urna. Aliquam at faucibus urna. In hac habitasse platea dictumst. Mauris quam tellus, egestas ut laoreet nec, tristique non libero. Pellentesque habitant morbi tristique senectus <span style="background-color:#ffff00;">et netus et malesuada fames</span> ac turpis egestas. Donec turpis orci, rhoncus ut pulvinar id, elementum eu tortor. In et enim elit, quis porttitor metus. Pellentesque ut venenatis tellus.</p>\r\n', '2013-08-06 10:32:18', '2013-08-06 10:32:18'),
(2, 'Proin vehicula mauris rutrum euismod faucibus ur fermentum mieget imperdiet elit nisi eget arcu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet neque nulla. Cras ut magna elit. Sed posuere, eros eget elementum venenatis, arcu leo tincidunt justo, ut blandit arcu nunc eu urna. Aliquam at faucibus urna. In hac habitasse platea dictumst. Mauris quam tellus, egestas ut laoreet nec, tristique non libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec turpis orci, rhoncus ut pulvinar id, elementum eu tortor. In et enim elit, quis porttitor metus. Pellentesque ut venenatis tellus.', '2013-08-06 10:32:18', '2013-08-06 10:32:18'),
(3, 'Vestibulum rutrum diam et sollicitudin consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet neque nulla. Cras ut magna elit. Sed posuere, eros eget elementum venenatis, arcu leo tincidunt justo, ut blandit arcu nunc eu urna. Aliquam at faucibus urna. In hac habitasse platea dictumst. Mauris quam tellus, egestas ut laoreet nec, tristique non libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec turpis orci, rhoncus ut pulvinar id, elementum eu tortor. In et enim elit, quis porttitor metus. Pellentesque ut venenatis tellus.', '2013-08-06 10:32:18', '2013-08-06 10:32:18'),
(4, 'Donec quis erat dolor, ut ullamcorper purus maecenas feugiat mi ut elit vestibulum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet neque nulla. Cras ut magna elit. Sed posuere, eros eget elementum venenatis, arcu leo tincidunt justo, ut blandit arcu nunc eu urna. Aliquam at faucibus urna. In hac habitasse platea dictumst. Mauris quam tellus, egestas ut laoreet nec, tristique non libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec turpis orci, rhoncus ut pulvinar id, elementum eu tortor. In et enim elit, quis porttitor metus. Pellentesque ut venenatis tellus.', '2013-08-06 10:32:18', '2013-08-06 10:32:18'),
(5, 'Integer urna nunc, elementum vel faucibus quis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet neque nulla. Cras ut magna elit. Sed posuere, eros eget elementum venenatis, arcu leo tincidunt justo, ut blandit arcu nunc eu urna. Aliquam at faucibus urna. In hac habitasse platea dictumst. Mauris quam tellus, egestas ut laoreet nec, tristique non libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec turpis orci, rhoncus ut pulvinar id, elementum eu tortor. In et enim elit, quis porttitor metus. Pellentesque ut venenatis tellus.', '2013-08-06 10:32:18', '2013-08-06 10:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) DEFAULT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `total_comments` int(11) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `post_desc` text,
  `post_image` varchar(255) NOT NULL,
  `likes` bigint(20) NOT NULL,
  `dislikes` bigint(20) NOT NULL,
  `answer_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_added_date` datetime DEFAULT NULL,
  `post_updated_date` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `comment_status` enum('Enable','Close') NOT NULL DEFAULT 'Enable',
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forum_id`, `post_title`, `post_slug`, `total_comments`, `total_views`, `post_desc`, `post_image`, `likes`, `dislikes`, `answer_date`, `user_id`, `post_added_date`, `post_updated_date`, `status`, `comment_status`) VALUES
(9, 'Best Of Pedigree Live!', 'best-of-pedigree-live', 0, 0, '<p>\r\n	Yes! Were finally live..</p>\r\n<p>\r\n	The long wait is finally over. I want to thank every one for there patience while this site was under construction.This project has been in the works for almost a year. All coding and art work were done by me my daughter and a a few close friends you know who you are. &nbsp;Im looking forward to seeing it grow and change.&nbsp;</p>\r\n<p>\r\n	Please work with me. Since its a new site there bound to be a few errors or snafus along the way. Please post any errors or issuse in the appropriate forum.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Thanks for all your support and patience!!</p>\r\n<p>\r\n	Admin</p>\r\n', '', 0, 0, NULL, 38, '2016-09-20 00:41:44', NULL, '', 'Enable'),
(10, 'Best Of Pedigree Help !', 'best-of-pedigree-help-', 0, 0, '<h3 style="color:blue;">\r\n	<span style="color:#000080;"><span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Need help finding your way around or get a better understading of somthing .Youve come to the rights forum. step by step info to help make your time here easy and enjoyable.</strong></span></span></span></h3>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Basic of game play:&nbsp;</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Buy purebred origon dog train them, Show them,Breed them..The purpose of this game is to breed a perfect stat playerbred dog and compete in shows aginst other kennels all over the world. But Also dont forget money make the world go around. So completing jobs and selling dogs are a few ways to make income to support your kennel.&nbsp;</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Main kennel page:</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Familiarize&nbsp;your self with your main kennel page. &nbsp;From this page you can view your stats,XP,money,dogs,messages,bank,forums and your account.</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Shop:</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Were you can buy dogs,backgrounds,funds,credits and other items for your dogs and kennel.</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Show:</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Were you can enter your dog into a event..</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Show Results:</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Place were show results areposte once shows close. Only the Top 15 Dogs will be postedon this page.If your dog didntmakethetop 15 then his or her results will be posted on there own page under results/awards Tab.</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><span style="font-family:comic sans ms,cursive;"><strong>Vet Clinic:</strong></span></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><span style="font-family:comic sans ms,cursive;"><strong>Place were shots,checkup and health test are done. Shots and check ups are required to enter shows..</strong></span></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><font face="comic sans ms, cursive"><b>Jobs:</b></font></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><font face="comic sans ms, cursive"><b>Here you can look for work,or employee some one to help train your dogs. Topost jobs Employers licence are required and last 1 game month, 2 weeks real time. You have to apply for a job and waitforemployers to approve before you canstart a job.</b></font></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><font face="comic sans ms, cursive"><b>Adoption Center:</b></font></span></h3>\r\n<p>\r\n	<span style="font-size:14px;"><font face="comic sans ms, cursive"><b>This is were you can buy and sell dogs.&nbsp;</b></font></span></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><font face="comic sans ms, cursive"><b>Forums:</b></font></span></h3>\r\n<p>\r\n	<font face="comic sans ms, cursive"><span style="font-size: 14px;"><b>Place to read up on new news,help and chat on specific topics with other users..</b></span></font></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:16px;"><font face="comic sans ms, cursive"><b>Bank:</b></font></span></h3>\r\n<p>\r\n	<font face="comic sans ms, cursive"><span style="font-size: 14px;"><b>Place that keeps track of transations you make during game play.</b></span></font></p>\r\n<p>\r\n	&nbsp;</p>\r\n', '', 0, 0, NULL, 38, '2016-09-20 01:45:25', NULL, '', 'Enable'),
(11, 'Report errors and glitches!', 'report-errors-and-glitches', 0, 0, '<h3 style="color:blue;">\r\n	<span style="font-size:18px;"><span style="font-family:comic sans ms,cursive;"><strong>I want to know about any errors or issues that appear in the game. Please post them and i will give each issue my full attention.Will post here once issue is fixed. This is just a hobby so some thing do take time to find and fix in coding so please be pateint.</strong></span></span></h3>\r\n<h3 style="color:blue;">\r\n	<span style="font-size:18px;"><span style="font-family:comic sans ms,cursive;"><strong>Thank you..</strong></span></span></h3>\r\n', '', 0, 0, NULL, 38, '2016-09-20 01:55:08', NULL, 'Active', 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE IF NOT EXISTS `forum_comments` (
  `forum_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) DEFAULT NULL,
  `comments` text,
  `user_id` int(11) DEFAULT NULL,
  `likes` bigint(20) NOT NULL,
  `dislikes` bigint(20) NOT NULL,
  `post_sent_date` datetime DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` enum('Approved','Disapproved') NOT NULL DEFAULT 'Approved',
  PRIMARY KEY (`forum_comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`forum_comment_id`, `forum_id`, `comments`, `user_id`, `likes`, `dislikes`, `post_sent_date`, `parent_id`, `status`) VALUES
(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 68, 0, 0, '2015-09-02 20:40:37', 0, 'Approved'),
(2, 4, 'Hey There!\r\nHere is my comment.', 68, 0, 2, '2015-09-02 20:45:38', 0, 'Approved'),
(3, 4, 'Hello its me', 56, 0, 2, '2015-09-03 21:29:20', 0, 'Approved'),
(4, 3, 'New', 61, 1, 0, '2015-09-04 16:20:02', 0, 'Approved'),
(5, 3, 'test', 79, 1, 0, '2016-03-17 13:09:02', 0, 'Approved'),
(6, 2, 'Test', 79, 0, 0, '2016-03-18 16:48:11', 0, 'Approved'),
(7, 4, 'test', 79, 0, 0, '2016-03-19 12:16:22', 0, 'Approved'),
(8, 8, 'How many do you have in your Kennel', 79, 0, 0, '2016-03-19 13:36:11', 0, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `forum_votes`
--

CREATE TABLE IF NOT EXISTS `forum_votes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `forum_id` bigint(20) DEFAULT NULL,
  `forum_comment_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `vote` enum('like','dislike') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `forum_votes`
--

INSERT INTO `forum_votes` (`id`, `forum_id`, `forum_comment_id`, `user_id`, `vote`) VALUES
(1, 4, NULL, 68, 'dislike'),
(2, NULL, 2, 68, 'dislike'),
(3, 4, NULL, 56, 'like'),
(4, NULL, 2, 56, 'dislike'),
(5, NULL, 3, 56, 'dislike'),
(6, 3, NULL, 61, 'like'),
(7, NULL, 3, 68, 'dislike'),
(8, 3, NULL, 86, 'like'),
(9, NULL, 4, 86, 'like'),
(10, NULL, 5, 86, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `game_breeds`
--

CREATE TABLE IF NOT EXISTS `game_breeds` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `breed_id` int(11) DEFAULT NULL,
  `breed_image_id` int(11) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `gender` enum('Dog','Bitch') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `is_in_heat` int(11) NOT NULL DEFAULT '0',
  `heat_days_left` tinyint(4) NOT NULL DEFAULT '0',
  `heat_date` date DEFAULT NULL,
  `gen` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `body` int(11) NOT NULL,
  `forequarters` int(11) NOT NULL,
  `coat` int(11) NOT NULL,
  `hindquarters` int(11) NOT NULL,
  `temperament` int(11) NOT NULL,
  `heart` tinyint(4) NOT NULL DEFAULT '0',
  `hip` tinyint(4) NOT NULL DEFAULT '0',
  `eyes` tinyint(4) NOT NULL DEFAULT '0',
  `thyroid` tinyint(4) NOT NULL DEFAULT '0',
  `confirmation` int(11) NOT NULL,
  `agility` int(11) NOT NULL,
  `obedience` int(11) NOT NULL,
  `rally` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `rest` int(11) NOT NULL,
  `is_up_for_breed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no 1=up for breeding',
  `breed_price` decimal(11,2) DEFAULT NULL,
  `for_adoption` tinyint(4) NOT NULL DEFAULT '0',
  `adoption_price` decimal(11,2) DEFAULT NULL,
  `display_date` date DEFAULT NULL,
  `is_spay_neuter` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = no 1 = yes (no longer breed)',
  `shots` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'required twice a month to enter shows',
  `groomer` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'required twice a month to enter shows',
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `level_xp` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `purchase_date` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `breed_status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `game_breeds`
--

INSERT INTO `game_breeds` (`id`, `user_id`, `name`, `breed_id`, `breed_image_id`, `color`, `cost`, `gender`, `age`, `is_in_heat`, `heat_days_left`, `heat_date`, `gen`, `head`, `body`, `forequarters`, `coat`, `hindquarters`, `temperament`, `heart`, `hip`, `eyes`, `thyroid`, `confirmation`, `agility`, `obedience`, `rally`, `energy`, `rest`, `is_up_for_breed`, `breed_price`, `for_adoption`, `adoption_price`, `display_date`, `is_spay_neuter`, `shots`, `groomer`, `level`, `level_xp`, `status`, `purchase_date`, `modified`, `breed_status`) VALUES
(1, 107, 'Wicked', 64, 214, 'Black and Rust', '1200', 'Dog', 29, 0, 0, NULL, 29, 44, 56, 13, 96, 12, 19, 88, 65, 11, 8, 100, 0, 0, 0, 7727, 0, 0, NULL, 0, NULL, NULL, 1, 1, 1, 1, 1000, 1, '2016-09-20 02:22:10', '2017-03-22 17:00:02', 0),
(2, 107, 'Order', 64, 214, 'Black and Rust', '1200', 'Bitch', 29, 1, 4, '2016-09-20', 51, 18, 22, 15, 33, 59, 19, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, NULL, 1, NULL, NULL, 0, 0, 0, 1, 0, 1, '2016-09-20 02:23:00', '2017-03-15 17:01:52', 2),
(3, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 29, 44, 56, 17, 101, 12, 19, 88, 0, 11, 18, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(4, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 54, 47, 66, 19, 101, 59, 20, 88, 68, 14, 18, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(5, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 51, 18, 60, 13, 96, 12, 19, 91, 65, 13, 8, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(6, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 56, 44, 56, 13, 96, 12, 19, 93, 72, 11, 11, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(7, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 58, 44, 22, 13, 97, 60, 19, 98, 72, 13, 16, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(8, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 60, 44, 57, 15, 96, 12, 19, 88, 65, 11, 11, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(9, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 29, 51, 58, 23, 33, 12, 19, 88, 73, 0, 18, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0),
(10, 107, NULL, 64, 214, NULL, '0', 'Dog', 15, 0, 0, NULL, 51, 44, 63, 15, 96, 61, 19, 88, 0, 18, 8, 0, 0, 0, 0, 100, 0, 0, '0.00', 0, NULL, '2017-03-20', 0, 0, 0, 1, 0, 1, '2017-03-20 00:00:00', '2017-03-20 07:00:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_breeds-bk`
--

CREATE TABLE IF NOT EXISTS `game_breeds-bk` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `breed_id` int(11) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `gender` enum('Dog','Bitch') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `is_in_heat` tinyint(4) NOT NULL DEFAULT '0',
  `purchase_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `game_breeds-bk`
--

INSERT INTO `game_breeds-bk` (`id`, `user_id`, `name`, `breed_id`, `cost`, `gender`, `age`, `is_in_heat`, `purchase_date`) VALUES
(1, 65, 'Doggie', 11, '300', 'Dog', 0, 0, '2015-07-19 09:42:19'),
(2, 66, 'Doggie', 11, '300', 'Dog', 0, 0, '2015-07-19 09:51:54'),
(3, 61, 'Bully', 11, '300', 'Dog', 0, 0, '2015-07-20 20:34:27'),
(4, 68, 'Snipper', 19, '300', 'Bitch', 0, 0, '2015-07-23 21:35:37'),
(5, 69, 'SK Black Knight', 19, '300', 'Dog', 0, 0, '2015-07-23 22:16:19'),
(6, 69, 'SK Feeling  Lily', 19, '300', 'Bitch', 0, 0, '2015-07-23 22:18:53'),
(7, 69, 'Blazen Roger', 19, '300', 'Dog', 0, 0, '2015-07-23 22:19:24'),
(8, 69, 'Gloria', 19, '300', 'Bitch', 0, 0, '2015-07-23 22:19:45'),
(9, 69, 'Bully', 19, '300', 'Bitch', 0, 0, '2015-07-23 22:20:01'),
(10, 69, 'Error', 19, '300', 'Bitch', 0, 0, '2015-07-23 22:20:26'),
(11, 69, 'cool', 19, '300', 'Dog', 0, 0, '2015-07-24 18:25:36'),
(12, 61, 'detra', 19, '300', 'Bitch', 0, 0, '2015-07-26 02:39:26'),
(13, 69, 'Droven', 19, '300', 'Dog', 0, 0, '2015-07-27 16:00:39'),
(14, 60, 'johny', 19, '300', 'Dog', 0, 0, '2015-08-03 17:47:11'),
(15, 61, 'Grizzly', 23, '300', 'Dog', 0, 0, '2015-08-06 17:30:46'),
(16, 61, 'Bronx', 22, '300', 'Dog', 0, 0, '2015-08-06 17:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `game_funds`
--

CREATE TABLE IF NOT EXISTS `game_funds` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `game_funds` varchar(50) DEFAULT NULL,
  `credits_to_buy` bigint(20) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `game_funds`
--

INSERT INTO `game_funds` (`id`, `product_id`, `game_funds`, `credits_to_buy`, `added_date`) VALUES
(1, 8, '200', 200, '2015-07-30 20:34:34'),
(2, 8, '1000.00', 1000, '2015-08-11 22:38:09'),
(3, 8, '2000', 3, '2016-09-19 22:09:51'),
(7, 8, 'test', 12, '2016-09-22 15:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `game_breed_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `training_clicks` smallint(6) NOT NULL DEFAULT '1',
  `salary` bigint(20) DEFAULT NULL,
  `time_complete` tinyint(4) NOT NULL,
  `progress` smallint(6) NOT NULL DEFAULT '0' COMMENT 'total clicks done so far',
  `accepted_date` datetime DEFAULT NULL,
  `job_start_time` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=new 1=accepted 2=in progress 3=completed',
  `amount_released` int(11) NOT NULL DEFAULT '0',
  `posted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `game_breed_id`, `title`, `categories`, `training_clicks`, `salary`, `time_complete`, `progress`, `accepted_date`, `job_start_time`, `status`, `amount_released`, `posted_date`) VALUES
(1, 107, 1, 'conformation training', 'confirmation', 1, 10, 0, 2, NULL, NULL, 3, 0, '2016-12-27 17:52:15'),
(2, 107, 1, 'Job number 1', 'conformation', 10, 12, 0, 17, NULL, NULL, 2, 0, '2017-01-14 06:52:31'),
(3, 107, 1, 'new job', 'conformation', 10, 10, 3, 1, '2017-03-01 12:25:45', '2017-03-01 12:39:11', 2, 1, '2017-03-01 12:17:28'),
(4, 107, 1, 'test', 'conformation', 25, 200, 2, 0, NULL, NULL, 0, 0, '2017-03-15 17:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `manage_banners`
--

CREATE TABLE IF NOT EXISTS `manage_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vet_banner` varchar(250) NOT NULL,
  `shop_banner` varchar(250) NOT NULL,
  `adoption_banner` varchar(250) NOT NULL,
  `job_banner` varchar(250) NOT NULL,
  `show_banner` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manage_banners`
--

INSERT INTO `manage_banners` (`id`, `vet_banner`, `shop_banner`, `adoption_banner`, `job_banner`, `show_banner`, `created`) VALUES
(1, '8d1a401c71930a3f25ed38474a244ab6.jpg', '715061c57b810d81cbc2feb83d812d61.jpg', '03500dbaff0b186ac83eeac2ff194669.jpg', 'b9f0a30ad680b4c1c4a6872ea4ead448.jpg', 'a5b4b5843caa3638ac892dc202542943.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `content`, `created`, `modified`) VALUES
(22, 'Welcome to Best of Pedigree!', '2016-09-23 22:49:41', '2016-09-24 05:49:41'),
(23, 'hi\n', '2017-03-15 17:10:37', '2017-03-16 00:10:37'),
(24, 'testing..', '2017-03-15 17:10:47', '2017-03-16 00:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `messages_users`
--

CREATE TABLE IF NOT EXISTS `messages_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `messages_users`
--

INSERT INTO `messages_users` (`id`, `message_id`, `user_id`, `receiver_id`, `view`) VALUES
(20, 22, 107, 0, 0),
(21, 23, 107, 0, 0),
(22, 24, 107, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `filename`, `status`, `created`, `modified`) VALUES
(10, 'test -2', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</span></p>\r\n<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</span></span></p>\r\n', '91b0203f875b760a1941bfcde655c0fd.jpg', 1, '2015-06-13 18:43:27', '2015-06-13 18:43:27'),
(11, 'new', '<p>\r\n	test</p>\r\n', '7812978eb6a9eec2e0236c17028fab1a.jpg', 1, '2015-06-13 19:11:19', '2015-06-13 19:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `slug`, `created`, `modified`) VALUES
(2, 'Terms & Conditions', '<p>\r\n	This is the dummy content for the static pages.</p>\r\n', 'terms-conditions', '2013-08-20 05:59:56', '2013-08-20 11:07:04'),
(7, 'Privacy', '<p>\r\n	Test Content</p>\r\n', 'privacy', '2013-08-21 04:38:51', '2013-08-21 04:38:51'),
(9, 'Rules and Policies', '<p>\r\n	Test content</p>\r\n', 'rules_policy', '2013-08-21 06:06:37', '2013-08-21 06:06:37'),
(10, 'Store', '<p>\r\n	Test content</p>\r\n', 'store', '2013-08-21 06:06:59', '2013-08-21 06:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `payout_logs`
--

CREATE TABLE IF NOT EXISTS `payout_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `show_id` int(11) NOT NULL,
  `show_entry_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1493 ;

--
-- Dumping data for table `payout_logs`
--

INSERT INTO `payout_logs` (`id`, `show_id`, `show_entry_id`, `points`, `amount`, `created`) VALUES
(1, 1, 1, 2, '200.00', '2015-09-10 10:47:52'),
(2, 1, 3, 1, '100.00', '2015-09-10 10:47:52'),
(3, 1, 2, 0, '0.00', '2015-09-10 10:47:52'),
(4, 1, 3, 2, '200.00', '2015-11-30 07:00:06'),
(5, 1, 2, 1, '100.00', '2015-11-30 07:00:06'),
(6, 1, 1, 0, '0.00', '2015-11-30 07:00:06'),
(7, 1, 3, 2, '200.00', '2015-12-01 07:00:07'),
(8, 1, 2, 1, '100.00', '2015-12-01 07:00:07'),
(9, 1, 1, 0, '0.00', '2015-12-01 07:00:07'),
(10, 1, 3, 2, '200.00', '2015-12-02 07:00:02'),
(11, 1, 2, 1, '100.00', '2015-12-02 07:00:02'),
(12, 1, 1, 0, '0.00', '2015-12-02 07:00:02'),
(13, 1, 3, 2, '200.00', '2015-12-03 07:00:07'),
(14, 1, 2, 1, '100.00', '2015-12-03 07:00:07'),
(15, 1, 1, 0, '0.00', '2015-12-03 07:00:07'),
(16, 1, 3, 2, '200.00', '2015-12-04 07:00:06'),
(17, 1, 2, 1, '100.00', '2015-12-04 07:00:06'),
(18, 1, 1, 0, '0.00', '2015-12-04 07:00:06'),
(19, 1, 3, 2, '200.00', '2015-12-05 07:00:07'),
(20, 1, 2, 1, '100.00', '2015-12-05 07:00:07'),
(21, 1, 1, 0, '0.00', '2015-12-05 07:00:07'),
(22, 1, 3, 2, '200.00', '2015-12-06 07:00:06'),
(23, 1, 2, 1, '100.00', '2015-12-06 07:00:06'),
(24, 1, 1, 0, '0.00', '2015-12-06 07:00:06'),
(25, 1, 3, 2, '200.00', '2015-12-07 07:00:06'),
(26, 1, 2, 1, '100.00', '2015-12-07 07:00:06'),
(27, 1, 1, 0, '0.00', '2015-12-07 07:00:06'),
(28, 1, 3, 2, '200.00', '2015-12-08 07:00:07'),
(29, 1, 2, 1, '100.00', '2015-12-08 07:00:07'),
(30, 1, 1, 0, '0.00', '2015-12-08 07:00:07'),
(31, 1, 3, 2, '200.00', '2015-12-09 07:00:07'),
(32, 1, 2, 1, '100.00', '2015-12-09 07:00:07'),
(33, 1, 1, 0, '0.00', '2015-12-09 07:00:07'),
(34, 1, 3, 2, '200.00', '2015-12-10 07:00:02'),
(35, 1, 2, 1, '100.00', '2015-12-10 07:00:02'),
(36, 1, 1, 0, '0.00', '2015-12-10 07:00:02'),
(37, 1, 3, 2, '200.00', '2015-12-11 07:00:07'),
(38, 1, 2, 1, '100.00', '2015-12-11 07:00:07'),
(39, 1, 1, 0, '0.00', '2015-12-11 07:00:07'),
(40, 1, 3, 2, '200.00', '2015-12-12 07:00:08'),
(41, 1, 2, 1, '100.00', '2015-12-12 07:00:08'),
(42, 1, 1, 0, '0.00', '2015-12-12 07:00:08'),
(43, 1, 3, 2, '200.00', '2015-12-13 07:00:06'),
(44, 1, 2, 1, '100.00', '2015-12-13 07:00:06'),
(45, 1, 1, 0, '0.00', '2015-12-13 07:00:07'),
(46, 1, 3, 2, '200.00', '2015-12-14 07:00:07'),
(47, 1, 2, 1, '100.00', '2015-12-14 07:00:07'),
(48, 1, 1, 0, '0.00', '2015-12-14 07:00:07'),
(49, 1, 3, 2, '200.00', '2015-12-15 07:00:08'),
(50, 1, 2, 1, '100.00', '2015-12-15 07:00:08'),
(51, 1, 1, 0, '0.00', '2015-12-15 07:00:08'),
(52, 1, 3, 2, '200.00', '2015-12-16 07:00:08'),
(53, 1, 2, 1, '100.00', '2015-12-16 07:00:08'),
(54, 1, 1, 0, '0.00', '2015-12-16 07:00:08'),
(55, 1, 3, 2, '200.00', '2015-12-17 07:00:07'),
(56, 1, 2, 1, '100.00', '2015-12-17 07:00:07'),
(57, 1, 1, 0, '0.00', '2015-12-17 07:00:07'),
(58, 1, 3, 2, '200.00', '2015-12-18 07:00:07'),
(59, 1, 2, 1, '100.00', '2015-12-18 07:00:07'),
(60, 1, 1, 0, '0.00', '2015-12-18 07:00:07'),
(61, 1, 3, 2, '200.00', '2015-12-19 07:00:07'),
(62, 1, 2, 1, '100.00', '2015-12-19 07:00:07'),
(63, 1, 1, 0, '0.00', '2015-12-19 07:00:07'),
(64, 1, 3, 2, '200.00', '2015-12-20 07:00:06'),
(65, 1, 2, 1, '100.00', '2015-12-20 07:00:06'),
(66, 1, 1, 0, '0.00', '2015-12-20 07:00:06'),
(67, 1, 3, 2, '200.00', '2015-12-21 07:00:08'),
(68, 1, 2, 1, '100.00', '2015-12-21 07:00:08'),
(69, 1, 1, 0, '0.00', '2015-12-21 07:00:08'),
(70, 1, 3, 2, '200.00', '2015-12-22 07:00:07'),
(71, 1, 2, 1, '100.00', '2015-12-22 07:00:07'),
(72, 1, 1, 0, '0.00', '2015-12-22 07:00:07'),
(73, 1, 3, 2, '200.00', '2015-12-23 07:00:06'),
(74, 1, 2, 1, '100.00', '2015-12-23 07:00:06'),
(75, 1, 1, 0, '0.00', '2015-12-23 07:00:06'),
(76, 1, 3, 2, '200.00', '2015-12-24 07:00:07'),
(77, 1, 2, 1, '100.00', '2015-12-24 07:00:07'),
(78, 1, 1, 0, '0.00', '2015-12-24 07:00:07'),
(79, 1, 3, 2, '200.00', '2015-12-25 07:00:07'),
(80, 1, 2, 1, '100.00', '2015-12-25 07:00:07'),
(81, 1, 1, 0, '0.00', '2015-12-25 07:00:07'),
(82, 1, 3, 2, '200.00', '2015-12-26 07:00:06'),
(83, 1, 2, 1, '100.00', '2015-12-26 07:00:06'),
(84, 1, 1, 0, '0.00', '2015-12-26 07:00:06'),
(85, 1, 3, 2, '200.00', '2015-12-27 07:00:06'),
(86, 1, 2, 1, '100.00', '2015-12-27 07:00:06'),
(87, 1, 1, 0, '0.00', '2015-12-27 07:00:06'),
(88, 1, 3, 2, '200.00', '2015-12-28 07:00:08'),
(89, 1, 2, 1, '100.00', '2015-12-28 07:00:08'),
(90, 1, 1, 0, '0.00', '2015-12-28 07:00:08'),
(91, 1, 3, 2, '200.00', '2015-12-29 07:00:08'),
(92, 1, 2, 1, '100.00', '2015-12-29 07:00:08'),
(93, 1, 1, 0, '0.00', '2015-12-29 07:00:08'),
(94, 1, 3, 2, '200.00', '2015-12-30 07:00:06'),
(95, 1, 2, 1, '100.00', '2015-12-30 07:00:06'),
(96, 1, 1, 0, '0.00', '2015-12-30 07:00:06'),
(97, 1, 3, 2, '200.00', '2015-12-31 07:00:07'),
(98, 1, 2, 1, '100.00', '2015-12-31 07:00:07'),
(99, 1, 1, 0, '0.00', '2015-12-31 07:00:07'),
(100, 1, 3, 2, '200.00', '2016-01-01 07:00:04'),
(101, 1, 2, 1, '100.00', '2016-01-01 07:00:08'),
(102, 1, 1, 0, '0.00', '2016-01-01 07:00:08'),
(103, 1, 3, 2, '200.00', '2016-01-02 07:00:06'),
(104, 1, 2, 1, '100.00', '2016-01-02 07:00:06'),
(105, 1, 1, 0, '0.00', '2016-01-02 07:00:06'),
(106, 1, 3, 2, '200.00', '2016-01-03 07:00:07'),
(107, 1, 2, 1, '100.00', '2016-01-03 07:00:07'),
(108, 1, 1, 0, '0.00', '2016-01-03 07:00:07'),
(109, 1, 3, 2, '200.00', '2016-01-04 07:00:08'),
(110, 1, 2, 1, '100.00', '2016-01-04 07:00:08'),
(111, 1, 1, 0, '0.00', '2016-01-04 07:00:08'),
(112, 1, 3, 2, '200.00', '2016-01-05 07:00:08'),
(113, 1, 2, 1, '100.00', '2016-01-05 07:00:08'),
(114, 1, 1, 0, '0.00', '2016-01-05 07:00:08'),
(115, 1, 3, 2, '200.00', '2016-01-06 07:00:06'),
(116, 1, 2, 1, '100.00', '2016-01-06 07:00:06'),
(117, 1, 1, 0, '0.00', '2016-01-06 07:00:06'),
(118, 1, 3, 2, '200.00', '2016-01-07 07:00:10'),
(119, 1, 2, 1, '100.00', '2016-01-07 07:00:10'),
(120, 1, 1, 0, '0.00', '2016-01-07 07:00:10'),
(121, 1, 3, 2, '200.00', '2016-01-08 07:00:08'),
(122, 1, 2, 1, '100.00', '2016-01-08 07:00:08'),
(123, 1, 1, 0, '0.00', '2016-01-08 07:00:08'),
(124, 1, 3, 2, '200.00', '2016-01-09 07:00:07'),
(125, 1, 2, 1, '100.00', '2016-01-09 07:00:07'),
(126, 1, 1, 0, '0.00', '2016-01-09 07:00:07'),
(127, 1, 3, 2, '200.00', '2016-01-10 07:00:07'),
(128, 1, 2, 1, '100.00', '2016-01-10 07:00:07'),
(129, 1, 1, 0, '0.00', '2016-01-10 07:00:07'),
(130, 1, 3, 2, '200.00', '2016-01-11 07:00:07'),
(131, 1, 2, 1, '100.00', '2016-01-11 07:00:07'),
(132, 1, 1, 0, '0.00', '2016-01-11 07:00:07'),
(133, 1, 3, 2, '200.00', '2016-01-12 07:00:06'),
(134, 1, 2, 1, '100.00', '2016-01-12 07:00:06'),
(135, 1, 1, 0, '0.00', '2016-01-12 07:00:06'),
(136, 1, 3, 2, '200.00', '2016-01-13 07:00:03'),
(137, 1, 2, 1, '100.00', '2016-01-13 07:00:03'),
(138, 1, 1, 0, '0.00', '2016-01-13 07:00:03'),
(139, 1, 3, 2, '200.00', '2016-01-14 07:00:05'),
(140, 1, 2, 1, '100.00', '2016-01-14 07:00:05'),
(141, 1, 1, 0, '0.00', '2016-01-14 07:00:05'),
(142, 1, 3, 2, '200.00', '2016-01-15 07:00:06'),
(143, 1, 2, 1, '100.00', '2016-01-15 07:00:06'),
(144, 1, 1, 0, '0.00', '2016-01-15 07:00:06'),
(145, 1, 3, 2, '200.00', '2016-01-16 07:00:06'),
(146, 1, 2, 1, '100.00', '2016-01-16 07:00:06'),
(147, 1, 1, 0, '0.00', '2016-01-16 07:00:06'),
(148, 1, 3, 2, '200.00', '2016-01-17 07:00:06'),
(149, 1, 2, 1, '100.00', '2016-01-17 07:00:06'),
(150, 1, 1, 0, '0.00', '2016-01-17 07:00:06'),
(151, 1, 3, 2, '200.00', '2016-01-18 07:00:06'),
(152, 1, 2, 1, '100.00', '2016-01-18 07:00:06'),
(153, 1, 1, 0, '0.00', '2016-01-18 07:00:06'),
(154, 1, 3, 2, '200.00', '2016-01-19 07:00:05'),
(155, 1, 2, 1, '100.00', '2016-01-19 07:00:05'),
(156, 1, 1, 0, '0.00', '2016-01-19 07:00:05'),
(157, 1, 3, 2, '200.00', '2016-01-20 07:00:06'),
(158, 1, 2, 1, '100.00', '2016-01-20 07:00:06'),
(159, 1, 1, 0, '0.00', '2016-01-20 07:00:06'),
(160, 1, 3, 2, '200.00', '2016-01-21 07:00:02'),
(161, 1, 2, 1, '100.00', '2016-01-21 07:00:02'),
(162, 1, 1, 0, '0.00', '2016-01-21 07:00:02'),
(163, 1, 3, 2, '200.00', '2016-01-22 07:00:06'),
(164, 1, 2, 1, '100.00', '2016-01-22 07:00:06'),
(165, 1, 1, 0, '0.00', '2016-01-22 07:00:06'),
(166, 1, 3, 2, '200.00', '2016-01-23 07:00:06'),
(167, 1, 2, 1, '100.00', '2016-01-23 07:00:06'),
(168, 1, 1, 0, '0.00', '2016-01-23 07:00:06'),
(169, 1, 3, 2, '200.00', '2016-01-24 07:00:02'),
(170, 1, 2, 1, '100.00', '2016-01-24 07:00:02'),
(171, 1, 1, 0, '0.00', '2016-01-24 07:00:02'),
(172, 1, 3, 2, '200.00', '2016-01-25 07:00:02'),
(173, 1, 2, 1, '100.00', '2016-01-25 07:00:02'),
(174, 1, 1, 0, '0.00', '2016-01-25 07:00:02'),
(175, 1, 3, 2, '200.00', '2016-01-26 07:00:03'),
(176, 1, 2, 1, '100.00', '2016-01-26 07:00:03'),
(177, 1, 1, 0, '0.00', '2016-01-26 07:00:03'),
(178, 1, 3, 2, '200.00', '2016-01-27 07:00:08'),
(179, 1, 2, 1, '100.00', '2016-01-27 07:00:08'),
(180, 1, 1, 0, '0.00', '2016-01-27 07:00:08'),
(181, 1, 3, 2, '200.00', '2016-01-28 07:00:02'),
(182, 1, 2, 1, '100.00', '2016-01-28 07:00:02'),
(183, 1, 1, 0, '0.00', '2016-01-28 07:00:02'),
(184, 1, 3, 2, '200.00', '2016-01-29 07:00:06'),
(185, 1, 2, 1, '100.00', '2016-01-29 07:00:06'),
(186, 1, 1, 0, '0.00', '2016-01-29 07:00:06'),
(187, 1, 3, 2, '200.00', '2016-01-30 07:00:05'),
(188, 1, 2, 1, '100.00', '2016-01-30 07:00:05'),
(189, 1, 1, 0, '0.00', '2016-01-30 07:00:05'),
(190, 1, 3, 2, '200.00', '2016-01-31 07:00:06'),
(191, 1, 2, 1, '100.00', '2016-01-31 07:00:06'),
(192, 1, 1, 0, '0.00', '2016-01-31 07:00:06'),
(193, 1, 3, 2, '200.00', '2016-02-01 07:00:03'),
(194, 1, 2, 1, '100.00', '2016-02-01 07:00:03'),
(195, 1, 1, 0, '0.00', '2016-02-01 07:00:03'),
(196, 1, 3, 2, '200.00', '2016-02-02 07:00:04'),
(197, 1, 2, 1, '100.00', '2016-02-02 07:00:04'),
(198, 1, 1, 0, '0.00', '2016-02-02 07:00:04'),
(199, 1, 3, 2, '200.00', '2016-02-03 07:00:03'),
(200, 1, 2, 1, '100.00', '2016-02-03 07:00:03'),
(201, 1, 1, 0, '0.00', '2016-02-03 07:00:03'),
(202, 1, 3, 2, '200.00', '2016-02-04 07:00:01'),
(203, 1, 2, 1, '100.00', '2016-02-04 07:00:02'),
(204, 1, 1, 0, '0.00', '2016-02-04 07:00:02'),
(205, 1, 3, 2, '200.00', '2016-02-05 07:00:02'),
(206, 1, 2, 1, '100.00', '2016-02-05 07:00:02'),
(207, 1, 1, 0, '0.00', '2016-02-05 07:00:02'),
(208, 1, 3, 2, '200.00', '2016-02-06 07:00:02'),
(209, 1, 2, 1, '100.00', '2016-02-06 07:00:02'),
(210, 1, 1, 0, '0.00', '2016-02-06 07:00:02'),
(211, 1, 3, 2, '200.00', '2016-02-07 07:00:04'),
(212, 1, 2, 1, '100.00', '2016-02-07 07:00:04'),
(213, 1, 1, 0, '0.00', '2016-02-07 07:00:04'),
(214, 1, 3, 2, '200.00', '2016-02-08 07:00:06'),
(215, 1, 2, 1, '100.00', '2016-02-08 07:00:06'),
(216, 1, 1, 0, '0.00', '2016-02-08 07:00:06'),
(217, 1, 3, 2, '200.00', '2016-02-09 07:00:06'),
(218, 1, 2, 1, '100.00', '2016-02-09 07:00:06'),
(219, 1, 1, 0, '0.00', '2016-02-09 07:00:06'),
(220, 1, 3, 2, '200.00', '2016-02-10 07:00:02'),
(221, 1, 2, 1, '100.00', '2016-02-10 07:00:02'),
(222, 1, 1, 0, '0.00', '2016-02-10 07:00:02'),
(223, 1, 3, 2, '200.00', '2016-02-11 07:00:06'),
(224, 1, 2, 1, '100.00', '2016-02-11 07:00:06'),
(225, 1, 1, 0, '0.00', '2016-02-11 07:00:06'),
(226, 1, 3, 2, '200.00', '2016-02-12 07:00:02'),
(227, 1, 2, 1, '100.00', '2016-02-12 07:00:02'),
(228, 1, 1, 0, '0.00', '2016-02-12 07:00:02'),
(229, 1, 3, 2, '200.00', '2016-02-13 07:00:02'),
(230, 1, 2, 1, '100.00', '2016-02-13 07:00:02'),
(231, 1, 1, 0, '0.00', '2016-02-13 07:00:02'),
(232, 1, 3, 2, '200.00', '2016-02-14 07:00:07'),
(233, 1, 2, 1, '100.00', '2016-02-14 07:00:07'),
(234, 1, 1, 0, '0.00', '2016-02-14 07:00:07'),
(235, 1, 3, 2, '200.00', '2016-02-15 07:00:07'),
(236, 1, 2, 1, '100.00', '2016-02-15 07:00:07'),
(237, 1, 1, 0, '0.00', '2016-02-15 07:00:07'),
(238, 1, 3, 2, '200.00', '2016-02-16 07:00:02'),
(239, 1, 2, 1, '100.00', '2016-02-16 07:00:02'),
(240, 1, 1, 0, '0.00', '2016-02-16 07:00:02'),
(241, 1, 3, 2, '200.00', '2016-02-17 07:00:02'),
(242, 1, 2, 1, '100.00', '2016-02-17 07:00:02'),
(243, 1, 1, 0, '0.00', '2016-02-17 07:00:02'),
(244, 1, 3, 2, '200.00', '2016-02-18 07:00:02'),
(245, 1, 2, 1, '100.00', '2016-02-18 07:00:02'),
(246, 1, 1, 0, '0.00', '2016-02-18 07:00:02'),
(247, 1, 3, 2, '200.00', '2016-02-19 07:00:07'),
(248, 1, 2, 1, '100.00', '2016-02-19 07:00:07'),
(249, 1, 1, 0, '0.00', '2016-02-19 07:00:07'),
(250, 1, 3, 2, '200.00', '2016-02-20 07:00:06'),
(251, 1, 2, 1, '100.00', '2016-02-20 07:00:07'),
(252, 1, 1, 0, '0.00', '2016-02-20 07:00:07'),
(253, 1, 3, 2, '200.00', '2016-02-21 07:00:07'),
(254, 1, 2, 1, '100.00', '2016-02-21 07:00:07'),
(255, 1, 1, 0, '0.00', '2016-02-21 07:00:07'),
(256, 1, 3, 2, '200.00', '2016-02-22 07:00:02'),
(257, 1, 2, 1, '100.00', '2016-02-22 07:00:02'),
(258, 1, 1, 0, '0.00', '2016-02-22 07:00:02'),
(259, 1, 3, 2, '200.00', '2016-02-23 07:00:02'),
(260, 1, 2, 1, '100.00', '2016-02-23 07:00:02'),
(261, 1, 1, 0, '0.00', '2016-02-23 07:00:02'),
(262, 1, 3, 2, '200.00', '2016-02-24 07:00:02'),
(263, 1, 2, 1, '100.00', '2016-02-24 07:00:02'),
(264, 1, 1, 0, '0.00', '2016-02-24 07:00:02'),
(265, 1, 3, 2, '200.00', '2016-02-25 07:00:02'),
(266, 1, 2, 1, '100.00', '2016-02-25 07:00:02'),
(267, 1, 1, 0, '0.00', '2016-02-25 07:00:02'),
(268, 1, 3, 2, '200.00', '2016-02-26 07:00:06'),
(269, 1, 2, 1, '100.00', '2016-02-26 07:00:06'),
(270, 1, 1, 0, '0.00', '2016-02-26 07:00:06'),
(271, 1, 3, 2, '200.00', '2016-02-27 07:00:02'),
(272, 1, 2, 1, '100.00', '2016-02-27 07:00:02'),
(273, 1, 1, 0, '0.00', '2016-02-27 07:00:02'),
(274, 1, 3, 2, '200.00', '2016-02-28 07:00:02'),
(275, 1, 2, 1, '100.00', '2016-02-28 07:00:02'),
(276, 1, 1, 0, '0.00', '2016-02-28 07:00:02'),
(277, 1, 3, 2, '200.00', '2016-02-29 07:00:07'),
(278, 1, 2, 1, '100.00', '2016-02-29 07:00:07'),
(279, 1, 1, 0, '0.00', '2016-02-29 07:00:07'),
(280, 1, 3, 2, '200.00', '2016-03-01 07:00:02'),
(281, 1, 2, 1, '100.00', '2016-03-01 07:00:02'),
(282, 1, 1, 0, '0.00', '2016-03-01 07:00:02'),
(283, 1, 3, 2, '200.00', '2016-03-02 07:00:04'),
(284, 1, 2, 1, '100.00', '2016-03-02 07:00:05'),
(285, 1, 1, 0, '0.00', '2016-03-02 07:00:05'),
(286, 1, 3, 2, '200.00', '2016-03-03 07:00:03'),
(287, 1, 2, 1, '100.00', '2016-03-03 07:00:03'),
(288, 1, 1, 0, '0.00', '2016-03-03 07:00:03'),
(289, 1, 3, 2, '200.00', '2016-03-04 07:00:02'),
(290, 1, 2, 1, '100.00', '2016-03-04 07:00:02'),
(291, 1, 1, 0, '0.00', '2016-03-04 07:00:02'),
(292, 1, 3, 2, '200.00', '2016-03-05 07:00:02'),
(293, 1, 2, 1, '100.00', '2016-03-05 07:00:03'),
(294, 1, 1, 0, '0.00', '2016-03-05 07:00:03'),
(295, 1, 3, 2, '200.00', '2016-03-06 07:00:02'),
(296, 1, 2, 1, '100.00', '2016-03-06 07:00:02'),
(297, 1, 1, 0, '0.00', '2016-03-06 07:00:02'),
(298, 1, 3, 2, '200.00', '2016-03-07 07:00:02'),
(299, 1, 2, 1, '100.00', '2016-03-07 07:00:02'),
(300, 1, 1, 0, '0.00', '2016-03-07 07:00:02'),
(301, 1, 3, 2, '200.00', '2016-03-08 07:00:02'),
(302, 1, 2, 1, '100.00', '2016-03-08 07:00:02'),
(303, 1, 1, 0, '0.00', '2016-03-08 07:00:02'),
(304, 1, 3, 2, '200.00', '2016-03-09 07:00:03'),
(305, 1, 2, 1, '100.00', '2016-03-09 07:00:03'),
(306, 1, 1, 0, '0.00', '2016-03-09 07:00:03'),
(307, 1, 3, 2, '200.00', '2016-03-10 07:00:03'),
(308, 1, 2, 1, '100.00', '2016-03-10 07:00:03'),
(309, 1, 1, 0, '0.00', '2016-03-10 07:00:03'),
(310, 1, 3, 2, '200.00', '2016-03-11 07:00:05'),
(311, 1, 2, 1, '100.00', '2016-03-11 07:00:05'),
(312, 1, 1, 0, '0.00', '2016-03-11 07:00:06'),
(313, 1, 3, 2, '200.00', '2016-03-12 07:00:05'),
(314, 1, 2, 1, '100.00', '2016-03-12 07:00:05'),
(315, 1, 1, 0, '0.00', '2016-03-12 07:00:05'),
(316, 1, 3, 2, '200.00', '2016-03-13 07:00:03'),
(317, 1, 2, 1, '100.00', '2016-03-13 07:00:04'),
(318, 1, 1, 0, '0.00', '2016-03-13 07:00:04'),
(319, 1, 3, 2, '200.00', '2016-03-14 07:00:02'),
(320, 1, 2, 1, '100.00', '2016-03-14 07:00:02'),
(321, 1, 1, 0, '0.00', '2016-03-14 07:00:02'),
(322, 1, 3, 2, '200.00', '2016-03-15 07:00:06'),
(323, 1, 2, 1, '100.00', '2016-03-15 07:00:06'),
(324, 1, 1, 0, '0.00', '2016-03-15 07:00:06'),
(325, 1, 3, 2, '200.00', '2016-03-16 07:00:03'),
(326, 1, 2, 1, '100.00', '2016-03-16 07:00:03'),
(327, 1, 1, 0, '0.00', '2016-03-16 07:00:03'),
(328, 1, 3, 2, '200.00', '2016-03-17 07:00:03'),
(329, 1, 2, 1, '100.00', '2016-03-17 07:00:03'),
(330, 1, 1, 0, '0.00', '2016-03-17 07:00:03'),
(331, 1, 3, 2, '200.00', '2016-03-18 07:00:07'),
(332, 1, 2, 1, '100.00', '2016-03-18 07:00:07'),
(333, 1, 1, 0, '0.00', '2016-03-18 07:00:07'),
(334, 1, 3, 2, '200.00', '2016-03-19 07:00:08'),
(335, 1, 2, 1, '100.00', '2016-03-19 07:00:08'),
(336, 1, 1, 0, '0.00', '2016-03-19 07:00:08'),
(337, 1, 3, 2, '200.00', '2016-03-20 07:00:02'),
(338, 1, 2, 1, '100.00', '2016-03-20 07:00:02'),
(339, 1, 1, 0, '0.00', '2016-03-20 07:00:02'),
(340, 1, 3, 2, '200.00', '2016-03-21 07:00:08'),
(341, 1, 2, 1, '100.00', '2016-03-21 07:00:08'),
(342, 1, 1, 0, '0.00', '2016-03-21 07:00:08'),
(343, 1, 3, 2, '200.00', '2016-03-22 07:00:08'),
(344, 1, 2, 1, '100.00', '2016-03-22 07:00:08'),
(345, 1, 1, 0, '0.00', '2016-03-22 07:00:08'),
(346, 1, 3, 2, '200.00', '2016-03-23 07:00:04'),
(347, 1, 2, 1, '100.00', '2016-03-23 07:00:04'),
(348, 1, 1, 0, '0.00', '2016-03-23 07:00:04'),
(349, 1, 3, 2, '200.00', '2016-03-24 07:00:07'),
(350, 1, 2, 1, '100.00', '2016-03-24 07:00:07'),
(351, 1, 1, 0, '0.00', '2016-03-24 07:00:07'),
(352, 1, 3, 2, '200.00', '2016-03-25 07:00:07'),
(353, 1, 2, 1, '100.00', '2016-03-25 07:00:07'),
(354, 1, 1, 0, '0.00', '2016-03-25 07:00:07'),
(355, 1, 3, 2, '200.00', '2016-03-26 07:00:03'),
(356, 1, 2, 1, '100.00', '2016-03-26 07:00:03'),
(357, 1, 1, 0, '0.00', '2016-03-26 07:00:03'),
(358, 1, 3, 2, '200.00', '2016-03-27 07:00:07'),
(359, 1, 2, 1, '100.00', '2016-03-27 07:00:07'),
(360, 1, 1, 0, '0.00', '2016-03-27 07:00:07'),
(361, 1, 3, 2, '200.00', '2016-03-28 07:00:05'),
(362, 1, 2, 1, '100.00', '2016-03-28 07:00:05'),
(363, 1, 1, 0, '0.00', '2016-03-28 07:00:05'),
(364, 1, 3, 2, '200.00', '2016-03-29 07:00:05'),
(365, 1, 2, 1, '100.00', '2016-03-29 07:00:05'),
(366, 1, 1, 0, '0.00', '2016-03-29 07:00:05'),
(367, 1, 3, 2, '200.00', '2016-03-30 07:00:03'),
(368, 1, 2, 1, '100.00', '2016-03-30 07:00:03'),
(369, 1, 1, 0, '0.00', '2016-03-30 07:00:03'),
(370, 1, 3, 2, '200.00', '2016-03-31 07:00:08'),
(371, 1, 2, 1, '100.00', '2016-03-31 07:00:08'),
(372, 1, 1, 0, '0.00', '2016-03-31 07:00:08'),
(373, 1, 3, 2, '200.00', '2016-04-01 07:00:08'),
(374, 1, 2, 1, '100.00', '2016-04-01 07:00:08'),
(375, 1, 1, 0, '0.00', '2016-04-01 07:00:08'),
(376, 1, 3, 2, '200.00', '2016-04-02 07:00:03'),
(377, 1, 2, 1, '100.00', '2016-04-02 07:00:03'),
(378, 1, 1, 0, '0.00', '2016-04-02 07:00:03'),
(379, 1, 3, 2, '200.00', '2016-04-03 07:00:07'),
(380, 1, 2, 1, '100.00', '2016-04-03 07:00:07'),
(381, 1, 1, 0, '0.00', '2016-04-03 07:00:07'),
(382, 1, 3, 2, '200.00', '2016-04-04 07:00:03'),
(383, 1, 2, 1, '100.00', '2016-04-04 07:00:03'),
(384, 1, 1, 0, '0.00', '2016-04-04 07:00:03'),
(385, 1, 3, 2, '200.00', '2016-04-05 07:00:09'),
(386, 1, 2, 1, '100.00', '2016-04-05 07:00:09'),
(387, 1, 1, 0, '0.00', '2016-04-05 07:00:09'),
(388, 1, 2, 2, '200.00', '2016-04-06 07:00:02'),
(389, 1, 3, 1, '100.00', '2016-04-06 07:00:02'),
(390, 1, 1, 0, '0.00', '2016-04-06 07:00:02'),
(391, 1, 2, 2, '200.00', '2016-04-07 07:00:06'),
(392, 1, 3, 1, '100.00', '2016-04-07 07:00:06'),
(393, 1, 1, 0, '0.00', '2016-04-07 07:00:06'),
(394, 1, 2, 2, '200.00', '2016-04-08 07:00:03'),
(395, 1, 3, 1, '100.00', '2016-04-08 07:00:03'),
(396, 1, 1, 0, '0.00', '2016-04-08 07:00:03'),
(397, 1, 2, 2, '200.00', '2016-04-09 07:00:07'),
(398, 1, 3, 1, '100.00', '2016-04-09 07:00:07'),
(399, 1, 1, 0, '0.00', '2016-04-09 07:00:07'),
(400, 1, 2, 2, '200.00', '2016-04-10 07:00:02'),
(401, 1, 3, 1, '100.00', '2016-04-10 07:00:02'),
(402, 1, 1, 0, '0.00', '2016-04-10 07:00:02'),
(403, 1, 2, 2, '200.00', '2016-04-11 07:00:02'),
(404, 1, 3, 1, '100.00', '2016-04-11 07:00:02'),
(405, 1, 1, 0, '0.00', '2016-04-11 07:00:02'),
(406, 1, 2, 2, '200.00', '2016-04-12 07:00:05'),
(407, 1, 3, 1, '100.00', '2016-04-12 07:00:05'),
(408, 1, 1, 0, '0.00', '2016-04-12 07:00:05'),
(409, 1, 2, 2, '200.00', '2016-04-13 07:00:09'),
(410, 1, 3, 1, '100.00', '2016-04-13 07:00:10'),
(411, 1, 1, 0, '0.00', '2016-04-13 07:00:10'),
(412, 1, 2, 2, '200.00', '2016-04-14 07:00:04'),
(413, 1, 3, 1, '100.00', '2016-04-14 07:00:04'),
(414, 1, 1, 0, '0.00', '2016-04-14 07:00:04'),
(415, 1, 2, 2, '200.00', '2016-04-15 07:00:03'),
(416, 1, 3, 1, '100.00', '2016-04-15 07:00:03'),
(417, 1, 1, 0, '0.00', '2016-04-15 07:00:03'),
(418, 1, 2, 2, '200.00', '2016-04-16 07:00:04'),
(419, 1, 3, 1, '100.00', '2016-04-16 07:00:04'),
(420, 1, 1, 0, '0.00', '2016-04-16 07:00:04'),
(421, 1, 2, 2, '200.00', '2016-04-17 07:00:04'),
(422, 1, 3, 1, '100.00', '2016-04-17 07:00:04'),
(423, 1, 1, 0, '0.00', '2016-04-17 07:00:04'),
(424, 1, 2, 2, '200.00', '2016-04-18 07:00:08'),
(425, 1, 3, 1, '100.00', '2016-04-18 07:00:08'),
(426, 1, 1, 0, '0.00', '2016-04-18 07:00:08'),
(427, 1, 2, 2, '200.00', '2016-04-19 07:00:07'),
(428, 1, 3, 1, '100.00', '2016-04-19 07:00:07'),
(429, 1, 1, 0, '0.00', '2016-04-19 07:00:07'),
(430, 1, 2, 2, '200.00', '2016-04-20 07:00:07'),
(431, 1, 3, 1, '100.00', '2016-04-20 07:00:07'),
(432, 1, 1, 0, '0.00', '2016-04-20 07:00:07'),
(433, 1, 2, 2, '200.00', '2016-04-21 07:00:06'),
(434, 1, 3, 1, '100.00', '2016-04-21 07:00:06'),
(435, 1, 1, 0, '0.00', '2016-04-21 07:00:06'),
(436, 1, 2, 2, '200.00', '2016-04-22 07:00:08'),
(437, 1, 3, 1, '100.00', '2016-04-22 07:00:08'),
(438, 1, 1, 0, '0.00', '2016-04-22 07:00:08'),
(439, 1, 2, 2, '200.00', '2016-04-23 07:00:02'),
(440, 1, 3, 1, '100.00', '2016-04-23 07:00:02'),
(441, 1, 1, 0, '0.00', '2016-04-23 07:00:02'),
(442, 1, 2, 2, '200.00', '2016-04-24 07:00:07'),
(443, 1, 3, 1, '100.00', '2016-04-24 07:00:07'),
(444, 1, 1, 0, '0.00', '2016-04-24 07:00:07'),
(445, 3, 4, 1, '100.00', '2016-04-24 07:00:07'),
(446, 3, 5, 0, '0.00', '2016-04-24 07:00:07'),
(447, 1, 2, 2, '200.00', '2016-04-25 07:00:08'),
(448, 1, 3, 1, '100.00', '2016-04-25 07:00:09'),
(449, 1, 1, 0, '0.00', '2016-04-25 07:00:09'),
(450, 3, 4, 1, '100.00', '2016-04-25 07:00:09'),
(451, 3, 5, 0, '0.00', '2016-04-25 07:00:09'),
(452, 1, 2, 2, '200.00', '2016-04-26 07:00:07'),
(453, 1, 3, 1, '100.00', '2016-04-26 07:00:07'),
(454, 1, 1, 0, '0.00', '2016-04-26 07:00:07'),
(455, 3, 4, 1, '100.00', '2016-04-26 07:00:07'),
(456, 3, 5, 0, '0.00', '2016-04-26 07:00:07'),
(457, 1, 2, 2, '200.00', '2016-04-27 07:00:05'),
(458, 1, 3, 1, '100.00', '2016-04-27 07:00:05'),
(459, 1, 1, 0, '0.00', '2016-04-27 07:00:05'),
(460, 3, 4, 1, '100.00', '2016-04-27 07:00:05'),
(461, 3, 5, 0, '0.00', '2016-04-27 07:00:05'),
(462, 1, 2, 2, '200.00', '2016-04-28 07:00:05'),
(463, 1, 3, 1, '100.00', '2016-04-28 07:00:05'),
(464, 1, 1, 0, '0.00', '2016-04-28 07:00:05'),
(465, 3, 4, 1, '100.00', '2016-04-28 07:00:05'),
(466, 3, 5, 0, '0.00', '2016-04-28 07:00:05'),
(467, 1, 2, 2, '200.00', '2016-04-29 07:00:05'),
(468, 1, 3, 1, '100.00', '2016-04-29 07:00:05'),
(469, 1, 1, 0, '0.00', '2016-04-29 07:00:05'),
(470, 3, 4, 1, '100.00', '2016-04-29 07:00:05'),
(471, 3, 5, 0, '0.00', '2016-04-29 07:00:05'),
(472, 1, 2, 2, '200.00', '2016-04-30 07:00:09'),
(473, 1, 3, 1, '100.00', '2016-04-30 07:00:09'),
(474, 1, 1, 0, '0.00', '2016-04-30 07:00:09'),
(475, 3, 4, 1, '100.00', '2016-04-30 07:00:09'),
(476, 3, 5, 0, '0.00', '2016-04-30 07:00:09'),
(477, 1, 2, 2, '200.00', '2016-05-01 07:00:07'),
(478, 1, 3, 1, '100.00', '2016-05-01 07:00:07'),
(479, 1, 1, 0, '0.00', '2016-05-01 07:00:07'),
(480, 3, 4, 1, '100.00', '2016-05-01 07:00:07'),
(481, 3, 5, 0, '0.00', '2016-05-01 07:00:07'),
(482, 1, 2, 2, '200.00', '2016-05-02 07:00:08'),
(483, 1, 3, 1, '100.00', '2016-05-02 07:00:08'),
(484, 1, 1, 0, '0.00', '2016-05-02 07:00:08'),
(485, 3, 4, 1, '100.00', '2016-05-02 07:00:08'),
(486, 3, 5, 0, '0.00', '2016-05-02 07:00:08'),
(487, 1, 2, 2, '200.00', '2016-05-03 07:00:04'),
(488, 1, 3, 1, '100.00', '2016-05-03 07:00:04'),
(489, 1, 1, 0, '0.00', '2016-05-03 07:00:04'),
(490, 3, 4, 1, '100.00', '2016-05-03 07:00:04'),
(491, 3, 5, 0, '0.00', '2016-05-03 07:00:04'),
(492, 1, 2, 2, '200.00', '2016-05-04 07:00:02'),
(493, 1, 3, 1, '100.00', '2016-05-04 07:00:02'),
(494, 1, 1, 0, '0.00', '2016-05-04 07:00:02'),
(495, 3, 4, 1, '100.00', '2016-05-04 07:00:02'),
(496, 3, 5, 0, '0.00', '2016-05-04 07:00:02'),
(497, 1, 2, 2, '200.00', '2016-05-05 07:00:06'),
(498, 1, 3, 1, '100.00', '2016-05-05 07:00:06'),
(499, 1, 1, 0, '0.00', '2016-05-05 07:00:06'),
(500, 3, 4, 1, '100.00', '2016-05-05 07:00:06'),
(501, 3, 5, 0, '0.00', '2016-05-05 07:00:06'),
(502, 1, 2, 2, '200.00', '2016-05-06 07:00:03'),
(503, 1, 3, 1, '100.00', '2016-05-06 07:00:03'),
(504, 1, 1, 0, '0.00', '2016-05-06 07:00:03'),
(505, 3, 4, 1, '100.00', '2016-05-06 07:00:03'),
(506, 3, 5, 0, '0.00', '2016-05-06 07:00:03'),
(507, 1, 2, 2, '200.00', '2016-05-07 07:00:15'),
(508, 1, 3, 1, '100.00', '2016-05-07 07:00:15'),
(509, 1, 1, 0, '0.00', '2016-05-07 07:00:15'),
(510, 3, 4, 1, '100.00', '2016-05-07 07:00:15'),
(511, 3, 5, 0, '0.00', '2016-05-07 07:00:15'),
(512, 1, 2, 2, '200.00', '2016-05-08 07:00:05'),
(513, 1, 3, 1, '100.00', '2016-05-08 07:00:05'),
(514, 1, 1, 0, '0.00', '2016-05-08 07:00:05'),
(515, 3, 4, 1, '100.00', '2016-05-08 07:00:05'),
(516, 3, 5, 0, '0.00', '2016-05-08 07:00:05'),
(517, 1, 2, 2, '200.00', '2016-05-09 07:00:04'),
(518, 1, 3, 1, '100.00', '2016-05-09 07:00:04'),
(519, 1, 1, 0, '0.00', '2016-05-09 07:00:04'),
(520, 3, 4, 1, '100.00', '2016-05-09 07:00:04'),
(521, 3, 5, 0, '0.00', '2016-05-09 07:00:04'),
(522, 1, 2, 2, '200.00', '2016-05-10 07:00:08'),
(523, 1, 3, 1, '100.00', '2016-05-10 07:00:08'),
(524, 1, 1, 0, '0.00', '2016-05-10 07:00:08'),
(525, 3, 4, 1, '100.00', '2016-05-10 07:00:08'),
(526, 3, 5, 0, '0.00', '2016-05-10 07:00:08'),
(527, 1, 2, 2, '200.00', '2016-05-11 07:00:05'),
(528, 1, 3, 1, '100.00', '2016-05-11 07:00:05'),
(529, 1, 1, 0, '0.00', '2016-05-11 07:00:05'),
(530, 3, 4, 1, '100.00', '2016-05-11 07:00:05'),
(531, 3, 5, 0, '0.00', '2016-05-11 07:00:05'),
(532, 1, 2, 2, '200.00', '2016-05-12 07:00:05'),
(533, 1, 3, 1, '100.00', '2016-05-12 07:00:05'),
(534, 1, 1, 0, '0.00', '2016-05-12 07:00:05'),
(535, 3, 4, 1, '100.00', '2016-05-12 07:00:05'),
(536, 3, 5, 0, '0.00', '2016-05-12 07:00:05'),
(537, 1, 2, 2, '200.00', '2016-05-13 07:00:04'),
(538, 1, 3, 1, '100.00', '2016-05-13 07:00:04'),
(539, 1, 1, 0, '0.00', '2016-05-13 07:00:04'),
(540, 3, 4, 1, '100.00', '2016-05-13 07:00:05'),
(541, 3, 5, 0, '0.00', '2016-05-13 07:00:05'),
(542, 1, 2, 2, '200.00', '2016-05-14 07:00:04'),
(543, 1, 3, 1, '100.00', '2016-05-14 07:00:04'),
(544, 1, 1, 0, '0.00', '2016-05-14 07:00:04'),
(545, 3, 4, 1, '100.00', '2016-05-14 07:00:04'),
(546, 3, 5, 0, '0.00', '2016-05-14 07:00:04'),
(547, 1, 2, 2, '200.00', '2016-05-15 07:00:04'),
(548, 1, 3, 1, '100.00', '2016-05-15 07:00:04'),
(549, 1, 1, 0, '0.00', '2016-05-15 07:00:04'),
(550, 3, 4, 1, '100.00', '2016-05-15 07:00:04'),
(551, 3, 5, 0, '0.00', '2016-05-15 07:00:04'),
(552, 1, 2, 2, '200.00', '2016-05-16 07:00:04'),
(553, 1, 3, 1, '100.00', '2016-05-16 07:00:04'),
(554, 1, 1, 0, '0.00', '2016-05-16 07:00:04'),
(555, 3, 4, 1, '100.00', '2016-05-16 07:00:04'),
(556, 3, 5, 0, '0.00', '2016-05-16 07:00:04'),
(557, 1, 2, 2, '200.00', '2016-05-17 07:00:08'),
(558, 1, 3, 1, '100.00', '2016-05-17 07:00:08'),
(559, 1, 1, 0, '0.00', '2016-05-17 07:00:08'),
(560, 3, 4, 3, '300.00', '2016-05-17 07:00:09'),
(561, 3, 7, 2, '200.00', '2016-05-17 07:00:09'),
(562, 3, 6, 1, '100.00', '2016-05-17 07:00:09'),
(563, 3, 5, 0, '0.00', '2016-05-17 07:00:09'),
(564, 1, 2, 2, '200.00', '2016-05-18 07:00:04'),
(565, 1, 3, 1, '100.00', '2016-05-18 07:00:04'),
(566, 1, 1, 0, '0.00', '2016-05-18 07:00:04'),
(567, 3, 4, 3, '300.00', '2016-05-18 07:00:04'),
(568, 3, 7, 2, '200.00', '2016-05-18 07:00:04'),
(569, 3, 6, 1, '100.00', '2016-05-18 07:00:04'),
(570, 3, 5, 0, '0.00', '2016-05-18 07:00:04'),
(571, 1, 2, 2, '200.00', '2016-05-19 07:00:05'),
(572, 1, 3, 1, '100.00', '2016-05-19 07:00:05'),
(573, 1, 1, 0, '0.00', '2016-05-19 07:00:05'),
(574, 3, 4, 3, '300.00', '2016-05-19 07:00:05'),
(575, 3, 7, 2, '200.00', '2016-05-19 07:00:05'),
(576, 3, 6, 1, '100.00', '2016-05-19 07:00:05'),
(577, 3, 5, 0, '0.00', '2016-05-19 07:00:05'),
(578, 1, 2, 2, '200.00', '2016-05-20 07:00:07'),
(579, 1, 3, 1, '100.00', '2016-05-20 07:00:07'),
(580, 1, 1, 0, '0.00', '2016-05-20 07:00:07'),
(581, 3, 4, 3, '300.00', '2016-05-20 07:00:07'),
(582, 3, 7, 2, '200.00', '2016-05-20 07:00:07'),
(583, 3, 6, 1, '100.00', '2016-05-20 07:00:07'),
(584, 3, 5, 0, '0.00', '2016-05-20 07:00:07'),
(585, 1, 2, 2, '200.00', '2016-05-21 07:00:09'),
(586, 1, 3, 1, '100.00', '2016-05-21 07:00:09'),
(587, 1, 1, 0, '0.00', '2016-05-21 07:00:09'),
(588, 3, 4, 3, '300.00', '2016-05-21 07:00:09'),
(589, 3, 7, 2, '200.00', '2016-05-21 07:00:09'),
(590, 3, 6, 1, '100.00', '2016-05-21 07:00:09'),
(591, 3, 5, 0, '0.00', '2016-05-21 07:00:09'),
(592, 1, 2, 2, '200.00', '2016-05-22 07:00:08'),
(593, 1, 3, 1, '100.00', '2016-05-22 07:00:08'),
(594, 1, 1, 0, '0.00', '2016-05-22 07:00:08'),
(595, 3, 4, 3, '300.00', '2016-05-22 07:00:08'),
(596, 3, 7, 2, '200.00', '2016-05-22 07:00:08'),
(597, 3, 6, 1, '100.00', '2016-05-22 07:00:08'),
(598, 3, 5, 0, '0.00', '2016-05-22 07:00:08'),
(599, 1, 2, 2, '200.00', '2016-05-23 07:00:04'),
(600, 1, 3, 1, '100.00', '2016-05-23 07:00:04'),
(601, 1, 1, 0, '0.00', '2016-05-23 07:00:04'),
(602, 3, 4, 3, '300.00', '2016-05-23 07:00:04'),
(603, 3, 7, 2, '200.00', '2016-05-23 07:00:04'),
(604, 3, 6, 1, '100.00', '2016-05-23 07:00:04'),
(605, 3, 5, 0, '0.00', '2016-05-23 07:00:04'),
(606, 1, 2, 2, '200.00', '2016-05-24 07:00:08'),
(607, 1, 3, 1, '100.00', '2016-05-24 07:00:08'),
(608, 1, 1, 0, '0.00', '2016-05-24 07:00:08'),
(609, 3, 4, 3, '300.00', '2016-05-24 07:00:08'),
(610, 3, 7, 2, '200.00', '2016-05-24 07:00:08'),
(611, 3, 6, 1, '100.00', '2016-05-24 07:00:08'),
(612, 3, 5, 0, '0.00', '2016-05-24 07:00:08'),
(613, 1, 2, 2, '200.00', '2016-05-25 07:00:07'),
(614, 1, 3, 1, '100.00', '2016-05-25 07:00:07'),
(615, 1, 1, 0, '0.00', '2016-05-25 07:00:07'),
(616, 3, 4, 3, '300.00', '2016-05-25 07:00:07'),
(617, 3, 7, 2, '200.00', '2016-05-25 07:00:07'),
(618, 3, 6, 1, '100.00', '2016-05-25 07:00:07'),
(619, 3, 5, 0, '0.00', '2016-05-25 07:00:07'),
(620, 1, 2, 2, '200.00', '2016-05-26 07:00:02'),
(621, 1, 3, 1, '100.00', '2016-05-26 07:00:02'),
(622, 1, 1, 0, '0.00', '2016-05-26 07:00:02'),
(623, 3, 4, 3, '300.00', '2016-05-26 07:00:02'),
(624, 3, 7, 2, '200.00', '2016-05-26 07:00:02'),
(625, 3, 6, 1, '100.00', '2016-05-26 07:00:02'),
(626, 3, 5, 0, '0.00', '2016-05-26 07:00:02'),
(627, 1, 2, 2, '200.00', '2016-05-27 07:00:04'),
(628, 1, 3, 1, '100.00', '2016-05-27 07:00:05'),
(629, 1, 1, 0, '0.00', '2016-05-27 07:00:05'),
(630, 3, 4, 3, '300.00', '2016-05-27 07:00:05'),
(631, 3, 7, 2, '200.00', '2016-05-27 07:00:05'),
(632, 3, 6, 1, '100.00', '2016-05-27 07:00:05'),
(633, 3, 5, 0, '0.00', '2016-05-27 07:00:05'),
(634, 1, 2, 2, '200.00', '2016-05-28 07:00:06'),
(635, 1, 3, 1, '100.00', '2016-05-28 07:00:06'),
(636, 1, 1, 0, '0.00', '2016-05-28 07:00:06'),
(637, 3, 4, 3, '300.00', '2016-05-28 07:00:06'),
(638, 3, 7, 2, '200.00', '2016-05-28 07:00:06'),
(639, 3, 6, 1, '100.00', '2016-05-28 07:00:06'),
(640, 3, 5, 0, '0.00', '2016-05-28 07:00:06'),
(641, 1, 2, 2, '200.00', '2016-05-29 07:00:05'),
(642, 1, 3, 1, '100.00', '2016-05-29 07:00:05'),
(643, 1, 1, 0, '0.00', '2016-05-29 07:00:05'),
(644, 3, 4, 3, '300.00', '2016-05-29 07:00:05'),
(645, 3, 7, 2, '200.00', '2016-05-29 07:00:05'),
(646, 3, 6, 1, '100.00', '2016-05-29 07:00:05'),
(647, 3, 5, 0, '0.00', '2016-05-29 07:00:05'),
(648, 1, 2, 2, '200.00', '2016-05-30 07:00:05'),
(649, 1, 3, 1, '100.00', '2016-05-30 07:00:05'),
(650, 1, 1, 0, '0.00', '2016-05-30 07:00:05'),
(651, 3, 4, 3, '300.00', '2016-05-30 07:00:05'),
(652, 3, 7, 2, '200.00', '2016-05-30 07:00:05'),
(653, 3, 6, 1, '100.00', '2016-05-30 07:00:05'),
(654, 3, 5, 0, '0.00', '2016-05-30 07:00:05'),
(655, 1, 2, 2, '200.00', '2016-05-31 07:00:04'),
(656, 1, 3, 1, '100.00', '2016-05-31 07:00:04'),
(657, 1, 1, 0, '0.00', '2016-05-31 07:00:04'),
(658, 3, 8, 4, '400.00', '2016-05-31 07:00:04'),
(659, 3, 4, 3, '300.00', '2016-05-31 07:00:04'),
(660, 3, 7, 2, '200.00', '2016-05-31 07:00:04'),
(661, 3, 6, 1, '100.00', '2016-05-31 07:00:04'),
(662, 3, 5, 0, '0.00', '2016-05-31 07:00:04'),
(663, 1, 2, 2, '200.00', '2016-06-01 07:00:05'),
(664, 1, 3, 1, '100.00', '2016-06-01 07:00:05'),
(665, 1, 1, 0, '0.00', '2016-06-01 07:00:05'),
(666, 3, 8, 4, '400.00', '2016-06-01 07:00:05'),
(667, 3, 4, 3, '300.00', '2016-06-01 07:00:05'),
(668, 3, 7, 2, '200.00', '2016-06-01 07:00:05'),
(669, 3, 6, 1, '100.00', '2016-06-01 07:00:05'),
(670, 3, 5, 0, '0.00', '2016-06-01 07:00:05'),
(671, 1, 2, 2, '200.00', '2016-06-02 07:00:04'),
(672, 1, 3, 1, '100.00', '2016-06-02 07:00:04'),
(673, 1, 1, 0, '0.00', '2016-06-02 07:00:04'),
(674, 3, 8, 4, '400.00', '2016-06-02 07:00:05'),
(675, 3, 4, 3, '300.00', '2016-06-02 07:00:05'),
(676, 3, 7, 2, '200.00', '2016-06-02 07:00:05'),
(677, 3, 6, 1, '100.00', '2016-06-02 07:00:05'),
(678, 3, 5, 0, '0.00', '2016-06-02 07:00:05'),
(679, 1, 2, 2, '200.00', '2016-06-03 07:00:03'),
(680, 1, 3, 1, '100.00', '2016-06-03 07:00:03'),
(681, 1, 1, 0, '0.00', '2016-06-03 07:00:03'),
(682, 3, 8, 4, '400.00', '2016-06-03 07:00:03'),
(683, 3, 4, 3, '300.00', '2016-06-03 07:00:03'),
(684, 3, 7, 2, '200.00', '2016-06-03 07:00:03'),
(685, 3, 6, 1, '100.00', '2016-06-03 07:00:03'),
(686, 3, 5, 0, '0.00', '2016-06-03 07:00:03'),
(687, 1, 2, 2, '200.00', '2016-06-04 07:00:06'),
(688, 1, 3, 1, '100.00', '2016-06-04 07:00:06'),
(689, 1, 1, 0, '0.00', '2016-06-04 07:00:06'),
(690, 3, 8, 4, '400.00', '2016-06-04 07:00:06'),
(691, 3, 4, 3, '300.00', '2016-06-04 07:00:06'),
(692, 3, 7, 2, '200.00', '2016-06-04 07:00:06'),
(693, 3, 6, 1, '100.00', '2016-06-04 07:00:06'),
(694, 3, 5, 0, '0.00', '2016-06-04 07:00:06'),
(695, 1, 2, 2, '200.00', '2016-06-05 07:00:06'),
(696, 1, 3, 1, '100.00', '2016-06-05 07:00:06'),
(697, 1, 1, 0, '0.00', '2016-06-05 07:00:06'),
(698, 3, 8, 4, '400.00', '2016-06-05 07:00:06'),
(699, 3, 4, 3, '300.00', '2016-06-05 07:00:06'),
(700, 3, 7, 2, '200.00', '2016-06-05 07:00:06'),
(701, 3, 6, 1, '100.00', '2016-06-05 07:00:06'),
(702, 3, 5, 0, '0.00', '2016-06-05 07:00:06'),
(703, 1, 2, 2, '200.00', '2016-06-06 07:00:04'),
(704, 1, 3, 1, '100.00', '2016-06-06 07:00:04'),
(705, 1, 1, 0, '0.00', '2016-06-06 07:00:04'),
(706, 3, 8, 4, '400.00', '2016-06-06 07:00:05'),
(707, 3, 4, 3, '300.00', '2016-06-06 07:00:05'),
(708, 3, 7, 2, '200.00', '2016-06-06 07:00:05'),
(709, 3, 6, 1, '100.00', '2016-06-06 07:00:05'),
(710, 3, 5, 0, '0.00', '2016-06-06 07:00:05'),
(711, 1, 2, 2, '200.00', '2016-06-07 07:00:06'),
(712, 1, 3, 1, '100.00', '2016-06-07 07:00:06'),
(713, 1, 1, 0, '0.00', '2016-06-07 07:00:06'),
(714, 3, 8, 4, '400.00', '2016-06-07 07:00:06'),
(715, 3, 4, 3, '300.00', '2016-06-07 07:00:06'),
(716, 3, 7, 2, '200.00', '2016-06-07 07:00:06'),
(717, 3, 6, 1, '100.00', '2016-06-07 07:00:06'),
(718, 3, 5, 0, '0.00', '2016-06-07 07:00:06'),
(719, 1, 2, 2, '200.00', '2016-06-08 07:00:04'),
(720, 1, 3, 1, '100.00', '2016-06-08 07:00:04'),
(721, 1, 1, 0, '0.00', '2016-06-08 07:00:04'),
(722, 3, 8, 4, '400.00', '2016-06-08 07:00:04'),
(723, 3, 4, 3, '300.00', '2016-06-08 07:00:04'),
(724, 3, 7, 2, '200.00', '2016-06-08 07:00:04'),
(725, 3, 6, 1, '100.00', '2016-06-08 07:00:04'),
(726, 3, 5, 0, '0.00', '2016-06-08 07:00:04'),
(727, 1, 2, 2, '200.00', '2016-06-09 07:00:02'),
(728, 1, 3, 1, '100.00', '2016-06-09 07:00:02'),
(729, 1, 1, 0, '0.00', '2016-06-09 07:00:02'),
(730, 3, 8, 4, '400.00', '2016-06-09 07:00:02'),
(731, 3, 4, 3, '300.00', '2016-06-09 07:00:02'),
(732, 3, 7, 2, '200.00', '2016-06-09 07:00:02'),
(733, 3, 6, 1, '100.00', '2016-06-09 07:00:02'),
(734, 3, 5, 0, '0.00', '2016-06-09 07:00:02'),
(735, 1, 2, 2, '200.00', '2016-06-10 07:00:03'),
(736, 1, 3, 1, '100.00', '2016-06-10 07:00:03'),
(737, 1, 1, 0, '0.00', '2016-06-10 07:00:03'),
(738, 3, 8, 4, '400.00', '2016-06-10 07:00:04'),
(739, 3, 4, 3, '300.00', '2016-06-10 07:00:04'),
(740, 3, 7, 2, '200.00', '2016-06-10 07:00:04'),
(741, 3, 6, 1, '100.00', '2016-06-10 07:00:04'),
(742, 3, 5, 0, '0.00', '2016-06-10 07:00:04'),
(743, 1, 2, 2, '200.00', '2016-06-11 07:00:07'),
(744, 1, 3, 1, '100.00', '2016-06-11 07:00:08'),
(745, 1, 1, 0, '0.00', '2016-06-11 07:00:08'),
(746, 3, 8, 4, '400.00', '2016-06-11 07:00:08'),
(747, 3, 4, 3, '300.00', '2016-06-11 07:00:08'),
(748, 3, 7, 2, '200.00', '2016-06-11 07:00:08'),
(749, 3, 6, 1, '100.00', '2016-06-11 07:00:08'),
(750, 3, 5, 0, '0.00', '2016-06-11 07:00:08'),
(751, 1, 2, 2, '200.00', '2016-06-12 07:00:04'),
(752, 1, 3, 1, '100.00', '2016-06-12 07:00:04'),
(753, 1, 1, 0, '0.00', '2016-06-12 07:00:04'),
(754, 3, 8, 4, '400.00', '2016-06-12 07:00:04'),
(755, 3, 4, 3, '300.00', '2016-06-12 07:00:04'),
(756, 3, 7, 2, '200.00', '2016-06-12 07:00:04'),
(757, 3, 6, 1, '100.00', '2016-06-12 07:00:04'),
(758, 3, 5, 0, '0.00', '2016-06-12 07:00:05'),
(759, 1, 2, 2, '200.00', '2016-06-13 07:00:07'),
(760, 1, 3, 1, '100.00', '2016-06-13 07:00:07'),
(761, 1, 1, 0, '0.00', '2016-06-13 07:00:07'),
(762, 3, 8, 4, '400.00', '2016-06-13 07:00:07'),
(763, 3, 4, 3, '300.00', '2016-06-13 07:00:08'),
(764, 3, 7, 2, '200.00', '2016-06-13 07:00:08'),
(765, 3, 6, 1, '100.00', '2016-06-13 07:00:08'),
(766, 3, 5, 0, '0.00', '2016-06-13 07:00:08'),
(767, 1, 2, 2, '200.00', '2016-06-14 07:00:02'),
(768, 1, 3, 1, '100.00', '2016-06-14 07:00:02'),
(769, 1, 1, 0, '0.00', '2016-06-14 07:00:02'),
(770, 3, 8, 4, '400.00', '2016-06-14 07:00:03'),
(771, 3, 4, 3, '300.00', '2016-06-14 07:00:03'),
(772, 3, 7, 2, '200.00', '2016-06-14 07:00:03'),
(773, 3, 6, 1, '100.00', '2016-06-14 07:00:03'),
(774, 3, 5, 0, '0.00', '2016-06-14 07:00:03'),
(775, 1, 2, 2, '200.00', '2016-06-15 07:00:04'),
(776, 1, 3, 1, '100.00', '2016-06-15 07:00:04'),
(777, 1, 1, 0, '0.00', '2016-06-15 07:00:04'),
(778, 3, 8, 4, '400.00', '2016-06-15 07:00:04'),
(779, 3, 4, 3, '300.00', '2016-06-15 07:00:04'),
(780, 3, 7, 2, '200.00', '2016-06-15 07:00:04'),
(781, 3, 6, 1, '100.00', '2016-06-15 07:00:04'),
(782, 3, 5, 0, '0.00', '2016-06-15 07:00:04'),
(783, 1, 2, 2, '200.00', '2016-06-16 07:00:06'),
(784, 1, 3, 1, '100.00', '2016-06-16 07:00:06'),
(785, 1, 1, 0, '0.00', '2016-06-16 07:00:06'),
(786, 3, 8, 4, '400.00', '2016-06-16 07:00:06'),
(787, 3, 4, 3, '300.00', '2016-06-16 07:00:06'),
(788, 3, 7, 2, '200.00', '2016-06-16 07:00:06'),
(789, 3, 6, 1, '100.00', '2016-06-16 07:00:06'),
(790, 3, 5, 0, '0.00', '2016-06-16 07:00:06'),
(791, 1, 2, 2, '200.00', '2016-06-17 07:00:04'),
(792, 1, 3, 1, '100.00', '2016-06-17 07:00:04'),
(793, 1, 1, 0, '0.00', '2016-06-17 07:00:04'),
(794, 3, 8, 4, '400.00', '2016-06-17 07:00:04'),
(795, 3, 4, 3, '300.00', '2016-06-17 07:00:04'),
(796, 3, 7, 2, '200.00', '2016-06-17 07:00:04'),
(797, 3, 6, 1, '100.00', '2016-06-17 07:00:04'),
(798, 3, 5, 0, '0.00', '2016-06-17 07:00:04'),
(799, 1, 2, 2, '200.00', '2016-06-18 07:00:02'),
(800, 1, 3, 1, '100.00', '2016-06-18 07:00:02'),
(801, 1, 1, 0, '0.00', '2016-06-18 07:00:02'),
(802, 3, 8, 4, '400.00', '2016-06-18 07:00:02'),
(803, 3, 4, 3, '300.00', '2016-06-18 07:00:02'),
(804, 3, 7, 2, '200.00', '2016-06-18 07:00:02'),
(805, 3, 6, 1, '100.00', '2016-06-18 07:00:02'),
(806, 3, 5, 0, '0.00', '2016-06-18 07:00:02'),
(807, 1, 2, 2, '200.00', '2016-06-19 07:00:02'),
(808, 1, 3, 1, '100.00', '2016-06-19 07:00:02'),
(809, 1, 1, 0, '0.00', '2016-06-19 07:00:02'),
(810, 3, 8, 4, '400.00', '2016-06-19 07:00:02'),
(811, 3, 4, 3, '300.00', '2016-06-19 07:00:02'),
(812, 3, 7, 2, '200.00', '2016-06-19 07:00:02'),
(813, 3, 6, 1, '100.00', '2016-06-19 07:00:02'),
(814, 3, 5, 0, '0.00', '2016-06-19 07:00:02'),
(815, 1, 2, 2, '200.00', '2016-06-20 07:00:02'),
(816, 1, 3, 1, '100.00', '2016-06-20 07:00:02'),
(817, 1, 1, 0, '0.00', '2016-06-20 07:00:02'),
(818, 3, 8, 4, '400.00', '2016-06-20 07:00:02'),
(819, 3, 4, 3, '300.00', '2016-06-20 07:00:02'),
(820, 3, 7, 2, '200.00', '2016-06-20 07:00:02'),
(821, 3, 6, 1, '100.00', '2016-06-20 07:00:02'),
(822, 3, 5, 0, '0.00', '2016-06-20 07:00:02'),
(823, 1, 2, 2, '200.00', '2016-06-21 07:00:04'),
(824, 1, 3, 1, '100.00', '2016-06-21 07:00:04'),
(825, 1, 1, 0, '0.00', '2016-06-21 07:00:04'),
(826, 3, 8, 4, '400.00', '2016-06-21 07:00:04'),
(827, 3, 4, 3, '300.00', '2016-06-21 07:00:04'),
(828, 3, 7, 2, '200.00', '2016-06-21 07:00:04'),
(829, 3, 6, 1, '100.00', '2016-06-21 07:00:04'),
(830, 3, 5, 0, '0.00', '2016-06-21 07:00:04'),
(831, 1, 2, 2, '200.00', '2016-06-22 07:00:11'),
(832, 1, 3, 1, '100.00', '2016-06-22 07:00:11'),
(833, 1, 1, 0, '0.00', '2016-06-22 07:00:11'),
(834, 3, 8, 4, '400.00', '2016-06-22 07:00:11'),
(835, 3, 4, 3, '300.00', '2016-06-22 07:00:11'),
(836, 3, 7, 2, '200.00', '2016-06-22 07:00:11'),
(837, 3, 6, 1, '100.00', '2016-06-22 07:00:11'),
(838, 3, 5, 0, '0.00', '2016-06-22 07:00:11'),
(839, 1, 2, 2, '200.00', '2016-06-23 07:00:02'),
(840, 1, 3, 1, '100.00', '2016-06-23 07:00:02'),
(841, 1, 1, 0, '0.00', '2016-06-23 07:00:02'),
(842, 3, 8, 4, '400.00', '2016-06-23 07:00:02'),
(843, 3, 4, 3, '300.00', '2016-06-23 07:00:02'),
(844, 3, 7, 2, '200.00', '2016-06-23 07:00:02'),
(845, 3, 6, 1, '100.00', '2016-06-23 07:00:02'),
(846, 3, 5, 0, '0.00', '2016-06-23 07:00:02'),
(847, 1, 2, 2, '200.00', '2016-06-24 07:00:03'),
(848, 1, 3, 1, '100.00', '2016-06-24 07:00:03'),
(849, 1, 1, 0, '0.00', '2016-06-24 07:00:03'),
(850, 3, 8, 4, '400.00', '2016-06-24 07:00:03'),
(851, 3, 4, 3, '300.00', '2016-06-24 07:00:03'),
(852, 3, 7, 2, '200.00', '2016-06-24 07:00:03'),
(853, 3, 6, 1, '100.00', '2016-06-24 07:00:03'),
(854, 3, 5, 0, '0.00', '2016-06-24 07:00:03'),
(855, 1, 2, 2, '200.00', '2016-06-25 07:00:03'),
(856, 1, 3, 1, '100.00', '2016-06-25 07:00:03'),
(857, 1, 1, 0, '0.00', '2016-06-25 07:00:03'),
(858, 3, 8, 4, '400.00', '2016-06-25 07:00:03'),
(859, 3, 4, 3, '300.00', '2016-06-25 07:00:03'),
(860, 3, 7, 2, '200.00', '2016-06-25 07:00:03'),
(861, 3, 6, 1, '100.00', '2016-06-25 07:00:03'),
(862, 3, 5, 0, '0.00', '2016-06-25 07:00:03'),
(863, 1, 2, 2, '200.00', '2016-06-26 07:00:03'),
(864, 1, 3, 1, '100.00', '2016-06-26 07:00:03'),
(865, 1, 1, 0, '0.00', '2016-06-26 07:00:03'),
(866, 3, 8, 4, '400.00', '2016-06-26 07:00:03'),
(867, 3, 4, 3, '300.00', '2016-06-26 07:00:03'),
(868, 3, 7, 2, '200.00', '2016-06-26 07:00:03'),
(869, 3, 6, 1, '100.00', '2016-06-26 07:00:03'),
(870, 3, 5, 0, '0.00', '2016-06-26 07:00:03'),
(871, 1, 2, 2, '200.00', '2016-06-27 07:00:01'),
(872, 1, 3, 1, '100.00', '2016-06-27 07:00:01'),
(873, 1, 1, 0, '0.00', '2016-06-27 07:00:01'),
(874, 3, 8, 4, '400.00', '2016-06-27 07:00:01'),
(875, 3, 4, 3, '300.00', '2016-06-27 07:00:01'),
(876, 3, 7, 2, '200.00', '2016-06-27 07:00:01'),
(877, 3, 6, 1, '100.00', '2016-06-27 07:00:01'),
(878, 3, 5, 0, '0.00', '2016-06-27 07:00:01'),
(879, 1, 2, 2, '200.00', '2016-06-28 07:00:02'),
(880, 1, 3, 1, '100.00', '2016-06-28 07:00:02'),
(881, 1, 1, 0, '0.00', '2016-06-28 07:00:02'),
(882, 3, 8, 4, '400.00', '2016-06-28 07:00:02'),
(883, 3, 4, 3, '300.00', '2016-06-28 07:00:02'),
(884, 3, 7, 2, '200.00', '2016-06-28 07:00:02'),
(885, 3, 6, 1, '100.00', '2016-06-28 07:00:02'),
(886, 3, 5, 0, '0.00', '2016-06-28 07:00:02'),
(887, 1, 2, 2, '200.00', '2016-06-29 07:00:03'),
(888, 1, 3, 1, '100.00', '2016-06-29 07:00:03'),
(889, 1, 1, 0, '0.00', '2016-06-29 07:00:03'),
(890, 3, 8, 4, '400.00', '2016-06-29 07:00:03'),
(891, 3, 4, 3, '300.00', '2016-06-29 07:00:03'),
(892, 3, 7, 2, '200.00', '2016-06-29 07:00:03'),
(893, 3, 6, 1, '100.00', '2016-06-29 07:00:03'),
(894, 3, 5, 0, '0.00', '2016-06-29 07:00:03'),
(895, 1, 2, 2, '200.00', '2016-06-30 07:00:04'),
(896, 1, 3, 1, '100.00', '2016-06-30 07:00:04'),
(897, 1, 1, 0, '0.00', '2016-06-30 07:00:04'),
(898, 3, 8, 4, '400.00', '2016-06-30 07:00:04'),
(899, 3, 4, 3, '300.00', '2016-06-30 07:00:04'),
(900, 3, 7, 2, '200.00', '2016-06-30 07:00:04'),
(901, 3, 6, 1, '100.00', '2016-06-30 07:00:04'),
(902, 3, 5, 0, '0.00', '2016-06-30 07:00:04'),
(903, 1, 2, 2, '200.00', '2016-07-01 07:00:04'),
(904, 1, 3, 1, '100.00', '2016-07-01 07:00:04'),
(905, 1, 1, 0, '0.00', '2016-07-01 07:00:04'),
(906, 3, 8, 4, '400.00', '2016-07-01 07:00:04'),
(907, 3, 4, 3, '300.00', '2016-07-01 07:00:04'),
(908, 3, 7, 2, '200.00', '2016-07-01 07:00:04'),
(909, 3, 6, 1, '100.00', '2016-07-01 07:00:04'),
(910, 3, 5, 0, '0.00', '2016-07-01 07:00:04'),
(911, 1, 2, 2, '200.00', '2016-07-02 07:00:04'),
(912, 1, 3, 1, '100.00', '2016-07-02 07:00:04'),
(913, 1, 1, 0, '0.00', '2016-07-02 07:00:04'),
(914, 3, 8, 4, '400.00', '2016-07-02 07:00:05'),
(915, 3, 4, 3, '300.00', '2016-07-02 07:00:05'),
(916, 3, 7, 2, '200.00', '2016-07-02 07:00:05'),
(917, 3, 6, 1, '100.00', '2016-07-02 07:00:05'),
(918, 3, 5, 0, '0.00', '2016-07-02 07:00:05'),
(919, 1, 2, 2, '200.00', '2016-07-03 07:00:02'),
(920, 1, 3, 1, '100.00', '2016-07-03 07:00:02'),
(921, 1, 1, 0, '0.00', '2016-07-03 07:00:02'),
(922, 3, 8, 4, '400.00', '2016-07-03 07:00:02'),
(923, 3, 4, 3, '300.00', '2016-07-03 07:00:03'),
(924, 3, 7, 2, '200.00', '2016-07-03 07:00:03'),
(925, 3, 6, 1, '100.00', '2016-07-03 07:00:03'),
(926, 3, 5, 0, '0.00', '2016-07-03 07:00:03'),
(927, 1, 2, 2, '200.00', '2016-07-04 07:00:03'),
(928, 1, 3, 1, '100.00', '2016-07-04 07:00:03'),
(929, 1, 1, 0, '0.00', '2016-07-04 07:00:03'),
(930, 3, 8, 4, '400.00', '2016-07-04 07:00:03'),
(931, 3, 4, 3, '300.00', '2016-07-04 07:00:03'),
(932, 3, 7, 2, '200.00', '2016-07-04 07:00:03'),
(933, 3, 6, 1, '100.00', '2016-07-04 07:00:03'),
(934, 3, 5, 0, '0.00', '2016-07-04 07:00:03'),
(935, 1, 2, 2, '200.00', '2016-07-05 07:00:04'),
(936, 1, 3, 1, '100.00', '2016-07-05 07:00:04'),
(937, 1, 1, 0, '0.00', '2016-07-05 07:00:04'),
(938, 3, 8, 4, '400.00', '2016-07-05 07:00:04'),
(939, 3, 4, 3, '300.00', '2016-07-05 07:00:04'),
(940, 3, 7, 2, '200.00', '2016-07-05 07:00:04'),
(941, 3, 6, 1, '100.00', '2016-07-05 07:00:04'),
(942, 3, 5, 0, '0.00', '2016-07-05 07:00:04'),
(943, 1, 2, 2, '200.00', '2016-07-06 07:00:03'),
(944, 1, 3, 1, '100.00', '2016-07-06 07:00:03'),
(945, 1, 1, 0, '0.00', '2016-07-06 07:00:03'),
(946, 3, 8, 4, '400.00', '2016-07-06 07:00:03'),
(947, 3, 4, 3, '300.00', '2016-07-06 07:00:03'),
(948, 3, 7, 2, '200.00', '2016-07-06 07:00:03'),
(949, 3, 6, 1, '100.00', '2016-07-06 07:00:03'),
(950, 3, 5, 0, '0.00', '2016-07-06 07:00:03'),
(951, 1, 2, 2, '200.00', '2016-07-07 07:00:06'),
(952, 1, 3, 1, '100.00', '2016-07-07 07:00:06'),
(953, 1, 1, 0, '0.00', '2016-07-07 07:00:06'),
(954, 3, 8, 4, '400.00', '2016-07-07 07:00:06'),
(955, 3, 4, 3, '300.00', '2016-07-07 07:00:06'),
(956, 3, 7, 2, '200.00', '2016-07-07 07:00:06'),
(957, 3, 6, 1, '100.00', '2016-07-07 07:00:06'),
(958, 3, 5, 0, '0.00', '2016-07-07 07:00:06'),
(959, 1, 2, 2, '200.00', '2016-07-08 07:00:03'),
(960, 1, 3, 1, '100.00', '2016-07-08 07:00:03'),
(961, 1, 1, 0, '0.00', '2016-07-08 07:00:03'),
(962, 3, 8, 4, '400.00', '2016-07-08 07:00:03'),
(963, 3, 4, 3, '300.00', '2016-07-08 07:00:03'),
(964, 3, 7, 2, '200.00', '2016-07-08 07:00:03'),
(965, 3, 6, 1, '100.00', '2016-07-08 07:00:03'),
(966, 3, 5, 0, '0.00', '2016-07-08 07:00:03'),
(967, 1, 2, 2, '200.00', '2016-07-09 07:00:02'),
(968, 1, 3, 1, '100.00', '2016-07-09 07:00:02'),
(969, 1, 1, 0, '0.00', '2016-07-09 07:00:02'),
(970, 3, 8, 4, '400.00', '2016-07-09 07:00:02'),
(971, 3, 4, 3, '300.00', '2016-07-09 07:00:02'),
(972, 3, 7, 2, '200.00', '2016-07-09 07:00:02'),
(973, 3, 6, 1, '100.00', '2016-07-09 07:00:02'),
(974, 3, 5, 0, '0.00', '2016-07-09 07:00:02'),
(975, 1, 2, 2, '200.00', '2016-07-10 07:00:04'),
(976, 1, 3, 1, '100.00', '2016-07-10 07:00:04'),
(977, 1, 1, 0, '0.00', '2016-07-10 07:00:04'),
(978, 3, 8, 4, '400.00', '2016-07-10 07:00:04'),
(979, 3, 4, 3, '300.00', '2016-07-10 07:00:04'),
(980, 3, 7, 2, '200.00', '2016-07-10 07:00:04'),
(981, 3, 6, 1, '100.00', '2016-07-10 07:00:04'),
(982, 3, 5, 0, '0.00', '2016-07-10 07:00:04'),
(983, 1, 2, 2, '200.00', '2016-07-11 07:00:03'),
(984, 1, 3, 1, '100.00', '2016-07-11 07:00:03'),
(985, 1, 1, 0, '0.00', '2016-07-11 07:00:03'),
(986, 3, 8, 4, '400.00', '2016-07-11 07:00:04'),
(987, 3, 4, 3, '300.00', '2016-07-11 07:00:04'),
(988, 3, 7, 2, '200.00', '2016-07-11 07:00:04'),
(989, 3, 6, 1, '100.00', '2016-07-11 07:00:04'),
(990, 3, 5, 0, '0.00', '2016-07-11 07:00:04'),
(991, 1, 2, 2, '200.00', '2016-07-12 07:00:03'),
(992, 1, 3, 1, '100.00', '2016-07-12 07:00:03'),
(993, 1, 1, 0, '0.00', '2016-07-12 07:00:03'),
(994, 3, 8, 4, '400.00', '2016-07-12 07:00:03'),
(995, 3, 4, 3, '300.00', '2016-07-12 07:00:03'),
(996, 3, 7, 2, '200.00', '2016-07-12 07:00:03'),
(997, 3, 6, 1, '100.00', '2016-07-12 07:00:03'),
(998, 3, 5, 0, '0.00', '2016-07-12 07:00:03'),
(999, 1, 2, 2, '200.00', '2016-07-13 07:00:05'),
(1000, 1, 3, 1, '100.00', '2016-07-13 07:00:05'),
(1001, 1, 1, 0, '0.00', '2016-07-13 07:00:05'),
(1002, 3, 8, 4, '400.00', '2016-07-13 07:00:05'),
(1003, 3, 4, 3, '300.00', '2016-07-13 07:00:05'),
(1004, 3, 7, 2, '200.00', '2016-07-13 07:00:05'),
(1005, 3, 6, 1, '100.00', '2016-07-13 07:00:05'),
(1006, 3, 5, 0, '0.00', '2016-07-13 07:00:05'),
(1007, 1, 2, 2, '200.00', '2016-07-14 07:00:04'),
(1008, 1, 3, 1, '100.00', '2016-07-14 07:00:04'),
(1009, 1, 1, 0, '0.00', '2016-07-14 07:00:04'),
(1010, 3, 8, 4, '400.00', '2016-07-14 07:00:04'),
(1011, 3, 4, 3, '300.00', '2016-07-14 07:00:04'),
(1012, 3, 7, 2, '200.00', '2016-07-14 07:00:04'),
(1013, 3, 6, 1, '100.00', '2016-07-14 07:00:04'),
(1014, 3, 5, 0, '0.00', '2016-07-14 07:00:04'),
(1015, 1, 2, 2, '200.00', '2016-07-15 07:00:04'),
(1016, 1, 3, 1, '100.00', '2016-07-15 07:00:04'),
(1017, 1, 1, 0, '0.00', '2016-07-15 07:00:04'),
(1018, 3, 8, 4, '400.00', '2016-07-15 07:00:06'),
(1019, 3, 4, 3, '300.00', '2016-07-15 07:00:06'),
(1020, 3, 7, 2, '200.00', '2016-07-15 07:00:06'),
(1021, 3, 6, 1, '100.00', '2016-07-15 07:00:06'),
(1022, 3, 5, 0, '0.00', '2016-07-15 07:00:06'),
(1023, 1, 2, 2, '200.00', '2016-07-16 07:00:05'),
(1024, 1, 3, 1, '100.00', '2016-07-16 07:00:05'),
(1025, 1, 1, 0, '0.00', '2016-07-16 07:00:05'),
(1026, 3, 8, 4, '400.00', '2016-07-16 07:00:05'),
(1027, 3, 4, 3, '300.00', '2016-07-16 07:00:05'),
(1028, 3, 7, 2, '200.00', '2016-07-16 07:00:05'),
(1029, 3, 6, 1, '100.00', '2016-07-16 07:00:05'),
(1030, 3, 5, 0, '0.00', '2016-07-16 07:00:05'),
(1031, 1, 2, 2, '200.00', '2016-07-17 07:00:03'),
(1032, 1, 3, 1, '100.00', '2016-07-17 07:00:03'),
(1033, 1, 1, 0, '0.00', '2016-07-17 07:00:03'),
(1034, 3, 8, 4, '400.00', '2016-07-17 07:00:03'),
(1035, 3, 4, 3, '300.00', '2016-07-17 07:00:03'),
(1036, 3, 7, 2, '200.00', '2016-07-17 07:00:03'),
(1037, 3, 6, 1, '100.00', '2016-07-17 07:00:03'),
(1038, 3, 5, 0, '0.00', '2016-07-17 07:00:03'),
(1039, 1, 2, 2, '200.00', '2016-07-18 07:00:03'),
(1040, 1, 3, 1, '100.00', '2016-07-18 07:00:03'),
(1041, 1, 1, 0, '0.00', '2016-07-18 07:00:03'),
(1042, 3, 8, 4, '400.00', '2016-07-18 07:00:03'),
(1043, 3, 4, 3, '300.00', '2016-07-18 07:00:03'),
(1044, 3, 7, 2, '200.00', '2016-07-18 07:00:03'),
(1045, 3, 6, 1, '100.00', '2016-07-18 07:00:03'),
(1046, 3, 5, 0, '0.00', '2016-07-18 07:00:03'),
(1047, 1, 2, 2, '200.00', '2016-07-19 07:00:03'),
(1048, 1, 3, 1, '100.00', '2016-07-19 07:00:03'),
(1049, 1, 1, 0, '0.00', '2016-07-19 07:00:03'),
(1050, 3, 8, 4, '400.00', '2016-07-19 07:00:03'),
(1051, 3, 4, 3, '300.00', '2016-07-19 07:00:03'),
(1052, 3, 7, 2, '200.00', '2016-07-19 07:00:03'),
(1053, 3, 6, 1, '100.00', '2016-07-19 07:00:03'),
(1054, 3, 5, 0, '0.00', '2016-07-19 07:00:03'),
(1055, 1, 2, 2, '200.00', '2016-07-20 07:00:03'),
(1056, 1, 3, 1, '100.00', '2016-07-20 07:00:03'),
(1057, 1, 1, 0, '0.00', '2016-07-20 07:00:03'),
(1058, 3, 8, 4, '400.00', '2016-07-20 07:00:03'),
(1059, 3, 4, 3, '300.00', '2016-07-20 07:00:03'),
(1060, 3, 7, 2, '200.00', '2016-07-20 07:00:03'),
(1061, 3, 6, 1, '100.00', '2016-07-20 07:00:03'),
(1062, 3, 5, 0, '0.00', '2016-07-20 07:00:03'),
(1063, 1, 2, 2, '200.00', '2016-07-21 07:00:02'),
(1064, 1, 3, 1, '100.00', '2016-07-21 07:00:02'),
(1065, 1, 1, 0, '0.00', '2016-07-21 07:00:02'),
(1066, 3, 8, 4, '400.00', '2016-07-21 07:00:02'),
(1067, 3, 4, 3, '300.00', '2016-07-21 07:00:02'),
(1068, 3, 7, 2, '200.00', '2016-07-21 07:00:02'),
(1069, 3, 6, 1, '100.00', '2016-07-21 07:00:02'),
(1070, 3, 5, 0, '0.00', '2016-07-21 07:00:02'),
(1071, 1, 2, 2, '200.00', '2016-07-22 07:00:04'),
(1072, 1, 3, 1, '100.00', '2016-07-22 07:00:04'),
(1073, 1, 1, 0, '0.00', '2016-07-22 07:00:04'),
(1074, 3, 8, 4, '400.00', '2016-07-22 07:00:04'),
(1075, 3, 4, 3, '300.00', '2016-07-22 07:00:04'),
(1076, 3, 7, 2, '200.00', '2016-07-22 07:00:04');
INSERT INTO `payout_logs` (`id`, `show_id`, `show_entry_id`, `points`, `amount`, `created`) VALUES
(1077, 3, 6, 1, '100.00', '2016-07-22 07:00:04'),
(1078, 3, 5, 0, '0.00', '2016-07-22 07:00:04'),
(1079, 1, 2, 2, '200.00', '2016-07-23 07:00:04'),
(1080, 1, 3, 1, '100.00', '2016-07-23 07:00:04'),
(1081, 1, 1, 0, '0.00', '2016-07-23 07:00:04'),
(1082, 3, 8, 4, '400.00', '2016-07-23 07:00:04'),
(1083, 3, 4, 3, '300.00', '2016-07-23 07:00:04'),
(1084, 3, 7, 2, '200.00', '2016-07-23 07:00:04'),
(1085, 3, 6, 1, '100.00', '2016-07-23 07:00:04'),
(1086, 3, 5, 0, '0.00', '2016-07-23 07:00:04'),
(1087, 1, 2, 2, '200.00', '2016-07-24 07:00:04'),
(1088, 1, 3, 1, '100.00', '2016-07-24 07:00:04'),
(1089, 1, 1, 0, '0.00', '2016-07-24 07:00:04'),
(1090, 3, 8, 4, '400.00', '2016-07-24 07:00:04'),
(1091, 3, 4, 3, '300.00', '2016-07-24 07:00:04'),
(1092, 3, 7, 2, '200.00', '2016-07-24 07:00:04'),
(1093, 3, 6, 1, '100.00', '2016-07-24 07:00:04'),
(1094, 3, 5, 0, '0.00', '2016-07-24 07:00:04'),
(1095, 1, 2, 2, '200.00', '2016-07-25 07:00:03'),
(1096, 1, 3, 1, '100.00', '2016-07-25 07:00:04'),
(1097, 1, 1, 0, '0.00', '2016-07-25 07:00:04'),
(1098, 3, 8, 4, '400.00', '2016-07-25 07:00:04'),
(1099, 3, 4, 3, '300.00', '2016-07-25 07:00:04'),
(1100, 3, 7, 2, '200.00', '2016-07-25 07:00:04'),
(1101, 3, 6, 1, '100.00', '2016-07-25 07:00:04'),
(1102, 3, 5, 0, '0.00', '2016-07-25 07:00:04'),
(1103, 1, 2, 2, '200.00', '2016-07-26 07:00:02'),
(1104, 1, 3, 1, '100.00', '2016-07-26 07:00:02'),
(1105, 1, 1, 0, '0.00', '2016-07-26 07:00:02'),
(1106, 3, 8, 4, '400.00', '2016-07-26 07:00:02'),
(1107, 3, 4, 3, '300.00', '2016-07-26 07:00:02'),
(1108, 3, 7, 2, '200.00', '2016-07-26 07:00:02'),
(1109, 3, 6, 1, '100.00', '2016-07-26 07:00:02'),
(1110, 3, 5, 0, '0.00', '2016-07-26 07:00:02'),
(1111, 1, 2, 2, '200.00', '2016-07-27 07:00:04'),
(1112, 1, 3, 1, '100.00', '2016-07-27 07:00:04'),
(1113, 1, 1, 0, '0.00', '2016-07-27 07:00:04'),
(1114, 3, 8, 4, '400.00', '2016-07-27 07:00:04'),
(1115, 3, 4, 3, '300.00', '2016-07-27 07:00:04'),
(1116, 3, 7, 2, '200.00', '2016-07-27 07:00:04'),
(1117, 3, 6, 1, '100.00', '2016-07-27 07:00:04'),
(1118, 3, 5, 0, '0.00', '2016-07-27 07:00:04'),
(1119, 1, 2, 2, '200.00', '2016-07-28 07:00:10'),
(1120, 1, 3, 1, '100.00', '2016-07-28 07:00:10'),
(1121, 1, 1, 0, '0.00', '2016-07-28 07:00:10'),
(1122, 2, 9, 1, '100.00', '2016-07-28 07:00:10'),
(1123, 2, 10, 0, '0.00', '2016-07-28 07:00:10'),
(1124, 3, 8, 5, '500.00', '2016-07-28 07:00:10'),
(1125, 3, 4, 4, '400.00', '2016-07-28 07:00:10'),
(1126, 3, 7, 3, '300.00', '2016-07-28 07:00:10'),
(1127, 3, 6, 2, '200.00', '2016-07-28 07:00:10'),
(1128, 3, 12, 1, '100.00', '2016-07-28 07:00:10'),
(1129, 3, 5, 0, '0.00', '2016-07-28 07:00:10'),
(1130, 1, 2, 2, '200.00', '2016-07-29 07:00:01'),
(1131, 1, 3, 1, '100.00', '2016-07-29 07:00:01'),
(1132, 1, 1, 0, '0.00', '2016-07-29 07:00:01'),
(1133, 2, 9, 1, '100.00', '2016-07-29 07:00:01'),
(1134, 2, 10, 0, '0.00', '2016-07-29 07:00:01'),
(1135, 3, 8, 5, '500.00', '2016-07-29 07:00:01'),
(1136, 3, 4, 4, '400.00', '2016-07-29 07:00:01'),
(1137, 3, 7, 3, '300.00', '2016-07-29 07:00:01'),
(1138, 3, 6, 2, '200.00', '2016-07-29 07:00:01'),
(1139, 3, 12, 1, '100.00', '2016-07-29 07:00:01'),
(1140, 3, 16, 0, '0.00', '2016-07-29 07:00:01'),
(1141, 3, 5, -1, '-100.00', '2016-07-29 07:00:01'),
(1142, 3, 17, -2, '-200.00', '2016-07-29 07:00:01'),
(1143, 1, 2, 2, '200.00', '2016-07-30 01:15:15'),
(1144, 1, 3, 1, '100.00', '2016-07-30 01:15:15'),
(1145, 1, 1, 0, '0.00', '2016-07-30 01:15:15'),
(1146, 2, 9, 1, '100.00', '2016-07-30 01:15:15'),
(1147, 2, 10, 0, '0.00', '2016-07-30 01:15:15'),
(1148, 3, 18, 5, '500.00', '2016-07-30 01:15:15'),
(1149, 3, 8, 4, '400.00', '2016-07-30 01:15:15'),
(1150, 3, 4, 3, '300.00', '2016-07-30 01:15:15'),
(1151, 3, 7, 2, '200.00', '2016-07-30 01:15:15'),
(1152, 3, 6, 1, '100.00', '2016-07-30 01:15:15'),
(1153, 3, 12, 0, '0.00', '2016-07-30 01:15:15'),
(1154, 3, 16, -1, '-100.00', '2016-07-30 01:15:15'),
(1155, 3, 5, -2, '-200.00', '2016-07-30 01:15:15'),
(1156, 3, 17, -3, '-300.00', '2016-07-30 01:15:15'),
(1157, 1, 2, 2, '200.00', '2016-07-30 01:16:53'),
(1158, 1, 3, 1, '100.00', '2016-07-30 01:16:53'),
(1159, 1, 1, 0, '0.00', '2016-07-30 01:16:53'),
(1160, 2, 9, 1, '100.00', '2016-07-30 01:16:53'),
(1161, 2, 10, 0, '0.00', '2016-07-30 01:16:53'),
(1162, 3, 18, 5, '500.00', '2016-07-30 01:16:53'),
(1163, 3, 8, 4, '400.00', '2016-07-30 01:16:53'),
(1164, 3, 4, 3, '300.00', '2016-07-30 01:16:53'),
(1165, 3, 7, 2, '200.00', '2016-07-30 01:16:53'),
(1166, 3, 6, 1, '100.00', '2016-07-30 01:16:53'),
(1167, 3, 12, 0, '0.00', '2016-07-30 01:16:53'),
(1168, 3, 16, -1, '-100.00', '2016-07-30 01:16:53'),
(1169, 3, 5, -2, '-200.00', '2016-07-30 01:16:53'),
(1170, 3, 17, -3, '-300.00', '2016-07-30 01:16:53'),
(1171, 1, 2, 2, '200.00', '2016-07-30 01:17:44'),
(1172, 1, 3, 1, '100.00', '2016-07-30 01:17:44'),
(1173, 1, 1, 0, '0.00', '2016-07-30 01:17:44'),
(1174, 2, 9, 1, '100.00', '2016-07-30 01:17:44'),
(1175, 2, 10, 0, '0.00', '2016-07-30 01:17:44'),
(1176, 3, 8, 5, '500.00', '2016-07-30 01:17:45'),
(1177, 3, 6, 4, '400.00', '2016-07-30 01:17:45'),
(1178, 3, 7, 3, '300.00', '2016-07-30 01:17:45'),
(1179, 3, 18, 2, '200.00', '2016-07-30 01:17:45'),
(1180, 3, 12, 1, '100.00', '2016-07-30 01:17:45'),
(1181, 3, 4, 0, '0.00', '2016-07-30 01:17:45'),
(1182, 3, 5, -1, '-100.00', '2016-07-30 01:17:45'),
(1183, 3, 16, -2, '-200.00', '2016-07-30 01:17:45'),
(1184, 3, 17, -3, '-300.00', '2016-07-30 01:17:45'),
(1185, 1, 2, 2, '200.00', '2016-07-30 01:18:19'),
(1186, 1, 3, 1, '100.00', '2016-07-30 01:18:19'),
(1187, 1, 1, 0, '0.00', '2016-07-30 01:18:19'),
(1188, 2, 9, 1, '100.00', '2016-07-30 01:18:19'),
(1189, 2, 10, 0, '0.00', '2016-07-30 01:18:19'),
(1190, 3, 8, 5, '500.00', '2016-07-30 01:18:19'),
(1191, 3, 6, 4, '400.00', '2016-07-30 01:18:19'),
(1192, 3, 7, 3, '300.00', '2016-07-30 01:18:19'),
(1193, 3, 18, 2, '200.00', '2016-07-30 01:18:19'),
(1194, 3, 12, 1, '100.00', '2016-07-30 01:18:19'),
(1195, 3, 4, 0, '0.00', '2016-07-30 01:18:19'),
(1196, 3, 5, -1, '-100.00', '2016-07-30 01:18:19'),
(1197, 3, 16, -2, '-200.00', '2016-07-30 01:18:19'),
(1198, 3, 17, -3, '-300.00', '2016-07-30 01:18:19'),
(1199, 1, 2, 2, '200.00', '2016-07-30 01:18:29'),
(1200, 1, 3, 1, '100.00', '2016-07-30 01:18:29'),
(1201, 1, 1, 0, '0.00', '2016-07-30 01:18:29'),
(1202, 2, 9, 1, '100.00', '2016-07-30 01:18:29'),
(1203, 2, 10, 0, '0.00', '2016-07-30 01:18:29'),
(1204, 3, 6, 5, '500.00', '2016-07-30 01:18:29'),
(1205, 3, 8, 4, '400.00', '2016-07-30 01:18:29'),
(1206, 3, 7, 3, '300.00', '2016-07-30 01:18:29'),
(1207, 3, 12, 2, '200.00', '2016-07-30 01:18:29'),
(1208, 3, 18, 1, '100.00', '2016-07-30 01:18:29'),
(1209, 3, 4, 0, '0.00', '2016-07-30 01:18:29'),
(1210, 3, 5, -1, '-100.00', '2016-07-30 01:18:29'),
(1211, 3, 16, -2, '-200.00', '2016-07-30 01:18:29'),
(1212, 3, 17, -3, '-300.00', '2016-07-30 01:18:29'),
(1213, 1, 2, 2, '200.00', '2016-07-30 01:26:27'),
(1214, 1, 3, 1, '100.00', '2016-07-30 01:26:27'),
(1215, 1, 1, 0, '0.00', '2016-07-30 01:26:27'),
(1216, 2, 9, 1, '100.00', '2016-07-30 01:26:27'),
(1217, 2, 10, 0, '0.00', '2016-07-30 01:26:27'),
(1218, 3, 6, 5, '500.00', '2016-07-30 01:26:27'),
(1219, 3, 8, 4, '400.00', '2016-07-30 01:26:27'),
(1220, 3, 7, 3, '300.00', '2016-07-30 01:26:27'),
(1221, 3, 12, 2, '200.00', '2016-07-30 01:26:27'),
(1222, 3, 18, 1, '100.00', '2016-07-30 01:26:27'),
(1223, 3, 4, 0, '0.00', '2016-07-30 01:26:27'),
(1224, 3, 5, -1, '-100.00', '2016-07-30 01:26:27'),
(1225, 3, 16, -2, '-200.00', '2016-07-30 01:26:27'),
(1226, 3, 17, -3, '-300.00', '2016-07-30 01:26:27'),
(1227, 1, 2, 2, '200.00', '2016-07-30 07:00:02'),
(1228, 1, 3, 1, '100.00', '2016-07-30 07:00:02'),
(1229, 1, 1, 0, '0.00', '2016-07-30 07:00:02'),
(1230, 2, 9, 1, '100.00', '2016-07-30 07:00:02'),
(1231, 2, 10, 0, '0.00', '2016-07-30 07:00:02'),
(1232, 3, 6, 5, '500.00', '2016-07-30 07:00:02'),
(1233, 3, 8, 4, '400.00', '2016-07-30 07:00:02'),
(1234, 3, 7, 3, '300.00', '2016-07-30 07:00:02'),
(1235, 3, 12, 2, '200.00', '2016-07-30 07:00:02'),
(1236, 3, 18, 1, '100.00', '2016-07-30 07:00:02'),
(1237, 3, 4, 0, '0.00', '2016-07-30 07:00:02'),
(1238, 3, 5, -1, '-100.00', '2016-07-30 07:00:02'),
(1239, 3, 16, -2, '-200.00', '2016-07-30 07:00:02'),
(1240, 3, 17, -3, '-300.00', '2016-07-30 07:00:02'),
(1241, 3, 17, 3, '300.00', '2016-07-30 21:49:16'),
(1242, 3, 16, 2, '200.00', '2016-07-30 21:49:16'),
(1243, 3, 5, 1, '100.00', '2016-07-30 21:49:16'),
(1244, 3, 4, 0, '0.00', '2016-07-30 21:49:16'),
(1245, 3, 6, 5, '500.00', '2016-07-30 21:54:17'),
(1246, 3, 8, 4, '400.00', '2016-07-30 21:54:17'),
(1247, 3, 7, 3, '300.00', '2016-07-30 21:54:17'),
(1248, 3, 12, 2, '200.00', '2016-07-30 21:54:17'),
(1249, 3, 18, 1, '100.00', '2016-07-30 21:54:17'),
(1250, 3, 4, 0, '0.00', '2016-07-30 21:54:17'),
(1251, 3, 5, -1, '-100.00', '2016-07-30 21:54:17'),
(1252, 3, 16, -2, '-200.00', '2016-07-30 21:54:17'),
(1253, 3, 17, -3, '-300.00', '2016-07-30 21:54:17'),
(1254, 3, 6, 5, '500.00', '2016-07-31 07:00:02'),
(1255, 3, 8, 4, '400.00', '2016-07-31 07:00:02'),
(1256, 3, 7, 3, '300.00', '2016-07-31 07:00:02'),
(1257, 3, 12, 2, '200.00', '2016-07-31 07:00:02'),
(1258, 3, 18, 1, '100.00', '2016-07-31 07:00:02'),
(1259, 3, 4, 0, '0.00', '2016-07-31 07:00:02'),
(1260, 3, 5, -1, '-100.00', '2016-07-31 07:00:02'),
(1261, 3, 16, -2, '-200.00', '2016-07-31 07:00:02'),
(1262, 3, 17, -3, '-300.00', '2016-07-31 07:00:02'),
(1263, 3, 6, 5, '500.00', '2016-07-31 08:05:32'),
(1264, 3, 8, 4, '400.00', '2016-07-31 08:05:32'),
(1265, 3, 7, 3, '300.00', '2016-07-31 08:05:32'),
(1266, 3, 12, 2, '200.00', '2016-07-31 08:05:32'),
(1267, 3, 18, 1, '100.00', '2016-07-31 08:05:32'),
(1268, 3, 4, 0, '0.00', '2016-07-31 08:05:32'),
(1269, 3, 5, -1, '-100.00', '2016-07-31 08:05:32'),
(1270, 3, 16, -2, '-200.00', '2016-07-31 08:05:32'),
(1271, 3, 17, -3, '-300.00', '2016-07-31 08:05:32'),
(1272, 3, 6, 5, '500.00', '2016-08-01 07:00:03'),
(1273, 3, 8, 4, '400.00', '2016-08-01 07:00:03'),
(1274, 3, 7, 3, '300.00', '2016-08-01 07:00:03'),
(1275, 3, 12, 2, '200.00', '2016-08-01 07:00:03'),
(1276, 3, 18, 1, '100.00', '2016-08-01 07:00:03'),
(1277, 3, 4, 0, '0.00', '2016-08-01 07:00:03'),
(1278, 3, 5, -1, '-100.00', '2016-08-01 07:00:03'),
(1279, 3, 16, -2, '-200.00', '2016-08-01 07:00:03'),
(1280, 3, 17, -3, '-300.00', '2016-08-01 07:00:04'),
(1281, 1, 2, 2, '200.00', '2016-08-01 22:51:27'),
(1282, 1, 3, 1, '100.00', '2016-08-01 22:51:27'),
(1283, 1, 1, 0, '0.00', '2016-08-01 22:51:27'),
(1284, 2, 9, 2, '200.00', '2016-08-01 22:51:27'),
(1285, 2, 10, 1, '100.00', '2016-08-01 22:51:27'),
(1286, 2, 11, 0, '0.00', '2016-08-01 22:51:27'),
(1287, 3, 18, 5, '500.00', '2016-08-01 22:51:27'),
(1288, 3, 4, 4, '400.00', '2016-08-01 22:51:27'),
(1289, 3, 8, 3, '300.00', '2016-08-01 22:51:27'),
(1290, 3, 7, 2, '200.00', '2016-08-01 22:51:27'),
(1291, 3, 6, 1, '100.00', '2016-08-01 22:51:27'),
(1292, 3, 12, 0, '0.00', '2016-08-01 22:51:27'),
(1293, 3, 16, -1, '-100.00', '2016-08-01 22:51:27'),
(1294, 3, 5, -2, '-200.00', '2016-08-01 22:51:27'),
(1295, 3, 17, -3, '-300.00', '2016-08-01 22:51:27'),
(1296, 5, 14, 1, '100.00', '2016-08-01 22:51:27'),
(1297, 5, 15, 0, '0.00', '2016-08-01 22:51:27'),
(1298, 1, 2, 2, '200.00', '2016-08-01 22:51:28'),
(1299, 1, 3, 1, '100.00', '2016-08-01 22:51:28'),
(1300, 1, 1, 0, '0.00', '2016-08-01 22:51:28'),
(1301, 2, 9, 2, '200.00', '2016-08-01 22:51:28'),
(1302, 2, 10, 1, '100.00', '2016-08-01 22:51:28'),
(1303, 2, 11, 0, '0.00', '2016-08-01 22:51:28'),
(1304, 3, 18, 5, '500.00', '2016-08-01 22:51:28'),
(1305, 3, 4, 4, '400.00', '2016-08-01 22:51:28'),
(1306, 3, 8, 3, '300.00', '2016-08-01 22:51:28'),
(1307, 3, 7, 2, '200.00', '2016-08-01 22:51:28'),
(1308, 3, 6, 1, '100.00', '2016-08-01 22:51:28'),
(1309, 3, 12, 0, '0.00', '2016-08-01 22:51:28'),
(1310, 3, 16, -1, '-100.00', '2016-08-01 22:51:28'),
(1311, 3, 5, -2, '-200.00', '2016-08-01 22:51:28'),
(1312, 3, 17, -3, '-300.00', '2016-08-01 22:51:28'),
(1313, 5, 14, 1, '100.00', '2016-08-01 22:51:28'),
(1314, 5, 15, 0, '0.00', '2016-08-01 22:51:28'),
(1315, 1, 2, 2, '200.00', '2016-08-01 22:56:43'),
(1316, 1, 3, 1, '100.00', '2016-08-01 22:56:45'),
(1317, 1, 1, 0, '0.00', '2016-08-01 22:56:45'),
(1318, 2, 9, 2, '200.00', '2016-08-01 22:56:45'),
(1319, 2, 10, 1, '100.00', '2016-08-01 22:56:45'),
(1320, 2, 11, 0, '0.00', '2016-08-01 22:56:45'),
(1321, 3, 18, 5, '500.00', '2016-08-01 22:56:45'),
(1322, 3, 4, 4, '400.00', '2016-08-01 22:56:45'),
(1323, 3, 8, 3, '300.00', '2016-08-01 22:56:45'),
(1324, 3, 7, 2, '200.00', '2016-08-01 22:56:45'),
(1325, 3, 6, 1, '100.00', '2016-08-01 22:56:45'),
(1326, 3, 12, 0, '0.00', '2016-08-01 22:56:45'),
(1327, 3, 16, -1, '-100.00', '2016-08-01 22:56:45'),
(1328, 3, 5, -2, '-200.00', '2016-08-01 22:56:45'),
(1329, 3, 17, -3, '-300.00', '2016-08-01 22:56:45'),
(1330, 5, 14, 1, '100.00', '2016-08-01 22:56:45'),
(1331, 5, 15, 0, '0.00', '2016-08-01 22:56:45'),
(1332, 1, 2, 2, '200.00', '2016-08-01 22:59:16'),
(1333, 1, 3, 1, '100.00', '2016-08-01 22:59:16'),
(1334, 1, 1, 0, '0.00', '2016-08-01 22:59:16'),
(1335, 2, 9, 2, '200.00', '2016-08-01 22:59:16'),
(1336, 2, 10, 1, '100.00', '2016-08-01 22:59:16'),
(1337, 2, 11, 0, '0.00', '2016-08-01 22:59:16'),
(1338, 3, 18, 5, '500.00', '2016-08-01 22:59:17'),
(1339, 3, 4, 4, '400.00', '2016-08-01 22:59:17'),
(1340, 3, 8, 3, '300.00', '2016-08-01 22:59:17'),
(1341, 3, 7, 2, '200.00', '2016-08-01 22:59:17'),
(1342, 3, 6, 1, '100.00', '2016-08-01 22:59:17'),
(1343, 3, 12, 0, '0.00', '2016-08-01 22:59:17'),
(1344, 3, 16, -1, '-100.00', '2016-08-01 22:59:17'),
(1345, 3, 5, -2, '-200.00', '2016-08-01 22:59:17'),
(1346, 3, 17, -3, '-300.00', '2016-08-01 22:59:17'),
(1347, 5, 14, 1, '100.00', '2016-08-01 22:59:17'),
(1348, 5, 15, 0, '0.00', '2016-08-01 22:59:17'),
(1349, 3, 18, 5, '500.00', '2016-08-01 23:02:01'),
(1350, 3, 4, 4, '400.00', '2016-08-01 23:02:01'),
(1351, 3, 8, 3, '300.00', '2016-08-01 23:02:01'),
(1352, 3, 7, 2, '200.00', '2016-08-01 23:02:01'),
(1353, 3, 6, 1, '100.00', '2016-08-01 23:02:01'),
(1354, 3, 12, 0, '0.00', '2016-08-01 23:02:01'),
(1355, 3, 16, -1, '-100.00', '2016-08-01 23:02:01'),
(1356, 3, 5, -2, '-200.00', '2016-08-01 23:02:01'),
(1357, 3, 17, -3, '-300.00', '2016-08-01 23:02:01'),
(1358, 3, 18, 5, '500.00', '2016-08-01 23:04:15'),
(1359, 3, 4, 4, '400.00', '2016-08-01 23:04:15'),
(1360, 3, 8, 3, '300.00', '2016-08-01 23:04:15'),
(1361, 3, 7, 2, '200.00', '2016-08-01 23:04:15'),
(1362, 3, 6, 1, '100.00', '2016-08-01 23:04:15'),
(1363, 3, 12, 0, '0.00', '2016-08-01 23:04:15'),
(1364, 3, 16, -1, '-100.00', '2016-08-01 23:04:15'),
(1365, 3, 5, -2, '-200.00', '2016-08-01 23:04:15'),
(1366, 3, 17, -3, '-300.00', '2016-08-01 23:04:15'),
(1367, 3, 18, 5, '500.00', '2016-08-01 23:06:16'),
(1368, 3, 4, 4, '400.00', '2016-08-01 23:06:16'),
(1369, 3, 8, 3, '300.00', '2016-08-01 23:06:16'),
(1370, 3, 7, 2, '200.00', '2016-08-01 23:06:16'),
(1371, 3, 6, 1, '100.00', '2016-08-01 23:06:16'),
(1372, 3, 12, 0, '0.00', '2016-08-01 23:06:16'),
(1373, 3, 16, -1, '-100.00', '2016-08-01 23:06:16'),
(1374, 3, 5, -2, '-200.00', '2016-08-01 23:06:16'),
(1375, 3, 17, -3, '-300.00', '2016-08-01 23:06:16'),
(1376, 3, 18, 5, '500.00', '2016-08-01 23:24:51'),
(1377, 3, 6, 4, '400.00', '2016-08-01 23:24:51'),
(1378, 3, 8, 3, '300.00', '2016-08-01 23:24:51'),
(1379, 3, 4, 2, '200.00', '2016-08-01 23:24:51'),
(1380, 3, 5, 1, '100.00', '2016-08-01 23:24:51'),
(1381, 3, 7, 0, '0.00', '2016-08-01 23:24:51'),
(1382, 3, 12, -1, '-100.00', '2016-08-01 23:24:51'),
(1383, 3, 16, -2, '-200.00', '2016-08-01 23:24:51'),
(1384, 3, 17, -3, '-300.00', '2016-08-01 23:24:51'),
(1385, 3, 18, 5, '500.00', '2016-08-01 23:29:21'),
(1386, 3, 6, 4, '400.00', '2016-08-01 23:29:21'),
(1387, 3, 8, 3, '300.00', '2016-08-01 23:29:21'),
(1388, 3, 4, 2, '200.00', '2016-08-01 23:29:21'),
(1389, 3, 5, 1, '100.00', '2016-08-01 23:29:21'),
(1390, 3, 7, 0, '0.00', '2016-08-01 23:29:21'),
(1391, 3, 12, -1, '-100.00', '2016-08-01 23:29:21'),
(1392, 3, 16, -2, '-200.00', '2016-08-01 23:29:21'),
(1393, 3, 17, -3, '-300.00', '2016-08-01 23:29:21'),
(1394, 3, 18, 5, '500.00', '2016-08-01 23:34:24'),
(1395, 3, 6, 4, '400.00', '2016-08-01 23:34:24'),
(1396, 3, 8, 3, '300.00', '2016-08-01 23:34:24'),
(1397, 3, 4, 2, '200.00', '2016-08-01 23:34:24'),
(1398, 3, 5, 1, '100.00', '2016-08-01 23:34:24'),
(1399, 3, 7, 0, '0.00', '2016-08-01 23:34:24'),
(1400, 3, 12, -1, '-100.00', '2016-08-01 23:34:24'),
(1401, 3, 16, -2, '-200.00', '2016-08-01 23:34:24'),
(1402, 3, 17, -3, '-300.00', '2016-08-01 23:34:24'),
(1403, 3, 18, 5, '500.00', '2016-08-07 20:58:34'),
(1404, 3, 6, 4, '400.00', '2016-08-07 20:58:34'),
(1405, 3, 8, 3, '300.00', '2016-08-07 20:58:34'),
(1406, 3, 4, 2, '200.00', '2016-08-07 20:58:34'),
(1407, 3, 5, 1, '100.00', '2016-08-07 20:58:34'),
(1408, 3, 7, 0, '0.00', '2016-08-07 20:58:34'),
(1409, 3, 12, -1, '-100.00', '2016-08-07 20:58:34'),
(1410, 3, 16, -2, '-200.00', '2016-08-07 20:58:34'),
(1411, 3, 17, -3, '-300.00', '2016-08-07 20:58:34'),
(1412, 3, 18, 5, '500.00', '2016-08-07 20:59:15'),
(1413, 3, 6, 4, '400.00', '2016-08-07 20:59:15'),
(1414, 3, 8, 3, '300.00', '2016-08-07 20:59:15'),
(1415, 3, 4, 2, '200.00', '2016-08-07 20:59:15'),
(1416, 3, 5, 1, '100.00', '2016-08-07 20:59:15'),
(1417, 3, 7, 0, '0.00', '2016-08-07 20:59:15'),
(1418, 3, 12, -1, '-100.00', '2016-08-07 20:59:15'),
(1419, 3, 16, -2, '-200.00', '2016-08-07 20:59:15'),
(1420, 3, 17, -3, '-300.00', '2016-08-07 20:59:15'),
(1421, 3, 18, 5, '500.00', '2016-08-07 21:00:44'),
(1422, 3, 6, 4, '400.00', '2016-08-07 21:00:44'),
(1423, 3, 8, 3, '300.00', '2016-08-07 21:00:44'),
(1424, 3, 4, 2, '200.00', '2016-08-07 21:00:44'),
(1425, 3, 5, 1, '100.00', '2016-08-07 21:00:44'),
(1426, 3, 7, 0, '0.00', '2016-08-07 21:00:44'),
(1427, 3, 12, -1, '-100.00', '2016-08-07 21:00:44'),
(1428, 3, 16, -2, '-200.00', '2016-08-07 21:00:45'),
(1429, 3, 17, -3, '-300.00', '2016-08-07 21:00:45'),
(1430, 3, 18, 5, '500.00', '2016-08-07 21:04:40'),
(1431, 3, 6, 4, '400.00', '2016-08-07 21:04:40'),
(1432, 3, 8, 3, '300.00', '2016-08-07 21:04:40'),
(1433, 3, 4, 2, '200.00', '2016-08-07 21:04:40'),
(1434, 3, 5, 1, '100.00', '2016-08-07 21:04:40'),
(1435, 3, 7, 0, '0.00', '2016-08-07 21:04:40'),
(1436, 3, 12, -1, '-100.00', '2016-08-07 21:04:40'),
(1437, 3, 16, -2, '-200.00', '2016-08-07 21:04:40'),
(1438, 3, 17, -3, '-300.00', '2016-08-07 21:04:40'),
(1439, 3, 18, 5, '500.00', '2016-08-07 21:05:24'),
(1440, 3, 6, 4, '400.00', '2016-08-07 21:05:24'),
(1441, 3, 8, 3, '300.00', '2016-08-07 21:05:24'),
(1442, 3, 4, 2, '200.00', '2016-08-07 21:05:24'),
(1443, 3, 5, 1, '100.00', '2016-08-07 21:05:24'),
(1444, 3, 7, 0, '0.00', '2016-08-07 21:05:24'),
(1445, 3, 12, -1, '-100.00', '2016-08-07 21:05:24'),
(1446, 3, 16, -2, '-200.00', '2016-08-07 21:05:24'),
(1447, 3, 17, -3, '-300.00', '2016-08-07 21:05:24'),
(1448, 3, 18, 5, '500.00', '2016-08-07 21:07:32'),
(1449, 3, 6, 4, '400.00', '2016-08-07 21:07:32'),
(1450, 3, 8, 3, '300.00', '2016-08-07 21:07:32'),
(1451, 3, 4, 2, '200.00', '2016-08-07 21:07:32'),
(1452, 3, 5, 1, '100.00', '2016-08-07 21:07:32'),
(1453, 3, 7, 0, '0.00', '2016-08-07 21:07:32'),
(1454, 3, 12, -1, '-100.00', '2016-08-07 21:07:32'),
(1455, 3, 16, -2, '-200.00', '2016-08-07 21:07:32'),
(1456, 3, 17, -3, '-300.00', '2016-08-07 21:07:32'),
(1457, 3, 18, 5, '500.00', '2016-08-07 21:08:22'),
(1458, 3, 6, 4, '400.00', '2016-08-07 21:08:22'),
(1459, 3, 8, 3, '300.00', '2016-08-07 21:08:22'),
(1460, 3, 4, 2, '200.00', '2016-08-07 21:08:22'),
(1461, 3, 5, 1, '100.00', '2016-08-07 21:08:22'),
(1462, 3, 7, 0, '0.00', '2016-08-07 21:08:22'),
(1463, 3, 12, -1, '-100.00', '2016-08-07 21:08:22'),
(1464, 3, 16, -2, '-200.00', '2016-08-07 21:08:22'),
(1465, 3, 17, -3, '-300.00', '2016-08-07 21:08:22'),
(1466, 3, 18, 5, '500.00', '2016-08-07 21:08:24'),
(1467, 3, 6, 4, '400.00', '2016-08-07 21:08:24'),
(1468, 3, 8, 3, '300.00', '2016-08-07 21:08:24'),
(1469, 3, 4, 2, '200.00', '2016-08-07 21:08:24'),
(1470, 3, 5, 1, '100.00', '2016-08-07 21:08:24'),
(1471, 3, 7, 0, '0.00', '2016-08-07 21:08:24'),
(1472, 3, 12, -1, '-100.00', '2016-08-07 21:08:24'),
(1473, 3, 16, -2, '-200.00', '2016-08-07 21:08:24'),
(1474, 3, 17, -3, '-300.00', '2016-08-07 21:08:24'),
(1475, 3, 18, 5, '500.00', '2016-08-07 21:12:11'),
(1476, 3, 6, 4, '400.00', '2016-08-07 21:12:11'),
(1477, 3, 8, 3, '300.00', '2016-08-07 21:12:11'),
(1478, 3, 4, 2, '200.00', '2016-08-07 21:12:11'),
(1479, 3, 5, 1, '100.00', '2016-08-07 21:12:11'),
(1480, 3, 7, 0, '0.00', '2016-08-07 21:12:11'),
(1481, 3, 12, -1, '-100.00', '2016-08-07 21:12:11'),
(1482, 3, 16, -2, '-200.00', '2016-08-07 21:12:11'),
(1483, 3, 17, -3, '-300.00', '2016-08-07 21:12:11'),
(1484, 3, 18, 5, '500.00', '2016-08-07 21:15:13'),
(1485, 3, 6, 4, '400.00', '2016-08-07 21:15:13'),
(1486, 3, 8, 3, '300.00', '2016-08-07 21:15:13'),
(1487, 3, 4, 2, '200.00', '2016-08-07 21:15:13'),
(1488, 3, 5, 1, '100.00', '2016-08-07 21:15:13'),
(1489, 3, 7, 0, '0.00', '2016-08-07 21:15:13'),
(1490, 3, 12, -1, '-100.00', '2016-08-07 21:15:13'),
(1491, 3, 16, -2, '-200.00', '2016-08-07 21:15:13'),
(1492, 3, 17, -3, '-300.00', '2016-08-07 21:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `pet_colors`
--

CREATE TABLE IF NOT EXISTS `pet_colors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) COMMENT 'id'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pet_colors`
--

INSERT INTO `pet_colors` (`id`, `name`, `filename`, `created`, `modified`) VALUES
(2, 'White', 'c8350f4ebcdb12f9e31bb9813d5be009.jpg', '2015-06-16 20:01:07', '2015-06-16 20:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE IF NOT EXISTS `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`) VALUES
(1, 'Pet'),
(2, 'Background Image'),
(3, 'Employers License'),
(4, 'Breeding Ribbon'),
(5, 'Retirement Medal'),
(6, 'Kennel Spaces'),
(7, 'Energy Bones'),
(8, 'Game Fund');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `breed_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `pet_type` enum('Dog','Bitch') DEFAULT NULL,
  `cost` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `breed_id`, `product_id`, `pet_type`, `cost`, `image`, `color`, `description`, `added_date`, `updated_date`) VALUES
(6, 11, 1, 'Dog', 300, NULL, 'Black and Tan', '<p>\r\n	test</p>\r\n', '2015-07-03 18:10:18', '2015-07-04 17:52:33'),
(7, NULL, 2, NULL, NULL, 'ae3824c93a4c5924babbb1edd66aec10.jpg', NULL, '<p>\r\n	Background Img</p>\r\n', '2015-07-04 19:13:20', '2015-07-05 20:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `shop_background_images`
--

CREATE TABLE IF NOT EXISTS `shop_background_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shop_background_images`
--

INSERT INTO `shop_background_images` (`id`, `product_id`, `title`, `cost`, `image`, `description`, `added_date`, `updated_date`) VALUES
(4, 2, 'Midnight', '500.00', '9f68b4b12571ec4688983cf26a0bbe73.jpg', '', '2015-07-22 20:41:57', '2016-04-19 15:16:13'),
(5, 2, 'Purple Passion', '500.00', '19773dce9c27e5f3816ce9bbe589e4b2.jpg', '', '2015-07-22 20:43:56', '2016-04-19 15:16:02'),
(6, 2, 'Zesty Teal', '500.00', 'a16b3025401dc4ec8e1388bb8f9ac99f.jpg', '', '2015-07-22 20:44:44', '2016-04-19 15:15:55'),
(7, 2, 'Grassy Field', '500.00', 'f93866752c648d1cfa5dfe777b27f02f.png', '', '2015-07-23 20:24:56', '2016-04-19 15:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `shop_breeding_ribbons`
--

CREATE TABLE IF NOT EXISTS `shop_breeding_ribbons` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `game_cash` varchar(50) DEFAULT NULL,
  `credits_to_buy` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop_breeding_ribbons`
--

INSERT INTO `shop_breeding_ribbons` (`id`, `product_id`, `title`, `game_cash`, `credits_to_buy`, `image`, `is_active`, `added_date`) VALUES
(2, 4, 'Breeding Ribbon', '2000', '4', NULL, 0, '2016-09-19 22:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `shop_employer_licences`
--

CREATE TABLE IF NOT EXISTS `shop_employer_licences` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `validity` varchar(50) DEFAULT NULL,
  `game_cash` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `credits_to_buy` varchar(50) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shop_employer_licences`
--

INSERT INTO `shop_employer_licences` (`id`, `product_id`, `title`, `validity`, `game_cash`, `image`, `credits_to_buy`, `added_date`) VALUES
(6, 3, 'Employers License', '30days', '1500', NULL, '3', '2016-09-19 22:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `shop_energy_bones`
--

CREATE TABLE IF NOT EXISTS `shop_energy_bones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop_energy_bones`
--

INSERT INTO `shop_energy_bones` (`id`, `product_id`, `title`, `cost`, `description`, `image`, `added_date`) VALUES
(5, 7, 'Energy Bones', 1000, '', NULL, '2016-09-19 22:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `shop_kennel_spaces`
--

CREATE TABLE IF NOT EXISTS `shop_kennel_spaces` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `spaces` varchar(255) DEFAULT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shop_kennel_spaces`
--

INSERT INTO `shop_kennel_spaces` (`id`, `product_id`, `title`, `cost`, `spaces`, `description`, `added_date`) VALUES
(6, 6, 'Kennel Spaces', 1200, '1 Space', '', '2016-09-19 22:06:06'),
(7, 6, 'Kennel Spaces', 2100, '2 Spaces', '', '2016-09-19 22:06:52'),
(8, 6, 'Kennel Spaces', 7000, '5 Spaces', '', '2016-09-19 22:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `shop_pets`
--

CREATE TABLE IF NOT EXISTS `shop_pets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `breed_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `cost` bigint(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `shop_pets`
--

INSERT INTO `shop_pets` (`id`, `breed_id`, `product_id`, `cost`, `color`, `description`, `added_date`, `updated_date`) VALUES
(17, 64, 1, 1200, 'Black and Rust', '', '2016-09-19 20:05:29', NULL),
(18, 64, 1, 1200, 'Red and Rust', '', '2016-09-19 20:06:10', NULL),
(19, 66, 1, 1000, 'Black and Tan', '', '2016-09-19 20:06:48', NULL),
(20, 66, 1, 1000, 'Black and Red', '', '2016-09-19 20:07:26', NULL),
(21, 69, 1, 900, 'Black and Tan', '', '2016-09-19 20:13:19', NULL),
(22, 70, 1, 1500, 'Fawn', '', '2016-09-19 20:14:00', NULL),
(24, 68, 1, 600, 'Black White', '', '2016-09-19 20:43:34', NULL),
(25, 71, 1, 1200, 'Black Tan', '', '2016-09-19 20:44:16', NULL),
(26, 72, 1, 800, 'Black and Tan', '', '2016-09-19 20:44:54', NULL),
(27, 73, 1, 1300, 'White', '', '2016-09-19 20:45:51', NULL),
(28, 74, 1, 1800, 'Red Tan', '', '2016-09-19 20:46:43', NULL),
(29, 74, 1, 1800, 'Blue White Tan', '', '2016-09-19 20:47:30', NULL),
(30, 75, 1, 1200, 'Red', '', '2016-09-19 20:49:25', NULL),
(31, 75, 1, 1200, 'Fawn', '', '2016-09-19 20:49:49', NULL),
(32, 75, 1, 1100, 'Black', '', '2016-09-19 20:50:17', NULL),
(33, 76, 1, 1000, 'Black', '', '2016-09-19 20:51:03', NULL),
(34, 77, 1, 2000, 'Black', '', '2016-09-19 20:51:48', NULL),
(35, 77, 1, 2000, 'White', '', '2016-09-19 20:52:14', NULL),
(36, 78, 1, 1200, 'Black', '', '2016-09-19 20:52:50', NULL),
(37, 79, 1, 2500, 'Sable', '', '2016-09-19 20:53:21', NULL),
(38, 79, 1, 2500, 'Blue Roan', '', '2016-09-19 20:54:03', NULL),
(39, 80, 1, 2000, 'Black White and Tan', '', '2016-09-19 20:54:43', NULL),
(40, 81, 1, 2500, 'Brindle', '', '2016-09-19 20:55:22', NULL),
(41, 81, 1, 2000, 'Black', '', '2016-09-19 20:55:48', NULL),
(42, 82, 1, 2600, 'Dark Brown', '', '2016-09-19 20:56:33', NULL),
(43, 83, 1, 1400, 'Light Wheaten', '', '2016-09-19 20:57:09', NULL),
(44, 84, 1, 3000, 'Brown', '', '2016-09-19 20:57:54', NULL),
(45, 85, 1, 500, 'White', '', '2016-09-19 20:58:32', NULL),
(46, 86, 1, 2200, 'White', '', '2016-09-19 20:58:59', NULL),
(47, 86, 1, 100, 'Fawn White', '', '2016-12-29 19:30:41', NULL),
(48, 86, 1, 80, 'Brindle ', '', '2016-12-29 19:31:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_retirement_medals`
--

CREATE TABLE IF NOT EXISTS `shop_retirement_medals` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `game_cash` varchar(50) DEFAULT NULL,
  `credits_to_buy` varchar(50) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_retirement_medals`
--

INSERT INTO `shop_retirement_medals` (`id`, `product_id`, `title`, `game_cash`, `credits_to_buy`, `expiration_date`, `image`, `is_active`, `added_date`) VALUES
(3, 5, 'Retirement Medal', '1000', '1', '2016-09-28 00:00:00', NULL, 0, '2016-09-19 22:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `show_type` varchar(50) DEFAULT NULL,
  `breed_id` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `entry_fees` bigint(20) DEFAULT NULL,
  `bonus_payouts` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending 1=started 2=completed',
  `remarks` text,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `title`, `show_type`, `breed_id`, `start_date`, `end_date`, `description`, `image`, `entry_fees`, `bonus_payouts`, `status`, `remarks`, `added_date`) VALUES
(13, '1', 'Conformation', '64', '2017-01-23 12:49:56', '2017-01-25 12:49:31', '', NULL, 1, '1', 0, 'Results Generated', '2016-10-13 08:50:30'),
(14, '2', 'Conformation', '64', '2016-10-14 12:50:26', '2016-10-15 12:50:26', '', NULL, 1, '1', 2, 'Results Generated', '2016-10-13 08:50:55'),
(15, '1', 'Agility', '64', '2016-10-14 12:50:52', '2016-10-15 12:50:52', '', NULL, 1, '1', 2, 'Results Generated', '2016-10-13 08:51:24'),
(16, '3', 'Rush', '64', '2016-10-14 12:52:01', '2016-10-15 12:52:01', '', NULL, 3, '3', 2, 'Results Generated', '2016-10-13 08:52:47'),
(17, '3', 'Obedience', '64', '2016-10-14 12:52:49', '2016-10-15 12:52:49', '', NULL, 3, '33', 2, 'Results Generated', '2016-10-13 08:53:30'),
(18, '44', 'Conformation', '64', '2016-10-15 12:53:28', '2016-10-15 06:53:28', '', NULL, 4, '4', 2, 'Results Generated', '2016-10-13 08:54:13'),
(19, 'fff', 'Conformation', '64', '2016-10-15 02:54:16', '2016-10-15 11:54:16', '', NULL, 10, '53', 2, 'Results Generated', '2016-10-13 08:55:06'),
(20, 'test', 'Conformation', '64', '2016-10-13 05:02:27', '2016-10-14 01:02:27', '', NULL, 1, '1', 2, 'Show cancelled due to single or no entry', '2016-10-13 09:03:17'),
(21, 'testing123', 'Conformation', '64', '2016-10-13 03:03:12', '2016-10-14 01:03:12', '', NULL, 10, '1', 2, 'Show cancelled due to single or no entry', '2016-10-13 09:04:00'),
(22, 'testeed', 'Conformation', '64', '2016-10-13 08:03:54', '2016-10-14 01:03:54', '', NULL, 1, '1', 2, 'Show cancelled due to single or no entry', '2016-10-13 09:04:40'),
(23, 'west', 'Conformation', '64', '2016-10-14 04:04:37', '2016-10-14 07:04:37', '', NULL, 10, '1', 2, 'Results Generated', '2016-10-13 09:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `show_entries`
--

CREATE TABLE IF NOT EXISTS `show_entries` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `show_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `game_breed_id` bigint(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `stat_sum` int(11) DEFAULT NULL,
  `points_awarded` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `show_entries`
--

INSERT INTO `show_entries` (`id`, `show_id`, `user_id`, `game_breed_id`, `age`, `category`, `stat_sum`, `points_awarded`, `position`, `remarks`, `date`) VALUES
(1, 13, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 08:56:34'),
(2, 13, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 08:56:46'),
(3, 13, 107, 11, 41, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 08:56:59'),
(4, 14, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 08:57:14'),
(5, 14, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 08:57:35'),
(6, 14, 107, 11, 41, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 08:57:48'),
(7, 15, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 08:58:33'),
(8, 15, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 08:58:47'),
(9, 16, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 08:59:01'),
(10, 16, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 08:59:20'),
(11, 16, 107, 11, 41, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 08:59:37'),
(12, 17, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 08:59:50'),
(13, 17, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 09:00:04'),
(14, 17, 107, 11, 41, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 09:00:17'),
(15, 18, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 09:00:33'),
(16, 18, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 09:00:49'),
(17, 18, 107, 11, 41, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 09:01:04'),
(18, 19, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 09:01:21'),
(19, 19, 107, 11, 41, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 09:01:34'),
(20, 19, 107, 2, 45, 'novice', NULL, 3, 3, '3rd place', '2016-10-13 09:01:47'),
(21, 23, 107, 1, 45, 'novice', NULL, 4, 1, '1st place', '2016-10-13 09:06:24'),
(22, 23, 107, 2, 45, 'novice', NULL, 2, 2, '2nd place', '2016-10-13 09:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `show_winners`
--

CREATE TABLE IF NOT EXISTS `show_winners` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `show_id` int(11) NOT NULL,
  `show_entry_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `show_winners`
--

INSERT INTO `show_winners` (`id`, `show_id`, `show_entry_id`, `title`, `created`) VALUES
(23, 13, 1, 'Best in Show', '2016-10-15 07:00:05'),
(24, 13, 2, 'Best of Breed', '2016-10-15 07:00:05'),
(25, 13, 3, 'Winning Dog', '2016-10-15 07:00:05'),
(26, 14, 4, 'Best in Show', '2016-10-15 07:00:05'),
(27, 14, 5, 'Best of Breed', '2016-10-15 07:00:05'),
(28, 14, 6, 'Winning Dog', '2016-10-15 07:00:05'),
(29, 15, 7, 'Best in Show', '2016-10-15 07:00:05'),
(30, 15, 8, 'Best of Breed', '2016-10-15 07:00:05'),
(31, 16, 9, 'Best in Show', '2016-10-15 07:00:05'),
(32, 16, 10, 'Best of Breed', '2016-10-15 07:00:05'),
(33, 16, 11, 'Winning Dog', '2016-10-15 07:00:05'),
(34, 17, 12, 'Best in Show', '2016-10-15 07:00:05'),
(35, 17, 13, 'Best of Breed', '2016-10-15 07:00:05'),
(36, 17, 14, 'Winning Dog', '2016-10-15 07:00:05'),
(43, 23, 21, 'Best in Show', '2016-10-15 07:00:05'),
(44, 23, 22, 'Best of Breed', '2016-10-15 07:00:05'),
(45, 18, 15, 'Best in Show', '2016-10-16 07:00:05'),
(46, 18, 16, 'Best of Breed', '2016-10-16 07:00:05'),
(47, 18, 17, 'Winning Dog', '2016-10-16 07:00:05'),
(48, 19, 18, 'Best in Show', '2016-10-16 07:00:05'),
(49, 19, 19, 'Best of Breed', '2016-10-16 07:00:05'),
(50, 19, 20, 'Winning Bitch', '2016-10-16 07:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_log`
--

CREATE TABLE IF NOT EXISTS `trainer_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text,
  `training_fields` text,
  `applied_job_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `trainer_log`
--

INSERT INTO `trainer_log` (`id`, `category`, `training_fields`, `applied_job_id`, `created_at`) VALUES
(1, 'confirmation', '{"id":"361","trainer_id":"79","game_breed_id":"83","category":"confirmation","stacking":"22","gait":"19","table_exam":"13","free_stacking":"4","hand_stacking":"9","handling":"3","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 3, '0000-00-00 00:00:00'),
(2, 'confirmation', '{"id":"361","trainer_id":"79","game_breed_id":"83","category":"confirmation","stacking":"22","gait":"19","table_exam":"17","free_stacking":"4","hand_stacking":"9","handling":"3","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 3, '0000-00-00 00:00:00'),
(3, 'confirmation', '{"id":"361","trainer_id":"79","game_breed_id":"83","category":"confirmation","stacking":"41","gait":"19","table_exam":"17","free_stacking":"4","hand_stacking":"9","handling":"3","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 3, '0000-00-00 00:00:00'),
(4, 'confirmation', '{"id":"361","trainer_id":"79","game_breed_id":"83","category":"confirmation","stacking":"49","gait":"19","table_exam":"17","free_stacking":"4","hand_stacking":"9","handling":"3","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 3, '2016-08-23 07:00:00'),
(5, 'confirmation', '{"id":"361","trainer_id":"79","game_breed_id":"83","category":"confirmation","stacking":"49","gait":"22","table_exam":"17","free_stacking":"4","hand_stacking":"9","handling":"3","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 3, '0000-00-00 00:00:00'),
(6, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"6","gait":"2","table_exam":"0","free_stacking":"0","hand_stacking":"0","handling":"1","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-13 18:30:00'),
(7, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"6","gait":"2","table_exam":"10","free_stacking":"0","hand_stacking":"0","handling":"1","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-13 18:30:00'),
(8, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"6","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"0","handling":"1","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-13 18:30:00'),
(9, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"6","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"1","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-13 18:30:00'),
(10, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"6","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-13 18:30:00'),
(11, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"11","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-14 02:42:34'),
(12, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"14","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-14 02:42:48'),
(13, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"2","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-14 02:43:23'),
(14, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"8","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 1, '2017-01-14 02:44:48'),
(15, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"2","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-01-14 03:02:00'),
(16, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"11","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:07:15'),
(17, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"14","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:08:38'),
(18, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"23","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:08:45'),
(19, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"25","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:08:49'),
(20, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"35","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:08:54'),
(21, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"36","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:08:59'),
(22, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"39","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:03'),
(23, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"46","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:08'),
(24, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"49","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:13'),
(25, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"58","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:18'),
(26, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"60","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:23'),
(27, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"62","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:29'),
(28, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"67","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:35'),
(29, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"72","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:43'),
(30, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"74","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:49'),
(31, 'confirmation', '{"id":"1","trainer_id":"107","game_breed_id":"1","category":"confirmation","stacking":"19","gait":"11","table_exam":"10","free_stacking":"8","hand_stacking":"2","handling":"75","heal_on_lease":"0","figure_eight":"0","stand_for_exam":"0","recall":"0","long_sit":"0","drop_on_recall":"0","retrieve_over_high_jump":"0","broad_jump":"0","single_exercise":"0","scene_descrimination_1":"0","scene_descrimination_2":"0","direct_retrieve":"0","moving_stand_and_exam":"0","direct_jump":"0","dog_walk":"0","a_frame":"0","seesaw":"0","pause_table":"0","weave_poles":"0","open_tunnel":"0","closed_tunnel":"0","bar_jump":"0","panel_jump":"0","broad_jump_agility":"0","sit":"0","down":"0","right_turn":"0","left_turn":"0","about_u_turn":"0","270_right":"0","270_left":"0","360_right":"0","360_left":"0","call_front_finish_right_forward":"0","call_front_finish_left_forward":"0","call_front_finish_right_halt":"0","call_front_finish_left_halt":"0","slow_pace":"0","fast_pace":"0","normal_pace":"0","moving_side_step_right":"0","spiral_right_dog_outside":"0","spiral_left_dog_inside":"0","straight_figure_eight_weave":"0","serpentine_weave":"0","1_step_front":"0","2_step_front":"0","3_step_front":"0","1_step_back":"0","2_step_back":"0","3_step_back":"0","halt":"0","down_and_stop":"0","walk_around_dog":"0","pivat_right":"0","heal":"0","stand":"0","stand_sit":"0","stand_down":"0","call_rally":"0","jump":"0"}', 2, '2017-02-04 10:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_user_id` int(11) NOT NULL,
  `type` enum('credit','fund') NOT NULL,
  `description` varchar(255) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto increment field',
  `first_name` varchar(100) NOT NULL COMMENT 'This field is used to save the first name of user',
  `last_name` varchar(100) NOT NULL COMMENT 'This field is used to save the last name of user',
  `other_name` varchar(255) DEFAULT NULL COMMENT 'field used for affiliate name',
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL COMMENT 'This field is used to save the email address of user',
  `password` varchar(100) NOT NULL COMMENT 'This field is used to save the password of user',
  `role` enum('user','admin') NOT NULL DEFAULT 'user' COMMENT 'This field is used to save the role type of user',
  `user_type` varchar(10) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL COMMENT 'User profile image',
  `funds` bigint(20) DEFAULT NULL,
  `credits` bigint(20) DEFAULT NULL,
  `kennel_name` varchar(255) DEFAULT NULL,
  `kennel_xp` varchar(50) DEFAULT NULL,
  `training_xp` smallint(6) NOT NULL DEFAULT '0',
  `handling_xp` smallint(6) NOT NULL DEFAULT '0',
  `kennel_spaces` varchar(50) DEFAULT NULL,
  `kennel_desc` text,
  `kennel_banner` varchar(255) DEFAULT NULL,
  `vet_banner` varchar(255) DEFAULT NULL,
  `shop_banner` varchar(255) DEFAULT NULL,
  `energy_bones` int(11) DEFAULT NULL,
  `profile_description` text,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 : inactive, 1: active , 2: deleted',
  `verification_code` varchar(100) NOT NULL DEFAULT 'NULL',
  `created` datetime NOT NULL COMMENT 'This field is used to save the creation date of user registration',
  `modified` datetime NOT NULL COMMENT 'This field is used to save the modification date of user profile',
  `last_activity` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='This table is used to save the record of users' AUTO_INCREMENT=112 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `other_name`, `username`, `email`, `password`, `role`, `user_type`, `gender`, `date_of_birth`, `mobile_number`, `photo`, `funds`, `credits`, `kennel_name`, `kennel_xp`, `training_xp`, `handling_xp`, `kennel_spaces`, `kennel_desc`, `kennel_banner`, `vet_banner`, `shop_banner`, `energy_bones`, `profile_description`, `status`, `verification_code`, `created`, `modified`, `last_activity`) VALUES
(38, 'Admin', 'admin', NULL, NULL, 'purgitoryfallen@gmail.com', 'fceeb5c84e1de10ab39270f84a1f919120db2609', 'admin', '', NULL, NULL, '4324324', 'images1.jpeg', 50, 1007, NULL, '0', 0, 0, '0', NULL, NULL, '8d1a401c71930a3f25ed38474a244ab6.jpg', '715061c57b810d81cbc2feb83d812d61.jpg', NULL, NULL, 1, '557b2162-e35c-412e-87bb-111417a9f72b', '2013-08-20 09:08:26', '2016-09-19 20:01:20', NULL),
(107, 'Admin', 'Admin', NULL, 'Admin', 'kiara1cat@gmail.com', 'fceeb5c84e1de10ab39270f84a1f919120db2609', 'user', '', NULL, NULL, '', '72153d7e6a0fa61b307e392b2c36c53f.png', 4339, 297, 'Best of Pedigree', '3200', 0, 0, '7', '', '78322d476dd1759129baaa3e0f340bb2.jpg', NULL, '', NULL, NULL, 1, 'NULL', '2016-09-20 02:11:58', '2017-03-21 19:14:49', '2017-03-21 19:14:49'),
(108, 'Eric', 'S', NULL, 'elswanigan', 'info@elswanigantech.com', '2cf090b847964b45e12bbfa37c932374911a9e5e', 'user', '', NULL, NULL, '', '', 2500, 5000, 'elstech', '2500', 0, 0, '5', NULL, NULL, NULL, '', NULL, NULL, 1, 'NULL', '2016-09-20 12:00:32', '2016-09-20 12:00:32', NULL),
(109, 'Vivek', 'sh', NULL, 'vb123', 'vb@yopmail.com', 'fceeb5c84e1de10ab39270f84a1f919120db2609', 'user', '', NULL, NULL, '123456789', '', 5201, 5000, 'nu', '2500', 0, 0, '5', NULL, NULL, NULL, '', 5, NULL, 1, 'NULL', '2016-09-22 06:12:39', '2017-03-12 19:12:50', '2017-02-04 11:11:29'),
(110, 'vivek', 'sf', NULL, 'vbn123', 'vbn@yopmail.com', '3dbacc0601b83d7d7b25df81f40bfae5cb55140e', 'user', '', NULL, NULL, '123456789', '', 2500, 5000, 'kl', '2500', 0, 0, '5', NULL, NULL, NULL, '', NULL, NULL, 1, 'NULL', '2016-09-22 06:14:31', '2016-09-22 06:14:31', NULL),
(111, 'Vivek', 'sh', NULL, 'vs1', 'vs1@yopmail.com', '2c6bb98356b741753d013eaca7365c14916f9afd', 'user', NULL, NULL, NULL, '123456789', NULL, 2500, 5000, 'vs1', '2500', 0, 0, '5', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'NULL', '2017-03-22 17:50:06', '2017-03-22 17:50:12', '2017-03-22 17:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `users_discussions`
--

CREATE TABLE IF NOT EXISTS `users_discussions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `received_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1=>view,2=>rec_del,3=>sender_del',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users_discussions`
--

INSERT INTO `users_discussions` (`id`, `discussion_id`, `sender_id`, `received_id`, `status`, `created`, `modified`) VALUES
(1, 1, 86, 56, 1, '2016-03-10 15:02:43', '2016-03-10 10:41:17'),
(2, 2, 56, 86, 1, '2016-03-10 15:10:39', '2016-03-10 10:41:10'),
(16, 3, 86, 55, 0, '2016-03-10 16:21:04', '2016-03-10 10:51:04'),
(17, 4, 60, 86, 1, '2016-03-10 16:21:30', '2016-03-10 16:24:30'),
(18, 5, 86, 55, 1, '2016-03-10 16:31:18', '2016-03-11 02:45:46'),
(19, 6, 79, 90, 1, '2016-03-10 16:35:19', '2016-03-16 17:17:22'),
(20, 7, 62, 86, 0, '2016-03-11 02:46:27', '2016-03-11 02:47:00'),
(21, 8, 90, 79, 1, '2016-03-16 17:18:13', '2016-03-16 20:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_achievements`
--

CREATE TABLE IF NOT EXISTS `user_achievements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `achievement_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_achievements`
--

INSERT INTO `user_achievements` (`id`, `user_id`, `achievement_id`) VALUES
(1, 107, 60),
(2, 107, 61);

-- --------------------------------------------------------

--
-- Table structure for table `user_awards`
--

CREATE TABLE IF NOT EXISTS `user_awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `award_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_bg_images`
--

CREATE TABLE IF NOT EXISTS `user_bg_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `background_img_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  `dog_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user_bg_images`
--

INSERT INTO `user_bg_images` (`id`, `user_id`, `background_img_id`, `image`, `cost`, `purchased_date`, `dog_name`) VALUES
(1, 68, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 300, '2015-07-23 17:53:39', ''),
(2, 68, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 300, '2015-07-30 20:38:41', ''),
(3, 61, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 300, '2015-08-05 22:18:12', ''),
(4, 68, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 300, '2015-08-10 19:23:29', ''),
(5, 61, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 300, '2015-08-26 17:17:20', ''),
(6, 61, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 300, '2015-08-31 17:48:36', ''),
(7, 79, NULL, NULL, NULL, '2016-04-23 11:47:01', ''),
(8, NULL, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-04-23 15:32:18', '456'),
(9, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-04-23 15:33:53', ''),
(10, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-04-23 15:34:14', '456'),
(11, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-04-23 15:36:37', 'dog1'),
(12, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-04-23 15:39:38', 'Eric Doggy 8'),
(13, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-05-03 14:24:35', 'Demo'),
(14, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-05-07 16:12:54', 'Eric Dog 3'),
(15, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-05-07 16:14:38', ''),
(16, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-05-07 16:44:16', 'Beagle'),
(17, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-07-02 22:26:30', '1'),
(18, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-07-27 16:01:52', 'rt5t'),
(19, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-07-29 00:38:16', '1'),
(20, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-11 15:20:25', 'John'),
(21, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-12 15:30:57', 'John'),
(22, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-13 14:34:45', 'dog1'),
(23, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-14 23:04:04', '54'),
(24, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-14 23:08:30', 'John'),
(25, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-15 13:40:48', '1'),
(26, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-19 14:49:06', 'Eric Doggy 8'),
(27, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-19 20:55:56', 'Eric Doggy 8'),
(28, 79, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-08-19 20:59:24', 'Eric Doggy 8'),
(29, 79, 5, '19773dce9c27e5f3816ce9bbe589e4b2.jpg', 500, '2016-08-19 21:49:23', 'Eric Doggy 8'),
(30, 79, 6, 'a16b3025401dc4ec8e1388bb8f9ac99f.jpg', 500, '2016-08-20 17:51:47', 'John'),
(31, 79, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-08-20 19:32:01', 'QueenB'),
(32, 79, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 500, '2016-08-31 16:29:48', '1'),
(33, 90, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 500, '2016-09-01 15:35:45', 'Lady 9-1-16'),
(34, 106, 8, '047ad7d03b4a0e66c3d49bfe6885263f.jpg', 500, '2016-09-04 01:55:20', 'Dark test'),
(35, 106, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 500, '2016-09-04 01:55:30', 'Dark test'),
(36, 107, 7, 'f93866752c648d1cfa5dfe777b27f02f.png', 500, '2016-09-20 02:29:39', 'Wicked'),
(37, 107, 4, '9f68b4b12571ec4688983cf26a0bbe73.jpg', 500, '2016-09-20 02:29:47', 'Order');

-- --------------------------------------------------------

--
-- Table structure for table `user_breeding_ribbons`
--

CREATE TABLE IF NOT EXISTS `user_breeding_ribbons` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `breeding_ribbon_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `game_breed_id` bigint(20) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  `dog_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `user_breeding_ribbons`
--

INSERT INTO `user_breeding_ribbons` (`id`, `breeding_ribbon_id`, `user_id`, `game_breed_id`, `cost`, `purchased_date`, `dog_name`) VALUES
(1, NULL, 61, 5, NULL, '2015-08-10 20:54:22', ''),
(2, NULL, 61, 5, NULL, '2015-08-10 20:54:54', ''),
(3, NULL, 79, 54, NULL, '2016-04-22 19:25:24', ''),
(4, NULL, 79, 54, NULL, '2016-04-22 19:26:06', ''),
(5, NULL, 79, 54, NULL, '2016-04-22 19:27:20', ''),
(6, NULL, 79, 54, NULL, '2016-04-22 19:28:47', ''),
(7, NULL, 79, 54, NULL, '2016-04-22 19:36:55', ''),
(8, NULL, 79, 54, NULL, '2016-04-22 19:41:06', ''),
(9, 1, 79, 54, 10, '2016-04-22 19:44:33', ''),
(10, 1, 79, 54, 10, '2016-04-22 19:45:28', ''),
(11, 1, 79, 54, 10, '2016-04-22 19:48:03', ''),
(12, 1, 79, 54, 10, '2016-04-22 19:48:35', ''),
(13, 1, 79, 54, 10, '2016-04-22 19:49:02', ''),
(14, 1, 79, 54, 10, '2016-04-22 19:59:04', ''),
(15, 1, 79, 54, 10, '2016-04-22 20:10:25', ''),
(16, 1, 79, 54, 10, '2016-04-22 20:14:50', ''),
(17, 1, 79, 54, 10, '2016-04-23 07:11:11', ''),
(28, NULL, 79, NULL, 10, '2016-06-15 17:39:46', '321312'),
(29, NULL, 79, NULL, 10, '2016-06-16 13:46:12', 'rt5t'),
(30, NULL, 79, NULL, 10, '2016-06-16 13:46:31', '321312'),
(31, NULL, 79, NULL, 10, '2016-06-16 13:52:48', '321312'),
(32, NULL, 79, NULL, 10, '2016-06-16 14:45:55', '54'),
(33, NULL, 79, NULL, 10, '2016-06-16 14:49:00', '85'),
(34, NULL, 79, NULL, 10, '2016-06-16 15:40:23', '77'),
(35, NULL, 79, NULL, 10, '2016-06-16 15:44:45', 'rt5t'),
(36, NULL, 79, NULL, 10, '2016-06-16 15:45:09', 'rt5t'),
(37, NULL, 79, NULL, 10, '2016-06-16 15:47:54', '54'),
(38, NULL, 79, NULL, 10, '2016-06-16 15:50:25', 'rt5t'),
(39, NULL, 79, NULL, 10, '2016-08-15 20:23:29', 'Eric Doggy 8'),
(40, NULL, 79, NULL, 10, '2016-08-15 20:28:28', '36'),
(41, NULL, 79, NULL, 10, '2016-08-31 16:55:36', 'Eric Doggy 8'),
(42, NULL, 79, NULL, 10, '2016-09-06 23:12:12', 'Test Dog 1234'),
(43, NULL, 79, NULL, 10, '2016-09-06 23:31:53', 'QueenB'),
(44, NULL, 90, NULL, 10, '2016-09-06 23:38:12', 'Lady 9-1-16');

-- --------------------------------------------------------

--
-- Table structure for table `user_energy_bones`
--

CREATE TABLE IF NOT EXISTS `user_energy_bones` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `energy_bone_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  `dog_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user_energy_bones`
--

INSERT INTO `user_energy_bones` (`id`, `energy_bone_id`, `user_id`, `cost`, `purchased_date`, `dog_name`) VALUES
(1, 3, 67, 500, '2015-07-20 18:00:11', ''),
(2, NULL, 69, NULL, '2015-07-24 18:25:08', ''),
(3, NULL, 69, NULL, '2015-07-24 18:25:21', ''),
(4, 4, 69, 300, '2015-07-27 16:04:18', ''),
(5, 4, 61, 300, '2015-07-27 22:23:39', ''),
(6, 4, 61, 300, '2015-08-07 22:35:40', ''),
(7, NULL, 61, NULL, '2015-08-10 20:46:48', ''),
(8, 4, 61, 300, '2015-08-10 20:47:06', ''),
(9, NULL, 61, NULL, '2015-08-10 20:47:17', ''),
(10, 3, 79, 500, '2016-02-06 18:54:05', ''),
(11, 3, 79, 500, '2016-02-13 06:57:47', ''),
(12, 3, 79, 500, '2016-02-15 18:21:42', ''),
(13, 3, 86, 500, '2016-02-18 15:05:17', ''),
(14, 3, 86, 500, '2016-02-18 15:05:18', ''),
(15, 4, 79, 300, '2016-04-05 19:42:58', ''),
(16, 4, 79, 300, '2016-04-05 19:43:19', ''),
(17, 4, 79, 300, '2016-04-15 20:15:39', ''),
(18, 3, 79, 500, '2016-04-22 19:08:45', ''),
(19, 3, 79, 500, '2016-04-22 19:22:30', ''),
(20, 3, 79, 500, '2016-04-22 19:28:05', ''),
(21, 3, 79, 500, '2016-05-06 19:21:12', ''),
(22, 3, 79, 500, '2016-05-06 19:24:05', ''),
(23, 3, 79, 500, '2016-05-06 19:25:37', ''),
(24, 3, 79, 500, '2016-08-15 12:07:48', ''),
(25, 3, 79, 500, '2016-08-15 14:57:05', ''),
(26, 4, 79, 300, '2016-08-15 15:50:03', ''),
(27, 3, 79, 500, '2016-08-19 14:36:51', ''),
(28, 4, 79, 300, '2016-08-19 21:59:34', ''),
(29, 4, 79, 300, '2016-08-20 13:04:50', ''),
(30, 4, 79, 300, '2016-08-27 04:14:32', ''),
(31, 3, 79, 500, '2016-08-29 19:56:35', ''),
(32, 3, 79, 500, '2016-08-29 20:08:18', ''),
(33, 3, 79, 500, '2016-08-29 20:10:55', ''),
(34, 4, 79, 300, '2016-09-04 01:31:40', ''),
(35, 4, 79, 300, '2016-09-04 01:44:37', ''),
(36, 3, 79, 500, '2016-09-04 01:46:00', ''),
(37, 3, 79, 500, '2016-09-04 07:36:19', ''),
(38, 3, 90, 500, '2016-09-04 13:02:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_kennel_spaces`
--

CREATE TABLE IF NOT EXISTS `user_kennel_spaces` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kennel_space_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `spaces` varchar(50) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `dog_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_kennel_spaces`
--

INSERT INTO `user_kennel_spaces` (`id`, `kennel_space_id`, `user_id`, `spaces`, `cost`, `purchase_date`, `dog_name`) VALUES
(1, 3, 66, '1 Space', 200, '2015-07-19 12:12:58', ''),
(2, 3, 66, '1 Space', 200, '2015-07-19 12:23:00', ''),
(3, 3, 61, '1 Space', 200, '2015-08-10 20:51:33', ''),
(4, 3, 79, '1 Space', 200, '2016-03-31 22:33:37', ''),
(5, 4, 79, '2 Spaces', 300, '2016-04-22 18:05:30', 'testing'),
(6, 3, 79, '1 Space', 200, '2016-04-22 18:44:31', '1'),
(7, 3, 79, '1 Space', 200, '2016-04-22 18:46:45', '1'),
(8, NULL, 79, NULL, NULL, '2016-04-22 19:23:04', '1'),
(9, 4, 79, '2 Spaces', 300, '2016-04-22 19:24:29', '1'),
(10, 3, 79, '1 Space', 200, '2016-04-22 19:28:19', '1'),
(11, 4, 79, '2 Spaces', 300, '2016-08-20 14:45:38', ''),
(12, 5, 79, '5 Spaces', 10000, '2016-08-20 16:37:57', ''),
(13, 5, 79, '5 Spaces', 10000, '2016-08-20 16:39:03', ''),
(14, 5, 79, '5 Spaces', 10000, '2016-08-20 16:39:13', ''),
(15, 3, 79, '1 Space', 200, '2016-08-20 17:56:17', ''),
(16, 5, 79, '5 Spaces', 10000, '2016-08-27 04:14:55', ''),
(17, 4, 79, '2 Spaces', 300, '2016-08-30 16:11:43', ''),
(18, 5, 79, '5 Spaces', 10000, '2016-08-30 16:12:33', ''),
(19, 5, 79, '5 Spaces', 10000, '2016-08-30 16:12:51', ''),
(20, 5, 79, '5 Spaces', 10000, '2016-08-30 16:14:50', ''),
(21, 5, 79, '5 Spaces', 10000, '2016-08-30 16:15:01', ''),
(22, 3, 79, '1 Space', 200, '2016-08-31 19:50:47', ''),
(23, 4, 90, '2 Spaces', 300, '2016-08-31 21:30:45', ''),
(24, 4, 90, '2 Spaces', 300, '2016-09-06 23:40:48', ''),
(25, 7, 107, '2 Spaces', 2100, '2016-09-20 02:28:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_licences`
--

CREATE TABLE IF NOT EXISTS `user_licences` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `employer_licence_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_licences`
--

INSERT INTO `user_licences` (`id`, `employer_licence_id`, `user_id`, `cost`, `purchased_date`) VALUES
(1, 3, 67, '400', '2015-07-20 18:09:16'),
(2, 3, 61, '400', '2015-08-10 20:53:00'),
(3, 3, 61, '400', '2015-08-10 20:53:18'),
(4, 5, 79, '1', '2016-06-30 06:04:25'),
(5, 3, 79, '400', '2016-07-26 00:38:45'),
(6, 3, 79, '400', '2016-08-15 14:57:18'),
(7, 5, 79, '1', '2016-08-15 15:47:52'),
(9, 3, 105, '400', '2016-08-23 04:18:40'),
(10, 6, 107, '3', '2016-09-20 02:28:40'),
(11, 6, 107, '3', '2016-12-27 17:51:22'),
(12, 6, 107, '3', '2017-03-15 16:49:38'),
(13, 6, 107, '3', '2017-03-15 16:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_retirement_medals`
--

CREATE TABLE IF NOT EXISTS `user_retirement_medals` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `retirement_medal_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  `dog_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_retirement_medals`
--

INSERT INTO `user_retirement_medals` (`id`, `retirement_medal_id`, `user_id`, `cost`, `purchased_date`, `dog_name`) VALUES
(1, 1, 68, 500, '2015-10-25 08:55:52', ''),
(2, 1, 61, 500, '2015-08-10 20:53:53', ''),
(3, 1, 79, 500, '2016-04-03 02:09:58', ''),
(4, 1, 79, 500, '2016-04-22 19:24:53', 'asd'),
(5, 1, 79, 500, '2016-04-22 19:27:53', '1'),
(6, 1, 79, 500, '2016-04-22 19:28:32', '1'),
(7, 1, 79, 500, '2016-08-15 15:48:22', 'Eric Doggy 7'),
(8, 1, 79, 500, '2016-08-19 22:12:21', '123'),
(9, 1, 79, 500, '2016-08-27 04:15:23', '36');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarians`
--

CREATE TABLE IF NOT EXISTS `veterinarians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `shots_checkups` int(11) NOT NULL,
  `b_locus_testing` int(11) NOT NULL DEFAULT '0',
  `d_locus_testing` int(11) NOT NULL DEFAULT '0',
  `e_locus_testing` int(11) NOT NULL DEFAULT '0',
  `s_locus_testing` int(11) NOT NULL DEFAULT '0',
  `health_testing` int(11) NOT NULL,
  `spay_neuter` int(11) NOT NULL,
  `groomer` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `veterinarians`
--

INSERT INTO `veterinarians` (`id`, `user_id`, `shots_checkups`, `b_locus_testing`, `d_locus_testing`, `e_locus_testing`, `s_locus_testing`, `health_testing`, `spay_neuter`, `groomer`, `created`) VALUES
(1, 107, 0, 0, 0, 0, 0, 1, 0, 0, '2016-09-29 14:11:00'),
(2, 107, 0, 0, 0, 0, 0, 0, 1, 0, '2017-01-21 09:22:28'),
(3, 107, 0, 0, 0, 0, 0, 0, 0, 1, '2017-01-21 09:59:16'),
(4, 107, 1, 0, 0, 0, 0, 0, 0, 0, '2017-03-16 00:14:54'),
(5, 107, 0, 1, 0, 0, 0, 0, 0, 0, '2017-03-16 00:15:23'),
(6, 107, 0, 0, 0, 0, 0, 0, 0, 1, '2017-03-16 00:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `vet_costs`
--

CREATE TABLE IF NOT EXISTS `vet_costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shots_checkups` int(11) NOT NULL,
  `DNA_testing` int(11) NOT NULL,
  `health_testing` int(11) NOT NULL,
  `spay_neuter` int(11) NOT NULL,
  `groomer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_product_types`
--

CREATE TABLE IF NOT EXISTS `_product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `_product_types`
--

INSERT INTO `_product_types` (`id`, `name`) VALUES
(1, 'Pet'),
(2, 'Background Image'),
(3, 'Employers License'),
(4, 'Breeding Ribbon'),
(5, 'Retirement Medal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
