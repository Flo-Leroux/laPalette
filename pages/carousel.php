<meta charset="UTF-8">
<!-- Liens vers les fichiers CSS et JS -->
<link rel="stylesheet" href="../public/css/caroussel.css" />
<link rel="stylesheet" href="../plugin/font-awesome/css/font-awesome.min.css" />
<script src="../public/lib/jquery-1.12.1.min.js"></script>
<!-- FIN Liens -->

<!-- --- CAROUSEL généré avec les photo du dossier carousel --- -->

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
    echo 'Le dossier n\' a pas pu être ouvert';
}

?>
<h1> Lapalette< </h1>
<h1 id="ombre_titre"> Lapalette< </h1>

<div id="chevron-bas">
    <i id="chevron-bas-1" class="fa fa-chevron-down" aria-hidden="true"></i>
    <i id="chevron-bas-2" class="fa fa-chevron-down" aria-hidden="true"></i>
    <i id="chevron-bas-3" class="fa fa-chevron-down" aria-hidden="true"></i>
</div>