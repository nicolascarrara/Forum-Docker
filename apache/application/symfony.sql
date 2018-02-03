-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 jan. 2018 à 17:10
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'LP'),
(2, 'DUT'),
(3, 'AS');

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `password`, `inscription`, `role`, `mail`, `ville`, `site`, `anniversaire`, `avatar`) VALUES
(30, 'admin', '$2y$13$T5B.arhuj86J7jZm/dVYN.h9DyrqJTQBAGSPjx1xRAS4uZF6HyXcC', '2018-01-16 16:58:33', 'ROLE_ADMIN', 'admin@admin.fr', 'adminland', 'www.admin.fr', '1996-08-07 00:00:00', '1cfcd7a5fb22c1cb597c0a41af2475bb.jpeg'),
(31, 'utilisateur', '$2y$13$hW9fKdyxl.saqKv3gHNgYOe7P1iWI26rOXVmhZl83aWYzSFfO4O1q', '2018-01-16 16:59:21', 'ROLE_USER', 'utilisateur@utilisateur.fr', 'utilisateurland', 'www.utilisateur.fr', '1992-08-12 00:00:00', 'd718b45473f72ca12b0c1931a78f7472.jpeg'),
(32, 'user', '$2y$13$BZejIPybxa8f7BYdC.uZVufU65kWyHjAaqKthLMZqo2v7N832PbDi', '2018-01-16 17:00:22', 'ROLE_USER', 'user@user.fr', 'userville', 'www.user.fr', '1980-09-04 00:00:00', '55b814516e4a9a1dea6d597b47fca21f.jpeg');

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `topic`, `creation`, `contenu`, `membre_id`) VALUES
(1, '1', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(2, '1', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(3, '2', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(4, '2', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(5, '3', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(6, '3', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(7, '4', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(8, '4', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(9, '5', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(10, '5', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(11, '6', '2018-01-16 17:03:38', 'Très bel article :)', 31),
(12, '6', '2018-01-16 17:04:02', 'Je confirme !!', 32),
(13, '7', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31),
(14, '8', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31),
(15, '9', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31),
(16, '10', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31),
(17, '11', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31),
(18, '12', '2018-01-16 17:08:52', 'Bien joué à toi. :)', 31);

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id`, `nom`, `categorie_id`) VALUES
(1, 'BlaBla', 1),
(2, 'Petite annonce', 1),
(3, 'BlaBla', 2),
(4, 'Petite Annonce', 2),
(5, 'BlaBla', 3),
(6, 'Petite Annonce', 3);

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id`, `titre`, `creation`, `section`, `contenu`, `membre_id`) VALUES
(1, 'Mon premier article', '2018-01-16 17:01:12', 1, 'Mon premier article, c\'est émouvant', 30),
(2, 'Mon premier article', '2018-01-16 17:01:12', 2, 'Mon premier article, c\'est émouvant', 30),
(3, 'Mon premier article', '2018-01-16 17:01:12', 3, 'Mon premier article, c\'est émouvant', 30),
(4, 'Mon premier article', '2018-01-16 17:01:12', 4, 'Mon premier article, c\'est émouvant', 30),
(5, 'Mon premier article', '2018-01-16 17:01:12', 5, 'Mon premier article, c\'est émouvant', 30),
(6, 'Mon premier article', '2018-01-16 17:01:12', 6, 'Mon premier article, c\'est émouvant', 30),
(7, 'A mon tour !', '2018-01-16 17:07:34', 1, 'Je m\'y mets enfin !', 32),
(8, 'A mon tour !', '2018-01-16 17:07:34', 2, 'Je m\'y mets enfin !', 32),
(9, 'A mon tour !', '2018-01-16 17:07:34', 3, 'Je m\'y mets enfin !', 32),
(10, 'A mon tour !', '2018-01-16 17:07:34', 4, 'Je m\'y mets enfin !', 32),
(11, 'A mon tour !', '2018-01-16 17:07:34', 5, 'Je m\'y mets enfin !', 32),
(12, 'A mon tour !', '2018-01-16 17:07:34', 6, 'Je m\'y mets enfin !', 32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
