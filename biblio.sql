-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 jan. 2021 à 15:19
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio`
--
CREATE DATABASE IF NOT EXISTS `biblio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `biblio`;

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numCNI` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titrelivre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `auteurLivre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `nom`, `prenom`, `numCNI`, `titrelivre`, `auteurLivre`) VALUES
(1, 'Aboubakard', 'Ndjidda Fal', '100104', 'Ngum a djemea', 'Abakar');

-- --------------------------------------------------------

--
-- Structure de la table `listeabonnes`
--

DROP TABLE IF EXISTS `listeabonnes`;
CREATE TABLE IF NOT EXISTS `listeabonnes` (
  `id` int NOT NULL,
  `noms` varchar(100) NOT NULL,
  `cni` float NOT NULL,
  `phone` varchar(100) NOT NULL,
  `forfait` varchar(100) NOT NULL,
  `dateAjout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `listeabonnes`
--

INSERT INTO `listeabonnes` (`id`, `noms`, `cni`, `phone`, `forfait`, `dateAjout`) VALUES
(1, 'Abdoul-aziz', 1234570000, '699009900', 'Semestriel', '2021-01-08 22:09:55'),
(2, 'Kaïgama Ousmanou', 100466000, '655787038', 'Annuel', '2021-01-10 17:57:20');

-- --------------------------------------------------------

--
-- Structure de la table `listedocuments`
--

DROP TABLE IF EXISTS `listedocuments`;
CREATE TABLE IF NOT EXISTS `listedocuments` (
  `id` int NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anneePublication` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `listedocuments`
--

INSERT INTO `listedocuments` (`id`, `titre`, `auteur`, `categorie`, `anneePublication`) VALUES
(1, 'Une saison blanche et sèche', 'André Brink', 'Roman', 2000),
(2, 'Ngum a jemea', 'Evelyne Mpoudi Ngole', 'Roman', 1999),
(3, 'Topologie Générale', 'Houppa', 'Mathématiques', 2010),
(4, 'Algebre 1', 'Dr Mantika', 'Mathématiques', 2020),
(5, 'Complémént d’Analyse', 'Dr Nangue', 'Mathématiques', 2009),
(6, 'Le Génie Logiciel', 'Dr Hayatou Oumarou', 'Informatique', 2018),
(7, 'Introduction à l’Informatique', 'Pr Kolyang', 'Informatique', 2008);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'Hamadou', 'Secret');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
