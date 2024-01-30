-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 02:45 PM
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
(66, '587.png', 'Uhaw', 'Digital WaterColor', 2500, 'The painting portrays a contrast between darkness and light, as two lovers hug each other in a dimly lit environment. The water colors create a dramatic and mysterious effect, highlighting the silhouettes of the figures against the black background. The lovers are isolated from the rest of the world, but they find solace and comfort in each other\'s arms. A faint glow emanates from their embrace, suggesting their love is the source of light in their lives. '),
(67, '244.jpg', 'PEJOIN', 'Original ArtStyle', 100000, 'Sigol'),
(68, '337.jpg', 'Chomkik', 'Graphic Stylization', 2147483647, 'Good Student'),
(70, '632.jpg', 'EPLORIR', 'Cute Aesthetic Style', 65656565, 'SHOWEHWESH');

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
('neru@gmail.com', 'Neru', '123456789', 'Hiatus'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

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
