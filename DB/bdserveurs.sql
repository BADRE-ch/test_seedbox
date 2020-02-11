-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 10 fév. 2020 à 02:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdserveurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'ilyas sebbar', 'i.sebbar88@gmail.com', '$2y$10$t8oJ5Hr4l9rhTH4zm2ikNO75UfotcLvxMWK6pVSUlNTtKaXm2lSzK'),
(2, 'ilyas sebbar', 'farid@gmail.com', '$2y$10$UC57G6pheJVKyePMvGE6jeLiUjdfFkgQNxCyuFSr7MHqEjziSnWwy'),
(3, 'badre', 'badre@gmail.com', '$2y$10$CJCmY.6WawI1jRaqHa8AgexmCk.nCAHjDq9uUFF/FjH8GabOcSX9O'),
(4, 'zak', 'zak@zak.com', '$2y$10$SrDLpacB5IXvtCBysSQXi.z9Di1yUsrF76Dmp32rIFDUaOtJgEDFe');

-- --------------------------------------------------------

--
-- Structure de la table `serveurs`
--

DROP TABLE IF EXISTS `serveurs`;
CREATE TABLE IF NOT EXISTS `serveurs` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `modele` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `micro` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cache` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `serveurs`
--

INSERT INTO `serveurs` (`ids`, `marque`, `modele`, `micro`, `ram`, `cache`, `image`) VALUES
(54, 'IBM', 'Power System L922 ', '2x POWER9 CPUs 10,12 cores', ' 4TB from 32 DDR4', '10 MB', 'ibm.jpg'),
(55, 'IBM', 'Power System S922', ' 2x POWER9 CPUs 8, 10 cores', ' 4 TB from 32 DDR4', '10 MB', 'ibm.jpg'),
(56, 'DELL', 'PowerEdge C4140', '2x Intel 12, 24 cores', '4 TB from 32 DDR4', '10 MB', 'dell.jpg'),
(63, 'IBM', 'Power System L922 ', '2x POWER9 CPUs 10,12 cores', ' 4TB from 32 DDR4', '10 MB', 'hpe.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
