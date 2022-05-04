-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 fév. 2022 à 16:27
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(23, NULL, 176, '2017-06-08 10:25:49', 'livré'),
(24, NULL, 278, '2017-06-08 10:30:47', 'envoyé'),
(25, NULL, 203, '2017-06-08 10:33:52', 'en cours de traitement'),
(26, NULL, 14, '2017-06-08 12:46:26', 'en cours de traitement'),
(27, 32, 70, '2022-02-06 11:21:35', 'en cours de traitement'),
(28, 33, 90, '2022-02-13 11:05:50', 'en cours de traitement'),
(29, 33, 62, '2022-02-13 11:07:32', 'en cours de traitement'),
(30, 33, 113, '2022-02-13 19:33:48', 'en cours de traitement'),
(31, 33, 75, '2022-02-13 19:34:11', 'en cours de traitement'),
(32, 33, 94, '2022-02-14 14:34:09', 'en cours de traitement'),
(33, 33, 85, '2022-02-14 14:43:12', 'en cours de traitement');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(3) NOT NULL,
  `id_commande` int(3) NOT NULL,
  `id_produit` int(3) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(30, 23, 40, 4, 17),
(31, 23, 43, 3, 36),
(32, 24, 42, 5, 34),
(33, 24, 39, 3, 16),
(34, 24, 44, 2, 30),
(35, 25, 45, 3, 45),
(36, 25, 39, 2, 16),
(37, 25, 43, 1, 36),
(38, 26, 37, 1, 14),
(39, 27, 37, 5, 14),
(40, 28, 38, 6, 15),
(41, 29, 37, 1, 14),
(42, 29, 39, 3, 16),
(43, 30, 38, 1, 15),
(44, 30, 37, 7, 14),
(45, 31, 38, 5, 15),
(46, 32, 44, 2, 30),
(47, 32, 40, 2, 17),
(48, 33, 40, 5, 17);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(32, 'alyakh', 'c3b939bf2493d6c0fa2d6ef6474b78aa', 'khayati', 'akya', 'alya.khayati@hotmail', 'f', 'Mahdia', 05100, 'Rue république rodha mahdia 5100', 0),
(33, 'larine1', 'd181878c4cf2e80701487ecd2c0304f7', 'Khayati', 'Alya', 'alya.khayati@hotmail', 'm', 'Mahdia', 05100, 'Rue république rodha mahdia 5100', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` varchar(5) NOT NULL,
  `public` enum('m','f','mixte') NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(37, 'R001', 'tshirt', 'Thisrt bleu', 'Super thisrt bleu !', 'bleu', 'L', 'm', 'tshirtbleum.jpg', 14, 81),
(38, 'R002', 'tshirt', 'Thisrt vert', 'Super thisrt vert !', 'vert', 'M', 'm', 'tshirtvertm.jpg', 15, 71),
(39, 'R003', 'tshirt', 'Thisrt jaune', 'Super thisrt jaune !', 'jaune', 'XL', 'f', 'ref3_jaune.png', 16, 65),
(40, 'R004', 'tshirt', 'Thisrt rouge', 'Super thisrt rouge !', 'rouge', 'S', 'f', '66-f-15_rouge.png', 17, 53),
(41, 'R005', 'tshirt', 'Thisrt noir', 'Super thisrt noir !', 'noir', 'XXL', 'mixte', 'R007_31-p-33_noir.jpg', 18, 54),
(42, 'R006', 'chemise', 'Chemise rayée', 'Superbe chemise !', 'noir', 'L', 'm', 'chemisenoirm.jpg', 34, 39),
(43, 'R007', 'chemise', 'Chemise blanche', 'Superbe chemise !', 'blanche', 'M', 'm', '56-a-65_chemiseblanchem.jpg', 36, 29),
(44, 'R008', 'divers', 'Pull', 'Superbe pull !', 'gris', 'L', 'm', 'pullgrism2.jpg', 30, 18),
(45, 'R009', 'divers', 'Bottes', 'Superbes bottes !', 'marron', 'S', 'f', 'bottenoirf.jpg', 45, 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `details_commande_ibfk_1` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE SET NULL;

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `details_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE,
  ADD CONSTRAINT `details_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
