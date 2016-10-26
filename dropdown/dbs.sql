--
-- MySQL 5.1.49
-- Sat, 23 Apr 2011 09:12:44 +0000
--

CREATE DATABASE `dbs` DEFAULT CHARSET utf8;

USE `dbs`;

CREATE TABLE `country` (
   `c_id` tinyint(4) not null auto_increment,
   `country` varchar(30) not null,
   PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO `country` (`c_id`, `country`) VALUES ('1', 'Pakistan');
INSERT INTO `country` (`c_id`, `country`) VALUES ('2', 'India');
INSERT INTO `country` (`c_id`, `country`) VALUES ('3', 'USA');
INSERT INTO `country` (`c_id`, `country`) VALUES ('4', 'UK');

CREATE TABLE `state` (
   `s_id` smallint(6) not null auto_increment,
   `c_id` tinyint(4) not null,
   `state` varchar(35) not null,
   PRIMARY KEY (`s_id`),
   KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=17;

INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('1', '1', 'NWFP');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('2', '1', 'Sindh');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('3', '1', 'Balochistan');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('4', '1', 'Punjab');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('5', '2', 'Uttar Pardesh');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('6', '2', 'Andhara Pardesh');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('7', '2', 'Gujrat');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('8', '2', 'Punjab');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('9', '3', 'Luisiana');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('10', '3', 'Idoho');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('11', '3', 'LA');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('12', '3', 'Las Vegas');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('13', '4', 'England');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('14', '4', 'Ireland');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('15', '4', 'Scotland');
INSERT INTO `state` (`s_id`, `c_id`, `state`) VALUES ('16', '4', 'Wales');
