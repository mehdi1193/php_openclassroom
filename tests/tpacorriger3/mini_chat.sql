-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 août 2018 à 14:37
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

DROP TABLE IF EXISTS `mini_chat`;
CREATE TABLE IF NOT EXISTS `mini_chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `Date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat`
--

INSERT INTO `mini_chat` (`ID`, `pseudo`, `msg`, `Date_ajout`) VALUES
(1, 'Onotek', 'Salut, ça va ?', '2018-08-20 16:14:11'),
(2, 'Onotek', 'Je suis un homme.', '2018-08-20 16:14:11'),
(3, 'Gryfx', 'Comment vas tu ?', '2018-08-20 16:14:11'),
(4, 'sasa', 'sasa', '2018-08-20 16:15:59'),
(5, 'Onotek', 'Salut', '2018-08-20 16:21:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
