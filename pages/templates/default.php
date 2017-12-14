<?php
// TODO Enlever Style

use App\Article;
use App\Autoloader;

require_once '../app/Autoloader.php';
Autoloader::register();

if ($p == 'home'){
    require '../pages/carousel.php';
}
?>

<meta charset="UTF-8">
<!-- Liens vers les fichiers CSS et JS -->
<link rel="stylesheet" href="../public/css/index.css" />
<link rel="stylesheet" href="../plugin/font-awesome/css/font-awesome.min.css" />
<script src="../public/lib/jquery-1.12.1.min.js"></script>
<script src="../public/js/css_dynamique.js"></script>

<nav>
    <div id="menu">
        <a href="../public/index.php?p=home" id="lapalette">
            <div class="fond"></div>
            <div class="titre_nav">Lapalette</div>
        </a>
        <a href="../public/index.php?p=association" id="association">
            <div class="fond"></div>
            <div class="titre_nav">L'Association</div>
        </a>
        <div id="festival">
            <div class="fond"></div>
            <div class="titre_nav">
                Le Festival
                <ul>
                    <li><a href="../public/index.php?p=prochaine"> Edition à venir </a></li>
                    <li><a href="../public/index.php?p=precedentes"> Editions précédentes </a></li>
                </ul>
            </div>
        </div>
        <div id="cagette">
            <div class="fond"></div>
            <div class="titre_nav">
                La Cagette
                <ul>
                    <?php
                        # --- Modification des sous-partie La Cagette --- #
                        $cagette = Article::getCagette();
                    ?>
                    <li><a href="../public/index.php?p=cagette#<?= Article::enleverEspace($cagette[0]->titre) ?>"><?= $cagette[0]->titre ?></a></li>
                    <li><a href="../public/index.php?p=cagette#<?= Article::enleverEspace($cagette[1]->titre) ?>"><?= $cagette[1]->titre ?></a></li>
                    <li><a href="../public/index.php?p=cagette#<?= Article::enleverEspace($cagette[2]->titre) ?>"><?= $cagette[2]->titre ?></a></li>
                </ul>
            </div>
        </div>
        <a href="../public/index.php?p=ateliers" id="ateliers">
            <div class="fond"></div>
            <div class="titre_nav">Les Ateliers</div>
        </a>
        <div id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </div>
</nav>

<?php if($p == 'home'){ ?>
    <div style="z-index: 10; width: 80%; margin-top: 2%; margin-left: auto; margin-right: auto; margin-top: -2.5%;font-size: 1.12rem; padding: 2.5%;">
        <?= $content; ?>
    </div>
<?php } else { ?>
    <div id="fond_page">
        <?php require '../app/background.php'; ?>
    </div>
    <div style="z-index: 10; width: 60%; margin-top: 2%; margin-left: auto; margin-right: auto; margin-top: -2.5%;font-size: 1.12rem; background-color: rgba(255, 255, 255, 0.6); padding: 2.5%; box-shadow: 0 0 10px white;">
        <?= $content; ?>
    </div>
<?php } ?>