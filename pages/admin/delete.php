<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 27/02/2017
 * Time: 16:03
 */
session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
    header ('Location: ../public/index.php?p=login');
}

$id = $_GET['id'];
$stmt = 'DELETE FROM articles WHERE id=?';

\App\Gestion::DeleteArticle($stmt, $id);

header ('Location: ../public/index?p=admin');
