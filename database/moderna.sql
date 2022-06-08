-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2022 at 07:38 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(2500) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `details`, `button_text`, `button_link`, `status`) VALUES
(3, 'What is Self Testing?', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry. Lorem Ipsum is simply a dummy text of the printing and typesetting industry.', 'Lorem Ipsum', 'https://www.lipsum.com/', 1),
(5, 'Why do we use it?', 'It is a long-established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Lorem Ipsum', 'https://www.lipsum.com/', 1),
(6, 'wonderful', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone and feel the charm of existence in this spot, which was created for the bliss of souls like mine.', 'blind text generator', 'https://www.blindtextgenerator.com', 1),
(8, 'Thank Him for Pain', 'He wants to be more than the pain to do something that can do something. To follow them, and to follow them is to seek nothing in order to get some. Others may be blinded by pain and resilience. It was something like pleasure. We accuse the pain of being countered, or soothed. Less time and sort of architect.', 'Read more', '#', 0),
(9, 'Follow her as and she is seeking', 'He wants to be more than the pain to do something that can do something. To follow them, and to follow them is to seek nothing in order to get some. Others may be blinded by pain and resilience. It was something like pleasure. We accuse the pain of being countered, or soothed. Less time and sort of architect.', 'Read more', '#', 0),
(10, 'Welcome to Moderna', 'He wants to be more than the pain to do something that can do something. To follow them, and to follow them is to seek nothing in order to get some. Others may be blinded by pain and resilience. It was something like pleasure. We accuse the pain of being countered or soothed. Less time and sort of architect.', 'Read more', '#', 0),
(11, 'Minus culpa quod la', 'Soluta laborum nobis', 'Ut beatae lorem vero', 'Ex corrupti aut at ', 1),
(12, 'qinofe@mailinator.com', 'Do porro doloremque ', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `picture`, `title`, `details`, `status`) VALUES
(7, 'Feature_108323527.svg', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n Ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n Duis aute irure dolor in reprehenderit in voluptate velit.', 1),
(8, 'Feature_1266346527.svg', 'Corporis temporibus maiores provident', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\nUllamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1),
(9, 'Feature_1136672813.svg', 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas', 'Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.\r\n\r\n Ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n Duis aute irure dolor in reprehenderit in voluptate velit.\r\n Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.', 1),
(10, 'Feature_1673666084.svg', 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\nUllamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1),
(11, 'Feature_485654092.svg', 'Sit nulla et consequ', 'Aut nemo architecto ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feature_top`
--

CREATE TABLE `feature_top` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feature_top`
--

INSERT INTO `feature_top` (`id`, `title`, `details`, `status`) VALUES
(2, 'Features', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 1),
(3, 'Lorem Ipsum', '\"Nor is there anyone who wants to experience pain because the pain is important, enhanced, and wants to gain...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', 0),
(4, 'Saepe rerum est inci', 'Voluptatum anim dolo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `icon_color` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `icon`, `icon_color`, `title`, `details`, `status`) VALUES
(1, 'bxl-dribbble', 'icon-box-pink', 'Lorem Ipsum', 'Those soothed and corrupted by their pleasures, which pains and annoyances they will receive, being blinded by lust, do not foresee', 1),
(2, 'bx-file', 'icon-box-cyan', 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 1),
(3, 'bx-tachometer', 'icon-box-green', 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1),
(6, 'bx-world', 'icon-box-blue', 'No one else', 'But indeed we both accuse and deem them most worthy of just hatred, who are soothed by the flattery of the present pleasures and', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `profile_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_img`, `status`) VALUES
(16, 'ASIFUDDOULA SAKIB', 'asifuddoula76@gmail.com', 'c5101a4147410163c9da1580435b6b6e290ddd53', 'USER_1730686588.png', 1),
(17, 'Md Sakib', 'asifuddaola933@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'USER_211858405.JPG', 0),
(18, 'SAKIB', 'sakib@gmail.com', '09ddadca74e8b1552b2f4a9cd64a2e0a56c5324a', 'USER_1091298077.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_icon` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `first_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `second_icon` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `second_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `picture`, `video_link`, `first_icon`, `first_title`, `first_description`, `second_icon`, `second_title`, `second_description`, `status`) VALUES
(1, 'USER_995236123.jpg', 'https://youtu.be/mEjv8zAd3Mo', 'bx-fingerprint', 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx-gift', 'Nemo Enim', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 1),
(3, 'USER_1511690474.jpg', 'Ex vitae explicabo ', 'Proident minus volu', 'Neque minim sint dol', 'Aspernatur ut dolore', 'Exercitation cupidat', 'Placeat eveniet qu', 'Dicta similique dolo', 0),
(4, 'USER_464924752.jpg', 'Reprehenderit velit ', 'Consequat Duis qui ', 'Sit inventore ipsa', 'Et quidem ex digniss', 'Do tenetur tempora e', 'Officia optio nostr', 'Expedita eiusmod qua', 0),
(5, 'USER_547143158.jpg', 'Exercitationem irure', 'Deserunt recusandae', 'Animi corporis mini', 'Dolor et error et ad', 'Sint dolore veniam ', 'Libero pariatur Vol', 'Nisi quo mollit exce', 0),
(6, 'USER_1222518527.svg', 'Alias commodi et non', 'Iusto cum excepteur ', 'Odit facere consequa', 'Id velit velit ut es', 'Dolore quisquam poss', 'Et magni dicta archi', 'Vero vel commodo sin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_top`
--
ALTER TABLE `feature_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feature_top`
--
ALTER TABLE `feature_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
