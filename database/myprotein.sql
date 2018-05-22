-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 mai 2018 à 23:31
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myprotein`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`, `is_active`, `description`) VALUES
(1, 'Whey Isolate', '65', 1200, 'https://www.fitnessnutrition.fr/836-thickbox_default/whey-supremacy-corgenic.jpg', 1, 'WHEY SUPREMACY STANDARD des laboratoires Corgenic est une pure protéine de lactosérum produite selon les règles de l’art uniquement par ultra filtration à froid sur du lait frais. C’est uniquement selon ce procédé que les protéines de lactosérum ne se dénaturent pas et que l’on obtient une protéine extrêmement pure et de très grande qualité possédant une valeur biologique maximale pour une absorption et une fixation optimale.'),
(2, 'Gainer Corgenic', '75', 500, 'https://www.fitness-shop.fr/249-tm_large_default/final-mass-corgenic.jpg', 1, 'Pour augmenter votre volume et votre masse, votre corps requiert un surplus calorique, but atteint en consommant regulièrement des repas denses avec un apport protéique de qualité. L\'Impact Weight Gainer de Myprotein est le complément parfait pour tous les accros de la salle pour augmenter leur masse avec un profil de macronutriments idéal.'),
(3, 'bcaa', '12', 500, 'https://www.optimumnutrition.fr/media/catalog/product/cache/6/image/9df78eab33525d08d6e5fb8d27136e95/B/C/BCAA5000-60ser-unflavored_2.png', 1, 'Notre BCAA 5000 Powder offre un mélange pur de 5 000 mg (5g) d\'AACR pour compléter votre apport journalier.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
