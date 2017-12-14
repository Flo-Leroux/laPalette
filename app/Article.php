<?php
	namespace App;
	
	class Article {

		public static function getLast(){
			return App::getDb()->query("SELECT * FROM 'articles' WHERE 'id'>10", __CLASS__);
		}

		public static function getArticle(){
			return App::getDb()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Database', true);
		}

		public static function getCategorie(){
            return App::getDb()->prepare('SELECT * FROM articles WHERE categorie = ?', [$_GET['p']], 'App\Database', true);
        }

        public static function getFestivalSC(){
		    return App::getDb()->prepare('SELECT * FROM articles WHERE sous_categorie_festival = ? ORDER BY date DESC', [$_GET['p']], 'App\Article', false);
        }

        public static function getActualites(){
		    return App::getDb()->query('SELECT * FROM articles WHERE date <= CURRENT_TIMESTAMP ORDER BY date DESC', 'App\Article');
        }

        public static function getAllActualites(){
            return App::getDb()->query('SELECT * FROM articles ORDER BY date DESC', 'App\Article');
        }

        public static function getCagette(){
            return App::getDb()->query('SELECT * FROM articles WHERE categorie="Cagette" ORDER BY date DESC', 'App\Article');
        }

		public function __get($key){
			$method = 'get' . ucfirst($key);
			$this->$key = $this->$method();
			return $this->$key;
		}

		public function getUrl(){
			return '../public/index.php?p=article&id=' . $this->id;
		}

		public function getExtrait(){
            $pattern = '#\<(.*)\>#sU'; # REGEX enlever les balises html
            $html = preg_replace($pattern, "", $this->contenu); # Application de la REGEX sur le contenu entier
			$html = substr($html, 0, 250); # Création d'un extrait de 250 caractères
            $html = '<p>' . $html . '...</p>'; # Entoure l'extrait de balises HTML <p>
            return $html;
		}

		public static function justDate($date){
            return substr($date, 0, 10);
        }

		public static function getDate($date){
		    $base = self::justDate($date);
            $annee = substr($base, 0, 4);
            $moi = substr($base, 5, 2);
            $jour = substr($base, 8, 2);

            $date_sec = $jour . '-' . $moi . '-' . $annee;

            return $date_sec;
        }

        public static function getDateTime($date){
		    $base = substr($date, 0, -3);
		    $date = substr($base, 0, 10);
		    $time = substr($base, -5);

		    return $date.'T'.$time;
        }

        public static function enleverEspace($chaine){
		    return str_replace(' ', '_', $chaine);
        }
	}
?>