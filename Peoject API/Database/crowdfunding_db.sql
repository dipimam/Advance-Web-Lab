-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 06:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowdfunding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `a_id` bigint(20) UNSIGNED NOT NULL,
  `a_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`a_id`, `a_email`, `a_type`, `a_password`, `created_at`, `updated_at`) VALUES
(1, 'dipimamm@gmail.com', 'initiator', '$2y$10$.7Lf0jCBjMgMTmoFVGD6auz87133UakZ51Hf3ruB688c6ei/2ph3e', '2021-10-23 10:03:08', '2021-10-23 10:03:08'),
(2, '19-40354-1@gmail.com', 'initiator', '$2y$10$zwADfE6JFWCZ7545ZIuje.bCRPTS.0juL0di26872aSiQBkbuWFvS', '2021-10-23 11:33:49', '2021-10-26 03:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `tran_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`tran_id`, `p_id`, `d_id`, `amount`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2000', '22-11-2021', NULL, NULL),
(2, 3, 2, '3000', '22-11-2021', NULL, NULL),
(3, 3, 4, '4000', '22-11-2021', NULL, NULL),
(4, 3, 1, '2000', '22-11-2021', NULL, NULL),
(5, 2, 2, '2000', '22-11-2021', NULL, NULL),
(6, 5, 1, '2000', '22-11-2021', NULL, NULL),
(7, 4, 1, '2000', '22-11-2021', NULL, NULL),
(8, 5, 1, '2000', '22-11-2021', NULL, NULL),
(9, 2, 1, '2000', '22-11-2021', NULL, NULL),
(10, 3, 1, '2000', '22-10-2021', NULL, NULL),
(11, 4, 1, '2000', '22-08-2021', NULL, NULL),
(12, 3, 5, '2000', '22-07-2021', NULL, NULL),
(13, 1, 2, '1000', '22-01-2021', NULL, NULL),
(14, 2, 1, '2500', '22-02-2021', NULL, NULL),
(15, 3, 2, '4000', '22-03-2021', NULL, NULL),
(16, 4, 1, '2000', '22-08-2021', NULL, NULL),
(17, 3, 2, '1000', '22-04-2021', NULL, NULL),
(18, 3, 5, '2100', '22-04-2021', NULL, NULL),
(19, 3, 4, '2000', '22-06-2021', NULL, NULL),
(20, 3, 5, '2000', '22-06-2021', NULL, NULL),
(21, 3, 4, '2400', '22-07-2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `d_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_phone` int(11) NOT NULL,
  `d_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`d_id`, `d_name`, `d_phone`, `d_email`, `d_address`, `d_image`, `created_at`, `updated_at`) VALUES
(1, 'Morsalin', 175968345, 'morsalin@gmail.com', 'Pabna', 'Leonardo_Dicaprio_Cannes_2019.jpg', NULL, NULL),
(2, 'Redoy', 175968345, 'morsalin@gmail.com', 'Pabna', 'download (1).jpg', NULL, NULL),
(3, 'Triful Islam', 175968345, 'Tariful@gmail.com', 'Pabna', 'download (1).jpg', NULL, NULL),
(4, 'Robin Islam', 175968345, 'robin@gmail.com', 'Dhanmondi', 'download (1).jpg', NULL, NULL),
(5, 'FAIAZ REZA', 175968345, 'faiaz@gmail.com', 'Dhanmondi', 'download (1).jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initiators`
--

CREATE TABLE `initiators` (
  `i_id` bigint(20) UNSIGNED NOT NULL,
  `i_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_phone` int(11) NOT NULL,
  `i_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `initiators`
--

INSERT INTO `initiators` (`i_id`, `i_name`, `i_phone`, `i_email`, `i_address`, `i_image`, `created_at`, `updated_at`) VALUES
(2, 'FAZLA IMAM', 17859686, 'dipimamm@gmail.com', 'CHADUDDAN', '1635240689_IMG_3212G (1).jpg', '2021-10-23 10:03:08', '2021-10-26 07:11:05'),
(3, 'FAZLA IMAM DIP', 1741983818, '19-40354-1@gmail.com', 'mohammadpur', '1635236524_IMG_3212G (1).jpg', '2021-10-23 11:33:49', '2021-10-26 02:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_23_100011_create_initiators_table', 1),
(6, '2021_10_23_154646_create_authentications_table', 2),
(7, '2021_10_27_140354_create_projects_table', 3),
(8, '2021_10_27_163104_create_reviews_table', 4),
(9, '2021_10_27_175735_create_donors_table', 5),
(10, '2021_10_28_065104_create_donations_table', 6),
(11, '2021_11_01_181424_create_userinfos_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `p_name`, `p_description`, `p_amount`, `p_status`, `p_deadline`, `p_image`, `i_id`, `created_at`, `updated_at`) VALUES
(1, 'Tree Plantation', 'Trees are an essential part of our environment There can be no doubt about the usefulness of trees. We need oxygen for living and trees to provide us with oxygen. Trees cause rainfall and thus prevent the spread of desert. Trees save our land from erosion and maintain the fertility of the soil. Trees give us shade. Trees give us food. We get crops and different delicious and juicy fruits from trees. Trees give shelter to many animals, insects, and birds. In this Way, trees help maintain ecological balance. We also get many products like wood, leaves, rubber, resin, fragrance honey etc. from trees.', 50000, 'processing', '2021-12-30', '1635349851_download.jpg', 2, '2021-10-27 09:50:51', '2021-10-27 09:50:51'),
(2, 'Clothes Donation', 'I always thought it was better to receive than to give, but when my family went to donate clothes and other items to the homeless shelter, I realized that it’s better to give than to receive. One year ago we went to the homeless shelter in Norwich and donated toys and clothes. It was my birthday and my parents wanted me to donate all of the clothing that I had outgrown as well as toys I no longer played with. I didn’t really mind because the new toys I got for my birthday were better, especially one in particular.', 20500, 'approved', '2021-11-06', '1635397319_download (1).jpg', 2, '2021-10-27 23:01:59', '2021-10-27 23:01:59'),
(3, 'Food Donation', 'What does the food pantry do to help their community? The local food pantry helps people who are having a financial crisis. They may have lost their job, or had a medical emergency, or their car may have broken down. The food pantry helps the people who are needy or who are poor and need some help getting food. People that go hungry for a long period of time will change as a person completely. More than seventy percent of people go hungry in the world. Going hungry for a certain period of time damages your mental health and physical health. When it dames your mental health it causes you to have negative thoughts about things. Going hungry also changes your physical health, it causes you to lose weight and it will mess up your respiratory system.', 75000, 'approved', '2022-02-05', '1635350463_images.jpg', 2, '2021-10-27 10:01:04', '2021-10-27 10:01:04'),
(4, 'Blood Donation', 'In order to raise awareness about this life-saving procedure, the world observes 14th June as Blood Donor Day. It promotes blood donation and urges people to save lives by donating blood.\r\n\r\nFurthermore, this day is quite an important day as it makes people about safe blood. People need to know the basics to be able to donate blood. For instance, there are certain criteria one must fulfill to donate blood. Not everyone knows that. Thus, this day helps in doing so.\r\n\r\nMost importantly, on this day, the WHO organizes a campaign that invites people to donate blood. A person eligible to donate blood must fall in the age bracket of 17-66 years of age. They must weigh more than 50 kgs and have sound health. People suffering from diseases like diabetes, hypertension and more cannot donate blood.', 20000, 'approved', '2021-10-30', '1635397208__107317099_blooddonor976.jpg', 2, '2021-10-27 23:00:08', '2021-10-27 23:00:08'),
(5, 'Clothes Donation', 'I always thought it was better to receive than to give, but when my family went to donate clothes and other items to the homeless shelter, I realized that it’s better to give than to receive. One year ago we went to the homeless shelter in Norwich and donated toys and clothes. It was my birthday and my parents wanted me to donate all of the clothing that I had outgrown as well as toys I no longer played with. I didn’t really mind because the new toys I got for my birthday were better, especially one in particular.', 20500, 'approved', '2021-11-06', '1635397319_download (1).jpg', 2, '2021-10-27 23:01:59', '2021-10-27 23:01:59'),
(6, 'Clothes Donation', 'I always thought it was better to receive than to give, but when my family went to donate clothes and other items to the homeless shelter, I realized that it’s better to give than to receive. One year ago we went to the homeless shelter in Norwich and donated toys and clothes. It was my birthday and my parents wanted me to donate all of the clothing that I had outgrown as well as toys I no longer played with. I didn’t really mind because the new toys I got for my birthday were better, especially one in particular.', 20500, 'approved', '2021-11-06', '1635397319_download (1).jpg', 2, '2021-10-27 23:01:59', '2021-10-27 23:01:59'),
(7, 'Tree Plantation', 'Trees are an essential part of our environment There can be no doubt about the usefulness of trees. We need oxygen for living and trees to provide us with oxygen. Trees cause rainfall and thus prevent the spread of desert. Trees save our land from erosion and maintain the fertility of the soil. Trees give us shade. Trees give us food. We get crops and different delicious and juicy fruits from trees. Trees give shelter to many animals, insects, and birds. In this Way, trees help maintain ecological balance. We also get many products like wood, leaves, rubber, resin, fragrance honey etc. from trees.', 50000, 'processing', '2021-12-30', '1635349851_download.jpg', 2, '2021-10-27 09:50:51', '2021-10-27 09:50:51'),
(8, 'Food Donation', 'What does the food pantry do to help their community? The local food pantry helps people who are having a financial crisis. They may have lost their job, or had a medical emergency, or their car may have broken down. The food pantry helps the people who are needy or who are poor and need some help getting food. People that go hungry for a long period of time will change as a person completely. More than seventy percent of people go hungry in the world. Going hungry for a certain period of time damages your mental health and physical health. When it dames your mental health it causes you to have negative thoughts about things. Going hungry also changes your physical health, it causes you to lose weight and it will mess up your respiratory system.', 75000, 'approved', '2022-02-05', '1635350463_images.jpg', 2, '2021-10-27 10:01:04', '2021-10-27 10:01:04'),
(9, 'Food Donation', 'What does the food pantry do to help their community? The local food pantry helps people who are having a financial crisis. They may have lost their job, or had a medical emergency, or their car may have broken down. The food pantry helps the people who are needy or who are poor and need some help getting food. People that go hungry for a long period of time will change as a person completely. More than seventy percent of people go hungry in the world. Going hungry for a certain period of time damages your mental health and physical health. When it dames your mental health it causes you to have negative thoughts about things. Going hungry also changes your physical health, it causes you to lose weight and it will mess up your respiratory system.', 75000, 'approved', '2022-02-05', '1635350463_images.jpg', 2, '2021-10-27 10:01:04', '2021-10-27 10:01:04'),
(10, 'Food Donation', 'What does the food pantry do to help their community? The local food pantry helps people who are having a financial crisis. They may have lost their job, or had a medical emergency, or their car may have broken down. The food pantry helps the people who are needy or who are poor and need some help getting food. People that go hungry for a long period of time will change as a person completely. More than seventy percent of people go hungry in the world. Going hungry for a certain period of time damages your mental health and physical health. When it dames your mental health it causes you to have negative thoughts about things. Going hungry also changes your physical health, it causes you to lose weight and it will mess up your respiratory system.', 75000, 'approved', '2022-02-05', '1635350463_images.jpg', 2, '2021-10-27 10:01:04', '2021-10-27 10:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `rate`, `comment`, `reviewer_id`, `time`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 8, 'Very good idea', 1, '27-12-2022', 1, NULL, NULL),
(2, 9, 'Nice', 1, '22-11-2022', 3, NULL, NULL),
(3, 9, 'Impressive', 1, '22-11-2022', 3, NULL, NULL),
(4, 10, 'There are plenty of compliments you can use to make someone feel great about themselves, but certain ones can be more appropriate than others. Depending on the scenario, the compliment you give can either drive home your admiration for someone', 2, '27-11-2022', 3, NULL, NULL),
(5, 8, 'I will donate here ....', 2, '22-11-2021', 4, NULL, NULL),
(6, 8, 'I will donate  ....', 2, '22-11-2021', 5, NULL, NULL),
(7, 8, 'ok..\r\n', 2, '22-11-2021', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(64) NOT NULL,
  `created_at` date NOT NULL,
  `expired_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`, `created_at`, `expired_at`) VALUES
(1, 'dipimamm@gmail.com', 'ywwikfmulHztCFHFBB3KOkOMTLQ2PVKh9m45e22ElFWNARyfkXTTDTb0FLQz7JzL', '2021-12-05', NULL),
(2, 'dipimamm@gmail.com', 'ZSheAe89n6oYO9CM5rpVwm0gShhIPCsMTcSGtT7GmRuy5Ow8wdgbA3qoigl4lDWY', '2021-12-05', NULL),
(3, 'dipimamm@gmail.com', 'YJMNfQVZujeujoN227PgUsag2eJNKjEznyubEo2Agrk1rG4SIWEVXZ1DIDf5niKv', '2021-12-16', NULL),
(4, 'dipimamm@gmail.com', 'itSBvibtPmSmeJH7GAjFedJ6rfcZWMV6UexMBcaxzcqNbxtJgwCXeeNXjIWMTk2C', '2021-12-16', NULL),
(5, 'dipimamm@gmail.com', 'rsu8cJiGDvyIvMHtKW60SYy2A8YhzYloHPtDsGQkUNN4zORm0r5TYBeFEIqj1Z18', '2021-12-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userinfos`
--

CREATE TABLE `userinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `initiators`
--
ALTER TABLE `initiators`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfos`
--
ALTER TABLE `userinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userinfos_phone_unique` (`phone`),
  ADD UNIQUE KEY `userinfos_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `a_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `tran_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initiators`
--
ALTER TABLE `initiators`
  MODIFY `i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `p_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfos`
--
ALTER TABLE `userinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
