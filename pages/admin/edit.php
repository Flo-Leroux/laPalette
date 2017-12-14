<?php
    use App\Article;

    session_start();

    if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
        header ('Location: ../public/index.php?p=login');
    }

    $datas = Article::getArticle();
?>

<title>Editeur - <?= $datas->titre ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8" />
<script src='../plugin/ckeditor/ckeditor.js'></script>
<script src="../public/lib/jquery-1.12.1.min.js"></script>
<script src="../public/js/editeur_new.js"></script>

<link rel="stylesheet" type="text/css" href="../public/css/editeur.css"/>
<link rel="stylesheet" type="text/css" href="../plugin/fancybox/jquery.fancybox.css"/>
<script type="text/javascript" src="../plugin/fancybox/jquery.fancybox.js"></script>

<form action="../app/Update.php?id=<?= $datas->id ?>" method="post">
    <fieldset id="sous_menu">
        <fieldset class="sous_menu_titre">
            <p>1. Titre</p>
            <input id="titre_editeur" name="titre_editeur" value="<?= $datas->titre ?>" ONBLUR="verif_champs('#titre_editeur')">
        </fieldset>

        <fieldset class="sous_menu_titre">
            <p>2. Vingette</p>
            <input id="vignette_editeur" name="vignette_editeur"value="<?= $datas->vignette ?>" ONBLUR="verif_champs('#vignette_editeur')">
            <img id="img_vignette_editeur" id="vignette" src="<?= $datas->vignette ?>" alt="">
            <a href="../plugin/filemanager/dialog.php?type=1&akey=test&type=1&field_id=vignette_editeur&fldr=" class="fancybox">Selectionner</a>
            <a id="bouton_previsu" onclick="previsu_vignette()">Voir l'image</a>
        </fieldset>

        <fieldset class="sous_menu_titre">
            <p>3. Catégorie</p>
            <select id="categorie_editeur" name="categorie_editeur">
                <?php
                    if($datas->categorie == "Actualite"){
                        echo '<option selected value="Actualite">Actualité</option>';
                        echo '<option value="Festival">Festival</option>';
                        echo '<option value="Cagette">Cagette</option>';
                    }elseif($datas->categorie == "Association"){
                        echo '<option selected value="Association" >Association</option>';
                    }elseif($datas->categorie == "Festival"){
                        echo '<option selected value="Festival">Festival</option>';
                    }elseif($datas->categorie == "Cagette"){
                        echo '<option selected value="Cagette">Cagette</option>';
                    }elseif($datas->categorie == "Ateliers"){
                        echo '<option selected value="Ateliers">Ateliers</option>';
                    }
                ?>
            </select>

            <?php if($datas->categorie == "Festival"){ ?>
            <select id="sous_categorie_festival" name="sous_categorie_festival"">
                <?php
                if($datas->sous_categorie_festival == "Naissance"){
                    echo '<option selected value="Naissance">Naissance</option>';
                }elseif($datas->sous_categorie_festival == "Valeurs"){
                    echo '<option selected value="Valeurs">Valeurs</option>';
                }elseif($datas->sous_categorie_festival == "Concept"){
                    echo '<option selected value="Concept">Concept</option>';
                }elseif($datas->sous_categorie_festival == "Prochaine"){
                    echo '<option selected value="Prochaine">Edition à venir</option>';
                    echo '<option value="Precedentes">Editions précédentes</option>';
                }elseif($datas->sous_categorie_festival == "Precedentes"){
                    echo '<option value="Prochaine">Edition à venir</option>';
                    echo '<option selected value="Precedentes">Editions précédentes</option>';
                }else{
                    echo '<option value="Prochaine">Edition à venir</option>';
                    echo '<option value="Precedentes">Editions précédentes</option>';
                }
                ?>
            </select>
            <?php } ?>
        </fieldset>

        <fieldset class="sous_menu_titre">
            <p>4. Date de publication</p>
            <input id="date_editeur" type="datetime-local" name="date_publication" value="<?= Article::getDateTime($datas->date); ?>">
        </fieldset>

        <fieldset class="sous_menu_titre">
            <button value="submit">Publier</button>
        </fieldset>
    </fieldset>

    <fieldset id="page">
        <h1 id="titre"><?= $datas->titre ?></h1>
        <textarea contenteditable="true" name="contenu_editeur" id="contenu_editeur" rows="10" cols="80">
            <?= utf8_encode($datas->contenu); ?>
        </textarea>
    </fieldset>
</form>

<script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
            'type': 'iframe',
            'minWidth': '800',
            'minHeight': '600'
        });
    });

    CKEDITOR.inline( 'contenu_editeur', {
        filebrowserBrowseUrl : '../plugin/filemanager/dialog.php?type=2&akey=test&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '../plugin/filemanager/dialog.php?type=2&akey=test&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '../plugin/filemanager/dialog.php?type=1&akey=test&editor=ckeditor&fldr='
    } );
</script>