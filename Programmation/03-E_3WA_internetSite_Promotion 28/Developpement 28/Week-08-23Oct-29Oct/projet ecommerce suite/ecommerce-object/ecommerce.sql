-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 10 Novembre 2014 à 10:00
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `image`) VALUES
(1, 'Php', 'lorem ipsum', '1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `auteur`, `note`, `contenu`, `date_commentaire`, `id_produit`) VALUES
(1, 'moi', 4, 'Ceci est le premier commentaire', '2014-11-04 05:00:41', 1),
(2, 'moi', 2, 'Ceci est le deuxième commentaire', '2014-11-04 06:11:58', 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_product` datetime NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nom`, `description`, `prix`, `image`, `date_product`, `id_categorie`) VALUES
(1, 'Premier produit', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 10, '1.jpg', '2014-10-29 00:00:00', 1),
(2, 'Deuxième produit', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L''avantage du Lorem Ipsum sur un texte générique comme ''Du texte. Du texte. Du texte.'' est qu''il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour ''Lorem Ipsum'' vous conduira vers de nombreux sites qui n''en sont encore qu''à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d''y rajouter de petits clins d''oeil, voire des phrases embarassantes).', 20, '2.jpg', '2014-10-30 00:00:00', 1),
(3, 'Troisième produit', 'Contrairement à une opinion répandue, le Lorem Ipsum n''est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s''est intéressé à un des mots latins les plus obscurs, consectetur, extrait d''un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l''éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.', 50, '3.jpg', '2014-11-02 00:00:00', 1),
(4, 'Quatrième produit', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d''entre elles a été altérée par l''addition d''humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu''il n''y a rien d''embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d''humour.', 100, '4.jpg', '2014-11-03 00:00:00', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
