<?php

/**
 * User: Florian Leroux
 * Date: 15/02/2017
 * Time: 20:18
 * COPY DE L'INDEX
 */

require '../app/Autoloader.php';
App\Autoloader::register();

/* Initialisation des objets */
$db = new \App\Database('lapalette');
/* Fin de l'initialisation */
?>
    <meta charset="UTF-8">
<!-- Liens vers les fichiers CSS et JS -->
	<link rel="stylesheet" href="css/index.css" />
	<script src="lib/jquery-1.12.1.min.js"></script>
<!-- FIN Liens -->

<?php
$nb_fichier = 0;

echo '<div id="slider">';
echo '<figure>';

if($dossier = opendir('../source/carousel')){
    while(false !== ($fichier = readdir($dossier))){
        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'README.text'){
            $nb_fichier++; // On incr�mente le compteur de 1
            echo '<img src="../source/carousel/' . $fichier . '" alt="Lapalette festival image ' . $nb_fichier . ' de carousel">';
        }
    }

    closedir($dossier);
    echo '</figure>';
    echo '</div>';
}else{
    echo 'Le dossier n\' a pas pu �tre ouvert';
}

?>

	<h1> Lapalette< </h1>
	<h1 id="ombre_titre"> Lapalette< </h1>

	<nav>
		<div id="menu">
			<div class="flex_1">
				L'Association
			</div>
			<div class="flex_1">
				Le Festival
			</div>
			<div class="flex_1">
				La Cagette
			</div>
			<div class="flex_1">
				Les Ateliers
			</div>
		</div>
	</nav>

	<h2> AJAX</h2>

    <section>
        <div id="ajax_index" class="flex_container"></div>

        <p id="precedent_bouton"><strong><</strong></p>
        <p id="suivant_bouton"><strong>></strong></p>
    </section>
<?php
    $datas = $db->query('SELECT * FROM articles ORDER BY id DESC', 'App\Article');
    $reste = (count($datas)%3);
    if(count($datas)==1 || count($datas)==2 || count($datas)==3){
        $nombre_actualite = 1;
    }elseif($reste == 0){
        $nombre_actualite = count($datas)-(count($datas)%3)-3;
    }else{
        $nombre_actualite = count($datas)-(count($datas)%3);
    }

    echo $reste . '</br>';
    echo $nombre_actualite;
?>

<script>
    $(document).ready(function (){
        if(i == undefined) {
            var i = 0;
            affichage_bouton(i);
            $.ajax({
                url: "../pages/actualites_ajax.php", //Chemin vers le fichier qui doit �tre affich� dans la zone AJAX
                type: 'POST',
                data: "i=" + i,
                success: function(result){
                    $("#ajax_index").html(result); //ID de la zone o� on affiche le fichier
                }
            });
        }

        $("#precedent_bouton").click(function(){ //ID du lien sur lequel on clique
            i = i - 3;
            ajax_system(i);
        });

        $("#suivant_bouton").click(function(){
            i = i + 3;
            ajax_system(i);
        });
    });

    function affichage_bouton(i){
        if(<?= $nombre_actualite; ?> == 1){
            $("#precedent_bouton").hide();
            $("#suivant_bouton").hide();
        }else if(i <= 0){
            $("#precedent_bouton").hide();
            $("#suivant_bouton").show();
        }else if(i >= <?= $nombre_actualite; ?>){
            $("#precedent_bouton").show();
            $("#suivant_bouton").hide();
        }else{
            $("#precedent_bouton").show();
            $("#suivant_bouton").show();
        }
    }

    function ajax_system(i){
        $("#ajax_index").fadeOut(1500, function(){
            $.ajax({
                url: "../pages/actualites_ajax.php",
                type: 'POST',
                data: "i=" + i,
                success: function(result){
                    $("#ajax_index").html(result);
                }
            });
            affichage_bouton(i);
        });
        $("#ajax_index").fadeIn(1000);
    }

</script>