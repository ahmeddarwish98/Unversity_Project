# MySQL-Front 5.1  (Build 4.13)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: unversity
# ------------------------------------------------------
# Server version 5.5.16

#
# Source for table depart
#

DROP TABLE IF EXISTS `depart`;
CREATE TABLE `depart` (
  `Dep_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Dep_Name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Dep_Numbers` bigint(20) DEFAULT NULL,
  `Fac_Id` int(11) DEFAULT NULL,
  `Dep_Dactivation` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Dep_Id`),
  KEY `Fac_Id` (`Fac_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Dumping data for table depart
#

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1,'Anatomy',200,1,b'1');
INSERT INTO `depart` VALUES (2,'Physiology',300,1,b'1');
INSERT INTO `depart` VALUES (3,'Histology',150,1,b'1');
INSERT INTO `depart` VALUES (4,'Pathology',250,1,b'1');
INSERT INTO `depart` VALUES (5,'Civil',200,2,b'1');
INSERT INTO `depart` VALUES (6,'Mechanical',100,2,b'1');
INSERT INTO `depart` VALUES (7,'Chemical',200,2,b'1');
INSERT INTO `depart` VALUES (8,'Nuclear',100,2,b'1');
INSERT INTO `depart` VALUES (9,'Electricity',150,2,b'1');
INSERT INTO `depart` VALUES (10,'Law Engl',400,3,b'1');
INSERT INTO `depart` VALUES (11,'I.T',200,4,b'1');
INSERT INTO `depart` VALUES (12,'C.S ',100,4,b'1');
INSERT INTO `depart` VALUES (13,'I.S',150,4,b'1');
INSERT INTO `depart` VALUES (14,'O.R',50,4,b'1');
INSERT INTO `depart` VALUES (15,'Arabic',300,5,b'1');
INSERT INTO `depart` VALUES (16,'English',250,5,b'1');
INSERT INTO `depart` VALUES (17,'B.I.S',150,5,b'1');
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table faculty
#

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `Fac_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fac_Name` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `Fac_Students` bigint(20) DEFAULT NULL,
  `Fac_Depart` int(11) DEFAULT NULL,
  `Fac_Mobile` varchar(30) DEFAULT '',
  `Fac_Dactivation` bit(1) DEFAULT NULL,
  `Fac_Year` int(11) DEFAULT NULL,
  PRIMARY KEY (`Fac_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table faculty
#

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Medicine',900,4,'3601254',b'1',7);
INSERT INTO `faculty` VALUES (2,'Engeering',800,5,'3609571',b'1',5);
INSERT INTO `faculty` VALUES (3,'Law',400,1,'3692548',b'1',4);
INSERT INTO `faculty` VALUES (4,'Computrs And Information',900,4,'3612985',b'1',4);
INSERT INTO `faculty` VALUES (5,'Commerance',700,3,'3612075',b'1',4);
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table object
#

DROP TABLE IF EXISTS `object`;
CREATE TABLE `object` (
  `Obj_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sect_Id` int(11) DEFAULT NULL,
  `Prof_Id` int(11) DEFAULT NULL,
  `Dep_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Obj_Id`),
  KEY `Sect_Id` (`Sect_Id`),
  KEY `Dep_Id` (`Dep_Id`),
  KEY `Prof_Id` (`Prof_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Dumping data for table object
#

LOCK TABLES `object` WRITE;
/*!40000 ALTER TABLE `object` DISABLE KEYS */;
INSERT INTO `object` VALUES (1,1,1,1);
INSERT INTO `object` VALUES (2,2,2,5);
INSERT INTO `object` VALUES (3,3,3,3);
INSERT INTO `object` VALUES (4,4,4,4);
INSERT INTO `object` VALUES (5,5,5,5);
INSERT INTO `object` VALUES (6,6,6,6);
INSERT INTO `object` VALUES (7,7,7,7);
INSERT INTO `object` VALUES (8,8,8,8);
INSERT INTO `object` VALUES (9,9,9,9);
INSERT INTO `object` VALUES (10,10,10,10);
INSERT INTO `object` VALUES (11,11,11,11);
INSERT INTO `object` VALUES (12,12,12,12);
INSERT INTO `object` VALUES (13,13,13,13);
INSERT INTO `object` VALUES (14,14,14,14);
INSERT INTO `object` VALUES (15,15,15,15);
INSERT INTO `object` VALUES (16,16,16,16);
INSERT INTO `object` VALUES (17,17,17,17);
/*!40000 ALTER TABLE `object` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table professor
#

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `Prof_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Prof_Name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Prof_Gender` bit(1) DEFAULT NULL,
  `Prof_Address` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Prof_Mobile` varchar(30) DEFAULT NULL,
  `Prof_Phone` varchar(30) DEFAULT NULL,
  `Prof_Management` int(11) DEFAULT NULL,
  `Prof_IsAdmin` bit(1) NOT NULL DEFAULT b'0',
  `Prof_Pass` varchar(30) DEFAULT NULL,
  `Prof_Dactivation` bit(1) DEFAULT NULL,
  `Prof_Photo` varchar(30) DEFAULT NULL,
  `Prof_Aproval` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`Prof_Id`),
  KEY `Prof_Manag` (`Prof_Management`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Dumping data for table professor
#

LOCK TABLES `professor` WRITE;
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` VALUES (1,'Osama Mohamed',b'0','5 S.T Cairo','0123685479','3657824',NULL,b'1','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (2,'ashraf Arakeeb',b'0','21 S.T Cairo','0128535479','3607834',1,b'0','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (3,'Mohamed Khaled',b'0','9 S.T Cairo','0135539579','3616835',1,b'0','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (4,'Sayed Ahmed',b'0','9 S.T Tanta','0132579579','3625435',1,b'0','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (5,'Esraa Ahmed',b'1','15 S.T Tanta','0152554589','3358435',2,b'1','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (6,'Ahmed Said',b'1','9 S.T Alex','0125678578','3626835',2,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (7,'Sayed Ahmed',b'0','9 S.T Tanta','0132579579','3625435',2,b'0','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (8,'Sayed Ramadan',b'1','21 S.T Tanta','0132269429','3265874',3,b'1','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (9,'Ahmed Abd El Fatah ',b'0','19 S.T Alex','0132211549','3635845',3,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (10,'Eman Sayed',b'1','5 S.T Aswan','0159324779','3639521',3,b'0','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (11,'Eslam Fahd',b'1','8 S.T Alex','0109354009','3605356',4,b'1','1234',b'1','0000',b'1');
INSERT INTO `professor` VALUES (12,'Mohamed Ramadan',b'0','35 S.T Tanta','0101324629','3630521',2,b'0','1234',b'0','0000',b'1');
INSERT INTO `professor` VALUES (13,'Farouk Mansour',b'0','8 S.T Cairo','0101154229','3603556',4,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (14,'Eman Ahmed',b'1','20 S.T Cairo','0123685488','3657825',5,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (15,'Amair Said',b'1','6 S.T Tanta','0123685669','3604558',6,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (16,'Ibrahim Ahmed',b'0','7 S.T Tanta','0109248550','3624852',5,b'0','1234',b'1','0000',b'0');
INSERT INTO `professor` VALUES (17,'Wael Abbas',b'0','30 S.T Cairo','0120651232','3955045',1,b'0','1234',b'1','0000',b'0');
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table section
#

DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `Sect_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sect_Name` varchar(30) DEFAULT NULL,
  `Sect_Capacity` varchar(30) DEFAULT NULL,
  `Sect_Instructor` varchar(30) DEFAULT NULL,
  `Sect_Type` varchar(30) DEFAULT NULL,
  `Sect_Dactivation` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Sect_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Dumping data for table section
#

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'101','300','Mohamed Ahmed','Lecture',b'1');
INSERT INTO `section` VALUES (2,'102','30','Mohamed Ahmed','Section',b'1');
INSERT INTO `section` VALUES (3,'103','20','Mohamed Ahmed','Lab',b'1');
INSERT INTO `section` VALUES (4,'201','300','Sakr Sayed','Lecture',b'1');
INSERT INTO `section` VALUES (5,'202','50','Sakr Sayed','Section',b'1');
INSERT INTO `section` VALUES (6,'203','25','Sakr Sayed','Lab',b'1');
INSERT INTO `section` VALUES (7,'301','300','Mahmoud Fekry','Lecture',b'1');
INSERT INTO `section` VALUES (8,'302','50','Mahmoud Fekry','Section',b'1');
INSERT INTO `section` VALUES (9,'303','30','Mahmoud Fekry','Lab',b'1');
INSERT INTO `section` VALUES (10,'401','400','Khaled Momen','Lecture',b'1');
INSERT INTO `section` VALUES (11,'402','60','Khaled Momen','Section',b'1');
INSERT INTO `section` VALUES (12,'403','25','Khaled Momen','Lab',b'1');
INSERT INTO `section` VALUES (13,'501','400','Esraa Mohamed','Lecture',b'1');
INSERT INTO `section` VALUES (14,'502','60','Esraa Mohamed','Lab',b'1');
INSERT INTO `section` VALUES (15,'503','40','Esraa Mohamed','Section',b'1');
INSERT INTO `section` VALUES (16,'601','30','Eman Ahmed','Section',b'1');
INSERT INTO `section` VALUES (17,'602','30','Eman Ahmed','Section',b'1');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table student
#

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `Stud_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Stud_Name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Stud_Gender` bit(1) DEFAULT NULL,
  `Stud_Mobile` varchar(30) DEFAULT NULL,
  `Stud_Phone` varchar(30) DEFAULT NULL,
  `Stud_Address` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Stud_Depart` int(11) DEFAULT NULL,
  `Stud_Pass` varchar(30) DEFAULT NULL,
  `Stud_Year` int(11) DEFAULT NULL,
  `Stud_Aproval` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Stud_Id`),
  KEY `Dep_Id` (`Stud_Depart`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Dumping data for table student
#

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Mohamed Mandor',b'0','015302957','3192458','3 S.T Tanta',12,'1234',2,b'1');
INSERT INTO `student` VALUES (2,'Sayed Mohamed',b'1','0110685945','3197598','10 S.T Tanta',1,'1234',3,b'0');
INSERT INTO `student` VALUES (3,'Sara Mohamed',b'0','012389625','3223684','9 S.T cairo',9,'1234',5,b'1');
INSERT INTO `student` VALUES (4,'Ahmed Mohamed',b'1','0123859435','3245598','3 S.T cairo',5,'1234',4,b'0');
INSERT INTO `student` VALUES (5,'Amany Momen',b'1','010303847','329458','15 S.T Aswan',7,'1234',5,b'1');
INSERT INTO `student` VALUES (6,'Osman Ahmed',b'0','01023532647','3601558','21 S.T Tanta',13,'1234',7,b'1');
INSERT INTO `student` VALUES (7,'Ahmed Darwish',b'1','01092485524','3604668','5 S.T Tant',12,'1234',6,b'0');
INSERT INTO `student` VALUES (8,'Mahmoud Sakr',b'0','011355677','3607558','92 S.T Tanta',16,'1234',4,b'0');
INSERT INTO `student` VALUES (9,'Khaled Ahmed',b'0','0139574238','3682758','10 S.T Cairo',15,'1234',1,b'1');
INSERT INTO `student` VALUES (10,'Ahmed Bakr',b'0','010267647','3687458','15 S.T Tanta',14,'1234',2,b'0');
INSERT INTO `student` VALUES (11,'Esraa Ahmed',b'0','0153698427','4215898','3 S.T Alex',2,'1234',1,b'1');
INSERT INTO `student` VALUES (12,'Ahmed Omar',b'0','0122368347','42235858','15 S.T Tanta',6,'1234',5,b'0');
INSERT INTO `student` VALUES (13,'Eman sayed',b'1','0129876347','4239758','10 S.T Alex',3,'1234',6,b'1');
INSERT INTO `student` VALUES (14,'Peter Youssef',b'0','0125976247','4249758','9 S.T Tanta',10,'1234',4,b'1');
INSERT INTO `student` VALUES (15,'Omar Mohamed',b'1','01111111110','425458','15 S.T  Aswan',1,'1234',2,b'1');
INSERT INTO `student` VALUES (16,'Abdallah Yasser',b'0','0125792347','426958','15 S.T Alex',6,'1234',7,b'1');
INSERT INTO `student` VALUES (17,'Amira Sayed',b'1','015242647','4295458','30 S.T Cairo',17,'1234',2,b'1');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for view data_connection
#

DROP VIEW IF EXISTS `data_connection`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_connection` AS select `faculty`.`Fac_Id` AS `Fac_Id`,`faculty`.`Fac_Name` AS `Fac_Name`,`depart`.`Dep_Id` AS `Dep_Id`,`depart`.`Dep_Name` AS `Dep_Name`,`depart`.`Dep_Numbers` AS `Dep_Numbers`,`student`.`Stud_Id` AS `Stud_Id`,`student`.`Stud_Name` AS `Stud_Name`,`student`.`Stud_Gender` AS `Stud_Gender`,`student`.`Stud_Mobile` AS `Stud_Mobile`,`student`.`Stud_Phone` AS `Stud_Phone`,`student`.`Stud_Address` AS `Stud_Address`,`student`.`Stud_Depart` AS `Stud_Depart`,`student`.`Stud_Pass` AS `Stud_Pass`,`student`.`Stud_Year` AS `Stud_Year`,`student`.`Stud_Aproval` AS `Stud_Aproval`,`section`.`Sect_Id` AS `Sect_Id`,`section`.`Sect_Name` AS `Sect_Name`,`professor`.`Prof_Id` AS `Prof_Id`,`professor`.`Prof_Name` AS `Prof_Name`,`professor`.`Prof_Gender` AS `Prof_Gender`,`professor`.`Prof_Address` AS `Prof_Address`,`professor`.`Prof_Mobile` AS `Prof_Mobile`,`professor`.`Prof_Phone` AS `Prof_Phone`,`professor`.`Prof_Management` AS `Prof_Management`,`professor`.`Prof_IsAdmin` AS `Prof_IsAdmin`,`professor`.`Prof_Pass` AS `Prof_Pass`,`professor`.`Prof_Dactivation` AS `Prof_Dactivation`,`professor`.`Prof_Photo` AS `Prof_Photo`,`professor`.`Prof_Aproval` AS `Prof_Aproval` from (((((`faculty` join `depart`) join `student`) join `section`) join `object`) join `professor`) where ((`faculty`.`Fac_Id` = `depart`.`Fac_Id`) and (`depart`.`Dep_Id` = `student`.`Stud_Depart`) and (`object`.`Dep_Id` = `depart`.`Dep_Id`) and (`section`.`Sect_Id` = `object`.`Sect_Id`) and (`professor`.`Prof_Id` = `object`.`Prof_Id`));

#
#  Foreign keys for table depart
#

ALTER TABLE `depart`
ADD CONSTRAINT `Fac_Id` FOREIGN KEY (`Fac_Id`) REFERENCES `faculty` (`Fac_Id`);

#
#  Foreign keys for table object
#

ALTER TABLE `object`
ADD CONSTRAINT `Depa_Id` FOREIGN KEY (`Dep_Id`) REFERENCES `depart` (`Dep_Id`),
ADD CONSTRAINT `Prof_Id` FOREIGN KEY (`Prof_Id`) REFERENCES `professor` (`Prof_Id`),
ADD CONSTRAINT `Sect_Id` FOREIGN KEY (`Sect_Id`) REFERENCES `section` (`Sect_Id`);

#
#  Foreign keys for table professor
#

ALTER TABLE `professor`
ADD CONSTRAINT `Prof_Manag` FOREIGN KEY (`Prof_Management`) REFERENCES `professor` (`Prof_Id`);

#
#  Foreign keys for table student
#

ALTER TABLE `student`
ADD CONSTRAINT `Dep_Id` FOREIGN KEY (`Stud_Depart`) REFERENCES `depart` (`Dep_Id`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
