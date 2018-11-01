-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2018 at 03:32 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(20) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_address` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_username`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_username`, `admin_password`, `admin_email`, `admin_mobile`, `admin_gender`, `admin_address`) VALUES
('akdwj', 'ukh', '', 'k@dskjf', '1111111', 'male', 'asfk'),
('sdah', 'adwjk', '', 'wdaku@asjd', '28364', 'male', 'fkud'),
('admin', 'admin123', '', 'admin123@qq', '51515151', 'male', 'gagaga'),
('lalal', 'lalal', '', 'lalal@haha', '7171717', 'male', 'dhdjhdh'),
('mamam', ',amam', '', 'ass@qqq', '515151', 'female', 'snshs'),
('qqqqqqqq', 'ramu123', 'qqqqqqqq', 'ramu@123', '92929292', 'female', 'ujjainhzxhzdhf'),
('', '', '', '', '', '', ''),
('admin125', 'mamama', '', '', '', '', ''),
('afhfbsddfh', 'dsfsdkhfsdf', 'aaaaaaaa', 'sdfkjsdfh@hdhhh.com', '7777777778', 'male', 'zdcjdfjdfjdj'),
('Rahul Chouhan', 'rahul3008', 'rahulchauhan', 'chauhanr@gmail.com', '9669998879', '', 'H.no 167 Dongargaon, Mhow\r\nIndore\r\n'),
('akash', 'akash', 'akashmaheshwari', 'akash@gmail.com', '9669998879', '', 'sindhi colony');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `candidate_id` varchar(20) NOT NULL,
  `candidate_name` varchar(20) NOT NULL,
  `candidate_phone` varchar(15) NOT NULL,
  `candidate_email` varchar(200) NOT NULL,
  `candidate_gender` varchar(10) NOT NULL,
  `candidate_address` varchar(300) NOT NULL,
  `candidate_pic` varchar(300) NOT NULL,
  `party_id` varchar(20) DEFAULT NULL,
  `candidate_ward` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`candidate_id`),
  KEY `party_id` (`party_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `candidate_name`, `candidate_phone`, `candidate_email`, `candidate_gender`, `candidate_address`, `candidate_pic`, `party_id`, `candidate_ward`) VALUES
('c1', 'popo', '7171717171', 'ssssssssssssssssss@aa.com', 'male', 'asdcsdjc', 'upload/admin_icon.png', NULL, 'w1'),
('c2', 'kaka', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'nnn', 'w1'),
('c6', 'pappu', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'nnn', 'w1'),
('c7', 'topi', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'zsfjd', 'w1'),
('c71', 'manmohan', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'zsfjd', 'w1'),
('c9', 'kejri', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'dfg', 'w1'),
('c002', 'siddhu', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'dfg', 'w1'),
('c44', 'lalu', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'p9', 'w1'),
('c999', 'jajajaja', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'dfg', 'w1'),
('c6565', 'mohan', '070 0022 1871', 'ssssssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'p42', 'w1'),
('c90', 'candy', '7612138161', 's@g.com', 'male', 'nanananna', 'upload/admin_icon.png', 'dfg', 'w1'),
('c66666', 'lolo', '8333333333', 's@g.com', 'female', 'msdfmsd,f', 'upload/admin_icon.png', 'dfg', 'w2'),
('1', 'priyesh', '8821022000', 'priyeshrajput3@gmail.com', 'male', 'H.No 118 sangam nagar\r\nIndore', 'upload/add_admin.png', '1', 'w1'),
('j3', 'popo', '4224262612', 'sssssssssss@ahha.com', 'male', 'bbababab', 'upload/admin_icon.png', 'zsfjd', 'w2'),
('3', 'pintu patel', '9696969699', 'pintupatel@gmail.com', 'male', 'h.no.1112, dana gali, MHOW\r\nINDORE', 'upload/beach.jpg', '3', 'w2'),
('2121', 'asdasdasd', '070 0022 1876', 'sssssssssssssss@aa.com', 'male', 'A-155 samarth park, umariya, mhow near toll booth. distt Indore', 'upload/admin_icon.png', 'nnn', 'w1'),
('345', 'anuj', '8181333333', 'haa@dd.com', 'male', 'asfmhsdfkjsdf', 'upload/admin_icon.png', 'zsfjd', 'w2'),
('123', 'ramu', '0101333333', 'dd@ll.com', '', 'dsfjsdfj', 'upload/', 'nnn', 'w2'),
('g5', 'modi', '6531904321', 's@ff.com', 'male', 'bbbbbbbbbbbbbb', 'upload/admin_icon.png', 'dfg', 'w2');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `election_id` varchar(20) NOT NULL,
  `election_topic` varchar(20) NOT NULL,
  `candidate_id` varchar(20) NOT NULL,
  `election_position` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `end_date` date NOT NULL,
  `election_status` varchar(20) DEFAULT '0',
  `election_ward` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`election_id`,`candidate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`election_id`, `election_topic`, `candidate_id`, `election_position`, `starting_date`, `end_date`, `election_status`, `election_ward`) VALUES
('e1', 'jijiji', 'j3', '1', '2018-04-23', '2018-04-27', '1', 'w2'),
('e1', 'jijiji', '123', '1', '2018-04-23', '2018-04-27', '1', 'w2'),
('e1', 'jijiji', 'g5', '1', '2018-04-23', '2018-04-27', '1', 'w2'),
('e2', 'uiui', 'c7', 'nanan', '2018-04-20', '2018-04-23', '0', 'w1'),
('e2', 'uiui', 'c6', 'nanan', '2018-04-20', '2018-04-23', '0', 'w1'),
('e2', 'uiui', 'c9', 'nanan', '2018-04-20', '2018-04-23', '0', 'w1');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `party_id` varchar(20) NOT NULL,
  `party_name` varchar(20) NOT NULL,
  PRIMARY KEY (`party_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `party_name`) VALUES
('zsfjd', 'congress'),
('nnn', 'bjp'),
('dfg', 'aap');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `position_id` varchar(10) NOT NULL,
  `position_name` varchar(20) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
('nanan', 'baba'),
('p02', 'dfjg'),
('1', 'Parshad'),
('5', 'raksha mantri');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `voter_id` varchar(20) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `voter_password` varchar(20) NOT NULL,
  `voter_dob` date NOT NULL,
  `voter_phone` varchar(10) NOT NULL,
  `voter_email` varchar(200) NOT NULL,
  `voter_gender` varchar(20) NOT NULL,
  `voter_address` varchar(300) NOT NULL,
  `voter_id_pic` varchar(200) DEFAULT NULL,
  `voter_ward` varchar(20) NOT NULL,
  `voter_voting_status` varchar(118) DEFAULT NULL,
  PRIMARY KEY (`voter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voter_id`, `voter_name`, `voter_password`, `voter_dob`, `voter_phone`, `voter_email`, `voter_gender`, `voter_address`, `voter_id_pic`, `voter_ward`, `voter_voting_status`) VALUES
('200', 'kabi', '453441', '1995-11-11', '8225989319', 's@d.com', 'male', 'smsmsmsmsm', 'upload/admin_icon.png', 'w4', 'Voted'),
('v23', 'lalalalal', 'lalalalal', '1991-11-11', '9294882785', 's@f.com', 'male', 'bababababa', 'upload/logo1.png', 'w1', 'voted'),
('lalalalalal', 'iaiaiaiaai', 'pqpqpqpqqp', '1991-11-11', '8225989319', 's@f.com', 'male', 'babababababa', 'upload/add_admin.png', 'w1', 'Not Voted'),
('lplplplp', 'pappu', 'kakakakak', '1993-12-11', '8225989319', 's@f.com', 'female', 'babababababa', 'upload/add_admin.png', 'w1', 'Not Voted'),
('b1b1b1b', 'tytytytyt', 'pqpqpqpqp', '1991-11-11', '8225989319', 's@f.com', 'male', 'pipipipip', 'upload/admin_icon.png', 'w1', 'voted'),
('totototo', 'titititit', 'ququququ', '1991-11-11', '8225989319', 's@f.com', 'male', 'bababababababa', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('v7777', 'demo voter', 'qqqqqqqq', '1991-11-11', '8225989319', 's@f.com', 'male', 'aaaaaaaaaaaaaaaaa', 'upload/add_admin.png', 'w1', 'voted'),
('vqvqvqv', 'pqpqpqpq', 'lalalalalala', '1991-11-11', '8225989319', 's@f.com', 'male', 'vavavavava', 'upload/admin_icon.png', 'w4', 'voted'),
('m1m1m1m1m1', 'kakak', 'qtqtqtqtqtq', '1991-11-11', '8225989319', 's@f.com', 'female', 'babababab', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('v2v2v2v2', 'bittu', 'pqpapaap', '1991-11-11', '8225989319', 's@f.com', 'male', 'bababababa', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('v9v9v9v9v', 'lalalalaal', 'pqpqpqpqpq', '1991-11-11', '8225989319', 's@f.com', 'male', 'bababababa', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('v4v4v6v6', 'rohan', 'lalalalal', '1991-11-11', '8225989319', 's@f.com', 'male', 'ssssssssssss', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('v4v4v4v5555', 'ronui', 'kakakaka', '1991-11-11', '8225989319', 's@f.com', 'male', 'lqlqlqlqlql', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('n2n3', 'kikiki', 'qqqqqqqq', '1991-11-11', '8225989319', 's@d.com', 'male', 'zdkjvsdkjgdkfj', 'upload/admin_icon.png', 'w4', 'voted'),
('v1v1vvv', 'jajajajaj', 'akakakaka', '1991-11-11', '8225989319', 's@h.com', 'male', 'hhhhhhhhhh', 'upload/admin_icon.png', 'w2', 'voted'),
('v2323', 'kakakakak', 'jajajajaj', '1993-11-11', '8225989319', 's@h.com', 'male', 'amamamama', 'upload/admin_icon.png', 'w3', 'voted'),
('7651', 'hshsh', 'qrqrqr', '1991-11-11', '8145151515', 's@f.com', 'male', 'nsnsnsnsnsn', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('uquququ', 'uauauauau', 'uwuwuwwu', '1991-11-11', '7171525252', 's@f.com', 'male', 'dfsdfsdfsdfsd', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('y2y2y2', 'tatatatat', 'hahahahaahh', '1991-11-11', '4545464531', 's@f.com', 'male', 'bsbsbsbssb', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('y5y5y5y', 'bbbbbb', 'yayayayayay', '1991-11-11', '4143546447', 's@f.com', 'male', 'ssnsnsnsns', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('976', 'hshshs', 'ttetetet', '1991-11-11', '0120304555', 's@f.com', 'male', 'dddbdbddbdb', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('7777777', 'kikiki', 'nxnxnxnxnxn', '1991-11-11', '4513131313', 'ssss@ss.com', 'male', 'ndndndndn', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('o2o3', 'kiku', '123456', '1991-11-11', '1010616171', 'as@sadjjjjjdj.com', 'male', 'sdkjfsdjbf', 'upload/admin_icon.png', 'w2', 'Not Voted'),
('345', 'huhuhu', 'agagagagag', '1991-11-11', '8181818181', 's@f.com', 'male', 'shshshshshs', 'upload/admin_icon.png', 'w2', 'voted'),
('66666', 'jaku', 'hahahaah', '1991-11-11', '7575751234', 's@f.com', 'male', 'bbbbbbbbb', 'upload/admin_icon.png', 'w1', 'Not Voted'),
('701', 'anil', 'jjajaja', '1991-11-11', '1765131571', 's@f.com', 'male', 'vcfrerfff', 'upload/admin_icon.png', 'w1', 'Not Voted');

-- --------------------------------------------------------

--
-- Table structure for table `vote_data`
--

DROP TABLE IF EXISTS `vote_data`;
CREATE TABLE IF NOT EXISTS `vote_data` (
  `voter_id` varchar(20) NOT NULL,
  `candidate_id` varchar(20) NOT NULL,
  `election_id` varchar(20) DEFAULT NULL,
  KEY `voter_id` (`voter_id`),
  KEY `candidate_id` (`candidate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_data`
--

INSERT INTO `vote_data` (`voter_id`, `candidate_id`, `election_id`) VALUES
('v1v1vvv', 'j3', 'e1'),
('345', 'j3', 'e1'),
('v23', 'c7', 'e2'),
('v7777', 'c7', 'e2');

-- --------------------------------------------------------

--
-- Table structure for table `voting_result`
--

DROP TABLE IF EXISTS `voting_result`;
CREATE TABLE IF NOT EXISTS `voting_result` (
  `vote_count` int(11) NOT NULL DEFAULT '0',
  `candidate_id` varchar(10) DEFAULT NULL,
  `election_id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting_result`
--

INSERT INTO `voting_result` (`vote_count`, `candidate_id`, `election_id`) VALUES
(2, 'c7', 'e2');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `ward_id` varchar(20) NOT NULL,
  `ward_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_id`, `ward_name`) VALUES
('w1', 'ward1'),
('w2', 'ward2'),
('w3', 'ward3'),
('w4', 'ward4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
