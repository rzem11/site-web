-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 mai 2020 à 19:40
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amenitb`
--

-- --------------------------------------------------------

--
-- Structure de la table `catg`
--

CREATE TABLE `catg` (
  `id` int(11) NOT NULL,
  `refC` int(11) NOT NULL,
  `nomC` varchar(20) NOT NULL,
  `qteP` int(11) NOT NULL,
  `datecreation` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catg`
--

INSERT INTO `catg` (`id`, `refC`, `nomC`, `qteP`, `datecreation`, `description`) VALUES
(7, 2154, 'dressing', 0, 'Wed, 20 May 2020 04:', 'hezhezh'),
(8, 2215, 'salle a manger', 0, 'Sun, 03 May 2020 21:', 'rgtrgtrt'),
(9, 1999, 'chambres a coucher', 0, 'Sun, 03 May 2020 21:', 'ehzjn'),
(10, 1298, 'salons', 0, 'Wed, 20 May 2020 04:', 'huerhez'),
(14, 0, 'COIFFEUSE', 0, 'Sat, 23 May 2020 07:', 'srghjklm');

-- --------------------------------------------------------

--
-- Structure de la table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `nomP` varchar(20) NOT NULL,
  `categ` varchar(20) NOT NULL,
  `prixVG` int(11) NOT NULL,
  `prixVL` int(11) NOT NULL,
  `carac` text NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prod`
--

INSERT INTO `prod` (`id`, `ref`, `nomP`, `categ`, `prixVG`, `prixVL`, `carac`, `photo`) VALUES
(9, 158, 'LITbleu', 'chambres a coucher', 2000, 3200, ' ebhdeherhe', 'lit_299177.jpg'),
(10, 3200, 'Lit moderne', 'chambres a coucher', 2000, 3200, ' hedbhezhda', 'lit moderne.jpg'),
(11, 251, 'Salle nv', 'salle a manger', 6000, 7000, ' zehhezhz', 'salle123.jpg'),
(12, 254, 'salle25', 'salle a manger', 9555, 8520, ' dhjdshzds', 'salledjde.jpg'),
(13, 2562, 'lit nv', 'chambres a coucher', 2500, 2600, ' jezbjhbe', 'lit.jpg'),
(19, 5222, 'yas', 'dressing', 2500, 2800, ' eyuiodfghjkvb', 'reedf.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catg`
--
ALTER TABLE `catg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref` (`ref`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catg`
--
ALTER TABLE `catg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
