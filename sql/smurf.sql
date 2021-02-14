-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 mai 2020 à 21:22
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smurf`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `datesimple` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `contenu`, `date`, `datesimple`) VALUES
(1, 'bb', '          bbbbbbb  ', '2020-05-11 21:25:37', '2020-05-11'),
(2, 'voici mon titre', '            voici mon contenu contenu contenu contenu\r\n', '2020-05-11 21:25:37', '2020-05-11'),
(3, 'a', '            aa', '2020-05-11 21:25:53', '2020-05-11'),
(4, 'a', '            aa', '2020-05-11 22:31:16', '2020-05-11'),
(5, 'a', '            aa', '2020-05-11 22:31:31', '2020-05-11'),
(6, 'a', '            aa', '2020-05-11 22:31:58', '2020-05-11'),
(7, 'a', '            aa', '2020-05-11 22:32:12', '2020-05-11'),
(8, 'a', '            aa', '2020-05-11 22:32:49', '2020-05-11'),
(9, 'a', '            aa', '2020-05-12 16:55:07', '2020-05-12'),
(10, 'a', '            aa', '2020-05-12 16:57:04', '2020-05-12'),
(11, 'a', '            aa', '2020-05-12 16:59:19', '2020-05-12'),
(12, 'marie ', '      ouai      ', '2020-05-12 17:04:32', '2020-05-12');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telephone` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `email`, `telephone`, `nom`) VALUES
(1, 'aaaaaa\r\n				', '', 0, ''),
(2, '				d', '', 0, ''),
(3, '				a', 'Pbpierreantoine@gmail.com', 0, ''),
(4, '			s	', 'Pbpierreantoine@gmail.com', 0, ''),
(5, '			asin	', 'Pbpierreantoine@gmail.com', 0, ''),
(6, '			p	', 'Pbpierreantoine@gmail.com', 651069969, ''),
(7, '		a		', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(8, '		a		', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(9, '		pierre		', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(10, '				', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(11, '				', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(12, '		aa		', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(13, '				', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(14, '				', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(15, '				', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(16, 'pierrrrre', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(17, 'pierrrrre', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(18, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(19, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(20, 's', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(21, 'hdjxjskx', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau'),
(22, 'coucou\r\n', 'Pbpierreantoine@gmail.com', 651069969, 'Pierre Antoine Baizeau');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
