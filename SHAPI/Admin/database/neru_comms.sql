-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 09:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neru_comms`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `list_style` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `art_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `img`, `title`, `list_style`, `price`, `art_desc`) VALUES
(73, '407.jpg', 'Done!', 'Chibi', 175, 'Finish Finishhhhhhhh'),
(74, '557.jpg', 'Witchy Cotie', 'Chibi', 200, 'A cute witch who bright shine against darkness'),
(76, '411.PNG', '2 Siopaw', 'Chibi', 200, 'Siopawpaw'),
(77, '411.png', 'Sunshine Fall', 'Original ArtStyle', 350, 'Plawers plawers '),
(78, '976.png', 'Jonathan Joestar', 'Original ArtStyle', 300, ' OraOraOraOraOraOraOraOra'),
(79, '956.png', 'Kasumi Miwa', 'Original ArtStyle', 250, 'Jujutsu na Kaisiomai'),
(80, '420.png', 'Kawai Entry', 'Original ArtStyle', 350, 'Bamboo man'),
(81, '871.png', 'Uhaw ', 'Digital WaterColor', 300, 'Darkness  surrounds and our light shines bright'),
(82, '673.png', 'Hello', 'Original ArtStyle', 300, 'Fall'),
(83, '620.png', 'Geng geng', 'Original ArtStyle', 300, 'Collaboration'),
(84, '430.png', 'Hzlnut', 'Original ArtStyle', 300, 'Fan Art'),
(85, '610.png', 'Cotie Bunny', 'Original ArtStyle', 300, 'Cute Bunny  Bunny'),
(86, '413.png', 'Fall', 'Original ArtStyle', 350, 'Fall season '),
(87, '264.png', 'Rica', 'Original ArtStyle', 50, 'Commission'),
(88, '548.png', 'Hi', 'Original ArtStyle', 350, 'Feel the moment'),
(89, '687.png', 'Higantes Festival', 'Chibi', 300, 'Activity of mine on senior high school'),
(90, '933.png', 'Luxury', 'Original ArtStyle', 150, 'Commission'),
(91, '554.png', 'Nutrition Power', 'Original ArtStyle', 350, 'Competition'),
(92, '229.png', 'The moment', 'Original ArtStyle', 500, 'Moment on paris'),
(93, '685.png', 'Happy', 'Original ArtStyle', 300, 'The happy moment '),
(94, '104.png', 'Hapon na', 'Original ArtStyle', 150, 'An afternoon stroll');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `art_style` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`client_id`, `email`, `name`, `due_date`, `art_style`, `details`, `description`) VALUES
(4, 'orion.serenade@outlook.com', 'Orion Serenade', 'January 25, 2024', 'Glitch Art', 'Full Body', 'Orion Serenade pioneers glitch art, seamlessly blending digital irregularities with full-body compositions, creating visually striking and thought-provoking masterpieces.'),
(6, 'nebula.muse@aol.com', 'Nebula Muse', 'February 2, 2024', 'Augmented Reality Art', 'Half Body', 'Nebula Muse explores the boundaries of augmented reality art, presenting captivating half-body compositions that bridge the gap between the digital and physical worlds.'),
(8, 'celestia.melody@protonmail.com', 'Celestia Melody', 'February 9, 2024', '3D Abstract Sculpture', 'Headshot', 'Celestia Melody sculpts ethereal 3D abstract headshots, exploring the intersection of form and imagination to create visually stunning and thought-provoking portraits.'),
(41, 'Banjis@gmail.com', 'Banjis', 'Jun 10, 2024', 'Original Artstyle', 'Male and female', ''),
(42, 'Custumeh@gmail.com', 'Custumeh', 'Jan 22, 2024', 'Chibi', 'Mala chismosa na picture bih', ''),
(46, 'walangtulog@gmail.com', 'ey gumagana na', 'May 25, 2024', 'Digital Watercolor', 'Whole Body w/BG', 'L.A Coffee low on acid');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `due` text NOT NULL,
  `style` varchar(100) NOT NULL,
  `client_details` text NOT NULL,
  `client_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `client_name`, `contact_info`, `due`, `style`, `client_details`, `client_description`) VALUES
(39, 'Midnight Crescendo', 'midnight.crescendo@live.com', 'February 15, 2024', 'Pop Art Illustration', 'Full Body', 'Midnight Crescendo\'s pop art illustrations burst with color and energy, delivering full-body compositions that celebrate culture and individuality with vibrant flair.'),
(40, 'Velvet Horizon', 'velvet.horizon@gmail.com', 'January 28, 2024', 'Minimalistic Vector Art', 'Headshot', 'Velvet Horizon embraces minimalistic vector art, skillfully crafting headshots that convey simplicity and elegance through clean lines and thoughtful design.'),
(41, 'Ember Harmony', 'ember.harmony@icloud.com', 'February 6, 2024', 'Digital Watercolor', 'Full Body', 'Ember Harmony\'s digital watercolors enchant with vibrant hues and fluid strokes, bringing life to full-body compositions that evoke emotion and connection.'),
(44, 'Boelofwoah', 'woterboy@gmail.com', 'Jun 10, 2024', 'Chibi', 'Half Body', 'Testing pop'),
(45, 'Solar Pulse', 'solar.pulse@mailinator.com', 'February 12, 2024', 'Virtual Reality Experience', 'Half Body', 'Solar Pulse immerses viewers in a virtual reality experience, crafting half-body compositions that transcend the digital realm, inviting exploration and interaction.'),
(46, 'Luna Rhythm', 'luna.rhythm@yahoo.com', 'January 18, 2024', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(70) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(14) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`, `status`) VALUES
('banjis@gmail.com', 'Maw', '123456789', 'Hiatus'),
('neru@gmail.com', 'Neru', '123456789', 'Active'),
('urenj@gmail.com', 'urenj', 'urenji123', 'Hiatus'),
('vhanges@gmail.com', 'Vhanges', '123456789', 'Hiatus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `1` (`client_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
