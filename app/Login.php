<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 14/03/2017
 * Time: 10:27
 */

use App\Autoloader;
use App\Gestion;
require 'Autoloader.php';
Autoloader::register();

session_start();

$log = Gestion::getLog();

$login = $_POST['login'];
$mdp = $_POST['mdp'];

if($log[1] == $login && $log[2] == $mdp){
    $_SESSION['login'] = $login;
    $_SESSION['mdp'] = $mdp;
    header ('Location: ../public/index.php?p=admin');
}else{
    header ('Location: ../public/index.php?p=home');
}