-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Août 2018 à 01:51
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp-blog-commentaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id_billets` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_publication` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id_billets`, `titre`, `message`, `date_publication`) VALUES
(1, 'Apple iPhone X 256 Go', 'Nous avons toujours rêvé de créer un iPhone qui ne soit qu’écran. Un iPhone si immersif qu’il s’efface au profit de la seule expérience. Un iPhone si intelligent qu’il réponde à un geste, à la voix… et même à un regard. C’est chose faite aujourd’hui.', '2018-08-01 10:12:22'),
(2, 'Design', 'Le verre le plus résistant jamais vu sur un smartphone, à l’avant comme à l’arrière. Un acier inoxydable chirurgical. Le chargement sans fil. La résistance à l’eau et à la poussière. Et vous n’avez pas tout vu.', '2018-08-02 05:11:00'),
(3, 'Samsung A6', 'Vous désirez acheter le Samsung Galaxy A6? Découvrez ses caractéristiques et commandez le Galaxy A6.', '2018-08-12 21:31:54'),
(4, 'Samsung Galaxy A6 | SM-A600 | Samsung', 'Résumé du test Le Samsung Galaxy A6 est un smartphone complet, mais qui n''est pas sans défaut. Son design, même s''il est peu inspiré, a le ...', '2018-08-12 21:32:57'),
(5, 'Acheter l''iPhone 8 ou l''iPhone 8 Plus - Apple (BE)', 'Achetez dès aujourd''hui l''iPhone 8 ou l''iPhone 8 Plus en gris sidéral, or, argent ou (PRODUCT)RED. Commandez dès maintenant et profitez de la livraison ... ?iPhone 8 64 Go Argent · ?iPhone 8 256 Go Or · ?iPhone 8 64 Go Or', '2018-08-13 01:28:11');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `id_billets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `auteur`, `comment`, `date_commentaire`, `id_billets`) VALUES
(1, 'Mehdi', 'Love thissss Phoneeeee !!\r\n', '2018-08-04 06:00:00', 1),
(2, 'SofiaaaaaaS', 'Apple <3', '2018-08-02 07:17:23', 2),
(3, 'Karimaaaa', 'WAW !', '2018-08-16 08:28:00', 2),
(4, 'wawa', 'wawaww', '2018-08-23 07:17:19', 1),
(5, 'wawa', 'wa', '0000-00-00 00:00:00', 2),
(6, 'mhido', 'fchkal', '0000-00-00 00:00:00', 2),
(7, 'Marouane', 'best phone ever', '0000-00-00 00:00:00', 2),
(8, 'Marouane', 'best phone ever', '2018-08-05 20:48:45', 2),
(9, 'Said', 'toooop', '2018-08-05 20:54:26', 2),
(10, 'Hamiiid', '00000', '2018-08-05 20:54:51', 1),
(11, 'Saraa', 'nice one !', '2018-08-05 21:06:22', 1),
(12, 'Hamiiid', 'WOOOOOOOOOOOW', '2018-08-12 13:23:58', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id_billets`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`),
  ADD KEY `id_billets` (`id_billets`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id_billets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaires` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_billets`) REFERENCES `billets` (`id_billets`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
