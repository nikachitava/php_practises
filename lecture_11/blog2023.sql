-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 10:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `text`, `created_at`) VALUES
(1, 3, 4, 'Great Post!!!', '2023-05-15 08:24:56'),
(2, 3, 7, 'Super Post!!!', '2023-05-15 08:24:56'),
(3, 2, 7, 'Useful Post!!', '2023-05-15 08:24:56'),
(4, 6, 1, 'Thank You a lot!!!!', '2023-05-15 08:24:56'),
(5, 6, 3, 'This is a very, very good post!!!', '2023-05-15 08:24:56'),
(6, 4, 5, 'Thanks!!!', '2023-05-15 08:24:56'),
(7, 4, 2, 'No Comment!!!', '2023-05-15 08:24:56'),
(8, 4, 6, 'Great!!!', '2023-05-15 08:24:56'),
(9, 6, 7, 'Supper!!!', '2023-05-15 08:24:56'),
(10, 7, 2, 'Good!!!', '2023-05-15 08:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(3) UNSIGNED DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `img_url` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `view` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `text`, `img_url`, `created_at`, `view`) VALUES
(1, 1, 1, 'What is HTML?', 'HTML stands for Hyper Text Markup Language\r\nHTML is the standard markup language for creating Web pages\r\nHTML describes the structure of a Web page\r\nHTML consists of a series of elements\r\nHTML elements tell the browser how to display the content\r\nHTML elements label pieces of content such as \"this is a heading\", \"this is a paragraph\", \"this is a link\", etc.', NULL, '2023-05-15 08:16:44', 0),
(2, 5, 1, 'HTML Editors', 'Learn HTML Using Notepad or TextEdit\r\nWeb pages can be created and modified by using professional HTML editors.\r\n\r\nHowever, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).\r\n\r\nWe believe that using a simple text editor is a good way to learn HTML.\r\n\r\nFollow the steps below to create your first web page with Notepad or TextEdit.\r\n\r\n', NULL, '2023-05-15 08:16:44', 0),
(3, 2, 2, 'CSS Introduction', 'What is CSS?\r\nCSS stands for Cascading Style Sheets\r\nCSS describes how HTML elements are to be displayed on screen, paper, or in other media\r\nCSS saves a lot of work. It can control the layout of multiple web pages all at once\r\nExternal stylesheets are stored in CSS files', NULL, '2023-05-15 08:20:01', 0),
(4, 3, 3, 'JavaScript Introduction', 'This page contains some examples of what JavaScript can do.\r\n\r\nJavaScript Can Change HTML Content\r\nOne of many JavaScript HTML methods is getElementById().\r\n\r\nThe example below \"finds\" an HTML element (with id=\"demo\"), and changes the element content (innerHTML) to \"Hello JavaScript\":', NULL, '2023-05-15 08:20:01', 0),
(5, 5, 3, 'JavaScript Output', 'JavaScript Display Possibilities\r\nJavaScript can \"display\" data in different ways:\r\n\r\nWriting into an HTML element, using innerHTML.\r\nWriting into the HTML output using document.write().\r\nWriting into an alert box, using window.alert().\r\nWriting into the browser console, using console.log().', NULL, '2023-05-15 08:20:01', 0),
(6, 6, 4, 'Learn PHP', 'HP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.\r\n\r\nPHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.\r\n\r\nEasy Learning with \"PHP Tryit\"\r\nWith our online \"PHP Tryit\" editor, you can edit the PHP code, and click on a button to view the result.', NULL, '2023-05-15 08:20:01', 0),
(7, 6, 4, 'PHP Syntax', 'A PHP script is executed on the server, and the plain HTML result is sent back to the browser.\r\n\r\nBasic PHP Syntax\r\nA PHP script can be placed anywhere in the document.\r\n\r\nA PHP script starts with <?php and ends with ?>:\r\n\r\n<?php\r\n// PHP code goes here\r\n?>\r\nThe default file extension for PHP files is \".php\".\r\n\r\nA PHP file normally contains HTML tags, and some PHP scripting code.\r\n\r\nBelow, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function \"echo\" to output the text \"Hello World!\" on a web page:', NULL, '2023-05-15 08:20:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'blogger'),
(4, 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(3) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `created_at`) VALUES
(1, 'HTML', '2023-05-15 07:37:57'),
(2, 'CSS', '2023-05-15 07:37:57'),
(3, 'JavaScript', '2023-05-15 07:37:57'),
(4, 'PHP', '2023-05-15 07:37:57'),
(5, 'MySQL', '2023-05-15 07:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `reg_date`, `role_id`) VALUES
(1, 'Nika', NULL, 'nika1@gmail.com', 'nika123', '2023-05-15 07:18:21', 1),
(2, 'Giorgi', 'Patashuri', 'gio1@gmail.com', 'gio123', '2023-05-15 07:18:21', 2),
(3, 'Giorgi', NULL, 'gio2@gmail.com', 'gio123', '2023-05-15 07:18:21', 3),
(4, 'Misha', 'Khizanishvili', 'misha1@gmail.com', 'misha123', '2023-05-15 07:18:21', 4),
(5, 'Anna', NULL, 'anna1@gmail.com', 'anna123', '2023-05-15 07:18:21', 3),
(6, 'Nia', 'Miqadze', 'nia1@gmail.com', 'nia123', '2023-05-15 07:18:21', 3),
(7, 'Nodar', 'Dolidze', 'nodar1@gmail.com', 'nodar123', '2023-05-15 07:18:21', 4),
(9, 'Nika', NULL, 'nika2@gmail.com', 'nika123', '2023-05-15 07:20:09', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
