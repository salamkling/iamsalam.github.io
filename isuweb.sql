-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 11:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isuweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `extension`
--

CREATE TABLE `extension` (
  `id` int(50) NOT NULL,
  `proponent` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `num_participant` varchar(50) NOT NULL,
  `colla_agency` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extension`
--

INSERT INTO `extension` (`id`, `proponent`, `title`, `date`, `num_participant`, `colla_agency`) VALUES
(14, 'Rosalie C. Leal,DPA', 'PROJECT CAVE (Community Attitude And Values Enhancement)', 'January 2021-January 2026', '', 'local'),
(13, 'Jenalyn C.Andres,Ed.D.', 'Livehood Enterprice Development of Eco Bag Negosyong Swak na Swak', 'January 2020-January 2020', '', 'local'),
(12, 'Rosalie C. Leal, DPA', 'PROJECT CAVE(Community Attitude And Values Enhancement)', 'January 2020 - January 2024', '', 'local'),
(15, 'Myla G. Velasco', 'Project MAESTRA:Materializing Academic Edge Though Seminars,Trainings and Other Related Activites', 'January 2021-December 2023', '', 'local'),
(16, 'Bonna S. Guevarra', 'Basic Operation And Computer Literacy', 'January 2021-December 2021', '', 'local'),
(17, 'Larry B. De Guzman', 'Computer System Servicing Training for Out of School Youth(Dunong para sa mamayang ng San Mateo)', 'January 2021-December 2021', '', 'local'),
(18, 'Engr.Mar Heisen A. Yanos', 'Training of Mushroom Production For Marginal Farmers and other Stake holders of San Mateo Isabela', 'January 2021-December 2021', '', 'local'),
(19, 'Engr.Mar Heisen A. Yanos', 'Processing of Mungbean:An Innovative Product of Black Gold', 'January 2021-December 2021', '', 'local'),
(20, 'Renaldo G. Manipon', 'Project Protect (Training of Assembling Cloth Facemask)', 'January 2021-December 2021', '', 'local'),
(21, 'Noel B. Damian And  Frederick P. Dela Cruz', 'Designing and Construction of Egg Incubator', 'January 2021-December 2021', '', 'local'),
(22, 'Raymund G. Velasco And Frederick P. Dela Cruz', 'Solusyon ni (JEENA)JOB AND ECONOMIC ENHANCEMENT ALTERNATIVES: An Economic Development Oppurtunity Pr', 'January 2021-December 2021', '', 'local'),
(23, 'Jenalyn C.Andres,Ed.D.', 'Pangkabuhayan ng mga Ilaw ng Tahanan:Tulong Sa Haligi Ng Tahanan Para Sa pag angat ng Pamilya', 'January 2021-December 2021', '', 'local');

-- --------------------------------------------------------

--
-- Table structure for table `home_events`
--

CREATE TABLE `home_events` (
  `id` int(50) NOT NULL,
  `event_pic` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `event_descrip` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_events`
--

INSERT INTO `home_events` (`id`, `event_pic`, `title`, `event_descrip`) VALUES
(37, 'events/sf.jpg', 'RHU and LGU San Mateo  for the Vaccination', '<div dir=\"auto\" style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">RHU and LGU San Mateo </div><div dir=\"auto\" style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">for the Vaccination of ISU San Mateo Students!</div>'),
(38, 'events/wewe.jpg', 'Library Best Practice', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">Thank you PLAI-CAVRLC for recognizing our Library Best Practice. </span>'),
(39, 'events/breaklk.jpg', 'Academic Reflection Break', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\" style=\"overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(5,=\"\" 5,=\"\" 5);=\"\" font-size:=\"\" 15px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><div dir=\"auto\" style=\"font-family: inherit;\">OFFICIAL | Isabela State University declares Academic Reflection Break from November 2-5, 2021 to refreshen the mental and emotional vigor of faculty and students amid the demands of the virtual learning environment.</div></div>'),
(34, 'events/chi.jpg', 'CHRISTMAS BELEN COMPETEION', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\" style=\"overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(5,=\"\" 5,=\"\" 5);=\"\" font-size:=\"\" 15px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><div dir=\"auto\" style=\"font-family: inherit;\">The home of BACK TO BACK Champion!</div><div dir=\"auto\" style=\"font-family: inherit;\"><span style=\"font-family: inherit;\">ISU won the Belen Competition held at Municipality of San Mateo</span></div></div><div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\" style=\"overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(5,=\"\" 5,=\"\" 5);=\"\" font-size:=\"\" 15px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"></div>'),
(33, 'events/ftf.png', 'DISCUSSION OF LIMITED FACE-TO-FACE CLASSES', '<span style=\"color: rgb(5, 5, 5); font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 15px;=\"\" text-transform:=\"\" capitalize;=\"\" white-space:=\"\" pre-wrap;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\">The Crisis Management Committee Of The San Mateo Campus Met With Atty. Gregorio A. Pua And The Local IAFT To Discuss The Limited Face-To-Face Classes.</span>'),
(35, 'events/sdfs.jpg', 'With PNU North Luzon ISO Task Force headed by Dr. ', ''),
(36, 'events/cfg.jpg', '2022 Campus IHR', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\" style=\"overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px; background-color: rgb(255, 255, 255);\"><div dir=\"auto\" style=\"font-family: inherit;\"><span style=\"font-family: inherit;\">Thank you researchers and to our Panel of Evaluators namely Dr. John Cabansag, Dr. Rhowel Dellosa, Dr. Nilo Padilla and Dr. Jhamie Tetz Mateo!</span></div></div>'),
(40, 'events/dabasr.jpg', 'NEW DIRECTOR OF DA-BAR', ''),
(41, 'events/frs.jpg', 'FIRST PLACE - TECHNOLOGICAL RESEARCH CATEGORY', 'Authored by Kelvin Kris C. Gonzales and Bernadette D. Bagalay during 2021 Cauayan Cluster and Research Development Pre-Agency In-House Review'),
(42, 'events/secs.jpg', 'SECOND PLACE - SOCIAL RESEARCH CATEGORY', 'Authored by Maria Paz Consuelo C. Dammay during 2021 Cauayan Cluster and Research Development Pre-Agency In-House Review'),
(43, 'events/th.jpg', 'THIRD PLACE - TECHNOLOGICAL RESEARCH CATEGORY', 'Authored by Noel B. Damian and Sonny Boy V. Villegas during 2021 Cauayan Cluster and Research Development Pre-Agency In-House Review'),
(44, 'events/sec.jpg', 'THIRD PLACE - TECHNICAL RESEARCH CATEGORY', 'Authored by Mar Heisen A. Yanos and Jeremiah Jathniel O. Guevarra during 2021 Cauayan Cluster and Research Development Pre-Agency In-House Review'),
(45, 'events/dfdf.jpg', 'URDET Council Meeting', ''),
(46, 'events/wererer.jpg', 'Virtual Orientation on September 23, 2021 ', ''),
(47, 'events/cccc.jpg', 'ISU San Mateo herd immunity', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">ISU San Mateo herd immunity na! Thank you LGU San Mateo headed by Atty. Gregorio A. Pua, Municipal Mayor and RHU Vaccination Team!</span>'),
(48, 'events/axxa.jpg', 'AACCUP accreditation Survey Visit', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\" style=\"overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px; background-color: rgb(255, 255, 255);\"><div dir=\"auto\" style=\"font-family: inherit;\">Closing Program</div></div><div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\" style=\"overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px; background-color: rgb(255, 255, 255);\"><div dir=\"auto\" style=\"font-family: inherit;\">Walang hanggang PASASALAMAT sa inyo pong lahat lalo na sa  Accreditation Task Force ng ISU San Mateo, VP Office, partner agencies, stakeholders at higit sa lahat sa aming mga AACCUP accreditors!</div></div>'),
(49, 'events/mnm.jpg', 'BTTE/BTVTED Level 1 Online Accreditation Survey', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">ISU San Mateo Campus BTTE/BTVTED Level 1 Online Accreditation Survey</span>'),
(50, 'events/xcxcx.jpg', 'Library Services partnership with SICAT', 'Pres. Ric Aquino Seals Another Library Services Partnership With SICAT'),
(51, 'events/rtetert.jpg', 'Congratulations to all the Loyalty Awardees!', ''),
(52, 'events/sdfgdfhhfg.jpg', 'National Simultaneous Eartquake Drill 2021', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">ISU San Mateo joins the National Simultaneous Eartquake Drill 2021</span>'),
(53, 'events/mmkl.jpg', 'Virtual Students Week Celebration.', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">The Office of the Students Affairs and Services-San Mateo Campus, together with SBOs and SSC, gives you the Virtual Students’ Week Celebration.</span><br style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">'),
(54, 'events/dgdgdf.jpg', 'Fashion Competition during Students Week 2021', ''),
(55, 'events/dfgfdgdfg.jpg', 'Multimedia Competition During Students Week 2021', ''),
(56, 'events/jjfrt.jpg', 'Literacy Competition During Students Week 2021', ''),
(57, 'events/dfgdgdf.jpg', 'Music Competition During Students Week 2021', ''),
(58, 'events/dfgdfg.jpg', 'Visual Arts Competition During Students Week 2021', ''),
(59, 'events/jjk.jpg', 'IGLO: a new project for community empowerment. ', '<span style=\"color: rgb(5, 5, 5); font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 15px;=\"\" white-space:=\"\" pre-wrap;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\">The Extension and Business Affair Team of ISU San Mateo campus assists the IGLO in planning a new project for community empowerment. </span>'),
(60, 'events/tyrty.jpg', 'Dr. Boyet L. Batang, ISU VP for ARA, visits', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">Dr. Boyet L. Batang, ISU VP for ARA, visits the Garments Laboratory of ISU San Mateo and tries out the sewing machine  used TO ENHANCE  THE PRACTICAL SKILLS  of BTVTEd students and recipients of extension programs of the campus.</span>'),
(61, 'events/jjhjhj.jpg', 'Philippine Air Force visits ISU San Mateo', '');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `researcher` varchar(50) NOT NULL,
  `confe_type` varchar(50) NOT NULL,
  `confe_title` varchar(50) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `researcher`, `confe_type`, `confe_title`, `venue`, `date`) VALUES
(4, 'A Tracer Study on the Bachelorof Agricultural Tech', 'Mar Heisen A. Yanos, Julie F. Espinosa', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(16, 'Design and Construct LDR Night Switch Sensor Circu', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(5, 'The Teaching of Civic Education as Percieved by La', 'Rosalie C. Leal, Orpha S. Saguibo, Reynaldo M. Bru', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(3, 'Design and Construct Interface Circuits', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(6, 'Predictors of Academic Performance of Technical-Vo', 'Jenalyn C. Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(7, 'Factors Affecting the Performance of Technical-Voc', 'Jenalyn C. Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(8, 'Development of AC/DC Motor Control Trainer', 'Raymund G. Velasco', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(9, 'Assessing the Performance of the 4th Year BAT Stud', 'Kelvin Kris C. Gonzales, Mar Heisen A. Yanos', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(10, 'Completion of Garments And Fashion Design (GDF) Co', 'Jenalyn C. Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(11, 'Development and Improvised Automatic Transfer for ', 'Samuel L. Bello, Raymund G. Velasco', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(12, 'Development and Implementation of a Class Attendan', 'Bonna S. Guevarra, Fely T. Corpuz', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(13, 'Development and Implemenation of Web-Based Instruc', 'Bonna S. Guevarra, Bernadeth D. Bagalay', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(14, 'Evaluation of the Developed AC/DC Motor Control wi', 'Raymund G. Velasco, Frederick P. Dela Cruz', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(15, 'Design and Construct Automated Egg Incubator (DCAE', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(17, 'Design and Construct Free Energy Generator using M', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(18, 'Security Performance of Modified MD5 Algorithm for', 'Larry De Guzman', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(19, 'Modefied MD5 Algorithm for Data Integrity using Se', 'Larry De Guzman', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(20, 'Assessing the Lackadaisical Attitudes of ISU Facul', 'Isagani M. Valeroso', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(21, 'Assessing the Level of Research Involvement and Pr', 'Rosalie C. Leal, Isagani M. Valeroso', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(22, 'Students Preference: Online or Face-To-Face Intera', 'Rosalie C. Leal, Orpha S. Saguibo, Ryan Jay O. Agr', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(23, 'Factors Affecting Synchronous E-Learning Amid Covi', 'Rosalie C. Leal, Ryan Jay O. Agron', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(24, 'Learning Engagement in Online Classes during COVID', 'Renalyn P. Mora, Rosalie C. Leal', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(25, 'Teachers Classroom Management Strategies in Online', 'Julie F. Espinosa, Rosalie C. Leal', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(26, 'Teaching Difficulties in Implementing Distance Lea', 'Myla G. Velasco, Rosalie C. Leal', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(27, 'Tracer Study of Bachelor of Secondary Education of', 'Julie F. Espinosa, Renalyn P. Mora', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(28, 'Land Use Land Cover Classification and Changes: A ', 'Mar Heisen A. Yanos, Jeremiah Jathniel O. Guevarra', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(29, 'Suitability Analysis and Mapping for Mungbean Cult', 'Mar Heisen A. Yanos, Johna Mae B. Udan', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(30, 'Design and Development of Trainers for Electronic ', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(31, 'Design and Development of Automated School Alarm B', 'Noel B. Damian, Sonny Boy V. Villegas Jr.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(32, 'Development of Andriod Application for Professiona', 'Kelvin Kris C. Gonzales, Bernadette D. Bagalay', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(33, 'Development of Bagani Sewing Cabinet', 'Renaldo G. Manipon, Jenalyn C. Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(34, 'Development and Evaluation of a Multipurpose Table', 'Renaldo G. Manipon, Jenalyn C. Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(35, 'Development and Evaluation of Modular Circuit Logi', 'Frederick P. Dela Cruz, Raymund G. Velasco, Andres', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(36, 'Assessing the Level of Implementation and Efficien', 'Reynaldo M. Brutas', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(37, 'Civic Education Among College Students: A Case Stu', 'Rosalie C. Leal, Julie F. Espinosa', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(38, 'Inside The World of Children In-Conflict with Law ', 'Maria Paz Consuelo C. Dammay', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(39, 'Perceived Social Support and Resilience of ISU Col', 'Maria Paz Consuelo C. Dammay', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx'),
(40, 'Assessment of Mungbean Seed Longevity Conservation', 'Mar Heisen A. Yanos, Genesis Dela Pena, Jenifer L.', 'RegionalEx', 'SampleEx', 'SampleEx', 'SampleEx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dat`
--

CREATE TABLE `tbl_dat` (
  `ID` int(255) NOT NULL,
  `pres` varchar(255) NOT NULL,
  `vice` varchar(255) NOT NULL,
  `isec` varchar(255) NOT NULL,
  `esec` varchar(255) NOT NULL,
  `trea` varchar(255) NOT NULL,
  `aud` varchar(255) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `pio` varchar(255) NOT NULL,
  `mus` varchar(255) NOT NULL,
  `esco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dat`
--

INSERT INTO `tbl_dat` (`ID`, `pres`, `vice`, `isec`, `esec`, `trea`, `aud`, `bus`, `pio`, `mus`, `esco`) VALUES
(1, 'rb', 'njnj', 'nj', 'njn', 'jn', 'jn', 'jn', 'jn', '', 'j'),
(2, 'rb', 'njnj', 'nj', 'njn', 'jn', 'jn', 'jn', 'jn', '', 'j'),
(3, 'rb', 'njnj', 'nj', 'njn', 'jn', 'jn', 'jn', 'jn', '', 'j'),
(4, 'jhnjj', 'jn', 'jnj', 'nj', 'nn', 'n', 'nj', 'nj', '', 'njnjnj'),
(5, 'njnj', 'jn', 'jnj', 'njn', 'jn', 'nnnjn', 'jnj', 'njjnjnjn', 'jnjnjnjn', 'njnj'),
(6, 'knkmnjknjk', 'njnjnjn', 'jnjnjnjnj', 'nj', 'njn', 'jn', 'jn', 'jn', 'jnj', 'nj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ict`
--

CREATE TABLE `tbl_ict` (
  `ID` int(255) NOT NULL,
  `pres` varchar(255) NOT NULL,
  `vice` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `trea` varchar(255) NOT NULL,
  `aud` varchar(255) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `pio` varchar(255) NOT NULL,
  `frep` varchar(255) NOT NULL,
  `srep` varchar(255) NOT NULL,
  `trep` varchar(255) NOT NULL,
  `ftrep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ict`
--

INSERT INTO `tbl_ict` (`ID`, `pres`, `vice`, `sec`, `trea`, `aud`, `bus`, `pio`, `frep`, `srep`, `trep`, `ftrep`) VALUES
(1, 'mxckvnxcvn', 'INCNXVNQ', 'INOPIK', 'NOLN', 'IKNOLN', 'OLNBHU', 'NOLIKN', 'OLNOLKN', '', 'NOLIKNOL', 'DFGDFG'),
(2, 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H'),
(3, 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pse`
--

CREATE TABLE `tbl_pse` (
  `ID` int(255) NOT NULL,
  `pres` varchar(255) NOT NULL,
  `vice` varchar(255) NOT NULL,
  `msec` varchar(255) NOT NULL,
  `bsec` varchar(255) NOT NULL,
  `trea` varchar(255) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `bse` varchar(255) NOT NULL,
  `btte` varchar(255) NOT NULL,
  `btv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pse`
--

INSERT INTO `tbl_pse` (`ID`, `pres`, `vice`, `msec`, `bsec`, `trea`, `bus`, `bse`, `btte`, `btv`) VALUES
(1, 'salam', 'njjj', 'bjhb', 'jhb', 'b', 'bb', 'jhb', 'hjbh', 'b'),
(2, 'dfgdfgjnj', 'nj', 'njn', 'jnj', 'jn', 'jnj', 'jnjj', 'jnjjn', 'jnjnjn'),
(3, 'salam', 'kling', '77', '1', '2', '33', '44', '55', '66');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ssc`
--

CREATE TABLE `tbl_ssc` (
  `ID` int(255) NOT NULL,
  `pres` varchar(255) NOT NULL,
  `vice` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `trea` varchar(255) NOT NULL,
  `aud` varchar(255) NOT NULL,
  `acc` varchar(255) NOT NULL,
  `pse` varchar(255) NOT NULL,
  `ict` varchar(255) NOT NULL,
  `dat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ssc`
--

INSERT INTO `tbl_ssc` (`ID`, `pres`, `vice`, `sec`, `trea`, `aud`, `acc`, `pse`, `ict`, `dat`) VALUES
(1, 'salam', 'kling', 'domingo', 'bonna', 'Saua', 'Guevarra', 'Jogn', 'lord', 'andres'),
(2, '1', '2', '3', '4', '5', '6', '7', '8', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extension`
--
ALTER TABLE `extension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_events`
--
ALTER TABLE `home_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dat`
--
ALTER TABLE `tbl_dat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_ict`
--
ALTER TABLE `tbl_ict`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pse`
--
ALTER TABLE `tbl_pse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_ssc`
--
ALTER TABLE `tbl_ssc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extension`
--
ALTER TABLE `extension`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `home_events`
--
ALTER TABLE `home_events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_dat`
--
ALTER TABLE `tbl_dat`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ict`
--
ALTER TABLE `tbl_ict`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pse`
--
ALTER TABLE `tbl_pse`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ssc`
--
ALTER TABLE `tbl_ssc`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
