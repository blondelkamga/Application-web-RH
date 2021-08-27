 Serveur: localhost  -   Base de données: bd_sortie
 
-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 04 Juin 2019 à 15:06
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `bd_sortie`
--

-- --------------------------------------------------------

--
-- Structure de la table `abscence`
--
-- Création: Ven 03 Mai 2019 à 09:37
--

CREATE TABLE IF NOT EXISTS `abscence` (
  `idAbscence` int(11) NOT NULL AUTO_INCREMENT,
  `agence` varchar(255) NOT NULL,
  `nomAbscence` varchar(255) NOT NULL,
  `dateAbscence` varchar(11) NOT NULL,
  `motif` text NOT NULL,
  `commentaires` text NOT NULL,
  `remplacement` varchar(255) NOT NULL,
  `obsCP` text NOT NULL,
  `obsCoordo` text NOT NULL,
  `obsDirect` text NOT NULL,
  PRIMARY KEY (`idAbscence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `abscence`
--


-- --------------------------------------------------------

--
-- Structure de la table `autorisation`
--
-- Création: Ven 03 Mai 2019 à 09:44
--

CREATE TABLE IF NOT EXISTS `autorisation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mat` varchar(10) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `service` varchar(30) NOT NULL,
  `fonction` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `hsortie` time NOT NULL,
  `hretour` time NOT NULL,
  `val1` varchar(10) NOT NULL,
  `val2` varchar(10) NOT NULL,
  `val3` varchar(10) NOT NULL,
  `dateauto` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `autorisation`
--

INSERT INTO `autorisation` (`id`, `mat`, `nom`, `prenom`, `service`, `fonction`, `destination`, `objet`, `hsortie`, `hretour`, `val1`, `val2`, `val3`, `dateauto`) VALUES
(1, 'dl001', 'kamga', 'blondel', 'informatique', 'info', 'Beach', 'intervention', '00:00:00', '00:00:00', 'OK', '', '', 'date du jou');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--
-- Création: Jeu 09 Mai 2019 à 10:45
--

CREATE TABLE IF NOT EXISTS `conge` (
  `idc` int(5) NOT NULL AUTO_INCREMENT,
  `matc` varchar(10) NOT NULL,
  `nomc` varchar(30) NOT NULL,
  `prenomc` varchar(35) NOT NULL,
  `servicec` varchar(30) NOT NULL,
  `fonctionc` varchar(25) NOT NULL,
  `datepjc` varchar(11) NOT NULL,
  `datedjc` varchar(11) NOT NULL,
  `nbrejc` int(5) NOT NULL,
  `datert` varchar(11) NOT NULL,
  `typec` varchar(25) NOT NULL,
  `decdirc` varchar(20) NOT NULL,
  `decrhc` varchar(20) NOT NULL,
  `decrescc` varchar(20) NOT NULL,
  `nbrjrc1` int(5) NOT NULL,
  `motifrefc` varchar(75) NOT NULL,
  `remplc` varchar(35) NOT NULL,
  `nbrjr4c` int(5) NOT NULL,
  `motfirefdirc` varchar(75) NOT NULL,
  `nbrjr3c` int(5) NOT NULL,
  PRIMARY KEY (`idc`),
  KEY `idc` (`idc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `conge`
--

INSERT INTO `conge` (`idc`, `matc`, `nomc`, `prenomc`, `servicec`, `fonctionc`, `datepjc`, `datedjc`, `nbrejc`, `datert`, `typec`, `decdirc`, `decrhc`, `decrescc`, `nbrjrc1`, `motifrefc`, `remplc`, `nbrjr4c`, `motfirefdirc`, `nbrjr3c`) VALUES
(1, 'dl001', 'kamga', 'blondel', 'informatique', 'info', '05/30/2019', '06/08/2019', 5, '06/09/2019', 'CongÃ© de maternitÃ©', '', '', '', 0, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `decision`
--
-- Création: Mar 30 Avril 2019 à 13:37
--

CREATE TABLE IF NOT EXISTS `decision` (
  `iddec` int(5) NOT NULL,
  `dec` varchar(25) NOT NULL,
  `dec1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `decision`
--


-- --------------------------------------------------------

--
-- Structure de la table `explication`
--
-- Création: Mar 28 Mai 2019 à 10:23
--

CREATE TABLE IF NOT EXISTS `explication` (
  `ide` int(5) NOT NULL AUTO_INCREMENT,
  `mate` varchar(10) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `prenome` varchar(35) NOT NULL,
  `servicee` varchar(30) NOT NULL,
  `fonction` varchar(25) NOT NULL,
  `motife` longtext NOT NULL,
  `delai` varchar(10) NOT NULL,
  `cmse` text NOT NULL,
  `sanction` varchar(30) NOT NULL,
  `nbrejmap` int(3) NOT NULL,
  `dateemett` varchar(11) NOT NULL,
  `obs` varchar(90) NOT NULL,
  `datedir` varchar(11) NOT NULL,
  `img_nom` varchar(50) NOT NULL,
  PRIMARY KEY (`ide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `explication`
--

INSERT INTO `explication` (`ide`, `mate`, `nome`, `prenome`, `servicee`, `fonction`, `motife`, `delai`, `cmse`, `sanction`, `nbrejmap`, `dateemett`, `obs`, `datedir`, `img_nom`) VALUES
(9, 'dl001', 'kamga', 'blondel', 'informatique', 'info', 'retard', '24_heures', 'tout les jours', 'miseapied', 2, '2019-05-28', 'ACCEPTEE', '2019-05-29', 'dir.jpg'),
(11, 'dl001', 'kamga', 'blondel', 'informatique', 'info', 'vol', 'Des_recept', 'mensonge', 'liceciement', 0, '2019-05-29', 'ACCEPTEE', '2019-05-29', 'images_2.jpg'),
(12, 'dl001', 'kamga', 'blondel', 'informatique', 'info', 'retard repete', 'Des_recept', '', 'miseapied', 2, '2019-06-29', 'ACCEPTEE', '', 'tÃ©lÃ©chargÃ© (3).jpg');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--
-- Création: Ven 03 Mai 2019 à 09:06
--

CREATE TABLE IF NOT EXISTS `permission` (
  `idp` int(5) NOT NULL AUTO_INCREMENT,
  `datejrp` varchar(11) NOT NULL,
  `matp` varchar(10) NOT NULL,
  `nomp` varchar(30) NOT NULL,
  `prenomp` varchar(35) NOT NULL,
  `fonctionp` varchar(30) NOT NULL,
  `sitep` varchar(30) NOT NULL,
  `nbrjr1p` int(5) NOT NULL,
  `datedepp` varchar(11) NOT NULL,
  `hdepp` time NOT NULL,
  `dateretp` varchar(11) NOT NULL,
  `hretp` time NOT NULL,
  `motifp` varchar(75) NOT NULL,
  `decrespp` varchar(20) NOT NULL,
  `nbrjrp1` int(5) NOT NULL,
  `motifrefp` varchar(50) NOT NULL,
  `remplp` varchar(35) NOT NULL,
  `faitap` varchar(20) NOT NULL,
  `datevalp` varchar(11) NOT NULL,
  `visarespp` varchar(5) NOT NULL,
  `decrhp` varchar(20) NOT NULL,
  `nbrjr3p` int(5) NOT NULL,
  `motfirefdir` varchar(75) NOT NULL,
  `visarhp` int(11) NOT NULL,
  `decdirp` varchar(20) NOT NULL,
  `nbrjr4p` int(5) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


CREATE TABLE IF NOT EXISTS `archive` (
  `idp` int(5) NOT NULL AUTO_INCREMENT,
  `datejrp` varchar(11) NOT NULL,
  `matp` varchar(10) NOT NULL,
  `nomp` varchar(30) NOT NULL,
  `prenomp` varchar(35) NOT NULL,
  `fonctionp` varchar(30) NOT NULL,
  `sitep` varchar(30) NOT NULL,
  `nbrjr1p` int(5) NOT NULL,
  `datedepp` varchar(11) NOT NULL,
  `hdepp` time NOT NULL,
  `dateretp` varchar(11) NOT NULL,
  `hretp` time NOT NULL,
  `motifp` varchar(75) NOT NULL,
  `decrespp` varchar(20) NOT NULL,
  `nbrjrp1` int(5) NOT NULL,
  `motifrefp` varchar(50) NOT NULL,
  `remplp` varchar(35) NOT NULL,
  `faitap` varchar(20) NOT NULL,
  `datevalp` varchar(11) NOT NULL,
  `visarespp` varchar(5) NOT NULL,
  `decrhp` varchar(20) NOT NULL,
  `nbrjr3p` int(5) NOT NULL,
  `motfirefdir` varchar(75) NOT NULL,
  `visarhp` int(11) NOT NULL,
  `decdirp` varchar(20) NOT NULL,
  `nbrjr4p` int(5) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Contenu de la table `permission`
--

INSERT INTO `permission` (`idp`, `datejrp`, `matp`, `nomp`, `prenomp`, `fonctionp`, `sitep`, `nbrjr1p`, `datedepp`, `hdepp`, `dateretp`, `hretp`, `motifp`, `decrespp`, `nbrjrp1`, `motifrefp`, `remplp`, `faitap`, `datevalp`, `visarespp`, `decrhp`, `nbrjr3p`, `motfirefdir`, `visarhp`, `decdirp`, `nbrjr4p`) VALUES
(1, '06/04/2019', 'dl001', 'kamga', 'blondel', 'info', 'direction', 5, '06/04/2019', '11:00:00', '06/04/2019', '16:00:00', 'intervention', 'ACCEPTEE', 3, 'RAS', 'shisui', 'douala', '2019-06-04', '', 'ACCEPTEE', 3, 'RAS', 0, 'ACCEPTEE', 3),
(2, '06/04/2019', 'dl001', 'kamga', 'blondel', 'info', 'direction', 3, 'date de dep', '14:00:00', '06/04/2019', '16:00:00', 'INCIDENT', 'ACCEPTEE', 2, 'R.A.S', 'TOI', 'BAFOUSSAM', '2019-06-05', '', 'ACCEPTEE', 2, '', 0, 'ACCEPTEE', 2);

-- --------------------------------------------------------

--
-- Structure de la table `source`
--
-- Création: Ven 03 Mai 2019 à 09:00
--

CREATE TABLE IF NOT EXISTS `source` (
  `smat` varchar(10) NOT NULL,
  `snom` varchar(30) NOT NULL,
  `sprenom` varchar(35) NOT NULL,
  `ssexe` varchar(8) DEFAULT NULL,
  `sdatenais` varchar(11) NOT NULL,
  `sage` int(5) DEFAULT NULL,
  `sfonction` varchar(25) NOT NULL,
  `sniveau` varchar(30) DEFAULT NULL,
  `ssite` varchar(30) NOT NULL,
  `sdateemb` varchar(11) NOT NULL,
  PRIMARY KEY (`smat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `source`
--

INSERT INTO `source` (`smat`, `snom`, `sprenom`, `ssexe`, `sdatenais`, `sage`, `sfonction`, `sniveau`, `ssite`, `sdateemb`) VALUES
('dl001', 'kamga', 'blondel', 'masculin', '1997-03-14', 22, 'info', '0', 'direction', '2019-04-16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
-- Création: Mar 30 Avril 2019 à 13:37
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(20) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `niveau` int(5) NOT NULL,
  `service` varchar(30) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`login`, `passwd`, `niveau`, `service`) VALUES
('Admin', 'e10adc3949ba59abbe56e057f20f883e', 0, 'INFORMATIQUE');

