-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.52-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pets
CREATE DATABASE IF NOT EXISTS `pets` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pets`;

-- Dumping structure for table pets.add
CREATE TABLE IF NOT EXISTS `add` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sub_location_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `pet_type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`add_id`),
  KEY `FK_add_pet_info` (`pet_id`),
  KEY `FK_add_user` (`user_id`),
  KEY `FK_add_user_sub_location` (`sub_location_id`),
  CONSTRAINT `FK_add_pet_info` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`pet_id`),
  CONSTRAINT `FK_add_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `FK_add_user_sub_location` FOREIGN KEY (`sub_location_id`) REFERENCES `user_sub_location` (`sub_location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.add: ~5 rows (approximately)
/*!40000 ALTER TABLE `add` DISABLE KEYS */;
INSERT INTO `add` (`add_id`, `pet_id`, `user_id`, `sub_location_id`, `date`, `phone`, `pet_type`) VALUES
	(4, 9, 1, 4, '2019-07-24 04:13:27', '0715208128', 'dog'),
	(5, 10, 4, 28, '2019-07-24 07:48:38', '0719356391', 'dog'),
	(6, 11, 1, 30, '2019-07-24 11:31:45', '0785767357', 'cat'),
	(12, 21, 7, 9, '2019-07-26 11:36:39', '0718807480', 'dog'),
	(13, 23, 21, 2, '2019-07-30 08:10:27', '0770079044', 'dog');
/*!40000 ALTER TABLE `add` ENABLE KEYS */;

-- Dumping structure for table pets.add_comment
CREATE TABLE IF NOT EXISTS `add_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_add_comment_add` (`add_id`),
  KEY `FK_add_comment_user` (`user_id`),
  CONSTRAINT `FK_add_comment_add` FOREIGN KEY (`add_id`) REFERENCES `add` (`add_id`),
  CONSTRAINT `FK_add_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.add_comment: ~2 rows (approximately)
/*!40000 ALTER TABLE `add_comment` DISABLE KEYS */;
INSERT INTO `add_comment` (`comment_id`, `add_id`, `user_id`, `comment`, `date`) VALUES
	(6, 12, 1, 'kkk', '2019-07-27 00:00:00'),
	(7, 12, 4, 'hhhhhhhhhhhhhh', '2019-07-29 14:01:12');
/*!40000 ALTER TABLE `add_comment` ENABLE KEYS */;

-- Dumping structure for table pets.add_report
CREATE TABLE IF NOT EXISTS `add_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reason` int(3) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`report_id`),
  KEY `FK_add_report_add` (`add_id`),
  KEY `FK_add_report_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.add_report: ~4 rows (approximately)
/*!40000 ALTER TABLE `add_report` DISABLE KEYS */;
INSERT INTO `add_report` (`report_id`, `add_id`, `user_id`, `reason`, `message`, `date`) VALUES
	(14, 19, 1, 3, 'ss', '2019-07-26 00:00:00'),
	(15, 19, 1, 3, 'lll', '2019-07-27 00:00:00'),
	(16, 21, 1, 3, 'jjj', '2019-07-27 00:00:00'),
	(17, 21, 4, 3, 'hhhhhhh', '2019-07-29 14:00:45');
/*!40000 ALTER TABLE `add_report` ENABLE KEYS */;

-- Dumping structure for table pets.message
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) NOT NULL DEFAULT '0',
  `to` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.message: ~3 rows (approximately)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`message_id`, `add_id`, `to`, `from`, `message`, `date`, `time`) VALUES
	(2, 2, 2, 1, 'ss', '2019-07-27', '07:12:33'),
	(3, 12, 7, 1, 'halo', '2019-07-27', '07:18:58'),
	(4, 12, 7, 4, 'hyyy', '2019-07-29', '14:00:20');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Dumping structure for table pets.pet_feature
CREATE TABLE IF NOT EXISTS `pet_feature` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `protective` int(5) DEFAULT NULL,
  `playful` int(5) DEFAULT NULL,
  `affectionate` int(5) DEFAULT NULL,
  `gentle` int(5) DEFAULT NULL,
  `kids` int(5) DEFAULT NULL,
  `dogs` int(5) DEFAULT NULL,
  `cats` int(5) DEFAULT NULL,
  `apartments` int(5) DEFAULT NULL,
  `seniors` int(5) DEFAULT NULL,
  `about_pet` varchar(150) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`feature_id`),
  KEY `FK_pet_feature_pet_info` (`pet_id`),
  CONSTRAINT `FK_pet_feature_pet_info` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.pet_feature: ~24 rows (approximately)
/*!40000 ALTER TABLE `pet_feature` DISABLE KEYS */;
INSERT INTO `pet_feature` (`feature_id`, `protective`, `playful`, `affectionate`, `gentle`, `kids`, `dogs`, `cats`, `apartments`, `seniors`, `about_pet`, `pet_id`) VALUES
	(1, 1, 0, 1, 0, 0, 0, 0, 1, 1, NULL, 1),
	(2, 1, 0, 1, 1, 1, 1, 1, 0, 1, NULL, 2),
	(3, 1, 1, 0, 1, 1, 1, 0, 0, 1, 'i want good and beautiful cat.', 3),
	(4, 1, 0, 1, 0, 0, 1, 0, 1, 0, 'this is wal balla', 4),
	(5, 1, 0, 1, 0, 0, 1, 0, 1, 0, 'this is wal balla', 4),
	(7, 0, 1, 0, 0, 0, 1, 1, 0, 0, 'this is good', 5),
	(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'ok ', 9),
	(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ok ', 7),
	(12, 0, 0, 1, 0, 0, 1, 0, 1, 0, 'this is good dog', 8),
	(13, 0, 0, 1, 0, 0, 1, 0, 1, 0, 'this is good dog', 8),
	(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'kkk', 17),
	(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'kkk', 18),
	(16, 0, 1, 0, 0, 0, 0, 1, 1, 0, 'good cat', 10),
	(17, 0, 1, 0, 0, 0, 0, 1, 1, 0, 'good cat', 10),
	(18, 0, 0, 0, 1, 0, 1, 0, 1, 0, 'good pet', 11),
	(19, 0, 0, 0, 1, 0, 1, 0, 1, 0, 'good pet', 11),
	(24, 0, 1, 0, 1, 0, 1, 0, 1, 0, 'god cat', 14),
	(25, 0, 1, 0, 1, 0, 1, 0, 1, 0, 'god cat', 14),
	(26, 0, 0, 1, 0, 0, 1, 0, 1, 0, 'beautiful cat', 15),
	(27, 0, 1, 1, 0, 0, 1, 1, 1, 0, 'oko okoooooooo', 16),
	(28, 0, 0, 0, 0, 1, 0, 1, 0, 1, '', 17),
	(32, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'this is a good dog', 21),
	(33, 0, 1, 0, 1, 0, 1, 0, 1, 0, 'sssssssssss', 22),
	(34, 0, 0, 0, 1, 1, 0, 0, 0, 0, 'bla bala  bla nba', 23);
/*!40000 ALTER TABLE `pet_feature` ENABLE KEYS */;

-- Dumping structure for table pets.pet_info
CREATE TABLE IF NOT EXISTS `pet_info` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_for` varchar(15) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `negotable` int(3) DEFAULT NULL,
  `nick_name` varchar(25) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `breed` varchar(25) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `colour` varchar(15) DEFAULT NULL,
  `age` varchar(15) DEFAULT NULL,
  `group` varchar(15) DEFAULT NULL,
  `traning_level` varchar(25) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pet_id`),
  UNIQUE KEY `time_id` (`time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.pet_info: ~21 rows (approximately)
/*!40000 ALTER TABLE `pet_info` DISABLE KEYS */;
INSERT INTO `pet_info` (`pet_id`, `pet_for`, `price`, `negotable`, `nick_name`, `type`, `breed`, `gender`, `colour`, `age`, `group`, `traning_level`, `time_id`) VALUES
	(1, 'sell', 10000, 1, 'sweety', 'Cat', 'richback', 'femail', 'brown', '3', 'adult', 'well', 1563858871),
	(2, 'sell', 5000, 1, 'sheeba', 'Cat', 'dogamen', 'mail', 'black', '4', 'adult', 'well', 1563859473),
	(3, 'buy', 2000, 0, '', 'Dog', 'kitty', 'femail', 'white', '1', 'young', 'basic', 1563860133),
	(4, 'sell', 1800, 0, 'banti', 'Cat', 'wal balla', 'mail', 'brown', '4', 'young', 'well', 1563877318),
	(5, 'engage', 1000, 0, 'lol', 'Dog', 'aa', 'mail', 'brown', '2', 'young', 'well', 1563884987),
	(6, 'engage', 2000, 1, 'sudu', 'Cat', 'dogamen', 'femail', 'gray', '4', 'young', 'well', 1563885899),
	(7, 'buy', 2400, 1, 'bruno', 'Cat', 'dogamen', 'femail', 'gray', '4', 'young', 'well', 1563886504),
	(8, 'buy', 20000, 1, 'lanti', 'Cat', 'wal balla', 'femail', 'brown', '2', 'young', 'well', 1563933996),
	(9, 'engage', 111, 1, 'sudu', 'Dog', 'aa', 'mail', 'brown', '2', 'young', 'well', 1563934402),
	(10, 'sell', 2222, 1, 'shila', 'Dog', 'kitty', 'femail', 'brown', '3', 'young', 'well', 1563934712),
	(11, 'sell', 2000, 0, 'sheeba', 'Cat', 'richback', 'femail', 'gray', '3', 'young', 'basic', 1563948099),
	(12, 'sell', 1000, 1, 'lasii', 'dog', 'solagan', 'female', 'brown', '3', 'senior', 'basic', 1563970038),
	(13, 'buy', 3000, 0, 'meeri', 'dog', 'wal cat', 'male', 'brown', 'over5', 'senior', 'basic', 1563970165),
	(14, 'engage', 3000, 1, 'odiii', 'cat', 'kitten', 'male', 'brown', '4', 'young', 'well', 1563974997),
	(15, 'sell', 20000, 0, 'rosi', 'cat', 'original', 'female', 'white', '3', 'young', 'basic', 1563975210),
	(16, 'engage', 15000, 0, 'foncyy', 'cat', 'lion cat', 'female', 'gray', '3', 'young', 'well', 1563975516),
	(17, 'engage', 1111, 0, 'dd', 'cat', 'richback', 'female', 'brown', '3', 'young', 'well', 1563976092),
	(18, 'engage', 2222, 1, 'ddd', 'cat', 'man', 'male', 'brown', '4', 'young', 'well', 1563977777),
	(21, 'engage', 1000, 0, 'richback', 'dog', 'pandi', 'female', 'brown', 'over5', 'young', 'well', 1564121194),
	(22, 'sell', 33, 0, 'fzxd', 'cat', 'sss', 'male', 'gray', '5', 'young', 'basic', 1564387776),
	(23, 'sell', 1000000, 0, 'balla', 'dog', 'cross', 'male', 'brown', '1', 'young', 'basic', 1564454422);
/*!40000 ALTER TABLE `pet_info` ENABLE KEYS */;

-- Dumping structure for table pets.pet_photo
CREATE TABLE IF NOT EXISTS `pet_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `FK_pet_photo_pet_info` (`pet_id`),
  CONSTRAINT `FK_pet_photo_pet_info` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.pet_photo: ~3 rows (approximately)
/*!40000 ALTER TABLE `pet_photo` DISABLE KEYS */;
INSERT INTO `pet_photo` (`photo_id`, `pet_id`, `path`) VALUES
	(8, 21, 'images/pet_images/1564121197.png'),
	(9, 22, 'images/pet_images/1564387779.png'),
	(10, 23, 'images/pet_images/1564454425.png');
/*!40000 ALTER TABLE `pet_photo` ENABLE KEYS */;

-- Dumping structure for table pets.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.user: ~12 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`) VALUES
	(1, 'abhishek', 'dananjaya', 'abhi@gmail.com', '123'),
	(4, 'abhishek', 'dananjaya', 'abhishekpeiris9@gmail.com', '2001'),
	(5, 'ayodya', 'divyanjali', 'ayo@gmail.com', '456'),
	(6, 'shaaz', 'lini', 'shaaz@gmail.com', '1212'),
	(7, 'dushan', 'kanishka', 'panda@gmail.com', '1212'),
	(8, 'theekshanaa', 'wasathkala', 'abcd@gmail.com', '456'),
	(18, 'abhi', 'dananjaya', 'abhishekpeiris9@gmail.com', '2001'),
	(19, 'peter', 'woods', 'linukawoods@gmail.com', '234'),
	(20, 'abhishek', 'dananjaya', 'abhishekpeiris9@gmail.com', '2001'),
	(21, 'lasith', 'Rajakarunaratne', 'lasithraja@gmail.com', '123'),
	(22, 'thisara', 'thisara', 'tisara67@gmail.com', '123'),
	(23, 'abhi', 'shek', 'abhishekpeiris9@gmail.com', '2323');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table pets.user_address
CREATE TABLE IF NOT EXISTS `user_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) DEFAULT NULL,
  `sub_location_id` int(11) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`address_id`),
  KEY `FK_user_address_user_location` (`location_id`),
  KEY `FK_user_address_user_sub_location` (`sub_location_id`),
  KEY `FK_user_address_user` (`user_id`),
  CONSTRAINT `FK_user_address_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `FK_user_address_user_location` FOREIGN KEY (`location_id`) REFERENCES `user_location` (`location_id`),
  CONSTRAINT `FK_user_address_user_sub_location` FOREIGN KEY (`sub_location_id`) REFERENCES `user_sub_location` (`sub_location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.user_address: ~15 rows (approximately)
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
INSERT INTO `user_address` (`address_id`, `location_id`, `sub_location_id`, `street`, `address`, `user_id`) VALUES
	(1, 1, 9, 'colombo', 'no 69,goluwapokuna', 1),
	(3, 1, 13, 'Bolawalana', '69, Goluwapokuna ', 4),
	(4, 1, 3, 'sithawaka road', 'No 78,sithawaka road', 5),
	(5, 2, 30, 'negombo', '34 seduwa', 6),
	(6, 1, 2, 'Mal para', '69,Sewanagala', 7),
	(7, 1, 4, 'homagama', '41/1 mawathgama homagama', 8),
	(8, 1, 4, 'homagama', '41/1 mawathgama homagama', 8),
	(9, 2, 27, 'bolawatta', '69 Goluwapokuna', 18),
	(10, 2, 28, 'kandewatta', '36/i/13/1 peramuna mawatha aldeniya kadawatha', 19),
	(11, 1, 2, 'kotte', 'malpara', 21),
	(12, 1, 2, 'kotte', 'malpara', 21),
	(13, 1, 2, 'kotte', 'malpara', 21),
	(14, 1, 2, 'kotte', 'malpara', 21),
	(15, 2, 29, 'bolawatta', 'no 69,colmbo', 22),
	(16, 2, 28, 'iyhpas', 'ojpiohi', 23);
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;

-- Dumping structure for table pets.user_data
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`user_data_id`),
  KEY `FK_user_data_user` (`user_id`),
  KEY `FK_user_data_user_address` (`address_id`),
  CONSTRAINT `FK_user_data_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `FK_user_data_user_address` FOREIGN KEY (`address_id`) REFERENCES `user_address` (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.user_data: ~15 rows (approximately)
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` (`user_data_id`, `user_id`, `address_id`, `gender`, `dob`, `phone`) VALUES
	(1, 1, 1, 'female', 'female', '0785767357'),
	(2, 4, 3, 'male', '2019-07-17', '8996697969'),
	(3, 5, 4, 'female', '2019-07-12', '0718807482'),
	(4, 6, 5, 'female', '2019-07-24', '0785767357'),
	(5, 7, 6, 'male', '1999-07-06', '0312231347'),
	(6, 8, 7, 'male', '1997-04-23', '0769400460'),
	(7, 8, 7, 'male', '1997-04-23', '0769400460'),
	(8, 18, 9, 'male', '2019-07-10', '0718807480'),
	(9, 19, 10, 'male', '2003-03-08', '0769422219'),
	(10, 21, 11, 'male', '1998-08-23', '0770079044'),
	(11, 21, 11, 'male', '1998-08-23', '0770079044'),
	(12, 21, 11, 'male', '1998-08-23', '0770079044'),
	(13, 21, 11, 'male', '1998-08-23', '0770079044'),
	(14, 22, 15, 'male', '2019-08-12', '0312231347'),
	(15, 23, 16, 'male', '2019-08-06', 'jioph;inhp');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;

-- Dumping structure for table pets.user_location
CREATE TABLE IF NOT EXISTS `user_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.user_location: ~25 rows (approximately)
/*!40000 ALTER TABLE `user_location` DISABLE KEYS */;
INSERT INTO `user_location` (`location_id`, `location`) VALUES
	(1, 'Colombo'),
	(2, 'Kandy'),
	(3, 'Galle'),
	(4, 'Ampara'),
	(5, 'Anuradhapura'),
	(6, 'Badulla'),
	(7, 'Batticaloa'),
	(8, 'Gampaha'),
	(9, 'Hambantota'),
	(10, 'Jaffana'),
	(11, 'Kalutara'),
	(12, 'Kegalle'),
	(13, 'Kilinochchi'),
	(14, 'Kurunegala'),
	(15, 'Mannar'),
	(16, 'Matale'),
	(17, 'Matara'),
	(18, 'Moneragala'),
	(19, 'Mullativu'),
	(20, 'Nuwara Eliya'),
	(21, 'Polonnaruwa'),
	(22, 'Puttalam'),
	(23, 'Ratnapura'),
	(24, 'Trincomalee'),
	(25, 'Vavuniya');
/*!40000 ALTER TABLE `user_location` ENABLE KEYS */;

-- Dumping structure for table pets.user_sub_location
CREATE TABLE IF NOT EXISTS `user_sub_location` (
  `sub_location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) DEFAULT NULL,
  `sub_location` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_location_id`),
  KEY `FK__user_location` (`location_id`),
  CONSTRAINT `FK__user_location` FOREIGN KEY (`location_id`) REFERENCES `user_location` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table pets.user_sub_location: ~31 rows (approximately)
/*!40000 ALTER TABLE `user_sub_location` DISABLE KEYS */;
INSERT INTO `user_sub_location` (`sub_location_id`, `location_id`, `sub_location`) VALUES
	(1, 1, 'All of Colombo'),
	(2, 1, 'Nugegoda'),
	(3, 1, 'Colombo 6'),
	(4, 1, 'Kottawa'),
	(5, 1, 'Piliyandala'),
	(6, 1, 'Dehiwala'),
	(7, 1, 'Angoda'),
	(8, 1, 'Athurugiriya'),
	(9, 1, 'Avissawella'),
	(10, 1, 'Battaramulla'),
	(11, 1, 'Boralesgamuwa'),
	(12, 1, 'Colombo 1'),
	(13, 1, 'Colombo 10'),
	(14, 1, 'Colombo 11'),
	(15, 1, 'Colombo 12'),
	(16, 1, 'Colombo 13'),
	(17, 1, 'Colombo 14'),
	(18, 1, 'Colombo 15'),
	(19, 1, 'Colombo 2'),
	(20, 1, 'Colombo 3'),
	(21, 1, 'Colombo 4'),
	(22, 1, 'Colombo 5'),
	(23, 1, 'Colombo 7'),
	(24, 1, 'Colombo 8'),
	(25, 1, 'Colombo 9'),
	(26, 2, 'All of Kandy'),
	(27, 2, 'Kandy'),
	(28, 2, 'Katugastota'),
	(29, 2, 'Gampola'),
	(30, 2, 'Peradeniya'),
	(31, 2, 'Kundasale');
/*!40000 ALTER TABLE `user_sub_location` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
