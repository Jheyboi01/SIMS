-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 04:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dun`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `user`, `password`) VALUES
('gdgdgd', 'ydydydy', 'uududud'),
('Azubuike Chukwuma Timothy', 'Timsoft', '2222'),
('Jamiu Abiodun', 'jheyboi', '12345'),
('Jamiu Abiodun', 'jheyboi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `coursetitle` varchar(300) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`coursetitle`, `code`) VALUES
('fhdjksl;a', 'gggdgdgdg'),
('Advanced Communication Skills', 'GNS 403'),
('Intro to JAVA', 'CMP 409'),
('Numerical method', 'CMP 404'),
('Data Stucture', 'CMP 402'),
('Computer security', 'CMP 406'),
('Data Base Management', 'CMP 408'),
('PC Assembly', 'CME 404'),
('Introduction to Computing', 'CMP101'),
('Human Anatomy and Physiology', 'HES 104'),
('Cell Biology', 'HES 101'),
('Use of English', 'GNC 101'),
('Communication Skills', 'GNS 102'),
('Introduction to Statistic', 'GNC 102'),
('Resesrch Methodology', 'GNC 403'),
('Graphic Design', 'CMP 403'),
('C++ Programming III', 'CMP 409'),
('Business Policy and Strategic Planning', 'BUS 403'),
('Algorithm and Structured programming', 'CME 401'),
('Digital Electronics', 'CME 403'),
('Management Information system', 'CMP 401'),
('Advanced Communication Skills I', 'GNS 401');

-- --------------------------------------------------------

--
-- Table structure for table `studentsignup`
--

CREATE TABLE `studentsignup` (
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  ` lastname` varchar(20) NOT NULL,
  `  gender` varchar(10) NOT NULL,
  ` email` varchar(150) NOT NULL,
  ` phone` varchar(15) NOT NULL,
  ` matric` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  ` password` varchar(20) NOT NULL,
  `admission` varchar(1000) NOT NULL,
  `graduation` varchar(1000) NOT NULL,
  `cgpa` varchar(1000) NOT NULL,
  `pat` varchar(1000) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `c1` varchar(1000) NOT NULL,
  `c2` varchar(1000) NOT NULL,
  `c3` varchar(1000) NOT NULL,
  `c4` varchar(1000) NOT NULL,
  `c5` varchar(1000) NOT NULL,
  `c6` varchar(1000) NOT NULL,
  `c7` varchar(1000) NOT NULL,
  `c8` varchar(1000) NOT NULL,
  `d1` varchar(1000) NOT NULL,
  `d2` varchar(1000) NOT NULL,
  `d3` varchar(1000) NOT NULL,
  `d4` varchar(1000) NOT NULL,
  `d5` varchar(1000) NOT NULL,
  `d6` varchar(1000) NOT NULL,
  `d7` varchar(1000) NOT NULL,
  `d8` varchar(1000) NOT NULL,
  `e1` varchar(1000) NOT NULL,
  `e2` varchar(1000) NOT NULL,
  `e3` varchar(1000) NOT NULL,
  `e4` varchar(1000) NOT NULL,
  `e5` varchar(1000) NOT NULL,
  `e6` varchar(1000) NOT NULL,
  `e7` varchar(1000) NOT NULL,
  `e8` varchar(1000) NOT NULL,
  `f1` varchar(1000) NOT NULL,
  `f2` varchar(1000) NOT NULL,
  `f3` varchar(1000) NOT NULL,
  `f4` varchar(1000) NOT NULL,
  `f5` varchar(1000) NOT NULL,
  `f6` varchar(1000) NOT NULL,
  `f7` varchar(1000) NOT NULL,
  `f8` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsignup`
--

INSERT INTO `studentsignup` (`surname`, `firstname`, ` lastname`, `  gender`, ` email`, ` phone`, ` matric`, `username`, ` password`, `admission`, `graduation`, `cgpa`, `pat`, `dpt`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`) VALUES
('me', 'me', 'me', 'me', 'me', 'me', 'me', 'me', 'me', '2019', '2020', '2.5', 'f71a711782cbe0d385babc5d8093300b8b53b8b4.png', '', 'fhdjksl;a', 'fhdjksl;a', 'fhdjksl;a', 'fhdjksl;a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Qamorudeen', 'Jamiu', 'Abiodun', 'male', 'arbiodunabey@gmail.com', '+2348171881194', 'OOUC/HD/18069', 'jheyboi', '12345', '2016', '2019', '4.6', '36444ad8a28a1625fa8802e0f37c2fa5c9584752.png', 'Computer Science', 'Advanced Communication Skills', 'Numerical method', 'Intro to JAVA', 'Data Base Management', 'PC Assembly', 'Computer security', 'Numerical method', 'Data Stucture', 'Data Stucture', 'Computer security', 'Data Base Management', 'Data Base Management', 'Data Base Management', 'Computer security', 'Intro to JAVA', 'Numerical method', 'Intro to JAVA', 'Advanced Communication Skills', 'Data Stucture', 'PC Assembly', 'Data Base Management', 'PC Assembly', 'Numerical method', 'Computer security', 'Data Stucture', 'Computer security', 'Advanced Communication Skills', 'PC Assembly', 'Advanced Communication Skills', 'Data Stucture', 'Data Base Management', 'Computer security'),
('Qamorudeen', 'Jamiu', 'Abiodun', 'male', 'arbiodunabey@gmail.com', '+2348171881194', 'OOUC/HD/18069', 'jheyboi', '12345', '2016', '2019', '4.6', '36444ad8a28a1625fa8802e0f37c2fa5c9584752.png', 'Computer Science', 'Advanced Communication Skills', 'Numerical method', 'Intro to JAVA', 'Data Base Management', 'PC Assembly', 'Computer security', 'Numerical method', 'Data Stucture', 'Data Stucture', 'Computer security', 'Data Base Management', 'Data Base Management', 'Data Base Management', 'Computer security', 'Intro to JAVA', 'Numerical method', 'Intro to JAVA', 'Advanced Communication Skills', 'Data Stucture', 'PC Assembly', 'Data Base Management', 'PC Assembly', 'Numerical method', 'Computer security', 'Data Stucture', 'Computer security', 'Advanced Communication Skills', 'PC Assembly', 'Advanced Communication Skills', 'Data Stucture', 'Data Base Management', 'Computer security'),
('Adelani', 'Elizabeth', 'Mercy', 'female', 'omolani.mercy2002@gmail.com', '08134374442', 'OOUC/190094', 'mercy', 'mercy', '2018', 'till date', '---', '647b8f96d12b2ff3bf5fefec86f5ea948be3a9ca.png', 'Nursing Science', 'Use of English', 'Cell Biology', 'Introduction to Computing', 'Human Anatomy and Physiology', 'Communication Skills', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('bello', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Abiodun', 'Jamiu', 'Abiodun', '', 'arbiodunabey@gmail.com', '+2348171881194', '1765', 'jheyboi', '1234567', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
