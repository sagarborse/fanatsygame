-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2014 at 08:02 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fantasygame`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentsquad`
--

CREATE TABLE IF NOT EXISTS `currentsquad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `currentsquad`
--

INSERT INTO `currentsquad` (`id`, `player_id`, `user_id`) VALUES
(1, 10, 1),
(2, 7, 1),
(3, 9, 1),
(4, 17, 1),
(5, 15, 1),
(6, 21, 1),
(7, 3, 1),
(8, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fantasyteam`
--

CREATE TABLE IF NOT EXISTS `fantasyteam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fantasyteam`
--

INSERT INTO `fantasyteam` (`id`, `team_name`, `userid`) VALUES
(1, 'myteam', 1),
(2, 'sagar''s devil', 2),
(3, 'rushi''s man', 3);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` enum('batsmen','bowler','wicketkeeper','allrounder') NOT NULL,
  `price` int(11) NOT NULL,
  `t_id` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `type`, `price`, `t_id`) VALUES
(1, 'Dwayne Smith', 'allrounder', 85000, 1),
(2, 'Ravindra Jadeja', 'allrounder', 75000, 1),
(3, 'Glenn Maxwell', 'allrounder', 80000, 3),
(4, 'Yuvraj Singh', 'allrounder', 75000, 4),
(5, 'Virat Kohli', 'batsmen', 90000, 4),
(6, 'Michael Hussey', 'batsmen', 90000, 2),
(7, 'Rohit Sharma', 'batsmen', 80000, 2),
(8, 'David Miller', 'batsmen', 75000, 3),
(9, 'George Bailey', 'batsmen', 60000, 3),
(10, 'Mithun Manhas', 'batsmen', 65000, 1),
(11, 'Brendon McCullum', 'batsmen', 70000, 1),
(12, 'Varun Aaron', 'bowler', 65000, 4),
(13, 'Mitchell Starc', 'bowler', 70000, 4),
(14, 'Ishwar Pandey', 'bowler', 65000, 1),
(15, 'Mohit Sharma', 'bowler', 80000, 1),
(16, 'Lasith Malinga', 'bowler', 85000, 2),
(17, 'Harbhajan Singh', 'bowler', 75000, 2),
(18, 'Mitchell Johnson', 'bowler', 75000, 3),
(19, 'Lakshmipathy Balaji', 'bowler', 80000, 3),
(20, 'Wriddhiman Saha', 'wicketkeeper', 75000, 3),
(21, 'AB de Villiers', 'wicketkeeper', 80000, 4),
(22, 'Aditya Tare', 'wicketkeeper', 65000, 2),
(23, 'MS Dhoni', 'wicketkeeper', 85000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`) VALUES
(1, 'CSK'),
(2, 'MI'),
(3, 'KXIP'),
(4, 'RCB');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rahul', '123456'),
(2, 'sagar', '123456'),
(3, 'rushi', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
