<?php

use App\Autoloader;
use App\Gestion;

require '../app/Autoloader.php';
Autoloader::register();

$id = $_GET['id'];
$titre = $_POST['titre_editeur'];
$categorie = $_POST['categorie_editeur'];
$vignette = $_POST['vignette_editeur'];
$contenu = $_POST['contenu_editeur'];
$date = $_POST['date_publication'];

    # --- Verification de l'existence d'une page --- #

    if($categorie == 'Festival'){

        $sous_categorie = $_POST['sous_categorie_festival'];

        if($sous_categorie == 'Prochaine'){
            Gestion::interchangeEdition();
        }

        if($date == ''){
            $stmt = 'UPDATE articles SET titre=:titre, categorie=:categorie, sous_categorie_festival=:sous_categorie_festival, contenu=:contenu, vignette=:vignette WHERE id=' . $id;
            $attr = array(
                "titre"=>$titre,
                "categorie"=>$categorie,
                "sous_categorie_festival"=>$sous_categorie,
                "contenu"=>$contenu,
                "vignette"=>$vignette
            );
        } else {
            $stmt = 'UPDATE articles SET titre=:titre, categorie=:categorie, sous_categorie_festival=:sous_categorie_festival, contenu=:contenu, vignette=:vignette, date=:date WHERE id=' . $id;
            $attr = array(
                "titre"=>$titre,
                "categorie"=>$categorie,
                "sous_categorie_festival"=>$sous_categorie,
                "contenu"=>$contenu,
                "vignette"=>$vignette,
                "date"=>$date
            );
        }


    }else{
        if($categorie == 'Association' || $categorie == 'Ateliers'){
        }

        if($date == ''){
            $stmt = 'UPDATE articles SET titre=:titre, categorie=:categorie, sous_categorie_festival=:sous_categorie_festival, contenu=:contenu, vignette=:vignette WHERE id=' . $id;
            $attr = array(
                "titre"=>$titre,
                "categorie"=>$categorie,
                "contenu"=>$contenu,
                "vignette"=>$vignette
            );
        } else {
            $stmt = 'UPDATE articles SET titre=:titre, categorie=:categorie, contenu=:contenu, vignette=:vignette, date=:date WHERE id=' . $id;
            $attr = array(
                "titre"=>$titre,
                "categorie"=>$categorie,
                "contenu"=>$contenu,
                "vignette"=>$vignette,
                "date"=>$date
            );
        }
    }

    $req = Gestion::EditArticle($stmt, $attr);

    header("Location: ../public/index.php?p=admin");
?>