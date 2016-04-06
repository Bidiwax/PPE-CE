-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 10 Février 2016 à 17:40
-- Version du serveur :  10.0.17-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `secure_login`
--

-- --------------------------------------------------------

--
-- Structure de la table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `titre` varchar(50000) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `places_disponibles` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `deals`
--

INSERT INTO `deals` (`id`, `titre`, `categorie`, `description`, `date_debut`, `date_fin`, `places_disponibles`, `prix`) VALUES
(1, 'aaaa', 'Insolite', 'aaa', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(1, '1454426837'),
(1, '1454427106'),
(1, '1454539452'),
(1, '1454539687');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(0, 'test', 'test@test.com', 'b9388eaa1f19c1f0012c9ef877bc396b75eb34d912881c3b6d4746567af63dcdc032bd9a93351c7fa40f615d9a15814f9ab5de75933bc90791adc8afad863dab', 'ef86203aa01bd2dd2ea5e8809f0c2cde8f6fcdbf74a953000cac926024f382b9f61bed3fb3548e751a70d3445ab8c35c00401d38eeb95b9833371ce2dac1c1f3'),
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titre` varchar(128) NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `article`, `date`) VALUES
(1, 'Nouvel Arrivage', 'test', '2016-02-03'),
(15, 'TEEST', 'TEEST', '2016-02-10'),
(16, '123', '456', '2016-02-10');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
