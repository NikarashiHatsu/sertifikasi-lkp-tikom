# ************************************************************
# Sequel Ace SQL dump
# Version 20044
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.33)
# Database: kursus
# Generation Time: 2023-05-24 23:17:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table failed_jobs
# ------------------------------------------------------------



# Dump of table migrations
# ------------------------------------------------------------

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(15,'2014_10_12_000000_create_users_table',1),
	(16,'2014_10_12_100000_create_password_reset_tokens_table',1),
	(17,'2019_08_19_000000_create_failed_jobs_table',1),
	(18,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(19,'2023_05_24_202148_create_schemas_table',1),
	(20,'2023_05_24_202437_create_participants_table',1),
	(21,'2023_05_24_203328_add_identity_columns_to_users_table',1),
	(22,'2023_05_24_204937_add_role_column_to_users_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table participants
# ------------------------------------------------------------

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;

INSERT INTO `participants` (`id`, `user_id`, `kode_skema`, `nama_peserta`, `jenis_kelamin`, `alamat`, `no_hp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,'SKM-001','Ms. Danika Considine DVM','Perempuan','5842 Emmerich Plains\nWilkinsonport, IA 24779','(669) 293-4564','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(2,2,'SKM-001','Jaycee Raynor','Laki-laki','13869 Filomena Meadows Apt. 447\nPort Brookemouth, MT 93035-0508','1-323-279-4447','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(3,3,'SKM-001','Mr. Tyrique Pfannerstill','Laki-laki','1324 Beahan Hill Suite 154\nStephanton, WI 64081','+1-972-330-9295','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(4,4,'SKM-001','Prof. Braulio Herzog IV','Perempuan','3657 Vaughn Estate Apt. 319\nAthenaville, CO 34939-6134','+1-737-382-9918','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(5,5,'SKM-001','Kyleigh Gulgowski','Perempuan','3271 Mallie Union\nJoyceport, GA 49009','1-657-442-6501','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(6,6,'SKM-001','Rosa Stoltenberg IV','Laki-laki','2182 Streich Fords Suite 900\nEast Vidal, VA 40784-1461','657.261.8270','2023-05-24 20:41:27','2023-05-24 20:48:27',NULL),
	(7,7,'SKM-002','Dr. Rowland Crona','Perempuan','86845 Laila Neck\nNorth Delphiaburgh, IN 41579-0336','+13515984844','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(8,8,'SKM-002','Ms. Esmeralda Bartoletti','Perempuan','7801 Jabari View\nKutchberg, AL 02921','860.549.8946','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(9,9,'SKM-002','Noemie Bergnaum IV','Perempuan','1765 Schiller Union Apt. 891\nDouglasfurt, MS 37889-9836','+15177730907','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(10,10,'SKM-002','Ms. Madge Rau','Laki-laki','95435 Allene Lock\nPort Oran, NJ 35949','1-573-743-4134','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(11,11,'SKM-002','Alan Toy','Laki-laki','2257 Kara Light\nGeovannyshire, FL 57536','607.456.8749','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(12,12,'SKM-002','Pietro Berge','Laki-laki','9516 Billie Loop\nSouth Othabury, NE 50634-3515','(979) 786-8779','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(13,13,'SKM-002','Carroll Lesch','Perempuan','79747 Lavonne Rapids\nWest Barrytown, MI 38266-6304','+1-318-344-8641','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(14,14,'SKM-002','Marisa Hickle','Perempuan','80910 Jacobi Ports Apt. 828\nHeathborough, IA 13879','704.397.9587','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(15,15,'SKM-002','Mrs. Cleora Turner','Laki-laki','350 Cremin Coves Apt. 357\nNorth Bertha, IA 79224','279-735-8180','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(16,16,'SKM-002','Karlie Zieme','Laki-laki','4255 Leannon Crest\nWindlerburgh, WI 40842-9836','(559) 538-7842','2023-05-24 20:41:27','2023-05-24 20:48:47',NULL),
	(17,17,'SKM-003','Dr. Courtney Grimes','Laki-laki','218 Justyn Extension Suite 473\nEmmanuellebury, MN 17716-1307','1-936-798-0926','2023-05-24 20:41:27','2023-05-24 20:48:00',NULL),
	(18,18,'SKM-003','Humberto McLaughlin','Laki-laki','439 June Highway Apt. 760\nLake Reeceport, MN 65865-0342','341-593-0723','2023-05-24 20:41:27','2023-05-24 20:48:00',NULL),
	(19,19,'SKM-003','Dr. Belle Pouros III','Perempuan','871 McDermott Extensions\nSouth Magnus, ME 47743','906.209.9533','2023-05-24 20:41:27','2023-05-24 20:48:00',NULL),
	(20,20,'SKM-003','Velma Douglas','Laki-laki','408 Jacobs Summit\nAliville, MI 28225-3901','925.492.7446','2023-05-24 20:41:27','2023-05-24 20:48:00',NULL),
	(21,21,'SKM-003','Josue Altenwerth','Perempuan','47755 Ellen Fork Suite 905\nLaurineshire, WI 55835','(272) 971-2733','2023-05-24 20:41:27','2023-05-24 20:48:00',NULL),
	(22,22,'SKM-003','Sanford Morar','Perempuan','135 Gottlieb Road Apt. 315\nLake Joany, WV 65035-0935','1-443-749-1950','2023-05-24 20:41:28','2023-05-24 20:48:00',NULL),
	(23,23,'SKM-003','Prof. Abigale Fisher','Perempuan','32800 Rodger Locks Apt. 877\nSouth Branson, KY 33826-5460','325.584.9017','2023-05-24 20:41:28','2023-05-24 20:48:00',NULL),
	(24,24,'SKM-003','Simone Daugherty','Laki-laki','608 Ubaldo Squares\nLake Salmashire, CA 95205-7832','1-302-994-1057','2023-05-24 20:41:28','2023-05-24 20:48:00',NULL),
	(25,25,'SKM-003','Kyler Bashirian MD','Perempuan','550 Anjali Valleys\nNew Llewellynburgh, IL 89123','(351) 519-6668','2023-05-24 20:41:28','2023-05-24 20:48:00',NULL),
	(26,26,'SKM-003','Alfred Schaden I','Laki-laki','2394 Milan Drive Suite 626\nNew Elizabethtown, ID 93916-3806','281-313-1452','2023-05-24 20:41:28','2023-05-24 20:48:00',NULL),
	(27,27,'SKM-004','Jaden Cremin','Laki-laki','53507 Lionel Dale Suite 998\nNew Adelineside, VA 69268','+1.364.562.2938','2023-05-24 20:41:28','2023-05-24 20:41:28',NULL),
	(28,28,'SKM-004','Bryce Casper DVM','Laki-laki','421 Jodie Trafficway Suite 083\nPort Alfonzoside, PA 69542','678-779-8794','2023-05-24 20:41:28','2023-05-24 20:41:28',NULL),
	(29,29,'SKM-004','Zakary Trantow','Laki-laki','65690 Fay Courts\nJeannefurt, AZ 62586-3618','+1.551.310.4112','2023-05-24 20:41:28','2023-05-24 20:41:28',NULL),
	(30,30,'SKM-004','Prof. Felipe Kuhn MD','Perempuan','8201 Art Hill\nWisozkchester, MS 38054','+1-858-591-7153','2023-05-24 20:41:28','2023-05-24 22:45:48','2023-05-24 22:45:48'),
	(31,31,'SKM-004','Luz Tremblay','Laki-laki','46859 Treutel Mill Apt. 069\nSouth Jewell, NJ 35113','+1.254.450.3208','2023-05-24 20:41:28','2023-05-24 22:45:45','2023-05-24 22:45:45'),
	(32,36,'SKM-004','Aghits Nidallah','Laki-laki','Jl. Sunan Gunung Jati, Rt 003/Rw 001, Desa Astana, Blok Pekauman, Kec. Gunungjati., Desa Astana, Kec. Gunung Jati.','+6285155332844','2023-05-24 23:11:33','2023-05-24 23:15:34','2023-05-24 23:15:34'),
	(33,36,'SKM-004','Aghits Nidallah','Laki-laki','Jl. Sunan Gunung Jati, Rt 003/Rw 001, Desa Astana, Blok Pekauman, Kec. Gunungjati., Desa Astana, Kec. Gunung Jati.','+6285155332844','2023-05-24 23:15:49','2023-05-24 23:15:49',NULL);

/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reset_tokens
# ------------------------------------------------------------



# Dump of table personal_access_tokens
# ------------------------------------------------------------



# Dump of table schemas
# ------------------------------------------------------------

LOCK TABLES `schemas` WRITE;
/*!40000 ALTER TABLE `schemas` DISABLE KEYS */;

INSERT INTO `schemas` (`id`, `kode`, `nama`, `jenis`, `jumlah_unit`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'SKM-001','Junior Web Developer','KKNI',6,'2023-05-24 20:41:26','2023-05-24 20:48:23',NULL),
	(2,'SKM-002','Digital Marketing','Klaster',10,'2023-05-24 20:41:26','2023-05-24 20:48:47',NULL),
	(3,'SKM-003','Multimedia Muda','KKNI',10,'2023-05-24 20:41:26','2023-05-24 20:48:00',NULL),
	(4,'SKM-004','Networking Administrator Muda','KKNI',5,'2023-05-24 20:41:26','2023-05-24 22:17:50',NULL),
	(5,'SKM-005','Testing','Testing',2,'2023-05-24 21:59:20','2023-05-24 22:16:16','2023-05-24 22:16:16'),
	(6,'SKM-006','Testing','Testing',2,'2023-05-24 22:02:49','2023-05-24 22:16:15','2023-05-24 22:16:15'),
	(7,'SKM-007','Testing2','Testing2',4,'2023-05-24 22:04:42','2023-05-24 22:16:13','2023-05-24 22:16:13'),
	(8,'SKM-008','Testing3','Testing3',4,'2023-05-24 22:05:16','2023-05-24 22:16:11','2023-05-24 22:16:11'),
	(9,'SKM-009','Testing5','Testing5',5,'2023-05-24 22:05:44','2023-05-24 22:16:09','2023-05-24 22:16:09'),
	(10,'SKM-010','Testing6','Testing6',4,'2023-05-24 22:06:37','2023-05-24 22:16:07','2023-05-24 22:16:07');

/*!40000 ALTER TABLE `schemas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `gender`, `address`, `phone`, `role`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Ms. Danika Considine DVM','xpaucek@example.com','2023-05-24 20:41:27','Perempuan','5842 Emmerich Plains\nWilkinsonport, IA 24779','(669) 293-4564','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Ln48oj8PhL','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(2,'Jaycee Raynor','rowe.enola@example.net','2023-05-24 20:41:27','Laki-laki','13869 Filomena Meadows Apt. 447\nPort Brookemouth, MT 93035-0508','1-323-279-4447','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fCUPyVvwLJ','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(3,'Mr. Tyrique Pfannerstill','rosenbaum.tressa@example.com','2023-05-24 20:41:27','Laki-laki','1324 Beahan Hill Suite 154\nStephanton, WI 64081','+1-972-330-9295','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','xjLFXZuYnU','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(4,'Prof. Braulio Herzog IV','bashirian.viva@example.net','2023-05-24 20:41:27','Perempuan','3657 Vaughn Estate Apt. 319\nAthenaville, CO 34939-6134','+1-737-382-9918','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','AdYbfRKbf9','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(5,'Kyleigh Gulgowski','ewhite@example.com','2023-05-24 20:41:27','Perempuan','3271 Mallie Union\nJoyceport, GA 49009','1-657-442-6501','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','tInbGKfynn','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(6,'Rosa Stoltenberg IV','pacocha.kirstin@example.org','2023-05-24 20:41:27','Laki-laki','2182 Streich Fords Suite 900\nEast Vidal, VA 40784-1461','657.261.8270','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','EruCmjXPpr','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(7,'Dr. Rowland Crona','vilma82@example.com','2023-05-24 20:41:27','Perempuan','86845 Laila Neck\nNorth Delphiaburgh, IN 41579-0336','+13515984844','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','lQMT4aY0sg','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(8,'Ms. Esmeralda Bartoletti','walton.runte@example.net','2023-05-24 20:41:27','Perempuan','7801 Jabari View\nKutchberg, AL 02921','860.549.8946','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','H7RWmoaFPp','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(9,'Noemie Bergnaum IV','adrian64@example.net','2023-05-24 20:41:27','Perempuan','1765 Schiller Union Apt. 891\nDouglasfurt, MS 37889-9836','+15177730907','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','YPhPRcNK0Z','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(10,'Ms. Madge Rau','hkulas@example.com','2023-05-24 20:41:27','Laki-laki','95435 Allene Lock\nPort Oran, NJ 35949','1-573-743-4134','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','u4PLRc3szy','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(11,'Alan Toy','stark.lorine@example.net','2023-05-24 20:41:27','Laki-laki','2257 Kara Light\nGeovannyshire, FL 57536','607.456.8749','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fiiYkE2A5h','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(12,'Pietro Berge','bjast@example.com','2023-05-24 20:41:27','Laki-laki','9516 Billie Loop\nSouth Othabury, NE 50634-3515','(979) 786-8779','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','PdHGKVtyc6','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(13,'Carroll Lesch','cpadberg@example.org','2023-05-24 20:41:27','Perempuan','79747 Lavonne Rapids\nWest Barrytown, MI 38266-6304','+1-318-344-8641','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','co7JQhXuFV','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(14,'Marisa Hickle','wlockman@example.org','2023-05-24 20:41:27','Perempuan','80910 Jacobi Ports Apt. 828\nHeathborough, IA 13879','704.397.9587','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','JmoaB5dKC3','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(15,'Mrs. Cleora Turner','arohan@example.org','2023-05-24 20:41:27','Laki-laki','350 Cremin Coves Apt. 357\nNorth Bertha, IA 79224','279-735-8180','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','BKGGF3YHbD','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(16,'Karlie Zieme','dickinson.amir@example.com','2023-05-24 20:41:27','Laki-laki','4255 Leannon Crest\nWindlerburgh, WI 40842-9836','(559) 538-7842','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','eQyRyecZQd','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(17,'Dr. Courtney Grimes','melody.hilpert@example.com','2023-05-24 20:41:27','Laki-laki','218 Justyn Extension Suite 473\nEmmanuellebury, MN 17716-1307','1-936-798-0926','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','OkOtuZaO0H','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(18,'Humberto McLaughlin','delphine.larson@example.com','2023-05-24 20:41:27','Laki-laki','439 June Highway Apt. 760\nLake Reeceport, MN 65865-0342','341-593-0723','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','bSNU83w4uh','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(19,'Dr. Belle Pouros III','obreitenberg@example.net','2023-05-24 20:41:27','Perempuan','871 McDermott Extensions\nSouth Magnus, ME 47743','906.209.9533','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','xmYAJVutgU','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(20,'Velma Douglas','verlie.homenick@example.net','2023-05-24 20:41:27','Laki-laki','408 Jacobs Summit\nAliville, MI 28225-3901','925.492.7446','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','nuaHO96SgB','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(21,'Josue Altenwerth','zhessel@example.org','2023-05-24 20:41:27','Perempuan','47755 Ellen Fork Suite 905\nLaurineshire, WI 55835','(272) 971-2733','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','mrBhAv7z8i','2023-05-24 20:41:27','2023-05-24 20:41:27'),
	(22,'Sanford Morar','kmayert@example.net','2023-05-24 20:41:28','Perempuan','135 Gottlieb Road Apt. 315\nLake Joany, WV 65035-0935','1-443-749-1950','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','e6PuNbE1YJ','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(23,'Prof. Abigale Fisher','kelsie78@example.net','2023-05-24 20:41:28','Perempuan','32800 Rodger Locks Apt. 877\nSouth Branson, KY 33826-5460','325.584.9017','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Cg0JIQyWyz','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(24,'Simone Daugherty','hessel.shad@example.net','2023-05-24 20:41:28','Laki-laki','608 Ubaldo Squares\nLake Salmashire, CA 95205-7832','1-302-994-1057','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','wKODQKWPEX','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(25,'Kyler Bashirian MD','ukeeling@example.org','2023-05-24 20:41:28','Perempuan','550 Anjali Valleys\nNew Llewellynburgh, IL 89123','(351) 519-6668','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2Op1wfry83','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(26,'Alfred Schaden I','jennie.hayes@example.org','2023-05-24 20:41:28','Laki-laki','2394 Milan Drive Suite 626\nNew Elizabethtown, ID 93916-3806','281-313-1452','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Yf36w8D4ZK','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(27,'Jaden Cremin','macejkovic.carolyn@example.org','2023-05-24 20:41:28','Laki-laki','53507 Lionel Dale Suite 998\nNew Adelineside, VA 69268','+1.364.562.2938','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','GzBVAB59Zs','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(28,'Bryce Casper DVM','warren.schmidt@example.net','2023-05-24 20:41:28','Laki-laki','421 Jodie Trafficway Suite 083\nPort Alfonzoside, PA 69542','678-779-8794','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ngJXikSohx','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(29,'Zakary Trantow','claudine78@example.net','2023-05-24 20:41:28','Laki-laki','65690 Fay Courts\nJeannefurt, AZ 62586-3618','+1.551.310.4112','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Cf1aR0UuUX','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(30,'Prof. Felipe Kuhn MD','lbednar@example.net','2023-05-24 20:41:28','Perempuan','8201 Art Hill\nWisozkchester, MS 38054','+1-858-591-7153','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','PfXkm1AXm4','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(31,'Luz Tremblay','eluettgen@example.org','2023-05-24 20:41:28','Laki-laki','46859 Treutel Mill Apt. 069\nSouth Jewell, NJ 35113','+1.254.450.3208','user','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','vKabpdjRnG','2023-05-24 20:41:28','2023-05-24 20:41:28'),
	(32,'Administrator','admin@test.com','2023-05-24 20:52:09','Perempuan','221 Nikko Oval\nNew Jeanne, GA 08096','+1 (424) 315-1662','admin','$2y$10$dNZYz0gYWQxfdmQTVnhSqeop5honufGbVTs6evRWUS5E.bM6TRnnS',NULL,'2023-05-24 20:52:09','2023-05-24 20:52:09'),
	(34,'Administrator','admin@tests.com','2023-05-24 20:52:54','Perempuan','4251 Casper Drive Apt. 155\nLake Trenton, OR 91587-2496','267-565-0466','admin','$2y$10$fLD5jzn/pvw9eUpwT4Wlk.wceKPSfs1q8m22odhiPj2oZ6QJjlB.2',NULL,'2023-05-24 20:52:54','2023-05-24 20:52:54'),
	(36,'Aghits Nidallah','yourlovelydev@gmail.com',NULL,'Laki-laki','Jl. Sunan Gunung Jati, Rt 003/Rw 001, Desa Astana, Blok Pekauman, Kec. Gunungjati., Desa Astana, Kec. Gunung Jati.','+6285155332844','user','$2y$10$9.pv5o5kTbEpeB026HMtVeNwBnoOC0PMgfrMcABAiKI/mjSHq1AFq',NULL,'2023-05-24 22:46:39','2023-05-24 22:54:01');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
