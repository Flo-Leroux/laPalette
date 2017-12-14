<?php

/** MISE EN PLACE DES COULEURS DU SITE WEB */

use App\Autoloader;
use App\Gestion;

require '../app/Autoloader.php';
Autoloader::register();

$expiration_cookie = time()+7*24*3600;
$opacityColor = 0.46;
$opacity_HoverColor = 0.75;

$AccueilColor = Gestion::getColor('AccueilColor');
$AssociationColor = Gestion::getColor('AssociationColor');
$FestivalColor = Gestion::getColor('FestivalColor');
$CagetteColor = Gestion::getColor('CagetteColor');
$AteliersColor = Gestion::getColor('AteliersColor');

setcookie ('ActualitesColor', 'rgba('.$AccueilColor[3].','.$AccueilColor[4].','.$AccueilColor[5].','. $opacityColor, $expiration_cookie);
setcookie ('AssociationColor', 'rgba('.$AssociationColor[3].','.$AssociationColor[4].','.$AssociationColor[5].','. $opacityColor, $expiration_cookie);
setcookie ('FestivalColor', 'rgba('.$FestivalColor[3].','.$FestivalColor[4].','.$FestivalColor[5].','. $opacityColor, $expiration_cookie);
setcookie ('CagetteColor', 'rgba('.$CagetteColor[3].','.$CagetteColor[4].','.$CagetteColor[5].','. $opacityColor, $expiration_cookie);
setcookie ('AteliersColor', 'rgba('.$AteliersColor[3].','.$AteliersColor[4].','.$AteliersColor[5].','. $opacityColor, $expiration_cookie);

setcookie ('Festival_HoverColor', 'rgba('.$FestivalColor[3].','.$FestivalColor[4].','.$FestivalColor[5].','. $opacity_HoverColor, $expiration_cookie);
setcookie ('Cagette_HoverColor', 'rgba('.$CagetteColor[3].','.$CagetteColor[4].','.$CagetteColor[5].','. $opacity_HoverColor, $expiration_cookie);

$R = 255 - $AccueilColor[3];
$G = 255 - $AccueilColor[4];
$B = 255 - $AccueilColor[5];
setcookie ('Actualites_ExtraitColor', 'rgba('.$R.', '.$G.', '.$B.', '.$opacity_HoverColor, $expiration_cookie);



if(isset($_GET['p'])){
    $p = $_GET['p'];
}elseif(!isset($_GET['p'])){
    $p = 'home';
} else {
    $p = 'erreur';
}

ob_start();

if ($p == 'home'){
    require '../pages/home.php';
    ?>
<?php
}
elseif ($p == 'article') {
    require '../pages/article.php';

} elseif ($p == 'association') {    #ASSOCIATION
    require '../pages/association.php';

} elseif ($p == 'naissance') {      #FESTIVAL
    require '../pages/festival.php';
} elseif ($p == 'valeurs') {
    require '../pages/festival.php';
} elseif ($p == 'concept') {
    require '../pages/festival.php';
} elseif ($p == 'prochaine') {
    require '../pages/edition_festival.php';
} elseif ($p == 'precedentes') {
    require '../pages/edition_festival.php';

} elseif ($p == 'cagette') {        #CAGETTE
    require '../pages/cagette.php';

} elseif ($p == 'ateliers') {       #ATELIERS
    require '../pages/ateliers.php';

} elseif ($p == 'new') {            #ADMIN
    require '../pages/admin/new.php';
} elseif ($p == 'edit') {
    require '../pages/admin/edit.php';
} elseif ($p == 'delete') {
    require '../pages/admin/delete.php';
} elseif ($p == 'admin') {
    require '../pages/admin/admin.php';
} elseif ($p == 'parametre') {
    require '../pages/admin/parametre.php';
}

elseif ($p == 'login'){
    require '../pages/admin/login.php';
}


elseif ($p == 'erreur'){
    require '../pages/erreur.php';
}
else {
    require '../pages/erreur.php';
}

$content = ob_get_clean();

if ($p == 'new' || $p == 'edit' || $p == 'admin' || $p == 'delete' || $p == 'parametre') {            #ADMIN
    require '../pages/templates/admin_template.php';
} elseif ($p == 'login'){
    require '../pages/templates/login_template.php';
} else {                                      #VISITEUR
    require '../pages/templates/default.php';
}


?>

<script src="js/css_dynamique.js"></script>
