-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table news.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table news.groups: ~0 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'admin user');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table news.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table news.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping structure for table news.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `contents` longtext,
  `imgURL` varchar(250) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table news.news: 6 rows
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `contents`, `imgURL`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(3, 'Troops neutralise one bandit', '&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;roops of 1 Division Nigeria Army under exercise HARBIN KUNAMA III, have neutralised one bandit and rescued 13 kidnapped victims in Kuyelo community in Birnin Gawri Local Government Area of Kaduna State.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;The Deputy Director Army Public Relations, Col Ezindu Idimah made the disclosure in a press statement issued on Monday in kaduna.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;Idimah said the feat followed distress calls received from good Samaritans indicating the abduction of some farmers while working on their farms at the outskirts of Kuyelo community in the local government area.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;According to Idimah, an Army patrol team stationed at Super Camp Kuyello, swiftly pursed the bandits and kidnappers and rescued all the 13 kidnapped farmers after a serious exchange of fire with the criminals.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;He disclosed that during the encounter, one of the bandits was neutralised, while others escaped with gunshot wounds.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;He added that soldiers were currently combing the general area which borders Katsina, Zamfara and Kaduna States.&lt;/p&gt;', 'public/images/1562601987.jpg', NULL, '2019-06-01 04:10:51', '2019-07-08 16:06:27'),
	(6, 'Brazil win Copa America, beat Peru', '&lt;div id=&quot;attachment_477710&quot; class=&quot;wp-caption alignnone&quot; style=&quot;box-sizing: border-box; max-width: 100%; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255); width: 514px;&quot;&gt;&lt;p id=&quot;caption-attachment-477710&quot; class=&quot;wp-caption-text&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 20px;&quot;&gt;Jesus has scored six goals in nine games in 2019&lt;/p&gt;&lt;/div&gt;&lt;p class=&quot;sp-story-body__introduction&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;Gabriel Jesus scored one goal and assisted another before being sent off as Brazil won a first Copa America title in 12 years, beating Peru 3-1.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;Manchester City forward Jesus set up Everton to volley in the opener before scoring the decisive second.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;Paolo Guerrero had briefly given Peru hope when he equalised from the penalty spot minutes before Jesus struck.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;Jesus was shown a second yellow with 20 minutes left but Richarlison&rsquo;s late penalty sealed the win.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 20px; color: rgb(33, 33, 33); font-family: &amp;quot;Helvetica Neue&amp;quot;, Verdana, Helvetica, Arial, Utkal, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);&quot;&gt;It is the ninth time Brazil have won the Copa America and is their first tournament success since winning a gold medal at the 2016 Olympics.&lt;/p&gt;', 'public/images/1562602132.jpg', NULL, '2019-07-08 08:59:40', '2019-07-08 16:08:52');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table news.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table news.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', NULL, 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, 'l0oEIcSOKlDknJSVZlLKg.', 1268889823, 1562601771, 1, 'Admin', 'istrator', 'ADMIN', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table news.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `new`.`menus` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table news.users_groups: ~0 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
