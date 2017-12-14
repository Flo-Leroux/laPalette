<?php
use App\Article;

$post = Article::getCategorie();

if($post == false){
    header ('Location: ../public/index.php?p=erreur');
    die();
}
else { ?>
<div id="page">
    <h1 id="titre"><?= $post->titre; ?></h1>
    <p><?= $post->contenu; ?></p>
</div>
<?php  }?>

<script src="js/css_dynamique.js"></script>


