<?php
    session_start();

    if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
        header ('Location: ../public/index.php?p=login');
    }
?>

        <title>Editeur</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta charset="utf-8" />
        <script src='../plugin/ckeditor/ckeditor.js'></script>
        <script src="../public/lib/jquery-1.12.1.min.js"></script>
        <script src="../public/js/editeur_new.js"></script>

        <link rel="stylesheet" type="text/css" href="../public/css/editeur.css"/>
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


        <form action="../app/Post.php" method="post">
            <fieldset id="page">
                <h1 id="titre"></h1>
                <textarea contenteditable="true" name="contenu_editeur" id="contenu_editeur" rows="10" cols="80">
                    Votre texte ici.
                </textarea>
            </fieldset>

            <fieldset id="sous_menu">
                <fieldset class="sous_menu_titre">
                    <p>1. Titre</p>
                    <input id="titre_editeur" name="titre_editeur" placeholder="Titre" ONBLUR="verif_champs('#titre_editeur')">
                </fieldset>

                <fieldset class="sous_menu_titre">
                    <p>2. Vignette</p>
                    <input id="vignette_editeur" name="vignette_editeur" placeholder="Vignette pour l'actualité" ONBLUR="verif_champs('#vignette_editeur')">
                    <img id="img_vignette_editeur vignette" src="" alt="">
                    <a href="../plugin/filemanager/dialog.php?type=1&akey=test&type=1&field_id=vignette_editeur&fldr=" class="fancybox">Selectionner</a>
                    <a onclick="previsu_vignette()">Voir l'image</a>
                </fieldset>

                <fieldset class="sous_menu_titre">
                    <p>3. Catégorie</p>
                    <select id="categorie_editeur" name="categorie_editeur">
                        <option value="Actualite">Actualité</option>
                        <option value="Festival">Festival</option>
                        <option value="Cagette">Cagette</option>
                        <option value="Ateliers">Ateliers</option>
                    </select>

                    <select id="sous_categorie_festival" name="sous_categorie_festival">
                        <option value="Prochaine">Edition à venir</option>
                        <option value="Precedentes">Editions précédentes</option>
                    </select>
                </fieldset>

                <fieldset class="sous_menu_titre">
                    <p>4. Date de publication</p>
                    <input id="date_editeur" type="datetime-local" name="date_publication" placeholder="Date de publication">
                </fieldset>

                <fieldset class="sous_menu_titre">
                    <button class="sous_menu_titre" value="submit">Publier</button>
                </fieldset>
            </fieldset>
        </form>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.inline( 'contenu_editeur', {
                filebrowserBrowseUrl : '../plugin/filemanager/dialog.php?type=2&akey=test&editor=ckeditor&fldr=',
                filebrowserUploadUrl : '../plugin/filemanager/dialog.php?type=2&akey=test&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : '../plugin/filemanager/dialog.php?type=1&akey=test&editor=ckeditor&fldr='
                } );
            </script>