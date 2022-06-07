-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 juin 2022 à 14:47
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `email`, `password`) VALUES
(2, 'teroma', 'theo.carbonnier@hotmail.fr', '$2y$12$Tm0EDeXuO8oKJY9wdPss6.zUBLfTfwGzgONMNzKpnKxBQ6briuAfK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
