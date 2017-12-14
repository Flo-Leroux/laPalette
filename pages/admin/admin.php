<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 27/02/2017
 * Time: 13:59
 */

use App\Article;
use App\Gestion;

session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
    header ('Location: ../public/index.php?p=login');
}

$datas = Article::getAllActualites();

if(isset($_GET['onglet'])){
    $onglet = $_GET['onglet'];
}

?>
<div id="page">
    <div id="thead" class="flex_container">
        <div class="flex_1">Statut</div>
        <div class="flex_3">Titre</div>
        <div class="flex_2">Catégorie</div>
        <div class="flex_2">Date/Heure</div>
        <div class="flex_1">Action</div>
    </div>

<?php
foreach ($datas as $posts):
    if(isset($_GET['onglet']) && $posts->categorie == $onglet || isset($_GET['onglet']) && $posts->sous_categorie_festival == $onglet || !isset($_GET['onglet'])){
?>
    <div class="flex_container">
        <div class="flex_1">
            <?php
            if($posts->date <= Gestion::getDateCourante()){
                echo '<i class="en_ligne fa fa-eye" aria-hidden="true"></i>';
            }else{
                echo '<i class="hors_ligne fa fa-eye-slash" aria-hidden="true"></i>';
            }
            ?>
        </div>
        <div class="flex_3">
            <?= $posts->titre ?>
        </div>
        <div class="flex_2">
            <?= $posts->categorie ?>
        </div>
        <div class="flex_2">
            <?= $posts->date ?>
        </div>
        <div class="flex_1">
            <a href="../public/index.php?p=edit&id=<?= $posts->id ?>"><i class="modif_icon fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <?php
                if($posts->categorie == 'Cagette' || $posts->categorie == 'Actualite' || $posts->categorie == 'Ateliers' || $posts->sous_categorie_festival == 'Precedentes'){ ?>
                    <a href="../public/index.php?p=delete&id=<?= $posts->id ?>"  onclick="return confirm('Etes-vous sûr de supprimer cet article ?');"><i class="delete_icon fa fa-eraser" aria-hidden="true"></i></a>
                <?php }
            ?>
        </div>
    </div>
<?php
}
endforeach;
?>

</div>

<div id="sous_menu">
    <p>Légende :</p>
    <p> <i class="en_ligne fa fa-eye" aria-hidden="true"></i> = Article en ligne </p>
    <p> <i class="hors_ligne fa fa-eye-slash" aria-hidden="true"></i> = Article hors ligne </p>
    <p> <i class="modif_icon fa fa-pencil-square-o" aria-hidden="true"></i> = Editer l'article </p>
    <p> <i class="delete_icon fa fa-eraser" aria-hidden="true"></i> = Supprimer l'article </p>
</div>