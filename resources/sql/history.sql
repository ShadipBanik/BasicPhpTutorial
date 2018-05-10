-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 03:09 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `history`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_label`
--

CREATE TABLE `question_label` (
  `id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_label`
--

INSERT INTO `question_label` (`id`, `quest_id`, `label_id`) VALUES
(115, 106, 173),
(116, 106, 174),
(117, 106, 175),
(142, 152, 173),
(143, 152, 194),
(144, 153, 173),
(145, 153, 175),
(146, 153, 195),
(149, 154, 173),
(150, 154, 174),
(153, 156, 198),
(154, 156, 199);

-- --------------------------------------------------------

--
-- Table structure for table `quslevel`
--

CREATE TABLE `quslevel` (
  `lvl_ID` int(100) NOT NULL,
  `lvl_name` varchar(100) NOT NULL,
  `create_date` datetime(5) NOT NULL,
  `update_date` timestamp(5) NOT NULL DEFAULT '0000-00-00 00:00:00.00000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quslevel`
--

INSERT INTO `quslevel` (`lvl_ID`, `lvl_name`, `create_date`, `update_date`) VALUES
(173, 'html', '2018-05-08 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(174, 'ass', '2018-05-08 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(175, 'php', '2018-05-08 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(186, 'hss', '2018-05-09 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(194, 'js', '2018-05-09 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(195, 'json', '2018-05-09 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(198, 'Java', '2018-05-09 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(199, 'G+', '2018-05-09 00:00:00.00000', '0000-00-00 00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `qustion`
--

CREATE TABLE `qustion` (
  `qusID` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `qustion` varchar(800) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qustion`
--

INSERT INTO `qustion` (`qusID`, `title`, `qustion`, `create_date`, `update_date`) VALUES
(106, 'This Is Test question', 'This Is Test question', '2018-05-08', '0000-00-00'),
(152, 'This Is Test question', 'sfsef', '2018-05-09', '0000-00-00'),
(153, 'This Is Test question', 'hsrthdhdh', '2018-05-09', '0000-00-00'),
(154, 'This Is Test question', 'This Is Test', '2018-05-09', '2018-05-09'),
(156, 'uuu', 'kjhnkjhkhnkj', '2018-05-09', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `create_date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  `update_date` timestamp(5) NOT NULL DEFAULT '0000-00-00 00:00:00.00000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `create_date`, `update_date`) VALUES
(31, 'admin', '0000-00-00 00:00:00.00000', '0000-00-00 00:00:00.00000'),
(36, 'member', '2018-03-23 15:42:06.00000', '0000-00-00 00:00:00.00000'),
(37, 'user', '2018-03-23 16:24:17.00000', '0000-00-00 00:00:00.00000'),
(47, 'TESTRole', '2018-03-26 13:40:42.00000', '0000-00-00 00:00:00.00000'),
(76, 'hello', '2018-03-27 13:52:54.00000', '0000-00-00 00:00:00.00000'),
(78, 'new', '2018-03-28 16:28:15.00000', '0000-00-00 00:00:00.00000'),
(82, '444', '2018-03-28 17:20:36.00000', '0000-00-00 00:00:00.00000'),
(83, 'new_user', '2018-03-31 20:16:56.00000', '0000-00-00 00:00:00.00000'),
(84, 'EE', '2018-04-01 15:30:47.00000', '0000-00-00 00:00:00.00000'),
(85, 'it', '2018-04-11 13:32:26.00000', '0000-00-00 00:00:00.00000'),
(86, '', '2018-05-05 06:07:58.00000', '0000-00-00 00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `searchhistory`
--

CREATE TABLE `searchhistory` (
  `id` int(20) NOT NULL,
  `SearchFor` varchar(200) NOT NULL,
  `input` varchar(200) NOT NULL,
  `result` varchar(500) NOT NULL,
  `user_id` int(20) NOT NULL,
  `date_time` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchhistory`
--

INSERT INTO `searchhistory` (`id`, `SearchFor`, `input`, `result`, `user_id`, `date_time`) VALUES
(96, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br><br>#<br>##<br>###<br>', 5, '2018-03-21 10:22:06.00000'),
(97, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>#<br>##<br>###<br>####<br>', 5, '2018-03-21 10:27:11.00000'),
(98, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br><br><br><br><br>', 5, '2018-03-21 10:35:17.00000'),
(99, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>#<br>##<br>###<br>####<br>', 5, '2018-03-21 10:36:17.00000'),
(100, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>#<br />\n##<br />\n###<br />\n####<br />\n', 5, '2018-03-21 10:46:30.00000'),
(101, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>#*******<br>##*****<br>###***<br>####*<br>', 5, '2018-03-21 10:48:05.00000'),
(102, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br> *******<br>  *****<br>   ***<br>    *<br>', 5, '2018-03-21 10:48:38.00000'),
(103, 'diamond', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br> ', 5, '2018-03-21 12:39:02.00000'),
(104, 'divisible number count', '--divisible number5', 'count of two number divisible is: 0', 5, '2018-03-21 13:36:11.00000'),
(105, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 0', 5, '2018-03-21 13:41:03.00000'),
(106, 'divisible number count', '30--10divisible number5', 'count of two number divisible is: 0', 5, '2018-03-21 13:42:43.00000'),
(107, 'divisible number count', '10--30divisible number5', 'count of two number divisible is: 1', 5, '2018-03-21 13:47:36.00000'),
(108, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 1', 5, '2018-03-21 13:49:08.00000'),
(109, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 1', 5, '2018-03-21 13:50:42.00000'),
(110, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 1', 5, '2018-03-21 13:50:56.00000'),
(111, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 00', 5, '2018-03-21 13:52:39.00000'),
(112, 'divisible number count', '10--20divisible number5', 'count of two number divisible is: 3', 5, '2018-03-21 14:15:41.00000'),
(113, 'divisible number count', '135--835divisible number5', 'count of two number divisible is: 141', 5, '2018-03-21 14:16:05.00000'),
(114, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br> *******<br>  *****<br>   ***<br>    *<br>', 5, '2018-03-21 15:11:19.00000'),
(115, 'divisible number count', '0--100divisible number5', 'count of two number divisible is: 21', 5, '2018-03-21 15:11:34.00000'),
(116, 'divisible number count', '0--10divisible number5', 'count of two number divisible is: 3', 5, '2018-03-21 15:11:47.00000'),
(117, 'divisible number count', '1--10divisible number5', 'count of two number divisible is: 2', 5, '2018-03-21 15:12:09.00000'),
(118, 'divisible number count', '1--15divisible number5', 'count of two number divisible is: 3', 5, '2018-03-21 15:12:21.00000'),
(119, 'decimal--decimal', '100', '100', 5, '2018-03-24 08:06:56.00000'),
(120, 'decimal--binary', '100', '1100100', 5, '2018-03-25 08:07:23.00000'),
(121, 'decimal--binary', '100', '1100100', 5, '2018-03-25 08:07:23.00000'),
(122, 'binary--octal', '100', '4', 5, '2018-03-25 08:07:36.00000'),
(123, 'decimal--binary', '', '', 5, '2018-03-25 09:19:48.00000'),
(124, 'decimal--binary', '', '', 5, '2018-03-25 09:19:54.00000'),
(125, 'decimal--binary', '100', '1100100', 5, '2018-03-25 10:40:28.00000'),
(126, 'decimal--decimal', '', '', 5, '2018-03-26 13:18:19.00000'),
(127, 'diamond', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br> ', 5, '2018-03-26 13:20:08.00000'),
(128, 'decimal--decimal', '100', '100', 5, '2018-03-26 16:17:34.00000'),
(129, 'divisible number count', '100--600divisible number112', 'count of two number divisible is: 5', 5, '2018-03-27 09:24:49.00000'),
(130, 'piramid', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>', 5, '2018-03-27 11:27:50.00000'),
(131, 'piramid', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br> ', 5, '2018-03-27 11:27:58.00000'),
(132, 'String_Substring', 'rererere--re', 're occur 4 times in string', 5, '2018-03-27 11:28:18.00000'),
(133, 'piramid', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>', 5, '2018-03-27 14:06:15.00000'),
(134, 'divisible number count', '10--15divisible number5', 'count of two number divisible is: 2', 5, '2018-03-28 14:12:43.00000'),
(135, 'String_Substring', 'IOIOIO--IO', 'IO occur 3 times in string', 5, '2018-03-28 14:13:23.00000'),
(136, 'String_Substring', 'IOIOIO--IOI', 'IOI occur 1 times in string', 5, '2018-03-28 14:13:34.00000'),
(137, 'String_Substring', 'IOIOIO--IOIO', 'IOIO occur 1 times in string', 5, '2018-03-28 14:13:59.00000'),
(138, 'String_Substring', 'IOIOIO--IO', 'IO occur 3 times in string', 5, '2018-03-28 14:14:11.00000'),
(139, 'piramid', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>', 5, '2018-03-28 14:14:25.00000'),
(140, 'piramid', '15', '              *<br>             ***<br>            *****<br>           *******<br>          ********', 5, '2018-03-28 14:14:31.00000'),
(141, 'gcd', '100--24', '4', 5, '2018-03-30 07:21:44.00000'),
(142, 'decimal--decimal', '100', '100', 5, '2018-03-30 07:27:45.00000'),
(143, 'decimal--decimal', '100', '100', 5, '2018-03-30 07:33:28.00000'),
(144, 'binary--decimal', '100', '4', 5, '2018-03-30 07:33:51.00000'),
(145, 'hexadecimal--decimal', '1F', '31', 5, '2018-03-30 07:36:33.00000'),
(146, 'piramid', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>', 5, '2018-03-30 07:40:31.00000'),
(147, 'decimal--decimal', '', '', 5, '2018-03-30 08:09:10.00000'),
(148, 'diamond', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br> *******<br>  *****<br>   ***<br>    *<br>', 5, '2018-03-30 14:14:15.00000'),
(149, 'diamond', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br> ', 5, '2018-03-30 14:15:19.00000'),
(150, 'diamond', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br>   *************<br>  ***************<br> *****************<br>*******************<br> *****************<br>  ***************<br>   *************<br>    ***********<br>     *********<br>      *******<b', 5, '2018-03-30 14:20:47.00000'),
(151, 'diamond', '10', '         *<br>        ***<br>       *****<br>      *******<br>     *********<br>    ***********<br>   *************<br>  ***************<br> *****************<br>*******************<br> *****************<br>  ***************<br>   *************<br>    ***********<br>     *********<br>      *******<br>       *****<br>        ***<br>         *<br>', 5, '2018-03-30 14:22:02.00000'),
(152, 'piramid', '20', '                   *<br>                  ***<br>                 *****<br>                *******<br>               *********<br>              ***********<br>             *************<br>            ***************<br>           *****************<br>          *******************<br>         *********************<br>        ***********************<br>       *************************<br>      ***************************<br>     *****************************<br>    *******************************', 5, '2018-03-30 16:14:44.00000'),
(153, 'binary--decimal', '100', '4', 5, '2018-03-30 19:11:15.00000'),
(154, 'hexadecimal--binary', '11F', '100011111', 5, '2018-03-30 19:11:27.00000'),
(155, 'gcd', '25--5', '5', 5, '2018-03-30 19:11:40.00000'),
(156, 'lcm', '10--5', '10', 5, '2018-03-30 19:11:50.00000'),
(157, 'lcm', '1111--500', '555500', 5, '2018-03-30 19:12:00.00000'),
(158, '--', '', '', 5, '2018-03-31 11:52:41.00000'),
(159, '--', '', '', 5, '2018-03-31 11:52:42.00000'),
(160, '--', '', '', 5, '2018-03-31 11:52:45.00000'),
(161, '--', '', '', 5, '2018-03-31 11:53:20.00000'),
(162, 'decimal--decimal', '100', '100', 5, '2018-03-31 12:24:51.00000'),
(163, 'binary--decimal', '100', '4', 5, '2018-03-31 12:25:01.00000'),
(164, 'decimal--decimal', '100', '100', 5, '2018-03-31 12:35:11.00000'),
(165, 'octal--binary', '100', '1000000', 5, '2018-04-08 18:31:04.00000'),
(166, 'String_Substring', 'rererere--re', 're occur 4 times in string', 5, '2018-04-08 18:32:22.00000'),
(167, 'piramid', '5', '    *<br>   ***<br>  *****<br> *******<br>*********<br>', 5, '2018-04-08 18:32:35.00000'),
(168, 'binary--binary', '100', '100', 5, '2018-04-14 08:08:41.00000'),
(169, 'decimal--decimal', '2', '2', 5, '2018-05-06 17:10:48.00000'),
(170, 'decimal--binary', '2', '10', 5, '2018-05-06 17:10:52.00000'),
(171, 'decimal--octal', '2', '2', 5, '2018-05-06 17:10:57.00000'),
(172, 'decimal--octal', '20', '24', 5, '2018-05-06 17:11:05.00000'),
(173, 'decimal--binary', '20', '10100', 5, '2018-05-06 17:11:09.00000'),
(174, 'decimal--decimal', '20', '20', 5, '2018-05-06 17:11:12.00000'),
(175, 'decimal--hexadecimal', '20', '14', 5, '2018-05-06 17:11:16.00000'),
(176, 'decimal--hexadecimal', '20', '14', 5, '2018-05-06 17:11:19.00000'),
(177, 'gcd', '10--3', '1', 5, '2018-05-06 17:11:50.00000'),
(178, 'lcm', '10--3', '30', 5, '2018-05-06 17:11:55.00000'),
(179, 'String_Substring', '1221--22', '22 occur 1 times in string', 5, '2018-05-06 17:12:42.00000'),
(180, 'String_Substring', '122122--22', '22 occur 2 times in string', 5, '2018-05-06 17:12:48.00000'),
(181, 'String_Substring', '12212222--22', '22 occur 3 times in string', 5, '2018-05-06 17:12:52.00000'),
(182, 'String_Substring', '122122122--22', '22 occur 3 times in string', 5, '2018-05-06 17:12:59.00000'),
(183, 'String_Substring', '122122122522--22', '22 occur 4 times in string', 5, '2018-05-06 17:13:04.00000'),
(184, 'diamond', '3', '  *<br> ***<br>*****<br> ***<br>  *<br>', 5, '2018-05-06 17:25:55.00000'),
(185, 'piramid', '2', ' *<br>***<br>', 5, '2018-05-06 17:26:02.00000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(100) NOT NULL,
  `create_date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  `update_date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `role`, `create_date`, `update_date`) VALUES
(6, 'shadip', 'sha', 'shadip000@gmail.com', '12345', 31, '2018-03-22 18:00:00.00000', '2018-03-22 18:00:00.00000'),
(10, 'shadip banik', 'shadip banik', 'shadipbanik000@gmail.com', '12345', 31, '2018-03-23 15:55:27.00000', '2018-03-23 15:55:27.00000'),
(13, 'shadip banik', 'shadip banik', 'shadipbanik200@gmail.com', '12345', 36, '2018-03-23 16:23:27.00000', '2018-03-23 16:23:27.00000'),
(14, 'Sanjoy Kumer Deb', 'Sanjoy Kumer Deb', 'sanjoyd.cse@gmail.com', '123456', 31, '2018-03-23 18:26:14.00000', '2018-03-23 18:26:14.00000'),
(15, 'shadip banik', 'shadip banik', 'shadipbanik300@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 31, '2018-04-01 08:17:02.79542', '2018-03-23 18:50:31.00000'),
(16, 'sumi banik', 'sumi banik', 'sumisust@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 36, '2018-03-23 20:47:53.00000', '2018-03-23 20:47:53.00000'),
(17, 'rubi banik', 'rubi banik', 'rubi@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 37, '2018-04-01 10:08:03.00000', '2018-04-01 10:08:03.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_label`
--
ALTER TABLE `question_label`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_label_ibfk_1` (`label_id`),
  ADD KEY `question_label_ibfk_2` (`quest_id`);

--
-- Indexes for table `quslevel`
--
ALTER TABLE `quslevel`
  ADD PRIMARY KEY (`lvl_ID`),
  ADD UNIQUE KEY `lvl_name` (`lvl_name`);

--
-- Indexes for table `qustion`
--
ALTER TABLE `qustion`
  ADD PRIMARY KEY (`qusID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `searchhistory`
--
ALTER TABLE `searchhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_label`
--
ALTER TABLE `question_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `quslevel`
--
ALTER TABLE `quslevel`
  MODIFY `lvl_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `qustion`
--
ALTER TABLE `qustion`
  MODIFY `qusID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `searchhistory`
--
ALTER TABLE `searchhistory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question_label`
--
ALTER TABLE `question_label`
  ADD CONSTRAINT `question_label_ibfk_1` FOREIGN KEY (`label_id`) REFERENCES `quslevel` (`lvl_ID`),
  ADD CONSTRAINT `question_label_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `qustion` (`qusID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
