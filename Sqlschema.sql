
create database my_program_repository;

CREATE TABLE `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_title` varchar(255) NOT NULL,
  `program_language` varchar(30) NOT NULL,
  `program` mediumtext NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

