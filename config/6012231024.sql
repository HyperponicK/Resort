-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 03:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6012231024`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Boks_ID` int(11) NOT NULL,
  `Books_Date` varchar(50) NOT NULL,
  `Books_st` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booksdetail`
--

CREATE TABLE `booksdetail` (
  `Books_Detail` int(50) NOT NULL,
  `Deposits` int(11) NOT NULL,
  `Check_in` varchar(50) NOT NULL,
  `Check_out` varchar(50) NOT NULL,
  `Books_ID` varchar(10) NOT NULL,
  `Room_number` varchar(10) NOT NULL,
  `txtPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_tel` varchar(10) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(100) NOT NULL,
  `n_detail` text NOT NULL,
  `n_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_name`, `n_detail`, `n_img`) VALUES
(1, 'ผักปลูกเอง', 'เราเลือกใช้ผักจากฟาร์มของชาวบ้านที่เขาค้อ เพื่อนำมาทำเป็นสลัดสำหรับอาหารเช้าของลูกค้า ซึ่งทุกเช้า ที่สวนจะตัดผักเเละนำมาส่งให้แบบสดๆ ทำให้ผักยังคงความสดใหม่ กรอบ หวานเเละยังคงคุณประโยชน์เต็ม100%เลยค่ะ', 'test1.jpg'),
(2, 'งานหมูกระทะ', 'เราเข้าใจอย่างดีที่สุด ว่าเมื่อเรามาพักผ่อน แล้วยิ่งมาเจออากาศเย็นๆ สิ่งที่จะเยียวยาจิตใจเเละกระเพาะอาหารของเราได้ดีที่สุดอีกอย่างนึง นั่นก็คือ\"หมูกระทะ\"\nเพียงลูกค้าที่จองห้องพักกับเรา แล้วแจ้งว่าต้องการชุดหมูกระทะด้วย ทางเราก็พร้อมจะจัดชุดความอร่อยนี้ให้ทันทีค่ะ แล้วมาจอยกับอากาศเย็นฟินๆเเละกินหมูกระทะไปด้วยกันนะคะ\nติดต่อจองห้องพักได้ที่\n095-481-0096\n095-947-0094\nLine : 0954810096', 'test2.jpg'),
(4, 'หนาวแล้ว', '\"เช้าวันศุกร์ที่สุขใจ\"\nตื่นมาพร้อมกับอุณหภูมิ18องศาฯ \nอากาศขนาดนี้เเล้ว มาเที่ยวกันเถอะค่าาาา', 'test3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` int(11) NOT NULL,
  `Pay_Date` date NOT NULL,
  `Bank` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `Pay_Total` int(11) NOT NULL,
  `Books_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` varchar(20) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_detail` text NOT NULL,
  `r_price` varchar(11) NOT NULL,
  `r_status` int(11) NOT NULL,
  `r_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_name`, `r_detail`, `r_price`, `r_status`, `r_img`) VALUES
('r0565165165165', 'room-001', '1 เตียงเดี่ยว  และ 1 โซฟาเบด   เครื่องใช้ในห้องน้ำฟรี ฝักบัว บิเดต์ สุขา โซฟา ผ้าเช็ดตัว โต๊ะทำงาน โทรทัศน์ รองเท้าแตะ ตู้เย็น ช่องรายการเคเบิล ตู้หรือห้องเก็บเสื้อผ้า กระดาษชำระ', '1000', 0, 'testroom1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE `roomdetail` (
  `id` varchar(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_card_number` varchar(13) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_tel` varchar(10) NOT NULL,
  `a_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_box`
--

CREATE TABLE `tb_box` (
  `b_id` varchar(10) NOT NULL,
  `b_detail` varchar(100) NOT NULL,
  `b_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_box`
--

INSERT INTO `tb_box` (`b_id`, `b_detail`, `b_price`) VALUES
('A', 'ขนาดกล่อง เบอร์ A (ขนาด 14 X 20 X 6 ซม.)', 10),
('B', 'ขนาดกล่อง เบอร์ B (ขนาด 17 X 25 X 9 ซม.)', 15),
('C', 'ขนาดกล่อง เบอร์ C (ขนาด 20 X 30 X 11 ซม.)', 20),
('D', 'ขนาดกล่อง เบอร์ D (ขนาด 22 X 35 X 14 ซม.)', 25),
('E', 'ขนาดกล่อง เบอร์ E (ขนาด 24 X 40 X 17 ซม.)', 26),
('F', 'ขนาดกล่อง เบอร์ F (ขนาด 30 X 45 X 20 ซม.)', 27),
('G', 'ขนาดกล่อง เบอร์ G (ขนาด 31 X 36 X 26 ซม.)', 30),
('H', 'ขนาดกล่อง เบอร์ H (ขนาด 40 X 45 X 34 ซม.)', 35),
('n', 'ไม่มี', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_cardnumber` varchar(13) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(10) NOT NULL,
  `m_address` varchar(300) NOT NULL,
  `m_address_detail` varchar(200) NOT NULL,
  `m_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `o_id` varchar(100) NOT NULL,
  `o_create_id` varchar(100) NOT NULL,
  `o_pay` int(11) NOT NULL,
  `o_price` int(11) NOT NULL,
  `o_sname` varchar(100) NOT NULL,
  `o_address` varchar(300) NOT NULL,
  `o_address_detail` varchar(100) NOT NULL,
  `o_tel` varchar(10) NOT NULL,
  `o_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`o_id`, `o_create_id`, `o_pay`, `o_price`, `o_sname`, `o_address`, `o_address_detail`, `o_tel`, `o_status`) VALUES
('O-1667445285215', '0', 0, 0, 'ชนม์นิภา ยอดเกตุ', 'พลายชุมพล เมืองพิษณุโลก พิษณุโลก 65000', '54/3 ม. 4 ', '0836294510', 1),
('O-1667446289623', '0', 0, 0, 'ชนม์นิภา ยอดเกตุ', 'พลายชุมพล เมืองพิษณุโลก พิษณุโลก 65000', '54/3 ม. 4 ', '0836294510', 1),
('O-1667873898587', '0', 0, 0, 'กิติณัฎฐ์  มาดหมาย', 'ทุ่งศรี ร้องกวาง แพร่ 54140', '36/3 หมู่3', '0933038751', 1),
('O-1667874935892', '0', 0, 0, 'ชนม์นิภา ยอดเกตุ', 'พลายชุมพล เมืองพิษณุโลก พิษณุโลก 65000', '54/3 ม. 4 ', '0836294510', 1),
('O-1667881848179', '0', 0, 0, 'สมชาย สมศรี', 'พงตึก ท่ามะกา กาญจนบุรี 71120', '54/3 ม.2', '0999999999', 1),
('O-1668317135419', '0', 0, 0, 'อำนาจ ทองเกิด', 'เทพนิมิต บึงสามัคคี กำแพงเพชร 62210', '8 หมู่ 5', '0877777777', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_parcel`
--

CREATE TABLE `tb_parcel` (
  `p_id` varchar(20) NOT NULL,
  `p_order` varchar(20) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_address_detail` varchar(100) NOT NULL,
  `p_tel` varchar(10) NOT NULL,
  `p_date_start` date NOT NULL,
  `p_date_end` date NOT NULL,
  `p_price` varchar(11) NOT NULL,
  `p_weight` varchar(11) NOT NULL,
  `p_box` varchar(10) NOT NULL,
  `p_status` int(11) NOT NULL,
  `p_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_parcel`
--

INSERT INTO `tb_parcel` (`p_id`, `p_order`, `p_name`, `p_address`, `p_address_detail`, `p_tel`, `p_date_start`, `p_date_end`, `p_price`, `p_weight`, `p_box`, `p_status`, `p_img`) VALUES
('P-1667445728797', 'O-1667445285215', 'คณุตม์ ยอดเกตุ', 'สวนหลวง สวนหลวง กรุงเทพมหานคร 10250', 'ห้อง 303 อาคาร T.R.Mansion เลขที่ 103 ซอย อ่อนนุช17 แยก16', '0881545497', '2022-11-03', '2022-11-03', '31', '1', 'B', 2, ''),
('P-1667446333557', 'O-1667446289623', 'คณุตม์ ยอดเกตุ', 'สวนหลวง สวนหลวง กรุงเทพมหานคร 10250', 'ห้อง 303 อาคาร T.R.Mansion เลขที่ 103 ซอย อ่อนนุช17 แยก16', '0881545497', '2022-11-03', '0000-00-00', '32', '3', 'C', 1, ''),
('P-1667446484398', 'O-1667446289623', 'น้ำผึ้ง ทิมโต', 'ตาคลี ตาคลี นครสวรรค์ 60140', '36/2 ม. 4', '0849904857', '2022-11-03', '2022-11-03', '34', '5', 'E', 2, ''),
('P-1667446715010', 'O-1667446289623', 'ชฎาภรณ์ พุ่มพิมพ์', 'ศีรษะจรเข้น้อย บางเสาธง สมุทรปราการ 10570', '100/146 หมู่บ้าน ร็อคการ์เด้น ม. 1', '0838715223', '2022-11-03', '2022-11-08', '31', '3', 'B', 2, ''),
('P-1667874003544', 'O-1667873898587', 'บ่าวบูม บังบูม', 'ทุ่งศรีเมือง สุวรรณภูมิ ร้อยเอ็ด 45130', '36/3 หมู่3', '0884131787', '2022-11-08', '2022-11-08', '47', '100', 'H', 2, ''),
('P-1667875291446', 'O-1667874935892', 'คณุตม์ ยอดเกตุ', 'สวนหลวง สวนหลวง กรุงเทพมหานคร 10250', 'ห้อง 303 อาคาร T.R.Mansion เลขที่ 103 ซอย อ่อนนุช17 แยก16', '0881545497', '2022-11-08', '0000-00-00', '35', '10', 'F', 1, ''),
('P-1667881956516', 'O-1667881848179', 'สมหญิง สมศรี', 'หงษ์เจริญ ท่าแซะ ชุมพร 86140', '102/5 ม.10', '0852222222', '2022-11-08', '2022-11-08', '80', '5000', 'B', 2, ''),
('P-1668340317469', 'O-1668317135419', 'ชนม์นิภา ยอดเกตุ', 'พลายชุมพล เมืองพิษณุโลก พิษณุโลก 65000', '54/3 ม. 4 ', '0836294510', '2022-11-13', '0000-00-00', '65', '2000', 'B', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pay`
--

CREATE TABLE `tb_pay` (
  `pay_id` varchar(10) NOT NULL,
  `pay_order` varchar(10) NOT NULL,
  `pay_price` int(11) NOT NULL,
  `pay_slip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_price`
--

CREATE TABLE `tb_price` (
  `pri_id` int(11) NOT NULL,
  `pri_weight_s` int(11) NOT NULL,
  `pri_weight_e` int(11) NOT NULL,
  `pri_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_price`
--

INSERT INTO `tb_price` (`pri_id`, `pri_weight_s`, `pri_weight_e`, `pri_price`) VALUES
(1, 1, 1000, 25),
(2, 1001, 2000, 30),
(3, 2001, 3000, 35),
(4, 3001, 4000, 40),
(5, 4001, 5000, 45),
(6, 5001, 6000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transport`
--

CREATE TABLE `tb_transport` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_card_number` varchar(13) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_tel` varchar(10) NOT NULL,
  `t_pass` varchar(100) NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_zipcode`
--

CREATE TABLE `tb_zipcode` (
  `z_id` int(11) NOT NULL,
  `z_zipcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Boks_ID`);

--
-- Indexes for table `booksdetail`
--
ALTER TABLE `booksdetail`
  ADD PRIMARY KEY (`Books_Detail`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_box`
--
ALTER TABLE `tb_box`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tb_parcel`
--
ALTER TABLE `tb_parcel`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_pay`
--
ALTER TABLE `tb_pay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tb_price`
--
ALTER TABLE `tb_price`
  ADD PRIMARY KEY (`pri_id`);

--
-- Indexes for table `tb_transport`
--
ALTER TABLE `tb_transport`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tb_zipcode`
--
ALTER TABLE `tb_zipcode`
  ADD PRIMARY KEY (`z_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_price`
--
ALTER TABLE `tb_price`
  MODIFY `pri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transport`
--
ALTER TABLE `tb_transport`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_zipcode`
--
ALTER TABLE `tb_zipcode`
  MODIFY `z_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
