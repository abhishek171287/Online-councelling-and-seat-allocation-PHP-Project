-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 06:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeca`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `password`) VALUES
('abhishek.chakraborty171287@gmail.com', 'p@55word');

-- --------------------------------------------------------

--
-- Table structure for table `councellingcities`
--

CREATE TABLE `councellingcities` (
  `cityid` int(15) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `councellingcities`
--

INSERT INTO `councellingcities` (`cityid`, `district`, `city`) VALUES
(6, 'jg', 'SDAASD SDA1'),
(12, 'yqow', 'weq1'),
(14, 'yqow', 'dsadsa'),
(15, 'sdadsadsa', '3212asd'),
(17, 'dasssssssss', 'awesdrfasdfg'),
(18, 'sda', 'DAAS DDSA'),
(19, 'uriyapa', 'das'),
(20, 'uriyapa', 'sdaasd');

-- --------------------------------------------------------

--
-- Table structure for table `councellingstudents`
--

CREATE TABLE `councellingstudents` (
  `applicationid` int(10) NOT NULL,
  `rollno` int(50) NOT NULL,
  `candidatename` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `rank` int(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `aadhar` varchar(250) NOT NULL,
  `address` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `chalan` varchar(50) NOT NULL,
  `payername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `councellingstudents`
--

INSERT INTO `councellingstudents` (`applicationid`, `rollno`, `candidatename`, `fathername`, `mothername`, `dob`, `rank`, `institute`, `gender`, `aadhar`, `address`, `locality`, `city`, `state`, `district`, `pincode`, `email`, `mobile`, `photo`, `sign`, `bank`, `chalan`, `payername`) VALUES
(201910015, 92603404, 'Meghalee Dey', 'Hira Dey', 'Priya Dey', '1992-09-12', 1, 'Jadavpur University', 'female', '1234 5678 9101', ' Chowbaga Road P.O, Anandapur, East Kolkata Twp, K', '', 'Kolkata', '2', '8', 722123, 'abhishek.chakraborty171287@gmail.com', '9233232323', '', '', 'Bank of Baroda', 'Aw12222', 'ads sda'),
(201910016, 92601114, 'Shivam Das', 'Ayush Das', 'Reema Das', '1992-12-04', 50, 'Jadavpur University', 'male', '1122 3333 4444', ' Chowbaga Road P.O, Anandapur, East Kolkata Twp, K', '', 'Kolkata', '2', '8', 221222, 'abhishek.chakraborty2171287@gmail.com', '9123456780', '', '', 'Bank of Baroda', 'Aw22211', 'sdads'),
(201910017, 92605393, 'Anabil Bhattacharya', 'Gautam Bhattacharya', 'Mira Bhattacharya', '1990-12-29', 62, 'calcutta university', 'male', '9876 5432 1099', 'Chowbaga Road P.O/- Anandapur, East Kolkata Twp, K', 'sa', 'Kolkata', '3', '27', 312322, 'abhishek.chakrabort@gmail.com', '9088365980', '', '', 'Bank of Maharashtra', 'Qr43435', 'Adsdsa'),
(201910018, 92603128, 'Sumana Biswas', 'Meet Biswas', 'Mati Biswas', '1993-04-04', 89, 'Kalyani Government Engineering College', 'female', '9999 9999 9999', ' Chowbaga Road P.O, Anandapur, East Kolkata Twp, K', 'gh', 'vbn', '2', '5', 199999, 'abhishek.chakrabortydfg171287@gmail.com', '9212124230', '', '', 'Bank of Baroda', 'Uy90909', 'cvb'),
(201910019, 92604249, 'Arani Majumder', 'cfgvb', 'cvb', '1999-12-23', 100, 'North Benagal University', 'female', '9898 9898 9999', 'vbngvbn', '', 'vbn', '4', '97', 998888, 'abhishekchakraborty171287@gmail.com', '7790909099', '', '', 'Bank of Baroda', 'Uy88777', 'vgb'),
(201910020, 92603444, 'Shilpi Barua', 'xcvb', 'xcv', '1982-08-20', 116, 'Kalyani Government Engineering College', 'female', '9099 8787 7666', 'cvbvbn', '', 'vbnn ', '2', '12', 767677, 'abhishek.chakraborty666171287@gmail.com', '9213213229', '', '', 'Bank of Baroda', 'Ut76766', 'cvb'),
(201910021, 92601146, 'Ashish Kumar Shaw', 'vbn', 'vbn', '1999-12-10', 147, 'Techno India Salt Lake', 'female', '1211 3232 3233', 'fgvbbbn', '', ' gb', '3', '18', 767677, 'abhishechakraborty171287@gmail.com', '9898989898', '', '', 'Bank of Maharashtra', 'Uy90000', 'bnm'),
(201910022, 92606017, 'Sourim Das', 'gvbhn', 'bn ghb', '1999-12-03', 761, 'JIS College Of Technology', 'male', '9898 7777 7676', 'vbn vbn', 'vbn', 'bbvbn', '2', '13', 767677, 'bhishek.chakraborty171287@gmail.com', '9887766554', '', '', 'Central Bank of India', 'Yt67676', 'vbn');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `ID` int(10) NOT NULL,
  `COUNTER` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ID`, `COUNTER`) VALUES
(1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `stateid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `district`, `stateid`) VALUES
(1, 'Nicobar	', 1),
(2, 'North and Middle Andaman', 1),
(3, 'South Andaman', 1),
(4, 'Anantapur', 2),
(5, 'Chittoor', 2),
(6, 'East Godavari', 2),
(7, 'Guntur', 2),
(8, 'Kadapa', 2),
(9, 'Krishna	', 2),
(10, 'Kurnool', 2),
(11, 'Prakasam', 2),
(12, 'Sri Potti Sriramulu Nellore', 2),
(13, 'Srikakulam', 2),
(14, 'Visakhapatnam', 2),
(15, 'Vizianagaram', 2),
(16, 'West Godavari', 2),
(17, 'Changlang', 3),
(18, 'Upper Dibang Vally', 3),
(19, 'East Kameng', 3),
(20, 'East Siang', 3),
(21, 'Lohit', 3),
(22, 'Lower Subansiri', 3),
(23, 'Papum-Pare', 3),
(24, 'Tawang', 3),
(25, 'Tirap', 3),
(26, 'Upper Siang	', 3),
(27, 'Upper Subansiri', 3),
(28, 'West Kameng', 3),
(29, 'West Siang', 3),
(30, 'Anjaw', 3),
(31, 'Lower Dibang Vally', 3),
(32, 'Kurung Kumey', 3),
(75, 'Goalpara', 4),
(76, 'Golaghat', 4),
(77, 'Hailakandi', 4),
(78, 'Jorhat', 4),
(79, 'Karbi Anglong', 4),
(80, 'Karimganj', 4),
(81, 'Kokrajhar', 4),
(82, 'Lakhimpur', 4),
(83, 'Morigaon', 4),
(84, 'Nagaon', 4),
(85, 'Nalbari', 4),
(86, 'Dima Hasao', 4),
(87, 'Sivasagar', 4),
(88, 'Sonitpur', 4),
(89, 'Tinsukia', 4),
(90, 'Kamrup', 4),
(91, 'Kamrup Metropolitan', 4),
(92, 'Baksa', 4),
(93, 'Udalguri', 4),
(94, 'Chirang', 4),
(95, 'Barpeta', 4),
(96, 'Bongaigaon', 4),
(97, 'Cachar', 4),
(98, 'Darrang', 4),
(99, 'Dhemaji', 4),
(100, 'Dhubri', 4),
(101, 'Dibrugarh', 4),
(102, 'Alipurduar', 35),
(103, 'Bankura', 35),
(104, 'Paschim Bardhaman', 35),
(105, 'Purba Bardhaman', 35),
(106, 'Birbhum', 35),
(107, 'Cooch Behar', 35),
(108, 'Darjeeling', 35),
(109, 'Uttar Dinajpur', 35),
(110, 'Dakshin Dinajpur', 35),
(111, 'Hooghly', 35),
(114, 'Howrah', 35),
(115, 'Jalpaiguri	', 35),
(116, 'Jhargram	', 35),
(117, 'Kolkata', 35),
(118, 'Kalimpong', 35),
(119, 'Malda	', 35),
(120, 'Paschim Medinipur', 35),
(121, 'Purba Medinipur', 35),
(122, 'Murshidabad', 35),
(123, 'Nadia', 35),
(124, 'North 24 Parganas', 35),
(125, 'South 24 Parganas	', 35),
(126, 'Purulia', 35);

-- --------------------------------------------------------

--
-- Table structure for table `examdistrict`
--

CREATE TABLE `examdistrict` (
  `DistrictID` int(11) NOT NULL,
  `ExamDistrict` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdistrict`
--

INSERT INTO `examdistrict` (`DistrictID`, `ExamDistrict`) VALUES
(115, 'abhimanyu'),
(114, 'abhishek '),
(108, 'bdsadsa1'),
(107, 'das'),
(106, 'dasssssssss'),
(109, 'dsfghjk'),
(112, 'ewasd'),
(95, 'ewqewq12'),
(98, 'jg'),
(93, 'sda'),
(113, 'SDA DSA'),
(110, 'sdadsadsa'),
(96, 'uriyapa'),
(104, 'youtube'),
(105, 'yqow');

-- --------------------------------------------------------

--
-- Table structure for table `meritlist`
--

CREATE TABLE `meritlist` (
  `meritid` int(50) NOT NULL,
  `rollno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `pc` varchar(50) NOT NULL,
  `gmr` int(50) NOT NULL,
  `scrank` int(50) DEFAULT NULL,
  `strank` int(50) DEFAULT NULL,
  `pcrank` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meritlist`
--

INSERT INTO `meritlist` (`meritid`, `rollno`, `name`, `dob`, `gender`, `cat`, `pc`, `gmr`, `scrank`, `strank`, `pcrank`) VALUES
(49, 92603404, 'Meghalee Dey', '1992-09-12', 'female', 'general', 'no', 1, 0, 0, 0),
(50, 92601114, 'Shivam Das', '1992-04-13', 'male', 'sc', 'no', 50, 1, 0, 0),
(51, 92605393, 'Anabil Bhattacharya', '1990-12-29', 'male', 'general', 'no', 62, 0, 0, 0),
(52, 92603128, 'Sumana Biswas', '1993-04-04', 'female', 'sc', 'no', 89, 4, 0, 0),
(53, 92604249, 'Arani Majumder', '1992-07-31', 'male', 'general', 'no', 100, 0, 0, 0),
(54, 92603444, 'Shilpi Barua', '1992-02-04', 'female', 'st', 'no', 116, 0, 1, 0),
(55, 92601146, 'Ashish Kumar Shaw', '1991-04-20', 'male', 'general', 'no', 147, 0, 0, 0),
(56, 92401360, 'Mouli Sen', '1990-08-10', 'female', 'general', 'no', 153, 0, 0, 0),
(57, 92605209, 'Poulomi Das', '1990-12-05', 'female', 'general', 'no', 214, 0, 0, 0),
(58, 92603104, 'Amit Saha', '1992-03-15', 'male', 'general', 'no', 254, 0, 0, 0),
(59, 92604262, 'Sonam Kumari', '1992-06-06', 'female', 'general', 'no', 323, 0, 0, 0),
(60, 92606065, 'Sourav Das', '1991-12-03', 'male', 'general', 'no', 364, 0, 0, 0),
(61, 92602166, 'Atish Mondal', '1992-02-11', 'male', 'sc', 'no', 441, 20, 0, 0),
(62, 92301034, 'Amrita Singh', '1990-12-13', 'female', 'general', 'no', 454, 0, 0, 0),
(63, 92606113, 'Indranil Saha', '1993-03-20', 'male', 'general', 'no', 502, 0, 0, 0),
(64, 92201035, 'Victor Deb', '1990-05-28', 'male', 'general', 'no', 551, 0, 0, 0),
(65, 92605134, 'Titli Das', '1992-05-07', 'female', 'general', 'no', 588, 0, 0, 0),
(66, 92001120, 'Ayan Dey', '1992-07-18', 'male', 'general', 'no', 604, 0, 0, 0),
(67, 92604159, 'Arpan Sarkar', '1991-07-03', 'male', 'general', 'no', 668, 0, 0, 0),
(68, 92606056, 'Pritam Das', '1991-11-25', 'male', 'general', 'no', 710, 0, 0, 0),
(69, 92606017, 'Sourim Das', '1991-06-09', 'male', 'general', 'no', 761, 0, 0, 0),
(70, 90000023, 'adarsh', '1999-12-12', 'male', 'general', 'no', 1222, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `participatingcollege`
--

CREATE TABLE `participatingcollege` (
  `collegeid` int(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `openingrank` int(10) NOT NULL,
  `closingrank` int(10) NOT NULL,
  `website` varchar(2090) NOT NULL,
  `seats` int(11) DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participatingcollege`
--

INSERT INTO `participatingcollege` (`collegeid`, `collegename`, `openingrank`, `closingrank`, `website`, `seats`) VALUES
(32, 'calcutta university', 1, 89, 'https://www.caluniv.ac.in/', 59),
(33, 'Jadavpur University', 1, 61, 'http://www.jaduniv.edu.in/', 58),
(34, 'Techno India Salt Lake', 20, 181, 'https://ticollege.ac.in/', 59),
(35, 'North Benagal University', 82, 455, 'http://www.nbu.ac.in/', 59),
(36, 'Kalyani Government Engineering College', 62, 264, 'https://www.kgec.edu.in/', 58),
(37, 'Heritage Institute Of Technology', 159, 548, 'http://www.heritageit.edu/', 60),
(38, 'JIS College Of Technology', 306, 1000, 'http://www.jiscollege.ac.in/', 59),
(39, 'Kalyani University', 314, 605, 'http://www.klyuniv.ac.in/', 60),
(40, 'Fake College', 1, 1000, 'https://www.fake.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sclist`
--

CREATE TABLE `sclist` (
  `scid` int(50) NOT NULL,
  `rollno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `pc` varchar(50) NOT NULL,
  `gmr` int(50) NOT NULL,
  `scrank` int(50) NOT NULL,
  `pcrank` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessionid`
--

CREATE TABLE `sessionid` (
  `sessionid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA'),
(37, '');

-- --------------------------------------------------------

--
-- Table structure for table `stlist`
--

CREATE TABLE `stlist` (
  `stid` int(50) NOT NULL,
  `rollno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `pc` varchar(50) NOT NULL,
  `gmr` int(50) NOT NULL,
  `strank` int(50) NOT NULL,
  `pcrank` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `email` varchar(80) NOT NULL,
  `token` varchar(80) NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `councellingcities`
--
ALTER TABLE `councellingcities`
  ADD PRIMARY KEY (`cityid`),
  ADD UNIQUE KEY `city` (`city`),
  ADD KEY `district_fk` (`district`);

--
-- Indexes for table `councellingstudents`
--
ALTER TABLE `councellingstudents`
  ADD PRIMARY KEY (`applicationid`),
  ADD KEY `rollno` (`rollno`),
  ADD KEY `fk2` (`institute`),
  ADD KEY `fk3` (`candidatename`),
  ADD KEY `fk4` (`rank`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `examdistrict`
--
ALTER TABLE `examdistrict`
  ADD PRIMARY KEY (`DistrictID`),
  ADD UNIQUE KEY `ExamDistrict_2` (`ExamDistrict`),
  ADD KEY `ExamDistrict` (`ExamDistrict`);

--
-- Indexes for table `meritlist`
--
ALTER TABLE `meritlist`
  ADD PRIMARY KEY (`meritid`),
  ADD UNIQUE KEY `rollno_2` (`rollno`),
  ADD KEY `rollno` (`rollno`),
  ADD KEY `rollno_3` (`rollno`),
  ADD KEY `name` (`name`),
  ADD KEY `gmr` (`gmr`),
  ADD KEY `gmr_2` (`gmr`);

--
-- Indexes for table `participatingcollege`
--
ALTER TABLE `participatingcollege`
  ADD PRIMARY KEY (`collegeid`),
  ADD KEY `collegename` (`collegename`);

--
-- Indexes for table `sclist`
--
ALTER TABLE `sclist`
  ADD PRIMARY KEY (`scid`),
  ADD KEY `rollno_fk` (`rollno`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `stlist`
--
ALTER TABLE `stlist`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `rollno_fk2` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `councellingcities`
--
ALTER TABLE `councellingcities`
  MODIFY `cityid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `councellingstudents`
--
ALTER TABLE `councellingstudents`
  MODIFY `applicationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201910023;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `examdistrict`
--
ALTER TABLE `examdistrict`
  MODIFY `DistrictID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `meritlist`
--
ALTER TABLE `meritlist`
  MODIFY `meritid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `participatingcollege`
--
ALTER TABLE `participatingcollege`
  MODIFY `collegeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sclist`
--
ALTER TABLE `sclist`
  MODIFY `scid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `stlist`
--
ALTER TABLE `stlist`
  MODIFY `stid` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `councellingcities`
--
ALTER TABLE `councellingcities`
  ADD CONSTRAINT `district_fk` FOREIGN KEY (`district`) REFERENCES `examdistrict` (`ExamDistrict`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `councellingstudents`
--
ALTER TABLE `councellingstudents`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`rollno`) REFERENCES `meritlist` (`rollno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`institute`) REFERENCES `participatingcollege` (`collegename`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`candidatename`) REFERENCES `meritlist` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk4` FOREIGN KEY (`rank`) REFERENCES `meritlist` (`gmr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `statedistrict` FOREIGN KEY (`stateid`) REFERENCES `state` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sclist`
--
ALTER TABLE `sclist`
  ADD CONSTRAINT `rollno_fk` FOREIGN KEY (`rollno`) REFERENCES `meritlist` (`rollno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stlist`
--
ALTER TABLE `stlist`
  ADD CONSTRAINT `rollno_fk2` FOREIGN KEY (`rollno`) REFERENCES `meritlist` (`rollno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
