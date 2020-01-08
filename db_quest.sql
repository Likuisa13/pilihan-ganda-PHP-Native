/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_quest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_quest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_quest`;

/*Table structure for table `tbl_soal` */

DROP TABLE IF EXISTS `tbl_soal`;

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_soal` */

insert  into `tbl_soal`(`id_soal`,`soal`,`a`,`b`,`c`,`d`,`kunci`,`gambar`,`tanggal`,`aktif`) values 
(9,'User atau Operator Komputer dalam Istilah Komputer disebut dengan..?','Brainware','Fireware','Software','Hardware','a','','0000-00-00','Y'),
(10,'CPU Merupakan Singkatan dari','Central Progamming Unit','Central Promoting Unit','Central Processing Unit','Central Producing Unit','c','','0000-00-00','Y'),
(11,'Jaringan dari elemen-elemen yang saling berhubungan adalah ?','pentium ','instal','system','data','c','','0000-00-00','Y'),
(12,'Berikut merupakan elemen-elemen sistem komputer kecuali...?','Fireware','Brainware','Software','Hadware','a','','0000-00-00','Y'),
(13,'Program yang berisi perinta-perintah / perangkat lunak disebut...?','Pentium','Brainware','Hardware','software','d','','0000-00-00','Y'),
(14,'Proses memasukkan dan memasang software ke dalam komputer disebut...?','data','instal','loading','online','b','','0000-00-00','Y'),
(15,'Berikut yang bukan termasuk alat output adalah...?','keyboard','speaker','monitor','printer','a','','0000-00-00','Y'),
(16,'Tanda panah (tanda lain) yang mewakili posisi gerakan mouse disebut dengan...?','kursor','mouse','pointer','printer','c','','0000-00-00','Y'),
(17,'Fungsi printer adalah untuk....?','mengeluarkan suara','mencetak dokumen','menyimpan dokumen','salah semua','b','printer.jpg','0000-00-00','Y'),
(18,'USB merupakan singkatan dari','universal serial buss','unit serial bus','Universal Serial Bus','Unit serial booster','c','','0000-00-00','Y'),
(19,'Salah satu perangkat Lunak pengolah kata adalah','Ms.Word','Winamp','CC cleaner','Jet audio','a','','0000-00-00','Y'),
(20,'Program yang digunakan untuk disain gambar adalah..?','Ms.Exel','Media Player','Power Point','Photoshop','d','','0000-00-00','N'),
(21,'Yang bukan termasuk Hadware / Perangkat Keras adalah..','CPU','Keyboard','Ms.Office','Printer','c','','0000-00-00','N');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
