/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.4.7-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: porfolio
-- ------------------------------------------------------
-- Server version	11.4.7-MariaDB-0ubuntu0.25.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES
('xavierjeanne_cache_356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1766169840),
('xavierjeanne_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1766169840;',1766169840);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `experience_skill`
--

LOCK TABLES `experience_skill` WRITE;
/*!40000 ALTER TABLE `experience_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `experience_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `experiences`
--

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` VALUES
(1,1,'Développeur Full Stack','2023-01-01',NULL,'102-103 - Caen, France','Création de fonctionnalités en Laravel et vue, pour la plateforme Sass.\n                Création du site vitrine avec backoffice de configuration en Laravel et\n                Bootstrap.','2025-10-06 12:25:09','2025-10-06 12:25:09'),
(2,1,'Développeur Wordpress','2020-04-01','2023-05-01','Image in France - Caen, France','Création de site web avec Wordpress, maintenance corrective et évolutive.\n                Respect du désign, responsivité et compatibilité multi navigateur.','2025-10-06 12:25:09','2025-10-06 12:25:09'),
(3,1,'Développeur Web','2019-02-01','2019-09-01','MysocialCompany - Caen, France','Création d’un site vitrine sous Drupal.','2025-10-06 12:25:09','2025-10-06 12:25:09'),
(4,1,'Responsable logistique','2008-04-01','2018-12-01','Avad - Bordeaux, France','Gestion de la chaîne d\'approvisionnement et optimisation des processus logistiques.','2025-10-06 12:25:09','2025-10-08 15:17:07');
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES
(1,1,'Développeur d\'application Python','6','2025','Construisez des applications web en utilisant le langage de programmation Python et le framework Django.','Openclassrooms','2025-10-06 12:25:09','2025-10-06 12:40:40'),
(2,1,'Développeur Web','5','2018','Formation générale en informatique et programmation','IFPA Mérignac','2025-10-06 12:25:09','2025-10-06 12:40:34'),
(3,1,'Deug économie et gestion','5','1999 - 2002','Formation générale','Université de Caen','2025-10-06 12:25:09','2025-10-06 12:40:46'),
(4,1,'Baccalauréat série ES','4','1999','Formation générale','Lycée Arcisse de Caumont','2025-10-06 12:25:09','2025-10-06 12:40:52');
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_05_16_122234_create_formations_table',1),
(5,'2025_05_16_122304_create_experiences_table',1),
(6,'2025_05_16_122319_create_realisations_table',1),
(7,'2025_05_16_122343_create_skills_table',1),
(8,'2025_05_16_122446_create_experience_skill',1),
(9,'2025_05_16_122502_create_realisation_skill',1),
(10,'2025_05_20_084937_update_users_table',1),
(11,'2025_05_21_115639_update_level_skill',1),
(12,'2025_05_21_130109_update_date_faormation',1),
(13,'2025_10_04_162138_update_realisation_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `realisation_skill`
--

LOCK TABLES `realisation_skill` WRITE;
/*!40000 ALTER TABLE `realisation_skill` DISABLE KEYS */;
INSERT INTO `realisation_skill` VALUES
(1,1,13,NULL,NULL),
(2,1,8,NULL,NULL),
(3,2,13,NULL,NULL),
(4,2,14,NULL,NULL),
(5,3,14,NULL,NULL),
(6,3,4,NULL,NULL),
(7,3,9,NULL,NULL),
(8,4,13,NULL,NULL),
(9,5,2,NULL,NULL),
(10,5,11,NULL,NULL),
(11,5,3,NULL,NULL),
(12,5,9,NULL,NULL),
(13,5,10,NULL,NULL),
(14,6,2,NULL,NULL),
(15,6,3,NULL,NULL),
(16,6,7,NULL,NULL),
(17,6,11,NULL,NULL),
(18,6,4,NULL,NULL),
(19,7,12,NULL,NULL),
(20,7,11,NULL,NULL),
(21,7,10,NULL,NULL),
(22,7,9,NULL,NULL),
(23,8,12,NULL,NULL),
(24,8,11,NULL,NULL),
(25,8,9,NULL,NULL),
(26,8,10,NULL,NULL);
/*!40000 ALTER TABLE `realisation_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `realisations`
--

LOCK TABLES `realisations` WRITE;
/*!40000 ALTER TABLE `realisations` DISABLE KEYS */;
INSERT INTO `realisations` VALUES
(1,1,'GUDLFT Competition Booking Platform','https://github.com/xavierjeanne/Python_Testing','Projet de formation Openclassroom.\nAméliorez une application Web Python par des tests et du débogage, résolution de bug via l\'approche TDD. Gestion de branches via git ','projet personnel','realisations/GUDLFT Competition Booking Platform.jpg','2025-10-06 16:34:56','2025-10-06 16:34:56'),
(2,1,'SoftDesk support','https://github.com/xavierjeanne/OC_Project_10','Projet de formation Openclassroom\nCreer un API sécurisée RESTful en utilisant Django rest . Sécurisation des accès par JW token et réalisation de test avec pytest','Projet personnel','realisations/SoftDesk support.png','2025-10-06 16:38:20','2025-10-07 05:04:21'),
(3,1,'LITRevu','https://github.com/xavierjeanne/OC_project_9','Projet de formation Openclassroom.  \nDéveloppez une application Web en utilisant Django. ','Projet personnel','realisations/LITRevu.png','2025-10-06 16:43:29','2025-10-07 05:05:27'),
(4,1,'Chess','https://github.com/xavierjeanne/OC_Project_3','Projet de formation Openclassroom. \nCréer une application logiciel de gestion de tournoi d\'échec. Création d\'une interface graphique avec Tinker et mise en place d\'un design pattern MVC.','Projet personnel','realisations/Chess.png','2025-10-06 16:51:07','2025-10-06 16:51:07'),
(5,1,'102-103 site vitrine','https://102-103.com/','Réalisation du site vitrine de la start up 102-103\nCréation d\'un backoffice administrable. ','102-103 ','realisations/102-103 site vitrine.png','2025-10-06 16:54:02','2025-10-06 16:54:02'),
(6,1,'Facilitrs','https://facilitrs.com','Moteur de recherche fournisseur\n','102-103','realisations/Facilitrs.png','2025-10-06 16:55:58','2025-10-06 16:55:58'),
(7,1,'Site vitrine Legallais bouchard','https://entreprise-legallais.com/','Site institutionnel pour l\'entreprise Legallais bouchard','Imageinfrance','realisations/Site vitrine Legallais bouchard.png','2025-10-06 16:58:37','2025-10-06 16:58:37'),
(8,1,'Lequertier','https://lequertier.com/','Site vitrine pour la société Lequertier','Imageinfrance','realisations/Lequertier.png','2025-10-06 17:01:59','2025-12-19 18:33:59');
/*!40000 ALTER TABLE `realisations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('8Es63roliS7KRLssxWUUq1rsDFuoci6aaJfhoYGZ',NULL,'37.65.8.143','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoibkJlR05Ea1psc285RUVyYWF1dWZ3RFNhdm5STTNmakwybHo2elBFbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767799731),
('94xjfWTkIkw1vlfFZLLuDvsAxXluYWv59PKnesRC',NULL,'54.37.118.65','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiODVQd3dRVVc3cmlJUXc3WXRwWXFOdzdJOFF4czliekV5V0JMWUZ1WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767806497),
('arxwLs3AaVS6SkZjeABikkGhsNDe39q6ma80MGLP',NULL,'51.68.107.151','Mozilla/5.0 (compatible; MJ12bot/v2.0.4; http://mj12bot.com/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSENocXNGZ0JnZ0E2Q2hXcXRZZU1lZkEyWXk1eGx4clplZFM2S0NyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767867764),
('HI3PIUdbujO3VTKUCcqliOu2PmprzJaWZ2O858tA',NULL,'54.197.79.127','Mozilla/5.0 (Linux; Android 7.0; Nexus 9 Build/NRD90R) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoibGUySkhJZUp0d0lLQ09JOUlNSTRiRjBvNmZqTDhLQU0wajVuWWgwaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767884289),
('hrJNs76aMd3Ej9PP0mmnh43FYwh2LtIldwFj4QBz',NULL,'34.48.219.226','Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWF2TkxWZFlwdHk0ZmZOZEtGQmw0bnlDZ0M0aDd0amZyMzdYaGc0bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767808427),
('i5QTvSAYfEzE4SbIlbGGrSZ8NwkPBV39HURPjqF5',NULL,'74.7.243.204','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.3; +https://openai.com/gptbot)','YTozOntzOjY6Il90b2tlbiI7czo0MDoieVRoQzlrVExjalc1MGYxTUh3SWJLek1lSWh3cW1neko1RWJBYlpNbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767819981),
('kz27dcy2VCqsTHO0jKFAtFW0TwXTA8E2cR9J4dqZ',NULL,'46.105.42.135','Mozilla/5.0 (compatible; MJ12bot/v2.0.4; http://mj12bot.com/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoidDNtemxBdTBQdUlQNU9MTGljb2l3WVZ0dlFPYXh3eWRLOFhvMGFRTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767809124),
('MpZJcLvN2vPDTzstX8jD6773x9zQvjd1KM2h0RkA',NULL,'8.39.54.150','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidmZBYWRUV3RDbFFhbjlDTHUza3NKek52MFFHSzdqQ1Q3TndwSm1GTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767849259),
('oahaltmeyTfmplhf64FFq64piTfakCtIiTV7LAmD',NULL,'92.222.104.214','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm5TMUVoUlFsMTVCOFBzR2xCTW1YZnNFbXExbGRzWVFTeFFuWE5WMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767894394),
('QAR8rolt1lj39wcTQLCSodlapy432yyIca293D47',NULL,'23.27.145.220','Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjQwZ1NKVzhwd3VUTlRHUzhRelEwSTV6ZWZRZ2lIaDNSY0l2MUFmbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767825761),
('s5JGMMbCGIs64SCsf4d9wxunvnn0fjsvXf5Rvcba',NULL,'47.79.22.5','python-requests/2.32.4','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN29nRjhZVzBiUzZGOE0wRlkycFhxdkxrY25Sa0xyWExBQTJCNW1VcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767820859),
('uMmfMObtQ7SHH9DFtN596wn1sbMjw57w1Fijk8V2',NULL,'51.68.236.92','Mozilla/5.0 (compatible; MJ12bot/v2.0.4; http://mj12bot.com/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoidTlBdkVPNEhTS2EwV0t0MFVWUXcyOVRrREMyMU9Tcnlqa2hHWmFBMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767889200),
('v4pVkvIVqQ440NzdiXO8C9uwO6yNWKvPg1giqGmh',NULL,'72.11.154.143','python-requests/2.31.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHZGa1hjdjRBcFdERUF2VjQ5bm5SbHgzbm1ua0ZGTExNNHZlRk9TbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnhhdmllcmplYW5uZS5mciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1767882409),
('WzC7zxen3SWbAFkaWLifMvtDRUuwHU1H4WuWGRaV',NULL,'72.11.154.143','python-requests/2.31.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2ZTaFhTN1N6d0xaNnZIazRsTVlhSkdlM3BxVnpVTTJYWUU1YmszViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8veGF2aWVyamVhbm5lLmZyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767882609);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES
(1,1,'PHP','Développement backend avec PHP 8+',15,'skills/PHP.png','2025-10-06 12:25:09','2025-10-06 12:45:33'),
(2,1,'Laravel','Framework PHP pour applications web modernes',14,'skills/Laravel.jpg','2025-10-06 12:25:09','2025-10-06 12:55:06'),
(3,1,'MySQL/PostgreSQL','Conception et optimisation de bases de données',12,'skills/MySQL/PostgreSQL.png','2025-10-06 12:25:09','2025-10-06 16:27:01'),
(4,1,'JavaScript','ES6+, programmation asynchrone, DOM',14,'skills/JavaScript.png','2025-10-06 12:25:09','2025-10-06 12:49:47'),
(5,1,'Vue.js','Framework JavaScript réactif',14,'skills/Vue.js.png','2025-10-06 12:25:09','2025-10-06 12:45:19'),
(6,1,'Tailwind CSS','Framework CSS utility-first',13,'skills/Tailwind CSS.png','2025-10-06 12:25:09','2025-10-06 16:25:51'),
(7,1,'Livewire','Framework full-stack pour Laravel',11,'skills/Livewire.png','2025-10-06 12:25:09','2025-10-06 12:53:04'),
(8,1,'Git','Contrôle de version et collaboration',13,'skills/Git.png','2025-10-06 12:25:09','2025-10-06 12:49:59'),
(9,1,'HTML/CSS','Langages de balisage et de style pour le web',18,'skills/HTML/CSS.png','2025-10-06 12:25:09','2025-10-06 12:51:06'),
(10,1,'jQuery','Bibliothèque JavaScript pour simplifier la manipulation du DOM',13,'skills/jQuery.png','2025-10-06 12:25:09','2025-10-06 16:26:12'),
(11,1,'Bootstrap','Bibliothèque CSS pour un développement responsive et mobile-first',17,'skills/Bootstrap.png','2025-10-06 12:25:09','2025-10-06 12:45:58'),
(12,1,'WordPress','Système de gestion de contenu pour la création de sites web',16,'skills/WordPress.png','2025-10-06 12:25:09','2025-10-06 12:45:00'),
(13,1,'Python','Programmation polyvalente',13,'skills/Python.jpg','2025-10-06 16:28:24','2025-10-06 16:30:01'),
(14,1,'Django','Développement web  et api backend',12,'skills/Django.png','2025-10-06 16:29:42','2025-10-07 05:03:29');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Xavier Jeanne','xavier.jeanne@gmail.com','06 09 35 66 53','https://github.com/xavierjeanne','https://www.linkedin.com/in/xavier-jeanne-803592168/',NULL,NULL,'Développeur Full Stack passionné par la création d\'applications web performantes et intuitives. Compétent en PHP, Laravel, JavaScript, Vue.js, et bases de données MySQL/PostgreSQL. Toujours à la recherche de nouveaux défis pour améliorer mes compétences et contribuer à des projets innovants.Actuellement chez 102-103, je travaille sur une plateforme SaaS en Laravel 10 et Vue 3, dans un environnement agile.\nEn parallèle, je poursuis une formation en Python chez OpenClassrooms pour élargir mes compétences et explorer de nouvelles approches de développement.',NULL,'$2y$12$UPHXmr3myPZKVPPLZGa4FeeTaLOb8kwpFwbHOAJyGgI53fK39T7ha',NULL,'2025-10-06 12:25:09','2025-10-06 12:38:01',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-01-08 22:15:07
