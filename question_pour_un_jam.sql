-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mars 2021 à 17:07
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Question_pour_un_Jam`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210313132032', '2021-03-13 14:20:41', 174);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse4` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse_juste` int(11) NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse_juste`, `theme`) VALUES
(1, 'Quel est le manga le plus vendu de tous les temps ?', 'Dragon Ball', 'One Piece', 'Naruto', 'Blue Lock', 2, 'Manga et Anime'),
(2, 'Dans One Piece, comment s\'appelle le roi des pirates ?', 'Gold Roger', 'Akainu', 'Gol D. Roger', 'Baggy', 3, 'Manga et Anime'),
(3, 'Dans Naruto, qui ne fait pas parti de l\'équipe 7 ?', 'Sakura', 'Naruto', 'Sasuke', 'Neji', 4, 'Manga et Anime'),
(4, 'Dans bleach, comment s\'appelle la forme finale du Zanpakuto', 'Shikai', 'Bankai', 'Hentai', 'Shikadai', 2, 'Manga et Anime'),
(5, 'Comment s\'appelle la partie 4 de JoJo\'s Bizarre Adventure ?', 'Golden Wind', 'Stardust Crusaders', 'Diamond is Unbreakable', 'Steel Ball Run', 3, 'Manga et Anime'),
(6, 'Dans l\'attaque des titans, combien y a t-il de titans primodiaux ?', '7', '8', '9', '10', 3, 'Manga et Anime'),
(7, 'Dans Dragon Ball Z, combien de forme freezer possède t-il ?', '3', '4', '5', '6', 2, 'Manga et Anime'),
(8, 'Dans Jujutsu Kaisen, quel est la deuxième épreuve du tournoi Inter-lycée ?', 'Un concours d\'apnée', 'Un concours de chifoumi', 'Des combat en 1v1', 'Une partie de baseball', 4, 'Manga et Anime'),
(9, 'Dans My Hero Academia, qui donne son alter à Izuku ?', 'All Might', 'Endevor', 'Hawks', 'All For One', 1, 'Manga et Anime'),
(10, 'Dans Hunter x Hunter, comment s\'appelle le chef de la Brigade Fantôme ?', 'Uvôguine', 'Kuroro Lucifuru', 'Nobunaga Hazama', 'Hisoka', 2, 'Manga et Anime'),
(11, 'Dans la partie d\'échec géant, quel est le premier coup jouer par Ron ?', 'D5', 'B3', 'E4', 'E6', 1, 'Harry Potter'),
(12, 'Comment s\'appelle la potion permetant de prendre l\'apparence de quelqu\'un ?', 'Felix Felicis', 'Polynectar', 'Amortentia', 'Doxycide', 2, 'Harry Potter'),
(13, 'Qui est le premier prisonnier à s\'être évadé d\'azkaban ?', 'Bellatrix Lestrange', 'Tom Jedusor', 'Fenrir Greyback', 'Sirius Black', 4, 'Harry Potter'),
(14, 'Qui ne participe pas au tournoi des 3 sorciers ?', 'Cedric Diggory', 'Fleur Delacour', 'Viktor Krum', 'Fred Weasley', 4, 'Harry Potter'),
(15, 'Quelle créature peut être vu uniquement par ceux qui ont vu la mort ?', 'Sombral', 'Détraqueur', 'Acromentule', 'Animagus', 1, 'Harry Potter'),
(16, 'Qui est le prince de sang-mêlé ?', 'Severus Rogue', 'Arthur Weasley', 'Tom Jedusor', 'Hagrid', 1, 'Harry Potter'),
(17, 'Quel est le dernier horcrux à être détruit ?', 'Le médaillon de Serpentard', 'La coupe de Poufsouffle', 'Nagini', 'La bague d\'Elvis Gaunt', 3, 'Harry Potter'),
(18, 'Quel sort permet de faire léviter des objets ?', 'Accio', 'Especto Patronum', 'Alohomora', 'Wingardium Leviosa', 4, 'Harry Potter'),
(19, 'Quel nom Hagrid donne t-il à son dragon ?', 'Norbert', 'Pierre', 'Michel', 'Jacques', 1, 'Harry Potter'),
(20, 'Quel est le numéro du coffre de harry à Gringotts ?', '713', '689', '687', '703', 3, 'Harry Potter'),
(21, 'Quel est le plus grand mammifère marin de la planète ?', 'Le requin', 'La baleine', 'Le lamantin', '	L’éléphant', 2, 'Animaux'),
(22, 'Où vit le diable de Tasmanie ?', 'En Afrique', 'En Asie', 'En Australie', 'Nulle part, c\'est un personnage de dessin animé', 1, 'Animaux'),
(23, 'Combien de pattes possèdent les insectes ?', '4', '6', '8', '10', 2, 'Animaux'),
(24, 'En quoi sont fait les défense d\'un éléphant ?', 'Fer', 'Bois', 'Argent', 'Ivoire', 4, 'Animaux'),
(25, 'Que mangent les termites ?', 'Des os', 'Des excréments', 'Des graines', 'Du bois', 4, 'Animaux'),
(26, 'Quel oiseau africain ne vole pas, mais court très vite ?', 'Le vautour', 'Le calao', 'L\'autruche', 'Le bip-bip', 3, 'Animaux'),
(27, 'Combien une étoile de mer a-t-elle habituellement de bras ?', '3', '4', '5', '6', 3, 'Animaux'),
(28, 'Que mange le koala ?', 'Du bambou', 'De l\'eucalyptus', 'De la salade', 'Des Tacos 3 viandes', 2, 'Animaux'),
(29, 'Quel est le félin le plus rapide ?', 'Le lion', 'Le léopard', 'Le jaguar', 'Le guépard', 4, 'Animaux'),
(30, 'Combien une araignée a-t-elle de pattes?', '6', '7', '8', '10', 3, 'Animaux');

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `nom_theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `themes`
--

INSERT INTO `themes` (`id`, `nom_theme`) VALUES
(1, 'Manga et Anime'),
(2, 'Comics'),
(3, 'Animaux'),
(4, 'Sport'),
(5, 'Dessins animés'),
(6, 'Cinéma'),
(7, 'Harry Potter');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `roles`, `password`) VALUES
(1, 'Reitag', 'gauthier.michon@yahoo.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VG5BWUx0c21xbmkvZ3p6Lw$Poy0jTUukJfUKJLeUWPzsv5puIzgVy7Lahcsq9G9vcQ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
