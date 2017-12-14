<?php
use App\Article;

$datas = Article::getCagette();

foreach ($datas as $post):
?>
<div id="page">
    <h1 id="<?= Article::enleverEspace($post->titre) ?> titre"><?= $post->titre ?></h1>

    <p><?= $post->contenu ?></p>
</div>
<?php
endforeach;
?>

<script src="js/css_dynamique.js"></script>
