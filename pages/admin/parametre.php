<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 06/03/2017
 * Time: 23:44
 */

    use App\Gestion;

    session_start();

    if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
        header ('Location: ../public/index.php?p=login');
    }

    $AccueilColor = Gestion::getColor('AccueilColor');
    $AssociationColor = Gestion::getColor('AssociationColor');
    $FestivalColor = Gestion::getColor('FestivalColor');
    $CagetteColor = Gestion::getColor('CagetteColor');
    $AteliersColor = Gestion::getColor('AteliersColor');
?>

<script src="js/css_dynamique.js"></script>
<link rel="stylesheet" href="../public/css/admin.css" />

<title>Editeur - <?= $datas->titre ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8" />
<script src="../public/lib/jquery-1.12.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="../public/css/editeur.css"/>

<form action="../app/Color.php" method="post">
    <fieldset id="page">
        <h1 id="titre">Paramètre couleur</h1>
        <fieldset class="parametre_categorie">
            <label>
                <input name="AccueilColor" type="color" value="<?= $AccueilColor[2]; ?>">
                <p>Couleur Accueil/Actualités</p>
            </label>
        </fieldset>

        <fieldset class="parametre_categorie">
            <label>
                <input name="AssociationColor" type="color" value="<?= $AssociationColor[2]; ?>">
                <p>Couleur Association</p>
            </label>
        </fieldset>

        <fieldset class="parametre_categorie">
            <label>
                <input name="FestivalColor" type="color" value="<?= $FestivalColor[2]; ?>">
                <p>Couleur Festival</p>
            </label>
        </fieldset>

        <fieldset class="parametre_categorie">
            <label>
                <input name="CagetteColor" type="color" value="<?= $CagetteColor[2]; ?>">
                <p>Couleur Cagette</p>
            </label>
        </fieldset>

        <fieldset class="parametre_categorie">
            <label>
                <input name="AteliersColor" type="color" value="<?= $AteliersColor[2]; ?>">
                <p>Couleur Ateliers</p>
            </label>
        </fieldset>

        <fieldset class="sous_menu_titre">
            <button value="submit">Confirmer</button>
        </fieldset>

    </fieldset>
</form>