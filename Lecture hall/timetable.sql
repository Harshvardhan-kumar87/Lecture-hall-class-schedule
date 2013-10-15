
create database if not exists `timetable`;

USE `timetable`;



DROP TABLE IF EXISTS `mst_admin`;


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `ttable` (
  `dept_id` int(11) NOT NULL ,
  `dept_name` varchar(120) NOT NULL,
  `branch_name` varchar(120) NOT NULL,
  `year` varchar(120) NOT NULL,  
  PRIMARY KEY (`dept_id`)
);



INSERT INTO `ttable` (`dept_id`, `dept_name`, `branch_name`, `year`)
 VALUES(501, 'computer application', 'mca', 'second');



CREATE TABLE IF NOT EXISTS `rtable` (
      dept_id int  references ttable (dept_id),
    `class_arrival_time` time NOT NULL,
    `class_leving_time` time NOT NULL,
    `day` varchar(120) NOT NULL,
    `rno` int(11) NOT NULL ,
PRIMARY KEY (`rno`)
);

INSERT INTO `rtable`(`dept_id`,`class_arrival_time`,`class_leving_time`,`day`,`rno`)
VALUES(501,'9:20:00','10:10:00','monday',10);

