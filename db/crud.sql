-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 11:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(22) NOT NULL,
  `name` varchar(31) NOT NULL,
  `location` text NOT NULL,
  `mail` text NOT NULL,
  `contact_number` text NOT NULL,
  `last_call` varchar(21) NOT NULL,
  `next_call` varchar(21) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `location`, `mail`, `contact_number`, `last_call`, `next_call`, `remark`) VALUES
(41, 'Standard Group', 'Mohakhali C/A, Dhaka', 'info@standard-group.com', 'Mosarraf Hossain, (MD) 01713062177', 'June 2020', 'Aug 2020', 'Need mail introduction, mail already send, Tanvir called them also, talked with chairman'),
(42, 'Sonia Group', 'Ashulia, Savar, Dhaka', 'mahabub@soniagroup.com', 'Enayet uddin kawser, 01711568575', 'June 2020', 'Jan 2021', 'ERP purchased, If fail, will contact us'),
(43, 'Shanin Group/ Alpha Knitwear ', 'Shanta western tower, Tejgaon I/A', 'faruk@shaningroup.net', 'Faruk Al Nasir, 01819229398', 'June 2020', 'Nov 2020', 'Factory now closed, call me when everything looks good, let the pandemic be over'),
(44, 'Taz Knitting IND.', 'West Hazipara, Rampura', 'nahidrahman@tajknitting.com', 'Nahid Rahman, 01726986799, 01749599251', 'June 2020', 'Nov 2020', 'No need at that moment, but might need future'),
(45, 'DK Group', 'Gulshan 2', 'zahid@dkgbd.com', 'Syed A Q M Zahid, 01713 044 287', 'June 2020', 'Sep 2020', 'Good response, he said, will take my proposal to their IT dept. '),
(46, 'Saasco Group', 'Milk vita Road, Mirpur', 'saasco@saascogroup.com', 'Atiar Rahman Dipu, 01611 722726', 'June 2020', 'Oct 2020', 'Said, took my number in note, they will let me know in future'),
(47, 'Green life Group', 'Ashulia, Jamgora, Savar', 'info@greenlifebd.com', 'Abu Faisal Mosabber, 01819 211038', 'June 2020', 'Sep 2020', 'Currently using Tally, No requirements at this moment, should prepare for long term follow up'),
(48, 'Dressman Ltd.', 'Gazipur', 'abdullah@dressman-bd.com', 'Hasan  Abdullah, (CPO)   01711520710', 'June 2020', 'Sep 2020', 'Told to call him later'),
(49, 'BP Garments Ltd.', 'Mogbazar', 'tanvir@tsnbd.org', 'Mr. Tanvir Aziz Khan,    0173 003 1999', 'June 2020', 'Sep 2020', 'Now laid off, told him to call after some months'),
(50, 'Majumder Garments Ltd.', 'Gazipur', 'enamul@majumder.org', 'Enamul Haque Majumder (MD),  01819280390, Office 02 955 4038', '12 Aug 2020', 'Sep 2020', 'MD said me to talk with their HR , AGM, Could not reach him till now. Office closed/Did not received last call'),
(51, 'Knit Concept Ltd.', 'Narayanganj', 'info@knitconcept.com.bd', 'Saidur Rahman,    01714  115 030', 'Visit at 3 Sep 2020', 'Jan 2021', 'Visited factory and shared prospect at 6 sep 2020, will let me know, follow up'),
(52, 'Generation Next', 'Gazipur/ Baridhara DOHS', 'info@gnf-bd.com', 'Obaydur Rahman , 01708 490 190 ', '12 Aug 2020', '12 Sep 2020', 'Told -  not now, but will need soon. Saved my phone number, will contact, last call DR, Busy in meeting, push SMS sent to  seek schedule'),
(53, 'Naz Knitwear Ltd.', 'Savar/Uttara', 'saiful.islam@nazknit.com', 'Kazi Saiful Islam,  01713 006 546', 'June 2020', 'Oct 2020', 'Told to send website address, already sent, Long term follow up'),
(54, 'Al Tahsin Apparels Ltd.', 'Gazipur', 'basedur@algilani13.com', 'Md. Basedur Rahman chowdhury , 01713015993', 'July 2020', 'Aug 2020', 'Told - production was still closed, try to call me months later, '),
(55, 'Fortuna Fashion Ltd.', 'Tejgaon/ Khilkhet', 'mobin@fortunafashionbd.com', 'Mobin,  01716 391 607', '12 Aug 2020', '24 Aug 2020', 'Sent web address and software prospect, talked 2 times, they are taking time, next target is to go on a physical visit( Interested about Remote access software). Checked profile, will contact soon'),
(56, 'SGM Knit & Print', 'Savar', 'sgmknitandprint@gmail.com', 'Md. Salahuddin,  01819 217 251 ', 'July 2020', 'Oct 2020', 'Told me to call him later'),
(57, 'Zoom Knit Industries Ltd.', 'Demra,Dhaka', 'mazidtalukdar@yahoo.com', 'M.A. Mazid Talukdar,  01817 045 447', '12 Aug 2020', 'Nov 2020', 'Call me at the last of the next month(At August), Dont need now, told he had a software'),
(58, 'CPM Knit Composite (Pvt) Ltd.', 'Savar/Gulshan', 'kaiser@cpm-bd.com', 'Abdullah- Al- Kaiser,  0167 555 8615', '27 June', 'Aug 2020', 'Told to call him after some days'),
(59, 'AB Mart Fashion Wear Ltd.', 'Gazipur', 'angel@abmartfashion.com', 'Budrul Alam,  02 - 9816139', '12 July 2020', 'Nov 2020', 'Interested about payroll, need 5/6 months more ( need continious followup)'),
(60, 'Cotton Harvest Ltd.', 'Shampur, Dhaka', '', 'Mr. Kamruzzaman, 01819 213 863', 'July 2020, Aug 27,202', 'Sep 2020', 'Small factory, using tally, much interested, need dedicated support, told to contact him after 2/3 months later(following up regularly)'),
(61, 'Broadway Industries Ltd.', 'Uttara, Nigar plaza, Lift-6', 'broadway@speedbd.net', 'Mr. Rafi Sir', '12 Aug 2020', '24 Aug 2020', 'Physically visited corporate office, price proposal sent for HR and Inventory, waiting for response, last call DR'),
(62, 'Jamuna Apparels', 'Gazipur', '', 'Rafiq Sazzad, 01711 561 354', 'July 2020', 'Sep 2020', 'Told to call him when pandemic is over and everything looks good'),
(63, 'James Design Ltd.', 'Baridhara DOHS', '', 'Sopon boruna chiwdury, (MD) 01713 116 229, (01711 53 14 74):HV', '13 sep 2020', '16 sep 2020', 'Good primary response, Took my phone number'),
(64, 'Titash Garments', 'Savar/ Banani', 'sjahan123@gmail.com', '', '1 July 2020', 'Sep 2020', 'Good primary response,\" let the pandemic be over, then call me\"'),
(65, 'M M Fashion', 'Khilkhet', 'mehedihasan@gmail.com', 'Mahbubur Rahman, 01720397369', '9 July 2020', 'Sep 2020', 'Good primary response, follow up, introductory mail already sent'),
(66, 'Naim Garments', 'Commercial Court(2nd floor), 95, Agrabad C/A, Chittagong', 'naim@naimgmts.com', 'MR Chwdury, 01711760219', 'Aug 26 2020', 'Sep 10', 'Wanted client list, brochure in courier service in the mentioned address'),
(67, 'Cotton fashion wear', 'Mirpur', 'cotton.fashionwears@gmail.com', 'obaidur rahman(GM), 01716484176', '27 Aug', 'Oct 2020', 'If needed will call, long term follow up'),
(68, 'Global knitwear ', 'savar', 'sazzad@kaamstyle.com', '01914438600', 'Aug 31 2020', 'Nov 2020', 'Not needed at this moment, might be needed at future, long term follow up'),
(69, 'Salim & Brothers', 'Chittagong', 'mamun@reliancegroupbd.com', 'Mamun salam, 01711721166', '07-9-20', '7-10-20', 'interested, talked a long time, wantED TO SEE OUR REPORTS IN MAIL, SHARED HIS MAIL ADDRESS, mail sent, next is to send report formats'),
(70, 'Nightingle fashion Ltd.', '', '', '01917 70 23 30, Md. Abdus Salam , (MD)', '13 sep 2020', 'Jan 2021', 'No requirement at this moment'),
(71, 'Tex Zone Ltd ', 'Tongi, BISIC', '', 'Faisal Ahmed , 01819222486 (M.D)', '13 sep 2020', '20 sep 2020', 'Call him ASAP, network problem'),
(72, 'Corona Fashion Ltd', '', '', '01707073837, Kazi Abu Bokor (M.D)', '13 sep 2020', '', 'Why calling me,? contact my manageger, CEO etc'),
(73, 'B Brothers Group', '', '', '01711526774, Zahirul Haque Mohon MD,  01819268840(another dir)', '13 sep 2020', 'Dec 2020', 'Not needed at this moment, might be needed at future, long term follow up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
