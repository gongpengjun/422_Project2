CREATE TABLE IF NOT EXISTS `login`.`mygame_highscores` (
`ID` int(11) NOT NULL auto_increment,
`ModeID` varchar(256) NOT NULL,
`Name` varchar(256) NOT NULL,
`Info` varchar(256) NOT NULL,
`Score` int(11) NOT NULL,
`Timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
