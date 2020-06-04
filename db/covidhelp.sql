-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 02:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidhelp`
--
CREATE DATABASE IF NOT EXISTS `covidhelp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `covidhelp`;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ticket_no` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ticket_no`, `name`, `email`, `comment`) VALUES
(1, 'Mania', 'navjot@gmail.com', 'Qwerty'),
(2, 'Navjot', 'nv@gmail.com', 'Hey I want to meet you');

-- --------------------------------------------------------

--
-- Table structure for table `helprequests`
--

CREATE TABLE `helprequests` (
  `help_id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helprequests`
--

INSERT INTO `helprequests` (`help_id`, `name`, `email`, `phone`, `address`, `subject`, `status`) VALUES
(1, 'Navi', 'n@gmail.com', '1234567890', 'qwerty', '12345678', 1),
(2, 'Mania', 'demo@gmail.com', '1234567890', 'ASDFGHJKL:', 'bhola baba', 1),
(3, 'aaa', 'navjot@gmail.com', '7117859668', 'asdfg', 'asdfghjkl', 1),
(4, 'aaa', 'n@gmail.com', '12345678907', 'asw', 'asw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pincode` int(7) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `pincode`, `contact`, `address`) VALUES
(1, 'Aruna Asaf Ali Govt,Hospital', 110054, '23965532,23831524', 'Rajpur Road, New Delhi,  Fax-23922333'),
(3, 'Acharyaashree Bhikshui', 110015, '25423011 \r\n', 'Moti Nagar, New Delhi,Fax- 25448806'),
(4, 'Attar Sain Jain Hospital', 110035, '27153357 \r\n\r\n', 'Lawrence Road, New Delhi, Fax- 27106441'),
(5, 'Baba Saheb Ambedkar Hospital', 110085, '27055585\r\n', 'Sector 6, Rohini, New Delhi, Fax- 27058108'),
(6, 'Bhagwan Mahavir Hospital', 110034, '27034535\r\n', 'Pitam Pura, New Delhi, Fax-27033948'),
(7, 'Babu Jagjivan Ram Hospital', 110033, '27631810\r\n ', 'Jahangir Puri, New Delhi, Fax- 27631610'),
(8, 'Central Jail Hospital', 110064, 'NA', 'Jali Road, Hari Nagar, New Delhi'),
(9, 'Chacha Nehru Bal Chikitsalaya', 110031, '21210215,2120216\r\n\r\n', 'Geeta Colony, New Delhi, Fax-21210203'),
(10, 'Dadadev Mother & Child Hospital', 110018, '25395536 \r\n', 'Nasirpur Near Dabrimore Janakpuri, New Delhi, Fax- 25395542'),
(11, 'Deen Dayal Upadhyay Hospital', 110064, '25494337\r\n', 'Hari Nagar, New Delhi, Fax- 25494264'),
(12, 'Deep Chand Bandhu Hospital', 110052, 'NA', 'Kokiwala Bagh,Ashok Vihar,Phase-IV,New Delhi'),
(13, 'Delhi State Cancer Institution', 110095, 'NA', 'GTB Hospital Complex, Shahadara, New Delhi'),
(14, 'Dr. Hedgewar Arogya Sansthan', 110032, '22393155\r\n\r\n', 'karkardooma, New Delhi, Fax- 22393354'),
(15, 'Dr. N.C. Joshi Hospital', 110005, '23611786\r\n\r\n', 'Karol Bagh, New Delhi, Fax-23523677'),
(16, 'Govind Ballabh Pant Hospital (G.B.P.H.)', 110002, '23238109,23237254\r\n\r\n', 'Jawahar Lal Nehru Marg, New Delhi, Fax- 23239442'),
(17, 'Guru Govind Singh Govt. Hospital', 110027, '25984549,25988532\r\n\r\n', 'Raghubir Nagar, New Delhi, Fax- 25989417'),
(18, 'Guru Nanak Eye Center', 110002, ' 23236931 \r\n', 'Maharaja Ranjit Singh Marg, New Delhi, Fax- 23230033'),
(19, 'Guru Teg Bahadur Hospital (G.T.B.H.)', 110095, '22581730 Fax-22581928\r\n', 'Shahdara, New Delhi, Fax- 22581928'),
(20, 'Institute of Liver & Biliary Sciences (I.L.B.S.)', 110057, 'NA', 'Vasant Kunj, New Delhi'),
(21, 'Institute of Human Behaviour and Allied Sciences ', 110095, '22112136, 22583322\r\n', 'Tahirpur Road, SDN Hospital Rd, Dilshad Garden, Delhi'),
(22, 'Janakpuri Super Speciality Hospital', 110058, 'NA', 'Janakpuri, Delhi'),
(23, 'Lal Bahadur Shastri Hospital (L.B.S.)', 110091, '22774145 \r\n\r\n', 'Khichri Pur, New Delhi, Fax- 22786808'),
(24, 'Lok Nayak Hospital', 110002, '23236000, 23232400\r\n\r\n', 'Jawahar Lal Nehru Marg, New Delhi, Fax-23232870'),
(25, 'Maharishi Balmiki Hospital', 110039, '27761521', 'Pooth Khurd, Delhi, Fax- 27761522'),
(26, 'Pt. Madan Mohan Malviya Hospital', 110017, '26680603, 26674757\r\n', 'Malviya Nagar, New Delhi'),
(27, 'Maulana Azad Institute of Dental Sciences', 110002, 'M.A.M.C. J.L. Nehru Marg,23233925, 23239271-76\r\n', ''),
(28, 'Poor House Hospital', 110009, 'Beggers Home G.T.B.Ngr ', ''),
(29, 'Rajiv Gandhi Super Speciality Hospital', 110064, 'Tahirpur,', ''),
(30, 'Rao Tula Ram Memorial Hospital', 110073, 'Jaffar Pur,25318444, Fax-25318012 25318070', ''),
(31, 'Sardar Vallabh Bhai Patel Hospital', 110008, 'Patel Nagar,25885944 Fax-25881396\r\n', ''),
(32, 'Satyawadi Raja Harish Chandra Hospital', 110040, 'Narela,27787304; 27787305(Fax)\r\n', ''),
(33, 'Sanjay Gandhi Memorial Hospital', 110083, 'Mangol Puri,27921117 Fax-27924403', ''),
(34, 'Jag Parvesh Chander Hospital', 110031, 'Shastri Park,22184453 Fax-22184455\r\n', ''),
(35, 'Ayurvedic & Unani Tibbia College & Hospital', 110005, 'Ajmal Khan Park, Karol Bagh,23629013\r\n\r\n', ''),
(36, 'B R Sur Homeopathic Medical College', 110021, 'Nanakpura, Moti Bagh, 24105298\r\n', ''),
(37, 'Nehru Homeopathic Medical College', 110024, 'B-Block, Defence Colony,24331193\r\n', ''),
(38, 'Chaudhary Brahm Prakash Ayurved Charak Sansthan', 110073, 'Vill. Khera Dabar, Najafgarh,65172030\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pincode` int(7) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `field` varchar(20) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `pincode`, `address`, `contact`, `field`, `website`) VALUES
(1, 'ABHINAV SAMAJ', 110059, 'R-10,Old Uttam Nagar', '9810901970', 'children', 'https://abhinavsamaj.org/'),
(2, 'Action For Autism', 110025, 'Pocket 7 & 8, Jasola Vihar', '1140540991', 'children', 'http://www.autism-india.org/'),
(3, 'Agrani India Foundation', 110065, 'D-134, First Floor, East of Kailash, New Delhi', '1126217460', 'Education', 'http://agrani.org/'),
(4, 'CanSupport', 110049, 'A-2 , Gulmohar Park (Opp Kamla Nehru College), New Delhi', '1141010537', 'Health & Family Welf', 'https://cansupport.org/'),
(5, 'Care Village Foundation', 110041, 'D92, Loknayakpuram Bakkarwala, Mundka, New Delhi', '9350004647', 'Labour & Employment', 'https://www.cvfindia.org/'),
(6, 'Center For Social Security Action & Research', 110058, '429, 3rd floor, Rajendra Arihant Tower, B-1, , Community Cen', '9968246139', 'Education', 'https://www.cssar.org/'),
(7, 'Childhood Enhancement Through Training and Action', 110049, 'CHETNA, 40/22 Manohar Kunj, , Gautam Nagar, New Delhi', '1141644471', 'Education', 'https://chetnango.org/'),
(8, 'Chintan Environmental Research And Action Group', 110024, 'C-14, Second Floor, Lajpat Nagar III, New Delhi, Delhi', '1146574171', 'Environment', 'http://www.chintan-india.org/'),
(9, 'Concern India Foundation', 110024, 'A-52, Amar Colony,, 1st Floor, Lajpat Nagar - 4, New Delhi', '1126472349', 'Education & Literacy', 'http://www.concernindiafoundation.org/'),
(10, 'Creatnet Education', 110019, 'K-1998, 2nd floor, Chittranjan Park, New Delhi', '9810815105', 'Education', 'http://creatnet.org/'),
(11, 'Etasha Society', 110048, 'E- 48, Greater Kailash 2 Enclave, New Delhi', '1129221320', 'Labour & Employment', 'https://etashasociety.org/index.html'),
(12, 'Fxb India Suraksha', 110019, 'D - 60, second floor., Kalkaji, New Delhi', '1149203350', 'Children', 'https://fxbsuraksha.in/'),
(13, 'Healthy Aging India', 110016, 'T-33, 1st Floor, Green Park, , New Delhi', '8076548356', 'Health & Family Welf', 'http://www.healthyagingindia.com/'),
(14, 'Helping Hand India Ngo', 110063, 'A5/85A, Paschim Vihar, New Delhi, Delhi', '9582291326', 'Education & Literacy', 'http://helpinghandindiango.org/'),
(15, 'Hemophilia Federation India', 110066, 'A-128 Mohammadpur, Behind Bhikaji Cama Place, Behind Bhikaji', '1141552819', 'Children', 'https://www.hemophilia.in/'),
(16, 'Hopefoundation', 110056, 'A46, New Multan Nagar, Surya Enclave, Opp. Paschim Vihar', '9381046671', 'Aged/Elderly', 'https://hopefoundation.org.in/'),
(17, 'Humana People to People India', 110070, '111/9-Z, Kishangarh, Aruna Asaf Ali Marg, Vasant Kunj', '1147462222', 'Human Rights', 'https://www.humana-india.org/'),
(18, 'Indus Action', 110003, 'K-112, B K Dutt Colony,, Jor Bagh Road, New Delhi,', '1139595925', 'Education', 'https://www.indusaction.org/'),
(19, 'Ipartner India', 110017, 'B-117 Sarvodaya Enclave, Second Floor, New Delhi', '1126522489', 'Children', 'https://ipartnerindia.org/'),
(20, 'MCKS Food for the Hungry Foundation Delhi', 110070, 'B-127A, B-Block, Vasant Kunj Enclave', '1126898844', 'Education', 'http://mcksfood.com/'),
(21, 'Mobile Creches', 110001, 'DIZ Area, Raja Bazaar Sector IV, Near Gole Market, NewDelhi', '1123347635', 'Education', 'https://www.mobilecreches.org/'),
(22, 'Nidan', 110092, '1st floor, Sagar Complex, New Rajdhani Enclave, Vikas Marg', '1122423746', 'Education', 'http://www.nidan.in/'),
(23, 'Nipun', 110087, 'GH - 5 & 7 / 883, Paschim Vihar', '9810694867', 'Children', 'http://www.nipun.org/'),
(24, 'ONYVA', 110048, 'W2, Greater Kailash 2, New Delhi', '9599336684', 'Education', 'https://www.taraindia.org/en'),
(25, 'Prabhaav Foundation', 110016, 'A-9, Green Park Main, Ground Floor', '1141036265', 'Women''s Development ', 'https://www.prabhaavfoundation.org/'),
(26, 'PURE India Trust', 110074, '160 Asola Extension, Zhenda Colony, Asola Fatehpur Beri', '9212102580', 'Education', 'https://www.pureindia.org/'),
(27, 'Reaching Skyfoundation', 110080, 'B-212 Jawahar Park Khanpur, Near Sainik Farms', '8377055874', 'Human Rights', 'https://www.reachingsky.org/'),
(28, 'Shubhakshika Educational Society', 110089, 'A5-B/184, Paschim Vihar, New Delhi', '1127852040', 'Education', 'http://www.shubhakshika.org/'),
(29, 'Shuddhi', 110034, '86-C, CD-Block, Pitampura', '9654815105', 'Environment & Forest', 'https://shuddhi.org/index.html'),
(30, 'Simple Education Foundation', 110075, 'H-1, Bandhu Vihar, CGHS, Sector – 10, Plot No. – 11, Dwarka', '8447821214', 'Education', 'https://simpleeducationfoundation.org/our-impact/'),
(31, 'Swami Sivananda Memorial Institute', 110026, 'Road No.31, East Avenue, Punjabi Bagh East, New Delhi', '1128313555', 'Education', 'http://ssmi.in/'),
(32, 'Turning Point Foundation', 110036, 'A-528, Near Dayal Market, Narela Road, Alipur', '1127708001', 'Education', 'http://tpfindia.org/'),
(33, 'ASSOCIATION FOR SOCIAL SERVICE AND REHABILITATION ', 110067, '107,Laxman Singh complex - 1 Munirka', '981021291', 'education', 'http://www.assra4u.org'),
(34, '24X7 Care Foundation', 110085, 'H.No-69, 1 st Floor, Block-B, Pocket-5, Sector-4, Rohini', '92666 61408', 'children', 'http://www.24x7carefoundation.org'),
(35, 'Aaddinath Lakshya Education & Welfare Society', 110086, 'House no. 153/1 BLK-A, Inder Enclave  Phase-2', '9871203472 ', 'Education', 'https://sites.google.com/site/aaddinathlakshya'),
(36, 'AADERSH GRAMODAY SEVA SANSTHAN', 110072, 'GD-99, GALI NO. 3, PUL PAHLADPUR', ' 657 2314098 ', 'Education', 'http://www.asesjsr.org.in/'),
(37, 'Aapki Sewa Welfare Foundation', 110053, 'A-31/20, Netaji Gali No -1, Maujpur, Shahdara', ' 11 43520862', 'children', 'http://www.aapkisewa.org/'),
(38, 'Aash foundation ', 110091, 'Aash foundation House No. 80, 3rd Floor Street No.1 Khichrip', '9911506475', 'children', 'https://aashfoundation.org/'),
(39, 'Aasha aur jansewa mahila bal vikas', 110044, ' H.NO. 27-A GALI NO.1, BLOCK -A,JAITPUR EXT.PART 2', NULL, 'children', 'https://www.facebook.com/aashajansewa.ngo/'),
(40, 'Agape Blessed Foundation Trust', 110030, 'Agape Blessed Foundation Trust, 163,Peer Wali Gali, Sultanpu', '8851103031', 'Education', 'http://agapeblessedfoundation.com'),
(41, 'Aksh foundation', 110094, 'H.No.161, G/F KH NO-60, New Sabhapur, Gujran Delhi', '99822-49188', 'children', 'http://www.akshfoundation.com/'),
(42, 'anchal charitable trust', 110032, 'Anchal Charitable Trust House, F, Anchal, 16, Navin Shahdara', '11 22123950', 'children', 'https://www.anchalindia.org/'),
(43, 'ANGEL CARE FOUNDATION', 110018, ' E-66-67, Guru Nanak Pura, New Delhi ', '9319280450', 'children', 'https://angelcarefoundations.in/'),
(44, 'ANMOL CHHAYA FOUNDATION', 110065, '196-J, RAMESH MARKET GARHI', '9971204113', 'children', 'https://ngoanmolchaya.org'),
(45, 'APNA PARIVAR', 110005, 'B-8/1334, Durga Chambers, Desh Bandhu Gupta Road Karol Bagh', '9999396386', 'Health & Family Welf', 'http://apnaparivar.in'),
(46, 'Apne Log', 110051, 'B-4 Main Kanti Nagar Extention, Near Welcome Metro Station, ', '8700008137', 'children', 'https://apnelog.org/'),
(47, 'Aasra Foundation', 110059, ' L- Extn. 113, Mohan Garden, Uttam Nagar', '9873132000', 'children', 'http://www.aasrafoundationngo.in'),
(48, 'Betiya Foundation', 110068, 'New delhi-110068', '8376028247', 'women', 'https://betiyafoundation.com/'),
(49, 'Hope Foundation', 110017, '90/19, Ground Floor, Malviya Nagar', '11 26686370', 'children', 'https://hopefoundation.org.in'),
(50, 'Bright Life Foundation', 110043, 'H No. 685-B-2, Gosian Mohalla, Najafgarh', ' 8929 812812', 'children', 'https://www.blfindia.org'),
(51, 'BUNKAR MAJDOOR VIKAS SAMITI', 110031, 'C-15, Gali No.5, F/F, Shastri Nagar Rani Garden, Gandhi Naga', '962 700 7869', 'labour', 'http://bunkarmajdoorvikassamiti.com/'),
(52, 'careindiawelfaretrust	', 110015, '69/6A Rama Road Industrial Area, Near Kirti Nagar Metro Stat', ' 18003134006', 'Health & Family Welf', 'https://www.careindiawelfaretrust.org/'),
(53, 'CHHAYA FOUNDATION', 110062, 'C-2/30, Madangir', '9810840572', 'children', 'http://www.chhayafoundation.in/'),
(54, 'CHHOTI CHHOTI KHUSHIYAN', 110014, '49, JANGPURA LANE BHOGAL( BASEMENT),\r\nNEW DELHI', '9557933587', 'children', 'http://chhotichhotikhushiyan.com/'),
(55, 'Fulfilling Dreams Foundation', 110029, 'B6/7 Extension Safdarjung Enclave', '8287716568', 'Children', 'https://fdfatwork.org/'),
(56, 'Future Human Development Society', 110038, 'H No 582, Rajokri', '88607 28054', 'children', 'https://fhds.org.in/'),
(57, 'Ganga Social Foundation', 110094, 'C-15, Ganga Vihar, Gokul Puri', '9810916305', 'Health & Family Welf', 'http://gsfindia.org/'),
(58, 'GOONJ', 110076, 'J-93, Sarita Vihar, New Delhi', '011- 41401216', 'Health & Family Welf', 'https://goonj.org/'),
(59, 'Guduchi Boon Foundation', 110078, 'Guduchi Boon Foundation, C/O Taxaj Corporate Services LLP\r\n1/11, Shulakul Vihar, Old Palam Road', '8544101419', 'children', 'http://www.guduchiboonfoundation.org/'),
(60, 'hamara sankalp	', 110007, '3391, Arya Pura, Subzi Mandi', '9711-158-343', 'all', 'https://www.thoseinneed.in'),
(61, 'Hamari Pahchan', 110037, 'H.No. 1121 Mahipalpur, Opposite Arjun Camp', '9911173557', 'Health & Family Welf', 'https://www.hamaripahchan.org/'),
(62, 'HAMRAAH FOUNDATION', 110006, '2426/X Shah Abul Khair Marg,Turkman Gate', ' 9315114388', 'children', 'http://www.hamraahfoundation.org'),
(63, 'HANDICAPPED CHILDREN REGENERATION ORGANISATION', 110047, '85,LGF, Main Road Aya Nagar, Opp. MCD School', '999 030 5577', 'children', 'https://www.hcro.org.in/'),
(64, 'HEALTHY AGING INDIA', 110020, 'A-10, DDA sheds , okhla phase -1,\r\nindustrial area', '1140230917', 'Health & Family Welf', 'http://www.healthyagingindia.com/'),
(65, 'HUMAN WELFARE FORUM', 110054, 'O-10, Aruna Nagar Civil Line', '9871795016', 'Education', 'http://www.humanwelfareforum.com/'),
(66, '	 New Jeevan Prakash Foundation', 110041, 'Jaat Chowk, Nangloi,\r\nWest Delhi', '8745875101', 'Health & Family Welf', 'http://www.newjeevanprakash.org/'),
(67, 'jsr charitable trust', 110008, 'W-6, IInd Floor\r\nOpp. Metro Pillar No. 234\r\nWest Patel Nagar', '1147519524', 'Education', 'http://jsrcharitabletrust.faith/'),
(68, 'Kanshiram Welfare Foundation', 110033, 'H.No.-1359, Block-E, Ground Floor Jahangir Puri', '01127634206', 'children', 'https://kanshiramfoundation.org/'),
(69, 'Kiran Trust', 110084, '287, Block B Gali No. 72\r\nSant Nagar', ' 9870754540', 'Health & Family Welf', 'https://www.kirantrustfoundation.com/'),
(70, 'KUMAYUN TECHNICAL EDUCATION AND SOCIAL WELFARE SOC', 110002, '3749, Kucha Premanand,\r\n\r\nDaryaganj', '981 023 3037', 'Health & Family Welf', 'https://k-societyofindia.org/'),
(71, 'Lex foundation', 110077, 'Regd Office: RZH 641, Street 16, Rajnagar II, Palam Colony', ' 9711011670', 'children', 'https://lexfoundation.net/'),
(72, 'MAHILA DAKSHATA SAMITI DELHI', 110023, 'D-II, Kidwai Nagar (West)', '11 24102067', 'women', 'http://www.mdsnational.org/'),
(73, 'MERA INDIA MERA ADHIKAR', 110022, 'S126/285,kanak durga colony,Sector 12 R.K puram', '9716611524,', 'children', 'http://www.mima.org.in/'),
(74, 'Organisation For Rehabilitation Of Handicapped, Ch', 110096, 'B-293/A, G.D. Colony, Mayur Vihar - III', '9716684523', 'women', 'http://www.orhcw.com/'),
(75, 'Patheya', 110045, 'RZH-15/9, Gurudwara Road, Mahavir Enclave, Dabri-Palam Road', '1149041424', 'Health & Family Welf', 'http://www.patheyaonline.com/');

-- --------------------------------------------------------

--
-- Table structure for table `org_list`
--

CREATE TABLE `org_list` (
  `org_id` int(3) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `org_address` varchar(500) NOT NULL,
  `org_pincode` varchar(7) NOT NULL,
  `org_phone` varchar(11) NOT NULL,
  `org_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_list`
--

INSERT INTO `org_list` (`org_id`, `org_name`, `org_address`, `org_pincode`, `org_phone`, `org_type`) VALUES
(1, 'Kamyadaan', 'MG Road, Salaskar Bhavan, demo chourah', '789654', '7896541230', 'ngo'),
(2, 'Kamyadaan1', 'lcnlsdnvoneaovneaono rrr', '325698', '3214569870', 'ngo'),
(3, 'Kamyaadan2', 'rererrerererrererre', '585856', '3210587896', 'police'),
(4, 'Hula hula hula', 'aaa bail mujhe maar street 4', '696969', '0123456287', 'hospital'),
(5, 'Johhny broda', 'Nasty Russia', '696969', '2583697410', 'police');

-- --------------------------------------------------------

--
-- Table structure for table `police_details`
--

CREATE TABLE `police_details` (
  `id` int(4) NOT NULL,
  `pincode` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(800) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_details`
--

INSERT INTO `police_details` (`id`, `pincode`, `name`, `address`, `contact`) VALUES
(1, 110006, 'Hauz Qazi Police Station', ' 1546-51, Sirkiwalan Road, Hauz Qazi Chowk, Chawri Bazar, near Metro Station, New Delhi, Delhi ', '1123210414'),
(2, 110006, 'Hauz Qazi Police Station', ' 1546-51, Sirkiwalan Road, Hauz Qazi Chowk, Chawri Bazar, near Metro Station, New Delhi, Delhi ', '1123210414'),
(3, 110001, 'Barakhamba Road Police Station', ' 2 Barakhamba lane, Cannought Place, New Delhi, Delhi', '1123413800'),
(4, 110001, 'Barakhamba Road Police Station', '2 Barakhamba lane, Cannought Place, New Delhi, Delhi', '1123413800'),
(5, 110001, 'Barakhamba Road Police Station', '2 Barakhamba lane, Cannought Place, New Delhi, Delhi', '1123413800'),
(6, 110032, 'Police Station Shahdara', 'GT Road, Dwarkapuri, Shahdara, Delhi', '1122832087'),
(7, 110032, 'Police Station Shahdara', 'GT Road, Dwarkapuri, Shahdara, Delhi', '1122832087'),
(8, 110027, 'Khyala Police Station', 'BUS STAND, A Block Rd, NEAR 830, J. J. Colony, Khayala, Vishnu Garden, New Delhi, Delhi ', 'NA'),
(9, 110027, 'Khyala Police Station', 'BUS STAND, A Block Rd, NEAR 830, J. J. Colony, Khayala, Vishnu Garden, New Delhi, Delhi ', 'NA'),
(10, 110085, 'Police Station Rohini North', 'Shiva Rd, Sector 7, Rohini, Delhi', '1127048210'),
(11, 110085, 'Police Station Rohini North', 'Shiva Rd, Sector 7, Rohini, Delhi', '1127048210'),
(12, 110045, 'Palam Police Station', 'WZ01, Palam Village Rd, Puran Nagar, Raj Nagar I, New Delhi, Delhi', '1125365980'),
(13, 110045, 'Palam Police Station', 'WZ01, Palam Village Rd, Puran Nagar, Raj Nagar I, New Delhi, Delhi', '1125365980'),
(14, 110009, 'Police Station Model Town', 'Ring Road, Model Town, Delhi', '1127456072'),
(15, 110009, 'Police Station Model Town', 'Ring Road, Model Town, Delhi', '1127456072'),
(16, 110036, 'Police Station Alipur', 'National Highway 1, Alipur, New Delhi, Delhi ', '1127202265'),
(17, 110036, 'Police Station Alipur', 'National Highway 1, Alipur, New Delhi, Delhi ', '1127202265'),
(18, 110019, 'Delhi Police', ' Nehru Place, New Delhi, Delhi', '1126430607'),
(19, 110019, 'Delhi Police', ' Nehru Place, New Delhi, Delhi', '1126430607'),
(20, 110095, 'Delhi Police headquarters', 'MSO Building, Indraprashta Marg, IP Estate, New Delhi, Delhi', 'NA'),
(21, 110095, 'Delhi Police headquarters', 'MSO Building, Indraprashta Marg, IP Estate, New Delhi, Delhi', 'NA'),
(22, 110043, 'Police Station Najafgarh', 'Najafgarh Thana Rd, Najafgarh, Delhi', '1125016200'),
(23, 110043, 'Police Station Najafgarh', 'Najafgarh Thana Rd, Najafgarh, Delhi', '1125016200'),
(24, 110007, 'Police Station Roop Nagar', 'Banglo Road, near Fire Station, Block 6, Roop Nagar, New Delhi, Delhi', '1123844632'),
(25, 110007, 'Police Station Roop Nagar', 'Banglo Road, near Fire Station, Block 6, Roop Nagar, New Delhi, Delhi', '1123844632'),
(26, 110094, 'Police Station Karawal Nagar', 'Kamal Vihar Extn, Shiv Vihar, Karawal Nagar, Delhi', '1122932231'),
(27, 110094, 'Police Station Karawal Nagar', 'Kamal Vihar Extn, Shiv Vihar, Karawal Nagar, Delhi', '1122932231'),
(28, 110054, 'Delhi Police P & L', '5, Rajpur Rd, Police Lines, Civil Lines, New Delhi, Delhi', 'NA'),
(29, 110054, 'Delhi Police P & L', '5, Rajpur Rd, Police Lines, Civil Lines, New Delhi, Delhi', 'NA'),
(30, 110046, 'Police Station Dabri', 'Block E, Sitapuri Part 1, Sitapuri, New Delhi, Delhi', 'NA'),
(31, 110046, 'Police Station Dabri', 'Block E, Sitapuri Part 1, Sitapuri, New Delhi, Delhi', 'NA'),
(32, 110007, 'Maurice Nagar Police Station', 'Vijay Nagar Marg, Reids Line Delhi Univ Staff Flats, Sarup Nagar, Delhi', '1127667178'),
(33, 110007, 'Maurice Nagar Police Station', 'Vijay Nagar Marg, Reids Line Delhi Univ Staff Flats, Sarup Nagar, Delhi', '1127667178'),
(34, 110054, 'Timarpur Police Station', '201, Chaudhary Fateh Singh Marg, Indra Basti, Block C, Banarsi Das Estate, Timarpur, Delhi', '1123812734'),
(35, 110054, 'Timarpur Police Station', '201, Chaudhary Fateh Singh Marg, Indra Basti, Block C, Banarsi Das Estate, Timarpur, Delhi', '1123812734'),
(36, 110021, 'Police Station Chanakyapuri', 'Teen Murti Marg, Diplomatic Enclave, Chanakyapuri, New Delhi, Delhi', '1123012003'),
(37, 110021, 'Police Station Chanakyapuri', 'Teen Murti Marg, Diplomatic Enclave, Chanakyapuri, New Delhi, Delhi', '1123012003'),
(38, 110042, 'Bhalswa Dairy Police Station', 'Bhalswa Dairy, Bhalswa, Delhi', '1127811933'),
(39, 110042, 'Bhalswa Dairy Police Station', 'Bhalswa Dairy, Bhalswa, Delhi', '1127811933'),
(40, 110002, 'Kamla Market Police Station', 'near Kamla Market, Kamla Market, Ajmeri Gate, New Delhi, Delhi', '1123230623'),
(41, 110002, 'Kamla Market Police Station', 'near Kamla Market, Kamla Market, Ajmeri Gate, New Delhi, Delhi', '1123230623'),
(42, 110002, 'IP Estate Police Station', 'Mahatma Gandhi Marg, Gas Turbine Power Station, IP Estate, New Delhi, Delhi ', 'NA'),
(43, 110002, 'IP Estate Police Station', 'Mahatma Gandhi Marg, Gas Turbine Power Station, IP Estate, New Delhi, Delhi ', 'NA'),
(44, 110091, 'Police Station Mayur Vihar Phase 1', 'Trilok Puri Rd, Himmatpuri, Mayur Vihar, New Delhi, Delhi', '100'),
(45, 110091, 'Police Station Mayur Vihar Phase 1', 'Trilok Puri Rd, Himmatpuri, Mayur Vihar, New Delhi, Delhi', '100'),
(46, 110018, 'Vikaspuri Police Station', 'Guru Virjanand Marg, A-Block, Vikaspuri, New Delhi, Delhi ', '1125551213'),
(47, 110018, 'Vikaspuri Police Station', 'Guru Virjanand Marg, A-Block, Vikaspuri, New Delhi, Delhi ', '1125551213'),
(48, 110015, 'Police Station Kirti Nagar', 'N-56, Kirti Nagar Main Rd, Block F, Kirti Nagar Main Rd, Block A, Block F, Mansarover Garden, New Delhi, Delhi', '1125438719'),
(49, 110015, 'Police Station Kirti Nagar', 'N-56, Kirti Nagar Main Rd, Block F, Kirti Nagar Main Rd, Block A, Block F, Mansarover Garden, New Delhi, Delhi', '1125438719'),
(50, 110007, 'Police Station, Gulabi Nagar', 'Chaudhary Nand Lal Marg, Gulabi Bagh, Delhi', '1123651692'),
(51, 110007, 'Police Station, Gulabi Nagar', 'Chaudhary Nand Lal Marg, Gulabi Bagh, Delhi', '1123651692'),
(52, 110055, 'Police Station Nabi Karim', ' Babu Ram Solanki Marg, Nabi Karim, Sadar Bazaar, New Delhi, Delhi', '1123521081'),
(53, 110055, 'Police Station Nabi Karim', ' Babu Ram Solanki Marg, Nabi Karim, Sadar Bazaar, New Delhi, Delhi', '1123521081'),
(54, 110016, 'Police Station Hauz Khas', 'Police Station Colony, Block A, Mayfair Gardens, Hauz Khas, New Delhi, Delhi ', '100'),
(55, 110016, 'Police Station Hauz Khas', 'Police Station Colony, Block A, Mayfair Gardens, Hauz Khas, New Delhi, Delhi ', '100'),
(56, 110049, 'Office of The Additional Commissioner of Police Licensing', ' First floor of Police Station Defence Colony, Near Moolchand Hospital, Andrews Ganj, New Delhi, Delhi', '1126262260'),
(57, 110049, 'Office of The Additional Commissioner of Police Licensing', ' First floor of Police Station Defence Colony, Near Moolchand Hospital, Andrews Ganj, New Delhi, Delhi', '1126262260'),
(58, 110085, 'PS K N Katju Marg', 'Dr KN Katju Marg, Block G-3, Sector 16, Rohini, Delhi', '1127571171'),
(59, 110085, 'PS K N Katju Marg', 'Dr KN Katju Marg, Block G-3, Sector 16, Rohini, Delhi', '1127571171'),
(60, 110052, 'Police Station Bharat Nagar', 'Kokiwala Bagh, Phase 4, Near Deep Chand Bandhu Hospital, Nimri Colony, Ashok Vihar, Delhi', '1127301200'),
(61, 110052, 'Police Station Bharat Nagar', 'Kokiwala Bagh, Phase 4, Near Deep Chand Bandhu Hospital, Nimri Colony, Ashok Vihar, Delhi', '1127301200'),
(62, 110075, 'DCP Office District Dwarka sec 19 New Delhi', 'Dwarka, Delhi', '1128042990'),
(63, 110075, 'DCP Office District Dwarka sec 19 New Delhi', 'Dwarka, Delhi', '1128042990'),
(64, 110064, 'Mayapuri Police Station', 'B-88-5, 86-5, Satguru Ram Singh Rd, Block B, Mayapuri Industrial Area Phase I, Mayapuri, New Delhi, Delhi', '1128117644'),
(65, 110064, 'Mayapuri Police Station', 'B-88-5, 86-5, Satguru Ram Singh Rd, Block B, Mayapuri Industrial Area Phase I, Mayapuri, New Delhi, Delhi', '1128117644'),
(66, 110065, 'Amar Colony Police Station', ' Kalka Devi Marg, Opp. Indian Oil Petrol Pump, Amar Colony, New Delhi, Delhi ', '1126412194'),
(67, 110065, 'Amar Colony Police Station', ' Kalka Devi Marg, Opp. Indian Oil Petrol Pump, Amar Colony, New Delhi, Delhi ', '1126412194'),
(68, 110054, 'DCP North Office', '110054, Khyber Pass, Civil Lines, Delhi', '100'),
(69, 110054, 'DCP North Office', '110054, Khyber Pass, Civil Lines, Delhi', '100'),
(70, 110085, 'Police Station Rohini South', 'Yogashram Marg, Near Mangalam Place, Institutional Area, Sector 3, Rohini, Delhi', '1127510515'),
(71, 110085, 'Police Station Rohini South', 'Yogashram Marg, Near Mangalam Place, Institutional Area, Sector 3, Rohini, Delhi', '1127510515'),
(72, 110039, 'Police Station Bawana', 'Auchandi Bawana Rd, Bawana, Delhi', '1127752534'),
(73, 110039, 'Police Station Bawana', 'Auchandi Bawana Rd, Bawana, Delhi', '1127752534'),
(74, 110044, 'Police Station, Badarpur', 'Axis Bank ATM, NH 2, Mathura Rd, Badarpur Extension, Tajpur, Badarpur, New Delhi, Haryana', '1129894754'),
(75, 110044, 'Police Station, Badarpur', 'Axis Bank ATM, NH 2, Mathura Rd, Badarpur Extension, Tajpur, Badarpur, New Delhi, Haryana', '1129894754'),
(76, 110001, 'Delhi Traffic Police Booth', 'Bhagwan Das Rd, Mahatma Jyoti Rao Phule Marg Area, New Delhi, Delhi ', '1125844444'),
(77, 110001, 'Delhi Traffic Police Booth', 'Bhagwan Das Rd, Mahatma Jyoti Rao Phule Marg Area, New Delhi, Delhi ', '1125844444'),
(78, 110041, 'Police Station Nangloi', 'Block 4 ABC, Nangloi Extension, Nangloi, Delhi', '100'),
(79, 110041, 'Police Station Nangloi', 'Block 4 ABC, Nangloi Extension, Nangloi, Delhi', '100'),
(80, 110032, 'Deputy Commissioner of Police/North-East', 'New Seelampur, Shahdara, Delhi', '1122825655'),
(81, 110032, 'Deputy Commissioner of Police/North-East', 'New Seelampur, Shahdara, Delhi', '1122825655'),
(82, 110016, 'Deputy Commissioner of Police South Delhi', 'Police Station Colony, Mayfair Gardens, Hauz Khas, New Delhi, Delhi ', '1126858366'),
(83, 110016, 'Deputy Commissioner of Police South Delhi', 'Police Station Colony, Mayfair Gardens, Hauz Khas, New Delhi, Delhi ', '1126858366'),
(84, 110089, 'Delhi Police Crime Branch', 'Sector 18, Rohini, New Delhi, Delhi', '1127941771'),
(85, 110089, 'Delhi Police Crime Branch', 'Sector 18, Rohini, New Delhi, Delhi', '1127941771'),
(86, 110034, 'DCP Office Outer District', 'Guru Harkishan Marg, Maulana Azad Society, Pushpanjali Enclave, Pitam Pura, Delhi', '100'),
(87, 110034, 'DCP Office Outer District', 'Guru Harkishan Marg, Maulana Azad Society, Pushpanjali Enclave, Pitam Pura, Delhi', '100'),
(88, 110001, 'Office Of The Deputy Commissioner Of Police Traffic', 'Parliament Circle, New Delhi, Delhi', '100'),
(89, 110001, 'Office Of The Deputy Commissioner Of Police Traffic', 'Parliament Circle, New Delhi, Delhi', '100'),
(90, 110034, 'Deputy Commissioner Of Police', 'Road No.43, Maulana Azad Society, Pushpanjali Enclave, Pitam Pura, Delhi', '1127034873'),
(91, 110034, 'Deputy Commissioner Of Police', 'Road No.43, Maulana Azad Society, Pushpanjali Enclave, Pitam Pura, Delhi', '1127034873'),
(92, 110006, 'ACP kotwali office', 'Opp, Town Hall, Chandni Chowk, New Delhi, Delhi ', '1123973022'),
(93, 110006, 'ACP kotwali office', 'Opp, Town Hall, Chandni Chowk, New Delhi, Delhi ', '1123973022'),
(94, 110012, 'Delhi Traffic Police Headquarters', 'Dev Prakash Shastri Marg, Pusa, New Delhi, Delhi ', 'NA'),
(95, 110012, 'Delhi Traffic Police Headquarters', 'Dev Prakash Shastri Marg, Pusa, New Delhi, Delhi ', 'NA'),
(96, 110092, 'DCP East District Office Complex, Delhi', '6 B, I.P.Extension, Patparganj, Delhi', '1122232103'),
(97, 110092, 'DCP East District Office Complex, Delhi', '6 B, I.P.Extension, Patparganj, Delhi', '1122232103'),
(98, 110019, 'Kalkaji Police Station', 'Block 1, Kalkaji Extension, Kalkaji, New Delhi, Delhi', '1126430607'),
(99, 110019, 'Kalkaji Police Station', 'Block 1, Kalkaji Extension, Kalkaji, New Delhi, Delhi', '1126430607');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ticket_no`);

--
-- Indexes for table `helprequests`
--
ALTER TABLE `helprequests`
  ADD PRIMARY KEY (`help_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_list`
--
ALTER TABLE `org_list`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `police_details`
--
ALTER TABLE `police_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ticket_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `helprequests`
--
ALTER TABLE `helprequests`
  MODIFY `help_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `org_list`
--
ALTER TABLE `org_list`
  MODIFY `org_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `police_details`
--
ALTER TABLE `police_details`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
