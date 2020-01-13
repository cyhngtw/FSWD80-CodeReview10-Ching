-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 03:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_chingying_huang_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pub_year` date NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_surname` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `status` enum('true','false') NOT NULL DEFAULT 'false',
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `ISBN`, `type`, `image`, `description`, `pub_year`, `author_name`, `author_surname`, `publisher`, `address`, `size`, `status`, `role`) VALUES
(1, 'Der Spezialist', '9783867372686', 'video', 'book1.jpg', 'Sie brauchen eine Information? Sie kennen die Person, die diese Information hat, aber sie hüllt sich in Schweigen?', '2005-05-05', 'Smith', 'Mark Allen', 'Bastei Lübbe', 'Schanzenstraße 6-20, 51063 Köln', 'small', 'false', 'user'),
(2, 'UND DIESES VERDAMMTE LEBEN GEHT EINFACH WEITER', '9783764192402', 'book', 'book2.jpg', 'Seit Monaten freuen sich Timon und Sunny darauf, auf Mallorca das bestandene Abitur zu feiern. Zwei beste Freunde und drei Wochen Sonne, Spaß und Freiheit - was kann es Schöneres geben? Doch schon auf der Fahrt will die richtige Stimmung nicht aufkommen. ', '2018-09-17', 'Hansjörg', 'Nessensohn', 'Ueberreuter Verlag', 'strasse 2, wien', 'small', 'false', 'user'),
(3, 'SCHNEETÄNZER', '9783401808390', 'book', 'book3.jpg', 'Stell dir vor, du willst deinen Vater suchen und begegnest dabei deiner großen Liebe ... Hals über Kopf, voller Wut und Enttäuschung bricht Jacob in den Norden Kanadas auf, in die unendliche Wildnis von Eis und Schnee. Dort will er seinen Vater finden und', '2009-11-11', 'Antje\r\n', 'Babendererde', 'Arena Verlag', 'y strasse, wien', 'big', 'false', 'user'),
(4, 'DIE TAGE VOR DER HOCHZEIT', '9783641237899', 'book', 'book4.jpg', 'Für alle, die ihre Familie lieben, obwohl die alles tut, um das zu verhindern. Emily Glass weiß, dass sie ein paar Macken hat. Aber ist das ein Wunder? Schon als Kind wurde sie von ihrer Mutter, einer Psychologin, ständig analysiert. Ihr Vater, ein Unidoz', '2019-12-20', 'Borowitz', 'Alexandra', 'Goldmann Verlag', 'z strasse 4, wien', 'medium', 'true', 'user'),
(5, 'DAS BUCH DER VIOLINE', '9783795791568', 'CD', 'book5.jpg', 'Kolneder hat in seinem Werk sämtliche Aspekte der Violine erfasst und beleuchtet', '2012-11-07', 'Kolneder', 'Walter', 'Schott Musik International GmbH & Co KG', 'Weihergarten 5 55116 Main', 'small', 'true', 'user'),
(6, 'CINDER & ELLA', '9783838792583', 'CD', 'book6.jpg', 'Nach einem schweren Autounfall hat Ella ein Jahr voller OPs und Rehas hinter sich', '2019-11-13', 'Oram', 'Kelly', 'Pfeiffer, Fabienne', 'volkgarten 5 55116 Linz', 'small', 'true', 'user'),
(7, 'WIE HENRI HENRIETTE FAND', '9783844921700', 'CD', 'book7.jpg', 'Henri Hahn ist Koch aus Leidenschaft. ', '2019-01-25', 'Neudert', 'Cee', 'Kids Audio', 'volkstrasse 5 1020 Wien', 'medium', 'true', 'user'),
(8, 'DAS VEGETARISCHE KOCHBUCH', '9783766722409', 'DVD', 'book8.jpg', '\r\nBarbara Bonisollis Rezepte sind einzigartig einfach und lecker. Die meisten Zutaten stammen aus dem eigenen Garten.', '2017-11-19', 'Bonisolli', 'Barbara', 'Callwey Verlag', 'Streitfeldstraße 35, 81673 München', 'small', 'false', 'user'),
(9, '30 MINUTEN ACHTSAMKEIT', '9783956233708', 'DVD', 'book9.jpg', 'Gerade in Zeiten hoher Stressbelastung werden wir häufig unachtsam für die eigenen Bedürfnisse und Grenzen.', '2016-11-18', 'Huth', 'Dörthe', 'GABAL-Verlag GmbH', 'Schumannstraße 155, 63069 Main', 'small', 'true', 'user'),
(10, 'PYTHON HACKING', '9783645204156', 'DVD', 'book10.jpg', 'Schon einmal selbst gehackt? Na, dann wird es aber Zeit - lernen Sie, wie Hacker mit Python Systeme angreifen und Schwachstellen ausnutzen.', '2015-11-15', '	\r\nO\'Connor\r\n', 'T. J.', 'Franzis Verlag', 'Richard-Reitzner-Allee 2, 85540 Haar', 'big', 'false', 'user'),
(11, 'b', '9783867372687', '', '', 'b', '2015-05-05', 'cccc', 'bbb', 'obb', '54, v. F.lli Varian', 'small', 'false', 'user'),
(12, 'b', '9783867372685', 'audio', 'd', 'Wolfgang Amadeus Mozart - jeder kennt seine Musik, doch sein Lebensweg ist weniger geläufig.', '2015-05-05', 'sssd', 'dddd', 'Audiolino', 'Via Zumaglia, 64', 'small', 'false', 'user'),
(13, ' 2MOZART UND DIE SCHWERELOSIGKEIT DER MUSIK', '9783867372686', 'book', 'd', 'Wolfgang Amadeus Mozart - jeder kennt seine Musik, doch sein Lebensweg ist weniger geläufig.', '2005-05-10', 'Beikircher', 'YING', 'Audiolino', 'Via Zumaglia, 64', 'big', 'false', 'user'),
(22, 'b', '9783867372686', 'bookk', '', 'Wolfgang Amadeus Mozart - jeder kennt seine Musik, doch sein Lebensweg ist weniger geläufig.', '2005-05-05', 'Beikircher', 'YING', 'Audiolino', 'Via Zumaglia, 64', 'big', 'false', 'user'),
(25, 'b', '9783867372687', 'book', './uploads/book1.jpg', 'b', '0000-00-00', 'sssd', 'YING', 'Audiolino', 'Via Zumaglia, 64', 'big', 'false', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(20) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPass`, `userEmail`) VALUES
(2, 'ccc', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'ccc@c.c'),
(3, 'HUANG', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'h@h.h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
