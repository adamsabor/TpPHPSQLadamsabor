-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 25 juin 2024 à 11:53
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `MangaShop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qtepanier` int(11) DEFAULT '0',
  `genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `stock`, `image`, `qtepanier`, `genre`) VALUES
(1, 'One Piece', '9.99', 100, 'images/one-piece.png', 0, 'Meilleurs ventes'),
(2, 'Attack on Titan', '12.99', 100, 'images/attack-on-titan.png', 0, 'Meilleurs ventes'),
(3, 'Hunter x Hunter', '7.99', 100, 'images/hunter-x-hunter.png', 0, 'Shonen'),
(4, 'My Hero Academia', '11.99', 100, 'images/my-hero-academia.png', 0, 'Shonen'),
(5, 'Naruto', '10.49', 100, 'images/naruto.png', 0, 'Shonen'),
(6, 'Dragon Ball', '9.49', 100, 'images/dragon-ball.png', 0, 'Shonen'),
(7, 'Demon Slayer', '9.00', 100, 'images/81jLaojdiyL._AC_UF1000,1000_QL80_.jpg', 0, 'Shonen'),
(8, 'Berserk', '10.49', 100, 'images/71lnvXSiITL._AC_UF1000,1000_QL80_.jpg', 0, 'Seinen'),
(9, 'Vagabond', '9.49', 100, 'images/vagabond-tome-1-precommande-174020_1200x1667.webp', 0, 'Seinen'),
(10, 'Bleach', '8.99', 100, 'images/bleach.png', 0, 'Promotions');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
