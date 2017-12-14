<?php

use App\Article;

$edition = Article::getFestivalSC();
?>
<div id="page">
<?php
if($p == 'precedentes'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = $edition[0]->id;
        header ('Location: ../public/index.php?p=precedentes&id=' . $id);
    }

    echo '<div id="sous_menu_edition_festival">';
    echo '<ul>';
    foreach ($edition as $titre):
?>
    <li>
        <a href="../public/index.php?p=precedentes&id=<?= $titre->id; ?>"><?= $titre->titre; ?></a>
    </li>

<?php
    endforeach;
    echo '</ul>';
    echo '</div>';
}else{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = $edition[0]->id;
        header ('Location: ../public/index.php?p=prochaine&id=' . $id);
    }
}

$edition = Article::getArticle();
?>
    <h1 id="titre"><?= $edition->titre; ?></h1>

    <p><?= $edition->contenu; ?></p>
</div>

<?php
    $files = glob('../source/photos/'. $edition->titre .'/*.*');
    echo '<div id="gallerie" style="margin-left: auto; margin-right: auto; padding-left: 4%;">';
    foreach($files as $img):
        echo "<div style='width: 20%; padding-bottom: 20% ; float: left; margin: 2%; overflow: hidden; position: relative;'>";
        $img_array = getimagesize($img);
        if($img_array[0]>$img_array[1]){
            echo "<img style='height: 100%; position: absolute; transform: translateX(-25%);' src='http://localhost/lapalette/".substr($img, 3)."' alt=''>";
        }else if($img_array[0]<$img_array[1]){
            echo "<img style='width: 100%; position: absolute; transform: translateY(-25%);' src='http://localhost/lapalette/".substr($img, 3)."' alt=''>";
        }else{
            echo "<img style='width: 100%; position: absolute; transform: translateY(-25%);' src='http://localhost/lapalette/".substr($img, 3)."' alt=''>";
        }

        echo "</div>";
    endforeach;
    echo '<div style="clear: both;"></div></div>';
?>

<script src="js/css_dynamique.js"></script>