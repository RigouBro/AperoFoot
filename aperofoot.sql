SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `aperofoot`
--

CREATE DATABASE IF NOT EXISTS aperofoot;

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

DROP TABLE IF EXISTS `proposition`;
CREATE TABLE IF NOT EXISTS `proposition` (
  `nommatch` varchar(50) NOT NULL,
  `n_user` int(11) NOT NULL,
  `commentaires` varchar(1000) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  PRIMARY KEY (`nommatch`,`n_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `n_user` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`n_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

