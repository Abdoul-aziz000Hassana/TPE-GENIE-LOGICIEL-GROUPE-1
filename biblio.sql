-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 jan. 2021 à 11:33
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

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

-- --------------------------------------------------------

--
-- Structure de la table `listeAbonnes`
--

CREATE TABLE `listeAbonnes` (
  `id` int(11) NOT NULL,
  `noms` varchar(100) NOT NULL,
  `cni` float NOT NULL,
  `phone` varchar(100) NOT NULL,
  `forfait` varchar(100) NOT NULL,
  `dateAjout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `listeAbonnes`
--

INSERT INTO `listeAbonnes` (`id`, `noms`, `cni`, `phone`, `forfait`, `dateAjout`) VALUES
(1, 'Abdoul-aziz', 1234570000, '699009900', 'Semestriel', '2021-01-08 22:09:55'),
(2, 'Kaïgama Ousmanou', 100466000, '655787038', 'Annuel', '2021-01-10 17:57:20');

-- --------------------------------------------------------

--
-- Structure de la table `listeDocuments`
--

CREATE TABLE `listeDocuments` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anneePublication` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `listeDocuments`
--

INSERT INTO `listeDocuments` (`id`, `titre`, `auteur`, `categorie`, `anneePublication`) VALUES
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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'Hamadou', 'Secret');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listeAbonnes`
--
ALTER TABLE `listeAbonnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `listeDocuments`
--
ALTER TABLE `listeDocuments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listeAbonnes`
--
ALTER TABLE `listeAbonnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `listeDocuments`
--
ALTER TABLE `listeDocuments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
