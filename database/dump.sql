-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: film_information
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_film`
--

DROP TABLE IF EXISTS `about_film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_film_id` (`film_id`),
  CONSTRAINT `fk_film_id` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_film`
--

LOCK TABLES `about_film` WRITE;
/*!40000 ALTER TABLE `about_film` DISABLE KEYS */;
INSERT INTO `about_film` VALUES (69,98,' Blazing Saddles is a 1974 American satirical Western film directed by Mel Brooks. Starring Cleavon Little and Gene Wilder, the film was written by Brooks, Andrew Bergman, Richard Pryor, Norman Steinberg and Al Uger, and was based on Bergman\'s story and draft.'),(70,99,' A cynical nightclub owner protects an old flame and her husband from Nazis in Morocco.'),(71,100,' Charade is a 1953 black and white American anthology film directed by Roy Kellino. It consists of a trio of short stories introduced by and starring James Mason and his wife Pamela.'),(72,101,' Cool Hand Luke is a 1967 American prison drama film directed by Stuart Rosenberg, starring Paul Newman and featuring George Kennedy in an Oscar-winning performance. Newman stars in the title role as Luke, a prisoner in a Florida prison camp who refuses to submit to the system.'),(73,102,' Wyoming, early 1900s. Butch Cassidy and The Sundance Kid are the leaders of a band of outlaws. After a train robbery goes wrong they find themselves on the run with a posse hard on their heels. Their solution - escape to Bolivia.'),(74,103,' Two grifters team up to pull off the ultimate con.'),(75,104,' Kermit and his newfound friends trek across America to find success in Hollywood, but a frog legs merchant is after Kermit.'),(76,105,' Get Shorty is a 1995 American crime comedy film based on Elmore Leonard\'s novel of the same name. Directed by Barry Sonnenfeld and starring John Travolta, Gene Hackman, Rene Russo, and Danny DeVito. A sequel, titled Be Cool, was released in 2005.'),(77,106,' Two New Yorkers are accused of murder in rural Alabama while on their way back to college, and one of their cousins--an inexperienced, loudmouth lawyer not accustomed to Southern rules and manners--comes in to defend them.'),(78,107,' A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.'),(79,108,' Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.'),(80,109,' In 1936, archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before Adolf Hitler\'s Nazis can obtain its awesome powers.'),(81,110,' The crew of the ship Serenity try to evade an assassin sent to recapture one of their members who is telepathic.'),(82,111,' Hoosiers is a 1986 sports film written by Angelo Pizzo and directed by David Anspaugh in his feature directorial debut. It tells the story of a small-town Indiana high school basketball team that wins the state championship. It is loosely based on the Milan High School team that won the 1954 state championship.'),(83,112,' A young man finds a back door into a military central computer in which reality is confused with game-playing, possibly starting World War III.'),(84,113,' A rogue star pilot and his trusty sidekick must come to the rescue of a Princess and save the galaxy from a ruthless race of beings known as Spaceballs. '),(85,114,' An American grandson of the infamous scientist, struggling to prove that his grandfather was not as insane as people believe, is invited to Transylvania, where he discovers the process that reanimates a dead body.'),(86,115,' Teenage geniuses deal with their abilities while developing a high-powered laser for a university project. When their professor intends to turn their work into a military weapon, they decide to ruin his plans.'),(87,116,' As students at the United States Navy\'s elite fighter weapons school compete to be best in the class, one daring young pilot learns a few things from a civilian instructor that are not taught in the classroom.'),(88,117,' The staff of a Korean War field hospital use humor and high jinks to keep their sanity in the face of the horror of war.'),(89,118,' Without hostile intent, a Soviet submarine runs aground off New England. Men are sent for a boat, but many villagers go into a tizzy, risking bloodshed.'),(90,119,' When a killer shark unleashes chaos on a beach resort, it\'s up to a local sheriff, a marine biologist, and an old seafarer to hunt the beast down.'),(91,120,' After discovering a mysterious artifact buried beneath the lunar surface, mankind sets off on a quest to find its origins with help from intelligent supercomputer HAL 9000.'),(92,121,' Due to his insistence that he has an invisible six foot-tall rabbit for a best friend, a whimsical middle-aged man is thought by his family to be insane - but he may be wiser than anyone knows.'),(93,122,' For fun-loving party animal Ben Stone, the last thing he ever expected was for his one-night stand to show up on his doorstep eight weeks later to tell him she\'s pregnant with his child.\n');
/*!40000 ALTER TABLE `about_film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `year` int(5) NOT NULL,
  `format` varchar(10) DEFAULT NULL,
  `actors` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (98,' Blazing Saddles\n',1974,' VHS\n',' Mel Brooks, Clevon Little, Harvey Korman, Gene Wilder, Slim Pickens, Madeline Kahn\n'),(99,' Casablanca\n',1942,' DVD\n',' Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre\n'),(100,' Charade\n',1953,' DVD\n',' Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy\n'),(101,' Cool Hand Luke\n',1967,' VHS\n',' Paul Newman, George Kennedy, Strother Martin\n'),(102,' Butch Cassidy and the Sundance Kid\n',1969,' VHS\n',' Paul Newman, Robert Redford, Katherine Ross\n'),(103,' The Sting\n',1973,' DVD\n',' Robert Redford, Paul Newman, Robert Shaw, Charles Durning\n'),(104,' The Muppet Movie\n',1979,' DVD\n',' Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton\n'),(105,' Get Shorty\n',1995,' DVD\n',' John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina\n'),(106,' My Cousin Vinny\n',1992,' DVD\n',' Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio\n'),(107,' Gladiator\n',2000,' Blu-Ray\n',' Russell Crowe, Joaquin Phoenix, Connie Nielson\n'),(108,' Star Wars\n',1977,' Blu-Ray\n',' Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones\n'),(109,' Raiders of the Lost Ark\n',1981,' DVD\n',' Harrison Ford, Karen Allen\n'),(110,' Serenity\n',2005,' Blu-Ray\n',' Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor\n'),(111,' Hooisers\n',1986,' VHS\n',' Gene Hackman, Barbara Hershey, Dennis Hopper\n'),(112,' WarGames\n',1983,' VHS\n',' Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin\n'),(113,' Spaceballs\n',1987,' DVD\n',' Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers\n'),(114,' Young Frankenstein\n',1974,' VHS\n',' Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle\n'),(115,' Real Genius\n',1985,' VHS\n',' Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton\n'),(116,' Top Gun\n',1986,' DVD\n',' Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt\n'),(117,' MASH\n',1970,' DVD\n',' Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall\n'),(118,' The Russians Are Coming, The Russians Are Coming\n',1966,' VHS\n',' Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith\n'),(119,' Jaws\n',1975,' DVD\n',' Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary\n'),(120,' 2001: A Space Odyssey\n',1968,' DVD\n',' Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain\n'),(121,' Harvey\n',1950,' DVD\n',' James Stewart, Josephine Hull, Peggy Dow, Charles Drake\n'),(122,' Knocked Up\n',2007,' Blu-Ray\n',' Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann\n');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-22  0:33:34
