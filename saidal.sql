-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 juil. 2022 à 23:01
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `saidal`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `matricul_adm` varchar(255) NOT NULL,
  `id_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`matricul_adm`, `id_adm`) VALUES
('321', '123');

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `matricule` int(255) NOT NULL,
  `new_structure` varchar(255) NOT NULL,
  `date_dmnd` date NOT NULL,
  `etat` varchar(255) NOT NULL,
  `dte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`matricule`, `new_structure`, `date_dmnd`, `etat`, `dte`) VALUES
(654, 'nouvell structure', '2022-05-18', 'refus', '2022-06-21'),
(876, 'structure nouvelle', '2022-05-18', 'valide', '2022-06-21'),
(210, 'tolo', '2022-06-21', 'refus', '2022-06-30'),
(210, 'structure 2', '2022-06-30', 'refus', '2022-06-30'),
(654, 'nouvell structure test', '2022-07-01', 'attente', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `congé`
--

CREATE TABLE `congé` (
  `matricule` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `nbrj` int(255) NOT NULL,
  `dtd` date NOT NULL,
  `etat` varchar(255) NOT NULL,
  `dte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `congé`
--

INSERT INTO `congé` (`matricule`, `id`, `nom`, `prenom`, `fonction`, `direction`, `structure`, `motif`, `nbrj`, `dtd`, `etat`, `dte`) VALUES
(654, 456, 'bouziade', 'mohamed', 'fonction test', 'direction test', 'structure test', 'motif test', 30, '2022-05-31', 'refus', '2022-05-18'),
(876, 678, 'cherifi', 'yassmine', 'fonction test', 'direction test', 'structure test', 'motif test', 20, '2022-05-20', 'valide', '2022-05-18'),
(210, 101, ' amina', ' amina', 'fonction test', 'fonction test', 'structure test', 'maladie', 20, '2022-07-01', 'valide', '2022-06-30'),
(654, 456, 'bouziade', 'mohamed', 'fonction test', 'direction test', 'structure test', 'motif test', 30, '2022-07-20', 'attente', '2022-07-01');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `DMND` varchar(255) NOT NULL,
  `NewDMND` varchar(255) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `tDMND` varchar(50) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `dep_visé` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`DMND`, `NewDMND`, `idUSER`, `tDMND`, `diplome`, `dep_visé`) VALUES
('CV75.pdf', '0107221656708429CV75.pdf', 9, 'Stage', 'Doctorat', 'Magasin reactif/vereries'),
('cv132.pdf', '0107221656708488cv132.pdf', 4, 'Recrutement', 'Licence', 'Magasin piece rechange'),
('cv149.pdf', '0107221656708558cv149.pdf', 5, 'Stage', 'PhD', 'Direction site de production'),
('cv216.pdf', '0107221656708633cv216.pdf', 10, 'Recrutement', 'Licence', 'Camptine'),
('cv247.pdf', '0107221656708690cv247.pdf', 11, 'Stage', 'Technicien_Superieur', 'Magasin moyens généraux');

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

CREATE TABLE `employer` (
  `id` varchar(255) NOT NULL,
  `mat` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `sf` varchar(255) NOT NULL,
  `date_nais` date NOT NULL,
  `nbr_enft` int(255) NOT NULL,
  `invalid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `qualif` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date_entre` date NOT NULL,
  `motif_entre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employer`
--

INSERT INTO `employer` (`id`, `mat`, `nom`, `prenom`, `ssn`, `sexe`, `sf`, `date_nais`, `nbr_enft`, `invalid`, `status`, `position`, `structure`, `service`, `poste`, `grade`, `qualif`, `categorie`, `section`, `date_entre`, `motif_entre`) VALUES
('123', '321', 'ait merhum', 'youcef', 'oui', 'homme', 'Marié(e)', '1988-05-18', 2, 'aucune', 'Mensuel', 'Actif', 'structure test', 'service test', 'poste test', 'Maitrise', 'Licence', 'm1', 'section test', '2000-05-11', 'motif test'),
('456', '654', 'bouziade', 'mohamed', 'oui', 'homme', 'Marié(e)', '1985-05-15', 3, 'aucune', 'Mensuel', 'Actif', 'structure test', 'service test', 'poste test', 'Execution', 'BAC', 'e5', 'section test', '2005-05-12', 'motif test'),
('678', '876', 'cherifi', 'yassmine', 'non', 'femme', 'Marié(e)', '1994-05-05', 0, 'aucune', 'Mensuel', 'Actif', 'structure test', 'service test', 'poste test', 'Execution', 'Licence', 'e3', 'section test', '2015-05-14', 'motif test'),
('000', '001', 'ait ziyane', 'rabeh', 'oui', 'homme', 'Marié(e)', '1989-05-10', 1, 'aucune', 'Journalier', 'Actif', 'exm', 'excm', 'exm', 'Execution', 'Master', 'e3', 'exù', '2006-07-19', 'exm'),
('101', '210', 'merhoum', 'amina', 'oui', 'femme', 'Marié(e)', '1990-04-04', 0, 'aucune', 'Horaire', 'Actif', 'tolo', 'excm', 'exm', 'Execution', 'Master', 'e4', 'exù', '2017-05-17', 'exm'),
('098', '234', 'rahil', 'soumia', 'oui', 'femme', 'Marié(e)', '1988-10-13', 2, 'aucune', 'Mensuel', 'Actif', 'exm', 'excm', 'exm', 'Maitrise', 'PhD', 'm2', 'exù', '2015-05-14', 'exm');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `NOM` varchar(150) NOT NULL,
  `PRENOM` varchar(150) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `MDP` varchar(150) NOT NULL,
  `TYPE` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`NOM`, `PRENOM`, `EMAIL`, `MDP`, `TYPE`, `id`) VALUES
('test', 'test', 'test@test.com', 'test', 'Etudiant', 4),
('post', 'post', 'post@gmail.com', 'post', 'Postulant', 5),
('test2', 'test2', 'test2@gmail.com', 'test2', 'Postulant', 9),
('khelifi', 'aymen', 'aymen22@gmail.com', 'aymen22', 'Etudiant', 10),
('mezouki', 'hayet', 'hayetmerzouki@gmail.com', 'merzouki233', 'Postulant', 11);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `titre` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `genre` varchar(255) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`titre`, `detail`, `genre`, `debut`, `fin`, `ajout`) VALUES
('titre test 2', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring', 'recrutement', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test 2', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring\r\n\r\nThank you very much everyone for your support, I send you a Korean heart, enjoy the new of the best of Electro Swing Mix March 2022\r\n\r\nThanks to the artists for delighting us with their music every day, I love you\r\n\r\n???? Wallpaper: https://imgur.com/a/lqycAaC', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test 3', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring\r\n\r\nThank you very much everyone for your support, I send you a Korean heart, enjoy the new of the best of Electro Swing Mix March 2022\r\n\r\nThanks to the artists for delighting us with their music every day, I love you\r\n\r\n???? Wallpaper: https://imgur.com/a/lqycAaC', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test 2', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring\r\n\r\nThank you very much everyone for your support, I send you a Korean heart, enjoy the new of the best of Electro Swing Mix March 2022\r\n\r\nThanks to the artists for delighting us with their music every day, I love you\r\n\r\n???? Wallpaper: https://imgur.com/a/lqycAaC', 'recrutement', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test 3', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring\r\n\r\nThank you very much everyone for your support, I send you a Korean heart, enjoy the new of the best of Electro Swing Mix March 2022\r\n\r\nThanks to the artists for delighting us with their music every day, I love you\r\n\r\n???? Wallpaper: https://imgur.com/a/lqycAaC', 'recrutement', '0000-00-00', '0000-00-00', '0000-00-00'),
('stage pratique production paracetamole', ' Hello swings, Welcome back to a new mix of the best of electro swing March, I hope you enjoy this mix as much as I enjoy making it, welcome ladies and gentlemen and enjoy this mix to welcome this spring\r\n\r\nThank you very much everyone for your support, I send you a Korean heart, enjoy the new of the best of Electro Swing Mix March 2022\r\n\r\nThanks to the artists for delighting us with their music every day, I love you\r\n\r\n???? Wallpaper: https://imgur.com/a/lqycAaC', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('stage pratique pour etudiant', 'Tracklist:\r\n00:00 Jamie Berry feat. Octavia Rose - Lost In The Rhythm\r\n3:09 Balduin feat. Kate Thomas - Hep Cat Boogie\r\n6:35 Kumiho - Whiskey Business\r\n10:43 Masha Ray - Levan Polka\r\n13:42 Retronic - Again\r\n16:26 Cut Capers - Say What | Pisk Remix\r\n19:42 DYES IWASAKI feat. Lily Mizusaki - Epilogue | Wolfgang Lohr Remix\r\n23:11 Lily Mizusaki - Restaurant Zombie\r\n', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('stage pratique pour etudiant 2', 'Tracklist:\r\n00:00 Jamie Berry feat. Octavia Rose - Lost In The Rhythm\r\n3:09 Balduin feat. Kate Thomas - Hep Cat Boogie\r\n6:35 Kumiho - Whiskey Business\r\n10:43 Masha Ray - Levan Polka\r\n13:42 Retronic - Again\r\n16:26 Cut Capers - Say What | Pisk Remix\r\n19:42 DYES IWASAKI feat. Lily Mizusaki - Epilogue | Wolfgang Lohr Remix\r\n23:11 Lily Mizusaki - Restaurant Zombie\r\n27:04 Deladap - Sassy\r\n30:57 MiatriSs - Gospel of Dismay ft. Triforcefilms\r\n35:03 Pisk Black Coffee\r\n', 'stage', '0000-00-00', '0000-00-00', '0000-00-00'),
('titre test 5 ', 'ceci est du contenu dédié a decrire le contenut de cette news avec quelques details important  ', 'recrutement', '2022-05-20', '2022-05-30', '0000-00-00'),
('teste new', ' teste new description', 'recrutement', '2022-05-16', '2022-05-19', '2016-05-22'),
('today', ' taday', 'formation', '2022-05-11', '2022-05-18', '2022-05-16'),
('today 2', 'today 2  ', 'formation', '2022-05-12', '2022-05-18', '2022-05-16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
