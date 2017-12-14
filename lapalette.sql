-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 nov. 2017 à 16:34
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
-- Base de données :  `lapalette`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `contenu` longtext CHARACTER SET utf8,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `vignette` text CHARACTER SET utf8 NOT NULL,
  `sous_categorie_festival` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `categorie`, `titre`, `contenu`, `date`, `vignette`, `sous_categorie_festival`) VALUES
(125, 'Association', 'Lâ€™Association mets le son', '<p style=\"text-align:justify\">Depuis maintenant 5 ans, le dernier weekend de juin est devenu un rituel. Alors qu&rsquo;au d&eacute;part ce n&rsquo;&eacute;tait qu&rsquo;une simple soir&eacute;e entre amis au fil des ann&eacute;es s&rsquo;est d&eacute;velopp&eacute; un v&eacute;ritable projet. D&rsquo;une simple f&ecirc;te entre amis au bord de la Moselle nous avons r&eacute;ussi &agrave; s&rsquo;organiser pour r&eacute;aliser ce qu&rsquo;est devenu le festival aujourd&rsquo;hui. Sans grande pr&eacute;tention nous avons gard&eacute; l&rsquo;esprit premier du festival avec le syst&egrave;me de r&eacute;cup de palette et de banquette. Nous fabriquons les deux sc&egrave;nes ainsi que le d&eacute;cor.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">La Naissance</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">L&rsquo;association <strong>&ldquo;Mets le son&rdquo;</strong> cr&eacute;&eacute;e en 2015 par un groupe de 15 jeunes venant essentiellement du village de Maron proche de Nancy. Le festival &ldquo;Lapalette&rdquo; est ouvert &agrave; tous, de 7 &agrave; 77 ans. Nous essayons de proposer une large palette d&rsquo;activit&eacute;s pour l&rsquo;apr&egrave;s-midi et une programmation vari&eacute;e pour le soir. Nous avons mis l&#39;accent sur l&#39;autogestion, dans notre cas ce principe consiste &agrave; responsabiliser le public et le faire devenir acteur de l&rsquo;&eacute;v&eacute;nement.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Depuis l&rsquo;association s&rsquo;est largement d&eacute;velopp&eacute;e autour du projet. Gr&acirc;ce &agrave; l&rsquo;association nous avons mis en place quelques ateliers comme la mise en place d&rsquo;un jardin responsable dans une &eacute;cole primaire ou des ateliers interactifs avec des enfants de Maron.<br />\r\n&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Le Concept</h3>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&laquo; Lapalette souhaite agir au niveau local en grande partie en proposant des partenariats comme l&rsquo;accueil jeune en les inteÌgrants, en les sensibilisant aÌ€ la creÌation active. Nous voulons aussi travailler avec les partenaires locaux. Lapalette se veut intergeÌneÌrationel et citoyen. DeÌsireux de nous inscrire dans une ideÌe de partage et de vivre ensemble, nous essayons de creÌer une parentheÌ€se o&ugrave; chacun aura sa place, en proposant des instants, des formes de repreÌsentations de theÌaÌ‚tre et d&rsquo;animations varieÌes et de concerts pour permettre une deÌcouverte au plus grand nombre de la sceÌ€ne creÌative de notre reÌgion. &raquo;.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Les Valeurs</h3>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Nous avons coeur de mettre en avant certaines valeurs dans la cr&eacute;ation de nos projets tels que : le partage, l&rsquo;innovation, la d&eacute;couverte, tol&eacute;rance, l&rsquo;environnement, la fra&icirc;cheur, nous laissons place &agrave; l&rsquo;initiative et l&rsquo;autogestion.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '2017-03-17 11:16:00', 'http://localhost/flo-leroux.fr/projects/laPalette/source/photos/2016/GLI_1253.jpg', NULL),
(155, 'Festival', 'Edition 2020', '<p>Page sur l&#39;Edition 2020.</p>\r\n', '2017-03-14 14:09:00', 'http://localhost/lapalette/source/photos/2016/GLI_1261.jpg', 'Prochaine'),
(123, 'Festival', 'Naisssance Festival', '<p>Page sur la naissance du festival</p>\r\n', '2017-03-06 00:00:00', 'http://localhost/lapalette/source/test_2/GLI_1237.jpg', 'Naissance'),
(126, 'Festival', 'Valeurs', '<p>Page sur les Valeurs du Festival</p>\r\n', '2017-02-23 00:00:00', 'http://localhost/lapalette/source/photos/2016/GLI_1261.jpg', 'Valeurs'),
(127, 'Festival', 'Concept', '<p>Page sur le Concept du Festival</p>\r\n', '2017-02-23 22:01:00', 'http://localhost/lapalette/source/photos/2016/GLI_1256_1.jpg', 'Concept'),
(128, 'Festival', 'Edition 2017', '<p>La page de l&#39;&eacute;dition 2017</p>\r\n', '2017-02-23 22:07:00', 'http://localhost/lapalette/source/photos/2016/GLI_1249_1.jpg', 'Precedentes'),
(131, 'Cagette', 'Cagette 3', '<p>La Cagette num&eacute;ro 3</p>\r\n', '2017-02-23 23:43:00', 'http://localhost/lapalette/source/photos/2016/GLI_1233.jpg', NULL),
(132, 'Cagette', 'Cagette 4', '<p>Page de la Cagette num&eacute;ro 4</p>\r\n', '2017-02-24 00:28:00', 'http://localhost/lapalette/source/photos/2016/GLI_1263.jpg', NULL),
(133, 'Cagette', 'Cagette 5', '<p>Page de la Cagette num&eacute;ro 5</p>\r\n', '2017-02-24 00:29:00', 'http://localhost/lapalette/source/photos/2016/GLI_1249_1.jpg', NULL),
(134, 'Cagette', 'Cagette 6', '<p style=\"text-align:justify\">Vbi curarum abiectis ponderibus aliis tamquam nodum et codicem difficillimum Caesarem convellere nisu valido cogitabat, eique deliberanti cum proximis clandestinis conloquiis et nocturnis qua vi, quibusve commentis id fieret, antequam effundendis rebus pertinacius incumberet confidentia, acciri mollioribus scriptis per simulationem tractatus publici nimis urgentis eundem placuerat Gallum, ut auxilio destitutus sine ullo interiret obstaculo.<br />\r\nEt quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.<br />\r\nFuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.<br />\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.<br />\r\nQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.<br />\r\n&nbsp;</p>\r\n', '2017-02-24 00:37:00', 'http://localhost/lapalette/source/photos/2016/GLI_1240.jpg', NULL),
(135, 'Cagette', 'Cagette 7', '<p style=\"text-align:justify\">Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.<br />\r\nFuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.<br />\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.<br />\r\nQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.<br />\r\nVbi curarum abiectis ponderibus aliis tamquam nodum et codicem difficillimum Caesarem convellere nisu valido cogitabat, eique deliberanti cum proximis clandestinis conloquiis et nocturnis qua vi, quibusve commentis id fieret, antequam effundendis rebus pertinacius incumberet confidentia, acciri mollioribus scriptis per simulationem tractatus publici nimis urgentis eundem placuerat Gallum, ut auxilio destitutus sine ullo interiret obstaculo.<br />\r\nEt quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.<br />\r\nFuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.<br />\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.<br />\r\nQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.<br />\r\nVbi curarum abiectis ponderibus aliis tamquam nodum et codicem difficillimum Caesarem convellere nisu valido cogitabat, eique deliberanti cum proximis clandestinis conloquiis et nocturnis qua vi, quibusve commentis id fieret, antequam effundendis rebus pertinacius incumberet confidentia, acciri mollioribus scriptis per simulationem tractatus publici nimis urgentis eundem placuerat Gallum, ut auxilio destitutus sine ullo interiret obstaculo.<br />\r\nEt quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.<br />\r\nFuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.<br />\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.<br />\r\nQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.<br />\r\nVbi curarum abiectis ponderibus aliis tamquam nodum et codicem difficillimum Caesarem convellere nisu valido cogitabat, eique deliberanti cum proximis clandestinis conloquiis et nocturnis qua vi, quibusve commentis id fieret, antequam effundendis rebus pertinacius incumberet confidentia, acciri mollioribus scriptis per simulationem tractatus publici nimis urgentis eundem placuerat Gallum, ut auxilio destitutus sine ullo interiret obstaculo.<br />\r\nEt quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.<br />\r\nFuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.<br />\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.<br />\r\nQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.<br />\r\n&nbsp;</p>\r\n', '2017-02-24 00:39:00', 'http://localhost/lapalette/source/photos/2016/GLI_1245.jpg', NULL),
(136, 'Festival', 'Edition 2018', '<p>Page sur l&#39;edition 2018</p>\r\n', '2017-02-24 12:21:00', 'http://localhost/lapalette/source/photos/2016/GLI_1236_1.jpg', 'Precedentes'),
(157, 'Festival', 'Edition 2016', '<p>Votre texte ici.</p>\r\n', '2016-06-25 12:00:00', 'http://localhost/lapalette/source/photos/2016/GLI_1259.jpg', 'Precedentes'),
(138, 'Ateliers', 'Ateliers', '<p>Page sur les Ateliers</p>\r\n', '2017-02-26 00:00:00', 'http://localhost/lapalette/source/photos/2016/GLI_1243.jpg', NULL),
(139, 'Cagette', 'Cagette 8', '<p>Page sur la Cagette 8&nbsp;</p>\r\n', '2017-02-25 11:48:00', 'http://localhost/lapalette/source/photos/2016/GLI_1234.jpg', NULL),
(156, 'Actualite', 'Nouvelle ActualitÃ©', '<p>Votre texte ici.</p>\r\n', '2017-03-14 17:01:00', 'http://localhost/lapalette/source/photos/2016/GLI_1260_1.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `hex` text COLLATE utf8_unicode_ci NOT NULL,
  `R` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `nom`, `hex`, `R`, `G`, `B`) VALUES
(1, 'AccueilColor', '#12abf5', 18, 171, 245),
(3, 'AssociationColor', '#ab36d8', 171, 54, 216),
(4, 'FestivalColor', '#e98f16', 233, 143, 22),
(5, 'CagetteColor', '#93e783', 147, 231, 131),
(6, 'AteliersColor', '#ff0008', 255, 0, 8);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `log`, `mdp`) VALUES
(1, 'flo', 'flo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
