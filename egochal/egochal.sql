-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 10:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egochal`
--

-- --------------------------------------------------------

--
-- Table structure for table `caster`
--

CREATE TABLE `caster` (
  `caster_alias` varchar(15) NOT NULL,
  `game_title` varchar(70) DEFAULT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `person_id` int(11) NOT NULL,
  `coach_team` varchar(30) NOT NULL,
  `coach_game` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_name` varchar(40) NOT NULL,
  `start_date` date NOT NULL,
  `venue` varchar(30) DEFAULT NULL,
  `format` enum('Qualifiers','Finals','Exhibition') DEFAULT NULL,
  `event_poster` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_name`, `start_date`, `venue`, `format`, `event_poster`) VALUES
('Atlanta Home Series', '2011-07-09', 'Migos Arena, ATL', 'Finals', ''),
('BYTE Invitational', '2020-12-20', 'Wembley, UK', 'Finals', 'BYTE Logo.jpg'),
('Lagos Home Series', '2012-03-11', 'Remote', 'Finals', ''),
('Living Legends', '2018-01-01', 'TDF Yard, GH', 'Finals', ''),
('London Home Series', '2021-03-11', 'Remote', 'Finals', 'london.jpg'),
('MTN Play2Win', '2019-08-10', 'National Theatre, GH', 'Finals', 'mtn.jpg'),
('New York Home Series', '2021-08-11', 'Times Square, NY', 'Finals', 'newyork.jpg'),
('Paris Home Series ', '2014-10-22', 'La Maison, PR', 'Finals', ''),
('PlayArena Momo', '2017-09-11', 'Remote', 'Exhibition', ''),
('Toronto Home Series', '2021-04-16', 'Remote', 'Qualifiers', 'toronto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_sponsor`
--

CREATE TABLE `event_sponsor` (
  `sponsor_id` int(11) NOT NULL,
  `event_name` varchar(40) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_sponsor`
--

INSERT INTO `event_sponsor` (`sponsor_id`, `event_name`, `start_date`) VALUES
(1, 'London Home Series', '2021-03-11'),
(1, 'MTN Play2Win', '2019-08-10'),
(1, 'Toronto Home Series', '2021-04-16'),
(2, 'London Home Series', '2021-03-11'),
(2, 'Toronto Home Series', '2021-04-16'),
(3, 'MTN Play2Win', '2019-08-10'),
(3, 'PlayArena Momo', '2017-09-11'),
(3, 'PlayArena Momo', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_title` varchar(70) NOT NULL,
  `developer` varchar(30) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `game_poster` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_title`, `developer`, `category`, `game_poster`) VALUES
('Call Of Duty: BOCW', 'Treyarch', 'FPS', 'bocw.jpg'),
('Call Of Duty: Warzone', 'Activision', 'BR', 'warzone.jpg'),
('FIFA 22', 'EA Sports', 'Sports', 'fifa22.jpg'),
('Fortnite', 'Epic Games', 'BR', 'fortnite.jpg'),
('League Of Legends', 'Riot Games', 'Strategy', 'lol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `game_team`
--

CREATE TABLE `game_team` (
  `team_name` varchar(30) NOT NULL,
  `game_title` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_team`
--

INSERT INTO `game_team` (`team_name`, `game_title`) VALUES
('Atlanta Faze', 'Call Of Duty: Warzone'),
('Atlanta Faze', 'Fortnite'),
('MoreBoy', 'Fortnite'),
('OFB', 'Fortnite'),
('Optic Chicago', 'Call Of Duty: BOCW'),
('Optic Chicago', 'Fortnite');

-- --------------------------------------------------------

--
-- Table structure for table `game_team_player`
--

CREATE TABLE `game_team_player` (
  `player_alias` varchar(15) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `game_title` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_team_player`
--

INSERT INTO `game_team_player` (`player_alias`, `team_name`, `game_title`) VALUES
('4torrrrr332', 'Optic Chicago', 'Fortnite'),
('Adapt', 'Atlanta Faze', 'Call Of Duty: Warzone'),
('airball', 'Optic Chicago', 'Fortnite'),
('Badman23', 'Optic Chicago', 'Fortnite'),
('BandoKay', 'OFB', 'Fortnite'),
('Dashy', 'Optic Chicago', 'Call Of Duty: BOCW'),
('Envoy', 'Optic Chicago', 'Call Of Duty: BOCW'),
('Jarvis', 'Atlanta Faze', 'Fortnite'),
('Rain', 'Atlanta Faze', 'Call Of Duty: Warzone'),
('Supa', 'MoreBoy', 'Fortnite'),
('Sway', 'MoreBoy', 'Fortnite'),
('TFue', 'Atlanta Faze', 'Fortnite'),
('twosure', 'Optic Chicago', 'Fortnite');

-- --------------------------------------------------------

--
-- Table structure for table `matchh`
--

CREATE TABLE `matchh` (
  `match_id` int(11) NOT NULL,
  `match_name` varchar(40) DEFAULT NULL,
  `game_title` varchar(70) DEFAULT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `result` varchar(10) DEFAULT NULL,
  `stream_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `match_caster`
--

CREATE TABLE `match_caster` (
  `caster_alias` varchar(15) NOT NULL,
  `match_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `tel_no` varchar(20) DEFAULT NULL,
  `person_email` varchar(60) DEFAULT NULL CHECK (`person_email` regexp '^[A-Z0-9._%-]+@[A-Z0-9.-]+.[A-Z]{2,4}$'),
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `fname`, `lname`, `tel_no`, `person_email`, `password`, `cpassword`) VALUES
(1, 'Bradley', 'Deku', '+233264438599', 'bradley.deku@ashesi.edu.gh', 'brad', 'brad'),
(2, 'David', 'Bolton', '+233264438599', 'bradleydeku3@gmail.com', 'brad', 'brad'),
(3, 'David', 'Bolton', '+233264438599', 'bradleydeku4@gmail.com', 'brad', 'brad'),
(4, 'David', 'Bolton', '+233264438599', 'bradleydeku5@gmail.com', 'brad', 'brad'),
(5, 'David', 'Bolton', '+233264438599', 'bradleydeku50@gmail.com', 'brad', 'brad'),
(6, 'David', 'Bolton', '+233264438599', 'bradleydeku501@gmail.com', 'brad', 'brad'),
(7, 'David', 'Bolton', '+233264438599', 'bradleydeku5011@gmail.com', 'brad', 'brad'),
(8, 'David', 'Bolton', '+233264438599', 'bradleydeku2021@gmail.com', 'brad', 'brad'),
(9, 'David', 'Bolton', '+233264438599', 'bradleydeku20211@gmail.com', 'brad', 'brad'),
(10, 'David', 'Bolton', '+233264438599', 'bradleydeku2021221@gmail.com', 'brad', 'brad'),
(11, 'David', 'Bolton', '+233264438599', 'bradleydeku202221221@gmail.com', 'brad', 'brad'),
(12, 'David', 'Bolton', '+233264438599', 'bradleydeku20332221221@gmail.com', 'brad', 'brad'),
(13, 'David', 'Bolton', '+233264438599', 'bradleydeku3000@gmail.com', 'brad', 'brad'),
(14, 'David', 'Bolton', '+233264438599', 'bradleydeku3001@gmail.com', 'brad', 'brad'),
(15, 'Madoc', 'Quaye', '+233264438599', 'madocjnr@gmail.com', 'madoc', 'madoc'),
(16, 'Niii', 'Kwaku', '+233264438599', 'nii@gmail.com', 'brad', 'brad'),
(17, 'Antonio', 'Rudiger', '', 'rudiger@gmail.com', 'brad', 'brad'),
(18, 'Kwame', 'Mensah', '+233264438599', 'bandokay@gmail.com', 'drillings', 'drillings'),
(19, 'Final', 'Tester', '+233244766744', 'brad20@gmail.com', 'bradleybands2', 'bradleybands2');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_alias` varchar(15) NOT NULL,
  `person_id` int(11) NOT NULL,
  `game_title` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_alias`, `person_id`, `game_title`) VALUES
('4torrrr', 12, 'Fortnite'),
('4torrrrr33', 13, 'Fortnite'),
('4torrrrr332', 14, 'Fortnite'),
('Adapt', 2, 'Call Of Duty: Warzone'),
('airball', 17, 'Fortnite'),
('azura', 19, 'Fortnite'),
('Badman23', 16, 'Fortnite'),
('BandoKay', 18, 'Fortnite'),
('Bands', 1, 'Call Of Duty: BOCW'),
('Dashy', 8, 'Call Of Duty: BOCW'),
('Envoy', 9, 'Call Of Duty: BOCW'),
('Jarvis', 5, 'Fortnite'),
('Rain', 3, 'Call Of Duty: Warzone'),
('Supa', 6, 'Fortnite'),
('Sway', 7, 'Fortnite'),
('TFue', 4, 'Fortnite'),
('twosure', 15, 'Fortnite');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `sponsor_id` int(11) NOT NULL,
  `sponsor_name` varchar(30) NOT NULL,
  `location` varchar(60) DEFAULT NULL,
  `sponsor_email` varchar(60) DEFAULT NULL CHECK (`sponsor_email` regexp '^[A-Z0-9._%-]+@[A-Z0-9.-]+.[A-Z]{2,4}$'),
  `tel_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`sponsor_id`, `sponsor_name`, `location`, `sponsor_email`, `tel_no`) VALUES
(1, 'MTN', 'Accra', 'mtnghana@gmail.com', '+233244557432'),
(2, 'Golden Gaming & Tech', 'Accra', 'ggt@gmail.com', '+233244912432'),
(3, 'BYTE', 'Accra', 'byte@gmail.com', '+233244556321'),
(4, 'PlayArena TV', 'Kumasi', 'einstein@gmail.com', '+233202357432'),
(5, 'MAVIX', 'New York', 'mavix@gmail.com', '+233508857432');

-- --------------------------------------------------------

--
-- Table structure for table `streamm`
--

CREATE TABLE `streamm` (
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(70) DEFAULT NULL,
  `caster_alias` varchar(15) NOT NULL,
  `platform_name` varchar(20) NOT NULL,
  `stream_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stream_platform`
--

CREATE TABLE `stream_platform` (
  `platform_name` varchar(20) NOT NULL,
  `developer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream_platform`
--

INSERT INTO `stream_platform` (`platform_name`, `developer`) VALUES
('Facebook Gaming', 'Facebook'),
('Twitch', 'Amazon'),
('Youtube', 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_name` varchar(30) NOT NULL,
  `region` varchar(20) DEFAULT NULL,
  `team_email` varchar(60) DEFAULT NULL CHECK (`team_email` regexp '^[A-Z0-9._%-]+@[A-Z0-9.-]+.[A-Z]{2,4}$'),
  `est_date` date DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `team_logo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_name`, `region`, `team_email`, `est_date`, `password`, `cpassword`, `team_logo`) VALUES
('Atlanta Faze', 'NA', 'faze@gmail.com', '2007-10-03', 'faze', 'faze', ''),
('MoreBoy', 'GA', 'byte20@gmail.com', '2021-11-09', 'brad', 'brad', 'moreboy.jpg'),
('OFB', 'UK', 'drillings@gmail.com', '2021-11-02', 'ofb', 'ofb', 'BYTE Logo.jpg'),
('Optic Chicago', 'NA', 'optic@gmail.com', '2006-01-13', 'optic', 'optic', 'optic-chicago.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_sponsor`
--

CREATE TABLE `team_sponsor` (
  `sponsor_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_sponsor`
--

INSERT INTO `team_sponsor` (`sponsor_id`, `team_name`) VALUES
(1, 'Optic Chicago'),
(2, 'Atlanta Faze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caster`
--
ALTER TABLE `caster`
  ADD PRIMARY KEY (`caster_alias`),
  ADD KEY `game_title` (`game_title`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD UNIQUE KEY `person_id` (`person_id`),
  ADD UNIQUE KEY `coach_team` (`coach_team`),
  ADD KEY `coach_game` (`coach_game`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_name`,`start_date`);

--
-- Indexes for table `event_sponsor`
--
ALTER TABLE `event_sponsor`
  ADD KEY `event_name` (`event_name`,`start_date`),
  ADD KEY `sponsored_events` (`sponsor_id`,`event_name`,`start_date`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_title`);

--
-- Indexes for table `game_team`
--
ALTER TABLE `game_team`
  ADD PRIMARY KEY (`team_name`,`game_title`),
  ADD KEY `game_title` (`game_title`);

--
-- Indexes for table `game_team_player`
--
ALTER TABLE `game_team_player`
  ADD UNIQUE KEY `player_alias` (`player_alias`),
  ADD KEY `game_title` (`game_title`),
  ADD KEY `gt_player_details` (`team_name`,`player_alias`);

--
-- Indexes for table `matchh`
--
ALTER TABLE `matchh`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `game_title` (`game_title`),
  ADD KEY `event_name` (`event_name`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `match_details` (`match_name`,`event_name`,`match_date`,`result`);

--
-- Indexes for table `match_caster`
--
ALTER TABLE `match_caster`
  ADD UNIQUE KEY `match_id` (`match_id`),
  ADD KEY `caster_alias` (`caster_alias`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`),
  ADD UNIQUE KEY `person_email` (`person_email`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_alias`),
  ADD UNIQUE KEY `person_id` (`person_id`),
  ADD KEY `game_title` (`game_title`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsor_id`),
  ADD UNIQUE KEY `sponsor_name` (`sponsor_name`),
  ADD UNIQUE KEY `sponsor_email` (`sponsor_email`);

--
-- Indexes for table `streamm`
--
ALTER TABLE `streamm`
  ADD PRIMARY KEY (`stream_id`),
  ADD KEY `caster_alias` (`caster_alias`),
  ADD KEY `platform_name` (`platform_name`),
  ADD KEY `stream_details` (`stream_name`,`caster_alias`,`platform_name`);

--
-- Indexes for table `stream_platform`
--
ALTER TABLE `stream_platform`
  ADD PRIMARY KEY (`platform_name`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_name`),
  ADD UNIQUE KEY `team_email` (`team_email`);

--
-- Indexes for table `team_sponsor`
--
ALTER TABLE `team_sponsor`
  ADD PRIMARY KEY (`sponsor_id`,`team_name`),
  ADD UNIQUE KEY `sponsor_id` (`sponsor_id`),
  ADD KEY `team_name` (`team_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchh`
--
ALTER TABLE `matchh`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `streamm`
--
ALTER TABLE `streamm`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caster`
--
ALTER TABLE `caster`
  ADD CONSTRAINT `caster_ibfk_1` FOREIGN KEY (`game_title`) REFERENCES `game` (`game_title`) ON DELETE CASCADE,
  ADD CONSTRAINT `caster_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coach_ibfk_2` FOREIGN KEY (`coach_team`) REFERENCES `team` (`team_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coach_ibfk_3` FOREIGN KEY (`coach_game`) REFERENCES `game` (`game_title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_sponsor`
--
ALTER TABLE `event_sponsor`
  ADD CONSTRAINT `event_sponsor_ibfk_1` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsor` (`sponsor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_sponsor_ibfk_2` FOREIGN KEY (`event_name`,`start_date`) REFERENCES `event` (`event_name`, `start_date`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_team`
--
ALTER TABLE `game_team`
  ADD CONSTRAINT `game_team_ibfk_1` FOREIGN KEY (`team_name`) REFERENCES `team` (`team_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_team_ibfk_2` FOREIGN KEY (`game_title`) REFERENCES `game` (`game_title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_team_player`
--
ALTER TABLE `game_team_player`
  ADD CONSTRAINT `game_team_player_ibfk_1` FOREIGN KEY (`player_alias`) REFERENCES `player` (`player_alias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_team_player_ibfk_2` FOREIGN KEY (`team_name`) REFERENCES `team` (`team_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_team_player_ibfk_3` FOREIGN KEY (`game_title`) REFERENCES `game` (`game_title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matchh`
--
ALTER TABLE `matchh`
  ADD CONSTRAINT `matchh_ibfk_1` FOREIGN KEY (`game_title`) REFERENCES `game` (`game_title`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchh_ibfk_2` FOREIGN KEY (`event_name`) REFERENCES `event` (`event_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchh_ibfk_3` FOREIGN KEY (`stream_id`) REFERENCES `streamm` (`stream_id`) ON DELETE CASCADE;

--
-- Constraints for table `match_caster`
--
ALTER TABLE `match_caster`
  ADD CONSTRAINT `match_caster_ibfk_1` FOREIGN KEY (`caster_alias`) REFERENCES `caster` (`caster_alias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `match_caster_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `matchh` (`match_id`) ON DELETE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_ibfk_2` FOREIGN KEY (`game_title`) REFERENCES `game` (`game_title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `streamm`
--
ALTER TABLE `streamm`
  ADD CONSTRAINT `streamm_ibfk_1` FOREIGN KEY (`caster_alias`) REFERENCES `caster` (`caster_alias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `streamm_ibfk_2` FOREIGN KEY (`platform_name`) REFERENCES `stream_platform` (`platform_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_sponsor`
--
ALTER TABLE `team_sponsor`
  ADD CONSTRAINT `team_sponsor_ibfk_1` FOREIGN KEY (`team_name`) REFERENCES `team` (`team_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
