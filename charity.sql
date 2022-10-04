-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 11:53 AM
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
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_username` varchar(200) NOT NULL,
  `a_password` varchar(200) NOT NULL,
  `a_contact` varchar(200) NOT NULL,
  `a_address` varchar(200) NOT NULL,
  `a_gender` varchar(200) NOT NULL,
  `a_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_contact`, `a_address`, `a_gender`, `a_img`) VALUES
(1, 'Rahman', 'rahman@gmail.com', '2233', '03025738783', 'High School stop haveli lakha', 'male', 'IMG_20201124_173228.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_group` varchar(200) NOT NULL,
  `b_botle` varchar(200) NOT NULL,
  `b_hospital` varchar(200) NOT NULL,
  `b_username` varchar(200) NOT NULL,
  `b_password` varchar(200) NOT NULL,
  `b_contact` varchar(200) NOT NULL,
  `b_cnic` varchar(200) NOT NULL,
  `b_address` varchar(200) NOT NULL,
  `b_date` varchar(200) NOT NULL,
  `b_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`b_id`, `b_name`, `b_group`, `b_botle`, `b_hospital`, `b_username`, `b_password`, `b_contact`, `b_cnic`, `b_address`, `b_date`, `b_gender`) VALUES
(1, 'Ali', 'Select the blood group', '2', 'Civil Hospital Sahiwal', 'ali@gmailc.com', 'ali8978A1!!', '03158998765', '35301-7898076-6', 'Korangi industrail area karachi', '2022-06-26', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_brand` varchar(200) NOT NULL,
  `c_mquantity` varchar(200) NOT NULL,
  `c_fquantity` varchar(200) NOT NULL,
  `c_username` varchar(200) NOT NULL,
  `c_password` varchar(200) NOT NULL,
  `c_contact` varchar(200) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`c_id`, `c_name`, `c_brand`, `c_mquantity`, `c_fquantity`, `c_username`, `c_password`, `c_contact`, `c_address`, `c_gender`) VALUES
(1, 'Ali', 'Sana Safinaz', '11', '21', 'ali@gmailc.com', 'ali8978A1!!', '03158998765', 'Korangi industrail area karachi', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_email` varchar(200) NOT NULL,
  `c_subject` varchar(200) NOT NULL,
  `c_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(1, 'Rab Nawaz', 'rabnawaz@gmail.com', 'Need Clothes', 'I want a clothes for eid.'),
(2, 'Bilal Hassan', 'bilalhassankhichi@gmail.com', 'Need Blood', 'I want a A+ blood for delivery case.');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(200) NOT NULL,
  `d_username` varchar(200) NOT NULL,
  `d_password` varchar(200) NOT NULL,
  `d_cnic` varchar(200) NOT NULL,
  `d_contact` varchar(200) NOT NULL,
  `d_city` varchar(200) NOT NULL,
  `d_address` varchar(200) NOT NULL,
  `d_status` varchar(200) NOT NULL,
  `d_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`d_id`, `d_name`, `d_username`, `d_password`, `d_cnic`, `d_contact`, `d_city`, `d_address`, `d_status`, `d_gender`) VALUES
(2, 'Masood', 'masood@gmail.com', 'Masood2345!', '35301-6789987-6', '03118987789', 'Islamabad', 'Islamabad', 'Yearly', 'Female'),
(3, 'Nabeel', 'Nabeel@gmail.com', 'Nabeel23454!', '35301-0789265-4', '03098767852', 'Peshawar', 'Shaheed hopital ', 'other', 'Female'),
(4, 'Usama', 'usama@gmail.com', 'Usama9088!', '36301-8979267-3', '03078998765', 'Sahiwal', 'Jogi chock', 'other', 'Female'),
(6, 'Zanobia', 'zanobia@gmail.com', 'zanobia23445', '3540167890987', '03457898765', 'Multan', 'sector h/9 Islamabad', '', 'Female'),
(7, 'Abdul Hameed', 'hameed12@gmail.com', '1122', '3530181850449', '+923025738783', 'Okara', 'Farid Town Sahiwal', '', 'Male'),
(8, 'zain', 'Zain@yaahoo.com', 'zain1234', '3530189764534', '030597887987', 'Islamabad', 'Sector H/9 islamabad', '', 'Male'),
(9, 'Abdul Rasheed', 'rasheed@gmail.com', 'rasheed1122', '3530182850559', '+923003334518', 'Haveli Lakha', 'High School Stop Haveli Lakha', '', 'Male'),
(10, 'abdul rahman', 'abdul@gmail.com', 'lahore', '3530182850559', '+923003334518', 'Lahore', 'Haveli lakha ', '', 'Male'),
(11, 'danish ', 'danish@gamil.com', 'danish4566', '3530112345678', '03345678965', 'Multan', 'Green Town Multan', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `m_money` varchar(200) NOT NULL,
  `m_accountno` varchar(200) NOT NULL,
  `m_accountn` varchar(200) NOT NULL,
  `m_username` varchar(200) NOT NULL,
  `m_password` varchar(200) NOT NULL,
  `m_contact` varchar(200) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `m_status` varchar(200) NOT NULL,
  `m_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receivery`
--

CREATE TABLE `receivery` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_cnic` varchar(200) NOT NULL,
  `r_username` varchar(200) NOT NULL,
  `r_password` varchar(200) NOT NULL,
  `r_contact` varchar(200) NOT NULL,
  `r_need` varchar(200) NOT NULL,
  `r_case` varchar(200) NOT NULL,
  `r_city` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivery`
--

INSERT INTO `receivery` (`r_id`, `r_name`, `r_cnic`, `r_username`, `r_password`, `r_contact`, `r_need`, `r_case`, `r_city`, `r_address`, `r_gender`) VALUES
(1, 'Zubair Hanif', '3530181828331', 'zubair@gmail.com', 'zubair1122', '923012345678', 'Blood', 'Delivery case', 'Haveli Lakha', 'High School Stop haveli lakha', 'Male'),
(2, 'Basit', '3530181232331', 'basit@gmail.com', 'basit1122', '923012443678', 'Clothes', 'Eid Day', 'Haveli Lakha', 'High School Stop haveli lakha', 'Male'),
(3, 'Adil Sajid', '3530181823211', 'adil@gmail.com', 'adil1122', '92301453536', 'Finance', 'School Fee', 'Okara', 'Cool Street', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_username` varchar(200) NOT NULL,
  `r_password` varchar(200) NOT NULL,
  `r_cnic` varchar(200) NOT NULL,
  `r_contact` varchar(200) NOT NULL,
  `r_city` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`r_id`, `r_name`, `r_username`, `r_password`, `r_cnic`, `r_contact`, `r_city`, `r_address`, `r_gender`) VALUES
(16, 'abdul rahman', 'rahman@gmail.com', 'rahman12!!A', '35301-8185044-9', '03058967999', 'Haveli Lakha', 'Farid Town Sahiwal', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_department` varchar(200) NOT NULL,
  `t_post` varchar(200) NOT NULL,
  `t_salary` varchar(200) NOT NULL,
  `t_username` varchar(200) NOT NULL,
  `t_password` varchar(200) NOT NULL,
  `t_contact` varchar(200) NOT NULL,
  `t_city` varchar(200) NOT NULL,
  `t_address` varchar(200) NOT NULL,
  `t_gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `t_name`, `t_department`, `t_post`, `t_salary`, `t_username`, `t_password`, `t_contact`, `t_city`, `t_address`, `t_gender`) VALUES
(1, 'Zain Sajjid', 'Blood Department', 'Manager', '100000', 'zaincharity@gmail.com', 'charity', '923016914483', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(2, 'Bilal Hassan', 'Clothes Department', 'Manager', '100000', 'bilalcharity@gmail.com', 'charity', '923059133898', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(3, 'Danish Kaleem', 'Finance Department', 'Manager', '1000000', 'danishcharity@gmail.com', 'charity', '923096959818', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(4, 'Abdul Basit', 'Blood Department', 'Employee ', '400000', 'basitcharity@gmail.com', 'basit', '923090125125', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(5, 'Ahmad', 'Finance Department', 'Employee ', '45000', 'ahmadcharity@gmail.com', 'charity', '923045442498', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(6, 'Amir Ch', 'Clothes Department', 'Employee ', '48000', 'amircharity@gmail.com', 'charity', '923069615392', 'Sahiwal', 'Farid Town Sahiwal', 'Male'),
(7, 'Hania amir', 'Clothes Department', 'Assistant manager', '65000', 'haniacharity@gmail.com', 'charity', '923025783387', 'Sahiwal', 'Farid Town Sahiwal', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `receivery`
--
ALTER TABLE `receivery`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receivery`
--
ALTER TABLE `receivery`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
