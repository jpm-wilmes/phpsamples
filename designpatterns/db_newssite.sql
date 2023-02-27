-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 14, 2022 at 03:12 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newssite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_articles`
--

CREATE TABLE `tb_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `introduction` text NOT NULL,
  `text` text NOT NULL,
  `publishdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_articles`
--

INSERT INTO `tb_articles` (`id`, `title`, `introduction`, `text`, `publishdate`, `status`, `author`) VALUES
(1, 'Uitreiking Vitaalste Werkgever van Limburg', '22 september werd de Award voor Vitaalste Werkgever \r\n                van Limburg 2022 uitgereikt door Netwerk Vitaal \r\n                Limburg.', '<p>\n                We feliciteren de winnaar AZL van harte! \n                Ook feliciteren wij onze mede finalist Kindante met \n                de tweede plaats. VISTA college eindigde als 3e. Een \n                mooie opsteker voor VISTA.\n            </p>\n            <p>    \n                Een speciaal woord van dank aan onze toppers \n                Frank Schoonbrood en Eline Hermans. Met als doel \n                een directe bijdrage leveren aan een vitaler \n                Limburg hebben zij het programma VISTA vitaal \n                gestart. VISTA vitaal geeft invulling aan het \n                stimuleren van vitaliteit en aandacht voor \n                werkplezier van zowel medewerkers als studenten.\n            </p>', '2022-10-06', 1, 'Vista redactie'),
(2, 'YOULP’ers organiseren “Hart voor Oekraïne-middag’', 'Op KC Leyenbroek hebben de junior medewerkers van YOULP in samenwerking met kinderopvang de Rode Loper een ‘Hart voor Oekraïne middag’. In de Zuilenzaal van KC Leyenbroek was een grootschalige markt opgezet. Vaders, moeders, opa’s, oma’s en kinderen waren van harte welkom om een zelfgemaakt (knutsel)werkje, hapje of drankje te kopen voor het goede doel. \r\nDe opkomst was waanzinnig en vele (knutsel)werkjes en lekkernijen vonden hun weg naar huis. Kinderen die meehielpen met de verkoop genoten van hun rol en van de gulle giften. Ook waren er leerlingen die een eigen inzamelactie hielden en zo veel geld inzamelden voor deze middag. Het was een groot succes. In totaal is er maar liefst € 2.851,24 opgehaald!\r\n', '<p><b>Sittard-Geleen Helpt</b><br />\r\nWoensdag 8 juni werd de cheque aan Carolien Mulder-Leers en Michel van Dijke van Sittard-Geleen Helpt (onderdeel van Petje af Zuid-Limburg) overhandigd.\r\n</p><p>\r\nSittard-Geleen Helpt is een collectief van vrijwilligers afkomstig uit verschillende organisaties die de gemeente Sittard-Geleen rijk is. Ze helpen en ondersteunen bij de opvang van Oekraïense vluchtelingen in de gemeente. Om kinderen even te laten ontsnappen aan de werkelijkheid worden er diverse activiteiten georganiseerd. Zo wordt er geschilderd, ponygereden, is er een goochelshow, fietsles of gaan ze samen zwemmen. Ook ondersteunen ze de Blauw-Gele Huiskamer in Sittard en worden er laptops, telefoons of fietsen geregeld. Het opgehaalde bedrag wordt dus heel goed besteed!\r\n</p><p>\r\n<b>YOULP</b><br />\r\nYOULP (YOU Learn and Practice) is een nieuw en uniek leer-werktraject van Kindante, MIK & PIW Groep en Vista College. Bij YOULP worden (toekomstige) medewerkers hybride opgeleid; ze leren in de praktijk in plaats van traditioneel vanuit de schoolbanken. De studenten zijn junior medewerkers en combineren studeren en werken op de werkvloer. Het unieke aan dit opleidingstraject is dat zij na twee jaar een dubbele diplomering van zowel \'Gespecialiseerd Pedagogisch Medewerker\' als \'Onderwijsassistent\' kunnen behalen.\r\n</p>', '2022-10-04', 1, 'Gertjan Vander Redactionaire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_articles`
--
ALTER TABLE `tb_articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_articles`
--
ALTER TABLE `tb_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
