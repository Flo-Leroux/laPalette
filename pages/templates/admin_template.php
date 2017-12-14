<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 27/02/2017
 * Time: 21:42
 */

// TODO Enlver Style CSS FOND
?>

<meta charset="UTF-8">
<!-- Liens vers les fichiers CSS et JS -->
<link rel="stylesheet" href="../public/css/admin.css" />
<link rel="stylesheet" href="../plugin/font-awesome/css/font-awesome.min.css" />
<script src="../public/lib/jquery-1.12.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../plugin/fancybox/jquery.fancybox.css"/>
<script type="text/javascript" src="../plugin/fancybox/jquery.fancybox.js"></script>
<script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
            'type': 'iframe',
            'minWidth': '800',
            'minHeight': '600'
        });
    });
</script>

<nav>
    <h1>Lapalette</h1>

    <ul class="categorie">
        <li><a href="../public/index.php?p=admin">Tous les articles</a></li>
        <li><a href="../public/index.php?p=admin&onglet=Actualite">Actualités</a></li>
        <li><a href="../public/index.php?p=edit&id=125">Association</a></li>
        <li id="festival">Festival
            <ul>
                <li><a href="../public/index.php?p=edit&id=123">Naissance</a></li>
                <li><a href="../public/index.php?p=edit&id=126">Valeurs</a></li>
                <li><a href="../public/index.php?p=edit&id=127">Concept</a></li>
                <li><a href="../public/index.php?p=admin&onglet=Prochaine">Edition à venir</a></li>
                <li><a href="../public/index.php?p=admin&onglet=Precedentes">Editions précédentes</a></li>
            </ul>
        </li>
        <li><a href="../public/index.php?p=admin&onglet=Cagette">Cagette</a></li>
        <li><a href="../public/index.php?p=edit&id=138">Ateliers</a></li>
    </ul>

    <ul class="categorie">
        <li><a href="../public/index.php?p=new">Nouveau</a></li>
    </ul>

    <ul class="categorie">
        <li><a href="../public/index.php?p=parametre">Paramètre</a></li>
        <li><a href="../plugin/filemanager/dialog.php?type=1&akey=test&type=1fldr=" class="fancybox">File Manager</a> </li>
    </ul>
    <a href="../app/Logout.php" id="deco">Deconnexion</a>
</nav>

<div id="fond_page">
    <?php require '../app/background.php'; ?>
</div>

<div>
    <?= $content ?>
</div>
