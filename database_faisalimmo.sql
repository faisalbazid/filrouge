-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 juin 2022 à 13:22
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_faisalimmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `USERNAME` varchar(120) DEFAULT NULL,
  `EMAIL` varchar(120) DEFAULT NULL,
  `PASSWORD` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'ADMIN', 'FAISAL@ADMIN.COM', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id_per` int(11) NOT NULL,
  `adress_agence` varchar(255) NOT NULL,
  `frais_service` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_ann` int(11) NOT NULL,
  `titre_ann` varchar(255) NOT NULL,
  `type_ann` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `detail_ann` tinytext NOT NULL,
  `id_per` int(11) NOT NULL,
  `code_imo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_ann`, `titre_ann`, `type_ann`, `date`, `detail_ann`, `id_per`, `code_imo`) VALUES
(109, 'Appartement en vente f agadir', 'vente', '2022-06-13 23:00:00', 'appartement prix mzyan , kayna hda marjane', 4, 556),
(112, 'Plateau Bureau nouveau 118m² à Guéliz Marrakech', 'vente', '2022-06-20 23:00:00', 'Le Complexe Résidentiel Holiday Guéliz est la résidence haut standing qui su combiner tout ce que Marrakech a à vous offrir pour en faire un joyau rare de sérénité urbaine.\r\n\r\nLa résidence vous accueillera dans ses spacieux jardins qui mènent jus', 18, 73),
(113, 'بقعة سكنية مجهزة محفظة 71م بتيزنيت على طريق أكادير', 'location longue durée', '2022-06-20 23:00:00', 'تجزئة إشراق1 بوسط مدينة تيزنيت على الطريق الوطنية رقم 1 أمام باراج الأمن الوطني وبالقرب من تيزنيت بلاستيك.\r\nبقع أرضية مجهزة، سكنية وتجارية، ذ', 19, 517),
(114, 'maison a double facade et tres bonne finition', 'location par nuit', '2022-06-20 23:00:00', 'maison a double facade et tres bonne finition', 19, 543),
(115, 'Maison et villa en Vente à Saidia', 'vente', '2022-06-20 23:00:00', 'Vends très belle villa (320 M2) ,style provencal ,avec jardin, 5 jolis palmiers ,un grand sapin ,,très beau style, très bon emplacement dans l un des plus beau quartier de saidia et très bien réputé ', 19, 895),
(116, 'maison a double facade et tres bonne finition', 'location longue durée', '2022-06-20 23:00:00', 'ca pour detail annonce', 19, 55);

-- --------------------------------------------------------

--
-- Structure de la table `immobilier`
--

CREATE TABLE `immobilier` (
  `code_imo` int(11) NOT NULL,
  `superficie` int(11) DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `type_imo` varchar(50) DEFAULT NULL,
  `etat` varchar(255) NOT NULL,
  `salles_de_bains` int(200) NOT NULL,
  `type_du_sol` varchar(255) NOT NULL,
  `etages` int(200) NOT NULL,
  `chambres` int(200) NOT NULL,
  `capacité` int(200) NOT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `immobilier`
--

INSERT INTO `immobilier` (`code_imo`, `superficie`, `prix`, `adress`, `type_imo`, `etat`, `salles_de_bains`, `type_du_sol`, `etages`, `chambres`, `capacité`, `image1`, `image2`, `image3`) VALUES
(55, 300, '50000', 'HAY SALAM RABAT', 'Villas & maisons de luxe', 'Nouveau', 2, '', 1, 5, 5, '10066179461.jfif', '10011533133.jpg', '10011533133.jpg'),
(73, 400, '60000', 'Guéliz Marrakech', 'Locaux commerciaux', 'Bon état', 0, '', 5, 0, 20, '10058516316.jpg', '10058663556.jpg', '10058516316.jpg'),
(517, 71, '180000', 'TIZNIT', 'Terrains', 'A rénover', 0, 'Carrelage', 0, 0, 0, '10055230552.jpg', '10055230551.jpg', '10055230552.jpg'),
(543, 96, '200', 'HAY WIFAQ CASABLANCA', 'Maisons', 'Bon état', 2, '', 1, 2, 6, '10068152657.jpg', '10068152658.jpg', '10068152657.jpg'),
(556, 200, '50000', 'HAY DAKHLA AGADIR', 'Appartements', 'Bon état', 2, '', 3, 4, 5, 'immo1.jfif', 'immo2.jfif', 'immo3.jfif'),
(895, 320, '2200000', 'VILLE SAIDIA', 'Villas & maisons de luxe', 'Nouveau', 3, '', 0, 5, 10, '10011533133.jpg', '10011533133.jpg', '10011533251.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_per` int(11) NOT NULL,
  `cin` varchar(9) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` char(60) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `type_per` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_per`, `cin`, `nom`, `email`, `mdp`, `tel`, `adress`, `type_per`) VALUES
(4, 'JH26656', 'FAISAL BAZID', 'faisal.bazid1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0668221993', 'Biougra,Agadir 80000', 1),
(16, 'JH22200', 'SOMIA BAZID', 'SOMIA@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '0668000068', 'HAY ESSALAM AGADIR 80000', 1),
(18, 'AA02134', 'Mohmaed dahbi', 'mohamed@solicode.com', 'e10adc3949ba59abbe56e057f20f883e', '0661610000', 'HAY FARAH RABAT', 1),
(19, 'JH26666', 'FAISAL BAZID', 'faisal.bazid@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0668221993', 'BIOUGRA CHTOUKA AIT BAHA', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_per`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_ann`),
  ADD KEY `id_per` (`id_per`),
  ADD KEY `code_imo` (`code_imo`);

--
-- Index pour la table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`code_imo`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_per`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_per`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_ann` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `personne` (`id_per`);

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `personne` (`id_per`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`code_imo`) REFERENCES `immobilier` (`code_imo`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `personne` (`id_per`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
