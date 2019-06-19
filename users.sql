-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:35 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindash`
--

CREATE TABLE `admindash` (
  `item_id` int(3) NOT NULL,
  `item` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindash`
--

INSERT INTO `admindash` (`item_id`, `item`, `link`) VALUES
(1, 'DASHBOARD', 'welcomeadmin.php'),
(2, 'PROFILE', 'profileadmin.php'),
(3, 'USER FEEDBACK', 'admin_user_griev.php'),
(4, 'ANONYMOUS FEEDBACK', 'anony.php'),
(5, 'VOTING', 'vote.php');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `dish_id` int(3) NOT NULL,
  `item` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `votes` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`dish_id`, `item`, `type`, `votes`, `image`) VALUES
(1, 'Aloo and Dal ki Tikki', 'starter', 0, 'tikki.jpg'),
(2, 'Veg Crispy', 'starter', 0, 'crispy.jpg'),
(3, 'Cheese Balls', 'starter', 0, 'cheese.jpg'),
(4, 'Cream of broccoli', 'soup', 0, 'broccoli.jpg'),
(5, 'Minestrone', 'soup', 0, 'minestrone.jpeg'),
(6, 'Tomato Soup', 'soup', 0, 'tomato.jpg'),
(7, 'Chhole Bhature', 'main course', 0, 'chhole.jpg'),
(8, 'Paneer Butter Masala', 'main course', 0, 'paneer.jpg'),
(9, 'Biryani', 'main course', 0, 'biryani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE `grievances` (
  `comment_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'ANONYMOUS',
  `comment` varchar(600) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`comment_id`, `username`, `comment`, `date`) VALUES
(11, 'ANONYMOUS', 'heyaaaaa this is cool.', '2019-06-19 18:17:18'),
(12, '', 'yo yo honey singh', '2019-06-19 22:30:11'),
(13, '', 'i love you shonzuuuuuuuuu', '2019-06-19 22:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `starter` int(3) NOT NULL DEFAULT 0,
  `soup` int(3) NOT NULL DEFAULT 0,
  `main_course` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `date`, `starter`, `soup`, `main_course`) VALUES
(1, 'rbajaj', 'golu', 'RAHUL', 'BAJAJ', 'rbajaj@gmail.com', '2019-06-19 17:51:39', 0, 0, 0),
(2, 'kohli', 'Golu@1234', 'SRISHTI', 'KOHLI', 'jhfruih@gmjo', '2019-06-19 17:51:39', 0, 0, 0),
(3, 'meenuk', 'Meenu@123', 'MEENU', 'KOHLI', 'bjchh@hj', '2019-06-19 19:14:39', 0, 0, 0),
(4, 'mishu123', 'Mishu@123', 'MISHU', 'BAJAJ', 'kjgfui@bbbfrk', '2019-06-19 22:42:48', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `admin_id` int(3) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`admin_id`, `first_name`, `last_name`, `username`, `password`, `email`, `date`) VALUES
(1, 'SALONI', 'KOHLI', 'saloni', 'golu', 'saloni@jifd', '2019-06-19 19:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `operation` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `operation`, `link`) VALUES
(1, 'HOME', 'homme.php'),
(3, 'IGDTUW', 'https://igdtuw.ac.in//'),
(4, 'SIGN-IN', 'login.php'),
(5, 'SIGN-UP', 'signup.php'),
(6, 'GRIEVANCES', 'grievances.php'),
(8, 'ADMIN', 'loginadmin.php');

-- --------------------------------------------------------

--
-- Table structure for table `userdash`
--

CREATE TABLE `userdash` (
  `item_id` int(3) NOT NULL,
  `item` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdash`
--

INSERT INTO `userdash` (`item_id`, `item`, `link`) VALUES
(1, 'DASHBOARD', 'welcome.php'),
(2, 'PROFILE', 'profile.php'),
(3, 'VOTE', 'menu.php'),
(4, 'GRIEVANCES', 'usergriev.php');

-- --------------------------------------------------------

--
-- Table structure for table `user_griev`
--

CREATE TABLE `user_griev` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_griev`
--

INSERT INTO `user_griev` (`id`, `username`, `comment`, `date`) VALUES
(1, 'rbajaj', 'nbkjbjn', '2019-06-19 18:19:26'),
(2, 'rbajaj', 'yoyo', '2019-06-19 19:03:55'),
(3, 'meenuk', 'i have a probllem', '2019-06-19 19:15:24'),
(4, 'mishu123', 'hello i love you', '2019-06-19 22:44:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindash`
--
ALTER TABLE `admindash`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `grievances`
--
ALTER TABLE `grievances`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdash`
--
ALTER TABLE `userdash`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user_griev`
--
ALTER TABLE `user_griev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindash`
--
ALTER TABLE `admindash`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `dish_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grievances`
--
ALTER TABLE `grievances`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdash`
--
ALTER TABLE `userdash`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_griev`
--
ALTER TABLE `user_griev`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
