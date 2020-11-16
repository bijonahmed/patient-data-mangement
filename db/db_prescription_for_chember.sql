-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2014 at 06:02 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_prescription_for_chember`
--
CREATE DATABASE IF NOT EXISTS `db_prescription_for_chember` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_prescription_for_chember`;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_ajax`
--

CREATE TABLE IF NOT EXISTS `prescription_ajax` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `dose_id` int(11) NOT NULL,
  `brand_name` varchar(300) NOT NULL,
  `strength` varchar(200) DEFAULT NULL,
  `dose_schedule_id` int(11) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `doseSuggestion_id` int(11) NOT NULL,
  `path_test_group_id` int(11) NOT NULL,
  `test_name` varchar(110) NOT NULL,
  `day` varchar(100) NOT NULL,
  `manual_pid` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prescription_ajax`
--

INSERT INTO `prescription_ajax` (`prescription_id`, `patient_id`, `visiting_no`, `user_id`, `current_date`, `dose_id`, `brand_name`, `strength`, `dose_schedule_id`, `amount`, `doseSuggestion_id`, `path_test_group_id`, `test_name`, `day`, `manual_pid`) VALUES
(1, 1, 1, 8, '2014-10-24', 10, 'Lansec', '0', 6, '0', 6, 0, '0', '1', '010001'),
(2, 1, 2, 8, '2014-10-24', 14, 'Comipen', '0', 6, '0', 8, 0, '0', '2', '010001'),
(3, 1, 2, 8, '2014-10-24', 17, 'Enso', '0', 6, '0', 7, 0, '0', '3', '010001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_advice_name`
--

CREATE TABLE IF NOT EXISTS `tbl_add_advice_name` (
  `add_advice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_advice_name` varchar(200) NOT NULL,
  PRIMARY KEY (`add_advice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_add_advice_name`
--

INSERT INTO `tbl_add_advice_name` (`add_advice_id`, `user_id`, `patient_advice_name`) VALUES
(1, 8, 'Daily 4 hours drinking water'),
(2, 8, ' give you all the tips that you’ll need.'),
(11, 8, 'Discuss this course'),
(28, 8, 'Hospitalization'),
(29, 8, 'something'),
(30, 8, 'Please Rest for 5 Days'),
(31, 8, 'To Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_custom_chemotherapy_regimen`
--

CREATE TABLE IF NOT EXISTS `tbl_add_custom_chemotherapy_regimen` (
  `custom_chemotherapy_regmine_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customized_chemotherapy_regimen_name` varchar(256) NOT NULL,
  PRIMARY KEY (`custom_chemotherapy_regmine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_add_custom_chemotherapy_regimen`
--

INSERT INTO `tbl_add_custom_chemotherapy_regimen` (`custom_chemotherapy_regmine_id`, `user_id`, `customized_chemotherapy_regimen_name`) VALUES
(1, 8, 'Chemotherapy Regimen-01'),
(2, 8, 'Chemotherapy Regimen-03'),
(3, 0, 'Chemotherapy Regimen-02'),
(4, 0, '(R-)VNCOP-B'),
(5, 8, '841'),
(6, 8, 'APL consolidation'),
(7, 8, 'BFM 90 for ALCL'),
(8, 8, 'BFM 90 for T-LBL'),
(9, 8, 'BFM 95 for B-NHL'),
(10, 8, 'CEPP(B)'),
(11, 8, 'CTD'),
(12, 8, 'CTDa'),
(13, 8, 'DA (3+7)'),
(14, 8, 'DAE'),
(15, 8, 'DHAP'),
(16, 8, 'HDMTX+HDAC-CNS'),
(17, 8, 'HDMTX-peripheral'),
(18, 8, 'HiDAC'),
(19, 8, 'Hyper-CVAD'),
(20, 8, 'ICE'),
(21, 8, 'KFSH'),
(22, 8, 'MPT (2)'),
(23, 8, 'MPT'),
(24, 8, 'R-EPOCH'),
(25, 8, 'StanfordV'),
(26, 8, 'Thal-Dex'),
(27, 8, 'UKALL2003-v7-2009-B phase I'),
(28, 8, 'UKALL2003-v7-2009-B phase II'),
(29, 8, 'UKALL2003-v7-2009-B phase III'),
(30, 8, 'UKALL2003-v7-2009-B phase IV'),
(31, 8, 'UKALL2003-v7-2009-B phase V'),
(32, 8, 'UKALL2003-v7-2009-B phase VI'),
(33, 8, 'UKALL2003-v7-2009-B phase VII'),
(34, 8, 'UKALL2003-v7-2009-B'),
(35, 8, 'UKALL2003-v7-2009-C phase I'),
(36, 8, 'UKALL2003-v7-2009-C phase II'),
(37, 8, 'UKALL2003-v7-2009-C phase III'),
(38, 8, 'UKALL2003-v7-2009-C phase IV'),
(39, 8, 'UKALL2003-v7-2009-C phase V'),
(40, 8, 'UKALL2003-v7-2009-C phase VI'),
(41, 8, 'UKALL2003-v7-2009-C phase VII'),
(42, 8, 'UKALL2003-v7-2009-C'),
(43, 8, 'UKALL-Induction for Ph+ ALL, phase I'),
(44, 8, 'UKALL-Induction for Ph+ ALL, phase II'),
(45, 8, 'UKALL-Induction for Ph+ ALL'),
(46, 8, 'VMDT (2)'),
(47, 8, 'VMDT'),
(48, 8, 'VMP'),
(49, 8, 'VTD (2)'),
(50, 8, 'VTD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_custom_physical_findings`
--

CREATE TABLE IF NOT EXISTS `tbl_add_custom_physical_findings` (
  `custom_phy_findings_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customized_physical_findings_name` varchar(200) NOT NULL,
  PRIMARY KEY (`custom_phy_findings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_add_custom_physical_findings`
--

INSERT INTO `tbl_add_custom_physical_findings` (`custom_phy_findings_id`, `user_id`, `customized_physical_findings_name`) VALUES
(1, 8, 'Appearance'),
(2, 8, 'Becubitus'),
(3, 8, 'Built'),
(4, 8, 'Nutrition'),
(5, 8, 'Pallor'),
(6, 8, 'Jaundice'),
(7, 8, 'Gum'),
(8, 8, 'Tungue'),
(9, 8, 'Clubbing'),
(10, 8, 'Ckoilonychea'),
(11, 8, 'Edemia'),
(12, 8, 'Dehydration'),
(13, 8, 'Neck Vein'),
(14, 8, 'Thyroid Gland'),
(15, 8, 'Purpura'),
(21, 8, 'Pluse'),
(22, 8, 'Blood Presure'),
(23, 8, 'Lymphadenopathy'),
(24, 8, 'Kidney'),
(25, 8, 'qasdf'),
(26, 8, 'aaaa'),
(27, 8, 'test'),
(28, 8, 'asdf'),
(29, 8, 'aa'),
(30, 8, '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_custom_physical_findings_systolic`
--

CREATE TABLE IF NOT EXISTS `tbl_add_custom_physical_findings_systolic` (
  `custom_phy_findings_systolic_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customized_physical_findings_systolic_name` varchar(265) NOT NULL,
  PRIMARY KEY (`custom_phy_findings_systolic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_add_custom_physical_findings_systolic`
--

INSERT INTO `tbl_add_custom_physical_findings_systolic` (`custom_phy_findings_systolic_id`, `user_id`, `customized_physical_findings_systolic_name`) VALUES
(1, 8, 'Abdomen'),
(2, 8, 'Chest'),
(3, 8, 'Lokomoto System'),
(4, 0, 'Nerver System');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_custom_physical_findings_value`
--

CREATE TABLE IF NOT EXISTS `tbl_add_custom_physical_findings_value` (
  `phy_fin_value_Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `custom_phy_findings_id` int(11) NOT NULL,
  `phy_fin_value` varchar(200) NOT NULL,
  PRIMARY KEY (`phy_fin_value_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `tbl_add_custom_physical_findings_value`
--

INSERT INTO `tbl_add_custom_physical_findings_value` (`phy_fin_value_Id`, `user_id`, `custom_phy_findings_id`, `phy_fin_value`) VALUES
(1, 8, 1, 'Normal'),
(2, 8, 1, 'ill-looking'),
(3, 8, 1, 'Others'),
(4, 8, 2, 'Onchoice'),
(5, 8, 2, 'Proppedup'),
(6, 8, 2, 'Others'),
(7, 8, 3, 'Average'),
(8, 8, 3, 'Bellow-average'),
(9, 8, 3, 'Over-Weight'),
(10, 8, 3, 'Obese emaciated'),
(11, 8, 4, 'Average'),
(12, 8, 4, 'Bellow-average'),
(13, 8, 0, '(+++++)'),
(14, 8, 5, '(++)'),
(15, 8, 0, '(+++)'),
(16, 8, 0, '(++++++++++++++++)'),
(17, 8, 0, '(++)'),
(18, 8, 0, 'no sorry'),
(19, 8, 7, 'Normal'),
(20, 8, 7, 'Hypertrophied'),
(21, 8, 7, 'Bleeding'),
(22, 8, 7, 'Gingivitis'),
(23, 8, 8, 'Normal'),
(24, 8, 8, 'Smooth'),
(25, 8, 8, 'Furred'),
(26, 8, 9, 'Present'),
(27, 8, 9, 'Absent'),
(28, 8, 10, 'Present'),
(29, 8, 10, 'Absent'),
(30, 8, 11, 'Severe'),
(31, 8, 11, 'Mild'),
(32, 8, 11, 'Moderated'),
(33, 8, 11, 'Anasarca'),
(34, 8, 21, 'Normal'),
(35, 8, 21, 'Tachycardia'),
(36, 8, 21, 'Regular'),
(37, 8, 21, 'illregular'),
(38, 8, 12, 'No Sign'),
(39, 8, 12, 'Some'),
(40, 8, 12, 'Severe'),
(41, 8, 23, 'Absent'),
(42, 8, 23, 'Generalized'),
(43, 8, 23, 'Localized'),
(44, 8, 0, 'Soft'),
(45, 8, 23, 'Heard'),
(46, 8, 23, 'Rubbery'),
(47, 8, 23, 'Matted'),
(48, 8, 23, 'Discrete'),
(49, 8, 23, 'Discharging'),
(50, 8, 13, 'Engorged'),
(51, 8, 13, 'Non-Engorged'),
(52, 8, 14, 'Normal'),
(53, 8, 14, 'Enlarged'),
(54, 8, 14, 'Tender'),
(55, 8, 15, 'Right Side'),
(56, 8, 15, 'Left Side'),
(57, 8, 23, 'Absent / Generalized'),
(58, 8, 23, 'Localized / Soft'),
(59, 8, 23, 'Heard / Rubbery/ Matted'),
(60, 8, 23, 'Discrete / Discharging'),
(61, 8, 0, 'LT'),
(62, 8, 24, 'RT'),
(63, 8, 26, '22'),
(64, 8, 27, '(++)'),
(65, 8, 27, '(+)'),
(66, 8, 13, '(+)'),
(67, 8, 29, 'ss'),
(68, 8, 6, '111'),
(69, 8, 6, '123'),
(70, 8, 7, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_new_category`
--

CREATE TABLE IF NOT EXISTS `tbl_add_new_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_add_new_category`
--

INSERT INTO `tbl_add_new_category` (`category_id`, `user_id`, `category_name`) VALUES
(1, 8, 'Hospital'),
(2, 8, 'Emergency Services 24 hours'),
(3, 8, 'Top Consultants (Cardiology)'),
(4, 8, 'Doctors'),
(5, 8, 'List of Top Hospitals'),
(6, 8, 'Hospital & Clinics'),
(7, 8, 'Diagonistic Centers'),
(8, 8, 'Medical College and University'),
(9, 8, 'Medical Institutes'),
(10, 8, 'Rehabilitation Centers Directory'),
(11, 8, 'Blood Banks'),
(12, 8, 'Pharmaceuticals'),
(13, 8, 'Health Societies'),
(14, 8, 'ToP Consultants (Cardiothoracic Surgery)'),
(15, 8, 'Top Consultants (Otolaryngology (ENT)'),
(16, 8, 'Top Consultants (Gynaecology & Obstetrics)'),
(17, 8, 'Top Consultants (General Surgery)'),
(18, 8, 'Top Consultants (Medicine Internal Medicine)'),
(19, 8, 'Top Consultants (Paediatrics)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_new_diagnosis_category_name`
--

CREATE TABLE IF NOT EXISTS `tbl_add_new_diagnosis_category_name` (
  `diagnosis_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customized_diagnosis_category_name` varchar(265) NOT NULL,
  PRIMARY KEY (`diagnosis_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_add_new_diagnosis_category_name`
--

INSERT INTO `tbl_add_new_diagnosis_category_name` (`diagnosis_category_id`, `user_id`, `customized_diagnosis_category_name`) VALUES
(1, 8, 'Acute Lymphoblasti Leukaemia'),
(2, 8, 'AML'),
(5, 8, 'APL'),
(6, 8, 'MM'),
(7, 8, 'NHL'),
(8, 8, 'Promyelocyte');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_physicalfindings_systolicinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_add_physicalfindings_systolicinfo` (
  `phy_fin_systolic_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `custom_phy_findings_systolic_id` int(11) NOT NULL,
  `phy_fin_value_systolic` varchar(265) NOT NULL,
  PRIMARY KEY (`phy_fin_systolic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advice`
--

CREATE TABLE IF NOT EXISTS `tbl_advice` (
  `patient_advice_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `add_advice_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`patient_advice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_advice`
--

INSERT INTO `tbl_advice` (`patient_advice_id`, `manual_pid`, `user_id`, `patient_id`, `visiting_no`, `add_advice_id`, `current_date`) VALUES
(1, '010001', 8, 1, 1, 28, '2014-10-24'),
(2, '010001', 8, 1, 2, 28, '2014-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bonemarrow`
--

CREATE TABLE IF NOT EXISTS `tbl_bonemarrow` (
  `bonemarrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `test_id` varchar(200) NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(200) NOT NULL,
  `report_description` text NOT NULL,
  `introudction` varchar(256) NOT NULL,
  `aspiration` varchar(256) NOT NULL,
  `stain_used` varchar(256) NOT NULL,
  `cellularity_inf` varchar(256) NOT NULL,
  `meratio` varchar(256) NOT NULL,
  `ery` varchar(256) NOT NULL,
  `granu` varchar(256) NOT NULL,
  `mega` varchar(256) NOT NULL,
  `ly_his_pls_cells` text NOT NULL,
  `parasites` varchar(256) NOT NULL,
  `others` varchar(256) NOT NULL,
  `special_stain` varchar(256) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `test_to_follow` varchar(256) NOT NULL,
  `reviewed_by` varchar(256) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`bonemarrow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_data`
--

CREATE TABLE IF NOT EXISTS `tbl_category_data` (
  `category_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `cell_number` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`category_data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=544 ;

--
-- Dumping data for table `tbl_category_data`
--

INSERT INTO `tbl_category_data` (`category_data_id`, `user_id`, `category_id`, `address`, `cell_number`, `name`) VALUES
(1, 8, 5, 'Plot # 81, Block # E, Basundhara R/A, Dhaka - 1229, Bangladesh ', ' +880-2-8401661, +880-2-884524', 'Apollo Hospital, Dhaka'),
(2, 8, 1, 'Plot # 15, Road # 71, Gulshan-2, Dhaka - 1212, Bangladesh ', ' +880-2-8836000-10 ', 'United Hospital Ltd. '),
(3, 8, 1, 'No. 21, Greams Lane, Off. Greams Road, Chennai - 600 006, India', '+ 91-44-2829 0200 ', 'Apollo Hospital Chennai '),
(4, 8, 1, '33 Sukhumvit, 3 (Soi Nana Nua), Wattana, Bangkok - 10110, Thailand', '+662 667 1000, + 662 667 2999 ', 'Bumrungrad International Hospital '),
(5, 8, 1, ' 3 Mount Elizabeth, Singapore 228510 ', '+65-6250-0000, +65-6737-2666 ', 'Mount Elizabeth Hospital '),
(6, 8, 1, ' Gleneagles Hospital (Kuala Lumpur), Sdn. Bhd., 282 & 286 Jalan Ampang, 50450 Kuala Lumpur, Malaysia ', ' +03-4141 3000 ', 'Gleneagles Kuala Lumpur Hospital '),
(8, 8, 1, ' 109 Maniknagar (Bishow Road), Dhaka. ', '+88027554097', 'Tohida General Hospital & Diagonistic Center '),
(9, 8, 1, ' 74G/ 75, Peacock Square, New Airport Road, Mohakhali, Dhaka - 1215, Bangladesh ', ' +880-2-9122689 ', 'Aysha Memorial Hospital & Diagnostic Centre'),
(10, 8, 1, '18, New Eskaton Road (Noor Nagar) Ramna, Dhaka - 1205, Bangladesh ', '+880-2-8360780 ', 'Abeer General Hospital '),
(11, 8, 1, '5, New Eskaton Road (Gausnagar), Ramna, Dhaka - 1000, Bangladesh', '+880-2-9347520-1 ', 'Institute Of Laser Surgery & Hospital '),
(12, 8, 1, ' House # 64, Road # 15/A, Dhanmondi, Dhaka - 1209, Bangladesh ', '+8801824666536 ', 'Ibn Sina Hospital '),
(13, 8, 1, 'C-287/2-3, Khilgaon Bishwa Road Khilgaon, Dhaka-1219 ', 'N/A', 'Khidmah Hospital (PVT) Ltd.'),
(14, 8, 1, 'Alamar Tower, 282/1, (1st floor), 1st Colony Mazar Road, Mirpur, Dhaka - 1218, Bangladesh ', '+880-2-9007827 ', 'Selina General Hospital & Diagnostic Center '),
(15, 8, 1, '1085/1, Malibagh Chowdhury Para, Dhaka - 1219, Bangladesh ', '+880-2-9341662-4 ', 'City Dental College & Hospital '),
(16, 8, 1, 'Sher-e-BanglaNagar, Dhaka - 1207, Bangladesh ', '+880-2-8116061-2 ', 'Dhaka Shishu (Children) Hospital'),
(17, 8, 1, 'Sector # 1, Road # 13, House # 4, Uttara, Dhaka - 1230, Banglades', '+880-2-8919481 ', 'Meriland Hospital '),
(18, 8, 1, '54, Siddheswari Road, Dhaka - 1217, Bangladesh ', '+880-2-8318135 ', 'Monowara Hospital Pvt.Ltd'),
(19, 8, 1, '89/1, Panthapath, Dhaka-1215, Bangladesh ', ' +880-2-9131901 ', 'Samorita Hospital Limited'),
(20, 8, 1, '69/E, Green Road, Panthapath, Dhaka - 1205, Bangladesh ', ' +880-2-8616565 ', 'South Asian Hospital Ltd '),
(21, 8, 1, ' House # 37, Road # 9/A, Dhanmondi R/A, Dhaka - 1209, Bangladesh', '+880-2-9122264', 'Dr. Salahuddin Hospital'),
(22, 8, 1, 'Monica Estate, Western Dhanmondi, Dhaka - 1209, Bangladesh', '+880-2-8115951', 'Z.H. Sikder Womens Medical College & Hospital (Pvt) Ltd.'),
(23, 8, 1, 'House # 33/35, Road # 14/A (New), Dhanmondi R/A, Dhaka - 1209, Bangladesh', '+880-2-8115843', 'Bangladesh Medical College Hospital'),
(24, 8, 1, 'House # 14/E, Road # 6, Dhanmondi, Dhaka - 1205, Bangladesh', ' +880-2-8617208', 'Gonoshasthaya Nagar Hospital'),
(25, 8, 1, '487/B, O.R. Nizam Road, GEC More, Chittagong, Bangladesh', '+880-31-654732', 'Chittagong Metropoliton Hospital (Pvt.) Ltd.'),
(26, 8, 1, 'Plot No - M-1/C, Section -14, Mirpur, Dhaka -1206, Bangladesh', '+880-2-9008919', 'Ahsania Mission Cancer & General Hospital'),
(27, 8, 1, 'House # 13, Eshakha Avenue, Sector # 6, Uttara, Dhaka, Bangladesh', '+880-2-8916290', 'Aichi Hospital'),
(28, 8, 1, 'House # 36, Road # 3, Dhanmondi, Dhaka, Bangladesh', ' +880-2-8631619', 'Al Anaiet Adhunik Hospital'),
(29, 8, 1, ' House # 12, Road # 21, Sector # 4, Uttara, Dhaka, Bangladesh', ' +880-2-8952851-2', 'Al-Ahsraf General Hospital'),
(30, 8, 1, 'Charpara, Mymensingh', ' +880-91-61765', 'Al-Baraka Hospital'),
(31, 8, 1, '129, New Eskaton Road, Dhaka, Bangladesh', ' +880-2-9350884', 'Al-Barakah Renal Hospital & Research Institute Ltd.'),
(32, 8, 1, '23/1, Khilji Road, Shyamoli, Dhaka, Bangladesh', '+880-2-8118905', 'Al-Biruni Hospital'),
(33, 8, 1, '150, Begum Rokeya Sarani, Mirpur-10, Dhaka-1216, Bangladesh', '+880-2-9006820', 'Al-Helal Specialized Hospital Ltd.'),
(34, 8, 1, ' 2/A, Golden Street, Ring Road, Shyamoli, Dhaka, Bangladesh', '+880-2-8118709', 'Al-Madina General Hospital (Pvt.) Ltd.'),
(35, 8, 0, 'asdf', '333', 'asdf'),
(36, 8, 1, 'House # 29, Road # 3, Shyamoli, Dhaka, Bangladesh', '+880-2-9129217', 'Al-Markazul Islami Hospital'),
(37, 8, 1, ' House # 11, Road # 2, Shyamoli, Dhaka, Bangladesh', '+880-2-9113831', 'Al-Mohite General Hospital & Diagnostic Centre'),
(38, 8, 1, '12, Farmgate, Dhaka - 1215, Bangladesh', '+880-2-8119229', 'Al-Raji Hospital'),
(39, 8, 1, 'West Bogura Road, Barisal - 8200', ' +880-431-2176017', 'Ambia Memorial Hospital'),
(48, 8, 1, '242-243, New Circular Road, Malibagh, Dhaka - 1217, Bangladesh', '+880-2-9333730', 'Aroggya Niketan Hospital Ltd.'),
(49, 8, 1, ' House # 4, Road # 11, Progoti Saroni, South Baridhara, Dhaka-1212, Bangladesh', '+880-2-9860000,', 'Asian General & Dental Hospital Ltd'),
(50, 8, 1, 'House # 19/1, Road # 6, Dhanmondi, Dhaka - 1205, Bangladesh', '+880-2-8651950-3', 'Bangladesh Eye Hospital Ltd.'),
(51, 8, 1, 'Lions Bhaban, Begum Rokeya Sarani, Agargaon, Dhaka -1207, Bangladesh', '+880-2-8110894,', 'Bangladesh Lions Eye Hospital'),
(52, 8, 1, 'Hospital Road, Barisal, Bangladesh', ' +880-431-63868', 'BAVS Maternity Hospital'),
(53, 8, 1, 'Pahartali, Chittagong, Bangladesh', ' +880-31-659019', 'BNSB Eye Hospital Chittagong'),
(54, 8, 1, '163-164, Sonargaon Road (Hatirpool), Elephant Road, Dhaka - 1215, Bangladesh', '+880-2-8626901-2', 'Brighton Hospital Ltd.'),
(55, 8, 1, '2/1-A, Iqbal Road, Mohammadpur (on Main Mirpur Road),Dhaka-1207, Bangladesh', ' +880-2-9134407', 'Care Hospital ( BD ) Ltd.'),
(56, 8, 1, 'House # 2, Road # 5, Green Road, Dhanmondi, Dhaka, Bangladesh', '+880-2-9660015-19', 'Central Hospital Ltd.'),
(57, 8, 1, 'Agrabad, Chittagong, Bangladesh', '+880-31-2520063', 'Chattagram Maa-O-Shishu General Hospital'),
(58, 8, 1, 'House #15, Shayesta Khan Avenue, Sector # 4, Uttara, Dhaka, Bangladesh', ' +880-2-8913674', 'China-Bangla Hospital (JV) Ltd.'),
(59, 8, 1, '4, O.R Nizam Road, Chittagong, Bangladesh', '+880-31-652728', 'Chittagong Health Care Hospital Pvt. Ltd.'),
(60, 8, 1, ' H # 120, Rd # 9/A, Dhanmondi, Dhaka, Bangladesh', '+880-2-9120862', 'City General Hospital'),
(61, 8, 1, '1/8, Block-E, Lalmatia, Satmosjid Road, Mohammadpur, Dhaka - 1207, Bangladesh', '+880-2-8143312', 'City Hospital Ltd.'),
(62, 8, 1, 'Pan Bazaar Road, Coxâ€™s Bazar, Bangladesh', '+880-341-63120', 'Cox''s Bazar Eye Hospital'),
(63, 8, 1, 'Sadar hospital road, Coxâ€™s Bazar, Banglasdesh', '+880-341-64674', 'Cox''s Bazar Fuad Alkhatib Hospital'),
(64, 8, 1, 'Sadar Hospital Road, Coxâ€™s Bazar, Bangladesh', ' +880-341-63606', 'Cox''s Bazar Seaside Hospital'),
(65, 8, 1, 'House # 5, Road # 16, Gulshan - 1, Dhaka - 1212, Bangladesh', '+880-2-9894776', 'Cure Medical Centre & General Hospital'),
(66, 8, 1, 'House # 56, Road # 4/A, Dhanmondi R/A, Dhaka, Bangladesh', '+880-2-8617503', 'Dhaka Ent (Ear, Nose, Throat) Hospital'),
(67, 8, 1, '32, Rabindra Sarani, Sector # 7, Uttara, Dhaka, Bangladesh', '+880-2-8912975', 'Dhaka Eye Care Hospital'),
(68, 8, 1, '6/1, Humayun Road, Block # B, Mohammadpur, Dhaka -1207, Bangladesh', '+880-2-9121613', 'Dhaka General & Orthopadic Hospital'),
(69, 8, 1, '100 Ramna, Central Shaheed Minar Area, BakshiBazar, Dhaka - 1000, Bangladesh', ' +880-2-8626812-16', 'Dhaka Medical College & Hospital '),
(70, 8, 1, 'House # 48/A, Road # 2/A, Dhanmondi R/A, Dhaka-1209, Bangladesh', ' +880-2-9672814', 'Dhaka Pediatric & Neonatal Hospital'),
(71, 8, 1, ' 5, Green Corner, Green Road, Dhaka- 1205, Bangladesh', ' +880-2-8610928', 'Dhaka Renal Centre & General Hospital'),
(72, 8, 1, ' House # 25, Road # 5, Dhanmondi R/A, Dhaka, Bangladesh', ' +880-2-9669904', 'Dhanmondi South East Hospital'),
(73, 8, 1, ' 427, Batali Road, Anayetbazar, Panchlaish, Chittagong, Bangladesh', '+880-31-617495', 'Diabetic Hospital'),
(74, 8, 1, 'Balubari, Dinajpur, Bangladesh', '+8801716991273', 'Doctors Hospital'),
(75, 8, 1, 'Dorantana Road, Jessore, Bangladesh', ' +8801558629320', 'Dorantana Hospital'),
(76, 8, 1, 'House # 5, Road # 5, Block - A, Section - 6, Mirpur, Dhaka - 1216, Bangladesh', ' +880-2-8051974', 'Dr. Azmal Hospital Ltd.'),
(77, 8, 1, 'House # 741, Road # 9, Baitul Aman Housing Society, Dhaka - 1207, Bangladesh', '+880-2-9128520', 'Dushtha Shasthya Hospital (D.S.K)'),
(78, 8, 1, ' Mirzarpul, Chittagong, Bangladesh', '+880-31-657629', 'Ekhushe Hospital'),
(79, 8, 1, ' 5/7, Block - D, Lalmatia, Dhaka - 1207, Bangladesh', '+880-2-8159711', 'Euro-Bangla Heart Hospital Ltd.'),
(80, 8, 1, 'House # 8/3, Road # 14 (New), Dhanmondi R/A, Dhaka- 1209, Bangladesh', ' +880-2-8122471', 'Farabi General Hospital'),
(81, 8, 1, ' 98/6-A, Elephant Road, Bara Moghbazar, Dhaka, Bangladesh', ' +880-2-9338986', 'Fashion Eye Hospital Ltd.'),
(82, 8, 1, 'Almas Tower, 282/1, Majar Road, Mirpur, Dhaka, Bangladesh', '+880-2-9007188', 'Fuad Al-Khatib Hospital'),
(83, 8, 1, ' 69/D, Green Road, Panthapath, Dhaka, Bangladesh', ' +880-2-8625393, +880-2-966733', 'Gastro Liver Hospital & Research Institute'),
(84, 8, 1, '395, Andarkilla, Chittagong, Bangladesh', '+880-31-715166', 'General Hospital'),
(85, 8, 1, ' Nabinagar, Savar, Dhaka, Bangladesh', ' +880-2-7708003', 'Gonoshastha Nagar Hospital (Savar)'),
(86, 8, 1, 'Tangra, Sripur, Gazipur, Dhaka, Bangladesh', '+8801711-826907', 'Gonoshastha Nagar Hospital (Sripur)'),
(87, 8, 1, ' Dhap, Jail Road, Rangpur, Bangladesh', '+880-521-62552', 'Good Health Hospital'),
(88, 8, 1, ' House # 31, Road # 6, Dhanmondi, Dhaka, Bangladesh', '+880-2-8612412', 'Harun Eye Foundation Ltd. & Green Eye Hospital'),
(89, 8, 1, '32, Green Road ( Bir Uttom K. M Shafiullah Sarak ), Dhanmondi, Dhaka - 1205, Bangladesh', ' +880-2-9612345-54', 'Green Life Hospital Limited'),
(90, 8, 1, 'House # 6, Road # 1/B, Sector # 9, Uttara Model Town, Dhaka, Bangladesh', ' +880-2-8915189, +880-2-895688', 'Greenland Hospital Limited'),
(91, 8, 1, ' 152 / 1-H, Green Road, Panthapath, Dhaka - 1205, Bangladesh', ' +880-2-9145786', 'Health & Hope Hospital Ltd.'),
(92, 8, 1, '1, Eskaton Garden Road, Moghbazar, Dhaka, Bangladesh', ' +880-2-9353031', 'Holy Family Red Crescent Medical College & Hospital'),
(93, 8, 1, '1/1, Mirpur Road, Kallyanpur, Dhaka, Bangladesh', '+880-2-9010396', 'IBN SINA Medical College Hospital'),
(94, 8, 1, 'Motaleb Tower-1 (1st Floor), Hatirpul, Dhaka.', '9119315', 'Shondhani Eye Hospital'),
(95, 8, 1, '2/2, Kallyanpur (Bus Stand), Mirpur Road, Dhaka - 1207, Bangladesh', '+880-2-9007188, +880-2-9004317', 'Ibn Sina Hospital & Diagnostic Center (Fouad Al Khatib Unit)'),
(96, 8, 1, 'Subhanighat Point, Sylhet, Bangladesh', '+880-821-2832735-44', 'Ibn Sina Hospital Sylhet Limited'),
(97, 8, 1, '122, Kazi Nazrul Islam Avenue, Shahbagh, Dhaka - 1000, Bangladesh', '+880-2-9671141-43, +880-2-9671', 'Ibrahim Cardiac Hospital and Research Institute'),
(98, 8, 1, 'House # 42, Road # 10/A, Dhanmondi R/A, Dhaka - 1209, Bangladesh', ' +880-2-9146357', 'Ibrahim General Hospital & DCEC'),
(99, 8, 1, ' BGC Biddyanagar, Chandanaish, Chittagong, Bangladesh', '+8801824421588', 'Ibrahim Iqbal Memorial Hospital Limited'),
(100, 8, 0, '30, VIP Road, Kakrail, Dhaka - 1000, Bangladesh', '+880-2-9355801-2', 'Islami Bank Central Hospital'),
(101, 8, 1, ' Dhap, Jail Road, Rangpur, Bangladesh', '+880-0521-62731', 'Islami Bank Community Hospital Pharmacy'),
(102, 8, 1, '24/B, Outer Circular Road, Motijheel, Dhaka - 1217, Bangladesh', ' +880-2-9336421-3', 'Islami Bank Hospital'),
(103, 8, 1, 'Chandmari, Barisal, Bangladesh', ' +880-431-71036', 'Islami Bank Hospital, Barisal'),
(104, 8, 1, 'Farmgate, Dhaka - 1215, Bangladesh', '+880-2-8112856', 'Islamia Eye Hospital'),
(105, 8, 1, 'Jail Road, Jessore, Bangladesh', '+880-421-68144', 'Janata Hospital Pvt. Ltd.'),
(106, 8, 1, ' 55, Satmasjid Road (Jigatola Bus Stand), Dhaka - 1209, Bangladesh', '+880-2-9672277', 'Japan Bangladesh Friendship Hospital'),
(107, 8, 1, '70, Fattah Plaza, Green Road, Dhaka - 1205, Bangladesh', ' +880-2-9664535', 'Kidney & Urology Hospital (Pvt.) Ltd. (KHUL)'),
(108, 8, 1, 'House # 51/B(New), Road # 6/A(New), Dhanmondi, Dhaka - 1209, Bangladesh', '+880-2-8122019', 'Kidney Hospital & Dialysis Centre'),
(109, 8, 1, ' House # 1, Road # 4, Dhanmondi, Dhaka - 1205, Bangladesh', '+880-2-9676356, +880-2-8610793', 'Labaid Cardiac Hospital'),
(110, 8, 1, ' House # 6, Road # 4, Dhanmondi, Dhaka - 1205, Bangladesh', ' +880-2-9676356, +880-2-861079', 'Labaid Specialized Hospital '),
(111, 8, 1, 'House # 13/A, Road # 35, Gulshan - 2, Dhaka - 1212, Bangladesh', '+880-2-8835981-4', 'Labaid Specialized Hospital - Gulshan Branch'),
(112, 8, 0, 'House No # 100/1, Road No # 11/A, Satmasjid Road (opposite star kabab), Dhanmondi R/A, Dhaka - 1209, Bangladesh', '+8801720250291', 'Liver, Gastric, General Hospital & Research Institute'),
(113, 8, 1, ' Medical Circle, Chittagong, Bangladesh', '+880-31-651558', 'Maa-O-Mony Hospital'),
(114, 8, 1, ' B M School Road, Barisal, Bangladesh', ' +880-431-64590', 'Maternity Hospital'),
(115, 8, 1, '55, Sadarghat Road, Chittagong, Bangladesh', ' +880-31-621799', 'Memon City Corporation Hospital'),
(116, 8, 1, '4/9, Block-F, Lalmatia (Opposite to Kazi Office), Dhaka-1207, Bangladesh', '+ 880-2-9122115', 'Millennium Heart & General Hospital Ltd.'),
(117, 8, 1, 'House # 20-21, Road # 5, Block # Dha, Section # 12, Pallabi, Mirpur, Dhaka - 1216, Bangladesh', ' +880-2-8016794', 'Mirpur Adhunik Hospital, Ltd.'),
(118, 8, 1, ' House # 35, Road # 1, Section # 10, Mirpur, Dhaka - 1216. Bangladesh', '+880-2-8015444', 'Mirpur General Hospital'),
(119, 8, 1, 'House # 18, Road # 6, Dhanmondi R/A, Dhaka - 1205, Bangladesh', ' +880-2-8628512', 'Mojibunnessa Eye Hospital Limited'),
(120, 8, 1, 'Sader Road, Barisal, Bangladesh', ' +880-431-63784', 'Moklesur Rahman (pvt.) Hospital & Clinic'),
(121, 8, 1, '20/20, Tajmahal Road, Block # C, Mohammadpur, Dhaka - 1207, Bangladesh', '+880-2-9114550', 'Monon Psychiatric Hospital'),
(122, 8, 1, '3/10, Lalmatia, Block # A , Mirpur Road, Dhaka - 1218, Bangladesh', '+880-2-9142155', 'Mother Care Hospital (Pvt.) Ltd.'),
(123, 8, 1, ' Jamal Khan Road, Chittagong, Bangladesh', '+880-31-623354', 'Mount Hospital'),
(124, 8, 1, '193, Shehora Dhopakhola Road, Mymensingh - 2200, Bangladesh', '+880-91-66982', 'BNSB Eye Hospital Mymensingh'),
(125, 8, 1, 'Nalta Sharif, Kaligonj, Satkhira, Bangladesh', ' +880-473-351040', 'Nalta Hospital & Community Health Foundation'),
(126, 8, 1, 'Mohakhali, Dhaka - 1212, Bangladesh', '+880-2-8111169', 'National Institute of Cancer Research and Hospital'),
(127, 8, 1, ' Mohakhali, Dhaka - 1212, Bangladesh', '+880-2-8811910', 'National Institute of Diseases of the Chest and Hospital'),
(128, 8, 1, 'Plot # 7/2, Section # 2, Mirpur, Dhaka - 1216, Bangladesh', '+880-2-8053935-6', 'National Heart Foundation Hospital and Research Institute'),
(129, 8, 1, '30, Mehedibag, Chittagong, Bangladesh', '+880-31-623713', 'National Hospital'),
(130, 8, 1, ' Sher-e-Bangla Nagar, Dhaka - 1207, Bangladesh', '+880-2-9123722-3', 'National Hospital for Rheumatic Fever'),
(131, 8, 1, ' Sher-e-Bangla Nagar, Dhaka - 1207, Bangladesh', '+880-2-9111881', 'National Institute of Cardiovascular Disease & Hospital'),
(132, 8, 1, ' Medical Circle, Chittagong, Bangladesh', '+880-31-655109', 'Nebadita Hospital'),
(133, 8, 1, '25/A, Green Road, Dhanmondi, Dhaka - 1205, Bangladesh', '+880-2-8628820', 'New Al-Raji Hospital (Pvt.) Ltd.'),
(134, 8, 1, '19/1, Block # B, Babor Road, Mohammadpur, Dhaka - 1207, Bangladesh', '+8801712589591', 'New Welcare Hospital'),
(135, 8, 1, 'House # 84, Road # 8/A (new), Dhanmondi, Dhaka - 1209, Bangladesh', ' +880-2-8156914, +880-2-815683', 'Northern International Medical College Hospital'),
(136, 8, 1, ' OSB Bhaban, Plot # 7/1, Section # 2, Road # 1, Mirpur, Dhaka - 1216, Bangladesh', '+880-2-9003088', 'Ophthalmological Society of Bangladesh (OSB) Eye Hospital'),
(137, 8, 1, ' Pachlaish, Chittagong, Bangladesh', ' +880-31-658950', 'Pachlaish Maa-O-Shishu Hospital'),
(138, 8, 1, '99/A, Chatteswary Road, Chittagong, Bangladesh', '+880-31-619921', 'Panorama Hospital (Pvt) Ltd'),
(139, 8, 1, '3, Outer Circular Road, (Malibagh More), Dhaka, Bangladesh', '+880-2-8318699', 'Proshanti Hospital Ltd.'),
(140, 8, 1, 'Jail Road, Jessore, Bangladesh', ' +880-421-68355', 'Queen''s Hospital Pvt. Ltd.'),
(141, 8, 1, ' 208-209, Outer Circular Road, Moghbazar, Dhaka - 1217, Bangladesh', '+880-2-8317606', 'Rashmono General Hospital'),
(142, 8, 1, ' House # 60/A, Road # 4/A, Dhaka - 1209, Bangladesh', '+880-2-8611455', 'Renaissance Hospital & Research Center'),
(143, 8, 1, 'Tilok Kudirbottala, Rupsha, Khulna, Bangladesh', '+880-41-722355', 'Rev. Abdul Wadud Memorial Hospital (CSS Hospital)'),
(144, 8, 1, '58/2, Wapda Road, West Rampura, Dhaka - 1219, Bangladesh', '+8801711 319810', 'Royal Children & Mothers Hospital Ltd.'),
(145, 8, 1, ' G.E.C Circle, O.R Nizam Road, Chittagong, Bangladesh', '+880-31-658842', 'Royal Hospital'),
(146, 8, 1, ' 208-9, Outer Circular Road, Moghbazar, Dhaka - 1217, Bangladesh', '+880-2-8317819', 'Rushmono General Hospital'),
(147, 8, 1, 'Salahuddin Bhaban. 44/A, Hatkhola Road, Sutrapur, Dhaka - 1000, Bangladesh', '+880-2-7167974, +880-2-7168411', 'Salahuddin Ash-Shifa General Hospital Ltd.'),
(148, 8, 1, 'House # 36, Road # 3, Dhanmondi R/A, Dhaka, Bangladesh', '+880-2-9674114', 'Salvation Specialized Hospital'),
(149, 8, 1, '134, Sadar Road, Barisal, Bangladesh', '+880-431-2174854', 'Save Health Hospital & Clinic'),
(150, 8, 1, 'Medical Circle, Chittagong, Bangladesh', '+880-31-652635', 'Sheba Hospital'),
(151, 8, 1, '69/E, Green Road, Panthapath, Dhaka - 1205, Bangladesh', '+880-2-9665852', 'South Asian Hospital Limited'),
(152, 8, 1, 'House # 1, Road # 11/1, Block # B, Section # 10, Mirpur, Dhaka - 1216, Bangladesh', '+880-2-8018065', 'South View Hospital (Pvt.) Ltd.'),
(153, 8, 1, '135, New Eskaton Road, Dhaka - 1000, Bangladesh', '+880-2-9339089, +880-2-9342744', 'S.P.R.C. & General Hospital'),
(154, 8, 1, ' 937, Outer Circular Road, Razarbagh, Dhaka - 1217, Bangladesh', ' +880-2-9346265', 'The Barakah General Hospital Ltd.'),
(155, 8, 1, ' 22/8/A, Block # B (Opposite to Shyamoli Shishu Mela), Mirpur Road, Shyamoli, Dhaka - 1207, Bangladesh', '+880-2-8116969, +880-2-8130508', 'Trauma Center & Orthopedic Hospital'),
(156, 8, 1, '45, Panchlaish, Chittagong, Bangladesh', '+880-31-654051', 'Upasham Hospital Ltd.'),
(157, 8, 1, 'House # 1, Road # 7, Sector # 1, Uttara Model Town, Dhaka, Bangladesh', '+880-2-8911551', 'Uttara Central Hospital'),
(158, 8, 1, 'Jail Road, Jessore, Bangladesh', '+880-421-66347', 'Uttara Hospital Pvt. Ltd.'),
(159, 8, 1, ' House # 48/6, Road # 9/A, Satmasjid Road, Dhanmondi R/A, Dhaka - 1209, Bangladesh', '+880-2-9121042', 'Vision Eye Hospital'),
(160, 8, 1, ' House # 48/6, Road # 9/A , Shatmasjid Road, Dhanmondi, Dhaka, Bangladesh', ' +880-2-9121077', 'Women''s & Chidren''s Hospital'),
(161, 8, 1, 'Kazihata, Rajshahi, Bangladesh', '+880-721-771146', 'Zamzam Islami Hospital'),
(162, 8, 1, ' 17, D.C Roy Road, Mitford, Dhaka, Bangladesh', '+880-2-7320709, +880-2-7310750', 'Dhaka Hospital'),
(163, 8, 1, '2, Bara Moghbazar, Dhaka, Bangladesh', '+880-2-9353391-3', 'Ad-Din Hospital'),
(164, 8, 1, '82/8, North Jatrabari, Dhaka, Bangladesh', ' +880-2-7515855', 'Al-Baraka Hospital Complex (Pvt) Ltd.'),
(165, 8, 1, ' 1/9/E, Lalmatia, Dhaka, Bangladesh', '+880-2-9135451-2', 'Al-Noor Eye Hospital'),
(166, 8, 1, ' Sha-23/Ka, Adarshanagar Middle Badda, Dhaka, Bangladesh', '+880-2-8827239', 'Al-Sami Hospital Pvt. Ltd.'),
(167, 8, 1, ' Cha-107/2, North Badda, Progoti Shoroni, Dhaka, Bangladesh', '+880-2-8857828-30', 'Badda General Hospital & Diagnostic Center (Pvt.) Ltd.'),
(168, 8, 1, 'House # 47, Road # 27, Dhanmondi, Dhaka, Bangladesh', '+880-2-9114166, +880-2-8123977', 'Bangladesh Heart & Chest Hospital Ltd.'),
(169, 8, 1, '149/A, Airport Road, Farmgate, Dhaka, Banglades', '+880-2-8120710', 'Brain & Mind Hospital (Pvt) Ltd.'),
(170, 8, 1, '22/2, Mohammadpur, Dhaka - 1207, Bangladesh ', '+880-2-9117524', 'Crescent Hospital and Diagnostic Complex Ltd.'),
(171, 8, 1, '190/1, Bara Moghbazar, Wireless Railgate, Dhaka, Bangladesh', ' +880-2-9351190-1', 'Dhaka Community Hospital'),
(172, 8, 1, 'House # 19/E, Road # 6, Green Road, Dhaka, Bangladesh', '+880-2-8628849', 'Dhanmondi Hospital Pvt. Ltd.'),
(173, 8, 1, '103, Elephant Road, Dhaka, Bangladesh', '+880-2-8611932', 'General Medical Hospital (Pvt.) Ltd.'),
(174, 8, 1, 'House # 11, Road # 2/A, Block # J, Baridhara New Bazar, Dhaka, Bangladesh', '+880-2-8822738', 'Gulshan Maa O Shishu Hospital'),
(175, 8, 1, '69/B, Panthapath, Green Road, Dhaka, Bangladesh', ' +880-2-9667762', 'Laila Shakoor Memorial Hospital'),
(176, 8, 1, '1/G/3, Paribag, Hatirpul, Dhaka, Bangladesh', '+880-2-8610512', 'Module General Hospital'),
(177, 8, 1, ' House # 51, Road # 10/A, Dhanmondi R/A, Dhaka, Bangladesh', ' +880-2-8118226', 'Naz-E-Noor Hospital Pvt. Ltd.'),
(178, 8, 1, ' 3/1, Lake Circus, Kalabagan, Dhaka, Bangladesh', ' +880-2-8114846', 'Neurology Foundation Hospital'),
(179, 8, 1, ' 1, Momenbag, Rajarbag, Dhaka, Bangladesh', '+880-2-9339204', 'New Era Hospital'),
(180, 8, 1, 'House # 1/5, Block # D, Lalmatia, Dhaka, Bangladesh', '+880-2-8114429', 'Nirupam Hospital Pvt. Ltd.'),
(181, 8, 1, '290, Sonargaon Road, Dhaka, Bangladesh', '+880-2-8620889-19', 'Padma General Hospital Ltd.'),
(182, 8, 1, 'House # 32/A, Road # 6, Dhanmondi, Dhaka, Bangladesh', '+880-2-9671345', 'Paedihope Hospital For Sick Children'),
(183, 8, 1, '24, Outer Circular Road, Shajahanpur, Dhaka, Bangladesh', ' +880-2-9349794, +880-2-835973', 'Pan Pacific Hospital'),
(184, 8, 1, '111, Malibagh DIT Road, Dhaka, Bangladesh', ' +880-2-8321904', 'Pioneer General & Dental Hospital'),
(185, 8, 1, 'Gojaria Tower, 89/12, R.K Mission Road, Gopibagh, Dhaka, Bangladesh', ' +880-2-7512425', 'Prime General Hospital'),
(186, 8, 1, ' A. K. Complex, Green Road, Dhaka, Bangladesh', '+880-2-8616389', 'Square Diagnostic & Hospital Services Ltd.'),
(187, 8, 1, 'House # 48, Road # 4/A, Dhanmondi R/A, Dhaka, Bangladesh', '+880-2-8618388', 'Stone Crush Hospital'),
(188, 8, 1, '3/4, Patuatuly, Dhaka, Bangladesh', '+880-2-7112583, +880-2-7115531', 'Sumona Hospital'),
(189, 8, 1, ' 100, Momin Road, Chittagong, Bangladesh', ' +880-31-639025-7', 'Centre Point Hospital Ltd.'),
(190, 8, 1, 'Laksmipur, Rajshahi, Bangladesh', '+8801558352214', 'Islami Bank Medical College Hospital'),
(191, 8, 1, 'MM Ali Road, Jessore, Bangladesh', '+8801711352844', 'Lab-Scan Pvt. Hospital & Diagnostic Centre'),
(192, 8, 1, 'Dorantana More, Jessore, Bangladesh', ' +880-421-68366', 'Akota Hospital'),
(193, 8, 1, 'Rail Road, Bagerhat, Bangladesh', '+8801716495023', 'Dristydan Eye Hospital'),
(194, 8, 1, 'Howapara, Sylhet, Bangladesh', '+880-821-714849', 'Central Hospital (Sylhet)'),
(195, 8, 1, 'Old Medical Road, Sylhet, Bangladesh', '+880-821-715433', 'City Poly Clinic & Shishu Hospital'),
(196, 8, 1, 'Kumarpara, Sylhet, Bangladesh', '+880-821-713211', 'Ma-Moni Hospital'),
(197, 8, 1, 'Rikabibazar, Sylhet, Bangladesh', '+880-821-711116', 'Sylhet Metropolitan Hospital'),
(198, 8, 1, '7/13, Block # B, Humayan Road, College Gate, Mohamadpur, Dhaka - 1207, Bangladesh', ' +880-2-9133729', 'Abedin General Hospital and Consultation Center'),
(199, 8, 1, '249/5/A, South Jatrabari, Dhaka - 1204, Bangladesh', '+880-2-7514616', 'Afroza Nursing Home & General Hospital'),
(200, 8, 1, ' Plot # 2 (1st Floor), Road # 1, Block # B Mirpur - 1, Dhaka - 1216, Bangladesh', '+880-2-8059567', 'Al Rashid General Hospital'),
(201, 8, 1, 'House # 9, Road # 6, Mirpur - 10/A, Dhaka - 1216, Bangladesh', '+880-2-8010101, +880-2-8023810', 'Al-Shafi Hospital Ltd.'),
(202, 8, 1, '18/6, Mirpur - 12, Dhaka - 1216, Bangladesh', '+880-2-8013041', 'Anowara General Hospital'),
(203, 8, 1, '7/5, Main Road, Mirpur - 2, Dhaka, Bangladesh', '+880-2-8016414', 'BAVS Maternity Hospital'),
(204, 8, 1, ' House # 2, Road # 2, Kalwalapara, Block # G, Section # 1, Mirpur, Dhaka, Bangladesh', '+880-2-8011352', 'B.M. Hospital'),
(205, 8, 1, 'Shahabag, Dhaka, Bangladesh', '+880-2-8618653', 'Bangabondhu Sheikh Mujib Medical University (BSMMU) (PG Hospital)'),
(206, 8, 1, '1/4, Eskaton Garden Road, Dhaka - 1217, Bangladesh', '+880-2-9339916', 'Bhuiyan Hospital'),
(207, 8, 1, '108, R.S. Das Road, Sutrapur, Dhaka, Bangladesh', '+880-2-7114508', 'Capital General Hospital'),
(208, 8, 1, '10/1, Nabab Katara Road, Chankharpul, Dhaka - 1000, Bangladesh', ' +880-2-7301127', 'Chankharpul General Hospital'),
(209, 8, 1, ' House # 60, Road # 8/A, Dhanmondi R/A, Dhaka, Bangladesh', '+880-2-9116851', 'Crescent Gostroliver & General Hospital'),
(210, 8, 1, '22/1, Khilji Road, Mohammadpur, Dhaka - 1207, Bangladesh', '+880-2-8124952', 'Dustha Sasthya Kendra (DSK) Hospital'),
(211, 8, 1, ' 753, Sat Masjid Road, Dhanmondi, Dhaka - 1209, Bangladesh', '+880-2-8150507-10', 'Eden Multi Care Hospital'),
(212, 8, 1, '64/4, Lake Circus, Kalabagan, Dhaka - 1205, Bangladesh', ' +880-2-8158660', 'ENT Foundation Hospital'),
(213, 8, 1, 'House # 65, Road # 6, Sector # 4, Uttara, Dhaka - 1230, Bangladesh', '+880-2-8955133', 'Faith General Hospital (Pvt.) Ltd.'),
(214, 8, 1, '6/2, Borobag, Mirpur, Dhaka - 1216, Bangladesh', ' +880-2-8023894-5', 'Institute of Child Health Shishu Swasthya Foundation Hospital'),
(215, 8, 1, 'House # 1, Sector # 7, Rabindra Sarani, Uttara, Dhaka, Bangladesh', '+880-2-8924311', 'Jabal-E-Noor Hospital & Diagnostic Complex'),
(216, 8, 1, '34/1, Munir Hossain Lane, Swamibagh New Road, Dhaka - 1100, Bangladesh', '+880-2-7125152-4', 'Jahangirnagar Hospital Ltd.'),
(217, 8, 1, '61, Becharam Deori, Armanitola, Dhaka, Bangladesh', '+880-2-7312449', 'Khalikunnesa General Hospital'),
(218, 8, 1, 'Orchid Plaza - 2, 109 - Green Road (2nd Floor), Farmgate, Dhaka - 1205, Bangladesh', '+880-2-8225223', 'Life & Light Hospital'),
(219, 8, 1, '73/1/Ka, Green Road, Dhaka - 1205, Bangladesh', ' +880-2-9140423', 'Life Line Urology Center & General Hospital'),
(220, 8, 1, '1/B-12, Main Road, Mirpur, Dhaka, Bangladesh', '+880-2-9010866', 'Lion Dr. Jafor Khan Eye Hospital'),
(221, 8, 1, 'Mona Tower, 16/A, Shahid Faruk Road, Jatrabari, Dhaka, Bangladesh', ' +880-2-7520234', 'Medicom General Hospital'),
(222, 8, 1, ' 35/7/1, Golapbagh, Bishwa Road, Dhaka - 1203, Bangladesh', '+880-2-7514717', 'Monowara General Hospital, Golapbagh'),
(223, 8, 1, 'laskarpur (central bus terminal more, adjacent to Islamia College), Pabna, Bangladesh', '+880-731-65615', 'Muslim Aid Hospital'),
(224, 8, 1, ' House # 2, Road # 7, Block # C, Section # 6, Mirpur, Dhaka - 1216, Bangladesh', '+880-2-9007371', 'Royal Hospital'),
(225, 8, 1, 'House # 19, Road # 5, Sector # 7, Uttara Model Town, Dhaka - 1230, Bangladesh', '+880-2-8923904', 'RMC Hospital & Diagnostic Complex Limited'),
(226, 8, 1, 'House # 1, Road # 5, Block # A, Section # 6, Mirpur, Dhaka, Bangladesh', '+880-2-8013193', 'Rahima Maternity Hospital'),
(227, 8, 1, ' 81/B-2, Hoseni Dalan Road, Chankharpul, Dhaka - 1211, Bangladesh', '+880-2-7300977', 'Rafat General Hospital'),
(228, 8, 1, ' House # 2, Road # 2, Banani, Dhaka - 1213, Bangladesh', '+880-2-8856073-86', 'Quality Care Hospital Ltd.'),
(229, 8, 1, ' House # 14, Road # 5, Sector # 4, Uttara, Dhaka, Bangladesh', '+880-2-8959495', 'Poroshmoni Private Hospital & Clinic'),
(230, 8, 1, '16/A, Lake Circus, Kalabagan, Dhanmondi, Dhaka - 1205, Bangladesh', ' +880-2-9113131', 'Pentastar Hospital'),
(231, 8, 1, ' House # 4/A, Road # 16 (Old-27), Dhanmondi, Dhaka - 1209, Bangladesh', ' +880-2-8158394', 'Pancare Hospital Ltd.'),
(232, 8, 1, ' 5/12, Humayun Road, Block # B, Mohammadpur, Dhaka-1207, Bangladesh', ' +880-2-9120431', 'Orthopedic & General Hospital'),
(233, 8, 1, 'House # 2/8, Road # 3, Block # A, Lalmatia, Dhaka-1207, Bangladesh', ' +880-2-8118138', 'Oncology Center & General Hospital'),
(234, 8, 1, ' 22/21, Mirpur Road, Shyamoli, Mohammadpur, Dhaka - 1207, Bangladesh', '+880-2-9132714', 'Sebika General Hospital & Diagnostic Center'),
(235, 8, 1, '72/75, Majed Sarder Road, Chankharpul, Dhaka - 1000, Bangladesh', '+880-2-7300903', 'Seba General Hospital'),
(236, 8, 1, 'MitfordRd, Babubazar, Dhaka, Bangladesh', '7315076', 'Sir Salimullah Medical College and Mitford Hospital'),
(237, 8, 1, ' 6/7, Block # A, Lalmatia, Dhaka - 1207, Bangladesh', ' +880-2-9129354', 'Yamagata Dhaka Friendship Hospital'),
(238, 8, 1, 'Shahbag, Dhaka - 1000, Bangladesh', '+880-2-9661051-65, +880-2-8614', 'Bangabandhu Sheikh Mujib Medical University (PG Hospital)'),
(239, 8, 1, 'Nasirabad, Chittagong', ' +880-31-619400', 'Chittagong Medical College & Hospital '),
(240, 8, 1, 'Rajshahi - 6000, Bangladesh', '+880-721-772150', 'Rajshahi Medical College Hospital '),
(241, 8, 1, 'South Alekanda, Band Road, Barisal - 8200, Bangladesh', '+880-431-2173547', 'Sher-E-Bangla Medical College Hospital '),
(242, 8, 1, 'Rangpur, Bangladesh', ' +880-521-62288', 'Rangpur Medical College Hospital'),
(243, 8, 1, 'Sher-e-Bangla Nagor, Dhaka - 1207, Bangladesh', ' +880-2-9122560-78', 'Shaheed Suhrawardy Medical College and Hospital'),
(244, 8, 1, ' A/3, Main Road, Mirpur - 14, Dhaka - 1206, Bangladesh', '+880-2-9003475, +880-2-9872241', 'Marks Medical College & Hospital'),
(245, 8, 1, '111, DIT Road, Malibagh, Dhaka - 1217, Bangladesh', '+880-2-9340203, +880-2-9340204', 'Saphena Womens Dental College & Hospital'),
(246, 8, 1, 'Plot # 24, Court Bari Road, Sector # 08, Uttara Model Town, Dhaka - 1230, Bangladesh', '+880-2-8358404, +8801678026858', 'Sapporo Dental College & Hospital'),
(247, 8, 1, '122, Kazi Nazrul Islam Avenue, Shahbagh, Dhaka - 1000, Bangladesh', ' +880-2-8616641-50', 'BIRDEM Hospital Blood Bank'),
(248, 8, 1, 'Shahbag, Dhaka - 1000, Bangladesh', '+880-2-9661051-65', 'BSMMU Hospital Blood Bank'),
(249, 8, 1, '100 Ramna, Central Shaheed Minar Area, Bakshi Bazar, Dhaka - 1000, Bangladesh', ' +880-2-8616744, +880-2-862681', 'Dhaka Medical College Hospital Blood Bank'),
(250, 8, 1, 'Dhaka, Bangladesh', '+880-2- 8317090', 'Islami Bank Hospital Blood Bank'),
(251, 8, 1, ' 1st Floor Near Microbiology Department, Sylhet M.A.G. Osmani Medical College, Sylhet, Bangladesh', '+880-821-710880', 'M.A.G Osmani Medical College Hospital '),
(252, 8, 1, 'Sarita Vihar, Delhi Mathura Road, New Delhi - 110076 (India)', '+(91)-11-26925858', 'Indraprastha Apollo Hospitals'),
(253, 8, 1, ' Dr. E Borges Road, Parel, Mumbai - 400 012, India', '+91-22-24177000', 'Tata Memorial Hospital'),
(254, 8, 1, '2 Soi Soonvijai, 7 New Petchburi Road, Bangkapi, Huay Khwang 10310, Bangkok', '+66-2310-3000', 'Bangkok Hospital'),
(255, 8, 1, '133 Sukhumvit, 49 Klongtan Nua, Vadhana, 10110 Bangkok', '+66(0)2711-8181', 'Samitivej Sukhumvit Hospital'),
(256, 8, 1, 'No. 1 Jalan Mamanda 9, Taman Dato Ahmad Razali, 68000 Ampang, Selangor Darul Ehsan, Malaysia', '+60-3-4270-2500', 'KPJ Ampang Puteri Specialist Hospital'),
(257, 8, 1, '8, Jalan Bukit Pantai, 59100 Kuala Lumpur, Malaysia', '+603-2296 0888', 'Pantai Hospital Kuala Lumpur'),
(258, 8, 1, '95, Wen Chang Road, Shih Lin District, Taipei City, Taiwan', ' +886-2-28332211', 'Shin Kong Wu Ho-Su Memorial Hospital'),
(259, 8, 1, ' No.1, Changde St., Zhongzheng Dist., Taipei City 10048, Taiwan (R.O.C.) and No. 7, Chung-Shan South Rd. (Zhongshan S. Rd.), Zhongzheng Dist., Taipei City 100, Taiwan', '+886-2-2356-2900', 'National Taiwan University Hospital'),
(260, 8, 1, 'No.291, Zhongzheng Rd., Zhonghe District, New Taipei City, 23561, Taiwan(R.O.C.)', ' +886-2-22490088 ext. 8807 or ', 'Taipei Medical University Shuang-Ho Hospital'),
(261, 8, 1, ' 2205 Civic Drive, Filinvest Corporate City, Alabang, Muntinlupa City, 1780 Philippines', ' +632-771-9000 to 02, +632-876', 'Asian Hospital and Medical Center'),
(262, 8, 1, '585 North Bridge Road, Singapore 188770', ' +65-6311-1111', 'Raffles Hospital'),
(263, 8, 1, '5 Lower Kent Ridge Road, Singapore 119074', ' +65-6779-5555', 'National University Hospital (S) Pte Ltd'),
(264, 8, 1, ' A - 791, Bandra Reclamation, Bandra (W), Mumbai - 400 050. India', '+91-22-26751000, +91-22-265680', 'Lilavati Hospital & Research Centre, Mumbai'),
(265, 8, 1, '12, Marine Lines, Mumbai - 400 020, India.', ' 022-2067676', 'Bombay Hospital & Medical Research Centre'),
(266, 8, 1, '820 Thomson Road, Singapore 574623.', ' +65-6347-6688', 'Mount Alvernia Hospital'),
(267, 8, 1, ' 6A, Napier Road, Singapore 258500.', '+65-6473-7222', 'Gleneagles Hospital'),
(268, 8, 1, '2 Simei Street 3, Singapore 529889.', '+65-6788-8833', 'Changi General Hospital'),
(269, 8, 1, 'Agrabad, Chittagong, Bangladesh', ' 880-31-2520063', 'Chattagram Maa-Shishu O General Hospital'),
(270, 8, 1, 'Mozaffar Ahmed Chowdhury. Road, East Nasirabad P. 0.: Polytechnic, Chittagong-4209, Bangladesh.', '0443-6140249, 031-685075-76-78', 'Southern Medical College and Hospital'),
(271, 8, 1, ' 948, O.R Nizam Road, Chittagong', '654732, 655791, 651242', 'Chittagong Metropolitan Hospital Pvt. Ltd.'),
(272, 8, 1, ' 500/A, Zakir Hossain Road, Kulshi, Chittagong.', '616001-4', 'Holy Crescent Hospital Pvt. Ltd.'),
(273, 8, 1, '53/1, Panchlaish R/A, Chittagong, Bangladesh', '031-652038, 652721, 653882', 'SURGISCOPE Hospital Ltd.'),
(274, 8, 1, ' Oxyzen Mor, East Side to Alpona Comunity Center, Chittagong, Bangladesh', '01195-263319', 'Chattagram Diabetic Hospital'),
(275, 8, 1, '99/A, Chattesari Road, Chittagong, Bangladesh', '619921, 613874, 630549', 'Panaroma Hospital Pvt. Ltd.'),
(276, 8, 1, '100, Momin Road, Chittagong, Bangladesh', ' 639025-7', 'Centre Point Hospital Ltd.'),
(277, 8, 1, '4, O.R. Nizam Road, Chittagong, Bangladesh', '652728, 653965', 'Chittagong Health Care Hospital Pvt. Ltd.'),
(278, 8, 1, '45, Panchlaish R/A, Chittagong, Bangladesh', '654051, 654230', 'Upasham Hospital Ltd.'),
(279, 8, 1, 'G.E.C. Circle, O.R. Nizam Road, Chittagong, Bangladesh', '031-658842, 658849, 657193', 'Royal Hospital'),
(280, 8, 1, ' Medical Circle, Chittagong, Bangladesh', '031-655109, 655119', 'Nebadita Hospital'),
(281, 8, 1, 'Jamal Khan, Chittagong, Bangladesh', '031-623354, 623262', 'Mount Hospital'),
(282, 8, 1, '576/77, O. R. Nizam Road, Chittagong, Bangladesh', '031-650034, 655968', 'Premiar Hospital (Pvt.) Ltd.'),
(283, 8, 1, '490, Pathantuly , Najirpool, Chittagong, Bangladesh', ' 031-2519811, 2519812', 'Midpoint Hospital & Maternity Center'),
(284, 8, 1, 'House -9/10, H S Road, A-Block , Halishahar H/E, Chittagong, Bangladesh', '01819-519759, 01814-812992', 'Taisep Hospital Ltd.'),
(285, 8, 1, '14, K. C Dey Road, NandanKanon, Chittagong, Bangladesh', '031-2865120', 'J.K. Memorial Hospital'),
(286, 8, 1, '14/15, Mehidibag, Chittagong, Bangladesh', '031-623713, 623753, 627914', 'National Hospital Chattagram (Pvt.) Ltd.'),
(287, 8, 1, '116/117 Suganda R/A, Mirjapool, Muradpur, Chittagong, Bangladesh', '031-657629, 657926, 657941', 'Ekushey Hospital (Pvt). Ltd'),
(288, 8, 1, 'Nasirabad, Opposite side to Women College, Chittgaong, Bangladesh', '044-33382466', 'Lions Eye Hospital Complex'),
(289, 8, 1, '1062, Love Lane (1st Floor) 619378, 624494', '619378', 'Al-Zahar Hospital Ltd.'),
(290, 8, 1, ' 100, Momin Road, Chittagong - 4000', '639025 - 7', 'Centre Point Hospital (Pvt)Ltd.'),
(291, 8, 1, ' 948, O.R. Nizam Road', ' 031-651242', 'Chattagram Metropoliton Hospital (Pvt) Ltd.'),
(292, 8, 1, '427, Ansari Mansion, Batali Road', '031-617495', 'Chittagong Diabetic Hospital'),
(293, 8, 1, 'Andarkillah, Ctg', '611407', 'Chittagong General Hospital'),
(294, 8, 1, 'Agrabad, Ctg.', '711236', 'Chittagong Maa-O-Shishu Hospital'),
(295, 8, 1, '487/B, O.R. Nizam Road, Ctg.', ' 620634, 637235', 'Chittagong Metropolitan Hospital'),
(296, 8, 1, ' ShaheedSharani, Dhaka 1206', '+880-2-8750011-19 ext:4516.', 'Combined Military Hospital (CMH)'),
(297, 8, 1, ' 1733/A P Croad, West Rumpur Sabuj bag', '031-715166', 'Halishahar General Hospital'),
(298, 8, 1, '500/A, Zakir Hos'';ain Road, Khulshi, Ctg.', ' 620025-8', 'Holy Crescent Hospital (Pvt.) Ltd.'),
(299, 8, 1, 'O. R. Nizam Road, Ctg.', '616652', 'Lions Eye Hospital'),
(300, 8, 1, ' Zakir Hossain Road, Nasirabad, Ctg.', ' 622443', 'Lions General Hospital'),
(301, 8, 1, '37, K.B Fazlu Kader Road', '031-651558, 651648', 'Ma Moni Hospital'),
(302, 8, 1, '1160, Surson Road, Askardegi North', ' 031-623262, 623354', 'Mouni Hospital & Diagnostic Centre'),
(303, 8, 1, '30, Mehdibag', '031-623713, 623753', 'National Hospital Chittagong'),
(304, 8, 1, ' 99/A, Chatteswary Road', ' 031-613874, 619921, 630549', 'Panorama Hospital (Pvt) Ltd.'),
(305, 8, 1, ' 1226, Chatteswart Road', '031-635744', 'Public Hospital Private Limited'),
(306, 8, 1, ' 45, Panchalaish R/A', '031-654230', 'Upasham Hospital'),
(307, 8, 1, '6/2 Borobag, Mirpur-2, Dhaka - 1216', '8023894-5', 'ICH & SSF Hospital'),
(308, 8, 0, ' House 55/1, Road 16, Dhanmondi Aa/A Dhaka', 'N/A.', 'Dhaka Newnetal Hospital ltd.'),
(309, 8, 0, '11/1 Here Street, Wari, Dhaka.', 'N/A..', 'Nebedita Shishu Hospital ltd.'),
(310, 8, 0, '843, Baytul Aman Housing Society, Ring Road, Shyamoli, Dhaka', 'Not Collected', 'Dhaka Orthopedic Hospital (Pvt.)Ltd.'),
(311, 8, 1, '5/4, Bloc-F, Lalmatia, Dhaka.', 'N/A....', 'Al Manar Hospital (Pvt.) Ltd.'),
(312, 8, 0, ' Plot-A/3, Section-14, Mirpur, Dhaka', 'The Marks-E-N,T, Clinic & Gene', 'The Marks-E-N,T, Clinic & General Hospital'),
(313, 8, 1, 'Address: House-10/A, Road-5, Green Road, Dhanmondi, Dhaka.', 'Centeral Hospital Ltd. N/A', 'Centeral Hospital Ltd.'),
(314, 8, 0, ' 4/5, Iqbal Road, Mohammadpur, Dhaka.', 'No Collection', 'Impact Jiban Tari Fluting Hospital'),
(315, 8, 1, 'C-259, Khilgaon, Dhaka.', 'Careland Hospital (pvt) ltd. N', 'Careland Hospital (pvt) ltd.'),
(316, 8, 1, 'House-15, Shaesta Khanavenew, Sector-4,Uttra, Dhaka.', 'China Bangla Hospital Ltd N/A', 'China Bangla Hospital Ltd'),
(317, 8, 1, '3/8, Tazmahal Road, Mohammadpur, Dhaka', 'Aki Nahar Eye Hospital (N/A)', 'Aki Nahar Eye Hospital'),
(318, 8, 1, ' 6, Shantibug, Dhaka.', 'Proshanti Hospital Ltd. N/A', 'Proshanti Hospital Ltd.'),
(319, 8, 1, 'House-5, Road -104, Gulshan-2, Dhaka', 'Z. H. Sikdar Womens Medical Co', 'Z. H. Sikdar Womens Medical College & Hospital'),
(320, 8, 1, '61, Becharam Dewri, Dhaka.', 'Khalekunnesa General Hospital ', 'Khalekunnesa General Hospital'),
(321, 8, 1, 'House-7/3, Block- A, Lalmatia, Dhaka.', 'Arab Bangladesh General Hospit', 'Arab Bangladesh General Hospital Ltd.'),
(322, 8, 1, '1/9, Humaun Road, College Gate, Dhaka', 'Mediprime Orthopedic & General', 'Mediprime Orthopedic & General Hospital'),
(323, 8, 1, ' Demra Road, Dhaka', 'Arimo General Hospital N/A', 'Arimo General Hospital'),
(324, 8, 0, '381/A, DIT Road West Rampura, Dhaka', 'Dhaka Madani Mahanagar Hospita', 'Dhaka Madani Mahanagar Hospital'),
(325, 8, 1, ' 82/8, North Jatrabari, Dhaka', 'Al Baraka Hospital Complex (Pv', 'Al Baraka Hospital Complex (Pvt.) Ltd.'),
(326, 8, 1, ' House-65, Road-6, Sector-4, Uttra, Dhaka', 'Feith General Hospital (Pvt.) ', 'Feith General Hospital (Pvt.) Ltd.'),
(327, 8, 1, ' kamar para, Uttra, Dhaka', 'Manamo General Hospital & Diag', 'Manamo General Hospital & Diagonistic Center'),
(328, 8, 1, 'Almus Tower, Mazar Road, Mirpur, Dhaka', 'Fuad Al Khatib Foundetion Hosp', 'Fuad Al Khatib Foundetion Hospital'),
(329, 8, 1, 'House-22, Road-3, Dhanmondi, Dhaka', 'Popular Mother Child & General', 'Popular Mother Child & General Hospital'),
(330, 8, 1, '282/1, 1st Kaloni, Mazar Road, Mirpur Dhaka', 'Selina General Hospital (N/A)', 'Selina General Hospital'),
(331, 8, 1, 'House-12, Road- 12, Uttra, Dhaka', 'Al-Ashraf General Hospital (N/', 'Al-Ashraf General Hospital'),
(332, 8, 1, 'Track Gate, New Bazar, Chadpur.', 'Midland Hospital (pvt) (N/A)', 'Midland Hospital (pvt)'),
(333, 8, 1, 'Plot 1/C, Section-14, Mirpur, Dhaka', 'Ahcania Mission Cancer Hospita', 'Ahcania Mission Cancer Hospital'),
(334, 8, 1, 'Rajarbag, Dhaka -1000', '01711188632', 'Central Police Hospital'),
(335, 8, 1, 'Plot-404, Block-A, Basundhara, Dhaka.', 'Greatwal Hospital (Pvt.) Ltd. ', 'Greatwal Hospital (Pvt.) Ltd.'),
(336, 8, 1, ' 73 Kakrail Commercial Complex, Dhaka', 'Hazi Sakhawat Anawar Eye Hospi', 'Hazi Sakhawat Anawar Eye Hospital Ltd.'),
(337, 8, 1, 'Chittoranzan Avenew, Sadarghat, Dhaka.', 'Sumana Dental College Hospital', 'Sumana Dental College Hospital'),
(338, 8, 1, 'Mirpur-10,(opposite to fire brigade),Dhaka - 1216', '8050193, 8033870', 'Galaxy Hospital (Pvt.)Ltd.'),
(339, 8, 1, 'House-100/1, Road-11/A, Sat Maszid Road, Dhanmondi, Dhaka.', 'Liver Gestic General Hospital ', 'Liver Gestic General Hospital'),
(340, 8, 1, '38 Shahid Faruq Road, North Jatrabari, Dhaka.', 'Supreme General Hospital (N/A)', 'Supreme General Hospital'),
(341, 8, 1, '120/1, Siddeswary, Outer Sarkular Road, Moghbazar, Dhaka.', 'Univercity Dental College & Ho', 'Univercity Dental College & Hospital'),
(342, 8, 0, ' 68, Al Amin Super Market, Postagola Chowrasta, Dhaka.', 'Dhaka City Hospital & Diagonis', 'Dhaka City Hospital & Diagonistic'),
(343, 8, 1, '150, Monipuri Para, Farmgate, Dhaka.', 'Morden Physiatrick Hospital (N', 'Morden Physiatrick Hospital'),
(344, 8, 1, 'House-183, Road-69, Gulshan-2, Dhaka.', 'Lifeboy Firendship Hospital (N', 'Lifeboy Firendship Hospital'),
(345, 8, 1, 'Chowdhuri Plaza, Jumgara, Savar, Dhaka.', 'Doctors General Hospital & Dia', 'Doctors General Hospital & Diagonistic Center'),
(346, 8, 1, '31C,Shahid Faruq Sarak, Jatrabari, Dhaka.', 'Jatrabari Eye Hospital (N/A)', 'Jatrabari Eye Hospital'),
(347, 8, 1, ' Rahman Plaza, Shahid Faruq Sarak, Jatrabari, Dhaka.', 'Bangladesh Eye Foundetion & Ho', 'Bangladesh Eye Foundetion & Hospital'),
(348, 8, 1, 'House-17, Road-1, Block-F, Section-1, Mirpur, Dhaka.', 'Unic General Hospital (N/A)', 'Unic General Hospital'),
(349, 8, 1, '115 Kitab Uddin Road, Kawlar DakhinKhan, Dhaka.', 'Roza General Hospital & Diagon', 'Roza General Hospital & Diagonistic Center'),
(350, 8, 1, 'House-10, Road-7/D, Sector-9, Uttra, Dhaka.', 'Lab King & General Hospital (N', 'Lab King & General Hospital'),
(351, 8, 1, '223/2, 3rd Floor, Cantonment, Dhaka.', 'Suravi Maternity Hospital (Pvt', 'Suravi Maternity Hospital (Pvt.) Ltd.'),
(352, 8, 1, '445 Naya Para, Donia, Dhaka.', 'Popi General Hospital (N/A)', 'Popi General Hospital'),
(353, 8, 1, 'Eyechi Nagar, JBCC Sarani, Harirampur, Turag, Dhaka.', 'East West Medical College & Ho', 'East West Medical College & Hospital'),
(354, 8, 1, 'Plot-1, Avenew-1, Block-B, Mirpur, Dhaka.', 'Mirpur Eye Hospital Ltd. (N/A)', 'Mirpur Eye Hospital Ltd.'),
(355, 8, 1, 'House-A/87, Albug Thana Road, Savar, Dhaka.', 'Lab Zone Pvt. Ltd. Hospital Un', 'Lab Zone Pvt. Ltd. Hospital Unit'),
(356, 8, 1, 'House-15/16, Road-113/A, Gulshan-2, Dhaka.', 'Sahab Uddin Medical College Ho', 'Sahab Uddin Medical College Hospital'),
(357, 8, 1, '95, New Wasa Road, Shampur, Dhaka.', 'Parvin Clinic & General Hospit', 'Parvin Clinic & General Hospital'),
(358, 8, 1, 'Goail Bari Road, Jirani, Ashulia, Savar, Dhaka.', 'Laily General Hospital & Diago', 'Laily General Hospital & Diagonistic Center'),
(359, 8, 1, 'Kalampur Bazar, Dhamrai, Dhaka.', 'Harun General Hospital (N/A)', 'Harun General Hospital'),
(360, 8, 1, 'Road-6, Block-A, House-71, Mirpur-12, Dhaka.', 'Rabeya Maternity Hospital (N/A', 'Rabeya Maternity Hospital'),
(361, 8, 1, ' Meghula Bazar, Dohar, Dhaka.', 'Promiz Zeneral Hospital (N/A)', 'Promiz Zeneral Hospital'),
(362, 8, 1, '13-A/8-A, Babor Road, Block-B, Mohammadpur, Dhaka.', 'National Care General Hospital', 'National Care General Hospital'),
(363, 8, 1, 'B-8/8, Taramiah Sarak, Genda, Savar, Dhaka.', 'Vark Ma & Shiu Hospital (N/A)', 'Vark Ma & Shiu Hospital'),
(364, 8, 1, 'Fultala Bazar, Dohar, Dhaka.', 'Mohammad Abdur Razzak Hospital', 'Mohammad Abdur Razzak Hospital'),
(365, 8, 1, 'Ahmed Nagar, Dagair, Demra, Dhaka.', 'Renova Hospital (N/A)', 'Renova Hospital'),
(366, 8, 1, ' C-7/1, Jaleshshr, Shimultala, Savar, Dhaka.', 'Hasabar Adhunik Hospital (N/A)', 'Hasabar Adhunik Hospital'),
(367, 8, 0, ' 40/2, Amiullah Plaza, Shahid Faruq Sarak, Jatrabari, Dhaka. ', 'Central Specialiazed Eye Hospi', 'Central Specialiazed Eye Hospital'),
(368, 8, 1, ' 26, Atish Dipangkar Sarak, Sabujbug, Dhaka.', 'Health Aid Diagonistic & Hospi', 'Health Aid Diagonistic & Hospital Ltd.'),
(369, 8, 1, ' 43/RA, West Panthapath, Dhaka.', 'Special Care Hospital & Cancer', 'Special Care Hospital & Cancer Center Ltd.'),
(370, 8, 1, 'Ashulia, Savar, Dhaka.', 'M.C.B Memorial Hospital & Diag', 'M.C.B Memorial Hospital & Diagonistic Center'),
(371, 8, 1, '111, Malibag, DIT Road, Dhaka.', 'Sapena General & Dental Hospit', 'Sapena General & Dental Hospital Ltd.'),
(372, 8, 1, '125/1, Darussalam, Mirpur-1, Dhaka.', 'B.I.H.S. Hospital (N/A)', 'B.I.H.S. Hospital'),
(373, 8, 1, 'House-16, Road-16, Dhanmondi, Dhaka.', 'Defam Hospital & Recherche Cen', 'Defam Hospital & Recherche Center Pvt. Ltd.'),
(374, 8, 1, '110/1, West Dholaipar, Jatrabari, Dhaka.', 'Unicare General Hospital (N/A)', 'Unicare General Hospital'),
(375, 8, 1, 'East Hazinagar, Sarulia, Demra, Dhaka.', 'Ar-Rafi Hospital & Diagonistic', 'Ar-Rafi Hospital & Diagonistic Center'),
(376, 8, 1, '120/3, C Darus Salam Road, Mirpur-1, Dhaka.', 'Bangladesh Cancer Hospital & W', 'Bangladesh Cancer Hospital & Well Fare Home'),
(377, 8, 1, ' House-41, Road-7, Sector-4, Uttra Model Town, Dhaka.', 'Mileniam Pangu Hospital & Diag', 'Mileniam Pangu Hospital & Diagonistic Complex'),
(378, 8, 1, '183, EPZ Road, Ashulia, Savar, Dhaka.', 'Shin Shin Japan Hospital Ltd. ', 'Shin Shin Japan Hospital Ltd.'),
(379, 8, 1, '21/A, Iqbal Road, Mohammadpur, Dhaka', 'Care Hospital & Diagonistic Pv', 'Care Hospital & Diagonistic Pvt. Ltd.'),
(380, 8, 1, 'Plot-6, Road-3, Sector-1, Uttra, Dhaka.', 'Makka Eye Hospital (N/A)', 'Makka Eye Hospital'),
(381, 8, 1, '279/A, South Jatrabari, Dholaipar Busstand, Dhaka.', 'Asia Hospital & Diagonistic Ce', 'Asia Hospital & Diagonistic Center'),
(382, 8, 1, '168, North Jatrabari, Dhaka.', 'Rahima Eye Hospital (N/A)', 'Rahima Eye Hospital'),
(383, 8, 1, 'Ashrafabud, Kamrangirchar, Dhaka.', 'Aleya Islam General Hospital (', 'Aleya Islam General Hospital'),
(384, 8, 1, 'Ring Road, Shyamoli, Dhaka.', 'Diganta Memorial Cancer Hospit', 'Diganta Memorial Cancer Hospital'),
(385, 8, 1, ' Ga-36/A, Middle Badda, Dhaka.', 'Badda Shishu Hospital (N/A)', 'Badda Shishu Hospital'),
(386, 8, 1, 'Motaleb Tower, 8/2, Paribug, Dhaka.', 'Sandhani Eye Hospital (N/A)', 'Sandhani Eye Hospital'),
(387, 8, 1, '104, Meraznagar, Rayerbazar, Dhaka.', 'Sufia General Hospital & Diago', 'Sufia General Hospital & Diagonistic Center'),
(388, 8, 1, 'Shanir Akhra Bazar, Jatrabari, Dhaka.', '4 Safe Aid General Hospital & ', '4 Safe Aid General Hospital & Diagonistic Center'),
(389, 8, 1, '17 Garib E Newaz Avenew, Sector-11, Uttra, Dhaka.', 'Shinan Shin Japan Hospital Ltd', 'Shinan Shin Japan Hospital Ltd.'),
(390, 8, 1, ' Mohammadpur, Dhaka.', 'Union General Hospital & Diago', 'Union General Hospital & Diagonistic Center Ltd.'),
(391, 8, 1, 'Thana Road, Savar, Dhaka.', 'Prince Hospital & Diagonistic ', 'Prince Hospital & Diagonistic Center'),
(392, 8, 1, ' 25, Jatrabari, Dhaka.', 'Islamia General Hospital Pvt. ', 'Islamia General Hospital Pvt. Ltd.'),
(393, 8, 1, '81/B/2, Chankharpool, Dhaka.', 'Arafat General Hospital & Diag', 'Arafat General Hospital & Diagonistic Center'),
(394, 8, 1, ' Meer Shawkat Ali Road, Hazaribagh, Dhaka.', 'Life & Care Hospital Ltd. (N/A', 'Life & Care Hospital Ltd.'),
(395, 8, 1, '373, Manikdi, Dhaka Senanibas, Dhaka.', 'D N S Hospital & Diagonistic C', 'D N S Hospital & Diagonistic Center'),
(396, 8, 1, 'Ch-88/5, North Badda, Dhaka.', 'H A F General Hospital & Diago', 'H A F General Hospital & Diagonistic Center (Pvt). Ltd.'),
(397, 8, 1, '1991, Zia Sarani, South Donia, Kadamtoli, Dhaka.', 'M H Chowdhury General Hospital', 'M H Chowdhury General Hospital & Diagonistic Center'),
(398, 8, 1, 'A-30/5, Mother Bhaban, Mazidpur Savar, Dhaka.', 'Savar Central Hospital (N/A)', 'Savar Central Hospital'),
(399, 8, 1, ' Nawabganj, Dhaka.', 'Hol Care Hospital & Diagonisti', 'Hol Care Hospital & Diagonistic Center'),
(400, 8, 1, '31, Nayabazar, Dhaka.', 'Dhaka Unic Hospital (N/A)', 'Dhaka Unic Hospital'),
(401, 8, 1, '450/456, Nayapara, Donia, Shanirakhra, Dhaka.', 'Deshbangla Hospital & Diagonis', 'Deshbangla Hospital & Diagonistic Center'),
(402, 8, 1, 'House-1/3, Road-2, Sector-3, Uttra, Dhaka.', 'Lab One Hospital (N/A)', 'Lab One Hospital'),
(403, 8, 1, 'Hazi Zulekha Tower, Netrocona.', 'Netrocona Ideal Hospital (Pvt.', 'Netrocona Ideal Hospital (Pvt.) Ltd.'),
(404, 8, 1, ' Shibgonj Road, Netrocona, Dhaka.', 'Sabolombi Hospital (N/A)', 'Sabolombi Hospital'),
(405, 8, 1, 'Tery Bazar, Netrocona.', 'Apollo (Pvt.) Hospital', 'Apollo (Pvt.) Hospital'),
(406, 8, 1, 'Chapatali, Sherpur', 'Nayan Tari Hospital (N/A)', 'Nayan Tari Hospital'),
(407, 8, 1, '68, D.C. Road, Gopalgonj.', 'Doctor Farid Memorial Hospital', 'Doctor Farid Memorial Hospital'),
(408, 8, 1, ' Thana Sadar Road, Palash, Narsingdi.', 'Tara Miah Memorial Hospital (N', 'Tara Miah Memorial Hospital'),
(409, 8, 1, 'Madobdi Busstand, Madobdi, Narsingdi.', 'Prime General Hospital (N/A)', 'Prime General Hospital'),
(410, 8, 1, 'Basail, Narsingdi', 'Well Come (Pvt.) Hospital (N/A', 'Well Come (Pvt.) Hospital'),
(411, 8, 1, 'C&B Road, Badshah Plaza, Narsingdi.', 'Al-Falah Pipols (Pvt.) Hospita', 'Al-Falah Pipols (Pvt.) Hospital'),
(412, 8, 1, '20 Road, Narsingdi', 'Holy Crisent Private Hospital ', 'Holy Crisent Private Hospital'),
(413, 8, 1, 'Songita Road, Chowrasta More, Narsingdi.', 'Sufia (Pvt.) General Hospital ', 'Sufia (Pvt.) General Hospital'),
(414, 8, 1, 'C&B Road, Narsingdi.', 'Ifa (Pvt.) Hospital & Diagonis', 'Ifa (Pvt.) Hospital & Diagonistic Center'),
(415, 8, 1, '89/1, Taroa Cot Road, Narsingdi.', 'Narsingdi General Hospital (N/', 'Narsingdi General Hospital'),
(416, 8, 1, ' College Gate, Shibpur, Narsingdi.', 'Shibpur General (Pvt.) Hospita', 'Shibpur General (Pvt.) Hospital'),
(417, 8, 1, 'Jelkhana Road, Taroa, Narsingdi', 'Holy Life General & Troma (Pvt', 'Holy Life General & Troma (Pvt.) Hospital'),
(418, 8, 1, 'C&B Road, Narsingdi.', 'Nurzahan (Pvt.) Hospital (N/A)', 'Nurzahan (Pvt.) Hospital'),
(419, 8, 1, 'Manohardi, Narsingdi.', 'Taz (Pvt.) Hospital (N/A)', 'Taz (Pvt.) Hospital'),
(420, 8, 1, 'C&B Road, Narsingdi.', 'Niramoy Hospital (N/A)', 'Niramoy Hospital'),
(421, 8, 1, '16, North Matir Para, USC Road,Narsingdi', 'New Sufia Pvt. Hospital (N/A)', 'New Sufia Pvt. Hospital'),
(422, 8, 1, 'Basail, Narsingdi.', 'National General & Shishu Hosp', 'National General & Shishu Hospital'),
(423, 8, 1, '145, BBRoad, Narayangonj', 'Medistar General Hospital (N/A', 'Medistar General Hospital');
INSERT INTO `tbl_category_data` (`category_data_id`, `user_id`, `category_id`, `address`, `cell_number`, `name`) VALUES
(424, 8, 1, ' 53/1, NababSalimullahRoad, Chashara, Narayangonj', 'Care General Hospital (N/A)', 'Care General Hospital'),
(425, 8, 1, '27 Mazid, KhanpurMainRoad, Narayangonj.', 'Shahin General Hospital Ltd. (', 'Shahin General Hospital Ltd.'),
(426, 8, 1, '111, BBRoad, Narayangonj.', 'Life General Hospital (N/A)', 'Life General Hospital'),
(427, 8, 1, '1/4, NababSalimullahRoad, Narayangonj', 'Park General Hospital (N/A)', 'Park General Hospital'),
(428, 8, 1, '47/11, BangobandhuRoad, V I T, Narayangonj', 'Rizia General Hospital (N/A)', 'Rizia General Hospital'),
(429, 8, 1, 'Rupgonj, Narayangonj.', 'Medi Health Central Hospital &', 'Medi Health Central Hospital & Diagonistic Center'),
(430, 8, 1, 'Chiittagong Road, Siddergonj, Narayangonj.', 'Sugandha Hospital (Pvt.) Ltd. ', 'Sugandha Hospital (Pvt.) Ltd.'),
(431, 8, 1, '150, BBRoad, Narayangonj.', 'Mukti General Hospital Ltd.  (', 'Mukti General Hospital Ltd.'),
(432, 8, 1, 'Rupgonj, Vulta, Narayangonj', 'Vulta General Hospital & Diago', 'Vulta General Hospital & Diagonistic Center'),
(433, 8, 1, ' Sonargaon, Narayangonj.', 'Sonargaon General Hospital & D', 'Sonargaon General Hospital & Diagonistic Center'),
(434, 8, 1, 'Chanmari, Narayangonj.', 'Rotari Desh Bandhu Hospital  (', 'Rotari Desh Bandhu Hospital'),
(435, 8, 1, ' Thana Road, Sonargaon, Narayangonj.', 'Ma General Hospital & Diagonis', 'Ma General Hospital & Diagonistic Center Pvt. Ltd.'),
(436, 8, 1, '42/2, NababSalimullahRoad, Narayangonj', 'Central General Hospital  (N/A', 'Central General Hospital'),
(437, 8, 1, 'Kachpur, Narayangonj.', 'Kachpur Modern Hospital & Comp', 'Kachpur Modern Hospital & Computerize Diagonistic Center'),
(438, 8, 1, 'Kachpur, Sonapur, Narayangonj', 'The Popular General Hospital &', 'The Popular General Hospital & Diogonistic Center'),
(439, 8, 1, 'Rupasi Busstand, Rupgonj, Narayangonj', 'Medi Lab General Hospital & Di', 'Medi Lab General Hospital & Diagonistic Center'),
(440, 8, 1, ' 33/3, HK Banarzy Road, Amlapara, Narayangonj', 'Dola General Hospital  (N/A)', 'Dola General Hospital'),
(441, 8, 1, 'Khanpur, Narayangonj.', 'Apollo (Pvt.) Hospital  (N/A)', 'Apollo (Pvt.) Hospital'),
(442, 8, 1, '2/A, Salimullah Road, Khanpur, Narayangonj', 'Samrat General Hospital  (N/A)', 'Samrat General Hospital'),
(443, 8, 1, 'Hazi Ibrahim Khalil Shoping Complex.Chittagong Road, Siddergonj, Narayangonj.', 'Ma Hospital & Lab  (N/A)', 'Ma Hospital & Lab'),
(444, 8, 1, 'WestDewbug, Narayangonj', 'Narayangonj Diabetics Hospital', 'Narayangonj Diabetics Hospital'),
(445, 8, 1, 'Puratan Polli Biddut Office, Araihazar, Narayangonj.', 'Central Hospital & Diagonistic', 'Central Hospital & Diagonistic Center'),
(446, 8, 1, 'Akata Super Market, Chanpur, Madanpur, Bondor, Narayangonj', 'Ishakha General Hospital  (N/A', 'Ishakha General Hospital'),
(447, 8, 1, '592, Barpa Bustand, Rupgonj, Narayangonj.', 'Barpa General Hospital & Diago', 'Barpa General Hospital & Diagonistic Center'),
(448, 8, 1, 'Shahjzlal Bhaban, Araihazar, Narayangonj.', 'Faisal Hospital Hospital  (N/A', 'Faisal Hospital Hospital'),
(449, 8, 1, 'Goltakanda, Vulta, Narayangonj', 'Al Rafi Hospital Ltd.  (N/A)', 'Al Rafi Hospital Ltd.'),
(450, 8, 1, '85/1, KhanpurMainRoad, Narayangonj.', 'Matriseba General Hospital  (N', 'Matriseba General Hospital'),
(451, 8, 1, 'M O Road, Siddergonj, Narayangonj.', '6 Medicare General Hospital  (', '6 Medicare General Hospital'),
(452, 8, 1, 'Narayangonj', 'Madina Eye Hospital Ltd.  (N/A', 'Madina Eye Hospital Ltd.'),
(453, 8, 1, 'Siddergonj, Narayangonj.', 'Bright Hospital & Lab. Pvt.Ltd', 'Bright Hospital & Lab. Pvt.Ltd.'),
(454, 8, 1, 'Dubai Plaza Market, Araihazar, Narayangonj', 'Sumi General Hospital Ltd.  (N', 'Sumi General Hospital Ltd.'),
(455, 8, 1, 'Pashchim Para, Siddergonj, Narayangonj', 'Mediciure General Hospital & D', 'Mediciure General Hospital & Diagonistic Center'),
(456, 8, 1, 'Shimrail, Siddergonj, Narayangonj', 'Sazeda General Hospital  (N/A)', 'Sazeda General Hospital'),
(457, 8, 1, 'Atroshi, Jakir Manzil, Faridpur', 'Bisshow Jaker Manzil Hospital ', 'Bisshow Jaker Manzil Hospital'),
(458, 8, 1, ' South Khabaspur, Faridpur.', 'Niramoy Hospital & Diagonistic', 'Niramoy Hospital & Diagonistic Center'),
(459, 8, 1, ' Kanaipur, Faridpur.', 'Kanaipur General & Eye Hospita', 'Kanaipur General & Eye Hospital Pvt. Ltd.'),
(460, 8, 1, ' Niltuli, Faridpur.', 'Faridpur Diabetic Hospital  (N', 'Faridpur Diabetic Hospital'),
(461, 8, 1, 'Alipur, Faridpur  (N/A)', 'Islami Bank Community Hospital', 'Islami Bank Community Hospital'),
(462, 8, 1, 'Bisshow Road MOR, Vanga, Faridpur', 'High Light Eye Hospital  (N/A)', 'High Light Eye Hospital'),
(463, 8, 1, 'South Kalibari Road, Jhiltuli, Faridpur.', 'Dr. Jahed Memorial Shishu Hosp', 'Dr. Jahed Memorial Shishu Hospital'),
(464, 8, 1, 'Munsurabad, Vanga, Faridpur', 'Hasina Amdad Memorial Matarnit', 'Hasina Amdad Memorial Matarnity Hospital.'),
(465, 8, 1, 'West Khabaspur, Faridpur.', 'Al-Madina Hospital & Diagonist', 'Al-Madina Hospital & Diagonistic Center'),
(466, 8, 1, 'Vanga Town, Vanga, Faridpur.', 'Bandhu General Hospital & Diag', 'Bandhu General Hospital & Diagonistic Ltd.'),
(467, 8, 3, 'Labaid Cardiac Hospital, House: 1, Road: 4, Dhanmondi, Dhaka-1205, Bangladesh', 'Qualification: MBBS, MD, FCPS ', 'Dr. A. P. M. Shorabuzzaman'),
(468, 8, 3, 'Qualification: MBBS, FCPS, MD (Cardiology),Designation: Associate Professor of Cardiology, Work Place: Dhaka Medical College & Hospital , Address: Lab Aid Cardiac Hospital, House # 1, Road # 4, Dhanmondi, Dhaka - 1205', ' 01819251519', 'Dr. Abdul Wadud Chowdhury'),
(469, 8, 3, 'Qualification: MBBS, MCPS, FCPS, FCCP, FACA, FRCP (Ireland), FRCP (Edin), FRCP (Glasgow), Senior Fellowship in Cardiology (Singapore) Department of Cardiology Labaid Cardiac Hospital  Designation: Professor & Senior Consultant, Interventional Cardiology', 'Work Place: Labaid Cardiac Hos', 'Dr. Baren Chakraborty'),
(470, 8, 3, 'Address: United Hospital Ltd., Plot: 15, Road: 71, Gulshan, Dhaka-1212, Bangladesh', 'Qualification: MBBS, FCPS (Med', 'Dr. Fatema Begum'),
(471, 8, 3, 'Address: 122, Kazi Nazrul Islam Avenue, Shahbagh, Dhaka-1000, Bangladesh Address: 122, Kazi Nazrul Islam Avenue, Shahbagh, Dhaka-1000, Bangladesh', 'Qualification: MBBS, FCPS (Med', 'Dr. M. Maksumul Haq'),
(472, 8, 3, 'Address: Labaid Cardiac Hospital, House: 1, Road: 4, Dhanmondi, Dhaka-1205, Bangladesh', 'Qualification: MBBS, MCPS, MD ', 'Dr. Mahbubur Rahman'),
(473, 8, 3, 'Address: United Hospital Ltd., Plot: 15, Road: 71, Gulshan, Dhaka-1212, Bangladesh', 'Qualification: MBBS, D-CARD, M', 'Dr. N. A. M. Momenuzzaman'),
(474, 8, 3, 'BSMMU, Shahbagh, Dhaka-1000, Bangladesh.', 'Qualification: MBBS, MD (Cardi', 'Dr. Sajal Krishna Banerjee'),
(475, 8, 3, 'Address: Apollo Hospitals, Dhaka. Plot: 81, Block: E, Bashundhara R/A, Dhaka-1229, Bangladesh', 'Qualification: MBBS, MRCP (UK)', 'Dr. Shams Munwar'),
(476, 8, 14, 'Qualification: MBBS, MS, FICS, PhD, DSc  Designation: Professor of Cardiac Surgery & Chief Consultant  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Address: Shahabag, Dhaka, Bangladesh. Z H Sikder Medical College Hospital, House # 5, Road # 104, Gulshan-2, Dhaka, Bangladesh.', 'Dr. Asit Baran Adhikary'),
(477, 8, 14, 'Qualification: MBBS, MS  Designation: Professor & Head, Cardiothoracic Surgery  Work Place: National Heart Foundation Hospital and Research Institute  Address: Plot # 712, Section # 2, Mirpur, Dhaka', '+88-02-8061314-16', 'Dr. Farooque Ahmed'),
(478, 8, 14, 'Qualification: MBBS, MS (CTS) Chief Cardiac Surgeon & Director  Designation: Cardiac Centre  Work Place: United Cardiac Center  Address: Plot 15, Road 71, Gulshan, Dhaka.', '+88028836000, 8836444', 'Dr. Jahangir Kabir'),
(479, 8, 14, ' House # 1, Road # 4, Dhanmondi, Dhaka-1205, Bangladesh', 'Qualification: MBBS, MS  Designation: Senior Consultant & Chief Cardiac Surgeon  Work Place: Labaid Cardiac Hospital', 'Dr. Lutfor Rahman'),
(480, 8, 14, '122, Kazi Nazrul Islam Avenue (3rd Floor), Shahbagh, Dhaka-1000', 'Qualification: MBBS, FRCS (Ed)  Designation: Senior Consultant & Head of Cardiac Surgery  Work Place: ICDDRB ( International Center for Diarrhoeal Disease Research )', 'Dr. Masoom Siraj'),
(481, 8, 15, 'Dhaka, Bangladesh', 'Qualification: MBBS, FRCS (Glasgow), FCPS  Designation: Professor of Otolaryngology  Work Place: United Hospital Ltd.', 'Dr. Abdullah A. Haroon'),
(482, 8, 15, 'Shahbag, Dhaka, Bngladesh.', 'Qualification: MBBS, DLO, FRCS  Designation: Professor of Otolaryngology  Work Place: BIRDEM', 'Dr. Ali Zaheer Al Amin'),
(483, 8, 15, 'Dhaka, Bangladesh', 'Qualification: MBBS, (Dhaka) FCPS (ENT), FICS (USA) Trained in Micro Ear Surgery (Bangkok & Mumbai) Advanced Training in Endoscopic Sinus Surgery (Delhi)  Designation: Professor of ENT & Head Neck Surgery  Work Place: Shaheed Suhrawardy Medical College and Hospital', 'Dr. Khabir Uddin Ahmed'),
(484, 8, 15, 'Dhaka, Bangladesh', 'Qualification: MBBS, FCPS  Designation: Professor, Otolaryngology & Head Neck Surgery  Work Place: Central Hospital Ltd.', 'Dr. M Abdullah'),
(485, 8, 15, 'Qualification: MBBS, DAND (INFS), DLO, MS (ENT), FACS (USA)  Designation: Seior Consultant ENT Specialist & Head Neck Surgeon  Work Place: Labaid Specialized Hospital  Address: Dhanmondi R/A, Dhaka, Bangladesh ENT Care Centre RM Center, 3rd floor, 101, Gulshan Ave, Dhaka 1212 (Above Agora Supermarke', '8610793-8', 'Dr. M. Muinul Hafiz'),
(486, 8, 15, 'Shahbag, Dhaka, Bangladesh', 'Qualification: MBBS, MCPS, ACORL, Ph.D M.Sc in Audiological Medicine (UK)  Designation: Vice Chancellor & Professor of Otolaryngology  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Pran Gopal Datta'),
(487, 8, 15, 'Shahbag, Dhaka, Bangladesh', 'Qualification: MBBS, FCPS  Designation: Associate Professor  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Quamrul Hasan Tarafder'),
(488, 8, 15, ' Dhaka, Bangladesh', 'Qualification: MBBS, FCPS, MS  Designation: Associate Professor  Work Place: Uttara Adhunik Medical College', 'Dr. S. M. Khorshed Alam Mazumder'),
(489, 8, 15, ' Dhaka, Bangladesh', 'Qualification: MBBS, FCPS, MS  Designation: Ex. Professor of Otolaryngology  Work Place: Dhaka Medical College & Hospital', 'Dr. Zilur Rahman'),
(490, 8, 16, 'Qualification: MBBS (Dhaka), DGO (DU), FCPS (Obs. & Gynae)  Designation: Professor of Gynaecology & Obstetrics and Chief Consultant  Work Place: Labaid Specialized Hospital  Address: House # 6, Road # 4, Dhanmondi, Dhaka-1205, Bangladesh.', '9676356, 8610793-8', 'Major (Rtd.) Dr. Laila Arjumand Banu'),
(491, 8, 16, 'Shahbag, Dhaka, Bangladesh. Chamber: Farida Clinic, 165/A, Shantinagar, Dhaka, Bangladesh', 'Qualification: MBBS, FRCS, FRCOG, FRCP, FCPS (Ban), FCPS (Pak)  Designation: Professor and Senior Consultant, Department of Obstetrics and Gynecology  Work Place: BIRDEM', 'Dr. T A Chowdhury'),
(492, 8, 16, 'Shahbag, Dhaka, Bangladesh', 'Qualification: MBBS, MRCOG (London)  Designation: Senior Consultant, Dept. of Obstetrics & Gynaecology  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Ashrafun Nessa'),
(493, 8, 16, 'Central Hospital, Dhanmondi, Dhaka, Bangladesh.', 'Qualification: MBBS, FCPS (Gynae & Obs)  Designation: Senior Consultant, Dept. of Obstetrics & Gynaecology  Work Place: Dhaka Medical College & Hospital', 'Dr. Farhana Dewan'),
(494, 8, 15, 'Dhanmondi, Dhaka, Bangladesh', 'Qualification: MBBS, FRCOG (London)  Designation: Senior Consultant, Obstetrics & Gynaecology  Work Place: Popular Medical College & Hospital', 'Dr. Hafizur Rahman'),
(495, 8, 16, 'Nirupam Hospital, H-69, Rd-11/A, Dhanmondi, Dhaka, Bangladesh', 'Qualification: MBBS, FCPS (Gynae & Obs)  Designation: Professor and Head of Gynaecology & Obstetrics  Work Place: Institute of Child and Mother Health (ICMH)', 'Dr. Kohinoor Begum'),
(496, 8, 16, 'Dhanmondi, Dhaka, Bangladesh', 'Qualification: MBBS, FCPS (Gynae & Obs)  Designation: Professor of Obstetrics & Gynaecology and Accademic Coordinator  Work Place: Central Hospital Ltd.', 'Dr. Maliha Rashid'),
(497, 8, 16, 'Qualification: MBBS, FCPS, MS, Trained in Advanced Laparoscopic Surgery (India)  Designation: Coordinator & Senior Consultant, Obstetrics & Gynaecology', 'Apollo Hospital, Dhaka.', 'Dr. Monowara Begum'),
(498, 8, 16, 'Qualification: MBBS, FCPS (Gynae & Obs)  Designation: Professor and Head of Gynaecology & Obstetrics  Work Place: Bangladesh Medical College Hospital', 'Dhanmondi, Dhaka, Bangladesh', 'Dr. Neke Akhter'),
(499, 8, 16, 'Dhaka, Bangladesh', 'Qualification: MBBS. FCPS  Designation: Senior Consultant  Work Place: United Hospital Ltd.', 'Dr. Nusrat Zaman'),
(500, 8, 16, ' Dhaka, Bangladesh', 'Qualification: MBBS, FCPS  Designation: Professor of Gynaecology & Obstetrics  Work Place: Holy Family Red Crescent Medical College & Hospital', 'Dr. Rowshan Ara Begum'),
(501, 8, 16, ' Prescription Point, House # 105, Road # 12, Block # E, Banani, Dhaka-1213, Bangladesh.', 'Qualification: MBBS, (Dhaka), FRCOG (London), FCPS, Ex. Professor of Gynae. & Obs., BSMMU  Designation: National Professor and Head of Gynaecology & Obstetrics  Work Place: Bangladesh Medical College Hospital', 'Dr. Shahla Khatun'),
(502, 8, 17, 'Shahbag, Dhaka', 'Qualification: MBBS, FRCS  Designation: Professor of Surgery & Head  Work Place: BIRDEM', 'Dr. Abu Zafar'),
(503, 8, 17, 'Dhaka, Bangladesh', 'Qualification: MBBS, MSc (Canada), FCPS (Surgery), FRCS (Glasgow)  Designation: Professor of Surgery & Consultant  Work Place: Apollo Hospital, Dhaka.', 'Dr. Anisur Rahman'),
(504, 8, 17, 'Jahanara Clinic Sector-1, Uttara, Dhaka', 'Qualification: FRCS, FCPS, FRCSE  Designation: Professor of Surgery', 'Dr. Golam Rasul'),
(505, 8, 17, 'Dhaka, Bangladesh', 'Qualification: FCPS, FACS (USA)  Designation: Professor & Head of the Dept. Surgery & Chief-Minimally Invasive Surgery  Work Place: BIRDEM', 'Dr. Humayan Kabir Chowdhury'),
(506, 8, 17, 'Labaid Hospital Dhaka, Bangladesh', 'Qualification: MBBS, FCPS, Dip MEd (UK), FRCS (Glasgow)  Designation: Ex. Professor & Head of the Dept  Work Place: Sir Salimullah Medical College and Mitford Hospital', 'Dr. Md. Khademul Islam'),
(507, 8, 17, 'Qualification: MBBS, FRCS  Designation: Associate Professor of surgery  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)  Address: Central Hospital, House-2, Road-5, Green Road, Dhanmondi,Dhaka', 'Mob: 01713001346', 'Dr. Mustafizur Rahman'),
(508, 8, 17, 'Uttara Adhunik Medical College Uttara, Dhaka', 'Qualification: MBBS, FCPS, WHO Fellow  Designation: Professor of Surgery', 'Dr. Omar Ali'),
(509, 8, 17, 'Qualification: MBBS, FCPS, FRCS  Designation: Consultant - Plastic Surgery  Address: Ibn Sina Consultation Center, House-58, Road - 2/A Dhanmondi , Dhaka', ' +88028618262', 'Dr. Rayhana Awwal'),
(510, 8, 17, '18/F, Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath, Dhaka - 1205, Bangladesh', 'Qualification: FCPS (Surgery), FRCS (G)  Designation: Consultant  Work Place: Square Hospital Ltd.', 'Dr. Ruhul Hassan Joarder'),
(511, 8, 17, 'Panthapath, Dhaka, Bangladesh', 'Qualification: FRCS, FACS, DIP, MIS (FR)  Designation: Professor of Surgery & Medical Director  Work Place: Square Hospital Ltd.', 'Dr. Sanoar Hossain'),
(512, 8, 17, 'Dhaka, Bangladesh', 'Qualification: MBBS, FCPS (Surgery)  Designation: Professor of Surgery  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Syed Serajul Karim'),
(513, 8, 17, ' Dhaka, Bangladesh', 'Qualification: MBBS, FCPS (Surgery)  Designation: Associate Professor  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Towhidul Alam'),
(514, 8, 17, ' Popular Diagnostic Center Dhanmondi, Dhaka, Bangladesh', 'Qualification: MBBS, FCPS, FRCS (Glasgow), MS (Surgery), Fellow Colo-rectal Surgery (NUH, Singapore)  Designation: Professor of Surgery  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Zahidul Haq'),
(515, 8, 17, 'Japan Bangladesh Friendship Hospital,H.55, R. 3-A, Satmosjod Road (Zigatola Bus Stand), Dhanmondi', 'Qualification: MBBS (DMC), Ph.D ( Tokyo Univ), FACS ( USA )  Designation: Laproscopic Surgeon  Work Place: Japan Bangladesh Friendship Hospital', 'Professor Sardar A. Nayeem'),
(516, 8, 18, 'Qualification: MBBS, MRCP, FRCP (UK)  Designation: Professor of Medicine  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)  Address: Central Physiotherapy Centre, 18, Green Road, Dhaka.', '8619324', 'Dr. A B M Abdullha'),
(517, 8, 18, 'Dhaka, Bangladesh', 'Qualification: MBBS (DMC) Dip in Cardiology (Vienna) Fellow in Cardiology (Vienna), FMGEMS (USA) Dip in Tiberculosis and Chest Diseases (UK) MRCP (IRE), MRCP (UK)', 'Dr. Azizul Hasan'),
(518, 8, 18, 'Qualification: MBBS (Dhaka), FCPS (Medicine)  Designation: Professor of Medicine  Work Place: Bangladesh Medical College Hospital  Address: Medinova, H-71/A, Rd-5/A, Dhanmondi R/A, Dhaka, Bangladesh', '8620353-6', 'Dr. Fazlul Kadir'),
(519, 8, 18, 'Qualification: MBBS, FCPS (Medicine), MD (Medicine), MACP (USA)  Designation: Professor of Medicine  Work Place: Dhaka Medical College & Hospital  Address: Specialist Doctor''s Center, House # 35, Road # 2, Dhanmondi R/A, Dhaka-1205.', '02-8628691', 'Dr. Khan Abul Kalam Azad'),
(520, 8, 18, 'Qualification: MBBS, MRCP (UK), FRCP (Glasgow)  Designation: Professor of Medicine  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)  Address: Shamorita Hospital, Panthapath, Green Road, Dhaka.', '9131901', 'Dr. M. N. Alam'),
(521, 8, 18, 'Qualification: MBBS, FCPS, MRCP (UK)  Designation: Professor & Chairman, Dept. of Medicine  Work Place: Dhaka Medical College & Hospital  Address: Modern Diagnostic Centre Ltd, H-14, Rd-7, Dhanmondi, Dhaka, Bangladesh', '8613883', 'Dr. Md. Azizul Kahhar'),
(522, 8, 18, 'Dhaka, Bangladesh', 'Qualification: MBBS (DMC) MD (USA) Board Certified in International Medicine (USA) Board Certified in Pulmonary Medicine (USA)  Designation: Assistant Professor of Medicine  Work Place: Bangladesh Medical College Hospital', 'Dr. Md. Tarek Alam'),
(523, 8, 18, 'Qualification: MBBS (Dhaka), FCPS (Medicine)  Designation: Professor of Medicine  Work Place: Bangladesh Medical College Hospital', 'Dhaka, Bangladesh', 'Dr. Ridwanur Rahman'),
(524, 8, 18, 'Qualification: MBBS, FRCP, FCPS, MD  Designation: Professor of Medicine  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)  Address: Motijhil Nursing Home, 30/A, Purana Paltan Line, Naya Paltan, Dhaka', '9337685', 'Dr. Syed Atiqul Haq'),
(525, 8, 18, 'Qualification: MBBS, MCPS, FCPS (Medicine)  Designation: Professor of Medicine  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)  Address: 218, New Elephant Road, Dhaka', '9668024', 'Dr. Taimur A K Mahmud'),
(526, 8, 19, 'Dhaka, Bangladesh', 'Qualification: MBBS, DCH, MRCP (UK)  Designation: Professor of Paediatrics  Work Place: Dhaka Shishu (Children) Hospital', 'Dr. A. K. Azad Chowdhury'),
(527, 8, 19, ' Shahbag, Dhaka', 'Qualification: MBBS, FCPS, FRCP (Edin), PhD (UK)  Designation: Professor of Paediatrics  Work Place: Bangabandhu Sheikh Mujib Medical University (PG Hospital)', 'Dr. Chowdhury Ali Kawser'),
(528, 8, 19, ' Baipyl, Savar, Dhaka 1341', 'Qualification: MBBS, DIPNUTR (Lond), DCH (Glasg), FRCP (Edin), Ph.D (Edin), FCPS (BD)  Designation: Professor of Paediatrics and Ex-Director  Work Place: Centre for Woman and Child Health (CWCH)', 'Dr. M Q K Talukder'),
(529, 8, 19, 'Green Road, Dhaka, Bangladesh', 'Qualification: MBBS, DCH, FCPS, FRCP  Designation: Professor of Paediatrics  Work Place: Central Hospital Ltd.', 'Dr. M R Khan'),
(530, 8, 19, 'Plot: 81, Block: E, Bashundhara R/A, Dhaka-1229, Bangladesh.', 'Qualification: MBBS, FCPS  Designation: Coordinator & Senior Consultant (Paediatrics & Neonatology)  Work Place: Apollo Hospital, Dhaka.', 'Dr. M. Quamrul Hassan'),
(531, 8, 19, 'Plot # 15, Road # 71, Gulshan, Dhaka-1212, Bangladesh', 'Qualification: MBBS, FRCPCH(UK), FRCP (Lon), FRCP (Edin), FRCP (Glas), MRCP (UK), DCH (Glas), DCH (Dublin)  Designation: Professor of Paediatrics  Work Place: United Hospital Ltd.', 'Dr. Md. Salim Shakur'),
(532, 8, 19, ' Sher-E-Banglanagar, Dhaka, Bangladesh', 'Qualification: MBBS, FCPS, FRCP  Designation: Professor of Paediatrics  Work Place: Dhaka Shishu (Children) Hospital', 'Dr. Mohammad Hanif'),
(533, 8, 7, '245, Tejgaon I/A, Dhaka, Bangladesh', '+880-2-9885694', 'ACI Diagnostic & Medical Services'),
(534, 8, 7, ' 2/3, Block-A, Mirpur Road, Dhaka - 1207, Bangladesh', '+880-2-8122036', 'Al-Manar Medical Services (Pvt.) Ltd.'),
(535, 8, 7, '351, West Rampur, DIT Road, Dhaka - 1219, Bangladesh', '+880-2-8319882', 'Al-Shefa Diagnostic & Medical Centre'),
(536, 8, 4, '214, Outer Circular Road, Moghbazar, Dhaka - 1217, Bangladesh', '+880-2-9338911', 'Alex Diagnostic Centre'),
(537, 8, 7, '214, Outer Circular Road, Moghbazar, Dhaka - 1217, Bangladesh', '880-2-9338911', 'Alex Diagnostic Centre'),
(538, 8, 7, 'Dorgah Mohalla, Sylhet - 3100, Bangladesh', ' +880-821-722592', 'Alfa Diagnostic & Medical Services'),
(539, 8, 7, '159, Shantinagar, Dhaka, Bangladesh', ' +880-2-8321280', 'Annesha Diagnostic Complex'),
(540, 8, 7, '85, Wireless More Mogh Bazar, Dhaka - 1217, Bangladesh', '+880-2-8316851', 'Auto Path'),
(541, 8, 7, '12/12, O. R. Nizam Road. Chittagong, Bangladesh', ' 652860, 652963, 652533, 2550642-5', 'Chevron Clinical Laboratory (PTE) Ltd.'),
(542, 8, 7, '31/3, Colombia Super Market, Mohakhali, Dhaka - 1212, Bangladesh', '+880-2-8821790', 'Clin Path'),
(543, 8, 7, ' Comfort Tower, House # 167/B, Green Road, Dhanmondi, Dhaka - 1205, Bangladesh', '+880-2-8124990', 'Comfort Diagnostic Centre & Comfort Nursing Home (Dhanmondi)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chemotherapy_regimen_main`
--

CREATE TABLE IF NOT EXISTS `tbl_chemotherapy_regimen_main` (
  `chemotherapy_main_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(256) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `custom_chemotherapy_regmine_id` int(11) NOT NULL,
  `chemotherapy_regimen_value` varchar(200) NOT NULL,
  `file_upload` varchar(256) NOT NULL,
  `cycle` text NOT NULL,
  `next_cycle` text NOT NULL,
  PRIMARY KEY (`chemotherapy_main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chemotherapy_regimen_value`
--

CREATE TABLE IF NOT EXISTS `tbl_chemotherapy_regimen_value` (
  `chemotherapy_regimen_value_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `custom_chemotherapy_regmine_id` int(11) NOT NULL,
  `chemotherapy_regimen_value` varchar(256) NOT NULL,
  PRIMARY KEY (`chemotherapy_regimen_value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_chemotherapy_regimen_value`
--

INSERT INTO `tbl_chemotherapy_regimen_value` (`chemotherapy_regimen_value_id`, `user_id`, `custom_chemotherapy_regmine_id`, `chemotherapy_regimen_value`) VALUES
(1, 8, 1, 'Che-01'),
(2, 8, 1, 'Che-01_data'),
(5, 8, 3, 'Che-02'),
(6, 8, 3, 'Regimen02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chief_complain_group_name`
--

CREATE TABLE IF NOT EXISTS `tbl_chief_complain_group_name` (
  `cc_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `complain_group_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cc_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='cc= chief complain' AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_chief_complain_group_name`
--

INSERT INTO `tbl_chief_complain_group_name` (`cc_group_id`, `user_id`, `complain_group_name`) VALUES
(2, 8, 'Abdominal and pelvic pain'),
(3, 1, 'Abnormal uterine bleeding'),
(4, 1, 'Anxiety, depression'),
(5, 1, 'Back pain'),
(6, 1, 'Chest pain'),
(7, 1, 'Cough'),
(8, 1, 'Crying infant (Inconsolable)'),
(9, 8, 'Delirium'),
(10, 1, 'Dementia, memory loss'),
(12, 1, 'Dyspnea tachypnea'),
(15, 1, 'Facial flushing'),
(19, 1, 'Abdominal and pelvic pain'),
(20, 8, 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chief_complain_name`
--

CREATE TABLE IF NOT EXISTS `tbl_chief_complain_name` (
  `cc_name_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cc_group_id` int(11) NOT NULL,
  `complain_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cc_name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Dumping data for table `tbl_chief_complain_name`
--

INSERT INTO `tbl_chief_complain_name` (`cc_name_id`, `user_id`, `cc_group_id`, `complain_name`) VALUES
(1, 8, 15, 'Diverticulitis'),
(2, 1, 2, 'Pancreatitis'),
(3, 1, 2, 'Gallbladder disease'),
(6, 8, 2, 'Appendicitis one'),
(9, 1, 2, 'Kidney stone'),
(10, 1, 2, 'Pelvic inflammatory disease'),
(12, 1, 2, 'Hepatitis, hepatic abscess'),
(15, 1, 2, 'Diabetic ketoacidosis'),
(17, 1, 2, 'Mesenteric ischemia, infarction'),
(18, 1, 2, 'Hernia'),
(19, 1, 2, 'Perforated viscus, peritonitis'),
(20, 1, 2, 'Sickle cell crisis'),
(21, 1, 2, 'Lead poisoning'),
(22, 1, 2, 'Leukemia'),
(23, 1, 2, 'Meckel''s diverticulitis'),
(24, 1, 0, 'Ectopic pregnancy'),
(26, 1, 0, 'Endometrial cancer , hyperplasia'),
(27, 1, 3, 'Polyps'),
(28, 1, 3, 'Endometritis'),
(29, 1, 3, 'Hyperprolactinemia'),
(32, 1, 4, 'Hypoglycemia'),
(33, 1, 4, 'Depression'),
(34, 1, 4, 'Hypoglycemia Medications'),
(35, 1, 4, 'Thyroid disorder'),
(36, 1, 4, 'Pulmonary embolus'),
(37, 1, 4, 'Hypoxemia'),
(38, 1, 4, 'Pheochromocytoma'),
(40, 1, 5, 'Pyelonephritis, kidney stone'),
(41, 1, 5, 'Pancreatitis , pancreatic carcinoma'),
(44, 1, 5, 'Polymyalgia rheumatica Prostatitis'),
(46, 1, 5, 'Metastatic tumor'),
(47, 8, 0, 'Abdominal tumor.'),
(48, 1, 5, 'Penetrating ulcer'),
(50, 1, 6, 'Psychiatric'),
(52, 1, 6, 'Pneumonia , bronchitis'),
(53, 1, 6, 'Pneumothorax'),
(55, 1, 6, 'Aortic stenosis'),
(56, 1, 6, 'Dissecting aortic aneurysm'),
(58, 1, 6, 'Esophageal rupture'),
(59, 1, 6, 'Spinal cord compression'),
(62, 1, 7, 'Pertussis'),
(63, 1, 7, 'Psychogenic'),
(66, 1, 7, 'Epiglottitis'),
(68, 1, 7, 'Sarcoidosis'),
(69, 1, 7, 'Tuberculosis'),
(70, 1, 7, 'Cystic fibrosis'),
(71, 1, 7, 'Laryngeal tumor'),
(72, 1, 7, 'Mitral stenosis'),
(73, 1, 7, 'Foreign body'),
(74, 1, 7, 'Sepsis'),
(77, 1, 7, 'Pneumonia'),
(78, 1, 7, 'Asthma'),
(79, 1, 7, 'Heart disease'),
(80, 1, 8, 'Idiopathic'),
(81, 1, 8, 'Colic'),
(82, 1, 8, 'Infections '),
(83, 1, 8, 'Fracture'),
(84, 1, 8, 'Corneal abrasion'),
(85, 1, 8, 'Constipation'),
(86, 1, 8, 'Immunization reaction'),
(87, 1, 8, 'Hair tourniquet syndrome'),
(88, 1, 9, 'Drugs'),
(89, 1, 9, 'Psychiatric disorders'),
(92, 1, 9, 'Glucose disturbances'),
(93, 1, 9, 'Serotonin syndrome'),
(94, 1, 9, 'Trauma'),
(96, 1, 9, 'Myocardial infarction'),
(97, 1, 9, 'Carbon monoxide'),
(98, 1, 9, 'Sepsis'),
(101, 1, 9, 'Hypoxia'),
(102, 1, 9, 'Hy pertensive encephalopathy'),
(103, 1, 9, 'CNS infections'),
(104, 1, 9, 'Brain mass'),
(105, 1, 9, 'Hypothermia'),
(106, 1, 9, 'Hyperthermia'),
(107, 1, 9, 'B12 deficiency'),
(108, 1, 9, 'Folate deficiency'),
(109, 1, 9, 'Thiamine deficiency'),
(110, 1, 9, 'Liver failure'),
(112, 1, 9, 'Renal failure'),
(113, 1, 9, 'Adrenal disease'),
(114, 1, 9, 'Porphyria'),
(115, 1, 9, 'Nonconvulsive sta tus epilepticus'),
(117, 1, 9, 'Vitamin B12 deficiency'),
(118, 1, 9, 'Hypothyro idism'),
(119, 1, 10, 'Delirium'),
(122, 1, 0, 'Hypogly cemia'),
(123, 1, 10, 'Head injury'),
(124, 1, 10, 'Structural brain disease'),
(125, 1, 11, 'Stroke'),
(127, 1, 12, 'Increased intracranial pressure'),
(128, 1, 12, 'Foreign body aspiration'),
(132, 1, 12, 'Valvular heart disease'),
(133, 1, 12, 'Pleural effusion'),
(134, 1, 12, 'Tumor'),
(135, 8, 2, 'Anemia'),
(136, 1, 12, 'Shock'),
(137, 1, 12, 'Cardiomyopathy'),
(141, 1, 13, 'TMJ syndrome'),
(142, 1, 13, 'External otitis'),
(143, 1, 13, 'Cerumen'),
(144, 1, 13, 'Viral myringitis'),
(145, 1, 13, 'Dental causes'),
(146, 1, 13, 'Pharyngitis'),
(147, 1, 13, 'Barotrauma'),
(148, 1, 13, 'Foreign body'),
(149, 1, 13, 'Idiopathic'),
(150, 1, 13, 'Cervical adenopathy'),
(151, 1, 13, 'Cellulitis, chondritis, perichondritis'),
(152, 8, 2, 'Acoustic neuroma'),
(154, 1, 13, 'Nasopharyngeal tumor'),
(155, 1, 13, 'Temporal arteritis'),
(156, 1, 13, 'Cholesteotoma'),
(157, 1, 13, 'Carotidynia'),
(158, 1, 13, 'Sinusitis'),
(159, 1, 13, 'Trauma'),
(160, 1, 13, 'Mastoiditis'),
(161, 1, 13, 'Gastroesophageal reflux'),
(162, 1, 13, 'Malignant external otitis'),
(163, 1, 13, 'Coronary disease'),
(164, 1, 13, 'Thoracic aneurysm'),
(165, 1, 13, 'Psychogenic (depression, anxiety)'),
(166, 1, 13, 'Thyroid tumor'),
(167, 1, 13, 'Salivary gland disorder'),
(169, 1, 13, 'Eagle''s syndrome'),
(171, 1, 14, 'Deep vein thrombosis'),
(172, 1, 14, 'Heart failure'),
(173, 1, 14, 'Pelvic Tumor'),
(174, 1, 14, 'Idio pathic'),
(175, 1, 14, 'Hypoalbuminemia'),
(176, 1, 14, 'Cirrhosis'),
(177, 1, 14, 'Lymphedema'),
(178, 1, 14, 'Renal failure, nephrotic syndrome'),
(179, 1, 14, 'Myxedema'),
(180, 1, 15, 'Emotional'),
(181, 1, 15, 'Menopause'),
(182, 8, 0, 'Alcohol'),
(183, 1, 15, 'Rosacea'),
(185, 1, 15, 'Heat exposure'),
(186, 1, 15, 'Exercise'),
(187, 1, 15, 'Fever'),
(189, 1, 15, 'Carcinoid'),
(190, 1, 15, 'Cluster headache'),
(191, 1, 15, 'Serotonin syndrome'),
(192, 8, 0, 'More fever days'),
(193, 8, 0, 'Eye Problems'),
(194, 8, 0, 'Nail Problem'),
(195, 8, 0, 'New complainht'),
(196, 8, 0, 'new'),
(198, 8, 0, 'new complaint-1'),
(199, 8, 20, 'test'),
(200, 8, 10, 'nishi'),
(201, 8, 10, 'sila'),
(202, 8, 10, 'mila'),
(203, 8, 0, 'iam new'),
(204, 8, 0, 'o sorry'),
(205, 8, 0, 'Write Data'),
(206, 8, 0, 'Fever1'),
(207, 8, 0, 'dfg'),
(208, 8, 0, 'dd'),
(209, 8, 0, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comorbidity`
--

CREATE TABLE IF NOT EXISTS `tbl_comorbidity` (
  `comorbidity_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comorbidity_name` varchar(200) NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`comorbidity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_comorbidity`
--

INSERT INTO `tbl_comorbidity` (`comorbidity_id`, `user_id`, `comorbidity_name`, `current_date`) VALUES
(1, 8, 'Comorbidity_one', '2014-04-21'),
(2, 8, 'Comorbidity_two', '2014-04-21'),
(3, 8, 'Comorbidity_three', '2014-04-21'),
(4, 8, 'Comorbidity_four', '2014-04-21'),
(5, 8, 'Comorbidity_five', '2014-04-21'),
(8, 8, 'write data', '2014-04-21'),
(10, 8, 'Fever', '2014-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comorbidity_info`
--

CREATE TABLE IF NOT EXISTS `tbl_comorbidity_info` (
  `comoribdity_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `comorbidity_id` int(11) NOT NULL,
  `comorbidity_duration` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `comorbidity_timing` varchar(100) NOT NULL,
  `extra_comorbidity` mediumtext NOT NULL,
  `current_date` date NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`comoribdity_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_comorbidity_info`
--

INSERT INTO `tbl_comorbidity_info` (`comoribdity_info_id`, `manual_pid`, `user_id`, `patient_id`, `comorbidity_id`, `comorbidity_duration`, `visiting_no`, `comorbidity_timing`, `extra_comorbidity`, `current_date`, `display`) VALUES
(1, '010001', 8, 1, 1, '1', 1, '', '', '2014-10-24', 'Yes'),
(2, '010001', 8, 1, 3, '4', 1, 'Day', '', '2014-10-24', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint_wise_generic_brand_and_doctor_help`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint_wise_generic_brand_and_doctor_help` (
  `dr_help_drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `drug_help_name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`dr_help_drug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_configure_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_configure_patient` (
  `configure_id` int(11) NOT NULL AUTO_INCREMENT,
  `current_date` date NOT NULL,
  `patient_limit` int(11) NOT NULL,
  `notice` text NOT NULL,
  PRIMARY KEY (`configure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_configure_patient`
--

INSERT INTO `tbl_configure_patient` (`configure_id`, `current_date`, `patient_limit`, `notice`) VALUES
(1, '2014-10-23', 20, ''),
(2, '2014-10-15', 50, 'Yes i am present<br>'),
(3, '2014-10-15', 500, 'Yes I am present<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customize_report`
--

CREATE TABLE IF NOT EXISTS `tbl_customize_report` (
  `customize_report` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `customize_rpt_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`customize_rpt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cytogenetic_report`
--

CREATE TABLE IF NOT EXISTS `tbl_cytogenetic_report` (
  `cytogenetic_rpt_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(256) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` varchar(100) NOT NULL,
  `cytogenetic_test_name_id` int(11) NOT NULL,
  `result` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`cytogenetic_rpt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cytogenetic_test_name`
--

CREATE TABLE IF NOT EXISTS `tbl_cytogenetic_test_name` (
  `cytogenetic_test_name_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cytogenetic_test_name` varchar(256) NOT NULL,
  PRIMARY KEY (`cytogenetic_test_name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_cytogenetic_test_name`
--

INSERT INTO `tbl_cytogenetic_test_name` (`cytogenetic_test_name_id`, `user_id`, `cytogenetic_test_name`) VALUES
(1, 8, 'FLT3'),
(2, 8, 'PML'),
(3, 8, 'PML/RARA'),
(4, 8, 't(8,21)'),
(5, 8, 't(9,22)'),
(6, 8, 'i(16)'),
(7, 8, 't(16,16)'),
(8, 8, 'NPM'),
(9, 8, '(8,14)'),
(10, 8, 't(12,12)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cytopathology_report`
--

CREATE TABLE IF NOT EXISTS `tbl_cytopathology_report` (
  `cytopathology_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(265) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `sex` varchar(100) NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`cytopathology_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnosis` (
  `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `diagnosis_category_id` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `current_date` date NOT NULL,
  `manual_pid` varchar(100) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`diagnosis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_diagnosis`
--

INSERT INTO `tbl_diagnosis` (`diagnosis_id`, `user_id`, `patient_id`, `visiting_no`, `diagnosis_category_id`, `diagnosis`, `current_date`, `manual_pid`, `display`) VALUES
(1, 8, 1, 1, 2, '0', '2014-10-24', '010001', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_seal`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor_seal` (
  `seal_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `for_bangla_seal` text NOT NULL,
  `for_english_seal` text NOT NULL,
  `prescription_footer` text NOT NULL,
  PRIMARY KEY (`seal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_doctor_seal`
--

INSERT INTO `tbl_doctor_seal` (`seal_id`, `user_id`, `for_bangla_seal`, `for_english_seal`, `prescription_footer`) VALUES
(1, 8, '<h3>ডাঃ মাহবুবর রহমান</h3>পিএ্চডি, (জাপান)ডবিল্ও ফেলো (সা্টোলজি)<br>টাটা, Bন্ডিয়াসিনিয়র কনসালটেন্ট (হিসটোপ্যালজী)<br> ডেলটা হাসপাতাল , ঢাকা ।', '<h3>DR. MAHABUBUR RAHMAN</h3>MBBS; PhD(Japan)WHO Fellow (Cytology)<br>Tata.IndiaSenior Consultant (Histopathology)<br>Delta Hospital Ltd. Dhaka.', '15/20,Mirpur-1, Dhaka, Bangladesh. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doses`
--

CREATE TABLE IF NOT EXISTS `tbl_doses` (
  `dose_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dose_type` varchar(200) NOT NULL,
  PRIMARY KEY (`dose_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_doses`
--

INSERT INTO `tbl_doses` (`dose_id`, `user_id`, `dose_type`) VALUES
(10, 8, 'Syrp.    '),
(11, 8, 'Sub. '),
(13, 8, 'Pow. '),
(14, 1, 'Tab'),
(15, 1, 'Inj.'),
(16, 8, 'None'),
(17, 8, 'Cap.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dose_schedule`
--

CREATE TABLE IF NOT EXISTS `tbl_dose_schedule` (
  `dose_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dose_schedule` varchar(200) NOT NULL,
  PRIMARY KEY (`dose_schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_dose_schedule`
--

INSERT INTO `tbl_dose_schedule` (`dose_schedule_id`, `user_id`, `dose_schedule`) VALUES
(5, 8, '1+1+1.'),
(6, 1, '1+0+1'),
(7, 1, '0+0+5'),
(8, 1, '1+1+0'),
(9, 1, '6+6+6'),
(10, 8, '১+১+১'),
(11, 8, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dose_suggestion`
--

CREATE TABLE IF NOT EXISTS `tbl_dose_suggestion` (
  `doseSuggestion_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dose_suggestion` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`doseSuggestion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_dose_suggestion`
--

INSERT INTO `tbl_dose_suggestion` (`doseSuggestion_id`, `user_id`, `dose_suggestion`) VALUES
(4, 1, 'After 30 min..'),
(5, 1, 'After 20 min.'),
(6, 1, 'After10 min.'),
(7, 1, 'After40 min.'),
(8, 1, 'After 50 min.'),
(9, 1, 'Before 10 min.'),
(10, 1, 'Before 20 min.'),
(11, 1, 'Before 30 min.'),
(12, 1, 'Before 40 min.'),
(13, 1, 'Before 50 min.'),
(14, 8, '১+১+০ প্রতিদিন রাতে খাবার পড়'),
(15, 8, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug`
--

CREATE TABLE IF NOT EXISTS `tbl_drug` (
  `drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dose_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `medicine_generic_id` varchar(200) NOT NULL,
  `dose_schedule_id` int(11) NOT NULL,
  `doseSuggestion_id` int(11) NOT NULL,
  `pharma_name` varchar(300) NOT NULL,
  `pharma_cell_number` varchar(50) NOT NULL,
  `pharma_email_number` varchar(200) NOT NULL,
  `mro_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `drug_advice_info` text NOT NULL,
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_drug`
--

INSERT INTO `tbl_drug` (`drug_id`, `user_id`, `dose_id`, `current_date`, `brand_name`, `medicine_generic_id`, `dose_schedule_id`, `doseSuggestion_id`, `pharma_name`, `pharma_cell_number`, `pharma_email_number`, `mro_name`, `address`, `drug_advice_info`) VALUES
(1, 8, 17, '2014-10-21', 'Enso', '20', 8, 12, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'This page contains information about the side effects of amphetamine / dextroamphetamine. Some of the dosage forms included on this document may not apply to the brand name Adderall.'),
(2, 8, 14, '2014-10-21', 'Lanozole', '111', 5, 4, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Lansoprazole 15mg & 30mg/capsule...'),
(3, 8, 10, '2014-10-21', 'Lansec', '140', 5, 4, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'A side effect is usually regarded as an undesirable secondary.'),
(4, 8, 17, '2014-10-21', 'Lanso', '22', 8, 9, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Side effects can occur when commencing, decreasing/increasing dosages'),
(5, 8, 14, '2014-10-21', 'Comipen', '17', 7, 7, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'A side effect is usually regarded as an undesirable secondary effect which occurs in addition to the desired therapeutic effect of a drug or medication. Side effects may vary for each individual depending on the person''s disease state, age, weight, gender, ethnicity and general health.'),
(6, 8, 14, '2014-10-21', 'Fermid', '17', 7, 7, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Lifestyle or dietary changes may also help to minimize side effects.'),
(7, 8, 14, '2014-10-21', 'Fertil ', '17', 7, 7, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Lifestyle or dietary changes effects.'),
(8, 8, 14, '2014-10-21', 'Reomen ', '17', 7, 7, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Side effects may also lead to non-compliance'),
(9, 8, 14, '2014-10-21', 'Napa', '19', 9, 9, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'for Pain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_echo`
--

CREATE TABLE IF NOT EXISTS `tbl_echo` (
  `echo_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`echo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family_history`
--

CREATE TABLE IF NOT EXISTS `tbl_family_history` (
  `family_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `nothing_contributory` text NOT NULL,
  `familyhistory_value` varchar(120) NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`family_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_generics`
--

CREATE TABLE IF NOT EXISTS `tbl_generics` (
  `medicine_generic_id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_name_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `generic_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`medicine_generic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `tbl_generics`
--

INSERT INTO `tbl_generics` (`medicine_generic_id`, `cc_name_id`, `user_id`, `generic_name`) VALUES
(2, 0, 1, 'Aciclovir'),
(3, 0, 1, ' Adefovir Dipivoxil '),
(4, 0, 1, 'Albendazole'),
(5, 0, 1, 'Alkalizers, Urinary Acidifiers, Buffers and Aminonitrogen'),
(6, 0, 1, 'Alpha-tocopherol acetate & Sodium Selenite'),
(7, 0, 1, 'Ambroxol'),
(8, 0, 1, 'Amitryptyline HCl'),
(9, 0, 1, ' Amlodipine'),
(10, 0, 1, 'Amlodipine + Benazepril HCl '),
(11, 0, 1, ' Amoxicillin + Clavulanic acid'),
(12, 0, 1, 'Amoxicillin Trihydrate'),
(13, 0, 1, 'Andrographis paniculata'),
(14, 0, 1, 'Artemether + Lumefantrine'),
(15, 0, 1, 'Atenolol + Chlorthalidone'),
(16, 0, 1, 'Aushokarist'),
(17, 0, 1, 'Aztreonam'),
(19, 0, 1, 'Adapalene'),
(20, 0, 1, 'Adhatoda vasica'),
(21, 0, 1, 'Alendronate Sodium'),
(22, 0, 1, 'Allopurinol'),
(23, 0, 1, 'Amikacin Sulfate USP'),
(24, 0, 1, 'Amlaki rashayan'),
(25, 0, 1, 'Amlodipine + Atenolol '),
(26, 0, 1, 'Amlodipine + Olmesartan Medoxomil'),
(27, 0, 1, 'Amoxicillin BP 30%'),
(28, 0, 1, 'Ampicillin Sodium '),
(29, 0, 1, 'Antacid'),
(30, 0, 1, 'Antiallergic'),
(31, 0, 1, 'Aspirin'),
(32, 0, 1, 'Atomoxetine'),
(33, 0, 1, 'Azithromycin'),
(34, 0, 1, 'Virux'),
(35, 0, 1, 'Fona plus'),
(36, 0, 1, 'Almex'),
(37, 0, 1, 'Uriten'),
(38, 0, 1, 'Geston'),
(39, 0, 1, 'Nixalo'),
(40, 0, 1, 'Apsol'),
(41, 0, 1, 'Camlotor'),
(42, 0, 1, 'Camoval'),
(43, 0, 1, 'Entacyd Plus'),
(44, 0, 1, 'Stomaplex-Vet® Powder'),
(45, 0, 1, 'Cardipro'),
(46, 0, 1, 'Anzitor®'),
(47, 0, 1, 'Zimax®'),
(48, 0, 1, 'Flexilax®'),
(49, 0, 1, 'Monera®'),
(50, 0, 1, 'Beclomin®'),
(51, 0, 1, 'Becospray®'),
(52, 0, 1, 'Benzapen®'),
(53, 0, 1, 'Orogel Dental Gel®'),
(54, 0, 1, 'Enerton®'),
(55, 0, 1, 'Rex®'),
(56, 0, 1, 'Merison®'),
(57, 0, 1, 'ProsalicTM Lotion'),
(58, 0, 1, 'Diprobet®'),
(59, 0, 1, 'Oni®'),
(60, 0, 1, 'Betameson-N®'),
(61, 0, 1, 'Eyebil®'),
(62, 0, 1, 'Bisocor®'),
(63, 0, 1, 'Bisocor Plus®'),
(64, 0, 1, 'Locular Eye Drop®'),
(65, 0, 1, 'Laxyl®'),
(66, 0, 1, 'Ocufen 0.09% Eye Drops®'),
(67, 0, 1, 'Mucospel®'),
(68, 0, 1, 'Bromolac®'),
(69, 0, 1, 'Bufocort®'),
(70, 0, 1, 'Anespine®'),
(71, 0, 1, 'Prepona®'),
(72, 0, 1, 'Mirakof®'),
(73, 0, 1, 'Buphos-Vet® Injection'),
(74, 0, 1, 'Butefin®'),
(75, 0, 1, 'Dyvon®'),
(76, 0, 1, 'Dyvon Plus®'),
(77, 0, 1, 'Calcitrol®'),
(78, 0, 1, 'Calbo-D®'),
(79, 0, 1, 'Xcid®'),
(80, 0, 1, 'Calbo 500®'),
(81, 0, 1, 'Calbo Jr.®'),
(82, 0, 1, 'Calbo Forte®'),
(83, 0, 1, 'Calbo-C®'),
(84, 0, 1, 'Calboplex®'),
(85, 0, 1, 'Anleptic®'),
(86, 0, 1, 'Goldazim®'),
(87, 0, 1, 'Carbizol®'),
(88, 0, 1, 'Bravo®'),
(89, 0, 1, 'Durol®'),
(90, 0, 1, 'Durol CR®'),
(91, 0, 1, 'Loracef®'),
(92, 0, 1, 'Maxpime®'),
(93, 0, 1, 'Cef-3®'),
(94, 0, 1, 'Maxcef®'),
(95, 0, 1, 'Force®'),
(96, 0, 1, 'Vanprox®'),
(97, 0, 1, 'Tazid®'),
(98, 0, 1, 'Ceftron®'),
(99, 0, 1, 'Ceftron-Vet® Injection'),
(100, 0, 1, 'Cefotil®'),
(101, 0, 1, 'Ceporin®'),
(102, 0, 1, 'Lebac®'),
(103, 0, 1, 'Alatrol®'),
(104, 0, 1, 'SQ-Mycetin®'),
(105, 0, 1, 'Germisol Hand Rub®'),
(106, 0, 1, 'Pychlorex®'),
(107, 0, 1, 'Cotra-Vet® Powder'),
(108, 0, 1, 'Cilosta®'),
(109, 0, 1, 'Erian®'),
(110, 0, 1, 'Clinface®'),
(111, 0, 1, 'Clobam®'),
(112, 0, 1, 'Dermasol®'),
(113, 0, 1, 'Dermasol-N®'),
(114, 0, 1, 'DermasolTM-S'),
(115, 0, 1, 'Ezex®'),
(116, 0, 1, 'Epitra®'),
(117, 0, 1, 'Anclog®'),
(118, 0, 1, 'Anclog Plus®'),
(119, 0, 1, 'Afun®'),
(120, 0, 1, 'Afun® VT'),
(121, 0, 1, 'Grumen-Vet® Bolus'),
(122, 0, 1, 'Olicod®'),
(123, 0, 1, 'Cyperin®'),
(124, 0, 1, 'aman'),
(136, 0, 1, 'Aciclovir'),
(138, 0, 8, 'আমার'),
(140, 0, 8, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_haematology_report`
--

CREATE TABLE IF NOT EXISTS `tbl_haematology_report` (
  `haematology_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `test_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `reciv_date` date NOT NULL,
  `hb` varchar(50) NOT NULL,
  `esr` varchar(25) NOT NULL,
  `rbc` varchar(25) NOT NULL,
  `platelete` varchar(25) NOT NULL,
  `wbc` varchar(25) NOT NULL,
  `ce` varchar(25) NOT NULL,
  `rc` varchar(25) NOT NULL,
  `neutrophils` varchar(25) NOT NULL,
  `lymphocytes` varchar(25) NOT NULL,
  `eosinophils` varchar(25) NOT NULL,
  `monocytes` varchar(100) NOT NULL,
  `basophil` varchar(25) NOT NULL,
  `parameter_one` varchar(25) NOT NULL,
  `parameter_two` varchar(25) NOT NULL,
  `parameter_three` varchar(25) NOT NULL,
  `parameter_four` varchar(25) NOT NULL,
  `parameter_five` varchar(25) NOT NULL,
  `para_one_rpt` varchar(300) NOT NULL,
  `para_two_rpt` varchar(300) NOT NULL,
  `para_three_rpt` varchar(300) NOT NULL,
  `para_four_rpt` varchar(300) NOT NULL,
  `para_five_rpt` varchar(300) NOT NULL,
  `hct` varchar(25) NOT NULL,
  `mcv` varchar(25) NOT NULL,
  `mch` varchar(25) NOT NULL,
  `mchc` varchar(25) NOT NULL,
  `rdw` varchar(25) NOT NULL,
  `mp` varchar(50) NOT NULL,
  `pbf` varchar(200) NOT NULL,
  `bt_min` varchar(25) NOT NULL,
  `bt_sec` varchar(25) NOT NULL,
  `ct_min` varchar(25) NOT NULL,
  `ct_sec` varchar(25) NOT NULL,
  `current_date` date NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`haematology_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_histopathology_report`
--

CREATE TABLE IF NOT EXISTS `tbl_histopathology_report` (
  `histopathology_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`histopathology_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_immunophenotype_report`
--

CREATE TABLE IF NOT EXISTS `tbl_immunophenotype_report` (
  `immuno_type_report_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `immunphenotype_id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `cell_line` text NOT NULL,
  `description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`immuno_type_report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_immunophenotype_test_name`
--

CREATE TABLE IF NOT EXISTS `tbl_immunophenotype_test_name` (
  `immunphenotype_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `immunophenotype_test_name` varchar(200) NOT NULL,
  PRIMARY KEY (`immunphenotype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_immunophenotype_test_name`
--

INSERT INTO `tbl_immunophenotype_test_name` (`immunphenotype_id`, `user_id`, `immunophenotype_test_name`) VALUES
(1, 8, 'CD1'),
(2, 8, 'CD2'),
(3, 8, 'CD3'),
(6, 8, 'CD4'),
(7, 8, 'CD5'),
(8, 8, 'CD6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_investigation_name`
--

CREATE TABLE IF NOT EXISTS `tbl_investigation_name` (
  `investigation_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`investigation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_investigation_name`
--

INSERT INTO `tbl_investigation_name` (`investigation_id`, `manual_pid`, `patient_id`, `user_id`, `visiting_no`, `test_name`, `current_date`) VALUES
(1, '010001', 1, 8, 1, 'SGPT', '2014-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyotype_report`
--

CREATE TABLE IF NOT EXISTS `tbl_karyotype_report` (
  `karyotype_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(265) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`karyotype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_multiple_report`
--

CREATE TABLE IF NOT EXISTS `tbl_multiple_report` (
  `multiple_report_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(200) NOT NULL,
  `path_test_id` int(11) NOT NULL,
  `result` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `normal_range` varchar(200) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`multiple_report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_others_report`
--

CREATE TABLE IF NOT EXISTS `tbl_others_report` (
  `others_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(100) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `reciv_date` date NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`others_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_path_adivce_test_name`
--

CREATE TABLE IF NOT EXISTS `tbl_path_adivce_test_name` (
  `path_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path_test_group_id` int(11) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `normal_range` text NOT NULL,
  PRIMARY KEY (`path_test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=641 ;

--
-- Dumping data for table `tbl_path_adivce_test_name`
--

INSERT INTO `tbl_path_adivce_test_name` (`path_test_id`, `user_id`, `path_test_group_id`, `test_name`, `unit`, `normal_range`) VALUES
(1, 8, 1, 'CBC', 'N/A', 'N/A'),
(2, 8, 7, 'A E C', 'N/A', 'N/A'),
(3, 8, 1, 'Coomb''s Test - direct / indirect', 'N/A', 'N/A'),
(4, 8, 1, 'Bleeding Time', 'N/A', 'N/A'),
(5, 8, 1, 'Bone Marrow ASP', 'N/A', 'N/A'),
(6, 8, 1, 'Clot Retraction', 'N/A', 'N/A'),
(7, 8, 1, 'Coagulation Time', 'N/A', 'N/A'),
(8, 8, 1, 'DLC', 'N/A', 'N/A'),
(9, 8, 1, 'ESR', 'N/A', 'N/A'),
(10, 8, 1, 'Haemoglobin', 'N/A', 'N/A'),
(11, 8, 1, 'HB Electrophoresis', 'N/A', 'N/A'),
(12, 8, 1, 'MCV', 'N/A', 'N/A'),
(13, 8, 1, 'MCH', 'N/A', 'N/A'),
(14, 8, 1, 'MCHC', 'N/A', 'N/A'),
(15, 8, 1, 'PCV', 'N/A', 'N/A'),
(16, 8, 1, 'Platelet Count', 'N/A', 'N/A'),
(17, 8, 1, 'Prothrombin Time', 'N/A', 'N/A'),
(18, 8, 1, 'RBC count', 'N/A', 'N/A'),
(19, 8, 1, 'Reticulocyte Count', 'N/A', 'N/A'),
(20, 8, 1, 'APTT', 'N/A', 'N/A'),
(21, 8, 1, 'TLC', 'N/A', 'N/A'),
(22, 8, 1, 'Lupus Anticoagulant(LA1,LA2)', 'N/A', 'N/A'),
(23, 8, 1, 'Blood For Sickling', 'N/A', 'N/A'),
(24, 8, 1, 'Osmotic Fragility', 'N/A', 'N/A'),
(25, 8, 1, 'HbA2', 'N/A', 'N/A'),
(26, 8, 1, 'RDW', 'N/A', 'N/A'),
(27, 8, 0, '17-OH progesterone', 'N/A', 'N/A'),
(28, 8, 0, '18-Hydroxycortisol', 'N/As', 'N/As'),
(30, 8, 7, 'Acyl Carnitines (Blood spot)', 'N/A', 'N/A'),
(31, 8, 10, 'Acyl Carnitines (Plasma)', 'N/A', 'N/A'),
(32, 8, 9, 'Adrenocorticotrophic hormone (ACTH)', 'N/A', 'N/A'),
(33, 8, 2, 'Alanine transaminase (ALT)', 'N/A', 'N/A'),
(34, 8, 2, 'Albumin', 'N/A', 'N/A'),
(35, 8, 2, 'Albumin (urine)/Albumin/Creatinine Ratio (ACR)', 'N/A', 'N/A'),
(36, 8, 2, 'Alcohol', 'N/A', 'N/A'),
(37, 8, 2, 'Aldosterone', 'N/A', 'N/A'),
(38, 8, 2, 'Alkaline phosphatase', 'N/A', 'N/A'),
(39, 8, 2, 'Alkaline phosphatase (isoenzymes)', 'N/A', 'N/A'),
(40, 8, 2, 'Alpha 1 antitrypsin phenotyping', 'N/A', 'N/A'),
(41, 8, 2, 'Alpha-1-antitrypsin genotyping (S & Z forms only)', 'N/A', 'N/A'),
(42, 8, 2, 'Alphafetoprotein (AFP)', 'N/A', 'N/A'),
(43, 8, 2, 'Alphafetoprotein (AFP) - adult', 'N/A', 'N/A'),
(44, 8, 2, 'Alpha-subunits', 'N/A', 'N/A'),
(45, 8, 2, 'Aluminium', 'N/A', 'N/A'),
(46, 8, 2, 'Amino acids', 'N/A', 'N/A'),
(47, 8, 2, 'Amiodarone', 'N/A', 'N/A'),
(48, 8, 0, 'Amisulpride', 'N/A', 'N/A'),
(49, 8, 2, 'Ammonia', 'N/A', 'N/A'),
(50, 8, 2, 'Amylase isoenzymes (AMYI)', 'N/A', 'N/A'),
(51, 8, 2, 'Androstenedione', 'N/A', 'N/A'),
(52, 8, 2, 'Angiotensin converting enzyme (ACE)', 'N/A', 'N/A'),
(53, 8, 2, 'Antimony', 'N/A', 'N/A'),
(54, 8, 2, 'Aripiprazole & dehydroaripiprazole', 'N/A', 'N/A'),
(55, 8, 2, 'Arsenic', 'N/A', 'N/A'),
(56, 8, 2, 'Aspartate transaminase (AST)', 'N/A', 'N/A'),
(57, 8, 2, 'B-HCG (molar pregnancy)', 'N/A', 'N/A'),
(58, 8, 2, 'Bicarbonate', 'N/A', 'N/A'),
(59, 8, 2, 'Bilirubin: Total', 'N/A', 'N/A'),
(60, 8, 2, 'Bilirubin:Conjugated', 'N/A', 'N/A'),
(61, 8, 2, 'Blood Gases (arterial)', 'N/A', 'N/A'),
(62, 8, 2, 'Blood Gases (venous)', 'N/A', 'N/A'),
(63, 8, 2, 'Buprenorphine', 'N/A', 'N/A'),
(64, 8, 2, 'C Peptide', 'N/A', 'N/A'),
(65, 8, 2, 'C Reactive Protein (CRP)', 'N/A', 'N/A'),
(66, 8, 2, 'CA 125', 'N/A', 'N/A'),
(67, 8, 2, 'CA 15-3', 'N/A', 'N/A'),
(68, 8, 2, 'Cadmium', 'N/A', 'N/A'),
(69, 8, 2, 'Caeruloplasmin', 'N/A', 'N/A'),
(70, 8, 2, 'Calcitonin', 'N/A', 'N/A'),
(71, 8, 2, 'Calcium', 'N/A', 'N/A'),
(72, 8, 2, 'Calcium (serum)', 'N/A', 'N/A'),
(73, 8, 2, 'Calculi (renal)', 'N/A', 'N/A'),
(74, 8, 2, 'Calprotectin (faecal)', 'N/A', 'N/A'),
(75, 8, 2, 'Carbamazepine (Tegretol)', 'N/A', 'N/A'),
(76, 8, 2, 'Carbohydrate Deficient Transferrin', 'N/A', 'N/A'),
(77, 8, 2, 'Carboxyhaemoglobin', 'N/A', 'N/A'),
(78, 8, 2, 'Carcinoembryonic antigen (CEA)', 'N/A', 'N/A'),
(79, 8, 2, 'Catecholamines (24hr) (noradrenaline, adrenaline & dopamine)', 'N/A', 'N/A'),
(80, 8, 2, 'Catecholamines (plasma) (noradrenaline & adrenaline)', 'N/A', 'N/A'),
(81, 8, 2, 'Catecholamines (random) (noradrenaline, adrenaline & dopamine)', 'N/A', 'N/A'),
(82, 8, 2, 'Chloride', 'N/A', 'N/A'),
(83, 8, 2, 'Cholesterol, Total (HDL+LDL)', 'N/A', 'N/A'),
(84, 8, 2, 'Cholinesterase', 'N/A', 'N/A'),
(85, 8, 2, 'Chromium', 'N/A', 'N/A'),
(86, 8, 2, 'Chromogranin-A and B', 'N/A', 'N/A'),
(87, 8, 2, 'Chromosomes', 'N/A', 'N/A'),
(88, 8, 2, 'Ciclosporin A', 'N/A', 'N/A'),
(89, 8, 2, 'Clozapine & Norclozapine', 'N/A', 'N/A'),
(90, 8, 2, 'Cobalt', 'N/A', 'N/A'),
(91, 8, 2, 'Complement (c3&c4;)', 'N/A', 'N/A'),
(92, 8, 2, 'Copper (serum)', 'N/A', 'N/A'),
(93, 8, 2, 'Copper (tissue testing)', 'N/A', 'N/A'),
(94, 8, 2, 'Copper (urine)', 'N/A', 'N/A'),
(95, 8, 2, 'Cortisol', 'N/A', 'N/A'),
(96, 8, 2, 'Creatine kinase (CK)', 'N/A', 'N/A'),
(97, 8, 2, 'Creatinine', 'N/A', 'N/A'),
(98, 8, 2, 'Creatinine clearance (CCR)', 'N/A', 'N/A'),
(99, 8, 2, 'CSF Glycine', 'N/A', 'N/A'),
(100, 8, 2, 'Cystatin C', 'N/A', 'N/A'),
(101, 8, 2, 'Cystic fibrosis genotype', 'N/A', 'N/A'),
(102, 8, 2, 'Cystine', 'N/A', 'N/A'),
(103, 8, 2, 'Dasatinib', 'N/A', 'N/A'),
(104, 8, 2, 'Dehydroepiandrosterone sulphate (DHEAS)', 'N/A', 'N/A'),
(105, 8, 2, 'Digoxin', 'N/A', 'N/A'),
(106, 8, 0, 'Dopamine', 'N/A', 'N/A'),
(107, 8, 2, 'Drugs of Abuse screen', 'N/A', 'N/A'),
(108, 8, 2, 'Elastase (faecal)', 'N/A', 'N/A'),
(109, 8, 2, 'Erlotinib', 'N/A', 'N/A'),
(110, 8, 2, 'Erythropoietin', 'N/A', 'N/A'),
(111, 8, 2, 'Ethanol', 'N/A', 'N/A'),
(112, 8, 2, 'Ethosuximide (Zarontin)', 'N/A', 'N/A'),
(113, 8, 2, 'Faecal Alpha 1 Anti-Trypsin', 'N/A', 'N/A'),
(114, 8, 2, 'Fat globules', 'N/A', 'N/A'),
(115, 8, 2, 'Ferritin', 'N/A', 'N/A'),
(116, 8, 2, 'Flecainide', 'N/A', 'N/A'),
(117, 8, 2, 'Fluconazole', 'N/A', 'N/A'),
(118, 8, 2, 'Fluid crystal analysis', 'N/A', 'N/A'),
(119, 8, 2, 'Fluoride (serum)', 'N/A', 'N/A'),
(120, 8, 2, 'Fluoride (urine)', 'N/A', 'N/A'),
(121, 8, 2, 'Folate (red cell)', 'N/A', 'N/A'),
(122, 8, 2, 'Folate (serum)', 'N/A', 'N/A'),
(123, 8, 2, 'Follicle stimulating hormone (FSH)', 'N/A', 'N/A'),
(124, 8, 2, 'Free Cortisol', 'N/A', 'N/A'),
(125, 8, 2, 'Gabapentin', 'N/A', 'N/A'),
(126, 8, 2, 'Gamma glutamyl tranferase (GGT)', 'N/A', 'N/A'),
(127, 8, 2, 'Gastrin', 'N/A', 'N/A'),
(128, 8, 2, 'Gefitinib', 'N/A', 'N/A'),
(129, 8, 2, 'Glucagon', 'N/A', 'N/A'),
(130, 8, 2, 'Glucose (CSF)', 'N/A', 'N/A'),
(131, 8, 2, 'Glucose (fasting or non-fasting)', 'N/A', 'N/A'),
(132, 8, 2, 'Glucose Tolerance Test', 'N/A', 'N/A'),
(133, 8, 2, 'Glycated haemoglobin (HbA1c)', 'N/A', 'N/A'),
(134, 8, 2, 'Growth hormone (GH)', 'N/A', 'N/A'),
(135, 8, 2, 'Gut Hormones', 'N/A', 'N/A'),
(136, 8, 2, 'Haemochromatosis genotyping', 'N/A', 'N/A'),
(137, 8, 2, 'Haptoglobin', 'N/A', 'N/A'),
(138, 8, 2, 'Homocysteine', 'N/A', 'N/A'),
(139, 8, 2, 'Human chorionic gonadotrophin (HCG pregnancy test)', 'N/A', 'N/A'),
(140, 8, 2, 'IGF1/IGFBP3', 'N/A', 'N/A'),
(141, 8, 2, 'Imatinib & Norimatinib', 'N/A', 'N/A'),
(142, 8, 2, 'Insulin', 'N/A', 'N/A'),
(143, 8, 2, 'Intestinal disaccharadase test (IDT)', 'N/A', 'N/A'),
(144, 8, 2, 'Iodine', 'N/A', 'N/A'),
(145, 8, 2, 'Iron (serum)', 'N/A', 'N/A'),
(146, 8, 2, 'Iron (tissue)', 'N/A', 'N/A'),
(147, 8, 2, 'Iron (urine)', 'N/A', 'N/A'),
(148, 8, 2, 'Itraconazole & hydroxyitraconazole', 'N/A', 'N/A'),
(149, 8, 2, 'Itraconazole&hydroxyitraconazole;', 'N/A', 'N/A'),
(150, 8, 2, 'Lactate', 'N/A', 'N/A'),
(151, 8, 2, 'Lactate dehydrogenase (LDH)', 'N/A', 'N/A'),
(152, 8, 2, 'Lamotrigine', 'N/A', 'N/A'),
(153, 8, 2, 'Lanthanum', 'N/A', 'N/A'),
(154, 8, 2, 'Lapatinib', 'N/A', 'N/A'),
(155, 8, 2, 'Lead', 'N/A', 'N/A'),
(156, 8, 2, 'Levetiracetam', 'N/A', 'N/A'),
(157, 8, 2, 'Lipase', 'N/A', 'N/A'),
(158, 8, 2, 'Lithium', 'N/A', 'N/A'),
(159, 8, 2, 'Luteinising hormone (LH)', 'N/A', 'N/A'),
(160, 8, 2, 'Magnesium', 'N/A', 'N/A'),
(161, 8, 2, 'Manganese', 'N/A', 'N/A'),
(162, 8, 2, 'Mercury', 'N/A', 'N/A'),
(163, 8, 2, 'Methaemalbumin', 'N/A', 'N/A'),
(164, 8, 2, 'Methaemoglobin', 'N/A', 'N/A'),
(165, 8, 2, 'Molybdenum', 'N/A', 'N/A'),
(166, 8, 2, 'Mucopolysaccharides', 'N/A', 'N/A'),
(167, 8, 2, 'N terminal crosslinks (NTX)', 'N/A', 'N/A'),
(168, 8, 2, 'Neurone Specific Enolase (NSE)', 'N/A', 'N/A'),
(169, 8, 2, 'Neurotensin', 'N/A', 'N/A'),
(170, 8, 2, 'Nickel', 'N/A', 'N/A'),
(171, 8, 2, 'Noradrenaline', 'N/A', 'N/A'),
(172, 8, 2, 'Oestradiol (17 ß)', 'N/A', 'N/A'),
(173, 8, 2, 'Oestrone', 'N/A', 'N/A'),
(174, 8, 2, 'Olanzapine', 'N/A', 'N/A'),
(175, 8, 2, 'Oligoclonal bands', 'N/A', 'N/A'),
(176, 8, 2, 'Organic Acids', 'N/A', 'N/A'),
(177, 8, 2, 'Osmolality (serum)', 'N/A', 'N/A'),
(178, 8, 2, 'P3NP', 'N/A', 'N/A'),
(179, 8, 2, 'Pancreatic amylase', 'N/A', 'N/A'),
(180, 8, 2, 'Paracetamol', 'N/A', 'N/A'),
(181, 8, 2, 'Parathyroid hormone (PTH)', 'N/A', 'N/A'),
(182, 8, 2, 'Phenobarbitone', 'N/A', 'N/A'),
(183, 8, 2, 'Phenytoin (Epanutin®)', 'N/A', 'N/A'),
(184, 8, 2, 'Phosphate (serum)', 'N/A', 'N/A'),
(185, 8, 2, 'Pleural fluid pH', 'N/A', 'N/A'),
(186, 8, 2, 'Posaconazole', 'N/A', 'N/A'),
(187, 8, 2, 'Potassium', 'N/A', 'N/A'),
(188, 8, 2, 'Primidone (Mysoline)', 'N/A', 'N/A'),
(189, 8, 2, 'Procollagen III (P3NP)', 'N/A', 'N/A'),
(190, 8, 2, 'Prolactin', 'N/A', 'N/A'),
(191, 8, 2, 'Prostate specific antigen (PSA)', 'N/A', 'N/A'),
(192, 8, 2, 'Protein (CSF)', 'N/A', 'N/A'),
(193, 8, 2, 'Pyruvate', 'N/A', 'N/A'),
(194, 8, 2, 'Quetiapine & Metabolites', 'N/A', 'N/A'),
(195, 8, 2, 'Quinidine', 'N/A', 'N/A'),
(196, 8, 2, 'Quinine', 'N/A', 'N/A'),
(197, 8, 2, 'Reducing substances', 'N/A', 'N/A'),
(198, 8, 2, 'Renin', 'N/A', 'N/A'),
(199, 8, 2, 'Rheumatoid factor', 'N/A', 'N/A'),
(200, 8, 2, 'Risperidone & 9-Hydroxyrisperidone', 'N/A', 'N/A'),
(201, 8, 2, 'S100', 'N/A', 'N/A'),
(202, 8, 2, 'Salicylate', 'N/A', 'N/A'),
(203, 8, 2, 'Selenium', 'N/A', 'N/A'),
(204, 8, 2, 'Sex hormone binding globulin (SHBG)', 'N/A', 'N/A'),
(205, 8, 2, 'Small Bowel Permeability Test (SBPT', 'N/A', 'N/A'),
(206, 8, 2, 'Sodium (serum)', 'N/A', 'N/A'),
(207, 8, 2, 'Sodium (urine)', 'N/A', 'N/A'),
(208, 8, 2, 'Soluble transferrin receptors (sTFR)', 'N/A', 'N/A'),
(209, 8, 2, 'Somatostatin', 'N/A', 'N/A'),
(210, 8, 2, 'Sorafinib', 'N/A', 'N/A'),
(211, 8, 2, 'Strontium', 'N/A', 'N/A'),
(212, 8, 2, 'Sulpiride', 'N/A', 'N/A'),
(213, 8, 2, 'Sunitinib', 'N/A', 'N/A'),
(214, 8, 2, 'Sweat test', 'N/A', 'N/A'),
(215, 8, 2, 'Thallium', 'N/A', 'N/A'),
(216, 8, 2, 'Theophylline', 'N/A', 'N/A'),
(217, 8, 2, 'Thiopurine methyl transferase', 'N/A', 'N/A'),
(218, 8, 2, 'Thyroglobulin', 'N/A', 'N/A'),
(219, 8, 2, 'Topiramate', 'N/A', 'N/A'),
(220, 8, 2, 'Total amylase', 'N/A', 'N/A'),
(221, 8, 2, 'Total Bile Acids (BAC)', 'N/A', 'N/A'),
(222, 8, 2, 'Total iron binding capacity (TIBC)', 'N/A', 'N/A'),
(223, 8, 2, 'Total protein (serum)', 'N/A', 'N/A'),
(224, 8, 2, 'Triglycerides', 'N/A', 'N/A'),
(225, 8, 2, 'Troponin I', 'N/A', 'N/A'),
(226, 8, 2, 'Urea (serum)', 'N/A', 'N/A'),
(227, 8, 2, 'Urea (urine)', 'N/A', 'N/A'),
(228, 8, 2, 'Uric acid (serum)', 'N/A', 'N/A'),
(229, 8, 2, 'Uric acid (urine)', 'N/A', 'N/A'),
(230, 8, 2, 'Urine bilirubin', 'N/A', 'N/A'),
(231, 8, 2, 'Urine cortisol (free cortisol)', 'N/A', 'N/A'),
(232, 8, 2, 'Urine dipstick test', 'N/A', 'N/A'),
(233, 8, 2, 'Urine reducing substance screen', 'N/A', 'N/A'),
(234, 8, 2, 'Urobilinogen', 'N/A', 'N/A'),
(235, 8, 2, 'Valproate (Epilim)', 'N/A', 'N/A'),
(236, 8, 2, 'Vasoactive intestinal polypeptide (VIP)', 'N/A', 'N/A'),
(237, 8, 2, 'Very Long Chain Fatty Acids', 'N/A', 'N/A'),
(238, 8, 2, 'Vitamin A', 'N/A', 'N/A'),
(239, 8, 2, 'Vitamin B12', 'N/A', 'N/A'),
(240, 8, 2, 'Vitamin D', 'N/A', 'N/A'),
(241, 8, 2, 'Vitamin E', 'N/A', 'N/A'),
(242, 8, 2, 'Voriconazole', 'N/A', 'N/A'),
(243, 8, 2, 'Wilson''s Genotyping', 'N/A', 'N/A'),
(244, 8, 2, 'Xanthochromia', 'N/A', 'N/A'),
(245, 8, 2, 'Zinc', 'N/A', 'N/A'),
(246, 8, 9, 'Abdomen ', 'N/A', 'N/A'),
(247, 8, 9, 'Abdomen B. Phasic& Contrast', 'N/A', 'N/A'),
(248, 8, 9, 'Abdomen Routine ', 'N/A', 'N/A'),
(249, 8, 9, 'Abdomen Routine With contrast', 'N/A', 'N/A'),
(250, 8, 9, 'Colon With I V Contrast', 'N/A', 'N/A'),
(251, 8, 9, 'CT. Angio Pulmonary Embolism', 'N/A', 'N/A'),
(252, 8, 9, 'Angio Upper Limb', 'N/A', 'N/A'),
(253, 8, 9, 'Abdominal Angio', 'N/A', 'N/A'),
(254, 8, 9, 'Angio Lower Limb', 'N/A', 'N/A'),
(255, 8, 9, 'Carotid Angio', 'N/A', 'N/A'),
(256, 8, 9, 'Cerebral Angio', 'N/A', 'N/A'),
(257, 8, 9, 'Chest + Abdomen  Angio', 'N/A', 'N/A'),
(258, 8, 9, 'Chest Angio', 'N/A', 'N/A'),
(259, 8, 9, 'Renal Angio +15min KUB', 'N/A', 'N/A'),
(260, 8, 9, 'CT .Chest  For P.E', 'N/A', 'N/A'),
(261, 8, 9, 'Chest Routine', 'N/A', 'N/A'),
(262, 8, 9, 'Chest Routine With Contrast', 'N/A', 'N/A'),
(263, 8, 9, 'CT.  HRCT', 'N/A', 'N/A'),
(264, 8, 9, 'CT. Braine PNS', 'N/A', 'N/A'),
(265, 8, 9, 'CT. Braine', 'N/A', 'N/A'),
(266, 8, 9, 'CT. Braine + Orbit', 'N/A', 'N/A'),
(267, 8, 9, 'CT. Braine With Contrast', 'N/A', 'N/A'),
(268, 8, 9, 'Facile  Region', 'N/A', 'N/A'),
(269, 8, 9, 'Facile  Region With Contrast', 'N/A', 'N/A'),
(270, 8, 9, 'CT. Mastoids /Petrus Bone ', 'N/A', 'N/A'),
(271, 8, 9, 'CT. Mastoids /Petrus Bone With Contrast ', 'N/A', 'N/A'),
(272, 8, 9, 'CT. Neck ', 'N/A', 'N/A'),
(273, 8, 9, 'CT. Neck + PNS With Contrast', 'N/A', 'N/A'),
(274, 8, 9, 'CT. Neck With Contrast', 'N/A', 'N/A'),
(275, 8, 9, ' CT. Orbital ', 'N/A', 'N/A'),
(276, 8, 9, 'CT. Orbital &Contrast;', 'N/A', 'N/A'),
(277, 8, 9, 'CT. Orbital +PNS', 'N/A', 'N/A'),
(278, 8, 9, 'CT. PNS', 'N/A', 'N/A'),
(279, 8, 9, 'PNS With Contrast', 'N/A', 'N/A'),
(280, 8, 9, 'CT. Temporal Bone', 'N/A', 'N/A'),
(281, 8, 9, 'CT. Ankle Joint', 'N/A', 'N/A'),
(282, 8, 9, 'CT Foot', 'N/A', 'N/A'),
(283, 8, 9, 'CT. Femur  ', 'N/A', 'N/A'),
(284, 8, 9, 'CT. Hip Joint', 'N/A', 'N/A'),
(285, 8, 9, 'CT.  knee Joint', 'N/A', 'N/A'),
(286, 8, 9, 'CT. Thigh', 'N/A', 'N/A'),
(287, 8, 9, 'CT. Tibia', 'N/A', 'N/A'),
(288, 8, 9, 'CT Pelvis  ', 'N/A', 'N/A'),
(289, 8, 9, 'CT Pelvis  With I V Contrast ', 'N/A', 'N/A'),
(290, 8, 9, 'CT. Cervical Spain', 'N/A', 'N/A'),
(291, 8, 9, 'CT. Lumber Sacral Spain', 'N/A', 'N/A'),
(292, 8, 9, 'CT. Myelogram', 'N/A', 'N/A'),
(293, 8, 9, 'CT. Thoracic Spain', 'N/A', 'N/A'),
(294, 8, 9, 'Whole Spine', 'N/A', 'N/A'),
(295, 8, 9, 'Whole Spine CT. Myelogram', 'N/A', 'N/A'),
(296, 8, 9, 'CT. Shoulder Joint', 'N/A', 'N/A'),
(297, 8, 9, 'CT. Elbow Joint', 'N/A', 'N/A'),
(298, 8, 9, 'CT. Wrist ', 'N/A', 'N/A'),
(299, 8, 9, 'CT Biopsy', 'N/A', 'N/A'),
(300, 8, 9, 'CT. Chest & Abdo / Pelvis Without Contrast', 'N/A', 'N/A'),
(301, 8, 9, 'CT Scan gram ', 'N/A', 'N/A'),
(302, 8, 9, 'CT .Chest + Upper Limb With Contrast', 'N/A', 'N/A'),
(303, 8, 9, 'CT. Long Bone ', 'N/A', 'N/A'),
(304, 8, 9, 'CT. Neck Chest +Abd/ Pelvis', 'N/A', 'N/A'),
(305, 8, 9, 'CT. Neck & Chest Contrast', 'N/A', 'N/A'),
(306, 8, 9, 'CT. Chest & Abdo / Pelvis With Contrast', 'N/A', 'N/A'),
(307, 8, 10, 'MRCP', 'N/A', 'N/A'),
(308, 8, 10, 'MRI Abdomen With Contrast', 'N/A', 'N/A'),
(309, 8, 10, 'Kidney MRI', 'N/A', 'N/A'),
(310, 8, 10, 'Liver MRI', 'N/A', 'N/A'),
(311, 8, 10, 'Upper Abdomen With Contrast', 'N/A', 'N/A'),
(312, 8, 10, 'Whole Abdomen', 'N/A', 'N/A'),
(313, 8, 10, 'Upper Abdomen', 'N/A', 'N/A'),
(314, 8, 10, 'Chest ', 'N/A', 'N/A'),
(315, 8, 10, 'Chest With I V Contrast ', 'N/A', 'N/A'),
(316, 8, 10, 'Left Brest', 'N/A', 'N/A'),
(317, 8, 10, 'Right Brest', 'N/A', 'N/A'),
(318, 8, 10, 'Both Brest with Contrast', 'N/A', 'N/A'),
(319, 8, 10, 'MRI Brain + Contrast', 'N/A', 'N/A'),
(320, 8, 10, 'MRI Braine Routine', 'N/A', 'N/A'),
(321, 8, 10, 'MRI Braine I.A.M .Contrast', 'N/A', 'N/A'),
(322, 8, 10, 'MRI Braine I.A.M', 'N/A', 'N/A'),
(323, 8, 10, 'MRI Brachial Plexus', 'N/A', 'N/A'),
(324, 8, 10, 'MRA Braine', 'N/A', 'N/A'),
(325, 8, 10, 'MRV Braine', 'N/A', 'N/A'),
(326, 8, 10, 'MRI Pituitary', 'N/A', 'N/A'),
(327, 8, 10, 'MRI Pituitary Contrast', 'N/A', 'N/A'),
(328, 8, 10, 'MRA Neck', 'N/A', 'N/A'),
(329, 8, 10, 'MRI Braine For Sella  ', 'N/A', 'N/A'),
(330, 8, 10, 'MRI Neck', 'N/A', 'N/A'),
(331, 8, 10, 'MRI Neck With Contrast', 'N/A', 'N/A'),
(332, 8, 10, 'MRI Mastoid', 'N/A', 'N/A'),
(333, 8, 10, 'MRI T.M. Joint', 'N/A', 'N/A'),
(334, 8, 10, 'MRI  Brain &Orbit;', 'N/A', 'N/A'),
(335, 8, 10, 'MRI Orbit', 'N/A', 'N/A'),
(336, 8, 10, 'MRI Orbit with Contrast', 'N/A', 'N/A'),
(337, 8, 10, 'MRI Both Knees Joint', 'N/A', 'N/A'),
(338, 8, 10, 'MRI Left Ankel', 'N/A', 'N/A'),
(339, 8, 10, 'MRI Left Foot ', 'N/A', 'N/A'),
(340, 8, 10, 'MRI Left Hip Joint', 'N/A', 'N/A'),
(341, 8, 10, 'MRI Left Knee Joint', 'N/A', 'N/A'),
(342, 8, 10, 'MRI Left Thigh', 'N/A', 'N/A'),
(343, 8, 10, 'MRI Left Tibia', 'N/A', 'N/A'),
(344, 8, 10, 'MRI Right Ankel Joint', 'N/A', 'N/A'),
(345, 8, 10, 'MRI Right Foot', 'N/A', 'N/A'),
(346, 8, 10, 'MRI Right Hip', 'N/A', 'N/A'),
(347, 8, 10, 'MRI Right Knee', 'N/A', 'N/A'),
(348, 8, 10, 'MRI Right Thigh', 'N/A', 'N/A'),
(349, 8, 10, 'MRI Right Tibia', 'N/A', 'N/A'),
(350, 8, 10, 'MRI both Hip Joint', 'N/A', 'N/A'),
(351, 8, 10, 'MRI Pelvis', 'N/A', 'N/A'),
(352, 8, 10, 'MRI Pelvis For Fistula& Contrast', 'N/A', 'N/A'),
(353, 8, 10, 'MRI Pelvis For Fistula', 'N/A', 'N/A'),
(354, 8, 10, 'MRI Left Shoulder', 'N/A', 'N/A'),
(355, 8, 10, 'MRI Right Shoulder', 'N/A', 'N/A'),
(356, 8, 10, 'MRI Cervical Spine', 'N/A', 'N/A'),
(357, 8, 10, 'MRI Lumber Spine', 'N/A', 'N/A'),
(358, 8, 10, 'MRI Thoracic Spine', 'N/A', 'N/A'),
(359, 8, 10, 'MRI Whole Spine', 'N/A', 'N/A'),
(360, 8, 10, 'MRI Left Forearm ', 'N/A', 'N/A'),
(361, 8, 10, 'MRI Arm', 'N/A', 'N/A'),
(362, 8, 10, 'MRI Left Elbow Joint', 'N/A', 'N/A'),
(363, 8, 10, 'MRI Left Hand', 'N/A', 'N/A'),
(364, 8, 10, 'MRI Left wrist', 'N/A', 'N/A'),
(365, 8, 10, 'MRI Right Arm', 'N/A', 'N/A'),
(366, 8, 10, 'MRI Right Hand ', 'N/A', 'N/A'),
(367, 8, 10, 'MRI Right Wrist', 'N/A', 'N/A'),
(368, 8, 10, 'MRI Right Elbow', 'N/A', 'N/A'),
(369, 8, 10, 'MRI Right Forearm', 'N/A', 'N/A'),
(370, 8, 11, 'Barium Meal &swallow;', 'N/A', 'N/A'),
(371, 8, 11, 'Barium Meal', 'N/A', 'N/A'),
(372, 8, 11, 'Barium Swallow', 'N/A', 'N/A'),
(373, 8, 11, 'Fistulogram / Sinogram', 'N/A', 'N/A'),
(374, 8, 11, 'Nephrostogram', 'N/A', 'N/A'),
(375, 8, 11, 'T_ Tube', 'N/A', 'N/A'),
(376, 8, 11, 'Head +Neck Sialogram Sublingual gland   ', 'N/A', 'N/A'),
(377, 8, 11, 'Barium Enema', 'N/A', 'N/A'),
(378, 8, 11, 'I.V.P /I.V.U', 'N/A', 'N/A'),
(379, 8, 11, 'Logogram', 'N/A', 'N/A'),
(380, 8, 11, 'Urethrogram', 'N/A', 'N/A'),
(381, 8, 11, 'Colostogram', 'N/A', 'N/A'),
(382, 8, 11, 'Cyst gram', 'N/A', 'N/A'),
(383, 8, 11, 'Cryptogram Female', 'N/A', 'N/A'),
(384, 8, 11, 'H S G', 'N/A', 'N/A'),
(385, 8, 11, 'M C U G', 'N/A', 'N/A'),
(386, 8, 11, 'V C U G', 'N/A', 'N/A'),
(387, 8, 11, 'Myelogram Cervical Spine', 'N/A', 'N/A'),
(388, 8, 11, 'Myelogram  Lumber Spine', 'N/A', 'N/A'),
(389, 8, 11, 'Myelogram Thoracic Spine', 'N/A', 'N/A'),
(390, 8, 8, 'X_ Ray Abdomen 1 View', 'N/A', 'N/A'),
(391, 8, 8, 'X_ Ray Abdomen 2 View', 'N/A', 'N/A'),
(392, 8, 8, 'X_ Ray Abdomen 3 View', 'N/A', 'N/A'),
(393, 8, 0, 'X_ Ray Abdomen Routine 1 View', 'N/A', 'N/A'),
(394, 8, 8, 'X_ Ray Abdomen Routine 2 View', 'N/A', 'N/A'),
(395, 8, 8, 'Bone Age 1 View', 'N/A', 'N/A'),
(396, 8, 8, 'Bone Age 2 View', 'N/A', 'N/A'),
(397, 8, 8, 'Bone Age 3 View', 'N/A', 'N/A'),
(398, 8, 8, 'X_ Ray Chest Routine 1 View', 'N/A', 'N/A'),
(399, 8, 8, 'X_ Ray Lordatic/apical', 'N/A', 'N/A'),
(400, 8, 8, 'X_ Ray Sternum 2 views', 'N/A', 'N/A'),
(401, 8, 8, 'X_ Ray Ribs Oblique 2 View', 'N/A', 'N/A'),
(402, 8, 8, 'X_ Ray Ribs Obilique 1 View', 'N/A', 'N/A'),
(403, 8, 8, 'X_ Ray Facial Bone 1 view', 'N/A', 'N/A'),
(404, 8, 8, 'X_ Ray Facial Bone 2 view', 'N/A', 'N/A'),
(405, 8, 8, 'X_ Ray Facial Bone 3 view ', 'N/A', 'N/A'),
(406, 8, 8, 'X_ Ray Larynx', 'N/A', 'N/A'),
(407, 8, 8, 'X_ Ray Mandible 1 View', 'N/A', 'N/A'),
(408, 8, 8, 'X_ Ray Mandible 2 View', 'N/A', 'N/A'),
(409, 8, 8, 'X_ Ray Mandible 3 View', 'N/A', 'N/A'),
(410, 8, 8, 'X_ Ray Mastoid 1 View', 'N/A', 'N/A'),
(411, 8, 8, 'X_ Ray Mastoid 2 View', 'N/A', 'N/A'),
(412, 8, 8, 'X_ Ray Nasal Bone 1 View', 'N/A', 'N/A'),
(413, 8, 8, 'X_ Ray Orbits 1 View', 'N/A', 'N/A'),
(414, 8, 8, 'X_ Ray Orbits 2 View', 'N/A', 'N/A'),
(415, 8, 8, 'X_ Ray P N S 1 View', 'N/A', 'N/A'),
(416, 8, 8, 'X_ Ray P N S 2 View', 'N/A', 'N/A'),
(417, 8, 8, 'X_ Ray Post Nasal Space', 'N/A', 'N/A'),
(418, 8, 8, 'X_ Ray S.M.V Skull', 'N/A', 'N/A'),
(419, 8, 8, 'X_ Ray Skull 1 View', 'N/A', 'N/A'),
(420, 8, 8, 'X_ Ray Skull 2 View', 'N/A', 'N/A'),
(421, 8, 8, 'X_ Ray Skull 3 View', 'N/A', 'N/A'),
(422, 8, 8, 'X_ Ray T.M. Joints', 'N/A', 'N/A'),
(423, 8, 8, 'Patella View', 'N/A', 'N/A'),
(424, 8, 8, 'X_ Ray Ankle 1 View', 'N/A', 'N/A'),
(425, 8, 8, 'X_ Ray Ankle 2 View', 'N/A', 'N/A'),
(426, 8, 8, 'X_ Ray Ankle 3 View', 'N/A', 'N/A'),
(427, 8, 8, 'X_ Ray Both Feet 1View', 'N/A', 'N/A'),
(428, 8, 8, 'X_ Ray Both Feet 2View', 'N/A', 'N/A'),
(429, 8, 8, 'X_ Ray Both Knee Joint 1View', 'N/A', 'N/A'),
(430, 8, 8, 'X_ Ray fumar1 View', 'N/A', 'N/A'),
(431, 8, 8, 'X_ Ray fumar2 View', 'N/A', 'N/A'),
(432, 8, 8, 'X_ Ray fumar3 View', 'N/A', 'N/A'),
(433, 8, 8, 'X_ Ray foot 1View', 'N/A', 'N/A'),
(434, 8, 8, 'X_ Ray foot 2View', 'N/A', 'N/A'),
(435, 8, 8, 'X_ Ray foot 3View', 'N/A', 'N/A'),
(436, 8, 8, 'X_ Ray Hip Joint 1View', 'N/A', 'N/A'),
(437, 8, 8, 'X_ Ray Hip Joint 2View', 'N/A', 'N/A'),
(438, 8, 8, 'X_ Ray Hip Joint 3View', 'N/A', 'N/A'),
(439, 8, 8, 'X_ Ray Left Knee Joint 1View', 'N/A', 'N/A'),
(440, 8, 0, 'X_ Ray Left Knee Joint 2View', 'N/A', 'N/A'),
(441, 8, 8, 'X_ Ray Left Knee Joint 3View', 'N/A', 'N/A'),
(442, 8, 8, 'X_ Ray Right Knee Joint 1View', 'N/A', 'N/A'),
(443, 8, 8, 'X_ Ray Right Knee Joint 2View', 'N/A', 'N/A'),
(444, 8, 8, 'X_ Ray Right Knee Joint 3View', 'N/A', 'N/A'),
(445, 8, 8, 'X_ Ray Tibia Fibula 1View', 'N/A', 'N/A'),
(446, 8, 8, 'X_ Ray Tibia Fibula 2View', 'N/A', 'N/A'),
(447, 8, 8, 'X_ Ray Tibia Fibula 3View', 'N/A', 'N/A'),
(448, 8, 8, 'X_ Ray Pelvis', 'N/A', 'N/A'),
(449, 8, 8, 'X_ Ray S.I. Joint 1View', 'N/A', 'N/A'),
(450, 8, 8, 'X_ Ray S.I. Joint 2View', 'N/A', 'N/A'),
(451, 8, 8, 'X_ Ray A.C. Joint 1View', 'N/A', 'N/A'),
(452, 8, 8, 'X_ Ray A.C. Joint 2View', 'N/A', 'N/A'),
(453, 8, 8, 'X_ Ray Clavicle 1View', 'N/A', 'N/A'),
(454, 8, 8, 'X_ Ray Clavicle 2View', 'N/A', 'N/A'),
(455, 8, 8, 'X_ Ray Shoulder 1 View', 'N/A', 'N/A'),
(456, 8, 8, 'X_ Ray Shoulder 2 View', 'N/A', 'N/A'),
(457, 8, 8, 'X_ Ray  Cervical Spain 1View', 'N/A', 'N/A'),
(458, 8, 8, 'X_ Ray  Cervical Spain 2View', 'N/A', 'N/A'),
(459, 8, 8, 'X_ Ray  Cervical Spain 3View', 'N/A', 'N/A'),
(460, 8, 8, 'X_  Ray Lumber Spain 1View', 'N/A', 'N/A'),
(461, 8, 8, 'X_  Ray Lumber Spain 2View', 'N/A', 'N/A'),
(462, 8, 8, 'X_  Ray Lumber Spain 3View', 'N/A', 'N/A'),
(463, 8, 8, 'X_  Ray Lumber Spain 4View', 'N/A', 'N/A'),
(464, 8, 8, 'X_  Ray Neck Soft Tissue', 'N/A', 'N/A'),
(465, 8, 8, 'X_  Ray Coccyxal  joint 1View', 'N/A', 'N/A'),
(466, 8, 8, 'X_  Ray Coccyxal  joint 2View', 'N/A', 'N/A'),
(467, 8, 8, 'X_  Ray Thoracic Spine 1View', 'N/A', 'N/A'),
(468, 8, 8, 'X_  Ray Thoracic Spine 2View', 'N/A', 'N/A'),
(469, 8, 8, 'X_  Ray Thoracic Spine 3View', 'N/A', 'N/A'),
(470, 8, 8, 'X_ Ray Both wrist 1View', 'N/A', 'N/A'),
(471, 8, 8, 'X_ Ray Both wrist 2View', 'N/A', 'N/A'),
(472, 8, 8, 'X_ Ray Both wrist 3View', 'N/A', 'N/A'),
(473, 8, 8, 'X_ Ray Elbow joint 1View', 'N/A', 'N/A'),
(474, 8, 8, 'X_ Ray Elbow joint 2View', 'N/A', 'N/A'),
(475, 8, 8, 'X_ Ray Elbow joint 3View', 'N/A', 'N/A'),
(476, 8, 8, 'X_ Ray Forearm 1View', 'N/A', 'N/A'),
(477, 8, 8, 'X_ Ray Forearm 2View', 'N/A', 'N/A'),
(478, 8, 8, 'X_ Ray Forearm 3View', 'N/A', 'N/A'),
(479, 8, 8, 'X_ Ray Hand  1View', 'N/A', 'N/A'),
(480, 8, 8, 'X_ Ray Hand  2View', 'N/A', 'N/A'),
(481, 8, 8, 'X_ Ray Hand  3View', 'N/A', 'N/A'),
(482, 8, 8, 'X_ Ray Humarus 1View', 'N/A', 'N/A'),
(483, 8, 8, 'X_ Ray Humarus 2View', 'N/A', 'N/A'),
(484, 8, 8, 'X_ Ray Humarus 3View', 'N/A', 'N/A'),
(485, 8, 8, 'X_ Ray Scaphoid View ', 'N/A', 'N/A'),
(486, 8, 8, 'X_ Ray Scaphoid Bone', 'N/A', 'N/A'),
(487, 8, 8, 'X_ Ray wrist 1View', 'N/A', 'N/A'),
(488, 8, 8, 'X_ Ray wrist 2View', 'N/A', 'N/A'),
(489, 8, 8, 'X_ Ray wrist 3View', 'N/A', 'N/A'),
(490, 8, 12, 'Mammography Localization', 'N/A', 'N/A'),
(491, 8, 12, 'Mammography Right Brest', 'N/A', 'N/A'),
(492, 8, 13, 'Abdomen & TVS', 'N/A', 'N/A'),
(493, 8, 13, 'Abscess Drainage of Abdomen', 'N/A', 'N/A'),
(494, 8, 13, 'All Abdomen', 'N/A', 'N/A'),
(495, 8, 13, 'Ascetic Drain Placement', 'N/A', 'N/A'),
(496, 8, 13, 'Diagnostic Ascetic', 'N/A', 'N/A'),
(497, 8, 13, 'Doppler U/S For hepatic / portal Veins ', 'N/A', 'N/A'),
(498, 8, 13, 'KUB', 'N/A', 'N/A'),
(499, 8, 13, 'Renal Doppler Study', 'N/A', 'N/A'),
(500, 8, 13, 'Transvaginal U/S (TYS)', 'N/A', 'N/A'),
(501, 8, 13, 'U/S Middle Cerebral Doppler', 'N/A', 'N/A'),
(502, 8, 13, 'U/S Umbilical Artey  ', 'N/A', 'N/A'),
(503, 8, 13, 'Ultrasound For Fetal ', 'N/A', 'N/A'),
(504, 8, 13, 'Ultrasound Guided F N A ', 'N/A', 'N/A'),
(505, 8, 13, 'Ultrasound Guided Therapeutic Aspiration', 'N/A', 'N/A'),
(506, 8, 13, 'Hepatic Doppler Study (Liver Portal View ', 'N/A', 'N/A'),
(507, 8, 13, 'Ultrasound Both Breasts', 'N/A', 'N/A'),
(508, 8, 13, 'Ultrasound Both Breasts Axils', 'N/A', 'N/A'),
(509, 8, 13, 'Ultrasound Left Breasts Axila', 'N/A', 'N/A'),
(510, 8, 13, 'Ultrasound Right Breasts Axila', 'N/A', 'N/A'),
(511, 8, 13, 'Ultrasound Core Biopsy ', 'N/A', 'N/A'),
(512, 8, 13, 'Ultrasound Drainage Thoracic Region ', 'N/A', 'N/A'),
(513, 8, 13, 'Ultrasound FNA', 'N/A', 'N/A'),
(514, 8, 13, 'Ultrasound Left Breasts', 'N/A', 'N/A'),
(515, 8, 13, 'Ultrasound Right Breasts', 'N/A', 'N/A'),
(516, 8, 13, 'Ultrasound Carotid Artery Left  ', 'N/A', 'N/A'),
(517, 8, 13, 'Ultrasound Carotid Artery Right ', 'N/A', 'N/A'),
(518, 8, 13, 'Ultrasound Head ', 'N/A', 'N/A'),
(519, 8, 13, 'Ultrasound Thyroid/ parathyroid ', 'N/A', 'N/A'),
(520, 8, 13, 'Doppler Ultrasound Both Lower Limb ', 'N/A', 'N/A'),
(521, 8, 13, 'Doppler Ultrasound Left Lower Limb ', 'N/A', 'N/A'),
(522, 8, 13, 'Doppler Ultrasound Right Lower Limb', 'N/A', 'N/A'),
(523, 8, 13, 'Ultrasound Hip Joint ', 'N/A', 'N/A'),
(524, 8, 13, 'Ultrasound Pelvis ', 'N/A', 'N/A'),
(525, 8, 13, 'U/S Penile Cavernous Doppler ', 'N/A', 'N/A'),
(526, 8, 13, 'Ultrasound Trans Rectal Prostate ', 'N/A', 'N/A'),
(527, 8, 13, 'Ultrasound Trans vaginal', 'N/A', 'N/A'),
(528, 8, 13, 'Doppler Ultrasound Obstetric ', 'N/A', 'N/A'),
(529, 8, 13, 'Doppler Ultrasound Testis ', 'N/A', 'N/A'),
(530, 8, 13, 'Ultrasound Obstetric', 'N/A', 'N/A'),
(531, 8, 13, 'U/S FNA Thyroid', 'N/A', 'N/A'),
(532, 8, 13, 'U/S FNA Neck', 'N/A', 'N/A'),
(533, 8, 13, 'U/S FNA Liver ', 'N/A', 'N/A'),
(534, 8, 13, 'U/S FNA Breast', 'N/A', 'N/A'),
(535, 8, 13, 'Ultrasound Doppler Upper Limb Left', 'N/A', 'N/A'),
(536, 8, 13, 'Ultrasound Doppler Upper Limb Right ', 'N/A', 'N/A'),
(537, 8, 13, 'Ultrasound Localization ', 'N/A', 'N/A'),
(538, 8, 13, 'Ultrasound Skin Marking', 'N/A', 'N/A'),
(539, 8, 4, 'Immunoglobulin G concentration', 'N/A', 'N/A'),
(540, 8, 0, 'Immunoglobulin M concentration', 'N/A', 'N/A'),
(541, 8, 4, 'IgG 1 Concentration', 'N/A', 'N/A'),
(542, 8, 4, 'IgG 2 Concentration', 'N/A', 'N/A'),
(543, 8, 4, 'IgG 3 Concentration', 'N/A', 'N/A'),
(544, 8, 4, 'IgG 4 Concentration', 'N/A', 'N/A'),
(545, 8, 4, 'Complement C3 concentration', 'N/A', 'N/A'),
(546, 8, 4, 'Complement C4 concentration', 'N/A', 'N/A'),
(547, 8, 4, 'Beta 2 microglobulin concentration', 'N/A', 'N/A'),
(548, 8, 4, 'Serum Free Light Chains - Kappa', 'N/A', 'N/A'),
(549, 8, 4, 'Serum Free Light Chains - Lambda', 'N/A', 'N/A'),
(550, 8, 4, 'Antigenic C1 inhibitor concentration', 'N/A', 'N/A'),
(551, 8, 4, 'Immunoblobulin E Concentration', 'N/A', 'N/A'),
(552, 8, 4, 'Cryoglobulins', 'N/A', 'N/A'),
(553, 8, 4, 'Protein Electrophoresis (EP + IGS +TP (SEP group))', 'N/A', 'N/A'),
(554, 8, 4, 'Lymphocytes % (CD 3)', 'N/A', 'N/A'),
(555, 8, 0, 'CD3 Lymphocytes Absolute Counts', 'N/A', 'N/A'),
(556, 8, 4, 'CD4 Lymphocytes %', 'N/A', 'N/A'),
(557, 8, 4, 'CD4 Lymphocytes Absolute Counts', 'N/A', 'N/A'),
(558, 8, 4, 'CD8 Lymphocytes %', 'N/A', 'N/A'),
(559, 8, 4, 'CD8 Lymphocytes Absolute Counts', 'N/A', 'N/A'),
(560, 8, 4, 'B Cells (CD19)%', 'N/A', 'N/A'),
(561, 8, 4, 'B Cells Absolute Counts', 'N/A', 'N/A'),
(562, 8, 4, 'NK cells %', 'N/A', 'N/A'),
(563, 8, 4, 'NK Cells Absolute Counts', 'N/A', 'N/A'),
(564, 8, 4, 'Anti Pnuemococcal Capsular Polysaccharide antibodies (Total IgG and IgG2)', 'N/A', 'N/A'),
(565, 8, 4, 'Anti Haemophilus Influenzae (IgG) antibodies', 'N/A', 'N/A'),
(566, 8, 4, 'Anti Tetanus Toxoid Antibodies (IgG)', 'N/A', 'N/A'),
(567, 8, 4, 'Anti Nuclear antibodies including centromere', 'N/A', 'N/A'),
(568, 8, 4, 'Anti Smooth Muscle antibodies', 'N/A', 'N/A'),
(569, 8, 4, 'Anti Mitochondrial antibodies', 'N/A', 'N/A'),
(570, 8, 4, 'Anti Gastric Parietal Cell antibodies', 'N/A', 'N/A'),
(571, 8, 4, 'Anti Liver, Kidney Microsomal antibodies', 'N/A', 'N/A'),
(572, 8, 4, 'Anti mitochondrial antibodies M2 confirmatory test', 'N/A', 'N/A'),
(573, 8, 4, 'Anti LKM-1 confirmatory test', 'N/A', 'N/A'),
(574, 8, 4, 'Anti Liver Cytosol-1 confirmatory test', 'N/A', 'N/A'),
(575, 8, 4, 'Anti Soluble Liver antigen confirmatory test', 'N/A', 'N/A'),
(576, 8, 4, 'Anti Striated Muscle antibodies', 'N/A', 'N/A'),
(577, 8, 4, 'Anti Skin antibodies', 'N/A', 'N/A'),
(578, 8, 4, 'Anti Adrenal antibodies', 'N/A', 'N/A'),
(579, 8, 4, 'Anti Ovarian antibodies', 'N/A', 'N/A'),
(580, 8, 4, 'Anti Neuronal antibodies', 'N/A', 'N/A'),
(581, 8, 4, 'Anti-Hu', 'N/A', 'N/A'),
(582, 8, 4, 'Anti-Yo (Purkinji cell)', 'N/A', 'N/A'),
(583, 8, 4, 'Anti-Ri', 'N/A', 'N/A'),
(584, 8, 4, 'Anti-Ta/PNMA2', 'N/A', 'N/A'),
(585, 8, 4, 'Amphiphysin Antibody', 'N/A', 'N/A'),
(586, 8, 4, 'CV2/CRMP-5', 'N/A', 'N/A'),
(587, 8, 4, 'Anti Thyroid Peroxidase antibodies', 'N/A', 'N/A'),
(588, 8, 4, 'Anti dsDNA antibodies', 'N/A', 'N/A'),
(589, 8, 4, 'Anti CCP antibodies', 'N/A', 'N/A'),
(590, 8, 4, 'Anti ENA Screen includes Anti Ro(SSA), La (SSB), Sm, RNP, Jo1, Scl70', 'N/A', 'N/A'),
(591, 8, 4, 'Anti Cardiolipin antibodies IgG', 'N/A', 'N/A'),
(592, 8, 4, 'Anti Cardiolipin antibodies IgM', 'N/A', 'N/A'),
(593, 8, 4, 'Anti Beta 2 glycoprotein 1 IgG', 'N/A', 'N/A'),
(594, 8, 4, 'Anti Beta 2 glycoprotein 1 IgM', 'N/A', 'N/A'),
(595, 8, 4, 'ANCA Immunofluorescence Screen', 'N/A', 'N/A'),
(596, 8, 4, 'Anti MPO Antibodies', 'N/A', 'N/A'),
(597, 8, 4, 'Anti PR3 Antibodies', 'N/A', 'N/A'),
(598, 8, 4, 'Anti Glomerular Basement Membrane Antibodies', 'N/A', 'N/A'),
(599, 8, 4, 'Coeliac Screen (IgA + TTG)', 'N/A', 'N/A'),
(600, 8, 4, 'Anti Tissue Transglutaminase antibodies', 'N/A', 'N/A'),
(601, 8, 4, 'Anti Endomysial Antibodies (Ttg positive patients and IgG Endomysial antibodies for IgA deficient patients)', 'N/A', 'N/A'),
(602, 8, 4, 'Anti Intrinsic factor Antibodies', 'N/A', 'N/A'),
(603, 8, 4, 'Diabetic Screen (DABS)includes GAD, Insulin and IA2 Antibodies', 'N/A', 'N/A'),
(604, 8, 4, 'Anti Glutamic Acid Decarboxylase Antibodies', 'N/A', 'N/A'),
(605, 8, 4, 'Anti Insulin antibodies', 'N/A', 'N/A'),
(606, 8, 4, 'Anti IA2 antibodies', 'N/A', 'N/A'),
(607, 8, 4, 'Immunolglobulin E concentration', 'N/A', 'N/A'),
(608, 8, 4, 'Specific Allergens (RAST)', 'N/A', 'N/A'),
(609, 8, 4, 'Tryptase', 'N/A', 'N/A'),
(610, 8, 7, 'Stool R/E', 'N/A', 'N/A'),
(611, 8, 7, 'Stool R/S', 'N/A', 'N/A'),
(612, 8, 6, 'Urine R/E', 'N/A', 'N/A'),
(613, 8, 5, 'asdf', 'sdf', 'sdf'),
(614, 8, 9, 'no ct scan', 'N/A', 'N/A'),
(616, 8, 4, 'Bijon', '0', '0'),
(618, 8, 9, 'CTSCAN', 'mri', 'mri'),
(621, 8, 2, 'ALT', 'U/L', 'Up to 40'),
(622, 8, 0, 'a', 'a', 'a'),
(623, 8, 1, '41', '5445', '5445'),
(624, 8, 1, '41asdf', '5445', '5445'),
(625, 8, 1, 'PBF', 'N/A', 'N/A'),
(626, 8, 2, 'SGPT', 'U/L', 'Upto 30'),
(627, 8, 2, 'LDH', 'N/A', 'N/A'),
(628, 8, 13, 'W/A', 'N/A', 'N/A'),
(629, 8, 2, 'HBS Ag', 'N/A', 'N/A'),
(630, 8, 2, 'Anti HCV', 'N/A', 'N/A'),
(631, 8, 3, 'RA Test', 'N/A', 'N/A'),
(632, 8, 2, 'CD99', 'N/A', 'N/A'),
(633, 8, 2, 'CD3', 'N/A', 'N/A'),
(634, 8, 2, 'C E A ', 'N/A', 'N/A'),
(635, 8, 13, 'USG OF W/A', 'N/A', 'N/A'),
(636, 8, 3, 'SDF', 'GDFG', 'DFG'),
(637, 8, 1, 'CBC, SGPT', '0', '0'),
(638, 8, 1, 'CBC, SGOT', '0', '0'),
(639, 8, 1, 'CBC, Creatinine', '0', '0'),
(640, 8, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_path_advice_group_name`
--

CREATE TABLE IF NOT EXISTS `tbl_path_advice_group_name` (
  `path_test_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path_test_group_name` varchar(200) NOT NULL,
  PRIMARY KEY (`path_test_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_path_advice_group_name`
--

INSERT INTO `tbl_path_advice_group_name` (`path_test_group_id`, `user_id`, `path_test_group_name`) VALUES
(1, 8, 'Haematology'),
(2, 8, 'Biochemistry'),
(3, 8, 'Serology'),
(4, 8, 'Immunology'),
(5, 8, 'Hormone'),
(6, 8, 'Urine '),
(7, 8, 'Stool'),
(8, 8, 'X-Ray'),
(9, 8, 'C.T Scan'),
(10, 8, 'MRI'),
(11, 8, 'Fluoroscopy'),
(12, 8, 'Mammography Modality'),
(13, 8, 'Ultrasound ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_patient_appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `cell_number` varchar(12) NOT NULL,
  `remarks` text NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_history_info`
--

CREATE TABLE IF NOT EXISTS `tbl_patient_history_info` (
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(100) NOT NULL,
  `current_date` date NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cc_name_id` int(11) NOT NULL,
  `complaint_duration` text NOT NULL,
  `complaint_timing` varchar(50) NOT NULL,
  `extra_complaint` text NOT NULL,
  `patieint_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `display` varchar(5) NOT NULL,
  PRIMARY KEY (`patieint_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_remarks`
--

CREATE TABLE IF NOT EXISTS `tbl_patient_remarks` (
  `patient_remarks_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `manual_pid` int(11) NOT NULL,
  `remarks_date` date NOT NULL,
  `remarks_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_remarks_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_history`
--

CREATE TABLE IF NOT EXISTS `tbl_personal_history` (
  `personal_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `personal_history_name` varchar(200) NOT NULL,
  PRIMARY KEY (`personal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_personal_history`
--

INSERT INTO `tbl_personal_history` (`personal_id`, `user_id`, `personal_history_name`) VALUES
(1, 8, 'Smooker '),
(2, 8, 'Non-smoker'),
(4, 8, 'Write Data');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_history_info`
--

CREATE TABLE IF NOT EXISTS `tbl_personal_history_info` (
  `personal_histor_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `personal_history_duration` varchar(200) NOT NULL,
  `personal_history_timing` varchar(100) NOT NULL,
  `extra_personal_history` varchar(100) NOT NULL,
  `current_date` date NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`personal_histor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharmaceuticals`
--

CREATE TABLE IF NOT EXISTS `tbl_pharmaceuticals` (
  `pharma_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pharma_name` varchar(200) NOT NULL,
  `cell_number` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mro_name` varchar(200) NOT NULL,
  `pharma_address` text NOT NULL,
  PRIMARY KEY (`pharma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `tbl_pharmaceuticals`
--

INSERT INTO `tbl_pharmaceuticals` (`pharma_id`, `user_id`, `pharma_name`, `cell_number`, `email_id`, `mro_name`, `pharma_address`) VALUES
(2, 1, 'A. H. Janakalyan Pharmaceuticals (waqf) ', '+880-2-9352', 'N/A', 'N/A', '67/5, Pioneer Road, Kakrail, Dhaka-1000, bangladesh.'),
(3, 1, 'Ablation Pharmaceuticals Ltd.', '+880-2-8119671, +880-2-8155298 ,+880-2-8130196', 'N/A', 'N/A', '16/2, Indira Road, (2nd floor) Dhaka - 1215, bangladesh. '),
(4, 1, 'ACI Ltd.', '+880-2-9885694', 'N/A', 'N/A', 'ACI Centre, 245, Tejgaon I/A, Dhaka-1212, bangladesh.'),
(5, 1, 'Acme Laboratories Ltd.', '+880-2-9004194, +880-2-9004195, +880-2-9004196', 'N/A', 'N/A', 'Court de la ACME, 1/4, Mirpur Road, Kallayanpur, Dhaka 1207, Bangladesh. '),
(6, 1, 'Ad-din pharmaceuticals Ltd.', '+880-2-9353391, +880-2-9353392,+880-2-9353393', 'N/A', 'N/A', '2,bara magbazar, dhaka-1217'),
(7, 1, 'Adco Pharmaceutical & Chemicals Ltd.', '+880-2-8627017', 'N/A', 'N/A', '6/1-B, Orphanage Road, Bakshibazar Dhaka - 1211, bangladesh. '),
(8, 1, 'Aexim Pharmaceutical Ltd.', '+880-2-8837402, +880-2-8819274, +880-2-8819276', 'N/A', 'N/A', 'House-197, Lane-1, New DOHS, Mohakhali, Dhaka-1206, bangladesh.'),
(9, 1, 'Al-Amin Laboratories Ltd.', '+880-2-8819276', 'N/A', 'N/A', 'Dhaka - 1206 House # 197,1st lane, Estern Road,New DOHS,Mohakhali Bangladesh . '),
(10, 1, 'Albert David (BD) Ltd.', '+880-2-8823435', 'N/A', 'N/A', '115/16 Tejgaon I/A, Dhaka - 1208, bangladesh. '),
(11, 1, 'Albion Laboratories Ltd.', '+880-3-1683260', 'N/A', 'N/A', 'Ban Goveshanager Road,Sholashahar ,Chittagong, bangladesh. '),
(12, 1, 'Alco Pharma Ltd', '+880-2-8825336, +880-2-8827673, ', 'N/A', 'N/A', 'House-21, Road-113/A, Gulshan-2, Dhaka-1212.'),
(13, 1, 'Ambee Pharmaceuticals Ltd.', '+880-2-8813991, +880-2-8813510', 'N/A', 'N/A', 'House-1, Road-71, Gulshan-2, Dhaka-1212. '),
(14, 1, 'Amico Laboratories Ltd.', '+880-2-8125656 +880-2-9137200', 'N/A', 'N/A', '12/13, Tajmahal Road, Mohammadpur, Dhaka-1207,Bangladesh.'),
(15, 1, 'APC Pharmaceuticals Ltd.', '+880-02-9357098', 'N/A', 'N/A', '222/2, Malibagh, Dhaka-1217. '),
(16, 1, 'Apcco Ltd.', '+880-2-9005302, +880-2-9005938', 'N/A', 'N/A', '1/1-2 Mirpur Industial Estate Zoo Road (See-1),Dhaka - 1216 ,Bangladesh '),
(17, 1, 'Apex Pharmaceuticals Ltd.', '+880-2-8856717, +880-2-9863026', 'N/A', 'N/A', 'House - 06, Road - 137; Block – SE (D), Gulshan-1, Dhaka-1212. '),
(18, 1, 'Apollo Pharmaceutical Laboratories Ltd.', '+880-2-8010747, +880-2-9001794', 'N/A', 'N/A', 'Plot No-10, Street-4,Section-7,Mirpur I/A , Dhaka – 1216, Bangladesh.'),
(19, 1, 'Aristopharma Ltd.', '+880-2-9351691, +880-2-9351692, +880-2-9351693', 'N/A', 'N/A', '7, Purana Paltan Line Dhaka-1000'),
(20, 1, 'Asiatic Laboratories Ltd.', '+880-2-8311355', 'N/A', 'N/A', '42-43 Siddeshwari Circular Road,Treasure Island (5th Floor),Shantinagar, Dhaka-1217, Bangladesh.'),
(21, 1, 'Beacon Pharmaceuticals Limited ', '+880-2-9888494, +880-2-9888176', 'N/A', 'N/A', 'Orion House, 153-154, Tejgaon I/A, Dhaka-1208.'),
(22, 1, 'Benham Pharmaceuticals Ltd', '+880-2-8321340, +880-2-8313298', 'N/A', 'N/A', 'TMC Building (2nd & 8th floor), 52, New Eskaton Road, Dhaka-1000. '),
(23, 1, 'Beximco Pharmaceuticals Ltd ', '  +880-2-8619151-5, +880-2-8619091-5', 'N/A', 'N/A', '19, Dhanmondi R/A, Road No. 7, Dhaka 1205.'),
(24, 1, 'Biogene Pharma Ltd.', '+880-2-9113954', 'N/A', 'N/A', '87, Shankar Chairmangoli, West Dhanmondi, Dhaka - 1207'),
(25, 1, 'Biopharma Laboratories Ltd', '+880-2-8157953, +880-2-8150928, +880-2-8159481', 'N/A', 'N/A', '7/16, Block-B, Lalmatia, Dhaka-1207, Bangladesh'),
(26, 1, 'Bristol Pharma Limited', '+880-2-8129426', 'N/A', 'N/A', '6/3, Block-B, Lalmatia, Dhaka-1207.'),
(27, 1, 'Central Pharmaceuticals Ltd', '+880-2-8615188, +880-2-8615911, ', 'N/A', 'N/A', 'House - 33, Road - 02, Dhanmondi, Dhaka - 1205'),
(28, 1, 'Chemist Laboratories Ltd.', '+880-2-9357916', 'N/A', 'N/A', '19/2, Eskaton Garden, Dhaka-1000.'),
(29, 1, 'Cosmic Chemical Industries Limited', '+880-2-8018395', 'N/A', 'N/A', '1/21,Block-k, Section-02, Rupnagor I/A,Mirpur,Dhaka-1216 '),
(30, 1, 'Cosmo Pharma Laboratories Ltd', '+880-2-9884899', 'N/A', 'N/A', 'House: 35/F, Road-4, Banani, Dhaka-1213.'),
(31, 1, 'd16 Pharma & Biotec', '+880-2-9004513, +880-1615809391', 'N/A', 'N/A', '320, Monipur Mollapara, Mirpur 2, Dhaka - 1216'),
(32, 1, 'Decent Pharma Laboratories Ltd.', '+880-2-8853192', 'N/A', 'N/A', 'H-B/125, Lane- 21, New Dohs, Mohakhali Dhaka'),
(33, 1, 'Delta Pharma Limited', '+880-2-9892192', 'N/A', 'N/A', 'H - 500, R - 34, New Dohs, Mohakhali Dhaka'),
(34, 1, 'Desh Pharmaceuticals (Pvt) Ltd', '+88-02-9349085', 'N/A', 'N/A', '27/1 New Eskaton Road, Dhaka-1000'),
(35, 1, 'Doctors Chemical Works Ltd', '+880-2-9558412, +880-2-9551981', 'N/A', 'N/A', '44, Dilkusha C/A, Dhaka-1000'),
(36, 1, 'Drug International Ltd', '+880-2-9662611', 'N/A', 'N/A', '17,Green Road, Dhaka - 1205'),
(37, 1, 'Edruc Limited', '+880-2-9345087, +880-2-9332157', 'N/A', 'N/A', '14, Bijoynagar, Dhaka-1000.'),
(38, 1, 'Elixir Pharmaceuticals Ltd ', '+880-1713082577', 'N/A', 'N/A', 'House-42, (2nd floor), Road-11, Sector-6, Uttara, Dhaka-1203'),
(39, 1, 'Eskayef Bangladesh Ltd ', '+880-2-8835758-61', 'N/A', 'N/A', '158, Kamal Ataturk Avenue, Block-E, Banani, Dhaka-1213'),
(40, 1, 'Essential Drugs Company Ltd', '+880-2-9130489, +880-2-9130490,  ', 'N/A', 'N/A', 'Ltd  395-397, Tejgaon Industrial Area, Dhaka – 1208.'),
(41, 1, 'Everest Pharmaceticals Ltd. ', '+880-2-7170241, +880-2-7171635', 'N/A', 'N/A', '7, Hare Street, Wari, Dhaka-1203, Bangladesh.'),
(42, 1, 'Gaco Pharmaceuticals Ltd', '+880-2-9557142, +880-2-9551405', 'N/A', 'N/A', '65, Dilkusha C/A, Dhaka-1000.'),
(43, 1, 'General Pharmaceuticals Ltd', '+880-2-9132594, +880-2-8120243', 'N/A', 'N/A', 'House: 48A , Road # 11A, Dhanmondi R/A , Dhaka 1209.'),
(44, 1, 'GlaxoSmithKline Bangladesh Limited', '+880-2-8858870, +880-2-8621312, +880-2-8626049', 'N/A', 'N/A', 'House-2A, Road-138, Gulshan-1, Dhaka-1212.'),
(45, 1, 'Globe Pharmaceuticals Ltd', '+880-2-8110460, +880-2-8128018, ', 'N/A', 'N/A', 'House-251-L, Road-13/A, Dhanmondi R/A, Dhaka-1209.'),
(46, 1, 'Globex Pharmaceuticals Ltd  ', '+880-2-7551173', 'N/A', 'N/A', 'Abbasuddin Complex, 88/3, North Jatrabari, Dhaka-1204.'),
(48, 1, 'Gonoshasthaya Pharmaceuticals Ltd', '+880-2-9660039, +880-2-8616723', 'N/A', 'N/A', 'House- 46, Road- 13/A, Dhanmondi R/A, Dhaka-1209.'),
(49, 1, 'Hallmark Pharmaceuticals Ltd', '+880-2-8115425, +880-2-9130917', 'N/A', 'N/A', 'Uttara Centre, 102, Shahid Tajuddin Ahmed Sarani, 13th Floor, Tejgaon I/A, Dhaka-1208.'),
(50, 1, 'Healthcare Pharmacuticals Ltd.', '+880-2-9360877, +880-2-8311190', 'N/A', 'N/A', '71-72 Old Elephant Road, Wage Earners Complex, Eskaton, Dhaka-1000'),
(51, 1, 'Hope Pharmaceuticals Ltd', '+880-2-9560835', 'N/A', 'N/A', '58/1, Purana Paltan, Dhaka - 1000.'),
(52, 1, 'Hudson Pharmaceuticals Ltd', '+880-2-9860543, +880-2-9896175', 'N/A', 'N/A', 'House No. # 157, Lane # 03, Eastern Road, New DOHS Mohakhali, Dhaka-1206.'),
(53, 1, 'Ibn Sina Pharmaceutical Ind. Ltd. ', '+880-2-9114710, +880-2-9117496, ', 'N/A', 'N/A', 'House #41, Road #10/A Dhanmondi R/A, Dhaka-1209'),
(54, 1, 'Indo Bangla Pharmaceutical Works', 'Not found !', 'N/A', 'N/A', 'House: 14, Road:4, Dhanmondi R/A, Dhaka 1205'),
(55, 1, 'Innova Pharmaceuticals Ltd.', '+880-2-9004315, +880-2-8013118', 'N/A', 'N/A', 'Ltd.  Plot # 24,Main Road # 1 Section-6 / Ka, Mirpur,Dhaka'),
(56, 1, 'Jalalabad Pharmaceuticals Ltd', '183, Green Road, Dhaka - 1205.', 'N/A', 'N/A', '+880-2-8128434'),
(57, 1, 'Jams Pharmaceuticals Ltd.', '+880-2-8019270', 'N/A', 'N/A', 'ams Tower, Section-7, Mirpur, Dhaka - 1216.'),
(58, 1, 'Janasheba Pharmaceuticals Ltd ', '+880-2-8015438', 'N/A', 'N/A', '7/4 Bara Bag, Mirpur-2, Dhaka - 1216.'),
(59, 1, 'ayson Pharmaceuticals Ltd', '+880-1711823423', 'N/A', 'N/A', 'House-5/9, Block-A, Lalmatia, Dhaka-1207'),
(60, 1, 'JMI Pharma Ltd.', '+880-2-9346630, +880-2-9333102, ', 'N/A', 'N/A', '7/A, Shantibag, Dhaka 1217'),
(61, 1, 'Kafma Pharmaceuticals Ltd', '+880-2-9560005', 'N/A', 'N/A', '260/2, Malibagh, Dhaka-1217.'),
(62, 1, 'Kapricorn Enterprise Ltd.', '+880-2-9561030, +880-2-9571705', 'N/A', 'N/A', 'Moni Sinha-Fahad Bhaban(4th floor), 21/2, Purana Paltan, Dhaka-1000'),
(63, 1, 'Kemiko Pharmaceuticals Ltd', '+880-2-8313561, +880-2-9347725', 'N/A', 'N/A', '338, Segun Bagicha, Dhaka-1000.'),
(64, 1, 'Kumudini Pharma Ltd', '+880-2-8822778', 'N/A', 'N/A', 'Kumudini Welfare Trust Of Bengal (BD) Ltd., 74 ,Gulshan Avenue, Gulshan, Dhaka-1212.'),
(65, 1, 'Libra Infusions Ltd', '+880-2-9001179, +880-2-9004770-1, ', 'N/A', 'N/A', '1/7, Mirpur I/E, Rupnagar, Section-2, Dhaka-1216.'),
(66, 1, 'Libra Pharmaceuticals Ltd', '+880-2-9001179, +880-2-9004770-1, ', 'N/A', 'N/A', '1/7, Mirpur I/E, Rupnagar, Section-2, Dhaka-1216.'),
(67, 1, 'Marksman Pharmaceuticals Ltd', '+880-2-8818922, +880-2-8856924', 'N/A', 'N/A', 'Plot-06, Road-113/A, Gulshan, Dhaka-1212'),
(68, 1, 'Medicon Laboratories Ltd', '+880-2-9554901, +880-2-9566580', 'N/A', 'N/A', '44, Purana Paltan, Dhaka-1000.'),
(69, 1, 'Medimet Pharmaceuticals Ltd', '+880-2-9351796, +880-2-9351774, ', 'N/A', 'N/A', '13 (77), Bijoynagar, Segun Bagicha, Dhaka-1000.'),
(70, 1, 'Millat Pharmaceuticals Ltd', '+880-2-9891630, +880-2-8855181, +880-2-8857304', 'N/A', 'N/A', 'Nabasrista, Plot No. 1, Tejgaon I/A Dhaka-1208.'),
(71, 1, 'Modern Pharmaceuticals Ltd', '+880-2-7160459, +880-2-7161257', 'N/A', 'N/A', '51/51-A, Purana Paltan, Dhaka-1000.'),
(72, 1, 'Monico Pharma Limited', '+880-2-8152910, +880-2-8159551, +880-2-9145261', 'N/A', 'N/A', '89/1, Road-12/A, Dhanmondi R/A, Dhaka-1209'),
(73, 1, 'Mystic Pharmaceuticals Ltd', '+880-2-9124110', 'N/A', 'N/A', '2/3, Shahjahan Road, Mohammadpur, Dhaka.'),
(74, 1, 'Navana Pharmaceuticals Ltd', '+880-2-9557410, +880-2-9562714, +880-2-7160411', 'N/A', 'N/A', '3/C Purana Paltan, Dhaka-1000'),
(75, 1, 'Nipa Pharmaceuticals Ltd', '+880-2-8111832, +880-2-8121504', 'N/A', 'N/A', '10/16, Iqbal Road, Block-A, Mohammadpur, Dhaka-1207'),
(76, 1, 'Novartis (Bangladesh) Ltd', '+880-2-8615302-8', 'N/A', 'N/A', 'House-50, Road-2/A, Dhanmondi R/A, Dhaka-1209.'),
(77, 1, 'Novo Healthcare and Pharma Ltd', '+880-2-8055455, +880-2-8057141', 'N/A', 'N/A', 'Plot # 2, Road # 11, Block # C Section # 6 , Mirpur Dhaka-1216'),
(78, 1, 'Novo Nordisk Pharma (Private) Ltd.', '+880-2-9893701', 'N/A', 'N/A', 'House # 26, Block # G, Road # 7, Banani, Dhaka – 1213'),
(79, 1, 'Nuvista Pharma Ltd', '+880-2-8919811', 'N/A', 'N/A', 'Mascot Plaza, 8th Floor, 107/A, Sonargaon Janapath, Sector – 7, Uttara C.A, Dhaka – 1230'),
(80, 1, 'Opso Saline Ltd ', '+880-2-9330191, +880-2-9357244, +880-2-9333294', 'N/A', 'N/A', '37, Segun Bagicha, Dhaka-1000.'),
(81, 1, 'Opsonin Pharma Ltd', '+880-2-9332262, +880-2-9356451, ', 'N/A', 'N/A', '30, New Eskaton Road, Dhaka-1000.'),
(82, 1, 'Orion Infusion Ltd', '+880-2-8822543, +880-2-9888494, +880-2-9888176', 'N/A', 'N/A', 'Orion House, 153-154, Tejgaon Industrial Area, Dhaka-1208.'),
(83, 1, 'Orion Pharma Ltd', '+880-2-9888494, +880-2-9888176', 'N/A', 'N/A', 'Orion House, 153-154, Tejgaon Industrial Area, Dhaka-1208.'),
(84, 1, 'Pacific Pharmaceuticals Ltd ', '+880-2-7174607-10 ', 'N/A', 'N/A', '5, Nawab Street, Wari, Dhaka-1203.'),
(85, 1, 'Peoples Pharma Ltd ', '+880-2-8113090, +880-2-8121657, +880-2-8129531 ', 'N/A', 'N/A', 'ARA Mansion (2nd Floor), 39, Kazi Nazrul Islam Avenue, Karwan Bazar, Dhaka-1215'),
(86, 1, 'Pharmaco International Ltd ', '+880-2-8835980, +880-2-8835062 ', 'N/A', 'N/A', 'House- 259, Lane-19, Lake Road, New DOHS, Mohakhali, Dhaka-1206.'),
(87, 1, 'Pharmadesh Laboratories Ltd ', '+880-2-9330048-49', 'N/A', 'N/A', '334, Segun Bagicha, Dhaka-1000.'),
(88, 1, 'Pharmasia Limited ', '+880-2-8614271', 'N/A', 'N/A', 'Sonartori Tower (10th Floor), 12, Sonargaon Road, Dhaka-1000.'),
(89, 1, 'Popular Pharmaceuticals Ltd ', '+880-2-9128976, +880-2-9101730-32, +880-2-9102850-53', 'N/A', 'N/A', 'Sheltech Panthokunjo, 17 Shukrabad, West Panthopath, Dhaka 1207'),
(90, 1, 'Proteety Pharmaceuticals Ltd ', '+880-2-9881032', 'N/A', 'N/A', 'House-214, Lane-13, Lake Road, New DOHS, Mohakhali. Dhaka-1206.'),
(91, 1, 'R A K Pharmaceuticals Pvt. Ltd', '+880-2-8963772, +880-2-8958319, +880-2-8931037', 'N/A', 'N/A', 'RAK tower(10th floor), plot-1/A, Jasimuddin Avenue, Sector-3, Uttara, Dhaka-1230'),
(92, 1, 'Radiant Pharmaceuticals Ltd', '+880-2-8611661 ', 'N/A', 'N/A', '22/1,Dhanmondi,Road 2, Dhaka 1205,Bangladesh '),
(93, 1, 'Rangs Pharmaceuticals Ltd  ', 'Not found !', 'N/A', 'N/A', 'Wage Earners Complex, 71-72 Elephant Road, Eskaton, Dhaka-1000'),
(94, 1, 'Rasa Pharmaceuticals Ltd', '+880-2-9881213 ', 'N/A', 'N/A', 'House-435, Road-30, New DOHS, Mohakhali, Dhaka-1206.'),
(95, 1, 'Reman Drug Laboratories Ltd ', '+880-2-9887209', 'N/A', 'N/A', 'Plot-2 (B), Block- C, Road-138, Ghulshan-1, Dhaka-1212'),
(96, 1, 'Remedy Pharmaceuticals Ltd', '+880-2-8837325', 'N/A', 'N/A', 'House#247, Road#18, New DOHS, Mohakhali, Dhaka-1206.'),
(97, 1, 'Renata Ltd', '+880-2-8011012, +880-2-8011013', 'N/A', 'N/A', 'Plot No. 1, Milk Vita Road, Section-7, Mirpur, Dhaka-1216'),
(98, 1, 'Rephco Laboratories Ltd', '+880-2-9334721-5', 'N/A', 'N/A', '18, Dilu Road, New Eskaton, Dhaka-1000.'),
(99, 1, 'Roche Bangladesh Ltd', '+880-2-9661774-6 ', 'N/A', 'N/A', 'House-22, Road-2, Dhanmondi, Dhaka-1205.'),
(100, 1, 'Salton Pharmaceuticals Ltd', '+880-2-8129839, +880-2-8139732 ', 'N/A', 'N/A', '152/1, Green Road, Dhaka-1205. '),
(101, 1, 'Sanofi-aventis Bangladesh Limited', '+880-2-9562893', 'N/A', 'N/A', '6/2/A, Segun Bagicha, Dhaka-1000'),
(102, 1, 'Seema Pharmaceuticals Ltd', '+880-2-9885958, +880-2-9860606', 'N/A', 'N/A', 'House-146, Road-4, New DOHS, Mohakhali, Dhaka-1206.'),
(103, 1, 'Servier Bangladesh', '+880-2-8060842-3', 'N/A', 'N/A', 'Grameen Bank Bhaban (15th floor), Mirpur-2, Dhaka-1216.'),
(104, 1, 'Shamsul Alamin Pharmaceuticals Ltd', '+880-2-9567837, +880-2-9564507, +880-2-9567840 ', 'N/A', 'N/A', 'Alamin Centre, 25/A, Dilkusha C/A, Dhaka-1000.'),
(105, 1, 'Sharif Pharmaceuticals Ltd', 'Not found !', 'N/A', 'N/A', 'House: 15 C(new), Road: 15(new) 33(old), Dhanmondi R/A, Dhaka-1209'),
(106, 1, 'Silco Pharmaceuticals Ltd', '+880-821-710914, +880-821- 722241', 'N/A', 'N/A', '41, Nurani, Bankalapara, Subidbazar, Sylhet. '),
(107, 1, 'Silva Pharmaceuticals Ltd', '+880-2-8129915, +880-2-9146009', 'N/A', 'N/A', 'House-65, Road-8/A, Dhanmondi R/A, Dhaka-1209.'),
(108, 1, 'Skylab Pharmaceuticals Ltd', '+880-2-7117260, +880-1711890167-68', 'N/A', 'N/A', '23, Larmini Street, Wari, Dhaka-1203.'),
(109, 1, 'Somatec Pharmaceuticals Ltd', '+880-2-9337667, +880-2-9357827', 'N/A', 'N/A', '28/B, Segun Bagicha, Dhaka-1000, Bangladesh'),
(110, 1, 'Sonear Laboratories Ltd', '+880-2-9563761-2', 'N/A', 'N/A', '11/3, Toynbee Circular Road, Motijheel C/A, Dhaka-1000.'),
(111, 1, 'Square Pharmaceuticals Ltd', '+880-2-8859007, +880-2-8833047 - 56', 'N/A', 'N/A', 'Square Centre, 48, Mohakhali C/A, Dhaka-1212. '),
(112, 1, 'Sun Pharmaceutical (Bangladesh) Ltd', '+880-2-8819515, +880-2-8850087 ', 'N/A', 'N/A', 'House-4, Road- 16A, Gulshan-l, Dhaka-1212.'),
(113, 1, 'Sunypun Pharmaceuticals & Chemicals Ltd', 'Not found !', 'N/A', 'N/A', 'House#407, Road#5, Baitul Aman Housing Society, Adabar, Dhaka-1207. '),
(114, 1, 'Supreme Pharmaceuticals Ltd', '+880-2-8156577, +880-2- 9114813', 'N/A', 'N/A', 'House-38/1, Road-16 (New), Dhanmondi R/A, Dhaka-1209.'),
(115, 1, 'Syntho Laboratories Ltd', '+880-2-9667430, +880-2-9667406 ', 'N/A', 'N/A', 'House-20, Road-5, Dhanmondi, Dhaka-1205'),
(116, 1, 'Tajarat Health Care ', '+880-2-9569228–9, +880-2-9667178–9', 'N/A', 'N/A', 'Saleh Shadan (3rd & 4th Floor), 145, Motijheel C/A, Dhaka-1000.'),
(117, 1, 'Techno Drugs', '+880-2-9354798, +880-2-9331100', 'N/A', 'N/A', '31, Segun Bagicha, Dhaka-1000.'),
(118, 1, 'The White Horse Pharma', '+880-2-9563095, +880-2-9571910 ', 'N/A', 'N/A', '67, Dilkusha C/A (4th Floor), Dhaka-1000.'),
(119, 1, 'Ultra Pharma Ltd', '+880-2- 9346271, +880-1911357610', 'N/A', 'N/A', '30, Bijoy Nagar (3rd Floor), Dhaka-1000, Bangladesh.'),
(120, 1, 'Unimed & Unihealth Manufacturers Ltd', '+880-2-9128192-3, +880-2-8120718', 'N/A', 'N/A', '5/8, Block-C, Lalmatia, Dhaka-1207'),
(121, 1, 'Zenith Pharmaceuticals Ltd', '+880-2-7176357, +880-2-7172980 ', 'N/A', 'N/A', '42, Dilkusha C/A (5th Floor). Dhaka-1000.'),
(122, 1, 'Ziska Pharmaceuticals Ltd', '+880-2-9333991, +880-2-9359641', 'N/A', 'N/A', 'Nurul Tower (4th and 5th Floor), 34 Purana Paltan Line, Dhaka-1000, Bangladesh.'),
(123, 1, 'Zuellig Pharma Bangladesh Limited', '+880-2-988 4454', 'N/A', 'N/A', 'Star Center, 5th floor, House # 2A, Road # 138, Gulshan-1, Dhaka-1212.'),
(124, 1, 'Opsonin Pharma Ltd', '+880-2-9356533, +880-2-9357023', 'N/A', 'N/A', '30, New Eskaton Road, Dhaka-1000.'),
(125, 1, 'Alco Pharma Ltd', '+880-2-8826103, +880-2-8815856', 'N/A', 'N/A', 'House-21, Road-113/A, Gulshan-2, Dhaka-1212.'),
(126, 1, 'JMI Pharma Ltd.', '+880-2-9356903, +880-2-9346978', 'N/A', 'N/A', '7/A, Shantibag, Dhaka 1217'),
(127, 1, 'Central Pharmaceuticals Ltd', '+880-2-8631045, +880-2-9663610', 'N/A', 'N/A', 'House - 33, Road - 02, Dhanmondi, Dhaka - 1205'),
(128, 1, 'Essential Drugs Company Ltd', '+880-2-9130036, +880-2-8113463,', 'N/A', 'N/A', '395-397, Tejgaon Industrial Area, Dhaka – 1208.'),
(129, 1, 'Globe Pharmaceuticals Ltd', '+880-2-9140848, +880-2-9121562', 'N/A', 'N/A', 'House-251-L, Road-13/A, Dhanmondi R/A, Dhaka-1209.'),
(130, 1, 'Ibn Sina Pharmaceutical Ind. Ltd. ', '+880-2-9138617, +880-2-9132521', 'N/A', 'N/A', 'House #41, Road #10/A Dhanmondi R/A, Dhaka-1209'),
(131, 1, 'Medimet Pharmaceuticals Ltd', '+880-2-9357624, +880-2-8351098', 'N/A', 'N/A', '13 (77), Bijoynagar, Segun Bagicha, Dhaka-1000.'),
(134, 1, 'ssss', '02983874848', 'mdbijon@gmail.com', 'bijon', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_physical_findings`
--

CREATE TABLE IF NOT EXISTS `tbl_physical_findings` (
  `physical_examination_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `height` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `weightkg` varchar(100) NOT NULL,
  `systolic` varchar(200) NOT NULL,
  `diastolic` varchar(200) NOT NULL,
  `bsa` varchar(200) NOT NULL,
  `current_date` date NOT NULL,
  `others_information` varchar(200) NOT NULL,
  `custom_phy_findings_id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`physical_examination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_physical_findings_multiple_data`
--

CREATE TABLE IF NOT EXISTS `tbl_physical_findings_multiple_data` (
  `physical_finds_multiple_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `custom_phy_findings_id` int(11) NOT NULL,
  `phy_fin_value` varchar(200) NOT NULL,
  `others_information` varchar(200) NOT NULL,
  PRIMARY KEY (`physical_finds_multiple_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription_patient_info`
--

CREATE TABLE IF NOT EXISTS `tbl_prescription_patient_info` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `manual_pid` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(100) CHARACTER SET utf8 NOT NULL,
  `age` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cell_number` varchar(200) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `current_date` date NOT NULL,
  `visiting_no` varchar(20) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_protocol_cycle`
--

CREATE TABLE IF NOT EXISTS `tbl_protocol_cycle` (
  `protocol_cycle_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `cycle_no` tinyint(4) NOT NULL,
  `cycle_date_one` date NOT NULL,
  `cycle_date_two` date NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`protocol_cycle_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_protocol_cycle`
--

INSERT INTO `tbl_protocol_cycle` (`protocol_cycle_id`, `user_id`, `patient_id`, `manual_pid`, `visiting_no`, `current_date`, `cycle_no`, `cycle_date_one`, `cycle_date_two`, `remarks`) VALUES
(1, 8, 1, '14100', 1, '2014-10-15', 1, '2014-10-15', '2014-10-15', ''),
(2, 8, 1, '14100', 8, '2014-10-15', 2, '2014-10-16', '2014-10-24', ''),
(3, 8, 3, '140003', 1, '2014-10-20', 1, '2014-10-01', '2014-10-20', ''),
(4, 8, 1, '140001', 14, '2014-10-23', 1, '2014-10-22', '2014-10-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_protocol_help`
--

CREATE TABLE IF NOT EXISTS `tbl_protocol_help` (
  `protocol_help_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `custom_chemotherapy_regmine_id` int(11) NOT NULL,
  `cycle` text NOT NULL,
  `next_cycle` text NOT NULL,
  `current_date` date NOT NULL,
  PRIMARY KEY (`protocol_help_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_radiology_report`
--

CREATE TABLE IF NOT EXISTS `tbl_radiology_report` (
  `radiology_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `test_id` varchar(200) NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(100) NOT NULL,
  `report_description` text NOT NULL,
  `path_test_group_id` int(11) NOT NULL,
  `test_name` varchar(300) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`radiology_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remarks`
--

CREATE TABLE IF NOT EXISTS `tbl_remarks` (
  `remarks_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`remarks_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_remarks`
--

INSERT INTO `tbl_remarks` (`remarks_id`, `user_id`, `remarks`) VALUES
(2, 8, 'Death'),
(3, 8, 'Birth'),
(4, 8, 'Good Condition'),
(5, 8, 'Nothing'),
(6, 8, 'test data');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stool_re`
--

CREATE TABLE IF NOT EXISTS `tbl_stool_re` (
  `stool_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `test_id` varchar(100) NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `sugur` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `consistency` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `str_and_sterobili` varchar(100) NOT NULL,
  `un_fp` varchar(100) NOT NULL,
  `ordor` varchar(100) NOT NULL,
  `mucus` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `helminth` varchar(100) NOT NULL,
  `obt` varchar(100) NOT NULL,
  `reaction` varchar(100) NOT NULL,
  `rs` varchar(100) NOT NULL,
  `fat` varchar(100) NOT NULL,
  `ova_al` varchar(100) NOT NULL,
  `bilirubin` varchar(100) NOT NULL,
  `b_jons_protein` varchar(100) NOT NULL,
  `vege_cell` varchar(100) NOT NULL,
  `epithe_cells` varchar(100) NOT NULL,
  `puss_cell` varchar(100) NOT NULL,
  `rbc` varchar(100) NOT NULL,
  `macrophages` varchar(100) NOT NULL,
  `muscle_fibre` varchar(100) NOT NULL,
  `fat_globules` varchar(100) NOT NULL,
  `starch_granules` varchar(100) NOT NULL,
  `cl_crystals` varchar(100) NOT NULL,
  `bacteria` varchar(100) NOT NULL,
  `troph_giardia` varchar(100) NOT NULL,
  `larva_of` varchar(100) NOT NULL,
  `cyst_of_giardia` varchar(100) NOT NULL,
  `cyst_of_col` varchar(100) NOT NULL,
  `t_hominis` varchar(100) NOT NULL,
  `blas_homins` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `fusifo_bacili` varchar(100) NOT NULL,
  `candida` varchar(100) NOT NULL,
  `extra_stool` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`stool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_strength`
--

CREATE TABLE IF NOT EXISTS `tbl_strength` (
  `strength_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `strength_name` varchar(200) NOT NULL,
  PRIMARY KEY (`strength_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_strength`
--

INSERT INTO `tbl_strength` (`strength_id`, `user_id`, `strength_name`) VALUES
(1, 1, '10 mg'),
(2, 1, '15 mg'),
(3, 1, '20 mg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_systolic_information`
--

CREATE TABLE IF NOT EXISTS `tbl_systolic_information` (
  `new_systolic_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(265) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `custom_phy_findings_systolic_id` int(11) NOT NULL,
  `systolic_value` varchar(200) NOT NULL,
  `extra_systolic` text NOT NULL,
  `new_systolic` varchar(200) NOT NULL,
  PRIMARY KEY (`new_systolic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_urine_re`
--

CREATE TABLE IF NOT EXISTS `tbl_urine_re` (
  `urine_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `test_id` varchar(100) NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(100) NOT NULL,
  `current_date` date NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `apper` varchar(100) NOT NULL,
  `sediment` varchar(100) NOT NULL,
  `spe_grav` varchar(100) NOT NULL,
  `ep_cell` varchar(100) NOT NULL,
  `reaction` varchar(100) NOT NULL,
  `ex_ph` varchar(100) NOT NULL,
  `albumin` varchar(100) NOT NULL,
  `b_jons_protein` varchar(100) NOT NULL,
  `sugur` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `acetone` varchar(100) NOT NULL,
  `pus_cells` varchar(100) NOT NULL,
  `rbcs` varchar(100) NOT NULL,
  `mucus` varchar(100) NOT NULL,
  `pus_cast` varchar(100) NOT NULL,
  `sperat` varchar(100) NOT NULL,
  `urobili` varchar(100) NOT NULL,
  `wbc` varchar(100) NOT NULL,
  `granuloar` varchar(100) NOT NULL,
  `cal_oxa` varchar(100) NOT NULL,
  `uric_acid` varchar(100) NOT NULL,
  `tre_phs` varchar(100) NOT NULL,
  `sulph_cry` varchar(100) NOT NULL,
  `chyle` varchar(100) NOT NULL,
  `hayline_cast` varchar(100) NOT NULL,
  `bile_salt` varchar(100) NOT NULL,
  `bile_pig` varchar(100) NOT NULL,
  `bacteria` varchar(100) NOT NULL,
  `candida` varchar(100) NOT NULL,
  `amr_ph` varchar(100) NOT NULL,
  `urate_crys` varchar(100) NOT NULL,
  `extra_urine` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`urine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cell_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `type`, `name`, `cell_number`, `email`, `password`, `address`, `date`) VALUES
(8, 'admin', 'Md. Bijon Ahmed', '01915728982', 'admin', '123', 'Dhaka', '2014-08-31'),
(9, 'user', 'Rashel', '01915728983', 'user', '123', 'Dhaka', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usg`
--

CREATE TABLE IF NOT EXISTS `tbl_usg` (
  `usg_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `manual_pid` varchar(200) NOT NULL,
  `visiting_no` int(3) NOT NULL,
  `current_date` date NOT NULL,
  `test_id` varchar(200) NOT NULL,
  `reciv_date` date NOT NULL,
  `deli_date` varchar(200) NOT NULL,
  `report_description` text NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`usg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visit_counting`
--

CREATE TABLE IF NOT EXISTS `tbl_visit_counting` (
  `visit_couting_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visiting_no` int(11) NOT NULL,
  `patient_name` varchar(256) NOT NULL,
  `current_date` date NOT NULL,
  `manual_pid` varchar(255) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `cell_number` varchar(25) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`visit_couting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
