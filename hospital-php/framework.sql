CREATE DATABASE IF NOT EXISTS `framework` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `framework`;

DROP TABLE IF EXISTS `Hospital`;
CREATE TABLE IF NOT EXISTS `Hospital` (
  `Hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_firstname` varchar(50) DEFAULT NULL,
  `Hospital_lastname` varchar(50) DEFAULT NULL,
  `Hospital_gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`Hospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `Hospital` (`Hospital_id`, `Hospital_firstname`, `Hospital_lastname`, `Hospital_gender`) VALUES
(1, 'Pietje', 'Puk', 'male');
