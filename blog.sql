-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 déc. 2023 à 09:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `subtitle` text NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtitle`, `content`, `creation_date`) VALUES
(55, 'Rocket League : quand l&#039;eSport fusionne avec l&#039;action frénétique du football automobile', 'Cet article plonge dans l&#039;univers de Rocket League, explorant comment ce jeu unique fusionnant le football et les voitures a conquis l&#039;eSport, captivant les joueurs et les spectateurs à travers son action palpitante et ses compétitions intenses', 'Rocket League a révolutionné l&#039;eSport en combinant l&#039;adrénaline du football avec l&#039;intensité des véhicules. Ce jeu spectaculaire a captivé des millions de joueurs et de spectateurs grâce à son mélange unique de compétition acharnée et de cascades automobiles.\r\n\r\nDans Rocket League, les voitures deviennent des athlètes, maniant le ballon dans des arènes futuristes. Cette fusion de sport et de véhicules a créé une expérience de jeu exaltante, où la vitesse, la précision et la stratégie sont essentielles pour la victoire.\r\n\r\nL&#039;eSport de Rocket League est devenu un terrain de jeu pour des équipes compétitives, attirant des tournois mondiaux et des championnats d&#039;envergure. Les joueurs professionnels montrent leur dextérité incroyable, exécutant des manœuvres acrobatiques et des tirs précis qui captivent les spectateurs.\r\n\r\nLes compétitions de Rocket League ne se limitent pas à des événements en ligne. Des équipes s&#039;affrontent dans des arènes bondées, créant une ambiance électrisante où la passion des fans est palpable.\r\n\r\nMalgré sa simplicité apparente, Rocket League demande une maîtrise technique et une coordination d&#039;équipe exceptionnelles pour exceller. Cependant, cet aspect accessible attire également les amateurs, faisant de Rocket League une plateforme eSport où tous peuvent apprécier la compétition à haut niveau.\r\n\r\nAvec son action rapide et ses rebondissements surprenants, Rocket League a su conquérir le cœur des joueurs et des fans d&#039;eSport, offrant une expérience de jeu unique qui continue de pousser les limites de la compétition virtuelle.', '2023-12-18'),
(81, 'L&#039;essor irréversible de l&#039;esport : League of Legends au sommet', ' L&#039;esport, cette forme compétitive de jeu vidéo, connaît une ascension fulgurante à l&#039;échelle mondiale. Parmi les piliers de cette révolution, League of Legends se dresse en tant que géant incontesté. Décryptage d&#039;un phénomène qui redéfinit le paysage sportif moderne.', 'L&#039;univers de l&#039;esport a connu une évolution sans précédent au cours des dernières décennies, passant d&#039;une niche à une scène mondiale massive et lucrative. Au cœur de cette transformation, League of Legends (LoL) s&#039;est imposé comme l&#039;un des titans de l&#039;industrie. Ce jeu, développé par Riot Games, a captivé des millions de joueurs à travers le monde et a donné naissance à une communauté passionnée.\r\n\r\nL&#039;essence de League of Legends\r\nAu-delà de son gameplay innovant et de son design captivant, League of Legends doit sa renommée à sa structure compétitive bien établie. Des équipes professionnelles s&#039;affrontent dans des tournois prestigieux, tel que le Championnat du Monde de League of Legends (Worlds), attirant des spectateurs en masse et offrant des prix mirobolants aux gagnants.\r\n\r\nLa communauté mondiale\r\nL&#039;un des aspects les plus impressionnants de League of Legends est sa communauté mondiale engagée. Des joueurs novices aux professionnels chevronnés, chacun trouve sa place dans cet écosystème. Les influenceurs, les streamers et les compétitions régionales créent un lien fort entre les fans et le jeu, alimentant une passion durable.\r\n\r\nL&#039;impact culturel et économique\r\nL&#039;esport, avec LoL en tête, transcende les frontières traditionnelles du divertissement. Des entreprises investissent des sommes colossales pour parrainer des équipes, des tournois et des événements, attirant ainsi l&#039;attention de nouvelles générations de fans. Cette industrie en plein essor a également ouvert de nouvelles opportunités de carrière, des joueurs professionnels aux commentateurs et aux organisateurs d&#039;événements.\r\n\r\nLe futur radieux de l&#039;esport\r\nÀ mesure que l&#039;esport continue de gagner en popularité, League of Legends reste à l&#039;avant-garde de cette révolution. Avec des mises à jour régulières, une communauté dévouée et une scène compétitive dynamique, LoL continue de repousser les limites de l&#039;esport et de redéfinir les normes de l&#039;industrie du jeu vidéo.\r\n\r\nEn somme, League of Legends incarne bien plus qu&#039;un simple jeu vidéo ; c&#039;est un phénomène culturel et sportif en constante expansion, ouvrant la voie à un avenir où l&#039;esport occupera une place centrale dans la société moderne.', '2023-12-21'),
(82, 'l&#039;évolution phénoménale de l&#039;esport : Smash Bros. à l&#039;avant-garde', 'L&#039;esport est en pleine mutation, devenant un pilier du divertissement mondial. Au cœur de cette révolution, Smash Bros., avec sa communauté dévouée et son gameplay unique, se hisse au sommet de cette nouvelle ère compétitive. Plongée dans l&#039;univers palpitant d&#039;un jeu qui redéfinit les standards de l&#039;esport.', 'L&#039;esport, sous de nombreux aspects, est en train de remodeler la perception du divertissement compétitif. Dans ce paysage en mutation, Smash Bros. s&#039;est imposé comme l&#039;un des pionniers de cette transformation. Ce jeu, développé par Nintendo, a réussi à captiver un public international grâce à son mélange unique d&#039;action et de compétition.\r\n\r\nLe Cœur de Smash Bros.\r\nSmash Bros. tire sa renommée de son concept novateur : un jeu de combat où des icônes du monde du jeu vidéo s&#039;affrontent dans des arènes dynamiques. Cette formule, mélangeant accessibilité et profondeur stratégique, a séduit à la fois les joueurs occasionnels et les compétiteurs professionnels.\r\n\r\nLa Communauté Passionnée\r\nL&#039;une des forces de Smash Bros. réside dans sa communauté passionnée et diversifiée. Des tournois locaux aux événements internationaux, les joueurs se rassemblent pour célébrer leur amour du jeu. Les joueurs pros, les créateurs de contenu et les fans contribuent à l&#039;effervescence de cette scène compétitive en expansion constante.\r\n\r\nImpact et Reconnaissance\r\nBien que parfois à l&#039;ombre des titans de l&#039;esport, Smash Bros. a su gagner en reconnaissance. Ses tournois majeurs attirent un public considérable et des sponsors prestigieux, témoignant de la croissance exponentielle de cette discipline et de son potentiel commercial.\r\n\r\nL&#039;Avenir de Smash Bros. dans l&#039;Esport\r\nEn constante évolution, Smash Bros. continue de se réinventer avec de nouvelles versions et des mises à jour régulières. La communauté reste résolument engagée, anticipant chaque itération du jeu et cherchant à renforcer sa présence sur la scène mondiale de l&#039;esport.\r\n\r\nEn résumé, Smash Bros. incarne une expérience de jeu compétitive unique, combinant plaisir et compétition. Son ascension dans le monde de l&#039;esport marque un changement de paradigme, où la passion des joueurs façonne l&#039;avenir d&#039;une industrie en pleine expansion.', '2023-12-21'),
(83, 'L&#039;émergence fulgurante de l&#039;esport : CS:GO à la pointe de l&#039;action', ' L&#039;esport évolue à pas de géant, s&#039;imposant comme un pilier majeur du divertissement moderne. Au cœur de cette révolution, Counter-Strike: Global Offensive (CS:GO) brille par sa communauté passionnée et sa scène compétitive captivante. Plongée dans l&#039;univers dynamique d&#039;un jeu qui redéfinit les codes de l&#039;esport.', 'L&#039;esport, en constante évolution, connaît une transformation sans précédent, élargissant ses horizons pour toucher un public mondial. Au sein de cette révolution, CS:GO se démarque comme l&#039;un des fers de lance de cette nouvelle ère compétitive. Ce jeu, développé par Valve Corporation, a su captiver des millions de joueurs grâce à son gameplay intense et son aspect compétitif stimulant.\r\n\r\nLa Quintessence de CS:GO\r\nCS:GO repose sur un principe simple : deux équipes, Terroristes et Contre-terroristes, s&#039;affrontent dans des affrontements tactiques en équipe. La combinaison de compétences individuelles, de stratégies d&#039;équipe et de réflexes rapides en a fait l&#039;un des jeux de tir les plus populaires au monde.\r\n\r\nUne Communauté Engagée\r\nL&#039;une des forces motrices de CS:GO réside dans sa communauté passionnée et dévouée. Des tournois amateurs aux événements majeurs comme le Major Championship Series, les joueurs et les fans se rassemblent pour soutenir leur équipe favorite. Les joueurs professionnels, les diffuseurs et les organisateurs d&#039;événements contribuent à l&#039;essor continu de cette scène compétitive.\r\n\r\nImpact et Reconnaissance\r\nCS:GO a gagné en reconnaissance au fil des années, attirant des sponsors et des investissements substantiels. Les tournois majeurs offrent des prix conséquents et attirent des millions de téléspectateurs à travers le monde, témoignant de la croissance explosive de l&#039;esport.\r\n\r\nL&#039;Avenir de CS:GO dans l&#039;Esport\r\nAvec des mises à jour régulières et un engagement envers la compétitivité, CS:GO continue de se développer. La scène compétitive reste intense, alimentée par une base de joueurs dévoués et une communauté toujours grandissante.\r\n\r\nEn conclusion, CS:GO représente l&#039;essence même de l&#039;esport compétitif, mêlant adrénaline, compétition et stratégie. Son ascension dans le monde de l&#039;esport redéfinit les normes de cette industrie en expansion, prouvant que les jeux vidéo peuvent être bien plus que de simples divertissements, mais de véritables compétitions globales.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2023-12-21');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `creation_date`) VALUES
(20, 'bonsoir bonsoir bonsoir \r\n', 36, 55, '2023-12-21 00:09:37'),
(29, 'Bonjour je suis A\r\n', 37, 55, '2023-12-21 05:20:05'),
(35, 'Je suis Jean-Michel', 38, 55, '2023-12-21 06:51:06'),
(36, 'Je suis Jean-Marc\r\n', 39, 55, '2023-12-21 06:51:38'),
(37, 'Je suis Jean-Pascal', 40, 55, '2023-12-21 06:52:09'),
(38, 'Je suis Jean-Mathieu', 41, 55, '2023-12-21 06:52:44'),
(41, 'Commentaire sur l&#039;article 81 ', 27, 81, '2023-12-22 20:30:56'),
(42, 'Commentaire sur l&#039;article 82', 27, 82, '2023-12-22 20:31:08'),
(43, 'Commentaire de Jean-Michel sur l&#039;article 83', 38, 83, '2023-12-22 20:34:27'),
(44, 'Je suis l&#039;administrateur', 27, 55, '2023-12-22 20:36:52'),
(48, 'ss', 42, 55, '2023-12-23 08:59:58');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  `avatar` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `admin`, `pseudo`, `email`, `password`, `creation_date`, `avatar`) VALUES
(27, 1, 'admin', 'admin@admin.com', '$2y$10$J8CM8SW0cc8BG7oFdbn5yuysH8CL2FXM1h5HQMX5vu.worGQ2iXRe', '2023-12-19', 1),
(38, 0, 'Jean-Michel', 'Jean-michel@test.com', '$2y$10$IhHbmzzl1QvrJ.iJH5zPYe0V3ygttsHk8mG1xz3c4QsyLP2ideGiy', '2023-12-21', 10),
(39, 0, 'jean-Marc', 'jean-marc@test.com', '$2y$10$CVmIVmXPB3XntN1mgWf4sevjShC.PRmmuQ0z5GUyeqqbw0kIHdtE6', '2023-12-21', 2),
(40, 0, 'Jean-Pascal', 'jean-pascal@test.com', '$2y$10$Mbw7maQ3pjuc2wk83utTPOUpt3yxMuwJUYSiq1T0vRDBE4T2BSXsm', '2023-12-21', 3),
(41, 0, 'Jean-Mathieu', 'jean-mathieu@test.com', '$2y$10$6T1n66SMtz.X3U19nIfjCOUfiuobVy4WnSKYsqhQjOu6NZNgL13yq', '2023-12-21', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
