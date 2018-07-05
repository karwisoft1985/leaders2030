-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 03 Juillet 2018 à 09:06
-- Version du serveur: 5.1.73-cll-lve
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `user1461_ls2030`
--

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

CREATE TABLE IF NOT EXISTS `acces` (
  `id_acces` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id_acces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE IF NOT EXISTS `certificat` (
  `id_certificat` int(11) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) NOT NULL,
  `id_leader` int(11) NOT NULL,
  PRIMARY KEY (`id_certificat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE IF NOT EXISTS `chapitre` (
  `id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(100) NOT NULL,
  `id_evaluation` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  PRIMARY KEY (`id_chapitre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `id_coach` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_acces` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE IF NOT EXISTS `ecole` (
  `id_ecole` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_acces` int(11) NOT NULL,
  PRIMARY KEY (`id_ecole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `ecole`
--

INSERT INTO `ecole` (`id_ecole`, `nom`, `adresse`, `tel`, `id_ville`, `id_acces`) VALUES
(1, 'Autre', '', '', 0, 0),
(2, 'Avicenne', '', '70035443', 1, 0),
(3, 'Avenir', '', '77230222', 1, 0),
(4, 'Mon école', '', '20988007', 1, 0),
(5, 'Leaders', '', '77282360', 1, 0),
(6, 'Assad Ibn Fourat', '', '97180180', 1, 0),
(7, 'La fontaine des sciences', '', '36176000', 1, 0),
(8, 'La créativité', '', '99062230', 5, 0),
(9, 'L excellence', '', '', 4, 0),
(10, 'assahabi', '', '', 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `id_evaluation` int(11) NOT NULL AUTO_INCREMENT,
  `note` float NOT NULL,
  `id_reponse` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_evaluation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(55) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `leader`
--

CREATE TABLE IF NOT EXISTS `leader` (
  `id_leader` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `id_access` int(11) NOT NULL,
  PRIMARY KEY (`id_leader`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `leader`
--

INSERT INTO `leader` (`id_leader`, `nom`, `prenom`, `date_naissance`, `tel`, `login`, `password`, `id_ville`, `id_ecole`, `id_parent`, `id_access`) VALUES
(1, 'Khelif', 'Nour', '2014-07-16', '55635122', 'nour', 'nour', 1, 2, 0, 0),
(2, 'makrem', 'riahi', '1992-03-02', '24830060', 'makrem', 'makrem', 1, 5, 0, 0),
(3, 'Ramah', 'Kais', '2007-07-09', '22411966', 'kais', 'kais', 1, 1, 0, 0),
(4, 'Khlif', 'Ahmad', '2011-01-26', '55635122', 'ahmad', 'ahmad', 1, 7, 0, 0),
(5, 'sboui', 'ichraf', '1991-03-14', '', 'icsbo1', '39369712', 1, 10, 0, 0),
(6, 'KHMIRI', 'CHEDLY', '1972-08-02', '97499853', 'CHKHM1', '85755627', 1, 4, 0, 0),
(7, 'Hammas ', 'Aicha ', '2008-01-02', '27414788', 'AiHam1', '95726795', 1, 6, 0, 0),
(8, 'Hammas ', 'Mohamed', '1972-02-25', '27414788', 'MoHam1', '25519572', 1, 6, 0, 0),
(9, 'abdellatif', 'zrig', '2003-05-01', '97325985', 'zrabd1', '84113184', 1, 2, 0, 0),
(10, 'amara', 'habiba', '2011-04-25', '22493602', 'haama1', '72166874', 1, 6, 0, 0),
(11, 'Belghith', 'Mohamed', '1979-12-08', '', 'MoBel1', '54162724', 4, 8, 0, 0),
(12, 'test', 'test', '2010-03-14', '4522589963', 'tetes1', '66411735', 7, 10, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(100) NOT NULL,
  PRIMARY KEY (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `intitule`) VALUES
(1, 'niveau1'),
(2, 'niveau 2'),
(4, 'niveau 4');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `id_parent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `id_acces` int(11) NOT NULL,
  PRIMARY KEY (`id_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom`) VALUES
(1, 'Tunisie');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE IF NOT EXISTS `reponses` (
  `id_reponse` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reponse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  `id_pays` int(11) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom`, `id_pays`) VALUES
(1, 'Kairouan', 1),
(2, 'Mednine', 1),
(3, 'Ariana', 1),
(4, 'Sousse', 1),
(5, 'Monastir', 1),
(6, 'Sfax', 1),
(7, 'Gafsa', 1),
(8, 'Tunis', 1),
(9, 'Sidi bouzid', 1),
(10, 'Kasserine', 1),
(11, 'Tataouine', 1),
(12, 'Tozeur', 1),
(13, 'Gabes', 1),
(14, 'Mahdia', 1),
(15, 'Ben arous', 1),
(16, 'Manouba', 1),
(17, 'Beja', 1),
(18, 'Siliana', 1),
(19, 'Kebili', 1),
(20, 'Jendouba', 1),
(21, 'Kef', 1),
(22, 'Nabeul', 1),
(23, 'Zaghouane', 1),
(24, 'Bizerte', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
