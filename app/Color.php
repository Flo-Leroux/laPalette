<?php

    use App\Autoloader;
    use App\Gestion;

    require '../app/Autoloader.php';
    Autoloader::register();

    $AccueilColor = $_POST['AccueilColor'];
    $AssociationColor = $_POST['AssociationColor'];
    $FestivalColor = $_POST['FestivalColor'];
    $CagetteColor = $_POST['CagetteColor'];
    $AteliersColor = $_POST['AteliersColor'];

    postBd('AccueilColor', $AccueilColor, hexaTodec($AccueilColor));
    postBd('AssociationColor', $AssociationColor, hexaTodec($AssociationColor));
    postBd('FestivalColor', $FestivalColor, hexaTodec($FestivalColor));
    postBd('CagetteColor', $CagetteColor, hexaTodec($CagetteColor));
    postBd('AteliersColor', $AteliersColor, hexaTodec($AteliersColor));

    function hexaTodec($hexa){
        $RGB = substr($hexa, 1);
        $R = hexdec(substr($RGB, 0, 2));
        $G = hexdec(substr($RGB, 2, 2));
        $B = hexdec(substr($RGB, 4, 2));
        return [$R, $G, $B];
    }

    function postBd($nom, $hex, $result){
        $stmt = 'UPDATE colors SET nom=:nom, hex=:hex, R=:R, G=:G, B=:B WHERE nom=:nom';
        $attr = array(
            "nom"=>$nom,
            "hex"=>$hex,
            "R"=>$result[0],
            "G"=>$result[1],
            "B"=>$result[2]
        );

        Gestion::postColor($stmt, $attr);
    }

    header("Location: ../public/index.php?p=parametre");
?>