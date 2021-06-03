-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 juin 2021 à 10:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_insecure_deserialization`
--
CREATE DATABASE IF NOT EXISTS `tp_insecure_deserialization` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tp_insecure_deserialization`;

-- --------------------------------------------------------

--
-- Structure de la table `extremely_sensible_datas`
--

DROP TABLE IF EXISTS `extremely_sensible_datas`;
CREATE TABLE IF NOT EXISTS `extremely_sensible_datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `sensible_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `extremely_sensible_datas`
--

INSERT INTO `extremely_sensible_datas` (`id`, `sensible_data`) VALUES
(1, 'Donnée sensible !'),
(2, 'Donnée encore plus sensible !'),
(3, 'Donnée grave trop sensible !'),
(4, '42'),
(5, 'A la fin de l\'attaque des titans, tout le monde meurt.'),
(6, 'Il fait beau.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
