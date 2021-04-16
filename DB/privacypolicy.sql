-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 06:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `privacypolicy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(3) NOT NULL,
  `firstname` varchar(251) NOT NULL,
  `lastname` varchar(251) NOT NULL,
  `email` varchar(251) NOT NULL,
  `subject` varchar(251) NOT NULL,
  `message` varchar(251) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'manjeet', 'singh', 'manjeet@gmail.com', 'singh', 'singh', '0000-00-00', '0000-00-00'),
(4, 'manish', 'kumar', 'mahesh@gmail.com', 'AJHJ', 'ANK', '2021-02-23', '2021-02-23'),
(5, 'ravi', 'kant', 'ravi@gmail.com', 'ravi', 'adad', '2021-02-23', '2021-02-23'),
(6, '1265147', '#%&^', 'sjgkh', 'sajkl', 'sajkash', '2021-02-24', '2021-02-27'),
(7, 'aff', '#ww', 'sjg', 'sajkl', 'sajkash', '2021-02-24', '2021-02-27'),
(24, '12', '1', '1', '11', '1', '2021-02-27', '2021-02-27'),
(31, 'QWW', 'AA', 'AA', 'AA', 'AA', '2021-03-01', '2021-03-01'),
(74, 'aditya', 'raj', 'admin@walkietolkie.com', '1', '1', '2021-03-08', '2021-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(3) NOT NULL,
  `title` varchar(251) NOT NULL,
  `description` mediumtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `playStoreUrl` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `thumbnail`, `playStoreUrl`, `image`, `created_at`, `updated_at`) VALUES
(29, 'Easy Notes', 'Easy Notes is free and small size application allow user to type idea as a color full note, add image and set reminders at the appropriate time to alert user by notification.\r\nEasy notes is easy to use and has smooth interface that allow user to create new note or update old one.', 'resources/assets/images/1615200115.easy-note-logo.png', 'https://play.google.com/store/apps/details?id=com.vss.easynotes', 'resources/assets/images/1615200115.play_badge.png', '2021-03-08', '2021-03-08'),
(30, 'Flashlight', 'Flashlight app is very easy and user friendly LED torch uses the built-in camera LED flash and provides the max brightest light as possible.\r\nOur Flashlight app always helps in unexpected situation like walking in the night, visiting dark roof and basement, no electricity at home, office, lift and hall or looking for something in dark area to find your stuff and all.', 'resources/assets/images/1615200403.flashlight-logo.png', 'https://play.google.com/store/apps/details?id=com.vss.flashlight', 'resources/assets/images/1615200403.play_badge.png', '2021-03-08', '2021-03-08'),
(31, 'BMI Calculator', 'BMI Calculator App from Vridhi Softech At Vridhi Softech, we are committed to providing the best health tracking features to our users. We believe that the maintenance of health is an important aspect of living a good life. This is the reason we have introduced a BMI calculator app. Our app uses all the guidelines laid by the World Health Organization to help the users understand what is the current status of their body. With our BMI app, users can find out the ideal weight range they should maintain based upon on their height and current weight. Our app can inform users if they are under weight or over weight. Almost everyone is aware that unless you maintain proper weight range, you will either have to face problems of malnourishment or obesity. Obesity is a particularly risk condition because it can lead to a number of heart and blood pressure related problems. We hope that our app helps you maintain good health. If you have any suggestions or queries about our app, please write to us at info@vridhisoftech.com', 'resources/assets/images/1615200515.BMI-logo.png', 'https://play.google.com/store/apps/details?id=com.vss.bmicalculator', 'resources/assets/images/1615200515.play_badge.png', '2021-03-08', '2021-03-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
