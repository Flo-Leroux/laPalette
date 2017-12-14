<?php
use App\Article;

$post = Article::getFestivalSC();

?>
<div id="page">
    <h1 id="titre"><?= $post[0]->titre; ?></h1>
    <p><?= $post[0]->contenu; ?></p>
</div>

<script src="js/css_dynamique.js"></script>