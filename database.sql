-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.28 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;


-- Dumping structure for table test.spage
DROP TABLE IF EXISTS `spage`;
CREATE TABLE IF NOT EXISTS `spage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namalengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(16) DEFAULT NULL,
  `kelamin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Dumping data for table test.spage: ~0 rows (approximately)
/*!40000 ALTER TABLE `spage` DISABLE KEYS */;
INSERT INTO `spage` (`id`, `namalengkap`, `alamat`, `nohp`, `kelamin`) VALUES
	(1, 'Pegawai', 'Alamat Rumah', '076909182012', 'PEREMPUAN'),
	(2, 'Pegawai', 'Alamat Rumah', '003579760904', 'LAKI-LAKI'),
	(3, 'Pegawai', 'Alamat Rumah', '075832846738', 'PEREMPUAN'),
	(4, 'Pegawai', 'Alamat Rumah', '008606267542', 'PEREMPUAN'),
	(5, 'Pegawai', 'Alamat Rumah', '081023490318', 'PEREMPUAN'),
	(6, 'Pegawai', 'Alamat Rumah', '061989935824', 'PEREMPUAN'),
	(7, 'Pegawai', 'Alamat Rumah', '048597395465', 'PEREMPUAN'),
	(8, 'Pegawai', 'Alamat Rumah', '065441119079', 'PEREMPUAN'),
	(9, 'Pegawai', 'Alamat Rumah', '006004730990', 'PEREMPUAN'),
	(10, 'Pegawai', 'Alamat Rumah', '025119844754', 'LAKI-LAKI'),
	(11, 'Pegawai', 'Alamat Rumah', '023234499081', 'LAKI-LAKI'),
	(12, 'Pegawai', 'Alamat Rumah', '015376907415', 'PEREMPUAN'),
	(13, 'Pegawai', 'Alamat Rumah', '083050776816', 'LAKI-LAKI'),
	(14, 'Pegawai', 'Alamat Rumah', '039572620428', 'PEREMPUAN'),
	(15, 'Pegawai', 'Alamat Rumah', '004422824461', 'PEREMPUAN'),
	(16, 'Pegawai', 'Alamat Rumah', '027880108568', 'LAKI-LAKI'),
	(17, 'Pegawai', 'Alamat Rumah', '089916670313', 'PEREMPUAN'),
	(18, 'Pegawai', 'Alamat Rumah', '057495786489', 'LAKI-LAKI'),
	(19, 'Pegawai', 'Alamat Rumah', '083169938142', 'PEREMPUAN'),
	(20, 'Pegawai', 'Alamat Rumah', '062766773964', 'PEREMPUAN'),
	(21, 'Pegawai', 'Alamat Rumah', '044039289694', 'PEREMPUAN'),
	(22, 'Pegawai', 'Alamat Rumah', '071845566175', 'LAKI-LAKI'),
	(23, 'Pegawai', 'Alamat Rumah', '068712177750', 'LAKI-LAKI'),
	(24, 'Pegawai', 'Alamat Rumah', '058921309336', 'LAKI-LAKI'),
	(25, 'Pegawai', 'Alamat Rumah', '001095305291', 'LAKI-LAKI'),
	(26, 'Pegawai', 'Alamat Rumah', '090519044166', 'LAKI-LAKI'),
	(27, 'Pegawai', 'Alamat Rumah', '010004119211', 'PEREMPUAN'),
	(28, 'Pegawai', 'Alamat Rumah', '075406895182', 'LAKI-LAKI'),
	(29, 'Pegawai', 'Alamat Rumah', '042693963220', 'LAKI-LAKI'),
	(30, 'Pegawai', 'Alamat Rumah', '032523272216', 'PEREMPUAN'),
	(31, 'Pegawai', 'Alamat Rumah', '033696530790', 'PEREMPUAN'),
	(32, 'Pegawai', 'Alamat Rumah', '047524662732', 'PEREMPUAN'),
	(33, 'Pegawai', 'Alamat Rumah', '099699842463', 'LAKI-LAKI'),
	(34, 'Pegawai', 'Alamat Rumah', '066575069880', 'LAKI-LAKI'),
	(35, 'Pegawai', 'Alamat Rumah', '067627773217', 'LAKI-LAKI'),
	(36, 'Pegawai', 'Alamat Rumah', '085752089867', 'LAKI-LAKI'),
	(37, 'Pegawai', 'Alamat Rumah', '020639776178', 'LAKI-LAKI'),
	(38, 'Pegawai', 'Alamat Rumah', '020386966243', 'LAKI-LAKI'),
	(39, 'Pegawai', 'Alamat Rumah', '001594400686', 'LAKI-LAKI'),
	(40, 'Pegawai', 'Alamat Rumah', '046810944515', 'PEREMPUAN'),
	(41, 'Pegawai', 'Alamat Rumah', '075058367266', 'PEREMPUAN'),
	(42, 'Pegawai', 'Alamat Rumah', '004810505085', 'PEREMPUAN'),
	(43, 'Pegawai', 'Alamat Rumah', '015874318886', 'PEREMPUAN'),
	(44, 'Pegawai', 'Alamat Rumah', '058317540733', 'PEREMPUAN'),
	(45, 'Pegawai', 'Alamat Rumah', '065164431617', 'PEREMPUAN'),
	(46, 'Pegawai', 'Alamat Rumah', '013266361796', 'PEREMPUAN'),
	(47, 'Pegawai', 'Alamat Rumah', '065581017234', 'PEREMPUAN'),
	(48, 'Pegawai', 'Alamat Rumah', '026642098954', 'LAKI-LAKI'),
	(49, 'Pegawai', 'Alamat Rumah', '015970752682', 'PEREMPUAN'),
	(50, 'Pegawai', 'Alamat Rumah', '063665438037', 'LAKI-LAKI'),
	(51, 'Pegawai', 'Alamat Rumah', '065906576221', 'LAKI-LAKI'),
	(52, 'Pegawai', 'Alamat Rumah', '079236033539', 'LAKI-LAKI'),
	(53, 'Pegawai', 'Alamat Rumah', '012325478915', 'LAKI-LAKI'),
	(54, 'Pegawai', 'Alamat Rumah', '021059825197', 'LAKI-LAKI'),
	(55, 'Pegawai', 'Alamat Rumah', '089207396180', 'LAKI-LAKI'),
	(56, 'Pegawai', 'Alamat Rumah', '005402128310', 'PEREMPUAN'),
	(57, 'Pegawai', 'Alamat Rumah', '099773899931', 'PEREMPUAN'),
	(58, 'Pegawai', 'Alamat Rumah', '047084971561', 'PEREMPUAN'),
	(59, 'Pegawai', 'Alamat Rumah', '096649387941', 'PEREMPUAN'),
	(60, 'Pegawai', 'Alamat Rumah', '012573654495', 'PEREMPUAN');
/*!40000 ALTER TABLE `spage` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
