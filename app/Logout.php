<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 14/03/2017
 * Time: 10:47
 */
session_start();
session_destroy();

header ('Location: ../public/index.php?p=home');
?>