-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-gcnews.alwaysdata.net
-- Generation Time: Feb 08, 2023 at 06:21 PM
-- Server version: 10.6.11-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcnews_bdd_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `description_article` varchar(255) NOT NULL,
  `image_article` varchar(50) NOT NULL,
  `classe_article` varchar(50) NOT NULL,
  `article_texte` text NOT NULL,
  `date_publication` datetime NOT NULL DEFAULT current_timestamp(),
  `mots_clés_article` varchar(255) NOT NULL,
  `categorie_article` varchar(50) NOT NULL,
  `like_article` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_auteur`, `description_article`, `image_article`, `classe_article`, `article_texte`, `date_publication`, `mots_clés_article`, `categorie_article`, `like_article`) VALUES
(7, 5, 'taille police : 15 / type police : arial', '/', 'gtech', 'Le championnat du monde de League of Legends, l’un des jeux vidéo les plus populaires de la planète, auront finalement lieu en Islande, alors qu’ils devaient initialement se dérouler en Chine, a annoncé jeudi 9 septembre le studio Riot Games dans un communiqué.', '2023-02-03 14:13:44', 'Riot Games, Esport League of Legend', 'esport', 0),
(8, 7, 'taille police : 15 / type police : arial', '/', 'gtech', 'La réalité virtuelle s\'est installée dans les années 1990 dans le secteur du jeu vidéo avec une initiative de Sega, avec le Sega VR — un casque qui réagissait aux mouvement de la tête de l\'utilisateur, destinée a la Mega Drive — puis avec Virtuality qui a été lancé et est devenu le premier, le système de divertissement multijoueur en réseau VR produit en masse — il a été lancé dans plusieurs pays — il se matérialisait sous la forme d\'une arcade VR avec un casques et des gants exosquelette — coûtant jusqu\'à 73 000 $ par système multi-pod Virtuality.', '2023-02-05 04:41:07', 'Realite virtuelle, VR, Sega', 'jeu video', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`) VALUES
(5, 'business'),
(4, 'design'),
(2, 'esport'),
(1, 'jeu video'),
(3, 'politique');

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `id_role` int(11) NOT NULL,
  `classe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`id_role`, `classe`) VALUES
(5, 'administration'),
(3, 'gart'),
(2, 'gbs'),
(1, 'gtech'),
(4, 'intervenant');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `classe_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `pass`, `classe_user`) VALUES
(5, 'pidaro@gaming.tech', '2022-10-04 13:31:47', 'gtech'),
(7, 'lmercier@gamingcampus.fr', '2021-09-18 16:00:00', 'intervenant'),
(12, 'cgorsse@gaming.tech', '123', 'gtech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `classe_article` (`classe_article`),
  ADD KEY `categorie_article` (`categorie_article`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`),
  ADD KEY `categorie` (`categorie`(1)),
  ADD KEY `categorie_2` (`categorie`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `role` (`classe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `classe_user` (`classe_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`classe_article`) REFERENCES `classe` (`classe`),
  ADD CONSTRAINT `article_ibfk_3` FOREIGN KEY (`categorie_article`) REFERENCES `categorie` (`categorie`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`classe_user`) REFERENCES `classe` (`classe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
