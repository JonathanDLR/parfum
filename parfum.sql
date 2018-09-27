-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 27 Septembre 2018 à 13:43
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `parfum`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_id` int(10) UNSIGNED DEFAULT NULL,
  `objet` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom_id`, `objet`, `message`) VALUES
(1, 34, 'rere', 'rerez'),
(2, 35, 'fddf', 'fdfd'),
(3, 36, 'fef', 'fdfdf'),
(4, 37, 'test', 'test'),
(5, 37, 'test', 'ghdgrtgrg'),
(6, 36, 'gfgfg', 'fgfgfgfg'),
(7, 36, 'gfgfg', 'fgfgfgfg'),
(8, 36, 'gfgfg', 'ttttttttttttttt'),
(9, 36, 'gfgfg', 'ttttttttttttttt'),
(10, 36, 'gfgfg', 'ttttttttttttttt'),
(11, 35, 'gfgfg', 'ttttttttttttttt'),
(12, 45, 'gfgfg', 'ttttttttttttttt'),
(13, 45, 'gfgfg', 'ttttttttttttttt'),
(14, 47, 'jojo', 'jojo'),
(15, 47, 'testst', 'testst'),
(16, 47, 'testst', 'rtrtrtr'),
(17, 47, 'testst', 'rtrtrtr');

-- --------------------------------------------------------

--
-- Structure de la table `prospect`
--

CREATE TABLE `prospect` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(40) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `newsletter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `prospect`
--

INSERT INTO `prospect` (`id`, `nom`, `mail`, `newsletter`) VALUES
(34, 'fdfgd', 'gfdfd@test.fr', 1),
(35, 'fef', 'fdf@test.fr', 1),
(36, 'test', 'toto@toto.fr', 1),
(37, 'florent', 'florent@mail.fr', 1),
(45, 'test', 'romain@hotmail.fr', 1),
(47, 'jo', 'jojo@free.fr', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_message_prospect` (`nom_id`);

--
-- Index pour la table `prospect`
--
ALTER TABLE `prospect`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ind_mail_unique` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `prospect`
--
ALTER TABLE `prospect`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_prospect` FOREIGN KEY (`nom_id`) REFERENCES `prospect` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
