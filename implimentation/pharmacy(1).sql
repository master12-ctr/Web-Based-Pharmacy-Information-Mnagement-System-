
--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(40) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`accountid`),
  UNIQUE KEY `accountid` (`accountid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountid`, `username`, `password`, `position`) VALUES
(66, 'sualih', 'hussen', 'storecoordinator'),
(45, 'marew', 'nega', 'pharmacist'),
 (60, 'seged', 'mulugeta', 'cashier'),
(19, 'tadese', 'worku', 'manager');
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `midlename` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `region` varchar(40) NOT NULL,
  `wereda` varchar(40) NOT NULL,
  `kebele` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `midlename`, `lastname`, `age`, `sex`, `region`, `wereda`, `kebele`, `empid`) VALUES
(4, 'mekdes', 'kebede', 'alula', 43, 'Female', 'Oromia', 'rede', 43,66),
(5, 'mulugeta', 'kebede', 'lastaw', 23, 'Male', 'Tigray', 'adwa', 11, 66),
(6, 'abebe', 'chekol', 'mengstu', 23, 'Female', 'beneshangul', 'metekel', 212, 66),
(7, 'mekash', 'habtam', 'wende', 24, 'Male', 'amhara', 'delanta', 654, 66),
(8, 'kedir', 'mahamud', 'yimam', 88, 'Female', 'amhara', 'densa', 234, 66);

-- --------------------------------------------------------

--
-- Table structure for table `stockdrug`
--

CREATE TABLE IF NOT EXISTS `stockdrug` (
  `empid` int(11) NOT NULL,
  `drugname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `companyname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `bachnumber` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `shelfnumber` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  PRIMARY KEY (`bachnumber`),
  KEY `empid` (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `stockdrug`
--

INSERT INTO `stockdrug` (`empid`, `drugname`, `companyname`, `bachnumber`, `quantity`, `unitprice`, `shelfnumber`, `expirydate`) VALUES
(45, 'tetracyclin', 'enc', 444, 4664, 2, 5, '2022-08-11'),
(45, 'citamol 200mg', 'china', 333, 3831, 4, 4, '2022-07-25'),
(45, 'montaco', 'adigrat', 12345, 8000, 8, 2, '2023-01-30'),
(45, 'relief', 'china', 999, 80000, 2, 2, '2022-07-10');

-- --------------------------------------------------------

--



--

-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `firstname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `employeeid` int(11) NOT NULL,
  `sex` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `address` varchar(40) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`employeeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`firstname`, `lastname`, `employeeid`, `sex`, `age`, `salary`, `address`) VALUES
('tadese', 'worku', 19, 'Male', 23, 4900, 'chagni'),
('seged', 'mulugeta', 60, 'Female', 24, 4800, 'dangila'),
('marew', 'nega', 45, 'Male', 34, 6789, 'adis kidam'),
('sualih', 'hussen', 66, 'Male', 34, 3456, 'bedre markos');
-- --------------------------------------------------------

--
-- Table structure for table `solddrug`
--

CREATE TABLE IF NOT EXISTS `solddrug` (
  `sellnumber` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `bachnumber` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `audited` varchar(10) NOT NULL,
  PRIMARY KEY (`sellnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `solddrug`
--

INSERT INTO `solddrug` (`sellnumber`, `empid`, `customerid`, `bachnumber`, `quantity`, `date`, `status`, `audited`) VALUES
(5, 45, 4, 111, 10, '2022-07-05', 'true', 'Yes'),
(6, 45, 1, 444, 233, '2022-07-05', 'true', 'Yes'),
(7, 45, 1, 444, 23, '2022-07-05', 'true', 'Yes'),
(8, 45, 1, 333, 89, '2022-07-05', 'true', 'Yes'),
(9, 45, 3, 222, 90, '2022-07-05', 'true', 'Yes'),
(10, 45, 1, 333, 80, '2022-07-05', 'true', 'Yes'),
(11, 45, 1, 222, 90, '2022-07-05', 'true', 'Yes'),
(12, 45, 2, 444, 80, '2022-07-05', 'true', 'Yes'),
(13, 45, 2, 111, 80, '2022-07-05', 'true', 'Yes'),
(14, 45, 1, 222, 3000, '2022-07-05', 'false', 'No'),
(15, 45, 1, 111, 2000, '2022-07-05', 'false', 'No'),
(16, 45, 1, 1212, 5000, '2022-07-05', 'false', 'No');


--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `storedrug` (
  `empid` int(11) NOT NULL,
  `drugname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `companyname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `bachnumber` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
    `expirydate` date NOT NULL,
` drug_description` varchar(80),
  PRIMARY KEY (`bachnumber`),
  KEY `empid` (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
