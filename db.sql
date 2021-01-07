CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `phone` varchar(10) NOT NULL , 
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);


create TABLE IF NOT EXISTS `ADS` (
  `add_id` int(11) not null auto_increment,
  `id` int(11),
  `title` varchar(200) , 
  `category` varchar(100) , 
  `location` varchar(100) , 
  `description` varchar(500),
  PRIMARY KEY(`add_id`), 
  FOREIGN KEY(`id`) REFERENCES users(`id`)
);


insert into users (phone, username , email , password, create_datetime) values ( "1111", "dummy" , "dummymail", "dummypass" , '2020-02-09');

INSERT INTO ADS (id, title , category ,location , description) values ("1","adssaa","Blat","Electry","adsadaddsa")

