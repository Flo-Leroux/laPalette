<?php
	namespace App;
	
	class Gestion {

	    public static function  VerifExistantCategorie($categorie){
	        return App::getDb()->select('SELECT * FROM articles WHERE categorie="' . $categorie . '"');
        }

        public static function  VerifExistantSCategorie($sous_categorie){
            return App::getDb()->select('SELECT * FROM articles WHERE sous_categorie_festival="' . $sous_categorie . '"');
        }

        public static function interchangeEdition(){
            $prochaine_actuelle = App::getDb()->query('SELECT id FROM articles WHERE sous_categorie_festival = "Prochaine"', 'App\Article');
            $id = $prochaine_actuelle[0]->id;

            App::getDb()->insertInto('UPDATE articles SET sous_categorie_festival = "Precedentes" WHERE articles.id = ?', [$id]);
        }

		public static function NewArticle($statement, $attributes){
			return App::getDb()->insertInto($statement, $attributes);
		}

		public static function EditArticle($statement, $attributes){
		    return App::getDb()->insertInto($statement, $attributes);
        }

		public static function DeleteArticle($stmt, $id){
            return App::getDb()->insertInto($stmt, [$id]);
        }

        public static function getDateCourante(){
            $date = new \DateTime();
            $heure = $date->format('H') + 1;
            $temporaire = $date->format('Y-m-d ' . $heure . ':i:s');
            return $temporaire;
        }

        public static function getUrlVignette($vignette){
            return substr($vignette, 26);
        }

        public static function postColor($statement, $attributes){
            return App::getDb()->insertInto($statement, $attributes);
        }

        public static function getColor($nom){
            return App::getDb()->selectOne('SELECT * FROM colors WHERE nom="' . $nom . '"');
        }

        public static function getLog(){
            return App::getDb()->selectOne('SELECT * FROM login');
        }
	}
?>