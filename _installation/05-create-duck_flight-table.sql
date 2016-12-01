CREATE TABLE IF NOT EXISTS `login`.`duck_flight_scores` (
`ID` int(11) NOT NULL auto_increment,
`Name` varchar(256) NOT NULL,
`Info` varchar(256) NOT NULL,
`Score` int(11) NOT NULL,
`Timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
