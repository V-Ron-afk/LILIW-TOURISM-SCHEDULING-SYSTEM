-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 01:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltos2`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `arc_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `where_to` varchar(100) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `arrivals` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`arc_id`, `username`, `where_to`, `guest`, `arrivals`, `departure`) VALUES
(1, '13', 'Esmeris Farm', '10', '2022-08-15', '2022-08-25'),
(2, '14', 'Esmeris Farm', '12', '2022-08-08', '2022-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(11) NOT NULL,
  `gallery_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `images` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `gallery_id`, `user_id`, `comment`, `images`, `date`) VALUES
(7, 'kilangin', 12, 'qqq', '', '2022-10-28'),
(8, 'esmeris', 12, 'aaaa', '', '2022-10-28'),
(9, 'esmeris', 12, 'qqqqq', '', '2022-10-28'),
(10, 'kilangin', 12, 'aasasa', '', '2022-11-04'),
(11, 'kilangin', 12, 'beat', '', '2022-11-04'),
(12, 'kilangin', 12, 'maganda', '', '2022-11-04'),
(13, 'kilangin', 3, 'this is so beatifl place', '', '2022-11-06'),
(14, 'esmeris', 3, 'this place is so good', '', '2022-11-06'),
(15, 'kilangin', 13, 'wow', '', '2022-11-06'),
(16, 'resort', 13, 'sa', '', '2022-11-06'),
(17, 'resort', 13, 'nice place', '', '2022-11-06'),
(18, 'resort', 12, 'pretty nice place', '', '2022-11-06'),
(19, 'resort', 3, 'this place is so good', '', '2022-11-06'),
(20, 'esmeris', 23, 'this is so beatifl place', '', '2022-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inq_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `descriptions` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inq_id`, `username`, `subject`, `descriptions`) VALUES
(7, 'jeff', 'tourist spots', 'what is the best tourist spots'),
(8, 'echo', 'tourist place', 'gaano kalayo ang esmeris farm');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender`, `receiver`, `message`, `datetime`) VALUES
(4, 12, 1, 'hoy', '10-28-22'),
(5, 2, 12, 'da', '10-28-22'),
(13, 2, 12, 'sa', '10-28-22'),
(15, 1, 12, 'hi', '11-04-22'),
(34, 12, 2, 'asa', '11-06-22'),
(35, 2, 12, 'thanks', '11-06-22'),
(36, 13, 1, 'hello', '11-06-22'),
(37, 13, 1, 'can i ask a qestions??', '11-06-22'),
(38, 3, 1, 'can i ask a questions?', '11-06-22'),
(39, 1, 3, 'What is it?', '11-06-22'),
(40, 23, 1, 'can i ask a questions?', '11-08-22'),
(41, 3, 1, 'something about tourist spot', '11-23-22');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `arrivals` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_id`, `username`, `pack`, `arrivals`) VALUES
(10, 'jeff', '', '2022-09-22'),
(11, 'jethro', '', '2022-09-21'),
(12, 'echo', '', '2022-09-30'),
(16, 'jayvee', 'a4j brenas farm', '2022-12-01'),
(17, 'jayvee', 'esmeris farm', '2022-12-01'),
(18, 'jayvee', 'kilangin falls', '2022-12-01'),
(19, 'jayvee', 'lolo kaps strawberry farm', '2022-12-01'),
(22, 'jayvee', 'estampa', '2022-12-01'),
(23, 'jayvee', 'kilangin sunflower farm', '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `package_id`, `rate`, `date`) VALUES
(1, 1, 1, '1'),
(2, 1, 4, '2022-11-26'),
(3, 1, 5, '2022-11-26'),
(4, 1, 1, '2022-11-26'),
(5, 1, 5, '2022-11-26'),
(6, 1, 5, '2022-11-26'),
(7, 2, 5, '2022-11-26'),
(8, 2, 1, '2022-11-26'),
(9, 2, 3, '2022-11-26'),
(10, 2, 3, '2022-11-26'),
(11, 2, 5, '2022-11-26'),
(12, 2, 2, '2022-11-26'),
(13, 2, 5, '2022-11-26'),
(14, 4, 5, '2022-11-26'),
(15, 5, 5, '2022-11-26'),
(16, 3, 5, '2022-11-26'),
(17, 6, 5, '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `placeto` varchar(500) NOT NULL,
  `guest` varchar(30) NOT NULL,
  `arrivals` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `username`, `placeto`, `guest`, `arrivals`, `departure`, `status`) VALUES
(22, 'jethro', 'Kilangin Falls', '7', '2022-09-30', '2022-09-30', 'archive'),
(26, 'jeff', 'Esmeris Farm', '3', '2022-10-01', '2022-10-01', 'approve'),
(27, 'kieferot', 'Kilangin Falls', '6', '2022-09-23', '2022-09-23', 'archive'),
(29, 'jayvee', 'Brenas Farm', '3', '2022-10-08', '2022-10-08', ''),
(40, 'jobert', 'Kilangin Falls', '9', '2022-10-12', '2022-10-12', 'archive'),
(41, 'mark', 'Brenas Farm', '2', '2022-09-29', '2022-09-29', ''),
(42, 'julia', 'Esmeris Farm', '5', '2022-10-01', '2022-10-01', ''),
(43, 'maribeth', 'Kilangin Falls', '4', '2022-11-17', '2022-10-17', ''),
(44, 'kayxie', 'Kilangin Sunflower Farm', '2', '2022-09-30', '2022-09-30', ''),
(45, 'karen', 'Kilangin Sunflower Farm', '7', '2022-10-03', '2022-10-03', ''),
(46, 'angelyn', 'Silent Intergraded Farm', '5', '2022-09-30', '2022-09-30', ''),
(47, 'aldlyn', 'St. John The Baptist Church', '4', '2022-10-07', '2022-10-07', ''),
(48, 'jens', 'Brenas Farm', '3', '2022-10-03', '2022-10-03', ''),
(49, 'ram', 'Silent Intergraded Farm', '8', '2022-10-06', '2022-10-06', ''),
(50, 'ryan', 'St. John The Baptist Church', '2', '2022-09-28', '2022-09-26', ''),
(51, 'justine', 'Brenas Farm', '5', '2022-09-29', '2022-09-29', ''),
(52, 'noel', 'Kilangin Sunflower Farm', '3', '2022-10-06', '2022-10-06', ''),
(53, 'tuneng', 'St. John The Baptist Church', '6', '2022-10-05', '2022-10-05', ''),
(54, 'anthony', 'Kilangin Falls', '3', '2022-09-28', '2022-09-28', ''),
(55, 'andrei', 'Silent Intergraded Farm', '4', '2022-10-08', '2022-10-08', ''),
(56, 'echo', 'Brenas Farm', '6', '2022-09-30', '2022-09-30', ''),
(57, 'jethro', 'Esmeris Farm', '4', '2022-11-04', '2022-11-04', ''),
(64, 'jethro', 'Esmeris Farm', '1', '2022-11-04', '2022-11-04', ''),
(67, 'jethro', 'Esmeris Farm', '31231', '2022-11-04', '2022-11-04', ''),
(68, 'kieferot', 'Esmeris Farm,Brenas Farm,Lolo Kaps Strawberry Farm,Kilangin Falls,Kilangin Sunflower Farm,Silent Intergraded Farm,St. John The Baptist Church,', '7', '2022-12-02', '2022-12-03', ''),
(69, 'con', 'Esmeris Farm,Brenas Farm,Lolo Kaps Strawberry Farm,Kilangin Falls,Kilangin Sunflower Farm,Silent Intergraded Farm,St. John The Baptist Church,', '9', '2022-12-02', '2022-12-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Artist', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(4, 'tour 1', 'group a', '2022-09-12 10:21:00', '2022-09-12 00:21:00'),
(5, 'STW', 'Areza Mall', '2022-09-16 08:00:00', '2022-09-16 12:00:00'),
(6, 'Go Negosyo', '10 pax BTAST Demo/Shopping', '2022-09-17 07:00:00', '2022-09-17 10:00:00'),
(7, 'Tour', 'Demo Shopping', '2022-09-24 08:00:00', '2022-09-24 11:00:00'),
(8, 'NDCP', 'Demo/Shopping', '2022-09-30 08:44:00', '2022-09-30 12:00:00'),
(9, 'tour', 'group a Brenas Farm', '2022-09-23 08:00:00', '2022-09-23 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `valid_id` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `contact`, `valid_id`, `password`, `cpassword`, `role`, `images`) VALUES
(1, 'Naven Oblepias', 'naven', 'noblepias29@gmail.com', '09070312015', 'pic.jpg', '21232f297a57a5a743894a0e4a801fc3', '', 'admin', ''),
(2, 'Arem Arvesu', 'Staff', 'princearemarvesu@gmail.com', '09079580730', 'pic1.jpg', '1253208465b1efa876f982d8a9e73eef', '', 'Staff', ''),
(3, 'Jayvee Salabsabin', 'jayvee', 'jayveesalabsabin55@gmail.com', '09070312015', 'pic2.jpg', '9890f4e423f1fa56e6eaf13e95bcd590', '', 'tourist', ''),
(10, 'Aina Rose Ramos', 'kieferot', 'jsalabsabin087@gmail.com', '09978791524', '6323c2f1c5fa54.36955582.png', '589f89c12176229ffca5ae2c7ec2ed5d', '', 'tourist', ''),
(11, 'Jeff Tuscano', 'jeff', 'jefftuscano@gmail.com', '09070306837', '632753ada2acd6.47734030.png', 'dc2af307c55523ce42701dbe43880d35', '', 'tourist', ''),
(12, 'jethro leyco', 'jethro', 'jleyco@gmail.com', '09045795745', '63275e9d14a5b5.57350193.png', 'ffc1dcfb14617c751d267ed405e3b0bc', '', 'tourist', ''),
(13, 'jobert oquialda', 'jobert', 'joquialda123@gmail.com', '090753577480', '6329ea0009bfb6.49039423.png', 'c35b9943b31b48e7b51588299cd00527', '', 'tourist', ''),
(14, 'Mark Reyes', 'mark', 'mreyes@gmail.com', '09067489034', '6329ea84205d69.05289117.png', 'ac673f4dbac79922838901b5974a419a', '', 'tourist', ''),
(15, 'julia napiza', 'julia', 'jnapiza@gmail.com', '09758934617', '6329eb2c622499.04558927.png', 'c2e285cb33cecdbeb83d2189e983a8c0', '', 'tourist', ''),
(16, 'maribeth panaglima', 'maribeth', 'pmaribeth@gmail.com', '09087490268', '6329eb8a2d9c98.83463187.png', '71d8ef2774ba81627c9546d3cd55c51d', '', 'tourist', ''),
(17, 'kayxie monteiro', 'kayxie', 'kmonteiro1@gmail.com', '09053840135', '6329ec0a2ed087.26581745.png', '47eb3173c67ede5088b33fddafa8e2bf', '', 'tourist', ''),
(18, 'karen de leon', 'karen', 'dlkaren@gail.com', '09086894569', '6329ecfb1bb7a9.10064580.jpg', 'ba952731f97fb058035aa399b1cb3d5c', '', 'tourist', ''),
(19, 'Angelyn Carpio', 'angelyn', 'acarpio1@gmail.com', '09657935619', '6329ed92b8f0c8.26547054.png', 'db0de34660b8f3ea50f4e958adb6125b', '', 'tourist', ''),
(20, 'aldlyn escala', 'aldlyn', 'aescala24@gmail.com', '09067390461', '6329ee1bc01887.86476288.png', '1e2cb67918b9f730ee8252c0f41b8b39', '', 'tourist', ''),
(21, 'jens nullen', 'jens', 'jensnullen@gmail.com', '09067490578', '6329ee79025125.48796285.png', 'e19457c81e62b6bb21e9031a5a187cdf', '', 'tourist', ''),
(22, 'ram david alarva', 'ram', 'ralarva@gmail.com', '09658308629', '6329ef463e8df5.51221967.png', '172522ec1028ab781d9dfd17eaca4427', '', 'tourist', ''),
(23, 'Ryan San Luis', 'ryan', 'ryanchristiansanluis@gmail.com', '09657359052', '6329f060785756.16405738.png', '10c7ccc7a4f0aff03c915c485565b9da', '', 'tourist', ''),
(24, 'justine salabsabin', 'justine', 'salabsabin12@gmail.com', '09076589354', '6329f132bc4526.54907133.png', 'b55050b2f605b7cf0d48346ff3d432d3', '', 'tourist', ''),
(25, 'noel mari alavarez', 'noel', 'nmalvarez@gmail.com', '09558946803', '6329f1a0bc6154.50305290.png', 'd5d8bdcfcc8bae5fd560e60b7f01cc0e', '', 'tourist', ''),
(26, 'hilton coronado', 'tuneng', 'coronado48@gmail.com', '09561589025', '6329f20821c896.27342049.png', '58dfdc118db62248d7c9edf19ff01e10', '', 'tourist', ''),
(27, 'Anthony Malasa', 'anthony', 'malasaa@gmail.com', '09756189765', '6329f2794bc371.25439330.png', '65fbef05e01fac390cb3fa073fb3e8cf', '', 'tourist', ''),
(28, 'anrei opinio', 'andrei', 'jaopinio@gmail.com', '09076354901', '6329f305456168.49687809.jpg', 'b2d09b73eb5ad0228f9cb2e51485a45f', '', 'tourist', ''),
(29, 'jericho entrada', 'echo', 'jentrada@gmail.com', '09751906578', '6329f948285c51.23640636.png', '55aa11e530a00777f4fff5e6df911685', '', 'tourist', ''),
(30, 'ma. Concepcion Herradura', 'con', 'cherradura@gmail.com', '09460993517', '638779b40258c9.01293362.jpg', 'e8d3aa7bef6d7edb2c5c701d97219b65', 'e8d3aa7bef6d7edb2c5c701d97219b65', 'tourist', '638779b4037c66.97340758.jpg'),
(31, 'Arjay Andal', 'arjay1', 'Aandal@gmail.com', '09986245236', '6388358f558176.97964654.jpg', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'tourist', '6388358f55b376.39703965.jpg'),
(32, 'ab', 'b', 'Aandal@gmail.com', '08', '6388c384ddb096.40257310.jpg', '4124bc0a9335c27f086f24ba207a4912', '0cc175b9c0f1b6a831c399e269772661', 'tourist', '6388c384dde094.05592174.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`arc_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `arc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
