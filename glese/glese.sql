-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 oct. 2023 à 22:49
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `glese`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `idCandidature` int(11) NOT NULL,
  `idOffreF` int(11) NOT NULL,
  `idUserF` int(11) NOT NULL,
  `dateC` varchar(25) NOT NULL,
  `etatC` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`idCandidature`, `idOffreF`, `idUserF`, `dateC`, `etatC`) VALUES
(78, 1, 1, '09-12-2022 20:31', 1),
(98, 5, 1, '16-12-2022 13:14', 0),
(99, 12, 1, '16-12-2022 16:58', -1),
(101, 1, 6, '23-12-2022 21:47', 0),
(102, 12, 7, '05-01-2023 14:52', 1),
(103, 5, 6, '06-01-2023 08:27', 1),
(104, 12, 8, '06-01-2023 16:37', 1),
(105, 1, 8, '06-01-2023 16:37', 1),
(106, 5, 8, '06-01-2023 17:35', 1),
(107, 1, 3, '17-02-2023 12:43', -1);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `idOffre` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `dateOffre` varchar(25) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `etatOffre` int(11) NOT NULL DEFAULT 0,
  `competence` text NOT NULL,
  `typeOffre` varchar(50) NOT NULL,
  `DatePub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`idOffre`, `numero`, `dateOffre`, `poste`, `description`, `etatOffre`, `competence`, `typeOffre`, `DatePub`) VALUES
(1, 'OF_05112022123134', '05-11-2022 12:31', 'informaticien ingenieur', 'hoooo', 1, 'lorem', 'stage', '17-02-2023 11:43'),
(5, 'OF_05112022123552', '05-11-2022 12:35', 'Informaticien', 'fgh', 1, 'ertyu', 'emploi', '05-01-2023 14:53'),
(12, 'OF_16122022165808', '16-12-2022 16:58', 'test2', 'dfgjk;', 1, 'sdfghj', 'emploi', '01-01-2023 20:27');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idProfil` int(11) NOT NULL,
  `nomProfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`idProfil`, `nomProfil`) VALUES
(1, 'admin'),
(2, 'Super Admin'),
(3, 'RH'),
(4, 'Candidat'),
(5, 'Candidat');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ficherCV` varchar(255) NOT NULL,
  `etatUser` int(11) NOT NULL DEFAULT 1,
  `idProfilF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `email`, `login`, `mdp`, `prenom`, `nom`, `tel`, `adresse`, `ficherCV`, `etatUser`, `idProfilF`) VALUES
(1, 'awa96362@test.com', 'awa', 'passer', 'Thiam', 'awa', '345678', 'ertyu', 'CV_1.pdf', 1, 3),
(2, 'toufa@gmail.com', 'post', 'passer', 'fatou', 'dip', '7745621389', 'dakar', '', 1, 3),
(3, 'diallodiery@gmail.com', 'passer', 'passer123', 'anta', 'diallo', '784102456', 'mbour', '', 1, 4),
(4, 'fall@gmail.com', 'fall', '123456789', 'anna', 'fall', '7745683923', 'fouta', '', 1, 4),
(5, 'aichou@gmail.com', 'aicha', 'aiche', 'Aicha', 'Diagne', '776435689', 'ytre', '', 1, 4),
(6, 'erdtyu@gmail.com', 'amadou', 'amadou', 'amdou', 'faye', '7745683923', 'fouta', 'CV_6.pdf', 1, 4),
(7, 'BBD12@gmail.com', 'bara', 'passer', 'bara', 'diop', '234567890', 'TOUBA', 'CV_7.pdf', 1, 4),
(8, 'aichajdiagne@gmail.com', 'diop', 'passer', 'diop', 'diop', '777777777', 'touba', 'CV_8.pdf', 1, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`idCandidature`),
  ADD KEY `idOffreF` (`idOffreF`),
  ADD KEY `idUserF` (`idUserF`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`idOffre`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idProfil`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idProfilF` (`idProfilF`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `idCandidature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `idOffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `candidature_ibfk_1` FOREIGN KEY (`idOffreF`) REFERENCES `offre` (`idOffre`),
  ADD CONSTRAINT `candidature_ibfk_2` FOREIGN KEY (`idUserF`) REFERENCES `utilisateur` (`idUser`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idProfilF`) REFERENCES `profil` (`idProfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
