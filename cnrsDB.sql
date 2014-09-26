-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 26 Septembre 2014 à 16:54
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cnrs`
--

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE IF NOT EXISTS `atelier` (
  `idA` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `descriptif` varchar(500) DEFAULT NULL,
  `theme` varchar(30) NOT NULL,
  `lieu` varchar(30) NOT NULL,
  `labo` varchar(30) NOT NULL,
  PRIMARY KEY (`idA`),
  UNIQUE KEY `nom` (`nom`),
  KEY `idT` (`theme`),
  KEY `idT_2` (`theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `atelier`
--

INSERT INTO `atelier` (`idA`, `nom`, `descriptif`, `theme`, `lieu`, `labo`) VALUES
(1, 'boucherie', NULL, '1', '1', '1'),
(2, 'boulangerie', NULL, '1', '1', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
