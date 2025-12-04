-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 nov. 2025 à 19:55
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
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `badge_text` varchar(100) NOT NULL,
  `badge_class` varchar(50) NOT NULL,
  `bar_class` varchar(50) NOT NULL,
  `bar_width` tinyint(3) UNSIGNED NOT NULL,
  `sort_order` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `category`, `name`, `badge_text`, `badge_class`, `bar_class`, `bar_width`, `sort_order`) VALUES
(1, 'frontend', 'JavaScript', 'Intermédiaire · 1 an', '', '', 65, 1),
(2, 'frontend', 'React', 'Débutant · < 1 an', 'badge-soft', '', 25, 2),
(3, 'frontend', 'Tailwind CSS', 'Intermédiaire · 1 an', '', '', 60, 3),
(4, 'frontend', 'Astro', 'Débutant · < 1 an', 'badge-soft', '', 45, 4),
(5, 'backend', 'Node.js', 'Débutant · < 1 an', 'badge-soft', 'skill-bar-green', 45, 1),
(6, 'backend', 'PHP', 'Avancé · +1 an', 'badge-strong', 'skill-bar-green', 85, 2),
(7, 'backend', 'SQL', 'Avancé · +1 an', 'badge-strong', 'skill-bar-green', 85, 3),
(8, 'backend', 'PocketBase', 'Débutant · < 1 an', 'badge-soft', 'skill-bar-green', 45, 4),
(9, 'performance_seo', 'SEO', 'Intermédiaire · 1 an', '', 'skill-bar-blue', 60, 1),
(10, 'performance_seo', 'Responsive Design', 'Avancé · 1 an', 'badge-strong', 'skill-bar-blue', 85, 2),
(11, 'performance_seo', 'Web Performance', 'Avancé · 1 an', 'badge-strong', 'skill-bar-blue', 85, 3),
(12, 'performance_seo', 'Déploiement', 'Débutant · < 1 an', 'badge-soft', 'skill-bar-blue', 30, 4),
(13, 'outils_devops', 'Git/GitHub', 'Intermédiaire · 1 an', '', 'skill-bar-orange', 50, 1),
(14, 'outils_devops', 'Docker', 'Débutant · < 1 an', 'badge-soft', 'skill-bar-orange', 30, 2),
(15, 'outils_devops', 'VPS / Netlify', 'Débutant · < 1 an', 'badge-soft', 'skill-bar-orange', 30, 3),
(16, 'outils_devops', 'XAMPP / WordPress', 'Avancé · +1 an', 'badge-strong', 'skill-bar-orange', 85, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
