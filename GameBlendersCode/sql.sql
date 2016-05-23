-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Mai 2016 à 23:39
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
(2, 'Jeu de dés', 'listes des jeux de dés'),
(3, 'Jeu de cartes', 'listes des jeux de cartes'),
(4, 'Jeu de stratégie', 'listes des jeux de stratégie'),
(5, 'Jeu coopératifs ou semi coopératifs', 'listes des jeux coopératifs ou semi coopératifs'),
(6, 'Jeu de réflexion', 'listes des jeux de réflexion'),
(7, 'Jeu d’ambiance', 'listes des jeux d’ambiance'),
(8, 'Jeu d’adresse', 'listes des jeux d’adresse');

-- --------------------------------------------------------

--
-- Structure de la table `catalog_items`
--

CREATE TABLE IF NOT EXISTS `catalog_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text NOT NULL,
  `releaseDate` date NOT NULL,
  `dateAdd` bigint(20) NOT NULL,
  `players` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `gameRules` text CHARACTER SET utf8 NOT NULL,
  `view` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `catalog_items`
--

INSERT INTO `catalog_items` (`id`, `id_cat`, `name`, `description`, `releaseDate`, `dateAdd`, `players`, `age`, `time`, `gameRules`, `view`) VALUES
(2, 1, 'monopoly', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis a massa id scelerisque. Sed eu arcu eleifend est congue feugiat eget venenatis augue. Aenean convallis dapibus tellus a porttitor.', '5857-07-17', 1463918134, 8, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis a massa id scelerisque. Sed eu arcu eleifend est congue feugiat eget venenatis augue. Aenean convallis dapibus tellus a porttitor.', 'view_monopoly_catalog_'),
(7, 1, 'Jeu des petit chevaux', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis a massa id scelerisque. Sed eu arcu eleifend est congue feugiat eget venenatis augue. Aenean convallis dapibus tellus a porttitor.', '1111-11-11', 1463952508, 7, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis a massa id scelerisque. Sed eu arcu eleifend est congue feugiat eget venenatis augue. Aenean convallis dapibus tellus a porttitor.', 'view_li;khg_catalog_');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `privatemsg`
--

INSERT INTO `privatemsg` (`id`, `authorId`, `recipientId`, `title`, `content`, `date`) VALUES
(2, 1, '1', 'iolkyujhgtrfedzsa', 'm:oli;kujyhgtrfedzsa', 1463569681),
(3, 1, '1', 'l;,ukyjnhbgrvfecdxs', ',ukjnyhbtgvrfecdzxswaq<', 1463645489),
(4, 1, '1', 'mo:liyujhgtrfedzsaq', 'Ã¹!m:ol;ijyuhgtrfedzsa', 1463646560);

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
(3, 1463953143, 'admin', '', '', '3b004ac6d8a602681f5ee3587c924855679e21d9', 'admin@admin.fr', 4, '', 0, '', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
