-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Mai 2015 à 17:23
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `germn`
--

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `id` int(3) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `date`, `lieu`, `description`) VALUES
(1, '2014-12-28', 'Toulouse, Le phare', 'Ceci est un exemple.\r\n Aliquam erat volutpat. Maecenas vitae tellus eu tellus egestas iaculis lobortis at sem. Fusce mi dui, laoreet eu libero sed, molestie feugiat ante.'),
(2, '2016-12-18', 'Un autre lieu, Test', 'Ceci est un deuxieme exemple\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec augue gravida, dapibus lectus ut, rutrum velit.'),
(3, '2015-05-08', 'Montauban, Salle', 'Concert dans le cadre du festival bidule chouette. Duis vel velit dictum, semper neque accumsan, eleifend ante. Nunc quis arcu purus. ');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `id` int(2) NOT NULL,
  `identifiant` text NOT NULL,
  `motdepasse` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`id`, `identifiant`, `motdepasse`) VALUES
(1, 'jeane', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `sujet` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
  `id` int(3) NOT NULL,
  `titre` text NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `lien` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateAjout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `titre`, `lien`, `description`, `dateAjout`) VALUES
(1, 'Teaser', '//www.youtube.com/embed/lT24oBRWNyo?rel=0', 'Teaser de Mlle GermN', '2015-05-29'),
(2, 'Premier clip de Mlle GermN', '//www.youtube.com/embed/zeNu4dXVWSc', 'Concert live de MlleGermN', '0000-00-00'),
(3, 'Deuxieme clip de Mlle GermN', '//www.youtube.com/embed/kWi-2s97cGo?rel=0', 'Second extrait du live', '0000-00-00'),
(70, '<qsd', 'https://www.youtube.com/watch?v=eBG7P-K-r1Y', 'qdqsd', '2015-05-29');

--
-- Déclencheurs `video`
--
DROP TRIGGER IF EXISTS `dateInsertion`;
DELIMITER //
CREATE TRIGGER `dateInsertion` BEFORE INSERT ON `video`
 FOR EACH ROW SET NEW.dateAjout = now()
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
