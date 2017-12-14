<?php

    use App\Autoloader;
    use App\Gestion;

    require '../app/Autoloader.php';
    Autoloader::register();

    $titre = $_POST['titre_editeur'];
    $categorie = $_POST['categorie_editeur'];
    $vignette = $_POST['vignette_editeur'];
    $contenu = $_POST['contenu_editeur'];
    $date = $_POST['date_publication'];

    if($titre == '' || $vignette == '' || $contenu == ''){  #Vérification des champs titre, vignette et contenu
        ?>
            <script>alert('Erreur');</script>
        <?php
    }else{

        # --- Verification de l'existence d'une page --- #

        if($categorie == 'Festival'){

            $sous_categorie = $_POST['sous_categorie_festival'];

            if($sous_categorie == 'Naissance' || $sous_categorie == 'Valeurs' || $sous_categorie == 'Concepts'){
                $result = Gestion::VerifExistantSCategorie($sous_categorie);
                if(count($result) >= 1){
                    echo "Une page " . $sous_categorie . " de Festival existe déjà";
                    echo "<a href='../public/index.php?p=editeur'>Retour</a>";
                    die();
                }
            }

            if($sous_categorie == 'Prochaine'){
                Gestion::interchangeEdition();
            }

            if($date == ''){
                $stmt = 'INSERT INTO articles(titre, categorie, sous_categorie_festival, contenu, vignette) VALUES (:titre, :categorie, :sous_categorie_festival, :contenu, :vignette)';
                $attr = array(
                    "titre"=>$titre,
                    "categorie"=>$categorie,
                    "sous_categorie_festival"=>$sous_categorie,
                    "contenu"=>$contenu,
                    "vignette"=>$vignette
                );
            } else {
                $stmt = 'INSERT INTO articles(titre, categorie, sous_categorie_festival, contenu, vignette, date) VALUES (:titre, :categorie, :sous_categorie_festival, :contenu, :vignette, :date)';
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
                $result = Gestion::VerifExistantCategorie($categorie);
                if(count($result) >= 1){
                    echo "Une page " . $categorie . " existe déjà";
                    echo "<a href='../public/index.php?p=editeur'>Retour</a>";
                    die();
                }
            }

            if($date == ''){
                $stmt = 'INSERT INTO articles(titre, categorie, contenu, vignette) VALUES (:titre, :categorie, :contenu, :vignette)';
                $attr = array(
                    "titre"=>$titre,
                    "categorie"=>$categorie,
                    "contenu"=>$contenu,
                    "vignette"=>$vignette
                );
            } else {
                $stmt = 'INSERT INTO articles(titre, categorie, contenu, vignette, date) VALUES (:titre, :categorie, :contenu, :vignette, :date)';
                $attr = array(
                    "titre"=>$titre,
                    "categorie"=>$categorie,
                    "contenu"=>$contenu,
                    "vignette"=>$vignette,
                    "date"=>$date
                );
            }
        }

        $req = Gestion::NewArticle($stmt, $attr);


        header("Location: ../public/index.php?p=admin");
    }
    header("Location: ../public/index.php?p=new")
?>