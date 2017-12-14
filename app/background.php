<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 10/03/2017
 * Time: 16:33
 */

use App\Autoloader;
use App\Gestion;
#require 'Autoloader.php';
#Autoloader::register();

$files = glob('../source/background/*.*');
$nb_files = count($files);

$select_img = mt_rand(0, $nb_files-1);

$format_img = format_img($files[$select_img]);
$lien_absolute_img = '<img style=" z-index: -10;'.base_style_img($format_img).'position: fixed;" src="http://localhost/lapalette/' . substr($files[$select_img], 3) . '" >';

$type_affichage = mt_rand(0, 2);

$color_base = recuperation_color();

$R = $color_base[3];
$G = $color_base[4];
$B = $color_base[5];

$couleur2 = 'rgba('.$R.', '.$G.', '.$B.', 0.5)';

$R = 255 - $R;
$G = 255 - $G;
$B = 255 - $B;

$couleur = 'rgba('.$R.', '.$G.', '.$B.', 0.5)';

if($type_affichage == (1 || 2)){
    affichage_2_cercle($lien_absolute_img, $couleur, $couleur2);
}else{
    affichage_rectangle($lien_absolute_img, $couleur);
}


function affichage_rectangle($lien_img, $couleur){
    $res = creation_rectangle($couleur);

    $rotation = mt_rand(0, 1);
    if($rotation == 0){
        $res = rotation_rectangle($res);
    }

    echo $lien_img;
    echo $res;
}

function affichage_2_cercle($lien_img, $couleur, $couleur2){
    $cercle1 = creation_cercle($couleur);
    $cercle2 = creation_cercle($couleur2);

    echo $lien_img;
    echo $cercle1[3];
    echo $cercle2[3];
}


function creation_cercle($color){
    $width = mt_rand(40, 65);
    $padding_bottom = $width;
    $top = position();
    $left = position ();
    $div = '<div style="width:'.$width.'%; padding-bottom:'.$padding_bottom.'%; top:'.$top.'%; left:'.$left.'%; background-color: '.$color.'; z-index: -9; position: fixed; border-radius: 50%;"></div>';
    return [$width, $top, $left, $div];
}

function creation_rectangle($color){
    $height = mt_rand(20, 75);
    $top = position();
    $div = '<div style="width: 200%; top:'.$top.'%; height:'.$height.'%; background-color: '.$color.'; z-index: -9; position: fixed; left: -50%;"></div>';

    return $div;
}

function rotation_rectangle($rectangle){
    $rectangle = substr($rectangle, 0, -8);

    $sens = mt_rand(0, 1);
    if($sens == 0){
        $sens = '-';
    }else{
        $sens = '+';
    }

    $degree = mt_rand(5, 30);
    $rectangle = $rectangle.'transform: rotate('.$sens.$degree.'deg)"></div>';
    return $rectangle;
}

function base_style_img($format){
    if($format == 'landscape'){
        return 'width: 100%;';
    }else if($format == 'portrait'){
        return 'height: 100%;';
    }else{
        return 'min-height: 100%; max-width: 100%;';
    }
}

function position(){
    return mt_rand(-10, 90);
}


function format_img($img){
    $img_array = getimagesize($img);
    if($img_array[0]>$img_array[1]){
        return 'landscape';
    }else if($img_array[0]<$img_array[1]){
        return 'portrait';
    }else{
        return 'square';
    }
}

function recuperation_color(){
    $p = $_GET['p'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    if($p == 'home' || $p == 'article' || $p == 'new' || $p == 'admin'){
        return Gestion::getColor('AccueilColor');
    }else if($p == 'association' || $p == 'edit' && $id == 125){
        return Gestion::getColor('AssociationColor');
    }else if($p == 'ateliers'){
        return Gestion::getColor('AteliersColor');
    }else if($p == 'cagette'){
        return Gestion::getColor('CagetteColor');
    }else if($p == ('naissance' || 'valeurs' || 'concept' || 'precedentes' || 'prochaine') || $p == 'edit' && $id == (123 || 126 || 127)){
        return Gestion::getColor('FestivalColor');
    }
}
