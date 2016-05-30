-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Mai 2016 à 18:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `transversalproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalog_categories`
--

CREATE TABLE IF NOT EXISTS `catalog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `catalog_categories`
--

INSERT INTO `catalog_categories` (`id`, `name`, `description`) VALUES
(1, 'Jeu de plateau', 'listes des jeu de plateau'),
(2, 'Jeu de des', 'listes des jeux de dés'),
(3, 'Jeu de cartes', 'listes des jeux de cartes'),
(4, 'Jeu de strategie', 'listes des jeux de stratégie'),
(5, 'Jeu cooperatifs ou semi cooperatifs', 'listes des jeux coopératifs ou semi coopératifs'),
(6, 'Jeu de reflexion', 'listes des jeux de réflexion'),
(7, 'Jeu d’ambiance', 'listes des jeux d’ambiance'),
(8, 'Jeu d’adresse', 'listes des jeux d’adresse');

-- --------------------------------------------------------

--
-- Structure de la table `catalog_items`
--

CREATE TABLE IF NOT EXISTS `catalog_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `itemType` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text NOT NULL,
  `releaseDate` date NOT NULL,
  `dateAdd` bigint(20) NOT NULL,
  `players` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `view` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `catalog_items`
--

INSERT INTO `catalog_items` (`id`, `id_cat`, `userId`, `nickname`, `itemType`, `name`, `description`, `releaseDate`, `dateAdd`, `players`, `age`, `time`, `view`) VALUES
(9, 1, 3, 'admin', 1, 'Monopoly', 'Le Monopoly est un jeu de société américain édité par Hasbro. Le but du jeu consiste à ruiner ses concurrents par des opérations immobilières. Il symbolise les aspects apparents et spectaculaires du capitalisme, les fortunes se faisant et se défaisant au fil des coups de dés. Ce jeu de société est mondialement connu, et il en existe de multiples versions.', '1935-02-06', 1463989978, 6, 8, 720, 'view_Monopoly_catalog_'),
(14, 1, 3, 'admin', 1, 'Fast Fouille', 'Soit tu te grouilles, soit t&rsquo;es bredouille !\r\n\r\nUn jeu d&rsquo;ambiance dynamique avec de la d&eacute;duction, un peu de chance et du d&eacute;lire !\r\n\r\n \r\n\r\nComment jouer ?\r\n\r\n1- Chaque joueur d&eacute;couvre secr&egrave;tement son lieu (au camping, au cin&eacute;ma, l&rsquo;ile de Robinson Cruso&eacute;&hellip;).\r\n\r\n2- Pendant 30 secondes, tout le monde fouille parmi les 400 photos pour trouver celles qui correspondent &agrave; son lieu.\r\n\r\n3- Devinez les lieux des autres joueurs en fonction des photos s&eacute;lectionn&eacute;es.\r\n\r\n \r\n\r\nFaites les bons choix, vite, et bien !\r\n\r\n \r\n\r\nContenu :\r\n\r\n638 cartes (dont 160 cartes Lieu et 400 cartes Fouille)\r\n1 sablier\r\n1 bloc de score\r\n1 r&egrave;gle du jeu', '2000-09-15', 1464011429, 8, 10, 30, 'view_Fast Fouille_catalog_3'),
(16, 3, 3, 'admin', 1, 'Bicycle rider back', 'Idéales pour vos routines de cartes, les Bicycle Rider Back ancien étuis sont les plus utilisées en magie. Leur format poker est parfait pour une meilleure tenue et la finition Air-Cushion offre une glisse parfaite des cartes.', '1990-02-05', 1464348271, 10, 4, 5, 'view_Bicycle rider back_catalog_3'),
(17, 3, 3, 'admin', 1, 'Le Verger - jeu de carte', 'Le verger- jeu de cartes\nEst-ce que les enfants pourront récolter tous les fruits avant que le corbeau n''arrive au verger ? \n\nLa boite contient 56 cartes (1 verger, 9 chemins, 40 fruits, 6 paniers), 1 dé et 1 corbeau en bois.', '0000-00-00', 1464348501, 6, 3, 5, 'view_Le Verger - jeu de carte_catalog_3'),
(18, 4, 3, 'admin', 1, 'Bataille navale parlante', 'Joue contre l''ordinateur ou défie un ami ! Mode de jeu basique ou avancé à feu rapide. Effets sonores et lumineux. 2 joueurs. Alim. 3 piles LR06 non fournies. Dès 8 ans.\n', '1862-02-06', 1464348794, 2, 3, 35, 'view_Bataille navale parlante - Jeux Électroniques_catalog_3'),
(19, 5, 3, 'admin', 1, 'Acrobatino', 'Acrobatino est un jeu coopératif basé sur le mouvement.\nPhilippe est incontestablement le meilleur acrobate du moment. Souple comme un pantin, il réussit des mouvements incroyables. Son ami, le singe Bo, en est ravi ! Etes-vous aussi souple que Philippe ?  \nAcrobatino est un jeu de coopération et d''ambiance familial qui égaiera vos après-midis !', '1982-06-05', 1464349431, 5, 3, 20, 'view_Acrobatino_catalog_3'),
(20, 5, 3, 'admin', 1, 'Andor', 'Andor est un jeu d''aventure coopératif, riche et facile d’accès qui vous plongera dans un univers de légendes épiques et de hauts faits héroïques. Exploration, combat, décision de groupe et course contre la montre… Surmonterez-vous tous ces défis ?\n', '6874-08-14', 1464349630, 6, 10, 60, 'view_Andor_catalog_3'),
(21, 1, 3, 'admin', 1, 'Tsuro', 'In Tsuro, create your own path without your opponents steering you in the wrong direction - or off the board! Tsuro is the quick-playing game in which directions can change as easily as the game plays. The rules are simple - you place your stones, select your tiles, and attempt to build a safe path for your journey. Paths will cross and connect and the choice you make will affect all the journeys across the board. Stay on the right path, your journey begins here. A beautiful and beautifully simple game Easy to introduce to new players Playing time 15 mins Ages 8 + 2-8 players Contents of Tsuro: 1 Game Board 1 Dragon Tile 35 Path Tiles 8 Marker Stones Complete Game Rules\r\n', '5458-06-05', 1464350386, 8, 3, 15, 'view_Tsuro_catalog_3'),
(22, 1, 3, 'admin', 1, 'Archaeologia', 'Plongez au coeur de l''univers archéologique des années 30. Creusez dans plusieurs niveaux de strates et découvrez les différentes périodes : âge de bronze, préhistoire, crétacé et jurassique. Utilisez vos outils et autres moyens pour devenir le plus grand archéologue. Mais attention ! Le marché noir et les voleurs sont monnaies courantes sur les lieux de prospection.\n', '6641-06-05', 1464350526, 6, 7, 15, 'view_Archaeologia_catalog_3');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `view` text NOT NULL,
  `dateAdd` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `place`, `date`, `content`, `view`, `dateAdd`) VALUES
(1, 'Que faire le 14 Juillet?', 'Meltdown', '2016-07-14', 'Un bar comme on les aiment. De la mousse et des jeux! C&lsquo;est pourquoi nous avons d&eacute;cid&eacute; d&lsquo;y organiser notre prochain tournois de Risk. Le bar sera privatis&eacute; et vous &ecirc;tes convi&eacute;s, que ce soit pour participer au tournois ou simplement boire une bi&egrave;re entre amis. Nous vous attendons au 227 Rue Saint-Martin, 75003, Paris.', 'view_Que faire le 14 Juillet?_event_', 1463940605),
(2, 'Venez, il y &agrave; de la place dans Le Nid!', 'Le Nid', '2016-06-19', 'Un bar comme on les aiment. De la mousse et des jeux! C&lsquo;est pourquoi nous avons d&eacute;cid&eacute; d&lsquo;y organiser notre prochain tournois de Risk. Le bar sera privatis&eacute; et vous &ecirc;tes convi&eacute;s, que ce soit pour participer au tournois ou simplement boire une bi&egrave;re entre amis. Nous vous attendons au 227 Rue Saint-Martin, 75003, Paris.', 'view_Venez, il y Ã  de la place dans Le Nid!_event_', 1463940650),
(3, 'Oy&eacute; Oy&eacute; braves gens!', 'Le dernier bar avant la fin du monde', '2016-06-05', 'L&lsquo;&eacute;quipe de Game Blenders est fier de vous pr&eacute;senter son premier partenariat avec le c&eacute;l&egrave;bre Dernier Bar avant la fin du Monde! Au menu : rafra&icirc;chissements, de quoi manger et bien sur des jeux de soci&eacute;t&eacute;s. Vous &ecirc;tes donc tous convi&eacute;s le 05/06/2016 au 19 Avenue Victoria, 75001, Paris &agrave; partir de 19h.', 'view_OyÃ© OyÃ© braves gens!_event_', 1463940742);

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `offerType` int(11) NOT NULL,
  `type` text NOT NULL,
  `releaseDate` date NOT NULL,
  `players` int(11) NOT NULL,
  `view` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `offers`
--

INSERT INTO `offers` (`id`, `userId`, `nickname`, `name`, `price`, `offerType`, `type`, `releaseDate`, `players`, `view`, `content`, `date`) VALUES
(4, 1, 'Lucas', 'monopoly', 0, 1, 'Jeu de plateau', '1935-02-06', 6, 'view_monopoly_1', 'Le Monopoly est un jeu de soci&amp;amp;eacute;t&amp;amp;eacute; am&amp;amp;eacute;ricain &amp;amp;eacute;dit&amp;amp;eacute; par Hasbro. Le but du jeu consiste &amp;amp;agrave; ruiner ses concurrents par des op&amp;amp;eacute;rations immobili&amp;amp;egrave;res. Il symbolise les aspects apparents et spectaculaires du capitalisme, les fortunes se faisant et se d&amp;amp;eacute;faisant au fil des coups de d&amp;amp;eacute;s. Ce jeu de soci&amp;amp;eacute;t&amp;amp;eacute; est mondialement connu, et il en existe de multiples versions.', 1462866525),
(5, 1, 'Lucas', 'test', 0, 2, 'Jeu de plateau', '1997-09-11', 8, 'view_test_', 'm:ol;i,ukjny,higjbvfockdnohbtgkerngonrtobnerlnverjvnsqepfkjsfzniofhopzsgfozrfoegoberkgjbetgnzepng,pkrntokge,;fplkhbgbtgvrfecdxs::ol;ik,jnhbgvfredzsam:o;ilkujyhgtrfedzsaqliujytrfedzsaqOLIKUJYHTRFEDol;i,jhnybgfvcdsxqmnujyhgtrvfedm:njhyvgrfecd^polikuhytrfedzpmolyrzes^&ugrave;pmoliuyhtrfedzspmolikujyhg', 1463648629);

-- --------------------------------------------------------

--
-- Structure de la table `privatemsg`
--

CREATE TABLE IF NOT EXISTS `privatemsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `authorId` int(11) NOT NULL,
  `recipientId` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `privatemsg`
--

INSERT INTO `privatemsg` (`id`, `authorId`, `recipientId`, `title`, `content`, `date`) VALUES
(2, 1, '1', 'iolkyujhgtrfedzsa', 'm:oli;kujyhgtrfedzsa', 1463569681),
(3, 1, '1', 'l;,ukyjnhbgrvfecdxs', ',ukjnyhbtgvrfecdzxswaq<', 1463645489),
(4, 1, '1', 'mo:liyujhgtrfedzsaq', 'Ã¹!m:ol;ijyuhgtrfedzsa', 1463646560),
(5, 3, '3', 'pmoçl_kièuj-hygt(''fr"e', 'pmoliyèuj-ht(''r', 1463994090);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` bigint(20) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  `avatar` text NOT NULL,
  `age` int(11) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `town` text NOT NULL,
  `postalcode` int(11) NOT NULL,
  `adress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `date`, `nickname`, `firstname`, `lastname`, `password`, `email`, `rank`, `avatar`, `age`, `phonenumber`, `town`, `postalcode`, `adress`) VALUES
(3, 1463953143, 'admin', 'Lucas', 'Roberts', '3b004ac6d8a602681f5ee3587c924855679e21d9', 'admin@admin.fr', 4, 'avatar_3', 18, '0673688795', 'Chauconin-Neufmontiers', 77124, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
