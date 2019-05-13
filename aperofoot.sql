-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 mai 2019 à 10:01
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aperofoot`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

DROP TABLE IF EXISTS `demandeur`;
CREATE TABLE IF NOT EXISTS `demandeur` (
  `n_demandeur` int(11) NOT NULL,
  `n_match` int(11) NOT NULL,
  PRIMARY KEY (`n_demandeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hebergeur`
--

DROP TABLE IF EXISTS `hebergeur`;
CREATE TABLE IF NOT EXISTS `hebergeur` (
  `n_hebergeur` int(11) NOT NULL,
  `n_match` int(11) NOT NULL,
  PRIMARY KEY (`n_hebergeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `n_user` int(11) NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `n_tel` char(10) COLLATE latin1_general_ci NOT NULL,
  `note` float NOT NULL,
  PRIMARY KEY (`n_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD CONSTRAINT `demandeur_ibfk_1` FOREIGN KEY (`n_demandeur`) REFERENCES `user` (`n_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `hebergeur`
--
ALTER TABLE `hebergeur`
  ADD CONSTRAINT `hebergeur_ibfk_1` FOREIGN KEY (`n_hebergeur`) REFERENCES `user` (`n_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
