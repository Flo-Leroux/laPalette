<?php
use App\Article;

$post = Article::getArticle();
?>

<script src="js/css_dynamique.js"></script>

<div id="page">
    <h1 id="titre"><?= $post->titre; ?></h1>
    <p><?= $post->contenu; ?></p>
</div>
