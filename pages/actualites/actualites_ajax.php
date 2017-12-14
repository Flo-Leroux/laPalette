<?php

use App\Article;
use App\Autoloader;

require '../../app/Autoloader.php';
Autoloader::register();

$datas = Article::getActualites();

$i = $_POST['i'];

if($i<0){
    die();
}

$j = $i + 3;
if($j>count($datas)){
	$j = count($datas);
}

while($i < $j){
    $extrait = $datas[$i]->getExtrait();
    ?>

    <div class="div_elem flex_1">
        <div class="div_img">
            <a href="<?= $datas[$i]->url; ?>">
                <img src="<?= $datas[$i]->vignette; ?>" alt="">
                <div class="extrait_ajax">
                    <?= $extrait; ?>
                </div>
            </a>
        </div>
        <p class="titre_ajax">
            <?= $datas[$i]->titre; ?>
        </p>
        <p class="suite_ajax">
            Lire la suite
        </p>
    </div>

    <?php
    $i++;
    if($i == $j){
        echo '</div>';
        break;
    }
}

/**
 * User: Florian Leroux
 * Date: 12/02/2017
 * Time: 18:28
 */

?>

<script src="js/css_dynamique.js"></script>