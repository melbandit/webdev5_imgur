-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2016 at 02:22 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `webdev5`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `author`, `title`, `url`, `description`, `timestamp`, `alt`) VALUES
(1, 1, 'PatrickStarU', 'http://i.imgur.com/izzpeRbb.jpg', 'Patrick looks like Staru!!', '2016-03-13 09:30:09', 'PatrickStarU'),
(2, 2, 'Bender as a Human', 'http://i.imgur.com/5UvoYdIb.jpg', 'Obama just lifted the ban on Cuban rum and cigars!', '2016-10-20 12:13:16', 'Bender as a Human'),
(3, 3, 'Angry Mob', 'http://i.imgur.com/3qi0ivzb.jpg', 'Angry mobs makes angry slobs', '2016-07-14 21:26:41', 'Angry Mob'),
(4, 1, 'Girls or Boys?', 'http://i.imgur.com/RzBgfhob.jpg', 'Gender party!!', '2016-10-20 00:05:37', 'Girls or Boys'),
(5, 3, 'No Wind Burn Here', 'http://i.imgur.com/iTMFYwRb.jpg', 'Two guys, tight suits, power walking with safe.', '2016-10-02 06:31:15', 'No Wind Burn Here'),
(6, 2, 'Mustachio Cat', 'http://i.imgur.com/mIcObyLb.jpg', 'Evil cat, lovely mustache!', '2016-02-08 10:31:25', 'Mustachio Cat'),
(11, 2, 'Can I play?', 'http://i.imgur.com/XUgDxKxb.jpg', 'Shy little guy hiding', '2016-09-20 10:00:00', 'Can I play'),
(12, 1, 'No More Girlfriend!', 'http://i.imgur.com/8hfW8JSb.jpg', 'All alone, and ready to mingle!', '2016-04-11 08:19:00', 'No More Girlfriend'),
(13, 1, 'Wubalubadubdub!', 'http://i.imgur.com/nVlJf9Ob.jpg', 'Looks like we\'re somewhere new', '2015-10-05 07:26:00', 'Wubalubadubdub'),
(14, 3, 'Saturday Night Live Devil', 'http://i.imgur.com/6CZGit4b.jpg', 'My plans are working out this year for the Elections! I have two souls in the running! MWAHAHA!', '2015-11-02 09:48:00', 'Saturday Night Live Devil'),
(17, 2, 'Playstation!', 'http://i.imgur.com/jm0fP9Ub.jpg', 'Oh the days of Crash Bandicoot, I miss the classics!', '2015-07-09 13:00:00', 'Playstation'),
(18, 1, 'PUGLY', 'http://i.imgur.com/tnxhjzEb.jpg', 'You want to know how pugs got their face... chasing parked cars!', '2015-06-01 11:01:00', 'PUGLY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_login`, `user_password`, `user_email`, `user_registered`) VALUES
(1, 'CharlieBites', 'CharlieBites1234', 'charlie.bites@gmail.com', '2016-10-19 01:03:38'),
(2, 'PokemonLover', 'PokemonLover1234', 'Pokemon.Lover@yahoo.com', '2016-10-19 01:03:38'),
(3, 'MelBandit', 'MelBandit1234', 'melissa.i.sattler@gmail.com', '2016-10-19 01:04:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_fk0` (`author`),
  ADD KEY `comments_fk1` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_fk0` (`author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_login` (`user_login`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`author`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_fk0` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
