<?php
    require_once 'app/Autoloader.php';

    App\Autoloader::register();

    /* Initialisation des objets */
    $db = new \App\Database('lapalette');
    /* Fin de l'initialisation */

?>