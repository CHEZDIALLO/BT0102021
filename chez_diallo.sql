-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 avr. 2022 à 03:40
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chez_diallo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Sujet` varchar(50) DEFAULT NULL,
  `Message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `Nom`, `Email`, `Sujet`, `Message`) VALUES
(6, 'Gomis', 'Jgomis@gmail.com', 'Demande de renseignement', 'Procédure des inscriptions pédagogiques'),
(8, 'Fanta', 'fanta02@gmail.com', 'Perte de mot de passe', 'Je n\'arrive plus à me connecter à cause d\'une erreur de mot de passe'),
(9, 'Alfred', 'Alfredcorea@yahoo.fr', 'Achat', 'Comment faire pour acheter des produits'),
(11, 'Mafall', 'fall@gmail.com', 'Erreur livraison', 'Ma dernière livraison comporte des manquements'),
(12, 'Ndeye ', 'ndeye45@gmail.com', 'Commande', 'je veux savoir votre dernier arrivage des produits'),
(14, 'Samba Timéra', 'stimera@gamail.com', 'Intégration', 'Je veux intégrer votre entreprise'),
(18, 'Bangaly', 'mamadou.bangaly@polytechnique.edu', 'AchatProd', 'Je veux la procédure d\'achat de produits'),
(73, 'Mariane', 'Mariane@yahoo.fr', 'HS', 'Produit Hors série'),
(74, 'Zale', 'zale@gmail.com', 'Default', 'produit defectueux'),
(75, 'franc', 'fr@gmail.com', 'Renouvelement', 'produit '),
(78, 'Ndiaye', 'mndiaye@gmail.com', 'Selection', 'manquement sur la sélection'),
(80, 'Valerine', 'val@gmail.com', 'Suivi', 'Suivi livraison');

-- --------------------------------------------------------

--
-- Structure de la table `forgetpass`
--

CREATE TABLE `forgetpass` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `forgetpass`
--

INSERT INTO `forgetpass` (`Id`, `Email`) VALUES
(1, 'diallo02@gmail.com'),
(2, 'stimera@gmail.com'),
(4, 'abib@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `image` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `image`, `titre`, `prix`, `description`) VALUES
(1, 'prod1.png', 'Ecouteur Bluetooth', 25000, 'Ecouteur sans fil de dernière génération'),
(2, 'prod2.png', 'Iphone 11 Pro', 600000, 'Iphone avec une technologie avancée'),
(3, 'prod3.jpg', 'Chaussure', 15000, 'Très légére avec une garentie'),
(4, 'prod4.jpg', 'Montre Bluetooth', 75000, 'Montre avec une innovation adaptée'),
(5, 'prod5.jpg', 'Lunette', 8000, 'Anti reflet'),
(6, 'prod6.png', 'Ventilot', 22000, 'Meilleur des marques'),
(7, 'prod7.png', 'Techno POP', 80000, 'Répond aux besoins des clients');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Nom_utilisateur` varchar(100) NOT NULL,
  `Mot_de_passe` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `Nom`, `Prenom`, `Email`, `Adresse`, `Nom_utilisateur`, `Mot_de_passe`, `type`) VALUES
(14, 'TRAORE', 'FALLOU', 'fallou02@gmail.com', 'MAROC', 'Fallou', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'admin'),
(15, 'SECK', 'MOMAR', 'momar52@gmail.com', 'DERKLE', 'Momar', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(16, 'TINE', 'SOKHNA', 'tine@gmail.com', 'GRAND DAKAR', 'Sokhna', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'user'),
(17, 'DIOP', 'NDEYE', 'diop97@yahoo.fr', 'YEUMBEUL', 'Ndeye', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'admin'),
(18, 'SARR', 'RAMATOULAYE', 'djeez@gmail.com', 'MEDINA', 'Ramatoulaye', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(19, 'GOMIS', 'PAUL', 'gomis18@gmail.com', 'ZIGUINCHOR', 'Paul', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(20, 'DIALLO', 'MANSOUR', 'diallo32@yahoo.fr', 'KEUR MASSAR', 'Mansour', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(21, 'NDIAYE', 'ABY', 'ndiayeaby95@gmail.com', 'OUAKAM', 'Aby', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(22, 'BANGALY', 'MAMADOU', 'mamadou.bangaly@gmail.com', 'DAKAR', 'Mouhamed', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'admin'),
(23, 'KHAYATI', 'ALYA', 'alyakhayati@gmail.com', 'TUNISIE', 'Alya', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'user'),
(24, 'DIALLO', 'SOULEYMANE', 'souleymane02@gmail.com', 'BENE TALLY', 'chezdiallo', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'admin'),
(25, 'diop', 'Mamadou', 'diop@gmail.com', 'DAKAR', 'diop', 'add523c307fc52a09fb6858d6801be6a72e459ce6000b9e1abb9246cbd41eab9', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forgetpass`
--
ALTER TABLE `forgetpass`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `forgetpass`
--
ALTER TABLE `forgetpass`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
