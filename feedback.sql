CREATE TABLE IF NOT EXISTS `login` (
`usn` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL); 




INSERT INTO `login` (`usn`, `name`, `password`) VALUES
('1', 'admin', 'admin');




CREATE TABLE IF NOT EXISTS `feeds` (
  
  `s_name` varchar(20) NOT NULL,
  `s_usn` varchar(20) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_department` varchar(50) NOT NULL,
  `s_event` varchar(50) NOT NULL,
  `s_q1` varchar(50) NOT NULL,
  `s_q2` varchar(50) NOT NULL,
  `s_q3` varchar(50) NOT NULL,
  `s_q4` varchar(50) NOT NULL,
  `s_q5` varchar(50) NOT NULL,
  `s_q6` varchar(50) NOT NULL,
  `s_q7` varchar(50) NOT NULL,
  `s_q8` varchar(50) NOT NULL
);


CREATE TABLE IF NOT EXISTS `users` (
  `usn` varchar(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `std_password` varchar(255) NOT NULL,
  PRIMARY KEY (`usn`)
);