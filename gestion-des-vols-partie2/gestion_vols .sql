-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 juin 2020 à 18:25
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `Id_client` int(11) NOT NULL,
  `Nom` varchar(254) DEFAULT NULL,
  `Prenom` varchar(254) DEFAULT NULL,
  `Address` varchar(254) DEFAULT NULL,
  `CodePostal` varchar(254) DEFAULT NULL,
  `Ville` varchar(254) DEFAULT NULL,
  `NumeroPassport` varchar(254) DEFAULT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`Id_client`, `Nom`, `Prenom`, `Address`, `CodePostal`, `Ville`, `NumeroPassport`, `Id_user`) VALUES
(2, 'homir22', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'casablanca', '122112', 6),
(4, 'homir2', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '33333', 5),
(5, 'hr', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 6),
(7, 'homir2', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112212121', 7),
(8, 'homir2', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 7),
(9, 'amine22', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 5),
(10, 'amine22', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 5),
(11, 'sana', 'sanae', '37 av chakib arsalane qu jnane chekkouri', '46000', 'paris', '122112', 5),
(12, 'hr', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 5),
(13, 'hrsamine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(14, 'hrsamine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(15, 'hrsamine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(16, 'hrsamine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(17, 'amine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 5),
(19, 'amine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(20, 'amine22', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112212121', 8),
(21, 'hr', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 4),
(22, 'hr26', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '262324', 8),
(23, 'hr26', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(24, 'homir', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112212121', 8),
(25, 'amine66', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '6666', 8),
(26, 'amine66', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '66666', 8),
(28, 'amine22', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(34, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(35, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(36, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(37, 'hrs132', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(38, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(39, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(40, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(41, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '3333322', 8),
(42, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(43, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(44, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(45, 'hrs', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(46, 'hrsx', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(47, 'hrsx', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(49, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(50, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(51, 'hrs13', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 8),
(52, 'homir', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '33333', 8),
(53, 'amine20', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '122112', 9);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_Reservation` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL,
  `Id_vol` int(11) DEFAULT NULL,
  `DateReservation` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id_Reservation`, `Id_user`, `Id_vol`, `DateReservation`) VALUES
(2, 6, 6, '2020-06-05 04:15:23'),
(3, 6, 14, '2020-06-05 05:30:19'),
(4, 5, 1, '2020-06-05 17:34:11'),
(5, 6, 2, '2020-06-05 17:37:55'),
(6, 7, 7, '2020-06-05 17:45:45'),
(7, 7, 8, '2020-06-05 21:53:41'),
(8, 7, 8, '2020-06-05 21:56:18'),
(9, 5, 3, '2020-06-05 22:41:26'),
(10, 5, 3, '2020-06-05 22:42:44'),
(11, 5, 3, '2020-06-05 23:02:22'),
(12, 5, 10, '2020-06-06 02:35:52'),
(53, 9, 2, '2020-06-24 15:56:11');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id_user`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'ahmed', 'med4@gmail.com', '$2y$10$GVVTEWUzyNu3pcK/q3i18eS.7K25Dlid0EVeIkZJRV6CqN7cI9GNW', 'user'),
(2, 'amine', 'med34@gmail.com', '$2y$10$GkYBsvTN/5BJinsi7O4vI.nK3LfDr0bbwILPkmU65d9wBZpCbWnCe', 'user'),
(3, 'homir', 'homir@gmail.com', '$2y$10$ogTgi0CcTmnFBpsPNvXQYebpKNMVg9UE8TycBEtFuVckJPeOVcU9O', 'admin'),
(4, 'homir', 'med5@gmail.com', 'azerty', 'admin'),
(5, 'mohamed', 'aminehr5@gmail.com', 'azerty', 'User'),
(6, 'ahmedhr', 'hr@gmail.com', 'azerty', 'User'),
(7, 'ahmedel', 'ahmedel@gmail.com', 'azerty', 'User'),
(8, 'ahmed', 'med@gmail.com', 'azerty', 'User'),
(9, 'amine26', 'aminehr26@gmaail.com', 'azerty', 'User');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `Numvol` int(11) NOT NULL,
  `num_vol` int(11) DEFAULT NULL,
  `lieu_depart` varchar(30) DEFAULT NULL,
  `lieu_arrive` varchar(30) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `date_arrive` date DEFAULT NULL,
  `nom_places` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`Numvol`, `num_vol`, `lieu_depart`, `lieu_arrive`, `date_depart`, `date_arrive`, `nom_places`, `prix`, `status`) VALUES
(1, 1920, 'Dakhla', 'Essaouira', '2020-05-01', '2020-05-03', 40, 550, 'dispo'),
(2, 1, 'Essaouira', 'Safi', '2020-05-01', '2020-05-02', 70, 40, 'annule'),
(4, 5, 'casablanca', 'paris', '2020-05-31', '2020-06-04', 34, 900, 'annule'),
(6, 15, 'safi', 'agadir', '2020-06-07', '2020-06-21', 3, 300, 'annule'),
(7, 7, 'safi', 'agadir', '2020-06-06', '2020-06-20', 3, 300, 'dispo'),
(14, 14, 'safi', 'agadir', '2020-06-05', '2020-06-18', 31, 300, 'dispo'),
(16, 12, 'casablanca', 'madrid', '2020-06-24', '2020-06-27', 3, 500, 'annule');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`Id_client`),
  ADD KEY `id_client` (`Id_client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_Reservation`),
  ADD UNIQUE KEY `RESERVATION_PK` (`Id_Reservation`),
  ADD KEY `reservation_ibfk_1` (`Id_vol`) USING BTREE,
  ADD KEY `id_reservation` (`Id_Reservation`),
  ADD KEY `Id_user` (`Id_user`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`Numvol`),
  ADD UNIQUE KEY `num_vol` (`Numvol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `Id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_Reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `Numvol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
