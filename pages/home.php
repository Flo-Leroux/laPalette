<?php
use App\Article;
?>

<link rel="stylesheet" href="../public/css/actualites_ajax.css" />

<section>
    <div id="ajax_index" class="flex_container"></div>
    <p id="precedent_bouton"><i class="fa fa-chevron-left" aria-hidden="true"></i></p>
    <p id="suivant_bouton"><i class="fa fa-chevron-right" aria-hidden="true"></i></p>
</section>

<?php

$datas = Article::getActualites();
$reste = (count($datas)%3);
if(count($datas)==1 || count($datas)==2 || count($datas)==3){
    $nombre_actualite = 1;
}elseif($reste == 0){
    $nombre_actualite = count($datas)-(count($datas)%3)-3;
}else{
    $nombre_actualite = count($datas)-(count($datas)%3);
}

?>

<script>
    $(document).ready(function (){
        if(i == undefined) {
            var i = 0;
            affichage_bouton(i);
            $.ajax({
                url: "../pages/actualites/actualites_ajax.php", //Chemin vers le fichier qui doit �tre affich� dans la zone AJAX
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
                url: "../pages/actualites/actualites_ajax.php",
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

<script src="js/css_dynamique.js"></script>
