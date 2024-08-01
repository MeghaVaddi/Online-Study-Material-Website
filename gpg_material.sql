-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpg_material`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `b_stream` varchar(5) NOT NULL,
  `b_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`b_id`, `b_name`, `b_stream`, `b_status`) VALUES
(2, 'IT', '1', '1'),
(3, 'CE', '1', '1'),
(4, 'Mechanical', '2', '1'),
(6, 'Electrical', '2', '1'),
(7, 'Chemical', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `c_message` varchar(200) DEFAULT NULL,
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `c_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_message`, `c_time`, `c_status`) VALUES
(1, 'random', 'abc@gmail.com', '7894567890', 'wsdfhvb nmx,lksjeofhruegvhdbj ', '2022-03-14 16:51:29', '1'),
(2, 'Student22', 'student22@gmail.com', '9898989898', 'Contact Page Testing', '2022-03-17 06:14:42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `d_id` int(11) NOT NULL,
  `b_stream` varchar(5) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`d_id`, `b_stream`, `l_id`, `b_id`) VALUES
(2, '1', 17, 2),
(3, '1', 18, 3),
(4, '2', 19, 4),
(5, '1', 20, 2),
(6, '2', 21, 7),
(7, '2', 24, 6),
(8, '2', 25, 6),
(9, '2', 26, 6),
(10, '2', 27, 6),
(11, '2', 28, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  `f_status` varchar(5) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `feedback`, `f_status`, `l_id`) VALUES
(1, 'Nice ', '1', 21),
(2, 'this is working perfectly', '1', 20),
(6, 'hello  qwertykl', '1', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `l_email` varchar(50) DEFAULT NULL,
  `l_phone` varchar(20) DEFAULT NULL,
  `l_pass` varchar(20) DEFAULT NULL,
  `l_add` varchar(100) DEFAULT NULL,
  `l_img` varchar(20) DEFAULT NULL,
  `l_status` varchar(10) DEFAULT NULL,
  `l_role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_pass`, `l_add`, `l_img`, `l_status`, `l_role`) VALUES
(1, 'admin1', 'zeelthakkar237@gmail.com', '9898989898', 'Admin@123', '      abad', 'photos/user3.jpg', '1', '1'),
(2, 'admin2', 'admin2@gmail.com', '9898989898', 'Admin123', '   abad', 'photos/user7.png', '1', '1'),
(15, 'admin3', 'admin3@gmail.com', '9898989898', '4BPCK8', ' abad', 'photos/Default.png', '1', '1'),
(17, 'faculty1', 'faculty1@gmail.com', '9898989898', 'faculty1', '    abad', 'photos/user4.jpg', '1', '2'),
(18, 'faculty2', 'faculty2@gmail.com', '9898989898', 'DOFN3L', ' abad', 'photos/Default.png', '1', '2'),
(19, 'faculty3', 'faculty3@gmail.com', '9898989898', '05APG1', ' abad', 'photos/Default.png', '1', '2'),
(20, 'user1', 'user1@gmail.com', '9898989898', 'user1', '   abad', 'photos/Default.png', '1', '3'),
(21, 'user2', 'user2@gmail.com', '7897897894', 'Qwerty123', 'Ahmedabad', 'photos/user8.png', '1', '3'),
(23, 'admin4', 'admin4@gmail.com', '9898989898', 'ZVS47I', ' XYZ Place ', 'photos/Default.png', '1', '1'),
(27, 'Student 3', 'student3@gmail.com', '9898989898', 'GKVM9T', ' Near Amul parlour', 'photos/Default.png', '1', '3'),
(28, 'Faculty 4', 'faculty4@gmail.com', '9898989898', 'CD1FWE', ' Near Amul parlour Opp XYZ School', 'photos/Default.png', '1', '2'),
(35, 'user 5', 'zeelthakkar237@gmail.com', '9898989898', 'IUDMZH', 'Opp Amul parlour Near Hospital', 'photos/Default.png', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `m_id` int(11) NOT NULL,
  `m_type` varchar(5) DEFAULT NULL,
  `m_material` varchar(150) DEFAULT NULL,
  `m_name` varchar(150) NOT NULL,
  `m_status` varchar(5) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`m_id`, `m_type`, `m_material`, `m_name`, `m_status`, `l_id`, `sub_id`) VALUES
(3, '2', 'photos/best seller book Change or Die.pdf', 'Practical 1 ', '2', 18, 4),
(4, '4', 'photos/how successful people think.pdf', 'Paper 1', '2', 17, 2),
(5, '5', 'photos/how to speak.PDF', 'chemical', '2', 17, 5),
(7, '3', 'photos/How To Talk TO Anyone 92 Little Tricks For Big Success In Relationships.PDF', 'Question Bank for Mid Sem Exams', '2', 19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `o_id` int(11) NOT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `o_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`o_id`, `otp`, `o_time`, `l_id`) VALUES
(1, '918319', '2022-03-09 10:59:01', 18),
(2, '523410', '2022-03-09 10:59:29', 18),
(3, '858783', '2022-03-09 12:04:17', 18),
(4, '215916', '2022-03-09 12:19:28', 18),
(5, '859515', '2022-03-09 12:25:38', 18),
(6, '318849', '2022-03-09 12:26:50', 0),
(7, '645797', '2022-03-09 18:04:48', 18),
(8, '717551', '2022-03-15 06:16:27', 21),
(9, '835017', '2022-03-15 06:21:45', 21),
(10, '818044', '2022-03-17 07:34:07', 21),
(11, '966142', '2022-04-01 14:37:25', 1),
(12, '556070', '2022-04-01 14:37:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(50) DEFAULT NULL,
  `sub_status` varchar(5) DEFAULT NULL,
  `b_stream` varchar(5) NOT NULL,
  `b_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`sub_id`, `sub_name`, `sub_status`, `b_stream`, `b_id`) VALUES
(2, 'DBMS', '1', '1', 2),
(3, 'IoT', '1', '1', 3),
(4, 'Engine', '1', '2', 4),
(5, 'C++', '1', '1', 2),
(6, 'Chemical Subject', '1', '2', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
