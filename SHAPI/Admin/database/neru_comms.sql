-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 04:19 AM
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
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `due_date` datetime NOT NULL,
  `art_style` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`client_id`, `email`, `name`, `due_date`, `art_style`, `details`, `description`) VALUES
(2, 'luna.rhythm@yahoo.com', 'Luna Rhythm', '2024-01-18 12:30:00', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.'),
(3, 'phoenix.echo@hotmail.com', 'Phoenix Echo', '2024-01-22 15:45:00', 'Surreal Digital Painting', 'Half Body', 'Phoenix Echo captivates with surreal digital paintings, offering glimpses into dreamlike realms with expressive characters and evocative half-body compositions.'),
(5, 'velvet.horizon@gmail.com', 'Velvet Horizon', '2024-01-28 21:15:00', 'Minimalistic Vector Art', 'Headshot', 'Velvet Horizon embraces minimalistic vector art, skillfully crafting headshots that convey simplicity and elegance through clean lines and thoughtful design.'),
(7, 'ember.harmony@icloud.com', 'Ember Harmony', '2024-02-06 10:45:00', 'Digital Watercolor', 'Full Body', 'Ember Harmony\'s digital watercolors enchant with vibrant hues and fluid strokes, bringing life to full-body compositions that evoke emotion and connection.'),
(8, 'celestia.melody@protonmail.com', 'Celestia Melody', '2024-02-09 18:00:00', '3D Abstract Sculpture', 'Headshot', 'Celestia Melody sculpts ethereal 3D abstract headshots, exploring the intersection of form and imagination to create visually stunning and thought-provoking portraits.'),
(9, 'solar.pulse@mailinator.com', 'Solar Pulse', '2024-02-12 12:30:00', 'Virtual Reality Experience', 'Half Body', 'Solar Pulse immerses viewers in a virtual reality experience, crafting half-body compositions that transcend the digital realm, inviting exploration and interaction.'),
(10, 'midnight.crescendo@live.com', 'Midnight Crescendo', '2024-02-15 15:45:00', 'Pop Art Illustration', 'Full Body', 'Midnight Crescendo\'s pop art illustrations burst with color and energy, delivering full-body compositions that celebrate culture and individuality with vibrant flair.'),
(11, 'solstice.harmony@gmail.com', 'Solstice Harmony', '2024-02-18 09:00:00', 'Digital Graffiti', 'Headshot', 'Solstice Harmony expresses creativity through digital graffiti headshots, fusing urban artistry with digital precision, capturing the essence of individuality and expression.'),
(12, 'nova.symphony@yahoo.com', 'Nova Symphony', '2024-02-22 21:15:00', 'Motion Graphics', 'Half Body', 'Nova Symphony orchestrates mesmerizing motion graphics, seamlessly integrating technology and art into half-body compositions that captivate and inspire.'),
(13, 'cascade.melody@hotmail.com', 'Cascade Melody', '2024-02-25 14:30:00', 'Abstract Animation', 'Full Body', 'Cascade Melody\'s abstract animations come to life in full-body compositions, offering a dynamic exploration of movement, form, and emotion through the digital canvas.'),
(14, 'seraphic.sound@outlook.com', 'Seraphic Sound', '2024-03-01 10:45:00', 'Pixel Art', 'Headshot', 'Seraphic Sound pioneers pixel art headshots, showcasing intricate details and nostalgic charm in each composition, capturing the essence of digital craftsmanship.'),
(15, 'ecliptic.echo@gmail.com', 'Ecliptic Echo', '2024-03-04 18:00:00', 'Interactive Digital Installation', 'Half Body', 'Ecliptic Echo\'s interactive digital installations transcend boundaries, offering immersive experiences through thought-provoking half-body compositions that engage and captivate.'),
(16, 'ethereal.sonata@aol.com', 'Ethereal Sonata', '2024-03-08 12:30:00', 'Holographic Projection', 'Full Body', 'Ethereal Sonata creates holographic projections in full-body compositions, merging reality and fantasy to evoke a sense of wonder and connection to the ethereal.'),
(17, 'radiant.harmony@icloud.com', 'Radiant Harmony', '2024-03-12 15:45:00', 'Virtual Pop Surrealism', 'Headshot', 'Radiant Harmony delves into virtual pop surrealism, crafting headshots that challenge perception and invite viewers into a world of vivid imagination and symbolism.'),
(18, 'stellar.serenade@protonmail.com', 'Stellar Serenade', '2024-03-15 09:00:00', 'Algorithmic Generative Art', 'Half Body', 'Stellar Serenade explores algorithmic generative art in half-body compositions, generating intricate patterns and forms that captivate with their complexity and beauty.');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `due` datetime NOT NULL,
  `style` varchar(100) NOT NULL,
  `client_details` text NOT NULL,
  `client_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `client_name`, `contact_info`, `due`, `style`, `client_details`, `client_description`) VALUES
(1, 'Aria Mirage', 'aria.mirage@gmail.com', '2024-01-15 18:00:00', 'Cyberpunk Futurism', 'Full Body', 'Aria Mirage creates vibrant cyberpunk scenes, portraying a futuristic world with intricate details and dynamic full-body compositions.'),
(22, 'Twilight Crescendo', 'twilight.crescendo@live.com', '2024-03-22 14:30:00', 'Neon Cyberwave', 'Headshot', 'Twilight Crescendo\'s neon cyberwave headshots illuminate the digital realm, capturing the essence of a futuristic aesthetic with vibrant colors and electrifying energy.'),
(23, 'Luna Rhythm', 'luna.rhythm@yahoo.com', '2024-01-18 12:30:00', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.'),
(24, 'Stellar Serenade', 'stellar.serenade@protonmail.com', '2024-03-15 09:00:00', 'Algorithmic Generative Art', 'Half Body', 'Stellar Serenade explores algorithmic generative art in half-body compositions, generating intricate patterns and forms that captivate with their complexity and beauty.'),
(25, 'Stellar Serenade', 'stellar.serenade@protonmail.com', '2024-03-15 09:00:00', 'Algorithmic Generative Art', 'Half Body', 'Stellar Serenade explores algorithmic generative art in half-body compositions, generating intricate patterns and forms that captivate with their complexity and beauty.');

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
('e267fe7c@example.com', 'ced2bd8e', '3adf43c50bab', 'Hiatus');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
